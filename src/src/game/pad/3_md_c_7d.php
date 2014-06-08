var g3_md_c_7d = new Class(
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
			var blueHeightCode = Math.floor((Math.random()*5)+1);

			var redWidthCode  = Math.floor((Math.random()*5)+1);
			var blueWidthCode = Math.floor((Math.random()*parseInt(5-redWidthCode))+1);

			var redHeight   = parseInt(redHeightCode * 50);  
			var blueHeight  = parseInt(blueHeightCode * 50);  

			var redWidth      = parseInt(redWidthCode * 50);  
			var blueWidth      = parseInt(blueWidthCode * 50);  
			
			var question = new Question('Find the area and show that you can use the distributive property to solve. Example Answer: 20,4(3+2)', parseInt(redHeightCode * (redWidthCode + blueWidthCode)) + ',' + redHeightCode + '(' + redWidthCode + '+' + blueWidthCode + ')');

			question.setAnswer(parseInt(redHeightCode * (redWidthCode + blueWidthCode)) + ',' + redHeightCode + '(' + redWidthCode + '+' + blueWidthCode + ')',1);
			
			this.mQuiz.mQuestionArray.push(question);
		
			var s = 27;
	
			this.mShapeArray[parseInt(i * s + 0 + this.mTotalGuiBars + this.mTotalInputBars)].setSize(redWidth,redHeight);
			this.mShapeArray[parseInt(i * s + 1 + this.mTotalGuiBars + this.mTotalInputBars)].setSize(blueWidth,blueHeight);
			this.mShapeArray[parseInt(i * s + 1 + this.mTotalGuiBars + this.mTotalInputBars)].setPosition(parseInt(350 + redWidth),25);
			
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
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 17 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 18 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 19 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 20 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 21 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 22 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 23 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 24 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 25 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 26 + this.mTotalGuiBars + this.mTotalInputBars)]);
			
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
			
			//blue
			this.mShapeArray.push(new Rectangle(50,50,350,25,this,this.mRaphael,.6,1,1,"none",.5,true));

			//greens
                	this.mShapeArray.push(new Rectangle(50,50,220,300,this,this.mRaphael,.3,1,1,"none",.5,true));
                	this.mShapeArray.push(new Rectangle(50,50,220,240,this,this.mRaphael,.3,1,1,"none",.5,true));
                	this.mShapeArray.push(new Rectangle(50,50,220,180,this,this.mRaphael,.3,1,1,"none",.5,true));
                	this.mShapeArray.push(new Rectangle(50,50,220,120,this,this.mRaphael,.3,1,1,"none",.5,true));
                	this.mShapeArray.push(new Rectangle(50,50,220,60,this,this.mRaphael,.3,1,1,"none",.5,true));
                	
			this.mShapeArray.push(new Rectangle(50,50,280,240,this,this.mRaphael,.3,1,1,"none",.5,true));
                	this.mShapeArray.push(new Rectangle(50,50,280,180,this,this.mRaphael,.3,1,1,"none",.5,true));
                	this.mShapeArray.push(new Rectangle(50,50,280,120,this,this.mRaphael,.3,1,1,"none",.5,true));
                	this.mShapeArray.push(new Rectangle(50,50,280,60,this,this.mRaphael,.3,1,1,"none",.5,true));


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
