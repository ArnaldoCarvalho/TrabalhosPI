<?php
function uploadFile($file, $nomeFicheiro = null, $nomePasta = null, $tamUpload = null, $arrFilesAuth = null)
{
    $tamUpload = $tamUpload == null ? 1048576 * 3 : $tamUpload;
    $arrFilesAuth = $arrFilesAuth == null ? array('image/jpeg', 'image/png', 'image/gif') : $arrFilesAuth;
    $nomeFicheiro = $nomeFicheiro == null ? uniqid('foto_') . '.jpg' : $nomeFicheiro;
    $nomePasta = $nomePasta == null ? '../../upload' : $nomePasta;

    if ($file['error'] == 0) {
        if ($file['size'] <= $tamUpload) {
            if (in_array($file['type'], $arrFilesAuth)) {
                //$nomeFicheiro = $file['name'];
                //$nomePasta = 'upload';
                move_uploaded_file($file['tmp_name'], $nomePasta . '/' . $nomeFicheiro);
            }
        }
    }
    return  '/upload/'. $nomeFicheiro;
}

function get_logs( $get_number_of_pages = false) {
    global $conn;

    $page = isset( $_GET['page'] ) ? $_GET['page'] : 1;

    $number_of_results = 20;

    $sql_total = "SELECT * FROM logs";
    $result_total = my_query( $sql_total );
    $total = count($result_total);

    if( $get_number_of_pages ) {
        return ceil( $total / $number_of_results);
    }

    $init_result = ($page - 1) * $number_of_results;

    $sql = "SELECT * FROM log LIMIT $init_result, $number_of_results";
    $result = my_query( $sql );

    if( ! $result ) {
        return false;
    }

    return $result;

    $conn->close();
}

function post_log(){}{
    @session_start();
}
/*
function logs(){
    //
    //
    $sql = "INSERT INTO log () VALUES ('') ";
    my_query($sql);

}
*/
function index($array){
    $key=array(count($array));  
    $i = 0;
    echo count($array);
    foreach($array as $x=>$val) { 
        $key[$i]=$x;
        $i = $i+1;
    }

    return $key;
}
?>