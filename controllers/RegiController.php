<?php

	function registration(){
		$name = $_POST["Username"];
		$email = $_POST["email"];
		$phn = $_POST["Phone"];
		$pass = $_POST["password"];


		if(!empty($name) && !empty($email) && !empty($phn) && !empty($pass)){
		
		
		$query="INSERT INTO customers (cName, email, phone,	password) 
		VALUES('$name', '$email', '$phn', '$pass')";
		execute($query);

		$que = "SELECT * FROM customers WHERE email='$email'";

		$getid = get($que);

		$cus = mysqli_fetch_array($getid);
		
			
				echo "<script> alert('Registration Completed');
					 window.location.href = 'CusDash.php?CusId=$cus[id]';
					</script>";
		
		}

	}




?>