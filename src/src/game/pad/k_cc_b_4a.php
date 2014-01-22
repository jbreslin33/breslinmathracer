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

	// you need to show a kid with a number name mount... 
	showQuestion: function()
	{
		this.parent();
		
		this.mQuiz.getQuestion().setChoices();
		this.mInputPad.showButtons();
	},
	
	//state overides 
	showLevelPassedEnter: function()
        {
                this.parent();
		this.mShapeArray[19].setVisibility(true);
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
                this.mShapeArray.push(new Shape(50,50,18,60,this,"/images/bus/kid.png","",""));
		this.mShapeArray.push(new Shape(50,50,25,25,this,"","",""));
		this.mShapeArray[1].setText('one');
		
		//two
                this.mShapeArray.push(new Shape(50,50,63,60,this,"/images/bus/kid.png","",""));
		this.mShapeArray.push(new Shape(50,50,73,25,this,"","",""));
		this.mShapeArray[3].setText('two');
		
		//three
                this.mShapeArray.push(new Shape(50,50,115,60,this,"/images/bus/kid.png","",""));
		this.mShapeArray.push(new Shape(50,50,120,25,this,"","",""));
		this.mShapeArray[5].setText('three');
		
		//four
                this.mShapeArray.push(new Shape(50,50,165,60,this,"/images/bus/kid.png","",""));
		this.mShapeArray.push(new Shape(50,50,170,25,this,"","",""));
		this.mShapeArray[7].setText('four');
                
		//five
                this.mShapeArray.push(new Shape(50,50,215,60,this,"/images/bus/kid.png","",""));
		this.mShapeArray.push(new Shape(50,50,220,25,this,"","",""));
		this.mShapeArray[9].setText('five');
		
		//six
                this.mShapeArray.push(new Shape(50,50,18,160,this,"/images/bus/kid.png","",""));
		this.mShapeArray.push(new Shape(50,50,25,125,this,"","",""));
		this.mShapeArray[11].setText('six');
		
		//seven
                this.mShapeArray.push(new Shape(50,50,63,160,this,"/images/bus/kid.png","",""));
		this.mShapeArray.push(new Shape(50,50,73,125,this,"","",""));
		this.mShapeArray[13].setText('seven');
		
		//eight
                this.mShapeArray.push(new Shape(50,50,115,160,this,"/images/bus/kid.png","",""));
		this.mShapeArray.push(new Shape(50,50,120,125,this,"","",""));
		this.mShapeArray[15].setText('eight');
		
		//nine
                this.mShapeArray.push(new Shape(50,50,165,160,this,"/images/bus/kid.png","",""));
		this.mShapeArray.push(new Shape(50,50,170,125,this,"","",""));
		this.mShapeArray[17].setText('nine');
                
		//ten
                this.mShapeArray.push(new Shape(50,50,215,160,this,"/images/bus/kid.png","",""));
		this.mShapeArray.push(new Shape(50,50,220,125,this,"","",""));
		this.mShapeArray[19].setText('ten');
	}
});
