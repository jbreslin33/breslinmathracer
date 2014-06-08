var g3_md_c_6 = new Class(
{

Extends: RulerPad,

	initialize: function(application)
	{
       		this.parent(application);
    		this.mRaphael = Raphael(10, 35, 760, 405);
		
		this.setScoreNeeded(10);
	},

	createNumQuestion: function()
        {
                //question
                this.mNumQuestion = new Shape(275,150,150,100,this,"","","");
                this.mShapeArray.push(this.mNumQuestion);
                this.mNumQuestion.mCollidable = false;
                this.mNumQuestion.mCollisionOn = false;
        },

        showCorrectAnswerEnter: function()
        {
                this.parent();

                this.mShapeArray[1].setPosition(100,80);
                this.mShapeArray[9].setPosition(130,335);
                this.mShapeArray[9].setSize(100,100);
		this.mShapeArray[1].mMesh.innerHTML = '' + this.mQuiz.getQuestion().getQuestion() + ' CORRECT ANSWER:' + this.mQuiz.getQuestion().getAnswer();

        },
 
	createInput: function()
        {
		this.parent();
                this.mNumAnswer.setSize(125,25);
	},

	createQuestions: function()
        {
		this.parent();
		
		//just the question array reset
		this.mQuiz.resetQuestionArray();
 
		for (i = 0; i < this.mScoreNeeded; i++)
		{
			//get random heights.
			var redHeightCode = Math.floor((Math.random()*5)+1);
			var redWidthCode  = Math.floor((Math.random()*5)+1);
			var redHeight     = parseInt(redHeightCode * 50);  
			var redWidth      = parseInt(redWidthCode * 50);  
	
			var question = 0; 
		
			var randomNumber = Math.floor((Math.random()*4));		

			if (randomNumber == 0)	
			{
				question = new Question('Each green square is one square centimeter. What is the area of the red rectangle? Answer example: 5 square cm', parseInt(redHeightCode * redWidthCode) + ' square cm');
			}
			if (randomNumber == 1)	
			{
				question = new Question('Each green square is one square meter. What is the area of the red rectangle? Answer example: 5 square m', parseInt(redHeightCode * redWidthCode) + ' square m');
			}
			if (randomNumber == 2)	
			{
				question = new Question('Each green square is one square inch. What is the area of the red rectangle? Answer example: 5 square in', parseInt(redHeightCode * redWidthCode) + ' square in');
			}
			if (randomNumber == 3)	
			{
				question = new Question('Each green square is one square foot. What is the area of the red rectangle? Answer example: 5 square ft', parseInt(redHeightCode * redWidthCode) + ' square ft');
			}
			
			this.mQuiz.mQuestionArray.push(question);
		
			var s = 17;
	
			this.mShapeArray[parseInt(i * s + 0 + this.mTotalGuiBars + this.mTotalInputBars)].setSize(redWidth,redHeight);
			
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 0 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 1 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 2 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 3 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 4 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 5 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 6 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 7 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 8 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 9 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 10 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 11 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 12 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 13 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 14 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 15 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 16 + this.mTotalGuiBars + this.mTotalInputBars)]);
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
			this.mShapeArray.push(new Rectangle(50,50,350,25,this,this.mRaphael,0,1,1,"none",.5,true));

			//greens
                	this.mShapeArray.push(new Rectangle(50,50,280,300,this,this.mRaphael,.3,1,1,"none",.5,true));
                	this.mShapeArray.push(new Rectangle(50,50,335,300,this,this.mRaphael,.3,1,1,"none",.5,true));
                	this.mShapeArray.push(new Rectangle(50,50,390,300,this,this.mRaphael,.3,1,1,"none",.5,true));
                	this.mShapeArray.push(new Rectangle(50,50,445,300,this,this.mRaphael,.3,1,1,"none",.5,true));
                	this.mShapeArray.push(new Rectangle(50,50,500,300,this,this.mRaphael,.3,1,1,"none",.5,true));
                	this.mShapeArray.push(new Rectangle(50,50,555,300,this,this.mRaphael,.3,1,1,"none",.5,true));
                	this.mShapeArray.push(new Rectangle(50,50,610,300,this,this.mRaphael,.3,1,1,"none",.5,true));
                	this.mShapeArray.push(new Rectangle(50,50,665,300,this,this.mRaphael,.3,1,1,"none",.5,true));
                	
			this.mShapeArray.push(new Rectangle(50,50,620,240,this,this.mRaphael,.3,1,1,"none",.5,true));
			this.mShapeArray.push(new Rectangle(50,50,620,180,this,this.mRaphael,.3,1,1,"none",.5,true));
			this.mShapeArray.push(new Rectangle(50,50,620,120,this,this.mRaphael,.3,1,1,"none",.5,true));
			this.mShapeArray.push(new Rectangle(50,50,620,60,this,this.mRaphael,.3,1,1,"none",.5,true));

			this.mShapeArray.push(new Rectangle(50,50,680,240,this,this.mRaphael,.3,1,1,"none",.5,true));
			this.mShapeArray.push(new Rectangle(50,50,680,180,this,this.mRaphael,.3,1,1,"none",.5,true));
			this.mShapeArray.push(new Rectangle(50,50,680,120,this,this.mRaphael,.3,1,1,"none",.5,true));
			this.mShapeArray.push(new Rectangle(50,50,680,60,this,this.mRaphael,.3,1,1,"none",.5,true));
		}
	}
});
