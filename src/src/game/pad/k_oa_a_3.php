var k_oa_a_3 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);

		//buttons	
		this.mCorrectButtonNumber = 0;	
		this.mButtonAddend1A = 0;	
		this.mButtonAddend2A = 0;	
		this.mButtonSumA = 0;	
		this.mButtonAddend1B = 0;	
		this.mButtonAddend2B = 0;	
		this.mButtonSumB = 0;	
		this.mButtonAddend1C = 0;	
		this.mButtonAddend2C = 0;	
		this.mButtonSumC = 0;	

		//answers 
                this.mThresholdTime = 10000;

                //input pad
                this.mInputPad = new ButtonChoicePad(application,application.mGame);
	},

	// you need to show a kid with a number name mount... 
	showQuestion: function()
	{
		this.parent();
		
		this.setButtons();
	},
	
	setButtons: function()
	{
		this.mCorrectButtonNumber = 0;	
		this.mButtonAddend1A = 0;	
		this.mButtonAddend2A = 0;	
		this.mButtonSumA = 0;	
		this.mButtonAddend1B = 0;	
		this.mButtonAddend2B = 0;	
		this.mButtonSumB = 0;	
		this.mButtonAddend1C = 0;	
		this.mButtonAddend2C = 0;	
		this.mButtonSumC = 0;	

		while (this.mButtonSumA == this.mButtonSumB || this.mButtoneSumA == this.mButtonSumC || this.mButtonSumB == this.mButtonSumC || this.mButtonSumA > 10 || this.mButtonSumB > 10 || this.mButtonSumC > 10)
		{
			this.mCorrectButtonNumber = Math.floor((Math.random()*3));	
			this.mButtonAddend1A      = Math.floor((Math.random()*10));	
			this.mButtonAddend2A      = Math.floor((Math.random()*10));	
			this.mButtonSumA          = parseInt(parseInt(this.mButtonAddend1A) + parseInt(this.mButtonAddend1B));	

			this.mButtonAddend1B      = Math.floor((Math.random()*10));	
			this.mButtonAddend2B      = Math.floor((Math.random()*10));	
			this.mButtonSumB          = parseInt(parseInt(this.mButtonAddend1B) + parseInt(this.mButtonAddend1B));	

			this.mButtonAddend1C      = Math.floor((Math.random()*10));	
			this.mButtonAddend2C      = Math.floor((Math.random()*10));	
			this.mButtonSumC          = parseInt(parseInt(this.mButtonAddend1C) + parseInt(this.mButtonAddend1C));	

			if (this.mCorrectButtonNumber == 0)
			{
				this.mInputPad.mButtonA.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getAnswer();
				this.mInputPad.mButtonB.mMesh.innerHTML = this.mButtonAddend1B + ' + ' + this.mButtonAddend1B;
				this.mInputPad.mButtonC.mMesh.innerHTML = this.mButtonAddend1C + ' + ' + this.mButtonAddend1C;
			}
			if (this.mCorrectButtonNumber == 1)
			{
				this.mInputPad.mButtonA.mMesh.innerHTML = this.mButtonAddend1A + ' + ' + this.mButtonAddend1A;
				this.mInputPad.mButtonB.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getAnswer();
				this.mInputPad.mButtonC.mMesh.innerHTML = this.mButtonAddend1C + ' + ' + this.mButtonAddend1C;
			}
			if (this.mCorrectButtonNumber == 2)
			{
				this.mInputPad.mButtonA.mMesh.innerHTML = this.mButtonAddend1A + ' + ' + this.mButtonAddend1A;
				this.mInputPad.mButtonB.mMesh.innerHTML = this.mButtonAddend1B + ' + ' + this.mButtonAddend1B;
				this.mInputPad.mButtonC.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getAnswer();
			}
		}
	},

	//state overides 
 	showCorrectAnswer: function()
        {
                this.parent();
                this.mCorrectAnswerBar.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getAnswer();
        },

        showCorrectAnswerOutOfTime: function()
        {
                this.parent();
                this.mCorrectAnswerBar.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getAnswer();
        },
     
	//questions
	createQuestions: function()
        {
		this.parent();
		
		//reset vars and arrays
		for (d = 0; d < this.mQuiz.mQuestionArray.length; d++)
		{
			this.mQuiz.mQuestionArray[d] = 0;
		} 

		this.mQuiz.mQuestionArray = 0;
		this.mQuiz.mQuestionArray = new Array();

		if (this.mApplication.mLevel == 1)
		{
                       	var question = new Question('1 = ?', '1 + 0');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('1 = ?', '0 + 1');
                       	this.mQuiz.mQuestionArray.push(question);
			this.setScoreNeeded(parseInt(this.mQuiz.mQuestionArray.length));
		}
		if (this.mApplication.mLevel == 2)
		{
                       	var question = new Question('2 = ?', '2 + 0');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('2 = ?', '0 + 2');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('2 = ?', '1 + 1');
                       	this.mQuiz.mQuestionArray.push(question);
			this.setScoreNeeded(parseInt(this.mQuiz.mQuestionArray.length));
		}
	}
});
