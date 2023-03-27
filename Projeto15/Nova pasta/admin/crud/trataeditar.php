<?php
include '../../include/config.inc.php';
include $arrConfig['dir_site'].'/include/auth.inc.php';

$str = '';
foreach($arrDados['campos'] as $key => $value) {
    $flagEditarCampo = 1;
    if(isset($value['inserir'])) {
        if($value['inserir'] == 0) {
            $flagEditarCampo = 0;
        }
    }
    if(isset($value['obrigatorio_editar'])) {
        if($value['obrigatorio_editar'] == 0) {
            if($_POST[$key] == '') {
                $flagEditarCampo = 0;
            }
        }
    }

    if($flagEditarCampo) {
        $str .= $key.'=';
        if(!isset($_POST[$key])) $_POST[$key] = 0;
        if(isset($arrDados['campos'][$key]['geraHash'])) $_POST[$key] = password_hash($_POST[$key], PASSWORD_DEFAULT);
        $str .= "'$_POST[$key]',";
    }
}
$str = substr($str,0,strlen($str)-1);



$strChave = '';
foreach($arrDados['campos'] as $key => $value) {
    $flagChaveCampo = 0;
    if(isset($value['chave'])) {
        if($value['chave'] == 1) {
            $flagChaveCampo = 1;
        }
    }
    if($flagChaveCampo) {
        $strChave .= $key.'=';
        $strChave .= "'$_POST[$key]' AND ";
    }
}
$strChave = substr($strChave,0,strlen($strChave)-5);


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
$sql = "UPDATE $arrDados[tabela] SET $str WHERE $strChave";
$res = my_query($sql);
if($res) {
    // sucesso de inserção
    header('location: '.$arrConfig['url_admin'].'/'.$arrDados['modulo'].'/?editar='.$res);
    exit();
}

// problema na inserção
header('location: '.$arrConfig['url_admin'].'/'.$arrDados['modulo'].'/?erro=2');
exit();
?>