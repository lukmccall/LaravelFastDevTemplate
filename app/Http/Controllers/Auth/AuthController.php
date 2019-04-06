<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Invisnik\LaravelSteamAuth\SteamAuth;

class AuthController extends Controller{
    /**
    * The SteamAuth instance.
    *
    * @var SteamAuth
    */
    protected $steam;

    /**
    * The redirect URL.
    *
    * @var string
    */
    protected $redirectURL = '/';

    /**
    * AuthController constructor.
    *
    * @param SteamAuth $steam
    */
    public function __construct(SteamAuth $steam){
        $this->steam = $steam;
    }

    /**
    * Redirect the user to the authentication page
    *
    * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
    */
    public function redirectToSteam(){
        return $this->steam->redirect();
    }

    /**
     * Get user info and log in
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function handle(Request $request){
        if ($this->steam->validate()) {
            $info = $this->steam->getUserInfo();

            if (!is_null($info)) {
                $user = new \stdClass();
                $user->profileUrl = $info['profileurl'];
                $user->personaName = $info['personaname'];
                $user->avatarUrl = $info['avatar'];
                $user->avatarMediumUrl = $info['avatarmedium'];
                $user->avatarFullUrl = $info['avatarfull'];
                $user->realName = $info['realname'];
                $user->steamId = $info['steamID64'];

                if($info['personastate'] == 0)
                    $user->personaState = '<span class="text-error">Offline</span>'; 
                elseif($info['personastate'] == 1)
                    $user->personaState = '<span class="text-success">Online</span>';
                elseif($info['personastate'] == 2)
                    $user->personaState = '<span class="text-warning">Busy</span>';
                elseif($info['personastate'] == 3)
                    $user->personaState = '<span class="text-error">Away</span>';
                elseif($info['personastate'] == 4)
                    $user->personaState = '<span class="text-error">Snooze</span>';
                elseif($info['personastate'] == 5)
                    $user->personaState = '<span class="text-success">Looking to trade</span>';
                elseif($info['personastate'] == 6)
                    $user->personaState = '<span class="text-success">Looking to play</span>';
                else
                    $user->personaState = '<span class="text-error">Error</span>';
                
                $request->session()->put('user', $user);
                return redirect($this->redirectURL); // redirect to site
            }
        }
        return $this->redirectToSteam();
    }

    public function logout(Request $request){
        $request->session()->forget('user');
        return redirect()->route("page", "");
    }
}