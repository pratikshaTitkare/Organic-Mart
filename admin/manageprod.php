<!DOCTYPE HTML>
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
            table{
                border: 1px solid gray;
                background-color:white;
            }
            th{
                background-color:gray;
                text:white;
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

        <div class="container">
            <h1 align=center>Manage Products</h1>
            <table class="table table-borderd" align="center">
                <thead>
                    <tr>
                        <th>Actions</th><th>Product Id</th>
                        <th>Product Category</th><th>Product Name</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                  $cn=mysqli_connect("localhost","root","","organic");
                  $q="SELECT * from product";
                  $rs=mysqli_query($cn,$q);
                  while($a=mysqli_fetch_array($rs))
                  {
                    extract($a);
                    echo "<tr>";
                    echo "<td><a class='btn btn-danger btn-xs' href='del.php?product_id=$product_id'>Delete</a><a class='btn btn-primary btn-xs' href=up.php?product_id=$product_id>Update</a></td>";
                    echo "<td>$product_id</td>";
                    echo"<td>$product_category</td>";
                    echo "<td>$product_name</td>";
                    echo "<td>$price</td>";
                    echo"</tr>";
                  }
                  mysqli_close($cn);
                ?>
                </tbody>
            </table>
        </div>
    </body>
</html>