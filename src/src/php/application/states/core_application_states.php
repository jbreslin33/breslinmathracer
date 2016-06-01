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
	if ($bapplication->mCode == 117 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mLOGIN_STUDENT_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mLOGIN_STUDENT_APPLICATION);
	}
	if ($bapplication->mCode == 217 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mSIGNUP_STUDENT_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mSIGNUP_STUDENT_APPLICATION);
	}

	if ($bapplication->mCode == 1 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mNORMAL_CORE_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mNORMAL_CORE_APPLICATION);
	}
	if ($bapplication->mCode == 2 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mPRACTICE_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mPRACTICE_APPLICATION);
	}
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
	if ($bapplication->mCode == 12 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mTIMES_TABLES_THE_IZZY_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mTIMES_TABLES_THE_IZZY_APPLICATION);
	}
	if ($bapplication->mCode == 13 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mTIMES_TABLES_ADD_SUBTRACT_WITHIN_FIVE_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mTIMES_TABLES_ADD_SUBTRACT_WITHIN_FIVE_APPLICATION);
	}
	if ($bapplication->mCode == 14 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mTERRA_NOVA_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mTERRA_NOVA_APPLICATION);
	}
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
	if ($bapplication->mCode == 19 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mTIMES_TABLES_THE_SUPER_IZZY_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mTIMES_TABLES_THE_SUPER_IZZY_APPLICATION);
	}
	if ($bapplication->mCode == 20 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mBASIC_SKILLS_FOURTH_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mBASIC_SKILLS_FOURTH_APPLICATION);
	}
	if ($bapplication->mCode == 21 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mBASIC_SKILLS_FIFTH_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mBASIC_SKILLS_FIFTH_APPLICATION);
	}
	if ($bapplication->mCode == 22 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mBASIC_SKILLS_THIRD_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mBASIC_SKILLS_THIRD_APPLICATION);
	}
	if ($bapplication->mCode == 23 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mBASIC_SKILLS_SECOND_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mBASIC_SKILLS_SECOND_APPLICATION);
	}
	if ($bapplication->mCode == 24 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mBASIC_SKILLS_FIRST_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mBASIC_SKILLS_FIRST_APPLICATION);
	}
	if ($bapplication->mCode == 25 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mBASIC_SKILLS_KINDERGARTEN_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mBASIC_SKILLS_KINDERGARTEN_APPLICATION);
	}
	if ($bapplication->mCode == 26 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mMAKE_TEN_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mMAKE_TEN_APPLICATION);
	}
	if ($bapplication->mCode == 27 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mADD_SUBTRACT_WITHIN_TEN_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mADD_SUBTRACT_WITHIN_TEN_APPLICATION);
	}
	if ($bapplication->mCode == 28 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mADD_SUBTRACT_WITHIN_TWENTY_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mADD_SUBTRACT_WITHIN_TWENTY_APPLICATION);
	}
	if ($bapplication->mCode == 29 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mPROPERTIES_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mPROPERTIES_APPLICATION);
	}
	if ($bapplication->mCode == 30 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mBASIC_SKILLS_FOURTH_BOSS_LEVEL_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mBASIC_SKILLS_FOURTH_BOSS_LEVEL_APPLICATION);
	}
	if ($bapplication->mCode == 31 && $bapplication->mCoreStateMachine->mCurrentState != $bapplication->mBASIC_SKILLS_FIFTH_BOSS_LEVEL_APPLICATION)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mBASIC_SKILLS_FIFTH_BOSS_LEVEL_APPLICATION);
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

        $evaluationsAttempt = new EvaluationsAttempts($bapplication,1,$bapplication->mDataArray[4]);
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
	if ($bapplication->mCode == 101) //universal update
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

        	$bapplication->mNormal->updateScores($bapplication->mDataArray[5],'alltimetwo');
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
                error_log('TIMES_TABLES_TWO_APPLICATION Exit');
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

        	$bapplication->mNormal->updateScores($bapplication->mDataArray[5],'alltimethree');
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
                error_log('TIMES_TABLES_THREE_APPLICATION Exit');
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

        	$bapplication->mNormal->updateScores($bapplication->mDataArray[5],'alltimefour');
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
                error_log('TIMES_TABLES_FOUR_APPLICATION Exit');
        }
}

}//end class

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

        	$bapplication->mNormal->updateScores($bapplication->mDataArray[5],'alltimefive');
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
                error_log('TIMES_TABLES_FIVE_APPLICATION Exit');
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

        	$bapplication->mNormal->updateScores($bapplication->mDataArray[5],'alltimesix');
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
                error_log('TIMES_TABLES_SIX_APPLICATION Exit');
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

        	$bapplication->mNormal->updateScores($bapplication->mDataArray[5],'alltimeseven');
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
                error_log('TIMES_TABLES_SEVEN_APPLICATION Exit');
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

        	$bapplication->mNormal->updateScores($bapplication->mDataArray[5],'alltimeeight');
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
                error_log('TIMES_TABLES_EIGHT_APPLICATION Exit');
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

        	$bapplication->mNormal->updateScores($bapplication->mDataArray[5],'alltimenine');
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
                error_log('TIMES_TABLES_NINE_APPLICATION Exit');
        }
}

}//end class

class TIMES_TABLES_THE_IZZY_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('TIMES_TABLES_THE_IZZY_APPLICATION Enter');
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
                error_log('TIMES_TABLES_THE_IZZY_APPLICATION Execute');
        }
	if ($bapplication->mCode == 12)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;

        	$bapplication->mNormal->updateScores($bapplication->mDataArray[5],'alltimeizzy');
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
                error_log('TIMES_TABLES_THE_IZZY_APPLICATION Exit');
        }
}

}//end class

class TIMES_TABLES_ADD_SUBTRACT_WITHIN_FIVE_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('TIMES_TABLES_ADD_SUBTRACT_WITHIN_FIVE_APPLICATION Enter');
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
                error_log('TIMES_TABLES_ADD_SUBTRACT_WITHIN_FIVE_APPLICATION Execute');
        }
	if ($bapplication->mCode == 13)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;

        	$bapplication->mNormal->updateScores($bapplication->mDataArray[5],'alltimekoaa5');
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
                error_log('TIMES_TABLES_TWO_APPLICATION Exit');
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

        	$bapplication->mNormal->updateScores($bapplication->mDataArray[5],'alltimeterranova');
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

        	$bapplication->mNormal->updateScores($bapplication->mDataArray[5],'alltimetest');
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

        	$bapplication->mNormal->updateScores($bapplication->mDataArray[5],'alltimeterranovatest');
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

        	$bapplication->mNormal->updateScores($bapplication->mDataArray[5],'alltimehomework');
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

        	$bapplication->mNormal->updateScores($bapplication->mDataArray[5],'alltimeterranovahomework');
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

        	$bapplication->mNormal->updateScores($bapplication->mDataArray[5],'alltimesuperizzy');
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

class BASIC_SKILLS_FOURTH_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('BASIC_SKILLS_FOURTH_APPLICATION Enter');
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
                error_log('BASIC_SKILLS_FOURTH_APPLICATION Execute');
        }
	if ($bapplication->mCode == 20)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;

        	$bapplication->mNormal->updateScores($bapplication->mDataArray[5],'alltimebasicskillsfourth');
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
                error_log('BASIC_SKILLS_FOURTH_APPLICATION Exit');
        }
}

}//end class

class BASIC_SKILLS_FIFTH_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('BASIC_SKILLS_FIFTH_APPLICATION Enter');
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
                error_log('BASIC_SKILLS_FIFTH_APPLICATION Execute');
        }
	if ($bapplication->mCode == 21)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;

        	$bapplication->mNormal->updateScores($bapplication->mDataArray[5],'alltimebasicskillsfifth');
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
                error_log('BASIC_SKILLS_FIFTH_APPLICATION Exit');
        }
}

}//end class

class BASIC_SKILLS_THIRD_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('BASIC_SKILLS_THIRD_APPLICATION Enter');
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
                error_log('BASIC_SKILLS_THIRD_APPLICATION Execute');
        }
	if ($bapplication->mCode == 22)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;

        	$bapplication->mNormal->updateScores($bapplication->mDataArray[5],'alltimebasicskillsthird');
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
                error_log('BASIC_SKILLS_THIRD_APPLICATION Exit');
        }
}

}//end class

class BASIC_SKILLS_SECOND_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('BASIC_SKILLS_SECOND_APPLICATION Enter');
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
                error_log('BASIC_SKILLS_SECOND_APPLICATION Execute');
        }
	if ($bapplication->mCode == 23)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;

        	$bapplication->mNormal->updateScores($bapplication->mDataArray[5],'alltimebasicskillssecond');
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
                error_log('BASIC_SKILLS_SECOND_APPLICATION Exit');
        }
}

}//end class


class BASIC_SKILLS_FIRST_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('BASIC_SKILLS_FIRST_APPLICATION Enter');
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
                error_log('BASIC_SKILLS_FIRST_APPLICATION Execute');
        }
	if ($bapplication->mCode == 24)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;

        	$bapplication->mNormal->updateScores($bapplication->mDataArray[5],'alltimebasicskillsfirst');
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
                error_log('BASIC_SKILLS_FIRST_APPLICATION Exit');
        }
}

}//end class

class BASIC_SKILLS_KINDERGARTEN_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('BASIC_SKILLS_KINDERGARTEN_APPLICATION Enter');
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
                error_log('BASIC_SKILLS_KINDERGARTEN_APPLICATION Execute');
        }
	if ($bapplication->mCode == 25)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;

        	$bapplication->mNormal->updateScores($bapplication->mDataArray[5],'alltimebasicskillskindergarten');
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
                error_log('BASIC_SKILLS_KINDERGARTEN_APPLICATION Exit');
        }
}

}//end class

class MAKE_TEN_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('MAKE_TEN_APPLICATION Enter');
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
                error_log('MAKE_TEN_APPLICATION Execute');
        }
	if ($bapplication->mCode == 26)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;

        	$bapplication->mNormal->updateScores($bapplication->mDataArray[5],'alltimemaketen');
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
                error_log('MAKE_TEN_APPLICATION Exit');
        }
}

}//end class

class ADD_SUBTRACT_WITHIN_TEN_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('ADD_SUBTRACT_WITHIN_TEN_APPLICATION Enter');
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
                error_log('ADD_SUBTRACT_WITHIN_TEN_APPLICATION Execute');
        }
	if ($bapplication->mCode == 27)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;

        	$bapplication->mNormal->updateScores($bapplication->mDataArray[5],'alltimeaddsubtractwithinten');
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
                error_log('ADD_SUBTRACT_WITHIN_TEN_APPLICATION Exit');
        }
}

}//end class


class ADD_SUBTRACT_WITHIN_TWENTY_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('ADD_SUBTRACT_WITHIN_TWENTY_APPLICATION Enter');
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
                error_log('ADD_SUBTRACT_WITHIN_TWENTY_APPLICATION Execute');
        }
	if ($bapplication->mCode == 28)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;

        	$bapplication->mNormal->updateScores($bapplication->mDataArray[5],'alltimeaddsubtractwithintwenty');
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
                error_log('ADD_SUBTRACT_WITHIN_TWENTY_APPLICATION Exit');
        }
}

}//end class


class PROPERTIES_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('PROPERTIES_APPLICATION Enter');
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
                error_log('PROPERTIES_APPLICATION Execute');
        }
	if ($bapplication->mCode == 29)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;

        	$bapplication->mNormal->updateScores($bapplication->mDataArray[5],'alltimeproperties');
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
                error_log('PROPERTIES_APPLICATION Exit');
        }
}

}//end class

class BASIC_SKILLS_FOURTH_BOSS_LEVEL_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('BASIC_SKILLS_FOURTH_BOSS_LEVEL_APPLICATION Enter');
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
                error_log('BASIC_SKILLS_FOURTH_BOSS_LEVEL_APPLICATION Execute');
        }
	if ($bapplication->mCode == 30)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;

        	$bapplication->mNormal->updateScores($bapplication->mDataArray[5],'alltimebasicskillsfourthbosslevel');
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
                error_log('BASIC_SKILLS_FOURTH_BOSS_LEVEL_APPLICATION Exit');
        }
}

}//end class

class BASIC_SKILLS_FIFTH_BOSS_LEVEL_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('BASIC_SKILLS_FIFTH_BOSS_LEVEL_APPLICATION Enter');
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
                error_log('BASIC_SKILLS_FIFTH_BOSS_LEVEL_APPLICATION Execute');
        }
	if ($bapplication->mCode == 31)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;

        	$bapplication->mNormal->updateScores($bapplication->mDataArray[5],'alltimebasicskillsfifthbosslevel');
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
                error_log('BASIC_SKILLS_FIFTH_BOSS_LEVEL_APPLICATION Exit');
        }
}

}//end class

//add_game_N


?>


