var k_cc_b_4a = new Class(
{

Extends: MultipleChoicePad,

	initialize: function(application)
	{
       		this.parent(application);

		//answers 
                this.mThresholdTime = 60000;
	},

	createNumQuestion: function()
	{
		this.parent();
		this.mNumQuestion.setPosition(390,60);
	},

	//questions
	createQuestions: function()
        {
		this.parent();

		//answer pool		
		this.mQuiz.mAnswerPool.push('one');
		this.mQuiz.mAnswerPool.push('two');
		this.mQuiz.mAnswerPool.push('three');
		this.mQuiz.mAnswerPool.push('four');
		this.mQuiz.mAnswerPool.push('five');
		this.mQuiz.mAnswerPool.push('six');
		this.mQuiz.mAnswerPool.push('seven');
		this.mQuiz.mAnswerPool.push('eight');
		this.mQuiz.mAnswerPool.push('nine');
		this.mQuiz.mAnswerPool.push('ten');

 		//just the question array reset
                this.mQuiz.resetQuestionArray();

   		for (i = 0; i < this.mScoreNeeded; i++)
                {
                        var question = new Question('Count', '' + this.mQuiz.mAnswerPool[i]);
			question.mAnswerPool = this.mQuiz.mAnswerPool;
			for (s = 0; s <= parseInt(i*2); s++)
			{
				question.mShapeArray.push(this.mShapeArray[parseInt(s + this.mTotalGuiBars + this.mTotalInputBars)]);
			}
                        this.mQuiz.mQuestionArray.push(question);
                }
	},

	createWorld: function()
	{
		this.parent();

		//one
                this.mShapeArray.push(new Shape(50,50,38,80,this,"/images/bus/kid.png","",""));
		this.mShapeArray.push(new Shape(50,50,45,45,this,"","",""));
		this.mShapeArray[parseInt(1 + this.mTotalGuiBars + this.mTotalInputBars)].setText('one');
		
		//two
                this.mShapeArray.push(new Shape(50,50,83,80,this,"/images/bus/kid.png","",""));
		this.mShapeArray.push(new Shape(50,50,93,45,this,"","",""));
		this.mShapeArray[parseInt(3 + this.mTotalGuiBars + this.mTotalInputBars)].setText('two');
		
		//three
                this.mShapeArray.push(new Shape(50,50,135,80,this,"/images/bus/kid.png","",""));
		this.mShapeArray.push(new Shape(50,50,140,45,this,"","",""));
		this.mShapeArray[parseInt(5 + this.mTotalGuiBars + this.mTotalInputBars)].setText('three');
	
		//four
                this.mShapeArray.push(new Shape(50,50,185,80,this,"/images/bus/kid.png","",""));
		this.mShapeArray.push(new Shape(50,50,190,45,this,"","",""));
		this.mShapeArray[parseInt(7 + this.mTotalGuiBars + this.mTotalInputBars)].setText('four');
                
		//five
                this.mShapeArray.push(new Shape(50,50,235,80,this,"/images/bus/kid.png","",""));
		this.mShapeArray.push(new Shape(50,50,240,45,this,"","",""));
		this.mShapeArray[parseInt(9 + this.mTotalGuiBars + this.mTotalInputBars)].setText('five');
		
		//six
                this.mShapeArray.push(new Shape(50,50,38,180,this,"/images/bus/kid.png","",""));
		this.mShapeArray.push(new Shape(50,50,45,145,this,"","",""));
		this.mShapeArray[parseInt(11 + this.mTotalGuiBars + this.mTotalInputBars)].setText('six');
		
		//seven
                this.mShapeArray.push(new Shape(50,50,83,180,this,"/images/bus/kid.png","",""));
		this.mShapeArray.push(new Shape(50,50,93,145,this,"","",""));
		this.mShapeArray[parseInt(13 + this.mTotalGuiBars + this.mTotalInputBars)].setText('seven');
		
		//eight
                this.mShapeArray.push(new Shape(50,50,135,180,this,"/images/bus/kid.png","",""));
		this.mShapeArray.push(new Shape(50,50,140,145,this,"","",""));
		this.mShapeArray[parseInt(15 + this.mTotalGuiBars + this.mTotalInputBars)].setText('eight');
		
		//nine
                this.mShapeArray.push(new Shape(50,50,185,180,this,"/images/bus/kid.png","",""));
		this.mShapeArray.push(new Shape(50,50,190,145,this,"","",""));
		this.mShapeArray[parseInt(17 + this.mTotalGuiBars + this.mTotalInputBars)].setText('nine');
                
		//ten
                this.mShapeArray.push(new Shape(50,50,235,180,this,"/images/bus/kid.png","",""));
		this.mShapeArray.push(new Shape(50,50,240,145,this,"","",""));
		this.mShapeArray[parseInt(19 + this.mTotalGuiBars + this.mTotalInputBars)].setText('ten');
	}
});
