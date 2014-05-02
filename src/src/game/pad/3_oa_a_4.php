var g3_oa_a_4 = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);
		this.setScoreNeeded(12);
		
		this.mA = 0;
		this.mB = 0;
		this.mC = 0;
	},
	
	//state overides
	showCorrectAnswerEnter: function()
	{
		this.parent();
        	this.mShapeArray[1].mMesh.innerHTML = '' + this.mQuiz.getQuestion().getQuestion() + ' ANSWER: ' + this.mQuiz.getQuestion().getAnswer();
	},

	showCorrectAnswerOutOfTimeEnter: function()
        {
		this.parent();
        	this.mShapeArray[1].mMesh.innerHTML = '' + this.mQuiz.getQuestion().getQuestion() + ' ANSWER: ' + this.mQuiz.getQuestion().getAnswer();
        },

	randomMultiplication: function()
	{
		//multiplication
		this.mA = Math.floor((Math.random()*10)+1);
		this.mB = Math.floor((Math.random()*10)+1);
		this.mC = parseInt(this.mA * this.mB);
	},
	randomDivision: function()
	{
                while(this.mA % this.mB != 0 || this.mA < this.mB)
                {
                      	this.mA = Math.floor((Math.random()*10)+1);
                       	this.mB = Math.floor((Math.random()*10)+1);
                      	this.mC = parseInt(this.mA / this.mB);
               	}
	},

	createQuestions: function()
        {
  		this.parent();

		this.mQuiz.resetQuestionArray();

		var minusOrNot = Math.floor((Math.random()*2));
		var StandardFormOrNot = Math.floor((Math.random()*2));
		var missingVar = Math.floor((Math.random()*3));
		this.mA = 0;
		this.mB = 0;
		this.mC = 100;

		//a*b=c
		this.randomMultiplication();
		var question = new Question('? x ' + this.mB + ' = ' + this.mC,'' + this.mA);
		this.mQuiz.mQuestionArray.push(question);
	
		this.randomMultiplication();
		var question = new Question('' + this.mA + ' x ? = ' + this.mC,'' + this.mB);
		this.mQuiz.mQuestionArray.push(question);

		this.randomMultiplication();
		var question = new Question('' + this.mA + ' x ' + this.mB + ' = ?','' + this.mC);
		this.mQuiz.mQuestionArray.push(question);
	
		//c=a*b
		this.randomMultiplication();
                var question = new Question('? = ' + this.mA + ' x ' + this.mB,'' + this.mC);
              	this.mQuiz.mQuestionArray.push(question);
                                                	
		this.randomMultiplication();
		var question = new Question('' + this.mC + ' = ? x ' + this.mB,'' + this.mA);
               	this.mQuiz.mQuestionArray.push(question);
                                                	
		this.randomMultiplication();
		var question = new Question('' + this.mC + ' = ' + this.mA + ' x ?','' + this.mB);
              	this.mQuiz.mQuestionArray.push(question);
 				
                //a/b=c
		this.randomDivision();
                var question = new Question('? / ' + this.mB + ' = ' + this.mC,'' + this.mA);
                this.mQuiz.mQuestionArray.push(question);
                                                	
		this.randomDivision();
		var question = new Question('' + this.mA + ' / ? = ' + this.mC,'' + this.mB);
               	this.mQuiz.mQuestionArray.push(question);
                
		this.randomDivision();
		var question = new Question('' + this.mA + ' / ' + this.mB + ' = ?','' + this.mC);
               	this.mQuiz.mQuestionArray.push(question);
                                	
		//c=a/b
		this.randomDivision();
		var question = new Question('? = ' + this.mA + ' / ' + this.mB,'' + this.mC);
               	this.mQuiz.mQuestionArray.push(question);
                                                	
		this.randomDivision();
		var question = new Question('' + this.mC + ' = ? / ' + this.mB,'' + this.mA);
               	this.mQuiz.mQuestionArray.push(question);
                                                	
		this.randomDivision();
		var question = new Question('' + this.mC + ' = ' + this.mA + ' / ?','' + this.mB);
               	this.mQuiz.mQuestionArray.push(question);
           	
		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));

                //random
                this.mQuiz.randomize(10);
	}
});
