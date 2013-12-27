var g1_oa_a_1 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);
		
		this.mScoreNeeded = 4;

		this.mThresholdTime = 120000;

                //input pad
                this.mInputPad = new BigQuestionNumberPad(application);

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
		questionText = 'Jose had '; 	
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
		questionText = 'Jose had '; 	
		questionText = questionText + '' + subtrahendA; 	
		questionText = questionText + ' toy cars. He gives away ';
		questionText = questionText + '' + subtrahendB; 	
		questionText = questionText + ' toy cars. How many toy cars does Jose have now?';

		var question = new Question('' + questionText,'' + sum);
		return question;
	},

	createQuestions: function()
        {
 		this.parent();
		
		//add
		this.mQuiz.mQuestionPoolArray.push(this.getAdditionQuestion(20));
		this.mQuiz.mQuestionPoolArray.push(this.getSubtractionQuestion(20));
		this.mQuiz.mQuestionPoolArray.push(this.getAdditionQuestion(20));
		this.mQuiz.mQuestionPoolArray.push(this.getSubtractionQuestion(20));
		this.mQuiz.mQuestionPoolArray.push(this.getAdditionQuestion(20));
		this.mQuiz.mQuestionPoolArray.push(this.getSubtractionQuestion(20));
		this.mQuiz.mQuestionPoolArray.push(this.getAdditionQuestion(20));
		this.mQuiz.mQuestionPoolArray.push(this.getSubtractionQuestion(20));
		this.mQuiz.mQuestionPoolArray.push(this.getAdditionQuestion(20));
		this.mQuiz.mQuestionPoolArray.push(this.getSubtractionQuestion(20));

		var totalAddition        = 0;
		var totalSubtraction     = 0;
		var totalAdditionGoal    = parseInt( parseInt(this.mScoreNeeded / 2) - parseInt(1));
		var totalSubtractionGoal = parseInt( parseInt(this.mScoreNeeded / 2) - parseInt(1));
		this.log('totA:' + totalAdditionGoal);
		this.log('totS:' + totalSubtractionGoal);

		while (totalAddition < totalAdditionGoal || totalSubtraction < totalSubtractionGoal)
		{	
			//RESET as we have either just started or failed to reach totalNewGoal
			totalNew = 0;
			for (d = 0; d < this.mQuiz.mQuestionArray.length; d++)
			{
				this.mQuiz.mQuestionArray[d] = 0;
			} 
			this.mQuiz.mQuestionArray = 0;
			this.mQuiz.mQuestionArray = new Array();

			//ADD questions
			for (s = 0; s < this.mScoreNeeded; s++)
			{	
				//50% chance of asking newest question
				var randomChance = Math.floor((Math.random()*2));		
				if (randomChance == 0)
				{
					this.mQuiz.mQuestionArray.push(this.getAdditionQuestion(20));
					totalAddition++;
				}	
				if (randomChance == 1)
				{
					this.mQuiz.mQuestionArray.push(this.getSubtractionQuestion(20));
					totalSubtraction++;
				}
			}
		}
	}
});
