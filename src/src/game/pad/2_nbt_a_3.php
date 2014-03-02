var g2_nbt_a_3 = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);

                this.questionText = '';
                this.answerText = '';

                this.onesText = ''; 
                this.tensText = ''; 
                this.hundredsText = '';

		this.randomHundreds = 0;
		this.randomTens = 0;
		this.randomOnes = 0;
	},
	
	createInput: function()
	{
		this.parent();
		this.mNumAnswer.setSize(200,50);
		this.mNumAnswer.setPosition(375,100);
	},

	createNumQuestion: function()
	{
		this.parent();
		this.mNumQuestion.setPosition(590,140);
		this.mNumQuestion.setSize(200,200);
	},
       
	showCorrectAnswerEnter: function()
        {
		this.parent(); 
		this.mShapeArray[1].setPosition(400,175);
		this.mShapeArray[1].setSize(200,200);
        },
 
	outOfTimeEnter: function()
        {
		this.parent(); 
		this.mShapeArray[1].setPosition(400,175);
		this.mShapeArray[1].setSize(200,200);
        },

	setNameForm: function()
	{
        	//hundreds
                if (this.randomHundreds == 1)
                {
                	this.hundredsText = 'one hundred ';
                }
                if (this.randomHundreds == 2)
                {
                	this.hundredsText = 'two hundred ';
                }
               	if (this.randomHundreds == 3)
                {
                	this.hundredsText = 'three hundred ';
                }
                if (this.randomHundreds == 4)
                {
                	this.hundredsText = 'four hundred ';
                }
               	if (this.randomHundreds == 5)
                {
                	this.hundredsText = 'five hundred ';
                }
                if (this.randomHundreds == 6)
                {
                	this.hundredsText = 'six hundred ';
                }
                if (this.randomHundreds == 7)
                {
                	this.hundredsText = 'seven hundred ';
                }
                if (this.randomHundreds == 8)
                {
                	this.hundredsText = 'eight hundred ';
                }
                if (this.randomHundreds == 9)
                {
                	this.hundredsText = 'nine hundred ';
                }

                //tens
                if (this.randomTens == 1)
                {
                	if (this.randomOnes == 0)
                        {
                        	this.tensText = 'ten';
                        }
                        if (this.randomOnes == 1)
                        {
                        	this.tensText = 'eleven';
                        }
                        if (this.randomOnes == 2)
                        {
                        	this.tensText = 'twelve';
                        }
                        if (this.randomOnes == 3)
                        {
                        	this.tensText = 'thirteen';
                        }
                        if (this.randomOnes == 4)
                        {
                        	this.tensText = 'fourteen';
                        }
                        if (this.randomOnes == 5)
                        {
                        	this.tensText = 'fifteen';
                        }
                        if (this.randomOnes == 6)
                        {
                        	this.tensText = 'sixteen';
                        }
                        if (this.randomOnes == 7)
                        {
                        	this.tensText = 'seventeen';
                        }
                        if (this.randomOnes == 8)
                        {
                        	this.tensText = 'eighteen';
                        }
                        if (this.randomOnes == 9)
                        {
                        	this.tensText = 'nineteen';
                        }
		}
                else if (this.randomTens > 1 || this.randomTens == 0)
                {
                	if (this.randomTens == 2)
                        {
                        	this.tensText = 'twenty ';
                        }
                        if (this.randomTens == 3)
                        {
                        	this.tensText = 'thirty ';
                        }
                        if (this.randomTens == 4)
                        {
                        	this.tensText = 'forty ';
                        }
                        if (this.randomTens == 5)
                        {
                        	this.tensText = 'fifty ';
                        }
                        if (this.randomTens == 6)
                        {
                        	this.tensText = 'sixty ';
                        }
                        if (this.randomTens == 7)
                        {
                        	this.tensText = 'seventy ';
                        }
                        if (this.randomTens == 8)
                        {
                        	this.tensText = 'eighty ';
                        }
                        if (this.randomTens == 9)
                        {
                        	this.tensText = 'ninety ';
                        }

                        //ones
                        if (this.randomOnes == 1)
                        {
                        	this.onesText = 'one ';
                        }
                        if (this.randomOnes == 2)
                        {
                        	this.onesText = 'two ';
                        }
                        if (this.randomOnes == 3)
                        {
                        	this.onesText = 'three ';
                        }
                        if (this.randomOnes == 4)
                        {
                        	this.onesText = 'four ';
                        }
                        if (this.randomOnes == 5)
                        {
                        	this.onesText = 'five';
                        }
                        if (this.randomOnes == 6)
                        {
                        	this.onesText = 'six';
                        }
                        if (this.randomOnes == 7)
                        {
                        	this.onesText = 'seven';
                        }
                        if (this.randomOnes == 8)
                        {
                        	this.onesText = 'eight';
                        }
                        if (this.randomOnes == 9)
                        {
                        	this.onesText = 'nine';
                        }
		}
	},

	createQuestions: function()
        {
		this.parent();

		//just the question array reset
		this.mQuiz.resetQuestionArray();

		//A name form to number form
		//B name form to expanded form
		//C number form to expanded form
		//C number form to name form ----prob too dificult??? 

		var totalA = 0;
		var totalB = 0;
		var totalC = 5;

		while(totalA < this.mScoreNeeded * .2 || totalB < this.mScoreNeeded * .2 || totalC < this.mScoreNeeded * .2) 
		{
			this.mQuiz.resetQuestionArray();

			//loop thru and make potential questions
			for (s = 0; s < this.mScoreNeeded; s++)
			{	
				var randomChance = Math.floor((Math.random()*2));		

				this.randomOnes     = Math.floor((Math.random()*10));		
				this.randomTens     = Math.floor((Math.random()*10));		
				this.randomHundreds = Math.floor((Math.random()*10));		

				var randomNumber   = parseInt((this.randomOnes * 1) + (this.randomTens * 10) + (this.randomHundreds * 100));	

				this.questionText = '';

				this.onesText = '';
				this.tensText = '';
				this.hundredsText = '';

				//a name form to number form
				if (randomChance == 0)
				{
					this.setNameForm();
 					this.questionText = 'Write in numerical form: '; 
					this.answerText = '' + randomNumber;

					var question = new Question('' + this.questionText + this.hundredsText + '' + this.tensText + '' + this.onesText, '' + this.answerText);
					this.mQuiz.mQuestionArray.push(question);
					
					totalA++; 
				}
				if (randomChance == 1)
				{
					this.setNameForm();
 					this.questionText = 'Write in expanded form: '; 
	
					if (this.hundredsText != '')
					{
						if (this.tensText != '')
						{
							this.answerText = '' + parseInt(this.randomHundreds*100) + '+';
						}
						else
						{
							this.answerText = '' + parseInt(this.randomHundreds*100);
						}
					}
					if (this.tensText != '')
					{
						if (this.onesText != '')
						{
							this.answerText = '' + this.answerText + parseInt(this.randomTens*10) + '+';
						}
						else
						{
							this.answerText = '' + this.answerText + parseInt(this.randomTens*10);
						}
					}
					if (this.onesText != '')
					{
						this.answerText = '' + this.answerText + this.randomOnes;
					}


					var question = new Question('' + this.questionText + this.hundredsText + '' + this.tensText + '' + this.onesText, '' + this.answerText);
					this.mQuiz.mQuestionArray.push(question);
					
					totalB++;
				}
			}
		}
	}
});
