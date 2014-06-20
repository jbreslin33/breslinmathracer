var g4_oa_a_1 = new Class(
{

Extends: MultipleChoicePad,

	initialize: function(application)
	{
       		this.parent(application);
		this.setScoreNeeded(4);
	},

	createNumQuestion: function()
	{
		this.parent();
		this.mNumQuestion.setPosition(140,140);
		this.mNumQuestion.setSize(200,200);
	},	

     	//showCorrectAnswer
        showCorrectAnswerEnter: function()
        {
                this.parent();

                this.mShapeArray[1].setSize(700,100);
                this.mShapeArray[1].setPosition(380,80);

		this.mShapeArray[1].mMesh.innerHTML = '' + this.mQuiz.getQuestion().getShowAnswer();
        },

        //outOfTime
        outOfTimeEnter: function()
        {
                this.parent();

                this.mShapeArray[0].setPosition(650,170);

                this.mShapeArray[1].setSize(700,100);
                this.mShapeArray[1].setPosition(380,80);

                //move frantic clock
                this.mShapeArray[8].setPosition(650,300);
		
		this.mShapeArray[1].mMesh.innerHTML = '' + this.mQuiz.getQuestion().getShowAnswer();
        },

	makeTypeA: function()
	{
		var a = Math.floor((Math.random()*8)+3);		
		var b = Math.floor((Math.random()*8)+3);		
		var x = a * b;

               	question = new Question('Which equation means that ' + x + ' is '  + a + ' times as many as ' + b + '?','' + x  + '=' + a + 'x' + b);
               	this.mQuiz.mQuestionArray.push(question);
 		question.mAnswerPool.push('' + x  + '=' + a + 'x' + b);
 		question.mAnswerPool.push('' + a  + '=' + b + 'x' + x);
 		question.mAnswerPool.push('' + b  + '=' + x + 'x' + a);
	},

        makeTypeB: function()
        {
                var a = Math.floor((Math.random()*8)+3);
                var b = Math.floor((Math.random()*8)+3);
                var x = a * b;

                question = new Question('Which equation means that ' + x + ' is '  + a + ' times as many as ' + b + '?','' + x  + '=' + a + 'x' + b);
                this.mQuiz.mQuestionArray.push(question);
                question.mAnswerPool.push('' + x  + '=' + a + 'x' + b);
                question.mAnswerPool.push('b');
                question.mAnswerPool.push('c');
        },


	createQuestions: function()
        {
 		this.parent();
                
		this.mQuiz.resetQuestionArray();

		this.makeTypeA();
		this.makeTypeA();
		this.makeTypeA();
		this.makeTypeA();

                //this.mQuiz.randomize(10);
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));


	}
});
