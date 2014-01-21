var ButtonMultipleChoicePad  = new Class(
{

Extends: InputPad,

	initialize: function(application)
	{
		this.parent(application);

		this.mCorrectButtonNumber = 0;
		this.mLastCorrectButtonNumber = 0;
	},

	createInputPad: function()
	{
		this.createNumQuestion(); 

		//BUTTONS	
		if (!this.mButtonA)
                {
                        this.mButtonA = new Shape(150,50,300,100,this.mGame,"BUTTON","","");
 			this.mButtonA.mCollidable  = false;
                        this.mButtonA.mCollisionOn = false;
                        this.mButtonA.mMesh.innerHTML = 'A';
                        this.mButtonA.mMesh.addEvent('click',this.numPadHit);
                        this.mInputPadArray.push(this.mButtonA);
                }
                if (!this.mButtonB)
                {
                        this.mButtonB = new Shape(150,50,300,150,this.mGame,"BUTTON","","");
 			this.mButtonB.mCollidable  = false;
                        this.mButtonB.mCollisionOn = false;
                        this.mButtonB.mMesh.innerHTML = 'B';
                        this.mButtonB.mMesh.addEvent('click',this.numPadHit);
                        this.mInputPadArray.push(this.mButtonB);
                }
                if (!this.mButtonC)
                {
                        this.mButtonC = new Shape(150,50,300,200,this.mGame,"BUTTON","","");
 			this.mButtonC.mCollidable  = false;
                        this.mButtonC.mCollisionOn = false;
                        this.mButtonC.mMesh.innerHTML = 'C';
                        this.mButtonC.mMesh.addEvent('click',this.numPadHit);
                        this.mInputPadArray.push(this.mButtonC);
                }
                if (!this.mButtonD)
                {
                        this.mButtonD = new Shape(150,50,300,250,this.mGame,"BUTTON","","");
 			this.mButtonD.mCollidable  = false;
                        this.mButtonD.mCollisionOn = false;
                        this.mButtonD.mMesh.innerHTML = 'D';
                        this.mButtonD.mMesh.addEvent('click',this.numPadHit);
                        this.mInputPadArray.push(this.mButtonD);
		}
	},
      
	createNumQuestion: function()
        {
                //question
		if (!this.mNumQuestion)
		{
                	this.mNumQuestion = new Shape(100,50,100,100,this.mGame,"","","");
                	this.mInputPadArray.push(this.mNumQuestion);
		}
        },

        showQuestion: function()
        {
                if (this.mApplication.mGame.mQuiz)
                {
                        if (this.mApplication.mGame.mQuiz.getQuestion())
                        {
				//how many buttons
                                if (this.mApplication.mGame.mQuiz.getQuestion().mChoiceA != '')
				{
					this.mButtonA.setVisibility(true);
					this.mButtonA.mMesh.innerHTML = '' + this.mApplication.mGame.mQuiz.getQuestion().mChoiceA;	
				}
				else
				{
					this.mButtonA.setVisibility(false);
				}

                                if (this.mApplication.mGame.mQuiz.getQuestion().mChoiceB != '')
				{
					this.mButtonB.setVisibility(true);
					this.mButtonB.mMesh.innerHTML = '' + this.mApplication.mGame.mQuiz.getQuestion().mChoiceB;	
				}
				else
				{
					this.mButtonB.setVisibility(false);
				}

                                if (this.mApplication.mGame.mQuiz.getQuestion().mChoiceC)
				{
					this.mButtonC.setVisibility(true);
					this.mButtonC.mMesh.innerHTML = '' + this.mApplication.mGame.mQuiz.getQuestion().mChoiceC;	
				}
				else
				{
					this.mButtonC.setVisibility(false);
				}

                                if (this.mApplication.mGame.mQuiz.getQuestion().mChoiceD)
				{
					this.mButtonD.setVisibility(true);
					this.mButtonD.mMesh.innerHTML = '' + this.mApplication.mGame.mQuiz.getQuestion().mChoiceD;	
				}
				else
				{
					this.mButtonD.setVisibility(false);
				}

                                this.mNumQuestion.mMesh.innerHTML = this.mApplication.mGame.mQuiz.getQuestion().getQuestion();
                        }
                }
        },

	setButtons: function(unique)
        {
                this.mCorrectButtonNumber = 0;
		
		var goOnce = true;

                while (goOnce == true || this.mCorrectButtonNumber == this.mLastCorrectButtonNumber || this.mButtonA.mMesh.innerHTML == this.mButtonB.mMesh.innerHTML || this.mButtonA.mMesh.innerHTML == this.mButtonC.mMesh.innerHTML || this.mButtonB.mMesh.innerHTML == this.mButtonC.mMesh.innerHTML)
                {
                        this.mCorrectButtonNumber = Math.floor((Math.random()*3));
                        this.mButtonA.mMesh.innerHTML = this.mApplication.mGame.mQuiz.mAnswerPool[Math.floor((Math.random()*parseInt(this.mApplication.mGame.mQuiz.mAnswerPool.length)))];
                        this.mButtonB.mMesh.innerHTML = this.mApplication.mGame.mQuiz.mAnswerPool[Math.floor((Math.random()*parseInt(this.mApplication.mGame.mQuiz.mAnswerPool.length)))];
                        this.mButtonC.mMesh.innerHTML = this.mApplication.mGame.mQuiz.mAnswerPool[Math.floor((Math.random()*parseInt(this.mApplication.mGame.mQuiz.mAnswerPool.length)))];

                        if (this.mCorrectButtonNumber == 0)
                        {
                                this.mButtonA.mMesh.innerHTML = this.mApplication.mGame.mQuiz.getQuestion().getAnswer();
                        }
                        if (this.mCorrectButtonNumber == 1)
                        {
                                this.mButtonB.mMesh.innerHTML = this.mApplication.mGame.mQuiz.getQuestion().getAnswer();
                        }
                        if (this.mCorrectButtonNumber == 2)
                        {
                                this.mButtonC.mMesh.innerHTML = this.mApplication.mGame.mQuiz.getQuestion().getAnswer();
                        }
			goOnce = false;
                }
                this.mLastCorrectButtonNumber = this.mCorrectButtonNumber;
        },

        numPadHit: function()
        {
                APPLICATION.mGame.mUserAnswer = this.innerHTML;
        }
});
