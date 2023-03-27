<?php
include '../../include/config.inc.php';

/*
$xmlString = file_get_contents($arrConfig['url_admin'].'/administradores/administradores.xml');

//pr($xml);
$xml = new SimpleXMLElement($xmlString);
//$xml   = simplexml_load_string($buffer);
//$array = XML2Array($xml);
//$array = array($xml->getName() => $array);

$array = json_decode(json_encode((array) $xml), true);
$array = array($xml->getName() => $array);
pr($array);
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backoffice</title>
    <link rel="stylesheet" href="<?php echo $arrConfig['url_admin']; ?>/css/admin.css">
</head>
<body>
    <?php
    include $arrConfig['dir_admin'].'/include/menu.inc.php';
    ?>
    
    <h1>Listagem de adminstradores</h1>
    <a href="index.php?m=insert">Novo</a>

    <div class="listagem">
        <table>
            <tr>
                <?php
                foreach($arrDados['campos'] as $value) {
                    if(!isset($value['notlist'])) {
                        echo '<th>'.$value['legenda'].'</th>';
                    }
                }
                ?>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>

            <?php
            $sql = "SELECT * FROM $arrDados[tabela]";
            $res = my_query($sql);
            foreach($res as $k=>$v) {
                //$flagUser = false;
                $linkEditar = 'editar.php?id='.$v['id'];
                $linkEliminar = 'eliminar.php?id='.$v['id'];
                if($v['id'] == $_SESSION['uid']) {
                    //$flagUser = true;
                    $linkEliminar = '#';
                }
            ?>
            <tr>
                <?php
                foreach($arrDados['campos'] as $key2 => $value2) {
                    $flagMostraCampo = 1;
                    if(isset($value2['listagem'])) {
                        if($value2['listagem'] == 0) {
                            $flagMostraCampo = 0;
                        }
                    }
                    if($flagMostraCampo == 1) {
                        echo '<td>'.$v[$key2].'</td>';
                    }
                }
                ?>
                <td><a href="<?php echo $linkEditar; ?>">X</a></td>
                <td><a href="<?php echo $linkEliminar; ?>">X</a></td>
            </tr>
            <?php
            }
            ?>

        </table>
    </div>



</body>
</html>