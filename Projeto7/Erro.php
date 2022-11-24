<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <title>Calcula o troco</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<form class="Form" action="./php/calculaTroco.php" method="post">
    <h1> Calculador de troco </h1>

    <label for="">Valor a Pagar:</label>
    <input type="number" step="0.01" min="0" name="ValPay" value=""><br>
    <?php echo '<label>Tem que introduzir um valor numérico maior ou igual a 0</label><br>' ?><br>
    <label for="">Montante recebido:</label>
    <input type="number" step="0.01" min="0" name="MontPay" value=""><br>
    <?php echo '<label>Tem que introduzir um valor numérico maior ou igual a 0 </label><br>' ?><br>
    <input type="submit">
</form><br>

</body>
</html>