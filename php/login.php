<?php
 require_once 'db.php';
 require_once 'dbconf.php';
 $username=$_POST['user'];
 $password=$_POST['password'];
 $db=new DB();
 $authenticated =$db->authenticateUser($username,$password);
 if($authenticated){
 $response="Hello $username, you have been successfully authenticated.";
 }else{
 $response='Incorrect credentials or user does not exist.';
 }
 echo $response;