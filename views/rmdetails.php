<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="style/sty.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
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

		



	</div>

 <div style="position: absolute; top:130px">

<div style="position: relative; height:370px; width:270px; background-color:#FAEBD7; top:0px; left:1170px; border: 1px solid #C0C0C0; border-radius: 5px;  box-shadow: 2px 5px 28px -11px rgba(0,0,0,0.75);">

        
       

       <div style="position: relative;left:85px; color:#000;  font-size: 17px; top:10px">--Total Cost--</div>  <br>

      
       <input id="cost" value="<?php echo "$room[price]"; ?>" type="text" name="cos" style="position: relative; height:50px; padding:10px; width:220px;margin:5px 25px;  font-size: 20px;">     

        <div style="position: relative;left:85px; color:#000;  font-size: 17px; top:-0px">--Nights--</div>  

         

        <input id="quan" type="number" value=1 min="0" max="40" step="1" style="position: relative; top:10px; left:25px; height: 50px; padding:10px; font-size: 20px; width:220px;"><br><br>

          <div style="position: relative;left:85px; color:#000;  font-size: 17px; top:-0px">--Check-in--</div> 

         <input type="date" id="dt"><br><br>

        <input type="submit" name="submit" value="Request Booking" class="btn btn-success" style="position: relative; height:50px; width:220px;margin:10px 25px;  font-size: 20px;"> 

       


    </div>

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


                <script src="bootstrap-input-spinner.js"></script>      

                <script>

                  $(document).ready(function(){


                var i =  $("#cost").val();

                console.log(i);

                


               $(":input").on('keyup mouseup', function () {
                    var q = $("#quan").val();
                 
                    var x = i*q;

                   $("#cost").val(x);

                  });

                $("#dt").change(function(){
                	
                		var date = $("#dt").val();

               			 console.log(date);
                	
               		

               });

            

                 
             });               	

                </script>
</html>