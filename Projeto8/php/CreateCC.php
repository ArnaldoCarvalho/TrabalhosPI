<?php
session_start();

$typedados = [
    'apelido',
    'name',
    'sexo',
    'height',
    'nacionalidade',
    'datanasc',
    'nid',
    'ndoc',
    'dataval',
];                                                          
$CCDados = $_POST['CCDados'];

if($CCDados['datanasc']>=$CCDados['dataval']){
    header('Location:'.'../index.php?ERRO=1');
    exit(); 
}

GerarCC($typedados,$CCDados);
header('Location:'.'../CCcreate.php');
exit();

function GerarCC($typedados,$CCDados){
   for($i=0;$i<count($typedados);$i++){
    $_SESSION[$typedados[$i]]=$CCDados[$typedados[$i]];
   }
}

function Verificar($typedados,$CCDados){
    for($i=0;$i<count($typedados);$i++){
        if($CCDados[$typedados[$i]] = ""){
            header('Location:'.'../index.php?ERRO=1');
            exit();
        }         
    }
}

?>
