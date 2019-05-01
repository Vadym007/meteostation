<?php

namespace App\Models;

use App\Components\DB;
use Carbon\Carbon;
use App\Components\Config;

class Indicator
{
    private const TABLE = 'indicators';

    public static function create(array $params)
    {

        $params['created_at'] = Carbon::now(Config::get('app.timezone'));
        $db = DB::getInstance();
        $result = $db->insert(self::TABLE, $params);
 
        var_dump($result);
    }

    public static function all()
    {
        $db = DB::getInstance();
        $sql = "SELECT * FROM ". self::TABLE;
        return $db->select($sql);
    }

    public static function last()
    {
        $all = self::all();
        
        if(count($all)) {
            return $all[count($all)-1];
        }
        
        return null;
    }
}