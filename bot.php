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

function receivedMessage(event) {
  var senderID = event.sender.id;
  var recipientID = event.recipient.id;
  var timeOfMessage = event.timestamp;
  var message = event.message;

  console.log("Received message for user %d and page %d at %d with message:", 
    senderID, recipientID, timeOfMessage);
  console.log(JSON.stringify(message));

  var messageId = message.mid;

  var messageText = message.text;
  var messageAttachments = message.attachments;

  if (messageText) {

    // If we receive a text message, check to see if it matches a keyword
    // and send back the example. Otherwise, just echo the text we received.
    switch (messageText) {
      case 'generic':
        sendGenericMessage(senderID);
        break;

      default:
        sendTextMessage(senderID, messageText);
    }
  } else if (messageAttachments) {
    sendTextMessage(senderID, "Message with attachment received");
  }
}
?>
