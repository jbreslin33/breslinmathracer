var QuestionTime = new Class(
{
/*
   //1
                var question = new QuestionTime('','','Graham started practicing soccer at','. He finished at','. How long in minutes did Graham practice?',0); 
                question.mTipArray[0] = 'Graham finish time + Graham start time = minutes Graham practiced';
                this.mQuiz.mQuestionArray.push(question);

                //2
                var question = new QuestionTime('','','Graham started practicing soccer at','. He practiced for','minutes. When time did he finish practicing?',0);
                question.mTipArray[0] = 'Graham start time + Graham practice = Graham finish time';
                this.mQuiz.mQuestionArray.push(question);

*/
Extends: Question,
  	initialize: function(question,answer,textA,textB,textC,type)
        {
                this.parent(question,answer)
                
                var fromMinute = 0;
                var tillMinute = 0;
                var minute = 99;
                var hour = Math.floor((Math.random()*12)+1);
                var questionText = '';

                while (minute < 1 || minute > 59)
                {
			minute = 99;
                        fromMinute = Math.floor((Math.random()*60)+1);
                        tillMinute = Math.floor((Math.random()*60)+1);
                       	minute = tillMinute - fromMinute;
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
		
		if (type == 0)
		{
 			questionText = '' + textA;
			questionText = questionText + ' ' + hour + ':' + fromMinute;
 			questionText = questionText + textB;
			questionText = questionText + ' ' + hour + ':' + tillMinute;
 			questionText = questionText + textC;
			this.mAnswerArray[0] = '' + minute;
		}
		if (type == 1)
		{
 			questionText = '' + textA;
			questionText = questionText + ' ' + hour + ':' + fromMinute;
 			questionText = questionText + textB;
			questionText = questionText + ' ' + minute;
 			questionText = questionText + textC;
			this.mAnswerArray[0] = '' + hour + ':' + tillMinute;
		}
                
		this.mQuestion = '' + questionText;
        }
});
