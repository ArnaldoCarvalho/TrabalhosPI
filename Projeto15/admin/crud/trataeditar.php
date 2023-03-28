<?php
include '../../includes/config.inc.php';

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
        if(isset($_POST[$key])){
        if($_POST[$key] != ''){
        $str .= $key.'=';
        if(!isset($_POST[$key])) $_POST[$key] = 0;
        if(isset($arrDados['campos'][$key]['geraHash'])) $_POST[$key] = password_hash($_POST[$key], PASSWORD_DEFAULT);
        $str .= "'$_POST[$key]',";}}
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
        if($_POST[$key] != ''){
        $strChave .= $key.'=';
        $strChave .= "'$_POST[$key]' AND ";}
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


$filedados = index($_FILES);
if($arrDados['modulo']=='administradores'){
if($_FILES['Foto']['name'] != '' ){
$str = $str.',img="'.uploadFile($_FILES[$filedados[0]]).'"';}
}else{
    if($_FILES['Foto']['name'] != '' ){
        $str = $str.',imgurl="'.uploadFile($_FILES[$filedados[0]]).'"';}
}

// tentar inserir o novo user

$sql = "UPDATE $arrDados[tabela] SET $str WHERE $strChave";

$res = my_query($sql);
if($res) {
    // sucesso de inserção
    header('location: '.$arrConfig['url_admin'].'/'.$arrDados['modulo'].'/?m=1');
    exit();
}

// problema na inserção
header('location: '.$arrConfig['url_admin'].'/'.$arrDados['modulo'].'/?erro=2&m=edit&id='.$_GET['id']);
exit();
?>