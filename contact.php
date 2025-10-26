<!DOCTYPE html>
<html>
    <head>
        <title>OrganicMart</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="contact.css">
        <link rel="stylesheet" href="style.css">
        <style>
            nav{
        opacity: 0.8;
        background-color: #a4d792;
       }
       .navbar #para{
        text-align:right;
        color: black;
        text-align: center;
        font-size: 52px;
        padding:0.1rem;
        font-weight: bold;
        font-family: 'Times New Roman', Times, serif;
       }
       .navbar #logo{
        font-size: 30px;
        color: black;
        padding:5px;
       }
       .navbar a{
        font-weight: bold;
        color: #096c47;
        font-size:18px;
       }
       .head{
                margin-top:-10px;
                font-size: 25px;
                font-weight: 300;
            }
            .head h1{
                text-align:center;
                font-weight:800;
                font: size 150px;
            }
        </style>
    </head>
    <body>
    <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                    <a class="navbar-brand" href="#" class="logo" id="logo"><span class="glyphicon glyphicon-shopping-cart"></span>OrganicMart</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href=signin.php class="text-danger">User Login</a></li>
                    <li><a href=adminsignin.php class="text-danger">Admin Login</a></li>
                </ul>
            </div>
        </nav>
        
        <div class="container-fluid">
            <div class="head">
                <h1><center>Contact Us</center></h1>
            </div>
            <div class="contact">
                <div class="col-md-4">
                    <div class="box">
                        <span class="glyphicon glyphicon-earphone"></span>
                        <h4>+91 9898989898</h4>
                        <br>
                        <p>Phone Number</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <span class="glyphicon glyphicon-envelope"></span>
                        <h4>organicmart@gmail.com</h4>
                        <br>
                        <p>Email</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <span class="glyphicon glyphicon-map-marker"></span>
                        <h4>At Post Kashil, Tal Dist <br>Satara 415519</h4>
                        <p>Address</p>
                    </div>
                </div>
            </div>
            <div class="form1">
                <img src="img/c1.jpg" width="100%" height="420px">
            </div>
            <div class="form2">
                <form method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
                    <div class="txt_field">
                        <label for="name" class="custom-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="txt_field">
                        <label for="email" class="custom-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="txt_field">
                        <label for="contact" class="custom-label">Contact Number</label>
                        <input type="text" name="contact" id="contact" class="form-control" placeholder="Contact Number" required>
                    </div>
                    <div class="txt_field">
                        <label for="message" class="custom-label">Message</label>
                        <textarea id="message" name="message" rows="6" class="form-control" placeholder="What can we help you with?"></textarea>
                    </div>
                    <input name="btnsub" type="Submit" value="Submit">
                </form>                    
            </div>
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3805.5465793185135!2d74.086555!3d17.481403!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc229253c5be5f5%3A0xc6545ed76eec8de3!2sKashil!5e0!3m2!1sen!2sin!4v1707399853984!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            
            </div>
            <script src="contact.js"></script>
        </div>
    </body>
</html>
<?php
if(isset($_POST['btnsub']))
{
  extract($_POST);
  include("connection.php");
  $q="insert into contact values('$name','$email','$contact','$message')";
  mysqli_query($cn,$q);
  mysqli_close($cn);
  echo "<script>alert('Thank you, we'll reach you soon!'); window.location='index.php'</script>";
}
?>