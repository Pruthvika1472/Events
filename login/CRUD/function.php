<?php
require "config.php";

if(isset($_POST['action'])){
    if($_POST['action']=="insert"){
        insert();
    }
}

function insert(){
    global $conn;
    $name=$_POST["user_name"];
    $email=$_POST['user_email'];
    $password=$_POST['user_password'];
    $phone=$_POST['user_phone'];
    $address=$_POST['user_phone'];

    $query="INSERT INTO users VALUES ("","Anu","anu@gmail.com","anu123","7657897789","Bengaluru",current Timestamp());"

}
?>