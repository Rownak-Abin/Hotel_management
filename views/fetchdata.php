<?php

	include "../model/db_connect.php";

	$s = $_POST['size'];
	$t = $_POST['type'];
	$f = $_POST['floor'];

	$q = "SELECT * FROM roomlist WHERE size='$s' AND type='$t' AND floor='$f'";

	$result = get($q);

	if(mysqli_num_rows($result) > 0){

		while($row = mysqli_fetch_array($result)){
	

	echo "<p> $row[roomname]</p>";

		}
	}

	?>