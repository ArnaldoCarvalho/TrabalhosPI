<?php
include '../include/config.inc.php';

$usr = $_POST['usr'];
$pwd = $_POST['pwd'];
//die(password_hash($pwd, PASSWORD_DEFAULT));
//$sql = "SELECT * FROM administradores WHERE username = '$usr' AND password = '$pwd' AND ativo = 1";
$sql = "SELECT * FROM administradores WHERE username = '$usr' AND ativo = 1";
$res = my_query($sql);
if(count($res)) {
    $hash = $res[0]['password'];
    if(password_verify($pwd, $hash)) {
        $_SESSION['auth'] =  1;
        $_SESSION['uname'] =  $res[0]['nome'];
        $_SESSION['uid'] =  $res[0]['id'];
        header('location: '.$arrConfig['url_admin'].'/index.php');
        exit();
    }
}
header('location: '.$arrConfig['url_admin'].'/login.php?erro=1');
exit();
?>