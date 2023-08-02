<?php
session_start();
    if(!isset($_SESSION['user_id']))
   {
    header("location:login.php");
   }
   else
   {  
$user_id = $_SESSION['user_id'];
include 'header.php';
include 'config.php';
if($_GET['page']!=""){
	$page_name=$_GET['page'];
}
else
{
	header ("location:dashboard.php");
	
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
	
}
.tab {
  float: left;
  border: 1px solid #0095d4;
  background-color: #0095d4;
  width: 1%;
  height: 30px;
}
.tab-settings{
	border: 1px solid black;
	background-color: black;
	color:white;
	margin:5px;
	}
tab-settings:hover{
	background-color:red;
}	
p.thicker {
  font-weight: 900;
}
p.font_size{
	font-size:14px;
	color:grey;
	margin:20px 20px;
	
	
}
div.font_size{
	font-size:12px;
	color:grey;
}
p.title_property{
	font-size:16px;
	color:grey;
	left-padding:20px;;
} 
hr.new1 {
  border-top: 1px solid black;
}	
.vl {
  border-left: 2px solid #E0E0E0;
  height: 600px;
}
div.title_property1{
	font-size:16px;
	color:#d03a3a;
	left-padding:20px;;
} 
p.title_property2{
	font-size:16px;
	color:red;
	left-padding:20px;;
} 
.table thead tr th, .table tbody tr td {
    border: none;
}
div.info_property{
	font-size:14px;
	color:grey;
	
	
}
.btn-primary1 {
    color: #fff;
    background-color: blue;
	width: 50%;
	 left: 180px;
	}
.tab {
  float: left;
  border: 2px solid orange;
  background-color: orange;
  width: 4%;
  height: 20px;
}
a {
  color: grey;
}
.button {
  background-color: black; /* Green */
  border: none;
  color: white;
  padding: 3px 10px;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  width:50%;
}

.button1 {
  background-color: black; 
  color: white; 
  border: 2px solid black;
}
.button1:hover{
	text-decoration: none;
	background-color:red;
    border: 2px solid red;
	color:white;
}
.sm_p {
    width: 0.5%;
}
.switch {
  position: relative;
  display: inline-block;
  width: 43px;
  height: 18px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 11px;
  width: 11px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
.right {
  
  right: -180px;
  
  
}
</style>
<div class="container">
				<div class="row">
							<div class="col-sm-2">
										<div class="service-block">
													<div class="block">
															<p class="title_property"><?php echo $personal_dashboard?></p>
															<hr class="new1" style="width:100%">
															<p class="font_size">
															<span class="tab"></span>  <a href="dashboard.php"><?php echo $profile;?></a><br>
															<a href="coming.php?page=<?php echo $national_id_card?>"><?php echo $national_id_card;?></a><br>
															<a href="coming.php?page=<?php echo $birth_certificate?>"><?php echo $birth_certificate;?></a><br>
															<a href="coming.php?page=<?php echo $marriage_divorce?>"><?php echo $marriage_divorce;?></a>
															<a href="coming.php?page=<?php echo $business_charities?>"><?php echo $business_charities;?></a><br>
															<a href="coming.php?page=<?php echo $intellectual_property?>"><?php echo $intellectual_property;?></a>
															<a href="coming.php?page=<?php echo $employers_self?>"><?php echo $employers_self;?></a><br>
															<a href="coming.php?page=<?php echo $job_center?>"><?php echo $job_center;?></a><br>
															<a href="coming.php?page=<?php echo $personal_payslip?>"><?php echo $personal_payslip;?></a><br>
															<a href="coming.php?page=<?php echo $driving_license?>"><?php echo $driving_license;?></a><br>
															<a href="coming.php?page=<?php echo $vehicle_particulars?>"><?php echo $vehicle_particulars;?></a><br>
															<a href="coming.php?page=<?php echo $passport?>"><?php echo $passport;?></a><br>
															<a href="coming.php?page=<?php echo $visa_work_permit_foreigners?>"><?php echo $visa_work_permit_foreigners;?></a><br>
															<a href="coming.php?page=<?php echo $importing_exporting?>"><?php echo $importing_exporting;?></a><br>
															<a href="coming.php?page=<?php echo $fines_penalties?>"><?php echo $fines_penalties;?></a><br>
															<a href="coming.php?page=<?php echo $local_council?>"><?php echo $local_council;?></a><br>
															<a href="coming.php?page=<?php echo $policies_reporting?>"><?php echo $policies_reporting;?></a><br>
															<a href="coming.php?page=<?php echo $national_news?>"><?php echo $national_news;?></a><br>
															</p>
													</div>
												
										</div>
							</div>

							<div class="col-sm-2 sm_p">
								<div class="vl"></div>
							</div>
							
							<div class="col-sm-9">
									<div class="service-block">
												<div class="block">
													<div class="row">					
														<a href="javascript:history.go(-1)" style="color:red;"> << Back </a>
														
													</div>
												</div>	
												
																
														<div class="block" ><h4 class="style-h4"><?php echo $page_name?></h4></div>
<span class="tab"></span> &nbsp;  &nbsp; <span style="font-size:12px;">Page Comming Soon!</span>
																										
														
						<form action="">
	<div class="row">
					
				<div class="col-sm-6">
					</form>
				</div>
			
  				
			
	</div>	  
		
		  



</div>
</div>
</div>

</div>


</div>
</div>
<div style="height:100px;"></div>


   <?php include "footer.php";}?>