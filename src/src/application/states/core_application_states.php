var GLOBAL_CORE_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
},

execute: function(application)
{
        if (application.mGame)
        {
                application.mGame.update();
        }
	if (application.mEvaluationsID == 1 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mNORMAL_CORE_APPLICATION)
	{
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mNORMAL_CORE_APPLICATION);
	}
	if (application.mEvaluationsID == 2 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mPRACTICE_APPLICATION)
	{
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mPRACTICE_APPLICATION);
	}
	if (application.mEvaluationsID == 3 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mTIMES_TABLES_TWO_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mTIMES_TABLES_TWO_APPLICATION);
	}
	if (application.mEvaluationsID == 4 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mTIMES_TABLES_THREE_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mTIMES_TABLES_THREE_APPLICATION);
	}
	if (application.mEvaluationsID == 5 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mTIMES_TABLES_FOUR_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mTIMES_TABLES_FOUR_APPLICATION);
	}
	if (application.mEvaluationsID == 6 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mTIMES_TABLES_FIVE_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mTIMES_TABLES_FIVE_APPLICATION);
	}
	if (application.mEvaluationsID == 7 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mTIMES_TABLES_SIX_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mTIMES_TABLES_SIX_APPLICATION);
	}
	if (application.mEvaluationsID == 8 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mTIMES_TABLES_SEVEN_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mTIMES_TABLES_SEVEN_APPLICATION);
	}
	if (application.mEvaluationsID == 9 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mTIMES_TABLES_EIGHT_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mTIMES_TABLES_EIGHT_APPLICATION);
	}
	if (application.mEvaluationsID == 10 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mTIMES_TABLES_NINE_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mTIMES_TABLES_NINE_APPLICATION);
	}
	if (application.mEvaluationsID == 12 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mTIMES_TABLES_THE_IZZY_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mTIMES_TABLES_THE_IZZY_APPLICATION);
	}
	if (application.mEvaluationsID == 13 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mTIMES_TABLES_ADD_SUBTRACT_WITHIN_FIVE_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mTIMES_TABLES_ADD_SUBTRACT_WITHIN_FIVE_APPLICATION);
	}
	if (application.mEvaluationsID == 14 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mTERRA_NOVA_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mTERRA_NOVA_APPLICATION);
	}
	if (application.mEvaluationsID == 15 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mTEST_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mTEST_APPLICATION);
	}
	if (application.mEvaluationsID == 16 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mTERRA_NOVA_TEST_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mTERRA_NOVA_TEST_APPLICATION);
	}
	if (application.mEvaluationsID == 17 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mHOMEWORK_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mHOMEWORK_APPLICATION);
	}
	if (application.mEvaluationsID == 18 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mTERRA_NOVA_HOMEWORK_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mTERRA_NOVA_HOMEWORK_APPLICATION);
	}
	if (application.mEvaluationsID == 19 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mTIMES_TABLES_THE_SUPER_IZZY_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mTIMES_TABLES_THE_SUPER_IZZY_APPLICATION);
	}
	if (application.mEvaluationsID == 20 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mBASIC_SKILLS_FOURTH_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mBASIC_SKILLS_FOURTH_APPLICATION);
	}
	if (application.mEvaluationsID == 21 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mBASIC_SKILLS_FIFTH_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mBASIC_SKILLS_FIFTH_APPLICATION);
	}
	if (application.mEvaluationsID == 22 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mBASIC_SKILLS_THIRD_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mBASIC_SKILLS_THIRD_APPLICATION);
	}
	if (application.mEvaluationsID == 23 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mBASIC_SKILLS_SECOND_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mBASIC_SKILLS_SECOND_APPLICATION);
	}
	if (application.mEvaluationsID == 24 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mBASIC_SKILLS_FIRST_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mBASIC_SKILLS_FIRST_APPLICATION);
	}
	if (application.mEvaluationsID == 25 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mBASIC_SKILLS_KINDERGARTEN_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mBASIC_SKILLS_KINDERGARTEN_APPLICATION);
	}
	if (application.mEvaluationsID == 26 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mMAKE_TEN_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mMAKE_TEN_APPLICATION);
	}
	//add_game_D
},

exit: function(application)
{
}

});

var INIT_CORE_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
	if (application.mStateLogs)
	{
		application.log('APPLICATION::INIT_CORE_APPLICATION');
	}
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::INIT_CORE_APPLICATION execute');
	}
	application.mCoreStateMachine.changeState(application.mLOGIN_STUDENT_APPLICATION);
},

exit: function(application)
{
}

});

var LOGIN_STUDENT_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
	application.mLoggedIn = false;
	application.mSent = false;

	if (application.mStateLogs)
	{
		application.log('APPLICATION::LOGIN_STUDENT_APPLICATION');
	}
	application.mRef_id = 'login';
        if (application.mGame)
        {
        	application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGameName = "login_student";
        application.mGame = new LoginStudent(APPLICATION);
	application.mLoggedIn = false;
	application.mDataToRead = false;

	application.mResponseArray = [];
 
	//lets hide homeselect
       	APPLICATION.mHud.mHome.setVisibility(false);
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::LOGIN_STUDENT_APPLICATION execute');
	}
	if (application.mSent == true)
	{
		application.mCoreStateMachine.changeState(application.mLOGIN_STUDENT_WAIT_APPLICATION);
	}
},

exit: function(application)
{
	if (application.mStateLogsExit)
	{
		application.log('APPLICATION::LOGIN_STUDENT_APPLICATION exit');
	}
	//lets show homeselect
       	APPLICATION.mHud.mHome.setVisibility(true);
}

});

var LOGIN_STUDENT_WAIT_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
	if (application.mStateLogs)
	{
		application.log('APPLICATION::LOGIN_STUDENT_WAIT_APPLICATION');
	}
	application.mStateEnterTime = APPLICATION.mGame.mTimeSinceEpoch; 
	application.mSent = false;

        //gets called right away
        APPLICATION.mGame.mLoginButton.setVisibility(false);
        APPLICATION.mGame.mUsernameLabel.setVisibility(false);
        APPLICATION.mGame.mUsernameTextBox.setVisibility(false);
        APPLICATION.mGame.mPasswordLabel.setVisibility(false);
        APPLICATION.mGame.mPasswordTextBox.setVisibility(false);
        var v = 'PLEASE WAIT LOGGING IN';
        APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::LOGIN_STUDENT_WAIT_APPLICATION execute');
	}

	//4 things can happen when you have sent a login request
	
	if (application.mDataToRead == true) //we have some data to read
	{
		//lets sniff packet
                APPLICATION.mLoggedIn = APPLICATION.mResponseArray[2];
		APPLICATION.mDataToRead = false;
		
		if (application.mLoggedIn == true) //i am going to send item_types and item_attempts here. maybe in rawData??
		{
        		APPLICATION.mRef_id = APPLICATION.mResponseArray[1]; 
                	APPLICATION.mHud.setOrange('Game:' + APPLICATION.mRef_id);
               	 	APPLICATION.mUsername = APPLICATION.mResponseArray[3];
                	APPLICATION.mFirstName = APPLICATION.mResponseArray[4];
                	APPLICATION.mLastName = APPLICATION.mResponseArray[5];
                	APPLICATION.mRole = APPLICATION.mResponseArray[6];
                
			var itemTypes = APPLICATION.mResponseArray[7];
			APPLICATION.mItemTypesArray = itemTypes.split(":");
                
			//One	
			var itemAttemptsTypesOne = APPLICATION.mResponseArray[8];
			APPLICATION.mItemAttemptsTypeArrayOne = itemAttemptsTypesOne.split(":");
	
			var itemAttemptsTransactionCodesOne = APPLICATION.mResponseArray[9];
			APPLICATION.mItemAttemptsTransactionCodeArrayOne = itemAttemptsTransactionCodesOne.split(":");
		
			//Three	
			var itemAttemptsTypesThree = APPLICATION.mResponseArray[10];
			APPLICATION.mItemAttemptsTypeArrayThree = itemAttemptsTypesThree.split(":");
	
			var itemAttemptsTransactionCodesThree = APPLICATION.mResponseArray[11];
			APPLICATION.mItemAttemptsTransactionCodeArrayThree = itemAttemptsTransactionCodesThree.split(":");

			//Four	
			var itemAttemptsTypesFour = APPLICATION.mResponseArray[12];
			APPLICATION.mItemAttemptsTypeArrayFour = itemAttemptsTypesFour.split(":");
	
			var itemAttemptsTransactionCodesFour = APPLICATION.mResponseArray[13];
			APPLICATION.mItemAttemptsTransactionCodeArrayFour = itemAttemptsTransactionCodesFour.split(":");
               
			//Five	
			var itemAttemptsTypesFive = APPLICATION.mResponseArray[14];
			APPLICATION.mItemAttemptsTypeArrayFive = itemAttemptsTypesFive.split(":");
	
			var itemAttemptsTransactionCodesFive = APPLICATION.mResponseArray[15];
			APPLICATION.mItemAttemptsTransactionCodeArrayFive = itemAttemptsTransactionCodesFive.split(":");

			//Six	
			var itemAttemptsTypesSix = APPLICATION.mResponseArray[16];
			APPLICATION.mItemAttemptsTypeArraySix = itemAttemptsTypesSix.split(":");
	
			var itemAttemptsTransactionCodesSix = APPLICATION.mResponseArray[17];
			APPLICATION.mItemAttemptsTransactionCodeArraySix = itemAttemptsTransactionCodesSix.split(":");

			//Seven	
			var itemAttemptsTypesSeven = APPLICATION.mResponseArray[18];
			APPLICATION.mItemAttemptsTypeArraySeven = itemAttemptsTypesSeven.split(":");
	
			var itemAttemptsTransactionCodesSeven = APPLICATION.mResponseArray[19];
			APPLICATION.mItemAttemptsTransactionCodeArraySeven = itemAttemptsTransactionCodesSeven.split(":");


			//Eight	
			var itemAttemptsTypesEight = APPLICATION.mResponseArray[20];
			APPLICATION.mItemAttemptsTypeArrayEight = itemAttemptsTypesEight.split(":");
	
			var itemAttemptsTransactionCodesEight = APPLICATION.mResponseArray[21];
			APPLICATION.mItemAttemptsTransactionCodeArrayEight = itemAttemptsTransactionCodesEight.split(":");


			//Nine	
			var itemAttemptsTypesNine = APPLICATION.mResponseArray[22];
			APPLICATION.mItemAttemptsTypeArrayNine = itemAttemptsTypesNine.split(":");
	
			var itemAttemptsTransactionCodesNine = APPLICATION.mResponseArray[23];
			APPLICATION.mItemAttemptsTransactionCodeArrayNine = itemAttemptsTransactionCodesNine.split(":");

			//Ten	
			var itemAttemptsTypesTen = APPLICATION.mResponseArray[24];
			APPLICATION.mItemAttemptsTypeArrayTen = itemAttemptsTypesTen.split(":");
	
			var itemAttemptsTransactionCodesTen = APPLICATION.mResponseArray[25];
			APPLICATION.mItemAttemptsTransactionCodeArrayTen = itemAttemptsTransactionCodesTen.split(":");

			//Twelve	 
			var itemAttemptsTypesTwelve = APPLICATION.mResponseArray[26];
			APPLICATION.mItemAttemptsTypeArrayTwelve = itemAttemptsTypesTwelve.split(":");
	
			var itemAttemptsTransactionCodesTwelve = APPLICATION.mResponseArray[27];
			APPLICATION.mItemAttemptsTransactionCodeArrayTwelve = itemAttemptsTransactionCodesTwelve.split(":");

			//Thirteen	
			var itemAttemptsTypesThirteen = APPLICATION.mResponseArray[28];
			APPLICATION.mItemAttemptsTypeArrayThirteen = itemAttemptsTypesThirteen.split(":");
	
			var itemAttemptsTransactionCodesThirteen = APPLICATION.mResponseArray[29];
			APPLICATION.mItemAttemptsTransactionCodeArrayThirteen = itemAttemptsTransactionCodesThirteen.split(":");
			
			//Fourteen	
			var itemAttemptsTypesFourteen = APPLICATION.mResponseArray[30];
			APPLICATION.mItemAttemptsTypeArrayFourteen = itemAttemptsTypesFourteen.split(":");
	
			var itemAttemptsTransactionCodesFourteen = APPLICATION.mResponseArray[31];
			APPLICATION.mItemAttemptsTransactionCodeArrayFourteen = itemAttemptsTransactionCodesFourteen.split(":");
			
			//Fifteen	
			var itemAttemptsTypesFifteen = APPLICATION.mResponseArray[32];
			APPLICATION.mItemAttemptsTypeArrayFifteen = itemAttemptsTypesFifteen.split(":");
	
			var itemAttemptsTransactionCodesFifteen = APPLICATION.mResponseArray[33];
			APPLICATION.mItemAttemptsTransactionCodeArrayFifteen = itemAttemptsTransactionCodesFifteen.split(":");
			
			//Sixteen	
			var itemAttemptsTypesSixteen = APPLICATION.mResponseArray[34];
			APPLICATION.mItemAttemptsTypeArraySixteen = itemAttemptsTypesSixteen.split(":");
	
			var itemAttemptsTransactionCodesSixteen = APPLICATION.mResponseArray[35];
			APPLICATION.mItemAttemptsTransactionCodeArraySixteen = itemAttemptsTransactionCodesSixteen.split(":");
			
			//Seventeen	
			var itemAttemptsTypesSeventeen = APPLICATION.mResponseArray[36];
			APPLICATION.mItemAttemptsTypeArraySeventeen = itemAttemptsTypesSeventeen.split(":");
	
			var itemAttemptsTransactionCodesSeventeen = APPLICATION.mResponseArray[37];
			APPLICATION.mItemAttemptsTransactionCodeArraySeventeen = itemAttemptsTransactionCodesSeventeen.split(":");
			
			//Eighteen	
			var itemAttemptsTypesEighteen = APPLICATION.mResponseArray[38];
			APPLICATION.mItemAttemptsTypeArrayEighteen = itemAttemptsTypesEighteen.split(":");
	
			var itemAttemptsTransactionCodesEighteen = APPLICATION.mResponseArray[39];
			APPLICATION.mItemAttemptsTransactionCodeArrayEighteen = itemAttemptsTransactionCodesEighteen.split(":");
			
			//Nineteen	 
			var itemAttemptsTypesNineteen = APPLICATION.mResponseArray[40];
			APPLICATION.mItemAttemptsTypeArrayNineteen = itemAttemptsTypesNineteen.split(":");
	
			var itemAttemptsTransactionCodesNineteen = APPLICATION.mResponseArray[41];
			APPLICATION.mItemAttemptsTransactionCodeArrayNineteen = itemAttemptsTransactionCodesNineteen.split(":");
			
			//Twenty	 
			var itemAttemptsTypesTwenty = APPLICATION.mResponseArray[42];
			APPLICATION.mItemAttemptsTypeArrayTwenty = itemAttemptsTypesTwenty.split(":");
	
			var itemAttemptsTransactionCodesTwenty = APPLICATION.mResponseArray[43];
			APPLICATION.mItemAttemptsTransactionCodeArrayTwenty = itemAttemptsTransactionCodesTwenty.split(":");
			
			//TwentyOne	 
			var itemAttemptsTypesTwentyOne = APPLICATION.mResponseArray[44];
			APPLICATION.mItemAttemptsTypeArrayTwentyOne = itemAttemptsTypesTwentyOne.split(":");
	
			var itemAttemptsTransactionCodesTwentyOne = APPLICATION.mResponseArray[45];
			APPLICATION.mItemAttemptsTransactionCodeArrayTwentyOne = itemAttemptsTransactionCodesTwentyOne.split(":");
			
			//TwentyTwo	 
			var itemAttemptsTypesTwentyTwo = APPLICATION.mResponseArray[46];
			APPLICATION.mItemAttemptsTypeArrayTwentyTwo = itemAttemptsTypesTwentyTwo.split(":");
	
			var itemAttemptsTransactionCodesTwentyTwo = APPLICATION.mResponseArray[47];
			APPLICATION.mItemAttemptsTransactionCodeArrayTwentyTwo = itemAttemptsTransactionCodesTwentyTwo.split(":");
			
			//TwentyThree	 
			var itemAttemptsTypesTwentyThree = APPLICATION.mResponseArray[48];
			APPLICATION.mItemAttemptsTypeArrayTwentyThree = itemAttemptsTypesTwentyThree.split(":");
	
			var itemAttemptsTransactionCodesTwentyThree = APPLICATION.mResponseArray[49];
			APPLICATION.mItemAttemptsTransactionCodeArrayTwentyThree = itemAttemptsTransactionCodesTwentyThree.split(":");
			
			//TwentyFour	 
			var itemAttemptsTypesTwentyFour = APPLICATION.mResponseArray[50];
			APPLICATION.mItemAttemptsTypeArrayTwentyFour = itemAttemptsTypesTwentyFour.split(":");
	
			var itemAttemptsTransactionCodesTwentyFour = APPLICATION.mResponseArray[51];
			APPLICATION.mItemAttemptsTransactionCodeArrayTwentyFour = itemAttemptsTransactionCodesTwentyFour.split(":");
			


			//TwentyFive	 
			var itemAttemptsTypesTwentyFive = APPLICATION.mResponseArray[52];
			APPLICATION.mItemAttemptsTypeArrayTwentyFive = itemAttemptsTypesTwentyFive.split(":");
	
			var itemAttemptsTransactionCodesTwentyFive = APPLICATION.mResponseArray[53];
			APPLICATION.mItemAttemptsTransactionCodeArrayTwentyFive = itemAttemptsTransactionCodesTwentyFive.split(":");
			
			//TwentySix	 
			var itemAttemptsTypesTwentySix = APPLICATION.mResponseArray[54];
			APPLICATION.mItemAttemptsTypeArrayTwentySix = itemAttemptsTypesTwentySix.split(":");
	
			var itemAttemptsTransactionCodesTwentySix = APPLICATION.mResponseArray[55];
			APPLICATION.mItemAttemptsTransactionCodeArrayTwentySix = itemAttemptsTransactionCodesTwentySix.split(":");

			APPLICATION.mEvaluationsID = APPLICATION.mResponseArray[56];
			//add_game_E	
	
			APPLICATION.mHud.setUsername(APPLICATION.mFirstName,APPLICATION.mLastName);
			if (application.mEvaluationsID == 1)
			{
				application.mCoreStateMachine.changeState(application.mNORMAL_CORE_APPLICATION);
			}
			if (application.mEvaluationsID == 2)
			{
				application.mCoreStateMachine.changeState(application.mPRACTICE_APPLICATION);
			}
		}
	}

	else if (application.mBadUsername == true)
	{
		application.mBadUsername = false;
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mLOGIN_STUDENT_APPLICATION);
                var v = 'BAD USERNAME';
                APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
	}
	else if (application.mBadPassword == true)
	{
		application.mBadPassword = false;
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mLOGIN_STUDENT_APPLICATION);
                var v = 'BAD PASSWORD';
                APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
	}
        
	else if (APPLICATION.mGame.mTimeSinceEpoch > parseInt(application.mStateEnterTime + application.mStateThresholdTime))
	{
                var v = 'LOGIN TIMED OUT';
                APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mLOGIN_STUDENT_APPLICATION);
	}
},

exit: function(application)
{
	if (application.mStateLogsExit)
	{
		application.log('APPLICATION::LOGIN_STUDENT_WAIT_APPLICATION exit');
	}
	//lets show homeselect
       	APPLICATION.mHud.mHome.setVisibility(true);
	application.mBadPassword = false;
	application.mBadUsername = false;
}

});

var LOGIN_SCHOOL_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
	application.mLoggedIn = false;

	if (application.mStateLogs)
	{
		application.log('APPLICATION::LOGIN_SCHOOL_APPLICATION');
	}
	application.mRef_id = 'login';
        if (application.mGame)
        {
        	application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGameName = "login_school";
        application.mGame = new LoginSchool(APPLICATION);
	
	application.mLoggedIn = false;
	application.mDataToRead = false;

	application.mResponseArray = [];
 
	//lets hide homeselect
       	APPLICATION.mHud.mHome.setVisibility(false);
	
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::LOGIN_SCHOOL_APPLICATION execute');
	}	
       
	if (application.mSent == true)
        {
		APPLICATION.log('sent');
                application.mCoreStateMachine.changeState(application.mLOGIN_SCHOOL_WAIT_APPLICATION);
        }
},

exit: function(application)
{
	if (application.mStateLogsExit)
	{
		application.log('APPLICATION::LOGIN_SCHOOL_APPLICATION exit');
	}
	//lets show homeselect
        APPLICATION.mHud.mHome.setVisibility(true);
        application.mBadPassword = false;
        application.mBadUsername = false;
}

});
var LOGIN_SCHOOL_WAIT_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
	if (application.mStateLogs)
	{
		application.log('APPLICATION::LOGIN_SCHOOL_WAIT_APPLICATION');
	}
	application.mStateEnterTime = APPLICATION.mGame.mTimeSinceEpoch; 
	application.mSent = false;

        //gets called right away
        APPLICATION.mGame.mLoginButton.setVisibility(false);
        APPLICATION.mGame.mUsernameLabel.setVisibility(false);
        APPLICATION.mGame.mUsernameTextBox.setVisibility(false);
        APPLICATION.mGame.mPasswordLabel.setVisibility(false);
        APPLICATION.mGame.mPasswordTextBox.setVisibility(false);
        var v = 'PLEASE WAIT LOGGING IN';
        APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::LOGIN_SCHOOL_WAIT_APPLICATION execute');
	}

	//4 things can happen when you have sent a login request
	
	if (application.mDataToRead == true) //we have some data to read
	{
		//lets sniff packet
                APPLICATION.mLoggedIn = APPLICATION.mResponseArray[1]; //no refid so its element 1
		APPLICATION.mDataToRead = false;
	}
	
	else if (application.mLoggedIn == true)
	{
        	APPLICATION.mRef_id = APPLICATION.mResponseArray[1];
                APPLICATION.mHud.setOrange('Game: ' + APPLICATION.mRef_id);
                //APPLICATION.mLoggedIn = APPLICATION.mResponseArray[2];
                APPLICATION.mUsername = APPLICATION.mResponseArray[3];
                APPLICATION.mFirstName = APPLICATION.mResponseArray[4];
                APPLICATION.mLastName = APPLICATION.mResponseArray[5];
                APPLICATION.mRawData = APPLICATION.mResponseArray[6];
                APPLICATION.mRole = APPLICATION.mResponseArray[7];
               	
		APPLICATION.mHud.setUsername(APPLICATION.mFirstName,APPLICATION.mLastName);

		application.mCoreStateMachine.changeState(application.mREPORT_CORE_APPLICATION);
	}

	else if (application.mBadUsername == true)
	{
		application.mBadUsername = false;
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mLOGIN_SCHOOL_APPLICATION);
                var v = 'BAD USERNAME';
                APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
	}
	else if (application.mBadPassword == true)
	{
		application.mBadPassword = false;
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mLOGIN_SCHOOL_APPLICATION);
                var v = 'BAD PASSWORD';
                APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
	}
        
	else if (APPLICATION.mGame.mTimeSinceEpoch > parseInt(application.mStateEnterTime + application.mStateThresholdTime))
	{
                var v = 'LOGIN TIMED OUT';
                APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mLOGIN_SCHOOL_APPLICATION);
	}
},

exit: function(application)
{
	if (application.mStateLogsExit)
	{
		application.log('APPLICATION::LOGIN_SCHOOL_WAIT_APPLICATION exit');
	}
	//lets show homeselect
       	APPLICATION.mHud.mHome.setVisibility(true);
	application.mBadPassword = false;
	application.mBadUsername = false;
}

});


var SIGNUP_STUDENT_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        application.mLoggedIn = false;
        if (application.mStateLogs)
        {
                application.log('APPLICATION::SIGNUP_STUDENT_APPLICATION');
        }
	if (APPLICATION.mCoreStateMachine.mPreviousState == APPLICATION.mSIGNUP_STUDENT_WAIT_APPLICATION)
	{
		APPLICATION.log('1');
		//dont reinstantiate class... just set visible
        	APPLICATION.mGame.mLoginButton.setVisibility(true);
        	APPLICATION.mGame.mUsernameLabel.setVisibility(true);
        	APPLICATION.mGame.mUsernameTextBox.setVisibility(true);
        	APPLICATION.mGame.mPasswordOneLabel.setVisibility(true);
        	APPLICATION.mGame.mPasswordOneTextBox.setVisibility(true);
        	APPLICATION.mGame.mPasswordTwoLabel.setVisibility(true);
        	APPLICATION.mGame.mPasswordTwoTextBox.setVisibility(true);
        	APPLICATION.mGame.mFirstNameLabel.setVisibility(true);
        	APPLICATION.mGame.mFirstNameTextBox.setVisibility(true);
        	APPLICATION.mGame.mLastNameLabel.setVisibility(true);
        	APPLICATION.mGame.mLastNameTextBox.setVisibility(true);
	}
	else 
	{
		APPLICATION.log('2');
        	if (application.mGame)
        	{
                	application.mGame.destructor();
                	application.mGame = 0;
        	}
        	application.mGame = new SignupStudent(APPLICATION);
	}
        application.mRef_id = 'signup_student';
        application.mGameName = "signup_student";
        application.mLoggedIn = false;
        application.mDataToRead = false;

        application.mResponseArray = [];

        //lets hide homeselect
        APPLICATION.mHud.mHome.setVisibility(false);

},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::SIGNUP_STUDENT_APPLICATION execute');
	}
        if (application.mSent == true)
        {
		APPLICATION.log('change state');
                application.mCoreStateMachine.changeState(application.mSIGNUP_STUDENT_WAIT_APPLICATION);
        }
	else
	{
		APPLICATION.log('no change state');
	}
},

exit: function(application)
{
	if (application.mStateLogsExit)
	{
		application.log('APPLICATION::SIGNUP_STUDENT_APPLICATION exit');
	}
	//lets show homeselect
       	APPLICATION.mHud.mHome.setVisibility(true);
}

});

var SIGNUP_STUDENT_WAIT_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
	if (application.mStateLogs)
	{
		application.log('APPLICATION::SIGNUP_STUDENT_WAIT_APPLICATION');
	}
	application.mStateEnterTime = APPLICATION.mGame.mTimeSinceEpoch; 

        //gets called right away
        APPLICATION.mGame.mLoginButton.setVisibility(false);
        APPLICATION.mGame.mUsernameLabel.setVisibility(false);
        APPLICATION.mGame.mUsernameTextBox.setVisibility(false);
        APPLICATION.mGame.mPasswordOneLabel.setVisibility(false);
        APPLICATION.mGame.mPasswordOneTextBox.setVisibility(false);
        APPLICATION.mGame.mPasswordTwoLabel.setVisibility(false);
        APPLICATION.mGame.mPasswordTwoTextBox.setVisibility(false);
        APPLICATION.mGame.mFirstNameLabel.setVisibility(true);
        APPLICATION.mGame.mFirstNameTextBox.setVisibility(true);
        APPLICATION.mGame.mLastNameLabel.setVisibility(true);
        APPLICATION.mGame.mLastNameTextBox.setVisibility(true);

        var v = 'PLEASE WAIT LOGGING IN';
        APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::SIGNUP_STUDENT_WAIT_APPLICATION execute');
	}
	//4 things can happen when you have sent a login request
	
	if (application.mDataToRead == true) //we have some data to read
	{
		//lets sniff packet
                APPLICATION.mLoggedIn = APPLICATION.mResponseArray[2];
		APPLICATION.mDataToRead = false;
		
		if (application.mLoggedIn == true) //i am going to send item_types and item_attempts here. maybe in rawData??
		{
        		APPLICATION.mRef_id = APPLICATION.mResponseArray[1]; 
                	APPLICATION.mHud.setOrange('Game:' + APPLICATION.mRef_id);
               	 	APPLICATION.mUsername = APPLICATION.mResponseArray[3];
                	APPLICATION.mFirstName = APPLICATION.mResponseArray[4];
                	APPLICATION.mLastName = APPLICATION.mResponseArray[5];
                	APPLICATION.mRole = APPLICATION.mResponseArray[6];
                
			var itemTypes = APPLICATION.mResponseArray[7];
			APPLICATION.mItemTypesArray = itemTypes.split(":");
                
			//One	
			var itemAttemptsTypesOne = APPLICATION.mResponseArray[8];
			APPLICATION.mItemAttemptsTypeArrayOne = itemAttemptsTypesOne.split(":");
	
			var itemAttemptsTransactionCodesOne = APPLICATION.mResponseArray[9];
			APPLICATION.mItemAttemptsTransactionCodeArrayOne = itemAttemptsTransactionCodesOne.split(":");
		
			//Three	
			var itemAttemptsTypesThree = APPLICATION.mResponseArray[10];
			APPLICATION.mItemAttemptsTypeArrayThree = itemAttemptsTypesThree.split(":");
	
			var itemAttemptsTransactionCodesThree = APPLICATION.mResponseArray[11];
			APPLICATION.mItemAttemptsTransactionCodeArrayThree = itemAttemptsTransactionCodesThree.split(":");

			//Four	
			var itemAttemptsTypesFour = APPLICATION.mResponseArray[12];
			APPLICATION.mItemAttemptsTypeArrayFour = itemAttemptsTypesFour.split(":");
	
			var itemAttemptsTransactionCodesFour = APPLICATION.mResponseArray[13];
			APPLICATION.mItemAttemptsTransactionCodeArrayFour = itemAttemptsTransactionCodesFour.split(":");
               
			//Five	
			var itemAttemptsTypesFive = APPLICATION.mResponseArray[14];
			APPLICATION.mItemAttemptsTypeArrayFive = itemAttemptsTypesFive.split(":");
	
			var itemAttemptsTransactionCodesFive = APPLICATION.mResponseArray[15];
			APPLICATION.mItemAttemptsTransactionCodeArrayFive = itemAttemptsTransactionCodesFive.split(":");

			//Six	
			var itemAttemptsTypesSix = APPLICATION.mResponseArray[16];
			APPLICATION.mItemAttemptsTypeArraySix = itemAttemptsTypesSix.split(":");
	
			var itemAttemptsTransactionCodesSix = APPLICATION.mResponseArray[17];
			APPLICATION.mItemAttemptsTransactionCodeArraySix = itemAttemptsTransactionCodesSix.split(":");

			//Seven	
			var itemAttemptsTypesSeven = APPLICATION.mResponseArray[18];
			APPLICATION.mItemAttemptsTypeArraySeven = itemAttemptsTypesSeven.split(":");
	
			var itemAttemptsTransactionCodesSeven = APPLICATION.mResponseArray[19];
			APPLICATION.mItemAttemptsTransactionCodeArraySeven = itemAttemptsTransactionCodesSeven.split(":");

			//Eight	
			var itemAttemptsTypesEight = APPLICATION.mResponseArray[20];
			APPLICATION.mItemAttemptsTypeArrayEight = itemAttemptsTypesEight.split(":");
	
			var itemAttemptsTransactionCodesEight = APPLICATION.mResponseArray[21];
			APPLICATION.mItemAttemptsTransactionCodeArrayEight = itemAttemptsTransactionCodesEight.split(":");

			//Nine	
			var itemAttemptsTypesNine = APPLICATION.mResponseArray[22];
			APPLICATION.mItemAttemptsTypeArrayNine = itemAttemptsTypesNine.split(":");
	
			var itemAttemptsTransactionCodesNine = APPLICATION.mResponseArray[23];
			APPLICATION.mItemAttemptsTransactionCodeArrayNine = itemAttemptsTransactionCodesNine.split(":");

			//Ten	
			var itemAttemptsTypesTen = APPLICATION.mResponseArray[24];
			APPLICATION.mItemAttemptsTypeArrayTen = itemAttemptsTypesTen.split(":");
	
			var itemAttemptsTransactionCodesTen = APPLICATION.mResponseArray[25];
			APPLICATION.mItemAttemptsTransactionCodeArrayTen = itemAttemptsTransactionCodesTen.split(":");

			//Twelve	
			var itemAttemptsTypesTwelve = APPLICATION.mResponseArray[26];
			APPLICATION.mItemAttemptsTypeArrayTwelve = itemAttemptsTypesTwelve.split(":");
	
			var itemAttemptsTransactionCodesTwelve = APPLICATION.mResponseArray[27];
			APPLICATION.mItemAttemptsTransactionCodeArrayTwelve = itemAttemptsTransactionCodesTwelve.split(":");

			//Thirteen	
			var itemAttemptsTypesThirteen = APPLICATION.mResponseArray[28];
			APPLICATION.mItemAttemptsTypeArrayThirteen = itemAttemptsTypesThirteen.split(":");
	
			var itemAttemptsTransactionCodesThirteen = APPLICATION.mResponseArray[29];
			APPLICATION.mItemAttemptsTransactionCodeArrayThirteen = itemAttemptsTransactionCodesThirteen.split(":");
			
			//Fourteen	
			var itemAttemptsTypesFourteen = APPLICATION.mResponseArray[30];
			APPLICATION.mItemAttemptsTypeArrayFourteen = itemAttemptsTypesFourteen.split(":");
	
			var itemAttemptsTransactionCodesFourteen = APPLICATION.mResponseArray[31];
			APPLICATION.mItemAttemptsTransactionCodeArrayFourteen = itemAttemptsTransactionCodesFourteen.split(":");
			
			//Fifteen	
			var itemAttemptsTypesFifteen = APPLICATION.mResponseArray[32];
			APPLICATION.mItemAttemptsTypeArrayFifteen = itemAttemptsTypesFifteen.split(":");
	
			var itemAttemptsTransactionCodesFifteen = APPLICATION.mResponseArray[33];
			APPLICATION.mItemAttemptsTransactionCodeArrayFifteen = itemAttemptsTransactionCodesFifteen.split(":");
			
			//Sixteen	
			var itemAttemptsTypesSixteen = APPLICATION.mResponseArray[34];
			APPLICATION.mItemAttemptsTypeArraySixteen = itemAttemptsTypesSixteen.split(":");
	
			var itemAttemptsTransactionCodesSixteen = APPLICATION.mResponseArray[35];
			APPLICATION.mItemAttemptsTransactionCodeArraySixteen = itemAttemptsTransactionCodesSixteen.split(":");
			
			//Seventeen	
			var itemAttemptsTypesSeventeen = APPLICATION.mResponseArray[36];
			APPLICATION.mItemAttemptsTypeArraySeventeen = itemAttemptsTypesSeventeen.split(":");
	
			var itemAttemptsTransactionCodesSeventeen = APPLICATION.mResponseArray[37];
			APPLICATION.mItemAttemptsTransactionCodeArraySeventeen = itemAttemptsTransactionCodesSeventeen.split(":");
			
			//Eightteen	
			if (APPLICATION.mResponseArray[38])
			{
				var itemAttemptsTypeEighteen = APPLICATION.mResponseArray[38];
				APPLICATION.mItemAttemptsTypeArrayEighteen = itemAttemptsTypesEighteen.split(":");
			}
			var itemAttemptsTransactionCodesEighteen = APPLICATION.mResponseArray[39];
			APPLICATION.mItemAttemptsTransactionCodeArrayEighteen = itemAttemptsTransactionCodesEighteen.split(":");
			
			//Nineteen	
			if (APPLICATION.mResponseArray[40])
			{
				var itemAttemptsTypesNineteen = APPLICATION.mResponseArray[40];
				APPLICATION.mItemAttemptsTypeArrayNineteen = itemAttemptsTypesNineteen.split(":");
			}
	
			var itemAttemptsTransactionCodesNineteen = APPLICATION.mResponseArray[41];
			APPLICATION.mItemAttemptsTransactionCodeArrayNineteen = itemAttemptsTransactionCodesNineteen.split(":");
			
			//Twenty	
			if (APPLICATION.mResponseArray[42])
			{
				var itemAttemptsTypesTwenty = APPLICATION.mResponseArray[42];
				APPLICATION.mItemAttemptsTypeArrayTwenty = itemAttemptsTypesTwenty.split(":");
			}
	
			var itemAttemptsTransactionCodesTwenty = APPLICATION.mResponseArray[43];
			APPLICATION.mItemAttemptsTransactionCodeArrayTwenty = itemAttemptsTransactionCodesTwenty.split(":");

                       //TwentyOne
                        if (APPLICATION.mResponseArray[44])
                        {
                                var itemAttemptsTypesTwentyOne = APPLICATION.mResponseArray[44];
                                APPLICATION.mItemAttemptsTypeArrayTwentyOne = itemAttemptsTypesTwentyOne.split(":");
                        }

                        var itemAttemptsTransactionCodesTwentyOne = APPLICATION.mResponseArray[45];
                        APPLICATION.mItemAttemptsTransactionCodeArrayTwentyOne = itemAttemptsTransactionCodesTwentyOne.split(":");

			//TwentyTwo
                        if (APPLICATION.mResponseArray[46])
                        {
                                var itemAttemptsTypesTwentyTwo = APPLICATION.mResponseArray[46];
                                APPLICATION.mItemAttemptsTypeArrayTwentyTwo = itemAttemptsTypesTwentyTwo.split(":");
                        }

                        var itemAttemptsTransactionCodesTwentyTwo = APPLICATION.mResponseArray[47];
                        APPLICATION.mItemAttemptsTransactionCodeArrayTwentyTwo = itemAttemptsTransactionCodesTwentyTwo.split(":");
			
			//TwentyThree
                        if (APPLICATION.mResponseArray[48])
                        {
                                var itemAttemptsTypesTwentyThree = APPLICATION.mResponseArray[48];
                                APPLICATION.mItemAttemptsTypeArrayTwentyThree = itemAttemptsTypesTwentyThree.split(":");
                        }

                        var itemAttemptsTransactionCodesTwentyThree = APPLICATION.mResponseArray[49];
                        APPLICATION.mItemAttemptsTransactionCodeArrayTwentyThree = itemAttemptsTransactionCodesTwentyThree.split(":");



			//TwentyFour
                        if (APPLICATION.mResponseArray[50])
                        {
                                var itemAttemptsTypesTwentyFour = APPLICATION.mResponseArray[50];
                                APPLICATION.mItemAttemptsTypeArrayTwentyFour = itemAttemptsTypesTwentyFour.split(":");
                        }

                        var itemAttemptsTransactionCodesTwentyFour = APPLICATION.mResponseArray[51];
                        APPLICATION.mItemAttemptsTransactionCodeArrayTwentyFour = itemAttemptsTransactionCodesTwentyFour.split(":");
			
			//TwentyFive
                        if (APPLICATION.mResponseArray[52])
                        {
                                var itemAttemptsTypesTwentyFive = APPLICATION.mResponseArray[52];
                                APPLICATION.mItemAttemptsTypeArrayTwentyFive = itemAttemptsTypesTwentyFive.split(":");
                        }

                        var itemAttemptsTransactionCodesTwentyFive = APPLICATION.mResponseArray[53];
                        APPLICATION.mItemAttemptsTransactionCodeArrayTwentyFive = itemAttemptsTransactionCodesTwentyFive.split(":");
			
			//TwentySix
                        if (APPLICATION.mResponseArray[54])
                        {
                                var itemAttemptsTypesTwentySix = APPLICATION.mResponseArray[54];
                                APPLICATION.mItemAttemptsTypeArrayTwentySix = itemAttemptsTypesTwentySix.split(":");
                        }

                        var itemAttemptsTransactionCodesTwentySix = APPLICATION.mResponseArray[55];
                        APPLICATION.mItemAttemptsTransactionCodeArrayTwentySix = itemAttemptsTransactionCodesTwentySix.split(":");

			APPLICATION.mEvaluationsID = APPLICATION.mResponseArray[56];

			//add_game_F
	
			APPLICATION.mHud.setUsername(APPLICATION.mFirstName,APPLICATION.mLastName);
			if (application.mEvaluationsID == 1)
			{
				application.mCoreStateMachine.changeState(application.mNORMAL_CORE_APPLICATION);
			}
			if (application.mEvaluationsID == 2)
			{
				application.mCoreStateMachine.changeState(application.mPRACTICE_APPLICATION);
			}
		}
	}

	else if (application.mBadUsername == true)
	{
		application.mBadUsername = false;
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mSIGNUP_STUDENT_APPLICATION);
                var v = 'BAD USERNAME';
                APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
	}
	else if (application.mBadPassword == true)
	{
		application.mBadPassword = false;
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mSIGNUP_STUDENT_APPLICATION);
                var v = 'BAD PASSWORD';
                APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
	}
        
	else if (APPLICATION.mGame.mTimeSinceEpoch > parseInt(application.mStateEnterTime + application.mStateThresholdTime))
	{
                var v = 'LOGIN TIMED OUT';
                APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mSIGNUP_STUDENT_APPLICATION);
	}
},

exit: function(application)
{
	if (application.mStateLogsExit)
	{
		application.log('APPLICATION::SIGNUP_STUDENT_WAIT_APPLICATION exit');
	}
	//lets show homeselect
       	APPLICATION.mHud.mHome.setVisibility(true);
	application.mBadPassword = false;
	application.mBadUsername = false;
}

});

var SIGNUP_SCHOOL_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        application.mLoggedIn = false;
        if (application.mStateLogs)
        {
                application.log('APPLICATION::SIGNUP_SCHOOL_APPLICATION');
        }

        if (APPLICATION.mCoreStateMachine.mPreviousState == APPLICATION.mSIGNUP_SCHOOL_WAIT_APPLICATION)
        {
                APPLICATION.log('1');
                //dont reinstantiate class... just set visible
                APPLICATION.mGame.mLoginButton.setVisibility(true);
                APPLICATION.mGame.mUsernameLabel.setVisibility(true);
                APPLICATION.mGame.mUsernameTextBox.setVisibility(true);
                APPLICATION.mGame.mPasswordOneLabel.setVisibility(true);
                APPLICATION.mGame.mPasswordOneTextBox.setVisibility(true);
                APPLICATION.mGame.mPasswordTwoLabel.setVisibility(true);
                APPLICATION.mGame.mPasswordTwoTextBox.setVisibility(true);
                APPLICATION.mGame.mNameLabel.setVisibility(true);
                APPLICATION.mGame.mNameTextBox.setVisibility(true);
                APPLICATION.mGame.mCityLabel.setVisibility(true);
                APPLICATION.mGame.mCityTextBox.setVisibility(true);
                APPLICATION.mGame.mStateLabel.setVisibility(true);
                APPLICATION.mGame.mStateTextBox.setVisibility(true);
                APPLICATION.mGame.mZipLabel.setVisibility(true);
                APPLICATION.mGame.mZipTextBox.setVisibility(true);
                
		APPLICATION.mGame.mEmailOneLabel.setVisibility(true);
                APPLICATION.mGame.mEmailOneTextBox.setVisibility(true);
		
		APPLICATION.mGame.mEmailTwoLabel.setVisibility(true);
                APPLICATION.mGame.mEmailTwoTextBox.setVisibility(true);
		
		APPLICATION.mGame.mCodeLabel.setVisibility(true);
                APPLICATION.mGame.mCodeTextBox.setVisibility(true);
        }
        else
        {
                APPLICATION.log('2');
                if (application.mGame)
                {
                        application.mGame.destructor();
                        application.mGame = 0;
                }
                application.mGame = new SignupSchool(APPLICATION);
        }
        application.mRef_id = 'signup_school';
        application.mGameName = "signup_school";
        application.mLoggedIn = false;
        application.mDataToRead = false;

        application.mResponseArray = [];

        //lets hide homeselect
        APPLICATION.mHud.mHome.setVisibility(false);
},

execute: function(application)
{
        if (application.mStateLogsExecute)
        {
                application.log('APPLICATION::SIGNUP_SCHOOL_APPLICATION execute');
        }

        if (application.mSent == true)
        {
                application.mCoreStateMachine.changeState(application.mSIGNUP_SCHOOL_WAIT_APPLICATION);
        }
        else
        {
        }
},

exit: function(application)
{
        if (application.mStateLogsExit)
        {
                application.log('APPLICATION::SIGNUP_SCHOOL_APPLICATION exit');
        }
        //lets show homeselect
        APPLICATION.mHud.mHome.setVisibility(true);
}
});

var SIGNUP_SCHOOL_WAIT_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
	if (application.mStateLogs)
	{
		application.log('APPLICATION::SIGNUP_SCHOOL_WAIT_APPLICATION');
	}
	application.mStateEnterTime = APPLICATION.mGame.mTimeSinceEpoch; 

        //gets called right away
        APPLICATION.mGame.mLoginButton.setVisibility(false);
        APPLICATION.mGame.mUsernameLabel.setVisibility(false);
        APPLICATION.mGame.mUsernameTextBox.setVisibility(false);
        APPLICATION.mGame.mPasswordOneLabel.setVisibility(false);
        APPLICATION.mGame.mPasswordOneTextBox.setVisibility(false);
        APPLICATION.mGame.mPasswordTwoLabel.setVisibility(false);
        APPLICATION.mGame.mPasswordTwoTextBox.setVisibility(false);
        APPLICATION.mGame.mNameLabel.setVisibility(true);
        APPLICATION.mGame.mNameTextBox.setVisibility(true);
        APPLICATION.mGame.mCityLabel.setVisibility(true);
        APPLICATION.mGame.mCityTextBox.setVisibility(true);
        APPLICATION.mGame.mStateLabel.setVisibility(true);
        APPLICATION.mGame.mStateTextBox.setVisibility(true);
        APPLICATION.mGame.mZipLabel.setVisibility(true);
        APPLICATION.mGame.mZipTextBox.setVisibility(true);
        APPLICATION.mGame.mEmailOneLabel.setVisibility(true);
        APPLICATION.mGame.mEmailOneTextBox.setVisibility(true);
        APPLICATION.mGame.mEmailTwoLabel.setVisibility(true);
        APPLICATION.mGame.mEmailTwoTextBox.setVisibility(true);
        APPLICATION.mGame.mCodeLabel.setVisibility(true);
        APPLICATION.mGame.mCodeTextBox.setVisibility(true);

        var v = 'PLEASE WAIT LOGGING IN';
        APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::SIGNUP_SCHOOL_WAIT_APPLICATION execute');
	}

	//4 things can happen when you have sent a login request
	
	if (application.mDataToRead == true) //we have some data to read
	{
		//lets sniff packet
                APPLICATION.mLoggedIn = APPLICATION.mResponseArray[1];
		APPLICATION.mDataToRead = false;
	}
	
	else if (application.mLoggedIn == true)
	{
                APPLICATION.mUsername = APPLICATION.mResponseArray[2];
                APPLICATION.mRole = APPLICATION.mResponseArray[3];
               	
		//APPLICATION.mHud.setUsername(APPLICATION.mFirstName,APPLICATION.mLastName);

		application.mCoreStateMachine.changeState(application.mREPORT_CORE_APPLICATION);
	}

	else if (application.mBadUsername == true)
	{
		application.mBadUsername = false;
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mSIGNUP_SCHOOL_APPLICATION);
                var v = 'BAD USERNAME';
                APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
	}
	else if (application.mBadPassword == true)
	{
		application.mBadPassword = false;
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mSIGNUP_SCHOOL_APPLICATION);
                var v = 'BAD PASSWORD';
                APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
	}
        
	else if (APPLICATION.mGame.mTimeSinceEpoch > parseInt(application.mStateEnterTime + application.mStateThresholdTime))
	{
                var v = 'LOGIN TIMED OUT';
                APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mSIGNUP_SCHOOL_APPLICATION);
	}
},

exit: function(application)
{
	if (application.mStateLogsExit)
	{
		application.log('APPLICATION::SIGNUP_SCHOOL_WAIT_APPLICATION exit');
	}
	//lets show homeselect
       	APPLICATION.mHud.mHome.setVisibility(true);
	application.mBadPassword = false;
	application.mBadUsername = false;
}

});

var NORMAL_CORE_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
	if (application.mStateLogs)
	{
		application.log('APPLICATION::NORMAL_CORE_APPLICATION');
	}
    
	//if already have a game destroy it.
        if (application.mGame)
        {
        	application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new NormalGame(APPLICATION);
	application.calcScore();
},

execute: function(application)
{
},

exit: function(application)
{

},
exit: function(application)
{
	if (application.mStateLogsExit)
	{
		application.log('APPLICATION::NORMAL_CORE_APPLICATION exit');
	}
}

});

var REPORT_CORE_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
	if (application.mStateLogs)
	{
		application.log('APPLICATION::REPORT_CORE_APPLICATION');
	}
      	window.location.replace("/web/navigation/school/main_menu.php");
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::REPORT_CORE_APPLICATION execute');
	}
},
exit: function(application)
{
	if (application.mStateLogsExit)
	{
		application.log('APPLICATION::REPORT_CORE_APPLICATION exit');
	}
}

});

var PRACTICE_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::PRACTICE_APPLICATION');
        }
	application.mPracticeItemID = application.mGame.mSheet.getItem().mPracticeInfo.mMesh.options[application.mGame.mSheet.getItem().mPracticeInfo.mMesh.selectedIndex].text; 

	//if already have a game destroy it.
        if (application.mGame)
        {
        	application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new PracticeGame(APPLICATION);

},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::PRACTICE_APPLICATION execute');
	}
},

exit: function(application)
{
}

});

var TIMES_TABLES_TWO_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::TIMES_TABLES_TWO_APPLICATION');
        }

	//if already have a game destroy it.
        if (application.mGame)
        {
        	application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new TimesTablesTwoGame(APPLICATION);
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::TIMES_TABLES_TWO_APPLICATION execute');
	}
},

exit: function(application)
{
}

});

var TIMES_TABLES_THREE_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::TIMES_TABLES_THREE_APPLICATION');
        }

	//if already have a game destroy it.
        if (application.mGame)
        {
        	application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new TimesTablesThreeGame(APPLICATION);
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::TIMES_TABLES_THREE_APPLICATION execute');
	}
},

exit: function(application)
{
}

});

var TIMES_TABLES_FOUR_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::TIMES_TABLES_FOUR_APPLICATION');
        }

	//if already have a game destroy it.
        if (application.mGame)
        {
        	application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new TimesTablesFourGame(APPLICATION);
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::TIMES_TABLES_FOUR_APPLICATION execute');
	}
},

exit: function(application)
{
}

});

var TIMES_TABLES_FIVE_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::TIMES_TABLES_FIVE_APPLICATION');
        }

	//if already have a game destroy it.
        if (application.mGame)
        {
        	application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new TimesTablesFiveGame(APPLICATION);
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::TIMES_TABLES_FIVE_APPLICATION execute');
	}
},

exit: function(application)
{
}

});

var TIMES_TABLES_SIX_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::TIMES_TABLES_SIX_APPLICATION');
        }

	//if already have a game destroy it.
        if (application.mGame)
        {
        	application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new TimesTablesSixGame(APPLICATION);
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::TIMES_TABLES_SIX_APPLICATION execute');
	}
},

exit: function(application)
{
}

});

var TIMES_TABLES_SEVEN_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::TIMES_TABLES_SEVEN_APPLICATION');
        }

	//if already have a game destroy it.
        if (application.mGame)
        {
        	application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new TimesTablesSevenGame(APPLICATION);
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::TIMES_TABLES_SEVEN_APPLICATION execute');
	}
},

exit: function(application)
{
}

});

var TIMES_TABLES_EIGHT_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::TIMES_TABLES_EIGHT_APPLICATION');
        }

	//if already have a game destroy it.
        if (application.mGame)
        {
        	application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new TimesTablesEightGame(APPLICATION);
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::TIMES_TABLES_EIGHT_APPLICATION execute');
	}
},

exit: function(application)
{
}

});

var TIMES_TABLES_NINE_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::TIMES_TABLES_NINE_APPLICATION');
        }

	//if already have a game destroy it.
        if (application.mGame)
        {
        	application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new TimesTablesNineGame(APPLICATION);
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::TIMES_TABLES_NINE_APPLICATION execute');
	}
},

exit: function(application)
{
}

});

var TIMES_TABLES_THE_IZZY_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::TIMES_TABLES_THE_IZZY_APPLICATION');
        }

	//if already have a game destroy it.
        if (application.mGame)
        {
        	application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new TimesTablesTheIzzyGame(APPLICATION);
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::TIMES_TABLES_THE_IZZY_APPLICATION execute');
	}
},

exit: function(application)
{
}

});

var TIMES_TABLES_ADD_SUBTRACT_WITHIN_FIVE_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::TIMES_TABLES_ADD_SUBTRACT_WITHIN_FIVE_APPLICATION');
        }

	//if already have a game destroy it.
        if (application.mGame)
        {
        	application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new TimesTablesAddSubtractWithinFiveGame(APPLICATION);
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::TIMES_TABLES_ADD_SUBTRACT_WITHIN_FIVE_APPLICATION execute');
	}
},

exit: function(application)
{
}

});

var TERRA_NOVA_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::TERRA_NOVA_APPLICATION');
        }

	//if already have a game destroy it.
        if (application.mGame)
        {
        	application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new TerraNovaGame(APPLICATION);
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::TERRA_NOVA_APPLICATION execute');
	}
},

exit: function(application)
{
}

});

var TEST_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::TEST_APPLICATION');
        }

	//if already have a game destroy it.
        if (application.mGame)
        {
        	application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new TestGame(APPLICATION);
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::TEST_APPLICATION execute');
	}
	application.mHud.setOrange('TestID:' + APPLICATION.mEvaluationsAttemptsID);
},

exit: function(application)
{
}

});

var TERRA_NOVA_TEST_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::TERRA_NOVA_TEST_APPLICATION');
        }

	//if already have a game destroy it.
        if (application.mGame)
        {
        	application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new TerraNovaTestGame(APPLICATION);
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::TERRA_NOVA_TEST_APPLICATION execute');
	}
},

exit: function(application)
{
}

});

var HOMEWORK_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::HOMEWORK_APPLICATION');
        }

	//if already have a game destroy it.
        if (application.mGame)
        {
        	application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new HomeworkGame(APPLICATION);
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::HOMEWORK_APPLICATION execute');
	}
},

exit: function(application)
{
}

});

var TERRA_NOVA_HOMEWORK_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::TERRA_NOVA_HOMEWORK_APPLICATION');
        }

	//if already have a game destroy it.
        if (application.mGame)
        {
        	application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new TerraNovaHomeworkGame(APPLICATION);
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::TERRA_NOVA_HOMEWORK_APPLICATION execute');
	}
},

exit: function(application)
{
}

});

var TIMES_TABLES_THE_SUPER_IZZY_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::TIMES_TABLES_THE_SUPER_IZZY_APPLICATION');
        }

	//if already have a game destroy it.
        if (application.mGame)
        {
        	application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new TimesTablesTheSuperIzzyGame(APPLICATION);
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::TIMES_TABLES_THE_SUPER_IZZY_APPLICATION execute');
	}
},

exit: function(application)
{
}

});

var BASIC_SKILLS_FOURTH_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::BASIC_SKILLS_FOURTH_APPLICATION');
        }

	//if already have a game destroy it.
        if (application.mGame)
        {
        	application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new BasicSkillsFourthGame(APPLICATION);
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::BASIC_SKILLS_FOURTH_APPLICATION execute');
	}
},

exit: function(application)
{
}

});

var BASIC_SKILLS_FIFTH_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::BASIC_SKILLS_FIFTH_APPLICATION');
        }

	//if already have a game destroy it.
        if (application.mGame)
        {
        	application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new BasicSkillsFifthGame(APPLICATION);
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::BASIC_SKILLS_FIFTH_APPLICATION execute');
	}
},

exit: function(application)
{
}

});

var BASIC_SKILLS_THIRD_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::BASIC_SKILLS_THIRD_APPLICATION');
        }

	//if already have a game destroy it.
        if (application.mGame)
        {
        	application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new BasicSkillsThirdGame(APPLICATION);
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::BASIC_SKILLS_THIRD_APPLICATION execute');
	}
},

exit: function(application)
{
}

});

var BASIC_SKILLS_SECOND_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::BASIC_SKILLS_SECOND_APPLICATION');
        }

	//if already have a game destroy it.
        if (application.mGame)
        {
        	application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new BasicSkillsSecondGame(APPLICATION);
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::BASIC_SKILLS_SECOND_APPLICATION execute');
	}
},

exit: function(application)
{
}

});

var BASIC_SKILLS_FIRST_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::BASIC_SKILLS_FIRST_APPLICATION');
        }

	//if already have a game destroy it.
        if (application.mGame)
        {
        	application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new BasicSkillsFirstGame(APPLICATION);
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::BASIC_SKILLS_FIRST_APPLICATION execute');
	}
},

exit: function(application)
{
}

});

var BASIC_SKILLS_KINDERGARTEN_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::BASIC_SKILLS_KINDERGARTEN_APPLICATION');
        }

	//if already have a game destroy it.
        if (application.mGame)
        {
        	application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new BasicSkillsKindergartenGame(APPLICATION);
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::BASIC_SKILLS_KINDERGARTEN_APPLICATION execute');
	}
},

exit: function(application)
{
}

});

var MAKE_TEN_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::MAKE_TEN_APPLICATION');
        }

	//if already have a game destroy it.
        if (application.mGame)
        {
        	application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new MakeTenGame(APPLICATION);
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::MAKE_TEN_APPLICATION execute');
	}
},

exit: function(application)
{
}

});

//add_game_G
