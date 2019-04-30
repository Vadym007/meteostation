<?php
  $variables = [
    'DEBUG' => true,

    'STATION_TOKEN' => 'stationtoken',
    'TELEGRAM_TOKEN' => '844981219:AAGKuAVfbzzhgstQ3yy8sTVVeC6I6ZWJCEc',
    'WEBHOOK_TELEGRAM' => 'https://diplomastation.000webhostapp.com/'
  ];
  
  foreach ($variables as $key => $value) {
      putenv("$key=$value");
  }
?>

