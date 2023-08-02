<?php include "header.php";

if($_GET['page']!=""){
	$page_name=$_GET['page'];
}
else
{
	header ("location:index.php");
	
}
?>

<style>

.tab {
  float: left;
  border: 1px solid #0095d4;
  background-color: #0095d4;
  width: 1%;
  height: 30px;
}
.style-h4{
	color:#606060;
	font-weight: 20;
	font-size:22px;
	
}

</style>
<div class="container">
<div class="row">
<div class="col-sm-10">
<br />
<a href="javascript:history.go(-1)" style="color:red;font-size:14px;"> << Back </a>
<br>
<div class="block" ><h4 class="style-h4"><?php echo $page_name?></h4></div>
<span class="tab"></span> &nbsp;  &nbsp; <span style="font-size:16px;">Page Comming Soon!</span>
</div>
</div>
</div><div style="height:400px;"></div>


<?php include "footer.php";?>