var WordProblems = new Class(
{
	initialize: function()
	{
	},
	
	getAdditionQuestion: function(maxsum)
	{
		var nameArray   = new Array();
		var objectArray = new Array();
		
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
		questionText = questionText + ' more toy cars. How many toy cars does Jose have now?';

		var question = new Question('' + questionText,'' + sum);
		return question;
	},

	getSubtractionQuestion: function(maxsum)
	{
		var nameArray   = new Array();
		var objectArray = new Array();
		
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
		questionText = questionText + ' toy cars. How many toy cars does Jose have now?';

		var question = new Question('' + questionText,'' + sum);
		return question;
	}
});
