<?php
include('../includes/config.inc.php');
@session_start();


$sql = "SELECT * FROM user WHERE email = '".$_POST['email']."'";
$results = my_query($sql);
$pass = $_POST['pass'];

if(count(value: $results)!=0){
    header(header: 'Location: ' .$arrConfig['url_admin'] . '/forms/register.php?Erro=1');
}else{

    $pass = password_hash(password: $pass,algo: PASSWORD_DEFAULT);
    $sql = "INSERT INTO user (nome, username, email, pass, ativo) VALUES ('".$_POST['nome']."','".$_POST['username']."','".$_POST['email']."','".$pass."', '1') ";
    my_query($sql);
    
    $_SESSION['nome'] = $_POST['nome'];
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['pass'] = $_POST['pass'];
    $_SESSION['auth'] = '1';
    
    
    $sql = "SELECT * FROM user WHERE email = '".$_POST['email']."' and ativo = 1" ;
    $results = my_query($sql);
    foreach($results as $K){
        $_SESSION['uid'] = $K['id'];
    }
    
    header(header: 'Location: ' . $arrConfig['url_admin'].'/index.php');
}


