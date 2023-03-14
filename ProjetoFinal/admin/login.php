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
        echo '<div class="alert">Dados incorretos, tente novamente!</div>';
    
    } elseif(isset($_GET['auth'])) {
        if($_GET['auth'] == 0) {
            echo '<div class="alert">É necessário efetuar login para navegar nas páginas de administração!</div>';
        }

    } elseif(isset($_GET['logout'])) {
        if($_GET['logout'] == 1) {
            echo '<div class="alert_OK">Obrigado por utilizar os nossos sistemas bla bla bla!!</div>';
        }
    }
    ?>
    

    <form method="post" action="tratalogin.php">
        username: <input type="text" name="usr" /><br>
        password: <input type="password" name="pwd" /><br>
        <input type="submit" name="submit" value="OK" />
    </form>

    <div><a href="registo.php">Registe-se aqui!</a></div>
    <div><a href="esqueceu.php">Esqueceu a sua password?</a></div>
</body>
</html>