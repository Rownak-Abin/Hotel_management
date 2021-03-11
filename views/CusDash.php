<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>
<body>

	<div style="position:absolute; left:50px; top:175px;">
			<strong style="font-family:arial;"> Room Size: &nbsp &nbsp  </strong> 
			
			<input type="radio" id="size" name="size" value="Single" checked="checked"> Single
			<input type="radio" id="size" name="size" value="Couple" > Couple
			<input type="radio" id="size" name="size" value="Family" >Family
			
			<br><br>
	</div>

	<div style="position:absolute; left:50px; top:275px;">
			<strong style="font-family:arial;"> type : &nbsp &nbsp  </strong> 
			
			<input type="radio"  name="type" value="AC" checked="checked"> AC 
			<input type="radio"  name="type" value="Non-AC" >Non AC
			
			<br><br>
	</div>

	<div style="position:absolute; left:50px; top:350px;">
			<strong style="font-family:arial;"> Floor : &nbsp &nbsp  </strong> 
			
			<input type="radio"  name="floor" value="Ground" checked="checked"> Ground 
			<input type="radio"  name="floor" value="Second" > Second
			<input type="radio"  name="floor" value="Third" > Third
			
			<br><br>
	</div>
			<br>

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
        	
        	$("#info").html(response);
        }
    });

});
	 });
</script>
<!--  -->

</html>