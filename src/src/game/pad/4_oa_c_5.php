var g4_oa_c_5 = new Class(
{
Extends: NumberPad,
	initialize: function(application)
	{
       		this.parent(application);
	},


	createNumQuestion: function()
        {
                //question
                this.mNumQuestion = new Shape(240,50,155,95,this,"","","");
                this.mShapeArray.push(this.mNumQuestion);
                this.mNumQuestion.mCollidable = false;
                this.mNumQuestion.mCollisionOn = false;
        },

	showCorrectAnswerEnter: function()
        {
		this.parent();
                this.mShapeArray[1].setPosition(360,100);
		this.mShapeArray[1].setSize(250,100);
        },

	createQuestions: function()
        {
 		this.parent();

		var mult = 0;
		var add = 0;
		var exp = 0;
		var rand = 0;

		var num1 = 0;
		var num2 = 0;
		var num3 = 0;
		var num4 = 0;

		var varA = 0;
		var varB = 0;
		var varC = 0;

		this.mQuiz.resetQuestionArray();

		rand = Math.floor((Math.random()*3));

	    for (s = 0; s < this.mScoreNeeded; s++)
	    {	

		if (rand == 0)
		{	
				// pick number of digits (2 - 6)
				num1 = 1 + Math.floor((Math.random()*19));
				add = 1 + Math.floor((Math.random()*19));
				num2 = num1 + add;
				num3 = num2 + add;
				num4 = num3 + add;
				num5 = num4 + add;

		}
		if (rand == 1)
		{	
                 
				num1 = 1 + Math.floor((Math.random()*5));
				mult = 2 + Math.floor((Math.random()*4));
				num2 = num1 * mult;
				num3 = num2 * mult;
				num4 = num3 * mult;
				num5 = num4 * mult;
		}

		if (rand == 2)
		{	

				num1 = 1 + Math.floor((Math.random()*5));
				mult = 2 + Math.floor((Math.random()*4));
				add = 1 + Math.floor((Math.random()*5));
				num2 = (num1 * mult) + add;
				num3 = (num2 * mult) + add;
				num4 = (num3 * mult) + add;
				num5 = (num4 * mult) + add;

		}


		 this.mQuiz.mQuestionArray.push(new Question(' Type the next number in this sequence:<br><br> ' + num1 + ' , ' +  num2 + ' , ' + num3 + ' , ' + num4 + ' , ?', '' + num5));
	    }
                //buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));

                //random
                //this.mQuiz.randomize(10);
	}
});
