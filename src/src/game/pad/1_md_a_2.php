var g1_md_a_2 = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);
    		this.mRaphael = Raphael(10, 35, 760, 405);
	},
       
	createNumQuestion: function()
        {
                this.parent();

                //question
                this.mNumQuestion.setPosition(170,30);
        },	

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
   
		for (i = 0; i < this.mScoreNeeded; i++)
		{
			//get random heights.
			var redHeightCode = Math.floor((Math.random()*6)+1);
			var redHeight = parseInt(redHeightCode * 50);  
					
			var question = new Question('What is then length of the red shape in green blocks?', redHeightCode);
			this.mQuiz.mQuestionArray.push(question);
			
			question.mShapeArray.push(this.mShapeArray[parseInt(i * 7 + 0 + this.mTotalGuiBars + this.mTotalInputBars)]);
			this.mShapeArray[parseInt(i * 7 + 0 + this.mTotalGuiBars + this.mTotalInputBars)].setSize(50,redHeight);
			
			question.mShapeArray.push(this.mShapeArray[parseInt(i * 7 + 1 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * 7 + 2 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * 7 + 3 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * 7 + 4 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * 7 + 5 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * 7 + 6 + this.mTotalGuiBars + this.mTotalInputBars)]);
			
		}
               	
		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
	},

	createWorld: function()
	{
		this.parent();
		
		for (i = 0; i < this.mScoreNeeded; i++)
		{
			//red
			this.mShapeArray.push(new Rectangle(50,50,475,50,this,this.mRaphael,0,1,1,"none",.5,true));

			//greens
                	this.mShapeArray.push(new Rectangle(50,50,475,300,this,this.mRaphael,.3,1,1,"none",.5,true));
                	this.mShapeArray.push(new Rectangle(50,50,525,300,this,this.mRaphael,.3,1,1,"none",.5,true));
                	this.mShapeArray.push(new Rectangle(50,50,575,300,this,this.mRaphael,.3,1,1,"none",.5,true));
                	this.mShapeArray.push(new Rectangle(50,50,475,200,this,this.mRaphael,.3,1,1,"none",.5,true));
                	this.mShapeArray.push(new Rectangle(50,50,525,200,this,this.mRaphael,.3,1,1,"none",.5,true));
                	this.mShapeArray.push(new Rectangle(50,50,575,200,this,this.mRaphael,.3,1,1,"none",.5,true));
		}
	}
});
