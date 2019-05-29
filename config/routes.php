<?php

return [
    [
        'url' => '',
        'action' => 'DashboardController@index',
    ],

    //api
    [
        'url' => 'api/set',
        'action' => 'ApiController@set',
    ],


    //telegram
    [
        'url' => 'telegram/webhook',
        'action' => 'TelegramController@webhook'
    ],
    [
        'url' => 'telegram/webhook/set',
        'action' => 'TelegramController@setWebhook'
    ],    
    [
        'url' => 'telegram/webhook/delete',
        'action' => 'TelegramController@deleteWebhook'
    ],
    [
        'url' => 'telegram/updates',
        'action' => 'TelegramController@updates'
    ],
    [
        'url' => 'form',
        'action' => 'FormController@show'
    ]
];