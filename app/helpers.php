<?php

use Illuminate\Support\Facades\Cache;
use Syntax\SteamApi\Facades\SteamApi;

/**
 * Created by PhpStorm.
 * User: LukMcCall
 * Date: 11.08.2018
 * Time: 12:42
 */

function getConnection($conn){
    return new \App\Database\DatabaseManager($conn);
}

function randomBootsrapColor(){
    $colors = [ 'primary', 'info', 'success', 'danger', 'warning' ];
    return array_rand($colors);
}

function getRoute($id, $param = ""){

//    dd(route('page',\App\Engine\Page::getPageUrlById($id)));
    return route('page',['url'=>\App\Engine\Page::getPageUrlById($id),'p1'=>$param]);

}

function steamID3($steamid){
    $newSteamid = null;
    try{
        $newSteamid = SteamApi::convertId($steamid,"ID3");
    } finally {
        return $newSteamid;
    }
}

function steamID32($steamid){
    $newSteamid = null;
    try{
        $newSteamid = SteamApi::convertId($steamid,"ID32");
    } finally {
        return $newSteamid;
    }
}

function steamID64($steamid){
    $newSteamid = null;
    try{
        $newSteamid = SteamApi::convertId($steamid,"ID64");
    } finally {
        return $newSteamid;
    }
}

function getStyle($id){
    switch ($id){
        case 0:
            return "Zwykły";
        case 1:
            return "[R] Zwykły";
        case 2:
            return "[VIP][R] Rocket Jump";
        case 3:
            return "[VIP][R] Speedrun";
        case 4:
            return "Zwolnione Tempo";
        case 5:
            return "[R] Zwolnione Tempo";
        case 6:
            return "Niska Grawitacja";
        case 7:
            return "[R] Niska Grawitacja";
        case 8:
            return "400 Prędkość";
        case 9:
            return "Scroll";
        case 10:
            return "Bokiem";
        case 11:
            return "Pół-Bokiem";
        case 12:
            return 'Tylko - "W"';
        case 13:
            return 'Tylko - "D"';
    }
    return "Nieznany styl";
}

function getLowAwatar($steamid){
    return Cache::remember(
        "Avatar-".$steamid,
        60 * 24 * 7,
        function () use($steamid){
            return SteamApi::user($steamid)->GetPlayerSummaries()[0]->avatarMediumUrl;
        });
}


//todo: maybe add same caching?
function getTopPlayersFromRecords($records){
    $players = array();
    foreach ($records as $map)
        foreach ($map as $record){
            if(!isset($players[$record->auth])){
                $players[$record->auth] = new stdClass();
                $players[$record->auth]->name = $record->name;
                $players[$record->auth]->points = 1;
                $players[$record->auth]->auth = $record->auth;
            }
            else
                $players[$record->auth]->points++;
        }
    usort($players, function ($a, $b){
        return $b->points > $a->points;
    });
    return array_slice($players,0, 10);
}