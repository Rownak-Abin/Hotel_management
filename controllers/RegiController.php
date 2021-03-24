<?php

	function registration(){
		$name = $_POST["Username"];
		$email = $_POST["email"];
		$phn = $_POST["Phone"];
		$pass = $_POST["password"];

		$_SESSION['regiuser'] = $name;


		if(!empty($name) && !empty($email) && !empty($phn) && !empty($pass)){
		
		//
		$query="INSERT INTO users (cName, email, phone,	password) 
		VALUES('$name', '$email', '$phn', '$pass')";

		execute($query);
		//

		$que = "SELECT * FROM users WHERE email='$email'";

		$getid = get($que);

		$cus = mysqli_fetch_array($getid);
		
			
				echo "<script> alert('Registration Completed');
					 window.location.href = 'CusDash.php?CusId=$cus[id]';
					</script>";
		
		}

	}

	function getcusdata($r){

		//requests room booking after logged in rmdetails page

			$cusid = null;

		if(isset($_GET['CusId'])){
			$cusid = $_GET['CusId'];
		}


		$qr2 = "SELECT * FROM users WHERE id=$cusid";

		$resqu2 = get($qr2);

		$CusDetails = mysqli_fetch_array($resqu2);

		$cusnm = $CusDetails['cName'];
		$cusphn = $CusDetails['phone'];
		$cusemail = $CusDetails['email'];
		$room = $r;

		$checkin = $_POST['date'];
		$nights = $_POST['qua'];

		$query = "INSERT INTO cusrequests (CusName,	CusPhn,	CusEmail,	room,	checkin,	nights) 
					VALUES ('$cusnm', '$cusphn', '$cusemail', '$room', '$checkin', '$nights')"; 

			execute($query);

			echo "<script> alert('Request Sent');
					 window.location.href = 'CusDash.php?CusId=$cusid';
					</script>";
	}

	function getdashcusdata($email){

		$qu = "SELECT * FROM cusrequests WHERE CusEmail='$email'";

		$data = get($qu);

		$customer = mysqli_fetch_array($data);

		return $customer;

		
	}




?>