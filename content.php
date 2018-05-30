<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (isset($_GET['page']) && $_GET['page'] != "") {

    $page = $_GET['page'];
    include './' . $page . ".php";
} else {

    include './trangchu.php';
}