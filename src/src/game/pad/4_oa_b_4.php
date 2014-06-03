var g4_oa_b_4 = new Class(
{

Extends: MultipleChoicePadTwo,

	initialize: function(application)
	{
       		this.parent(application);
		
	},

	createNumQuestion: function()
        {
                //question
                this.mNumQuestion = new Shape(270,50,195,95,this,"","","");
                this.mShapeArray.push(this.mNumQuestion);
                this.mNumQuestion.mCollidable = false;
                this.mNumQuestion.mCollisionOn = false;
        },

	//showCorrectAnswer
        showCorrectAnswerEnter: function()
        {
                this.parent();

                this.mShapeArray[1].setSize(280,100);
                //this.mShapeArray[1].setPosition(380,80);
		this.mShapeArray[1].mMesh.innerHTML = '' + this.mQuiz.getQuestion().getQuestion() + ' ' + this.mQuiz.getQuestion().getAnswer();

             
                //move dont forget
               // this.mShapeArray[8].setVisibility(false);
               // this.mShapeArray[9].setVisibility(false);
        },

  	createAnswers: function(s, varA, varD, varE)
        {
			rand = Math.floor(Math.random()*3);

			if(rand == 0)			
			{
				this.mQuiz.mQuestionArray[s].setChoice('A', varA);
				this.mQuiz.mQuestionArray[s].setChoice('B', varD);
				this.mQuiz.mQuestionArray[s].setChoice('C', varE);
			}
			else if(rand == 1)			
			{
				
				this.mQuiz.mQuestionArray[s].setChoice('A', varD);
				this.mQuiz.mQuestionArray[s].setChoice('B', varA);
				this.mQuiz.mQuestionArray[s].setChoice('C', varE);
			}
			else
			{
				
				this.mQuiz.mQuestionArray[s].setChoice('A', varD);
				this.mQuiz.mQuestionArray[s].setChoice('B', varE);
				this.mQuiz.mQuestionArray[s].setChoice('C', varA);
			}
	},

	createQuestions: function()
        {
 		this.parent();

		//this.mCorrectAnswerThresholdTime = 1000;

		var prime = [3,5,7,11,13,17,19,23,29,31,37];

		var question;
		var answer;

		var varA = 0;
		var varB = 0;
		var varC = 0;
		var varD = 0;
		var varN = 0;
		var varE = 0;
		var varF = 0;
		var max = 0;
		var rand = 0;

		
		this.mQuiz.resetQuestionArray();



		for (s = 0; s < Math.floor(this.mScoreNeeded/3); s++)
		 {		
			// factor 1
			varA = 3 + Math.floor(Math.random()*19);
			
			max = Math.floor(100/varA);
			
			// factor 2
			varB = 2 + Math.floor(Math.random()*(max-1));

			// multiple
			varC = varA * varB;

			// wrong answer 1
			do {
   			 	varD = (2 * varA) + Math.floor(Math.random()*(101 - (2 * varA)));
    				varN = varD % varA;
			}
			while (varN == 0);

			// wrong answer 2
			do {
   			 	varE = (2 * varA) + Math.floor(Math.random()*(101 - (2 * varA)));
    				varF = varE % varA;
			}
			while (varF == 0 || varE == varD);
			
			question = new Question('Which is a multiple of ' + varA + '? ', '' + varC);

                	this.mQuiz.mQuestionArray.push(question);

			this.createAnswers(s, varC, varD, varE);
                                       
                 }
		


			
		 for (s = Math.floor(this.mScoreNeeded/3); s < Math.floor(this.mScoreNeeded * 2/3); s++)
		 {		
			// factor 1
			varA = 3 + Math.floor(Math.random()*19);
			
			max = Math.floor(100/varA);
			
			// factor 2
			varB = 2 + Math.floor(Math.random()*(max-1));

			// multiple
			varC = varA * varB;

			// wrong answer 1
			do {
   			 	varD = 2 + Math.floor(Math.random()*19);
    				varN = varC % varD;
			}
			while (varN == 0);

			// wrong answer 2
			do {
   			 	varE = 2 + Math.floor(Math.random()*19);
    				varF = varC % varE;
			}
			while (varF == 0 || varE == varD);
			
			question = new Question('Which is a factor of ' + varC + '? ', '' + varA);

                	this.mQuiz.mQuestionArray.push(question);

			this.createAnswers(s, varA, varD, varE);
                                       
                 }


		for (s = Math.floor(this.mScoreNeeded * 2/3); s < this.mScoreNeeded; s++)
		 {		
			// factor 1
			rand = Math.floor(Math.random()*2);
			
			if(rand == 0)
			{
				varA = prime[Math.floor(Math.random()*11)];
				answer = 'yes';
				wrong = 'no';
			}

			if(rand == 1)
			{
				varA = prime[Math.floor(Math.random()*11)] + 1;
				answer = 'no';
				wrong = 'yes';
			}
			
			question = new Question('Is ' + varA + ' a prime number? ', '' + answer);

                	this.mQuiz.mQuestionArray.push(question);

			this.mQuiz.mQuestionArray[s].setChoice('A', 'yes');
			this.mQuiz.mQuestionArray[s].setChoice('B', 'no');
                                       
                 }
			
		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));

                //random
                this.mQuiz.randomize(30);
	}

	
});
