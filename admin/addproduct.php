<html>
<head>
        <title>OrganicMart</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
        nav{
        background-color: aqua;
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
        color: white;
        padding:5px;
       }
       .navbar a{
        font-weight: bold;
        color: white;
        font-size:18px;
       }
            body{
                background-color:whitesmoke;
            }
            .box{
            height: 520px;
            align-items: center;
            width: 60%;
            max-width: 600px;
            background-color: white;
            padding: 10px;
            margin: 20px auto;
            box-shadow: 0 0 10px rgba(7, 7, 7, 0.1);
            border-radius: 8px;
        }
        .btn{
            width:100%;
        }
        </style>
</head>
    <body>
    <nav class="navbar navbar-inverse">
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
                        <li><a href="viewUser.php">Home</a></li>
                        <li><a href="viewUser.php">View Users</a></li>
                        <li><a href="viewOrder.php">View Orders</a></li>
                        <li><a href="displayproduct.php">All Products</a></li>
                        <li><a href="addproduct.php">Add Products</a></li>
                        <li><a href="manageprod.php">Manage Products</a></li>
                        <li><a href=profile.php class="text-danger"><span class="glyphicon glyphicon-user"></span></a></li>
                </ul>
            </div>
        </nav>
        <div class="box">
            <h1><center>Add Product</center></h1>
        <form method="post" enctype="multipart/form-data">
            Product ID<input type="text" name="txtpid" class="form-control"></br>
            Category<select name="lstcat" class="form-control">
                <option value="select">--Select--</option>
                <option value="vegetable">Vegetable</option>
                <option value="fruit">fruits</option>
                <option value="dryfruit">Dryfruits</option>
            </select><br>
            Product Name<input type="text" name="txtpname" class="form-control"><br>
            Price<input type="text" name="txtprice" class="form-control"><br>
            Image<input type="file" name="file1" class="form-control"><br>
            
            <input type="submit" name="btnsub" class="btn btn-primary">
        </form>
</div>
    </body>
</html>
<?php
      if(isset($_POST['btnsub']))
      {
        extract($_POST);
        $fn=$_FILES['file1']['name'];
        $s=$_FILES['file1']['size'];
        $tnm=$_FILES['file1']['tmp_name'];

        $ptr1=fopen($tnm,"r");
        $ptr2=fopen("../img/$fn","w");
        $data=fread($ptr1,$s);
        fwrite($ptr2,$data);
        fclose($ptr1);
        fclose($ptr2);

        $cn=mysqli_connect("localhost","root","");
        $db=mysqli_select_db($cn,"organic");
        $q = "insert into product  values ('$txtpid','$lstcat','$txtpname','$txtprice','$fn')";

        if(mysqli_query($cn,$q))
        echo"<script>alert('Product Uploaded Successfully'); window.location='addproduct.php'</script>";
        else
        echo"<script>alert('Failed to Upload product');</script>";
        mysqli_close($cn);
    }?>