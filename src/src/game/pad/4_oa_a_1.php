var g4_oa_a_1 = new Class(
{

Extends: MultipleChoicePad,

	initialize: function(application)
	{
       		this.parent(application);
		this.setScoreNeeded(5);

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
		var a = Math.floor((Math.random()*8)+3);		
		var b = Math.floor((Math.random()*8)+3);		
		var x = a * b;

               	question = new Question('Which equation means that ' + x + ' is '  + a + ' times as many as ' + b + '?',x  + '=' + a + 'x' + b);
               	this.mQuiz.mQuestionArray.push(question);
 		question.mAnswerPool.push(x + '=' + a + 'x' + b);
 		question.mAnswerPool.push(a + '=' + b + 'x' + x);
 		question.mAnswerPool.push(b + '=' + x + 'x' + a);
		question.mRandomChoices = true;
	},
	
	makeTypeB: function()
	{
		var a = Math.floor((Math.random()*8)+3);		
		var b = Math.floor((Math.random()*8)+3);		
		var x = a * b;

               	question = new Question('Which equation does not mean that ' + x + ' is '  + a + ' times as many as ' + b + '?',b  + '=' + x + 'x' + a);
               	this.mQuiz.mQuestionArray.push(question);
 		question.mAnswerPool.push(x + '=' + a + 'x' + b);
 		question.mAnswerPool.push(x + '=' + b + 'x' + a);
 		question.mAnswerPool.push(b + '=' + x + 'x' + a);
		question.mRandomChoices = true;
	},

	makeTypeC: function()
	{
		var a = Math.floor((Math.random()*8)+3);		
		var b = Math.floor((Math.random()*8)+3);		
		var x = a * b;

               	question = new Question('How many times more is ' + x + ' than '  + a + '?',b);
               	this.mQuiz.mQuestionArray.push(question);
 		question.mAnswerPool.push(b);
 		question.mAnswerPool.push(parseInt(x - a));
 		question.mAnswerPool.push(parseInt(x + a));
		question.mRandomChoices = true;
	},
	
	makeTypeD: function()
	{
		var a = Math.floor((Math.random()*8)+3);		
		var b = Math.floor((Math.random()*8)+3);		
		var x = a * b;

               	question = new Question('Which equation means the same as ' + x + '=' + a + 'x' + b + '?',x + '=' + b + 'x' + a);
               	this.mQuiz.mQuestionArray.push(question);
 		question.mAnswerPool.push(x + '=' + b + 'x' + a);
 		question.mAnswerPool.push(x + '=' + b + '+' + a);
 		question.mAnswerPool.push(a + '=' + b + 'x' + x);
		question.mRandomChoices = true;
	},

	makeTypeE: function()
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
		randomChoice = 0;

		if (randomChoice == 0)
		{
                	question = new Question('Lucy had wants to put ' + a + ' seeds in each of ' + b + ' pots of dirt. ' + a + 'x' + b + ' represents this as an expression. How would we best represent this expression in a picture?', 'A');
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

	createQuestions: function()
        {
 		this.parent();
                
		this.mQuiz.resetQuestionArray();

		this.makeTypeA();
		this.makeTypeB();
		this.makeTypeC();
		this.makeTypeD();
		this.makeTypeE();

                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
                //this.mQuiz.randomize(10);
	},

	createWorld: function()
	{
		this.parent();
		this.mCircles.createWorld();
	}
});
