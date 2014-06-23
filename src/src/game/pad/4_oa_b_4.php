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

	makeTypeA: function()
	{
		question = '';
		a = 0;
		b = 0;
		c = 0;
		d = 0;
		n = 0;
		e = 0;
		f = 0;
	 	
		// factor 1
                a = 3 + Math.floor(Math.random()*19);

                max = Math.floor(100/a);

                // factor 2
                b = 2 + Math.floor(Math.random()*(max-1));

                // multiple
                c = a * b;

                // wrong answer 1
                do
		{
                	d = (2 * a) + Math.floor(Math.random()*(101 - (2 * a)));
                        n = d % a;
                }
                while (n == 0);

                // wrong answer 2
                do
	 	{
                        e = (2 * a) + Math.floor(Math.random()*(101 - (2 * a)));
                        f = e % a;
                }
                while (f == 0 || e == d);

                question = new Question('Which is a multiple of ' + a + '? ', '' + c);

		question.mAnswerPool.push(c);
		question.mAnswerPool.push(d);
		question.mAnswerPool.push(e);
                
		this.mQuiz.mQuestionArray.push(question);
                question.mRandomChoices = true;

	},
	makeTypeB: function()
	{
		question = '';
		max = 0;
		a = 0;
		b = 0;
		c = 0;
		d = 0;
		n = 0;
		e = 0;
		f = 0;
	
		// factor 1
                a = 3 + Math.floor(Math.random()*19);

                max = Math.floor(100/a);

                // factor 2
                b = 2 + Math.floor(Math.random()*(max-1));

                // multiple
                c = a * b;

                // wrong answer 1
                do
		{
                	d = 2 + Math.floor(Math.random()*19);
                       	n = c % d;
                }
                while (n == 0);

                // wrong answer 2
                do
		{
                	e = 2 + Math.floor(Math.random()*19);
                        f = c % e;
                }
                while (f == 0 || e == d);

                question = new Question('Which is a factor of ' + c + '? ', '' + a);

		question.mAnswerPool.push(a);
		question.mAnswerPool.push(d);
		question.mAnswerPool.push(e);

                this.mQuiz.mQuestionArray.push(question);
                question.mRandomChoices = true;
	},

	makeTypeC: function()
	{
		question = '';
		answer = '';
		prime = [3,5,7,11,13,17,19,23,29,31,37];
		a = 0;
		
                randomChoice = Math.floor(Math.random()*2);

                if(randomChoice == 0)
                {
                        a = prime[Math.floor(Math.random()*11)];
                        answer = 'yes';
                }

                if(randomChoice == 1)
                {
                        a = prime[Math.floor(Math.random()*11)] + 1;
                        answer = 'no';
                }

                question = new Question('Is ' + a + ' a prime number? ', '' + answer);

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
		randomChoice = 0;

                if (randomChoice == 0)
                {
                        question = new Question('Tommy had to pick the multiples of ' + a + ' from the following choices. What should Tommy chose?',x);
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
