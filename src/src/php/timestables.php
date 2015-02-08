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
                $_SESSION["workit"] = '3.oa.c.7_67'; //7x8
	}
	
	if (!isset($_SESSION["timestables_score"]))
	{
                $_SESSION["timestables_score"] = 0;
	}
	if (!isset($_SESSION["timestables_score_theizzy"]))
	{
                $_SESSION["timestables_score_theizzy"] = 0;
	}

	if (!isset($_SESSION["timestables_score_today"]))
	{
                $_SESSION["timestables_score_today"] = 0;
	}
	if (!isset($_SESSION["timestables_score_today_theizzy"]))
	{
                $_SESSION["timestables_score_today_theizzy"] = 0;
	}
	
	if (!isset($_SESSION["timestables_score_alltime"]))
	{
		$_SESSION["timestables_score_alltime"] = $this->getAllTime('alltime');
	}
	if (!isset($_SESSION["timestables_score_alltime_theizzy"]))
	{	
		$_SESSION["timestables_score_alltime_theizzy"] = $this->getAllTime('alltimeizzy');
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

public function getAllTime($alltime)
{
 	//get evaluations_attempts_id
        $query = "select ";
	$query .= $alltime;	
	$query .= " from users where id = ";
        $query .= $_SESSION["user_id"];
        $query .= ";";

        $result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());

        $num = pg_num_rows($result);

        if ($num > 0)
        {
                $this->mAllTime = pg_Result($result, 0, $alltime);
        }
	return $this->mAllTime;
}
public function updateAllTime($alltime)
{
	$update = '';
	if ($alltime == 'timestables')
	{
        	$update .= "update users set alltime = ";
        	$update .= $_SESSION["timestables_score_alltime"];
	}
	if ($alltime == 'theizzy')
	{
        	$update .= "update users set alltimeizzy = ";
        	$update .= $_SESSION["timestables_score_alltime_theizzy"];
	}
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
		$randomChance = rand(0,100);
		if ($randomChance < 80)  //ask random
		{
			$randomNumber = rand(1,81);
                	$randid = '3.oa.c.7';
                	$randid .= "_";
			$randid .= $randomNumber; 
                	$this->mTypeID = $randid;
		}	
		else //ask workit 
		{
                	$this->mTypeID = $_SESSION["workit"];
		}
        }

	//the izzy		
	if ($this->mTableNumber == 11)
	{ 
		$question = 0;
		$randomNumber = rand(0,100);
    
		//possible workit 
                if ($question == 0 && $randomNumber < 10)
                {
                	$this->mTypeID = $_SESSION["workit"];
		}
	
		//the toughest ones ...which is main purpose of the izzy
                else if ($question == 0 && $randomNumber > 9 && $randomNumber < 80)
		{
                        //7x6
                        if ($question == 0 && $randomNumber > 9 && $randomNumber < 20)
                        {
                                $r = rand(1,2);
                                if ($r == 1)
                                {
                                        $question = 58; //6x7
                                }
                                else if ($r == 2)
                                {
                                        $question = 59; //7x6
                                }
                        }

			//7x8
                        if ($question == 0 && $randomNumber > 19 && $randomNumber < 30)
			{
				$r = rand(1,2);
				if ($r == 1)
				{
					$question = 67; //7x8	
				}
				else if ($r == 2)
				{
					$question = 68; //8x7	
				}
			}	 

                        //7x9
                        if ($question == 0 && $randomNumber > 29 && $randomNumber < 40)
                        {
                                $r = rand(1,2);
                                if ($r == 1)
                                {
                                        $question = 69; //7x9
                                }
                                else if ($r == 2)
                                {
                                        $question = 70; //9x7
                                }
                        }

                        //6x8
                        if ($question == 0 && $randomNumber > 39 && $randomNumber < 50)
                        {
                                $r = rand(1,2);
                                if ($r == 1)
                                {
                                        $question = 60; //6x8
                                }
                                else if ($r == 2)
                                {
                                        $question = 61; //8x6
                                }
                        }

                        //8x9
                        if ($question == 0 && $randomNumber > 49 && $randomNumber < 60)
                        {
                                $r = rand(1,2);
                                if ($r == 1)
                                {
                                        $question = 74; //8x9
                                }
                                else if ($r == 2)
                                {
                                        $question = 75; //9x8
                                }
                        }
                       
			//6x9
                        if ($question == 0 && $randomNumber > 59 && $randomNumber < 70)
                        {
                                $r = rand(1,2);
                                if ($r == 1)
                                {
                                        $question = 62; //6x9
                                }
                                else if ($r == 2)
                                {
                                        $question = 63; //9x6
                                }
                        }
			
			//make typeid
			$randid = '3.oa.c.7';
			$randid .= "_"; 
			$randid .= $question; 
			$this->mTypeID = $randid;
		}

		//big doubles
                else if ($question == 0 && $randomNumber > 69 && $randomNumber < 80)
		{
			//6x6
                        if ($question == 0 && $randomNumber > 69 && $randomNumber < 72)
                        {
                                $question = 57; //7x7
                        }
                        
			//7x7
                        if ($question == 0 && $randomNumber > 71  && $randomNumber < 74)
                        {
                                $question = 66; //7x7
                        }
                        
			//8x8
                        if ($question == 0 && $randomNumber > 73  && $randomNumber < 77)
                        {
                                $question = 73; //8x8
                        }
                       
			//9x9
                        if ($question == 0 && $randomNumber > 76  && $randomNumber < 80)
                        {
                                $question = 78; //9x9
                        }
			
			//make typeid
			$randid = '3.oa.c.7';
			$randid .= "_"; 
			$randid .= $question; 
			$this->mTypeID = $randid;
		}
		//darwin for the rest for now
		else
		{
              		$question = rand(1,81);
			
			//make typeid
			$randid = '3.oa.c.7';
			$randid .= "_"; 
			$randid .= $question; 
			$this->mTypeID = $randid;
		}	
	}
   
	//pink
        $itemString =  $this->mTypeID; //ask this one

        //blue
        $itemString .= ":";
        $itemString .= "Today=";
	$score = '';
	if ($_SESSION["ref_id"] == 'timestables')
	{
        	$itemString .= $_SESSION["timestables_score_today"];
		$score = intval($_SESSION["timestables_score"]);
	}
	if ($_SESSION["ref_id"] == 'The Izzy')
	{
        	$itemString .= $_SESSION["timestables_score_today_theizzy"];
		$score = intval($_SESSION["timestables_score_theizzy"]);
	}

	$alltime = '';
	if ($_SESSION["ref_id"] == 'timestables')
	{
		$alltime = intval($_SESSION["timestables_score_alltime"]);
		if ($score > $alltime)
		{
			$alltime = $score;
			$_SESSION["timestables_score_alltime"] = $alltime;
			$this->updateAllTime('timestables');
		}
	}
	if ($_SESSION["ref_id"] == 'The Izzy')
	{
		$alltime = intval($_SESSION["timestables_score_alltime_theizzy"]);

		if ($score > $alltime)
		{
			$alltime = $score;
			$_SESSION["timestables_score_alltime_theizzy"] = $alltime;
			$this->updateAllTime('theizzy');
		}
	}

        //yellow
        $itemString .= ":";
        $itemString .= "ALL TIME=";
        $itemString .= $alltime;

	//get today score if higher than alltime in db then which you will set in sessions then update db...
	//you should show leaders....

        //green
        $itemString .= ":";
	if ($_SESSION["ref_id"] == 'timestables')
	{
		if (isset($_SESSION["timestables_score"]))
		{
        		$itemString .= $_SESSION["timestables_score"];
		}
	}
	else if ($_SESSION["ref_id"] == 'The Izzy')
	{
		if (isset($_SESSION["timestables_score_theizzy"]))
		{
        		$itemString .= $_SESSION["timestables_score_theizzy"];
		}
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
