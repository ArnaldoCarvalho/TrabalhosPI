<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrícula</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="./js/codigo.js"></script>
</head>
<body>
    <div class="Form">
        <h1> Verificar Matrícula </h1>
        <?php
        echo ("
            <img src='upload/" . $_SESSION['Foto'] . "' alt=''> <br> <br>
            
            <div> Nome do Aluno: " . $_SESSION['name'] . " </div> <br>
            <div> Género/Sexo: " . $_SESSION['sexo'] . "</div> <br>
            <div> Ano Letivo: " . $_SESSION['ano'] . "º  </div> <br> <br>
            ");
        ?>
        <h3> Disciplinas: </h3>
        <?php
            echo ($_SESSION['text']);
        ?>
        <h3> Observações: </h3>
        <?php
        echo ("
            <div>
            " .
            $_SESSION['observ']
            . "
            </div>
            ");
        ?>
        <link rel="stylesheet" href="./lib/library.php">
    
        <form action="./php/pdf.php">
            <button type="submit"> Gerar pdp da Matrícula </button>
        </form>
        <form action="index.php">
            <button type="submit"> Criar nova Matrícula </button>
        </form>
    
    </div>

</body>

</html>