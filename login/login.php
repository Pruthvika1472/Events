<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css"> 
   
  </head>
 
  <body>
    <div class="formContainer">
      <section class="formWrapper">
      <form action="validate.php" method="POST">
      <label for="username">Username: </label>
      <input type="text" name="username" required>
     
      <br>
      <br>
      <label>Password:</label>
      <input type="password" name="pass" required>
      <br>
      <br>
      <input type="reset">
      <input type="submit" value="Login ">
    </form>
      </section>
    </div>
   
  </body>
</html>
