<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/item_attempt.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/evaluations_attempts.php");
/*
This class should allow student to feel confident. First levels should go to infinity... or not exist at all. 2nd should we remediate as soon as a student gets one wrong??? well we do ask it on next level... what about 3 levels??? i think we need another table... we need a one to track when you were sent to a learning standard then we still use levelattempts table.:wq:wq:wq

--scratch that except for the confidence and infinity stuff.

new thinking:
------------
when you get one wrong you go to practice. which resets your percent.
if you get one correct after practice you have 100%. with a 1 confidence level.

none correct in a row is a 0 confidence level.

ask in order of confidence level with progression tie breaker.

never been asked is a -1 confidence level

if no zeros than ask a -1 confidence level which is a new type

so basically on first run you will encounter a never before asked quesiton a -1 so ask it.
if correct.
then 
skip it and ask 2nd type cause its -1
lets say you get it wrong.
then practice
then skip 1 
goto 2 again cause its a 0 confidence level.

unless at any point we roll a 20% in which case we ask the question with the lowest confidence level above 0;


you  are done when we put you on next grade.... 


*/
class Normal 


{
function __construct($startNew)
{
	$this->mDatabaseConnection = new DatabaseConnection();
        
	$this->progression_counter = 0;

	if ($startNew == 1)
	{
		//close old evaluation_attempts.......
		$evaluations_attempts = new EvaluationsAttempts();
		$evaluations_attempts->update();

		$_SESSION["evaluations_id"] = 1;
		$evaluations_attempts->insert();
	
		$this->setRawData();
        
		$item_attempt = new ItemAttempt();
        	$item_attempt->insert();
	}
}
//this could just as easily be set to a finer level such as domain, cluster, standard. Then we could start wherever we want.
public function initializeProgressionCounter()
{
        $this->progression_counter = 0;

	//lets get the progression of proper grade...
	$query = "select item_types.progression from item_types JOIN core_standards ON item_types.core_standards_id=core_standards.id JOIN core_clusters ON core_standards.core_clusters_id=core_clusters.id JOIN core_domains_subjects_grades ON core_clusters.core_domains_subjects_grades_id=core_domains_subjects_grades.id JOIN core_subjects_grades ON core_domains_subjects_grades.core_subjects_grades_id=core_subjects_grades.id JOIN core_grades ON core_subjects_grades.core_grades_id=core_grades.id WHERE core_grades.id = ";
	$query .= $_SESSION["core_grades_id"];
	$query .= " ORDER BY item_types.progression";
        $query .= " LIMIT 1;";
		
	$result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('no connection: ' . pg_last_error());
        $num = pg_num_rows($result);
        if ($num > 0)
        {
        	//this id is either going in array or not
                $this->progression_counter = pg_Result($result, 0, 'progression');
	}
}

//i am going to remember the last thing i asked and only ask 1 question at a time.
public function setRawData()
{
	$this->initializeProgressionCounter();
	$firstTime = true;
	$item_types_id_to_ask = '';	

	while ($item_types_id_to_ask == '')
	{
		$equery = "insert into error_log (error_time,error,username) values (CURRENT_TIMESTAMP,'$item_types_id_to_ask','while');";
		$eresult = pg_query($this->mDatabaseConnection->getConn(),$equery);

		$query = '';	
		if ($firstTime)
		{
			$query .= "select id, progression from item_types where progression = "; 
			$firstTime = false;
		}
		else
		{
			$query .= "select id, progression from item_types where progression > "; 
		}
		$query .= $this->progression_counter; 
		$query .= " order by progression asc limit 1;";
 
		$result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('no connection: ' . pg_last_error());
                $numberOfResults = pg_num_rows($result);

		$practice_date = 0;

                if ($numberOfResults > 0)
                {
                        //this id is either going in array or not
                        $item_types_id = pg_Result($result, 0, 'id');
              		$this->progression_counter = pg_Result($result, 0, 'progression');
	
			$query = "select item_attempts.item_types_id, item_attempts.transaction_code from item_attempts JOIN evaluations_attempts";
			$query .= " ON evaluations_attempts.id=item_attempts.evaluations_attempts_id WHERE item_attempts.item_types_id = '"; 
			$query .= $item_types_id; 
			$query .= "' AND evaluations_attempts.user_id = ";
       			$query .= $_SESSION["user_id"];
			$query .= " AND evaluations_attempts.evaluations_id = 2";
			$query .= " order by item_attempts.start_time asc limit 1;";
	
			$result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('no connection: ' . pg_last_error());
               		$num = pg_num_rows($result);
	
			if ($num > 0)	
			{
              			$practice_date = pg_Result($result, 0, 'start_time');
			}

	                $query = "select item_attempts.item_types_id, item_attempts.transaction_code from evaluations_attempts JOIN item_attempts ON evaluations_attempts.id=item_attempts.evaluations_attempts_id where item_attempts.item_types_id = '";
       	               	$query .= $item_types_id;
                       	$query .= "' AND evaluations_attempts.user_id = ";
                       	$query .= $_SESSION["user_id"];
			
			if ($practice_date == 0)
			{
                        	$query .= " order by item_attempts.start_time asc;";
			}
			else
			{
                        	$query .= " AND item_attempts.start_time > '";
				$query .= $practice_date;
                        	$query .= "' order by item_attempts.start_time asc;";
			}
			
			$result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('no connection: ' . pg_last_error());
               		$num = pg_num_rows($result);

			$right = 0;
			$wrong = 0;

			if ($num > 0)
			{
  				for ($i = 0; $i < $num; $i++)
				{
					$transaction_code = pg_Result($result, $i, 'transaction_code');
					$transaction_code = intval($transaction_code);
					if ($transaction_code == 1) 
					{
						$right++;		
					}	
					if ($transaction_code == 2) 
					{
						$wrong++;		
					}
				}
			}
			$mark = intval(0);
			$numerator = intval($right); 	
			$denominator = intval($right) + intval($wrong); 	

			if ($denominator > 0) 
			{
				$mark = $numerator / $denominator;	
				$mark = $mark * 100;
				$mark = intval($mark);
			}

 			if ($mark < 70)	
			{
				$item_types_id_to_ask = $item_types_id;
	
				$equery = "insert into error_log (error_time,error,username) values (CURRENT_TIMESTAMP,'$item_types_id','less');";
				$eresult = pg_query($this->mDatabaseConnection->getConn(),$equery);
			}
			else	
			{
				$equery = "insert into error_log (error_time,error,username) values (CURRENT_TIMESTAMP,'$item_types_id','more');";
				$eresult = pg_query($this->mDatabaseConnection->getConn(),$equery);
			}
		}
	}	
        $itemString = $item_types_id_to_ask;
        $itemString .= ":";
        $itemString .= $mark;
        $_SESSION["raw_data"] = $itemString;
        $_SESSION["item_types_id"] = $item_types_id_to_ask;
	
	$equery = "insert into error_log (error_time,error,username) values (CURRENT_TIMESTAMP,'$itemString','setting raw data');";
	$eresult = pg_query($this->mDatabaseConnection->getConn(),$equery);
}
//end of class
}
?>
