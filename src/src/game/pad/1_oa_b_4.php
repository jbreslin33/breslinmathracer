var g1_oa_b_4 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);
		
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
			this.mQuiz.mQuestionArray.push(this.mWordProblems.getSubtractionQuestionUnknowAddend(10));
		}
	}
});
