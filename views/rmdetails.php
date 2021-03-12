<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="style/sty.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background-color: #EFFFFE;">

	<?php

	require "../model/db_connect.php";
	


		$nm = null;
	
		if(isset($_GET['id'])){
			$nm = $_GET['id'];

		}

		$qr = "SELECT * FROM roomlist WHERE id=$nm";

		$r = get($qr);

		$room = mysqli_fetch_array($r);

	

	?>

	<div class="roomdethead">
		<p><?php echo "$room[roomname]"; ?></p>
	</div>

	<div style="position: absolute; left:340px;top:130px">
		<img src= '<?php echo "$room[pic]"; ?>' width='750px;' height='400px;' class='roomdetpic'>
	</div>

		<div class="outer-box"  id="detbox">
		<div class="header-box" id="detinbox">
			<strong class="header-text" style="left:380px;"> Description &nbsp &nbsp  </strong> <br><br>


			<br><p class="complement">Complementry: <?php echo "$room[Complementary]"; ?></p><br><br><br>
			
			<p class="desc">Description: <?php echo "$room[description]"; ?> </p>

			<br><br>

			</div>

		</div>	

		<a class="rqstbtn" href=""><input type="button" value="Request Booking" class="btn btn-success" 
			style="font-size: 20px; width: 220px; height:50px; box-shadow: 5px 6px 16px 3px rgba(0,0,0,0.33);"></a>



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
               <li><a href="/login"> &nbsp &nbspLog in</a></li>
            
            </ul>

   
         </nav>

      </div>
	
</body>
</html>