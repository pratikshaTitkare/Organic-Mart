
<!Doctype html>
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
      body{
       background-image: url(img/b.jpg);
       height: 100%;
       width: 100%;
       background-repeat: no-repeat;
       background-size: 100%;
       background-size: cover;
       }
       nav{
        opacity: 0.8;
        background-color:rgba(245, 245, 245, 0.13);
       }
       #para{
        text-align:right;
        color: black;
        text-align: center;
        font-size: 52px;
        padding:0.1rem;
        font-weight: bold;
        font-family: 'Times New Roman', Times, serif;
       }
       #logo{
        font-size: 30px;
        color: black;
        padding:5px;
       }
       a{
        font-weight: bold;
        color: black;
        font-size:18px;
       }
       h3{
        color: black;
        text-align: center;
        
       }
       .container{
        
        /*display:flex;
        flex-direction: column;*/
        height: 200px;
        width: 500px;
        /*border: 1px solid black;*/
        align-items: center;
        margin-top: 200px;
        margin-bottom: 200px;
        text-align: right;
        opacity: 0.6;
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
        <div class="container">
            <div class="index-bg">
            <p id="para">Fresh Organic Food<br></p>
            <h3 align="center">100% certified-organic Fruits & Vegetables at Your Doorstep</h3>
            </div>
        </div>
    </div>   
    </body>
</html>