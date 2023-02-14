<?php
@session_start();

if (isset($_SESSION['auth'])){
    if ($_SESSION['auth'] == 1) {
        
    } 
    else{
        header(header: 'Location:' . $arrConfig['url_admin'] . '/forms/login.php');
    }
}
else {
    header(header: 'Location:' . $arrConfig['url_admin'] . '/forms/login.php');
}