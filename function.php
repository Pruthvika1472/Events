<?php
require "config.php";

if(isset($_POST['action'])){
    if($_POST['action']=="insert"){
        insert();
    }
    else if($_POST["action"]=="edit"){
        edit();
    }
    else{
        delete();
    }
}

function insert(){
    global $conn;
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];

    $query="INSERT INTO `users_details` (`user_Id`, `user_name`, `user_email`, `user_password`, `user_phone`, `user_address`, `time`) VALUES (NULL, '$name', '$email', '$password', '$phone', '$address', current_timestamp());";
    mysqli_query($conn,$query);
    echo "Inserted Sucessfully";
}

function edit(){
    global $conn;

    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
  
   $query="UPDATE users_details SET user_name='$name',user_email='$email',user_password='$password' ,user_phone='$phone',user_address='$address' WHERE user_Id=$id";
   mysqli_query($conn,$query);
   echo "Updated Sucessfully";
}

function delete(){
    global $conn;

    $id=$_POST["action"];
    $query="DELETE FROM users_details WHERE user_Id=$id";
    mysqli_query($conn,$query);
    echo "Deleted Sucessfully";
}

?>