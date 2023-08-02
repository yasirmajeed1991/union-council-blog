<?php include "header.php";
if($_SESSION['user_id']!='') 
    { 
        header("location:index.php");
    }
else{
include 'config.php'; 
//FUNCTION FOR CHECKING TEXT INPUT  
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
	$first_name=$middle_name=$sur_name=$gender=$email=$password=$password1=$date_of_birth='';
	$first_nameErr=$middle_nameErr=$sur_nameErr=$genderErr=$emailErr=$passwordErr=$date_of_birthErr='';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//POSTED RECORD
//Validation For USER Form

	
	$first_name			= 	$_REQUEST['first_name'];
	$middle_name		=	$_REQUEST['middle_name'];
	$sur_name			=	$_REQUEST['sur_name'];
	$gender				=	$_REQUEST['gender'];
	$email				=	$_REQUEST['email'];
	$date_of_birth		=	$_REQUEST['date_of_birth'];
	$password			=	$_REQUEST['password'];
	$password1			=	$_REQUEST['password1'];
	

//FIRST_NAME	
  if (empty($_POST["first_name"])) {
    $first_nameErr = "This field is required";
  } else {
    $first_name = test_input($_POST["first_name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$first_name)) {
      $first_nameErr = "This Field Only Contains letters and White Spaces";
    }
	if ((strlen($first_name)< 5) || (strlen($first_name) > 30)){
		$first_nameErr = "This Field Must be greater than 5 and less than 30 Characters";	
		}
  }
 //MIDDLE_NAME	
  
    $middle_name = test_input($_POST["middle_name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$middle_name)) {
      $middle_nameErr = "This Field Only Contains letters and White Spaces";
    }
	 
   //SUR_NAME	
  if (empty($_POST["sur_name"])) {
    $sur_nameErr = "This field is required";
  } else {
    $middle_name = test_input($_POST["sur_name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$sur_name)) {
      $sur_nameErr = "This Field Only Contains letters and White Spaces";
    }
	if ((strlen($sur_name)< 5) || (strlen($sur_name) > 30)){
		$sur_nameErr = "This Field Must be greater than 5 and less than 30 Characters";	
		}
  } 
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
		if($password !=$password1){
			$passwordErr = "Password and Confirm Password Must be same.";	
			
		}
	  }

//GENDER
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$gender)) {
      $genderErr = "Only letters and white space allowed";
    }
	if ((strlen($gender) < 3) || (strlen($gender) > 7) ){
		$genderErr = "Gender Must be in range of 3 to 7 Character";	
		}
	if (ctype_space($gender)){
		$genderErr = "Gender Must be without spaces";	
		}
  }

	
	
//CHECKING FOR ERRORS IF THERE IS NOT ANY ERROR THAN THE FORM SHOULD BE SUBMITTED
if(empty($first_nameErr) && empty($sur_nameErr) && empty($genderErr) && empty($emailErr) && empty($passwordErr)) {

	//CHECKING FOR RECORD IF USER ALREADY EXISTED		
			$query			=	"select * from user_register where email='$email' ";
			$rs		    	=	mysqli_query($conn,$query) or die(mysqli_error());
			$row		    =	mysqli_fetch_array($rs);
			if($row>0){
				$message_Err = "User Already Exist Please <a href='login.php'>Click Here</a> to Login to Your account";
			}
			else{
			$query = "INSERT INTO user_register (first_name,middle_name,sur_name,gender,date_of_birth,email,password) 
			values('$first_name','$middle_name','$sur_name','$gender','$date_of_birth','$email','$password')";
			$rs=	mysqli_query($conn,$query) or die(mysqli_error());
				
			$message_success = "User Registered Successfully";
			}
			}
			
			
			
			
}

?>
<style>
p.font_size{
	font-size:12px;
	
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
.table {
    border-collapse: separate;
    border-spacing:0 5px;
}
</style>

<br />
<div class="container">
<div class="row">
<div class="col-sm-8">

<div class="row">
<div><h2><?php echo $gateway_services?>:</h2></div>
<div><h4><?php echo $register?></h4></div><br>
<?php if($message_Err!=''){?>
<div align="center"  ><p><strong style="color:red; "><?php echo $message_Err?></strong></p> <br>			 </div>
	
	<?php }?>
	<?php if($message_success!=''){?>
	<div align="center"  ><p><strong style="color:green; "><?php echo $message_success?></strong></p> <br>	 </div>
	
	<?php }?>
			<div class="col-sm-10">

					<div class="row">

						<form  action="" method="post" >

						<div class="row">
							<div class="col-sm-6">
							<div class="input-group">
							  <span class="input-group-addon append_property" >First Name</span>
							  <input id="first_name" type="text" class="form-control" name="first_name" value="<?php echo $first_name?>" ><br>
							  <?php echo '<p class="error_msg">'.$first_nameErr.'</p>';?>
							</div>&nbsp;
							</div> 
							<div class="col-sm-6">
							<div class="input-group">
							  <span class="input-group-addon append_property">Middle Name</i></span>
							  <input id="middle_name" type="text" class="form-control" name="middle_name" value="<?php echo $middle_name?>"><br>
							  <?php echo '<p class="error_msg">'.$middle_nameErr.'</p>';?>
							</div>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-sm-6">
							<div class="input-group">
							  <span class="input-group-addon append_property">Sur Name</span>
							  <input id="sur_name" type="text" class="form-control" name="sur_name" value="<?php echo $sur_name?>" ><br>
							  <?php echo '<p class="error_msg">'.$sur_nameErr.'</p>';?>
							</div>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-sm-6">
							<div class="input-group">
							  <span class="input-group-addon append_property">Gender</span>
							 <input type="radio" name="gender" value="male" <?php if($gender=="male"){echo "checked";}?>> Male  <input <?php if($gender=="female"){echo "checked";}?> type="radio" name="gender" value="female"> Female<br>
							 <?php echo '<p class="error_msg">'.$genderErr.'</p>';?>
							</div>&nbsp;
							</div>
							<div class="col-sm-6">
							<div class="input-group">
							  <span class="input-group-addon append_property" >Date of Birth</span>
							  <input  type="date" class="form-control" name="date_of_birth" value="<?php echo $date_of_birth?>"  ><br>
							  <?php echo '<p class="error_msg">'.$date_of_birthErr.'</p>';?>
							</div>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-sm-6">
							<div class="input-group">
							  <span class="input-group-addon append_property">Email</span>
							  <input  type="text" class="form-control" name="email" value="<?php echo $email?>" ></br>
							  <?php echo '<p class="error_msg">'.$emailErr.'</p>';?>
							</div>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-sm-6">
							<div class="input-group">
							  <span class="input-group-addon append_property">Password</span>
							  <input  type="password" class="form-control" name="password" value="<?php echo $password?>" >
							</div>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-sm-6">
							<div class="input-group">
							  <span class="input-group-addon append_property" >Confirm Password</span>
							  <input  type="password" class="form-control" name="password1" value="<?php echo $password1?>" ></br>
							  <?php echo '<p class="error_msg">'.$passwordErr.'</p>';?>
							</div>
							</div>
						</div>
						
						<hr>
						<div class="row">
							<div class="col-sm-6">
								<button type="submit" class="btn btn-primary1  btn-xs col-md-4 " name="register"><?php echo $register?></button>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<h6><span style="color:red">or</span></h6>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<a class="btn btn-primary  btn-xs col-md-4 register_button success" href="login.php">Login</a>
							</div>
						</div>
						
						</div>
						</form>


					</div>		
			</div>

</div>
<div class="col-md-4 col-sm-5 sidebar">

<div class="service-block">
<div class="d-flex">

<div class="block">

<p style="font-size:11px;"><?php echo $access_to_v1;?><?php echo $access_to_v2;?><?php echo $access_to_v3;?><?php echo $access_to_v4;?></p>

</div>
</div>
</div>

</div>
</div>
</div><div style="height:100px;"></div>


<?php include "footer.php";}?>