<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style/sty.css">
</head>


<?php

	include "../model/db_connect.php";

	$s = $_POST['size'];
	$t = $_POST['type'];
	$f = $_POST['floor'];

	$q = "SELECT * FROM roomlist WHERE size='$s' AND type='$t' AND floor='$f'";

	$result = get($q);

	if(mysqli_num_rows($result) > 0){

	echo "<div class='row'>";	

		while($row = mysqli_fetch_array($result)){

				$i = 0;
	

	 echo "<div class='col-lg-2'>";
			      echo "<div class='item'>";
			      	 echo "<div class='roombox'>";

			      	 echo "<img src= '$row[pic]' width='278px;' height='180px;' style='border:solid black 1px; padding:2px;  float:left; margin-right:10px; margin-bottom:5px;'>";
					

			        echo "<p class='boxhotnm'>$row[roomname]</p>";

			       echo "<h6> &nbsp Price: $row[price] </h6>";

			      	echo '</div>';
			      echo '</div>';
			  echo '</div>';
			  $i++;
			  if ($i % 3 == 0) {echo '</div><div class="row">';}

		}

	echo "</div>";	
	}

	?>

	</html>