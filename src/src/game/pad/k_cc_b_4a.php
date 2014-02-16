var k_cc_b_4a = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);

		//answers 
                this.mThresholdTime = 60000;
	},

	//questions
	createQuestions: function()
        {
		this.parent();

		//answer pool		
		this.mQuiz.mAnswerPool.push('one');
		this.mQuiz.mAnswerPool.push('two');
		this.mQuiz.mAnswerPool.push('three');
		this.mQuiz.mAnswerPool.push('four');
		this.mQuiz.mAnswerPool.push('five');
		this.mQuiz.mAnswerPool.push('six');
		this.mQuiz.mAnswerPool.push('seven');
		this.mQuiz.mAnswerPool.push('eight');
		this.mQuiz.mAnswerPool.push('nine');
		this.mQuiz.mAnswerPool.push('ten');

 		//just the question array reset
                this.mQuiz.resetQuestionArray();

   		for (i = 0; i < this.mScoreNeeded; i++)
                {
                        var question = new Question('Count?', '' + this.mQuiz.mAnswerPool[i]);
			question.mAnswerPool = this.mQuiz.mAnswerPool;
			for (s = 0; s <= parseInt(i*2); s++)
			{
				question.mShapeArray.push(this.mShapeArray[parseInt(s + this.mTotalGuiBars + this.mTotalInputBars)]);
			}
                        this.mQuiz.mQuestionArray.push(question);
                }
	},

	createNumQuestion: function()
        {
                //question
                if (!this.mNumQuestion)
                {
                        this.mNumQuestion = new Shape(100,50,330,40,this,"","","");
                        this.mShapeArray.push(this.mNumQuestion);
                }
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

        numPadHit: function()
        {
                APPLICATION.mGame.mUserAnswer = this.innerHTML;
        },

	createInput: function()
	{
       		this.createNumQuestion();

                //BUTTONS
                if (!this.mButtonA)
                {
                        this.mButtonA = new Shape(150,50,375,100,this,"BUTTON","","");
                        this.mButtonA.mCollidable  = false;
                        this.mButtonA.mCollisionOn = false;
                        this.mButtonA.mMesh.innerHTML = 'A';
                        this.mButtonA.mMesh.addEvent('click',this.numPadHit);
                        this.mShapeArray.push(this.mButtonA);
                }
                if (!this.mButtonB)
                {
                        this.mButtonB = new Shape(150,50,375,150,this,"BUTTON","","");
                        this.mButtonB.mCollidable  = false;
                        this.mButtonB.mCollisionOn = false;
                        this.mButtonB.mMesh.innerHTML = 'B';
                        this.mButtonB.mMesh.addEvent('click',this.numPadHit);
                        this.mShapeArray.push(this.mButtonB);
                }
                if (!this.mButtonC)
                {
                        this.mButtonC = new Shape(150,50,375,200,this,"BUTTON","","");
                        this.mButtonC.mCollidable  = false;
                        this.mButtonC.mCollisionOn = false;
                        this.mButtonC.mMesh.innerHTML = 'C';
                        this.mButtonC.mMesh.addEvent('click',this.numPadHit);
                        this.mShapeArray.push(this.mButtonC);
                }
                if (!this.mButtonD)
                {
                        this.mButtonD = new Shape(150,50,375,250,this,"BUTTON","","");
                        this.mButtonD.mCollidable  = false;
                        this.mButtonD.mCollisionOn = false;
                        this.mButtonD.mMesh.innerHTML = 'D';
                        this.mButtonD.mMesh.addEvent('click',this.numPadHit);
                        this.mShapeArray.push(this.mButtonD);
                }

 		this.mTotalInputBars = this.mShapeArray.length - this.mTotalGuiBars;
	},

	createWorld: function()
	{
		this.parent();

		//one
                this.mShapeArray.push(new Shape(50,50,38,80,this,"/images/bus/kid.png","",""));
		this.mShapeArray.push(new Shape(50,50,45,45,this,"","",""));
		this.mShapeArray[parseInt(1 + this.mTotalGuiBars + this.mTotalInputBars)].setText('one');
		
		//two
                this.mShapeArray.push(new Shape(50,50,83,80,this,"/images/bus/kid.png","",""));
		this.mShapeArray.push(new Shape(50,50,93,45,this,"","",""));
		this.mShapeArray[parseInt(3 + this.mTotalGuiBars + this.mTotalInputBars)].setText('two');
		
		//three
                this.mShapeArray.push(new Shape(50,50,135,80,this,"/images/bus/kid.png","",""));
		this.mShapeArray.push(new Shape(50,50,140,45,this,"","",""));
		this.mShapeArray[parseInt(5 + this.mTotalGuiBars + this.mTotalInputBars)].setText('three');
	
		//four
                this.mShapeArray.push(new Shape(50,50,185,80,this,"/images/bus/kid.png","",""));
		this.mShapeArray.push(new Shape(50,50,190,45,this,"","",""));
		this.mShapeArray[parseInt(7 + this.mTotalGuiBars + this.mTotalInputBars)].setText('four');
                
		//five
                this.mShapeArray.push(new Shape(50,50,235,80,this,"/images/bus/kid.png","",""));
		this.mShapeArray.push(new Shape(50,50,240,45,this,"","",""));
		this.mShapeArray[parseInt(9 + this.mTotalGuiBars + this.mTotalInputBars)].setText('five');
		
		//six
                this.mShapeArray.push(new Shape(50,50,38,180,this,"/images/bus/kid.png","",""));
		this.mShapeArray.push(new Shape(50,50,45,145,this,"","",""));
		this.mShapeArray[parseInt(11 + this.mTotalGuiBars + this.mTotalInputBars)].setText('six');
		
		//seven
                this.mShapeArray.push(new Shape(50,50,83,180,this,"/images/bus/kid.png","",""));
		this.mShapeArray.push(new Shape(50,50,93,145,this,"","",""));
		this.mShapeArray[parseInt(13 + this.mTotalGuiBars + this.mTotalInputBars)].setText('seven');
		
		//eight
                this.mShapeArray.push(new Shape(50,50,135,180,this,"/images/bus/kid.png","",""));
		this.mShapeArray.push(new Shape(50,50,140,145,this,"","",""));
		this.mShapeArray[parseInt(15 + this.mTotalGuiBars + this.mTotalInputBars)].setText('eight');
		
		//nine
                this.mShapeArray.push(new Shape(50,50,185,180,this,"/images/bus/kid.png","",""));
		this.mShapeArray.push(new Shape(50,50,190,145,this,"","",""));
		this.mShapeArray[parseInt(17 + this.mTotalGuiBars + this.mTotalInputBars)].setText('nine');
                
		//ten
                this.mShapeArray.push(new Shape(50,50,235,180,this,"/images/bus/kid.png","",""));
		this.mShapeArray.push(new Shape(50,50,240,145,this,"","",""));
		this.mShapeArray[parseInt(19 + this.mTotalGuiBars + this.mTotalInputBars)].setText('ten');
	}
});
