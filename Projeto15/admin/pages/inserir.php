<?php
include '../../include/config.inc.php';
include $arrConfig['dir_site'].'/include/auth.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backoffice - Login</title>
    <link rel="stylesheet" href="<?php echo $arrConfig['url_admin']; ?>/css/admin.css">
</head>
<body>
    <?php
    include $arrConfig['dir_admin'].'/include/menu.inc.php';
    ?>

    <?php
    if(isset($_GET['erro'])) {
        if($_GET['erro'] == 1) {
            echo '<div class="alert">Username já existe, tente outro username!</div>';
        } elseif($_GET['erro'] == 2) {
            echo '<div class="alert">Ocorreu um problema, contacto o administrador de sistema!</div>';
        }
    }
    ?>

    <form method="post" action="tratainserir.php">
        nome: <input type="text" name="nome" /><br>    
        username: <input type="text" name="usr" /><br>
        password: <input type="password" name="pwd" /><br>
        ativo: <input type="checkbox" name="ativo" value="1" /><br>
        <input type="submit" name="submit" value="OK" />
    </form>

</body>
</html>