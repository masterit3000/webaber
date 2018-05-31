<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include './openDB.php';
include './closeDB.php';

function about (){
    $cnn = openDB();
    $sql = "select * from `abouts`";
    $result = mysqli_query($cnn, $sql);
    $about = array();
    if( $row = mysqli_fetch_array($result)){
        $adress = $row['adress'];
        $phone = $row ['phone'];
        $email = $row ['email'];
        $intro = $row ['short_intro'];
        $about = array (
            "adress" => $adress,
            "phone" => $phone,
            "email" => $email,
            "intro" => $intro,
        );
        return $about;
    }
    return null;
}
function contact ($contactform) {
    $cnn = openDB();
    $sql = "insert into `contacts` (`name`,`email`,`phone`,`message`) value (?,?,?,?)";
     $stm = $cnn->prepare($sql);
    $name = $contactform['name'];
    $email = $contactform['email'];
    $phone = $contactform['phone'];
    $message = $contactform['message'];
    $stm->bind_param("ssis", $name, $email,$phone,$message);
    $result = $stm->execute();
    if ($stm->error) {
        echo$stm->error;
    }
    $stm->close();
    $cnn->close();
    return $result;
}
function signup ($signup) {
    $cnn = openDB();
    $sql = "insert into `signup` (`ho`,`ten`,`email`,`phone`,`password`) value (?,?,?,?,?)";
     $stm = $cnn->prepare($sql);
    $ho = $signup['ho'];
    $ten = $signup['ten'];
    $email = $signup['email'];
    $phone = $signup['phone'];
    $password = $signup['password'];
    $stm->bind_param("sssss", $ho,$ten, $email,$phone,$password);
    $result = $stm->execute();
    if ($stm->error) {
        echo$stm->error;
    }
    $stm->close();
    $cnn->close();
    return $result;
}
function signup_driver ($signup) {
    $cnn = openDB();
    $sql = "insert into `signup_driver` (`ho`,`ten`,`email`,`phone`,`adress`) value (?,?,?,?,?)";
     $stm = $cnn->prepare($sql);
    $ho = $signup['ho'];
    $ten = $signup['ten'];
    $email = $signup['email'];
    $phone = $signup['phone'];
    $adress = $signup['adress'];
    $stm->bind_param("sssis", $ho,$ten, $email,$phone,$adress);
    $result = $stm->execute();
    if ($stm->error) {
        echo$stm->error;
    }
    $stm->close();
    $cnn->close();
    return $result;
}