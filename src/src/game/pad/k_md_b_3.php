var k_md_b_3 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);

		//answers 
                this.mThresholdTime = 10000;

		//input pad
		this.mInputPad = new ButtonMultipleChoicePadSpread(application);
	
		//count shape array
		this.mCountShapeArrayA = new Array();
		this.mCountShapeArrayB = new Array();
		this.mCountShapeArrayC = new Array();
		this.mCountShapeArrayD = new Array();

		//move buttons
		this.mInputPad.mButtonA.setPosition(100,100);
	},

	destroyShapes: function()
	{
		this.parent();

		//shapes and array
                for (i = 0; i < this.mCountShapeArray.length; i++)
                {
			//A
                        this.mCountShapeArrayA[i].mDiv.mDiv.removeChild(this.mCountShapeArrayA[i].mMesh);
                        document.body.removeChild(this.mCountShapeArrayA[i].mDiv.mDiv);
                        this.mCountShapeArrayA[i] = 0;
			//A
                        this.mCountShapeArrayB[i].mDiv.mDiv.removeChild(this.mCountShapeArrayB[i].mMesh);
                        document.body.removeChild(this.mCountShapeArrayB[i].mDiv.mDiv);
                        this.mCountShapeArrayB[i] = 0;
			//A
                        this.mCountShapeArrayC[i].mDiv.mDiv.removeChild(this.mCountShapeArrayC[i].mMesh);
                        document.body.removeChild(this.mCountShapeArrayC[i].mDiv.mDiv);
                        this.mCountShapeArrayC[i] = 0;
			//D
                        this.mCountShapeArrayD[i].mDiv.mDiv.removeChild(this.mCountShapeArrayD[i].mMesh);
                        document.body.removeChild(this.mCountShapeArrayD[i].mDiv.mDiv);
                        this.mCountShapeArrayD[i] = 0;
                }
                this.mShapeArray = 0;
	},

	showQuestion: function()
	{
		for (i = 0; i < this.mCountShapeArrayA.length; i++)
                {
                        this.mCountShapeArrayA[i].setVisibility(true);
                        this.mCountShapeArrayB[i].setVisibility(true);
                        this.mCountShapeArrayC[i].setVisibility(true);
                        this.mCountShapeArrayD[i].setVisibility(true);
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
		var question = new Question('What has the most?','kids');
		question.setChoice('A','girafes');
		question.setChoice('B','kids');
		question.setChoice('C','red monsters');
		question.setChoice('D','feathers');
		this.mQuiz.mQuestionArray.push(question);
	
		//short	
		var question = new Question('What has the least?','girafes');
		question.setChoice('A','girafes');
		question.setChoice('B','kids');
		question.setChoice('C','red monsters');
		question.setChoice('D','feathers');
		this.mQuiz.mQuestionArray.push(question);

		//heavy
		var question = new Question('How many red monsters?','5');
		question.setChoice('A','2');
		question.setChoice('B','3');
		question.setChoice('C','4');
		question.setChoice('D','5');
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
		this.mCountShapeArrayA = new Array();		
		this.mCountShapeArrayB = new Array();		
		this.mCountShapeArrayC = new Array();		
		this.mCountShapeArrayD = new Array();		

                this.mCountShapeArrayA.push(new Shape(50,50,450,50,this,"/images/attributes/girafe.jpg","",""));
                this.mCountShapeArrayB.push(new Shape(50,50,450,150,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayC.push(new Shape(50,50,450,250,this,"/images/monster/red_monster.png","",""));
                this.mCountShapeArrayD.push(new Shape(50,50,450,350,this,"/images/attributes/feather.jpg","",""));
                
		this.mCountShapeArrayA.push(new Shape(50,50,500,50,this,"/images/attributes/girafe.jpg","",""));
                this.mCountShapeArrayB.push(new Shape(50,50,500,150,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayC.push(new Shape(50,50,500,250,this,"/images/monster/red_monster.png","",""));
                this.mCountShapeArrayD.push(new Shape(50,50,500,350,this,"/images/attributes/feather.jpg","",""));
		
		this.mCountShapeArrayA.push(new Shape(50,50,550,50,this,"/images/attributes/girafe.jpg","",""));
                this.mCountShapeArrayB.push(new Shape(50,50,550,150,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayC.push(new Shape(50,50,550,250,this,"/images/monster/red_monster.png","",""));
                this.mCountShapeArrayD.push(new Shape(50,50,550,350,this,"/images/attributes/feather.jpg","",""));
		
		this.mCountShapeArrayA.push(new Shape(50,50,600,50,this,"/images/attributes/girafe.jpg","",""));
                this.mCountShapeArrayB.push(new Shape(50,50,600,150,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayC.push(new Shape(50,50,600,250,this,"/images/monster/red_monster.png","",""));
                this.mCountShapeArrayD.push(new Shape(50,50,600,350,this,"/images/attributes/feather.jpg","",""));
		
		this.mCountShapeArrayA.push(new Shape(50,50,650,50,this,"/images/attributes/girafe.jpg","",""));
                this.mCountShapeArrayB.push(new Shape(50,50,650,150,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayC.push(new Shape(50,50,650,250,this,"/images/monster/red_monster.png","",""));
                this.mCountShapeArrayD.push(new Shape(50,50,650,350,this,"/images/attributes/feather.jpg","",""));
		
		this.mCountShapeArrayA.push(new Shape(50,50,700,50,this,"/images/attributes/girafe.jpg","",""));
                this.mCountShapeArrayB.push(new Shape(50,50,700,150,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayC.push(new Shape(50,50,700,250,this,"/images/monster/red_monster.png","",""));
                this.mCountShapeArrayD.push(new Shape(50,50,700,350,this,"/images/attributes/feather.jpg","",""));

		for (i = 0; i < this.mCountShapeArrayA.length; i++)
		{
			//A
			this.mCountShapeArrayA[i].setVisibility(false);
               		this.mCountShapeArrayA[i].mCollidable = false;
               		this.mCountShapeArrayA[i].mCollisionOn = false;
			//B
			this.mCountShapeArrayB[i].setVisibility(false);
               		this.mCountShapeArrayB[i].mCollidable = false;
               		this.mCountShapeArrayB[i].mCollisionOn = false;
			//C
			this.mCountShapeArrayC[i].setVisibility(false);
               		this.mCountShapeArrayC[i].mCollidable = false;
               		this.mCountShapeArrayC[i].mCollisionOn = false;
			//D
			this.mCountShapeArrayD[i].setVisibility(false);
               		this.mCountShapeArrayD[i].mCollidable = false;
               		this.mCountShapeArrayD[i].mCollisionOn = false;
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
