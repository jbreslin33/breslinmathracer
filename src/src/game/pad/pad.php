var Pad = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);
	
		//cursor
		document.body.style.cursor = 'default';	

		this.mApplication.mMouseMoveOn = false;

		this.setScoreNeeded(10);

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
		
		if (this.mNumAnswer)
		{
                	this.mNumAnswer.mMesh.focus();
		}
        },

        inputKeyHit: function(e)
        {
                if (e.key == 'enter')
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
