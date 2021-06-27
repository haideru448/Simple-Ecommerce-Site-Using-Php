
<!doctype html>
<?php
if(isset($_POST['submit'])) 
{$pid=$_POST['pid'];
$pname=$_POST['pname'];
$pprice=$_POST['pprice'];
$pcode=$_POST['pcode'];
$pinstock=$_POST['pis'];
$pdiscount=$_POST['pdiscount'];
$psizes=$_POST['psize'];
$pdetails=$_POST['pdetail'];
 $target="uploads/".basename($_FILES['picture']['name']);
 $img=$_FILES['picture']['name'];
  
if($pid=="" OR $pname=="" OR $pprice=="" OR $pcode=="" OR $pinstock=="" OR $pdiscount=="" OR $psizes=="" OR $pdetails=="")
{echo "<div id='btn2'>";
echo "<center>";
echo "ALL Fields Required"; 
echo "</center>";
echo "</div>";}
else
{require ("connection.php");
 move_uploaded_file($_FILES['picture']['tmp_name'],$target);
$query="INSERT INTO tblproducts VALUES('$pid','$pname','$pprice','$pcode','$pinstock','$pdiscount','$psizes','$pdetails','$img')";
$result=mysqli_query($connection,$query);
header("Location:All products.php");
}}
?>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="bootstrap-3.4.1-dist/css/bootstrap.min.css">
	<script src="bootstrap-3.4.1-dist/jquery-3.4.1.js"></script>
	<script src="bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
	
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	

	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	a.deco-none {
    color: inherit;
    text-decoration:none;
	
}
			.mycol{ 
				text-align: right;
		}
#btn
{text-shadow:2px 2px red;}
#btn2
{color:red;}

	.carousel-inner{
  width:100%;
  max-height: 300px !important;
}
#log
{text-align:right;}

	</style>


</head>
<body>

		
    <div class="container-fluid"><div class="row"><div class="col-md-4"><i style="font-size:40px;" class="fa fa-shopping-cart" aria-hidden="true"></i><span style="font-size: 70px;">BUYON.PK</div>
		<div class="col-md-8" >
		<div class="mycol">
			<span style="color:blue; font-size: 20px "><a href="https://twitter.com/" title="twitter.com" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></span>&nbsp;<span style="color:yellow;font-size: 20px;"><a href="https://www.snapchat.com/" class="deco-none" title="snapchat.com" target="_blank"><i class="fa fa-snapchat" aria-hidden="true"></i></a></span>&nbsp;<span style="color:red;font-size: 20px;"><a href="ht
				tps://www.youtube.com/" class="deco-none" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></span>&nbsp;<span style="color: blue;font-size: 20px;"><a href="https://www.facebook.com/unsupportedbrowser?_rdr" title="facebook.com" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></span> 
			</div>
		
		</div> </div></div></span>
  
<div class="container-fluid">
<div class="row"> 
	<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav pull-right">
       <li class="nav-item active">
     
        <a class="nav-link" href="authorized login.php"><div class=" float-right " style="margin-left: 95%;" >logout</div><?php session_start(); session_destroy();?></a>
        
       </li>
    
    </ul>
  </div>

	
 	
		</nav></div></div></div>
<div class="container-fluid">
<?php require("connection.php");
echo "welcome ".$_SESSION['username'];

 ?>
</div>
<br><div id="btn"><center><h1>Dashboard</h1></center></div>
<div class="container-fluid">
<center><form action="" method="POST" enctype="multipart/form-data">
Productid <br>  <input type="number" name="pid"><br>
ProductName <br><input type="text" name="pname"><br>
Productprice <br><input type="number" name="pprice"><br>
Productcode <br><input type="text" name="pcode"><br>
Product Stock <br><select name="pis"><br>
<option value="Y">Y</option>
<option value="N">N</option>
</select><br>
ProductDiscount <br><input type="number" name="pdiscount"><br>
Productsizes <br><input type="text" name="psize"><br>
Productdetails <br><input type="text" name="pdetail"><br>
Image<br><input type="file" name="picture">
<input type="submit" value="Add this Detail" name="submit">
</form></center>

</div>
<footer class="page-footer font-small blue pt-4">
  <div class="container-fluid text-center text-md-left">
<div class="row">
<div class="col-md-6 mt-md-0 mt-3">
 <h5 class="text-uppercase">Location</h5>
  <p>We are located at ABC location for any queries or order information reach us at<br><a href="https://www.google.com/" target="_blank"><strong>abc@gmail.com</strong></a>.</p>
   </div>
      <hr class="clearfix w-100 d-md-none pb-3">
      <div class="col-md-3 mb-md-0 mb-3">
        <h5 class="text-uppercase">FOLLOW US</h5>
        <ul class="list-unstyled">
          <li class="fu">
            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-snapchat" aria-hidden="true"></i></a>&nbsp;<a href="youtube.com" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>&nbsp;<a href="https://twitter.com/Twitter?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          </li> 
        </ul>
      </div>
</div>
    </div>
  </div>
  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> BUYON.PK</a>
  </div>
</footer>
</body>
</html>