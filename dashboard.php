<?php
session_start();
    if(!isset($_SESSION['user_id']))
   {
    header("location:login.php");
   }
   else
   { 
$user_id=$_SESSION['user_id']; 
include ('header.php');
include 'config.php';
$query="select * from user_register where id=$user_id ";
$rs = mysqli_query($conn,$query) or die(mysqli_error());
$row= mysqli_fetch_array($rs);
$first_name = $row['first_name'];
$middle_name = $row['middle_name'];
$sur_name = $row['sur_name'];
$date_of_birth = $row['date_of_birth'];
$gender = $row['gender'];
?>
<style>

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
    background-color: #3b5998;
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
  font-size: 14px;
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
															<span class="tab"></span>  <a href="coming.php?page=<?php echo $profile?>"><?php echo $profile;?></a><br>
															<a href="coming.php?page=<?php echo $national_id_card?>"><?php echo $national_id_card;?></a><br>
															<a href="coming.php?page=<?php echo $birth_certificate?>"><?php echo $birth_certificate;?></a><br>
															<a href="coming.php?page=<?php echo $marriage_divorce?>"><?php echo $marriage_divorce;?></a><br>
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
														<div class="col-sm-6 title_property1"><?php echo $personal_profile?></div>
														<div class="col-sm-6 font_size"><?php echo $personal?>  <label class="switch">
									  												<input type="checkbox" ><span class="slider round"></span></label>   <?php echo $business_charities;?>  
														</div>
													</div>
												</div>	
												<hr class="new1" style="width:100%">
												<div class="block">
													<div class="row">					
														<div class="col-sm-2 info_property">
														<p><?php echo $ad_first_name?><p>
														<p><?php echo $ad_middle_name?></p>
														<p><?php echo $ad_sur_name?></p>
														<p><?php echo $ad_birthday?></p>
														<p><?php echo $ad_gender?></p>
														</div>
														<div class="col-sm-2 ">
														<p><?php echo $first_name?></p>
														<p><?php echo $middle_name?></p>
														<p><?php echo $sur_name?></p>
														<p><?php echo $date_of_birth?></p>
														<p><?php echo $gender?></p>
														</div>
													</div>
												</div>															
														<hr class="new1" style="width:100%">
						<form action="">
	<div class="row">
					
				<div class="col-sm-6">
					<div class="form-group">	
						<p class="title_property2"><?php echo $place_of_birth?></p>		
						<input type="text" class="form-control "   name="place_of_birth"  required="" ><br>
						<button type="submit" class="btn btn-primary1  btn-xs col-md-6 " name="save">Save</button>
					</div></form>
				</div>
			
  			<div class="col-sm-6 right">
 					<p><a class="button button1" href="coming.php?page=<?php echo $dash_place_of_birth?>"</a><?php echo "$dash_place_of_birth"?></a></p>
					<p><a class="button button1" href="coming.php?page=<?php echo $dash_address?>"><?php echo "$dash_address"?></a></p>
					<p><a class="button button1" href="coming.php?page=<?php echo $dash_email?>"><?php echo "$dash_email"?></a></p>
					<p><a class="button button1" href="coming.php?page=<?php echo $dash_family_member?>"><?php echo "$dash_family_member"?></a></p>
					<p><a class="button button1" href="coming.php?page=<?php echo $dash_employement?>"><?php echo "$dash_employement"?></a></p>
					<p><a class="button button1" href="coming.php?page=<?php echo $dash_nationalities?>"><?php echo "$dash_nationalities"?></a></p>
					<p><a class="button button1" href="coming.php?page=<?php echo $dash_phone_no?>"><?php echo "$dash_phone_no"?></a></p>
					<p><a class="button button1" href="coming.php?page=<?php echo $dash_next_of_kin?>"><?php echo "$dash_next_of_kin"?></a></p>
			</div>		
			
	</div>	  
		 <hr class="new1" style="width:100%"> 
		  



</div>
</div>
</div>

</div>


</div>
</div>
<div style="height:100px;"></div>


   <?php include "footer.php";}
		if(time() - $_SESSION['timestamp'] > 300) 
		{ //subtract new timestamp from the old one
			   unset($_SESSION['user_id'], $_SESSION['name'], $_SESSION['timestamp']);
			   header("Location:index.php"); //redirect to index.php
			   exit;
		}
		else 
		{
			$_SESSION['timestamp'] =  time();
		}
		
?>