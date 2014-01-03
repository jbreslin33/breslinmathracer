var k_g_a_3 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);

		//answers 
                this.mThresholdTime = 10000;

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
			this.log('destroyShape:' + i);
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
		this.mShapeArray[this.mScore].setVisibility(true);
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

		//1 flat  
		var question = new Question('','flat');
		question.setChoice('A','flat');
		question.setChoice('B','solid');
		this.mQuiz.mQuestionArray.push(question);
	
		//2 solid  
		var question = new Question('','solid');
		question.setChoice('A','flat');
		question.setChoice('B','solid');
		this.mQuiz.mQuestionArray.push(question);

		//3 solid  
		var question = new Question('','solid');
		question.setChoice('A','flat');
		question.setChoice('B','solid');
		this.mQuiz.mQuestionArray.push(question);
		this.createQuestionShapes();
		
		//4 solid  
		var question = new Question('','solid');
		question.setChoice('A','flat');
		question.setChoice('B','solid');
		this.mQuiz.mQuestionArray.push(question);
		
		//5 flat  
		var question = new Question('','flat');
		question.setChoice('A','flat');
		question.setChoice('B','solid');
		this.mQuiz.mQuestionArray.push(question);
		
		//6 flat  
		var question = new Question('','flat');
		question.setChoice('A','flat');
		question.setChoice('B','solid');
		this.mQuiz.mQuestionArray.push(question);
		
		//7 solid  
		var question = new Question('','solid');
		question.setChoice('A','flat');
		question.setChoice('B','solid');
		this.mQuiz.mQuestionArray.push(question);
		
		//8 flat  
		var question = new Question('','flat');
		question.setChoice('A','flat');
		question.setChoice('B','solid');
		this.mQuiz.mQuestionArray.push(question);
			
		//9 flat  
		var question = new Question('','flat');
		question.setChoice('A','flat');
		question.setChoice('B','solid');
		this.mQuiz.mQuestionArray.push(question);
		
		//10 solid  
		var question = new Question('','solid');
		question.setChoice('A','flat');
		question.setChoice('B','solid');
		this.mQuiz.mQuestionArray.push(question);
	},

	createQuestionShapes: function()
	{
		this.log('createQ');
		this.destroyShapes();

		this.mShapeArray = new Array();		

                this.mShapeArray.push(new Shape(100,100,150,225,this,"/images/shapes/circle.png","",""));
                this.mShapeArray.push(new Shape(100,100,150,225,this,"/images/shapes/cone.png","",""));
                this.mShapeArray.push(new Shape(100,100,150,225,this,"/images/shapes/cube.jpg","",""));
                this.mShapeArray.push(new Shape(100,100,150,225,this,"/images/shapes/cylinder.png","",""));
                this.mShapeArray.push(new Shape(100,100,150,225,this,"/images/shapes/hexagon.png","",""));
                this.mShapeArray.push(new Shape(100,100,150,225,this,"/images/shapes/rectangle.png","",""));
                this.mShapeArray.push(new Shape(100,100,150,225,this,"/images/shapes/sphere.png","",""));
                this.mShapeArray.push(new Shape(100,100,150,225,this,"/images/shapes/square.png","",""));
                this.mShapeArray.push(new Shape(100,100,150,225,this,"/images/shapes/triangle.png","",""));
                this.mShapeArray.push(new Shape(100,100,150,225,this,"/images/shapes/cone.png","",""));
                	
		for (i = 0; i < this.mShapeArray.length; i++)
		{
			this.mShapeArray[i].setVisibility(false);
               		this.mShapeArray[i].mCollidable = false;
               		this.mShapeArray[i].mCollisionOn = false;
		}	
		
		this.setScoreNeeded(this.mShapeArray.length);

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
