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

	if ( $bapplication->mCode > 0 && $bapplication->mCode < 41)
	{
		if ($bapplication->mCoreStateMachine->mCurrentState != $bapplication->mNORMAL_CORE_APPLICATION)
		{
			$bapplication->mCoreStateMachine->changeState($bapplication->mNORMAL_CORE_APPLICATION);
		}
	}
        if ( $bapplication->mCode > 1000 && $bapplication->mCode < 1500)
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

		//also fill eval stuff
		$bapplication->mNormal->fillEvaluationsArray();
		$bapplication->mNormal->fillEvaluationsItemTypesArray(); 


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
		//include_once(getenv("DOCUMENT_ROOT") . "/web/php/milestones.php");
		include_once(getenv("DOCUMENT_ROOT") . "/web/php/classmates.php");
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

	if ( $bapplication->mCode > 1 && $bapplication->mCode < 41)
        {
                $itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
                $bapplication->mEvaluationsAttempt->mItemAttemptsArray[] = $itemAttempt;
                $bapplication->mCode = 0;
	}

        if ( $bapplication->mCode > 1000 && $bapplication->mCode < 1500)
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
        
		if ( $bapplication->mEvaluationsID > 1 && $bapplication->mEvaluationsID < 41)
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
                if ( $bapplication->mEvaluationsID > 1000 && $bapplication->mEvaluationsID < 1500)
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
?>
