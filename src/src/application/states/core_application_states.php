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

	if (application.mEvaluationsID == 41 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mMAIN_MENU_APPLICATION)
	{
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mMAIN_MENU_APPLICATION);
	}

	if (application.mEvaluationsID == 1 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mNORMAL_CORE_APPLICATION)
	{
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mNORMAL_CORE_APPLICATION);
	}

	if (application.mEvaluationsID == 2 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mPRACTICE_APPLICATION)
	{
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mPRACTICE_APPLICATION);
	}
	
	//K	
	if (application.mEvaluationsID == 25 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mK_CC_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mK_CC_APPLICATION);
	}

	if (application.mEvaluationsID == 26 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mK_OA_A_4_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mK_OA_A_4_APPLICATION);
	}

	if (application.mEvaluationsID == 13 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mK_OA_A_5_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mK_OA_A_5_APPLICATION);
	}



	//1
	if (application.mEvaluationsID == 29 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mG1_OA_B_3_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mG1_OA_B_3_APPLICATION);
	}

	if (application.mEvaluationsID == 27 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mG1_OA_C_6_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mG1_OA_C_6_APPLICATION);
	}

	if (application.mEvaluationsID == 24 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mG1_NBT_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mG1_NBT_APPLICATION);
	}


	//2
	if (application.mEvaluationsID == 28 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mG2_OA_B_2_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mG2_OA_B_2_APPLICATION);
	}

	if (application.mEvaluationsID == 23 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mG2_NBT_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mG2_NBT_APPLICATION);
	}


	//3
	if (application.mEvaluationsID == 12 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mG3_OA_C_7_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mG3_OA_C_7_APPLICATION);
	}

	if (application.mEvaluationsID == 22 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mG3_NBT_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mG3_NBT_APPLICATION);
	}

	
	//4
	if (application.mEvaluationsID == 11 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mG4_OA_B_4_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mG4_OA_B_4_APPLICATION);
	}
	if (application.mEvaluationsID == 14 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mG4_NBT_B_4_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mG4_NBT_B_4_APPLICATION);
	}
	if (application.mEvaluationsID == 20 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mG4_NBT_B_5_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mG4_NBT_B_5_APPLICATION);
	}
	if (application.mEvaluationsID == 21 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mG4_NBT_B_6_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mG4_NBT_B_6_APPLICATION);
	}
	if (application.mEvaluationsID == 30 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mG4_NF_B_3_C_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mG4_NF_B_3_C_APPLICATION);
	}

	//5	
	if (application.mEvaluationsID == 31 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mG5_OA_A_1_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mG5_OA_A_1_APPLICATION);
	}
	if (application.mEvaluationsID == 32 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mG5_NBT_B_5_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mG5_NBT_B_5_APPLICATION);
	}
	if (application.mEvaluationsID == 33 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mG5_NBT_B_6_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mG5_NBT_B_6_APPLICATION);
	}
	if (application.mEvaluationsID == 34 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mG5_NBT_B_7_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mG5_NBT_B_7_APPLICATION);
	}
	if (application.mEvaluationsID == 35 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mG5_NF_A_1_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mG5_NF_A_1_APPLICATION);
	}
	
	//6
	if (application.mEvaluationsID == 36 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mG6_RP_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mG6_RP_APPLICATION);
	}
	if (application.mEvaluationsID == 37 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mG6_NS_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mG6_NS_APPLICATION);
	}
	if (application.mEvaluationsID == 38 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mG6_EE_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mG6_EE_APPLICATION);
	}
	if (application.mEvaluationsID == 39 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mG6_G_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mG6_G_APPLICATION);
	}
	if (application.mEvaluationsID == 40 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mG6_SP_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mG6_SP_APPLICATION);
	}

	
	//TABLES
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
	if (application.mEvaluationsID == 19 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mTIMES_TABLES_THE_SUPER_IZZY_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mTIMES_TABLES_THE_SUPER_IZZY_APPLICATION);
	}

	//TESTS
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
	if (application.mEvaluationsID == 18 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mTEST_PREP_APPLICATION)
	{
		application.mCoreStateMachine.changeState(application.mTEST_PREP_APPLICATION);
	}
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

//maybe wait for login....
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
                	APPLICATION.mMilestonesStandard = APPLICATION.mResponseArray[6];
                	APPLICATION.mRole = 1;
			
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
			
			//Eleven	
			var itemAttemptsTypesEleven = APPLICATION.mResponseArray[26];
			APPLICATION.mItemAttemptsTypeArrayEleven = itemAttemptsTypesEleven.split(":");
	
			var itemAttemptsTransactionCodesEleven = APPLICATION.mResponseArray[27];
			APPLICATION.mItemAttemptsTransactionCodeArrayEleven = itemAttemptsTransactionCodesEleven.split(":");



			//Twelve	 
			var itemAttemptsTypesTwelve = APPLICATION.mResponseArray[28];
			APPLICATION.mItemAttemptsTypeArrayTwelve = itemAttemptsTypesTwelve.split(":");
	
			var itemAttemptsTransactionCodesTwelve = APPLICATION.mResponseArray[29];
			APPLICATION.mItemAttemptsTransactionCodeArrayTwelve = itemAttemptsTransactionCodesTwelve.split(":");

			//Thirteen	
			var itemAttemptsTypesThirteen = APPLICATION.mResponseArray[30];
			APPLICATION.mItemAttemptsTypeArrayThirteen = itemAttemptsTypesThirteen.split(":");
	
			var itemAttemptsTransactionCodesThirteen = APPLICATION.mResponseArray[31];
			APPLICATION.mItemAttemptsTransactionCodeArrayThirteen = itemAttemptsTransactionCodesThirteen.split(":");
			
			//Fourteen	
			var itemAttemptsTypesFourteen = APPLICATION.mResponseArray[32];
			APPLICATION.mItemAttemptsTypeArrayFourteen = itemAttemptsTypesFourteen.split(":");
	
			var itemAttemptsTransactionCodesFourteen = APPLICATION.mResponseArray[33];
			APPLICATION.mItemAttemptsTransactionCodeArrayFourteen = itemAttemptsTransactionCodesFourteen.split(":");
			
			//Fifteen	
			var itemAttemptsTypesFifteen = APPLICATION.mResponseArray[34];
			APPLICATION.mItemAttemptsTypeArrayFifteen = itemAttemptsTypesFifteen.split(":");
	
			var itemAttemptsTransactionCodesFifteen = APPLICATION.mResponseArray[35];
			APPLICATION.mItemAttemptsTransactionCodeArrayFifteen = itemAttemptsTransactionCodesFifteen.split(":");
			
			//Sixteen	
			var itemAttemptsTypesSixteen = APPLICATION.mResponseArray[36];
			APPLICATION.mItemAttemptsTypeArraySixteen = itemAttemptsTypesSixteen.split(":");
	
			var itemAttemptsTransactionCodesSixteen = APPLICATION.mResponseArray[37];
			APPLICATION.mItemAttemptsTransactionCodeArraySixteen = itemAttemptsTransactionCodesSixteen.split(":");
			
			//Seventeen	
			var itemAttemptsTypesSeventeen = APPLICATION.mResponseArray[38];
			APPLICATION.mItemAttemptsTypeArraySeventeen = itemAttemptsTypesSeventeen.split(":");
	
			var itemAttemptsTransactionCodesSeventeen = APPLICATION.mResponseArray[39];
			APPLICATION.mItemAttemptsTransactionCodeArraySeventeen = itemAttemptsTransactionCodesSeventeen.split(":");
			
			//Eighteen	
			var itemAttemptsTypesEighteen = APPLICATION.mResponseArray[40];
			APPLICATION.mItemAttemptsTypeArrayEighteen = itemAttemptsTypesEighteen.split(":");
	
			var itemAttemptsTransactionCodesEighteen = APPLICATION.mResponseArray[41];
			APPLICATION.mItemAttemptsTransactionCodeArrayEighteen = itemAttemptsTransactionCodesEighteen.split(":");
			
			//Nineteen	 
			var itemAttemptsTypesNineteen = APPLICATION.mResponseArray[42];
			APPLICATION.mItemAttemptsTypeArrayNineteen = itemAttemptsTypesNineteen.split(":");
	
			var itemAttemptsTransactionCodesNineteen = APPLICATION.mResponseArray[43];
			APPLICATION.mItemAttemptsTransactionCodeArrayNineteen = itemAttemptsTransactionCodesNineteen.split(":");
			
			//Twenty	 
			var itemAttemptsTypesTwenty = APPLICATION.mResponseArray[44];
			APPLICATION.mItemAttemptsTypeArrayTwenty = itemAttemptsTypesTwenty.split(":");
	
			var itemAttemptsTransactionCodesTwenty = APPLICATION.mResponseArray[45];
			APPLICATION.mItemAttemptsTransactionCodeArrayTwenty = itemAttemptsTransactionCodesTwenty.split(":");
			
			//TwentyOne	 
			var itemAttemptsTypesTwentyOne = APPLICATION.mResponseArray[46];
			APPLICATION.mItemAttemptsTypeArrayTwentyOne = itemAttemptsTypesTwentyOne.split(":");
	
			var itemAttemptsTransactionCodesTwentyOne = APPLICATION.mResponseArray[47];
			APPLICATION.mItemAttemptsTransactionCodeArrayTwentyOne = itemAttemptsTransactionCodesTwentyOne.split(":");
			
			//TwentyTwo	 
			var itemAttemptsTypesTwentyTwo = APPLICATION.mResponseArray[48];
			APPLICATION.mItemAttemptsTypeArrayTwentyTwo = itemAttemptsTypesTwentyTwo.split(":");
	
			var itemAttemptsTransactionCodesTwentyTwo = APPLICATION.mResponseArray[49];
			APPLICATION.mItemAttemptsTransactionCodeArrayTwentyTwo = itemAttemptsTransactionCodesTwentyTwo.split(":");
			
			//TwentyThree	 
			var itemAttemptsTypesTwentyThree = APPLICATION.mResponseArray[50];
			APPLICATION.mItemAttemptsTypeArrayTwentyThree = itemAttemptsTypesTwentyThree.split(":");
	
			var itemAttemptsTransactionCodesTwentyThree = APPLICATION.mResponseArray[51];
			APPLICATION.mItemAttemptsTransactionCodeArrayTwentyThree = itemAttemptsTransactionCodesTwentyThree.split(":");
			
			//TwentyFour	 
			var itemAttemptsTypesTwentyFour = APPLICATION.mResponseArray[52];
			APPLICATION.mItemAttemptsTypeArrayTwentyFour = itemAttemptsTypesTwentyFour.split(":");
	
			var itemAttemptsTransactionCodesTwentyFour = APPLICATION.mResponseArray[53];
			APPLICATION.mItemAttemptsTransactionCodeArrayTwentyFour = itemAttemptsTransactionCodesTwentyFour.split(":");
			


			//TwentyFive	 
			var itemAttemptsTypesTwentyFive = APPLICATION.mResponseArray[54];
			APPLICATION.mItemAttemptsTypeArrayTwentyFive = itemAttemptsTypesTwentyFive.split(":");
	
			var itemAttemptsTransactionCodesTwentyFive = APPLICATION.mResponseArray[55];
			APPLICATION.mItemAttemptsTransactionCodeArrayTwentyFive = itemAttemptsTransactionCodesTwentyFive.split(":");
			


			//TwentySix	 
			var itemAttemptsTypesTwentySix = APPLICATION.mResponseArray[56];
			APPLICATION.mItemAttemptsTypeArrayTwentySix = itemAttemptsTypesTwentySix.split(":");
	
			var itemAttemptsTransactionCodesTwentySix = APPLICATION.mResponseArray[57];
			APPLICATION.mItemAttemptsTransactionCodeArrayTwentySix = itemAttemptsTransactionCodesTwentySix.split(":");


			//TwentySeven	 
			var itemAttemptsTypesTwentySeven = APPLICATION.mResponseArray[58];
			APPLICATION.mItemAttemptsTypeArrayTwentySeven = itemAttemptsTypesTwentySeven.split(":");
	
			var itemAttemptsTransactionCodesTwentySeven = APPLICATION.mResponseArray[59];
			APPLICATION.mItemAttemptsTransactionCodeArrayTwentySeven = itemAttemptsTransactionCodesTwentySeven.split(":");
			
			//TwentyEight	 
			var itemAttemptsTypesTwentyEight = APPLICATION.mResponseArray[60];
			APPLICATION.mItemAttemptsTypeArrayTwentyEight = itemAttemptsTypesTwentyEight.split(":");
	
			var itemAttemptsTransactionCodesTwentyEight = APPLICATION.mResponseArray[61];
			APPLICATION.mItemAttemptsTransactionCodeArrayTwentyEight = itemAttemptsTransactionCodesTwentyEight.split(":");
			
			//TwentyNine	 
			var itemAttemptsTypesTwentyNine = APPLICATION.mResponseArray[62];
			APPLICATION.mItemAttemptsTypeArrayTwentyNine = itemAttemptsTypesTwentyNine.split(":");
	
			var itemAttemptsTransactionCodesTwentyNine = APPLICATION.mResponseArray[63];
			APPLICATION.mItemAttemptsTransactionCodeArrayTwentyNine = itemAttemptsTransactionCodesTwentyNine.split(":");

                      	//Thirty
                        var itemAttemptsTypesThirty = APPLICATION.mResponseArray[64];
                        APPLICATION.mItemAttemptsTypeArrayThirty = itemAttemptsTypesThirty.split(":");

                        var itemAttemptsTransactionCodesThirty = APPLICATION.mResponseArray[65];
                        APPLICATION.mItemAttemptsTransactionCodeArrayThirty = itemAttemptsTransactionCodesThirty.split(":");

                        //ThirtyOne
                        var itemAttemptsTypesThirtyOne = APPLICATION.mResponseArray[66];
                        APPLICATION.mItemAttemptsTypeArrayThirtyOne = itemAttemptsTypesThirtyOne.split(":");

                        var itemAttemptsTransactionCodesThirtyOne = APPLICATION.mResponseArray[67];
                        APPLICATION.mItemAttemptsTransactionCodeArrayThirtyOne = itemAttemptsTransactionCodesThirtyOne.split(":");

                        //ThirtyTwo
                        var itemAttemptsTypesThirtyTwo = APPLICATION.mResponseArray[68];
                        APPLICATION.mItemAttemptsTypeArrayThirtyTwo = itemAttemptsTypesThirtyTwo.split(":");

                        var itemAttemptsTransactionCodesThirtyTwo = APPLICATION.mResponseArray[69];
                        APPLICATION.mItemAttemptsTransactionCodeArrayThirtyTwo = itemAttemptsTransactionCodesThirtyTwo.split(":");

                        //ThirtyThree
                        var itemAttemptsTypesThirtyThree = APPLICATION.mResponseArray[70];
                        APPLICATION.mItemAttemptsTypeArrayThirtyThree = itemAttemptsTypesThirtyThree.split(":");

                        var itemAttemptsTransactionCodesThirtyThree = APPLICATION.mResponseArray[71];
                        APPLICATION.mItemAttemptsTransactionCodeArrayThirtyThree = itemAttemptsTransactionCodesThirtyThree.split(":");

                        //ThirtyFour
                        var itemAttemptsTypesThirtyFour = APPLICATION.mResponseArray[72];
                        APPLICATION.mItemAttemptsTypeArrayThirtyFour = itemAttemptsTypesThirtyFour.split(":");

                        var itemAttemptsTransactionCodesThirtyFour = APPLICATION.mResponseArray[73];
                        APPLICATION.mItemAttemptsTransactionCodeArrayThirtyFour = itemAttemptsTransactionCodesThirtyFour.split(":");

                        //ThirtyFive
                        var itemAttemptsTypesThirtyFive = APPLICATION.mResponseArray[74];
                        APPLICATION.mItemAttemptsTypeArrayThirtyFive = itemAttemptsTypesThirtyFive.split(":");

                        var itemAttemptsTransactionCodesThirtyFive = APPLICATION.mResponseArray[75];
                        APPLICATION.mItemAttemptsTransactionCodeArrayThirtyFive = itemAttemptsTransactionCodesThirtyFive.split(":");

                        //ThirtySix
                        var itemAttemptsTypesThirtySix = APPLICATION.mResponseArray[76];
                        APPLICATION.mItemAttemptsTypeArrayThirtySix = itemAttemptsTypesThirtySix.split(":");

                        var itemAttemptsTransactionCodesThirtySix = APPLICATION.mResponseArray[77];
                        APPLICATION.mItemAttemptsTransactionCodeArrayThirtySix = itemAttemptsTransactionCodesThirtySix.split(":");
                        
			//ThirtySeven
                        var itemAttemptsTypesThirtySeven = APPLICATION.mResponseArray[78];
                        APPLICATION.mItemAttemptsTypeArrayThirtySeven = itemAttemptsTypesThirtySeven.split(":");

                        var itemAttemptsTransactionCodesThirtySeven = APPLICATION.mResponseArray[79];
                        APPLICATION.mItemAttemptsTransactionCodeArrayThirtySeven = itemAttemptsTransactionCodesThirtySeven.split(":");

			//ThirtyEight
                        var itemAttemptsTypesThirtyEight = APPLICATION.mResponseArray[80];
                        APPLICATION.mItemAttemptsTypeArrayThirtyEight = itemAttemptsTypesThirtyEight.split(":");

                        var itemAttemptsTransactionCodesThirtyEight = APPLICATION.mResponseArray[81];
                        APPLICATION.mItemAttemptsTransactionCodeArrayThirtyEight = itemAttemptsTransactionCodesThirtyEight.split(":");

			//ThirtyNine
                        var itemAttemptsTypesThirtyNine = APPLICATION.mResponseArray[82];
                        APPLICATION.mItemAttemptsTypeArrayThirtyNine = itemAttemptsTypesThirtyNine.split(":");

                        var itemAttemptsTransactionCodesThirtyNine = APPLICATION.mResponseArray[83];
                        APPLICATION.mItemAttemptsTransactionCodeArrayThirtyNine = itemAttemptsTransactionCodesThirtyNine.split(":");

			//Forty
                        var itemAttemptsTypesForty = APPLICATION.mResponseArray[84];
                        APPLICATION.mItemAttemptsTypeArrayForty = itemAttemptsTypesForty.split(":");

                        var itemAttemptsTransactionCodesForty = APPLICATION.mResponseArray[85];
                        APPLICATION.mItemAttemptsTransactionCodeArrayForty = itemAttemptsTransactionCodesForty.split(":");

			
			APPLICATION.mEvaluationsID = APPLICATION.mResponseArray[86];


			//add_game_E	
	
			APPLICATION.mHud.setUsername(APPLICATION.mFirstName,APPLICATION.mLastName);

			application.mCoreStateMachine.changeState(application.mMAIN_MENU_APPLICATION);
		}
	}

	else if (application.mBadUsername == true)
	{
		application.mBadUsername = false;
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mLOGIN_STUDENT_APPLICATION);
                var v = 'BAD USERNAME';
                APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
		APPLICATION.log('mBadUsername');
	}
	else if (application.mBadPassword == true)
	{
		application.mBadPassword = false;
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mLOGIN_STUDENT_APPLICATION);
                var v = 'BAD PASSWORD';
                APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
		APPLICATION.log('mBadPassword');
	}
	else if (APPLICATION.mGame.mTimeSinceEpoch > parseInt(application.mStateEnterTime + application.mStateThresholdTime))
	{
                var v = 'LOGIN TIMED OUT';
                APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mLOGIN_STUDENT_APPLICATION);
		APPLICATION.log('LOGIN TIMED OUT');
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
        APPLICATION.mHud.setOrange('G: LoginSchol');
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
        APPLICATION.mHud.setOrange('Signup Student');
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

                        //Eleven
                        var itemAttemptsTypesEleven = APPLICATION.mResponseArray[26];
                        APPLICATION.mItemAttemptsTypeArrayEleven = itemAttemptsTypesEleven.split(":");

                        var itemAttemptsTransactionCodesEleven = APPLICATION.mResponseArray[27];
                        APPLICATION.mItemAttemptsTransactionCodeArrayEleven = itemAttemptsTransactionCodesEleven.split(":");


			//Twelve	
			var itemAttemptsTypesTwelve = APPLICATION.mResponseArray[28];
			APPLICATION.mItemAttemptsTypeArrayTwelve = itemAttemptsTypesTwelve.split(":");
	
			var itemAttemptsTransactionCodesTwelve = APPLICATION.mResponseArray[29];
			APPLICATION.mItemAttemptsTransactionCodeArrayTwelve = itemAttemptsTransactionCodesTwelve.split(":");

			//Thirteen	
			var itemAttemptsTypesThirteen = APPLICATION.mResponseArray[30];
			APPLICATION.mItemAttemptsTypeArrayThirteen = itemAttemptsTypesThirteen.split(":");
	
			var itemAttemptsTransactionCodesThirteen = APPLICATION.mResponseArray[31];
			APPLICATION.mItemAttemptsTransactionCodeArrayThirteen = itemAttemptsTransactionCodesThirteen.split(":");
			
			//Fourteen	
			var itemAttemptsTypesFourteen = APPLICATION.mResponseArray[32];
			APPLICATION.mItemAttemptsTypeArrayFourteen = itemAttemptsTypesFourteen.split(":");
	
			var itemAttemptsTransactionCodesFourteen = APPLICATION.mResponseArray[33];
			APPLICATION.mItemAttemptsTransactionCodeArrayFourteen = itemAttemptsTransactionCodesFourteen.split(":");
			
			//Fifteen	
			var itemAttemptsTypesFifteen = APPLICATION.mResponseArray[34];
			APPLICATION.mItemAttemptsTypeArrayFifteen = itemAttemptsTypesFifteen.split(":");
	
			var itemAttemptsTransactionCodesFifteen = APPLICATION.mResponseArray[35];
			APPLICATION.mItemAttemptsTransactionCodeArrayFifteen = itemAttemptsTransactionCodesFifteen.split(":");
			
			//Sixteen	
			var itemAttemptsTypesSixteen = APPLICATION.mResponseArray[36];
			APPLICATION.mItemAttemptsTypeArraySixteen = itemAttemptsTypesSixteen.split(":");
	
			var itemAttemptsTransactionCodesSixteen = APPLICATION.mResponseArray[37];
			APPLICATION.mItemAttemptsTransactionCodeArraySixteen = itemAttemptsTransactionCodesSixteen.split(":");
			
			//Seventeen	
			var itemAttemptsTypesSeventeen = APPLICATION.mResponseArray[38];
			APPLICATION.mItemAttemptsTypeArraySeventeen = itemAttemptsTypesSeventeen.split(":");
	
			var itemAttemptsTransactionCodesSeventeen = APPLICATION.mResponseArray[39];
			APPLICATION.mItemAttemptsTransactionCodeArraySeventeen = itemAttemptsTransactionCodesSeventeen.split(":");
			
			//Eightteen	
			if (APPLICATION.mResponseArray[40])
			{
				var itemAttemptsTypeEighteen = APPLICATION.mResponseArray[40];
				APPLICATION.mItemAttemptsTypeArrayEighteen = itemAttemptsTypesEighteen.split(":");
			}
			var itemAttemptsTransactionCodesEighteen = APPLICATION.mResponseArray[41];
			APPLICATION.mItemAttemptsTransactionCodeArrayEighteen = itemAttemptsTransactionCodesEighteen.split(":");
			
			//Nineteen	
			if (APPLICATION.mResponseArray[42])
			{
				var itemAttemptsTypesNineteen = APPLICATION.mResponseArray[42];
				APPLICATION.mItemAttemptsTypeArrayNineteen = itemAttemptsTypesNineteen.split(":");
			}
	
			var itemAttemptsTransactionCodesNineteen = APPLICATION.mResponseArray[43];
			APPLICATION.mItemAttemptsTransactionCodeArrayNineteen = itemAttemptsTransactionCodesNineteen.split(":");
			
			//Twenty	
			if (APPLICATION.mResponseArray[44])
			{
				var itemAttemptsTypesTwenty = APPLICATION.mResponseArray[44];
				APPLICATION.mItemAttemptsTypeArrayTwenty = itemAttemptsTypesTwenty.split(":");
			}
	
			var itemAttemptsTransactionCodesTwenty = APPLICATION.mResponseArray[45];
			APPLICATION.mItemAttemptsTransactionCodeArrayTwenty = itemAttemptsTransactionCodesTwenty.split(":");

                       //TwentyOne
                        if (APPLICATION.mResponseArray[46])
                        {
                                var itemAttemptsTypesTwentyOne = APPLICATION.mResponseArray[46];
                                APPLICATION.mItemAttemptsTypeArrayTwentyOne = itemAttemptsTypesTwentyOne.split(":");
                        }

                        var itemAttemptsTransactionCodesTwentyOne = APPLICATION.mResponseArray[47];
                        APPLICATION.mItemAttemptsTransactionCodeArrayTwentyOne = itemAttemptsTransactionCodesTwentyOne.split(":");

			//TwentyTwo
                        if (APPLICATION.mResponseArray[48])
                        {
                                var itemAttemptsTypesTwentyTwo = APPLICATION.mResponseArray[48];
                                APPLICATION.mItemAttemptsTypeArrayTwentyTwo = itemAttemptsTypesTwentyTwo.split(":");
                        }

                        var itemAttemptsTransactionCodesTwentyTwo = APPLICATION.mResponseArray[49];
                        APPLICATION.mItemAttemptsTransactionCodeArrayTwentyTwo = itemAttemptsTransactionCodesTwentyTwo.split(":");
			
			//TwentyThree
                        if (APPLICATION.mResponseArray[50])
                        {
                                var itemAttemptsTypesTwentyThree = APPLICATION.mResponseArray[50];
                                APPLICATION.mItemAttemptsTypeArrayTwentyThree = itemAttemptsTypesTwentyThree.split(":");
                        }

                        var itemAttemptsTransactionCodesTwentyThree = APPLICATION.mResponseArray[51];
                        APPLICATION.mItemAttemptsTransactionCodeArrayTwentyThree = itemAttemptsTransactionCodesTwentyThree.split(":");



			//TwentyFour
                        if (APPLICATION.mResponseArray[52])
                        {
                                var itemAttemptsTypesTwentyFour = APPLICATION.mResponseArray[52];
                                APPLICATION.mItemAttemptsTypeArrayTwentyFour = itemAttemptsTypesTwentyFour.split(":");
                        }

                        var itemAttemptsTransactionCodesTwentyFour = APPLICATION.mResponseArray[53];
                        APPLICATION.mItemAttemptsTransactionCodeArrayTwentyFour = itemAttemptsTransactionCodesTwentyFour.split(":");
			
			//TwentyFive
                        if (APPLICATION.mResponseArray[54])
                        {
                                var itemAttemptsTypesTwentyFive = APPLICATION.mResponseArray[54];
                                APPLICATION.mItemAttemptsTypeArrayTwentyFive = itemAttemptsTypesTwentyFive.split(":");
                        }

                        var itemAttemptsTransactionCodesTwentyFive = APPLICATION.mResponseArray[55];
                        APPLICATION.mItemAttemptsTransactionCodeArrayTwentyFive = itemAttemptsTransactionCodesTwentyFive.split(":");
			
			//TwentySix
                        if (APPLICATION.mResponseArray[56])
                        {
                                var itemAttemptsTypesTwentySix = APPLICATION.mResponseArray[56];
                                APPLICATION.mItemAttemptsTypeArrayTwentySix = itemAttemptsTypesTwentySix.split(":");
                        }

                        var itemAttemptsTransactionCodesTwentySix = APPLICATION.mResponseArray[57];
                        APPLICATION.mItemAttemptsTransactionCodeArrayTwentySix = itemAttemptsTransactionCodesTwentySix.split(":");


			//TwentySeven
                        if (APPLICATION.mResponseArray[58])
                        {
                                var itemAttemptsTypesTwentySeven = APPLICATION.mResponseArray[58];
                                APPLICATION.mItemAttemptsTypeArrayTwentySeven = itemAttemptsTypesTwentySeven.split(":");
                        }

                        var itemAttemptsTransactionCodesTwentySeven = APPLICATION.mResponseArray[59];
                        APPLICATION.mItemAttemptsTransactionCodeArrayTwentySeven = itemAttemptsTransactionCodesTwentySeven.split(":");

		


	
			//TwentyEight
                        if (APPLICATION.mResponseArray[60])
                        {
                                var itemAttemptsTypesTwentyEight = APPLICATION.mResponseArray[60];
                                APPLICATION.mItemAttemptsTypeArrayTwentyEight = itemAttemptsTypesTwentyEight.split(":");
                        }

                        var itemAttemptsTransactionCodesTwentyEight = APPLICATION.mResponseArray[61];
                        APPLICATION.mItemAttemptsTransactionCodeArrayTwentyEight = itemAttemptsTransactionCodesTwentyEight.split(":");


			//TwentyNine
                        if (APPLICATION.mResponseArray[62])
                        {
                                var itemAttemptsTypesTwentyNine = APPLICATION.mResponseArray[62];
                                APPLICATION.mItemAttemptsTypeArrayTwentyNine = itemAttemptsTypesTwentyNine.split(":");
                        }

                        var itemAttemptsTransactionCodesTwentyNine = APPLICATION.mResponseArray[63];
                        APPLICATION.mItemAttemptsTransactionCodeArrayTwentyNine = itemAttemptsTransactionCodesTwentyNine.split(":");


                        //Thirty
                        if (APPLICATION.mResponseArray[64])
                        {
                                var itemAttemptsTypesThirty = APPLICATION.mResponseArray[64];
                                APPLICATION.mItemAttemptsTypeArrayThirty = itemAttemptsTypesThirty.split(":");
                        }

                        var itemAttemptsTransactionCodesThirty = APPLICATION.mResponseArray[65];
                        APPLICATION.mItemAttemptsTransactionCodeArrayThirty = itemAttemptsTransactionCodesThirty.split(":");


          		//ThirtyOne
                        if (APPLICATION.mResponseArray[66])
                        {
                                var itemAttemptsTypesThirtyOne = APPLICATION.mResponseArray[66];
                                APPLICATION.mItemAttemptsTypeArrayThirtyOne = itemAttemptsTypesThirtyOne.split(":");
                        }

                        var itemAttemptsTransactionCodesThirtyOne = APPLICATION.mResponseArray[67];
                        APPLICATION.mItemAttemptsTransactionCodeArrayThirtyOne = itemAttemptsTransactionCodesThirtyOne.split(":");


                        //ThirtyTwo
                        if (APPLICATION.mResponseArray[68])
                        {
                                var itemAttemptsTypesThirtyTwo = APPLICATION.mResponseArray[68];
                                APPLICATION.mItemAttemptsTypeArrayThirtyTwo = itemAttemptsTypesThirtyTwo.split(":");
                        }

                        var itemAttemptsTransactionCodesThirtyTwo = APPLICATION.mResponseArray[69];
                        APPLICATION.mItemAttemptsTransactionCodeArrayThirtyTwo = itemAttemptsTransactionCodesThirtyTwo.split(":");









                        //ThirtyThree
                        if (APPLICATION.mResponseArray[70])
                        {
                                var itemAttemptsTypesThirtyThree = APPLICATION.mResponseArray[70];
                                APPLICATION.mItemAttemptsTypeArrayThirtyThree = itemAttemptsTypesThirtyThree.split(":");
                        }

                        var itemAttemptsTransactionCodesThirtyThree = APPLICATION.mResponseArray[71];
                        APPLICATION.mItemAttemptsTransactionCodeArrayThirtyThree = itemAttemptsTransactionCodesThirtyThree.split(":");

                        //ThirtyFour
                        if (APPLICATION.mResponseArray[72])
                        {
                                var itemAttemptsTypesThirtyFour = APPLICATION.mResponseArray[72];
                                APPLICATION.mItemAttemptsTypeArrayThirtyFour = itemAttemptsTypesThirtyFour.split(":");
                        }

                        var itemAttemptsTransactionCodesThirtyFour = APPLICATION.mResponseArray[73];
                        APPLICATION.mItemAttemptsTransactionCodeArrayThirtyFour = itemAttemptsTransactionCodesThirtyFour.split(":");




                        //ThirtyFive
                        if (APPLICATION.mResponseArray[74])
                        {
                                var itemAttemptsTypesThirtyFive = APPLICATION.mResponseArray[74];
                                APPLICATION.mItemAttemptsTypeArrayThirtyFive = itemAttemptsTypesThirtyFive.split(":");
                        }

                        var itemAttemptsTransactionCodesThirtyFive = APPLICATION.mResponseArray[75];
                        APPLICATION.mItemAttemptsTransactionCodeArrayThirtyFive = itemAttemptsTransactionCodesThirtyFive.split(":");

                       	//ThirtySix
                        if (APPLICATION.mResponseArray[76])
                        {
                                var itemAttemptsTypesThirtySix = APPLICATION.mResponseArray[76];
                                APPLICATION.mItemAttemptsTypeArrayThirtySix = itemAttemptsTypesThirtySix.split(":");
                        }

                        var itemAttemptsTransactionCodesThirtySix = APPLICATION.mResponseArray[77];
                        APPLICATION.mItemAttemptsTransactionCodeArrayThirtySix = itemAttemptsTransactionCodesThirtySix.split(":");


                        //ThirtySeven
                        if (APPLICATION.mResponseArray[78])
                        {
                                var itemAttemptsTypesThirtySeven = APPLICATION.mResponseArray[78];
                                APPLICATION.mItemAttemptsTypeArrayThirtySeven = itemAttemptsTypesThirtySeven.split(":");
                        }

                        var itemAttemptsTransactionCodesThirtySeven = APPLICATION.mResponseArray[79];
                        APPLICATION.mItemAttemptsTransactionCodeArrayThirtySeven = itemAttemptsTransactionCodesThirtySeven.split(":");


                        //ThirtyEight
                        if (APPLICATION.mResponseArray[80])
                        {
                                var itemAttemptsTypesThirtyEight = APPLICATION.mResponseArray[80];
                                APPLICATION.mItemAttemptsTypeArrayThirtyEight = itemAttemptsTypesThirtyEight.split(":");
                        }

                        var itemAttemptsTransactionCodesThirtyEight = APPLICATION.mResponseArray[81];
                        APPLICATION.mItemAttemptsTransactionCodeArrayThirtyEight = itemAttemptsTransactionCodesThirtyEight.split(":");

                       	//ThirtyNine
                        if (APPLICATION.mResponseArray[82])
                        {
                                var itemAttemptsTypesThirtyNine = APPLICATION.mResponseArray[82];
                                APPLICATION.mItemAttemptsTypeArrayThirtyNine = itemAttemptsTypesThirtyNine.split(":");
                        }

                        var itemAttemptsTransactionCodesThirtyNine = APPLICATION.mResponseArray[83];
                        APPLICATION.mItemAttemptsTransactionCodeArrayThirtyNine = itemAttemptsTransactionCodesThirtyNine.split(":");

                      
			//Forty
                        if (APPLICATION.mResponseArray[84])
                        {
                                var itemAttemptsTypesForty = APPLICATION.mResponseArray[84];
                                APPLICATION.mItemAttemptsTypeArrayForty = itemAttemptsTypesForty.split(":");
                        }

                        var itemAttemptsTransactionCodesForty = APPLICATION.mResponseArray[85];
                        APPLICATION.mItemAttemptsTransactionCodeArrayForty = itemAttemptsTransactionCodesForty.split(":");


			APPLICATION.mEvaluationsID = APPLICATION.mResponseArray[86];
			APPLICATION.log('id:' + APPLICATION.mEvaluationsID); 


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
        if (application.mStateLogs)
        {
                application.log('APPLICATION::SIGNUP_SCHOOL_APPLICATION');
        }

        if (APPLICATION.mCoreStateMachine.mPreviousState == APPLICATION.mSIGNUP_SCHOOL_WAIT_APPLICATION)
        {
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
        APPLICATION.mGame.mNameLabel.setVisibility(false);
        APPLICATION.mGame.mNameTextBox.setVisibility(false);
        APPLICATION.mGame.mCityLabel.setVisibility(false);
        APPLICATION.mGame.mCityTextBox.setVisibility(false);
        APPLICATION.mGame.mStateLabel.setVisibility(false);
        APPLICATION.mGame.mStateTextBox.setVisibility(false);
        APPLICATION.mGame.mZipLabel.setVisibility(false);
        APPLICATION.mGame.mZipTextBox.setVisibility(false);
        APPLICATION.mGame.mEmailOneLabel.setVisibility(false);
        APPLICATION.mGame.mEmailOneTextBox.setVisibility(false);
        APPLICATION.mGame.mEmailTwoLabel.setVisibility(false);
        APPLICATION.mGame.mEmailTwoTextBox.setVisibility(false);
        APPLICATION.mGame.mCodeLabel.setVisibility(false);
        APPLICATION.mGame.mCodeTextBox.setVisibility(false);

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
		application.log('READ DATA set loggedin');
		//lets sniff packet
                APPLICATION.mLoggedIn = APPLICATION.mResponseArray[1];
		APPLICATION.mDataToRead = false;
	
		if (application.mLoggedIn == true)
		{
			application.log('READ DATA set loggedin true next');
                	APPLICATION.mUsername = APPLICATION.mResponseArray[2];
                	APPLICATION.mRole = APPLICATION.mResponseArray[3];
			application.mCoreStateMachine.changeState(application.mREPORT_CORE_APPLICATION);
		}
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

var MAIN_MENU_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::MAIN_MENU_APPLICATION');
        }
   
        //if already have a game destroy it.
        if (application.mGame)
        {
                application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new MainMenuGame(APPLICATION);
        application.calcScore();
        APPLICATION.mHud.setOrange('G: MainMenu');
},

execute: function(application)
{
},

exit: function(application)
{
        if (application.mStateLogsExit)
        {
                application.log('APPLICATION::MAIN_MENU_APPLICATION exit');
        }
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
        APPLICATION.mHud.setOrange('G: Mathcore');
},

execute: function(application)
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
        APPLICATION.mHud.setOrange('G: Practice');

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

//K

var K_CC_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::K_CC_APPLICATION');
        }

	//if already have a game destroy it.
        if (application.mGame)
        {
        	application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new k_cc_Game(APPLICATION);
        APPLICATION.mHud.setOrange('G: k_cc');
        APPLICATION.mHud.setViolet('1:' + application.mGame.mSheet.mIDArray.length);
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::K_CC_APPLICATION execute');
	}
},

exit: function(application)
{
}

});

var K_OA_A_4_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::K_OA_A_4_APPLICATION');
        }

	//if already have a game destroy it.
        if (application.mGame)
        {
        	application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new k_oa_a_4_Game(APPLICATION);
        APPLICATION.mHud.setOrange('G: k_oa_a_4');
        APPLICATION.mHud.setViolet('1:' + application.mGame.mSheet.mIDArray.length);
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::K_OA_A_4_APPLICATION execute');
	}
},

exit: function(application)
{
}

});

var K_OA_A_5_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::K_OA_A_5_APPLICATION');
        }

	//if already have a game destroy it.
        if (application.mGame)
        {
        	application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new k_oa_a_5_Game(APPLICATION);
        APPLICATION.mHud.setOrange('G: k_oa_a_5');
        APPLICATION.mHud.setViolet('1:' + application.mGame.mSheet.mIDArray.length);
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::K_OA_A_5_APPLICATION execute');
	}
},

exit: function(application)
{
}

});


//1

var G1_OA_B_3_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::G1_OA_B_3_APPLICATION');
        }

        //if already have a game destroy it.
        if (application.mGame)
        {
                application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new g1_oa_b_3_Game(APPLICATION);
        APPLICATION.mHud.setOrange('G: 1_oa_b_3');
        APPLICATION.mHud.setViolet('1:' + application.mGame.mSheet.mIDArray.length);
},

execute: function(application)
{
        if (application.mStateLogsExecute)
        {
                application.log('APPLICATION::G1_OA_B_3_APPLICATION execute');
        }
},

exit: function(application)
{
}

});

var G1_OA_C_6_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::G1_OA_C_6_APPLICATION');
        }

        //if already have a game destroy it.
        if (application.mGame)
        {
                application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new g1_oa_c_6_Game(APPLICATION);
        APPLICATION.mHud.setOrange('G: 1_oa_c_6');
        APPLICATION.mHud.setViolet('1:' + application.mGame.mSheet.mIDArray.length);
},

execute: function(application)
{
        if (application.mStateLogsExecute)
        {
                application.log('APPLICATION::G1_OA_C_6_APPLICATION execute');
        }
},

exit: function(application)
{
}

});

var G1_NBT_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::G1_NBT_APPLICATION');
        }

        //if already have a game destroy it.
        if (application.mGame)
        {
                application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new g1_nbt_Game(APPLICATION);
        APPLICATION.mHud.setOrange('G: 1_nbt');
        APPLICATION.mHud.setViolet('1:' + application.mGame.mSheet.mIDArray.length);
},

execute: function(application)
{
        if (application.mStateLogsExecute)
        {
                application.log('APPLICATION::G1_NBT_APPLICATION execute');
        }
},

exit: function(application)
{
}

});


//2

var G2_OA_B_2_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::G2_OA_B_2_APPLICATION');
        }

        //if already have a game destroy it.
        if (application.mGame)
        {
                application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new g2_oa_b_2_Game(APPLICATION);
        APPLICATION.mHud.setOrange('G: 2_oa_b_2');
        APPLICATION.mHud.setViolet('1:' + application.mGame.mSheet.mIDArray.length);
},

execute: function(application)
{
        if (application.mStateLogsExecute)
        {
                application.log('APPLICATION::G2_OA_B_2_APPLICATION execute');
        }
},

exit: function(application)
{
}

});

var G2_NBT_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::G2_NBT_APPLICATION');
        }

        //if already have a game destroy it.
        if (application.mGame)
        {
                application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new g2_nbt_Game(APPLICATION);
        APPLICATION.mHud.setOrange('G: 2_nbt');
        APPLICATION.mHud.setViolet('1:' + application.mGame.mSheet.mIDArray.length);
},

execute: function(application)
{
        if (application.mStateLogsExecute)
        {
                application.log('APPLICATION::G2_NBT_APPLICATION execute');
        }
},

exit: function(application)
{
}

});



//3

var G3_OA_C_7_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::G3_OA_C_7_APPLICATION');
        }

        //if already have a game destroy it.
        if (application.mGame)
        {
                application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new g3_oa_c_7_Game(APPLICATION);
        APPLICATION.mHud.setOrange('G: 3_oa_c_7');
        APPLICATION.mHud.setViolet('1:' + application.mGame.mSheet.mIDArray.length);
},

execute: function(application)
{
        if (application.mStateLogsExecute)
        {
                application.log('APPLICATION::G3_OA_C_7_APPLICATION execute');
        }
},

exit: function(application)
{
}

});

var G3_NBT_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::G3_NBT_APPLICATION');
        }

        //if already have a game destroy it.
        if (application.mGame)
        {
                application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new g3_nbt_Game(APPLICATION);
        APPLICATION.mHud.setOrange('G: 3_nbt');
        APPLICATION.mHud.setViolet('1:' + application.mGame.mSheet.mIDArray.length);
},

execute: function(application)
{
        if (application.mStateLogsExecute)
        {
                application.log('APPLICATION::G3_NBT_APPLICATION execute');
        }
},

exit: function(application)
{
}

});

//4


var G4_OA_B_4_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::G4_OA_B_4_APPLICATION');
        }

        //if already have a game destroy it.
        if (application.mGame)
        {
                application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new g4_oa_b_4_Game(APPLICATION);
        APPLICATION.mHud.setOrange('G: 4_oa_b_4');
        APPLICATION.mHud.setViolet('1:' + application.mGame.mSheet.mIDArray.length);
},

execute: function(application)
{
        if (application.mStateLogsExecute)
        {
                application.log('APPLICATION::G4_OA_B_4_APPLICATION execute');
        }
},

exit: function(application)
{
}

});


var G4_NBT_B_4_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::G4_NBT_B_4_APPLICATION');
        }

        //if already have a game destroy it.
        if (application.mGame)
        {
                application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new g4_nbt_b_4_Game(APPLICATION);
        APPLICATION.mHud.setOrange('G: 4_nbt_b_4');
        APPLICATION.mHud.setViolet('1:' + application.mGame.mSheet.mIDArray.length);
},

execute: function(application)
{
        if (application.mStateLogsExecute)
        {
                application.log('APPLICATION::G4_NBT_B_4_APPLICATION execute');
        }
},

exit: function(application)
{
}

});

var G4_NBT_B_5_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::G4_NBT_B_5_APPLICATION');
        }

        //if already have a game destroy it.
        if (application.mGame)
        {
                application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new g4_nbt_b_5_Game(APPLICATION);
        APPLICATION.mHud.setOrange('G: 4_nbt_b_5');
        APPLICATION.mHud.setViolet('1:' + application.mGame.mSheet.mIDArray.length);
},

execute: function(application)
{
        if (application.mStateLogsExecute)
        {
                application.log('APPLICATION::G4_NBT_B_5_APPLICATION execute');
        }
},

exit: function(application)
{
}

});


var G4_NBT_B_6_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::G4_NBT_B_6_APPLICATION');
        }

        //if already have a game destroy it.
        if (application.mGame)
        {
                application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new g4_nbt_b_6_Game(APPLICATION);
        APPLICATION.mHud.setOrange('G: 4_nbt_b_6');
        APPLICATION.mHud.setViolet('1:' + application.mGame.mSheet.mIDArray.length);
},

execute: function(application)
{
        if (application.mStateLogsExecute)
        {
                application.log('APPLICATION::G4_NBT_B_6_APPLICATION execute');
        }
},

exit: function(application)
{
}

});


var G4_NF_B_3_C_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::G4_NF_B_3_C_APPLICATION');
        }

        //if already have a game destroy it.
        if (application.mGame)
        {
                application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new g4_nf_b_3_c_Game(APPLICATION);
        APPLICATION.mHud.setOrange('G: 4_nf_b_3_c');
        APPLICATION.mHud.setViolet('1:' + application.mGame.mSheet.mIDArray.length);
},

execute: function(application)
{
        if (application.mStateLogsExecute)
        {
                application.log('APPLICATION::G4_NF_B_3_C_APPLICATION execute');
        }
},

exit: function(application)
{
}

});



//5

var G5_OA_A_1_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::G5_OA_A_1_APPLICATION');
        }

        //if already have a game destroy it.
        if (application.mGame)
        {
                application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new g5_oa_a_1_Game(APPLICATION);
        APPLICATION.mHud.setOrange('G: 5_oa_a_1');
        APPLICATION.mHud.setViolet('1:' + application.mGame.mSheet.mIDArray.length);
},

execute: function(application)
{
        if (application.mStateLogsExecute)
        {
                application.log('APPLICATION::G5_OA_A_1_APPLICATION execute');
        }
},

exit: function(application)
{
}

});

var G5_NBT_B_5_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::G5_NBT_B_5_APPLICATION');
        }

        //if already have a game destroy it.
        if (application.mGame)
        {
                application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new g5_nbt_b_5_Game(APPLICATION);
        APPLICATION.mHud.setOrange('G: 5_nbt_b_5');
        APPLICATION.mHud.setViolet('1:' + application.mGame.mSheet.mIDArray.length);
},

execute: function(application)
{
        if (application.mStateLogsExecute)
        {
                application.log('APPLICATION::G5_NBT_B_5_APPLICATION execute');
        }
},

exit: function(application)
{
}

});

var G5_NBT_B_6_APPLICATION = new Class(
{
Extends: State,
 
initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::G5_NBT_B_6_APPLICATION');
        }

        //if already have a game destroy it.
        if (application.mGame)
        {
                application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new g5_nbt_b_6_Game(APPLICATION);
        APPLICATION.mHud.setOrange('G: 5_nbt_b_6');
        APPLICATION.mHud.setViolet('1:' + application.mGame.mSheet.mIDArray.length);
},

execute: function(application)
{
        if (application.mStateLogsExecute)
        {
                application.log('APPLICATION::G5_NBT_B_6_APPLICATION execute');
        }
},

exit: function(application)
{
}

});

var G5_NBT_B_7_APPLICATION = new Class(
{
Extends: State,
 
initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::G5_NBT_B_7_APPLICATION');
        }

        //if already have a game destroy it.
        if (application.mGame)
        {
                application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new g5_nbt_b_7_Game(APPLICATION);
        APPLICATION.mHud.setOrange('G: 5_nbt_b_7');
        APPLICATION.mHud.setViolet('1:' + application.mGame.mSheet.mIDArray.length);
},

execute: function(application)
{
        if (application.mStateLogsExecute)
        {
                application.log('APPLICATION::G5_NBT_B_7_APPLICATION execute');
        }
},

exit: function(application)
{
}

});

var G5_NF_A_1_APPLICATION = new Class(
{
Extends: State,
 
initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::G5_NF_A_1_APPLICATION');
        }

        //if already have a game destroy it.
        if (application.mGame)
        {
                application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new g5_nf_a_1_Game(APPLICATION);
        APPLICATION.mHud.setOrange('G: 5_nf_a_1');
        APPLICATION.mHud.setViolet('1:' + application.mGame.mSheet.mIDArray.length);
},

execute: function(application)
{
        if (application.mStateLogsExecute)
        {
                application.log('APPLICATION::G5_NF_A_1_APPLICATION execute');
        }
},

exit: function(application)
{
}

});


var G6_RP_APPLICATION = new Class(
{
Extends: State,
initialize: function()
{
},
enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::G6_RP_APPLICATION');
        }

        //if already have a game destroy it.
        if (application.mGame)
        {
                application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new g6_rp_Game(APPLICATION);
        APPLICATION.mHud.setOrange('G: 6_rp');
        APPLICATION.mHud.setViolet('1:' + application.mGame.mSheet.mIDArray.length);
},
execute: function(application)
{
        if (application.mStateLogsExecute)
        {
                application.log('APPLICATION::G6_RP_APPLICATION execute');
        }
},
exit: function(application)
{
}
});

var G6_NS_APPLICATION = new Class(
{
Extends: State,
initialize: function()
{
},
enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::G6_NS_APPLICATION');
        }

        //if already have a game destroy it.
        if (application.mGame)
        {
                application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new g6_ns_Game(APPLICATION);
        APPLICATION.mHud.setOrange('G: 6_ns');
        APPLICATION.mHud.setViolet('1:' + application.mGame.mSheet.mIDArray.length);
},
execute: function(application)
{
        if (application.mStateLogsExecute)
        {
                application.log('APPLICATION::G6_NS_APPLICATION execute');
        }
},
exit: function(application)
{
}
});

var G6_EE_APPLICATION = new Class(
{
Extends: State,
initialize: function()
{
},
enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::G6_EE_APPLICATION');
        }

        //if already have a game destroy it.
        if (application.mGame)
        {
                application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new g6_ee_Game(APPLICATION);
        APPLICATION.mHud.setOrange('G: 6_ee');
        APPLICATION.mHud.setViolet('1:' + application.mGame.mSheet.mIDArray.length);
},
execute: function(application)
{
        if (application.mStateLogsExecute)
        {
                application.log('APPLICATION::G6_EE_APPLICATION execute');
        }
},
exit: function(application)
{
}
});

var G6_G_APPLICATION = new Class(
{
Extends: State,
initialize: function()
{
},
enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::G6_G_APPLICATION');
        }

        //if already have a game destroy it.
        if (application.mGame)
        {
                application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new g6_g_Game(APPLICATION);
        APPLICATION.mHud.setOrange('G: 6_g');
        APPLICATION.mHud.setViolet('1:' + application.mGame.mSheet.mIDArray.length);
},
execute: function(application)
{
        if (application.mStateLogsExecute)
        {
                application.log('APPLICATION::G6_G_APPLICATION execute');
        }
},
exit: function(application)
{
}
});

var G6_SP_APPLICATION = new Class(
{
Extends: State,
initialize: function()
{
},
enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::G6_SP_APPLICATION');
        }

        //if already have a game destroy it.
        if (application.mGame)
        {
                application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new g6_sp_Game(APPLICATION);
        APPLICATION.mHud.setOrange('G: 6_sp');
        APPLICATION.mHud.setViolet('1:' + application.mGame.mSheet.mIDArray.length);
},
execute: function(application)
{
        if (application.mStateLogsExecute)
        {
                application.log('APPLICATION::G6_SP_APPLICATION execute');
        }
},
exit: function(application)
{
}
});



//TABLES

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
        APPLICATION.mHud.setOrange('G: table 2');
        APPLICATION.mHud.setViolet('1:' + application.mGame.mSheet.mIDArray.length);
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
        APPLICATION.mHud.setOrange('G: table 3');
        APPLICATION.mHud.setViolet('1:' + application.mGame.mSheet.mIDArray.length);
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
        APPLICATION.mHud.setOrange('G: table 4');
        APPLICATION.mHud.setViolet('1:' + application.mGame.mSheet.mIDArray.length);
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
        APPLICATION.mHud.setOrange('G: table 5');
        APPLICATION.mHud.setViolet('1:' + application.mGame.mSheet.mIDArray.length);
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
        APPLICATION.mHud.setOrange('G: table 6');
        APPLICATION.mHud.setViolet('1:' + application.mGame.mSheet.mIDArray.length);
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
        APPLICATION.mHud.setOrange('G: table 7');
        APPLICATION.mHud.setViolet('1:' + application.mGame.mSheet.mIDArray.length);
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
        APPLICATION.mHud.setOrange('G: table 8');
        APPLICATION.mHud.setViolet('1:' + application.mGame.mSheet.mIDArray.length);
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
        APPLICATION.mHud.setOrange('G: table 9');
        APPLICATION.mHud.setViolet('1:' + application.mGame.mSheet.mIDArray.length);
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
        APPLICATION.mHud.setOrange('G: SuperIzzy');
        APPLICATION.mHud.setViolet('1:' + application.mGame.mSheet.mIDArray.length);
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



//TESTS
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
        //APPLICATION.mHud.setOrange('G: Test');
	application.mHud.setOrange('Test:' + APPLICATION.mEvaluationsAttemptsID);
        APPLICATION.mHud.setViolet('1:' + application.mGame.mSheet.mIDArray.length);
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::TEST_APPLICATION execute');
	}
	//application.mHud.setOrange('Test:' + APPLICATION.mEvaluationsAttemptsID);
        //APPLICATION.mHud.setViolet('0:' + application.mGame.mSheet.mIDArray.length);
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
        APPLICATION.mHud.setOrange('G:TerraNova');
        APPLICATION.mHud.setViolet('1:' + application.mGame.mSheet.mIDArray.length);
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
        APPLICATION.mHud.setOrange('G: Homework');
        APPLICATION.mHud.setViolet('1:' + application.mGame.mSheet.mIDArray.length);
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

var TEST_PREP_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::TEST_PREP_APPLICATION');
        }

        //if already have a game destroy it.
        if (application.mGame)
        {
                application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new TestPrepGame(APPLICATION);
        //APPLICATION.mHud.setOrange('G: TestPrep');
	application.mHud.setOrange('TestPrep:' + APPLICATION.mEvaluationsAttemptsID);
        APPLICATION.mHud.setViolet('1:' + application.mGame.mSheet.mIDArray.length);
},

execute: function(application)
{
        if (application.mStateLogsExecute)
        {
                application.log('APPLICATION::TEST_PREP_APPLICATION execute');
        }
},

exit: function(application)
{
}

});


//add_game_G
