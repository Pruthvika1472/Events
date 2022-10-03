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
            <form action="regis_validate.php" method="POST" style="text-align:center;">
             
             
                   <legend>REGISTRATION FORM</legend>  
                    <label for="">Name    : <input type="text" name="name"> </label><br><br>
                    <label for="">Email   : <input type="email" name="email"> </label><br><br>
                    <label for="">Password: <input type="password" name="password"></label><br><br>
                    <label for="">Phone   :<input type="text" name="phone"> </label><br><br>
                    <label for="">Address :<input type="textarea" rows="20" column="10" name="address"> </label>
                    <br><br>
                    <button> type="submit" value="SUBMIT" onclick="submitData('insert');">Insert</button>
            </form>
        </section>
    </div>
    <br>
    <a href="index.php">Go to Index</a>
    <?php 
        require 'script.php'
    ?>
</body>
</html>