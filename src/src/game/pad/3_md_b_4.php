var g3_md_b_4 = new Class(
{

Extends: RulerPad,

	initialize: function(application)
	{
       		this.parent(application);

		this.setScoreNeeded(14);

    		this.mRaphael = Raphael(10, 35, 760, 405);

		this.mRectangleArray       = new Array();	
		this.mRulerQuarterInchArray = new Array();	
	},
   
        showCorrectAnswerEnter: function()
        {
                this.parent();

                this.mShapeArray[1].setPosition(100,80);
             	this.mShapeArray[1].mMesh.innerHTML = '' + this.mQuiz.getQuestion().getQuestion() + ' CORRECT ANSWER:' + this.mQuiz.getQuestion().getAnswer();
/* 
		this.mShapeArray.push(new Shape(197,185,425,300,this,"/images/symbols/dontforget.gif","",""));
                this.mShapeArray[parseInt(this.mShapeArray.length - 1)].setVisibility(false);
                this.mShapeArray[parseInt(this.mShapeArray.length - 1)].mCollidable = false;
                this.mShapeArray[parseInt(this.mShapeArray.length - 1)].mCollisionOn = false;
                this.mTotalGuiBars++;
*/

  		this.mShapeArray[9].setSize(100,100);
  		this.mShapeArray[9].setPosition(120,340);

        },

	createQuestions: function()
        {
		this.parent();
		
		//just the question array reset
		this.mQuiz.resetQuestionArray();

		//1
		question = new Question('What is the length of the red shape in inches to the nearest 1/4 inch? Reduce fractions. Write answer like this: 1 3/4 in', '1/4 in');
		this.mQuiz.mQuestionArray.push(question);
		
		question.mShapeArray.push(this.mRectangleArray[0]);
		this.mRectangleArray[0].setSize(50,20);

		this.mRulerQuarterInchArray[0].addToQuestion(question);
		question.mShapeArray.push(this.mRulerQuarterInchArray[0]);

	
		//2
		question = new Question('What is the length of the red shape in inches to the nearest 1/4 inch? Reduce fractions. Write answer like this: 1 3/4 in', '1/2 in');
		this.mQuiz.mQuestionArray.push(question);
		
		question.mShapeArray.push(this.mRectangleArray[1]);
		this.mRectangleArray[1].setSize(50,40);

		this.mRulerQuarterInchArray[1].addToQuestion(question);
		question.mShapeArray.push(this.mRulerQuarterInchArray[1]);

		//3
		question = new Question('What is the length of the red shape in inches to the nearest 1/4 inch? Reduce fractions. Write answer like this: 1 3/4 in', '3/4 in');
		this.mQuiz.mQuestionArray.push(question);
		
		question.mShapeArray.push(this.mRectangleArray[2]);
		this.mRectangleArray[2].setSize(50,60);

		this.mRulerQuarterInchArray[2].addToQuestion(question);
		question.mShapeArray.push(this.mRulerQuarterInchArray[2]);

		//4
		question = new Question('What is the length of the red shape in inches to the nearest 1/4 inch? Reduce fractions. Write answer like this: 1 3/4 in', '1 in');
		this.mQuiz.mQuestionArray.push(question);
		
		question.mShapeArray.push(this.mRectangleArray[3]);
		this.mRectangleArray[3].setSize(50,80);

		this.mRulerQuarterInchArray[3].addToQuestion(question);
		question.mShapeArray.push(this.mRulerQuarterInchArray[3]);

		//5
		question = new Question('What is the length of the red shape in inches to the nearest 1/4 inch? Reduce fractions. Example answers: 1/4 in, 1/2 in 1 in, 1 3/4 in, etc.', '1 1/4 in');
		this.mQuiz.mQuestionArray.push(question);
		
		question.mShapeArray.push(this.mRectangleArray[4]);
		this.mRectangleArray[4].setSize(50,100);

		this.mRulerQuarterInchArray[4].addToQuestion(question);
		question.mShapeArray.push(this.mRulerQuarterInchArray[4]);

		//6
		question = new Question('What is the length of the red shape in inches to the nearest 1/4 inch? Reduce fractions. Example answers: 1/4 in, 1/2 in 1 in, 1 3/4 in, etc.', '1 1/2 in');
		this.mQuiz.mQuestionArray.push(question);
		
		question.mShapeArray.push(this.mRectangleArray[5]);
		this.mRectangleArray[5].setSize(50,120);

		this.mRulerQuarterInchArray[5].addToQuestion(question);
		question.mShapeArray.push(this.mRulerQuarterInchArray[5]);

		//7
		question = new Question('What is the length of the red shape in inches to the nearest 1/4 inch? Reduce fractions. Example answers: 1/4 in, 1/2 in 1 in, 1 3/4 in, etc.', '1 3/4 in');
		this.mQuiz.mQuestionArray.push(question);
		
		question.mShapeArray.push(this.mRectangleArray[6]);
		this.mRectangleArray[6].setSize(50,140);

		this.mRulerQuarterInchArray[6].addToQuestion(question);
		question.mShapeArray.push(this.mRulerQuarterInchArray[6]);

		//8
		question = new Question('What is the length of the red shape in inches to the nearest 1/4 inch? Reduce fractions. Example answers: 1/4 in, 1/2 in 1 in, 1 3/4 in, etc.', '2 in');
		this.mQuiz.mQuestionArray.push(question);
		
		question.mShapeArray.push(this.mRectangleArray[7]);
		this.mRectangleArray[7].setSize(50,160);

		this.mRulerQuarterInchArray[7].addToQuestion(question);
		question.mShapeArray.push(this.mRulerQuarterInchArray[7]);

		//9
		question = new Question('What is the length of the red shape in inches to the nearest 1/4 inch? Reduce fractions. Example answers: 1/4 in, 1/2 in 1 in, 1 3/4 in, etc.', '2 1/4 in');
		this.mQuiz.mQuestionArray.push(question);
		
		question.mShapeArray.push(this.mRectangleArray[8]);
		this.mRectangleArray[8].setSize(50,180);

		this.mRulerQuarterInchArray[8].addToQuestion(question);
		question.mShapeArray.push(this.mRulerQuarterInchArray[8]);

		//10
		question = new Question('What is the length of the red shape in inches to the nearest 1/4 inch? Reduce fractions. Example answers: 1/4 in, 1/2 in 1 in, 1 3/4 in, etc.', '2 1/2 in');
		this.mQuiz.mQuestionArray.push(question);
		
		question.mShapeArray.push(this.mRectangleArray[9]);
		this.mRectangleArray[9].setSize(50,200);

		this.mRulerQuarterInchArray[9].addToQuestion(question);
		question.mShapeArray.push(this.mRulerQuarterInchArray[9]);

		//11
		question = new Question('What is the length of the red shape in inches to the nearest 1/4 inch? Reduce fractions. Example answers: 1/4 in, 1/2 in 1 in, 1 3/4 in, etc.', '2 3/4 in');
		this.mQuiz.mQuestionArray.push(question);
		
		question.mShapeArray.push(this.mRectangleArray[10]);
		this.mRectangleArray[10].setSize(50,220);

		this.mRulerQuarterInchArray[10].addToQuestion(question);
		question.mShapeArray.push(this.mRulerQuarterInchArray[10]);

		//12
		question = new Question('What is the length of the red shape in inches to the nearest 1/4 inch? Reduce fractions. Example answers: 1/4 in, 1/2 in 1 in, 1 3/4 in, etc.', '3 in');
		this.mQuiz.mQuestionArray.push(question);
		
		question.mShapeArray.push(this.mRectangleArray[11]);
		this.mRectangleArray[11].setSize(50,240);

		this.mRulerQuarterInchArray[11].addToQuestion(question);
		question.mShapeArray.push(this.mRulerQuarterInchArray[11]);

		//13
		question = new Question('What is the length of the red shape in inches to the nearest 1/4 inch? Reduce fractions. Example answers: 1/4 in, 1/2 in 1 in, 1 3/4 in, etc.', '3 1/4 in');
		this.mQuiz.mQuestionArray.push(question);
		
		question.mShapeArray.push(this.mRectangleArray[12]);
		this.mRectangleArray[12].setSize(50,260);

		this.mRulerQuarterInchArray[12].addToQuestion(question);
		question.mShapeArray.push(this.mRulerQuarterInchArray[12]);

		//14

		question = new Question('What is the length of the red shape in inches to the nearest 1/4 inch? Reduce fractions. Example answers: 1/4 in, 1/2 in 1 in, 1 3/4 in, etc.', '3 1/2 in');
		this.mQuiz.mQuestionArray.push(question);
		
		question.mShapeArray.push(this.mRectangleArray[13]);
		this.mRectangleArray[13].setSize(50,280);

		this.mRulerQuarterInchArray[13].addToQuestion(question);
		question.mShapeArray.push(this.mRulerQuarterInchArray[13]);
		
		//buf
		this.mQuiz.mQuestionArray.push(new Question('buf','buf'));

		//random
                this.mQuiz.randomize(10);

	},

	createWorld: function()
	{
		this.parent();
		
		this.mRectangleArray.length = 0;
		this.mRulerQuarterInchArray.length = 0;	
		
		for (i = 0; i < this.mScoreNeeded; i++)
		{
                        //the cm ruler
                        var rulerQuarterInch = new RulerQuarterInch(50,300,300,50,this,this.mRaphael,.6,1,1,"none",.5,true);
                        this.mShapeArray.push(rulerQuarterInch);
			this.mRulerQuarterInchArray.push(rulerQuarterInch);
                        
			//red shape to measure
                        var redRectangle = new Rectangle(parseInt(i * 20 + 20),50,600,100,this,this.mRaphael,0,1,1,"none",.5,true);
                        this.mShapeArray.push(redRectangle);
			this.mRectangleArray.push(redRectangle);
		}
	}
});
