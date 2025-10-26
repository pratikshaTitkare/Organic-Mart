
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
    
        .box{
            height: 380px;
            align-items: center;
            width: 100%;
            max-width: 500px;
            background-color: #f5f9ee;
            padding: 40px;
            margin: 50px auto;
            box-shadow: 0 0 10px rgba(7, 7, 7, 0.1);
            border-radius: 8px;
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
        .custom a,button{
            width: 49%;
        }
        h1{
            color:#24527a;
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
<?php
session_start();
$am=0;


if(isset($_GET["amount"]))
{
$am=$_GET["amount"];

}
$cn=mysqli_connect("localhost","root","","organic");

?>
<div class="box">
<h1 align=center>Payment Details</h1><br>
<div class="row">
<form id=frmreg method="post" name="myForm">
 <div class="input-group">
    <span class="input-group-addon"><img src="img/price.png" style="width:20px; height: 20px;"></span>
    <input ng-model="address" id="Flavour" type="text" class="form-control" name="amount" placeholder="Amount" value="<?php echo $am; ?>" required readonly>
</div>
<br>

<div class="input-group">
    <span class="input-group-addon"><img src="img/s2.png" style="width:20px; height: 20px;"></span>
    <select id=wt name=mode class="form-control">
        <option>--select payment mode--</option>
        <option value="COD">Cash on Delivery</option>
        <option value="CreditCard">Credit Card</option>
        <option value="DebitCard">Debit card</option>
    </select>
 </div>

<br>
<div class="input-group">
    <span class="input-group-addon"><img src="img/price.png" style="width:20px; height: 20px;"></span>
    <input id="num" type="text" class="form-control" name="num" placeholder="0" value=" " required>
</div>


<br>
<button type="submit" class="btn btn-primary" id="btnsub" name=btnsub>Submit</button>
<button type="reset" class="btn btn-danger" id="btnres">Reset</button>
</form>

</div>
</div>

<?php

if(isset($_POST['btnsub']))
{
$unm=$_SESSION['username'];

$wt=$_POST['mode'];
$am=$_POST['amount'];
$add=$_POST['num'];

$cn=mysqli_connect("localhost","root","","organic");
$dt=date("d-m-Y");
$q="insert into payment(odt,username,mode,amount,cardnumber) values('$dt','$unm','$wt',$am,'$add')";
mysqli_query($cn,$q);


mysqli_close($cn);
echo"<script>alert('Thank You for ordering');window.location='index.php'</script>";
}

?>
</body>
</html>