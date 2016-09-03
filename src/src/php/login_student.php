<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");
?>

<?php
class LoginStudent
{
function __construct($application)
{
        $this->logs = true;
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
	$this->mCoreStandardsID = 0;
	$this->mMilestonesStandard = 'k.cc.a.1';

	//sessions	
	$_SESSION["role"] = 1;
}

public function process()
{
	$this->mDatabaseConnection = new DatabaseConnection();

	$this->checkForStudent();

	if ($this->mLoggedIn == 1)
	{
		$this->mRole = 1;
	}
/*
	if ($this->mStudentExists)
	{
		$this->sendBadPassword();
		return;
	}
*/
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
		error_log("is he logged in alaread yes");
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
			//$query2 = "select id, password, first_name, last_name, core_standards_id, school_id, room_id, team_id, teacher_id, score from users where username = '";
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
                		$school_id = pg_Result($result2, 0, 'school_id');
                		$teacher_id = pg_Result($result2, 0, 'teacher_id');
                		$room_id = pg_Result($result2, 0, 'room_id');
                		$team_id = pg_Result($result2, 0, 'team_id');

				$alltimebasicskillskindergarten = pg_Result($result2, 0, 'alltimebasicskillskindergarten'); 

				if ($alltimebasicskillskindergarten == 1)
				{
					$this->mMilestonesStandard = '1.oa.a.1';
				}
				//hard_code	
				$this->mMilestonesStandard = '4.oa.a.1';

				//log in
        			$this->mLoggedIn = 1;

				//set member variables
                		$this->mFirstName = $first_name;
                		$this->mLastName = $last_name;
                		$this->mUserID = $user_id;
				$this->mCoreStandardsID = $core_standards_id;
				$this->mSchoolID = $school_id;
				$this->mTeacherID = $teacher_id;
				$this->mRoomID = $room_id;
				$this->mTeamID = $team_id;
				
				
				//session vars	
				$_SESSION["user_id"] = $this->mUserID;
				$_SESSION["school_id"] = $this->mSchoolID;

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
	$itemTypesRawDataX = ""; 
	$itemTypesRawDataY = ""; 
	$itemTypesRawDataZ = ""; 
	$itemTypesRawDataAZ = ""; 
	$itemTypesRawDataAA = ""; 
	$itemTypesRawDataAB = ""; 
	$itemTypesRawDataAC = ""; 
	$itemTypesRawDataAD = ""; 
	$itemTypesRawDataAE = ""; 
	$itemTypesRawDataAF = ""; 
	$itemTypesRawDataAG = ""; 
	$itemTypesRawDataAH = ""; 
	$itemTypesRawDataAI = ""; 
	$itemTypesRawDataAJ = ""; 
	$itemTypesRawDataAK = ""; 
	$itemTypesRawDataAL = ""; 
	$itemTypesRawDataAM = ""; 
	$itemTypesRawDataAN = ""; 
	$itemTypesRawDataAO = ""; 
	$itemTypesRawDataAP = ""; 
	$itemTypesRawDataAQ = ""; 
	$itemTypesRawDataAR = ""; 
	$itemTypesRawDataAS = ""; 
	$itemTypesRawDataAT = ""; 
	$itemTypesRawDataAU = ""; 
	$itemTypesRawDataAV = ""; 
	$itemTypesRawDataAW = ""; 
	$itemTypesRawDataAX = ""; 
	$itemTypesRawDataAY = ""; 
	$itemTypesRawDataAZ = ""; 
	$itemTypesRawDataAAA = ""; 
	$itemTypesRawDataAAB = ""; 
	$itemTypesRawDataAAC = ""; 
	$itemTypesRawDataAAD = ""; 
	$itemTypesRawDataAAE = ""; 
	$itemTypesRawDataAAF = ""; 
	//add_game_O
	
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
	
	//Fourteen	
	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTypeArrayFourteen); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataX .= $this->mApplication->mNormal->mItemAttemptsTypeArrayFourteen[$i];
                }
                else
                {
                        $itemTypesRawDataX .= ":";
                        $itemTypesRawDataX .= $this->mApplication->mNormal->mItemAttemptsTypeArrayFourteen[$i];
                }
        }

	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayFourteen); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataY .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayFourteen[$i];
                }
                else
                {
                        $itemTypesRawDataY .= ":";
                        $itemTypesRawDataY .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayFourteen[$i];
                }
        }
	
	//Fifteen	
	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTypeArrayFifteen); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataZ .= $this->mApplication->mNormal->mItemAttemptsTypeArrayFifteen[$i];
                }
                else
                {
                        $itemTypesRawDataZ .= ":";
                        $itemTypesRawDataZ .= $this->mApplication->mNormal->mItemAttemptsTypeArrayFifteen[$i];
                }
        }

	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayFifteen); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAZ .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayFifteen[$i];
                }
                else
                {
                        $itemTypesRawDataAZ .= ":";
                        $itemTypesRawDataAZ .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayFifteen[$i];
                }
        }
	
	//Sixteen	
	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTypeArraySixteen); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAA .= $this->mApplication->mNormal->mItemAttemptsTypeArraySixteen[$i];
                }
                else
                {
                        $itemTypesRawDataAA .= ":";
                        $itemTypesRawDataAA .= $this->mApplication->mNormal->mItemAttemptsTypeArraySixteen[$i];
                }
        }

	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTransactionCodeArraySixteen); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAB .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArraySixteen[$i];
                }
                else
                {
                        $itemTypesRawDataAB .= ":";
                        $itemTypesRawDataAB .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArraySixteen[$i];
                }
        }
	
	//Seventeen	
	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTypeArraySeventeen); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAC .= $this->mApplication->mNormal->mItemAttemptsTypeArraySeventeen[$i];
                }
                else
                {
                        $itemTypesRawDataAC .= ":";
                        $itemTypesRawDataAC .= $this->mApplication->mNormal->mItemAttemptsTypeArraySeventeen[$i];
                }
        }

	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTransactionCodeArraySeventeen); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAD .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArraySeventeen[$i];
                }
                else
                {
                        $itemTypesRawDataAD .= ":";
                        $itemTypesRawDataAD .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArraySeventeen[$i];
                }
        }
	
	//Eighteen	
	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTypeArrayEighteen); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAE .= $this->mApplication->mNormal->mItemAttemptsTypeArrayEighteen[$i];
                }
                else
                {
                        $itemTypesRawDataAE .= ":";
                        $itemTypesRawDataAE .= $this->mApplication->mNormal->mItemAttemptsTypeArrayEighteen[$i];
                }
        }

	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayEighteen); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAF .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayEighteen[$i];
                }
                else
                {
                        $itemTypesRawDataAF .= ":";
                        $itemTypesRawDataAF .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayEighteen[$i];
                }
        }
	
	//Nineteen	
	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTypeArrayNineteen); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAG .= $this->mApplication->mNormal->mItemAttemptsTypeArrayNineteen[$i];
                }
                else
                {
                        $itemTypesRawDataAG .= ":";
                        $itemTypesRawDataAG .= $this->mApplication->mNormal->mItemAttemptsTypeArrayNineteen[$i];
                }
        }

	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayNineteen); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAH .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayNineteen[$i];
                }
                else
                {
                        $itemTypesRawDataAH .= ":";
                        $itemTypesRawDataAH .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayNineteen[$i];
                }
        }
	
	//Twenty	
	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTypeArrayTwenty); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAI .= $this->mApplication->mNormal->mItemAttemptsTypeArrayTwenty[$i];
                }
                else
                {
                        $itemTypesRawDataAI .= ":";
                        $itemTypesRawDataAI .= $this->mApplication->mNormal->mItemAttemptsTypeArrayTwenty[$i];
                }
        }

	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayTwenty); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAJ .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayTwenty[$i];
                }
                else
                {
                        $itemTypesRawDataAJ .= ":";
                        $itemTypesRawDataAJ .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayTwenty[$i];
                }
        }

	//TwentyOne	
	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTypeArrayTwentyOne); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAK .= $this->mApplication->mNormal->mItemAttemptsTypeArrayTwentyOne[$i];
                }
                else
                {
                        $itemTypesRawDataAK .= ":";
                        $itemTypesRawDataAK .= $this->mApplication->mNormal->mItemAttemptsTypeArrayTwentyOne[$i];
                }
        }

	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayTwentyOne); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAL .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayTwentyOne[$i];
                }
                else
                {
                        $itemTypesRawDataAL .= ":";
                        $itemTypesRawDataAL .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayTwentyOne[$i];
                }
        }

	//TwentyTwo	
	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTypeArrayTwentyTwo); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAM .= $this->mApplication->mNormal->mItemAttemptsTypeArrayTwentyTwo[$i];
                }
                else
               	{ 
                        $itemTypesRawDataAM .= ":";
                        $itemTypesRawDataAM .= $this->mApplication->mNormal->mItemAttemptsTypeArrayTwentyTwo[$i];
                }
        }

	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayTwentyTwo); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAN .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayTwentyTwo[$i];
                }
                else
                {
                        $itemTypesRawDataAN .= ":";
                        $itemTypesRawDataAN .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayTwentyTwo[$i];
                }
        }
	
	//TwentyThree	
	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTypeArrayTwentyThree); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAO .= $this->mApplication->mNormal->mItemAttemptsTypeArrayTwentyThree[$i];
                }
                else
               	{ 
                        $itemTypesRawDataAO .= ":";
                        $itemTypesRawDataAO .= $this->mApplication->mNormal->mItemAttemptsTypeArrayTwentyThree[$i];
                }
        }

	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayTwentyThree); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAP .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayTwentyThree[$i];
                }
                else
                {
                        $itemTypesRawDataAP .= ":";
                        $itemTypesRawDataAP .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayTwentyThree[$i];
                }
        }
	
	//TwentyFour	
	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTypeArrayTwentyFour); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAQ .= $this->mApplication->mNormal->mItemAttemptsTypeArrayTwentyFour[$i];
                }
                else
               	{
                        $itemTypesRawDataAQ .= ":";
                        $itemTypesRawDataAQ .= $this->mApplication->mNormal->mItemAttemptsTypeArrayTwentyFour[$i];
                }
        }

	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayTwentyFour); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAR .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayTwentyFour[$i];
                }
                else
                {
                        $itemTypesRawDataAR .= ":";
                        $itemTypesRawDataAR .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayTwentyFour[$i];
                }
        }
	
	//TwentyFive	
	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTypeArrayTwentyFive); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAS .= $this->mApplication->mNormal->mItemAttemptsTypeArrayTwentyFive[$i];
                }
                else
               	{
                        $itemTypesRawDataAS .= ":";
                        $itemTypesRawDataAS .= $this->mApplication->mNormal->mItemAttemptsTypeArrayTwentyFive[$i];
                }
        }

	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayTwentyFive); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAT .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayTwentyFive[$i];
                }
                else
                {
                        $itemTypesRawDataAT .= ":";
                        $itemTypesRawDataAT .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayTwentyFive[$i];
                }
        }
	
	//TwentySix	
	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTypeArrayTwentySix); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAU .= $this->mApplication->mNormal->mItemAttemptsTypeArrayTwentySix[$i];
                }
                else
               	{
                        $itemTypesRawDataAU .= ":";
                        $itemTypesRawDataAU .= $this->mApplication->mNormal->mItemAttemptsTypeArrayTwentySix[$i];
                }
        }

	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayTwentySix); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAV .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayTwentySix[$i];
                }
                else
                {
                        $itemTypesRawDataAV .= ":";
                        $itemTypesRawDataAV .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayTwentySix[$i];
                }
        }
	
	//TwentySeven	
	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTypeArrayTwentySeven); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAW .= $this->mApplication->mNormal->mItemAttemptsTypeArrayTwentySeven[$i];
                }
                else
               	{
                        $itemTypesRawDataAW .= ":";
                        $itemTypesRawDataAW .= $this->mApplication->mNormal->mItemAttemptsTypeArrayTwentySeven[$i];
                }
        }

	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayTwentySeven); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAX .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayTwentySeven[$i];
                }
                else
                {
                        $itemTypesRawDataAX .= ":";
                        $itemTypesRawDataAX .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayTwentySeven[$i];
                }
        }
	
	//TwentyEight	
	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTypeArrayTwentyEight); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAY .= $this->mApplication->mNormal->mItemAttemptsTypeArrayTwentyEight[$i];
                }
                else
               	{
                        $itemTypesRawDataAY .= ":";
                        $itemTypesRawDataAY .= $this->mApplication->mNormal->mItemAttemptsTypeArrayTwentyEight[$i];
                }
        }

	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayTwentyEight); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAZ .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayTwentyEight[$i];
                }
                else
                {
                        $itemTypesRawDataAZ .= ":";
                        $itemTypesRawDataAZ .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayTwentyEight[$i];
                }
        }
	
	//TwentyNine	
	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTypeArrayTwentyNine); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAAA .= $this->mApplication->mNormal->mItemAttemptsTypeArrayTwentyNine[$i];
                }
                else
               	{
                        $itemTypesRawDataAAA .= ":";
                        $itemTypesRawDataAAA .= $this->mApplication->mNormal->mItemAttemptsTypeArrayTwentyNine[$i];
                }
        }

	for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayTwentyNine); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAAB .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayTwentyNine[$i];
                }
                else
                {
                        $itemTypesRawDataAAB .= ":";
                        $itemTypesRawDataAAB .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayTwentyNine[$i];
                }
        }

        //Thirty
        for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTypeArrayThirty); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAAC .= $this->mApplication->mNormal->mItemAttemptsTypeArrayThirty[$i];
                }
                else
                {
                        $itemTypesRawDataAAC .= ":";
                        $itemTypesRawDataAAC .= $this->mApplication->mNormal->mItemAttemptsTypeArrayThirty[$i];
                }
        }

        for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayThirty); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAAD .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayThirty[$i];
                }
                else
                {
                        $itemTypesRawDataAAD .= ":";
                        $itemTypesRawDataAAD .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayThirty[$i];
                }
        }

        //ThirtyOne
        for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTypeArrayThirtyOne); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAAE .= $this->mApplication->mNormal->mItemAttemptsTypeArrayThirtyOne[$i];
                }
                else
                {
                        $itemTypesRawDataAAE .= ":";
                        $itemTypesRawDataAAE .= $this->mApplication->mNormal->mItemAttemptsTypeArrayThirtyOne[$i];
                }
        }

        for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayThirtyOne); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAAF .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayThirtyOne[$i];
                }
                else
                {
                        $itemTypesRawDataAAF .= ":";
                        $itemTypesRawDataAAF .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayThirtyOne[$i];
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
	//$returnString .= $this->mRole;
	$returnString .= $this->mMilestonesStandard;
//	$this->mMilestonesStandard = 'k.cc.a.1';
	
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
	$returnString .= $itemTypesRawDataX;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataY;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataZ;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAZ;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAA;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAB;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAC;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAD;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAE;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAF;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAG;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAH;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAI;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAJ;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAK;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAL;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAM;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAN;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAO;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAP;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAQ;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAR;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAS;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAT;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAU;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAV;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAW;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAX;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAY;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAZ;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAAA;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAAB;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAAC;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAAD;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAAE;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAAF;
	$returnString .= ",";
	$returnString .= $this->mApplication->mEvaluationsID;
	echo $returnString;
}

}
?>
