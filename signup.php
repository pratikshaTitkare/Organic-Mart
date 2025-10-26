
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Sign up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="signup.css">
  </head>
<body>
  <div class="sign">
    <div class="title">SignUp</div>
    <div class="content">
      <form method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Name</span>
            <input type="text" name="nm" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" name="add" placeholder="Enter your address " required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="phno" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="unm" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" name="pass"placeholder="Enter your password" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="btnsub" value="Register">
        </div>
      </form>
    </div>
    <p>Already have an account? <a href="signin.php">Sign In</a></p>
  </div>
</body>
</html>
<?php

if(isset($_POST['btnsub']))
{
  extract($_POST);
  include("connection.php");
  $q="insert into register values('$nm','$add','$email','$phno','$unm','$pass')";
  mysqli_query($cn,$q);
  mysqli_close($cn);
  echo "<script>alert('Registration successful'); window.location='signin.php'</script>";
}
?>
