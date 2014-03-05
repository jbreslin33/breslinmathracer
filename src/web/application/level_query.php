<?php
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");

//start new session
session_start();

$conn = dbConnect();

//include(getenv("DOCUMENT_ROOT") . "/src/database/set_level_session_variables.php");
//setLevelSessionVariablesAdvance($conn,$_SESSION["user_id"]);

if ($_SESSION["level"] == NULL)
{
	//insert into levelattempts (start_time,user_id,level,ref_id,transaction_code) VALUES (CURRENT_TIMESTAMP,7,1,'CA9EE2E34F384E95A5FA26769C5864B8',2);
	$insert = "insert into levelattempts (start_time,user_id,level,ref_id,transaction_code) VALUES (CURRENT_TIMESTAMP,";
	$insert .= $_SESSION["user_id"]; 	
	$insert .= ",1,'CA9EE2E34F384E95A5FA26769C5864B8',2);"; 

        //get db result
        $insertResult = pg_query($conn,$insert) or die('Could not connect: ' . pg_last_error());
        dbErrorCheck($conn,$insertResult);

	$_SESSION["ref_id"] = 'CA9EE2E34F384E95A5FA26769C5864B8';
	$_SESSION["level"] = 1;
	$_SESSION["levels"] = 11;
}

//fill php vars 
$returnString .= "100,";  
$returnString .= $_SESSION["ref_id"];
$returnString .= ",";
$returnString .= $_SESSION["level"];
$returnString .= ",";
$returnString .= $_SESSION["levels"];
echo $returnString;
?>
