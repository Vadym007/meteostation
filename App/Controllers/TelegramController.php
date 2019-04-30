<?php

namespace App\Controllers;

use App\Components\TelegramBot;
use App\Components\Config;

class TelegramController
{
    protected $bot;

    public function __construct()
    {
        $this->bot = new TelegramBot(Config::get('telegram.token'));
    }

    public function webhook()
    {        
        $json = file_get_contents('php://input');
        $request = json_decode($json, true);
        if(  in_array($command = $request['message']['text'], TelegramBot::commandsList()) ) {
            return $this->bot->sendMessage($request['message']['chat']['id'], $this->bot->answerForCommand($command) );
        }

        return false;
    }

    public function setWebhook()
    {
       echo $this->bot->setWebhook( Config::get('telegram.webhook') );
    }

    public function deleteWebhook()
    {
        echo $this->bot->deleteWebhook();
    }
}