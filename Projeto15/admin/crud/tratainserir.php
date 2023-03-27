<?php
include '../includes/config.inc.php';

$str1 = '';
$str2 = '';

foreach($arrDados['campos'] as $key => $value) {
    $flagInsereCampo = 1;
    if(isset($value['inserir'])) {
        if($value['inserir'] == 0) {
            $flagInsereCampo = 0;
        }
    }
    if($flagInsereCampo) {
        $str1 .= $key.',';
        if(!isset($_POST[$key])) $_POST[$key] = 0;
        if(isset($arrDados['campos'][$key]['geraHash'])) $_POST[$key] = password_hash($_POST[$key], PASSWORD_DEFAULT);
        $str2 .= "'$_POST[$key]',";
        
    }
}

$str1 = substr($str1,0,strlen($str1)-1);
$str2 = substr($str2,0,strlen($str2)-1);


/*
// pesquisar se existe um user com o mesmo nome
$sql = "SELECT * FROM $arrDados[tabela] WHERE username = '$usr'";
$res = my_query($sql);
if(count($res)) {
    // problema na inserção: user já existe
    header('location: '.$arrConfig['url_admin'].'/administradores/inserir.php?erro=1');
    exit();
}
*/

// tentar inserir o novo user
$sql = "INSERT INTO $arrDados[tabela] ($str1) VALUES ($str2)";

$res = my_query($sql);
if($res) {
    // sucesso de inserção
    header('location: '.$arrConfig['url_admin'].'/'.$arrDados['modulo'].'/?m=1');
    exit();
}

// problema na inserção
header('location: '.$arrConfig['url_admin'].'/'.$arrDados['modulo'].'/?erro=2&m=edit');
exit();
?>