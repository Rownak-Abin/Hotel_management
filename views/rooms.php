<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style/roomSty.css">
</head>
<body>



	<div style="background-color:#F4A460; width:320px; height:2000px">

		<p style="position: absolute; color:#FFDEAD;font-size: 40px; top:110px; left:60px">For Details</p>

	<a href='Regi.php'> <input  type='button' value='Register' class='btn btn-success regibtnrqst'> </a>

		<a href='Login.php'> <input  type='button' value='Log In' class='btn btn-primary logbtnrqst'> </a>

	</div>

	

		
<div id="mainbx" style="position: absolute; top:60px; left:420px">

	<br><p style="font-size: 40px;position:absolute; top:-25px; color:#A0522D; ">All Rooms</p><hr>

	<?php
		require "../model/db_connect.php";
		require "getAllElements.php";

		$rooms = getAllrooms();

			
		$i = 0;
		echo "<div class='row'>";
			foreach($rooms as $room) {
			

			  echo "<div class='col-lg-2'>";
			      echo "<div class='item'>";
			      	 echo "<div class='roombox'>";

			      	 echo "<img src= '$room[pic]' width='278px;' height='180px;' style='border:solid black 1px; padding:2px;  float:left; margin-right:10px; margin-bottom:5px;'>";
					

			        echo "<p class='boxhotnm'>$room[roomname]</p>";

			        echo "<h6> &nbsp Price: $room[price] </h6>";


			      	echo '</div>';
			      echo '</div>';
			  echo '</div>';
			  $i++;
			  if ($i % 3 == 0) {echo '</div><div class="row">';}

			}
 		echo "</div>";
			

	?>	

</div>		

			<p id="info"></p>
	
</body>



</html>