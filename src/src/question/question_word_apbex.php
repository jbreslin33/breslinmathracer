var QuestionWord = new Class(
{

Extends: Question,
        initialize: function(question,answer)
        {
                this.parent(question,answer)
	},

  	makeXeApB: function(minX,maxX,minA,maxA,minB,maxB,textA,textB,textC)
        {
                var a = 0;
                var b = 0;
                var x = 100;
                var questionText = '';

                while (x > maxX || x < minX || a < minA || a > maxA || b < minB || b > maxB)
                {
                        a = Math.floor((Math.random()* parseInt(maxA - minA + 1)));
                        b = Math.floor((Math.random()* parseInt(maxB - minB + 1)));
                        x = a + b;
                }

                //okay we have a valid sum and plural addends
                questionText = textA;
                questionText = questionText + ' ' + a + ' ';
                questionText = questionText + textB;
                questionText = questionText + ' ' + b + ' ';
                questionText = questionText + textC;

                var question = new Question('' + questionText,'' + x);
                question.mTipArray[2] = 'a + b = x';
                question.mTipArray[3] = '' + x + ' = ' + a + ' + ' + b;
                return question;
        }
});
