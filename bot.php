<?php
//EAABytQT4K0EBAPKjR8dywmqEHdO8QWLgzgRIlqyABA2sevKMqV7195TAM1KZAQJGLbcyWxir9PbuKPWiKNcZAnNIZAdzmbIofPucybepaSIluzJFh0HZA2TiONfXWaf7fkjzzMX2ZAeWTyEBZCi9bEUZABF564fJxYThpjkcS2UqQZDZD
$challenge = $_REQUEST['hub_challenge'];
$verify_token = $_REQUEST['hub_verify_token'];

if ($verify_token == 'EAABytQT4K0EBAPKjR8dywmqEHdO8QWLgzgRIlqyABA2sevKMqV7195TAM1KZAQJGLbcyWxir9PbuKPWiKNcZAnNIZAdzmbIofPucybepaSIluzJFh0HZA2TiONfXWaf7fkjzzMX2ZAeWTyEBZCi9bEUZABF564fJxYThpjkcS2UqQZDZD') {
  echo $challenge;
  echo "ผ่านนนน";
}

$input = json_decode(file_get_contents('php://input'), true);
error_log(print_r($input, true));
?>
