<?php
include('../includes/config.inc.php');
@session_start();


$sql = "SELECT * FROM administradores WHERE email = '".$_POST['email']."'";
$results = my_query($sql);
$pass = $_POST['pass'];

if(count($results)!=0){
    header('Location: ' .$arrConfig['url_admin'] . '/forms/login.php?Erro=1');
}

$pass = password_hash($pass,PASSWORD_DEFAULT);
$sql = "INSERT INTO administradores (nome, email, pass, ativo) VALUES ('".$_POST['nome']."','".$_POST['email']."','".$pass."', '1') ";
my_query($sql);

$_SESSION['nome'] = $_POST['nome'];
$_SESSION['user'] = $_POST['email'];
$_SESSION['pass'] = $_POST['pass'];
$_SESSION['auth'] = '1';

header('Location: ' . $arrConfig['url_admin'] . '/index.php');



