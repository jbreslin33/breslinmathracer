var g1_oa_b_4 = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);

		//time		
		this.mThresholdTime = 60000;

		//score needed
		this.setScoreNeeded(20);

		//word problems
		this.mWordProblems = new WordProblems();
	},

       	createNumQuestion: function()
        {
		this.parent();

                //question
                this.mNumQuestion.setPosition(140,140);
                this.mNumQuestion.setSize(200,200);
        },

	//showCorrectAnswer
        showCorrectAnswerEnter: function()
        {
                this.parent();

                this.mShapeArray[1].setSize(200,200);
                this.mShapeArray[1].setPosition(200,200);
                this.mShapeArray[1].mMesh.innerHTML = '' + this.mQuiz.getQuestion().getQuestion() + ' ANSWER: ' + this.mQuiz.getQuestion().getAnswer();
        },

        //outOfTime
        outOfTimeEnter: function()
        {
                this.parent();

                this.mShapeArray[0].setPosition(400,50);

                this.mShapeArray[1].setSize(200,200);
                this.mShapeArray[1].setPosition(200,200);
                this.mShapeArray[1].mMesh.innerHTML = '' + this.mQuiz.getQuestion().getQuestion() + ' ANSWER: ' + this.mQuiz.getQuestion().getAnswer();
        },

	createQuestions: function()
        {
 		this.parent();
		
		for (s = 0; s < this.mScoreNeeded; s++)
		{	
			this.mQuiz.mQuestionArray.push(this.mWordProblems.getSubtractionQuestionUnknowAddend(10));
		}
	}
});
