<?php
include '../../include/config.inc.php';
include $arrConfig['dir_site'].'/include/auth.inc.php';

$id = $_GET['id'];
$sql = "DELETE FROM administradores WHERE id = '$id'";
$res = my_query($sql);

header('location: '.$arrConfig['url_admin'].'/administradores/?delete='.$res);
exit();
?>