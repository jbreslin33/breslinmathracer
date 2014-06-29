<?php

function getRandomPassword($conn)
{

	//first we need all the passwords then we can pick one at random
	$query = "select password from passwords;";
	$result = pg_query($conn,$query);
	dbErrorCheck($conn,$result);
	$numberOfRows = pg_num_rows($result);
	$randomNumber = rand(0,$numberOfRows);
	$password = pg_fetch_result($result, $randomNumber, password);
	
	return $password;

}

?>
