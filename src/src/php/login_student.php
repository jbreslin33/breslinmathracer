<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");
?>

<?php

class LoginStudent
{
    private $mDatabaseConnection;
function __construct($application)
{
	$this->mApplication = $application;
	$this->mUsername = 0; 
        $this->mPassword = 0;
        $this->mStudentExists = false;
	$this->mLoggedIn = 0;
	$this->mRole = 1;
	$this->mFirstName = 0;
	$this->mLastName = 0;
	$this->mUserID = 0;
	$this->mCoreStandardsID = 0;
	$this->mEvaluationsID = 1; //for now but this will change for time or assignment etc
}
public function enterLogin($username,$password)
{
        $this->mStudentExists = false;
	$this->mUsername = $username;
        $this->mPassword = $password;

        $this->mDatabaseConnection = new DatabaseConnection();
        $this->process();
}

public function sendLoginStudent()
{
	$itemTypesRawDataA = ""; 
	$itemTypesRawDataB = ""; 
	$itemTypesRawDataC = ""; 
	
	for ($i=0; $i < count($this->mApplication->mNormal->mItemTypesArray); $i++)
	{
		if ($i == 0)
		{
			$itemTypesRawDataA .= $this->mApplication->mNormal->mItemTypesArray[$i]; 
		}		
		else
		{
			$itemTypesRawDataA .= ":";
			$itemTypesRawDataA .= $this->mApplication->mNormal->mItemTypesArray[$i]; 
		}
	}


	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTypeArray); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataB .= $this->mApplication->mNormal->mItemAttemptsTypeArray[$i];
                }
                else
                {
                        $itemTypesRawDataB .= ":";
                        $itemTypesRawDataB .= $this->mApplication->mNormal->mItemAttemptsTypeArray[$i];
                }
        }

	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTransactionCodeArray); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataC .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArray[$i];
                }
                else
                {
                        $itemTypesRawDataC .= ":";
                        $itemTypesRawDataC .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArray[$i];
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
	$returnString .= $this->mRole;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataA;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataB;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataC;
	$returnString .= ",";
	$returnString .= $this->mEvaluationsID;
	echo $returnString;
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

public function process()
{
	//student
	$this->checkForStudent();
	if ($this->mLoggedIn == 1)
	{
		error_log('loggedin =1');
		return;
	}
	if ($this->mStudentExists)
	{
		error_log('student exits =1');
		$this->sendBadPassword();
		return;
	}
	//fall thru to bad username	
	error_log('bad username =1');
	$this->sendBadUsername();
}
public function checkForStudent()
{
       	if ($this->mLoggedIn == 1)
	{
		return;
	}

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
		$query2 = "select id, password, first_name, last_name, core_standards_id, school_id, room_id, team_id, teacher_id from users where username = '";
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
                	$school_id = pg_Result($result2, 0, 'school_id');
                	$teacher_id = pg_Result($result2, 0, 'teacher_id');
                	$room_id = pg_Result($result2, 0, 'room_id');
                	$team_id = pg_Result($result2, 0, 'team_id');

			//set member variables
                	$this->mFirstName = $first_name;
                	$this->mLastName = $last_name;
                	$this->mUserID = $user_id;
        		$this->mLoggedIn = 1;
			$this->mCoreStandardsID = $core_standards_id;
			$this->mSchoolID = $school_id;
			$this->mTeacherID = $teacher_id;
			$this->mRoomID = $room_id;
			$this->mTeamID = $team_id;

		
			//send to login data to client
			//$this->sendLoginStudent();
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
?>
