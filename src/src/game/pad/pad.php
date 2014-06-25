var Pad = new Class(
{

Extends: AmbitiousGame,

	initialize: function(application)
	{
       		this.parent(application);
	
		//cursor
		document.body.style.cursor = 'default';	

		this.mApplication.mMouseMoveOn = false;

   		this.mTimer = new ClockTimer(application);
	},

	reset: function()
	{
		this.parent();
		
		//times
                this.mAnswerTime = 0;
                this.mQuestionStartTime = this.mTimeSinceEpoch;
                this.mOutOfTime = false;
                this.mUserAnswer = '';
		this.mCorrectAnswerStartTime = 0;
	},
	
	update: function()
        {
  		this.parent()
		this.mTimer.update();
        },

	createUniverse: function()
        {
                this.createWorld();
                this.createQuestions();
        },
   
	//states
	resetGameEnter: function()
	{
		this.reset();
        	this.mStateMachine.changeState(this.mFIRST_TIME);
	},
       
	showQuestion: function()
        {
                //set all shapes invisible to start semi-clean
                for (i = 0; i < this.mShapeArray.length; i++)
                {
                        this.mShapeArray[i].setVisibility(false);
                }

                if (this.mApplication.mGame.mQuiz)
                {
                        if (this.mApplication.mGame.mQuiz.getQuestion())
                        {
                                this.mQuiz.getQuestion().showShapes();
                                this.mQuiz.getQuestion().setChoices();
                                this.mNumQuestion.mMesh.innerHTML = this.mQuiz.getQuestion().getQuestion();
                        }
                }

                //show input pad
                for (i = this.mTotalGuiBars; i < parseInt(this.mTotalGuiBars + this.mTotalInputBars); i++)
                {
                        this.mShapeArray[i].setVisibility(true);
                }

		this.mNumAnswer.mMesh.focus();
        },
	
        inputKeyHit: function(e)
        {
                if (e.key == 'enter')
                {
                        APPLICATION.mGame.mUserAnswer = APPLICATION.mGame.mNumAnswer.mMesh.value;
                }
        },

        inputKeyHitEnter: function(e)
        {
		if (e.keyCode == 13)	
		{
                	APPLICATION.mGame.mUserAnswer = APPLICATION.mGame.mNumAnswer.mMesh.value;
		}
        },

        numPadHit: function()
        {
                if (this.innerHTML == 'Enter')
                {
                        APPLICATION.mGame.mUserAnswer = APPLICATION.mGame.mNumAnswer.mMesh.value;
                }
                else
                {
                        APPLICATION.mGame.mNumAnswer.mMesh.value = APPLICATION.mGame.mNumAnswer.mMesh.value + '' + this.innerHTML;
                }
        },
        
	numPadHitEnter: function()
        {
                APPLICATION.mGame.mUserAnswer = APPLICATION.mGame.mNumAnswer.mMesh.value;
        },
        
	numPadHitZero: function()
	{
        	APPLICATION.mGame.mNumAnswer.mMesh.value = APPLICATION.mGame.mNumAnswer.mMesh.value + '0';
	},
	numPadHitOne: function()
	{
        	APPLICATION.mGame.mNumAnswer.mMesh.value = APPLICATION.mGame.mNumAnswer.mMesh.value + '1';
	},
	numPadHitTwo: function()
	{
        	APPLICATION.mGame.mNumAnswer.mMesh.value = APPLICATION.mGame.mNumAnswer.mMesh.value + '2';
	},
	numPadHitThree: function()
	{
        	APPLICATION.mGame.mNumAnswer.mMesh.value = APPLICATION.mGame.mNumAnswer.mMesh.value + '3';
	},
	numPadHitFour: function()
	{
        	APPLICATION.mGame.mNumAnswer.mMesh.value = APPLICATION.mGame.mNumAnswer.mMesh.value + '4';
	},
	numPadHitFive: function()
	{
        	APPLICATION.mGame.mNumAnswer.mMesh.value = APPLICATION.mGame.mNumAnswer.mMesh.value + '5';
	},
	numPadHitSix: function()
	{
        	APPLICATION.mGame.mNumAnswer.mMesh.value = APPLICATION.mGame.mNumAnswer.mMesh.value + '6';
	},
	numPadHitSeven: function()
	{
        	APPLICATION.mGame.mNumAnswer.mMesh.value = APPLICATION.mGame.mNumAnswer.mMesh.value + '7';
	},
	numPadHitEight: function()
	{
        	APPLICATION.mGame.mNumAnswer.mMesh.value = APPLICATION.mGame.mNumAnswer.mMesh.value + '8';
	},
	numPadHitNine: function()
	{
        	APPLICATION.mGame.mNumAnswer.mMesh.value = APPLICATION.mGame.mNumAnswer.mMesh.value + '9';
	},
	numPadHitDivision: function()
	{
        	APPLICATION.mGame.mNumAnswer.mMesh.value = APPLICATION.mGame.mNumAnswer.mMesh.value + '/';
	},
	numPadHitMultiplication: function()
	{
        	APPLICATION.mGame.mNumAnswer.mMesh.value = APPLICATION.mGame.mNumAnswer.mMesh.value + '*';
	},
	numPadHitAddition: function()
	{
        	APPLICATION.mGame.mNumAnswer.mMesh.value = APPLICATION.mGame.mNumAnswer.mMesh.value + '+';
	},
	numPadHitSubtraction: function()
	{
        	APPLICATION.mGame.mNumAnswer.mMesh.value = APPLICATION.mGame.mNumAnswer.mMesh.value + '-';
	},
	numPadHitDecimal: function()
	{
        	APPLICATION.mGame.mNumAnswer.mMesh.value = APPLICATION.mGame.mNumAnswer.mMesh.value + '.';
	},

	createWorld: function()
        {
		this.parent();
		this.createInput();
	},
      
	createNumQuestion: function()
        {
                //question
                this.mNumQuestion = new Shape(100,50,325,95,this,"","","");
                this.mShapeArray.push(this.mNumQuestion);
                this.mNumQuestion.mCollidable = false;
                this.mNumQuestion.mCollisionOn = false;
        },

	createInput: function()
	{
                //question
                this.createNumQuestion();

                //answer
                this.mNumAnswer = new Shape(100,50,425,100,this,"INPUT","","");
                this.mNumAnswer.mMesh.value = '';
                this.mNumAnswer.mMesh.addEvent('keypress',this.inputKeyHit);
                this.mShapeArray.push(this.mNumAnswer);

		this.mTotalInputBars = this.mShapeArray.length - this.mTotalGuiBars;

                //set all pad shapes invisible to start semi-clean
                for (i = this.mTotalGuiBars; i < this.mShapeArray.length; i++)
                {
                        this.mShapeArray[i].setVisibility(false);
                        this.mShapeArray[i].mCollidable = false;
                        this.mShapeArray[i].mCollisionOn = false;
                }
        }
});
