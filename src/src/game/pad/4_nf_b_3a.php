var g4_nf_b_3a = new Class(
{

Extends: MultipleChoicePadTwo,

	initialize: function(application)
	{
       		this.parent(application);
		
	},

	createNumQuestion: function()
        {
                //question
                this.mNumQuestion = new Shape(170,50,195,95,this,"","","");
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
		var answer;
		var diff = 0;
		
		this.mQuiz.resetQuestionArray();
			

		 for (s = 0; s < this.mScoreNeeded; s++)
		 {		

		    rand = Math.floor((Math.random()*3));

	            if(rand == 0 || rand == 1)
		    {

			// pick random number (1 - 9)
			varA = 1 + Math.floor((Math.random()*9));

			// pick random number from 2-12 (greater than varA)
			varB = varA + (1 + Math.floor((Math.random()*(12-varA))));

			varC = 1 + Math.floor((Math.random()*9));
			varD = varC + (1 + Math.floor((Math.random()*(12-varA))));

			if(varA == varC && varB == varD)
			   varA = varA + 1;

		     }
		     else
		     {

			// pick random number (1 - 5)
			varA = 1 + Math.floor((Math.random()*5));

			// pick random number from 2-10 (greater than varA)
			varB = varA + (1 + Math.floor((Math.random()*(10-varA))));

			// pick random number (2 - 4) as a multiplier
			varN = 2 + Math.floor((Math.random()*3));

			varC = varA * varN;
			varD = varB * varN;

			
		     }

			diff = varA/varB - varC/varD;

			if(diff > 0)
			   answer = 'greater than';
			else if(diff < 0)
			   answer = 'less than';
			else
			   answer = 'equal to';
			
			question = new Question('' + varA + ' / ' +  varB + ' is ? ' + '' + varC + ' / ' +  varD, '' + answer);



                	this.mQuiz.mQuestionArray.push(question);

			//question.mAnswerPool.push('1/4');
    			//question.mAnswerPool.push('2/3');
    			//question.mAnswerPool.push('1/5');
		

			//question.mAnswerArray.push(varD);

			this.mQuiz.mQuestionArray[s].setChoice('A', 'greater than');
			this.mQuiz.mQuestionArray[s].setChoice('B', 'less than');
			this.mQuiz.mQuestionArray[s].setChoice('C', 'equal to');
			//this.mQuiz.mQuestionArray[i].setChoice('D','' + this.mCorrectAnswerArray[3]);
		


   				
      //this.mQuiz.mQuestionArray.push(new Question('' + varA + ' * ' +  varB + ' = ', '' + varC));
                                       
                 }
			

		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));

                //random
               // this.mQuiz.randomize(30);
	}
});
