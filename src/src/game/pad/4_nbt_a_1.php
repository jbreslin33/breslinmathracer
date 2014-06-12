var g4_nbt_a_1 = new Class(
{
Extends: NumberPad,
	initialize: function(application)
	{
       		this.parent(application);
	},


	createNumQuestion: function()
        {
                //question
                this.mNumQuestion = new Shape(270,50,195,5,this,"","","");
                this.mShapeArray.push(this.mNumQuestion);
                this.mNumQuestion.mCollidable = false;
                this.mNumQuestion.mCollisionOn = false;
        },

	showCorrectAnswerEnter: function()
        {
		this.parent();
                //this.mShapeArray[1].setPosition(200,200);
		this.mShapeArray[1].setSize(250,100);
        },

	

	createQuestions: function()
        {
 		this.parent();

		var varA = 0;
		var varB = 0;
		var varC = 0;

		var number = '';

		var ones = 0;
		var tens = 0;
		var hundreds = 0;
		var thousands = 0;

		var exp = 0;
		var answer = 0;
		var rand = 0;

		this.mQuiz.resetQuestionArray();

		for (s = 0; s < this.mScoreNeeded / 2; s++)
		{	
				varA = 1 + Math.floor(Math.random()*9);

				rand = 2 + Math.floor(Math.random()*3);

				if(rand == 2)
				{
				   varB = 'tens';
				   place1 = 2;
				}
				if(rand == 3)
				{
				   varB = 'hundreds';
				   place1 = 3;
				}
				if(rand == 4)
				{
				   varB = 'thousands';
				   place1 = 4;
				}

				if (varB == 'tens')
					rand = 1;
				if (varB == 'hundreds')
					rand = 1 + Math.floor(Math.random()*2);
				if (varB == 'thousands')
					rand = 1 + Math.floor(Math.random()*3);
				
				if(rand == 1)
				{
				   varC = 'ones';
				   place2 = 1;
				}
				if(rand == 2)
				{
				   varC = 'tens';
				   place2 = 2;
				}
				if(rand == 3)
				{
				   varC = 'hundreds';
				   place2 = 3;
				}
				if(rand == 4)
				{
				   varC = 'thousands';
				   place2 = 4;
				}

				exp = place1 - place2;

				// get start number based on digits
				answer = varA * Math.pow(10, exp);

			
                        this.mQuiz.mQuestionArray.push(new Question('' + varA + ' ' + varB + ' = ? ' + varC, '' + answer));
		}
		for (s = 0; s < this.mScoreNeeded / 2; s++)
		{
			
				
				rand = 1 + Math.floor((Math.random()*9));
					ones = rand;
				rand = 1 + Math.floor((Math.random()*9));
					tens = rand;
				rand = 1 + Math.floor((Math.random()*9));
					hundreds = rand;
				rand = 1 + Math.floor((Math.random()*9));
					thousands = rand;

				rand = 1 + Math.floor((Math.random()*4));

				if(rand == 1)
				{
				   varC = 'ones';
				   answer = ones;
				}
				if(rand == 2)
				{
				   varC = 'tens';
				   answer = tens;
				}
				if(rand == 3)
				{
				   varC = 'hundreds';
				   answer = hundreds;
				}
				if(rand == 4)
				{
				   varC = 'thousands';
				   answer = thousands;
				}

				number = '' + thousands + ',' + hundreds + tens + ones;


                        this.mQuiz.mQuestionArray.push(new Question('In the number ' + number + ' which digit is in the ' + varC + ' column?', '' + answer));
		}
                //buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));

                //random
                this.mQuiz.randomize(30);
	}
});
