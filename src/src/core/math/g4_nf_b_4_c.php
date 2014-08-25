/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.4.c_1',4.1801,'4.nf.b.4.c','Multiply fractions by whole numbers - word problems');
*/

var i_4_nf_b_4_c__1 = new Class(
{
Extends: TextItem,
   initialize: function(sheet)
   {
      this.parent(sheet);
      this.mType = '4.nf.b.4.c_1';


		var varA = 0;
		var varB = 0;
		var varC = 0;
		var varD = 0;
		var varN = 0;


		var max = 0;
		var remainder = 0;
		var rand = 0;
		var top = 0;
		var bottom = 0;
		var whole = 0;

		var question;
		var answer;
		var answer1;
		var answer2;
		var answer3;
		var equation;
		var showAnswer;

			// get top number
			varA = 1 + Math.floor(Math.random()*7);

			// get bottom number
			varB = varA + 1 + Math.floor(Math.random()*(9 - varA));

			// get whole number
			varC = 3 + Math.floor((Math.random()*7));

			//varA = 1;
			//varB = 4;
			//varC = 2;

			varD = varB;

			// numerator of improper fraction
			top = varA * varC;
			//whole number part of mixed number
			whole = Math.floor(top/varB);
			// numerator of mixed number
			remainder = top % varB;

			//equation used to solve problem
			equation = '' + varA + '/' + varB + ' * ' + varC;
			// answer in improper fraction form
			answer1 = ' = ' + top + '/' + varB;

			// are we dealing with regular fraction or mixed number
			// answer2 is answer in fraction or mixed # form - not improper
			if (whole == 0)
				answer2 = '';
			else
			{
			   if (remainder == 0)
				answer2 = ' = ' + whole;
			   else
				answer2 = ' = ' + whole + ' ' + remainder + '/' + varB;
			}

			// is this a whole # answer or a mixed #
			if (remainder > 0)
			{
			   max = Math.floor(remainder/2);

			   success = false;
			   var n = remainder;
			   var a = 0;
			   top = remainder;
			   bottom = varB;

			   // try to reduce fraction part
			   do {
   			 	    a = remainder % n;

				      if (a == 0)
				      {
    				     a = varB % n;

				         if (a == 0)
				         {
					          top = remainder/n;
					          bottom = varB/n;
					          success = true;
				         }
				      }
				    n = n - 1;
			   }
			   while (n > 1 && success == false);
				
			   // answer3 is final answer in simplest form				
			   if (whole == 0)
				answer3 = ' = ' + top + '/' +  bottom;
			   else
			        answer3 = ' = ' + whole + ' ' + top + '/' +  bottom;

			}
			else
			   answer3 = ' = ' + whole;

			if (answer3 == answer2 || answer3 == answer1)
				answer3 = '';

			top = varA * varC;

			// this is what we send in to question class as the anwer in raw form
			answer = '' + top + '/' + varB;

			// show how we got to final answer
			showAnswer = '' + equation + answer1 + answer2 + answer3;

			rand = Math.floor(Math.random()*9);



			if(rand == 0)
			{			
			question = 'Peter owns ' + varC + ' acres of farmland. He grows corn on ' + varA + '/' + varB + ' of the land. On how many acres of land does Peter grow corn?';
			}
			if(rand == 1)
			{			
			question = 'Jenny had ' + varC + ' pounds of strawberries. Jenny let her friend Doris eat ' + varA + '/' + varB + ' of the strawberries. How many pounds of strawberries did Doris eat?';
			}
			if(rand == 2)
			{			
			question = 'Kwan operates an orange juice stand. On Monday he used ' + varC + ' bags of oranges. On Tuesday he used ' + varA + '/' + varB + ' as many oranges as on Monday. How many bags of oranges did Kwan use on Tuesday?';
			}
			if(rand == 3)
			{			
			question = 'Pedro has a lemon cookie recipe that calls for ' + varA + '/' +  varB + ' of a cup of sugar. How much sugar would Pedro use to make ' + varC + ' batches of cookies?';
			}




			if(rand == 4)
			{			
			question = 'Tina is making calzones to sell at her restaurant. She starts with ' + varC + ' cans of tomato sauce and then uses ' + varA + '/' + varB + ' of the cans for the first batch of calzones. How many cans of tomato sauce does Tina use for the first batch of calzones?';
			}
			if(rand == 5)
			{			
			question = 'A factory makes sheets of metal that are ' + varA + '/' +  varB + ' of an inch thick. If a worker at the factory makes a stack of ' + varC + ' of the sheets, how many inches thick will the stack be?';
			}
			if(rand == 6)
			{			
			question = 'Yesterday, a doughnut shop sold ' + varC + ' times as many chocolate doughnuts as cinnamon doughnuts. If they sold ' + varA + '/' + varB + ' of a tray of cinnamon doughnuts, how many trays of chocolate doughnuts did they sell?';
			}
			if(rand == 7)
			{			
			question = 'Tracy made strawberry jam and raspberry jam. She made enough strawberry jam to fill ' + varA + '/' +  varB + ' of a jar. If she made ' + varC + ' times as much raspberry jam as strawberry jam, how many jars will the raspberry jam fill?';
			}
			if(rand == 8)
			{			
			question = 'Carey uses ' + varA + '/' +  varB + ' of a cup of vinegar in her salad dressing recipe. How many cups of vinegar would Carey use to make ' + varC + ' recipes?';
			}

  var test = new Fraction(8,10,true);	
		
	//console.log(test.getString());

			this.setQuestion(question);
      this.setAnswer('' + answer,0);

      this.mQuestionLabel.setSize(220,50);
      this.mQuestionLabel.setPosition(175,105);

      this.mShowAnswer = showAnswer;
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
	},



 showCorrectAnswer: function()
        {
		if (this.mCorrectAnswerLabel)
		{
			var answer = '';
			for (i=0; i < this.mAnswerArray.length; i++)	
			{
				if (i == 0)
				{
					answer = answer + '' + this.getAnswer();		
				}
				else
				{
					answer = answer + ' OR ' + this.getAnswer(i);		
				}
			}
			this.mCorrectAnswerLabel.setText('CORRECT ANSWER: ' +  this.mShowAnswer); 
			this.mCorrectAnswerLabel.setVisibility(true);

      this.mCorrectAnswerLabel.setSize(350, 50);
      this.mCorrectAnswerLabel.setPosition(525,200); //175, 105   100,50,425,200
		}
		this.hideAnswerInputs();
		this.showUserAnswer();
        }


});



//add
