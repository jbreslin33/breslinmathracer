var g4_oa_b_4 = new Class(
{

Extends: MultipleChoicePad,

	initialize: function(application)
	{
       		this.parent(application);
		this.setScoreNeeded(3);
	},

        createInput: function()
        {
                this.parent();
                this.mButtonA.setPosition(135,290);
                this.mButtonB.setPosition(385,290);
                this.mButtonC.setPosition(635,290);

                this.mButtonA.setSize(240,220);
                this.mButtonB.setSize(240,220);
                this.mButtonC.setSize(240,220);
        },

        createNumQuestion: function()
        {
                this.parent();
                this.mNumQuestion.setSize(650,200);
                this.mNumQuestion.setPosition(350,140);
        },

        //showCorrectAnswer
        showCorrectAnswerEnter: function()
        {
                this.parent();

                this.mShapeArray[1].setSize(650,200);
                this.mShapeArray[1].setPosition(350,140);
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

		question.mAnswerPool.push(varC);
		question.mAnswerPool.push(varD);
		question.mAnswerPool.push(varE);
                
		this.mQuiz.mQuestionArray.push(question);
                question.mRandomChoices = true;

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

		question.mAnswerPool.push(varA);
		question.mAnswerPool.push(varD);
		question.mAnswerPool.push(varE);

                this.mQuiz.mQuestionArray.push(question);
                question.mRandomChoices = true;
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

               	question.mAnswerPool.push('yes');
               	question.mAnswerPool.push('no');
                this.mQuiz.mQuestionArray.push(question);
	},

	makeTypeD: function()
        {
                question = '';

                a = Math.floor(Math.random()*8)+2;
                b = Math.floor(Math.random()*298)+2;
                c = Math.floor(Math.random()*8)+2;
                x = parseInt(a * b * c);

                randomChoice = Math.floor(Math.random()*2);

                if (randomChoice == 0)
                {
                        question = new Question('John ordered baseball cards from the internet. The cards come in boxes. In each box there is ' + a + ' packs of baseball cards. Each pack has ' + b + ' cards in it. If John orders ' + c + ' boxes of cards how many cards will he receive?',x);
                }
                if (randomChoice == 1)
                {
                        question = new Question('Steve bought blocks. The blocks come in crates. In each crate there is ' + a + ' packs of blocks. Each pack has ' + b + ' blocks in it. If Steve orders ' + c + ' crates of blocks how many blocks will he have total?',x);
                }

                poolB = 0;
                poolC = 0;
                while (x == poolB || x == poolC || poolB == poolC)
                {
                        poolB = parseInt(a + b + c);
                        poolC = parseInt( (a + c) * b);
                }
                question.mAnswerPool.push(x);
                question.mAnswerPool.push(poolB);
                question.mAnswerPool.push(poolC);

                this.mQuiz.mQuestionArray.push(question);
                question.mRandomChoices = true;
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
