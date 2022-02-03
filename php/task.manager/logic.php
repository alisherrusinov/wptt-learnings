<?php
require 'login.php';
 $login = '';
 $password = '';
 session_start();



 if(!empty($_POST)){
     $login = $_POST['login'];
     $password = $_POST['password'];
     $successAuth = login($login, $password);
     if($successAuth){
        $_SESSION['authorized'] = true;
        setcookie('login', $login,  time() + (3600 * 24 * 30));
         $login = '';
         $password = '';
     }
 }
