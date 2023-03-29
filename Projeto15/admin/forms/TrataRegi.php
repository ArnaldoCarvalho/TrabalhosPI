<?php
include('../../includes/config.inc.php');
@session_start();


$sql = "SELECT * FROM administradores WHERE email = '".$_POST['email']."'";
$results = my_query($sql);
$pass = $_POST['pass'];

if(count($results)!=0){
    header('Location: ' .$arrConfig['url_admin'] . '/forms/login.php?Erro=1');
    exit;
}


$filedados = index($_FILES);
if($_FILES['Foto']['name'] != '' )
{
    $filedados = index($_FILES);
    $_SESSION['img']=uploadFile($_FILES[$filedados[0]]);
    $sql = "INSERT INTO administradores (nome, email, pass, ativo, img) VALUES ('".$_POST['nome']."','".$_POST['email']."','".$pass."', '0','".$_SESSION['img']."') ";
}else{
    $sql = "INSERT INTO administradores (nome, email, pass, ativo) VALUES ('".$_POST['nome']."','".$_POST['email']."','".$pass."', '0') ";
}


$pass = password_hash($pass,PASSWORD_DEFAULT);
my_query($sql);

$_SESSION['nome'] = $_POST['nome'];
$_SESSION['username'] = $K['nome'];
$_SESSION['uid'] = $K['id'];
$_SESSION['user'] = $_POST['email'];
$_SESSION['pass'] = $_POST['pass'];
$_SESSION['auth'] = '1';
$_SESSION['SessionType'] = 'Login';

header('Location: ' . $arrConfig['url_admin'] . '/index.php');



