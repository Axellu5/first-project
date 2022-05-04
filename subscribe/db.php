<?php 

    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "tajam_subscribers");

    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    if($mysqli->connect_error){
        echo "Sorry, a login error has occurred.";
        echo 'Error: ' . $mysqli->connect_error . '\n';
        exit(); 
    }
    
    mysqli_query($mysqli, "INSERT INTO subscribers (email) VALUES('$_POST[subscribe]')");


?>