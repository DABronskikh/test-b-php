<?php

session_start();

if ($_SESSION['user']) {
    $_SESSION['msg'] = 'Вы уже авторизованы!';
}
if (!empty($_POST)) {
    $_SESSION['user']['name'] = $_POST['name'];
}

header('Location: /index.php');
exit;

