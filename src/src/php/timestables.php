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

	//workit	
	if (!isset($_SESSION["workit"]))
	{
                $_SESSION["workit"] = '3.oa.c.7_67'; //7x8
	}

	//score	
	if (!isset($_SESSION["timestables_score"]))
	{
                $_SESSION["timestables_score"] = 0;
	}
	if (!isset($_SESSION["timestables_score_theizzy"]))
	{
                $_SESSION["timestables_score_theizzy"] = 0;
	}
	if (!isset($_SESSION["timestables_score_two"]))
	{
                $_SESSION["timestables_score_two"] = 0;
	}
	if (!isset($_SESSION["timestables_score_three"]))
	{
                $_SESSION["timestables_score_three"] = 0;
	}
	if (!isset($_SESSION["timestables_score_four"]))
	{
                $_SESSION["timestables_score_four"] = 0;
	}
	if (!isset($_SESSION["timestables_score_five"]))
	{
                $_SESSION["timestables_score_five"] = 0;
	}
	if (!isset($_SESSION["timestables_score_six"]))
	{
                $_SESSION["timestables_score_six"] = 0;
	}
	if (!isset($_SESSION["timestables_score_seven"]))
	{
                $_SESSION["timestables_score_seven"] = 0;
	}
	if (!isset($_SESSION["timestables_score_eight"]))
	{
                $_SESSION["timestables_score_eight"] = 0;
	}
	if (!isset($_SESSION["timestables_score_nine"]))
	{
                $_SESSION["timestables_score_nine"] = 0;
	}
	if (!isset($_SESSION["timestables_score_ten"]))
	{
                $_SESSION["timestables_score_ten"] = 0;
	}

	//today
	if (!isset($_SESSION["timestables_score_today"]))
	{
                $_SESSION["timestables_score_today"] = 0;
	}
	if (!isset($_SESSION["timestables_score_today_theizzy"]))
	{
                $_SESSION["timestables_score_today_theizzy"] = 0;
	}
	if (!isset($_SESSION["timestables_score_today_two"]))
	{
                $_SESSION["timestables_score_today_two"] = 0;
	}
	if (!isset($_SESSION["timestables_score_today_three"]))
	{
                $_SESSION["timestables_score_today_three"] = 0;
	}
	if (!isset($_SESSION["timestables_score_today_four"]))
	{
                $_SESSION["timestables_score_today_four"] = 0;
	}
	if (!isset($_SESSION["timestables_score_today_five"]))
	{
                $_SESSION["timestables_score_today_five"] = 0;
	}
	if (!isset($_SESSION["timestables_score_today_six"]))
	{
                $_SESSION["timestables_score_today_six"] = 0;
	}
	if (!isset($_SESSION["timestables_score_today_seven"]))
	{
                $_SESSION["timestables_score_today_seven"] = 0;
	}
	if (!isset($_SESSION["timestables_score_today_eight"]))
	{
                $_SESSION["timestables_score_today_eight"] = 0;
	}
	if (!isset($_SESSION["timestables_score_today_nine"]))
	{
                $_SESSION["timestables_score_today_nine"] = 0;
	}
	if (!isset($_SESSION["timestables_score_today_ten"]))
	{
                $_SESSION["timestables_score_today_ten"] = 0;
	}

	//alltime	
	if (!isset($_SESSION["timestables_score_alltime"]))
	{
		$_SESSION["timestables_score_alltime"] = $this->getAllTime('alltime');
	}
	if (!isset($_SESSION["timestables_score_alltime_theizzy"]))
	{	
		$_SESSION["timestables_score_alltime_theizzy"] = $this->getAllTime('alltimeizzy');
	}
	if (!isset($_SESSION["timestables_score_alltime_two"]))
	{	
		$_SESSION["timestables_score_alltime_two"] = $this->getAllTime('alltimetwo');
	}
	if (!isset($_SESSION["timestables_score_alltime_three"]))
	{	
		$_SESSION["timestables_score_alltime_three"] = $this->getAllTime('alltimethree');
	}
	if (!isset($_SESSION["timestables_score_alltime_four"]))
	{	
		$_SESSION["timestables_score_alltime_four"] = $this->getAllTime('alltimefour');
	}
	if (!isset($_SESSION["timestables_score_alltime_five"]))
	{	
		$_SESSION["timestables_score_alltime_five"] = $this->getAllTime('alltimefive');
	}
	if (!isset($_SESSION["timestables_score_alltime_six"]))
	{	
		$_SESSION["timestables_score_alltime_six"] = $this->getAllTime('alltimesix');
	}
	if (!isset($_SESSION["timestables_score_alltime_seven"]))
	{	
		$_SESSION["timestables_score_alltime_seven"] = $this->getAllTime('alltimeseven');
	}
	if (!isset($_SESSION["timestables_score_alltime_eight"]))
	{	
		$_SESSION["timestables_score_alltime_eight"] = $this->getAllTime('alltimeeight');
	}
	if (!isset($_SESSION["timestables_score_alltime_nine"]))
	{	
		$_SESSION["timestables_score_alltime_nine"] = $this->getAllTime('alltimenine');
	}
	if (!isset($_SESSION["timestables_score_alltime_ten"]))
	{	
		$_SESSION["timestables_score_alltime_ten"] = $this->getAllTime('alltimeten');
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
	if ($alltime == 'two')
	{
        	$update .= "update users set alltimetwo = ";
        	$update .= $_SESSION["timestables_score_alltime_two"];
	}
	if ($alltime == 'three')
	{
        	$update .= "update users set alltimethree = ";
        	$update .= $_SESSION["timestables_score_alltime_three"];
	}
	if ($alltime == 'four')
	{
        	$update .= "update users set alltimefour = ";
        	$update .= $_SESSION["timestables_score_alltime_four"];
	}
	if ($alltime == 'five')
	{
        	$update .= "update users set alltimefive = ";
        	$update .= $_SESSION["timestables_score_alltime_five"];
	}
	if ($alltime == 'six')
	{
        	$update .= "update users set alltimesix = ";
        	$update .= $_SESSION["timestables_score_alltime_six"];
	}
	if ($alltime == 'seven')
	{
        	$update .= "update users set alltimeseven = ";
        	$update .= $_SESSION["timestables_score_alltime_seven"];
	}
	if ($alltime == 'eight')
	{
        	$update .= "update users set alltimeeight = ";
        	$update .= $_SESSION["timestables_score_alltime_eight"];
	}
	if ($alltime == 'nine')
	{
        	$update .= "update users set alltimenine = ";
        	$update .= $_SESSION["timestables_score_alltime_nine"];
	}
	if ($alltime == 'ten')
	{
        	$update .= "update users set alltimeten = ";
        	$update .= $_SESSION["timestables_score_alltime_ten"];
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

		//refid
		$refid = 'timestables';
        	$_SESSION["ref_id"] = $refid;
	}
        else if (intval($this->mTableNumber) == 2)
        {
                //make new array since we are creating a new evaluations attempts
                $table_array = array();
                $table_array[] = 82; 
                $table_array[] = 1;
                $table_array[] = 2;
                $table_array[] = 4;
                $table_array[] = 6;
                $table_array[] = 8;
                $table_array[] = 10;
                $table_array[] = 12;
                $table_array[] = 14;
                $table_array[] = 16;

                //start over with number in front
                $table_array[] = 92;
                $table_array[] = 1;
                $table_array[] = 3;
                $table_array[] = 5;
                $table_array[] = 7;
                $table_array[] = 9;
                $table_array[] = 11;
                $table_array[] = 13;
                $table_array[] = 15;
                $table_array[] = 17;

                $_SESSION["table_array"] = $table_array;
                $_SESSION["table_counter"] = 0;

                //ref id
                $refid = 'timestables_2';
                $_SESSION["ref_id"] = $refid;
        }

	else if (intval($this->mTableNumber) == 3)
	{
		//make new array since we are creating a new evaluations attempts 
		$table_array = array();
		$table_array[] = 83;
		$table_array[] = 3;
		$table_array[] = 18;
		$table_array[] = 19;
		$table_array[] = 21;
		$table_array[] = 23;
		$table_array[] = 25;
		$table_array[] = 27;
		$table_array[] = 29;
		$table_array[] = 31;

		//start over with number in front	
		$table_array[] = 93;
		$table_array[] = 2;
		$table_array[] = 18;
		$table_array[] = 20;
		$table_array[] = 22;
		$table_array[] = 24;
		$table_array[] = 26;
		$table_array[] = 28;
		$table_array[] = 30;
		$table_array[] = 32;

		$_SESSION["table_array"] = $table_array; 
		$_SESSION["table_counter"] = 0; 
	
		//ref id 
		$refid = 'timestables_3';
        	$_SESSION["ref_id"] = $refid;
	}

        else if (intval($this->mTableNumber) == 4)
        {
                //make new array since we are creating a new evaluations attempts
                $table_array = array();
                $table_array[] = 84;
                $table_array[] = 5;
                $table_array[] = 20;
                $table_array[] = 33;
                $table_array[] = 34;
                $table_array[] = 36;
                $table_array[] = 38;
                $table_array[] = 40;
                $table_array[] = 42;
                $table_array[] = 44;

                //start over with number in front
                $table_array[] = 94;
                $table_array[] = 4;
                $table_array[] = 19;
                $table_array[] = 33;
                $table_array[] = 35;
                $table_array[] = 37;
                $table_array[] = 39;
                $table_array[] = 41;
                $table_array[] = 43;
                $table_array[] = 45; 
;

                $_SESSION["table_array"] = $table_array;
                $_SESSION["table_counter"] = 0;

                //ref id
                $refid = 'timestables_4';
                $_SESSION["ref_id"] = $refid;
        }

        else if (intval($this->mTableNumber) == 5)
        {
                //make new array since we are creating a new evaluations attempts
                $table_array = array();
                $table_array[] = 85;
                $table_array[] = 7;
                $table_array[] = 22;
                $table_array[] = 35;
                $table_array[] = 46;
                $table_array[] = 47;
                $table_array[] = 49;
                $table_array[] = 51;
                $table_array[] = 53;
                $table_array[] = 55;

                //start over with number in front
                $table_array[] = 95;
                $table_array[] = 6;
                $table_array[] = 21;
                $table_array[] = 34;
                $table_array[] = 46;
                $table_array[] = 48;
                $table_array[] = 50;
                $table_array[] = 52;
                $table_array[] = 54;
                $table_array[] = 56;
;

                $_SESSION["table_array"] = $table_array;
                $_SESSION["table_counter"] = 0;

                //ref id
                $refid = 'timestables_5';
                $_SESSION["ref_id"] = $refid;
        }
        else if (intval($this->mTableNumber) == 6)
        {
                //make new array since we are creating a new evaluations attempts
                $table_array = array();
                $table_array[] = 86;
                $table_array[] = 9;
                $table_array[] = 24;
                $table_array[] = 37;
                $table_array[] = 48;
                $table_array[] = 57;
                $table_array[] = 58;
                $table_array[] = 60;
                $table_array[] = 62;
                $table_array[] = 64;

                //start over with number in front
                $table_array[] = 96;
                $table_array[] = 8;
                $table_array[] = 23;
                $table_array[] = 36;
                $table_array[] = 47;
                $table_array[] = 57;
                $table_array[] = 59;
                $table_array[] = 61;
                $table_array[] = 63;
                $table_array[] = 64;
;

                $_SESSION["table_array"] = $table_array;
                $_SESSION["table_counter"] = 0;

                //ref id
                $refid = 'timestables_6';
                $_SESSION["ref_id"] = $refid;
        }
        else if (intval($this->mTableNumber) == 7)
        {
                //make new array since we are creating a new evaluations attempts
                $table_array = array();
                $table_array[] = 87;
                $table_array[] = 11;
                $table_array[] = 26;
                $table_array[] = 39;
                $table_array[] = 50;
                $table_array[] = 59;
                $table_array[] = 66;
                $table_array[] = 67;
                $table_array[] = 69;
                $table_array[] = 71;

                //start over with number in front
                $table_array[] = 97;
                $table_array[] = 10;
                $table_array[] = 25;
                $table_array[] = 38;
                $table_array[] = 49;
                $table_array[] = 58;
                $table_array[] = 66;
                $table_array[] = 68;
                $table_array[] = 70;
                $table_array[] = 72;
;

                $_SESSION["table_array"] = $table_array;
                $_SESSION["table_counter"] = 0;

                //ref id
                $refid = 'timestables_7';
                $_SESSION["ref_id"] = $refid;
        }

        else if (intval($this->mTableNumber) == 8)
        {
                //make new array since we are creating a new evaluations attempts
                $table_array = array();
                $table_array[] = 88;
                $table_array[] = 13;
                $table_array[] = 28;
                $table_array[] = 41;
                $table_array[] = 52;
                $table_array[] = 61;
                $table_array[] = 68;
                $table_array[] = 73;
                $table_array[] = 74;
                $table_array[] = 76;

                //start over with number in front
                $table_array[] = 98;
                $table_array[] = 12;
                $table_array[] = 27;
                $table_array[] = 40;
                $table_array[] = 51;
                $table_array[] = 60;
                $table_array[] = 67;
                $table_array[] = 73;
                $table_array[] = 75;
                $table_array[] = 72;
;

                $_SESSION["table_array"] = $table_array;
                $_SESSION["table_counter"] = 0;

                //ref id
                $refid = 'timestables_8';
                $_SESSION["ref_id"] = $refid;
        }
        else if (intval($this->mTableNumber) == 9)
        {
                //make new array since we are creating a new evaluations attempts
                $table_array = array();
                $table_array[] = 89;
                $table_array[] = 15;
                $table_array[] = 30;
                $table_array[] = 43;
                $table_array[] = 54;
                $table_array[] = 63;
                $table_array[] = 70;
                $table_array[] = 75;
                $table_array[] = 78;
                $table_array[] = 79;

                //start over with number in front
                $table_array[] = 99;
                $table_array[] = 14;
                $table_array[] = 29;
                $table_array[] = 42;
                $table_array[] = 53;
                $table_array[] = 62;
                $table_array[] = 69;
                $table_array[] = 74;
                $table_array[] = 78;
                $table_array[] = 80;
;

                $_SESSION["table_array"] = $table_array;
                $_SESSION["table_counter"] = 0;

                //ref id
                $refid = 'timestables_9';
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
        if ($this->mTableNumber > 1 && $this->mTableNumber < 10)
        {
		$table_counter = intval($_SESSION["table_counter"]);	
               	
		$randid = '3.oa.c.7';
               	$randid .= "_";
		if ($table_counter < 20) 
		{
               		$randid .= $_SESSION["table_array"][$table_counter];
               		$this->mTypeID = $randid;
		}
		else
		{
			//check for random or workit
			$randomNumber = rand(0,40);
			if ($randomNumber > 19)
			{
				$this->mTypeID = $_SESSION["workit"];
			}
			else
			{
       	        		$randid .= $_SESSION["table_array"][$randomNumber];
               			$this->mTypeID = $randid;
			}
		}

		$table_counter++;
		$_SESSION["table_counter"] = $table_counter;
        }

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
                else if ($question == 0 && $randomNumber > 9 && $randomNumber < 70)
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

                //the toughest ones ...which is main purpose of the izzy
                else if ($question == 0 && $randomNumber > 79 && $randomNumber < 98)
                {
                        //4x8
                        if ($question == 0 && $randomNumber > 79 && $randomNumber < 83)
                        {
                                $r = rand(1,2);
                                if ($r == 1)
                                {
                                        $question = 40; //4x8
                                }
                                else if ($r == 2)
                                {
                                        $question = 41; //8x4
                                }
                        }

                        //4x6
                        if ($question == 0 && $randomNumber > 82 && $randomNumber < 86)
                        {
                                $r = rand(1,2);
                                if ($r == 1)
                                {
                                        $question = 36; //4x6
                                }
                                else if ($r == 2)
                                {
                                        $question = 37; //6x4
                                }
                        }

                        //4x7
                        if ($question == 0 && $randomNumber > 85 && $randomNumber < 89)
                        {
                                $r = rand(1,2);
                                if ($r == 1)
                                {
                                        $question = 38; //4x7
                                }
                                else if ($r == 2)
                                {
                                        $question = 39; //7x4
                                }
                        }

		        //4x9
                        if ($question == 0 && $randomNumber > 88 && $randomNumber < 92)
                        {
                                $r = rand(1,2);
                                if ($r == 1)
                                {
                                        $question = 42; //4x9
                                }
                                else if ($r == 2)
                                {
                                        $question = 43; //9x4
                                }
                        }
      
                  	//3x8
                        if ($question == 0 && $randomNumber > 91 && $randomNumber < 95)
                        {
                                $r = rand(1,2);
                                if ($r == 1)
                                {
                                        $question = 27; //3x8
                                }
                                else if ($r == 2)
                                {
                                        $question = 28; //8x3
                                }
                        }

                        //3x9
                        if ($question == 0 && $randomNumber > 94 && $randomNumber < 98)
                        {
                                $r = rand(1,2);
                                if ($r == 1)
                                {
                                        $question = 29; //3x9
                                }
                                else if ($r == 2)
                                {
                                        $question = 30; //9x3
                                }
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
	if ($_SESSION["ref_id"] == 'timestables_2')
	{
        	$itemString .= $_SESSION["timestables_score_today_two"];
		$score = intval($_SESSION["timestables_score_two"]);
	}
	if ($_SESSION["ref_id"] == 'timestables_3')
	{
        	$itemString .= $_SESSION["timestables_score_today_three"];
		$score = intval($_SESSION["timestables_score_three"]);
	}
	if ($_SESSION["ref_id"] == 'timestables_4')
	{
        	$itemString .= $_SESSION["timestables_score_today_four"];
		$score = intval($_SESSION["timestables_score_four"]);
	}
	if ($_SESSION["ref_id"] == 'timestables_5')
	{
        	$itemString .= $_SESSION["timestables_score_today_five"];
		$score = intval($_SESSION["timestables_score_five"]);
	}
	if ($_SESSION["ref_id"] == 'timestables_6')
	{
        	$itemString .= $_SESSION["timestables_score_today_six"];
		$score = intval($_SESSION["timestables_score_six"]);
	}
	if ($_SESSION["ref_id"] == 'timestables_7')
	{
        	$itemString .= $_SESSION["timestables_score_today_seven"];
		$score = intval($_SESSION["timestables_score_seven"]);
	}
	if ($_SESSION["ref_id"] == 'timestables_8')
	{
        	$itemString .= $_SESSION["timestables_score_today_eight"];
		$score = intval($_SESSION["timestables_score_eight"]);
	}
	if ($_SESSION["ref_id"] == 'timestables_9')
	{
        	$itemString .= $_SESSION["timestables_score_today_nine"];
		$score = intval($_SESSION["timestables_score_nine"]);
	}
	if ($_SESSION["ref_id"] == 'timestables_10')
	{
        	$itemString .= $_SESSION["timestables_score_today_ten"];
		$score = intval($_SESSION["timestables_score_ten"]);
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
	if ($_SESSION["ref_id"] == 'timestables_2')
	{
		$alltime = intval($_SESSION["timestables_score_alltime_two"]);
		if ($score > $alltime)
		{
			$alltime = $score;
			$_SESSION["timestables_score_alltime_two"] = $alltime;
			$this->updateAllTime('two');
		}
	}
	if ($_SESSION["ref_id"] == 'timestables_3')
	{
		$alltime = intval($_SESSION["timestables_score_alltime_three"]);
		if ($score > $alltime)
		{
			$alltime = $score;
			$_SESSION["timestables_score_alltime_three"] = $alltime;
			$this->updateAllTime('three');
		}
	}
	if ($_SESSION["ref_id"] == 'timestables_4')
	{
		$alltime = intval($_SESSION["timestables_score_alltime_four"]);
		if ($score > $alltime)
		{
			$alltime = $score;
			$_SESSION["timestables_score_alltime_four"] = $alltime;
			$this->updateAllTime('four');
		}
	}
	if ($_SESSION["ref_id"] == 'timestables_5')
	{
		$alltime = intval($_SESSION["timestables_score_alltime_five"]);
		if ($score > $alltime)
		{
			$alltime = $score;
			$_SESSION["timestables_score_alltime_five"] = $alltime;
			$this->updateAllTime('five');
		}
	}
	if ($_SESSION["ref_id"] == 'timestables_6')
	{
		$alltime = intval($_SESSION["timestables_score_alltime_six"]);
		if ($score > $alltime)
		{
			$alltime = $score;
			$_SESSION["timestables_score_alltime_six"] = $alltime;
			$this->updateAllTime('six');
		}
	}
	if ($_SESSION["ref_id"] == 'timestables_7')
	{
		$alltime = intval($_SESSION["timestables_score_alltime_seven"]);
		if ($score > $alltime)
		{
			$alltime = $score;
			$_SESSION["timestables_score_alltime_seven"] = $alltime;
			$this->updateAllTime('seven');
		}
	}
	if ($_SESSION["ref_id"] == 'timestables_8')
	{
		$alltime = intval($_SESSION["timestables_score_alltime_eight"]);
		if ($score > $alltime)
		{
			$alltime = $score;
			$_SESSION["timestables_score_alltime_eight"] = $alltime;
			$this->updateAllTime('eight');
		}
	}
	if ($_SESSION["ref_id"] == 'timestables_9')
	{
		$alltime = intval($_SESSION["timestables_score_alltime_nine"]);
		if ($score > $alltime)
		{
			$alltime = $score;
			$_SESSION["timestables_score_alltime_nine"] = $alltime;
			$this->updateAllTime('nine');
		}
	}
	if ($_SESSION["ref_id"] == 'timestables_10')
	{
		$alltime = intval($_SESSION["timestables_score_alltime_ten"]);
		if ($score > $alltime)
		{
			$alltime = $score;
			$_SESSION["timestables_score_alltime_ten"] = $alltime;
			$this->updateAllTime('ten');
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
	else if ($_SESSION["ref_id"] == 'timestables_2')
	{
		if (isset($_SESSION["timestables_score_two"]))
		{
        		$itemString .= $_SESSION["timestables_score_two"];
		}
	}
	else if ($_SESSION["ref_id"] == 'timestables_3')
	{
		if (isset($_SESSION["timestables_score_three"]))
		{
        		$itemString .= $_SESSION["timestables_score_three"];
		}
	}
	else if ($_SESSION["ref_id"] == 'timestables_4')
	{
		if (isset($_SESSION["timestables_score_four"]))
		{
        		$itemString .= $_SESSION["timestables_score_four"];
		}
	}
	else if ($_SESSION["ref_id"] == 'timestables_5')
	{
		if (isset($_SESSION["timestables_score_five"]))
		{
        		$itemString .= $_SESSION["timestables_score_five"];
		}
	}
	else if ($_SESSION["ref_id"] == 'timestables_6')
	{
		if (isset($_SESSION["timestables_score_six"]))
		{
        		$itemString .= $_SESSION["timestables_score_six"];
		}
	}
	else if ($_SESSION["ref_id"] == 'timestables_7')
	{
		if (isset($_SESSION["timestables_score_seven"]))
		{
        		$itemString .= $_SESSION["timestables_score_seven"];
		}
	}
	else if ($_SESSION["ref_id"] == 'timestables_8')
	{
		if (isset($_SESSION["timestables_score_eight"]))
		{
        		$itemString .= $_SESSION["timestables_score_eight"];
		}
	}
	else if ($_SESSION["ref_id"] == 'timestables_9')
	{
		if (isset($_SESSION["timestables_score_nine"]))
		{
        		$itemString .= $_SESSION["timestables_score_nine"];
		}
	}
	else if ($_SESSION["ref_id"] == 'timestables_10')
	{
		if (isset($_SESSION["timestables_score_ten"]))
		{
        		$itemString .= $_SESSION["timestables_score_ten"];
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
