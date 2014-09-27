/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.3.c_1',4.1601,'4.nf.b.3.c','add 2 mixed numbers with like denominators');
*/

var i_4_nf_b_3_c__1 = new Class(
{
Extends: TextItem,
   initialize: function(sheet)
   {
      this.parent(sheet);
      this.mType = '4.nf.b.3.c_1';


		var varA = 0;
		var varB = 0;
		var varC = 0;
		var varD = 0;
		var varN = 0;


		var start = 0;
		var end = 0;
		var rand = 0;

		var question;
		var answer;
		var diff = 0;
		
			// get bottom number
			varB = 4 + Math.floor(Math.random()*9);

			// get top number
			max = Math.floor(varB/2);
			varA = 1 + Math.floor((Math.random()*(max-1)));

			varC = 1 + Math.floor((Math.random()*max));
			varD = varB;

			answerFrac = varA + varC;
			//answerFrac = '' + answerFrac + '/' + varD;
			answerFracString = '' + answerFrac + '/' + varD;
			answerFrac = answerFrac/varD;
			

			wholeA = 1 + Math.floor(Math.random()*9);
			wholeB = 1 + Math.floor(Math.random()*9);

			answerWhole = wholeA + wholeB;

			//answerTotal = '' + answerWhole + ' ' + answerFrac;
			answerTotal = answerWhole + answerFrac;
			this.mDecimalAnswer = answerTotal;
			answerTotalString = '' + answerWhole + ' ' + answerFracString;

			answer1 = answerTotal;

			mixA = '' + wholeA + ' ' + varA + '/' +  '' + varB;
			mixB = '' + wholeB + ' ' + varC + '/' +  '' + varD;

			question = '' + mixA + ' + ' +  mixB + ' =';

			this.setQuestion(question);
      this.setAnswer('' + answerTotalString,0);

      this.mQuestionLabel.setSize(220,50);
      this.mQuestionLabel.setPosition(255,145);
   },




/* overrode this function to allow user to enter fraction, improper fraction, decimal, mixed number, whole number - as long as it is correct */

	checkUserAnswer: function()
	{

			var str = '';
			var res = '';
			var whole;
			var frac;
			var res2;
			var decimal;
      var correctAnswer;
      var userAnswer;

			//console.log('' + this.mUserAnswer);

			str = '' + this.mUserAnswer;
			res = str.split(" ");

      // fraction or whole - no mixed number
			if (res.length == 1)
			{
				str = res[0].split("/");

        // fraction - else it's a whole and we just leave it as is
				if(str.length == 2)
				   res[0] = 1.0 * (str[0] * 1.0)/(str[1] * 1.0);

        // either way set this to zero so we don't get error
				res[1] = '0/1';

				
			}
			whole = res[0] * 1.0;
			frac = res[1];
			res2 = frac.split("/");

			if (res2.length == 1)
			{
				res2[1] = '1';
			}

			decimal = 1.0 * (res2[0] * 1.0)/(res2[1] * 1.0);
			userAnswer = (whole + decimal) * 1.0;
			
			//console.log(userAnswer);

			//str = this.mQuiz.getQuestion().mAnswerArray[0];
      str = this.mAnswerArray[0];
      res = str.split(" ");

      // fraction or whole - no mixed number
			if (res.length == 1)
			{
				str = res[0].split("/");

        // fraction - else it's a whole and we just leave it as is
				if(str.length == 2)
				   res[0] = 1.0 * (str[0] * 1.0)/(str[1] * 1.0);

        // either way set this to zero so we don't get error
				res[1] = '0/1';

				
			}
			whole = res[0] * 1.0;
			frac = res[1];
			res2 = frac.split("/");

			if (res2.length == 1)
			{
				res2[1] = '1';
			}

			decimal = 1.0 * (res2[0] * 1.0)/(res2[1] * 1.0);
			correctAnswer = (whole + decimal) * 1.0;

		correctAnswerFound = false;
		
		if (userAnswer == correctAnswer)
		{
			correctAnswerFound = true;	
		} 
	
		if (correctAnswerFound == false)
		{
			this.mSheet.setTypeWrong(this.mType);
		}
		return correctAnswerFound;
	}




});





/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.3.c_2',4.1602,'4.nf.b.3.c','subtract 2 mixed numbers with like denominators');
*/

var i_4_nf_b_3_c__2 = new Class(
{
Extends: TextItem,
   initialize: function(sheet)
   {
      this.parent(sheet);
      this.mType = '4.nf.b.3.c_2';


		var varA = 0;
		var varB = 0;
		var varC = 0;
		var varD = 0;
		var varN = 0;


		var start = 0;
		var end = 0;
		var rand = 0;

		var question;
		var answer;
		var diff = 0;
		
			// get bottom number
			varB = 4 + Math.floor(Math.random()*9);

			// get top number
			max = varB;

			varC = 1 + Math.floor((Math.random()*(max-1)));
			varA = varC + 1 + Math.floor((Math.random()*(max - varC - 1)));
			varD = varB;

			answerFrac = varA - varC;
			//answerFrac = '' + answerFrac + '/' + varD;
			answerFracString = '' + answerFrac + '/' + varD;
			answerFrac = answerFrac/varD;
			
			wholeB = 1 + Math.floor(Math.random()*9);
			wholeA = wholeB + 1 + Math.floor(Math.random()*(9 - wholeB));

			answerWhole = wholeA - wholeB;

			//answerTotal = '' + answerWhole + ' ' + answerFrac;
			answerTotal = answerWhole + answerFrac;
			this.mDecimalAnswer = answerTotal;
			answerTotalString = '' + answerWhole + ' ' + answerFracString;

			answer1 = answerTotal;

			mixA = '' + wholeA + ' ' + varA + '/' +  '' + varB;
			mixB = '' + wholeB + ' ' + varC + '/' +  '' + varD;

			question = '' + mixA + ' - ' +  mixB + ' =';

			this.setQuestion(question);
      this.setAnswer('' + answerTotalString,0);

      this.mQuestionLabel.setSize(220,50);
      this.mQuestionLabel.setPosition(255,145);
   },




/* overrode this function to allow user to enter fraction, improper fraction, decimal, mixed number, whole number - as long as it is correct */

	checkUserAnswer: function()
	{

			var str = '';
			var res = '';
			var whole;
			var frac;
			var res2;
			var decimal;
      var correctAnswer;
      var userAnswer;

			//console.log('' + this.mUserAnswer);

			str = '' + this.mUserAnswer;
			res = str.split(" ");

      // fraction or whole - no mixed number
			if (res.length == 1)
			{
				str = res[0].split("/");

        // fraction - else it's a whole and we just leave it as is
				if(str.length == 2)
				   res[0] = 1.0 * (str[0] * 1.0)/(str[1] * 1.0);

        // either way set this to zero so we don't get error
				res[1] = '0/1';

				
			}
			whole = res[0] * 1.0;
			frac = res[1];
			res2 = frac.split("/");

			if (res2.length == 1)
			{
				res2[1] = '1';
			}

			decimal = 1.0 * (res2[0] * 1.0)/(res2[1] * 1.0);
			userAnswer = (whole + decimal) * 1.0;
			
			//console.log(this.mUserAnswer);

			//str = this.mQuiz.getQuestion().mAnswerArray[0];
      str = this.mAnswerArray[0];
      res = str.split(" ");

      // fraction or whole - no mixed number
			if (res.length == 1)
			{
				str = res[0].split("/");

        // fraction - else it's a whole and we just leave it as is
				if(str.length == 2)
				   res[0] = 1.0 * (str[0] * 1.0)/(str[1] * 1.0);

        // either way set this to zero so we don't get error
				res[1] = '0/1';

				
			}
			whole = res[0] * 1.0;
			frac = res[1];
			res2 = frac.split("/");

			if (res2.length == 1)
			{
				res2[1] = '1';
			}

			decimal = 1.0 * (res2[0] * 1.0)/(res2[1] * 1.0);
			correctAnswer = (whole + decimal) * 1.0;

		correctAnswerFound = false;
		
		if (userAnswer == correctAnswer)
		{
			correctAnswerFound = true;	
		} 
	
		if (correctAnswerFound == false)
		{
			this.mSheet.setTypeWrong(this.mType);
		}
		return correctAnswerFound;
	}




});
//add
