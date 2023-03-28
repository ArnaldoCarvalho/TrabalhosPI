<?php
@session_start();
global $arrConfig;

//language


if($_SERVER['HTTP_HOST'] == 'web.colgaia.local' || $_SERVER['HTTP_HOST'] == 'localhost') {
    error_reporting(E_ALL);
} else {
    error_reporting(0);
}

$arrConfig['servername'] = 'localhost';
$arrConfig['username'] = 'root';
$arrConfig['password'] = '';
$arrConfig['dbname'] = 'backoffice';

// isLoginKey - alterar a chave de codificação para o Backoffice
$arrConfig['isLoginKey'] = 'sdjfhsdfkjhdsfkjdshfks';

// acessos FrontOffice
$arrConfig['url_site']='http://localhost/GitHub/projeto15';
$arrConfig['dir_site']='C:/xampp/htdocs/GitHub/Projeto15';

// acessos BackOffice
$folderAdmin = 'admin';
$arrConfig['url_admin']=$arrConfig['url_site'].'/'.$folderAdmin;
$arrConfig['dir_admin']=$arrConfig['dir_site'].'/'.$folderAdmin;

// caminhos Docs e/ou fotografias
$arrConfig['url_fotos']=$arrConfig['url_site'].'/upload';
$arrConfig['dir_fotos']=$arrConfig['dir_site'].'/upload';
$arrConfig['fotos_auth'] = array ('image/jpeg', 'image/jpg', 'image/png', 'image/gif');
$arrConfig['fotos_maxUpload'] = 3000000;
// caminhos Ficheiros
$arrConfig['files_auth'] = array ('application/pdf');
$arrConfig['files_maxUpload'] = 10000000;

// número de registo de página, para situações de paginação
$arrConfig['num_reg_pagina'] = 25;

// 
$arrConfig['lang'] = 'pt';

// chamada de outros include
include_once $arrConfig['dir_site'].'/includes/functions.inc.php'; 
include_once $arrConfig['dir_site'].'/includes/db.inc.php'; 
include_once $arrConfig['dir_site'].'/includes/functions.db.php';
