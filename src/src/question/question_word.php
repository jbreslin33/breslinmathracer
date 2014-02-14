var QuestionWord = new Class(
{
/*
types
0: a+b=x
1: a-b=x
*/
Extends: Question,
  	initialize: function(question,answer,minX,maxX,minA,maxA,minB,maxB,textA,textB,textC,type)
        {
                this.parent(question,answer)
                
		var a = 0;
                var b = 0;
                var x = 100;
                var questionText = '';

                while (x > maxX || x < minX || a < minA || a > maxA || b < minB || b > maxB)
                {
                        a = Math.floor((Math.random()* parseInt(maxA - minA + 1)));
                        b = Math.floor((Math.random()* parseInt(maxB - minB + 1)));
			if (type == 0)
			{
                        	x = a + b;
			}
			else if (type == 1)
			{
				x = a - b;
			}
			else if (type == 3)
			{
                        	x = a * b;
			}
                }
		
		//valid parameters so make the question...
                questionText = textA;
                questionText = questionText + ' ' + a + ' ';
                questionText = questionText + textB;
                questionText = questionText + ' ' + b + ' ';
                questionText = questionText + textC;

		this.mQuestion = '' + questionText;
		this.mAnswer = '' + x;

		//auto tips
		if (type == 0)
		{
                	this.mTipArray[2] = 'a + b = x';
                	this.mTipArray[3] = '' + a + ' + ' + b + ' = ' + x;
		}
		else if (type == 1)
		{
                	this.mTipArray[2] = 'a - b = x';
                	this.mTipArray[3] = '' + a + ' - ' + b + ' = ' + x;
		}
		else if (type == 2)
		{
                	this.mTipArray[2] = 'a X b = x';
                	this.mTipArray[3] = '' + a + ' X ' + b + ' = ' + x;
		}
        }
});
