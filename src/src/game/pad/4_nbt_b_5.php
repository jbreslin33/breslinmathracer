var g4_nbt_b_5 = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);
	},

	createQuestions: function()
        {
 		this.parent();

		//this.mCorrectAnswerThresholdTime = 1000;

		var varA = 0;
		var varB = 0;
		var varC = 0;

		var start = 0;
		var end = 0;
		var rand = 0;
		
		this.mQuiz.resetQuestionArray();
			

		for (s = 0; s < this.mScoreNeeded / 2; s++)
		{	
				
			// get start number based on 2 digits
			start = 10;

			// get end number based on 2 digits
			end = 100;

			// pick 1st number from start to end range
			varA = start + Math.floor(Math.random()*(end-start));		

			// pick 2nd number from start to end range
			varB = start + Math.floor(Math.random()*(end-start));		
				
			varC = parseInt(varA * varB);
					
			
   				
      this.mQuiz.mQuestionArray.push(new Question('' + varA + ' * ' +  varB + ' = ', '' + varC));
                                       
                 }

		 for (s = 0; s < this.mScoreNeeded / 2; s++)
		 {		

			// pick number of digits (1 - 4)
			rand = 1 + Math.floor((Math.random()*4));

			// get start number based on digits
			start = Math.pow(10, rand-1);

			// get end number based on digits
			end = Math.pow(10, rand);

			// pick number from start to end range
			varA = start + Math.floor(Math.random()*(end-start));	

			// pick one digit number
			varB = Math.floor(Math.random()*10);	
				
			varC = parseInt(varA * varB);
					
			
   				
      this.mQuiz.mQuestionArray.push(new Question('' + varA + ' * ' +  varB + ' = ', '' + varC));
                                       
                 }
			

		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));

                //random
                this.mQuiz.randomize(30);
	}
});
