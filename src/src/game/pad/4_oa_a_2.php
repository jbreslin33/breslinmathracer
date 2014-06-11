var g4_oa_a_2 = new Class(
{

Extends: MultipleChoicePad,

	initialize: function(application)
	{
       		this.parent(application);
		this.setScoreNeeded(12);

    		this.mRaphael = Raphael(10, 35, 760, 405);
	},
        
	createNumQuestion: function()
        {
		this.parent();
                this.mNumQuestion.setSize(250,200);
                this.mNumQuestion.setPosition(140,140);
        },

	createInput: function()
	{
		this.parent();
		this.mButtonA.setPosition(375,100);
		this.mButtonB.setPosition(525,100);
		this.mButtonC.setPosition(675,100);
//this.mButtonA = new Shape(150,50,375,100,this,"BUTTON","","");

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

	
        //showCorrectAnswer
        showCorrectAnswerEnter: function()
        {
                this.parent();

                this.mShapeArray[1].setPosition(100,80);
        },

	includeLetters: function(question)
	{
 		question.mShapeArray.push(this.mShapeArray[parseInt(0 + this.mTotalGuiBars + this.mTotalInputBars)]);
 		question.mShapeArray.push(this.mShapeArray[parseInt(1 + this.mTotalGuiBars + this.mTotalInputBars)]);
 		question.mShapeArray.push(this.mShapeArray[parseInt(2 + this.mTotalGuiBars + this.mTotalInputBars)]);
	},

	
	createQuestions: function()
        {
		this.parent();
	
		//just the question array reset
		this.mQuiz.resetQuestionArray();
		this.mQuiz.resetQuestionPoolArray();

        	//*************** question 1 
                var question = new Question('A teacher put the kids desks in 5 rows with 7 desks in each row. How could we show this problem in pictures?', 'A');
                question.mAnswerPool.push('A');
                question.mAnswerPool.push('B');
                question.mAnswerPool.push('C');
                this.mQuiz.mQuestionArray.push(question);
 		question.mShapeArray.push(this.mShapeArray[parseInt(3 + this.mTotalGuiBars + this.mTotalInputBars)]);
		this.includeLetters(question);

		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
		
		//random	
		this.mQuiz.randomize(10);
	},

	createWorld: function()
	{
		this.parent();
		//A
                shape = new Shape(5,5,55,255,this,"","","");
                this.mShapeArray.push(shape);
                shape.setText('A');

		//B
                shape = new Shape(5,5,255,255,this,"","","");
                this.mShapeArray.push(shape);
                shape.setText('B');

		//C
                shape = new Shape(5,5,455,255,this,"","","");
                this.mShapeArray.push(shape);
                shape.setText('C');

		this.mShapeArray.push(new Circle   (25,100,300,this,this.mRaphael,0,1,1,"none",.5,true));	

	}
});
