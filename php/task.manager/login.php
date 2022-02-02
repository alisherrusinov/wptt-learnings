<?php

function login($login, $password)
{
    require 'data/passwords.php';
    require 'data/users.php';
    if (in_array($login, $userLogins) && in_array($password, $userPasswords)) {
        if (array_search($login, $userLogins) == array_search($password, $userPasswords)) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
