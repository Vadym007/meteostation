<?php

return [
    [
        'url' => '',
        'action' => 'DashboardController@index',
    ],
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
    ]
];