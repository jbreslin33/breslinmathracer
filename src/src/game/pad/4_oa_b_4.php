var g4_oa_b_4 = new Class(
{

Extends: MultipleChoicePad,

	initialize: function(application)
	{
       		this.parent(application);
		this.setScoreNeeded(10);
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

                randomChoice = Math.floor(Math.random()*9);

                if (randomChoice == 0)
                {
                        question = new Question('Tommy had to pick the multiples of 2 from the following choices. What should Tommy choose?','2,4,6,8,10,12');
                	question.mAnswerPool.push('1,2,4,6,8,10');
                	question.mAnswerPool.push('4,6,8,10,12,14');
                }
                if (randomChoice == 1)
                {
                        question = new Question('Gwen had to pick the multiples of 4 from the following choices. What should Gwen choose?','3,6,9,12,15,18');
                	question.mAnswerPool.push('1,3,6,9,12,15');
                	question.mAnswerPool.push('6,9,12,15,18,21');
                }
                if (randomChoice == 2)
                {
                        question = new Question('What are the first six multiples of 4?','4,8,12,16,20,24');
                	question.mAnswerPool.push('1,4,8,12,16,20');
                	question.mAnswerPool.push('8,12,16,20,24,28');
                }
                if (randomChoice == 3)
                {
                        question = new Question('Gilbert had to pick the multiples of 5 from the following choices. What should Gilbert choose?','5,10,15,20,25,30');
                	question.mAnswerPool.push('1,5,10,15,20,25');
                	question.mAnswerPool.push('10,15,20,25,30,35');
                }
                if (randomChoice == 4)
                {
                        question = new Question('What are the first six multiples of 6?','6,12,18,24,30,36');
                	question.mAnswerPool.push('1,6,12,18,24,30');
                	question.mAnswerPool.push('12,18,24,30,36,42');
                }
                if (randomChoice == 5)
                {
                        question = new Question('Randy had to pick the multiples of 7 from the following choices. What should Randy choose?','7,14,21,28,35,42');
                	question.mAnswerPool.push('1,7,14,21,28,35');
                	question.mAnswerPool.push('14,21,28,35,42,49');
                }
                if (randomChoice == 6)
                {
                        question = new Question('What are the first six multiples of 8?','8,16,24,32,40,48');
                	question.mAnswerPool.push('1,8,16,24,32,40,48');
                	question.mAnswerPool.push('16,24,32,40,48,56');
                }
                if (randomChoice == 7)
                {
                        question = new Question('Vinny had to pick the multiples of 9 from the following choices. What should Vinny choose?','9,18,27,36,45,54');
                	question.mAnswerPool.push('1,9,18,27,36,45');
                	question.mAnswerPool.push('18,27,36,45,54,63');
                }
                if (randomChoice == 8)
                {
                        question = new Question('Alexis had to pick the multiples of 10 from the following choices. What should Alexis choose?','10,20,30,40,50,60');
                	question.mAnswerPool.push('1,10,20,30,40,50');
                	question.mAnswerPool.push('20,30,40,50,60,70');
                }
                question.mAnswerPool.push(question.getAnswer());
                this.mQuiz.mQuestionArray.push(question);
                question.mRandomChoices = true;
        },
   
	makeTypeE: function()
        {
                question = '';

                randomChoice = Math.floor(Math.random()*9);
		randomChoice = 2;

                if (randomChoice == 0)
                {
                        question = new Question('List all factor pairs of 2?','1x2');
                	question.mAnswerPool.push('1+1,0+2');
                	question.mAnswerPool.push('4-2,3-1,2-0');
                }
                if (randomChoice == 1)
                {
                        question = new Question('List all factor pairs of 3?','1x3');
                	question.mAnswerPool.push('1+2,0+3');
                	question.mAnswerPool.push('4-1,3-0,5-2');
                }
                if (randomChoice == 2)
                {
                        question = new Question('List all factor pairs of 4?','1x4,2x2');
                	question.mAnswerPool.push('0+4,1+3,2+2');
                	question.mAnswerPool.push('5-1,6-2,7-3');
                }
                if (randomChoice == 3)
                {
                        question = new Question('List all factor pairs of 5?','1x5');
                	question.mAnswerPool.push('0+5,1+4,2+3');
                	question.mAnswerPool.push('6-1,7-2,8-3');
                }
                if (randomChoice == 4)
                {
                        question = new Question('List all factor pairs of 6?','1x6,2x3');
                	question.mAnswerPool.push('0+6,1+5,2+4,3+3');
                	question.mAnswerPool.push('7-1,8-2,9-3');
                }
                if (randomChoice == 5)
                {
                        question = new Question('List all factor pairs of 7?','1x7');
                	question.mAnswerPool.push('0+7,1+2,3+4,4+3');
                	question.mAnswerPool.push('8-1,9-2,10-3');
                }
                if (randomChoice == 6)
                {
                        question = new Question('List all factor pairs of 8?','1x8,2x4');
                	question.mAnswerPool.push('0+8,1+7,2+6,3+5,5+4');
                	question.mAnswerPool.push('8-0,9-1,10-2');
                }
                if (randomChoice == 7)
                {
                        question = new Question('List all factor pairs of 9?','1x9,3x3');
                	question.mAnswerPool.push('0+9,1+8,2+7,3+3');
                	question.mAnswerPool.push('8-1,9-2,10-3');
                }
                if (randomChoice == 8)
                {
                        question = new Question('List all factor pairs of 10?','1x10,2x5');
                	question.mAnswerPool.push('0+10,1+9,2+8,3+7');
                	question.mAnswerPool.push('10-0,11-1,12-2');
                }
                if (randomChoice == 9)
                {
                        question = new Question('List all factor pairs of 11?','1x11');
                	question.mAnswerPool.push('0+11,1+10,2+9,3+8');
                	question.mAnswerPool.push('11-0,12-1,13-2');
                }
                if (randomChoice == 10)
                {
                        question = new Question('List all factor pairs of 12?','1x12,2x6,3x4');
                	question.mAnswerPool.push('0+12,1+11,2+10,3+9');
                	question.mAnswerPool.push('12-0,12-2,13-1');
                }
                question.mAnswerPool.push(question.getAnswer());
                this.mQuiz.mQuestionArray.push(question);
                question.mRandomChoices = true;
        
	},

	createQuestions: function()
        {
 		this.parent();

		this.mQuiz.resetQuestionArray();

		this.makeTypeE();
		this.makeTypeD();
		this.makeTypeD();
		this.makeTypeD();
		this.makeTypeD();
		this.makeTypeD();
		this.makeTypeD();
		this.makeTypeD();
		this.makeTypeD();
		this.makeTypeD();

		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));

                //random
                //this.mQuiz.randomize(30);
	}
});
