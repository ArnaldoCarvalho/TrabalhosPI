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

$filedados = index($_FILES);
if($_FILES['Foto']['name'] != '' )
{
    $filedados = index($_FILES);
    $_SESSION['img']=uploadFile($_FILES[$filedados[0]]);
    $sql = "INSERT INTO user (nome, email, pass, ativo, img) VALUES ('".$_POST['nome']."','".$_POST['email']."','".$pass."', '1','".$_SESSION['img']."') ";
}else{
    $sql = "INSERT INTO user (nome, email, pass, ativo) VALUES ('".$_POST['nome']."','".$_POST['email']."','".$pass."', '1') ";
}

$pass = password_hash($pass,PASSWORD_DEFAULT);
my_query($sql);

$_SESSION['username'] = $K['nome'];
$_SESSION['uid'] = $K['id'];
$_SESSION['user'] = $_POST['email'];
$_SESSION['pass'] = $_POST['pass'];
$_SESSION['auth'] = '0';
$_SESSION['SessionType'] = 'Membro';



header('Location: ' . $arrConfig['url_site'] . '/index.php');



