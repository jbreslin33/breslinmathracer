var g1_md_a_1 = new Class(
{

Extends: MultipleChoicePad,

	initialize: function(application)
	{
       		this.parent(application);
    		this.mRaphael = Raphael(10, 35, 760, 405);
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
   
		this.mQuiz.mAnswerPool.push('Red Green Blue');
		this.mQuiz.mAnswerPool.push('Red Blue Green');
                this.mQuiz.mAnswerPool.push('Green Blue Red');
                this.mQuiz.mAnswerPool.push('Green Red Blue');
                this.mQuiz.mAnswerPool.push('Blue Red Green');
                this.mQuiz.mAnswerPool.push('Blue Green Red');

		for (i = 0; i < this.mScoreNeeded; i++)
		{
			var redHeightCode = 0; 
			var greenHeightCode = 0; 
			var blueHeightCode = 0; 
			
			var redHeight = 0;
			var greenHeight = 0;
			var blueHeight = 0;

			while (redHeightCode == greenHeightCode || redHeightCode == blueHeightCode)
			{ 
				//get 3 random heights.
				redHeightCode = Math.floor((Math.random()*6)+1);
				redHeight = redHeightCode * 50;  
		
				greenHeightCode = Math.floor((Math.random()*6)+1);
				greenHeight = greenHeightCode * 50;  
		
				blueHeightCode = Math.floor((Math.random()*6)+1);
				blueHeight = blueHeightCode * 50;  
			}
			
			var question = new Question('Order shapes by length from shortest to longest.', 'Red Green Blue');
			question.mAnswerPool = this.mQuiz.mAnswerPool;
			this.mQuiz.mQuestionArray.push(question);
			
			question.mShapeArray.push(this.mShapeArray[parseInt(i * 3 + 0 + this.mTotalGuiBars + this.mTotalInputBars)]);
			this.mShapeArray[parseInt(i * 3 + 0 + this.mTotalGuiBars + this.mTotalInputBars)].setSize(50,redHeight);

			question.mShapeArray.push(this.mShapeArray[parseInt(i * 3 + 1 + this.mTotalGuiBars + this.mTotalInputBars)]);
			this.mShapeArray[parseInt(i * 3 + 1 + this.mTotalGuiBars + this.mTotalInputBars)].setSize(50,greenHeight);

			question.mShapeArray.push(this.mShapeArray[parseInt(i * 3 + 2 + this.mTotalGuiBars + this.mTotalInputBars)]);
			this.mShapeArray[parseInt(i * 3 + 2 + this.mTotalGuiBars + this.mTotalInputBars)].setSize(50,blueHeight);
		}
/*
			var question = new Question('Order shapes by length from shortest to longest.', 'Red Green Blue');
			question.mAnswerPool = this.mQuiz.mAnswerPool;
		this.mQuiz.mQuestionArray.push(question);
		question.mShapeArray.push(this.mShapeArray[parseInt(3 + this.mTotalGuiBars + this.mTotalInputBars)]);
		question.mShapeArray.push(this.mShapeArray[parseInt(4 + this.mTotalGuiBars + this.mTotalInputBars)]);
		question.mShapeArray.push(this.mShapeArray[parseInt(5 + this.mTotalGuiBars + this.mTotalInputBars)]);
*/	
               	//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
	},

	createWorld: function()
	{
		this.parent();
		
		for (i = 0; i < this.mScoreNeeded; i++)
		{
			this.mShapeArray.push(new Rectangle(50,50,475,0,this,this.mRaphael,0,1,1,"none",.5,true));
                	this.mShapeArray.push(new Rectangle(50,50,575,0,this,this.mRaphael,.3,1,1,"none",.5,true));
                	this.mShapeArray.push(new Rectangle(50,50,675,0,this,this.mRaphael,.6,1,1,"none",.5,true));
		}
	}
});
