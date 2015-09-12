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
}

public function process()
{
	$this->mDatabaseConnection = new DatabaseConnection();
        $this->mStudentExists = false;
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
			$_SESSION["user_id"] = $this->mUserID;
        		$this->mLoggedIn = 1;
			$this->mCoreStandardsID = $core_standards_id;
			$this->mSchoolID = $school_id;
			$_SESSION["school_id"] = $this->mSchoolID;
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

public function sendLoginStudent()
{
	$itemTypesRawDataA = ""; 
	$itemTypesRawDataB = ""; 
	$itemTypesRawDataC = ""; 
	$itemTypesRawDataD = ""; 
	$itemTypesRawDataE = ""; 
	$itemTypesRawDataF = ""; 
	$itemTypesRawDataG = ""; 
	$itemTypesRawDataH = ""; 
	$itemTypesRawDataI = ""; 
	$itemTypesRawDataJ = ""; 
	$itemTypesRawDataK = ""; 
	$itemTypesRawDataL = ""; 
	$itemTypesRawDataM = ""; 
	$itemTypesRawDataN = ""; 
	$itemTypesRawDataO = ""; 
	$itemTypesRawDataP = ""; 
	$itemTypesRawDataQ = ""; 
	$itemTypesRawDataR = ""; 
	$itemTypesRawDataS = ""; 
	$itemTypesRawDataT = ""; 
	$itemTypesRawDataU = ""; 
	$itemTypesRawDataV = ""; 
	$itemTypesRawDataW = ""; 
	
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

	//One
	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTypeArrayOne); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataB .= $this->mApplication->mNormal->mItemAttemptsTypeArrayOne[$i];
                }
                else
                {
                        $itemTypesRawDataB .= ":";
                        $itemTypesRawDataB .= $this->mApplication->mNormal->mItemAttemptsTypeArrayOne[$i];
                }
        }

	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayOne); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataC .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayOne[$i];
                }
                else
                {
                        $itemTypesRawDataC .= ":";
                        $itemTypesRawDataC .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayOne[$i];
                }
        }

	//Three
	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTypeArrayThree); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataD .= $this->mApplication->mNormal->mItemAttemptsTypeArrayThree[$i];
                }
                else
                {
                        $itemTypesRawDataD .= ":";
                        $itemTypesRawDataD .= $this->mApplication->mNormal->mItemAttemptsTypeArrayThree[$i];
                }
        }

	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayThree); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataE .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayThree[$i];
                }
                else
                {
                        $itemTypesRawDataE .= ":";
                        $itemTypesRawDataE .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayThree[$i];
                }
        }

	//Four	
	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTypeArrayFour); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataF .= $this->mApplication->mNormal->mItemAttemptsTypeArrayFour[$i];
                }
                else
                {
                        $itemTypesRawDataF .= ":";
                        $itemTypesRawDataF .= $this->mApplication->mNormal->mItemAttemptsTypeArrayFour[$i];
                }
        }

	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayFour); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataG .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayFour[$i];
                }
                else
                {
                        $itemTypesRawDataG .= ":";
                        $itemTypesRawDataG .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayFour[$i];
                }
        }
	
	//Five	
	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTypeArrayFive); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataH .= $this->mApplication->mNormal->mItemAttemptsTypeArrayFive[$i];
                }
                else
                {
                        $itemTypesRawDataH .= ":";
                        $itemTypesRawDataH .= $this->mApplication->mNormal->mItemAttemptsTypeArrayFive[$i];
                }
        }

	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayFive); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataI .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayFive[$i];
                }
                else
                {
                        $itemTypesRawDataI .= ":";
                        $itemTypesRawDataI .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayFive[$i];
                }
        }
	
	//Six	
	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTypeArraySix); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataJ .= $this->mApplication->mNormal->mItemAttemptsTypeArraySix[$i];
                }
                else
                {
                        $itemTypesRawDataJ .= ":";
                        $itemTypesRawDataJ .= $this->mApplication->mNormal->mItemAttemptsTypeArraySix[$i];
                }
        }

	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTransactionCodeArraySix); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataK .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArraySix[$i];
                }
                else
                {
                        $itemTypesRawDataK .= ":";
                        $itemTypesRawDataK .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArraySix[$i];
                }
        }

	//Seven	
	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTypeArraySeven); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataL .= $this->mApplication->mNormal->mItemAttemptsTypeArraySeven[$i];
                }
                else
                {
                        $itemTypesRawDataL .= ":";
                        $itemTypesRawDataL .= $this->mApplication->mNormal->mItemAttemptsTypeArraySeven[$i];
                }
        }

	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTransactionCodeArraySeven); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataM .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArraySeven[$i];
                }
                else
                {
                        $itemTypesRawDataM .= ":";
                        $itemTypesRawDataM .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArraySeven[$i];
                }
        }

	//Eight	
	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTypeArrayEight); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataN .= $this->mApplication->mNormal->mItemAttemptsTypeArrayEight[$i];
                }
                else
                {
                        $itemTypesRawDataN .= ":";
                        $itemTypesRawDataN .= $this->mApplication->mNormal->mItemAttemptsTypeArrayEight[$i];
                }
        }

	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayEight); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataO .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayEight[$i];
                }
                else
                {
                        $itemTypesRawDataO .= ":";
                        $itemTypesRawDataO .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayEight[$i];
               	} 
        }
	
	//Nine	
	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTypeArrayNine); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataP .= $this->mApplication->mNormal->mItemAttemptsTypeArrayNine[$i];
                }
                else
                {
                        $itemTypesRawDataP .= ":";
                        $itemTypesRawDataP .= $this->mApplication->mNormal->mItemAttemptsTypeArrayNine[$i];
               	} 
        }

	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayNine); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataQ .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayNine[$i];
                }
                else
                {
                        $itemTypesRawDataQ .= ":";
                        $itemTypesRawDataQ .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayNine[$i];
                }
        }
	
	//Ten	
	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTypeArrayTen); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataR .= $this->mApplication->mNormal->mItemAttemptsTypeArrayTen[$i];
                }
                else
                {
                        $itemTypesRawDataR .= ":";
                        $itemTypesRawDataR .= $this->mApplication->mNormal->mItemAttemptsTypeArrayTen[$i];
                }
        }

	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayTen); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataS .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayTen[$i];
                }
                else
                {
                        $itemTypesRawDataS .= ":";
                        $itemTypesRawDataS .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayTen[$i];
                }
        }
	
	//Twelve	
	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTypeArrayTwelve); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataT .= $this->mApplication->mNormal->mItemAttemptsTypeArrayTwelve[$i];
                }
                else
                {
                        $itemTypesRawDataT .= ":";
                        $itemTypesRawDataT .= $this->mApplication->mNormal->mItemAttemptsTypeArrayTwelve[$i];
                }
        }

	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayTwelve); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataU .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayTwelve[$i];
                }
                else
                {
                        $itemTypesRawDataU .= ":";
                        $itemTypesRawDataU .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayTwelve[$i];
                }
        }
	
	//Thirteen	
	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTypeArrayThirteen); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataV .= $this->mApplication->mNormal->mItemAttemptsTypeArrayThirteen[$i];
                }
                else
                {
                        $itemTypesRawDataV .= ":";
                        $itemTypesRawDataV .= $this->mApplication->mNormal->mItemAttemptsTypeArrayThirteen[$i];
                }
        }

	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayThirteen); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataW .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayThirteen[$i];
                }
                else
                {
                        $itemTypesRawDataW .= ":";
                        $itemTypesRawDataW .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayThirteen[$i];
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
	$returnString .= $itemTypesRawDataD;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataE;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataF;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataG;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataH;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataI;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataJ;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataK;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataL;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataM;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataN;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataO;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataP;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataQ;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataR;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataS;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataT;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataU;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataV;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataW;
	$returnString .= ",";
	$returnString .= $this->mApplication->mEvaluationsID;
	echo $returnString;
}

}
?>
