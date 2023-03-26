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



        <?php
        foreach($arrDados['campos'] as $key => $value) {
            $flagMostraCampo = 1;
            if(isset($value['inserir'])) {
                if($value['inserir'] == 0) {
                    $flagMostraCampo = 0;
                }
            }
            if($flagMostraCampo) {
                mostraCampo($key, $value);
            }
        }
        ?>


        
        <!--username: <input type="text" name="usr" /><br>
        password: <input type="password" name="pwd" /><br>
        ativo: <input type="checkbox" name="ativo" value="1" /><br>-->
        <input type="submit" name="submit" value="OK" />
    </form>

</body>
</html>



<?php
function mostraCampo($nomeCampo, $arrCampo) {

    switch($arrCampo['tipo']) {
        case 'textbox':
        case 'password':
        case 'date':
        case 'time':
        case 'color':
                echo $arrCampo['legenda'] . ': <input type="'.$arrCampo['tipo'].'" name="'.$nomeCampo.'" /><br>';
                break;
            

        case 'checkbox':
        case 'select':
        case 'selectList':
        case 'radio':
        case 'file':
        case 'textarea':
                echo $arrCampo['legenda'] . ': <textarea name="'.$nomeCampo.'"></textarea><br>';
                break;
        
    }

}
?>