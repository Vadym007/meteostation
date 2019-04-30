<?php

namespace App\Components;

class TelegramBot 
{
    public const TEMPERATURE_COMMAND = '/temperature';
    public const HUMIDITY_COMMAND = '/humidity';
    public const LIGHT_COMMAND = '/light';

    private $token;
    private $baseUrl;

    public function __construct(string $token)
    {
        $this->token = $token;
        $this->baseUrl = 'https://api.telegram.org/bot' . $token . '/';
    }

    public function getUpdates($offset = null, $limit = null)
    {
        $params = [];
        
        if( $offset) {
            $params['offset'] = $offset;
        } elseif( $lastUpdate =  $this->getLastUpdate() ) {
            $params['offset'] = $lastUpdate + 1;
        }

        if( $limit ) {
            $param['limit'] = $limit;
        } 

        $url = $this->baseUrl . 'getUpdates?' . http_build_query($params);
        $response = json_decode(file_get_contents($url), JSON_OBJECT_AS_ARRAY);
        
        if($response['ok'] && isset($response['result'][0])) {
            $this->setLastUpdate($response['result'][0]['update_id']);
        }

        return $response;
    }

    public function sendMessage($chatId, string $text)
    {
        $params = http_build_query([
            'chat_id' => $chatId,
            'text' => $text,
        ]);

        $url = $this->baseUrl . 'sendMessage?' . $params;

        return json_decode(file_get_contents($url), JSON_OBJECT_AS_ARRAY);
    }

    public function setWebhook($url)
    {
        $url = $this->baseUrl . 'setWebhook?' . http_build_query(['url' => $url]);

        return file_get_contents($url);
    }

    public function deleteWebhook()
    {
        return file_get_contents($this->baseUrl . 'deleteWebhook');
    }

    public static function commandsList()
    {
        return [
            self::HUMIDITY_COMMAND,
            self::LIGHT_COMMAND,
            self::TEMPERATURE_COMMAND,
        ];
    }

    public function answerForCommand(string $command)
    {
        if($command == self::TEMPERATURE_COMMAND) {
            return 'Температура повітря ___ °C на ' . date('H:i, d-m-Y');
        } 
        if($command == self::HUMIDITY_COMMAND) {
            return 'Вологість повітря __ % на ' . date('H:i, d-m-Y');
        } 
        if($command == self::LIGHT_COMMAND) {
            return 'Освітленість __ Л на ' . date('H:i, d-m-Y');
        } 

        return null;
    }

    private function getLastUpdate()
    {
        if(isset( $_SESSION[$this->storageKeyLastUpdate()] )) {
            return $_SESSION[$this->storageKeyLastUpdate()];
        }

        return null;
    }

    private function setLastUpdate($value): void
    {
        $_SESSION[$this->storageKeyLastUpdate()] = $value;
    }

    private function storageKeyLastUpdate()
    {
        return $this->token . 'lastUpdatedId';
    }
}