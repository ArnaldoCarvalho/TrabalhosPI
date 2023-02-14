<?php
include('../includes/config.inc.php');
@session_start();

$sql = "SELECT * FROM user WHERE email = '".$_POST['email']."' and ativo = 1" ;
$results = my_query($sql);

if(count(value: $results)==0){
    header(header: 'Location: ' .$arrConfig['url_admin'] . '/forms/login.php?Erro=1');
}
else{
    foreach($results as $K)
    if(password_verify(password: $_POST['pass'],hash: $K['pass'])){
        $_SESSION['uid'] = $K['id'];
        $_SESSION['nome'] = $K['nome'];
        $_SESSION['username'] = $K['username'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['pass'] = $_POST['pass'];
        $_SESSION['auth'] = '1';
        header(header: 'Location: ' .$arrConfig['url_admin'] . '/index.php');
    }
    else{
        header(header: 'Location: ' .$arrConfig['url_admin'] . '/forms/login.php?Erro=1');
    }
    
}

