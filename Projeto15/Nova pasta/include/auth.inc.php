<?php
@session_start();
if(!isset($_SESSION['auth'])) {
    header('location: '.$arrConfig['url_admin'].'/login.php?auth=0');
}
?>