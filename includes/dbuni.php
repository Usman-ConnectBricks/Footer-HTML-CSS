<?php
	$connection=mysqli_connect('localhost','root','');
	$db=mysqli_select_db($connection,"university");
	if(!$connection)
	{
		echo "database not found";
	}
	
?>