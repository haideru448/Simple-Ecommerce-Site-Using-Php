<?php
include'header.php';
?>
<!doctype html>
<?php
if(isset($_POST['submit']))
 {

$name=$_POST["username"];
$password=$_POST["password"];
if($name=="" OR $password=="")
{echo "<div class='btn2'>";
 
echo "<center>" ;
echo "<b>";
echo "info can't be empty";
echo "</b>";
echo "</center>";
echo "</div>";  }
else{
$connection= mysqli_connect('localhost','root','' ,'login');
$query="SELECT * FROM system WHERE Name='$name' && Password='$password'";
$result=mysqli_query($connection,$query);
$row=mysqli_fetch_array($result);
if($row['Name']==$name && $row['Password']==$password)
{echo "successfull";
session_start();
$_SESSION['username']=$name;
$_SESSION['password']=$password;
header("Location:welcome.php");}
else if($row['Name']!=$name && $row['Password']!=$password)
{echo "failed";}}}?>

<html>
<head>
<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<style>

#btn
{text-shadow:1px 1px red;}
.btn2
{color:red;
margin-right:525px;
margin-left:525px;}
</style>

</head>
<body>

<div class ="container-fluid" id="btn">

<center><h5>Welcome to Admins Login Page</h5>
<h6>Only Admins have access to this</h6></center>

</div>
<form action="" method="POST">
<center><fieldset>USERNAME<br><fieldset><input type="text" name="username" id="name"><br><br>
PASSWORD<br><input type="password" name="password" "password"></fieldset><br>
<input type="submit" value="login" name="submit">
</fieldset>
</center>
</form>
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


