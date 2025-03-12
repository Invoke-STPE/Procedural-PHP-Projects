<?php

declare(strict_types=1);

$root = dirname(getcwd()) . DIRECTORY_SEPARATOR;

define('VIEWS_PATH', $root . 'views' . DIRECTORY_SEPARATOR);
define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);

require APP_PATH . 'app.php';
require VIEWS_PATH . 'view.php';

if (empty($_POST['word'])) return;

$characters = countCharacters($_POST['word']);
$words = countWords($_POST['word']);
