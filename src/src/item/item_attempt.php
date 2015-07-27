/*
barebones item class. Should this even have a gui????? I think it should be an abstract class with just an question and answer. let those that implent/extend it provide the gui.
*/

var ItemAttempt = new Class(
{
        initialize: function()
        {
		this.mStateLogs = true;		
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
			APPLICATION.mItemAttemptsTypeArray.unshift(APPLICATION.mGame.mSheet.mItem.mType);
			APPLICATION.mItemAttemptsTransactionCodeArray.unshift(0);
		}

		//update server
        	APPLICATION.sendItemAttemptInsert(APPLICATION.mGame.mSheet.mItem.mType,this.mQuestionTxt,this.mAnswersTxt,this.mDateNow);
	},	
	sendUpdate: function()
	{
		//update client
		APPLICATION.log('this.mTransactionCode sendUpdate:' + this.mTransactionCode);
		APPLICATION.mItemAttemptsTransactionCodeArray[0] = this.mTransactionCode;

        	APPLICATION.sendItemAttemptUpdate(this.mID,this.mTransactionCode,this.mUserAnswer); //thats it cause none of this will change so no harm in updating again though server may not want to update
	},

	update: function()
        {
                //state machine
                this.mStateMachine.update();
        }
});
