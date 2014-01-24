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
	
		//just the question array reset
                this.mQuiz.resetQuestionArray();

		for (i = 0; i < this.mScoreNeeded; i++)
		{
			var numberToCount = Math.floor((Math.random()*10)+1);	
			var question = new Question('How Many?', '' + numberToCount);
                        question.mAnswerPool = this.mQuiz.mAnswerPool;
                        
			for (s = 0; s < parseInt(numberToCount * 2); s++)
                        {
                                question.mShapeArray.push(this.mShapeArray[s+2]);
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
                this.mShapeArray[3].setText('one');

                //two
                this.mShapeArray.push(new Shape(50,50,83,80,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,93,45,this,"","",""));
                this.mShapeArray[5].setText('two');

                //three
                this.mShapeArray.push(new Shape(50,50,135,80,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,140,45,this,"","",""));
                this.mShapeArray[7].setText('three');

                //four
                this.mShapeArray.push(new Shape(50,50,185,80,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,190,45,this,"","",""));
                this.mShapeArray[9].setText('four');

                //five
                this.mShapeArray.push(new Shape(50,50,235,80,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,240,45,this,"","",""));
                this.mShapeArray[11].setText('five');

                //six
                this.mShapeArray.push(new Shape(50,50,38,180,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,45,145,this,"","",""));
                this.mShapeArray[13].setText('six');

                //seven
                this.mShapeArray.push(new Shape(50,50,83,180,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,93,145,this,"","",""));
                this.mShapeArray[15].setText('seven');

                //eight
                this.mShapeArray.push(new Shape(50,50,135,180,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,140,145,this,"","",""));
                this.mShapeArray[17].setText('eight');

                //nine
                this.mShapeArray.push(new Shape(50,50,185,180,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,190,145,this,"","",""));
                this.mShapeArray[19].setText('nine');

                //ten
                this.mShapeArray.push(new Shape(50,50,235,180,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,240,145,this,"","",""));
                this.mShapeArray[21].setText('ten');
        }
});
