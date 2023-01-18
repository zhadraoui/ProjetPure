<?php
session_start(); 
include_once 'inc/db.php'; 
$user = R::findOne('users', 'login = ? and password = ?', array($_POST['username'],$_POST['password']));
if($user){

  	$_SESSION['authenticated'] = true;
	$_SESSION['login'] =  $user->login;
	$_SESSION['email'] =  $user->email;
	header('Location: index.php');
}else{
    echo 'Le nom d\'utilisateur ou le mot de passe est incorrect';
}  
 ?>
	<br/><button><a href="index.php">back</a></button>
 
