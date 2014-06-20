var g4_oa_a_2 = new Class(
{

Extends: MultipleChoicePad,

	initialize: function(application)
	{
       		this.parent(application);
		this.setScoreNeeded(9);

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

	createArrayQuestion: function(textA,textB,textC)
        {
                var a = 0;
                var b = 0;
                var c = 0;
                var d = 0;
                var e = 0;
                var f = 0;

                while ((a * b) == (c * d) || (a * b) == (e * f))
                {
                        a = Math.floor((Math.random()*9)+1);
                        b = Math.floor((Math.random()*9)+1);
                        c = Math.floor((Math.random()*9)+1);
                        d = Math.floor((Math.random()*9)+1);
                        e = Math.floor((Math.random()*9)+1);
                        f = Math.floor((Math.random()*9)+1);
                }
                var question = new Question(textA + ' ' + a + ' ' + textB + ' ' + b + ' ' + textC + ' We could write the expression: ' + a + ' x ' + b + ' to represent this. How would we best represent this expression in a picture?', 'A');
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

	createArrayQuestionTwo: function(textA,textB,textC)
	{
                //*************** question 1
                var a = Math.floor((Math.random()*9)+1);
                var b = Math.floor((Math.random()*9)+1);
                
		var question = new Question(textA + ' ' + a + ' ' + textB + ' ' + b + ' ' + textC + ' We could write the expression: ' + a + ' x ' + b + ' to represent this. Which of these expressions also represent the situation?', 'A');
                var correctLetterNumber = Math.floor(Math.random()*3);
                question.setAnswer('' + b + ' x ' + a,0);
                if (correctLetterNumber == 0)
                {
                	question.mAnswerPool.push('' + question.getAnswer());
                	question.mAnswerPool.push('' + b + ' + ' + a);
                	question.mAnswerPool.push('' + b + ' - ' + a);
                }
                if (correctLetterNumber == 1)
                {
                	question.mAnswerPool.push('' + b + ' + ' + a);
                	question.mAnswerPool.push('' + question.getAnswer());
                	question.mAnswerPool.push('' + b + ' - ' + a);
                }
                if (correctLetterNumber == 2)
                {
                	question.mAnswerPool.push('' + b + ' + ' + a);
                	question.mAnswerPool.push('' + b + ' - ' + a);
                	question.mAnswerPool.push('' + question.getAnswer());
                }
                this.mQuiz.mQuestionArray.push(question);
	},		
      
	createArrayQuestionThree: function(textA,textB,textC)
	{
                var a = Math.floor((Math.random()*9)+1);
                var b = Math.floor((Math.random()*9)+1);

                var question = new Question(textA + ' ' + a + ' ' + textB + ' ' + b + ' ' + textC + ' Which equation would represent this situation?', 'A');
                var correctLetterNumber = Math.floor(Math.random()*3);
                question.setAnswer('' + a + ' x ' + b + ' = ' + parseInt(a*b),0);
                if (correctLetterNumber == 0)
                {
                	question.mAnswerPool.push('' + question.getAnswer());
                	question.mAnswerPool.push('' + b + ' - ' + a + ' = ' + parseInt(b+a));
                	question.mAnswerPool.push('' + b + ' * ' + b + ' = ' + parseInt(b*b));
                }
                if (correctLetterNumber == 1)
                {
                	question.mAnswerPool.push('' + a + ' x ' + a + ' = ' + parseInt(a*a));
                	question.mAnswerPool.push('' + question.getAnswer());
                	question.mAnswerPool.push('' + b + ' + ' + a + ' = ' + parseInt(b+a));
                }
                if (correctLetterNumber == 2)
                {
                	question.mAnswerPool.push('' + a + ' x ' + a + ' = ' + parseInt(a*a));
                	question.mAnswerPool.push('' + b + ' + ' + a + ' = ' + parseInt(b+a));
                	question.mAnswerPool.push('' + question.getAnswer());
                }
                this.mQuiz.mQuestionArray.push(question);
	},		
   
	createArrayQuestionFour: function(textA,textB,textC)
        {
                var a = 0;
                var b = 0;
                var c = 0;
                var d = 0;
                var e = 0;
                var f = 0;

                while ((a * b) == (c * d) || (a * b) == (e * f))
                {
                        a = Math.floor((Math.random()*9)+1);
                        b = Math.floor((Math.random()*9)+1);
                        c = Math.floor((Math.random()*9)+1);
                        d = Math.floor((Math.random()*9)+1);
                        e = Math.floor((Math.random()*9)+1);
                        f = Math.floor((Math.random()*9)+1);
                }
                var question = new Question(textA + ' ' + a + ' ' + textB + ' ' + b + ' ' + textC + ' Which picture captures this situation?', 'A');
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
 
	createArrayQuestionFive: function(textA,textB,textC)
        {
                var a = Math.floor((Math.random()*100)+1);
                var b = Math.floor((Math.random()*8)+2);

                var question = new Question(textA + ' ' + a + ' ' + textB + ' ' + b + ' ' + textC, 'A');
                var correctLetterNumber = Math.floor(Math.random()*3);
                question.setAnswer('' + a + ' / ' + b + ' = ' + parseInt(a/b),0);
                if (correctLetterNumber == 0)
                {
                        question.mAnswerPool.push('' + question.getAnswer());
                        question.mAnswerPool.push('' + a + ' - ' + b + ' = ' + parseInt(a-b));
                        question.mAnswerPool.push('' + a + ' * ' + b + ' = ' + parseInt(a*b));
                }
                if (correctLetterNumber == 1)
                {
                        question.mAnswerPool.push('' + a + ' x ' + b + ' = ' + parseInt(a*b));
                        question.mAnswerPool.push('' + question.getAnswer());
                        question.mAnswerPool.push('' + a + ' + ' + b + ' = ' + parseInt(a+b));
                }
                if (correctLetterNumber == 2)
                {
                        question.mAnswerPool.push('' + a + ' x ' + b + ' = ' + parseInt(a*b));
                        question.mAnswerPool.push('' + a + ' + ' + b + ' = ' + parseInt(a+b));
                        question.mAnswerPool.push('' + question.getAnswer());
                }
                this.mQuiz.mQuestionArray.push(question);
        },

	createArrayQuestionSix: function(textA,textB,textC)
        {
                //*************** question 1
                var a = Math.floor((Math.random()*9)+1);
                var b = Math.floor((Math.random()*99)+1);

                var question = new Question(textA + ' ' + a + ' ' + textB + ' ' + b + ' ' + textC, 'A');
                var correctLetterNumber = Math.floor(Math.random()*3);
                question.setAnswer('' + parseInt(a * b),0);
                if (correctLetterNumber == 0)
                {
                        question.mAnswerPool.push('' + question.getAnswer());
                        question.mAnswerPool.push('' + parseInt(b + a));
                        question.mAnswerPool.push('' + parseInt(b - a));
                }
                if (correctLetterNumber == 1)
                {
                        question.mAnswerPool.push('' + parseInt(b - a));
                        question.mAnswerPool.push('' + question.getAnswer());
                        question.mAnswerPool.push('' + parseInt(b + a));
                }
                if (correctLetterNumber == 2)
                {
                        question.mAnswerPool.push('' + parseInt(b + a));
                        question.mAnswerPool.push('' + question.getAnswer());
                        question.mAnswerPool.push('' + parseInt(b - a));
                }
                this.mQuiz.mQuestionArray.push(question);
        },

	
	createQuestions: function()
        {
		this.parent();
	
		//just the question array reset
		this.mQuiz.resetQuestionArray();
		this.mQuiz.resetQuestionPoolArray();

		//level 1	
		if (APPLICATION.mLevel == 1)
		{
			this.createArrayQuestionSix('Greg has','game boards. Each game board has','pieces. How many total pieces in all the games are there?');

			question = new Question('Click an example of multiplicative comparison.','Javier has 4 times as many points as John');
                	question.mAnswerPool.push('Javier has 4 times as many points as John');
                	question.mAnswerPool.push('Javier has 3 points and John has 2 points');
                	question.mAnswerPool.push('Javier has 2 points and John has 10 points');
                	this.mQuiz.mQuestionArray.push(question);

			this.createArrayQuestionFive('Dave collected','pokemon cards. Dave collected','times as many cards as Mike. Which equation would tell us how many cards Mike collected?');
			this.createArrayQuestionThree('Ava and Fred played soccer. Ava scored','goals. Ava scored','times as many goals as Fred.');
			this.createArrayQuestionFour('Jim has','times as many balls as Steve. Steve has','balls.');
			this.createArrayQuestionFour('Steve has','balls. Jim has','times as many balls as Steve.');
			this.createArrayQuestionTwo('A school had','class rooms. It had','students in each class.');
			this.createArrayQuestionThree('A school had','class rooms. It had','students in each class.');
			this.createArrayQuestion('A soccer league had','teams. There were','players on each team.');
		}

		//level 2
		if (APPLICATION.mLevel > 2)
		{
			this.createArrayQuestionSix('Greg has','game boards. Each game board has','pieces. How many total pieces in all the games are there?');

			question = new Question('Click an example of multiplicative comparison.','Javier has 5 times as many points as John');
                	question.mAnswerPool.push('Javier has 5 more points than John');
                	question.mAnswerPool.push('Javier has 3 points and John has 2 points');
                	question.mAnswerPool.push('Javier has 2 points and John has 10 points');
                	this.mQuiz.mQuestionArray.push(question);

			this.createArrayQuestionFive('Dave collected','pokemon cards. Dave collected','times as many cards as Mike. Which equation would tell us how many cards Mike collected?');
			this.createArrayQuestionThree('Ava and Fred played soccer. Ava scored','goals. Ava scored','times as many goals as Fred.');
			this.createArrayQuestionFour('Jim has','times as many balls as Steve. Steve has','balls.');
			this.createArrayQuestionFour('Steve has','balls. Jim has','times as many balls as Steve.');
			this.createArrayQuestionThree('A school had','class rooms. It had','students in each class.');
			this.createArrayQuestionTwo('Mike had','buckets. He had','fish in each bucket.');
			this.createArrayQuestion('A teacher put the kids desk in','rows with','desks in each row.');
		}

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
