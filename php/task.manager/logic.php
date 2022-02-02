<?php
require 'login.php';
 $login = '';
 $password = '';
 if(!empty($_POST)){
     $login = $_POST['login'];
     $password = $_POST['password'];
     $successAuth = login($login, $password);
     if($successAuth){
         require 'include/success_message.php';
         $login = '';
         $password = '';
     }
     else{
         require 'include/error_message.php';
     }
 }
?>