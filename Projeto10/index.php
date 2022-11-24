<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Criar CC</title>
    <link rel="stylesheet" href="css/style.css">
    <script src='js/codigo.js'></script>
    
</head>
<body>

<form class="Form" action="./php/CreateCC.php" method="post" enctype="multipart/form-data">
    <h1>Introduza os dados do seu CC</h1>

    <label for="">Apelido:</label>
    <input type="text" name="CCDados[apelido]" value="" required><br><br>
    <label for="">Nome:</label>
    <input type="text" name="CCDados[name]" value=""required><br><br>
    <label for="">Sexo: <br>
        Homen: <input type="radio" name="CCDados[sexo]" value="H" checked > <br/> 
        Mulher: <input type="radio" name="CCDados[sexo]" value="M"> <br/> 
    </label><br>
    <label for="">Altura:</label>
    <input type="number" step="0.01" min='0.01'name="CCDados[height]" value="" required><br><br>
    <label for="">Nacionalidade: <br>
        Português: <input type="radio" name="CCDados[nacionalidade]" value="PRT" checked> <br/> 
    </label><br>
    <label for="">Data de Nascimento:</label>
    <input type="date" name="CCDados[datanasc]" value="" required><br><br>
    <?php 
        if(isset($_GET['ERRO']))
        {
            echo 'A data introduzida não é válida. <br> <br>';
        }
    ?>
    <label for="">Numero de identificação civil:</label>
    <input type="number" name="CCDados[nid]" min="0"  value="" max="99999999" required><br><br>
    <label for="">Numero do documento:</label>
    <input type="text" name="CCDados[ndoc]" value="" maxlength="5" required><br><br>
    <label for="">Data de validação:</label>
    <input type="date" name="CCDados[dataval]" value="" required><br><br>
    <label for="">Foto:</label>
    <input type="file" name="Foto" required ><br><br>
    <label for="">Assinatura:</label>
    <input type="file" name="Assinatura" required><br><br>

    <input type="submit">
</form><br>

</body>
</html>