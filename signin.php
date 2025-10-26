<?php
session_start();
?>
<!Doctype html>
<html>
    <head>
        <title>OrganicMart</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="signn.css">
      </head>
    <body>
      
      <div class="sign">
            <h1>Sign In</h1>
            <form name="signInForm"  method="post">
                <div class="user-details">
                  <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" name="unm"  placeholder="Enter your username" required>
                  </div>
        
                  <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" name="password" placeholder="Enter your password" required>
                  </div>
                </div>
                <div class="button">
                  <input type="submit" name="btnsub" value="Sign In">
                </div>
              </form>
              <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
        </div>  
    </body>
</html>
<?php
if(isset($_POST['btnsub']))
{
  extract($_POST);
  $cn=mysqli_connect("localhost","root","");
  $db=mysqli_select_db($cn,"organic"); 
  $q="select * from register where username='$unm' and password='$password'";
  $result=mysqli_query($cn,$q);
  if($a=mysqli_fetch_array($result))
  {
    $_SESSION['username']=$unm;
    echo "<script>window.location='user/profile.php'</script>";
  }
  else{
    echo"<script>alert('<font color=red>Incorrect username or password</font>');<script>";
    mysqli_close($cn);
  }
}
?>


