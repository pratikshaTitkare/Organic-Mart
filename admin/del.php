<?php
if(isset($_GET['product_id'])){
$pid = $_GET['product_id']; 
$cn= mysqli_connect("localhost","root","","organic");

if(!$cn){
    die("Failed to connect to database:".mysqli_connect_error());
}
$q = "DELETE FROM product WHERE product_id ='$pid'";
$result=mysqli_query($cn,$q);
if($result){
    echo "<script>alert('Records deleted'); window.location='manageprod.php';</script>";
}else{
    echo"<script>alert('failed to delete')</script>";
}
mysqli_close($cn);
}else{
    echo"<script>alert('Invalid request')</script>";
}
?>
