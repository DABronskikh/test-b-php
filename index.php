<?php

session_start();
$content = [];

if (!$_SESSION['user']) {
    $content['msg'] = "<br>Вы не авторизованы <br>";
    $content['form'] = true;
} else {
    $content['msg'] = "Пользователь: {$_SESSION['user']['name']} ";
    $content['form'] = false;
}

include_once 'tmp/about-author.php';
