var k_md_a_2 = new Class(
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

	reset: function()
	{
		this.parent();
		
		for (i = 0; i < this.mShapeArray.length; i++)
		{
			this.mShapeArray[i].setVisibility(false);
		} 
	},
	
	destroyShapes: function()
	{
		this.parent();

		//shapes and array
                for (i = 0; i < this.mShapeArray.length; i++)
                {
                        //back to div
                        this.mShapeArray[i].mDiv.mDiv.removeChild(this.mShapeArray[i].mMesh);
                        document.body.removeChild(this.mShapeArray[i].mDiv.mDiv);
                        this.mShapeArray[i] = 0;
                }
                this.mShapeArray = 0;
	},

	showQuestion: function()
	{
		for (i = 0; i < this.mShapeArray.length; i++)
                {
                        this.mShapeArray[i].setVisibility(false);
                }
                this.mShapeArray[this.mScore].setVisibility(false);

		this.mInputPad.showQuestion();	
		
		//show shape	
		this.mShapeArray[parseInt(this.mScore * 2)].setVisibility(true);
		this.mShapeArray[parseInt(parseInt(this.mScore * 2) + 1)].setVisibility(true);
	},
 
	showCorrectAnswer: function()
	{
		this.parent();
        	this.mCorrectAnswerBar.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getAnswer();
	},
   
	createQuestions: function()
        {
		this.parent();

              	for (d = 0; d < this.mQuiz.mQuestionArray.length; d++)
               	{
                        this.mQuiz.mQuestionArray[d] = 0;
                }
                this.mQuiz.mQuestionArray = 0;
                this.mQuiz.mQuestionArray = new Array();

		//1 tall
		var question = new Question('','is more tall than');
		question.setChoice('A','is more tall than');
		question.setChoice('B','is more short than');
		this.mQuiz.mQuestionArray.push(question);
	
		//2 short	
		var question = new Question('','is more short than');
		question.setChoice('A','is more tall than');
		question.setChoice('B','is more short than');
		this.mQuiz.mQuestionArray.push(question);

		//3 heavy
		var question = new Question('','is more heavy than');
		question.setChoice('A','is more light than');
		question.setChoice('B','is more heavy than');
		this.mQuiz.mQuestionArray.push(question);
		
		//4 light
		var question = new Question('','is more light than');
		question.setChoice('A','is more light than');
		question.setChoice('B','is more heavy than');
		this.mQuiz.mQuestionArray.push(question);
		
		//5 short	
		var question = new Question('','is more short than');
		question.setChoice('A','is more tall than');
		question.setChoice('B','is more short than');
		this.mQuiz.mQuestionArray.push(question);
		
		//6 light
		var question = new Question('','is more light than');
		question.setChoice('A','is more light than');
		question.setChoice('B','is more heavy than');
		this.mQuiz.mQuestionArray.push(question);

		//7 heavy
		var question = new Question('','is more heavy than');
		question.setChoice('A','is more light than');
		question.setChoice('B','is more heavy than');
		this.mQuiz.mQuestionArray.push(question);
		
		//8 short	
		var question = new Question('','is more short than');
		question.setChoice('A','is more tall than');
		question.setChoice('B','is more short than');
		this.mQuiz.mQuestionArray.push(question);
		
		//9 tall
		var question = new Question('','is more tall than');
		question.setChoice('A','is more tall than');
		question.setChoice('B','is more short than');
		this.mQuiz.mQuestionArray.push(question);
		
		//10 light
		var question = new Question('','is more light than');
		question.setChoice('A','is more light than');
		question.setChoice('B','is more heavy than');
		this.mQuiz.mQuestionArray.push(question);

		this.createQuestionShapes();
	},

	createQuestionShapes: function()
	{
		this.destroyShapes();

		this.mShapeArray = new Array();		
	
		//1 tall 
                this.mShapeArray.push(new Shape(200,200,150,305,this,"/images/attributes/giraffe.jpg","",""));
                this.mShapeArray.push(new Shape(50,50,550,400,this,"/images/bus/kid.png","",""));

		//2 short
                this.mShapeArray.push(new Shape(50,50,150,400,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(200,200,600,305,this,"/images/attributes/giraffe.jpg","",""));
	
		//3 heavy
                this.mShapeArray.push(new Shape(200,200,150,305,this,"/images/attributes/heavy.gif","",""));
                this.mShapeArray.push(new Shape(50,50,600,400,this,"/images/attributes/feather.jpg","",""));

		//4 light
                this.mShapeArray.push(new Shape(50,50,150,400,this,"/images/attributes/feather.jpg","",""));
                this.mShapeArray.push(new Shape(200,200,600,305,this,"/images/attributes/heavy.gif","",""));
               
		//5 short 
		this.mShapeArray.push(new Shape(50,50,150,400,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(200,200,600,305,this,"/images/attributes/giraffe.jpg","",""));

		//6 light
                this.mShapeArray.push(new Shape(50,50,150,400,this,"/images/attributes/feather.jpg","",""));
                this.mShapeArray.push(new Shape(200,200,600,305,this,"/images/attributes/heavy.gif","",""));

		//7 heavy
                this.mShapeArray.push(new Shape(200,200,150,305,this,"/images/attributes/heavy.gif","",""));
                this.mShapeArray.push(new Shape(50,50,600,400,this,"/images/attributes/feather.jpg","",""));

		//8 short 
		this.mShapeArray.push(new Shape(50,50,150,400,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(200,200,600,305,this,"/images/attributes/giraffe.jpg","",""));

		//9 tall
                this.mShapeArray.push(new Shape(200,200,150,305,this,"/images/attributes/giraffe.jpg","",""));
                this.mShapeArray.push(new Shape(50,50,550,400,this,"/images/bus/kid.png","",""));

		//10 light
                this.mShapeArray.push(new Shape(50,50,150,400,this,"/images/attributes/feather.jpg","",""));
                this.mShapeArray.push(new Shape(200,200,600,305,this,"/images/attributes/heavy.gif","",""));
	
		for (i = 0; i < this.mShapeArray.length; i++)
		{
			this.mShapeArray[i].setVisibility(false);
               		this.mShapeArray[i].mCollidable = false;
               		this.mShapeArray[i].mCollisionOn = false;
		}	
		
		this.setScoreNeeded(this.mQuiz.mQuestionArray.length);

	},

	//state overides
	showCorrectAnswerOutOfTime: function()
        {
                this.mCorrectAnswerStartTime = this.mTimeSinceEpoch;
                this.mInputPad.hide();
                this.mCorrectAnswerBar.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getAnswer();
                this.showCorrectAnswerBar();
                this.showClockShape();
        },

});
