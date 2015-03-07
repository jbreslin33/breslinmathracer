<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");

class ItemAttempt 
{
    private $mDatabaseConnection;

function __construct()
{
	$this->mDatabaseConnection = new DatabaseConnection();
}

public function insert()
{
        $it = $_SESSION["item_types_id"];
 	$insert = "insert into item_attempts (start_time,evaluations_attempts_id,transaction_code,item_types_id) VALUES (CURRENT_TIMESTAMP,";
        $insert .= $_SESSION["evaluations_attempts_id"];
        $insert .= ",0,'";
        $insert .= $_SESSION["item_types_id"];
        $insert .= "');";

        //get db result
        $insertResult = pg_query($this->mDatabaseConnection->getConn(),$insert) or die('Could not connect: ' . pg_last_error());

        //get item_attempt id
        $select = "select item_attempts.id from item_attempts JOIN evaluations_attempts ON item_attempts.evaluations_attempts_id=evaluations_attempts.id where evaluations_attempts.user_id = ";
        $select .= $_SESSION["user_id"];
        $select .= " ORDER BY item_attempts.start_time DESC;";
 
        //get db result
        $selectResult = pg_query($this->mDatabaseConnection->getConn(),$select) or die('Could not connect: ' . pg_last_error());

        //get numer of rows
        $num = pg_num_rows($selectResult);

        if ($num > 0)
        {
                //get the id from user table
                $item_attempt_id = pg_Result($selectResult, 0, 'id');

                //set level_id
                $_SESSION["item_attempt_id"] = $item_attempt_id;
        }
        else
        {
                echo "error no attempt_id";
        }
}

public function update()
{
	//for timestables
	if ($_SESSION["ref_id"] == "timestables")
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
        if ($_SESSION["ref_id"] == "The Izzy")
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
        if ($_SESSION["ref_id"] == "Add Subtract within 5")
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
        if ($_SESSION["ref_id"] == "timestables_2")
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
        if ($_SESSION["ref_id"] == "timestables_3")
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
        if ($_SESSION["ref_id"] == "timestables_4")
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
        if ($_SESSION["ref_id"] == "timestables_5")
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
        if ($_SESSION["ref_id"] == "timestables_6")
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
        if ($_SESSION["ref_id"] == "timestables_7")
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
        if ($_SESSION["ref_id"] == "timestables_8")
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
        if ($_SESSION["ref_id"] == "timestables_9")
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
        if ($_SESSION["ref_id"] == "timestables_10")
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



	$query = "select item_attempts.id from item_attempts JOIN evaluations_attempts ON evaluations_attempts.id=item_attempts.evaluations_attempts_id where item_attempts.end_time is null AND user_id = ";
        $query .= $_SESSION["user_id"];
	$query .= " AND item_attempts.item_types_id = '"; //this should now skip over new one that is created....
        $query .= $_SESSION["item_types_id"];
        $query .= "' order by item_attempts.start_time desc limit 1;";

        $result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());

        $num = pg_num_rows($result);

        if ($num > 0)
        {
                //get the id from user table
                $item_attempt_id = pg_Result($result, 0, 'id');

                //set level_id
                $_SESSION["item_attempt_id"] = $item_attempt_id;

		$questionTxt = $_SESSION["item_question"];
		$questionTxt = htmlentities($questionTxt, ENT_QUOTES);
		
		$answersTxt = $_SESSION["item_answers"];
		$answersTxt = htmlentities($answersTxt, ENT_QUOTES);
		
		$answerTxt = $_SESSION["item_answer"];
		$answerTxt = htmlentities($answerTxt, ENT_QUOTES);

		


		$insert = "update item_attempts SET end_time = CURRENT_TIMESTAMP, transaction_code = ";
        	$insert .= $_SESSION["item_transaction_code"];
		$insert .= ", question = '";
        	$insert .= $questionTxt;
		$insert .= "', answers = '"; 
        	$insert .= $answersTxt;
		$insert .= "', user_answer = '"; 
        	$insert .= $answerTxt;
		$insert .= "' WHERE id = ";		
        	$insert .= $_SESSION["item_attempt_id"];
        	$insert .= ";";

        	//get db result
        	$insertResult = pg_query($this->mDatabaseConnection->getConn(),$insert) or die('Could not connect: ' . pg_last_error());
	}
}

}

?>
