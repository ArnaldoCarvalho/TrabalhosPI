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


    <h1>Inserir "<?php echo $arrDados['legenda_modulo']; ?>"</h1>
    <div>&nbsp;</div>

    <table>
    <form method="post" action="?m=tratainsert">



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
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="OK" /></td>
        </tr>
        
    </form>
    </table>

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
                echo '<tr>
                    <td>' . $arrCampo['legenda'] . '</td>
                    <td>' . '<input type="'.$arrCampo['tipo'].'" name="'.$nomeCampo.'" /></td>
                </tr>';
                break;
            

        case 'checkbox':
                $checked = $arrCampo['defeito'] ? 'checked' : '' ;
                echo '<tr>
                    <td>' . $arrCampo['legenda'] . '</td>
                    <td>' . '<input '.$checked.' type="checkbox" name="'.$nomeCampo.'" value="1"></td>
                </tr>';
                break;

        case 'select':
        case 'selectList':
        case 'radio':
        case 'file':
        case 'textarea':
                echo '<tr>
                <td>' . $arrCampo['legenda'] . '</td>
                <td>' . '<textarea name="'.$nomeCampo.'"></textarea></td>
                </tr>';
                break;
        
    }

}
?>