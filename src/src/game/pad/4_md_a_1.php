var g4_md_a_1 = new Class(
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

		var place1 = '';
		var place2 = '';

		var unit1 = '';
		var unit2 = '';
		var convert = '';
		var num2 = '';

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

		for (s = 0; s < this.mScoreNeeded; s++)
		{	

				rand = Math.floor(Math.random()*1);

				if(rand == 0)
				{
				   unit1 = 'grams';
				   unit2 = 'kilograms';
				   convert = 1000;

				   num2 = 1 + Math.floor(Math.random()*9);
				}
				
				if(rand == 1)
				{
				   unit1 = 'inches';
				   unit2 = 'feet';
				   convert = 12;

				   num2 = 1 + Math.floor(Math.random()*9);
				}

				if(rand == 2)
				{
				   unit1 = 'feet';
				   unit2 = 'yards';
				   convert = 3;

				   num2 = 1 + Math.floor(Math.random()*9);
				}

				if(rand == 3)
				{
				   unit1 = 'minute';
				   unit2 = 'hour';
				   convert = 60;

				   num2 = 1 + Math.floor(Math.random()*9);
				}
				
				if(rand == 4)
				{
				   unit1 = 'seconds';
				   unit2 = 'minute';
				   convert = 60;

				   num2 = 1 + Math.floor(Math.random()*9);
				}

				if(rand == 5)
				{
				   unit1 = 'days';
				   unit2 = 'weeks';
				   convert = 7;

				   num2 = 1 + Math.floor(Math.random()*9);
				}

				if(rand == 6)
				{
				   unit1 = 'ounces';
				   unit2 = 'pounds';
				   convert = 16;

				   num2 = 1 + Math.floor(Math.random()*9);
				}

				if(rand == 7)
				{
				   unit1 = 'centimeters';
				   unit2 = 'meters';
				   convert = 100;

				   num2 = 1 + Math.floor(Math.random()*9);
				}
				
				if(rand == 8)
				{
				   unit1 = 'cups';
				   unit2 = 'pints';
				   convert = 2;

				   num2 = 1 + Math.floor(Math.random()*9);
				}

				if(rand == 9)
				{
				   unit1 = 'pints';
				   unit2 = 'quarts';
				   convert = 2;

				   num2 = 1 + Math.floor(Math.random()*9);
				}

				if(rand == 10)
				{
				   unit1 = 'milliliters';
				   unit2 = 'liters';
				   convert = 1000;

				   num2 = 1 + Math.floor(Math.random()*9);
				}

				num1 = num2 * convert;

			rand = Math.floor(Math.random()*2);

			if (rand == 0)
			{
                        this.mQuiz.mQuestionArray.push(new Question('' + num2 + ' ' + unit2 + ' = ? ' + unit1, '' + num1));
			}

			if (rand == 1)
			{
                        this.mQuiz.mQuestionArray.push(new Question('' + num1 + ' ' + unit1 + ' = ? ' + unit2, '' + num2));
			}


		}
		
                //buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));

                //random
                this.mQuiz.randomize(30);
	}
});
