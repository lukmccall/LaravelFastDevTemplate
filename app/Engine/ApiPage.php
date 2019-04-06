<?php
/**
 * Created by PhpStorm.
 * User: LukMcCall
 * Date: 13.08.2018
 * Time: 14:02
 */

namespace App\Engine;


use App\Database\DatabaseManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ApiPage extends Page{
    public $return;

    public function __construct(array $config){
        $this->id = $config['id'];
        $this->title = $config['title'];
        $this->return = $config['return'];
        $this->input = Input::all();
    }

    private function getDependencyApi($return){
        $this->data = DatabaseManager::parseExpression(parent::addVaribleToExpression($return));
//        $this->data = (object)$this->data;
    }

    public function render(Request $request){
        $this->getDependencyApi($this->return);
        $api = new \stdClass();
        $api->api = $this->data;
        return response()->json($api);
    }
}