<?php
    define('SITEURL','localhost:81/Kt_web');
    define('HOST','localhost');
    define('USER','root');
    define('PASS','');
    define('DB_NAME','dhtl');
    $conn = mysqli_connect(HOST,USER,PASS,DB_NAME);
    mysqli_set_charset($conn, 'UTF8');
    if(!$conn){
        die("Không thể kết nối: ".mysqli_connect_error());
    }
    ?>