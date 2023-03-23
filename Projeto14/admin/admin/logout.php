<?php
include '../include/config.inc.php';
//session_unset($_SESSION['auth']);
session_destroy();

header('location: '.$arrConfig['url_admin'].'/login.php?logout=1');
exit();
?>