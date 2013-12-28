var WordProblems = new Class(
{
	initialize: function()
	{
	},
	
	getAdditionQuestion: function(maxsum,addends)
	{
		if (addends == 2)
		{
			var addendA = 0;			
			var addendB = 0;			
			var sum = 100;
			var questionText = '';

			while (sum > maxsum || addendA == 0 || addendA == 1 || addendB == 0 || addendB == 1)
			{
				addendA = Math.floor((Math.random()*20));		
				addendB = Math.floor((Math.random()*20));		
				sum = addendA + addendB;		
			}
			//okay we have a valid sum and plural addends
			questionText = 'Jim had '; 	
			questionText = questionText + '' + addendA; 	
			questionText = questionText + ' toy cars. He found ';
			questionText = questionText + '' + addendB; 	
			questionText = questionText + ' more toy cars. How many toy cars does Jim have now?';

			var question = new Question('' + questionText,'' + sum);
			return question;
		}

		if (addends == 3)
		{
			var addendA = 0;			
			var addendB = 0;			
			var addendC = 0;			
			var sum = 100;
			var questionText = '';

			while (sum > maxsum || addendA == 0 || addendA == 1 || addendB == 0 || addendB == 1 || addendC == 0 || addendC == 1)
			{
				addendA = Math.floor((Math.random()*20));		
				addendB = Math.floor((Math.random()*20));		
				addendC = Math.floor((Math.random()*20));		
				sum = addendA + addendB + addendC;		
			}
			//okay we have a valid sum and plural addends
			questionText = 'Jim had '; 	
			questionText = questionText + '' + addendA; 	
			questionText = questionText + ' toy cars. He found ';
			questionText = questionText + '' + addendB; 	
			questionText = questionText + ' more toy cars. Then his Mom gave him '
			questionText = questionText + '' + addendC; 	
			questionText = questionText + ' more toy cars. How many toy cars does Jim have now?';

			var question = new Question('' + questionText,'' + sum);
			return question;
		}
	},

	getSubtractionQuestion: function(maxsum)
	{
		var addendA = 0;			
		var addendB = 0;			
		var sum = 100;
		var questionText = '';

		while (sum > maxsum || sum < 1 || subtrahendA == 0 || subtrahendA == 1 || subtrahendB == 0 || subtrahendB == 1)
		{
			subtrahendB = Math.floor((Math.random()*8)+1);		
			subtrahendA = parseInt (subtrahendB + Math.floor((Math.random()*5)+1));		
			sum = parseInt(subtrahendA - subtrahendB);		
		}
		//okay we have a valid sum and plural addends
		questionText = 'Jim had '; 	
		questionText = questionText + '' + subtrahendA; 	
		questionText = questionText + ' toy cars. He gives away ';
		questionText = questionText + '' + subtrahendB; 	
		questionText = questionText + ' toy cars. How many toy cars does Jim have now?';

		var question = new Question('' + questionText,'' + sum);
		return question;
	}
});
