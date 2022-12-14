   
<?php
session_start();
include '../lib/library.php';


use Dompdf\Dompdf;
require_once('../dompdf/autoload.inc.php');

$dompdf = new Dompdf(['enable_remote'=>true]);
$text = "<h1> Matrícula </h1>";
$text = $text. 
"<img src='http://localhost/GitHub/projeto10/upload/".$_SESSION['Foto']."' alt='' style='width:150px; height: 150px;'> <br> <br>
<div> Nome do Aluno: ". $_SESSION['name'] ." </div> <br>
<div> Género/Sexo: ". $_SESSION['sexo'] ."</div> <br>
<div> Ano Letivo: ". $_SESSION['ano'] ."º  </div> <br> <br>";

$text = $text."<h3> Disciplinas: </h3>";
$text = $text . $_SESSION['text'];

$text = $text."<h3> Observações: </h3>";
$text = $text . $_SESSION['observ'];

$dompdf->loadHtml($text);
$dompdf->render();

$dompdf->stream(
    "Matriula.".$_SESSION['name'].".pdf",
    array(
        "Attachment" => false
    )

);

