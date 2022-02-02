<?php

function login($_POST_){
    if (!empty($_POST_)) {
    require 'data/passwords.php';
    require 'data/users.php';
    if (in_array($_POST_['login'], $userLogins) && in_array($_POST_['password'], $userPasswords)) {
        if (array_search($_POST_['login'], $userLogins) == array_search($_POST_['password'], $userPasswords)) {
            require 'include/success_message.php';
        } else {
            $password = $_POST_['password'];
            $login = $_POST_['login'];
            require 'include/error_message.php';
            return [$login, $password];
        }
    } else {
        $password = $_POST_['password'];
        $login = $_POST_['login'];
        require 'include/error_message.php';
        return [$login, $password];
    }
}
else{
    return false;}
}
?>