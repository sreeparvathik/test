<?
error_reporting(0);
include 'connect.php';
$value=$_GET['s'];
//echo $value;
?>
<script src="phpajax.js" type="text/javascript"></script>

<?
$sql = "select * from `stocks` where name LIKE '$value%'";
$result = mysqli_query($con,$sql);
?>

<center>
<div placeholder="" style="width:50%;background-color:white;border-radius:15px;" >
 <?php
while($fetch = mysqli_fetch_assoc($result)){
$username = $fetch['name'];
?>
<a style="cursor:pointer;color:#F01436;" onclick="searchdetails('<?=$username?>');" ><b><?=$username?></b></a>
<br>
<hr color="#F0909F">

<?php } ?>

</center>
</div>



