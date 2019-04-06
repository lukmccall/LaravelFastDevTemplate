<?php
/**
 * Created by PhpStorm.
 * User: LukMcCall
 * Date: 11.08.2018
 * Time: 12:33
 */

namespace App\Database;


use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class DatabaseManager{

    public static function parseExpression($expression){
        $builder = json_decode($expression);
        if(isset($builder->cache)){
            return Cache::remember(
                                    $builder->cache->key,
                                    $builder->cache->time,
                                    function () use ($builder){
                                        return self::{$builder->method}($builder);
                                    });
        }
        return self::{$builder->method}($builder);
    }

    private static function useKey($key,$data){
        $newData = array();
//        dd($data);
        if(is_array($data) || count($data) > 1){
            foreach($data as $rec)
                if(isset($newData[$rec->{$key}]))
                    array_push($newData[$rec->{$key}],$rec);
                else
                    $newData[$rec->{$key}] = array($rec);
        }
        elseif($data != null && isset($data->{$key})){
//            dd($data);
            $newData[$data->{$key}] = array($data);
        }
        return $newData;
    }

    /*
       {
         'connection':@req,
         'method':'simpleGet',
         'table':@string @req,
         'what':@string @req,
         'limit':@int,
         'groupBy':@string,
         "orderBy":@string,
         "where":@string,
         "useKey":@string
       }
     */
    public static function simpleGet($builder){

        $q = DB::connection($builder->connection)->table($builder->table)->selectRaw($builder->what);
        if(isset($builder->limit))
            $q->limit($builder->limit);
        if(isset($builder->groupBy))
            $q->groupBy($builder->groupBy);
        if(isset($builder->where))
            $q->whereRaw($builder->where);
        if(isset($builder->orderBy))
            $q->orderByRaw($builder->orderBy);


        $result = $q->get();
//        if($result->isEmpty())
//            return null;
        foreach ($result as $key=>$res)
            if(count(get_object_vars($res)) === 1) {
                $res = (array)$res;
                $result[$key] = reset($res);
            }
        if(count($result) === 1)
            $result = $result[0];

        if(isset($builder->useKey))
            return self::useKey($builder->useKey,$result);
        return $result;

    }
    /*
      {
         'connection':@req,
         'method':'rawSelect',
         'sql':@string @req,
         "useKey":@string
      }
     */
    public static  function rawSelect($builder){
        $sql = $builder->sql;
        if(isset($builder->useKey))
            return self::useKey($builder->useKey,DB::connection($builder->connection)->select($sql));
        return DB::connection($builder->connection)->select($sql);
    }
}