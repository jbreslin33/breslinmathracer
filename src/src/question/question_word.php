var QuestionWord = new Class(
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
8: a/b+c=x
9: 2(a+b)=x
10: x=(a-(b+b))/2
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
                
		if (type == 4)
                {
                        while (x > maxX || x < minX || a < minA || a > maxA || b < minB || b > maxB || a%b != 0 || a == b || a < b)
                        {
                                a = Math.floor((Math.random()* parseInt(maxA - minA + 1)));
                                b = Math.floor((Math.random()* parseInt(maxB - minB + 1)));
                                x = a / b;
                        }
                }

		if (type > 4 && type < 8)
		{
                	while (x > maxX || x < minX || a < minA || a > maxA || b < minB || b > maxB || c < minC | c > maxC)
                	{
                        	a = Math.floor((Math.random()* parseInt(maxA - minA + 1)));
                        	b = Math.floor((Math.random()* parseInt(maxB - minB + 1)));
                        	c = Math.floor((Math.random()* parseInt(maxC - minC + 1)));
				if (type == 5)
				{
                        		x = a + b + c;
				}
				if (type == 6)
				{
                        		x = a - b - c;
				}
				if (type == 7)
				{
                        		x = a * b + c;
				}
				else if (type == 9)
				{
                        		x = 2 * ( a + b );
				}
			}
                }
		
		if (type == 8)
                {
                        while (x > maxX || x < minX || a < minA || a > maxA || b < minB || b > maxB || a%b != 0 || a == b || a < b)
                        {
                                a = Math.floor((Math.random()* parseInt(maxA - minA + 1)));
                                b = Math.floor((Math.random()* parseInt(maxB - minB + 1)));
                        	c = Math.floor((Math.random()* parseInt(maxC - minC + 1)));
                        	x = a / b + c;
                        }
                }

                if (type == 9)
                {
			if (textD == '')
			{
                        	while (x > maxX || x < minX || a < minA || a > maxA || b < minB || b > maxB)
                        	{
                                	a = Math.floor((Math.random()* parseInt(maxA - minA + 1)));
                                	b = Math.floor((Math.random()* parseInt(maxB - minB + 1)));
                                	x = 2 * ( a + b );
                        	}
			}
			else
			{
                        	while (x > maxX || x < minX || a < minA || a > maxA || b < minB || b > maxB || c < minC || c > maxC)
                        	{
                                	a = Math.floor((Math.random()* parseInt(maxA - minA + 1)));
                                	b = Math.floor((Math.random()* parseInt(maxB - minB + 1)));
                                	c = Math.floor((Math.random()* parseInt(maxC - minC + 1)));
                                	x = a * ( b + c );
                        	}
			}
                }
  
		//10: x=(a-(b+b))/2
                if (type == 10) 
                {
                        while (x > maxX || x < minX || a < minA || a > maxA || b < minB || b > maxB || x%1 != 0)
                        {
                                a = Math.floor((Math.random()* parseInt(maxA - minA + 1)));
                                b = Math.floor((Math.random()* parseInt(maxB - minB + 1)));
                                x = (a - (2 * b))/2;
                        }
                }
	   	
		//valid parameters so make the question...
                questionText = textA;
                questionText = questionText + ' ' + a + ' ';
                questionText = questionText + textB;
                questionText = questionText + ' ' + b + ' ';
                questionText = questionText + textC;

		//if (type > 4 && type < 9)
		if (textD != '')
		{
                	questionText = questionText + ' ' + c + ' ';
                	questionText = questionText + textD;
		}

		this.mQuestion = '' + questionText;
		this.mAnswerArray[0] = '' + x;

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
                	this.mTipArray[2] = 'b - a = x';
                	this.mTipArray[3] = '' + b + ' - ' + a + ' = ' + x;
		}
		else if (type == 3)
		{
                	this.mTipArray[2] = 'a X b = x';
                	this.mTipArray[3] = '' + a + ' X ' + b + ' = ' + x;
		}
		else if (type == 4)
		{
                	this.mTipArray[2] = 'a / b = x';
                	this.mTipArray[3] = '' + a + ' / ' + b + ' = ' + x;
		}
		else if (type == 5)
		{
                	this.mTipArray[2] = 'a + b + c = x';
                	this.mTipArray[3] = '' + a + ' + ' + b + ' + ' +  c  + ' = ' + x;
		}
		else if (type == 6)
		{
                	this.mTipArray[2] = 'a - b - c = x';
                	this.mTipArray[3] = '' + a + ' - ' + b + ' - ' +  c  + ' = ' + x;
		}
		else if (type == 7)
		{
                	this.mTipArray[2] = 'a * b + c = x';
                	this.mTipArray[3] = '' + a + ' x ' + b + ' + ' +  c  + ' = ' + x;
		}
		else if (type == 8)
		{
                	this.mTipArray[2] = 'a / b + c = x';
                	this.mTipArray[3] = '' + a + ' / ' + b + ' + ' +  c  + ' = ' + x;
		}
		else if (type == 9)
		{
                	this.mTipArray[2] = 'P=2(L+W)';
                	this.mTipArray[3] = 'P=2(' + a + '+' + b + ')';
		}
        }
});
