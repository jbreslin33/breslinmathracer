/*
barebones item class. Should this even have a gui????? I think it should be an abstract class with just an question and answer. let those that implent/extend it provide the gui.
*/
var Item = new Class(
{
        initialize: function(sheet)
        {
		this.mStateLogs = true;		

		this.mID = 0;
		
		this.mSheet = sheet;
	
		//question
		this.mQuestion = '';

		//answer
		this.mAnswerArray = new Array();
		//this.mAnswerArray.push(answer);
		
		//tip
		this.mTipArray = new Array();

		//status	
		this.mStatus = 0; //notAttempted=0,correct=1,incorrect=2

		//userAnswer
		this.mUserAnswer = '';

  		//answer pool
                this.mAnswerPool = new Array();

		this.mShapeArray   = new Array();
        
		this.mType = 0; //uncategorized

		//times 
		this.mThresholdTime = 0;
                this.mAnswerTime = 0;
                this.mQuestionStartTime = 0;
                this.mOutOfTime = false;

                //times for show correct
                this.mCorrectAnswerStartTime = 0;
                this.mCorrectAnswerThresholdTime = 10000;

		//times for showContinueCorrect
                this.mShowContinueCorrectStartTime = 0;
                this.mShowContinueCorrectThresholdTime = 1000;

		//continue button vars
		this.mContinueCorrect = false;
		this.mContinueIncorrect = false;
		this.mContinueCorrectButton = 0; 
		this.mContinueIncorrectButton = 0; 
 
		//states
                this.mStateMachine = new StateMachine(this);

                this.mGLOBAL_ITEM   = new GLOBAL_ITEM  (this);
                this.mINIT_ITEM     = new INIT_ITEM    (this);

                //wait state
                this.mWAITING_ON_ANSWER_ITEM   = new WAITING_ON_ANSWER_ITEM(this);

		//correct states
                this.mCORRECT_ITEM = new CORRECT_ITEM(this);
                this.mCONTINUE_CORRECT = new CONTINUE_CORRECT(this);
               
		//incorrect states 
		this.mSHOW_CORRECT_ANSWER_ITEM = new SHOW_CORRECT_ANSWER_ITEM(this);
                this.mCONTINUE_INCORRECT = new CONTINUE_INCORRECT(this);
                this.mINCORRECT_ITEM = new INCORRECT_ITEM(this);

		//out of time
                this.mOUT_OF_TIME_ITEM = new OUT_OF_TIME_ITEM(this);

                this.mStateMachine.setGlobalState(this.mGLOBAL_ITEM);
                this.mStateMachine.changeState(this.mINIT_ITEM);
	},

	setTheFocus: function()
	{

	},

	addShape: function(shape)
	{
		this.mShapeArray.push(shape);
		this.mSheet.mGame.addShape(shape);	
	},

	removeShape: function(shape)
        {
		//remove from game array first..
		this.mSheet.mGame.removeShape(shape);	

               	//remove from this shape array 
		for (r = 0; r < this.mShapeArray.length; r++)
                {
                        if (shape == this.mShapeArray[r])
                        {
                                //first remove it from array...
                                this.mShapeArray.splice(r,1);
                        }
                }
        },

	createShapes: function()
        {
                //mContinueCorrectButton
                this.mContinueCorrectButton = new ContinueCorrectButton(150,50,650,400,this.mSheet.mGame,"BUTTON","","");
		this.mContinueCorrectButton.mMesh.innerHTML = 'CONTINUE';
                this.addShape(this.mContinueCorrectButton);
                
		//mContinueIncorrectButton
                this.mContinueIncorrectButton = new ContinueIncorrectButton(150,50,650,400,this.mSheet.mGame,"BUTTON","","");
		this.mContinueIncorrectButton.mMesh.innerHTML = 'CONTINUE';
                this.addShape(this.mContinueIncorrectButton);
	},

       	//this will clean up all shapes in this item and it will take this items shapes out of game array
	destroyShapes: function()
        {
                //shapes and array
                while (this.mShapeArray.length > 0)
                {
			shape = this.mShapeArray[0];	

			//destroy it just once at the local(item) level
                        shape.destructor();
		
			//remove from item shape array
			this.removeShape(shape);
                }
                this.mShapeArray = 0;
                this.mShapeArray = new Array();
        },

	destructor: function()
	{
		this.destroyShapes();
	},

	update: function()
        {
                //state machine
                this.mStateMachine.update();
        },

	setUserAnswer: function(userAnswer)
	{
		this.mUserAnswer = userAnswer;
	},
	
	checkUserAnswer: function()
	{
		correctAnswerFound = false;
		for (i = 0; i <  this.mAnswerArray.length; i++)
		{
			if (this.mUserAnswer == this.mAnswerArray[i])
			{
				correctAnswerFound = true;	
			} 
		}
		return correctAnswerFound;
	},

	log: function(msg)
        {
                setTimeout(function()
                {
                        throw new Error(msg);
                }, 0);
        },

	getType: function()
	{
		return this.mType;
	},

	set: function(question,answer)
	{
		this.mQuestion = question;
		this.mAnswer = answer;
		this.mSolved = false;
	},
	
	setQuestion: function(question)
	{
		this.mQuestion = question;
	},

	setAnswer: function(answer,slot)
	{
		this.mAnswerArray[slot] = answer;
	},	
	
	setShowAnswer: function(showAnswer)
	{
		this.mShowAnswer = answer;
	},

	setSolved: function(b)
	{
		this.mSolved = b;
	},
	
	getSolved: function()
	{
		return this.mSolved;
	},
	
	getQuestion: function()
	{
		return this.mQuestion;
	},

	getAnswer: function()
	{
		return this.mAnswerArray[0];
	},

	getAnswerTwo: function()
	{
		return this.mAnswerArray[1];
	},
	
	getShowAnswer: function()
	{
		return this.mShowAnswer;
	},

	hideShapes: function()
	{
   		for (i = 0; i < this.mShapeArray.length; i++)
                {
                        this.mShapeArray[i].setVisibility(false);
                }
	},
	
	showShapes: function()
	{
   		for (i = 0; i < this.mShapeArray.length; i++)
                {
                        this.mShapeArray[i].setVisibility(true);
                }
	},

	showAnswerInputs: function()
	{

	},
	
	showCorrectAnswer: function()
	{

	},

	hideCorrectAnswer: function()
	{

	},
/*
                for (i=0; i < this.mButtonArray.length; i++)
                {
                        if (this.mButtonArray[i].getAnswer() == this.mUserAnswer)
                        {
                                this.mButtonArray[i].setBackGroundColor("red");
                        }
                        if (this.mButtonArray[i].getAnswer() == this.getAnswer())
                        {
                                this.mButtonArray[i].setBackGroundColor("green");
                        }
                }

*/	
	showContinueCorrect: function()
	{
                for (i=0; i < this.mButtonArray.length; i++)
                {
                        if (this.mButtonArray[i].getAnswer() != this.getAnswer())
                        {
                                this.mButtonArray[i].setBackGroundColor("red");
                        }
                        if (this.mButtonArray[i].getAnswer() == this.getAnswer())
                        {
                                this.mButtonArray[i].setBackGroundColor("green");
                        }
		}
	},
	
	hideContinueCorrect: function()
	{
	},
	
	showContinueIncorrect: function()
	{
		this.mContinueIncorrectButton.setVisibility(true);
	},
	
	hideContinueIncorrect: function()
	{
		this.mContinueIncorrectButton.setVisibility(false);
	}
});
