var QuestionMoney = new Class(
{
Extends: Question,
		//Homer had 3 pennies, 4 nickels, 3 dimes, 3 quarters, and 3 dollars, how much money did Homer have?
  	//initialize: function(question,answer,minTotal,maxTotal,minPennies,maxPennies,minNickels,maxNickels,minDimes,maxDimes,minQuarters,maxQuarters,minDollars,maxDollars)
	//'Luke practiced from','till','how long did he practice for?' 
  	initialize: function(question,answer,textA,textB,textC,type)
        {
                this.parent(question,answer)
                
                var from = 0;
                var till = 0;
                var minutes = ;
		var hour = 0;
                var questionText = '';

                while (x > maxTotal || x < minTotal || from < minFrom || from > maxFrom || till < minTill || till > maxTill)
                {
                        pennies = Math.floor((Math.random()* parseInt(maxPennies - minPennies + 1)));
                       	nickels = Math.floor((Math.random()* parseInt(maxNickels - minNickels + 1)));
                       	dimes = Math.floor((Math.random()* parseInt(maxDimes - minDimes + 1)));
                       	quarters = Math.floor((Math.random()* parseInt(maxQuarters - minQuarters + 1)));
                       	dollars = Math.floor((Math.random()* parseInt(maxDollars - minDollars + 1)));
                       	x = pennies + nickels * 5 + dimes * 10 + quarters * 25 + dollars * 100;
                }
                
		//valid parameters so make the question...
                questionText = 'You have ';
                questionText = questionText + ' ' + pennies;
                questionText = questionText + ' pennies, ';
                questionText = questionText + nickels;
                questionText = questionText + ' nickels, ';
                questionText = questionText + dimes;
                questionText = questionText + ' dimes, ';
                questionText = questionText + quarters;
                questionText = questionText + ' quarters and ';
                questionText = questionText + dollars;
                questionText = questionText + ' dollars.';
                questionText = questionText + ' How much money do you have?';

		this.mQuestion = '' + questionText;
		
		var number = parseInt(x); 
		var decimal = number / 100;
		var twoPlacedFloat = parseFloat(decimal).toFixed(2)
		
		this.mAnswerArray[0] = '$' + twoPlacedFloat;

		//auto tips
                //this.mTipArray[2] = 'a + b = x';
                //this.mTipArray[3] = '' + a + ' + ' + b + ' = ' + x;
        }
});
