<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/login_student.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/application/core_application.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/fsm/state.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/normal.php");


class GLOBAL_CORE_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{

}
public function execute($bapplication)
{
        if ($bapplication->mCode == 114 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mLOGIN_SCHOOL_APPLICATION)
        {
                $bapplication->mCoreStateMachine->changeState($bapplication->mLOGIN_SCHOOL_APPLICATION);
        }
	if ($bapplication->mCode == 117 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mLOGIN_STUDENT_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mLOGIN_STUDENT_APPLICATION);
	}
	if ($bapplication->mCode == 217 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mSIGNUP_STUDENT_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mSIGNUP_STUDENT_APPLICATION);
	}
        if ($bapplication->mCode == 218 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mSIGNUP_SCHOOL_APPLICATION)
        {
                $bapplication->mCoreStateMachine->changeState($bapplication->mSIGNUP_SCHOOL_APPLICATION);
        }
       	if ($bapplication->mCode == 41 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mMAIN_MENU_APPLICATION)
        {
                $bapplication->mCoreStateMachine->changeState($bapplication->mMAIN_MENU_APPLICATION);
	}
	if ($bapplication->mCode == 1 || $bapplication->mCode == 25)
	{
		if ($bapplication->mCoreStateMachine->mCurrentState != $bapplication->mNORMAL_CORE_APPLICATION)
		{
			$bapplication->mCoreStateMachine->changeState($bapplication->mNORMAL_CORE_APPLICATION);
		}
	}
	if ($bapplication->mCode == 2 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mPRACTICE_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mPRACTICE_APPLICATION);
	}

	//K	
/*	
	if ($bapplication->mCode == 25 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mK_CC_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mK_CC_APPLICATION);
	}
*/
	
	if ($bapplication->mCode == 26 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mK_OA_A_4_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mK_OA_A_4_APPLICATION);
	}

	if ($bapplication->mCode == 13 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mK_OA_A_5_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mK_OA_A_5_APPLICATION);
	}


	//1
	
	if ($bapplication->mCode == 29 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mG1_OA_B_3_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mG1_OA_B_3_APPLICATION);
	}
	
	if ($bapplication->mCode == 27 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mG1_OA_C_6_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mG1_OA_C_6_APPLICATION);
	}
	
	if ($bapplication->mCode == 24 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mG1_NBT_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mG1_NBT_APPLICATION);
	}

	//2	
	if ($bapplication->mCode == 28 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mG2_OA_B_2_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mG2_OA_B_2_APPLICATION);
	}
	
	if ($bapplication->mCode == 23 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mG2_NBT_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mG2_NBT_APPLICATION);
	}

	//3
	if ($bapplication->mCode == 12 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mG3_OA_C_7_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mG3_OA_C_7_APPLICATION);
	}
	
	if ($bapplication->mCode == 22 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mG3_NBT_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mG3_NBT_APPLICATION);
	}


	//4
	if ($bapplication->mCode == 11 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mG4_OA_B_4_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mG4_OA_B_4_APPLICATION);
	}
	if ($bapplication->mCode == 14 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mG4_NBT_B_4_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mG4_NBT_B_4_APPLICATION);
	}
	if ($bapplication->mCode == 20 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mG4_NBT_B_5_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mG4_NBT_B_5_APPLICATION);
	}
	if ($bapplication->mCode == 21 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mG4_NBT_B_6_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mG4_NBT_B_6_APPLICATION);
	}
	if ($bapplication->mCode == 30 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mG4_NF_B_3_C_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mG4_NF_B_3_C_APPLICATION);
	}

	//5
	if ($bapplication->mCode == 31 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mG5_OA_A_1_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mG5_OA_A_1_APPLICATION);
	}
	if ($bapplication->mCode == 32 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mG5_NBT_B_5_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mG5_NBT_B_5_APPLICATION);
	}
	if ($bapplication->mCode == 33 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mG5_NBT_B_6_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mG5_NBT_B_6_APPLICATION);
	}
	if ($bapplication->mCode == 34 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mG5_NBT_B_7_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mG5_NBT_B_7_APPLICATION);
	}
	if ($bapplication->mCode == 35 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mG5_NF_A_1_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mG5_NF_A_1_APPLICATION);
	}
	

	//6	
	if ($bapplication->mCode == 36 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mG6_RP_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mG6_RP_APPLICATION);
	}

	if ($bapplication->mCode == 37 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mG6_NS_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mG6_NS_APPLICATION);
	}

	if ($bapplication->mCode == 38 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mG6_EE_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mG6_EE_APPLICATION);
	}

	if ($bapplication->mCode == 39 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mG6_G_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mG6_G_APPLICATION);
	}

	if ($bapplication->mCode == 40 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mG6_SP_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mG6_SP_APPLICATION);
	}



	

	//TABLES

	if ($bapplication->mCode == 3 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mTIMES_TABLES_TWO_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mTIMES_TABLES_TWO_APPLICATION);
	}
	if ($bapplication->mCode == 4 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mTIMES_TABLES_THREE_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mTIMES_TABLES_THREE_APPLICATION);
	}
	if ($bapplication->mCode == 5 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mTIMES_TABLES_FOUR_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mTIMES_TABLES_FOUR_APPLICATION);
	}
	if ($bapplication->mCode == 6 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mTIMES_TABLES_FIVE_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mTIMES_TABLES_FIVE_APPLICATION);
	}
	if ($bapplication->mCode == 7 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mTIMES_TABLES_SIX_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mTIMES_TABLES_SIX_APPLICATION);
	}
	if ($bapplication->mCode == 8 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mTIMES_TABLES_SEVEN_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mTIMES_TABLES_SEVEN_APPLICATION);
	}
	if ($bapplication->mCode == 9 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mTIMES_TABLES_EIGHT_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mTIMES_TABLES_EIGHT_APPLICATION);
	}
	if ($bapplication->mCode == 10 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mTIMES_TABLES_NINE_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mTIMES_TABLES_NINE_APPLICATION);
	}
	if ($bapplication->mCode == 19 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mTIMES_TABLES_THE_SUPER_IZZY_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mTIMES_TABLES_THE_SUPER_IZZY_APPLICATION);
	}


	//TESTS
/*
	if ($bapplication->mCode == 14 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mTERRA_NOVA_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mTERRA_NOVA_APPLICATION);
	}
*/
	if ($bapplication->mCode == 15 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mTEST_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mTEST_APPLICATION);
	}
	if ($bapplication->mCode == 16 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mTERRA_NOVA_TEST_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mTERRA_NOVA_TEST_APPLICATION);
	}
	if ($bapplication->mCode == 17 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mHOMEWORK_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mHOMEWORK_APPLICATION);
	}
	if ($bapplication->mCode == 18 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mTERRA_NOVA_HOMEWORK_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mTERRA_NOVA_HOMEWORK_APPLICATION);
	}
	//add_game_M

}
public function bexit($bapplication)
{

}

}//end class

class INIT_CORE_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
	if ($bapplication->mLogs == true)	
	{
		error_log('INIT_CORE_APPLICATION Enter');
	}
}
public function execute($bapplication)
{
	if ($bapplication->mLogs == true)	
	{
		error_log('INIT_CORE_APPLICATION Execute');
	}
    
	$bapplication->mCoreStateMachine->changeState($bapplication->mWAIT_CORE_APPLICATION);
}
public function bexit($bapplication)
{
	if ($bapplication->mLogs == true)	
	{
		error_log('INIT_CORE_APPLICATION Exit');
	}
}

}//end class

class WAIT_CORE_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('WAIT_CORE_APPLICATION Enter');
        }
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('WAIT_CORE_APPLICATION Execute');
        }
        
}

public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('WAIT_CORE_APPLICATION Exit');
        }
}

}//end class

class LOGIN_SCHOOL_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('LOGIN_SCHOOL_APPLICATION Enter');
        }
	$bapplication->mLoginSchool->process();	
	$bapplication->update();
}
public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('LOGIN_SCHOOL_APPLICATION Execute');
        }

	if ($bapplication->mLoginSchool->mLoggedIn == 1)
	{
		$bapplication->mLoginSchool->sendLoginSchool();
    		$bapplication->mCoreStateMachine->changeState($bapplication->mWAIT_CORE_APPLICATION);
	}	
	else
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mLOGIN_SCHOOL_APPLICATION);
	}
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('LOGIN_SCHOOL_APPLICATION Exit');
        }
	$bapplication->mCode = 0;
}

}//end class


class LOGIN_STUDENT_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('LOGIN_STUDENT_APPLICATION Enter');
        }
	$bapplication->mLoginStudent->process();	
	$bapplication->update();
}
public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('LOGIN_STUDENT_APPLICATION Execute');
        }

	if ($bapplication->mLoginStudent->mLoggedIn == 1)
	{
		$bapplication->mNormal->fillTypesArray(); //fill types
		$bapplication->mNormal->fillItemAttemptsArray(); //fill item Attempts types
		$bapplication->mLoginStudent->sendLoginStudent();
			
		$bapplication->mCoreStateMachine->changeState($bapplication->mWAIT_GAME_APPLICATION);
	}	
	else
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mWAIT_CORE_APPLICATION);
	}

}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('LOGIN_STUDENT_APPLICATION Exit');
        }
	$bapplication->mCode = 0;

}

}//end class

class SIGNUP_SCHOOL_APPLICATION extends State
{
function __construct()
{
}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('SIGNUP_SCHOOL_APPLICATION Enter');
        }
	$bapplication->mSignupSchool->process();	
	$bapplication->update();
}
public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('SIGNUP_SCHOOL_APPLICATION Execute');
        }

	if ($bapplication->mSignupSchool->mSignedUp == 1)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mLOGIN_SCHOOL_APPLICATION);
	}	
	else
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mWAIT_CORE_APPLICATION);
	}
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('SIGNUP_SCHOOL_APPLICATION Exit');
        }
	$bapplication->mCode = 0;
}
}//end class

class SIGNUP_STUDENT_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('SIGNUP_STUDENT_APPLICATION Enter');
        }
	$bapplication->mSignupStudent->process();	
	$bapplication->update();
}
public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('SIGNUP_STUDENT_APPLICATION Execute');
        }

	if ($bapplication->mSignupStudent->mSignedUp == 1)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mLOGIN_STUDENT_APPLICATION);
	}	
	else
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mWAIT_CORE_APPLICATION);
	}

}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('SIGNUP_STUDENT_APPLICATION Exit');
        }
	$bapplication->mCode = 0;
}

}//end class

class WAIT_GAME_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('WAIT_GAME_APPLICATION Enter');
        }
	$bapplication->update();
}
public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('WAIT_GAME_APPLICATION Execute');
        }
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('WAIT_GAME_APPLICATION Exit');
        }
}

}//end class

class MAIN_MENU_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('MAIN_MENU_APPLICATION Enter');
        }

	//run oncec
	if ($bapplication->run_once == false)
	{
		include_once(getenv("DOCUMENT_ROOT") . "/web/php/milestones.php");
		$bapplication->run_once = true;
	}

	$bapplication->update();		
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('MAIN_MENU_APPLICATION Execute');
        }
	if ($bapplication->mCode == 41)
	{
		$bapplication->mCode = 0;
	}
	if ($bapplication->mCode == 101) //universal update
	{
	}
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('MAIN_MENU_APPLICATION Exit');
        }
}

}//end class


class NORMAL_CORE_APPLICATION extends State
{

function __construct()
{

}
public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('NORMAL_CORE_APPLICATION Enter');
        }

        $evaluationsAttempt = new EvaluationsAttempts($bapplication,$bapplication->mEvaluationsID,$bapplication->mDataArray[4]);
	$bapplication->mEvaluationsAttemptsArray[] = $evaluationsAttempt;

	//pointer to current evaluationsAttempt
	$bapplication->mEvaluationsAttempt = $evaluationsAttempt;

	$bapplication->update();		
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('NORMAL_CORE_APPLICATION Execute');
        }
	$txt = "mCode:";
	$txt .= $bapplication->mCode;	
	error_log($txt);

	if ($bapplication->mCode == 1)
	{
		if ( $bapplication->mEvaluationsAttempt)
		{	
			$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
			$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
        		$bapplication->mNormal->updateScores($bapplication->mDataArray[5],'score');
        		$bapplication->mNormal->updateScores($bapplication->mDataArray[6],'unmastered');
		}

		//so we could insert a match and have players associated etc but..
		//to get score without too much trouble we could handle here.

		$bapplication->mCode = 0;
	}


        //if ($bapplication->mCode > 1 && $bapplication->mCode < 44 || $bapplication->mCode > 1000)
        if ($bapplication->mCode == 25)
        {
                $itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
                $bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
                $bapplication->mCode = 0;
        
	}

	if ($bapplication->mCode == 101) //universal update
	{
		if ($bapplication->mEvaluationsID == 1)
		{
			if ($bapplication)
			{
				if ($bapplication->mEvaluationsAttempt)
				{
					if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray)
					{
						for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
						{		 
							if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
							{ 	 
								$bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
        							$bapplication->mNormal->updateStandard($bapplication->mDataArray[4],'core_standards_id');
							}
						}
					}
				}
				$bapplication->mCode = 0;
			}
		}
        
		//if ($bapplication->mCode > 1 && $bapplication->mCode < 44 || $bapplication->mCode > 1000)
		//if ($bapplication->mCode == 25)
		if ($bapplication->mEvaluationsID == 25)
		{
			error_log("AAA");
			//other
                	for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
                	{
                        	if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
                        	{
					error_log("BBB");
                                	$bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
                                	//score
                                	if ($bapplication->mDataArray[2] == 1)
                                	{
						error_log("CCC");
                                        	$bapplication->mEvaluationsAttempt->mScore++;
                                	}
                        	}
                	}
                	$bapplication->mCode = 0;
		}
	}
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('NORMAL_CORE_APPLICATION Exit');
        }
}

}//end class




class PRACTICE_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('PRACTICE_APPLICATION Enter');
        }
        $evaluationsAttempt = new EvaluationsAttempts($bapplication,2,$bapplication->mDataArray[4]);
	$bapplication->mEvaluationsAttemptsArray[] = $evaluationsAttempt;

	//pointer to current evaluationsAttempt
	$bapplication->mEvaluationsAttempt = $evaluationsAttempt;

	$bapplication->update();		
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('PRACTICE_APPLICATION Execute');
        }
	if ($bapplication->mCode == 2)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
		$bapplication->mCode = 0;
	}
	if ($bapplication->mCode == 101) //universal update
	{
		for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
		{ 
			if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
			{  
				$bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
			}
		}
		$bapplication->mCode = 0;
	}
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('PRACTICE_APPLICATION Exit');
        }
}

}//end class

//K

class K_CC_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('K_CC_APPLICATION Enter');
        }

        $evaluationsAttempt = new EvaluationsAttempts($bapplication,25,$bapplication->mDataArray[4]);
	$bapplication->mEvaluationsAttemptsArray[] = $evaluationsAttempt;

	//pointer to current evaluationsAttempt
	$bapplication->mEvaluationsAttempt = $evaluationsAttempt;

	$bapplication->update();		
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('K_CC_APPLICATION Execute');
        }
	if ($bapplication->mCode == 25)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
		$bapplication->mCode = 0;
	}
	if ($bapplication->mCode == 101) //universal update
	{
		for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
		{ 
			if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
			{  
				$bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
				//score	
				if ($bapplication->mDataArray[2] == 1)
				{
					$bapplication->mEvaluationsAttempt->mScore++;
				}
			}
		}
		$bapplication->mCode = 0;
	}
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('K_CC_APPLICATION Exit');
        }
}

}//end class

class K_OA_A_4_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('K_OA_A_4_APPLICATION Enter');
        }

        $evaluationsAttempt = new EvaluationsAttempts($bapplication,26,$bapplication->mDataArray[4]);
	$bapplication->mEvaluationsAttemptsArray[] = $evaluationsAttempt;

	//pointer to current evaluationsAttempt
	$bapplication->mEvaluationsAttempt = $evaluationsAttempt;

	$bapplication->update();		
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('K_OA_A_4_APPLICATION Execute');
        }
	if ($bapplication->mCode == 26)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
		$bapplication->mCode = 0;
	}
	if ($bapplication->mCode == 101) //universal update
	{
		for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
		{ 
			if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
			{  
				$bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
				//score	
				if ($bapplication->mDataArray[2] == 1)
				{
					$bapplication->mEvaluationsAttempt->mScore++;
				}
			}
		}
		$bapplication->mCode = 0;
	}
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('K_OA_A_4_APPLICATION Exit');
        }
}

}//end class

class K_OA_A_5_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('K_OA_A_5_APPLICATION Enter');
        }

        $evaluationsAttempt = new EvaluationsAttempts($bapplication,13,$bapplication->mDataArray[4]);
	$bapplication->mEvaluationsAttemptsArray[] = $evaluationsAttempt;

	//pointer to current evaluationsAttempt
	$bapplication->mEvaluationsAttempt = $evaluationsAttempt;

	$bapplication->update();		
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('K_OA_A_5_APPLICATION Execute');
        }
	if ($bapplication->mCode == 13)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
		$bapplication->mCode = 0;
	}
	if ($bapplication->mCode == 101) //universal update
	{
		for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
		{ 
			if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
			{  
				$bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
				//score	
				if ($bapplication->mDataArray[2] == 1)
				{
					$bapplication->mEvaluationsAttempt->mScore++;
				}
			}
		}
		$bapplication->mCode = 0;
	}
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('K_OA_A_5_APPLICATION Exit');
        }
}

}//end class

//1

class G1_OA_B_3_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G1_OA_B_3_APPLICATION Enter');
        }

        $evaluationsAttempt = new EvaluationsAttempts($bapplication,29,$bapplication->mDataArray[4]);
	$bapplication->mEvaluationsAttemptsArray[] = $evaluationsAttempt;

	//pointer to current evaluationsAttempt
	$bapplication->mEvaluationsAttempt = $evaluationsAttempt;

	$bapplication->update();		
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G1_OA_B_3_APPLICATION Execute');
        }
	if ($bapplication->mCode == 29)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
		$bapplication->mCode = 0;
	}
	if ($bapplication->mCode == 101) //universal update
	{
		for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
		{ 
			if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
			{  
				$bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
				//score	
				if ($bapplication->mDataArray[2] == 1)
				{
					$bapplication->mEvaluationsAttempt->mScore++;
				}
			}
		}
		$bapplication->mCode = 0;
	}
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G1_OA_B_3_APPLICATION Exit');
        }
}

}//end class


class G1_OA_C_6_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G1_OA_C_6_APPLICATION Enter');
        }

        $evaluationsAttempt = new EvaluationsAttempts($bapplication,27,$bapplication->mDataArray[4]);
	$bapplication->mEvaluationsAttemptsArray[] = $evaluationsAttempt;

	//pointer to current evaluationsAttempt
	$bapplication->mEvaluationsAttempt = $evaluationsAttempt;

	$bapplication->update();		
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G1_OA_C_6_APPLICATION Execute');
        }
	if ($bapplication->mCode == 27)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
		$bapplication->mCode = 0;
	}
	if ($bapplication->mCode == 101) //universal update
	{
		for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
		{ 
			if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
			{  
				$bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
				//score	
				if ($bapplication->mDataArray[2] == 1)
				{
					$bapplication->mEvaluationsAttempt->mScore++;
				}
			}
		}
		$bapplication->mCode = 0;
	}
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G1_OA_C_6_APPLICATION Exit');
        }
}

}//end class


class G1_NBT_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G1_NBT_APPLICATION Enter');
        }

        $evaluationsAttempt = new EvaluationsAttempts($bapplication,24,$bapplication->mDataArray[4]);
	$bapplication->mEvaluationsAttemptsArray[] = $evaluationsAttempt;

	//pointer to current evaluationsAttempt
	$bapplication->mEvaluationsAttempt = $evaluationsAttempt;

	$bapplication->update();		
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G1_NBT_APPLICATION Execute');
        }
	if ($bapplication->mCode == 24)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
		$bapplication->mCode = 0;
	}
	if ($bapplication->mCode == 101) //universal update
	{
		for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
		{ 
			if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
			{  
				$bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
				//score	
				if ($bapplication->mDataArray[2] == 1)
				{
					$bapplication->mEvaluationsAttempt->mScore++;
				}
			}
		}
		$bapplication->mCode = 0;
	}
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G1_NBT_APPLICATION Exit');
        }
}

}//end class


//2
class G2_OA_B_2_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G2_OA_B_2_APPLICATION Enter');
        }

        $evaluationsAttempt = new EvaluationsAttempts($bapplication,28,$bapplication->mDataArray[4]);
	$bapplication->mEvaluationsAttemptsArray[] = $evaluationsAttempt;

	//pointer to current evaluationsAttempt
	$bapplication->mEvaluationsAttempt = $evaluationsAttempt;

	$bapplication->update();		
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G2_OA_B_2_APPLICATION Execute');
        }
	if ($bapplication->mCode == 28)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
		$bapplication->mCode = 0;
	}
	if ($bapplication->mCode == 101) //universal update
	{
		for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
		{ 
			if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
			{  
				$bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
				//score	
				if ($bapplication->mDataArray[2] == 1)
				{
					$bapplication->mEvaluationsAttempt->mScore++;
				}
			}
		}
		$bapplication->mCode = 0;
	}
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G2_OA_B_2_APPLICATION Exit');
        }
}

}//end class


class G2_NBT_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G2_NBT_APPLICATION Enter');
        }

        $evaluationsAttempt = new EvaluationsAttempts($bapplication,23,$bapplication->mDataArray[4]);
	$bapplication->mEvaluationsAttemptsArray[] = $evaluationsAttempt;

	//pointer to current evaluationsAttempt
	$bapplication->mEvaluationsAttempt = $evaluationsAttempt;

	$bapplication->update();		
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G2_NBT_APPLICATION Execute');
        }
	if ($bapplication->mCode == 23)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
		$bapplication->mCode = 0;
	}
	if ($bapplication->mCode == 101) //universal update
	{
		for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
		{ 
			if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
			{  
				$bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
				//score	
				if ($bapplication->mDataArray[2] == 1)
				{
					$bapplication->mEvaluationsAttempt->mScore++;
				}
			}
		}
		$bapplication->mCode = 0;
	}
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G2_NBT_APPLICATION Exit');
        }
}

}//end class


//3
class G3_OA_C_7_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G3_OA_C_7_APPLICATION Enter');
        }

        $evaluationsAttempt = new EvaluationsAttempts($bapplication,12,$bapplication->mDataArray[4]);
	$bapplication->mEvaluationsAttemptsArray[] = $evaluationsAttempt;

	//pointer to current evaluationsAttempt
	$bapplication->mEvaluationsAttempt = $evaluationsAttempt;

	$bapplication->update();		
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G3_OA_C_7_APPLICATION Execute');
        }
	if ($bapplication->mCode == 12)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
		$bapplication->mCode = 0;
	}
	if ($bapplication->mCode == 101) //universal update
	{
		for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
		{ 
			if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
			{  
				$bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
				//score	
				if ($bapplication->mDataArray[2] == 1)
				{
					$bapplication->mEvaluationsAttempt->mScore++;
				}
			}
		}
		$bapplication->mCode = 0;
	}
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G3_OA_C_7_APPLICATION Exit');
        }
}

}//end class

class G3_NBT_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G3_NBT_APPLICATION Enter');
        }

        $evaluationsAttempt = new EvaluationsAttempts($bapplication,22,$bapplication->mDataArray[4]);
	$bapplication->mEvaluationsAttemptsArray[] = $evaluationsAttempt;

	//pointer to current evaluationsAttempt
	$bapplication->mEvaluationsAttempt = $evaluationsAttempt;

	$bapplication->update();		
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G3_NBT_APPLICATION Execute');
        }
	if ($bapplication->mCode == 22)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
		$bapplication->mCode = 0;
	}
	if ($bapplication->mCode == 101) //universal update
	{
		for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
		{ 
			if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
			{  
				$bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
				//score	
				if ($bapplication->mDataArray[2] == 1)
				{
					$bapplication->mEvaluationsAttempt->mScore++;
				}
			}
		}
		$bapplication->mCode = 0;
	}
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G3_NBT_APPLICATION Exit');
        }
}

}//end class




//4
class G4_OA_B_4_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G4_OA_B_4_APPLICATION Enter');
        }

        $evaluationsAttempt = new EvaluationsAttempts($bapplication,11,$bapplication->mDataArray[4]);
	$bapplication->mEvaluationsAttemptsArray[] = $evaluationsAttempt;

	//pointer to current evaluationsAttempt
	$bapplication->mEvaluationsAttempt = $evaluationsAttempt;

	$bapplication->update();		
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G4_OA_B_4_APPLICATION Execute');
        }
	if ($bapplication->mCode == 11)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
		$bapplication->mCode = 0;
	}
	if ($bapplication->mCode == 101) //universal update
	{
		for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
		{ 
			if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
			{  
				$bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
				//score	
				if ($bapplication->mDataArray[2] == 1)
				{
					$bapplication->mEvaluationsAttempt->mScore++;
				}
			}
		}
		$bapplication->mCode = 0;
	}
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G4_OA_B_4_APPLICATION Exit');
        }
}

}//end class

class G4_NBT_B_4_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G4_NBT_B_4_APPLICATION Enter');
        }

        $evaluationsAttempt = new EvaluationsAttempts($bapplication,14,$bapplication->mDataArray[4]);
	$bapplication->mEvaluationsAttemptsArray[] = $evaluationsAttempt;

	//pointer to current evaluationsAttempt
	$bapplication->mEvaluationsAttempt = $evaluationsAttempt;

	$bapplication->update();		
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G4_NBT_B_4_APPLICATION Execute');
        }
	if ($bapplication->mCode == 14)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
		$bapplication->mCode = 0;
	}
	if ($bapplication->mCode == 101) //universal update
	{
		for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
		{ 
			if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
			{  
				$bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
				//score	
				if ($bapplication->mDataArray[2] == 1)
				{
					$bapplication->mEvaluationsAttempt->mScore++;
				}
			}
		}
		$bapplication->mCode = 0;
	}
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G4_NBT_B_4_APPLICATION Exit');
        }
}

}//end class

class G4_NBT_B_5_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G4_NBT_B_5_APPLICATION Enter');
        }

        $evaluationsAttempt = new EvaluationsAttempts($bapplication,20,$bapplication->mDataArray[4]);
	$bapplication->mEvaluationsAttemptsArray[] = $evaluationsAttempt;

	//pointer to current evaluationsAttempt
	$bapplication->mEvaluationsAttempt = $evaluationsAttempt;

	$bapplication->update();		
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G4_NBT_B_5_APPLICATION Execute');
        }
	if ($bapplication->mCode == 20)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
		$bapplication->mCode = 0;
	}
	if ($bapplication->mCode == 101) //universal update
	{
		for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
		{ 
			if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
			{  
				$bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
				//score	
				if ($bapplication->mDataArray[2] == 1)
				{
					$bapplication->mEvaluationsAttempt->mScore++;
				}
			}
		}
		$bapplication->mCode = 0;
	}
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G4_NBT_B_5_APPLICATION Exit');
        }
}

}//end class

class G4_NBT_B_6_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G4_NBT_B_6_APPLICATION Enter');
        }

        $evaluationsAttempt = new EvaluationsAttempts($bapplication,21,$bapplication->mDataArray[4]);
	$bapplication->mEvaluationsAttemptsArray[] = $evaluationsAttempt;

	//pointer to current evaluationsAttempt
	$bapplication->mEvaluationsAttempt = $evaluationsAttempt;

	$bapplication->update();		
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G4_NBT_B_6_APPLICATION Execute');
        }
	if ($bapplication->mCode == 21)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
		$bapplication->mCode = 0;
	}
	if ($bapplication->mCode == 101) //universal update
	{
		for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
		{ 
			if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
			{  
				$bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
				//score	
				if ($bapplication->mDataArray[2] == 1)
				{
					$bapplication->mEvaluationsAttempt->mScore++;
				}
			}
		}
		$bapplication->mCode = 0;
	}
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G4_NBT_B_6_APPLICATION Exit');
        }
}

}//end class

class G4_NF_B_3_C_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G4_NF_B_3_C_APPLICATION Enter');
        }

        $evaluationsAttempt = new EvaluationsAttempts($bapplication,30,$bapplication->mDataArray[4]);
	$bapplication->mEvaluationsAttemptsArray[] = $evaluationsAttempt;

	//pointer to current evaluationsAttempt
	$bapplication->mEvaluationsAttempt = $evaluationsAttempt;

	$bapplication->update();		
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G4_NF_B_3_C_APPLICATION Execute');
        }
	if ($bapplication->mCode == 30)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
		$bapplication->mCode = 0;
	}
	if ($bapplication->mCode == 101) //universal update
	{
		for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
		{ 
			if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
			{  
				$bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
				//score	
				if ($bapplication->mDataArray[2] == 1)
				{
					$bapplication->mEvaluationsAttempt->mScore++;
				}
			}
		}
		$bapplication->mCode = 0;
	}
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G4_NF_B_3_C_APPLICATION Exit');
        }
}

}//end class

//5
class G5_OA_A_1_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G5_OA_A_1_APPLICATION Enter');
        }

        $evaluationsAttempt = new EvaluationsAttempts($bapplication,31,$bapplication->mDataArray[4]);
	$bapplication->mEvaluationsAttemptsArray[] = $evaluationsAttempt;

	//pointer to current evaluationsAttempt
	$bapplication->mEvaluationsAttempt = $evaluationsAttempt;

	$bapplication->update();		
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G5_OA_A_1_APPLICATION Execute');
        }
	if ($bapplication->mCode == 31)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
		$bapplication->mCode = 0;
	}
	if ($bapplication->mCode == 101) //universal update
	{
		for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
		{ 
			if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
			{  
				$bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
				//score	
				if ($bapplication->mDataArray[2] == 1)
				{
					$bapplication->mEvaluationsAttempt->mScore++;
				}
			}
		}
		$bapplication->mCode = 0;
	}
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G5_OA_A_1_APPLICATION Exit');
        }
}

}//end class

class G5_NBT_B_5_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G5_NBT_B_5_APPLICATION Enter');
        }

        $evaluationsAttempt = new EvaluationsAttempts($bapplication,32,$bapplication->mDataArray[4]);
	$bapplication->mEvaluationsAttemptsArray[] = $evaluationsAttempt;

	//pointer to current evaluationsAttempt
	$bapplication->mEvaluationsAttempt = $evaluationsAttempt;

	$bapplication->update();		
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G5_NBT_B_5_APPLICATION Execute');
        }
	if ($bapplication->mCode == 32)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
		$bapplication->mCode = 0;
	}
	if ($bapplication->mCode == 101) //universal update
	{
		for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
		{ 
			if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
			{  
				$bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
				//score	
				if ($bapplication->mDataArray[2] == 1)
				{
					$bapplication->mEvaluationsAttempt->mScore++;
				}
			}
		}
		$bapplication->mCode = 0;
	}
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G5_NBT_B_5_APPLICATION Exit');
        }
}

}//end class

class G5_NBT_B_6_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G5_NBT_B_6_APPLICATION Enter');
        }

        $evaluationsAttempt = new EvaluationsAttempts($bapplication,33,$bapplication->mDataArray[4]);
	$bapplication->mEvaluationsAttemptsArray[] = $evaluationsAttempt;

	//pointer to current evaluationsAttempt
	$bapplication->mEvaluationsAttempt = $evaluationsAttempt;

	$bapplication->update();		
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G5_NBT_B_6_APPLICATION Execute');
        }
	if ($bapplication->mCode == 33)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
		$bapplication->mCode = 0;
	}
	if ($bapplication->mCode == 101) //universal update
	{
		for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
		{ 
			if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
			{  
				$bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
				//score	
				if ($bapplication->mDataArray[2] == 1)
				{
					$bapplication->mEvaluationsAttempt->mScore++;
				}
			}
		}
		$bapplication->mCode = 0;
	}
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G5_NBT_B_6_APPLICATION Exit');
        }

	//call  
	//error_log('calling milestones');
	include_once(getenv("DOCUMENT_ROOT") . "/web/php/milestones.php");
}

}//end class


class G5_NBT_B_7_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G5_NBT_B_7_APPLICATION Enter');
        }

        $evaluationsAttempt = new EvaluationsAttempts($bapplication,34,$bapplication->mDataArray[4]);
	$bapplication->mEvaluationsAttemptsArray[] = $evaluationsAttempt;

	//pointer to current evaluationsAttempt
	$bapplication->mEvaluationsAttempt = $evaluationsAttempt;

	$bapplication->update();		
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G5_NBT_B_7_APPLICATION Execute');
        }
	if ($bapplication->mCode == 34)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
		$bapplication->mCode = 0;
	}
	if ($bapplication->mCode == 101) //universal update
	{
		for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
		{ 
			if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
			{  
				$bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
				//score	
				if ($bapplication->mDataArray[2] == 1)
				{
					$bapplication->mEvaluationsAttempt->mScore++;
				}
			}
		}
		$bapplication->mCode = 0;
	}
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G5_NBT_B_7_APPLICATION Exit');
        }
}

}//end class


class G5_NF_A_1_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G5_NF_A_1_APPLICATION Enter');
        }

        $evaluationsAttempt = new EvaluationsAttempts($bapplication,35,$bapplication->mDataArray[4]);
	$bapplication->mEvaluationsAttemptsArray[] = $evaluationsAttempt;

	//pointer to current evaluationsAttempt
	$bapplication->mEvaluationsAttempt = $evaluationsAttempt;

	$bapplication->update();		
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G5_NF_A_1_APPLICATION Execute');
        }
	if ($bapplication->mCode == 35)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
		$bapplication->mCode = 0;
	}
	if ($bapplication->mCode == 101) //universal update
	{
		for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
		{ 
			if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
			{  
				$bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
				//score	
				if ($bapplication->mDataArray[2] == 1)
				{
					$bapplication->mEvaluationsAttempt->mScore++;
				}
			}
		}
		$bapplication->mCode = 0;
	}
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G5_NF_A_1_APPLICATION Exit');
        }
}
}//end class

//6
class G6_RP_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G6_RP_APPLICATION Enter');
        }

        $evaluationsAttempt = new EvaluationsAttempts($bapplication,36,$bapplication->mDataArray[4]);
	$bapplication->mEvaluationsAttemptsArray[] = $evaluationsAttempt;

	//pointer to current evaluationsAttempt
	$bapplication->mEvaluationsAttempt = $evaluationsAttempt;

	$bapplication->update();		
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G6_RP_APPLICATION Execute');
        }
	if ($bapplication->mCode == 36)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
		$bapplication->mCode = 0;
	}
	if ($bapplication->mCode == 101) //universal update
	{
		for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
		{ 
			if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
			{  
				$bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
				//score	
				if ($bapplication->mDataArray[2] == 1)
				{
					$bapplication->mEvaluationsAttempt->mScore++;
				}
			}
		}
		$bapplication->mCode = 0;
	}
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G6_RP_APPLICATION Exit');
        }
}
}//end class


class G6_NS_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G6_NS_APPLICATION Enter');
        }

        $evaluationsAttempt = new EvaluationsAttempts($bapplication,37,$bapplication->mDataArray[4]);
	$bapplication->mEvaluationsAttemptsArray[] = $evaluationsAttempt;

	//pointer to current evaluationsAttempt
	$bapplication->mEvaluationsAttempt = $evaluationsAttempt;

	$bapplication->update();		
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G6_NS_APPLICATION Execute');
        }
	if ($bapplication->mCode == 37)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
		$bapplication->mCode = 0;
	}
	if ($bapplication->mCode == 101) //universal update
	{
		for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
		{ 
			if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
			{  
				$bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
				//score	
				if ($bapplication->mDataArray[2] == 1)
				{
					$bapplication->mEvaluationsAttempt->mScore++;
				}
			}
		}
		$bapplication->mCode = 0;
	}
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G6_RP_APPLICATION Exit');
        }
}
}//end class


class G6_EE_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G6_EE_APPLICATION Enter');
        }

        $evaluationsAttempt = new EvaluationsAttempts($bapplication,38,$bapplication->mDataArray[4]);
	$bapplication->mEvaluationsAttemptsArray[] = $evaluationsAttempt;

	//pointer to current evaluationsAttempt
	$bapplication->mEvaluationsAttempt = $evaluationsAttempt;

	$bapplication->update();		
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G6_EE_APPLICATION Execute');
        }
	if ($bapplication->mCode == 38)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
		$bapplication->mCode = 0;
	}
	if ($bapplication->mCode == 101) //universal update
	{
		for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
		{ 
			if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
			{  
				$bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
				//score	
				if ($bapplication->mDataArray[2] == 1)
				{
					$bapplication->mEvaluationsAttempt->mScore++;
				}
			}
		}
		$bapplication->mCode = 0;
	}
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G6_EE_APPLICATION Exit');
        }
}
}//end class


class G6_G_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G6_G_APPLICATION Enter');
        }

        $evaluationsAttempt = new EvaluationsAttempts($bapplication,39,$bapplication->mDataArray[4]);
	$bapplication->mEvaluationsAttemptsArray[] = $evaluationsAttempt;

	//pointer to current evaluationsAttempt
	$bapplication->mEvaluationsAttempt = $evaluationsAttempt;

	$bapplication->update();		
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G6_G_APPLICATION Execute');
        }
	if ($bapplication->mCode == 39)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
		$bapplication->mCode = 0;
	}
	if ($bapplication->mCode == 101) //universal update
	{
		for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
		{ 
			if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
			{  
				$bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
				//score	
				if ($bapplication->mDataArray[2] == 1)
				{
					$bapplication->mEvaluationsAttempt->mScore++;
				}
			}
		}
		$bapplication->mCode = 0;
	}
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G6_G_APPLICATION Exit');
        }
}
}//end class

class G6_SP_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G6_SP_APPLICATION Enter');
        }

        $evaluationsAttempt = new EvaluationsAttempts($bapplication,40,$bapplication->mDataArray[4]);
	$bapplication->mEvaluationsAttemptsArray[] = $evaluationsAttempt;

	//pointer to current evaluationsAttempt
	$bapplication->mEvaluationsAttempt = $evaluationsAttempt;

	$bapplication->update();		
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G6_SP_APPLICATION Execute');
        }
	if ($bapplication->mCode == 40)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
		$bapplication->mCode = 0;
	}
	if ($bapplication->mCode == 101) //universal update
	{
		for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
		{ 
			if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
			{  
				$bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
				//score	
				if ($bapplication->mDataArray[2] == 1)
				{
					$bapplication->mEvaluationsAttempt->mScore++;
				}
			}
		}
		$bapplication->mCode = 0;
	}
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('G6_SP_APPLICATION Exit');
        }
}
}//end class


//TABLES
class TIMES_TABLES_FIVE_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('TIMES_TABLES_FIVE_APPLICATION Enter');
        }

       	$evaluationsAttempt = new EvaluationsAttempts($bapplication,6,$bapplication->mDataArray[4]);
        $bapplication->mEvaluationsAttemptsArray[] = $evaluationsAttempt;

        //pointer to current evaluationsAttempt
        $bapplication->mEvaluationsAttempt = $evaluationsAttempt;

        $bapplication->update();
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('TIMES_TABLES_FIVE_APPLICATION Execute');
        }

        if ($bapplication->mCode == 6)
        {
                $itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
                $bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
                $bapplication->mCode = 0;
        }
        if ($bapplication->mCode == 101) //universal update
        {
                for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
                {
                        if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
                        {
                                $bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
                                //score
                                if ($bapplication->mDataArray[2] == 1)
                                {
                                        $bapplication->mEvaluationsAttempt->mScore++;
                                }
                        }
                }
                $bapplication->mCode = 0;
        }
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('TIMES_TABLES_FIVE_APPLICATION Exit');
        }
}

}//end class

class TIMES_TABLES_TWO_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('TIMES_TABLES_TWO_APPLICATION Enter');
        }

       	$evaluationsAttempt = new EvaluationsAttempts($bapplication,3,$bapplication->mDataArray[4]);
        $bapplication->mEvaluationsAttemptsArray[] = $evaluationsAttempt;

        //pointer to current evaluationsAttempt
        $bapplication->mEvaluationsAttempt = $evaluationsAttempt;

        $bapplication->update();
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('TIMES_TABLES_TWO_APPLICATION Execute');
        }

        if ($bapplication->mCode == 3)
        {
                $itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
                $bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
                $bapplication->mCode = 0;
        }
        if ($bapplication->mCode == 101) //universal update
        {
                for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
                {
                        if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
                        {
                                $bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
                                //score
                                if ($bapplication->mDataArray[2] == 1)
                                {
                                        $bapplication->mEvaluationsAttempt->mScore++;
                                }
                        }
                }
                $bapplication->mCode = 0;
        }
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('TIMES_TABLES_TWO_APPLICATION Exit');
        }
}

}//end class

class TIMES_TABLES_FOUR_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('TIMES_TABLES_FOUR_APPLICATION Enter');
        }

       	$evaluationsAttempt = new EvaluationsAttempts($bapplication,5,$bapplication->mDataArray[4]);
        $bapplication->mEvaluationsAttemptsArray[] = $evaluationsAttempt;

        //pointer to current evaluationsAttempt
        $bapplication->mEvaluationsAttempt = $evaluationsAttempt;

        $bapplication->update();
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('TIMES_TABLES_FOUR_APPLICATION Execute');
        }

        if ($bapplication->mCode == 5)
        {
                $itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
                $bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
                $bapplication->mCode = 0;
        }
        if ($bapplication->mCode == 101) //universal update
        {
                for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
                {
                        if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
                        {
                                $bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
                                //score
                                if ($bapplication->mDataArray[2] == 1)
                                {
                                        $bapplication->mEvaluationsAttempt->mScore++;
                                }
                        }
                }
                $bapplication->mCode = 0;
        }
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('TIMES_TABLES_FOUR_APPLICATION Exit');
        }
}

}//end class

class TIMES_TABLES_EIGHT_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('TIMES_TABLES_EIGHT_APPLICATION Enter');
        }

       	$evaluationsAttempt = new EvaluationsAttempts($bapplication,9,$bapplication->mDataArray[4]);
        $bapplication->mEvaluationsAttemptsArray[] = $evaluationsAttempt;

        //pointer to current evaluationsAttempt
        $bapplication->mEvaluationsAttempt = $evaluationsAttempt;

        $bapplication->update();
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('TIMES_TABLES_EIGHT_APPLICATION Execute');
        }

        if ($bapplication->mCode == 9)
        {
                $itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
                $bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
                $bapplication->mCode = 0;
        }
        if ($bapplication->mCode == 101) //universal update
        {
                for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
                {
                        if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
                        {
                                $bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
                                //score
                                if ($bapplication->mDataArray[2] == 1)
                                {
                                        $bapplication->mEvaluationsAttempt->mScore++;
                                }
                        }
                }
                $bapplication->mCode = 0;
        }
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('TIMES_TABLES_EIGHT_APPLICATION Exit');
        }
}

}//end class

class TIMES_TABLES_THREE_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('TIMES_TABLES_THREE_APPLICATION Enter');
        }

       	$evaluationsAttempt = new EvaluationsAttempts($bapplication,4,$bapplication->mDataArray[4]);
        $bapplication->mEvaluationsAttemptsArray[] = $evaluationsAttempt;

        //pointer to current evaluationsAttempt
        $bapplication->mEvaluationsAttempt = $evaluationsAttempt;

        $bapplication->update();
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('TIMES_TABLES_THREE_APPLICATION Execute');
        }

        if ($bapplication->mCode == 4)
        {
                $itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
                $bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
                $bapplication->mCode = 0;
        }
        if ($bapplication->mCode == 101) //universal update
        {
                for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
                {
                        if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
                        {
                                $bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
                                //score
                                if ($bapplication->mDataArray[2] == 1)
                                {
                                        $bapplication->mEvaluationsAttempt->mScore++;
                                }
                        }
                }
                $bapplication->mCode = 0;
        }
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('TIMES_TABLES_THREE_APPLICATION Exit');
        }
}

}//end class

class TIMES_TABLES_SIX_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('TIMES_TABLES_SIX_APPLICATION Enter');
        }

       	$evaluationsAttempt = new EvaluationsAttempts($bapplication,7,$bapplication->mDataArray[4]);
        $bapplication->mEvaluationsAttemptsArray[] = $evaluationsAttempt;

        //pointer to current evaluationsAttempt
        $bapplication->mEvaluationsAttempt = $evaluationsAttempt;

        $bapplication->update();
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('TIMES_TABLES_SIX_APPLICATION Execute');
        }

        if ($bapplication->mCode == 7)
        {
                $itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
                $bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
                $bapplication->mCode = 0;
        }
        if ($bapplication->mCode == 101) //universal update
        {
                for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
                {
                        if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
                        {
                                $bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
                                //score
                                if ($bapplication->mDataArray[2] == 1)
                                {
                                        $bapplication->mEvaluationsAttempt->mScore++;
                                }
                        }
                }
                $bapplication->mCode = 0;
        }
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('TIMES_TABLES_SIX_APPLICATION Exit');
        }
}

}//end class

class TIMES_TABLES_NINE_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('TIMES_TABLES_NINE_APPLICATION Enter');
        }

       	$evaluationsAttempt = new EvaluationsAttempts($bapplication,10,$bapplication->mDataArray[4]);
        $bapplication->mEvaluationsAttemptsArray[] = $evaluationsAttempt;

        //pointer to current evaluationsAttempt
        $bapplication->mEvaluationsAttempt = $evaluationsAttempt;

        $bapplication->update();
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('TIMES_TABLES_NINE_APPLICATION Execute');
        }

        if ($bapplication->mCode == 10)
        {
                $itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
                $bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
                $bapplication->mCode = 0;
        }
        if ($bapplication->mCode == 101) //universal update
        {
                for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
                {
                        if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
                        {
                                $bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
                                //score
                                if ($bapplication->mDataArray[2] == 1)
                                {
                                        $bapplication->mEvaluationsAttempt->mScore++;
                                }
                        }
                }
                $bapplication->mCode = 0;
        }
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('TIMES_TABLES_NINE_APPLICATION Exit');
        }
}

}//end class

class TIMES_TABLES_SEVEN_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('TIMES_TABLES_SEVEN_APPLICATION Enter');
        }

       	$evaluationsAttempt = new EvaluationsAttempts($bapplication,8,$bapplication->mDataArray[4]);
        $bapplication->mEvaluationsAttemptsArray[] = $evaluationsAttempt;

        //pointer to current evaluationsAttempt
        $bapplication->mEvaluationsAttempt = $evaluationsAttempt;

        $bapplication->update();
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('TIMES_TABLES_SEVEN_APPLICATION Execute');
        }

        if ($bapplication->mCode == 8)
        {
                $itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
                $bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
                $bapplication->mCode = 0;
        }
        if ($bapplication->mCode == 101) //universal update
        {
                for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
                {
                        if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
                        {
                                $bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
                                //score
                                if ($bapplication->mDataArray[2] == 1)
                                {
                                        $bapplication->mEvaluationsAttempt->mScore++;
                                }
                        }
                }
                $bapplication->mCode = 0;
        }
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('TIMES_TABLES_SEVEN_APPLICATION Exit');
        }
}

}//end class



class TERRA_NOVA_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('TERRA_NOVA_APPLICATION Enter');
        }

        $evaluationsAttempt = new EvaluationsAttempts($bapplication,14,$bapplication->mDataArray[4]);
	$bapplication->mEvaluationsAttemptsArray[] = $evaluationsAttempt;

	//pointer to current evaluationsAttempt
	$bapplication->mEvaluationsAttempt = $evaluationsAttempt;

	$bapplication->update();		
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('TERRA_NOVA_APPLICATION Execute');
        }
	if ($bapplication->mCode == 14)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
		$bapplication->mCode = 0;
	}
	if ($bapplication->mCode == 101) //universal update
	{
		for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
		{ 
			if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
			{  
				$bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
			}
		}
		$bapplication->mCode = 0;
	}
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('TERRA_NOVA_APPLICATION Exit');
        }
}

}//end class

class TEST_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('TEST_APPLICATION Enter');
        }

        $evaluationsAttempt = new EvaluationsAttempts($bapplication,15,$bapplication->mDataArray[4]);
	$bapplication->mEvaluationsAttemptsArray[] = $evaluationsAttempt;

	//pointer to current evaluationsAttempt
	$bapplication->mEvaluationsAttempt = $evaluationsAttempt;

	$bapplication->update();		
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('TEST_NOVA_APPLICATION Execute');
        }
	if ($bapplication->mCode == 15)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
		$bapplication->mCode = 0;
	}
	if ($bapplication->mCode == 101) //universal update
	{
		for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
		{ 
			if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
			{  
				$bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
			}
		}
		$bapplication->mCode = 0;
	}
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('TEST_APPLICATION Exit');
        }
}

}//end class

class TERRA_NOVA_TEST_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('TERRA_NOVA_TEST_APPLICATION Enter');
        }

        $evaluationsAttempt = new EvaluationsAttempts($bapplication,16,$bapplication->mDataArray[4]);
	$bapplication->mEvaluationsAttemptsArray[] = $evaluationsAttempt;

	//pointer to current evaluationsAttempt
	$bapplication->mEvaluationsAttempt = $evaluationsAttempt;

	$bapplication->update();		
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('TERRA_NOVA_TEST_APPLICATION Execute');
        }
	if ($bapplication->mCode == 16)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
		$bapplication->mCode = 0;
	}
	if ($bapplication->mCode == 101) //universal update
	{
		for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
		{ 
			if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
			{  
				$bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
			}
		}
		$bapplication->mCode = 0;
	}
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('TERRA_NOVA_TEST_APPLICATION Exit');
        }
}

}//end class

class HOMEWORK_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('HOMEWORK_APPLICATION Enter');
        }

        $evaluationsAttempt = new EvaluationsAttempts($bapplication,17,$bapplication->mDataArray[4]);
	$bapplication->mEvaluationsAttemptsArray[] = $evaluationsAttempt;

	//pointer to current evaluationsAttempt
	$bapplication->mEvaluationsAttempt = $evaluationsAttempt;

	$bapplication->update();		
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('HOMEWORK_APPLICATION Execute');
        }
	if ($bapplication->mCode == 17)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
		$bapplication->mCode = 0;
	}
	if ($bapplication->mCode == 101) //universal update
	{
		for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
		{ 
			if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
			{  
				$bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
			}
		}
		$bapplication->mCode = 0;
	}
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('HOMEWORK_APPLICATION Exit');
        }
}

}//end class

class TERRA_NOVA_HOMEWORK_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('TERRA_NOVA_HOMEWORK_APPLICATION Enter');
        }

        $evaluationsAttempt = new EvaluationsAttempts($bapplication,18,$bapplication->mDataArray[4]);
	$bapplication->mEvaluationsAttemptsArray[] = $evaluationsAttempt;

	//pointer to current evaluationsAttempt
	$bapplication->mEvaluationsAttempt = $evaluationsAttempt;

	$bapplication->update();		
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('TERRA_NOVA_HOMEWORK_APPLICATION Execute');
        }
	if ($bapplication->mCode == 18)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
		$bapplication->mCode = 0;
	}
	if ($bapplication->mCode == 101) //universal update
	{
		for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
		{ 
			if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
			{  
				$bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
			}
		}
		$bapplication->mCode = 0;
	}
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('TERRA_NOVA_HOMEWORK_APPLICATION Exit');
        }
}

}//end class

class TIMES_TABLES_THE_SUPER_IZZY_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('TIMES_TABLES_THE_SUPER_IZZY_APPLICATION Enter');
        }

        $evaluationsAttempt = new EvaluationsAttempts($bapplication,19,$bapplication->mDataArray[4]);
	$bapplication->mEvaluationsAttemptsArray[] = $evaluationsAttempt;

	//pointer to current evaluationsAttempt
	$bapplication->mEvaluationsAttempt = $evaluationsAttempt;

	$bapplication->update();		
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('TIMES_TABLES_THE_SUPER_IZZY_APPLICATION Execute');
        }
	if ($bapplication->mCode == 19)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
		$bapplication->mCode = 0;
	}
	if ($bapplication->mCode == 101) //universal update
	{
		for ($i=0; $i < count($bapplication->mEvaluationsAttempt->mItemAttemptsArray); $i++)
		{ 
			if ($bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
			{  
				$bapplication->mEvaluationsAttempt->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
			}
		}
		$bapplication->mCode = 0;
	}
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('TIMES_TABLES_THE_SUPER_IZZY_APPLICATION Exit');
        }
}

}//end class



//add_game_N


?>


