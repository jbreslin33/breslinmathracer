var g4_oa_b_4 = new Class(
{

Extends: MultipleChoicePadTwo,

	initialize: function(application)
	{
       		this.parent(application);
		this.setScoreNeeded(3);
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
		this.mShapeArray[1].mMesh.innerHTML = '' + this.mQuiz.getQuestion().getQuestion() + ' ' + this.mQuiz.getQuestion().getAnswer();
        },

  	createAnswers: function(question, varA, varD, varE)
        {
		rand = Math.floor(Math.random()*3);

		if(rand == 0)			
		{
			question.setChoice('A', varA);
			question.setChoice('B', varD);
			question.setChoice('C', varE);
		}
		else if(rand == 1)			
		{
			question.setChoice('A', varD);
			question.setChoice('B', varA);
			question.setChoice('C', varE);
		}
		else
		{
			question.setChoice('A', varD);
			question.setChoice('B', varE);
			question.setChoice('C', varA);
		}
	},

	makeTypeA: function()
	{
		question = '';
		varA = 0;
		varB = 0;
		varC = 0;
		varD = 0;
		varN = 0;
		varE = 0;
		varF = 0;
	 	
		// factor 1
                varA = 3 + Math.floor(Math.random()*19);

                max = Math.floor(100/varA);

                // factor 2
                varB = 2 + Math.floor(Math.random()*(max-1));

                // multiple
                varC = varA * varB;

                // wrong answer 1
                do
		{
                	varD = (2 * varA) + Math.floor(Math.random()*(101 - (2 * varA)));
                        varN = varD % varA;
                }
                while (varN == 0);

                // wrong answer 2
                do
	 	{
                        varE = (2 * varA) + Math.floor(Math.random()*(101 - (2 * varA)));
                        varF = varE % varA;
                }
                while (varF == 0 || varE == varD);

                question = new Question('Which is a multiple of ' + varA + '? ', '' + varC);

                this.mQuiz.mQuestionArray.push(question);

                this.createAnswers(question, varC, varD, varE);
	},
	makeTypeB: function()
	{
		question = '';
		max = 0;
		varA = 0;
		varB = 0;
		varC = 0;
		varD = 0;
		varN = 0;
		varE = 0;
		varF = 0;
	
		// factor 1
                varA = 3 + Math.floor(Math.random()*19);

                max = Math.floor(100/varA);

                // factor 2
                varB = 2 + Math.floor(Math.random()*(max-1));

                // multiple
                varC = varA * varB;

                // wrong answer 1
                do
		{
                	varD = 2 + Math.floor(Math.random()*19);
                       	varN = varC % varD;
                }
                while (varN == 0);

                // wrong answer 2
                do
		{
                	varE = 2 + Math.floor(Math.random()*19);
                        varF = varC % varE;
                }
                while (varF == 0 || varE == varD);

                question = new Question('Which is a factor of ' + varC + '? ', '' + varA);

                this.mQuiz.mQuestionArray.push(question);

                this.createAnswers(question, varA, varD, varE);
	},
	makeTypeC: function()
	{
		question = '';
		answer = '';
		prime = [3,5,7,11,13,17,19,23,29,31,37];
		max = 0;
		rand = 0;
		varA = 0;
		
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

               	question.setChoice('A', 'yes');
                question.setChoice('B', 'no');
	},

	createQuestions: function()
        {
 		this.parent();

		this.mQuiz.resetQuestionArray();

		this.makeTypeA();
		this.makeTypeB();
		this.makeTypeC();

		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));

                //random
                //this.mQuiz.randomize(30);
	}
});
