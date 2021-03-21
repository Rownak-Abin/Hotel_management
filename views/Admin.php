<?php
	session_start();
	
		if(!isset($_SESSION['loggedinuser']))
    	{
 
			echo("<script>location.href = 'Login.php'</script>");
		
    	}
	
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin</title>
	 
	<link rel="stylesheet" href="style/style.css">
</head>
<body>

	<form method="post">

	<label style="position: absolute; top:20px; font-family: arial; font-size: 35px; left:260px">Requests</label><br><br><br>
	<hr>

<?php

	require "../model/db_connect.php";
	require "getAllElements.php";

	$Allreqs = getAllrequests();

	foreach($Allreqs as $reqs){


		echo "<div class='dashdiv' style='height:200px; background-color: #FFF0F5'>";
		echo "<label style='font-size:23px'>Name: $reqs[CusName]</label><br>";
		echo "<label style='position: relative; top:10px'>Email: $reqs[CusEmail] </label><br>";
		echo "<label style='position: relative; top:20px'>Phone: $reqs[CusPhn] </label><br>";
		echo "<label style='position: relative; top:30px'>Requested For: $reqs[room] </label><br>";
		echo "<label style='position: relative; top:40px'>Check-in: $reqs[checkin] </label><br>";
		echo "<label style='position: relative; top:50px'>Duration: $reqs[nights] </label><br>";
		echo "<label style='position: relative; top:60px'>Status: <label style='color:red'>$reqs[status] </label> </label><br>";
		echo "<input style='position:relative; top:-60px; left:560px' type='submit' name='$reqs[id]' value='Confirm' class='Rqbutton'>";
		echo "<input style='position:relative; top:-60px; left:520px; background-color:#DC143C' name='$reqs[id]' type='submit' value='Reject' class='Rqbutton'>";
		echo "</div><br><br>";


		if(isset($_POST[$reqs["id"]])){

			$tx=$_POST[$reqs['id']];

			$txt = $reqs['CusEmail'];

			if($tx=="Confirm"){		

				$que = "UPDATE cusrequests SET status='Confirmed' WHERE CusEmail='$txt'";

				execute($que);

			}
			else if($tx=="Reject"){

				$quey = "UPDATE cusrequests SET status='Rejected' WHERE CusEmail='$txt'";

				execute($quey);
			}

			echo "<script> alert('Status Changed');
					 window.location.href = 'Admin.php';
					</script>";
		}
	
	}


?>



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
	</form>
</body>
</html>