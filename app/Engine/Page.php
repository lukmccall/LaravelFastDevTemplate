<?php
/**
 * Created by PhpStorm.
 * User: LukMcCall
 * Date: 13.08.2018
 * Time: 12:35
 */

namespace App\Engine;

use App\Database\DatabaseManager;
use function GuzzleHttp\Psr7\str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

abstract class Page{

    public $id;
    public $title;
    protected $file;
    protected $url;
    public $data;
    protected $with;
    public $navbarLinks;
    public $input;

    public function __construct(array $config){
        $this->id = $config['id'];
        $this->title = $config['title'];
        $this->file = $config['file'];
        $this->url = $config['url'];
        $this->with = $config['with'];
        $this->navbarLinks = self::getNavbarLinks(); // todo: idk if it's good or not?
        $this->input = Input::all();

    }

    private function getDependency($with){
        $this->data = array();
        if($with != null)
            foreach ($with as $var => $expression)
                $this->data[$var] = DatabaseManager::parseExpression($this->addVaribleToExpression($expression));
        $this->data = (object)$this->data;
    }

    public function render(Request $request){
        $this->getDependency($this->with);
        return view('pages.'.$this->file, ['page'=>$this]);
    }

    private static function getPages(){
        return config('pages');
    }

    private static function getNavbar(){
        return config('navbar');
    }

    public static function pageExist($url){
        foreach(self::getPages() as $p){
            if($p['url'] == $url)
                if(isset($p['type']))
                    if($p['type'] == 'profile')
                        return new Profile($p);
                    elseif($p['type'] == 'api')
                        return new ApiPage($p);
                    else
                        return new HTMLPage($p);
        }
        return null;
    }

    public static function getPageUrlById($id){
        foreach(self::getPages() as $p)
            if($p['id'] == $id)
                return $p['url'];
        return "";
    }

    public static function getNavbarLinks(){
        $navbar = array();
        //todo: maybe add same caching?
        foreach(self::getNavbar() as $p){
            if(isset($p['to']))
                $p['url'] = route('page', self::getPageUrlById($p['to']));
            array_push($navbar, $p);
        }
        usort($navbar, function($a,$b){
            return $a['order'] - $b['order'];
        });
        return $navbar;
    }

    protected function addVaribleToExpression($expression){
        $offset = 0;
        $closePos = 0;
        while(($offset = strpos($expression, "<?", $closePos)) !== false){
            $closePos = strpos($expression, "?>", $offset);
            if( $closePos === false ) break;
            $length = $closePos - $offset - 2;
            $tag = explode("|", substr($expression,$offset + 2,$length));
            $vars = explode("->",$tag[0]);
            $var = $this;
            foreach ($vars as $v)
                $var = $var->{$v};

            for($i = 1; $i < count($tag); $i++){
                switch ($tag[$i]){
                    case "steamID3":
                        $var = steamID3($var);
                    break;
                    case "steamID32":
                        $var = steamID32($var);
                    break;
                    case "steamID64":
                        $var = steamID64($var);
                    break;
                    case "string":
                        $var = '\"'.$var.'\"';
                    break;
                }

            }
//            $var = mysql_escape_string($var);
            $expression = substr_replace($expression,$var,$offset,$closePos-$offset + 2);
            $closePos = $offset + strlen($var);
//            dd($expression);
        }
        return $expression;
    }

}