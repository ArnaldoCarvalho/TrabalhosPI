<?php
include('../includes/config.inc.php');
@session_start();


$sql = "SELECT * FROM user WHERE email = '".$_POST['email']."'";
$results = my_query($sql);
$pass = $_POST['pass'];

if(count($results)!=0){
    header('Location: ' .$arrConfig['url_site'] . '/forms/register.php?Erro=1');
    exit;
}

$pass = password_hash($pass,PASSWORD_DEFAULT);
$sql = "INSERT INTO user (nome, email, pass, ativo) VALUES ('".$_POST['nome']."','".$_POST['email']."','".$pass."', '1') ";
my_query($sql);

$_SESSION['username'] = $K['nome'];
$_SESSION['uid'] = $K['id'];
$_SESSION['user'] = $_POST['email'];
$_SESSION['pass'] = $_POST['pass'];
$_SESSION['auth'] = '0';
$_SESSION['SessionType'] = 'Login';

header('Location: ' . $arrConfig['url_site'] . '/index.php');



