<?php
include('../includes/config.inc.php');
@session_start();

$sql = "SELECT * FROM administradores WHERE email = '".$_POST['email']."' and ativo = 1" ;
$results = my_query($sql);

if(count($results)==0){
    header('Location: ' .$arrConfig['url_admin'] . '/forms/login.php?Erro=1');
}
else{
    foreach($results as $K)
    if(password_verify($_POST['pass'],$K['pass'])){
        $_SESSION['nome'] = $K['nome'];

        $_SESSION['user'] = $_POST['email'];
        $_SESSION['pass'] = $_POST['pass'];
        $_SESSION['auth'] = '1';
        header('Location: ' .$arrConfig['url_admin'] . '/index.php');
    }
    else{
        header('Location: ' .$arrConfig['url_admin'] . '/forms/login.php?Erro=1');
    }
    
}

