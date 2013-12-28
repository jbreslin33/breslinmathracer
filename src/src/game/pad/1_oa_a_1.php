var g1_oa_a_1 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);
		
		this.setScoreNeeded(4);

		this.mThresholdTime = 120000;

                //input pad
                this.mInputPad = new BigQuestionNumberPad(application);

		//word problems
		this.mWordProblems = new WordProblems();
	},

	createCorrectAnswerBar: function()
        {
                //question bar header
                if (!this.mCorrectAnswerBarHeader)
                {
                        this.mCorrectAnswerBarHeader = new Shape(150,50,300,50,this,"","","");
                        this.mCorrectAnswerBarHeader.mMesh.innerHTML = '';
                }

                //question bar
                if (!this.mCorrectAnswerBar)
                {
                        this.mCorrectAnswerBar = new Shape(200,200,50,100,this,"","","");
                        this.mCorrectAnswerBar.mMesh.innerHTML = '';
                }
        },

	createQuestions: function()
        {
 		this.parent();
		
		var totalAddition        = 0;
		var totalSubtraction     = 0;
		var totalAdditionGoal    = parseInt( parseInt(this.mScoreNeeded / 2) - parseInt(1));
		var totalSubtractionGoal = parseInt( parseInt(this.mScoreNeeded / 2) - parseInt(1));

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
					this.mQuiz.mQuestionArray.push(this.mWordProblems.getAdditionQuestion(20,2));
					totalAddition++;
				}	
				if (randomChance == 1)
				{
					this.mQuiz.mQuestionArray.push(this.mWordProblems.getSubtractionQuestion(20));
					totalSubtraction++;
				}
			}
		}
	}
});
