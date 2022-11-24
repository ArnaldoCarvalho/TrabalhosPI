<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <title>Criar CC</title>
    <link rel="stylesheet" href="css/style.css">
    <script src='js/codigo.js'></script>  
</head>
<body>
<h1> CC Criado </h1>


<form class="Form" action="./index.php" method="post">
    <button type="submit">Criar novo cc</button>
</form><br>


<div class=CCCreate>
    <?php
    session_start();

    echo '<input  class="apelido" type="text" value="' . $_SESSION['apelido'] . '" disabled><br><br>';
    echo '<input  class="name" type="text" value="' . $_SESSION['name'] . '" disabled><br><br>';
    echo '<input  class="sexo" type="text" value="' . $_SESSION['sexo'] . '" disabled><br><br>';
    echo '<input  class="height" type="text" value="' . $_SESSION['height'] . '" disabled><br><br>';
    echo '<input  class="nacionalidade" type="text" value="' . $_SESSION['nacionalidade'] . '" disabled><br><br>';
    echo '<input  class="datanasc" type="date" value="' . $_SESSION['datanasc'] . '" disabled><br><br>';
    echo '<input  class="nid" type="text" value="' . $_SESSION['nid'] . '" disabled><br><br>';
    echo '<input  class="ndoc" type="text" value="' . $_SESSION['ndoc'] . '" disabled><br><br>';
    echo '<input  class="dataval" type="date" value="' . $_SESSION['dataval'] . '" disabled><br><br>';

    ?>
</div>
</body>
</html>