var g1_oa_d_7 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);

		//answers 
                this.mThresholdTime = 10000;

		//input pad
		this.mInputPad = new ButtonMultipleChoicePad(application);
	},

	showQuestion: function()
	{
		this.mInputPad.showQuestion();	
	},
 
	showCorrectAnswer: function()
	{
		this.parent();
        	this.mCorrectAnswerBar.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getAnswer();
	},
   
	createQuestions: function()
        {
		this.parent();

              	for (d = 0; d < this.mQuiz.mQuestionArray.length; d++)
               	{
                        this.mQuiz.mQuestionArray[d] = 0;
                }
                this.mQuiz.mQuestionArray = 0;
                this.mQuiz.mQuestionArray = new Array();

		//tall
		var question = new Question('7 + 1 = 9','false');
		question.setChoice('A','true');
		question.setChoice('B','false');
		this.mQuiz.mQuestionArray.push(question);
	
		//short	
		var question = new Question('What is this?','short');
		question.setChoice('A','tall');
		question.setChoice('B','short');
		this.mQuiz.mQuestionArray.push(question);

		//heavy
		var question = new Question('What is this?','heavy');
		question.setChoice('A','light');
		question.setChoice('B','heavy');
		this.mQuiz.mQuestionArray.push(question);
		
		//light
		var question = new Question('What is this?','light');
		question.setChoice('A','light');
		question.setChoice('B','heavy');
		this.mQuiz.mQuestionArray.push(question);
		
		//short	
		var question = new Question('What is this?','short');
		question.setChoice('A','tall');
		question.setChoice('B','short');
		this.mQuiz.mQuestionArray.push(question);
		
		//light
		var question = new Question('What is this?','light');
		question.setChoice('A','light');
		question.setChoice('B','heavy');
		this.mQuiz.mQuestionArray.push(question);

		//heavy
		var question = new Question('What is this?','heavy');
		question.setChoice('A','light');
		question.setChoice('B','heavy');
		this.mQuiz.mQuestionArray.push(question);
		
		//short	
		var question = new Question('What is this?','short');
		question.setChoice('A','tall');
		question.setChoice('B','short');
		this.mQuiz.mQuestionArray.push(question);
		
		//tall
		var question = new Question('What is this?','tall');
		question.setChoice('A','tall');
		question.setChoice('B','short');
		this.mQuiz.mQuestionArray.push(question);
		
		//light
		var question = new Question('What is this?','light');
		question.setChoice('A','light');
		question.setChoice('B','heavy');
		this.mQuiz.mQuestionArray.push(question);
	},

	//state overides
	showCorrectAnswerOutOfTime: function()
        {
                this.mCorrectAnswerStartTime = this.mTimeSinceEpoch;
                this.mInputPad.hide();
                this.mCorrectAnswerBar.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getAnswer();
                this.showCorrectAnswerBar();
                this.showClockShape();
        }
});
