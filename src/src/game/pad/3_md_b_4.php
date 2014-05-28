var g3_md_b_4 = new Class(
{

Extends: RulerPad,

	initialize: function(application)
	{
       		this.parent(application);

		this.setScoreNeeded(2);

    		this.mRaphael = Raphael(10, 35, 760, 405);

		this.mRectangleArray       = new Array();	
		this.mRulerQuarterInchArray = new Array();	
	},
   
        showCorrectAnswerEnter: function()
        {
                this.parent();

                this.mShapeArray[1].setPosition(100,80);
             	this.mShapeArray[1].mMesh.innerHTML = '' + this.mQuiz.getQuestion().getQuestion() + ' CORRECT ANSWER:' + this.mQuiz.getQuestion().getAnswer();
        },

	createQuestions: function()
        {
		this.parent();
		
		//just the question array reset
		this.mQuiz.resetQuestionArray();

		//1
		question = new Question('What is the length of the red shape in centimeters to the nearest 1/4 inch? Reduce fractions. Write answer like this: 1 3/4 in', '1/4 in');
		this.mQuiz.mQuestionArray.push(question);
		
		question.mShapeArray.push(this.mRectangleArray[0]);
		this.mRectangleArray[0].setSize(50,20);

		this.mRulerQuarterInchArray[0].addToQuestion(question);
		question.mShapeArray.push(this.mRulerQuarterInchArray[0]);

	
		//2
		question = new Question('What is the length of the red shape in centimeters to the nearest 1/4 inch? Reduce fractions. Write answer like this: 1 3/4 in', '1/2 in');
		this.mQuiz.mQuestionArray.push(question);
		
		question.mShapeArray.push(this.mRectangleArray[1]);
		this.mRectangleArray[1].setSize(50,40);

		this.mRulerQuarterInchArray[1].addToQuestion(question);
		question.mShapeArray.push(this.mRulerQuarterInchArray[1]);

		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));

		//random
                //this.mQuiz.randomize(10);

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
