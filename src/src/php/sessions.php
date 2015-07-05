<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/standard.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/normal.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/practice.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/timestables.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/assessment.php");

//this class is for when you first login or signup it is not used other wise 
class Sessions
{
    private $mDatabaseConnection;

function __construct()
{
  	$this->mDatabaseConnection = new DatabaseConnection();
	$this->process();
}
public function isWeekend()
{
	date_default_timezone_set('UTC');
	$timezone = new DateTimeZone('America/New_York');
	$w = date( "w", time());

	if ( $w == 0 || $w == 6)
	{
		return true;
	}
	else
	{
		return false;
	}	
}

public function process()
{
	if (isset($_SESSION["subject_id"]) == false)
	{
		$_SESSION["subject_id"] = 1;
	}
	//normalTime
	$normalStartTime = "8:30:00";
	$normalEndTime   = "14:50:00";
	if (time() >= strtotime($normalStartTime) && time() <= strtotime($normalEndTime))
 	{
		if ($ref_id == 'normal')
		{
			$normal = new Normal(1);
		}

		// this is just for dev user and has no effect on anyone else
		if ($ref_id == 'practice')
		{
			if ($_SESSION["first_name"] == 'dev' && $_SESSION["last_name"] == 'user')
			{
				$practice = new Practice('',0,0);
			}
			else
			{
				$normal = new Normal(1);
			}
		}
	}
	else //after school
	{
		//$assessment = new Assessment();
		$normal = new Normal(1);
               	//$_SESSION["ref_id"]  = 'assessment';
	}
}
//end class
}
?>
