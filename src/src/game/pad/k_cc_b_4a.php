var k_cc_b_4a = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);

		//answers 
                this.mThresholdTime = 60000;

                //input pad
                this.mInputPad = new ButtonMultipleChoicePad(application);
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
		
		//reset vars and arrays
		for (d = 0; d < this.mQuiz.mQuestionArray.length; d++)
		{
			this.mQuiz.mQuestionArray[d] = 0;
		} 

		this.mQuiz.mQuestionArray = 0;
		this.mQuiz.mQuestionArray = new Array();

   		for (i = 0; i < this.mScoreNeeded; i++)
                {
                        var question = new Question('Count?', '' + this.mQuiz.mAnswerPool[i]);
			question.mAnswerPool = this.mQuiz.mAnswerPool;
			for (s = 0; s <= parseInt(i*2); s++)
			{
				question.mShapeArray.push(this.mShapeArray[s]);
			}
                        this.mQuiz.mQuestionArray.push(question);
                }
		this.createQuestionShapes();
	},

	createQuestionShapes: function()
	{
		//one
                this.mShapeArray.push(new Shape(50,50,38,80,this,"/images/bus/kid.png","",""));
		this.mShapeArray.push(new Shape(50,50,45,45,this,"","",""));
		this.mShapeArray[1].setText('one');
		
		//two
                this.mShapeArray.push(new Shape(50,50,83,80,this,"/images/bus/kid.png","",""));
		this.mShapeArray.push(new Shape(50,50,93,45,this,"","",""));
		this.mShapeArray[3].setText('two');
		
		//three
                this.mShapeArray.push(new Shape(50,50,135,80,this,"/images/bus/kid.png","",""));
		this.mShapeArray.push(new Shape(50,50,140,45,this,"","",""));
		this.mShapeArray[5].setText('three');
		
		//four
                this.mShapeArray.push(new Shape(50,50,185,80,this,"/images/bus/kid.png","",""));
		this.mShapeArray.push(new Shape(50,50,190,45,this,"","",""));
		this.mShapeArray[7].setText('four');
                
		//five
                this.mShapeArray.push(new Shape(50,50,235,80,this,"/images/bus/kid.png","",""));
		this.mShapeArray.push(new Shape(50,50,240,45,this,"","",""));
		this.mShapeArray[9].setText('five');
		
		//six
                this.mShapeArray.push(new Shape(50,50,38,180,this,"/images/bus/kid.png","",""));
		this.mShapeArray.push(new Shape(50,50,45,145,this,"","",""));
		this.mShapeArray[11].setText('six');
		
		//seven
                this.mShapeArray.push(new Shape(50,50,83,180,this,"/images/bus/kid.png","",""));
		this.mShapeArray.push(new Shape(50,50,93,145,this,"","",""));
		this.mShapeArray[13].setText('seven');
		
		//eight
                this.mShapeArray.push(new Shape(50,50,135,180,this,"/images/bus/kid.png","",""));
		this.mShapeArray.push(new Shape(50,50,140,145,this,"","",""));
		this.mShapeArray[15].setText('eight');
		
		//nine
                this.mShapeArray.push(new Shape(50,50,185,180,this,"/images/bus/kid.png","",""));
		this.mShapeArray.push(new Shape(50,50,190,145,this,"","",""));
		this.mShapeArray[17].setText('nine');
                
		//ten
                this.mShapeArray.push(new Shape(50,50,235,180,this,"/images/bus/kid.png","",""));
		this.mShapeArray.push(new Shape(50,50,240,145,this,"","",""));
		this.mShapeArray[19].setText('ten');
	}
});
