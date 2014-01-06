var k_oa_a_1 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);

		//answers 
                this.mThresholdTime = 10000;

		//input pad
		this.mInputPad = new NumberPad(application);
	},

	reset: function()
	{
		this.parent();
		
		for (i = 0; i < this.mShapeArray.length; i++)
		{
			this.mShapeArray[i].setVisibility(false);
		} 
		for (v = 0; v < parseInt(this.mQuiz.getQuestion().getQuestion()); v++)
		{
			this.mShapeArray[v].setVisibility(true);
		}	
	},
	
	destroyShapes: function()
	{
		this.parent();

		//shapes and array
                for (i = 0; i < this.mShapeArray.length; i++)
                {
                        //back to div
                        this.mShapeArray[i].mDiv.mDiv.removeChild(this.mShapeArray[i].mMesh);
                        document.body.removeChild(this.mShapeArray[i].mDiv.mDiv);
                        this.mShapeArray[i] = 0;
                }
                this.mShapeArray = 0;
	},

	showQuestion: function()
	{
		for (i = 0; i < this.mShapeArray.length; i++)
                {
                        this.mShapeArray[i].setVisibility(false);
                }

                var question = this.mQuiz.getQuestion().getQuestion();
                var answer = parseInt(this.mQuiz.getQuestion().getAnswer());
		var addendA = parseInt(question[0]);   
		var sign = question[2];   
		var addendB = parseInt(question[4]);   

		for (i = 0; i < answer; i++)
                {
                        this.mShapeArray[i].setVisibility(true);
                }

		//sign
		if (sign == '+')
		{
			this.mShapeArray[5].setVisibility(true);
			this.mShapeArray[5].setPosition(parseInt(this.mShapeArray[addendA - 1].mPosition.mX + 50), 50)	
		}
		else if (sign == '-')
		{
			this.mShapeArray[6].setVisibility(true);
			this.mShapeArray[6].setPosition(parseInt(this.mShapeArray[addendA - 1].mPosition.mX + 50), 50)	
		}
	
		//equals	
		this.mShapeArray[7].setVisibility(true);
		this.mShapeArray[7].setPosition(parseInt(this.mShapeArray[answer - 1].mPosition.mX + 50), 50)	
	},
 
	showCorrectAnswer: function()
	{
		this.parent();
        	this.mCorrectAnswerBar.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getAnswer();
	},
   
	createQuestions: function()
        {
		this.parent();
		
		for (d = 0; d < this.mQuiz.mQuestionPoolArray.length; d++)
		{
			this.mQuiz.mQuestionPoolArray[d] = 0;
		} 
		this.mQuiz.mQuestionPoolArray = 0;
		this.mQuiz.mQuestionPoolArray = new Array();

		//add
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 1 =','2'));
                this.mQuiz.mQuestionPoolArray.push(new Question('2 + 2 =','4'));
                this.mQuiz.mQuestionPoolArray.push(new Question('2 + 1 =','3'));
                this.mQuiz.mQuestionPoolArray.push(new Question('1 + 2 =','3'));
                this.mQuiz.mQuestionPoolArray.push(new Question('3 + 1 =','4'));
                this.mQuiz.mQuestionPoolArray.push(new Question('1 + 3 =','4'));
                this.mQuiz.mQuestionPoolArray.push(new Question('4 + 1 =','5'));
                this.mQuiz.mQuestionPoolArray.push(new Question('1 + 4 =','5'));
                this.mQuiz.mQuestionPoolArray.push(new Question('2 + 3 =','5'));
                this.mQuiz.mQuestionPoolArray.push(new Question('3 + 2 =','5'));
		//10

		//subtract
                this.mQuiz.mQuestionPoolArray.push(new Question('1 - 1 =','0'));
                this.mQuiz.mQuestionPoolArray.push(new Question('2 - 2 =','0'));
                this.mQuiz.mQuestionPoolArray.push(new Question('3 - 3 =','0'));
                this.mQuiz.mQuestionPoolArray.push(new Question('4 - 4 =','0'));
                this.mQuiz.mQuestionPoolArray.push(new Question('5 - 5 =','0'));
		//15

                this.mQuiz.mQuestionPoolArray.push(new Question('2 - 1 =','1'));
                this.mQuiz.mQuestionPoolArray.push(new Question('3 - 2 =','1'));
                this.mQuiz.mQuestionPoolArray.push(new Question('4 - 3 =','1'));
                this.mQuiz.mQuestionPoolArray.push(new Question('5 - 4 =','1'));
		//19

                this.mQuiz.mQuestionPoolArray.push(new Question('3 - 1 =','2'));
                this.mQuiz.mQuestionPoolArray.push(new Question('4 - 2 =','2'));
                this.mQuiz.mQuestionPoolArray.push(new Question('5 - 3 =','2'));
		//22

                this.mQuiz.mQuestionPoolArray.push(new Question('4 - 1 =','3'));
                this.mQuiz.mQuestionPoolArray.push(new Question('5 - 2 =','3'));
		//24

                this.mQuiz.mQuestionPoolArray.push(new Question('5 - 1 =','4'));
		//25


		var totalNewGoal       = parseInt(this.mScoreNeeded / 2);
		var totalNew           = 0;
		var newQuestionElement = 0;
   		var elementCounter     = 0;
                
                for (i = 0; i <= 41; i++)
                {
                        if (this.mApplication.mLevel == i)
                        {
                                newQuestionElement = elementCounter;
                        }
                        elementCounter++;
                }

		while (totalNew < totalNewGoal)
		{	
			//reset vars and arrays
			totalNew = 0;
			for (d = 0; d < this.mQuiz.mQuestionArray.length; d++)
			{
				this.mQuiz.mQuestionArray[d] = 0;
			} 
			this.mQuiz.mQuestionArray = 0;
			this.mQuiz.mQuestionArray = new Array();

			for (s = 0; s < this.mScoreNeeded; s++)
			{	
				//50% chance of asking newest question
				var randomChance = Math.floor((Math.random()*2));		
				if (randomChance == 0)
				{
					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[newQuestionElement]);
					totalNew++;
				}	
				if (randomChance == 1)
				{
					var randomElement = Math.floor((Math.random()*newQuestionElement));		
					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomElement]);
				}
			}
		}
		this.createQuestionShapes();
	},

	createQuestionShapes: function()
	{
                this.mShapeArray.push(new Shape(50,50,025,50,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,125,50,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,225,50,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,325,50,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,425,50,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,425,50,this,"/images/symbols/plus.png","",""));
                this.mShapeArray.push(new Shape(50,50,425,50,this,"/images/symbols/minus.png","",""));
                this.mShapeArray.push(new Shape(50,50,425,50,this,"/images/symbols/equal.png","",""));
                	
		for (i = 0; i < this.mShapeArray.length; i++)
		{
			this.mShapeArray[i].setVisibility(false);
               		this.mShapeArray[i].mCollidable = false;
               		this.mShapeArray[i].mCollisionOn = false;
		}	
	},

	//state overides
	showCorrectAnswerOutOfTime: function()
        {
                this.mCorrectAnswerStartTime = this.mTimeSinceEpoch;
                this.mInputPad.hide();
                this.mCorrectAnswerBar.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getAnswer();
                this.showCorrectAnswerBar();
                this.showClockShape();
        },

});
