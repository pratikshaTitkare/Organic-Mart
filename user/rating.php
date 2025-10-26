<?php
    session_start();
    $username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Rate us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        

        h4 {
            font-weight:400;
            font-size: 35px;
            color: purple;
        }

        h6 {
            font-size:15px;
        }

        nav{
        opacity: 0.8;
        background-color: #a4d792;
       }

        .navbar #para {
            text-align: right;
            color: black;
            text-align: center;
            font-size: 52px;
            padding: 0.1rem;
            font-weight: bold;
            font-family: 'Times New Roman', Times, serif;
        }

        .navbar #logo {
            font-size: 30px;
            color: black;
            padding: 5px;
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
                margin-bottom:40px;
            }
            .head h1{
                text-align:center;
                font-weight:800;
                font: size 150px;
            }
            .left-column {
        background-color: #f2f2f2;
        padding: 20px;
    }

    /* Custom styles for the right column */
    .right-column {
        background-color: #eaeaea;
        padding: 20px;
    }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" class="logo" id="logo"><span
                        class="glyphicon glyphicon-shopping-cart"></span>OrganicMart</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <li class=dropdown><a class="dropdown-toggle" data-toggle="dropdown">Products</a>
                        <ul class="dropdown-menu">
                            <li><a href="vege.php">Vegetables</a></li>
                            <li><a href="fruits.php">Fruits</a></li>
                            <li><a href="dry.php">Dry-Fruits</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="rating.php">Feedback</a></li>
                    <li><a href=profile.php class="text-danger"><span
                                class="glyphicon glyphicon-user"></span></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
    <div class="head">
                     <h1><center>Feedback Us</center></h1>
            </div>
            <hr>
        <div class=box>
            <div class="row">
                <div class="col-sm-7">
                    <form id="ratingForm" method="POST">
                        <div class="form-group">
                            <h4>Rate your experience</h4>
                            <h6>We highly value your feedback. Kindly take a moment to rate us and provide us with
                                your valuable feedback!</h6>
                                
                            <input type="hidden" class="form-control" id="username" name="username" value="<?php echo $username; ?>" >
                            <button type="button" class="btn btn-default btn-sm rateButton" aria-label="Left Align"
                                name="rt" onclick="changestar(0)">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-default btn-grey btn-sm rateButton"
                                aria-label="Left Align" onclick="changestar(1)" name="rt">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-default btn-grey btn-sm rateButton"
                                aria-label="Left Align" onclick="changestar(2)" name="rt">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-default btn-grey btn-sm rateButton"
                                aria-label="Left Align" onclick="changestar(3)" name="rt">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-default btn-grey btn-sm rateButton"
                                aria-label="Left Align" onclick="changestar(4)" name="rt">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                            <input type="hidden" class="form-control" id="rating" name="rating" value="0">
                        </div>
                        <div class="form-group">
                            <label for="usr">Title*</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="comment">Comment*</label>
                            <textarea class="form-control" rows="5" id="comment" name="comment" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success" id="saveReview" name="btnsub">Save Review
                            </button> <button type="button" class="btn btn-info" id="cancelReview">Cancel</button>
                        </div>
                    </form>
                    <script>
                        function changestar(i) {
                            var rt = document.getElementsByClassName("rateButton");
                            var j;
                            for (j = 0; j <= 4; j++) {
                                rt[j].className = "btn btn-default btn-sm rateButton";
                            }
                            for (j = 0; j <= i; j++) {
                                rt[j].className = "btn btn-warning btn-sm rateButton";
                            }
                            document.getElementById("rating").value = i + 1;
                        }
                    </script>
                    <?php
                    $cn = mysqli_connect("localhost", "root", "", "organic");

                    if (isset($_POST["btnsub"])) {
                        $username = $_POST['username'];
                        $rate = $_POST["rating"];
                        $title = $_POST["title"];
                        $comment = $_POST["comment"];

                        $q = "INSERT INTO userrating (username, rating, title, comment) VALUES ('$username', $rate, '$title', '$comment')";
                        mysqli_query($cn, $q);
                        mysqli_close($cn);
                        echo "<script>alert('Thank You for feedback');window.location='index.php'</script>";
                    }
                    ?>
                </div>
        
            
                <div class="col-sm-5">
                    <br>
                    <div class="review-block">
                        <?php
                        $ratingQuery = "SELECT * FROM userrating";
                        $ratingResult = mysqli_query($cn, $ratingQuery);
                        while ($rating = mysqli_fetch_array($ratingResult)) {
                            $user = $rating["username"];
                            $title = $rating["title"];
                            $cmt = $rating["comment"];
                            $rt = $rating["rating"];
                        ?>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="review-block-name">By <a href="#"><?php echo $user; ?></a></div>
                            </div>
                            <div class="col-sm-9">
                                <div class="review-block-rate">
                                    <?php
                                    for ($i = 1; $i <= 5; $i++) {
                                        $ratingClass = "btn-default btn-grey";
                                        if ($i <= $rating['rating']) {
                                            $ratingClass = "btn-warning";
                                        }
                                    ?>
                                    <button type="button" class="btn btn-xs <?php echo $ratingClass; ?>"
                                        aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <?php } ?>
                                </div>
                                <div class="review-block-title"><?php echo $rating['title']; ?></div>
                                <div class="review-block-description"><?php echo $rating['comment']; ?></div>
                            </div>
                        </div>
                        <hr />
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
