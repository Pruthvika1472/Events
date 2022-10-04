<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Index</h2>
    <table border=1>
        <tr>
            <td>#</td>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Address</td>
            <td>Action</td>
        </tr>
        <?php
            require 'config.php';
            $rows=mysqli_query($conn,"SELECT * FROM users_details");
            $i=1;
        ?>

        <?php

        foreach($rows as $row):?>
        <tr id= <?php echo $row["user_Id"]; ?>>
        <td><?php  echo $i++; ?></td>
        <td><?php echo $row["user_name"]; ?></td>
        <td><?php echo $row["user_email"]; ?></td>
        <td><?php echo $row["user_phone"]; ?></td>
        <td><?php echo $row["user_address"]; ?></td>
        <td><a href="edituser.php?id=<?php echo $row['user_Id'] ;?>">Edit</a>
        <button type="button" onclick="submitData(<?php echo $row['user_Id'] ;?>);">Delete</button>
        </td>
        </tr>
        <?php endforeach;?>
    </table>
    <br>
    <a href="adduser.php">Add User</a>
    <?php require 'script.php'; ?>
</body>
</html>