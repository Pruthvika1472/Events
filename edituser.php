<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Users</title>
</head>
<body>
    <div class="regisContainer">
        <section class="regisWrapper">
            <h2>Edit User</h2>
            <form autocomplete ="off" action="" action ="" method="post">
              <?php require 'config.php';
              $id =$_GET["id"];
              $rows=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM users_details WHERE user_Id=$id"))
              ?>
                  <input type="hidden"  id="id" value="<?php echo $rows['user_Id']; ?>"> </label><br><br>
                    <label for="">Name    : </label>
                    <input type="text"  id="name" value="<?php echo $rows['user_name']; ?>"> <br><br>
                    <label for="">Email   : </label>
                     <input type="email"  id="email" value="<?php echo $rows['user_email']; ?>"><br><br>
                    <label for="">Password:</label>
                     <input type="password"   id="password" value="<?php echo $rows['user_password']; ?>"><br><br>
                    <label for="">Phone   :</label>
                    <input type="text"  id="phone" value="<?php echo $rows['user_phone']; ?>"> <br><br>
                    <label for="">Address :</label>
                    <input type="textarea" rows="20" column="10" id="address" value="<?php echo $rows['user_address']; ?>"> 
                    <br><br>
                    <button type="button"  onclick="submitData('edit');">Edit</button>
            </form>
        </section>
    </div>
    <br>
    <a href="index.php">Go to Index</a>
    <?php 
        require 'script.php';
    ?>
</body>
</html>