<?php
	session_start();
	
		if(isset($_SESSION['loggedinuser']) || isset($_SESSION['regiuser']))
    	{
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>dashboard</title>
	
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
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

	<?php 

		if(isset($_POST['cmnt'])){

			$cusname = $dashdata['CusName'];		
			$comment = $_POST['cm'];
			$date = date("d-m-y");

			$qu6 = "INSERT INTO comments( cname, Cdate, Comment) 
		VALUES( '$cusname', '$date', '$comment' )";

		execute($qu6);

		

			echo "<script> alert('Comment Added');</script>";
			header("Refresh:0");	

		}


		if($dashdata==null){
			$d=0;
			echo "<div style='position:relative; color:red; font-size:35px; left:500px; top:180px;'> You have not requested for any room yet.. </div>";
					
		}

		else{



	?>

	<h1 id="nm" style="position: relative; font-family: arial; left:280px">Dashboard</h1><hr>


<div class="dashdiv"><br>
	
	<h2 style="position:relative; left:40px">Name: <?php echo $dashdata['CusName'];?></h2>

	<h3 style="position:relative; left:40px">Requested: <?php echo $dashdata['room'];?> </h3>

	<h3 style="position:relative; left:40px">Check-in: <label style='color:green'><?php echo $dashdata['checkin'];?></label></h3>

	<h3 style="position:relative; left:40px">Nights: <?php echo $dashdata['nights'];?></h3>

	<h3 style="position:relative; left:40px">Status: <label id="stat" style='color:red'><?php echo $dashdata['status'];?></label> </h3>

</div>

<?php
	}
?>

	<form method="post">
<div class="cmntdiv">



	<h2>Comment:</h2>

	<textarea name="cm" id="" cols="50" rows="3"></textarea>

	<input style='position:relative; top:-20px; left:0px; background-color:#00BFF' 
	type='submit' class='Rqbutton' name="cmnt"  value='Submit' >
	
</div>

</form>

	<!--  <div class="Sidenav">
   
         <nav>
 
            <ul>
                <li><a class="" href=""></a></li>
                 <li><a class="" href=""></a></li>
               <li><a class="active" href="index.html"> &nbsp &nbsp Home</a></li>
               <li><a href="#"> &nbsp &nbsp News</a></li>
               <li><a href="#"> &nbsp &nbsp Contact us</a></li>
               <li><a href="#"> &nbsp &nbsp About</a></li>
               <li><a href="Logout.php"> &nbsp &nbspLog Out</a></li>
            
            </ul>

   
         </nav>

      </div> -->
	
</body>

<script>
	 $(document).ready(function(){

	 	var a = document.querySelector("#stat").textContent;

	 	if(a != "Confirmed"){
	 		$(".cmntdiv").hide();
	 	}


	 });



</script>
</html>

<?php
	}
	else{
		echo("<script>location.href = 'Login.php'</script>");
		
    	}

?>