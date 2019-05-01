<?php

namespace App\Controllers;

use App\Components\TelegramBot;
use App\Components\Config;
use App\Models\Indicator;

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
            $this->bot->sendMessage($request['message']['chat']['id'], $this->bot->answerForCommand($command, Indicator::last()) );
        }
    }

    public function updates()
    {
        echo '<pre>';
        var_dump($this->bot->getUpdates());
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