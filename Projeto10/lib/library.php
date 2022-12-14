<?php
@session_start();
function index($array){
    $key=array(count($array));  
    $i = 0;
    echo count($array);
    foreach($array as $x=>$val) { 
        $key[$i]=$x;
        $i = $i+1;
    }

    return $key;
}


function VerificaVazio($array,$Ncampos = null,$location = null){ 
    $Ncampos = $Ncampos == null ? count($array) :$Ncampos;
    $location = $location == null ? 'Location: ../index.php' : 'Location: '.$location;
    $key=index($array);

    for($i=0;$i<count($key);$i++)
    {
        if($array[$key[$i]]===""){
            header($location.'?ERRO=1');
            exit();
        }
    }

    if(count($array)!= $Ncampos){
        header($location.'?ERRO=1');
        exit();
    }

}


function pr($arr)
{
    //echo '<h1>' . $arr . '</h1>';
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}


function uploadFile($file, $nomeFicheiro = null, $nomePasta = null, $tamUpload = null, $arrFilesAuth = null)
{
    $tamUpload = $tamUpload == null ? 1048576 * 3 : $tamUpload;
    $arrFilesAuth = $arrFilesAuth == null ? array('image/jpeg', 'image/png', 'image/gif') : $arrFilesAuth;
    $nomeFicheiro = $nomeFicheiro == null ? uniqid('foto_') . '.jpg' : $nomeFicheiro;
    $nomePasta = $nomePasta == null ? '../upload' : $nomePasta;

    if ($file['error'] == 0) {
        if ($file['size'] <= $tamUpload) {
            if (in_array($file['type'], $arrFilesAuth)) {
                //$nomeFicheiro = $file['name'];
                //$nomePasta = 'upload';
                move_uploaded_file($file['tmp_name'], $nomePasta . '/' . $nomeFicheiro);
            }
        }
    }
    return  $nomeFicheiro;
}


function disciplinas($array){
    $arrayName = array(
        'PT' => 'Português', 
        'LE' => 'Linguas Estrangeiras', 
        'Filo' => 'Filosofia', 
        'EF' => 'Educação Física', 
        'MA' => 'Matemática', 
        'FQ' => 'Física Química', 
        'MED' => 'Moral Ética Deontologia', 
        'AI' => 'Aplicações Informáticas', 
        'FAC' => 'Fundamento e Arquitetura de computadores', 
        'TP' => 'Tecnicas de Programação', 
        'IEBD' => 'Inplementação e Exploração de Bases de dasos', 
        'TDM' => 'Tecnologias e Desenvolvimento Multimédia', 
        'PI' => 'Programação Internet', 
        'ProjectT' => 'Projeto Tecnológico', 
        'FCT' => 'Formação contexto de trabalho', 
    );

    pr($array);
    pr($arrayName);

    $text="";
    $text="<div>";
    $indexArrayName=index($arrayName);
    $indexArray = index($array);
    for ($i=0; $i < count($indexArray); $i++) { 
        for ($j=0; $j < count($indexArrayName) ; $j++) { 
            if ($indexArrayName[$j]===$indexArray[$i]) {
                $text = $text." <div> ->". $arrayName[$indexArrayName[$j]] ." </div>";                
            }
        }
    }
    $text=$text."</div>";
    pr($text);

    return $text;
}


function CopySession($array,$vet=null){
    
    $vet = $vet == null ? "" : $vet;
    $index=index($array);
    if($vet === ""){
        for ($i=0; $i <count($array) ; $i++) {
            $_SESSION[$index[$i]] = $array[$index[$i]];
        }
    }
    else{
        for ($i=0; $i <count($array) ; $i++) {
            $_SESSION["$vet"][$index[$i]] = $array[$index[$i]];
        }
    }
    

}
