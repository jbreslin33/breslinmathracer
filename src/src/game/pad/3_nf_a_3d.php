var g3_nf_a_3d = new Class(
{

Extends: MultipleChoicePadImages,

	initialize: function(application)
	{
       		this.parent(application);
		
		this.setScoreNeeded(1);
	},

	showQuestion: function()
        {
                this.parent();

                if (this.mButtonA.mMesh.innerHTML == 'is greater than')
                {
                        this.mButtonA.setSrc('/images/symbols/greater_than.png');
                }
                
		if (this.mButtonA.mMesh.innerHTML == 'is equal to')
                {
                        this.mButtonA.setSrc('/images/symbols/equal.png');
                }

                if (this.mButtonA.mMesh.innerHTML == 'is less than')
                {
                        this.mButtonA.setSrc('/images/symbols/less_than.png');
                }

                if (this.mButtonB.mMesh.innerHTML == 'is greater than')
                {
                        this.mButtonB.setSrc('/images/symbols/greater_than.png');
                }

                if (this.mButtonB.mMesh.innerHTML == 'is equal to')
                {
                        this.mButtonB.setSrc('/images/symbols/equal.png');
                }

                if (this.mButtonB.mMesh.innerHTML == 'is less than')
                {
                        this.mButtonB.setSrc('/images/symbols/less_than.png');
                }

                if (this.mButtonC.mMesh.innerHTML == 'is greater than')
                {
                        this.mButtonC.setSrc('/images/symbols/greater_than.png');
                }

                if (this.mButtonC.mMesh.innerHTML == 'is equal to')
                {
                        this.mButtonC.setSrc('/images/symbols/equal.png');
                }

                if (this.mButtonC.mMesh.innerHTML == 'is less than')
                {
                        this.mButtonC.setSrc('/images/symbols/less_than.png');
                }
        },

	createQuestions: function()
        {
		this.parent();

		//answer pool
                this.mQuiz.mAnswerPool.push('is greater than');
                this.mQuiz.mAnswerPool.push('is equal to');
                this.mQuiz.mAnswerPool.push('is less than');
		
		this.mQuiz.resetQuestionArray();

		var comparisonA = '1/2';
		var comparisonB = '1/2';

		var question = new QuestionCompare('Compare?', 'is equal to', '' + comparisonA, '' + comparisonB);
		this.mQuiz.mQuestionArray.push(question);
		question.mAnswerPool = this.mQuiz.mAnswerPool;	

		//add shapes
		this.mShapeArray[ parseInt( s*2 + this.mTotalGuiBars + this.mTotalInputBars) ].mMesh.innerHTML = '' + comparisonA;
		question.mShapeArray.push(this.mShapeArray[parseInt((s*2) + this.mTotalGuiBars + this.mTotalInputBars)]);
				
		this.mShapeArray[parseInt((s*2) + this.mTotalGuiBars + this.mTotalInputBars + 1)].mMesh.innerHTML = '' + comparisonB;
		question.mShapeArray.push(this.mShapeArray[parseInt((s*2) + this.mTotalGuiBars + this.mTotalInputBars + 1)]);

                //buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));

                //random
                //this.mQuiz.randomize(10);
	},
	
	createWorld: function()
	{
		this.parent();

		for (i=0; i < this.mScoreNeeded; i++)
		{	
			this.mShapeArray.push(new Shape(15,10,245,130,this,"","",""));
			this.mShapeArray.push(new Shape(15,10,495,130,this,"","",""));
		}
	}
});
