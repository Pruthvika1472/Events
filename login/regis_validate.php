<?php
  include('dbconn.php');

  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $phone=$_POST['phone'];
  $address=$_POST['address'];

/*Validating whether user already-exist with same email and phone_number  */
$sql = "SELECT * FROM registration WHERE email = '$email' OR phone='$phone';";
$result = mysqli_query($conn,$sql);
//print_r($result); 

 $rowcount = mysqli_num_rows($result);

// echo $rowcount;

 if($rowcount == 1) {
     $row = mysqli_fetch_assoc($result);
     echo "Yeah! User Already exists with '$email' or '$phone'!!!";
 } else {
    // echo "User does not exists!!!";

    /* Inserting values from form to DB */

      $sql="INSERT INTO `registration` (`regis_ID`, `name`, `email`, `password`, `phone`, `address`, `time`) VALUES (NULL, '$name', '$email', '$password', '$phone', '$address', current_timestamp())";
      if(mysqli_query($conn,$sql)){
    echo "successfully inserted";
    }
    else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

?>