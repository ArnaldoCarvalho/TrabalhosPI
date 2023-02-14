<?php
include '../../include/config.inc.php';
include $arrConfig['dir_site'].'/include/auth.inc.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$usr = $_POST['usr'];
$ativo = isset($_POST['ativo']) ? 1 : 0;

// verificar se vamos adicionar a Query a condição de alteração da password
$pwd = $_POST['pwd'];
$queryPWD = '';
if(!empty($pwd)) {
    $hash_pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
    $queryPWD = 'password = "' . $hash_pwd . '",';
}

// pesquisar se existe um user com o mesmo nome
$sql = "SELECT * FROM administradores WHERE username = '$usr' AND id <> $id";
$res = my_query($sql);
if(count($res)) {
    // problema na edição: user já existe
    header('location: '.$arrConfig['url_admin'].'/administradores/editar.php?id='.$id.'&erro=1');
    exit();
}

// tentar editar os dados do user
$sql = "UPDATE administradores SET nome = '$nome', username = '$usr', $queryPWD ativo = '$ativo' WHERE id = '$id";
die($sql);
$res = my_query($sql);
if($res) {
    // sucesso de edição
    header('location: '.$arrConfig['url_admin'].'/administradores/?editar='.$res);
    exit();
}

// problema na edição
header('location: '.$arrConfig['url_admin'].'/administradores/editar.php?id='.$id.'&erro=2');
exit();
?>