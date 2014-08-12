var g4_md_a_2 = new Class(
{
Extends: NumberPad2Box,
	initialize: function(application)
	{
       		this.parent(application);
	},


	createNumQuestion: function()
        {
                //question
                this.mNumQuestion = new Shape(270,50,195,85,this,"","","");
                this.mShapeArray.push(this.mNumQuestion);
                this.mNumQuestion.mCollidable = false;
                this.mNumQuestion.mCollisionOn = false;
        },

	showCorrectAnswerEnter: function()
        {
		this.parent();
                //this.mShapeArray[1].setPosition(200,200);
		this.mShapeArray[1].setSize(250,200);

		
        },

	

	makeType1: function()
        {
		

		rand = Math.floor(Math.random()*12);

		if(rand == 0)
		{
			unit1 = 'grams';
			unit2 = 'kilograms';
			convert = 1000;

			num1 = convert + Math.floor(Math.random()*(convert*9));
		}

				num2 = Math.floor(num1/convert);
				remainder = num1 % convert;

				// make sure we have at least one of these smaller units
				if (remainder == 0)
				{
					remainder = 1 + Math.floor(Math.random()*(convert - 1));;
					num1 = num1 + remainder;	
				}																		

			this.mQuiz.mQuestionArray.push(new Question('' + num2 + ' ' + unit2 + ' ' + remainder + ' ' + unit1 + ' = ? ' + unit1, '' + num1));

	},

	// weight
	makeType2: function()
        {
		rand = Math.floor(Math.random()*1);

		// grams/kg - add
		if(rand == 0)
		{
			unit1 = 'grams';
			unit2 = 'kilograms';
			convert = 1000;
			num3 = 1 + Math.floor(Math.random()*4);
			num1 = 400 * num3;
			num2 = 600 * num3;

			question = new Question('Billy has a textbook that weighs ' + num1 + ' ' + unit1 + ' and a workbook that weighs '  + num2 + ' ' + unit1 + '. How many kilograms do his books weigh altogether?', '' + num3);

			this.mQuiz.mQuestionArray.push(question);
		}


		// kg/grams
		if(rand == 1)
		{
			unit1 = 'grams';
			unit2 = 'kilograms';
			convert = 1000;

			num2 = 2 + Math.floor(Math.random()*8);
			num1 = num2 * convert;

			question = new Question('Sally bought ' + num2 + ' ' + unit2 + ' of soil for her garden. How many grams of soil did she buy?', '' + num1);

			this.mQuiz.mQuestionArray.push(question);
		}

		// ounces/pounds - add
		if(rand == 2)
		{
			unit1 = 'ounces';
			unit2 = 'pounds';
			convert = 16;

			num2 = 2 + Math.floor(Math.random()*8);
			num3 = 2 + Math.floor(Math.random()*8);
			num1 = (num2 + num3) * convert;

			question = new Question('Tina needs ' + num2 + ' ' + unit2 + ' of sugar for her cookie recipe and ' + num3 + ' ' + unit2 + ' of sugar for her cupcake recipe. How many ounces of sugar does she need for both recipes?', '' + num1);

			this.mQuiz.mQuestionArray.push(question);
		}	

		// ounces/pounds - decimal
		if(rand == 3)
		{
			unit1 = 'ounces';
			unit2 = 'pounds';
			convert = 16;

			num2 = 2 + Math.floor(Math.random()*8);
			num3 = '.5';
			num1 = (num2 * convert) + (num3 * convert);

			question = new Question('Bill has a bowling ball that weighs ' + num2 + num3 + ' ' + unit2 + ' How many ounces does his bowling ball weigh?', '' + num1);

			this.mQuiz.mQuestionArray.push(question);
		}
	},	

	// distance
	makeType3: function()
        {
		rand = Math.floor(Math.random()*1);
						
		if(rand == 0)
		{
			unit1 = 'feet';
			unit2 = 'inches';
			convert = 12;

			num1 = 4 + Math.floor(Math.random()*3);
			num2 = 1 + Math.floor(Math.random()*11);
			num3 = num1 + Math.floor(Math.random()*(7 - num1));
			num4 = num2 + Math.floor(Math.random()*(12 - num2));

			answer1 = num3 - num1;
			answer2 = num4 - num2;

			question = new Question('Joey is ' + num1 + unit1 + ' ' + num2 + unit2 + ' tall. Patty is ' + num3 + unit1 + ' ' + num4 + unit2 + ' tall. How much taller is Patty than Joey?', '' + answer1);

			this.mQuiz.mQuestionArray.push(question);

			question.mAnswerArray.push(answer2);
			question.mHeadingArray.push('Feet');
			question.mHeadingArray.push('Inches');

		}

				
	},

	createQuestions: function()
        {
 		this.parent();

		var place1 = '';
		var place2 = '';

		var unit1 = '';
		var unit2 = '';
		var convert = 0;
		var num1 = 0;
		var num2 = 0;
		var num3 = 0;
		var num4 = 0;
		var remainder = 0;

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
			rand = Math.floor(Math.random()*2);

			//if(rand == 2)
				//this.makeType1();

			if(rand == 0 || rand == 1)
				this.makeType3();


		}

		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));

                //random
                //this.mQuiz.randomize(30);
	}		

		
	
});
