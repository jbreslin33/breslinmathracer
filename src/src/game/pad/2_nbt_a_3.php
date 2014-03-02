var g2_nbt_a_3 = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);
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
		var totalB = 5;
		var totalC = 5;

		while(totalA < this.mScoreNeeded * .2 || totalB < this.mScoreNeeded * .2 || totalC < this.mScoreNeeded * .2) 
		{
			this.mQuiz.resetQuestionArray();

			//loop thru and make potential questions
			for (s = 0; s < this.mScoreNeeded; s++)
			{	
				var randomChance = Math.floor((Math.random()*3));		
				randomChance = 0;		
				var randomOnes     = Math.floor((Math.random()*10));		
				var randomTens     = Math.floor((Math.random()*10));		
				var randomHundreds = Math.floor((Math.random()*10));		
				var randomNumber   = parseInt((randomOnes * 1) + (randomTens * 10) + (randomHundreds * 100));	
				var onesText = '';
				var tensText = '';
				var hundredsText = '';

				//a name form to number form
				if (randomChance == 0)
				{
					//hundreds
					if (randomHundreds == 0)
					{
					}
					if (randomHundreds == 1)
					{
						hundredsText = 'one hundred ';
					}
					if (randomHundreds == 2)
					{
						hundredsText = 'two hundred ';
					}
					if (randomHundreds == 3)
					{
						hundredsText = 'three hundred ';
					}
					if (randomHundreds == 4)
					{
						hundredsText = 'four hundred ';
					}
					if (randomHundreds == 5)
					{
						hundredsText = 'five hundred ';
					}
					if (randomHundreds == 6)
					{
						hundredsText = 'six hundred ';
					}
					if (randomHundreds == 7)
					{
						hundredsText = 'seven hundred ';
					}
					if (randomHundreds == 8)
					{
						hundredsText = 'eight hundred ';
					}
					if (randomHundreds == 9)
					{
						hundredsText = 'nine hundred ';
					}
		
					//tens	
					if (randomTens == 1)
					{
						if (randomOnes == 0)
						{
							randomOnes = 0;	
							tensText = 'ten';		
						}
						if (randomOnes == 1)
						{
							randomOnes = 0;	
							tensText = 'eleven';		
						}
						if (randomOnes == 2)
						{
							randomOnes = 0;	
							tensText = 'twelve';		
						}
						if (randomOnes == 3)
						{
							randomOnes = 0;	
							tensText = 'thirteen';		
						}
						if (randomOnes == 4)
						{
							randomOnes = 0;	
							tensText = 'fourteen';		
						}
						if (randomOnes == 5)
						{
							randomOnes = 0;	
							tensText = 'fifteen';		
						}
						if (randomOnes == 6)
						{
							randomOnes = 0;	
							tensText = 'sixteen';		
						}
						if (randomOnes == 7)
						{
							randomOnes = 0;	
							tensText = 'seventeen';		
						}
						if (randomOnes == 8)
						{
							randomOnes = 0;	
							tensText = 'eighteen';		
						}
						if (randomOnes == 9)
						{
							randomOnes = 0;	
							tensText = 'nineteen';		
						}
					}
					if (randomTens == 2)
					{
						tensText = 'twenty ';	
					}
					if (randomTens == 3)
					{
						tensText = 'thirty ';	
					}
					if (randomTens == 4)
					{
						tensText = 'forty ';	
					}
					if (randomTens == 5)
					{
						tensText = 'fifty ';	
					}
					if (randomTens == 6)
					{
						tensText = 'sixty ';	
					}
					if (randomTens == 7)
					{
						tensText = 'seventy ';	
					}
					if (randomTens == 8)
					{
						tensText = 'eighty ';	
					}
					if (randomTens == 9)
					{
						tensText = 'ninety ';	
					}
			
					//ones	
					if (randomOnes == 1)
					{
						onesText = 'one';	
					}
					if (randomOnes == 2)
					{
						onesText = 'two';	
					}
					if (randomOnes == 3)
					{
						onesText = 'three';	
					}
					if (randomOnes == 4)
					{
						onesText = 'four';	
					}
					if (randomOnes == 5)
					{
						onesText = 'five';	
					}
					if (randomOnes == 6)
					{
						onesText = 'six';	
					}
					if (randomOnes == 7)
					{
						onesText = 'seven';	
					}
					if (randomOnes == 8)
					{
						onesText = 'eight';	
					}
					if (randomOnes == 9)
					{
						onesText = 'nine';
					}
					totalA++;
				}
			var question = new Question('Write in numerical form: ' + hundredsText + '' + tensText + '' + onesText, '' + randomNumber);
			this.mQuiz.mQuestionArray.push(question);
			}
		}
	}
});
