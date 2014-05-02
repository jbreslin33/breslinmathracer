var g4_nbt_b_4 = new Class(
{
Extends: NumberPad,
	initialize: function(application)
	{
       		this.parent(application);
	},


	createNumQuestion: function()
        {
                //question
                this.mNumQuestion = new Shape(170,50,295,95,this,"","","");
                this.mShapeArray.push(this.mNumQuestion);
                this.mNumQuestion.mCollidable = false;
                this.mNumQuestion.mCollisionOn = false;
        },

	

	createQuestions: function()
        {
 		this.parent();

		var varA = 0;
		var varB = 0;
		var varC = 0;

		var start = 0;
		var end = 0;
		var rand = 0;

		this.mQuiz.resetQuestionArray();

		for (s = 0; s < this.mScoreNeeded / 2; s++)
		{	
				// pick number of digits (2 - 6)
				rand = 2 + Math.floor((Math.random()*5));

				// get end number based on digits
				end = Math.pow(10, rand);
				// get start number based on digits
				start = Math.pow(10, rand-1);

				// pick number from start to end range
				varA = start + Math.floor(Math.random()*(end-start));

				rand = 2 + Math.floor((Math.random()*5));

				end = Math.pow(10, rand);
				start = Math.pow(10, rand-1);
		
				varB = start + Math.floor(Math.random()*(end-start));
		
				varC = parseInt(varA + varB);
			
                        this.mQuiz.mQuestionArray.push(new Question('' + varA + ' + ' +  varB + ' = ', '' + varC));
		}
		for (s = 0; s < this.mScoreNeeded / 2; s++)
		{
			
				
				rand = 2 + Math.floor((Math.random()*5));

				start = Math.pow(10, rand-1);

				end = Math.pow(10, rand);
				
				varA = start + Math.floor(Math.random()*(end-start));	

				rand = 2 + Math.floor((Math.random()*5));

				start = Math.pow(10, rand-1);
				end = Math.pow(10, rand);
	
				varB = start + Math.floor(Math.random()*(end-start));

				varC = parseInt(varA - varB);

                        this.mQuiz.mQuestionArray.push(new Question('' + varA + ' - ' +  varB + ' = ', '' + varC));
		}
                //buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));

                //random
                this.mQuiz.randomize(10);
	}
});
