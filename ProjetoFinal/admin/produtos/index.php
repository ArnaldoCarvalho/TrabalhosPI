<?php
include '../../include/config.inc.php';
include $arrConfig['dir_site'].'/include/auth.inc.php';
include 'config.php';

$operacao = $_GET['m'];

switch($operacao) {
    case 'insert': 
                include $arrConfig['dir_admin'] . '/crud/inserir.php'; 
                break;
    
    case 'tratainsert': 
                include $arrConfig['dir_admin'] . '/crud/tratainserir.php'; 
                break;

    case 'delete': 
                include $arrConfig['dir_admin'] . '/crud/eliminar.php'; 
                break;

    case 'edit':
                include $arrConfig['dir_admin'] . '/crud/editar.php'; 
                break;

    case 'trataedit': 
                include $arrConfig['dir_admin'] . '/crud/trataeditar.php'; 
                break;
    
    default: 
                include $arrConfig['dir_admin'] . '/crud/index.php';
}
?>