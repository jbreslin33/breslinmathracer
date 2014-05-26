var MultipleChoicePad = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);
	},

	createNumQuestion: function()
        {
		this.parent();
		this.mNumQuestion.setPosition(100,40,380,-90);
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
    				this.mNumQuestion.setVisibility(true);
                                this.mNumQuestion.mMesh.innerHTML = this.mQuiz.getQuestion().getQuestion();
                        }
                }

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
                                        if (this.mButtonD)
                                        {
                                                this.mButtonD.setVisibility(false);
                                        }
                                }

                                this.mNumQuestion.mMesh.innerHTML = this.mApplication.mGame.mQuiz.getQuestion().getQuestion();
                        }
                }
        },

        numPadHitA: function()
        {
                APPLICATION.mGame.mUserAnswer = '' + APPLICATION.mGame.mQuiz.getQuestion().mChoiceA;
        },
	
        numPadHitB: function()
        {
                APPLICATION.mGame.mUserAnswer = '' + APPLICATION.mGame.mQuiz.getQuestion().mChoiceB;
        },
	
        numPadHitC: function()
        {
                APPLICATION.mGame.mUserAnswer = '' + APPLICATION.mGame.mQuiz.getQuestion().mChoiceC;
        },
	
        numPadHitD: function()
        {
                APPLICATION.mGame.mUserAnswer = '' + APPLICATION.mGame.mQuiz.getQuestion().mChoiceD;
        },
	
	createInput: function()
	{
       		this.createNumQuestion();

                //BUTTONS
                this.mButtonA = new Shape(150,50,375,100,this,"BUTTON","","");
                this.mButtonA.mCollidable  = false;
                this.mButtonA.mCollisionOn = false;
                this.mButtonA.mMesh.innerHTML = 'A';
  		if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mButtonA.mMesh.attachEvent("onclick",this.numPadHitA);
                }
                else
                {
                	this.mButtonA.mMesh.addEvent('click',this.numPadHit);
		}
                this.mShapeArray.push(this.mButtonA);
                        
		this.mButtonB = new Shape(150,50,375,150,this,"BUTTON","","");
                this.mButtonB.mCollidable  = false;
                this.mButtonB.mCollisionOn = false;
                this.mButtonB.mMesh.innerHTML = 'B';
  		if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mButtonB.mMesh.attachEvent("onclick",this.numPadHitB);
                }
                else
                {
                	this.mButtonB.mMesh.addEvent('click',this.numPadHit);
		}
                this.mShapeArray.push(this.mButtonB);
                      
		this.mButtonC = new Shape(150,50,375,200,this,"BUTTON","","");
                this.mButtonC.mCollidable  = false;
                this.mButtonC.mCollisionOn = false;
                this.mButtonC.mMesh.innerHTML = 'C';
  		if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mButtonC.mMesh.attachEvent("onclick",this.numPadHitC);
                }
                else
                {
                	this.mButtonC.mMesh.addEvent('click',this.numPadHit);
		}
                this.mShapeArray.push(this.mButtonC);
               
                this.mButtonD = new Shape(150,50,375,250,this,"BUTTON","","");
                this.mButtonD.mCollidable  = false;
                this.mButtonD.mCollisionOn = false;
                this.mButtonD.mMesh.innerHTML = 'D';
  		if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mButtonD.mMesh.attachEvent("onclick",this.numPadHitD);
                }
                else
                {
                	this.mButtonD.mMesh.addEvent('click',this.numPadHit);
		}
                this.mShapeArray.push(this.mButtonD);

 		this.mTotalInputBars = this.mShapeArray.length - this.mTotalGuiBars;
	}
});
