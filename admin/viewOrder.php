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
            <h1 align=center>Orders</h1><hr>
            <table class="table table-borderd" align="center">
                <thead>
                    <tr>
                        <th>Buy ID</th><th>Username</th><th>Poduct ID</th>
                        <th>Category</th><th>Product name</th><th>Price</th><th>Quantity</th><th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                  $cn=mysqli_connect("localhost","root","");
                  $db=mysqli_select_db($cn,"organic");
                  $q="SELECT * from buy";
                  $rs=mysqli_query($cn,$q);
                  while($a=mysqli_fetch_array($rs))
                  {
                    extract($a);
                    echo "<tr>";
                    echo "<td>$buy_id</td><td>$username</td><td>$product_id</td><td>$category</td><td>$product_name</td><td>$price</td><td>$quantity</td><td>$amount</td>";
                    echo"</tr>";
                  }
                  mysqli_close($cn);
                ?>
                </tbody>
            </table>
        </div>
    </body>
</html>