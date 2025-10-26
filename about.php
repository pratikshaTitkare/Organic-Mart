<!DOCTYPE html>
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
            
            background-image: url('img/mini.jpg');
            background-repeat:no-repeat;
            background-size: cover;
        }
         .col-md-6 p{
            font-size: 18px;
            font-weight: 200;
        }
         .row h1{
            font-size: 35px;
            font-weight: 500;
            text-align:center;
        }
         .col h2{
            color:green;
            font-size: 28px;
            font-weight: 500;
            text-align:center;
        }
        .col{
            padding:10px;
            font-size: 18px;
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
            <div class="row">
                <div class="head">
                    <center><h1>About Us</h1></center>
        </div>
                <hr>
                <div class="col">
                <h2> Our Mission</h2>
                    <img src="img/a3.jpg" class="img-fluid" height="250px" width="350px" vspace="20px" hspace=20px align="left"><br clear="right">
                    
                        <p>We've always had a passion for real food and a desire to feed our children better. This passion has grown into one of the most sustainable organic grocers in the country, supplying fresh, seasonal produce from farm to fork.<br>It is our mission to deliver you the fresh chemical free fruits to your doorsteps from the Indian markets.
                        <br>Our produce guarantee to give you healthy and nutritious value that your body deserves.
                        <br>With our dedicated team working around the clock we promise that your fruits & vegies will be delivered on time, be fresh and hygienic to consume for you and your loved ones.
                </p>
                </div>
                <br>
                <div class="col">
                    <br clear="left"><h2>Our Goal</h2><br>
                
                <div class="col-md-6">
                    <p>Delivering quality fruits and items to your door step is our main goal of operations. Our highly trained staff ensures quality and excellent selection of fresh produce and packaging of those produce.
                    <br>Quality assurance of the fruits that guarantees freshness and great taste is what our loyal customers believe and keep faith in us.
                    <br>In case of any inconvenience and issues our team will work day and night to fix all your worries and provide satisfaction in service.</p>
                </div>
                
                <div class="col-md-6">
                <div class="progress">
                    <div class="progress-bar progress-bar-striped active progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                    <span class="">Communication</span>
                </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped active progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                    <span class="">Efficiency</span>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped active progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                    <span class="">Delivery</span>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped active progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                    <span class="">Customer care</span>
                    </div>
                </div>
                </div>
            </div>
          </div>
    </body>
</html>