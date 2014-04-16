var QuestionMoney = new Class(
{
/*
types
0: a+b=x
1: a-b=x
2: b-a=x
3: a*b=x
4: a/b=x
5: a+b+c=x
6: a-b-c=x
7: a*b+c=x
*/
Extends: Question,
  	initialize: function(question,answer,minX,maxX,minA,maxA,minB,maxB,minC,maxC,textA,textB,textC,textD,type)
        {
                this.parent(question,answer)
                
		var a = 0;
                var b = 0;
                var c = 0;
                var x = 100;
                var questionText = '';

		if (type < 4)
		{
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
				else if (type == 2)
				{
					x = b - a;
				}
				else if (type == 3)
				{
                        		x = a * b;
				}
			}
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
		if (type == 0)
		{
                	this.mTipArray[2] = 'a + b = x';
                	this.mTipArray[3] = '' + a + ' + ' + b + ' = ' + x;
		}
        }
});
