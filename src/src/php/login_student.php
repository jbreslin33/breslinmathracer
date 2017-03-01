<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");
?>

<?php
class LoginStudent
{
function __construct($application)
{
        $this->logs = false;
        if ($this->logs)
        {
                error_log('LoginStudent::LoginStudent');
        }

	$this->mApplication = $application;

	//login
	$this->mLoggedIn = 0;
	$this->mStudentExists = false;

	//information about student
	$this->mUsername = 0; 
        $this->mPassword = 0;
	$this->mRole = 1;
	$this->mFirstName = 0;
	$this->mLastName = 0;
	$this->mUserID = 0;
	$this->mTeammateID = '';
	$this->mStandard = 0;
	$this->mCoreGradesID = 0;
	$this->mMilestonesStandard = 'k.cc.a.1';

}

public function process()
{
	$this->mDatabaseConnection = new DatabaseConnection();

	$this->checkForStudent();

	if ($this->mLoggedIn == 1)
	{
		$this->mRole = 1;
	}
	if ($this->mLoggedIn == 0 && $this->mStudentExists)
	{
		$this->sendBadPassword();
		return;
	}
	if ($this->mLoggedIn == 0 && $this->mStudentExists == false)
	{
		$this->sendBadUsername();
		return;
	}
}

public function sendBadUsername()
{
	$returnString = "103";
	echo $returnString;
}
public function sendBadPassword()
{
	$returnString = "104";
	echo $returnString;
}

public function checkForStudent()
{
        $this->mStudentExists = false;
       	if ($this->mLoggedIn == 1)
	{
		return;
	}
	else
	{
		//let's set a var that will be false if there was a problem..
		$problem = "";
        	$query = "select username from users where username = '";
        	$query .= $this->mUsername;
        	$query .= "';";
        
		//get db result
        	$result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());
        	//get numer of rows
        	$num = pg_num_rows($result);
        	if ($num > 0)
        	{
			$this->mStudentExists = true;
			$query2 = "select * from users where username = '";
        		$query2 .= $this->mUsername;
        		$query2 .= "' AND password = '";
        		$query2 .= $this->mPassword;
        		$query2 .= "';";
	
			//get db result
        		$result2 = pg_query($this->mDatabaseConnection->getConn(),$query2) or die('Could not connect: ' . pg_last_error());
        		//get numer of rows
        		$num2 = pg_num_rows($result2);
        
			if ($num2 > 0)
			{
				//grab db values
                		$first_name = pg_Result($result2, 0, 'first_name');
                		$last_name = pg_Result($result2, 0, 'last_name');
                		$user_id = pg_Result($result2, 0, 'id');
                		$core_standards_id = pg_Result($result2, 0, 'core_standards_id');
                		$core_grades_id = pg_Result($result2, 0, 'core_grades_id');
                		$school_id = pg_Result($result2, 0, 'school_id');
                		$teacher_id = pg_Result($result2, 0, 'teacher_id');
                		$room_id = pg_Result($result2, 0, 'room_id');
                		$team_id = pg_Result($result2, 0, 'team_id');

				$this->mStandard = $core_standards_id;

				//log in
        			$this->mLoggedIn = 1;

				//set member variables
                		$this->mFirstName = $first_name;
                		$this->mLastName = $last_name;
                		$this->mUserID = $user_id;
				$this->mStandard = $core_standards_id;
				$this->mCoreGradesID = $core_grades_id;
				error_log($this->mCoreGradesID);
				$this->mSchoolID = $school_id;
				$this->mTeacherID = $teacher_id;
				$this->mRoomID = $room_id;
				$this->mTeamID = $team_id;
				
				
				
				//session vars	
				$_SESSION["user_id"] = $this->mUserID;
				$_SESSION["school_id"] = $this->mSchoolID;
				$_SESSION["room_id"] = $this->mRoomID;
				$_SESSION["team_id"] = $this->mTeamID;
				$_SESSION["role"] = 1;

				$this->setMilestonesStandard();
		
				//send to login data to client
			}
			else
			{
        			$this->mLoggedIn = 0;
        			$this->mUserID = 0;
			}
        	}
        	else
        	{
        		$this->mLoggedIn = 0;
        		$this->mUserID = 0;
        	}
	}
}
public function setMilestonesStandard()
{

}
public function sendLoginStudent()
{
	//sessions	
	$_SESSION["role"] = 1;

	$rawDataItemTypes = ""; 
	$rawDataItemAttemptsEvaluationsID = ""; 
	$rawDataItemAttemptsItemTypes = ""; 
	$rawDataItemAttemptsTransactionCode = ""; 

        $rawDataEvaluations = "";
        $rawDataEvaluationsQuestions = "";
        $rawDataEvaluationsItemTypesItemTypes = "";
        $rawDataEvaluationsItemTypesEvaluationsID = "";

        //itemTypes        
        for ($i=0; $i < count($this->mApplication->mNormal->mItemTypesArray); $i++)
        {
                if ($i == 0)
                {
                        $rawDataItemTypes .= $this->mApplication->mNormal->mItemTypesArray[$i];        
			//error_log($this->mApplication->mNormal->mItemTypesArray[$i]);
                }
                else
                {
                        $rawDataItemTypes .= ":";
                        $rawDataItemTypes .= $this->mApplication->mNormal->mItemTypesArray[$i];          
			//error_log($this->mApplication->mNormal->mItemTypesArray[$i]);
                }
        }

	// ITEM ATTEMMPTS

	//evaluationsID	
	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsEvaluationsIDArray); $i++)
        {
                if ($i == 0)
                {
                        $rawDataItemAttemptsEvaluationsID .= $this->mApplication->mNormal->mItemAttemptsEvaluationsIDArray[$i];
			//error_log($this->mApplication->mNormal->mItemAttemptsEvaluationsIDArray[$i]);
                }
                else
                {
                        $rawDataItemAttemptsEvaluationsID .= ":";
                        $rawDataItemAttemptsEvaluationsID .= $this->mApplication->mNormal->mItemAttemptsEvaluationsIDArray[$i];
			//error_log($this->mApplication->mNormal->mItemAttemptsEvaluationsIDArray[$i]);
                }
        }

	//itemTypes	
	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsItemTypeArray); $i++)
	{
		if ($i == 0)
		{
			$rawDataItemAttemptsItemTypes .= $this->mApplication->mNormal->mItemAttemptsItemTypeArray[$i]; 
			//error_log($this->mApplication->mNormal->mItemAttemptsItemTypeArray[$i]);
		}		
		else
		{
			$rawDataItemAttemptsItemTypes .= ":";
			$rawDataItemAttemptsItemTypes .= $this->mApplication->mNormal->mItemAttemptsItemTypeArray[$i]; 
			//error_log($this->mApplication->mNormal->mItemAttemptsItemTypeArray[$i]);
		}
	}


	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTransactionCodeArray); $i++)
        {
                if ($i == 0)
                {
                        $rawDataItemAttemptsTransactionCode .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArray[$i];
			//error_log($this->mApplication->mNormal->mItemAttemptsTransactionCodeArray[$i]);
                }
                else
                {
                        $rawDataItemAttemptsTransactionCode .= ":";
                        $rawDataItemAttemptsTransactionCode .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArray[$i];
			//error_log($this->mApplication->mNormal->mItemAttemptsTransactionCodeArray[$i]);
                }
        }

	//evaluations id 
        for ($i=0; $i < count($this->mApplication->mNormal->mEvaluationsArray); $i++)
        {
                if ($i == 0)
                {
                        $rawDataEvaluations .= $this->mApplication->mNormal->mEvaluationsArray[$i];
                        //error_log($this->mApplication->mNormal->mEvaluationsArray[$i]);
                }
                else
                {
                        $rawDataEvaluations .= ":";
                        $rawDataEvaluations .= $this->mApplication->mNormal->mEvaluationsArray[$i];
                        //error_log($this->mApplication->mNormal->mEvaluationsArray[$i]);
                }
        }

        //evaluations questions total 
        for ($i=0; $i < count($this->mApplication->mNormal->mEvaluationsQuestionsArray); $i++)
        {
                if ($i == 0)
                {
                        $rawDataEvaluationsQuestions .= $this->mApplication->mNormal->mEvaluationsQuestionsArray[$i];
                        //error_log($this->mApplication->mNormal->mEvaluationsQuestionsArray[$i]);
                }
                else
                {
                        $rawDataEvaluationsQuestions .= ":";
                        $rawDataEvaluationsQuestions .= $this->mApplication->mNormal->mEvaluationsQuestionsArray[$i];
                        //error_log($this->mApplication->mNormal->mEvaluationsQuestionsArray[$i]);
                }
        }

        for ($i=0; $i < count($this->mApplication->mNormal->mEvaluationsItemTypesItemTypesArray); $i++)
        {
                if ($i == 0)
                {
                        $rawDataEvaluationsItemTypesItemTypes .= $this->mApplication->mNormal->mEvaluationsItemTypesItemTypesArray[$i];
                        //error_log($this->mApplication->mNormal->mEvaluationsItemTypesItemTypesArray[$i]);
                }
                else
                {
                        $rawDataEvaluationsItemTypesItemTypes .= ":";
                        $rawDataEvaluationsItemTypesItemTypes .= $this->mApplication->mNormal->mEvaluationsItemTypesItemTypesArray[$i];
                        //error_log($this->mApplication->mNormal->mEvaluationsItemTypesItemTypesArray[$i]);
                }
        }

        for ($i=0; $i < count($this->mApplication->mNormal->mEvaluationsItemTypesEvaluationsIDArray); $i++)
        {
                if ($i == 0)
                {
                        $rawDataEvaluationsItemTypesEvaluationsID .= $this->mApplication->mNormal->mEvaluationsItemTypesEvaluationsIDArray[$i];
                        //error_log($this->mApplication->mNormal->mEvaluationsItemTypesEvaluationsIDArray[$i]);
                }
                else
                {
                        $rawDataEvaluationsItemTypesEvaluationsID .= ":";
                        $rawDataEvaluationsItemTypesEvaluationsID .= $this->mApplication->mNormal->mEvaluationsItemTypesEvaluationsIDArray[$i];
                        //error_log($this->mApplication->mNormal->mEvaluationsItemTypesEvaluationsIDArray[$i]);
                }
        }

	//fill php vars
	$returnString = "117,";
	$returnString .= "normal";
	$returnString .= ",";
	$returnString .= $this->mLoggedIn;
	$returnString .= ",";
	$returnString .= $this->mUsername;
	$returnString .= ",";
	$returnString .= $this->mFirstName;
	$returnString .= ",";
	$returnString .= $this->mLastName;
	$returnString .= ",";
	$returnString .= $this->mStandard;
	$returnString .= ",";
	$returnString .= $rawDataItemTypes;
	$returnString .= ",";
	$returnString .= $rawDataItemAttemptsEvaluationsID;
	$returnString .= ",";
	$returnString .= $rawDataItemAttemptsItemTypes; 
	$returnString .= ",";
        $returnString .= $rawDataItemAttemptsTransactionCode;
	$returnString .= ",";

        $returnString .= $rawDataEvaluations;
	$returnString .= ",";
        $returnString .= $rawDataEvaluationsQuestions;
	$returnString .= ",";
        $returnString .= $rawDataEvaluationsItemTypesItemTypes;
	$returnString .= ",";
        $returnString .= $rawDataEvaluationsItemTypesEvaluationsID;
	$returnString .= ",";
	$returnString .= $this->mApplication->mEvaluationsID;
	$returnString .= ",";
	$returnString .= $this->mCoreGradesID;
	echo $returnString;
}

}
?>
