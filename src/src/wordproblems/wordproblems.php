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
				addendA = Math.floor((Math.random()*5)+2);		
				addendB = Math.floor((Math.random()*5)+2);		
				addendC = Math.floor((Math.random()*5)+2);		
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
		var subtrahendA = 0;			
		var subtrahendB = 0;			
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
	},
  	
	getSubtractionQuestionUnknowAddend: function(maxSubtrahendA)
      	{ 
                var subtrahendA = 0;
                var subtrahendB = 0;
                var sum = 100;
                var questionText = '';

                while (subtrahendA > maxSubtrahendA || sum < 1 || subtrahendA == 0 || subtrahendA == 1 || subtrahendB == 0 || subtrahendB == 1)
                {
                        subtrahendB = Math.floor((Math.random()*10)+1);
                        subtrahendA = parseInt (subtrahendB + Math.floor((Math.random()*8)+1));
                        sum = parseInt(subtrahendA - subtrahendB);
                }
                //okay we have a valid sum and plural addends
                questionText = 'Subtract ';
                questionText = questionText + '' + subtrahendA;
                questionText = questionText + ' minus ';
                questionText = questionText + '' + subtrahendB;
                questionText = questionText + ' by finding the number that makes ';
                questionText = questionText + '' + subtrahendA;
                questionText = questionText + ' when added to ';
                questionText = questionText + '' + subtrahendB;
                questionText = questionText + '.';

                var question = new Question('' + questionText,'' + sum);
                return question;
        },

	getPlaceOnesQuestion: function(max)
	{
        	var varA = Math.floor((Math.random()*max));

		var amountOfTens = 0;
		var amountOfTens = 0;

		if (varA < 10)
		{
			amountOfTens = 0;
		}
		if (varA >= 10 && varA < 20)
		{
			amountOfTens = 1;
		}
		if (varA >= 20 && varA < 30)
		{
			amountOfTens = 2;
		}
		if (varA >= 30 && varA < 40)
		{
			amountOfTens = 3;
		}
		if (varA >= 40 && varA < 50)
		{
			amountOfTens = 4; 
		}
		if (varA >= 50 && varA < 60)
		{
			amountOfTens = 5; 
		}
		if (varA >= 60 && varA < 70)
		{
			amountOfTens = 6; 
		}
		if (varA >= 70 && varA < 80)
		{
			amountOfTens = 7; 
		}
		if (varA >= 80 && varA < 90)
		{
			amountOfTens = 8; 
		}
		if (varA >= 90 && varA < 100)
		{
			amountOfTens = 9; 
		}

                var questionText = '';

                questionText = questionText + varA + ' has ';
		questionText = questionText + '' + amountOfTens + ' tens and '; 
		
			

	},
	getPlaceTensQuestion: function(max)
	{

	}
});
