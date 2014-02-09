var k_oa_a_1 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);

		//answers 
                this.mThresholdTime = 60000;
	
		this.setScoreNeeded(20);

		//input pad
		this.mInputPad = new NumberPad(application);
	},

        createCorrectAnswerBar: function()
        {
                //question bar header
                this.mCorrectAnswerBarHeader = new Shape(150,50,100,300,this,"","","");
                this.mCorrectAnswerBarHeader.mMesh.innerHTML = '';

                //question bar
                this.mCorrectAnswerBar = new Shape(150,50,300,100,this,"","","");
                this.mCorrectAnswerBar.mMesh.innerHTML = '';
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
                                	question.mShapeArray.push(this.mShapeArray[parseInt(i + this.mTotalGuiBars)]);
					i++;
				} 

				//sign
                		if (sign == "+")
				{
                                	question.mShapeArray.push(this.mShapeArray[parseInt(i + this.mTotalGuiBars + 10)]);
					i++;
				}
                		if (sign == "-")
				{
                                	question.mShapeArray.push(this.mShapeArray[parseInt(i + this.mTotalGuiBars + 20)]);
					i++;
				}
				while(i < parseInt(addendB + addendA + 1))
				{
                                	question.mShapeArray.push(this.mShapeArray[parseInt(i + this.mTotalGuiBars)]);
					i++;
				} 
                               	question.mShapeArray.push(this.mShapeArray[parseInt(i + this.mTotalGuiBars + 30)]);
			}
		}
	},
	
	createWorld: function()
	{
		this.parent();

                this.mShapeArray.push(new Shape(50,50,050,60,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,100,60,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,150,60,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,200,60,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,250,60,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,300,60,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,350,60,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,400,60,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,450,60,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,500,60,this,"/images/bus/kid.png","",""));

                this.mShapeArray.push(new Shape(50,50,050,60,this,"/images/symbols/plus.png","",""));
                this.mShapeArray.push(new Shape(50,50,100,60,this,"/images/symbols/plus.png","",""));
                this.mShapeArray.push(new Shape(50,50,150,60,this,"/images/symbols/plus.png","",""));
                this.mShapeArray.push(new Shape(50,50,200,60,this,"/images/symbols/plus.png","",""));
                this.mShapeArray.push(new Shape(50,50,250,60,this,"/images/symbols/plus.png","",""));
                this.mShapeArray.push(new Shape(50,50,300,60,this,"/images/symbols/plus.png","",""));
                this.mShapeArray.push(new Shape(50,50,350,60,this,"/images/symbols/plus.png","",""));
                this.mShapeArray.push(new Shape(50,50,400,60,this,"/images/symbols/plus.png","",""));
                this.mShapeArray.push(new Shape(50,50,450,60,this,"/images/symbols/plus.png","",""));
                this.mShapeArray.push(new Shape(50,50,500,60,this,"/images/symbols/plus.png","",""));

                this.mShapeArray.push(new Shape(50,50,050,60,this,"/images/symbols/minus.png","",""));
                this.mShapeArray.push(new Shape(50,50,100,60,this,"/images/symbols/minus.png","",""));
                this.mShapeArray.push(new Shape(50,50,150,60,this,"/images/symbols/minus.png","",""));
                this.mShapeArray.push(new Shape(50,50,200,60,this,"/images/symbols/minus.png","",""));
                this.mShapeArray.push(new Shape(50,50,250,60,this,"/images/symbols/minus.png","",""));
                this.mShapeArray.push(new Shape(50,50,300,60,this,"/images/symbols/minus.png","",""));
                this.mShapeArray.push(new Shape(50,50,350,60,this,"/images/symbols/minus.png","",""));
                this.mShapeArray.push(new Shape(50,50,400,60,this,"/images/symbols/minus.png","",""));
                this.mShapeArray.push(new Shape(50,50,450,60,this,"/images/symbols/minus.png","",""));
                this.mShapeArray.push(new Shape(50,50,500,60,this,"/images/symbols/minus.png","",""));

                this.mShapeArray.push(new Shape(50,50,050,60,this,"/images/symbols/equal.png","",""));
                this.mShapeArray.push(new Shape(50,50,100,60,this,"/images/symbols/equal.png","",""));
                this.mShapeArray.push(new Shape(50,50,150,60,this,"/images/symbols/equal.png","",""));
                this.mShapeArray.push(new Shape(50,50,200,60,this,"/images/symbols/equal.png","",""));
                this.mShapeArray.push(new Shape(50,50,250,60,this,"/images/symbols/equal.png","",""));
                this.mShapeArray.push(new Shape(50,50,300,60,this,"/images/symbols/equal.png","",""));
                this.mShapeArray.push(new Shape(50,50,350,60,this,"/images/symbols/equal.png","",""));
                this.mShapeArray.push(new Shape(50,50,400,60,this,"/images/symbols/equal.png","",""));
                this.mShapeArray.push(new Shape(50,50,450,60,this,"/images/symbols/equal.png","",""));
                this.mShapeArray.push(new Shape(50,50,500,60,this,"/images/symbols/equal.png","",""));
	}
});
