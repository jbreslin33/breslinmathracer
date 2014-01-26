var k_oa_a_1 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);

		//answers 
                this.mThresholdTime = 60000;

		//input pad
		this.mInputPad = new NumberPad(application);
	},
	
	showCorrectAnswer: function()
	{
		this.parent();
        	this.mCorrectAnswerBar.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getAnswer();
	},
   
	createQuestions: function()
        {
		this.parent();

		this.mQuiz.resetQuestionPoolArray();
		
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
		//13

                this.mQuiz.mQuestionPoolArray.push(new Question('2 - 1 =','1'));
                this.mQuiz.mQuestionPoolArray.push(new Question('3 - 2 =','1'));
                this.mQuiz.mQuestionPoolArray.push(new Question('4 - 3 =','1'));
		//16

                this.mQuiz.mQuestionPoolArray.push(new Question('3 - 1 =','2'));
                this.mQuiz.mQuestionPoolArray.push(new Question('4 - 2 =','2'));
		//18

                this.mQuiz.mQuestionPoolArray.push(new Question('4 - 1 =','3'));
                this.mQuiz.mQuestionPoolArray.push(new Question('5 - 2 =','3'));
		//20

                this.mQuiz.mQuestionPoolArray.push(new Question('5 - 1 =','4'));
                
		this.mQuiz.mQuestionPoolArray.push(new Question('5 - 1 =','4'));
		//22

		var totalNewGoal       = parseInt(this.mScoreNeeded / 2);
		var totalNew           = 0;
                
		while (totalNew < totalNewGoal)
		{	
			//reset vars and arrays
			
			totalNew = 0;
			
			this.mQuiz.resetQuestionArray();

			for (s = 0; s < this.mScoreNeeded; s++)
			{	
				//50% chance of asking newest question
				var randomChance = Math.floor((Math.random()*2));		
				var element = 0;
				if (randomChance == 0)
				{
					element = parseInt(this.mApplication.mLevel-1);
					totalNew++;
				}	
				if (randomChance == 1)
				{
					element = Math.floor((Math.random()*parseInt(this.mApplication.mLevel-1)));	
				}
				question = this.mQuiz.mQuestionPoolArray[element];
				this.mQuiz.mQuestionArray.push(question);

				//shapes 
				var answer = parseInt(question.getAnswer());
				var actualQuestion = question.getQuestion();
				
                		var addendA = parseInt(actualQuestion[0]);
                		var sign = actualQuestion[2];
                		var addendB = parseInt(actualQuestion[4]);

				//addendA
				var i = 0;
				while(i < addendA)
				{
                                	question.mShapeArray.push(this.mShapeArray[parseInt(i+2)]);
					i++;
				} 

				//sign
                		if (sign == "+")
				{
                                	question.mShapeArray.push(this.mShapeArray[parseInt(i+2+1+10)]);
					i++;
				}
                		if (sign == "-")
				{
                                	question.mShapeArray.push(this.mShapeArray[parseInt(i+2+1+20)]);
					i++;
				}
				


			}
		}
	},
/*
          for (i = 0; i < this.mShapeArray.length; i++)
                {
                        this.mShapeArray[i+2].setVisibility(false);
                }

                var question = this.mQuiz.getQuestion().getQuestion();
                var answer = parseInt(this.mQuiz.getQuestion().getAnswer());
                var addendA = parseInt(question[0]);
                var sign = question[2];  
                var addendB = parseInt(question[4]);

                for (i = 0; i < parseInt(addendA + addendB); i++)
                {
                        this.mShapeArray[i+2].setVisibility(true);
                }

                //sign
                if (sign == "+")
                {
                        this.mShapeArray[9].setVisibility(true);
                        this.mShapeArray[9].setPosition(parseInt(this.mShapeArray[addendA - 1].mPosition.mX + 50), 50)
                }
                else if (sign == "-")
                {
                        this.mShapeArray[10].setVisibility(true);
                        this.mShapeArray[12].setPosition(parseInt(this.mShapeArray[addendA - 1].mPosition.mX + 50), 50)

                }
                //equals
                this.mShapeArray[11].setVisibility(true);
                this.mShapeArray[11].setPosition(parseInt(this.mShapeArray[parseInt(addendA + addendB - 1)].mPosition.mX + 50), 50)  
*/
	createWorld: function()
	{
		this.parent();

                this.mShapeArray.push(new Shape(50,50,025,50,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,075,60,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,125,60,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,175,60,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,225,60,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,275,60,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,325,60,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,375,60,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,425,60,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,475,60,this,"/images/bus/kid.png","",""));

                this.mShapeArray.push(new Shape(50,50,025,60,this,"/images/symbols/plus.png","",""));
                this.mShapeArray.push(new Shape(50,50,075,60,this,"/images/symbols/plus.png","",""));
                this.mShapeArray.push(new Shape(50,50,125,60,this,"/images/symbols/plus.png","",""));
                this.mShapeArray.push(new Shape(50,50,175,60,this,"/images/symbols/plus.png","",""));
                this.mShapeArray.push(new Shape(50,50,225,60,this,"/images/symbols/plus.png","",""));
                this.mShapeArray.push(new Shape(50,50,275,60,this,"/images/symbols/plus.png","",""));
                this.mShapeArray.push(new Shape(50,50,325,60,this,"/images/symbols/plus.png","",""));
                this.mShapeArray.push(new Shape(50,50,375,60,this,"/images/symbols/plus.png","",""));
                this.mShapeArray.push(new Shape(50,50,425,60,this,"/images/symbols/plus.png","",""));
                this.mShapeArray.push(new Shape(50,50,475,60,this,"/images/symbols/plus.png","",""));

                this.mShapeArray.push(new Shape(50,50,025,60,this,"/images/symbols/minus.png","",""));
                this.mShapeArray.push(new Shape(50,50,075,60,this,"/images/symbols/minus.png","",""));
                this.mShapeArray.push(new Shape(50,50,125,60,this,"/images/symbols/minus.png","",""));
                this.mShapeArray.push(new Shape(50,50,175,60,this,"/images/symbols/minus.png","",""));
                this.mShapeArray.push(new Shape(50,50,225,60,this,"/images/symbols/minus.png","",""));
                this.mShapeArray.push(new Shape(50,50,275,60,this,"/images/symbols/minus.png","",""));
                this.mShapeArray.push(new Shape(50,50,325,60,this,"/images/symbols/minus.png","",""));
                this.mShapeArray.push(new Shape(50,50,375,60,this,"/images/symbols/minus.png","",""));
                this.mShapeArray.push(new Shape(50,50,425,60,this,"/images/symbols/minus.png","",""));
                this.mShapeArray.push(new Shape(50,50,475,60,this,"/images/symbols/minus.png","",""));

                this.mShapeArray.push(new Shape(50,50,075,60,this,"/images/symbols/equal.png","",""));
                this.mShapeArray.push(new Shape(50,50,125,60,this,"/images/symbols/equal.png","",""));
                this.mShapeArray.push(new Shape(50,50,175,60,this,"/images/symbols/equal.png","",""));
                this.mShapeArray.push(new Shape(50,50,225,60,this,"/images/symbols/equal.png","",""));
                this.mShapeArray.push(new Shape(50,50,275,60,this,"/images/symbols/equal.png","",""));
                this.mShapeArray.push(new Shape(50,50,325,60,this,"/images/symbols/equal.png","",""));
                this.mShapeArray.push(new Shape(50,50,375,60,this,"/images/symbols/equal.png","",""));
                this.mShapeArray.push(new Shape(50,50,425,60,this,"/images/symbols/equal.png","",""));
                this.mShapeArray.push(new Shape(50,50,475,60,this,"/images/symbols/equal.png","",""));
	},

	//state overides
	showCorrectAnswerOutOfTime: function()
        {
                this.mCorrectAnswerStartTime = this.mTimeSinceEpoch;
                this.mInputPad.hide();
                this.mCorrectAnswerBar.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getAnswer();
                this.showCorrectAnswerBar();
                this.showClockShape();
        }
});
