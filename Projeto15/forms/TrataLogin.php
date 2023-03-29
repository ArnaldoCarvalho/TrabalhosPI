<?php
include('../includes/config.inc.php');
@session_start();

$sql = "SELECT * FROM user WHERE email = '".$_POST['email']."' and ativo = 1" ;
$results = my_query($sql);

if(count($results)==0){
    header('Location: ' .$arrConfig['url_site'] . '/forms/login.php?Erro=1');
}
else{
    foreach($results as $K)
    if(password_verify($_POST['pass'],$K['pass'])){
        $_SESSION['nome'] = $K['nome'];
        $_SESSION['username'] = $K['nome'];
        $_SESSION['uid'] = $K['id'];
        $_SESSION['user'] = $_POST['email'];
        $_SESSION['pass'] = $_POST['pass'];
        $_SESSION['auth'] = '0';
        $_SESSION['SessionType'] = 'Login';
        $_SESSION['img'] = $K['img'];
        header('Location: ' .$arrConfig['url_site'] . '/index.php');
    }
    else{
        header('Location: ' .$arrConfig['url_site'] . '/forms/login.php?Erro=1');
    }
    
}

