var ButtonMultipleChoicePadImages  = new Class(
{

Extends: InputPad,

	initialize: function(application)
	{
		this.parent(application);
	},

	createInputPad: function()
	{
		this.createNumQuestion(); 

		//BUTTONS	
		if (!this.mButtonA)
                {
                        this.mButtonA = new Shape(150,50,300,100,this.mGame,"/images/symbols/equal.png","","");
 			this.mButtonA.mCollidable  = false;
                        this.mButtonA.mCollisionOn = false;
                        this.mButtonA.mMesh.innerHTML = 'A';
                        this.mButtonA.mMesh.addEvent('click',this.numPadHit);
                        this.mInputPadArray.push(this.mButtonA);
                }
                if (!this.mButtonB)
                {
                        this.mButtonB = new Shape(150,50,300,200,this.mGame,"/images/symbols/greater_than.png","","");
 			this.mButtonB.mCollidable  = false;
                        this.mButtonB.mCollisionOn = false;
                        this.mButtonB.mMesh.innerHTML = 'B';
                        this.mButtonB.mMesh.addEvent('click',this.numPadHit);
                        this.mInputPadArray.push(this.mButtonB);
                }
                if (!this.mButtonC)
                {
                        this.mButtonC = new Shape(150,50,300,300,this.mGame,"/images/symbols/less_than.png","","");
 			this.mButtonC.mCollidable  = false;
                        this.mButtonC.mCollisionOn = false;
                        this.mButtonC.mMesh.innerHTML = 'C';
                        this.mButtonC.mMesh.addEvent('click',this.numPadHit);
                        this.mInputPadArray.push(this.mButtonC);
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

                                this.mNumQuestion.mMesh.innerHTML = this.mApplication.mGame.mQuiz.getQuestion().getQuestion();
                        }
                }
        },

        numPadHit: function()
        {
                APPLICATION.mGame.mUserAnswer = this.innerHTML;
        }
});
