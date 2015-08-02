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
        
	if ($bapplication->mCode == 117)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mLOGIN_STUDENT_APPLICATION);
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
	$bapplication->mLoginStudent->enterLogin($bapplication->mDataArray[1],$bapplication->mDataArray[2]);	
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

		if ($bapplication->mEvaluationsAttempts->mEvaluationsID == 1)
		{
			$bapplication->mCoreStateMachine->changeState($bapplication->mNORMAL_CORE_APPLICATION);
		}
		if ($bapplication->mEvaluationsAttempts->mEvaluationsID == 2)
		{
			$bapplication->mCoreStateMachine->changeState($bapplication->mPRACTICE_APPLICATION);
		}
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
	$bapplication->update();		
        $bapplication->mEvaluationsAttempts->insert();
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('NORMAL_CORE_APPLICATION Execute');
        }
	if ($bapplication->mCode == 2)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mPRACTICE_APPLICATION);
	}	
	if ($bapplication->mCode == 151)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mItemAttemptsArray[] = $itemAttempt;
			
	}
	if ($bapplication->mCode == 152)
	{
		for ($i=0; $i < count($bapplication->mItemAttemptsArray); $i++)
		{ 
			if ($bapplication->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
			{  
				$bapplication->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
			}
		}
	}
  	
	if ($bapplication->mCode == 171)
        {
        	$bapplication->mNormal->updateScores($bapplication->mDataArray[1]);
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

	$bapplication->update();		
        $bapplication->mEvaluationsAttempts->insert();
}

public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('PRACTICE_APPLICATION Execute');
        }

	if ($bapplication->mCode == 1)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mNORMAL_CORE_APPLICATION);
	}	

	//insert item	
	if ($bapplication->mCode == 151)
	{
		$itemAttempt = new ItemAttempt($bapplication,$bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4]);
		$bapplication->mItemAttemptsArray[] = $itemAttempt;
	}
	//update item	
	if ($bapplication->mCode == 152)
	{
		for ($i=0; $i < count($bapplication->mItemAttemptsArray); $i++)
		{ 
			if ($bapplication->mItemAttemptsArray[$i]->mID == $bapplication->mDataArray[1])
			{  
				$bapplication->mItemAttemptsArray[$i]->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3]);
			}
		}
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


