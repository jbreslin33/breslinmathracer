/*
barebones item class. Should this even have a gui????? I think it should be an abstract class with just an question and answer. let those that implent/extend it provide the gui.
*/

var ItemAttempt = new Class(
{
        initialize: function()
        {
		this.mStateLogs = false;		
                this.mStateMachine = new StateMachine(this);

                this.mGLOBAL_ITEM_ATTEMPT   = new GLOBAL_ITEM_ATTEMPT  (this);
                this.mINIT_ITEM_ATTEMPT     = new INIT_ITEM_ATTEMPT    (this);

		this.mSEND_INSERT                  = new SEND_INSERT(this);
                this.mWAIT_FOR_INSERT_AND_USER_ANSWER_CONFIRMATION = new WAIT_FOR_INSERT_AND_USER_ANSWER_CONFIRMATION(this);
                this.mUPDATE_ITEM_ATTEMPT          = new UPDATE_ITEM_ATTEMPT(this);
                this.mWAIT_FOR_UPDATE_CONFIRMATION = new WAIT_FOR_UPDATE_CONFIRMATION(this);
		this.mITEM_ATTEMPT_END              = new ITEM_ATTEMPT_END(this);
		
                this.mStateMachine.setGlobalState(this.mGLOBAL_ITEM_ATTEMPT);
                this.mStateMachine.changeState(this.mINIT_ITEM_ATTEMPT);

		this.mDateNow = 0;
		this.mID = 0;
		this.mUserAnswer = '';
		this.mTransactionCode = 0;
		this.mType = 0; 
		this.mUpdateConfirmation = 0;
		this.mEvaluationsID = 0;

		this.mAnswers = '';
		this.mAnswersTxt = '';
		this.mQuestion = '';
		this.mQuestionTxt = '';

		//timers
		this.mThresholdTime = 5000;
		this.mCounterStartTime = 0;
	},

	setTransactionCode: function(code)
	{
		this.mTransactionCode = code;
		if (parseInt(this.mEvaluationsID) == 1)
		{
			APPLICATION.mItemAttemptsTransactionCodeArrayOne[0] = code;
		}
		if (parseInt(this.mEvaluationsID) == 3)
		{
			APPLICATION.mItemAttemptsTransactionCodeArrayThree[0] = code;
		}
		if (parseInt(this.mEvaluationsID) == 4)
		{
			APPLICATION.mItemAttemptsTransactionCodeArrayFour[0] = code;
		}
		if (parseInt(this.mEvaluationsID) == 5)
		{
			APPLICATION.mItemAttemptsTransactionCodeArrayFive[0] = code;
		}
		if (parseInt(this.mEvaluationsID) == 6)
		{
			APPLICATION.mItemAttemptsTransactionCodeArraySix[0] = code;
		}
		if (parseInt(this.mEvaluationsID) == 7)
		{
			APPLICATION.mItemAttemptsTransactionCodeArraySeven[0] = code;
		}
		if (parseInt(this.mEvaluationsID) == 8)
		{
			APPLICATION.mItemAttemptsTransactionCodeArrayEight[0] = code;
		}
		if (parseInt(this.mEvaluationsID) == 9)
		{
			APPLICATION.mItemAttemptsTransactionCodeArrayNine[0] = code;
		}
		if (parseInt(this.mEvaluationsID) == 10)
		{
			APPLICATION.mItemAttemptsTransactionCodeArrayTen[0] = code;
		}
		if (parseInt(this.mEvaluationsID) == 12)
		{
			APPLICATION.mItemAttemptsTransactionCodeArrayTwelve[0] = code;
		}
		if (parseInt(this.mEvaluationsID) == 13)
		{
			APPLICATION.mItemAttemptsTransactionCodeArrayThirteen[0] = code;
		}
		if (parseInt(this.mEvaluationsID) == 14)
		{
			APPLICATION.mItemAttemptsTransactionCodeArrayFourteen[0] = code;
		}
		if (parseInt(this.mEvaluationsID) == 15)
		{
			APPLICATION.mItemAttemptsTransactionCodeArrayFifteen[0] = code;
		}
		if (parseInt(this.mEvaluationsID) == 16)
		{
			APPLICATION.mItemAttemptsTransactionCodeArraySixteen[0] = code;
		}
		if (parseInt(this.mEvaluationsID) == 17)
		{
			APPLICATION.mItemAttemptsTransactionCodeArraySeventeen[0] = code;
		}
		if (parseInt(this.mEvaluationsID) == 18)
		{
			APPLICATION.mItemAttemptsTransactionCodeArrayEighteen[0] = code;
		}
		if (parseInt(this.mEvaluationsID) == 19)
		{
			APPLICATION.mItemAttemptsTransactionCodeArrayNineteen[0] = code;
		}
		if (parseInt(this.mEvaluationsID) == 20)
		{
			APPLICATION.mItemAttemptsTransactionCodeArrayTwenty[0] = code;
		}
		//add_game_17





	},
	setEvaluationsID: function(evaluationsID)
	{
		this.mEvaluationsID = evaluationsID;
	},

	sendInsert: function()
	{
		if (this.mDateNow == 0) //we have not sent it
		{
	        	// strip out problem chars from question
        		this.mQuestion = '' + APPLICATION.mGame.mSheet.mItem.mQuestion;
        		this.mQuestionTxt = this.mQuestion.replace(/&/g,"breslinampersand");
        		this.mQuestionTxt = this.mQuestionTxt.replace(/\+/g,"breslinaddition");
        		this.mQuestionTxt = this.mQuestionTxt.replace(/#/g,"breslinpound");

        		//get real answers from array
        		for (i=0; i < APPLICATION.mGame.mSheet.mItem.mAnswerArray.length; i++)
        		{
                		if (i == 0)
                		{
                        		this.mAnswers = '' + this.mAnswers + APPLICATION.mGame.mSheet.mItem.mAnswerArray[i];
                		}
                		else
                		{
                        		this.mAnswers = '' + this.mAnswers + ' OR ' + APPLICATION.mGame.mSheet.mItem.mAnswerArray[i];
                		}
        		}
        		// strip out problem chars from answer
        		this.mAnswersTxt = this.mAnswers.replace(/&/g,"breslinampersand");
        		this.mAnswersTxt = this.mAnswersTxt.replace(/\+/g,"breslinaddition");
        		this.mAnswersTxt = this.mAnswersTxt.replace(/#/g,"breslinpound");

			if (!Date.now)
			{
				this.mDateNow = new Date().getTime();
			}
			else
			{
				this.mDateNow = Date.now();
			}

			//update client
			if (parseInt(this.mEvaluationsID) == 1)
			{
				APPLICATION.mItemAttemptsTypeArrayOne.unshift(APPLICATION.mGame.mSheet.mItem.mType);
				APPLICATION.mItemAttemptsTransactionCodeArrayOne.unshift(0);
			}
			if (parseInt(this.mEvaluationsID) == 3)
			{
				APPLICATION.mItemAttemptsTypeArrayThree.unshift(APPLICATION.mGame.mSheet.mItem.mType);
				APPLICATION.mItemAttemptsTransactionCodeArrayThree.unshift(0);
			}
			if (parseInt(this.mEvaluationsID) == 4)
			{
				APPLICATION.mItemAttemptsTypeArrayFour.unshift(APPLICATION.mGame.mSheet.mItem.mType);
				APPLICATION.mItemAttemptsTransactionCodeArrayFour.unshift(0);
			}
			if (parseInt(this.mEvaluationsID) == 5)
			{
				APPLICATION.mItemAttemptsTypeArrayFive.unshift(APPLICATION.mGame.mSheet.mItem.mType);
				APPLICATION.mItemAttemptsTransactionCodeArrayFive.unshift(0);
			}
			if (parseInt(this.mEvaluationsID) == 6)
			{
				APPLICATION.mItemAttemptsTypeArraySix.unshift(APPLICATION.mGame.mSheet.mItem.mType);
				APPLICATION.mItemAttemptsTransactionCodeArraySix.unshift(0);
			}
			if (parseInt(this.mEvaluationsID) == 7)
			{
				APPLICATION.mItemAttemptsTypeArraySeven.unshift(APPLICATION.mGame.mSheet.mItem.mType);
				APPLICATION.mItemAttemptsTransactionCodeArraySeven.unshift(0);
			}
			if (parseInt(this.mEvaluationsID) == 8)
			{
				APPLICATION.mItemAttemptsTypeArrayEight.unshift(APPLICATION.mGame.mSheet.mItem.mType);
				APPLICATION.mItemAttemptsTransactionCodeArrayEight.unshift(0);
			}
			if (parseInt(this.mEvaluationsID) == 9)
			{
				APPLICATION.mItemAttemptsTypeArrayNine.unshift(APPLICATION.mGame.mSheet.mItem.mType);
				APPLICATION.mItemAttemptsTransactionCodeArrayNine.unshift(0);
			}
			if (parseInt(this.mEvaluationsID) == 10)
			{
				APPLICATION.mItemAttemptsTypeArrayTen.unshift(APPLICATION.mGame.mSheet.mItem.mType);
				APPLICATION.mItemAttemptsTransactionCodeArrayTen.unshift(0);
			}
			if (parseInt(this.mEvaluationsID) == 12)
			{
				APPLICATION.mItemAttemptsTypeArrayTwelve.unshift(APPLICATION.mGame.mSheet.mItem.mType);
				APPLICATION.mItemAttemptsTransactionCodeArrayTwelve.unshift(0);
			}
			if (parseInt(this.mEvaluationsID) == 13)
			{
				APPLICATION.mItemAttemptsTypeArrayThirteen.unshift(APPLICATION.mGame.mSheet.mItem.mType);
				APPLICATION.mItemAttemptsTransactionCodeArrayThirteen.unshift(0);
			}
			if (parseInt(this.mEvaluationsID) == 14)
			{
				APPLICATION.mItemAttemptsTypeArrayFourteen.unshift(APPLICATION.mGame.mSheet.mItem.mType);
				APPLICATION.mItemAttemptsTransactionCodeArrayFourteen.unshift(0);
			}
			if (parseInt(this.mEvaluationsID) == 15)
			{
				APPLICATION.mItemAttemptsTypeArrayFifteen.unshift(APPLICATION.mGame.mSheet.mItem.mType);
				APPLICATION.mItemAttemptsTransactionCodeArrayFifteen.unshift(0);
			}
			if (parseInt(this.mEvaluationsID) == 16)
			{
				APPLICATION.mItemAttemptsTypeArraySixteen.unshift(APPLICATION.mGame.mSheet.mItem.mType);
				APPLICATION.mItemAttemptsTransactionCodeArraySixteen.unshift(0);
			}
			if (parseInt(this.mEvaluationsID) == 17)
			{
				APPLICATION.mItemAttemptsTypeArraySeventeen.unshift(APPLICATION.mGame.mSheet.mItem.mType);
				APPLICATION.mItemAttemptsTransactionCodeArraySeventeen.unshift(0);
			}
			if (parseInt(this.mEvaluationsID) == 18)
			{
				APPLICATION.mItemAttemptsTypeArrayEighteen.unshift(APPLICATION.mGame.mSheet.mItem.mType);
				APPLICATION.mItemAttemptsTransactionCodeArrayEighteen.unshift(0);
			}
			if (parseInt(this.mEvaluationsID) == 19)
			{
				APPLICATION.mItemAttemptsTypeArrayNineteen.unshift(APPLICATION.mGame.mSheet.mItem.mType);
				APPLICATION.mItemAttemptsTransactionCodeArrayNineteen.unshift(0);
			}
			if (parseInt(this.mEvaluationsID) == 20)
			{
				APPLICATION.mItemAttemptsTypeArrayTwenty.unshift(APPLICATION.mGame.mSheet.mItem.mType);
				APPLICATION.mItemAttemptsTransactionCodeArrayTwenty.unshift(0);
			}
			//add_game_18
		}
        	APPLICATION.sendItemAttemptInsert(APPLICATION.mGame.mSheet.mItem.mType,this.mQuestionTxt,this.mAnswersTxt,this.mDateNow,this.mEvaluationsID,APPLICATION.mGame.getScore(),APPLICATION.mGame.mUnmastered);
	},	

	sendUpdate: function()
	{
        	APPLICATION.sendItemAttemptUpdate(this.mID,this.mTransactionCode,this.mUserAnswer); 
	},

	update: function()
        {
                //state machine
                this.mStateMachine.update();
        }
});
