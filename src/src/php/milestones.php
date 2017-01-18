<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");

class Milestones 
{

function __construct()
{
        $this->logs = false;
        if ($this->logs)
        {
                error_log('Milestones::Milestones');
        }
}

public function setMilestones()
{
	if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
	{
		include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");
		$db = dbConnect();


       		$query_evaluations = "select description from evaluations where progression > 0.9 AND description != '4_oa_b_4' order by progression;";
        	$result_evaluations = pg_query($db,$query_evaluations);
        	$numrows_evaluations = pg_numrows($result_evaluations);


        	$query = "select evaluations_attempts.start_time, evaluations.description,      COUNT(CASE WHEN item_attempts.transaction_code = 2 then 1 ELSE NULL END) as incorrect,
    		COUNT(CASE WHEN item_attempts.transaction_code = 1 then 1 ELSE NULL END) as correct, evaluations.score_needed           from item_attempts join evaluations_attempts on evaluations_attempts.id=item_attempts.evaluations_attempts_id join evaluations on evaluations.id=evaluations_attempts.evaluations_id join users on evaluations_attempts.user_id=users.id where evaluations_id != 1 AND evaluations_attempts.start_time > '2016-09-10 09:28:27.777635'AND user_id = ";

        	$query .= $_SESSION["user_id"];
        	$query .= " AND evaluations.progression > 0.9 group by evaluations_attempts, evaluations_attempts.start_time, evaluations.description, evaluations.score_needed order by evaluations_attempts.start_time desc;";

        	$result = pg_query($db,$query);
        	$numrows = pg_numrows($result);


		$txt = "";
        	for($i = 0; $i < $numrows_evaluations; $i++)
        	{
                	$row_evaluations = pg_fetch_array($result_evaluations, $i);

                	$description = $row_evaluations[0];
                	$start_time = "s";
                	$passed = 0;

                	//now lets loop for data
                	$y = 0;
                	while ($y < $numrows && $passed == 0)
                	{
                        	$row = pg_fetch_array($result, $y);
                        	if ($description == $row[1])
                        	{
                                	if ($row[3] >= $row[4] && $row[2] == 0)
                                	{
                                        	$passed = 1;
                                	}
                        	}

                        	$y++;
                	}

			if ($i == 0)
			{  
                		if ($passed == 1)
				{
				}
				else
				{
					$txt .= $description;	
				}
			}
			else
			{
                		if ($passed == 1)
				{
				}
				else
				{
					if ($txt == "")
					{
						$txt .= $description;	
					}
					else
					{
						$txt .= ",";	
						$txt .= $description;	
					}
				}
			}

			$_SESSION["milestones"] = $txt;
		}
	}
}	
//end of class
}
?>
