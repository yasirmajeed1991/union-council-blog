<?php include "header.php";
if($_SESSION['user_id']!='') 
    { 
        header("location:index.php");
    }
else{	
?>

<style>

.tab {
  float: left;
  border: 1px solid #0095d4;
  background-color: #0095d4;
  width: 1%;
  height: 30px;
}
p.thicker {
 font-weight: 900;
  font-size:14px;
}
p.font_size{
	font-size:14px;
	
}
h6 {
   width: 34%; 
   text-align: center; 
   border-bottom: 1px solid red; 
   line-height: 0.1em;
   margin: 10px 0 20px; 
} 

h6 span { 
    background:#fff; 
    padding:0 10px; 
}
.register_button{
border: 1px solid black;
  background-color: white;
  color: #0095d4;
 
  
  cursor: pointer;
}
.success {
  border-color: red;
  
}
	.btn-primary1 {
    color: #fff;
    background-color: #3b5998;
	}
</style>
<div class="container">
						<div class="row">
								<div class="col-md-8">
									<div><h2><?php echo $gateway_services?></h2></div>
								</div>	
						</div>
								<div class="row">
									<div class="col-md-8">
										<div><p class="thicker">Access to:</p></div>
									</div>	
								</div>
				<div class="row">
						<div class="col-xs-6 col-sm-3">
							<div>	<p class="font_size"><?php echo $access_to_v1;?></p></div>
						</div>

								<div class="col-xs-6 col-sm-3">
										<p class="font_size"><?php echo $access_to_v2;?></p>
										
								</div>
								<div class="col-xs-6 col-sm-3">
										<p class="font_size"><?php echo $access_to_v3;?></p>
											
								</div>
								<div class="col-xs-6 col-sm-3">
										<p class="font_size"><?php echo $access_to_v4;?></p>
										
								</div>
				</div>	
<div class="row">
<div class="col-md-8">
<div><h4><?php echo $register_to_access_services?></h4></div>
</div></div>
<div class="col-xs-6 col-sm-4" >

 <a class="btn btn-primary1 btn-xs col-md-4 " href="register.php">Register</a>
</div><br />
</div>

</div>
</div>
<div style="height:150px;"></div>


<?php include "footer.php";}?>