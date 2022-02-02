<?php
if (!empty($_POST)) {
    require 'data/passwords.php';
    require 'data/users.php';
    if (in_array($_POST['login'], $userLogins) && in_array($_POST['password'], $userPasswords)) {
        if (array_search($_POST['login'], $userLogins) == array_search($_POST['password'], $userPasswords)) {
            require 'include/success_message.php';
        } else {
            $password = $_POST['password'];
            $login = $_POST['login'];
            require 'include/error_message.php';
        }
    } else {
        $password = $_POST['password'];
        $login = $_POST['login'];
        require 'include/error_message.php';
    }
}
?>