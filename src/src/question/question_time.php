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
                       		x = tillMinute - fromMinute;
			}
                }

		if (fromMinute == 0)
		{
			fromMinute = '00';		
		}
		if (fromMinute == 1)
		{
			fromMinute = '01';		
		}
		if (fromMinute == 2)
		{
			fromMinute = '02';		
		}
		if (fromMinute == 3)
		{
			fromMinute = '03';		
		}
		if (fromMinute == 4)
		{
			fromMinute = '04';		
		}
		if (fromMinute == 5)
		{
			fromMinute = '05';		
		}
		if (fromMinute == 6)
		{
			fromMinute = '06';		
		}
		if (fromMinute == 7)
		{
			fromMinute = '07';		
		}
		if (fromMinute == 8)
		{
			fromMinute = '08';		
		}
		if (fromMinute == 9)
		{
			fromMinute = '09';		
		}
     
		if (tillMinute == 0)
                {
                        tillMinute = '00'; 
                }
                if (tillMinute == 1)
                {
                        tillMinute = '01'; 
                }
                if (tillMinute == 2)
                {
                        tillMinute = '02'; 
                }
                if (tillMinute == 3)
                {
                        tillMinute = '03'; 
                }
                if (tillMinute == 4)
                {
                        tillMinute = '04'; 
                }
                if (tillMinute == 5)
                {
                        tillMinute = '05';
                }
                if (tillMinute == 6)
                {
                        tillMinute = '06'; 
                }
                if (tillMinute == 7)
                {
                        tillMinute = '07';  
                }
                if (tillMinute == 8)
                {
                        tillMinute = '08'; 
                }
                if (tillMinute == 9)
                {
                        tillMinute = '09';
                }

 		questionText = '' + textA;
		questionText = questionText + ' ' + hour + ':' + fromMinute;
 		questionText = '' + textB;
		questionText = questionText + ' ' + hour + ':' + tillMinute;
 		questionText = '' + textC;
                
		this.mQuestion = '' + questionText;
		
		this.mAnswerArray[0] = '' + x;

		//auto tips
                //this.mTipArray[2] = 'a + b = x';
                //this.mTipArray[3] = '' + a + ' + ' + b + ' = ' + x;
        }
});
