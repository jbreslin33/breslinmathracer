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
// = new Shape(200,200,140,140,this,"","","");
        },
	
        //showCorrectAnswer
        showCorrectAnswerEnter: function()
        {
                this.parent();

                this.mShapeArray[1].setPosition(100,80);
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
 		question.mShapeArray.push(this.mShapeArray[parseInt(0 + this.mTotalGuiBars + this.mTotalInputBars)]);

		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
		
		//random	
		this.mQuiz.randomize(10);
	},

	createWorld: function()
	{
		this.parent();
		this.mShapeArray.push(new Circle   (25,100,300,this,this.mRaphael,0,1,1,"none",.5,true));	
	}
});
