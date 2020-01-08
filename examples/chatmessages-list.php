<?php

require_once(__DIR__ . '/../autoload.php');

$MessageBird = new \MessageBird\Client(getenv('MESSAGEBIRD_API_KEY')); // Set your own API access key here.

$ChatMessage = new \MessageBird\Objects\Chat\Message();

try {
    $ChatMessageResult = $MessageBird->chatMessages->getList();
    var_dump($ChatMessageResult);

} catch (\MessageBird\Exceptions\AuthenticateException $e) {
    // That means that your accessKey is unknown
    echo 'wrong login';
    
} catch (\Exception $e) {
    echo $e->getMessage();
}
