<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = "product_ratings";
    $connection = mysqli_connect($servername, $username, $password, $dbname);
      
    // Validate database connection
    if(!$connection){
        die('Database connection error : ' .mysqli_connect_error());
    }
    
?>