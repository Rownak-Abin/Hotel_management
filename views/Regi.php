<!DOCTYPE html>
<html>
<head>
<title>Creative Colorlib SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style/regiSty.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
</head>

<?php

	require "../model/db_connect.php";
	require "../controllers/RegiController.php";

	if(isset($_POST['submit'])){
		
			registration();
			
		}

?>



<body>
	
	<div class="main-w3layouts wrapper">
		<h1>Registration For Room Details</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="#" method="post">
					<input class="text" type="text" name="Username" placeholder="Username" required="">
					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class="text" type="text" name="Phone" placeholder="Phone" required=""><br>
					<input class="text" type="password" name="password" placeholder="Password" required=""><br>
					
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" value="SIGNUP" name="submit">
				</form>
				<p>Don't have an Account? <a href="#"> Login Now!</a></p>
			</div>
		</div>

		<div class="colorlibcopy-agile">
			<p>© 2021 All Rights Reserved By Rownak Abin</a></p>
		</div>
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	
</body>

<script type="application/x-javascript"> addEventListener("load", function()
 { setTimeout(hideURLbar, 0); }, false);
  function hideURLbar(){
   window.scrollTo(0,1);
    } </script>
</html>