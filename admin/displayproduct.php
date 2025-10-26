<!DOCTYPE HTML>
<html>
<head>
    <title>Products</title>
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
        .caption {
                text-align:center;
            }
            .btn {
                border-radius: 5px;
                border: black;
                color: black;
                cursor: pointer;
                transition: all 0.3s ease;
                background-color:yellow;
            }
            .btn:hover {
                transform: scale(0.99);
                transition: .5s;
                background: #5cb467 ;
            }
            .btn.active {
               background-color: green;
               color: white;
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
        <h1><center>All Products Stock</center></h1><hr>
        <div class="row">
            <?php
            $cn = mysqli_connect("localhost", "root", "");
            $db = mysqli_select_db($cn, "organic");
            $q = "select * from product";
            $rs = mysqli_query($cn, $q);
            $i = 0;
            while($a=mysqli_fetch_assoc($rs)){

                echo "<div class='col-md-3'>
                <div class=thumbnail>
                            <img src='img/$a[product_img]' style='width:350px ;height:250px;'><br>
                            <div class='caption'>
                            Product No:$a[product_id]<br>
                            Name:$a[product_name]<br>
                            Price:$a[price]<br><br>
                        </div></div>
                      </div>";

                $i++;
                if ($i == 4) {
                    $i = 0;
                    echo "</div><div class='row'>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
