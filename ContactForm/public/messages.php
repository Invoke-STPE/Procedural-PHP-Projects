<?php

declare(strict_types=1);

$root = dirname(getcwd()) . DIRECTORY_SEPARATOR;

define('VIEWS_PATH',  $root . 'views' . DIRECTORY_SEPARATOR);
define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
define('DATA_PATH', $root . 'data' . DIRECTORY_SEPARATOR);


require APP_PATH . 'app.php';

$messages = getMessages(DATA_PATH);

require VIEWS_PATH . 'viewMessages.php';
