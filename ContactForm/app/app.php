<?php

declare(strict_types=1);

function sendMessage(array $message, string $dataPath) {
    $timestamp = date('d-m-y-H:i:s');
    $name = empty($message['name']) ? 'unknown' : $message['name'];

    $serializedMessage = serialize($message);
    $messageName = "{$name}-$timestamp";

    file_put_contents($dataPath . $messageName, $serializedMessage);
}

function getMessages($dataPath) {
    $files = array_diff(scandir($dataPath), ['.', '..']);
    $messages = [];

    foreach($files as $file) {
        $message = file_get_contents($dataPath . $file);
        $messages[] = unserialize($message);
    }

    return $messages;
}
