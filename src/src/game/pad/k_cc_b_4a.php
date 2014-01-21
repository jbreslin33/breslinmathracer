var k_cc_b_4a = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);

		//count shape array
		this.mCountShapeArrayA = new Array();
		this.mCountShapeArrayB = new Array();
		this.mNumberNameArray = new Array();
	
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
		for (i = 0; i < this.mScore + 1; i++)
		{
			this.mCountShapeArrayA[i].setVisibility(true);
		}

		//number names B
		for (i = 0; i < this.mScore; i++)
		{
			this.mCountShapeArrayB[i].setVisibility(true);
		}

		this.mQuiz.getQuestion().setChoices();
		this.mInputPad.showButtons();
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
     
	showLevelPassedEnter: function()
        {
                this.parent();
		this.mCountShapeArrayB[9].setVisibility(true);
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
                        var question = new Question('Count', '' + this.mQuiz.mAnswerPool[i]);
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
