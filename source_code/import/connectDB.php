<?php

function database(){
    $db=mysqli_connect("localhost","root","root");
    // $db=mysqli_connect("mysql.comp.polyu.edu.hk","14116974d","migdzart");
    mysqli_select_db($db, "root");
    if (!$db)
    {
        die('Could not connect: ' . mysqli_error());
    }
    // echo "Connected successfully"."\r\n";
    return $db;
}

?>