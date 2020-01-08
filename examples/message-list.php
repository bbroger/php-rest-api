<?php

require_once(__DIR__ . '/../autoload.php');

$MessageBird = new \MessageBird\Client(getenv('MESSAGEBIRD_API_KEY')); // Set your own API access key here.

try {
    $MessageList = $MessageBird->messages->getList(array ('offset' => 100, 'limit' => 30));
    var_dump($MessageList);

} catch (\MessageBird\Exceptions\AuthenticateException $e) {
    // That means that your accessKey is unknown
    echo 'wrong login';

} catch (\Exception $e) {
    var_dump($e->getMessage());
}
