<?
error_reporting(0);
include 'connect.php';

$value=$_GET['c1'];

?>
<script src="phpajax.js" type="text/javascript"></script>

<style>
    
  #loader {
    -webkit-animation: cssAnimation 1s forwards; 
    animation: cssAnimation 1s forwards;
}
@keyframes cssAnimation {
    0%   {opacity: 1;}
    90%  {opacity: 1;}
    100% {opacity: 0;}
}
@-webkit-keyframes cssAnimation {
    0%   {opacity: 1;}
    90%  {opacity: 1;}
    100% {opacity: 0;}
</style>


<style>
.loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
			
        
        }
        .loader img{
			width: 35px;
            height: 35px;
            position: relative;
            left:1%;
			top:50%;
			background:transparent;
            
        }
</style>

<?
$sql = "select * from `stocks` where name='$value'";
$result = mysqli_query($con,$sql);
$fetch = mysqli_fetch_assoc($result);
$username = $fetch['name'];
$market = $fetch['market'];
$dividend = $fetch['dividend'];
$debt = $fetch['debt_to_equity'];
$current = $fetch['current'];
$roce=$fetch['roce'];
$eps=$fetch['eps'];
$stock=$fetch['stock'];
$roe=$fetch['roe'];
$reserves=$fetch['reserves'];
$debt=$fetch['debt'];
?>
<style>
* {
  box-sizing: border-box;
}

/* Create four equal columns that floats next to each other */
.column {
  float:left;
  width: 170px;
  padding: 1px;
  height: 40px;
  margin:15px;
 
  /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
  align:center;
}
</style>

<center>

<div class="loader" id="loader"  ><img src="loading.gif"></div>
</center>
<center>


<div   placeholder="" style="width:900px;height:350px;background-color:white;border-radius:15px;margin:50px;">

<br>
<h5  align="left" style="margin-left:28px;"><b><?=$username?></b></h5>

<div  style="width:630px;height:280px;background-color:#F4F9F4;border-radius:15px;" >

<div class="row" style="padding:4px; margin:5px;">
  <div class="column" style="background-color:#E4ECE4;align:left;">
    <p style="white-space: nowrap;">
    <span style="margin:1px;padding:2px;">Market Cap</span><span style="color:red;"> <b>&#x20b9;<?=$market?></b></span>
	</p>
  </div>
  
  <div class="column" style="background-color:#E4ECE4;">
   <p style="white-space: nowrap;">
    <span style="align:center;">Dividend Yield</span><span style="color:red;"> <b>&#x20b9;<?=$dividend?></b></span>
	</p>
	
  </div>
  <div class="column" style="background-color:#E4ECE4;">
   
    <p style="white-space: nowrap;">
    <span style="margin:1px;padding:2px;">Debt Equity</span><span style="color:red;"> <b>&#x20b9;<?=$debt?></b></span>
	</p>
  </div>
  <div class="column" style="background-color:#C9F5CE;">
    
    <p style="white-space: nowrap;">
    <span style="margin:1px;padding:2px;">Current price</span><span style="color:red;"> <b>&#x20b9;<?=$current?></b></span>
	</p>
	
  </div>
  <div class="column" style="background-color:#C9F5CE;">
    
    <p style="white-space: nowrap;">
    <span style="margin:1px;padding:2px;">ROCE</span><span style="color:red;"> <b>&#x20b9;<?=$roce?></b></span>
	</p>
  </div>
  <div class="column" style="background-color:#C9F5CE;">
    
    <p style="white-space: nowrap;">
    <span style="margin:1px;padding:2px;">EPS</span><span style="color:red;"> <b>&#x20b9;<?=$eps?></b></span>
	</p>
  </div>
  <div class="column" style="background-color:#E4ECE4;">
    
    <p style="white-space: nowrap;">
    <span style="margin:1px;padding:2px;">Stock P/E</span><span style="color:red;"> <b>&#x20b9;<?=$stock?></b></span>
	</p>
  </div>
  <div class="column" style="background-color:#E4ECE4;">
    
    <p style="white-space: nowrap;">
    <span style="margin:1px;padding:2px;">ROE</span><span style="color:red;"> <b>&#x20b9;<?=$roe?></b></span>
	</p>
	
  </div>
  <div class="column" style="background-color:#E4ECE4;">
    
    <p style="white-space: nowrap;">
    <span style="margin:1px;padding:2px;">Reserves</span><span style="color:red;"> <b>&#x20b9;<?=$reserves?></b></span>
	</p>
	
  </div>
  <div class="column" style="background-color:#C9F5CE;">
    
    <p style="white-space: nowrap;">
    <span style="margin:1px;padding:2px;">Debt</span><span style="color:red;"> <b>&#x20b9;<?=$debt?></b></span>
	</p>
	</div>
	
	
</div>
</div>
</div>
</center>
<br><br><br>


