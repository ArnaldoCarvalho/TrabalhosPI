<?php
include '../include/config.inc.php';

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
        $strChave .= "'$_GET[$key]' AND ";
    }
}

$strChave = substr($strChave,0,strlen($strChave)-5);


$sql = "DELETE FROM $arrDados[tabela] WHERE $strChave";
$res = my_query($sql);

header('location: '.$arrConfig['url_admin'].'/'.$arrDados['modulo'].'/?delete='.$res);
exit();
?>