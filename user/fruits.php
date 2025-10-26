
<?php
 $cn=mysqli_connect("localhost","root","","organic");
 $query="SELECT * from product where product_category = 'fruit' ";
 $result=mysqli_query($cn,$query);
 $rw=0;
?>
<html>
    <head>
        <title>OrganicMart</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
                margin-top:-20px;
                font-size: 25px;
                font-weight: 300;
            }
            .head h1{
                text-align:center;
                font-weight:800;
                font: size 150px;
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
                background: white;
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
            #cart{
                background-color:orange;
            }
            #buy{
                background-color:yellow;
            }
            h2{
                color:green;
                font-weight:300;
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
                    <li class=dropdown><a class="dropdown-toggle" data-toggle="dropdown">Products</a>
                        <ul class="dropdown-menu">
                            <li><a href="vege.php" >Vegetables</a></li>
                            <li><a href="fruits.php" >Fruits</a></li>
                            <li><a href="dry.php" >Dry-Fruits</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="rating.php">Feedback</a></li>
                    <li><a href=profile.php class="text-danger"><span class="glyphicon glyphicon-user"></span></a></li>
                </ul>
        </div>
    </nav>
            
        <div class="container-fluid">
            <center>
                <div class="head">
                    
                    <h1>Our Products</h1>
                </div>
                
            </center>
            <hr>
           <sction class="catehogy" id="category">
            <h2 align=center>Fruits</h2>
            <div class="row">
                    <?php
                 while($row=mysqli_fetch_assoc($result)){
                    extract($row);
                    echo"<div class=col-md-3>
                    <div class=thumbnail>
                    <img class=img-rounded src=../img/$product_img style='height:270px; width:100%'>
                    <br>
                    <h3><center>$product_name</center></h3>
                    <p><center>Price=$price</center></p>
                    <center><a href='buy.php?product_id=$product_id&price=$price' id=buy class='btn '>Buy Now</a></center><br>";

                    echo"</div></div>";
                 }
                ?>
                </div>
                </div>
                </body>  
</html>
<?php
 if(isset($_POST['buy']))
 {
    $product_id=$_POST[''];
    echo "<script>alert('Product ID $product_id added to cart');</script>";
 }
 mysqli_close($cn);
?>