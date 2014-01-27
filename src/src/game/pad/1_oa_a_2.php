var g1_oa_a_2 = new Class(
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
		
		for (s = 0; s < this.mScoreNeeded; s++)
		{	
			this.mQuiz.mQuestionArray.push(this.mWordProblems.getAdditionQuestion(20,3));
		}
	}
});
