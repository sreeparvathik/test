<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Business stocks</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp - v2.2.1
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<script src="phpajax.js"></script>
<style>
/* enable absolute positioning */
.inner-addon {
  position: relative;
}

/* style glyph */
.inner-addon .glyphicon {
  position: absolute;
  padding: 10px;
  pointer-events: none;
}

/* align glyph */
.left-addon .glyphicon  { left:  80px;}
.right-addon .glyphicon { right: 940px;}

</style>

<?
include 'connect.php';
session_start();
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$password=$_POST['password'];

$_SESSION['name']=$name;
echo $_SESSION['name'];
$query=mysqli_query($con,"select * from user where name='$name' and password='$password'");

$f=mysqli_fetch_array($query);

}
?>

<body style="background-color:#EDF2FF;">
<?
if(isset($_SESSION['name']))
{
?>

<div class="panel-body" style="background-color:#EDF2FF;white-space: nowrap;"><h4><b>Stocks  - <?=$_SESSION['name']?></b></h4>
<div class="text-right"><button class="btn btn-warning" ><a href="logout.php">Log out</a></button></div>
</div>
<div class="panel panel-default" style="background-color:#ECFBEB;height:300px;">
<center><h5 style="font-size:55px;"><br><b>The easiest way to buy <br>and sell stocks</b><br></h5><h6 style="font-size:24px;">Stock analysis screening tool for <br> investors in india</h6></center>
</div>

<br>
<div class="panel-body" style="background-color:#EDF2FF;height:400px;">
<center>
 
<!--</div>-->
<div class="inner-addon right-addon">
     <i class="glyphicon glyphicon-search"></i><input type="text"  style="width:50%;height:40px;border-color:white;border-radius:8px;box-shadow: 4px 4px px white;text-indent:50px;" placeholder="" onkeyup="search(this.value)">
    </div>
</center>

<div id="searchvalues"></div>
<div id="detailsshow"></div>
<?}else{?>
<div class="panel-body" style="background-color:#ECF9F7;height:150px;"><center><h3><br><b>Error occured !..<br>  Login failed.</b></h3><a href="index.html"><b><u>Please login</u></b></a></center></div>
<?}?>
</div>
</body>
</html>