<?php
	
	function getAllrooms()
	{
		$query ="SELECT * FROM roomlist";
		$rooms = get($query);
		return $rooms;	
	}

	function getAllrequests()
	{	
		$query2 = "SELECT *FROM cusrequests";
		$Allrequests = get($query2);
		return $Allrequests;
	}


?>