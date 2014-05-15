var g4_nf_a_2 = new Class(
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

	//showCorrectAnswer
        showCorrectAnswerEnter: function()
        {
                this.parent();

                this.mShapeArray[1].setSize(200,100);
                //this.mShapeArray[1].setPosition(380,80);
		this.mShapeArray[1].mMesh.innerHTML = '' + this.mQuiz.getQuestion().getQuestion() + ' ' + ' ? = ' + this.mQuiz.getQuestion().getAnswer();

             
                //move dont forget
               // this.mShapeArray[8].setVisibility(false);
               // this.mShapeArray[9].setVisibility(false);
        },

  

	createQuestions: function()
        {
 		this.parent();

		//this.mCorrectAnswerThresholdTime = 1000;

		var varA = 0;
		var varB = 0;
		var varC = 0;
		var varD = 0;
		var varN = 0;


		var start = 0;
		var end = 0;
		var rand = 0;

		var question;
		
		this.mQuiz.resetQuestionArray();
			

		 for (s = 0; s < this.mScoreNeeded; s++)
		 {		

			// pick random number (1 - 9)
			varA = 1 + Math.floor((Math.random()*9));

			// pick random number from 2-12 (greater than varA)
			varB = varA + (1 + Math.floor((Math.random()*(12-varA))));

			
			// pick random number (1 - 9) as a multiplier
			varN = 2 + Math.floor((Math.random()*9));

			varC = varA * varN;
			varD = varB * varN;

			// pick number of digits (0 - 3) for if statement
			rand = Math.floor((Math.random()*4));

			if(rand == 0)
					
			question = new Question('' + varA + ' / ' +  varB + ' = ' + '' + varC + ' / ' +  '?', '' + varD);

			if(rand == 1)
					
			question = new Question('' + varA + ' / ' +  varB + ' = ' + '' + '?' + ' / ' +  varD, '' + varC);

			if(rand == 2)
					
			question = new Question('' + varC + ' / ' +  varD + ' = ' + '' + varA + ' / ' +  '?', '' + varB);

			if(rand == 3)
					
			question = new Question('' + varC + ' / ' +  varD + ' = ' + '' + '?' + ' / ' +  varB, '' + varA);

                	this.mQuiz.mQuestionArray.push(question);

			//question.mAnswerArray.push(varD);

   				
      //this.mQuiz.mQuestionArray.push(new Question('' + varA + ' * ' +  varB + ' = ', '' + varC));
                                       
                 }
			

		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));

                //random
               // this.mQuiz.randomize(30);
	}
});
