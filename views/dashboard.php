<?php
	session_start();
	
		if(!isset($_SESSION['loggedinuser']))
    	{
    	    
		//header("Location:../index.php");
		echo("<script>location.href = 'Login.php'</script>");
		
    	}
	
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>dashboard</title>
	<link rel="stylesheet" href="style/style.css">
</head>
<body style=" overflow-x: hidden">

	<?php

	require "../model/db_connect.php";
	require "../controllers/RegiController.php";
	
	

		if(isset($_GET['CusId'])){
			$Cus = $_GET['CusId'];
		}

		$que = "SELECT * FROM users WHERE id=$Cus";

		$res = get($que);

		$result = mysqli_fetch_array($res);

		$phn = $result['phone'];
		$email = $result['email'];



		

		$dashdata = getdashcusdata($email);

		

		


	?>

	<h1 style="position: relative; font-family: arial; left:280px">Dashboard</h1><hr>


<div class="dashdiv"><br>
	
	<h2 style="position:relative; left:40px">Name: <?php echo $dashdata['CusName'];?></h2>

	<h3 style="position:relative; left:40px">Requested: <?php echo $dashdata['room'];?> </h3>

	<h3 style="position:relative; left:40px">Check-in: <label style='color:green'><?php echo $dashdata['checkin'];?></label></h3>

	<h3 style="position:relative; left:40px">Nights: <?php echo $dashdata['nights'];?></h3>

	<h3 style="position:relative; left:40px">Status: <label style='color:red'><?php echo $dashdata['status'];?></label> </h3>

</div>



	 <div class="Sidenav">
   
         <nav>
 
            <ul>
                <li><a class="" href=""></a></li>
                 <li><a class="" href=""></a></li>
               <li><a class="active" href="hos.php"> &nbsp &nbsp Home</a></li>
               <li><a href="#"> &nbsp &nbsp News</a></li>
               <li><a href="#"> &nbsp &nbsp Contact us</a></li>
               <li><a href="#"> &nbsp &nbsp About</a></li>
               <li><a href="Logout.php"> &nbsp &nbspLog Out</a></li>
            
            </ul>

   
         </nav>

      </div>
	
</body>
</html>