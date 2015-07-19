<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");

class ItemAttempt 
{
    private $mDatabaseConnection;

function __construct($application,$itemtypeid,$question,$answers)
{
	$this->mApplication = $application;
	$this->mItemTypeID = $itemtypeid;
	$this->mID = 0;
	$this->mIDLast = 0;

        $this->mTransactionCode = 0;
        $this->mQuestion = $question;
        $this->mAnswers = $answers;
        $this->mAnswer = 0;

	$this->insert();
}

public function insert()
{
	$db = new DatabaseConnection();
 	$insert = "insert into item_attempts (start_time,evaluations_attempts_id,transaction_code,item_types_id,question,answers) VALUES (CURRENT_TIMESTAMP,";
        $insert .= $this->mApplication->mEvaluationsAttempts->mID;
        $insert .= ",0,'";
        $insert .= $this->mItemTypeID;
	$insert .= "','";  
	$insert .= $this->mQuestion;  
	$insert .= "','";  
	$insert .= $this->mAnswers;  
        $insert .= "');";

        //get db result
        $insertResult = pg_query($db->getConn(),$insert) or die('Could not connect: ' . pg_last_error());

        //get item_attempt id
        $select = "select item_attempts.id from item_attempts JOIN evaluations_attempts ON item_attempts.evaluations_attempts_id=evaluations_attempts.id where evaluations_attempts.user_id = ";
        $select .= $this->mApplication->mLoginStudent->mUserID;
        $select .= " ORDER BY item_attempts.start_time DESC LIMIT 1;";
 
        //get db result
        $selectResult = pg_query($db->getConn(),$select) or die('Could not connect: ' . pg_last_error());

        //get numer of rows
        $num = pg_num_rows($selectResult);

        if ($num > 0)
        {
                //get the id from user table
                $item_attempt_id = pg_Result($selectResult, 0, 'id');

                //set level_id
                $this->mID = $item_attempt_id;

		//fill php vars
        	$returnString = "161,";
        	$returnString .= $this->mID;
		echo $returnString;		
        }
        else
        {
		error_log('no attempt id');
        }
}

public function update($itemtypesid,$transactioncode,$question,$answers,$answer,$itemattemptid)
{
	$this->mItemTypeID = $itemtypesid;
	$this->mTransactionCode = $transactioncode;
	$this->mQuestion = $question;	
	$this->mAnswers = $answers;
	$this->mAnswer = $answer;
	$this->mID = $itemattemptid;

        $APPLICATION->mDataArray[] = $_GET["itemtypesid"];
        $APPLICATION->mDataArray[] = $_GET["transactioncode"];
        $APPLICATION->mDataArray[] = $_GET["question"];
        $APPLICATION->mDataArray[] = $_GET["answers"];
        $APPLICATION->mDataArray[] = $_GET["answer"];
        $APPLICATION->mDataArray[] = $_GET["itemattemptid"];

	//for timestables
	if ($this->mApplication->mRef_id == "timestables")
	{
		if (!isset($_SESSION["timestables_score"]))
		{
			$_SESSION["timestables_score"] = 0;
		}
		if (!isset($_SESSION["timestables_score_today"]))
		{
			$_SESSION["timestables_score_today"] = 0;
		}
			
		$score = intval($_SESSION["timestables_score"]);
		$today = intval($_SESSION["timestables_score_today"]);

        	if (intval($_SESSION["item_transaction_code"]) == 1)
		{
			$score++;
			$_SESSION["timestables_score"] = $score;	
		}
		else
		{
			$_SESSION["timestables_score"] = 0;	
			$_SESSION["workit"] = $_SESSION["item_types_id"];	
		}

		if ($score > $today)
		{
			$_SESSION["timestables_score_today"] = $_SESSION["timestables_score"];	
		}
	}
       	//for theizzy
        if ($this->mApplication->mRef_id == "The Izzy")
        {
                if (!isset($_SESSION["timestables_score_theizzy"]))
                {
                        $_SESSION["timestables_score_theizzy"] = 0;
                }
                if (!isset($_SESSION["timestables_score_today_theizzy"]))
                {
                        $_SESSION["timestables_score_today_theizzy"] = 0;
                }

                $score = intval($_SESSION["timestables_score_theizzy"]);
                $today = intval($_SESSION["timestables_score_today_theizzy"]);

                if (intval($_SESSION["item_transaction_code"]) == 1)
                {
                        $score++;
                        $_SESSION["timestables_score_theizzy"] = $score;
                }
                else
                {
                        $_SESSION["timestables_score_theizzy"] = 0;
                        $_SESSION["workit"] = $_SESSION["item_types_id"];
                }

                if ($score > $today)
                {
                        $_SESSION["timestables_score_today_theizzy"] = $_SESSION["timestables_score_theizzy"];
                }
        }
       
	//for koaa5
        if ($this->mApplication->mRef_id == "Add Subtract within 5")
        {
                if (!isset($_SESSION["timestables_score_koaa5"]))
                {
                        $_SESSION["timestables_score_koaa5"] = 0;
                }
                if (!isset($_SESSION["timestables_score_today_koaa5"]))
                {
                        $_SESSION["timestables_score_today_koaa5"] = 0;
                }

                $score = intval($_SESSION["timestables_score_koaa5"]);
                $today = intval($_SESSION["timestables_score_today_koaa5"]);

                if (intval($_SESSION["item_transaction_code"]) == 1)
                {
                        $score++;
                        $_SESSION["timestables_score_koaa5"] = $score;
                }
                else
                {
                        $_SESSION["timestables_score_koaa5"] = 0;
                        $_SESSION["workit"] = $_SESSION["item_types_id"];
                }

                if ($score > $today)
                {
                        $_SESSION["timestables_score_today_koaa5"] = $_SESSION["timestables_score_koaa5"];
                }
        }

        //for two
        if ($this->mApplication->mRef_id == "timestables_2")
        {
                if (!isset($_SESSION["timestables_score_two"]))
                {
                        $_SESSION["timestables_score_two"] = 0;
                }
                if (!isset($_SESSION["timestables_score_today_two"]))
                {
                        $_SESSION["timestables_score_today_two"] = 0;
                }

                $score = intval($_SESSION["timestables_score_two"]);
                $today = intval($_SESSION["timestables_score_today_two"]);

                if (intval($_SESSION["item_transaction_code"]) == 1)
                {
                        $score++;
                        $_SESSION["timestables_score_two"] = $score;
                }
                else
                {
                        $_SESSION["timestables_score_two"] = 0;
                        $_SESSION["workit"] = $_SESSION["item_types_id"];
                }

                if ($score > $today)
                {
                        $_SESSION["timestables_score_today_two"] = $_SESSION["timestables_score_two"];
                }
        }
        //for three
        if ($this->mApplication->mRef_id  == "timestables_3")
        {
                if (!isset($_SESSION["timestables_score_three"]))
                {
                        $_SESSION["timestables_score_three"] = 0;
                }
                if (!isset($_SESSION["timestables_score_today_three"]))
                {
                        $_SESSION["timestables_score_today_three"] = 0;
                }

                $score = intval($_SESSION["timestables_score_three"]);
                $today = intval($_SESSION["timestables_score_today_three"]);

                if (intval($_SESSION["item_transaction_code"]) == 1)
                {
                        $score++;
                        $_SESSION["timestables_score_three"] = $score;
                }
                else
                {
                        $_SESSION["timestables_score_three"] = 0;
                        $_SESSION["workit"] = $_SESSION["item_types_id"];
                }

                if ($score > $today)
                {
                        $_SESSION["timestables_score_today_three"] = $_SESSION["timestables_score_three"];
                }
        }
        //for four
        if ($this->mApplication->mRef_id == "timestables_4")
        {
                if (!isset($_SESSION["timestables_score_four"]))
                {
                        $_SESSION["timestables_score_four"] = 0;
                }
                if (!isset($_SESSION["timestables_score_today_four"]))
                {
                        $_SESSION["timestables_score_today_four"] = 0;
                }

                $score = intval($_SESSION["timestables_score_four"]);
                $today = intval($_SESSION["timestables_score_today_four"]);

                if (intval($_SESSION["item_transaction_code"]) == 1)
                {
                        $score++;
                        $_SESSION["timestables_score_four"] = $score;
                }
                else
                {
                        $_SESSION["timestables_score_four"] = 0;
                        $_SESSION["workit"] = $_SESSION["item_types_id"];
                }

                if ($score > $today)
                {
                        $_SESSION["timestables_score_today_four"] = $_SESSION["timestables_score_four"];
                }
        }
        //for five
        if ($this->mApplication->mRef_id == "timestables_5")
        {
                if (!isset($_SESSION["timestables_score_five"]))
                {
                        $_SESSION["timestables_score_five"] = 0;
                }
                if (!isset($_SESSION["timestables_score_today_five"]))
                {
                        $_SESSION["timestables_score_today_five"] = 0;
                }

                $score = intval($_SESSION["timestables_score_five"]);
                $today = intval($_SESSION["timestables_score_today_five"]);

                if (intval($_SESSION["item_transaction_code"]) == 1)
                {
                        $score++;
                        $_SESSION["timestables_score_five"] = $score;
                }
                else
                {
                        $_SESSION["timestables_score_five"] = 0;
                        $_SESSION["workit"] = $_SESSION["item_types_id"];
                }

                if ($score > $today)
                {
                        $_SESSION["timestables_score_today_five"] = $_SESSION["timestables_score_five"];
                }
        }
        //for six
        if ($this->mApplication->mRef_id == "timestables_6")
        {
                if (!isset($_SESSION["timestables_score_six"]))
                {
                        $_SESSION["timestables_score_six"] = 0;
                }
                if (!isset($_SESSION["timestables_score_today_six"]))
                {
                        $_SESSION["timestables_score_today_six"] = 0;
                }

                $score = intval($_SESSION["timestables_score_six"]);
                $today = intval($_SESSION["timestables_score_today_six"]);

                if (intval($_SESSION["item_transaction_code"]) == 1)
                {
                        $score++;
                        $_SESSION["timestables_score_six"] = $score;
                }
                else
                {
                        $_SESSION["timestables_score_six"] = 0;
                        $_SESSION["workit"] = $_SESSION["item_types_id"];
                }

                if ($score > $today)
                {
                        $_SESSION["timestables_score_today_six"] = $_SESSION["timestables_score_six"];
                }
        }
        //for seven
        if ($this->mApplication->mRef_id == "timestables_7")
        {
                if (!isset($_SESSION["timestables_score_seven"]))
                {
                        $_SESSION["timestables_score_seven"] = 0;
                }
                if (!isset($_SESSION["timestables_score_today_seven"]))
                {
                        $_SESSION["timestables_score_today_seven"] = 0;
                }

                $score = intval($_SESSION["timestables_score_seven"]);
                $today = intval($_SESSION["timestables_score_today_seven"]);

                if (intval($_SESSION["item_transaction_code"]) == 1)
                {
                        $score++;
                        $_SESSION["timestables_score_seven"] = $score;
                }
                else
                {
                        $_SESSION["timestables_score_seven"] = 0;
                        $_SESSION["workit"] = $_SESSION["item_types_id"];
                }

                if ($score > $today)
                {
                        $_SESSION["timestables_score_today_seven"] = $_SESSION["timestables_score_seven"];
                }
        }
        //for eight
        if ($this->mApplication->mRef_id == "timestables_8")
        {
                if (!isset($_SESSION["timestables_score_eight"]))
                {
                        $_SESSION["timestables_score_eight"] = 0;
                }
                if (!isset($_SESSION["timestables_score_today_eight"]))
                {
                        $_SESSION["timestables_score_today_eight"] = 0;
                }

                $score = intval($_SESSION["timestables_score_eight"]);
                $today = intval($_SESSION["timestables_score_today_eight"]);

                if (intval($_SESSION["item_transaction_code"]) == 1)
                {
                        $score++;
                        $_SESSION["timestables_score_eight"] = $score;
                }
                else
                {
                        $_SESSION["timestables_score_eight"] = 0;
                        $_SESSION["workit"] = $_SESSION["item_types_id"];
                }

                if ($score > $today)
                {
                        $_SESSION["timestables_score_today_eight"] = $_SESSION["timestables_score_eight"];
                }
        }
        //for nine
        if ($this->mApplication->mRef_id == "timestables_9")
        {
                if (!isset($_SESSION["timestables_score_nine"]))
                {
                        $_SESSION["timestables_score_nine"] = 0;
                }
                if (!isset($_SESSION["timestables_score_today_nine"]))
                {
                        $_SESSION["timestables_score_today_nine"] = 0;
                }

                $score = intval($_SESSION["timestables_score_nine"]);
                $today = intval($_SESSION["timestables_score_today_nine"]);

                if (intval($_SESSION["item_transaction_code"]) == 1)
                {
                        $score++;
                        $_SESSION["timestables_score_nine"] = $score;
                }
                else
                {
                        $_SESSION["timestables_score_nine"] = 0;
                        $_SESSION["workit"] = $_SESSION["item_types_id"];
                }

                if ($score > $today)
                {
                        $_SESSION["timestables_score_today_nine"] = $_SESSION["timestables_score_nine"];
                }
        }
        //for ten
        if ($this->mApplication->mRef_id == "timestables_10")
        {
                if (!isset($_SESSION["timestables_score_ten"]))
                {
                        $_SESSION["timestables_score_ten"] = 0;
                }
                if (!isset($_SESSION["timestables_score_today_ten"]))
                {
                        $_SESSION["timestables_score_today_ten"] = 0;
                }

                $score = intval($_SESSION["timestables_score_ten"]);
                $today = intval($_SESSION["timestables_score_today_ten"]);

                if (intval($_SESSION["item_transaction_code"]) == 1)
                {
                        $score++;
                        $_SESSION["timestables_score_ten"] = $score;
                }
                else
                {
                        $_SESSION["timestables_score_ten"] = 0;
                        $_SESSION["workit"] = $_SESSION["item_types_id"];
                }

                if ($score > $today)
                {
                        $_SESSION["timestables_score_today_ten"] = $_SESSION["timestables_score_ten"];
                }
        }
                
	if ($this->mIDLast == $this->mID)
	{
		//skip
	}
	else 
	{
		$this->actualUpdate();
	}

	//lets update state machine
	$this->mApplication->update();
}

public function actualUpdate()
{		
	$db = new DatabaseConnection();
	$query = "select item_attempts.id from item_attempts JOIN evaluations_attempts ON evaluations_attempts.id=item_attempts.evaluations_attempts_id where item_attempts.end_time is null AND user_id = ";
        $query .= $this->mApplication->mLoginStudent->mUserID;
	$query .= " AND item_attempts.item_types_id = '"; //this should now skip over new one that is created....
        $query .= $this->mItemTypeID;
        $query .= "' order by item_attempts.start_time desc limit 1;";

        $result = pg_query($db->getConn(),$query) or die('Could not connect: ' . pg_last_error());

        $num = pg_num_rows($result);

        if ($num > 0)
        {
                //get the id from user table
                $item_attempt_id = pg_Result($result, 0, 'id');

                //set level_id
                $this->mID = $item_attempt_id;

		$questionTxt = $this->mQuestion;
		$questionTxt = htmlentities($questionTxt, ENT_QUOTES);
		
		$answersTxt = $this->mAnswers;
		$answersTxt = htmlentities($answersTxt, ENT_QUOTES);
		
		$answerTxt = $this->mAnswer;
		$answerTxt = htmlentities($answerTxt, ENT_QUOTES);

		$insert = "update item_attempts SET end_time = CURRENT_TIMESTAMP, transaction_code = ";
        	$insert .= $this->mTransactionCode;
		$insert .= ", question = '";
        	$insert .= $questionTxt;
		$insert .= "', answers = '"; 
        	$insert .= $answersTxt;
		$insert .= "', user_answer = '"; 
        	$insert .= $answerTxt;
		$insert .= "' WHERE id = ";		
        	$insert .= $this->mID;
        	$insert .= ";";

        	//get db result
        	$insertResult = pg_query($db->getConn(),$insert) or die('Could not connect: ' . pg_last_error());
                
		$this->mIDLast = $this->mID; 
	}
}

}

?>
