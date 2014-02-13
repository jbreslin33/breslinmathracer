var WordProblems = new Class(
{
	initialize: function()
	{
	
	},
	
	//k.oa.a.2
	k_oa_a_2_A: function()
	{
        	var addendA = 0;
                var addendB = 0;
		var maxsum = 9; 
                var sum = 100;
                var questionText = '';

                while (sum > maxsum || addendA == 0 || addendA == 1 || addendB == 0 || addendB == 1)
                {
                	addendA = Math.floor((Math.random()*20));
                        addendB = Math.floor((Math.random()*20));
                        sum = addendA + addendB;
                }
                //okay we have a valid sum and plural addends
                questionText = 'Josh had ';
                questionText = questionText + '' + addendA;
                questionText = questionText + ' toy cars. His friend Matt brings ';
                questionText = questionText + '' + addendB;
                questionText = questionText + ' toy cars to play with Josh. How many cars do the boys have to play with now?';

                var question = new Question('' + questionText,'' + sum);
                return question;
	},

	k_oa_a_2_B: function()
	{
        	var addendA = 0;
                var addendB = 0;
		var maxsum = 9; 
                var sum = 100;
                var questionText = '';

                while (sum > maxsum || addendA == 0 || addendA == 1 || addendB == 0 || addendB == 1)
                {
                        addendA = Math.floor((Math.random()*20));
                        addendB = Math.floor((Math.random()*20));
                        sum = addendA + addendB;
                }
                //okay we have a valid sum and plural addends
                questionText = 'Carlos had ';
                questionText = questionText + '' + addendA;
                questionText = questionText + ' books about dinosaurs. He got ';
                questionText = questionText + '' + addendB;
                questionText = questionText + ' more books about dinosaurs from the library. How many dinosaur books does Carlos have now?';

                var question = new Question('' + questionText,'' + sum);
                return question;
	},
	
	k_oa_a_2_C: function()
	{
        	var addendA = 0;
                var addendB = 0;
		var maxsum = 9; 
                var sum = 100;
                var questionText = '';

                while (sum > maxsum || addendA == 0 || addendA == 1 || addendB == 0 || addendB == 1)
                {
                        addendA = Math.floor((Math.random()*20));
                        addendB = Math.floor((Math.random()*20));
                        sum = addendA + addendB;
                }
                //okay we have a valid sum and plural addends
                questionText = 'Nicole had ';
                questionText = questionText + '' + sum;
                questionText = questionText + ' stuffed animals. She put ';
                questionText = questionText + '' + addendA;
                questionText = questionText + ' of them in the chair for the tea party. She left the rest of them on the bed. How many stuffed animals did Nicole leave on the bed?';

                var question = new Question('' + questionText,'' + addendB);
                return question;
	},

	k_oa_a_2_D: function()
	{
        	var addendA = 0;
                var addendB = 0;
		var maxsum = 9; 
                var sum = 100;
                var questionText = '';

                while (sum > maxsum || addendA == 0 || addendA == 1 || addendB == 0 || addendB == 1)
                {
                        addendA = Math.floor((Math.random()*20));
                        addendB = Math.floor((Math.random()*20));
                        sum = addendA + addendB;
                }
                //okay we have a valid sum and plural addends
                questionText = 'John had ';
                questionText = questionText + '' + sum; 
                questionText = questionText + ' pencils in his box. He gave ';
                questionText = questionText + '' + addendB;
                questionText = questionText + ' of them to Calvin. How many pencils does John have in his box now?';

                var question = new Question('' + questionText,'' + addendA);
                return question;
	},	

	//1 grade..	
	g1_oa_a_1_A: function()
	{
        	var addendA = 0;
                var addendB = 0;
		var maxsum = 19; 
                var sum = 100;
                var questionText = '';

                while (sum > maxsum || addendA == 0 || addendA == 1 || addendB == 0 || addendB == 1)
                {
                	addendA = Math.floor((Math.random()*20));
                        addendB = Math.floor((Math.random()*20));
                        sum = addendA + addendB;
                }
                //okay we have a valid sum and plural addends
                questionText = 'Brandon had ';
                questionText = questionText + '' + addendA;
                questionText = questionText + ' toy cars. He bought ';
                questionText = questionText + '' + addendB;
                questionText = questionText + ' more at a yard sale. How many toy cars does Brandon have now?';

                var question = new Question('' + questionText,'' + sum);
                return question;
	},

	g1_oa_a_1_B: function()
	{
        	var addendA = 0;
                var addendB = 0;
		var maxsum = 19; 
                var sum = 100;
                var questionText = '';

                while (sum > maxsum || addendA == 0 || addendA == 1 || addendB == 0 || addendB == 1)
                {
                	addendA = Math.floor((Math.random()*20));
                        addendB = Math.floor((Math.random()*20));
                        sum = addendA + addendB;
                }
                //okay we have a valid sum and plural addends
                questionText = 'Aubrey had some seashells in a box. She found ';
                questionText = questionText + '' + addendA;
                questionText = questionText + ' more seashells in her closet and put them in the box. Now there are ';
                questionText = questionText + '' + sum;
                questionText = questionText + ' seashells in the box. How many seashells were in the box to begin with?';

                var question = new Question('' + questionText,'' + addendB);
                return question;
	},

	g1_oa_a_1_C: function()
	{
        	var addendA = 0;
                var addendB = 0;
		var maxsum = 19; 
                var sum = 100;
                var questionText = '';

                while (sum > maxsum || addendA == 0 || addendA == 1 || addendB == 0 || addendB == 1)
                {
                	addendA = Math.floor((Math.random()*20));
                        addendB = Math.floor((Math.random()*20));
                        sum = addendA + addendB;
                }
                //okay we have a valid sum and plural addends
                questionText = 'Anna had ';
                questionText = questionText + '' + sum;
                questionText = questionText + ' dog treats. She gave ';
                questionText = questionText + '' + addendA;
                questionText = questionText + ' to her puppy. How many dog treats does Anna have now?';

                var question = new Question('' + questionText,'' + addendB);
                return question;
	},

	g1_oa_a_1_D: function()
	{
        	var addendA = 0;
                var addendB = 0;
		var maxsum = 19; 
                var sum = 100;
                var questionText = '';

                while (sum > maxsum || addendA == 0 || addendA == 1 || addendB == 0 || addendB == 1)
                {
                	addendA = Math.floor((Math.random()*20));
                        addendB = Math.floor((Math.random()*20));
                        sum = addendA + addendB;
                }
                //okay we have a valid sum and plural addends
                questionText = 'Issac had ';
                questionText = questionText + '' + sum;
                questionText = questionText + ' quarters in his pocket. Some of them slipped out through a hole in his pocket. When he got to the store he only had  ';
                questionText = questionText + '' + addendA;
                questionText = questionText + ' quarters left in his pocket. How many fell out?';

                var question = new Question('' + questionText,'' + addendB);
                return question;
	},
	g1_oa_a_1_E: function()
	{
        	var addendA = 0;
                var addendB = 0;
		var maxsum = 19; 
                var sum = 100;
                var questionText = '';

                while (sum > maxsum || addendA == 0 || addendA == 1 || addendB == 0 || addendB == 1)
                {
                	addendA = Math.floor((Math.random()*20));
                        addendB = Math.floor((Math.random()*20));
                        sum = addendA + addendB;
                }
                //okay we have a valid sum and plural addends
                questionText = 'Molly had some ladybug stickers. She gave ';
                questionText = questionText + '' + addendA;
                questionText = questionText + ' of the stickers to her sister and kept ';
                questionText = questionText + '' + addendB;
                questionText = questionText + ' for herself. How many stickers did Molly have to begin with?';

                var question = new Question('' + questionText,'' + sum);
                return question;
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
			questionText = questionText + ' toy cars. Jim found ';
			questionText = questionText + '' + addendB; 	
			questionText = questionText + ' more toy cars. Then Jim found ';
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
                questionText = questionText + ' - ';
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
   		var varAString = varA.toString();

                var amountOfOnes = '';
                var amountOfTens = '';

                if (varA < 10)
                {
                        amountOfTens = '0';
                        amountOfOnes = '' + varAString;
                }
                if (varA >= 10)
                {
                        amountOfTens = '' + varAString[0];
                        amountOfOnes = '' + varAString[1];
                }

                var questionText = '';

                questionText = questionText + varAString + ' has ';
                questionText = questionText + '' + amountOfTens + ' tens and ? ones.';
                var question = new Question('' + questionText,'' + amountOfOnes);
                return question;

	},

	getPlaceTensQuestion: function(max)
	{
  		var varA = Math.floor((Math.random()*max));
                var varAString = varA.toString();

                var amountOfOnes = '';
                var amountOfTens = '';

                if (varA < 10)
                {
                        amountOfTens = '0';
                        amountOfOnes = '' + varAString;
                }
                if (varA >= 10)
                {
                        amountOfTens = '' + varAString[0];
                        amountOfOnes = '' + varAString[1];
                }

                var questionText = '';

                questionText = questionText + varAString + ' has ';
                questionText = questionText + '? tens and ' + amountOfOnes + ' ones.';
                var question = new Question('' + questionText,'' + amountOfTens);
                return question;
	
	}
});
