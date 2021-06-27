<?php require("connection.php");
$id=$_GET['id'];
$q="SELECT ppicture FROM tblproducts WHERE pid='$id'";
$r=mysqli_query($connection,$q);
$row=mysqli_fetch_array($r);
$pic=$row['ppicture'];
$query="DELETE FROM tblproducts WHERE pid='$id'";
$result=mysqli_query($connection,$query);
unlink('uploads/'.$pic);
header("Location:All products.php");
?>