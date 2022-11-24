<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <title>Calcula o troco</title>
    <link rel="stylesheet" href="css/style.css">
    <script src='js/codigo.js'></script>
    
</head>
<body>

<form class="Form" action="./index.php" method="post">
    <h1> Troco a pagar </h1>
    <?php
    session_start();
    echo '<br><br>';
  
    echo 'Troco: '.$_SESSION['Troco']. ' euros'; 
    echo $_SESSION['TrocoDiv']; 

    ?> 
    <br><br>
    <button type="submit">Pedir novo troco</button>
</form><br>

</body>
</html>