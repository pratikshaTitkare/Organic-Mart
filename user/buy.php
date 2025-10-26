<?php
session_start();

$id = isset($_GET['product_id']) ? $_GET['product_id'] : null;
$nm = isset($_SESSION['username']) ? $_SESSION['username'] : null; // Check if Email is set in session

$price = isset($_GET['product_price']) ? $_GET['product_price'] : null;
$fl = "";
$im = "";
$c = "";

if (isset($_POST['btnsub'])) {
    $qty = $_POST['qty']; // Corrected field name
    $am = $_POST['amt'];
}

$cn=mysqli_connect("localhost","root","","organic");
if ($id !== null) {
    $rs = mysqli_query($cn, "SELECT * FROM product WHERE product_id = '$id'");

    if (!$rs) {
        die('Error: ' . mysqli_error($cn));
    }

    if (mysqli_num_rows($rs) > 0) {
        $a = mysqli_fetch_array($rs);
        $pnm=$a["product_name"];
        $c = $a["product_category"];
        $price=$a["price"];
        $im = $a["product_img"];
    } else {
        echo "No product found with ID: $id";
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>HomeDecor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        
        .box{
            height: 600px;
            align-items: center;
            width: 100%;
            max-width: 500px;
            background-color: rgba(245, 245, 245, 0.13);
            padding: 10px;
            margin: 30px auto;
            box-shadow: 0 0 10px rgba(7, 7, 7, 0.1);
            border-radius: 8px;
        }
        img #product{
            align-item:center;
            border:pink;
            border-radius:5px;
        }
        .custom a,button{
            width: 40%;
        }
        h1{
            color:#24527a;
        }
        .input-group{
            width:80%;
        }
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
    </style>
</head>

<body>
<nav class="navbar ">
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

<div class="box">
    <h1 align="center">Order Details</h1>
    <div class="row">
        <form id="frmreg" method="post" name="myForm">
            <center>    
                <div class="input-group">
                    <?php echo "<center><img id='product' src=\"../img/$im\" width=200 height=200></center></div>"; ?>
                    <input type="hidden" name="Email" value="<?php echo $nm; ?>">

                    <input type="hidden" name="product_id" value="<?php echo $id; ?>">
                    <div class="input-group">
                        <span class="input-group-addon"><img src="img/ct.png" style="width:20px; height: 20px;"></span>
                        <input id="category" type="text" class="form-control" name="category" placeholder="Type" value="<?php echo $c; ?>" required readonly>
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><img src="img/ct.png" style="width:20px; height: 20px;"></span>
                        <input id="pname" type="text" class="form-control" name="pname" placeholder="Product name" value="<?php echo $pnm; ?>" required readonly>
                    </div>
                    <br>
                    
                    <div class="input-group">
                        <span class="input-group-addon"><img src="img/price.png" style="width:20px; height: 20px;"></span>
                        <input id="price" type="text" class="form-control" name="price" placeholder="Price" value="<?php echo $price; ?>" required readonly>
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><img src="img/cr.png" style="width:20px; height: 20px;"></span>
                        <select id=qty name=qty onchange="cal()" class="form-control">
                            <option>--select Quantity--</option>
                            <option value="0.5">Half Kg</option>
                            <option value="1">1 Kg</option>
                            <option value="2">2 Kg</option>
                            <option value="3">3 Kg</option>
                            <option value="4">4 Kg</option>
                            <option value="5">5 Kg</option>
                        </select>
                        <script>
                            function cal() {
                                var p, w, a;
                                p = document.getElementById("price").value;
                                w = document.getElementById("qty").value;
                                a = p * w;
                                document.getElementById("amt").value = a;
                            }
                        </script>
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><img src="img/price.png" style="width:20px; height: 20px;"></span>
                        <input id="amt" type="text" class="form-control" name="amt" placeholder="0" required readonly>
                    </div>
                    <br>
                    <div class="custom">
                        <button type="submit" class="btn btn-primary" id="btnsub" name="btnsub">Proceed</button>
                        <button type="reset" class="btn btn-danger" id="btnres">Reset</button>
                    </div>
                </center>
        </form>
    </div>
</div>

</body>

</html>

<?php
if (isset($_POST['btnsub'])) {
    $username = $_SESSION['username'];
    $pnm = $_POST['pname'];
    $c = $_POST['category'];
    $price = $_POST['price']; 
    $qty = $_POST['qty'];
    $am = $_POST['amt'];
    $id = $_POST['product_id']; 

    $cn=mysqli_connect("localhost","root","","organic");
    $q = "INSERT INTO buy (username, product_id,category,product_name,price, quantity, amount) VALUES ('$nm', '$id','$c','$pnm', '$price', '$qty', '$am')";

    if (mysqli_query($cn, $q)) {
        mysqli_close($cn);
        echo "<script>alert('Order placed');window.location='payment.php?amount=$am';</script>";
    } else {
        echo "Error: " . $q . "<br>" . mysqli_error($cn);
}
}
?>