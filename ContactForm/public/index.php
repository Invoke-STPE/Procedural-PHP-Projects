<?php
declare(strict_types=1);

$root = dirname(getcwd()) . DIRECTORY_SEPARATOR;

define('VIEWS_PATH',  $root . 'views' . DIRECTORY_SEPARATOR);
define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
define('DATA_PATH', $root . 'data' . DIRECTORY_SEPARATOR);

require VIEWS_PATH . 'contactForm.html';
require APP_PATH . 'app.php';

if (isset($_POST['email'])){
    $message = ['email' => $_POST['email'], 'name' => $_POST['name'], 'message' => $_POST['message']];
    sendMessage($message, DATA_PATH);
}
