<?php
session_start();
?>
<html>
    <head>
    <title>Profile Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
       
         
        .box{
            height: 500px;
            align-items: center;
            width: 100%;
            max-width: 850px;
            background-color: #fffafa;
            padding: 40px;
            margin: 30px auto;
            box-shadow: 0 0 10px rgba(7, 7, 7, 0.1);
            border-radius: 8px;
        }
        h1{
            color:#f76b8a;
            font-family: 'Times New Roman', Times, serif;
            font-weight: bold;
        }
        h3{
            color:#ff847c;
            font-family: 'Times New Roman', Times, serif;
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
        <div class="container">
        <div class="box">
        <h1 class="text-center">My Profile</h1>
        <div class="row">
            <div class="col-md-4">
                <img src="img/pr.png" style="height:200px; width:200px" alt="Profile Picture" class="img-fluid rounded-circle">
            </div>
            <div class="col-md-8">
                <h3>Welcome
                    <?php
                    $u = $_SESSION['username'];
                    echo $u;
                    ?>
                </h3>
                <?php
                $cn = mysqli_connect("localhost", "root", "");
                $db = mysqli_select_db($cn, "organic");

                $q = "select * from register where username='$u'";
                $result = mysqli_query($cn, $q);
                if ($a = mysqli_fetch_array($result)) {
                    extract($a);
                    echo '<table class="table">
                            <tbody>
                                <tr>
                                    <th>Name:</th>
                                    <td>' . $name . '</td>
                                </tr>
                                <tr>
                                    <th>Address:</th>
                                    <td>' . $address . '</td>
                                </tr>
                                <tr>
                                    <th>Email:</th>
                                    <td>' . $email . '</td>
                                </tr>
                                <tr>
                                    <th>Phone:</th>
                                    <td>' . $phone . '</td>
                                </tr>
                                <tr>
                                    <th>Username:</th>
                                    <td>' . $u . '</td>
                                </tr>
                            </tbody>
                        </table>';
                }
                mysqli_close($cn);
                ?>
                <a href="logout.php">Logout</a>
                <p>&nbsp;</p>
            </div>
        </div>
        </div>
    </div>
</body>
</html>
