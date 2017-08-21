<?php
$access_token = 'sq6zfJx4ZKZIYTfstGlQw/agAlf3DC27rMSd85f5FFv1qlQMzibHbuhTSMKeQv18mV75ezUlFLU+ioIOqpLg4FFcndSS0ZWdOKXXBoyXBslqAGQIh8h7IsqbbcwNMhskb6kJ6ni5THEK+h5h6iVvTAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
