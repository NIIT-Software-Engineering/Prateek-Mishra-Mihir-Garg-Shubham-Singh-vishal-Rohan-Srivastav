<!DOCTYPE html>
<html>
    <head>
    	<title>Login</title>
    </head>
    <body>
  <center>
 
  <h1>login</h1>      
  <form action="#" method="POST">

   <?php include 'login.php'; ?>

  Username: <input type="text" name="username"><br>
  Password: <input type="password" name="password"><br>
  <input type="submit" name="submit" value="submit">


  </center>
  </form>

  <br><br><br>

                                                                                  <center>New user ? Sign up below.</center>  

<center>
<h2>signup</h2>
<form action="#" method="POST">

  <?php include 'signup.php'; ?>

 Email ID: <input type="email" name="email"><br>
 Username: <input type="text" name="username"><br>
 Password: <input type="password" name="password"><br>
 Mob No   :<input type="int" name="phonenumber"><br>
 D.O.B   :<input type="date" name="dateofbirth"><br>

  <input type="submit" name="signup" value="signup">

  </center>
</form>  
  </body>
</html>
