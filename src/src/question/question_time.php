var QuestionMoney = new Class(
{
Extends: Question,
  	initialize: function(question,answer,textA,textB,textC,type)
        {
                this.parent(question,answer)
                
                var fromMinute = 0;
                var tillMinute = 0;
                var minute = 0;
                var rawMinute = 0;
                var hour = Math.floor(Math.random()*12)+1);
                var questionText = '';

                while (x < 1 || x > 59)
                {
                        fromMinute = Math.floor(Math.random()*60)+1);
                        tillMinute = Math.floor(Math.random()*60)+1);
			if (type == 0)
			{
                       		x = fromMinute + tillMinute;
			}
                }

		if (rawMinute == 0)
		{
			minute = '00';		
		}
		if (rawMinute == 1)
		{
			minute = '01';		
		}
		if (rawMinute == 1)
		{
			minute = '01';		
		}
		if (rawMinute == 1)
		{
			minute = '01';		
		}
		if (rawMinute == 1)
		{
			minute = '01';		
		}
		if (rawMinute == 1)
		{
			minute = '01';		
		}
		if (rawMinute == 1)
		{
			minute = '01';		
		}
		if (rawMinute == 1)
		{
			minute = '01';		
		}
		if (rawMinute == 1)
		{
			minute = '01';		
		}
		if (rawMinute == 1)
		{
			minute = '01';		
		}

 		questionText = '' + textA;
		questionText = questionText + ' ' + hour + ':' + ;
                
		this.mQuestion = '' + questionText;
		
		this.mAnswerArray[0] = '$' + twoPlacedFloat;

		//auto tips
                //this.mTipArray[2] = 'a + b = x';
                //this.mTipArray[3] = '' + a + ' + ' + b + ' = ' + x;
        }
});
