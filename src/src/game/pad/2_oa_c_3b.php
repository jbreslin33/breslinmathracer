var g2_oa_c_3b = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);
	},
        
	//showCorrectAnswer
        showCorrectAnswerEnter: function()
        {
		this.parent();
                this.mShapeArray[1].setPosition(140,140);
        },
        
	//outOfTime
        outOfTimeEnter: function()
        {
		this.parent();
                this.mShapeArray[1].setPosition(140,140);
        },
	
	createNumQuestion: function()
	{
		this.parent();
		this.mNumQuestion.setPosition(140,140);		
		this.mNumQuestion.setSize(200,200);		
	},	

	createQuestions: function()
        {
 		this.parent();

		//add
		this.mQuiz.mQuestionPoolArray.push(new Question('Write an equation to express 2 as a sum of two equal addends. Do not use spaces.','1+1=2'));
		this.mQuiz.mQuestionPoolArray.push(new Question('Write an equation to express 4 as a sum of two equal addends. Do not use spaces.','2+2=4'));
		this.mQuiz.mQuestionPoolArray.push(new Question('Write an equation to express 6 as a sum of two equal addends. Do not use spaces.','3+3=6'));
		this.mQuiz.mQuestionPoolArray.push(new Question('Write an equation to express 8 as a sum of two equal addends. Do not use spaces.','4+4=8'));
		this.mQuiz.mQuestionPoolArray.push(new Question('Write an equation to express 10 as a sum of two equal addends. Do not use spaces.','5+5=10'));
		this.mQuiz.mQuestionPoolArray.push(new Question('Write an equation to express 12 as a sum of two equal addends. Do not use spaces.','6+6=12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('Write an equation to express 14 as a sum of two equal addends. Do not use spaces.','7+7=14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('Write an equation to express 16 as a sum of two equal addends. Do not use spaces.','8+8=16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('Write an equation to express 18 as a sum of two equal addends. Do not use spaces.','9+9=18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('Write an equation to express 20 as a sum of two equal addends. Do not use spaces.','10+10=20'));
		
		//extra.. 
		this.mQuiz.mQuestionPoolArray.push(new Question('5 - 0 =','5'));

		var totalA = 0;
		var totalB = 0;
		var totalC = 0;
		var totalD = 0;
		var totalE = 0;
		var totalF = 0;
		var totalG = 0;
		var totalH = 0;
		var totalI = 0;
		var totalJ = 0;
                
		while (totalA < 1 || totalB < 1 || totalC < 1 || totalD < 1 || totalE < 1 || totalF < 1 || totalG < 1 || totalH < 1 || totalI < 1 || totalJ < 1)
		{	
			this.mQuiz.resetQuestionArray();

			for (i = 0; i < this.mScoreNeeded; i++)
			{	
				var randomElement = Math.floor((Math.random()*parseInt(this.mQuiz.mQuestionPoolArray.length)));	

				if (randomElement == 0)
				{
					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomElement]);
					totalA++;
				}
				if (randomElement == 1)
				{
					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomElement]);
					totalB++;
				}
				if (randomElement == 2)
				{
					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomElement]);
					totalC++;
				}
				if (randomElement == 3)
				{
					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomElement]);
					totalD++;
				}
				if (randomElement == 4)
				{
					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomElement]);
					totalE++;
				}
				if (randomElement == 5)
				{
					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomElement]);
					totalF++;
				}
				if (randomElement == 6)
				{
					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomElement]);
					totalG++;
				}
				if (randomElement == 7)
				{
					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomElement]);
					totalH++;
				}	
				if (randomElement == 8)
				{
					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomElement]);
					totalI++;
				}
				if (randomElement == 9)
				{
					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomElement]);
					totalJ++;
				}
			}
		}
	}
});
