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
		$bapplication->mCoreStateMachine->changeState($bapplication->mNORMAL_CORE_APPLICATION);
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
	//$bapplication->mNormal->process();		

	$bapplication->mNormal->fillTypesArray(); //fill types
	$bapplication->mLoginStudent->sendLoginStudent();
	$bapplication->update();		
}
public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('NORMAL_CORE_APPLICATION Execute');
        }
/*
	if ($bapplication->mCode == 130)
	{
		$bapplication->mCoreStateMachine->changeState($bapplication->mUPDATE_ITEM_ATTEMPT_APPLICATION);
	}
*/

}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('NORMAL_CORE_APPLICATION Exit');
        }
}

}//end class

class UPDATE_ITEM_ATTEMPT_APPLICATION extends State
{

function __construct()
{

}

public function enter($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('UPDATE_ITEM_ATTEMPT_APPLICATION Enter');
        }
	$bapplication->mItemAttempt->update($bapplication->mDataArray[1],$bapplication->mDataArray[2],$bapplication->mDataArray[3],$bapplication->mDataArray[4],$bapplication->mDataArray[5],$bapplication->mDataArray[6]);
}
public function execute($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('UPDATE_ITEM_ATTEMPT_APPLICATION Execute');
        }
        $bapplication->mCoreStateMachine->changeState($bapplication->mNORMAL_CORE_APPLICATION);
}
public function bexit($bapplication)
{
        if ($bapplication->mLogs == true)
        {
                error_log('UPDATE_ITEM_ATTEMPT_APPLICATION Exit');
        }
}

}//end class





?>


