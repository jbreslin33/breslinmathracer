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
		}

		//so we could insert a match and have players associated etc but..
		//to get score without too much trouble we could handle here.

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
                error_log('TIMES_TABLES_TWO_APPLICATION Exit');
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
?>


