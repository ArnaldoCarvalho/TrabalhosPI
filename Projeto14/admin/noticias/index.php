<?php
include '../includes/config.inc.php';
include 'config.php';


$operacao = $_GET['m'];

switch($operacao) {
    case 'insert': 
                include $arrConfig['dir_admin'] . '/crud/inserir.php'; 
                break;

    case 'delete': 
                include $arrConfig['dir_admin'] . '/crud/eliminar.php'; 
                break;

    case 'edit':
                include $arrConfig['dir_admin'] . '/crud/editar.php'; 
                break;
    
    default: 
                include $arrConfig['dir_admin'] . '/tabel.php';
}





?>