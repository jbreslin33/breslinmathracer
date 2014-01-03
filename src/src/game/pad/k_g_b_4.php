var k_g_b_4 = new Class(
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

		//1 more sides 
		var question = new Question('','has more sides than');
		question.setChoice('A','has less sides than');
		question.setChoice('B','has same sides as');
		question.setChoice('C','has more sides than');
		this.mQuiz.mQuestionArray.push(question);
	
		//2 less sides	
		var question = new Question('','has less sides than');
		question.setChoice('A','has less sides than');
		question.setChoice('B','has same sides as');
		question.setChoice('C','has more sides than');
		this.mQuiz.mQuestionArray.push(question);

		//3 less sides	
		var question = new Question('','has less sides than');
		question.setChoice('A','has less sides than');
		question.setChoice('B','has same sides as');
		question.setChoice('C','has more sides than');
		this.mQuiz.mQuestionArray.push(question);
		
		//4 more sides 
		var question = new Question('','has more sides than');
		question.setChoice('A','has less sides than');
		question.setChoice('B','has same sides as');
		question.setChoice('C','has more sides than');
		this.mQuiz.mQuestionArray.push(question);
     
		//5 more corners 
                var question = new Question('','has more corners than');
                question.setChoice('A','has less corners than');
                question.setChoice('B','has same corners as');
                question.setChoice('C','has more corners than');
                this.mQuiz.mQuestionArray.push(question);

                //6 less corners 
                var question = new Question('','has less corners than');
                question.setChoice('A','has less corners than');
                question.setChoice('B','has same corners as');
                question.setChoice('C','has more corners than');
                this.mQuiz.mQuestionArray.push(question);

                //7 less corners 
                var question = new Question('','has less corners than');
                question.setChoice('A','has less corners than');
                question.setChoice('B','has same corners as');
                question.setChoice('C','has more corners than');
                this.mQuiz.mQuestionArray.push(question);
                
                //8 more corners
                var question = new Question('','has more corners than');
                question.setChoice('A','has less corners than');
                question.setChoice('B','has same corners as');
                question.setChoice('C','has more corners than');
                this.mQuiz.mQuestionArray.push(question);
		
		//9 more sides 
		var question = new Question('','has more sides than');
		question.setChoice('A','has less sides than');
		question.setChoice('B','has same sides as');
		question.setChoice('C','has more sides than');
		this.mQuiz.mQuestionArray.push(question);
		
  		//10 less corners 
                var question = new Question('','has less corners than');
                question.setChoice('A','has less corners than');
                question.setChoice('B','has same corners as');
                question.setChoice('C','has more corners than');
                this.mQuiz.mQuestionArray.push(question);

		this.createQuestionShapes();
	},

	createQuestionShapes: function()
	{
		this.destroyShapes();

		this.mShapeArray = new Array();		
	
		//1 more sides 
                this.mShapeArray.push(new Shape(100,100,200,175,this,"/images/shapes/hexagon.png","",""));
                this.mShapeArray.push(new Shape(100,100,550,175,this,"/images/shapes/square.png","",""));

		//2 less sides 
                this.mShapeArray.push(new Shape(100,100,200,175,this,"/images/shapes/square.png","",""));
                this.mShapeArray.push(new Shape(100,100,550,175,this,"/images/shapes/hexagon.png","",""));
	
		//3 less sides 
                this.mShapeArray.push(new Shape(100,100,200,175,this,"/images/shapes/triangle.png","",""));
                this.mShapeArray.push(new Shape(100,100,550,175,this,"/images/shapes/rectangle.png","",""));
		
		//4 more sides 
                this.mShapeArray.push(new Shape(100,100,200,175,this,"/images/shapes/square.png","",""));
                this.mShapeArray.push(new Shape(100,100,550,175,this,"/images/shapes/triangle.png","",""));

	        //5 more corners 
                this.mShapeArray.push(new Shape(100,100,200,175,this,"/images/shapes/cube.jpg","",""));
                this.mShapeArray.push(new Shape(100,100,550,175,this,"/images/shapes/square.png","",""));

                //6 less corners
                this.mShapeArray.push(new Shape(100,100,200,175,this,"/images/shapes/rectangle.png","",""));
                this.mShapeArray.push(new Shape(100,100,550,175,this,"/images/shapes/hexagon.png","",""));

                //7 less corners
                this.mShapeArray.push(new Shape(100,100,200,175,this,"/images/shapes/circle.png","",""));
                this.mShapeArray.push(new Shape(100,100,550,175,this,"/images/shapes/triangle.png","",""));

                //8 more corners
                this.mShapeArray.push(new Shape(100,100,200,175,this,"/images/shapes/rectangle.png","",""));
                this.mShapeArray.push(new Shape(100,100,550,175,this,"/images/shapes/triangle.png","",""));
		
		//9 more sides 
                this.mShapeArray.push(new Shape(100,100,200,175,this,"/images/shapes/square.png","",""));
                this.mShapeArray.push(new Shape(100,100,550,175,this,"/images/shapes/triangle.png","",""));
                
		//10 less corners 
                this.mShapeArray.push(new Shape(100,100,200,175,this,"/images/shapes/triangle.png","",""));
                this.mShapeArray.push(new Shape(100,100,550,175,this,"/images/shapes/rectangle.png","",""));

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
