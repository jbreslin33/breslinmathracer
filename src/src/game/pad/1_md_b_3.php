var g1_md_b_3 = new Class(
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
	
	update: function()
	{
		this.parent();
		this.updateClock();
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

		//1 circle
		var question = new Question('What is this?','circle');
		question.setChoice('A','dddddcircle');
		question.setChoice('B','cone');
		this.mQuiz.mQuestionArray.push(question);
	
		//2 cone	
		var question = new Question('What is this?','cone');
		question.setChoice('A','circle');
		question.setChoice('B','cone');
		this.mQuiz.mQuestionArray.push(question);

		//3 cube
		var question = new Question('What is this?','cube');
		question.setChoice('A','cube');
		question.setChoice('B','cylinder');
		this.mQuiz.mQuestionArray.push(question);
		
		//4 cylinder
		var question = new Question('What is this?','cylinder');
		question.setChoice('A','hexagon');
		question.setChoice('B','cylinder');
		this.mQuiz.mQuestionArray.push(question);
		
		//5 hexagon	
		var question = new Question('What is this?','hexagon');
		question.setChoice('A','hexagon');
		question.setChoice('B','rectangle');
		this.mQuiz.mQuestionArray.push(question);
		
		//6 rectangle 
		var question = new Question('What is this?','rectangle');
		question.setChoice('A','sphere');
		question.setChoice('B','rectangle');
		this.mQuiz.mQuestionArray.push(question);

		//7 sphere
		var question = new Question('What is this?','sphere');
		question.setChoice('A','sphere');
		question.setChoice('B','square');
		this.mQuiz.mQuestionArray.push(question);
		
		//8 square	
		var question = new Question('What is this?','square');
		question.setChoice('A','triangle');
		question.setChoice('B','square');
		this.mQuiz.mQuestionArray.push(question);
		
		//9 triangle
		var question = new Question('What is this?','triangle');
		question.setChoice('A','triangle');
		question.setChoice('B','circle');
		this.mQuiz.mQuestionArray.push(question);
		
		//10 circle
		var question = new Question('What is this?','circle');
		question.setChoice('A','cone');
		question.setChoice('B','circle');
		this.mQuiz.mQuestionArray.push(question);

		this.createQuestionShapes();
	},

	createQuestionShapes: function()
	{
		this.destroyShapes();

		this.mShapeArray = new Array();		
		
		this.drawClock();	

                this.mShapeArray.push(new Shape(200,200,450,275,this,"/images/shapes/circle.png","",""));
                this.mShapeArray.push(new Shape(200,200,450,275,this,"/images/shapes/cone.png","",""));
                this.mShapeArray.push(new Shape(200,200,450,275,this,"/images/shapes/cube.jpg","",""));
                this.mShapeArray.push(new Shape(200,200,450,275,this,"/images/shapes/cylinder.png","",""));
                this.mShapeArray.push(new Shape(200,200,450,275,this,"/images/shapes/hexagon.png","",""));
                this.mShapeArray.push(new Shape(200,200,450,275,this,"/images/shapes/rectangle.png","",""));
                this.mShapeArray.push(new Shape(200,200,450,275,this,"/images/shapes/sphere.png","",""));
                this.mShapeArray.push(new Shape(200,200,450,275,this,"/images/shapes/square.png","",""));
                this.mShapeArray.push(new Shape(200,200,450,275,this,"/images/shapes/triangle.png","",""));
                this.mShapeArray.push(new Shape(200,200,450,275,this,"/images/shapes/circle.png","",""));
               	
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

	drawClock: function()
	{
		// Creates canvas 320 × 200 at 10, 50
		var paper = Raphael(10, 50, 320, 200);

		// Creates circle at x = 50, y = 40, with radius 10
		var circle = paper.circle(50, 40, 10);

		// Sets the fill attribute of the circle to red (#f00)
		circle.attr("fill", "#f00");

		// Sets the stroke attribute of the circle to white
		circle.attr("stroke", "#fff");

	},
 	
	updateClock: function()
	{
       	}
	

});
