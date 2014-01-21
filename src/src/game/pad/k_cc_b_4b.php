var k_cc_b_4b = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);

		//count shape array
		this.mCountShapeArrayA = new Array();
		this.mCountShapeArrayB = new Array();

		//answers 
                this.mThresholdTime = 60000;

                //input pad
                this.mInputPad = new ButtonMultipleChoicePad(application);
	},

	reset: function()
	{
		this.parent();
	
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
	},
  
	destroyShapes: function()
        {
                this.parent();

                //shapes and array
		//A
                for (i = 0; i < this.mCountShapeArrayA.length; i++)
                {
                        //back to div
                        this.mCountShapeArrayA[i].mDiv.mDiv.removeChild(this.mCountShapeArrayA[i].mMesh);
                        document.body.removeChild(this.mCountShapeArrayA[i].mDiv.mDiv);
                        this.mCountShapeArrayA[i] = 0;
                }
                this.mCountShapeArrayA = 0;
               
		//B 
		for (i = 0; i < this.mCountShapeArrayB.length; i++)
                {
                        //back to div
                        this.mCountShapeArrayB[i].mDiv.mDiv.removeChild(this.mCountShapeArrayB[i].mMesh);
                        document.body.removeChild(this.mCountShapeArrayB[i].mDiv.mDiv);
                        this.mCountShapeArrayB[i] = 0;
                }
                this.mCountShapeArrayB = 0;
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

		//right here we need to show How Many 	
		this.mCorrectAnswerBarHeader.setVisibility('true');
		this.mCorrectAnswerBarHeader.mMesh.innerHTML = 'How Many kids?';
		this.mApplication.mHud.mScoreNeeded.setText('<font size="2">How Many?</font>');

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
		this.mCountShapeArrayB.push(new Shape(50,50,25,25,this,"","",""));
		this.mCountShapeArrayB[0].setText('one');
                this.mCountShapeArrayA.push(new Shape(50,50,18,60,this,"/images/bus/kid.png","",""));
		
		//two
		this.mCountShapeArrayB.push(new Shape(50,50,73,25,this,"","",""));
		this.mCountShapeArrayB[1].setText('two');
                this.mCountShapeArrayA.push(new Shape(50,50,63,60,this,"/images/bus/kid.png","",""));
		
		//three
		this.mCountShapeArrayB.push(new Shape(50,50,120,25,this,"","",""));
		this.mCountShapeArrayB[2].setText('three');
                this.mCountShapeArrayA.push(new Shape(50,50,115,60,this,"/images/bus/kid.png","",""));
		
		//four
		this.mCountShapeArrayB.push(new Shape(50,50,170,25,this,"","",""));
		this.mCountShapeArrayB[3].setText('four');
                this.mCountShapeArrayA.push(new Shape(50,50,165,60,this,"/images/bus/kid.png","",""));
                
		//five
		this.mCountShapeArrayB.push(new Shape(50,50,220,25,this,"","",""));
		this.mCountShapeArrayB[4].setText('five');
                this.mCountShapeArrayA.push(new Shape(50,50,215,60,this,"/images/bus/kid.png","",""));
		
		//six
		this.mCountShapeArrayB.push(new Shape(50,50,25,125,this,"","",""));
		this.mCountShapeArrayB[5].setText('six');
                this.mCountShapeArrayA.push(new Shape(50,50,18,160,this,"/images/bus/kid.png","",""));
		
		//seven
		this.mCountShapeArrayB.push(new Shape(50,50,73,125,this,"","",""));
		this.mCountShapeArrayB[6].setText('seven');
                this.mCountShapeArrayA.push(new Shape(50,50,63,160,this,"/images/bus/kid.png","",""));
		
		//eight
		this.mCountShapeArrayB.push(new Shape(50,50,120,125,this,"","",""));
		this.mCountShapeArrayB[7].setText('eight');
                this.mCountShapeArrayA.push(new Shape(50,50,115,160,this,"/images/bus/kid.png","",""));
		
		//nine
		this.mCountShapeArrayB.push(new Shape(50,50,170,125,this,"","",""));
		this.mCountShapeArrayB[8].setText('nine');
                this.mCountShapeArrayA.push(new Shape(50,50,165,160,this,"/images/bus/kid.png","",""));
                
		//ten
		this.mCountShapeArrayB.push(new Shape(50,50,220,125,this,"","",""));
		this.mCountShapeArrayB[9].setText('ten');
                this.mCountShapeArrayA.push(new Shape(50,50,215,160,this,"/images/bus/kid.png","",""));
                
		for (i = 0; i < this.mCountShapeArrayA.length; i++)
		{
			this.mCountShapeArrayA[i].setVisibility(false);
		}	
		
		for (i = 0; i < this.mCountShapeArrayB.length; i++)
		{
			this.mCountShapeArrayB[i].setVisibility(false);
		}	
	}
});
