<?php
	session_start();

	
	require "../model/db_connect.php";
	
	
	$un="";
	$err_un="";
	$pass="";
	$err_pass="";
	$has_error=false;
	$invalid="";
	
		if(isset($_POST['submit'])){
			
			if(empty($_POST['uname']))
		{
			$err_un="*Username Required";
			$has_error=true;
			
			
		}
		else
		{
			$un=$_POST['uname'];
		}
		
		
		if(empty($_POST['password']))
		{
			$err_pass="*Password Required";
			$has_error=true;
			
			
		}
		else
		{
			$pass=$_POST['password'];
			
			
		}
		
		if(!$has_error)
		{
			$query = "SELECT * FROM users WHERE cName='$un' AND password='$pass'";
			
			$result=get($query);
			if(mysqli_num_rows($result) > 0)
			{
				$_SESSION['loggedinuser'] = $un;

				$row=mysqli_fetch_array($result);

				$CusId =  $row['id'];
				$Custype =  $row['type'];

				if($Custype=="customer"){

					echo("<script>location.href = 'CusDash.php?CusId=$CusId'</script>");
				}
				else if($Custype=="admin"){

					echo "welcome admin";
				}	
				
				}
				else{
					
					//header("Location:IdDoc.php?id=$row[id]");

					echo "Invalidxxx";
				
				}
			}
			else
			{
				
				$invalid="Invalid Login";
				
			}
		}
		
		
		
		
?>


<html>
<head>
   
    <link rel="stylesheet" type="text/css" href="style/Logstyle.css">   
</head>
    <body>
	<form method="POST">
	    
	    
	<a href="../index.php" style="position:absolute;  left:1450px; top:30px;"><input style="background:	#FFFACD; border:none;" type="button" value="X" ></a>
	
    <div class="login-box">
    <img src="imgs/avatar.png" class="avatar">
        <h1>Login Here</h1>
           
            <p>Username</p>
            <input type="text" name="uname" value="<?php echo $un; ?>" placeholder="Enter Username"><br>
			<span style="color:red;position:relative;top:-10px; left:60px;"><?php echo $err_un;?></span>
			
			
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password"><br>
			<span style="color:red;position:relative; top:-10px; left:60px;"><?php echo $err_pass;?></span>
			
			
        <input class="LogBut" type="submit" name="submit" value="Login">
		
		<p style='color:yellow; position:absolute; left:115px; top:395px; '><?php echo $invalid; ?></p>
		
               
            </form>
        
        
        </div>
		
		
    
    </body>
</html>

<!-- 
				$_SESSION['loggedinuser'] = $un;
				
				
				$row=mysqli_fetch_assoc($result);*/
				/*$cat=$row["category"];
				
				if($cat=="Admin"){*/
				    
				//header('Location:/Author.php'); -->