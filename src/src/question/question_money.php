var QuestionMoney = new Class(
{
Extends: Question,
		//Homer had 3 pennies, 4 nickels, 3 dimes, 3 quarters, and 3 dollars, how much money did Homer have?
  	initialize: function(question,answer,minTotal,maxTotal,minPennies,maxPennies,minNickels,maxNickels,minDimes,maxDimes,minQuarters,maxQuarters,minDollars,maxDollars)
        {
                this.parent(question,answer)
                
		var a = 0;
                var b = 0;
                var c = 0;
                var x = 100;
                var questionText = '';

                while (x > maxX || x < minX || a < minA || a > maxA || b < minB || b > maxB)
                {
                       	a = Math.floor((Math.random()* parseInt(maxA - minA + 1)));
                       	b = Math.floor((Math.random()* parseInt(maxB - minB + 1)));
                       	x = a + b;
                }
                
		//valid parameters so make the question...
                questionText = textA;
                questionText = questionText + ' ' + a + ' ';
                questionText = questionText + textB;
                questionText = questionText + ' ' + b + ' ';
                questionText = questionText + textC;

		this.mQuestion = '' + questionText;
		this.mAnswerArray[0] = '' + x;

		//auto tips
                this.mTipArray[2] = 'a + b = x';
                this.mTipArray[3] = '' + a + ' + ' + b + ' = ' + x;
        }
});
