var g2_nbt_a_2 = new Class(
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

				//ones
				if (randomChance == 0)
				{
					var randomOnes = Math.floor((Math.random()*10));		
					var randomTens = Math.floor((Math.random()*10));		
					var randomHundreds = Math.floor((Math.random()*10));		
					var randomNumber = parseInt((randomOnes * 1) + (randomTens * 10) + (randomHundreds * 100));	
					
					var question = new Question('How many ones in the ones place of ' + randomNumber + '?', '' + randomOnes);
					this.mQuiz.mQuestionArray.push(question);
					totalA++;
				}
			
				//tens
				if (randomChance == 1)
				{
					var randomOnes = Math.floor((Math.random()*10));		
					var randomTens = Math.floor((Math.random()*10));		
					var randomHundreds = Math.floor((Math.random()*10));		
					var randomNumber = parseInt((randomOnes * 1) + (randomTens * 10) + (randomHundreds * 100));	
					
					var question = new Question('How many tens in the tens place of ' + randomNumber + '?', '' + randomTens);
					this.mQuiz.mQuestionArray.push(question);
					totalB++;
				}

				//hundreds
				if (randomChance == 2)
				{	
					var randomOnes = Math.floor((Math.random()*10));		
					var randomTens = Math.floor((Math.random()*10));		
					var randomHundreds = Math.floor((Math.random()*10));		
					var randomNumber = parseInt((randomOnes * 1) + (randomTens * 10) + (randomHundreds * 100));	
					
					var question = new Question('How many hundreds in the hundreds place of ' + randomNumber + '?', '' + randomHundreds);
					this.mQuiz.mQuestionArray.push(question);
					totalC++;
				}
			}
		}
	}
});
