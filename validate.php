<?php

    include('dbconn.php');

    $username = $_POST['username'];
    $password = $_POST['pass'];

    // echo $password."<br>";
    // echo $username."<br>";

   $sql = "SELECT * FROM user_details WHERE username = '$username' AND BINARY password='$password';";
   $result = mysqli_query($conn,$sql);



    $rowcount = mysqli_num_rows($result);



    echo $rowcount;

    if($rowcount == 1) {
        $row = mysqli_fetch_assoc($result);
        echo "Yeah! User exists!!!";
    } else {
        echo "User does not exists!!!";
    }

    print_r($result); 

    // from mysqli query
    echo "<br>";
    //print_r($row); from mysqli num rows

    // echo $result; from mysqli query ::
    


?>