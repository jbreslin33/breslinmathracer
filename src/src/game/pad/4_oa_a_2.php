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
                this.mShapeArray[1].setPosition(100,80);
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
                randomChoice = 1;

		if (randomChoice == 0)
		{
                	question = new Question('A soccer league had ' + a + ' teams. There were ' + b + ' players on each team. ' + a + ' x ' + b + ' represents this as an expression. How would we best represent this expression in a picture?', 'A');
		}
		if (randomChoice == 1)
		{
                	question = new Question('A teacher put the kids desks in ' + a + ' rows with ' + b + ' desks in each row. ' + a + ' x ' + b + ' represents this as an expression. How would we best represent this expression in a picture?', 'A');
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
	
		//just the question array reset
		this.mQuiz.resetQuestionArray();
		this.mQuiz.resetQuestionPoolArray();

		this.makeTypeA();
		this.makeTypeA();
		this.makeTypeA();
		this.makeTypeA();

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
