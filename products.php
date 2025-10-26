<!DOCTYPE html>
<head>
    <title>OrganicMart</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            background-color: white;
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
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            margin: 5px auto;
        }
        .head h2{
            font-weight:800;
                font: size 150px;
        
        }
        .wrapper{
            border-radius: 5px;
            margin-top: 10px;
        }
        .wrapper-1{
            padding: 5px;
            border-radius: 5px;
            margin-top: 10px;
        }
         .wrapper-1 h3{
            font-size: 2rem;
            color: black;
            line-height: 2px;
        }
        .wrapper-1 p{
            font-size: 1.7rem;
            color:var(--light-color);
            padding: 1rem 0;
            line-height: 2px;
        }
        .caption{
            text-align: center;
        }
        .wrapper-2{
                margin: 10px;
                text-align: center;
                align-items: center;
                padding: 50px;
                background-image: url(img/p.jpg);            
                height: 350px;
                width: 100%;
                background-repeat: no-repeat;
                background-size: 100%;
                background-size: cover;
            }
        .wrapper-2 h3{
            text-align: center;
            font-size: 40px;
            font-weight: 700;
            color: green;
            font-family: 'Times New Roman', serif;
        }
        .wrapper-2 h4{
            text-align: center;
            font-size: 20px;
            font-weight: 600;
            color: white;
            font-family: 'Times New Roman', serif;
        }
        .wrapper-2 #para{
            text-align: center;
            font-size: 20px;
            font-weight: 400;
            color: white;
            font-family: 'Times New Roman', serif;
        }
        .col-md-3 img{
            text-align:center;
            align-items:center;
        }
        .button {
            background-color: #eafd80;
            border: 1px solid rgb(209,213,219);
            border-radius: .5rem;
            box-sizing: border-box;
            color: #111827;
            font-size: 12px;
            font-weight: 600;
            padding: 10px;
            text-align: center;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            cursor: pointer;
        }
        .button:hover {
            background-color: rgb(223, 210, 193);
        }

        .button:focus {
            outline: 2px solid rgb(243, 198, 115);
            outline-offset: 2px;
        }

        .button:focus-visible {
              box-shadow: .5;
        }
        @media screen and (max-width: 768px) {
  /* Adjust styles for smaller screens */
  .wrapper-2 {
    padding: 20px;
    height: 250px;
    margin-bottom:10px;
  }
  .button{
    margin-bottom:10px;
  }
  .wrapper-2 h3 {
    font-size: 30px;
  }
  
  .wrapper-2 h4 {
    font-size: 16px;
  }
  
  .wrapper-2 #para {
    font-size: 16px;
  }
  
  .col-md-3 img {
    width: 50%;
  }
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
                    <li><a href="products.php">Products</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href=signin.php class="text-danger">User Login</a></li>
                    <li><a href=adminsignin.php class="text-danger">Admin Login</a></li>
                </ul>
            </div>
        </nav>
        <div class="container-fluid">
        <div class="wrapper">
            <div class="head"><h2>Shop by Categories</h2><br></div>
            <div class="row">
                <div class="col-md-4">
                    <div class="responsive">
                        <img src="img/ve.webp" style="width: 430px; height:250px;">
                        <div class="caption">
                            <h3>Vegetables</h3>
                            <p>Upto 45% off</p>
                            <button class="button" onclick="window.location.href = 'signin.php';">Shop Now</button>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-4">
                    <div class="responsive">
                        <img src="img/fru.jpg" style="width: 430px; height:250px;">
                        <div class="caption">
                            <h3>Fresh Fruits</h3>
                            <p>Upto 35% off</p>
                            <button class="button" onclick="window.location.href = 'signin.php';">Shop Now</button>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-4">
                    <div class="responsive">
                        <img src="img/dr.webp" style="width: 430px; height:250px;">
                        <div class="caption">
                            <h3>Dry Fruits</h3>
                            <p>Upto 65% off</p>
                            <button class="button" onclick="window.location.href = 'signin.php';">Shop Now</button>
                        </div>
                    </div>
                </div>    
            </div>
        </div>

        <section>
            <div class="wrapper-2">
                <div class="row">
                    <div class="col">
                        <h4>Live Organic<br></h4>
                        <h3 align="center">Live Healthy</h3>
                        <p id="para">Visit OrganicMart to gather all your favourite tropical Fruits and vegeis right now!</p>
                        <a href="products.php" class="btn btn-success">Explore Products</a>
                    </div>
                </div>
            </div>
        
        </section>
        <div class="wrapper-1">
            <div class="head"><h2>Featured Products</h2>
            <p>Visit our shop to see amazing products</p></div>

            <div class="col-md-3">
                <div class="responsive">
                    <img src="img/b.png" style="width: 250px; height:250px;">
                    <div class="caption">
                        <h3>Banana</h3>
                        <p>Rs.120</p>
                        <button class="button" onclick="window.location.href = 'signin.php';">Buy now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="responsive">
                    <img src="img/v.png" style="width: 250px; height:250px;">
                    <div class="caption">
                        <h3>Cabbage</h3>
                        <p>Rs.60</p>
                        <button class="button" onclick="window.location.href = 'signin.php';">Buy now</button>
                    </div>
                </div>
            </div><div class="col-md-3">
                <div class="responsive">
                    <img src="img/v1.png" style="width: 250px; height:250px;">
                    <div class="caption">
                        <h3>Carrot</h3>
                        <p>Rs.50</p>
                        <button class="button" onclick="window.location.href = 'signin.php';">Buy Now</button>
                    </div>
                </div>
            </div><div class="col-md-3">
                <div class="responsive">
                    <img src="img/t.png" style="width: 250px; height:250px;">
                    <div class="caption">
                        <h3>Tomato</h3>
                        <p>Rs.50</p>
                        <button class="button" onclick="window.location.href = 'signin.php';">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
        
    </div>   
</body>
</html>