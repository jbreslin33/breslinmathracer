var g1_oa_a_1 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);
	
		//score needed	
		this.setScoreNeeded(20);

		//threshold
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

		while (totalAddition < this.mScoreNeeded * .4 || totalSubtraction < this.mScoreNeeded * .4)
		{	
			this.mQuiz.resetQuestionArray();

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
