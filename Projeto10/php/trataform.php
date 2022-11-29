<?php
session_start();

include '../lib/library.php';

$typedados = index($_POST['CCDados']);
$filedados = index($_FILES);

//print_r($typedados);
//die;
                                                        
$CCDados = $_POST['CCDados'];

if($CCDados['datanasc']>=$CCDados['dataval']){
    header('Location:'.'../index.php?ERRO=1');
    exit(); 
}

VerificaVazio($_POST['CCDados'],9);
GerarCC($typedados,$CCDados,$filedados,$img);
header('Location:'.'../CCcreate.php');
exit();

function GerarCC($typedados,$CCDados,$filedados,$img){
   for($i=0;$i<count($typedados);$i++){
    $_SESSION[$typedados[$i]]=$CCDados[$typedados[$i]];
   }

   for($i=0;$i<count($filedados);$i++){
    $_SESSION[$filedados[$i]]=uploadFile($_FILES[$filedados[$i]]);
   }
}



?>
