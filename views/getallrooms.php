<?php
	
	function getAllrooms()
	{
		$query ="SELECT * FROM roomlist";
		$rooms = get($query);
		return $rooms;	
	}


?>