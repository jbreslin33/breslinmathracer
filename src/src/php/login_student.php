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
	$this->mCoreStandardsID = 0;
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
                		$school_id = pg_Result($result2, 0, 'school_id');
                		$teacher_id = pg_Result($result2, 0, 'teacher_id');
                		$room_id = pg_Result($result2, 0, 'room_id');
                		$team_id = pg_Result($result2, 0, 'team_id');

				$core_standards_overide_id = pg_Result($result2, 0, 'core_standards_overide_id'); 

				$k_cc     = pg_Result($result2, 0, 'k_cc'); 
				$k_oa_a_4 = pg_Result($result2, 0, 'k_oa_a_4'); 
				$k_oa_a_5 = pg_Result($result2, 0, 'k_oa_a_5'); 
				
				$g1_oa_b_3 = pg_Result($result2, 0, 'g1_oa_b_3'); 
				$g1_oa_c_6 = pg_Result($result2, 0, 'g1_oa_c_6'); 
				$g1_nbt = pg_Result($result2, 0, 'g1_nbt'); 
				
				$g2_oa_b_2 = pg_Result($result2, 0, 'g2_oa_b_2'); 
				$g2_nbt = pg_Result($result2, 0, 'g2_nbt'); 

				$g3_oa_c_7 = pg_Result($result2, 0, 'g3_oa_c_7'); 
				$g3_nbt = pg_Result($result2, 0, 'g3_nbt'); 
				
				$g4_oa_b_4 = pg_Result($result2, 0, 'g4_oa_b_4'); 
				$g4_nbt_b_4 = pg_Result($result2, 0, 'g4_nbt_b_4'); 
				$g4_nbt_b_5 = pg_Result($result2, 0, 'g4_nbt_b_5'); 
				$g4_nbt_b_6 = pg_Result($result2, 0, 'g4_nbt_b_6'); 
				$g4_nf_b_3_c = pg_Result($result2, 0, 'g4_nf_b_3_c'); 
				
				$g5_oa_a_1 = pg_Result($result2, 0, 'g5_oa_a_1'); 
				$g5_nbt_b_5 = pg_Result($result2, 0, 'g5_nbt_b_5'); 
				$g5_nbt_b_6 = pg_Result($result2, 0, 'g5_nbt_b_6'); 
				$g5_nbt_b_7 = pg_Result($result2, 0, 'g5_nbt_b_7'); 
				$g5_nf_a_1 = pg_Result($result2, 0, 'g5_nf_a_1'); 
			
				$g6_rp = pg_Result($result2, 0, 'g6_rp'); 
				$g6_ns = pg_Result($result2, 0, 'g6_ns'); 
				$g6_ee = pg_Result($result2, 0, 'g6_ee'); 
				$g6_g = pg_Result($result2, 0, 'g6_g'); 
				$g6_sp = pg_Result($result2, 0, 'g6_sp'); 

				//eventually will this be automated to fill core_standards_overide_id as students finish criticals.
				if ($core_standards_overide_id == 0)
				{
					$failed_to_pass = false;	

					if ($k_cc == 1 && $failed_to_pass == false)
					{
						$this->mMilestonesStandard = 'k.oa.a.3';
					}
					else
					{
						$failed_to_pass = true;
					}

					if ($k_oa_a_4 == 1 && $failed_to_pass == false)
					{
						$this->mMilestonesStandard = 'k.oa.a.5';
					}
					else
					{
						$failed_to_pass = true;
					}

					if ($k_oa_a_5 == 1 && $failed_to_pass == false)
					{
						$this->mMilestonesStandard = '1.oa.a.1';
					}
					else
					{
						$failed_to_pass = true;
					}

					if ($g1_oa_b_3 == 1 && $failed_to_pass == false)
					{
						$this->mMilestonesStandard = '1.oa.c.6';
					}
					else
					{
						$failed_to_pass = true;
					}
					if ($g1_oa_c_6 == 1 && $failed_to_pass == false)
					{
						$this->mMilestonesStandard = '1.nbt.a.1';
					}
					else
					{
						$failed_to_pass = true;
					}
					if ($g1_nbt == 1 && $failed_to_pass == false)
					{
						$this->mMilestonesStandard = '2.oa.a.1';
					}
					else
					{
						$failed_to_pass = true;
					}
					if ($g2_oa_b_2 == 1 && $failed_to_pass == false)
					{
						$this->mMilestonesStandard = '2.nbt.a.1';
					}
					else
					{
						$failed_to_pass = true;
					}
					if ($g2_nbt == 1 && $failed_to_pass == false)
					{
						$this->mMilestonesStandard = '3.oa.a.1';
					}
					else
					{
						$failed_to_pass = true;
					}
					if ($g3_oa_c_7 == 1 && $failed_to_pass == false)
					{
						$this->mMilestonesStandard = '3.nbt.a.1';
					}
					else
					{
						$failed_to_pass = true;
					}
					if ($g3_nbt == 1 && $failed_to_pass == false)
					{
						$this->mMilestonesStandard = '4.oa.a.1';
					}
					else
					{
						$failed_to_pass = true;
					}
					if ($g4_oa_b_4 == 1 && $failed_to_pass == false)
					{
						$this->mMilestonesStandard = '4.nbt.a.1';
					}
					else
					{
						$failed_to_pass = true;
					}
					if ($g4_nbt_b_4 == 1 && $failed_to_pass == false)
					{
						$this->mMilestonesStandard = '4.nbt.b.5';
					}
					else
					{
						$failed_to_pass = true;
					}
					if ($g4_nbt_b_5 == 1 && $failed_to_pass == false)
					{
						$this->mMilestonesStandard = '4.nbt.b.6';
					}
					else
					{
						$failed_to_pass = true;
					}
					if ($g4_nbt_b_6 == 1 && $failed_to_pass == false)
					{
						$this->mMilestonesStandard = '4.nf.b.3.c';
					}	
					else
					{
						$failed_to_pass = true;
					}
					if ($g4_nf_b_3_c == 1 && $failed_to_pass == false)
					{
						$this->mMilestonesStandard = '5.oa.a.1';
					}
					else
					{
						$failed_to_pass = true;
					}
					if ($g5_oa_a_1 == 1 && $failed_to_pass == false)
					{
						$this->mMilestonesStandard = '5.nbt.b.5';
					}
					else
					{
						$failed_to_pass = true;
					}
					if ($g5_nbt_b_5 == 1 && $failed_to_pass == false)
					{
						$this->mMilestonesStandard = '5.nbt.b.6';
					}
					else
					{
						$failed_to_pass = true;
					}
					if ($g5_nbt_b_6 == 1 && $failed_to_pass == false)
					{
						$this->mMilestonesStandard = '5.nbt.b.7';
					}
					else
					{
						$failed_to_pass = true;
					}
					if ($g5_nbt_b_7 == 1 && $failed_to_pass == false)
					{
						$this->mMilestonesStandard = '5.nf.a.1';
					}
					else
					{
						$failed_to_pass = true;
					}
					if ($g5_nf_a_1 == 1 && $failed_to_pass == false)
					{
						$this->mMilestonesStandard = '6.rp.a.1';
					}
					else
					{
						$failed_to_pass = true;
					}

                                        if ($g6_rp == 1 && $failed_to_pass == false)
                                        {
                                                $this->mMilestonesStandard = '6.ns.a.1';
                                        }
                                        else
                                        {
                                                $failed_to_pass = true;
                                        }
                                        
					if ($g6_ns == 1 && $failed_to_pass == false)
                                        {
                                                $this->mMilestonesStandard = '6.ee.a.1';
                                        }
                                        else
                                        {
                                                $failed_to_pass = true;
                                        }
					
					if ($g6_ee == 1 && $failed_to_pass == false)
                                        {
                                                $this->mMilestonesStandard = '6.g.a.1';
                                        }
                                        else
                                        {
                                                $failed_to_pass = true;
                                        }
					
					if ($g6_g == 1 && $failed_to_pass == false)
                                        {
                                                $this->mMilestonesStandard = '6.sp.a.1';
                                        }
                                        else
                                        {
                                                $failed_to_pass = true;
                                        }
					
					if ($g6_sp == 1 && $failed_to_pass == false)
                                        {
                                                $this->mMilestonesStandard = '7.sp.a.1';
                                        }
                                        else
                                        {
                                                $failed_to_pass = true;
                                        }

				}
				else
				{
					$this->mMilestonesStandard = $core_standards_overide_id;
				}

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
				$_SESSION["room_id"] = $this->mRoomID;

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

	$itemTypesRawDataQQA = ""; 
	$itemTypesRawDataQQB = ""; 

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

	$itemTypesRawDataAAG = ""; 
	$itemTypesRawDataAAH = ""; 

	$itemTypesRawDataAAI = ""; 
	$itemTypesRawDataAAJ = ""; 

	$itemTypesRawDataAAK = ""; 
	$itemTypesRawDataAAL = ""; 
	
	$itemTypesRawDataAAM = ""; 
	$itemTypesRawDataAAN = ""; 


	//36 37 38 39 40
	$itemTypesRawDataAAO = ""; 
	$itemTypesRawDataAAP = ""; 
	
	$itemTypesRawDataAAQ = ""; 
	$itemTypesRawDataAAR = ""; 
	
	$itemTypesRawDataAAS = ""; 
	$itemTypesRawDataAAT = ""; 
	
	$itemTypesRawDataAAU = ""; 
	$itemTypesRawDataAAV = ""; 
	
	$itemTypesRawDataAAW = ""; 
	$itemTypesRawDataAAX = ""; 


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

        //Eleven
        for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTypeArrayEleven); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataQQA .= $this->mApplication->mNormal->mItemAttemptsTypeArrayEleven[$i];
                }
                else
                {
                        $itemTypesRawDataQQA .= ":";
                        $itemTypesRawDataQQA .= $this->mApplication->mNormal->mItemAttemptsTypeArrayEleven[$i];
                }
        }

        for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayEleven); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataQQB .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayEleven[$i];
                }
                else
                {
                        $itemTypesRawDataQQB .= ":";
                        $itemTypesRawDataQQB .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayEleven[$i];
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

        //ThirtyTwo
        for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTypeArrayThirtyTwo); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAAG .= $this->mApplication->mNormal->mItemAttemptsTypeArrayThirtyTwo[$i];
                }
                else
                {
                        $itemTypesRawDataAAG .= ":";
                        $itemTypesRawDataAAG .= $this->mApplication->mNormal->mItemAttemptsTypeArrayThirtyTwo[$i];
                }
        }

        for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayThirtyTwo); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAAH .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayThirtyTwo[$i];
                }
                else
                {
                        $itemTypesRawDataAAH .= ":";
                        $itemTypesRawDataAAH .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayThirtyTwo[$i];
                }
        }

        //ThirtyThree
        for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTypeArrayThirtyThree); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAAI .= $this->mApplication->mNormal->mItemAttemptsTypeArrayThirtyThree[$i];
                }
                else
                {
                        $itemTypesRawDataAAI .= ":";
                        $itemTypesRawDataAAI .= $this->mApplication->mNormal->mItemAttemptsTypeArrayThirtyThree[$i];
                }
        }

        for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayThirtyThree); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAAJ .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayThirtyThree[$i];
                }
                else
                {
                        $itemTypesRawDataAAJ .= ":";
                        $itemTypesRawDataAAJ .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayThirtyThree[$i];
                }
        }

        //ThirtyFour
        for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTypeArrayThirtyFour); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAAK .= $this->mApplication->mNormal->mItemAttemptsTypeArrayThirtyFour[$i];
                }
                else
                {
                        $itemTypesRawDataAAK .= ":";
                        $itemTypesRawDataAAK .= $this->mApplication->mNormal->mItemAttemptsTypeArrayThirtyFour[$i];
                }
        }

        for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayThirtyFour); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAAL .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayThirtyFour[$i];
                }
                else
                {
                        $itemTypesRawDataAAL .= ":";
                        $itemTypesRawDataAAL .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayThirtyFour[$i];
                }
        }

        //ThirtyFive
        for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTypeArrayThirtyFive); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAAM .= $this->mApplication->mNormal->mItemAttemptsTypeArrayThirtyFive[$i];
                }
                else
                {
                        $itemTypesRawDataAAM .= ":";
                        $itemTypesRawDataAAM .= $this->mApplication->mNormal->mItemAttemptsTypeArrayThirtyFive[$i];
                }
        }

        for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayThirtyFive); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAAN .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayThirtyFive[$i];
                }
                else
                {
                        $itemTypesRawDataAAN .= ":";
                        $itemTypesRawDataAAN .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayThirtyFive[$i];
                }
        }

        //ThirtySix
        for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTypeArrayThirtySix); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAAO .= $this->mApplication->mNormal->mItemAttemptsTypeArrayThirtySix[$i];
                }
                else
                {
                        $itemTypesRawDataAAO .= ":";
                        $itemTypesRawDataAAO .= $this->mApplication->mNormal->mItemAttemptsTypeArrayThirtySix[$i];
                }
        }

        for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayThirtySix); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAAP .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayThirtySix[$i];
                }
                else
                {
                        $itemTypesRawDataAAP .= ":";
                        $itemTypesRawDataAAP .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayThirtySix[$i];
                }
        }

        //ThirtySeven
        for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTypeArrayThirtySeven); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAAQ .= $this->mApplication->mNormal->mItemAttemptsTypeArrayThirtySeven[$i];
                }
                else
                {
                        $itemTypesRawDataAAQ .= ":";
                        $itemTypesRawDataAAQ .= $this->mApplication->mNormal->mItemAttemptsTypeArrayThirtySeven[$i];
                }
        }

        for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayThirtySeven); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAAR .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayThirtySeven[$i];
                }
                else
                {
                        $itemTypesRawDataAAR .= ":";
                        $itemTypesRawDataAAR .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayThirtySeven[$i];
                }
        }

        //ThirtyEight
        for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTypeArrayThirtyEight); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAAS .= $this->mApplication->mNormal->mItemAttemptsTypeArrayThirtyEight[$i];
                }
                else
                {
                        $itemTypesRawDataAAS .= ":";
                        $itemTypesRawDataAAS .= $this->mApplication->mNormal->mItemAttemptsTypeArrayThirtyEight[$i];
                }
        }

        for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayThirtyEight); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAAT .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayThirtyEight[$i];
                }
                else
                {
                        $itemTypesRawDataAAT .= ":";
                        $itemTypesRawDataAAT .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayThirtyEight[$i];
                }
        }

        //ThirtyNine
        for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTypeArrayThirtyNine); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAAU .= $this->mApplication->mNormal->mItemAttemptsTypeArrayThirtyNine[$i];
                }
                else
                {
                        $itemTypesRawDataAAU .= ":";
                        $itemTypesRawDataAAU .= $this->mApplication->mNormal->mItemAttemptsTypeArrayThirtyNine[$i];
                }
        }

        for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayThirtyNine); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAAV .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayThirtyNine[$i];
                }
                else
                {
                        $itemTypesRawDataAAV .= ":";
                        $itemTypesRawDataAAV .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayThirtyNine[$i];
                }
        }

        //Forty
        for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTypeArrayForty); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAAW .= $this->mApplication->mNormal->mItemAttemptsTypeArrayForty[$i];
                }
                else
                {
                        $itemTypesRawDataAAW .= ":";
                        $itemTypesRawDataAAW .= $this->mApplication->mNormal->mItemAttemptsTypeArrayForty[$i];
                }
        }

        for ($i=0; $i < count($this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayForty); $i++)
        {
                if ($i == 0)
                {
                        $itemTypesRawDataAAX .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayForty[$i];
                }
                else
                {
                        $itemTypesRawDataAAX .= ":";
                        $itemTypesRawDataAAX .= $this->mApplication->mNormal->mItemAttemptsTransactionCodeArrayForty[$i];
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
	$returnString .= $this->mMilestonesStandard;
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

	$returnString .= $itemTypesRawDataQQA;
	$returnString .= ",";
	
	$returnString .= $itemTypesRawDataQQB;
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
	
	$returnString .= $itemTypesRawDataAAG;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAAH;
	$returnString .= ",";

	$returnString .= $itemTypesRawDataAAI;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAAJ;
	$returnString .= ",";
	
	$returnString .= $itemTypesRawDataAAK;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAAL;
	$returnString .= ",";

	$returnString .= $itemTypesRawDataAAM;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAAN;
	$returnString .= ",";
	


	$returnString .= $itemTypesRawDataAAO;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAAP;
	$returnString .= ",";

	$returnString .= $itemTypesRawDataAAQ;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAAR;
	$returnString .= ",";
	
	$returnString .= $itemTypesRawDataAAS;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAAT;
	$returnString .= ",";
	
	$returnString .= $itemTypesRawDataAAU;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAAV;
	$returnString .= ",";

	$returnString .= $itemTypesRawDataAAW;
	$returnString .= ",";
	$returnString .= $itemTypesRawDataAAX;
	$returnString .= ",";


	$returnString .= $this->mApplication->mEvaluationsID;
	//error_log($returnString);
	echo $returnString;
}

}
?>
