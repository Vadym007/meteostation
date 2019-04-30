<?php

namespace App\Controllers;

use App\Components\TelegramBot;

class TelegramController
{
    protected $bot;

    public function __construct()
    {
        $this->bot = new TelegramBot(getenv('TELEGRAM_TOKEN'));
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
       echo $this->bot->setWebhook( getenv('WEBHOOK_TELEGRAM') );
    }

    public function deleteWebhook()
    {
        echo $this->bot->deleteWebhook();
    }
}