<?php
include '../include/config.inc.php';
include $arrConfig['dir_site'].'/include/auth.inc.php';

$nome = $_POST['nome'];
$usr = $_POST['usr'];
$pwd = $_POST['pwd'];
$ativo = $_POST['ativo'];
$hash_pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);

// pesquisar se existe um user com o mesmo nome
$sql = "SELECT * FROM administradores WHERE username = '$usr'";
$res = my_query($sql);
if(count($res)) {
    // problema na inserção: user já existe
    header('location: '.$arrConfig['url_admin'].'/administradores/inserir.php?erro=1');
    exit();
}

// tentar inserir o novo user
$sql = "INSERT INTO administradores (nome, username, password, ativo) VALUES ('$nome','$usr','$hash_pwd','$ativo')";
$res = my_query($sql);
if($res) {
    // sucesso de inserção
    header('location: '.$arrConfig['url_admin'].'/administradores/?inserir='.$res);
    exit();
}

// problema na inserção
header('location: '.$arrConfig['url_admin'].'/administradores/inserir.php?erro=2');
exit();
?>