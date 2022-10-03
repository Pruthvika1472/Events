<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if($conn) {
    //    echo "Successfully connected to Database!";
    } else {
        echo "Unsuccessful!";
    }

?>