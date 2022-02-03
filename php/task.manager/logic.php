<?php
require 'login.php';
 $login = '';
 $password = '';
 if(!empty($_POST)){
     $login = $_POST['login'];
     $password = $_POST['password'];
     $successAuth = login($login, $password);
     if($successAuth){
         $login = '';
         $password = '';
     }
 }
?>