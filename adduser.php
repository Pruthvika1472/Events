<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Users</title>
</head>
<body>
    <div class="regisContainer">
        <section class="regisWrapper">
            <h2>Add users</h2>
            <form autocomplete="off" action="" method="post"> 
                    <label for="">Name    :</label>
                    <input type="text" id="name" value=""> <br><br>
                    <label for="">Email   : </label>
                    <input type="email" id="email" value=""> <br><br>
                    <label for="">Password:</label> 
                    <input type="password" id="password" value=""><br><br>
                    <label for="">Phone   :</label>
                    <input type="text" id="phone" value=""> <br><br>
                    <label for="">Address :</label>
                    <input type="textarea" rows="20" value="" column="10" id="address"> 
                    <br><br>
                    <button type="button" onclick="submitData('insert');">Insert</button>
            </form>
        </section>
    </div>
    <br>
    <a href="index.php">Go to Index</a>
    <?php  require 'script.php';?>
</body>
</html>