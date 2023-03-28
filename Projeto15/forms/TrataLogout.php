<?php

include('../includes/config.inc.php');
@session_destroy();
$_SESSION['auth'] = '0';
header('Location: ' .$arrConfig['url_site'] . '/forms/login.php?Log=1');

?>