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
                this.mThresholdTime = 60000;

                //input pad
                this.mInputPad = new ButtonChoicePad(application,application.mGame);

		this.mLastCorrectButtonNumber = 0;
	},

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

		while (this.mCorrectButtonNumber == this.mLastCorrectButtonNumber || this.mButtonSumA == this.mButtonSumB || this.mButtonSumA == this.mButtonSumC || this.mButtonSumB == this.mButtonSumC || this.mButtonSumA > 10 || this.mButtonSumB > 10 || this.mButtonSumC > 10)
		{
			this.mCorrectButtonNumber = Math.floor((Math.random()*3));	
			
			if (this.mCorrectButtonNumber == 0)
			{
				//A
				this.mButtonSumA = parseInt(this.mApplication.mLevel);  
				this.mInputPad.mButtonA.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getAnswer();
		
				//B	
				this.mButtonAddend1B      = Math.floor((Math.random()*11));	
				this.mButtonAddend2B      = Math.floor((Math.random()*11));	
				this.mButtonSumB          = parseInt(parseInt(this.mButtonAddend1B) + parseInt(this.mButtonAddend2B));	
				this.mInputPad.mButtonB.mMesh.innerHTML = this.mButtonAddend1B + ' + ' + this.mButtonAddend2B;
				
				//C
				this.mButtonAddend1C      = Math.floor((Math.random()*11));	
				this.mButtonAddend2C      = Math.floor((Math.random()*11));	
				this.mButtonSumC          = parseInt(parseInt(this.mButtonAddend1C) + parseInt(this.mButtonAddend2C));	
				this.mInputPad.mButtonC.mMesh.innerHTML = this.mButtonAddend1C + ' + ' + this.mButtonAddend2C;
			}
			if (this.mCorrectButtonNumber == 1)
			{
                        
                                //A
                                this.mButtonAddend1A      = Math.floor((Math.random()*11));
                                this.mButtonAddend2A      = Math.floor((Math.random()*11));
                                this.mButtonSumA          = parseInt(parseInt(this.mButtonAddend1A) + parseInt(this.mButtonAddend2A));
                                this.mInputPad.mButtonA.mMesh.innerHTML = this.mButtonAddend1A + ' + ' + this.mButtonAddend2A;
	                        
				//B
                                this.mButtonSumB = parseInt(this.mApplication.mLevel);
                                this.mInputPad.mButtonB.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getAnswer();

                                //C
                                this.mButtonAddend1C      = Math.floor((Math.random()*11));
                                this.mButtonAddend2C      = Math.floor((Math.random()*11));
                                this.mButtonSumC          = parseInt(parseInt(this.mButtonAddend1C) + parseInt(this.mButtonAddend2C));
                                this.mInputPad.mButtonC.mMesh.innerHTML = this.mButtonAddend1C + ' + ' + this.mButtonAddend2C;

			}
			if (this.mCorrectButtonNumber == 2)
			{

                                //A
                                this.mButtonAddend1A      = Math.floor((Math.random()*11));
                                this.mButtonAddend2A      = Math.floor((Math.random()*11));
                                this.mButtonSumA          = parseInt(parseInt(this.mButtonAddend1A) + parseInt(this.mButtonAddend2A));
                                this.mInputPad.mButtonA.mMesh.innerHTML = this.mButtonAddend1A + ' + ' + this.mButtonAddend2A;

				//B	
				this.mButtonAddend1B      = Math.floor((Math.random()*11));	
				this.mButtonAddend2B      = Math.floor((Math.random()*11));	
				this.mButtonSumB          = parseInt(parseInt(this.mButtonAddend1B) + parseInt(this.mButtonAddend2B));	
				this.mInputPad.mButtonB.mMesh.innerHTML = this.mButtonAddend1B + ' + ' + this.mButtonAddend2B;

				//C
                                this.mButtonSumC = parseInt(this.mApplication.mLevel);
                                this.mInputPad.mButtonC.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getAnswer();
			}
		}
		this.mLastCorrectButtonNumber = this.mCorrectButtonNumber;
	},

	//state overides 
 	showCorrectAnswer: function()
        {
                this.parent();
                this.mCorrectAnswerBar.mMesh.innerHTML = this.mApplication.mLevel + ' = ' + this.mQuiz.getQuestion().getAnswer();
        },

        showCorrectAnswerOutOfTime: function()
        {
                this.parent();
                this.mCorrectAnswerBar.mMesh.innerHTML = this.mApplication.mLevel + ' = ' + this.mQuiz.getQuestion().getAnswer();
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
		if (this.mApplication.mLevel == 3)
		{
                       	var question = new Question('3 = ?', '3 + 0');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('3 = ?', '0 + 3');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('3 = ?', '1 + 2');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('3 = ?', '2 + 1');
                       	this.mQuiz.mQuestionArray.push(question);
			this.setScoreNeeded(parseInt(this.mQuiz.mQuestionArray.length));
		}
		if (this.mApplication.mLevel == 4)
		{
                       	var question = new Question('4 = ?', '4 + 0');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('4 = ?', '0 + 4');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('4 = ?', '1 + 3');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('4 = ?', '3 + 1');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('4 = ?', '2 + 2');
                       	this.mQuiz.mQuestionArray.push(question);
			this.setScoreNeeded(parseInt(this.mQuiz.mQuestionArray.length));
		}
		if (this.mApplication.mLevel == 5)
		{
                       	var question = new Question('5 = ?', '5 + 0');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('5 = ?', '0 + 5');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('5 = ?', '1 + 4');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('5 = ?', '4 + 1');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('5 = ?', '2 + 3');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('5 = ?', '3 + 2');
                       	this.mQuiz.mQuestionArray.push(question);
			this.setScoreNeeded(parseInt(this.mQuiz.mQuestionArray.length));
		}
		if (this.mApplication.mLevel == 6)
		{
                       	var question = new Question('6 = ?', '6 + 0');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('6 = ?', '0 + 6');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('6 = ?', '1 + 5');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('6 = ?', '5 + 1');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('6 = ?', '2 + 4');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('6 = ?', '4 + 2');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('6 = ?', '3 + 3');
                       	this.mQuiz.mQuestionArray.push(question);
			this.setScoreNeeded(parseInt(this.mQuiz.mQuestionArray.length));
		}	
		if (this.mApplication.mLevel == 7)
		{
                       	var question = new Question('7 = ?', '7 + 0');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('7 = ?', '0 + 7');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('7 = ?', '1 + 6');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('7 = ?', '6 + 1');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('7 = ?', '2 + 5');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('7 = ?', '5 + 2');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('7 = ?', '3 + 4');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('7 = ?', '4 + 3');
                       	this.mQuiz.mQuestionArray.push(question);
			this.setScoreNeeded(parseInt(this.mQuiz.mQuestionArray.length));
		}
		if (this.mApplication.mLevel == 8)
		{
                       	var question = new Question('8 = ?', '8 + 0');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('8 = ?', '0 + 8');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('8 = ?', '1 + 7');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('8 = ?', '7 + 1');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('8 = ?', '2 + 6');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('8 = ?', '6 + 2');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('8 = ?', '3 + 5');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('8 = ?', '5 + 3');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('8 = ?', '4 + 4');
                       	this.mQuiz.mQuestionArray.push(question);
			this.setScoreNeeded(parseInt(this.mQuiz.mQuestionArray.length));
		}
		if (this.mApplication.mLevel == 9)
		{
                       	var question = new Question('9 = ?', '9 + 0');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('9 = ?', '0 + 9');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('9 = ?', '1 + 8');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('9 = ?', '8 + 1');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('9 = ?', '2 + 7');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('9 = ?', '7 + 2');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('9 = ?', '3 + 6');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('9 = ?', '6 + 3');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('9 = ?', '5 + 4');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('9 = ?', '4 + 5');
                       	this.mQuiz.mQuestionArray.push(question);
			this.setScoreNeeded(parseInt(this.mQuiz.mQuestionArray.length));
		}
		if (this.mApplication.mLevel == 10)
		{
                       	var question = new Question('10 = ?', '10 + 0');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('10 = ?', '0 + 10');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('10 = ?', '1 + 9');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('10 = ?', '9 + 1');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('10 = ?', '2 + 8');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('10 = ?', '8 + 2');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('10 = ?', '3 + 7');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('10 = ?', '7 + 3');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('10 = ?', '6 + 4');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('10 = ?', '4 + 6');
                       	this.mQuiz.mQuestionArray.push(question);
                       	var question = new Question('10 = ?', '5 + 5');
                       	this.mQuiz.mQuestionArray.push(question);
			this.setScoreNeeded(parseInt(this.mQuiz.mQuestionArray.length));
		}
	}
});
