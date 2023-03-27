<?php
include '../include/config.inc.php';

$nome = $_POST['nome'];
$usr = $_POST['usr'];
$pwd = $_POST['pwd'];
$hash_pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);

// por defeito os novos user estão inativos
$ativo = 0;

// pesquisar se existe um user com o mesmo nome
$sql = "SELECT * FROM administradores WHERE username = '$usr'";
$res = my_query($sql);
if(count($res)) {
    header('location: '.$arrConfig['url_admin'].'/registo.php?erro=1');
    exit();
}

// tentar inserir o novo user
$sql = "INSERT INTO administradores (nome, username, password, ativo) 
                             VALUES ('$nome','$usr','$hash_pwd','$ativo')";
$res = my_query($sql);
if($res) {
    // sucesso de inserção
    header('location: '.$arrConfig['url_admin'].'/registo.php?ok=1');
    exit();
}

// problema na inserção
header('location: '.$arrConfig['url_admin'].'/registo.php?erro=2');
exit();
?>