<?php
/**
 * Created by PhpStorm.
 * User: LukMcCall
 * Date: 13.08.2018
 * Time: 13:59
 */

namespace App\Engine;


use Illuminate\Http\Request;
use Syntax\SteamApi\Facades\SteamApi;

class Profile extends Page{
    public $profile;

    public function __construct(array $config){
        parent::__construct($config);
    }

    public function render(Request $request, $steamid = null){
        try{
            if($steamid != null)
                $this->profile = SteamApi::user($steamid)->GetPlayerSummaries()[0];
            else if($request->session()->has('user'))
//                dd($request->session()->all());
                $this->profile = $request->session()->get('user');
            else
                return redirect()->route('auth.steam',"");
        } catch (\Exception $e){
            // todo: add error msg
            return redirect()->route('page', "");
        }
//        dd($this);
        return parent::render($request);
    }
}