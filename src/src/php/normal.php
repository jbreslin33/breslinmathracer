<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");

class Normal 
{
    private $mDatabaseConnection;

function __construct()
{
	$this->mDatabaseConnection = new DatabaseConnection();

	$this->process();
}

public function process()
{
        $_SESSION["ref_id"] = 'normal';

        //BEGIN NEW CODE
        //right here you need to check the level of the ref_id you are about to send them to.
        $selectLastLevelAttempt = "select level, transaction_code from levelattempts where user_id = ";
        $selectLastLevelAttempt .= $_SESSION["user_id"];
        $selectLastLevelAttempt .= " and learning_standards_id = '";
        $selectLastLevelAttempt .= $_SESSION["ref_id"];
        $selectLastLevelAttempt .= "' order by start_time desc limit 1;";

       	$selectLastLevelAttemptResult = pg_query($this->mDatabaseConnection->getConn(),$selectLastLevelAttempt) or die('Could not connect: ' . pg_last_error());
        $numLastLevelAttemptRows = pg_num_rows($selectLastLevelAttemptResult);

        if ($numLastLevelAttemptRows > 0)
        {
        	$levelVar               = pg_Result($selectLastLevelAttemptResult, 0, 'level');
        	$transaction_codeVar = pg_Result($selectLastLevelAttemptResult, 0, 'transaction_code');
                $_SESSION["level"] = $levelVar;
                
		//passed
                if ($transaction_codeVar == 1)
                {
                	$levelVar = (int) preg_replace('/[^0-9]/', '', $levelVar);
               	        $levelVar++;
                	$_SESSION["level"] = $level;
                }
                //failed
                if ($transaction_codeVar == 2)
                {
                	if ($levelVar > 1)
                        {
                                $levelVar = (int) preg_replace('/[^0-9]/', '', $levelVar);
                       	        $levelVar--;
                		$_SESSION["level"] = $level;
                        }
                }
        }
        else
        {
        	$_SESSION["level"] = 1;
        }
        //END NEW CODE
   
        //do the insert...
        $insert = "insert into levelattempts (start_time, user_id,level,learning_standards_id,transaction_code) VALUES (CURRENT_TIMESTAMP,";
        $insert .= $_SESSION["user_id"];
        $insert .= ",";
        $insert .= $_SESSION["level"];
        $insert .= ",'normal',3);";

        $insertResult = pg_query($this->mDatabaseConnection->getConn(),$insert) or die('Could not connect: ' . pg_last_error());

        //update session vars with some hard coding
        $_SESSION["levels"] = 3; //normal is always 10 levels....

        $this->setRawData();
}
//you are not using user id in selects that is why it skipped eval....
public function setRawData()
{
 	//right here you need to query db to get rawdata for questions.
        $progression_counter = 0;

        $itemArray = array();

	while ( count($itemArray) < 11)
	{
		$query = "select id, progression from item_types where progression > "; 
		$query .= $progression_counter; 
		$query .= " order by progression asc limit 1;";
 
		$result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('no connection: ' . pg_last_error());
                $num = pg_num_rows($result);

                if ($num > 0)
                {
                        //this id is either going in array or not
                        $item_types_id = pg_Result($result, 0, 'id');
                        $progression_counter = pg_Result($result, 0, 'progression');
		
			$query = "select item_attempts.item_types_id, item_attempts.transaction_code from levelattempts JOIN item_attempts ON levelattempts.id=item_attempts.levelattempts_id where item_attempts.item_types_id = "; 
			$query .= $item_types_id; 
			$query .= " AND levelattempts.user_id = ";
        		$query .= $_SESSION["user_id"];
			$query .= "order by item_attempts.start_time asc limit 10;";
		
			$result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('no connection: ' . pg_last_error());
                	$num = pg_num_rows($result);

    			//if we have 10 lets check if we mastered all ten
                        if ($num == 10)
                        {
                                $masteredAllTen = true;

                                for ($i = 0; $i < $num; $i++)
                                {
                                        $transaction_code = pg_Result($result, 0, 'transaction_code');
                                        if ($transaction_code != 1)
                                        {
                                                $masteredAllTen = false;
                                        }
                                }
                                if (!$masteredAllTen)
                                {
                                        array_push($itemArray,"$item_types_id");
                                }
                        }
                        //less than 10 so we could not have mastered 10 so just add it to array.
                        else
                        {
                                array_push($itemArray,"$item_types_id");
                        }
		}
	}	
        $itemString = "";

        if (count($itemArray) > 0)
        {
                $itemString .= $itemArray[0];
                if (count($itemArray) > 1)
                {
                        $itemString .= ":";
                }
        }

        $totalCount = count($itemArray);

        for ($i = 1; $i < $totalCount; $i++)
        {
                $itemString .= $itemArray[$i];
                if ($i < $totalCount - 1)
                {
                        $itemString .= ":";
                }
        }

        $_SESSION["raw_data"] = $itemString;
}
//end of class
}
?>
