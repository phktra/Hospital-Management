<?php
    /*$dbhost = 'localhost:3306';
    $dbuser = 'root';
    $dbpwd = '';

    $conn = mysqli_connect($dbhost, $dbuser, $dbpwd);

    if (!$conn) {
        die("Connection failed: " .mysqli_connect_error());
        exit();
    }

    mysqli_select_db($conn, 'db_doctor_appointment') or die("Could not select database");
    //change character set to utf8  
    mysqli_set_charset($conn, 'utf8');
    */

    $host = 'localhost';
    $userName = 'root';
    $password = '';
    $database = 'db_doctor_appointment';

    $conn = mysqli_connect($host, $userName, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }else {
        // echo "Connected successfully";
    }

    mysqli_set_charset($conn, 'utf8');



?>