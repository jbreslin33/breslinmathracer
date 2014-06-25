var Item = new Class(
{
        initialize: function(question,answer,showAnswer)
        {
		//question
		this.mQuestion = question;

		//answer
		this.mAnswerArray = new Array();
		this.mAnswerArray.push(answer);
		
		//showAnswer
		this.mShowAnswer = showAnswer;

		//tip
		this.mTipArray = new Array();

		//is solved
		this.mSolved = false;

  		//answer pool
                this.mAnswerPool = new Array();

		//choiceArray
		this.mChoiceA = '';
		this.mChoiceB = '';
		this.mChoiceC = '';
		this.mChoiceD = '';

		this.mShapeArray   = new Array();
        
		//randomChoices
		this.mRandomChoices = false;

		this.mType = 0; //uncategorized
 
		//states
                this.mStateMachine = new StateMachine(this);

                this.mGLOBAL_ITEM       = new GLOBAL_ITEM(this);
                this.mINIT_ITEM         = new INIT_ITEM         (this);
                this.mRESET_ITEM        = new RESET_ITEM        (this);
                this.mNORMAL_ITEM       = new NORMAL_ITEM       (this);

                //pad states
                this.mFIRST_TIME_ITEM   = new FIRST_TIME_ITEM(this);
                this.mWAITING_ON_ANSWER_ITEM   = new WAITING_ON_ANSWER_ITEM(this);
                this.mCORRECT_ANSWER_ITEM = new CORRECT_ANSWER_ITEM(this);
                this.mSHOW_CORRECT_ANSWER_ITEM = new SHOW_CORRECT_ANSWER_ITEM(this);
                this.mOUT_OF_TIME_ITEM = new OUT_OF_TIME_ITEM(this);

                this.mStateMachine.setGlobalState(this.mGLOBAL_ITEM);
                this.mStateMachine.changeState(this.mINIT_ITEM);

},

	getType: function()
	{
		return this.mType;
	},

	setChoice: function(letter,choice)
	{
		if (letter == 'A') 
		{
			this.mChoiceA = choice;
		}	
		if (letter == 'B') 
		{
			this.mChoiceB = choice;
		}	
		if (letter == 'C') 
		{
			this.mChoiceC = choice;
		}	
		if (letter == 'D') 
		{
			this.mChoiceD = choice;
		}	
	},
        
	setChoices: function()
        {
		if (this.mAnswerPool.length == 2)
                {

			if (this.mRandomChoices)
			{
                       	 	this.mCorrectChoiceNumber = 0;

                        	var goOnce = true;

                        	while (goOnce == true || this.mCorrectChoiceNumber == this.mLastCorrectChoiceNumber || this.mChoiceA == this.mChoiceB)
                        	{
                                	this.mCorrectChoiceNumber = Math.floor((Math.random()*3));

                                	this.mChoiceA = this.mAnswerPool[Math.floor((Math.random()*parseInt(this.mAnswerPool.length)))];
                                	this.mChoiceB = this.mAnswerPool[Math.floor((Math.random()*parseInt(this.mAnswerPool.length)))];

                                	if (this.mCorrectChoiceNumber == 0)
                                	{
                                        	this.mChoiceA = this.getAnswer();
                                	}
                                	if (this.mCorrectChoiceNumber == 1)
                                	{
                                        	this.mChoiceB = this.getAnswer();
                                	}
                                	goOnce = false;
                        	}
                        	this.mLastCorrectButtonNumber = this.mCorrectButtonNumber;
			}
			else
			{
				this.mChoiceA = this.mAnswerPool[0];	
				this.mChoiceB = this.mAnswerPool[1];	
			}
                }

		if (this.mAnswerPool.length >= 3)
		{
			if (this.mRandomChoices)
			{
                		this.mCorrectChoiceNumber = 0;

                		var goOnce = true;

                		while (goOnce == true || this.mCorrectChoiceNumber == this.mLastCorrectChoiceNumber || this.mChoiceA == this.mChoiceB || this.mChoiceA == this.mChoiceC || this.mChoiceB == this.mChoiceC)
                		{
                        		this.mCorrectChoiceNumber = Math.floor((Math.random()*3));

                        		this.mChoiceA = this.mAnswerPool[Math.floor((Math.random()*parseInt(this.mAnswerPool.length)))];
                        		this.mChoiceB = this.mAnswerPool[Math.floor((Math.random()*parseInt(this.mAnswerPool.length)))];
                        		this.mChoiceC = this.mAnswerPool[Math.floor((Math.random()*parseInt(this.mAnswerPool.length)))];

                        		if (this.mCorrectChoiceNumber == 0)
                        		{
                                		this.mChoiceA = this.getAnswer();
                        		}
                        		if (this.mCorrectChoiceNumber == 1)
                        		{
                                		this.mChoiceB = this.getAnswer();
                        		}
                        		if (this.mCorrectChoiceNumber == 2)
                        		{
                                		this.mChoiceC = this.getAnswer();
                        		}
                        		goOnce = false;
                		}
                		this.mLastCorrectButtonNumber = this.mCorrectButtonNumber;
			}
			else
			{
				this.mChoiceA = this.mAnswerPool[0];	
				this.mChoiceB = this.mAnswerPool[1];	
				this.mChoiceC = this.mAnswerPool[2];	
			}
		}
        },
	
	set: function(question,answer)
	{
		this.mQuestion = question;
		this.mAnswer = answer;
		this.mSolved = false;
	},
	
	set: function(question,answer,showAnswer)
	{
		this.mQuestion = question;
		this.mAnswer = answer;
		this.mShowAnswer = showAnswer;
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
	}
});
