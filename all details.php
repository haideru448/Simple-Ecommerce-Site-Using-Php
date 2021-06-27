<!doctype html>
<?php 
session_start();
$name=$_SESSION['username'];
require("connection.php");
$query="SELECT * from tblproducts where pid='$name'";
$result=mysqli_query($connection,$query);
$row=mysqli_fetch_array($result);
echo "<img style='height:200px;width:200px;' src='uploads/".$row['ppicture']."'>";echo"<br>"; 
echo $row['pid'];echo"<br>";
echo $row['pname'];echo"<br>";
echo $row['pprice'];echo"<br>";
echo $row['pcode'];echo"<br>";
echo $row['pinstock'];echo"<br>";
echo $row['pdiscount'];echo"<br>";
echo $row['psize'];echo"<br>";
echo $row['pdetails'];?>
<head>
</head>
<body>
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