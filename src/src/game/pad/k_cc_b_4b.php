var k_cc_b_4b = new Class(
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
		this.mQuiz.getQuestion().setChoices();
                this.mInputPad.showButtons();

		//A
		for (i = 0; i < this.mCountShapeArrayA.length; i++)
		{
			this.mCountShapeArrayA[i].setVisibility(false);
		}	

		//B	
		for (i = 0; i < this.mCountShapeArrayB.length; i++)
		{
			this.mCountShapeArrayB[i].setVisibility(false);
		}	

		//kids A
		for (i = 0; i < this.mQuiz.getQuestion().getAnswer(); i++)
		{
			this.mCountShapeArrayA[i].setVisibility(true);
		} 

		//number names B
		for (i = 0; i < this.mQuiz.getQuestion().getAnswer(); i++)
		{
			this.mCountShapeArrayB[i].setVisibility(true);
		}
	},
	
	//state overides 
 	showCorrectAnswer: function()
        {
                this.parent();
                this.mCorrectAnswerBar.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getAnswer();
        },

        showCorrectAnswerOutOfTime: function()
        {
                this.parent();
                this.mCorrectAnswerBar.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getAnswer();
        },
     
	//questions
	createQuestions: function()
        {
		this.parent();
          
		//answer pool
                this.mQuiz.mAnswerPool.push('1');
                this.mQuiz.mAnswerPool.push('2');
                this.mQuiz.mAnswerPool.push('3');
                this.mQuiz.mAnswerPool.push('4');
                this.mQuiz.mAnswerPool.push('5');
                this.mQuiz.mAnswerPool.push('6');
                this.mQuiz.mAnswerPool.push('7');
                this.mQuiz.mAnswerPool.push('8');
                this.mQuiz.mAnswerPool.push('9');
                this.mQuiz.mAnswerPool.push('10');
	
		//reset vars and arrays
		for (d = 0; d < this.mQuiz.mQuestionArray.length; d++)
		{
			this.mQuiz.mQuestionArray[d] = 0;
		} 

		this.mQuiz.mQuestionArray = 0;
		this.mQuiz.mQuestionArray = new Array();

		for (i = 0; i < this.mScoreNeeded; i++)
		{
			var numberToCount = Math.floor((Math.random()*10)+1);	
			var question = new Question('How Many?', '' + numberToCount);
                        question.mAnswerPool = this.mQuiz.mAnswerPool;
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
