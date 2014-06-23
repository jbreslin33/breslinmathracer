var g3_nf_a_3d = new Class(
{

Extends: MultipleChoicePadImages,

	initialize: function(application)
	{
       		this.parent(application);
		
		this.setScoreNeeded(12);
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

		//1
		var comparisonA = '1/2';
		var comparisonB = '2/4';

		var question = new QuestionCompare('Compare?', 'is equal to', '' + comparisonA, '' + comparisonB);
		this.mQuiz.mQuestionArray.push(question);
		question.mAnswerPool = this.mQuiz.mAnswerPool;	

		//add shapes
		this.mShapeArray[ parseInt( 0 + this.mTotalGuiBars + this.mTotalInputBars) ].mMesh.innerHTML = '' + comparisonA;
		question.mShapeArray.push(this.mShapeArray[parseInt(0 + this.mTotalGuiBars + this.mTotalInputBars)]);
				
		this.mShapeArray[parseInt(1 + this.mTotalGuiBars + this.mTotalInputBars)].mMesh.innerHTML = '' + comparisonB;
		question.mShapeArray.push(this.mShapeArray[parseInt(1 + this.mTotalGuiBars + this.mTotalInputBars)]);

                //2
                var comparisonA = '2/4';
                var comparisonB = '3/6';

                var question = new QuestionCompare('Compare?', 'is equal to', '' + comparisonA, '' + comparisonB);
                this.mQuiz.mQuestionArray.push(question);
                question.mAnswerPool = this.mQuiz.mAnswerPool;

                //add shapes
                this.mShapeArray[ parseInt(2 + this.mTotalGuiBars + this.mTotalInputBars) ].mMesh.innerHTML = '' + comparisonA;
                question.mShapeArray.push(this.mShapeArray[parseInt(2 + this.mTotalGuiBars + this.mTotalInputBars)]);

                this.mShapeArray[parseInt(3 + this.mTotalGuiBars + this.mTotalInputBars)].mMesh.innerHTML = '' + comparisonB;
                question.mShapeArray.push(this.mShapeArray[parseInt(3 + this.mTotalGuiBars + this.mTotalInputBars)]);

                //3
                var comparisonA = '1/2';
                var comparisonB = '3/6';

                var question = new QuestionCompare('Compare?', 'is equal to', '' + comparisonA, '' + comparisonB);
                this.mQuiz.mQuestionArray.push(question);
                question.mAnswerPool = this.mQuiz.mAnswerPool;

                //add shapes
                this.mShapeArray[ parseInt(4 + this.mTotalGuiBars + this.mTotalInputBars) ].mMesh.innerHTML = '' + comparisonA;
                question.mShapeArray.push(this.mShapeArray[parseInt(4 + this.mTotalGuiBars + this.mTotalInputBars)]);

                this.mShapeArray[parseInt(5 + this.mTotalGuiBars + this.mTotalInputBars)].mMesh.innerHTML = '' + comparisonB;
                question.mShapeArray.push(this.mShapeArray[parseInt(5 + this.mTotalGuiBars + this.mTotalInputBars)]);

                //4
                var comparisonA = '1/2';
                var comparisonB = '1/3';

                var question = new QuestionCompare('Compare?', 'is greater than', '' + comparisonA, '' + comparisonB);
                this.mQuiz.mQuestionArray.push(question);
                question.mAnswerPool = this.mQuiz.mAnswerPool;

                //add shapes
                this.mShapeArray[ parseInt(6 + this.mTotalGuiBars + this.mTotalInputBars) ].mMesh.innerHTML = '' + comparisonA;
                question.mShapeArray.push(this.mShapeArray[parseInt(6 + this.mTotalGuiBars + this.mTotalInputBars)]);

                this.mShapeArray[parseInt(7 + this.mTotalGuiBars + this.mTotalInputBars)].mMesh.innerHTML = '' + comparisonB;
                question.mShapeArray.push(this.mShapeArray[parseInt(7 + this.mTotalGuiBars + this.mTotalInputBars)]);


           	//5
                var comparisonA = '4/5';
                var comparisonB = '3/4';

                var question = new QuestionCompare('Compare?', 'is greater than', '' + comparisonA, '' + comparisonB);
                this.mQuiz.mQuestionArray.push(question);
                question.mAnswerPool = this.mQuiz.mAnswerPool;

                //add shapes
                this.mShapeArray[ parseInt(8 + this.mTotalGuiBars + this.mTotalInputBars) ].mMesh.innerHTML = '' + comparisonA;
                question.mShapeArray.push(this.mShapeArray[parseInt(8 + this.mTotalGuiBars + this.mTotalInputBars)]);

                this.mShapeArray[parseInt(9 + this.mTotalGuiBars + this.mTotalInputBars)].mMesh.innerHTML = '' + comparisonB;
                question.mShapeArray.push(this.mShapeArray[parseInt(9 + this.mTotalGuiBars + this.mTotalInputBars)]);

                //6
                var comparisonA = '3/6';
                var comparisonB = '2/5';
                
                var question = new QuestionCompare('Compare?', 'is greater than', '' + comparisonA, '' + comparisonB);
                this.mQuiz.mQuestionArray.push(question);
                question.mAnswerPool = this.mQuiz.mAnswerPool;
        
                //add shapes
                this.mShapeArray[ parseInt(10 + this.mTotalGuiBars + this.mTotalInputBars) ].mMesh.innerHTML = '' + comparisonA;
                question.mShapeArray.push(this.mShapeArray[parseInt(10 + this.mTotalGuiBars + this.mTotalInputBars)]);

                this.mShapeArray[parseInt(11 + this.mTotalGuiBars + this.mTotalInputBars)].mMesh.innerHTML = '' + comparisonB;
                question.mShapeArray.push(this.mShapeArray[parseInt(11 + this.mTotalGuiBars + this.mTotalInputBars)]);


               	//7
                var comparisonA = '1/2';
                var comparisonB = '2/6';
                
                var question = new QuestionCompare('Compare?', 'is greater than', '' + comparisonA, '' + comparisonB);
                this.mQuiz.mQuestionArray.push(question);
                question.mAnswerPool = this.mQuiz.mAnswerPool;
        
                //add shapes
                this.mShapeArray[ parseInt(12 + this.mTotalGuiBars + this.mTotalInputBars) ].mMesh.innerHTML = '' + comparisonA;
                question.mShapeArray.push(this.mShapeArray[parseInt(12 + this.mTotalGuiBars + this.mTotalInputBars)]);
                
                this.mShapeArray[parseInt(13 + this.mTotalGuiBars + this.mTotalInputBars)].mMesh.innerHTML = '' + comparisonB;
                question.mShapeArray.push(this.mShapeArray[parseInt(13 + this.mTotalGuiBars + this.mTotalInputBars)]);

               	//8
                var comparisonA = '3/4';
                var comparisonB = '2/3';
                
                var question = new QuestionCompare('Compare?', 'is greater than', '' + comparisonA, '' + comparisonB);
                this.mQuiz.mQuestionArray.push(question);
                question.mAnswerPool = this.mQuiz.mAnswerPool;
        
                //add shapes
                this.mShapeArray[ parseInt(14 + this.mTotalGuiBars + this.mTotalInputBars) ].mMesh.innerHTML = '' + comparisonA;
                question.mShapeArray.push(this.mShapeArray[parseInt(14 + this.mTotalGuiBars + this.mTotalInputBars)]);
                
                this.mShapeArray[parseInt(15 + this.mTotalGuiBars + this.mTotalInputBars)].mMesh.innerHTML = '' + comparisonB;
                question.mShapeArray.push(this.mShapeArray[parseInt(15 + this.mTotalGuiBars + this.mTotalInputBars)]);

	        //9
                var comparisonA = '4/6';
                var comparisonB = '2/3';

                var question = new QuestionCompare('Compare?', 'is equal to', '' + comparisonA, '' + comparisonB);
                this.mQuiz.mQuestionArray.push(question);
                question.mAnswerPool = this.mQuiz.mAnswerPool;

                //add shapes
                this.mShapeArray[ parseInt(16 + this.mTotalGuiBars + this.mTotalInputBars) ].mMesh.innerHTML = '' + comparisonA;
                question.mShapeArray.push(this.mShapeArray[parseInt(16 + this.mTotalGuiBars + this.mTotalInputBars)]);

                this.mShapeArray[parseInt(17 + this.mTotalGuiBars + this.mTotalInputBars)].mMesh.innerHTML = '' + comparisonB;
                question.mShapeArray.push(this.mShapeArray[parseInt(17 + this.mTotalGuiBars + this.mTotalInputBars)]);

               	//10
                var comparisonA = '4/5';
                var comparisonB = '2/3';

                var question = new QuestionCompare('Compare?', 'is greater than', '' + comparisonA, '' + comparisonB);
                this.mQuiz.mQuestionArray.push(question);
                question.mAnswerPool = this.mQuiz.mAnswerPool;

                //add shapes
                this.mShapeArray[ parseInt(18 + this.mTotalGuiBars + this.mTotalInputBars) ].mMesh.innerHTML = '' + comparisonA;
                question.mShapeArray.push(this.mShapeArray[parseInt(18 + this.mTotalGuiBars + this.mTotalInputBars)]);

                this.mShapeArray[parseInt(19 + this.mTotalGuiBars + this.mTotalInputBars)].mMesh.innerHTML = '' + comparisonB;
                question.mShapeArray.push(this.mShapeArray[parseInt(19 + this.mTotalGuiBars + this.mTotalInputBars)]);

               	//11
                var comparisonA = '4/6';
                var comparisonB = '3/4';

                var question = new QuestionCompare('Compare?', 'is less than', '' + comparisonA, '' + comparisonB);
                this.mQuiz.mQuestionArray.push(question);
                question.mAnswerPool = this.mQuiz.mAnswerPool;

                //add shapes
                this.mShapeArray[ parseInt(20 + this.mTotalGuiBars + this.mTotalInputBars) ].mMesh.innerHTML = '' + comparisonA;
                question.mShapeArray.push(this.mShapeArray[parseInt(20 + this.mTotalGuiBars + this.mTotalInputBars)]);

                this.mShapeArray[parseInt(21 + this.mTotalGuiBars + this.mTotalInputBars)].mMesh.innerHTML = '' + comparisonB;
                question.mShapeArray.push(this.mShapeArray[parseInt(21 + this.mTotalGuiBars + this.mTotalInputBars)]);

           	//12
                var comparisonA = '2/3';
                var comparisonB = '3/5';

                var question = new QuestionCompare('Compare?', 'is greater than', '' + comparisonA, '' + comparisonB);
                this.mQuiz.mQuestionArray.push(question);
                question.mAnswerPool = this.mQuiz.mAnswerPool;

                //add shapes
                this.mShapeArray[ parseInt(22 + this.mTotalGuiBars + this.mTotalInputBars) ].mMesh.innerHTML = '' + comparisonA;
                question.mShapeArray.push(this.mShapeArray[parseInt(22 + this.mTotalGuiBars + this.mTotalInputBars)]);

                this.mShapeArray[parseInt(23 + this.mTotalGuiBars + this.mTotalInputBars)].mMesh.innerHTML = '' + comparisonB;
                question.mShapeArray.push(this.mShapeArray[parseInt(23 + this.mTotalGuiBars + this.mTotalInputBars)]);

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
