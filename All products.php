<!doctype html>
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
		.text-deco{text-decoration: none;}
#btn
{text-shadow:2px 2px red;}
table,td,th
		{ border:2px solid black;}
		
			
#table2 {
  border-collapse: collapse;
}
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
     
        <a class="nav-link" href="authorized login.php"><div class=" float-right " style="margin-left: 95%;" >logout</div><?php session_start(); session_destroy(); ?></a>
        
       </li>
    <li class="nav-item active">
     
        <a class="nav-link" href="Products page.php">All dynamic products</a>
        
       </li>
<li class="nav-item active">
     
        <a class="nav-link" href="welcome.php">Add Record</a>
        
       </li>
    
    </ul>
  </div>

	
 	
		</nav></div></div></div>
<br><div id="btn"><center><h1>Dashboard</h1></center></div>


</div>
<center>

	<?php require("connection.php"); $query="Select * from tblproducts"; $result=mysqli_query($connection,$query); 
    echo "<table><tr><th>Productid</th><th>ProductName</th><th>Productprice</th><th>Productcode</th><th>Product in stock</th><th>Productdiscount</th>
	<th>Productsize</th><th>Productdetails</th><th>Delete</th><th>Update</th></tr>";
	
	while($row=mysqli_fetch_array($result))
	{echo "<tr><td>".$row["pid"]."</td><td>".$row["pname"]."</td><td>".$row["pprice"]."</td><td>".$row["pcode"]."</td><td>".$row["pinstock"]."</td><td>".$row["pdiscount"]."</td><td>".$row["psize"]."</td><td>".$row["pdetails"]."</td><td>"."<a href='delete.php?id=".$row['pid']."'>delete</a>"."</td><td>"."<a href='update.php?id=".$row['pid']."'>Update</a>"."</td></tr>" ;}
?>
	<br>
	<br>
		

</body>
</html>
