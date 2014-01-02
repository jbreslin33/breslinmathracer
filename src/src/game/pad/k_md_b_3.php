var k_md_b_3 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);

		//answers 
                this.mThresholdTime = 10000;

		//input pad
		this.mInputPad = new ButtonMultipleChoicePad(application);
	
		//count shape array
		this.mCountShapeArray = new Array();
	},

	destroyShapes: function()
	{
		this.parent();

		//shapes and array
                for (i = 0; i < this.mCountShapeArray.length; i++)
                {
                        //back to div
                        this.mCountShapeArray[i].mDiv.mDiv.removeChild(this.mCountShapeArray[i].mMesh);
                        document.body.removeChild(this.mCountShapeArray[i].mDiv.mDiv);
                        this.mCountShapeArray[i] = 0;
                }
                this.mShapeArray = 0;
	},

	showQuestion: function()
	{
		for (i = 0; i < this.mCountShapeArray.length; i++)
                {
                        this.mCountShapeArray[i].setVisibility(true);
                }
		this.mInputPad.showQuestion();	
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

		//tall
		var question = new Question('What is this?','tall');
		question.setChoice('A','tall');
		question.setChoice('B','short');
		this.mQuiz.mQuestionArray.push(question);
	
		//short	
		var question = new Question('What is this?','short');
		question.setChoice('A','tall');
		question.setChoice('B','short');
		this.mQuiz.mQuestionArray.push(question);

		//heavy
		var question = new Question('What is this?','heavy');
		question.setChoice('A','light');
		question.setChoice('B','heavy');
		this.mQuiz.mQuestionArray.push(question);
		
		//light
		var question = new Question('What is this?','light');
		question.setChoice('A','light');
		question.setChoice('B','heavy');
		this.mQuiz.mQuestionArray.push(question);
		
		//short	
		var question = new Question('What is this?','short');
		question.setChoice('A','tall');
		question.setChoice('B','short');
		this.mQuiz.mQuestionArray.push(question);
		
		//light
		var question = new Question('What is this?','light');
		question.setChoice('A','light');
		question.setChoice('B','heavy');
		this.mQuiz.mQuestionArray.push(question);

		//heavy
		var question = new Question('What is this?','heavy');
		question.setChoice('A','light');
		question.setChoice('B','heavy');
		this.mQuiz.mQuestionArray.push(question);
		
		//short	
		var question = new Question('What is this?','short');
		question.setChoice('A','tall');
		question.setChoice('B','short');
		this.mQuiz.mQuestionArray.push(question);
		
		//tall
		var question = new Question('What is this?','tall');
		question.setChoice('A','tall');
		question.setChoice('B','short');
		this.mQuiz.mQuestionArray.push(question);
		
		//light
		var question = new Question('What is this?','light');
		question.setChoice('A','light');
		question.setChoice('B','heavy');
		this.mQuiz.mQuestionArray.push(question);

		this.createQuestionShapes();
	},

	createQuestionShapes: function()
	{
		this.mCountShapeArray = new Array();		

                this.mCountShapeArray.push(new Shape(50,50,50,050,this,"/images/attributes/girafe.jpg","",""));
                this.mCountShapeArray.push(new Shape(50,50,50,150,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new Shape(50,50,50,250,this,"/images/monster/red_monster.png","",""));
                this.mCountShapeArray.push(new Shape(50,50,50,350,this,"/images/attributes/feather.jpg","",""));
                
		this.mCountShapeArray.push(new Shape(50,50,100,050,this,"/images/attributes/girafe.jpg","",""));
                this.mCountShapeArray.push(new Shape(50,50,100,150,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new Shape(50,50,100,250,this,"/images/monster/red_monster.png","",""));
                this.mCountShapeArray.push(new Shape(50,50,100,350,this,"/images/attributes/feather.jpg","",""));
		
		this.mCountShapeArray.push(new Shape(50,50,150,050,this,"/images/attributes/girafe.jpg","",""));
                this.mCountShapeArray.push(new Shape(50,50,150,150,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new Shape(50,50,150,250,this,"/images/monster/red_monster.png","",""));
                this.mCountShapeArray.push(new Shape(50,50,150,350,this,"/images/attributes/feather.jpg","",""));
		
		this.mCountShapeArray.push(new Shape(50,50,200,050,this,"/images/attributes/girafe.jpg","",""));
                this.mCountShapeArray.push(new Shape(50,50,200,150,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new Shape(50,50,200,250,this,"/images/monster/red_monster.png","",""));
                this.mCountShapeArray.push(new Shape(50,50,200,350,this,"/images/attributes/feather.jpg","",""));
		
		this.mCountShapeArray.push(new Shape(50,50,250,050,this,"/images/attributes/girafe.jpg","",""));
                this.mCountShapeArray.push(new Shape(50,50,250,150,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new Shape(50,50,250,250,this,"/images/monster/red_monster.png","",""));
                this.mCountShapeArray.push(new Shape(50,50,250,350,this,"/images/attributes/feather.jpg","",""));
		
		for (i = 0; i < this.mCountShapeArray.length; i++)
		{
			this.mCountShapeArray[i].setVisibility(false);
               		this.mCountShapeArray[i].mCollidable = false;
               		this.mCountShapeArray[i].mCollisionOn = false;
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
