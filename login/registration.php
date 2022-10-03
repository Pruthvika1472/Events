<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
</head>
<body>
    <div class="regisContainer">
        <section class="regisWrapper">
            <form action="regis_validate.php" method="POST" style="text-align:center;">
             
             
                   <legend>REGISTRATION FORM</legend>  
                    <label>Name    : <input type="text" name="name"> </label><br><br>
                    <label>Email   : <input type="email" name="email"> </label><br><br>
                    <label>Password: <input type="password" name="password"></label><br><br>
                    <label>Phone   :<input type="text" name="phone"> </label><br><br>
                    <label>Address :<input type="textarea" rows="20" column="10" name="address"> </label>
                    <br><br>
                    <input type="submit" value="SUBMIT">
                    <br>
                    <br>
                    Already a member?<a href="login.php">Sign in</a>
            </form>
        </section>
    </div>
</body>
</html>