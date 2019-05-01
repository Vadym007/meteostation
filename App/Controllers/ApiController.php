<?php

namespace App\Controllers;

use App\Components\Config;
use App\Models\Indicator;
class ApiController 
{
    public function set()
    {
        $key = Config::get('app.api_key');

        if( isset($_GET['key']) && $_GET['key'] == $key ){
            return Indicator::create([
                'temperature' => $_GET['temperature'],
                'humidity' => $_GET['humidity'],
                'light' => $_GET['light'],
            ]);
        }

        return false;
    }
}