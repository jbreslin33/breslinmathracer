var g4_nbt_b_6 = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);

	},

	createInput: function()
        {
                this.parent();

                //answer
                this.mNumAnswer2 = new Shape(100,50,525,100,this,"INPUT","","");
                this.mNumAnswer2.mMesh.value = '';
                this.mNumAnswer2.mMesh.addEvent('keypress',this.inputKeyHit);
		this.mNumAnswer2.mMesh.addEvent('click',this.inputFocus);
                this.mShapeArray.push(this.mNumAnswer2);
        },

	 inputKeyHit: function(e)
        {
                if (e.key == 'enter')
                {
                        APPLICATION.mGame.mUserAnswer = APPLICATION.mGame.mNumAnswer.mMesh.value;
			APPLICATION.mGame.mUserAnswer2 = APPLICATION.mGame.mNumAnswer2.mMesh.value;
                }
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
