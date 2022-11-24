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
<h1> CC Criado </h1>


<form class="Form" action="./index.php" method="post">
    <button type="submit">Criar novo cc</button>
</form><br>


<div class=CCCreate>
    <?php
    session_start();
    ?>
    <input  class="apelido" type="text" value= <?php echo $_SESSION['apelido']?> disabled><br><br>
    <input  class="name" type="text" value=<?php echo $_SESSION['name']?> disabled><br><br>
    <input  class="sexo" type="text" value=<?php echo $_SESSION['sexo']?> disabled><br><br>
    <input  class="height" type="text" value=<?php echo $_SESSION['height']?> disabled><br><br>
    <input  class="nacionalidade" type="text" value=<?php echo $_SESSION['nacionalidade']?> disabled><br><br>
    <input  class="datanasc" type="date" value=<?php echo $_SESSION['datanasc']?> disabled><br><br>
    <input  class="nid" type="text" value=<?php echo $_SESSION['nid']?> disabled><br><br>
    <input  class="ndoc" type="text" value=<?php echo $_SESSION['ndoc']?> disabled><br><br>
    <input  class="dataval" type="date" value=<?php echo $_SESSION['dataval']?> disabled><br><br>
    <img    class="assinatura" src= <?php echo 'upload/'.$_SESSION['Assinatura'] ?> alt="">
    <img    class="foto" src= <?php echo 'upload/'.$_SESSION['Foto'] ?> alt="">
</div>
</body>
</html>