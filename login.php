<?php include "header.php";
if($_SESSION['user_id']!='') 
    { 
        header("location:index.php");
    }
else{	
include "config.php";
//FUNCTION FOR CHECKING TEXT INPUT  
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
	$email=$password='';
	$emailErr=$passwordErr='';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//POSTED RECORD
//Validation For USER Form
	$email=$password='';
	$emailErr=$passwordErr='';
	$email				=	$_REQUEST['email'];
	$password			=	$_REQUEST['password'];
	
//EMAIL
if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
//PASSWORD 
if (empty($_POST["password"]) || empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
		if ((strlen($password) <8) || (strlen($password) > 20)){
		$passwordErr = "Password must be greater than 8 character and less than 20 ";	
		}
 }
	
//CHECKING FOR ERRORS IF THERE IS NOT ANY ERROR THAN THE FORM SHOULD BE SUBMITTED
if(empty($emailErr) && empty($passwordErr)) {

	//CHECKING FOR RECORD IF USER EXISTED		
			$query			=	"select * from user_register where (email='$email' && password='$password') ";
			$rs		    	=	mysqli_query($conn,$query) or die(mysqli_error());
			if(mysqli_num_rows($rs)	> 0)	
				{
					$row		=	mysqli_fetch_array($rs);
					$_SESSION['timestamp'] = time(); //set new timestamp
					$_SESSION['user_id']		=	$row['id'];
					$_SESSION['name']		= 	$row['first_name'];
					header("location:dashboard.php");
					}
				else
				{
				 $message_Err  = "Invalid User Details if not a registered member <a href='register.php'>Click Here</a> for registration";
				}
			}
			
			
			
			
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
.append_property{
	background-color:white;
	border-color:#3b5998;
	color:#3b5998;
	
	}
	.btn-primary1 {
    color: #fff;
    background-color: #3b5998;
	}
.error_msg{
	color:red;
	font-size:11px;
	
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
					
						<div class="col-md-4" >
						<div><h4><?php echo $nation_id?></h4></div><br>
						<?php if($message_Err!=''){?>
						<p><strong style="color:red; "><?php echo $message_Err?></strong></p> 			
										<?php }?>
								<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" >
								<div class="form-group">	
									<div class="input-group">
										<span class="input-group-addon append_property" style="padding-right: 36px;">Email</span>
										<input  type="email" required class="form-control" name="email" value="<?php echo $email?>" style="font-size:14px;"><br>
										<?php echo '<p class="error_msg">'.$emailErr.'</p>';?>
									</div>
								</div>	
								<div class="form-group">	
									<div class="input-group">
										<span class="input-group-addon append_property" >Password</span>
										<input  type="password" required class="form-control" name="password" value="<?php echo $password?>" ><br>
										<?php echo '<p class="error_msg">'.$passwordErr.'</p>';?>
									</div>
								</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary1  btn-xs col-md-4 " name="logindata">Log in</button><br>
									<div>
									<br />
									<h6><span style="color:red">or</span></h6></form>
									<a class="btn btn-primary  btn-xs col-md-4 register_button success" href="register_access.php">Register</a>
						</div><br/>
				</div>


			</div></div></div>
<div style="height:150px;"></div>


<?php include "footer.php";}?>