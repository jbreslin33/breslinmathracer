var g2_nbt_a_1 = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);

		//answers 
                this.mThresholdTime = 60000;
	
		this.mFailedAttemptsThreshold = 0;
	},
	
	createInput: function()
	{
		this.parent();
		this.mNumAnswer.setSize(200,50);
		this.mNumAnswer.setPosition(375,100);
	},

	createNumQuestion: function()
	{
		this.parent();
		this.mNumQuestion.setPosition(590,140);
		this.mNumQuestion.setSize(200,200);
	},
       
	showCorrectAnswerEnter: function()
        {
		this.parent(); 
		this.mShapeArray[1].setPosition(400,175);
		this.mShapeArray[1].setSize(200,200);
        },
 
	outOfTimeEnter: function()
        {
		this.parent(); 
		this.mShapeArray[1].setPosition(400,175);
		this.mShapeArray[1].setSize(200,200);
        },

	createQuestions: function()
        {
		this.parent();

		var totalA = 0;
		var totalB = 0;
		var totalC = 0;
		
		while (totalA < 1 || totalB < 1 || totalC < 1)
		{	
			totalA = 0;
			totalB = 0;
			totalC = 0;

			//just the question array reset
			this.mQuiz.resetQuestionArray();

			//loop thru and make potential questions
			for (s = 0; s < this.mScoreNeeded; s++)
			{	
				//random number to count from 0-20
				var randomChance = Math.floor((Math.random()*3));		

				if (randomChance == 0)
				{
					var question = new Question('Write an equation to express the total as a sum of equal addends.', '1+1+1+1+1=5');
					for (i = 0; i < 5; i++)
					{
						question.mShapeArray.push(this.mShapeArray[parseInt(i + this.mTotalGuiBars + this.mTotalInputBars)]);
					}
					this.mQuiz.mQuestionArray.push(question);
					totalA++;
				}
				if (randomChance == 1)
				{
					var question = new Question('Write an equation to express the total as a sum of equal addends.', '3+3+3+3+3=15');
					for (i = 0; i < 15; i++)
					{
						question.mShapeArray.push(this.mShapeArray[parseInt(i + this.mTotalGuiBars + this.mTotalInputBars)]);
					}
					this.mQuiz.mQuestionArray.push(question);
					totalB++;
				}
				if (randomChance == 2)
				{
					var question = new Question('Write an equation to express the total as a sum of equal addends.', '5+5+5+5+5=25');
					for (i = 0; i < 25; i++)
					{
						question.mShapeArray.push(this.mShapeArray[parseInt(i + this.mTotalGuiBars + this.mTotalInputBars)]);
					}
					this.mQuiz.mQuestionArray.push(question);
					totalC++;
				}
			}
		}
	},

	createWorld: function()
	{
		this.parent();

                this.mShapeArray.push(new Shape(50,50,25,50,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,75,50,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,125,50,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,175,50,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,225,50,this,"/images/bus/kid.png","",""));
                
		this.mShapeArray.push(new Shape(50,50,25,100,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,75,100,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,125,100,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,175,100,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,225,100,this,"/images/bus/kid.png","",""));
                	
		this.mShapeArray.push(new Shape(50,50,25,150,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,75,150,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,125,150,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,175,150,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,225,150,this,"/images/bus/kid.png","",""));
		
		this.mShapeArray.push(new Shape(50,50,25,200,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,75,200,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,125,200,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,175,200,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,225,200,this,"/images/bus/kid.png","",""));
		
		this.mShapeArray.push(new Shape(50,50,25,250,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,75,250,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,125,250,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,175,250,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,225,250,this,"/images/bus/kid.png","",""));
	}
});
