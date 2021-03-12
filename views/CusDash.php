<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style/sty.css">
</head>
<body>

	

	<div class="outer-box" style="height:180px;">
		<div class="header-box">
			<strong class="header-text"> Room Size &nbsp &nbsp  </strong> <br><br>

			<div class="options">
				
			<input type="radio" id="size" name="size" value="Single" checked="checked"> Single<br>
			<input type="radio" id="size" name="size" value="Couple" > Couple<br>
			<input type="radio" id="size" name="size" value="Family" > Family
			
			<br><br>

			</div>

		</div>					
	</div>
	<br>

	<div class="outer-box" style="height:150px;">
		<div class="header-box">
			<strong class="header-text" style="left:100px;"> Type &nbsp &nbsp  </strong> <br><br>

			<div class="options">
				
			<input type="radio"  name="type" value="AC" checked="checked"> AC <br>
			<input type="radio"  name="type" value="Non-AC" > Non AC
			
			<br><br>

			</div>

		</div>					
	</div>
	<br>

		<div class="outer-box" style="height:180px;">
		<div class="header-box">
			<strong class="header-text" style="left:100px;"> Floor &nbsp &nbsp  </strong> <br><br>

			<div class="options">
				
			
			<input type="radio"  name="floor" value="Ground" checked="checked"> Ground <br>
			<input type="radio"  name="floor" value="Second" > Second<br>
			<input type="radio"  name="floor" value="Third" > Third
			
			<br><br>

			</div>

		</div>					
	</div>

	
			<br>
<div id="mainbx" style="position: absolute; top:60px; left:420px">

	<?php
		require "../model/db_connect.php";
		require "getallrooms.php";

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

			        echo " <a href='rmdetails.php?id=$room[id]'> <input style='position:relative;  left:100px' type='button' value='Details' class='btn btn-primary'> </a> ";


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

<script>
	 $(document).ready(function(){
	$('input[name="size"] ,input[name="type"],input[name="floor"]').click(function(){ 

		var a = $('input[name="size"]:checked').val();
		var b = $('input[name="type"]:checked').val();
		var c = $('input[name="floor"]:checked').val();
		

    $.ajax({

    	url: "fetchdata.php",
        type: "POST",
        data: {size:a, type:b, floor:c},
        success: function( response ) {
        	
        	$("#mainbx").html(response);
        }
    });

});
	 });
</script>
<!--  -->

</html>