var g4_oa_a_2 = new Class(
{

Extends: MultipleChoicePad,

	initialize: function(application)
	{
       		this.parent(application);
		this.setScoreNeeded(4);

		this.mCircles = new Circles(this);

    		this.mRaphael = Raphael(10, 35, 760, 405);
	},
        
	createNumQuestion: function()
        {
		this.parent();
                this.mNumQuestion.setSize(650,200);
                this.mNumQuestion.setPosition(350,140);
        },

	createInput: function()
	{
		this.parent();
		this.mButtonA.setPosition(105,200);
		this.mButtonB.setPosition(385,200);
		this.mButtonC.setPosition(660,200);
	},

        //showCorrectAnswer
        showCorrectAnswerEnter: function()
        {
                this.parent();
                this.mShapeArray[1].setSize(650,200);
                this.mShapeArray[1].setPosition(350,140);
                this.mShapeArray[9].setSize(75,75);
                this.mShapeArray[9].setPosition(75,175);
        },
	makeTypeA: function()
        {
		question = '';
                var a = 0;
                var b = 0;
                var c = 0;
                var d = 0;
                var e = 0;
                var f = 0;

                while ((a * b) == (c * d) || (a * b) == (e * f))
                {
                        a = Math.floor((Math.random()*8)+2);
                        b = Math.floor((Math.random()*8)+2);
                        c = Math.floor((Math.random()*8)+2);
                        d = Math.floor((Math.random()*8)+2);
                        e = Math.floor((Math.random()*8)+2);
                        f = Math.floor((Math.random()*8)+2);
                }
                randomChoice = Math.floor(Math.random()*2);

		if (randomChoice == 0)
		{
                	question = new Question('A soccer league had ' + a + ' teams. There were ' + b + ' players on each team. ' + a + 'x' + b + ' represents this as an expression. How would we best represent this expression in a picture?', 'A');
		}
		if (randomChoice == 1)
		{
                	question = new Question('A teacher put the kids desks in ' + a + ' rows with ' + b + ' desks in each row. ' + a + 'x' + b + ' represents this as an expression. How would we best represent this expression in a picture?', 'A');
		}
		if (randomChoice == 2)
		{
                	question = new Question('Jim scored ' + a + ' points. He had ' + b + ' times as many points as Steve. ' + a + 'x' + b + ' represents this as an expression. How would we best represent this expression in a picture?', 'A');
		}

                var correctLetterNumber = Math.floor(Math.random()*3);
                if (correctLetterNumber == 0)
                {
                        question.setAnswer('A',0);
                        this.mCircles.includeCircles(question,'A',a,b);
                        this.mCircles.includeCircles(question,'B',c,d);
                        this.mCircles.includeCircles(question,'C',e,f);

                }
                if (correctLetterNumber == 1)
                {
                        question.setAnswer('B',0);
                        this.mCircles.includeCircles(question,'A',c,d);
                        this.mCircles.includeCircles(question,'B',a,b);
                        this.mCircles.includeCircles(question,'C',e,f);
                }
                if (correctLetterNumber == 2)
                {
                        question.setAnswer('C',0);
                        this.mCircles.includeCircles(question,'A',c,d);
                        this.mCircles.includeCircles(question,'B',e,f);
                        this.mCircles.includeCircles(question,'C',a,b);
                }
                question.mAnswerPool.push('A');
                question.mAnswerPool.push('B');
                question.mAnswerPool.push('C');
                this.mQuiz.mQuestionArray.push(question);
        },


	makeTypeB: function()
	{
		question = '';
                
		a = Math.floor((Math.random()*8)+2);
                b = Math.floor((Math.random()*8)+2);
                
		randomChoice = Math.floor(Math.random()*2);

		if (randomChoice == 0)
		{
			question = new Question('Mike had ' + a + ' buckets. He had ' + b + ' fish in each bucket. We could write the expression: ' + a + 'x' + b + ' to represent this. Which of these expressions also represent the situation?',b + 'x' + a);
                }
		if (randomChoice == 1)
		{
			question = new Question('A school had ' + a + ' class rooms. It had ' + b + ' students in each class. We could write the expression: ' + a + 'x' + b + ' to represent this. Which of these expressions also represent the situation?',b + 'x' + a);
                }

                question.mAnswerPool.push('' + question.getAnswer());
                question.mAnswerPool.push('' + b + '+' + a);
                question.mAnswerPool.push('' + b + '-' + a);

		question.mRandomChoices = true;
		this.mQuiz.mQuestionArray.push(question);
	},		

	makeTypeC: function()
	{
                a = Math.floor((Math.random()*8)+2);
                b = Math.floor((Math.random()*8)+2);
		x = parseInt(a * b);
		
		randomChoice = Math.floor(Math.random()*2);

		if (randomChoice == 0)
		{
                	question = new Question('Ava and Fred played soccer. Fred scored ' + a + ' goals. Ava scored ' + b + ' times as many goals as Fred. Which equation would represent this situation?',a + 'x' + b + '=' + x);
               	} 
		if (randomChoice == 1)
		{
                	question = new Question('Zach and Brent both love fruit. Brent loves it more. In the last 7 days Zach ate ' + a + ' pieces of fruit. Brent ate ' + b + ' times as many pieces of fruit as Zach. Which equation would represent this situation?',a + 'x' + b + '=' + x);
               	} 

		question.mAnswerPool.push(question.getAnswer());
                question.mAnswerPool.push(b + '-' + a + '=' + parseInt(b+a));
                question.mAnswerPool.push(x + '+' + b + '=' + parseInt(x+b));
		question.mRandomChoices = true;
                this.mQuiz.mQuestionArray.push(question);
	},	

	createQuestions: function()
        {
		this.parent();
	
		//just the question array reset
		this.mQuiz.resetQuestionArray();
		this.mQuiz.resetQuestionPoolArray();

		this.makeTypeA();
		this.makeTypeB();
		this.makeTypeC();
		this.makeTypeB();

		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
		
		//random	
		//this.mQuiz.randomize(10);
	},

	createWorld: function()
	{
		this.parent();

		this.mCircles.createWorld();
	}
});
