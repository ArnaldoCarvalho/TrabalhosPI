<?php
include '../include/config.inc.php';
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

    <?php
    // obter os dados do user a editar
    $id = $_GET['id'];
    $sql = "SELECT * FROM administradores WHERE id = '$id'";
    $res = my_query($sql);
    if(count($res)) {
        $nome = $res[0]['nome'];
        $usr = $res[0]['username'];
        $txtAtivo = $res[0]['ativo'] ? 'checked' : '' ;

    } else {
        die("ERRO na query!");
    }
    ?>

    <form method="post" action="trataeditar.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        nome: <input type="text" name="nome" value="<?php echo $nome; ?>" /><br>    
        username: <input type="text" name="usr" value="<?php echo $usr; ?>" /><br>
        password: <input type="password" name="pwd" /><br>
        ativo: <input type="checkbox" name="ativo" value="1" <?php echo $txtAtivo; ?> /><br>
        <input type="submit" name="submit" value="OK" />
    </form>

</body>
</html>