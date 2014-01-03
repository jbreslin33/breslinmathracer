var ButtonMultipleChoicePadSpread  = new Class(
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
                        this.mButtonA = new Shape(150,50,300,50,this.mGame,"BUTTON","","");
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
                        this.mButtonC = new Shape(150,50,300,250,this.mGame,"BUTTON","","");
 			this.mButtonC.mCollidable  = false;
                        this.mButtonC.mCollisionOn = false;
                        this.mButtonC.mMesh.innerHTML = 'C';
                        this.mButtonC.mMesh.addEvent('click',this.numPadHit);
                        this.mInputPadArray.push(this.mButtonC);
                }
                if (!this.mButtonD)
                {
                        this.mButtonD = new Shape(150,50,300,350,this.mGame,"BUTTON","","");
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
                this.mNumQuestion = new Shape(100,50,100,100,this.mGame,"","","");
                this.mInputPadArray.push(this.mNumQuestion);
        },

	show: function()
	{
 		//shapes and array
		/*
                for (i = 0; i < this.mInputPadArray.length; i++)
                {
                        this.mInputPadArray[i].setVisibility(true);
                }
		*/
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
					this.mApplication.log('setVis on d to true');
				}
				else
				{
					this.mApplication.log('setVis on d to false');
					this.mButtonD.setVisibility(false);
				}

				this.mApplication.log('showQ:' + this.mApplication.mGame.mQuiz.getQuestion().getQuestion());
                                this.mNumQuestion.mMesh.innerHTML = this.mApplication.mGame.mQuiz.getQuestion().getQuestion();
                                this.mNumQuestion.setVisibility('true');
                        }
                }
        },

        numPadHit: function()
        {
                APPLICATION.mGame.mUserAnswer = this.innerHTML;
        }
});
