<?php if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
error_reporting(0);
include "contents.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<title>Official Website.</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet">
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/custom_css.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/parsley.js"></script>
<style>
.parsley-error{
	color:red;
	background-color:#3b5998;
	font-size:12px;
}
.parsley-errors-list{
	color:red;
	font-size:11px;
	list-style:none;
	width:100%;
}
.common-form-wrapper {
    max-width: 350px;
    margin: 0 auto;
    border: 1px solid #fff;
    background-color: #fff;
    margin-top: 96px;
    padding: 0 40px;
}
.btn-round-lg{
border-radius: 22.5px;
}
.btn-round{
border-radius: 17px;
}
.btn-round-sm{
border-radius: 15px;
}
.btn-round-xs{
border-radius: 11px;
padding-left: 10px;
padding-right: 10px;
}
.form-control {
    border-color: #3b5998;
    box-shadow: none;
    height: 36px;
    font-size: inherit;
}

.block h3 {
    color: #3b5998;
    font-size: 20px;
    margin: 0 0 10px;
}
.landing-page-font {
	font-size:16px;
	
}
.symbol-span1{
	font-size:80px;
	color:#3b5998;
}
.symbol-span2{
	font-size:40px;
	color:#3b5998;
}
a {
    color: #3b5998;
}
.top-buffer { margin-left:20px; }
.header-text-box { margin-top:10px; }
.landing-list-items { margin-top:60px; }
.span-word-spacing {  word-spacing: 1cm; }
.grid-container {
  grid-template-rows: 100px 300px;
}
p.center{
	text-align: center;
	
}

</style>
</head>
<body>
<header class="header">
		<div class="container">
				<div class="row">
					<div class="col-md-8">
						<a href="index.php" class="logo">
							<img src="images/logo1.png" alt="">
						</a>
					</div>

					<div class="col-md-4">
						<div class="form-group header-text-box d-flex align-items-center justify-right mt-2" style="margin-top: 18px;font-size:15px;">
								<div >  <a href="#">English</a>  <?php if($_SESSION['user_id']==""){?>&nbsp; &nbsp; &nbsp; Hello Guest!<a href="login.php" >  | Sign in</a><?php }else{?>&nbsp; &nbsp; Hello <?php echo $_SESSION['name'];?>! <a href="logout.php" >|Logout</a><?php }?></div>

									<div class="dropdown navbar-right top-buffer">
										<a id="dLabel" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fa fa-bars"></i>
										</a>
										<ul class="dropdown-menu" aria-labelledby="dLabel">
										<li>
										<a href="#">Register</a>
										</li>
										<li>
										<a href="#">Login</a>
										</li>
										<li>
										<a href="#">Services</a>
										</li>
										<li>
										<a href="#">Price Checker</a>
										</li>
										<li>
										<a href="#">Testimonials</a>
										</li>
										<li>
										<a href="#">Contact Us</a>
										</li>
										<li>
										<a href="#">FAQ</a>
										</li>
										<li>
										<a href="#">About Us</a>
										</li>
										</ul>
									</div>
						</div>
						<div>
							<form>
            					<input type="text" class="form-control"   name="search" id="search" required="" data-parsley-type="search">

							</form>
						</div>
					</div>
				</div>
		</div>


</header>