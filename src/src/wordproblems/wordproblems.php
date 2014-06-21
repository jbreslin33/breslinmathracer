var WordProblems = new Class(
{
	initialize: function()
	{
	
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
	},
	
	makeXeAmB: function(minX,maxX,minA,maxA,minB,maxB,textA,textB,textC)
	{
	   	var a = 0;
                var b = 0;
                var x = 100;
                var questionText = '';

                while (x > maxX || x < minX || a < minA || a > maxA || b < minB || b > maxB)
                {
                       	a = Math.floor((Math.random()* parseInt(maxA - minA + 1)));
                       	b = Math.floor((Math.random()* parseInt(maxB - minB + 1)));
                       	x = a - b;
                }
                
		//okay we have a valid sum and plural addends
                questionText = textA;
                questionText = questionText + ' ' + a + ' ';
                questionText = questionText + textB;
                questionText = questionText + ' ' + b + ' ';
                questionText = questionText + textC;

                var question = new Question('' + questionText,'' + x);
		question.mTipArray[2] = 'a - b = x';  
		question.mTipArray[3] = '' + a + ' - ' + b + ' = ' + x;  
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

	g1_oa_a_1_F: function()
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
                questionText = 'Kaleb and Ethan were planting flowers in pots for a school project. Kaleb brought ';
                questionText = questionText + '' + addendA;
                questionText = questionText + ' and Ethan brought ';
                questionText = questionText + '' + addendB;
                questionText = questionText + ' pots. They had just enough pots to put one flower in each pot. How many flowers did they have?';

                var question = new Question('' + questionText,'' + sum);
                return question;
	},
	
	g1_oa_a_1_G: function()
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
                questionText = 'Macon and Parker picked up the crayons they spilled onto the floor. When they put all the crayons back in the box, there were ';
                questionText = questionText + '' + sum;
                questionText = questionText + ' crayons in the box. Macon knows that he put ';
                questionText = questionText + '' + addendB;
                questionText = questionText + ' crayons in. How many crayons did Parker put in the box?';

                var question = new Question('' + questionText,'' + addendA);
                return question;
	},
	

	g1_oa_a_1_H: function()
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
                questionText = 'Cole and Maggie worked together to make a train that had ';
                questionText = questionText + '' + sum;
                questionText = questionText + ' cubes. They broke it into pieces. One piece had ';
                questionText = questionText + '' + addendB;
                questionText = questionText + ' cubes. How many cubes were in the other piece?';

                var question = new Question('' + questionText,'' + addendA);
                return question;
	},
	
	g1_oa_a_1_I: function()
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
                questionText = 'Sally and Amy shared one box of colored pencils. They used all of the pencils to make drawings for art class. Sally chose ';
                questionText = questionText + '' + addendA;
                questionText = questionText + ' pencils. Amy chose ';
                questionText = questionText + '' + addendB;
                questionText = questionText + ' pencils. How many pencils were in the box to begin with?';

                var question = new Question('' + questionText,'' + sum);
                return question;
	},

	g1_oa_a_1_J: function()
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
                questionText = 'Skip and Jacob made ';
                questionText = questionText + '' + sum;
                questionText = questionText + ' cookies. They ate some as soon as they had cooled off. There were ';
                questionText = questionText + '' + addendB;
                questionText = questionText + ' cookies left. How many cookies did Skip and Jacob eat?';

                var question = new Question('' + questionText,'' + addendA);
                return question;
	},

	g1_oa_a_1_K: function()
	{
        	var addendA = 0;
                var addendB = 0;
		var maxsum = 19; 
                var sum = 100;
                var questionText = '';

                while (sum > maxsum || addendA == 0 || addendA == 1 || addendB == 0 || addendB == 1 || addendB < addendA)
                {
                	addendA = Math.floor((Math.random()*20));
                        addendB = Math.floor((Math.random()*20));
                        sum = addendB - addendA;
                }
                //okay we have a valid sum and plural addends
                questionText = 'In the basketball game, Tiffany scored ';
                questionText = questionText + '' + addendA;
                questionText = questionText + ' points and Alexa scored ';
                questionText = questionText + '' + addendB;
                questionText = questionText + ' points. How many more points did Alexa score?';

                var question = new Question('' + questionText,'' + sum);
                return question;
	},

	g1_oa_a_1_L: function()
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
                        sum = addendA - addendB;
                }
                //okay we have a valid sum and plural addends
                questionText = 'Carson has ';
                questionText = questionText + '' + addendA;
                questionText = questionText + ' plastic bugs in his collection. He has ';
                questionText = questionText + '' + addendB;
                questionText = questionText + ' more bugs than his brother has. How many bugs does his brother have?';

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

			while (sum > maxsum || addendA == 0 || addendA == 1 || addendB == 0 || addendB == 1 || addendA < addendB)
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
