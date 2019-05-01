<?php

namespace App\Models;

use App\Components\DB;

class Indicator
{
    private const TABLE = 'indicators';

    public static function create(array $params)
    {

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
}