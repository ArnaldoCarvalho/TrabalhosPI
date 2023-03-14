<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backoffice - Login</title>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    
    <?php
    if(isset($_GET['erro'])) {
        if($_GET['erro'] == 1) {
            echo '<div class="alert">Username já existe, tente outro username!</div>';
        } elseif($_GET['erro'] == 2) {
            echo '<div class="alert">Ocorreu um problema, contacto o administrador de sistema!</div>';
        }
    } elseif(isset($_GET['ok'])) {
        echo '<div class="alert_OK">O seu registo foi efetuado com sucesso, aguarde validaçlão do administraador!</div>';
    }
    ?>

    <form method="post" action="trataregisto.php">
        nome: <input type="text" name="nome" /><br>    
        username: <input type="text" name="usr" /><br>
        password: <input type="password" name="pwd" /><br>
        <input type="submit" name="submit" value="OK" />
    </form>

    <div><a href="login.php">Login</a></div>
</body>
</html>