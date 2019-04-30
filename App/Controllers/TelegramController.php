<?php

namespace App\Controllers;

use App\Components\TelegramBot;
use App\Components\Config;

class TelegramController
{
    public function webhook()
    {        
        $bot = new TelegramBot(Config::get('telegram.token'));
        $json = file_get_contents('php://input');
        $request = json_decode($json, true);
        if(  in_array($command = $request['message']['text'], TelegramBot::commandsList()) ) {
            return $bot->sendMessage($request['message']['chat']['id'], $bot->answerForCommand($command) );
        }

        return false;
    }

    public function setWebhook()
    {
        $bot = new TelegramBot(Config::get('telegram.token'));
        echo $bot->setWebhook( Config::get('telegram.webhook') );
    }

    public function deleteWebhook()
    {
        $bot = new TelegramBot(Config::get('telegram.token'));
        echo $bot->deleteWebhook();
    }
}