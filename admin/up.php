<?php
$pid = $_GET['product_id'];
$cn = mysqli_connect("localhost", "root", "","organic");
if(!$cn){
    die("Failed to connect to database:".mysqli_connect_error());
}
$q = "SELECT * from product where product_id='$pid'";
$rs = mysqli_query($cn, $q);
$id = "";
$ct = "";
$pnm = "";
$pr = "";
if ($a = mysqli_fetch_array($rs)) {
    $id = $a['product_id'];
    $ct = $a['product_category'];
    $pnm = $a['product_name'];
    $pr = $a['price'];
}

?>
<html>
<head>
        <title>OrganicMart</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="signn.css">
      </head>
    <body>
        <form method="post">
            ID<input type="text" name="txtid" class="form-control" value="<?php echo $id; ?>"><br>
            Category<input type="text" name="txtct" class="form-control" value="<?php echo $ct; ?>"><br>
            Name<input type="text" name="txtnm" class="form-control" value="<?php echo $pnm; ?>"><br>
            Price<input type="text" name="txtprice" class="form-control" value="<?php echo $pr; ?>">
            <input type="submit" name="btnup" value="Update">
        </form>
    </body>
</html>
<?php
if (isset($_POST['btnup'])) {
    extract($_POST);
    $q = "UPDATE product SET product_id='$txtid', product_category='$txtct', product_name='$txtnm', price='$txtprice' WHERE product_id='$id'";
    mysqli_query($cn, $q);
    echo "<script>alert('Records updated'); window.location='index.php'</script>";
    mysqli_close($cn);
}

?>
