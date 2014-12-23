<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/normal.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/sessions.php");

class TimesTables 
{
    private $mDatabaseConnection;

function __construct($tableNumber, $startNew, $leave)
{
	$this->mDatabaseConnection = new DatabaseConnection();
	$this->mTableNumber = $tableNumber;
	
	if (!isset($_SESSION["workit"]))
	{
                $_SESSION["workit"] = '3.oa.c.7_1';
	}
	
	if (!isset($_SESSION["timestables_score"]))
	{
                $_SESSION["timestables_score"] = 0;
	}

	if (!isset($_SESSION["timestables_score_today"]))
	{
                $_SESSION["timestables_score_today"] = 0;
	}
	
	if (!isset($_SESSION["timestables_score_alltime"]))
	{
		$this->getAllTime();
	}
	
	//get db id 1=normal,2=practice,timestable2s=3,3s=4 etc so just add 1 
	$this->mEvaluationsID = intval($this->mTableNumber);
	$this->mEvaluationsID = intval($this->mEvaluationsID + 1);
	$this->mTypeID = 0;

	//need to check typeid if null get one
	if ($leave)
	{
		$this->leave();
	}
	else
	{
		if ($startNew)
		{
                	$this->insertNewAttempt();

		}
		else
		{
                	$this->continueAttempt();
		}
	}
}

public function getAllTime()
{
 	//get evaluations_attempts_id
        $query = "select alltime from users where id = ";
        $query .= $_SESSION["user_id"];
        $query .= ";";

        $result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());

        $num = pg_num_rows($result);

        if ($num > 0)
        {
                //get the attempt_id
                $this->mAllTime = pg_Result($result, 0, 'alltime');
		$_SESSION["timestables_score_alltime"] = $this->mAllTime;
        }
}
public function updateAllTime()
{
        $update = "update users set alltime = ";
        $update .= $_SESSION["timestables_score_alltime"];
	$update .= " where id = ";
        $update .= $_SESSION["user_id"];
        $update .=  ";";

        $updateResult = pg_query($this->mDatabaseConnection->getConn(),$update) or die('Could not connect: ' . pg_last_error());
}

public function insertNewAttempt()
{
      	//insert learning_standard_attempt
        $insert = "insert into evaluations_attempts (start_time,user_id,evaluations_id) VALUES (CURRENT_TIMESTAMP,";
        $insert .= $_SESSION["user_id"];
        $insert .= ",";
        $insert .= $this->mEvaluationsID; 
        $insert .= ");";

        $insertResult = pg_query($this->mDatabaseConnection->getConn(),$insert) or die('Could not connect: ' . pg_last_error());

        //get evaluations_attempts_id
        $query = "select id from evaluations_attempts where user_id = ";
        $query .= $_SESSION["user_id"];
        $query .= " order by start_time desc limit 1;";

        $result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());

        $num = pg_num_rows($result);

        if ($num > 0)
        {
                //get the attempt_id
                $evaluations_attempts_id = pg_Result($result, 0, 'id');

                //set level_id
                $_SESSION["evaluations_attempts_id"] = $evaluations_attempts_id;
        }

        //set sessions for signup

	if (intval($this->mTableNumber) == 10)
	{
		$refid = 'timestables';	
        	$_SESSION["ref_id"] = $refid;
	}
	else
	{
		$refid = 'timestables_';	
		$refid .= $this->mTableNumber;
        	$_SESSION["ref_id"] = $refid;
	}
	if (intval($this->mTableNumber) == 11)
	{
        	$_SESSION["ref_id"] = 'The Izzy';
	}

        $_SESSION["subject_id"] = 1;

        $this->setRawData();
 
	$item_attempt = new ItemAttempt();
        $item_attempt->insert();
}

public function continueAttempt()
{
	if (intval($this->mTableNumber) == 11)
	{
        	$_SESSION["ref_id"] = 'The Izzy';
	}
        else if ($this->mTableNumber == 10)
        {
                $refid = 'timestables'; 
        	$_SESSION["ref_id"] = $refid;
        }
        else
        {
                $refid = 'timestables_';
                $refid .= $this->mTableNumber;
        	$_SESSION["ref_id"] = $refid;
        }

        $this->setRawData();
	
	$item_attempt = new ItemAttempt();
        $item_attempt->insert();
}

//you are not using user id in selects that is why it skipped eval....
public function setRawData()
{
	//lets randomize ....
	if ($this->mTableNumber == 2)
	{ 
		$randomNumber = rand(1,17);
		$randid = '3.oa.c.7';
		$randid .= "_"; 
		$randid .= $randomNumber; 
		$this->mTypeID = $randid;
	}
        if ($this->mTableNumber == 3)
        {
                $randomNumber = rand(18,32);
                $randid = '3.oa.c.7';
                $randid .= "_";
                $randid .= $randomNumber;
                $this->mTypeID = $randid;
        }
	if ($this->mTableNumber == 4)
	{ 
		$randomNumber = rand(33,45);
		$randid = '3.oa.c.7';
		$randid .= "_"; 
		$randid .= $randomNumber; 
		$this->mTypeID = $randid;
	}
	if ($this->mTableNumber == 5)
	{ 
		$randomNumber = rand(46,56);
		$randid = '3.oa.c.7';
		$randid .= "_"; 
		$randid .= $randomNumber; 
		$this->mTypeID = $randid;
	}
	if ($this->mTableNumber == 6)
	{ 
		$randomNumber = rand(57,65);
		$randid = '3.oa.c.7';
		$randid .= "_"; 
		$randid .= $randomNumber; 
		$this->mTypeID = $randid;
	}
	if ($this->mTableNumber == 7)
	{ 
		$randomNumber = rand(66,72);
		$randid = '3.oa.c.7';
		$randid .= "_"; 
		$randid .= $randomNumber; 
		$this->mTypeID = $randid;
	}
	if ($this->mTableNumber == 8)
	{ 
		$randomNumber = rand(73,77);
		$randid = '3.oa.c.7';
		$randid .= "_"; 
		$randid .= $randomNumber; 
		$this->mTypeID = $randid;
	}
	if ($this->mTableNumber == 9)
	{ 
		$randomNumber = rand(78,81);
		$randid = '3.oa.c.7';
		$randid .= "_"; 
		$randid .= $randomNumber; 
		$this->mTypeID = $randid;
	}
	/* what i want is to simulate what i did with israel.....ask 1 then 2 then 3 but rememember the 3 i asked...
		so i will still make an optimal order starting with hardest ones...
		but they will be added during session with a marker. after one is wrong we will reshuffle available ones.... 	
		this way student cant memorize order...
		how do you get to new one you will have to dynamically expand when they get there...
	*/

	/*	
		how bout ask them questions see how high they get..then whatever they get wrong will be the workit_type	
	*/
	
        if ($this->mTableNumber == 10)
        {
		$randomNumber = 0;
		$randomChance = rand(1,2);
		if ($randomChance == 1) //ask random
		{
			$randomNumber = rand(1,81);
                	$randid = '3.oa.c.7';
                	$randid .= "_";
			$randid .= $randomNumber; 
                	$this->mTypeID = $randid;
		}	
		if ($randomChance == 2) //ask workit 
		{
                	$this->mTypeID = $_SESSION["workit"];
		}
        }
	
	if ($this->mTableNumber == 11)
	{ 
		$randomNumber = rand(70,79);
		$randid = '3.oa.c.7';
		$randid .= "_"; 
		$randid .= $randomNumber; 
		$this->mTypeID = $randid;
	}
   
	//pink
        $itemString =  $this->mTypeID; //ask this one

        //blue
        $itemString .= ":";
        $itemString .= "Today=";
        $itemString .= $_SESSION["timestables_score_today"];

	$score = intval($_SESSION["timestables_score"]);
	$alltime = intval($_SESSION["timestables_score_alltime"]);
	if ($score > $alltime)
	{
		$alltime = $score;
		$_SESSION["timestables_score_alltime"] = $alltime;
		$this->updateAllTime();
	}

        //yellow
        $itemString .= ":";
        $itemString .= "ALL TIME=";
        $itemString .= $alltime;

	//get today score if higher than alltime in db then which you will set in sessions then update db...
	//you should show leaders....

        //green
        $itemString .= ":";
	if (isset($_SESSION["timestables_score"]))
	{
        	$itemString .= $_SESSION["timestables_score"];
	}
	else
	{
        	$itemString .= "0";
	}
	
        $_SESSION["raw_data"] = $itemString;

	$_SESSION["item_types_id"] = $this->mTypeID;
       	$_SESSION["raw_data"] = $itemString; 
}

public function setSessions()
{
	$_SESSION["timestables_array"] = $this->timesTablesArray;
	$_SESSION["timestables_asked_array"] = $this->timesTablesAskedArray;
}

public function leave()
{
	// lets close out this practice
        $update = "update evaluations_attempts set end_time = CURRENT_TIMESTAMP WHERE id = ";
        $update .= $_SESSION["evaluations_attempts_id"];
        $update .=  ";";

        $updateResult = pg_query($this->mDatabaseConnection->getConn(),$update) or die('Could not connect: ' . pg_last_error());

  	//get evaluations_attempts id of the last normal that has not been complete  ....
        $query = "select evaluations_attempts.id, evaluations.description from evaluations_attempts JOIN evaluations ON evaluations_attempts.evaluations_id=evaluations.id where user_id = ";
        $query .= $_SESSION["user_id"];
        $query .= " AND evaluations_id == 1 order by start_time desc limit 1;";

        $result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());

        $num = pg_num_rows($result);

        if ($num > 0)
        {
                //get the attempt_id
                $evaluations_attempts_id = pg_Result($result, 0, 'id');

                //set level_id
                $_SESSION["evaluations_attempts_id"] = $evaluations_attempts_id;

                $ref_id                                       = pg_Result($result, 0, 'description');
                $_SESSION["ref_id"]  = $ref_id;

                if ($ref_id == 'normal')
                {
                        $normal = new Normal(0);
                }
                if ($ref_id == 'practice')
                {
                        $normal = new Normal(0);
                }
        }
}
//end of class
}
?>
