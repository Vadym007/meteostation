<?php

namespace App\Controllers;

use App\Components\TelegramBot;

class TelegramController
{
    public function answer()
    {
        $bot = new TelegramBot(TOKEN);
        
        $json = file_get_contents('php://input');
        $request = json_decode($json, true);
                
        if(  in_array($command = $request['message']['text'], TelegramBot::commandsList()) ) {
            return $bot->sendMessage($request['message']['chat']['id'], $bot->answerForCommand($command) );
        }

        return false;
    }
}