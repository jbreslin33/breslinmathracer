<?php
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");

//start new session
session_start();

$conn = dbConnect();

if ($_SESSION["level"] == NULL)
{
	if ($_SESSION["subject_id"] == 1)
	{
		$insert = "insert into levelattempts (start_time,user_id,level,learning_standards_id) VALUES (CURRENT_TIMESTAMP,";
		$insert .= $_SESSION["user_id"]; 	
		$insert .= ",1,'k.cc.a.1');"; 

        	//get db result
        	$insertResult = pg_query($conn,$insert) or die('Could not connect: ' . pg_last_error());
        	dbErrorCheck($conn,$insertResult);

		$_SESSION["ref_id"] = 'k.cc.a.1';
                $_SESSION["standard"] = 'k.cc.a.1';
		$_SESSION["level"] = 1;
		$_SESSION["levels"] = 4;
		$_SESSION["progression"] = 1.000;
	}
        if ($_SESSION["subject_id"] == 2)
        {
                $insert = "insert into levelattempts (start_time,user_id,level,learning_standards_id) VALUES (CURRENT_TIMESTAMP,";
                $insert .= $_SESSION["user_id"];
                $insert .= ",1,'rl.k.1');";

                //get db result
                $insertResult = pg_query($conn,$insert) or die('Could not connect: ' . pg_last_error());
                dbErrorCheck($conn,$insertResult);

                $_SESSION["ref_id"] = 'rl.k.1';
                $_SESSION["standard"] = 'rl.k.1';
                $_SESSION["level"] = 1;
                $_SESSION["levels"] = 10;
                $_SESSION["progression"] = 1.000;
        }   
	
}

//fill php vars
$returnString = "101,";
$returnString .= $_SESSION["ref_id"];
$returnString .= ",";
$returnString .= $_SESSION["level"];
$returnString .= ",";
$returnString .= $_SESSION["standard"];
$returnString .= ",";
$returnString .= $_SESSION["progression"];
$returnString .= ",";
$returnString .= $_SESSION["levels"];
$returnString .= ",";
$returnString .= $_SESSION["item_type_id_raw_data"];
echo $returnString;
?>

