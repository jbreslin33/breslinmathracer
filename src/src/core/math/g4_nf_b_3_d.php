/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.3.d_1',4.1601,'4.nf.b.3.d','word problems - add 2 fractions with like denominators');
*/

var i_4_nf_b_3_d__1 = new Class(
{
Extends: TextItem,
   initialize: function(sheet)
   {
      this.parent(sheet);
      this.mType = '4.nf.b.3.d_1';


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
		var showAnswer;
		

			// get bottom number
			varB = 6 + Math.floor(Math.random()*22);

			// get top number
			max = Math.floor(varB/2);
			varA = 1 + Math.floor((Math.random()*(max-1)));

			varC = 1 + Math.floor((Math.random()*max));
			varD = varB;

			answer = varA + varC;
			answer = '' + answer + '/' + varD;

			showAnswer = varA + '/' +  varB + ' + ' + varC + '/' +  varD + ' = ' + answer;

			rand = Math.floor(Math.random()*4);

			if(rand == 0)
			{			
			question = 'Tammy filled a bucket with ' + varA + '/' +  varB + ' of a gallon of water. Later, she poured ' + varC + '/' +  varD + ' of a gallon of water into the bucket. How many gallons of water are in the bucket?';

			//question.mTipArray[0] = 'xxxxxxxxxxxxxxxxxxxx';
			}
			if(rand == 1)
			{			
			question ='John drove his car ' + varA + '/' +  varB + ' of a mile and stopped at a gas station. Then, he drove ' + varC + '/' +  varD + ' of a mile to his house. How many miles did he drive altogether?';
			}
			if(rand == 2)
			{			
			question = 'Katie went to the salon and had ' + varA + '/' +  varB + ' of an inch of hair cut off. The next day she went back and asked for another ' + varC + '/' +  varD + ' of an inch to be cut off. How many inches of hair did she have cut off in all?';
			}
			if(rand == 3)
			{			
			question = 'Of the pies that Mom and Pops Pie Shop sold last month, ' + varA + '/' +  varB + ' were blueberry pies and ' + varC + '/' +  varD + ' were blackberry pies. What fraction of the pies sold were either blueberry or blackberry?';
			}

		

			this.setQuestion(question);
      this.setAnswer('' + answer,0);

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


    //console.log(correctAnswer);

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
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.3.d_2',4.1602,'4.nf.b.3.d','word problems - subtract 2 fractions with like denominators');
*/

var i_4_nf_b_3_d__2 = new Class(
{
Extends: TextItem,
   initialize: function(sheet)
   {
      this.parent(sheet);
      this.mType = '4.nf.b.3.d_2';


			// get bottom number
			varB = 6 + Math.floor(Math.random()*22);

			// get top number
			varA = 2 + Math.floor(Math.random()*(varB-2));
			
			varC = 1 + Math.floor(Math.random()*(varA-1));
			//1 + Math.floor((Math.random()*max));
			varD = varB;

			answer = varA - varC;
			answer = '' + answer + '/' + varD;

			showAnswer = varA + '/' +  varB + ' - ' + varC + '/' +  varD + ' = ' + answer;
				
			rand = Math.floor(Math.random()*4);

			if(rand == 0)
			{			
			question = 'Bobby filled a bucket with ' + varA + '/' +  varB + ' of a gallon of water. Later, he poured out ' + varC + '/' +  varD + ' of a gallon of the water. How much water is in the bucket?';

			}
			if(rand == 1)
			{			
			question = 'At the market, Vicky bought ' + varA + '/' +  varB + ' of a pound of red apples and ' + varC + '/' +  varD + ' of a pound of green apples. How many more pounds of red apples did Vicky purchase?';
			}
			if(rand == 2)
			{			
			question = 'Planet X is ' + varA + '/' +  varB + ' of a light-year away from Earth. Planet Y is ' + varC + '/' +  varD + ' of a light-year away from Earth. How many light years farther away from earth is Planet X than Planet Y?';
			}
			if(rand == 3)
			{			
			question = 'Judy bought ' + varA + '/' +  varB + ' pounds of grapes. She gave ' + varC + '/' +  varD + ' of a pound to her sister. How many pounds of grapes did she have left?';
			}


		

			this.setQuestion(question);
      this.setAnswer('' + answer,0);

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


    //console.log(correctAnswer);

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
