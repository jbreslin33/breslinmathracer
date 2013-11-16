<?php
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");
//start new session
session_start();
$conn = dbConnect();

$returnString = "";


//*******************     anything in questions? *******************************
$query = "select question, answer, question_order from questions where level_id = ";
$query .= $_SESSION["next_level_id"];
$query .= " ORDER BY question_order;";

//get db result
$result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());

//get numer of rows which will also be score needed
$numberOfRowsInQuestions = pg_num_rows($result);


if ($numberOfRowsInQuestions > 0)
{
	$counter = 0;
	while ($row = pg_fetch_row($result))
	{
        	//fill php vars from db
        	$questions = $row[0];
        	$answers = $row[1];
        	$counter++;
	}

	$numberOfRows = $numberOfRowsInQuestions;
}
//*******************     anything in counting? if so override above ^ **********************************
$query = "select score_needed, start_number, end_number, count_by from counting where level_id = ";
$query .= $_SESSION["next_level_id"];

//get db result
$result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());

//get numer of rows which will also be score needed
$numberOfRowsInCounting = pg_num_rows($result);

if ($numberOfRowsInCounting > 0)
{
	while ($row = pg_fetch_row($result))
	{
        	//fill php vars from db
		$scoreNeeded = $row[0];
		$start_number = $row[1];	
		$end_number = $row[2];	
		$count_by = $row[3];	
		$q = $start_number;
		$a = $start_number;

		for ($i=0; $i < $scoreNeeded; $i++)
		{	
			$q = $count_by * $i + $start_number;
			$a = $q + $count_by;

			$returnString .= $q;
			$returnString .= ",";
			$returnString .= $a;

			$c = $scoreNeeded - 1;	
			if ($i < $c)
			{ 
				$returnString .= ",";
			}
		}
	}
	$numberOfRows = $scoreNeeded;
}

//*******************     anything in addition? if so override above ^ **********************************
$query = "select score_needed, addend_a, addend_b, number_of_addends from addition where level_id >= 14 AND level_id <= ";
$query .= $_SESSION["next_level_id"];
$query .= " ORDER BY level_id";

//get db result
$result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());

//get numer of rows which will also be score needed
$numberOfRowsInAddition = pg_num_rows($result);

$addend_a_array = array();
$addend_b_array = array();


if ($numberOfRowsInAddition > 0)
{
	$i = 0;	
        while ($row = pg_fetch_row($result))
        {
                //fill php vars from db only on first
               	$scoreNeeded = $row[0];
               	$addend_a_array[$i] = $row[1];
               	$addend_b_array[$i] = $row[2];
		$i++;
        }
	
	$arrlength=count($addend_a_array);
	for($j = 0; $j < $scoreNeeded; $j++)
	{		
		$randomRow = rand(0,$arrlength);
		if ($addend_a_array[$randomRow] == 0)
		{
			$returnString .= "0";
		}
		else
		{
			$returnString .= $addend_a_array[$randomRow];
		}
		
		$returnString .= ",";

		if ($addend_b_array[$randomRow] == 0)
		{
			$returnString .= "0";
		}
		else
		{
			$returnString .= $addend_b_array[$randomRow];
		}

		$c = $scoreNeeded - 1;
                if ($j < $c)
                {
                	$returnString .= ",";
                }
	}
        $numberOfRows = $numberOfRowsInAddition;
}

echo $returnString;

//*******************     anything in subtraction? if so override above ^ **********************************
$query = "select score_needed, minuend_min, minuend_max, subtrahend_min, subtrahend_max, number_of_subtrahends, negative_difference from subtraction where level_id = ";
$query .= $_SESSION["next_level_id"];

//get db result
$result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());

//get numer of rows which will also be score needed
$numberOfRowsInSubtraction = pg_num_rows($result);

if ($numberOfRowsInSubtraction > 0)
{
        while ($row = pg_fetch_row($result))
        {
                //fill php vars from db
                $scoreNeeded = $row[0];
                $minuend_min = $row[1];
                $minuend_max = $row[2];
                $subtrahend_min = $row[3];
                $subtrahend_max = $row[4];
                $number_of_subtrahends = $row[5];
                $number_of_subtrahends = $row[6];
                $negative_difference = $row[7];

                for ($i=0; $i < $scoreNeeded; $i++)
                {
			$minuend    = rand($minuend_min,$minuend_max);
				
			$subtrahend = 1000; 

			while ($subtrahend > $minuend)
			{
				$subtrahend = rand($subtrahend_min,$subtrahend_max);
			} 

                        $a = $minuend - $subtrahend;
                        //echo "questions[$i] = \"What is $minuend - $subtrahend ?\";";
			if ($a == 0)
			{
                        //	echo "answers[$i] = '0'";
			}
			else
			{
                        //	echo "answers[$i] = $a";
			}
                        //echo "</script>";
                }
        }
        $numberOfRows = $scoreNeeded;
}



//*******************     anything in multiplication? if so override above ^ **********************************
$query = "select score_needed, factor_min, factor_max, number_of_factors from multiplication where level_id = ";
$query .= $_SESSION["next_level_id"];

//get db result
$result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());

//get numer of rows which will also be score needed
$numberOfRowsInMultiplication = pg_num_rows($result);

if ($numberOfRowsInMultiplication > 0)
{
        while ($row = pg_fetch_row($result))
        {
                //fill php vars from db
                $scoreNeeded = $row[0];
                $factor_min = $row[1];
                $factor_max = $row[2];
                $number_of_factors = $row[3];

                for ($i=0; $i < $scoreNeeded; $i++)
                {
			$factor1 = rand($factor_min,$factor_max);
			$factor2 = rand($factor_min,$factor_max);

                        $a = $factor1 * $factor2;
                        //echo "questions[$i] = \"What is $factor1 X $factor2 ?\";";
			if ($a == 0)
			{
                        //	echo "answers[$i] = '0'";
			}
			else
			{
                        //	echo "answers[$i] = $a";
			}
                        //echo "</script>";
                }
        }
        $numberOfRows = $scoreNeeded;
}



//*******************     anything in division? if so override above ^ **********************************
$query = "select score_needed, factor_min, factor_max, number_of_factors from division where level_id = ";
$query .= $_SESSION["next_level_id"];

//get db result
$result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());

//get numer of rows which will also be score needed
$numberOfRowsInDivision = pg_num_rows($result);

if ($numberOfRowsInDivision > 0)
{
        while ($row = pg_fetch_row($result))
        {
                //fill php vars from db
                $scoreNeeded = $row[0];
                $factor_min = $row[1];
                $factor_max = $row[2];
                $number_of_factors = $row[3];


                for ($i=0; $i < $scoreNeeded; $i++)
                {
			$factor1 = rand($factor_min,$factor_max);
			$factor2 = 1000; 

			while ($factor2 > $factor1)
			{
				$factor2 = rand($factor_min,$factor_max);
			} 

                        $a = $factor1 / $factor2;
                        //echo "<script language=\"javascript\">";
                        //echo "questions[$i] = \"What is $factor1 / $factor2 ?\";";
			if ($a == 0)
			{
                        //	echo "answers[$i] = '0'";
			}
			else
			{
                        //	echo "answers[$i] = $a";
			}
                        //echo "</script>";
                }
        }
        $numberOfRows = $scoreNeeded;
        //echo "<script language=\"javascript\">";
        //echo "scoreNeeded = $scoreNeeded;";
        //echo "numberOfRows = $numberOfRows;";
        //echo "</script>";
}
?>
