<?php
include '../../include/config.inc.php';
include $arrConfig['dir_site'].'/include/auth.inc.php';

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


$strChave = '';
$arrCamposChave = array();

foreach($arrDados['campos'] as $key => $value) {
    $flagChaveCampo = 0;
    if(isset($value['chave'])) {
        if($value['chave'] == 1) {
            $flagChaveCampo = 1;
        }
    }
    if($flagChaveCampo) {
        $arrCamposChave[] = $key;
        $strChave .= $key.'=';
        $strChave .= "##VALOR$key##&";
    }
}

$strChave = substr($strChave,0,strlen($strChave)-1);
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
    

    <h1>Listagem "<?php echo $arrDados['legenda_modulo']; ?>"</h1>

    <div>
        <a href="index.php?m=insert">Inserir novo registo</a>
    </div>
    <div>&nbsp;</div>

    <?php
    if(isset($_GET['erro'])) {
        if($_GET['erro'] == 1) {
            echo '<div class="alert">Username já existe, tente outro username!</div>';
        } elseif($_GET['erro'] == 2) {
            echo '<div class="alert">Ocorreu um problema, contacto o administrador de sistema!</div>';
        }
    }
    ?>



    <div class="listagem">
        <table>
            <tr>
                <?php
                foreach($arrDados['campos'] as $value) {
                    $flagMostraCampo = 1;
                    if(isset($value['listagem'])) {
                        if($value['listagem'] == 0) {
                            $flagMostraCampo = 0;
                        }
                    }
                    if($flagMostraCampo) {
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
                $strChaveAux = $strChave;
                foreach($arrCamposChave as $chave) {
                    $strChaveAux = str_replace('##VALOR'.$chave.'##',$v[$chave],$strChaveAux);
                }                
                $linkEditar = '?m=edit&'.$strChaveAux;
                $linkEliminar = '?m=delete&'.$strChaveAux;
                
                /*if($v['id'] == $_SESSION['uid']) {
                    //$flagUser = true;
                    $linkEliminar = '#';
                }*/
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
                    if($flagMostraCampo) {
                        if(strlen($v[$key2]) > $arrDados['campos'][$key2]['maxlength'] && isset($arrDados['campos'][$key2]['maxlength'])) $v[$key2] = substr($v[$key2],0,$arrDados['campos'][$key2]['maxlength']) . '...';
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