<?php
session_start();

include '../lib/library.php';



if (isset($_POST['disciplinas'])) {

    VerificaVazio($_POST['matricula'],3);
    
    CopySession($_POST['matricula']);
    CopySession($_POST['disciplinas']);
    $_SESSION['observ'] = $_POST['observ'];
    
    $TextDis = "";
    $TextDis = disciplinas($_POST['disciplinas']);
    $_SESSION['text'] = $TextDis;
    $filedados = uploadFile($_FILES['Foto']);
    //pr($filedados);
    //pr($_FILES);
    $_SESSION['Foto']=$filedados;
    $disciplinas = $_POST['disciplinas'];

    header('Location:' . '../matrícula.php');
    exit();
} else {
    header('Location:' . '../index.php');
    exit();
}

?>
