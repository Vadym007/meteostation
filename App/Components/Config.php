<?php

namespace App\Components;

class Config
{
    protected const CONFIG_DIR = __DIR__ . '/../../config/';

    public static function get(string $param)
    {
        $parts = explode('.', $param);
        $fileName = $parts[0];
        $key = $parts[1];

        return static::load($fileName)[$key];
    }

    public static function all(string $fileName)
    {
        return static::load($fileName);
    }   

    private static function load($fileName)
    {
        return require_once(self::CONFIG_DIR . $fileName . '.php');
    }
}