
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function openDB() {
    $sever = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "taxi";
    $cnn = mysqli_connect($sever, $user, $pass, $dbname);

    if ($cnn->connect_error) {
        echo 'SQL connect fail';
        return NULL;
    }
    mysqli_query($cnn,"SET character_set_results=utf8" );
//    mb_language('uni');
//    mb_internal_encoding('UTF-8');
//    mysqli_select_db($dbname, $cnn);
    mysqli_query($cnn,"set names 'utf8'");
    return $cnn;
}

?>