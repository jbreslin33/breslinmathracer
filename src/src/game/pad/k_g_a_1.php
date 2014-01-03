var k_g_a_1 = new Class(
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
                this.mInputPad.showQuestion();
                this.mInputPad.hide();
                this.mInputPad.mNumQuestion.setVisibility('true');
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

		//1 beside 
		var question = new Question('Where is the red monster?','beside');
		question.setChoice('A','beside');
		question.setChoice('B','above');
		this.mQuiz.mQuestionArray.push(question);
	
		//2 above	
		var question = new Question('Where is the red monster?','above');
		question.setChoice('A','below');
		question.setChoice('B','above');
		this.mQuiz.mQuestionArray.push(question);

		//3 behind 
		var question = new Question('Where is the red monster','behind');
		question.setChoice('A','in front of');
		question.setChoice('B','behind');
		this.mQuiz.mQuestionArray.push(question);
		
		//4 in front of  
		var question = new Question('Where is the red monster','in front of');
		question.setChoice('A','in front of');
		question.setChoice('B','behind');
		this.mQuiz.mQuestionArray.push(question);
		
		//5 below	
		var question = new Question('Where is the red monster','below');
		question.setChoice('A','above');
		question.setChoice('B','below');
		this.mQuiz.mQuestionArray.push(question);
		
		//6 next to 
		var question = new Question('Where is the red monster','next to');
		question.setChoice('A','above');
		question.setChoice('B','next to');
		this.mQuiz.mQuestionArray.push(question);

      		//7 beside
                var question = new Question('Where is the red monster?','beside');
                question.setChoice('A','beside');
                question.setChoice('B','above');
                this.mQuiz.mQuestionArray.push(question);

                //8 above
                var question = new Question('Where is the red monster?','above');
                question.setChoice('A','below');
                question.setChoice('B','above');
                this.mQuiz.mQuestionArray.push(question);

                //9 behind
                var question = new Question('Where is the red monster','behind');
                question.setChoice('A','in front of');
                question.setChoice('B','behind');
                this.mQuiz.mQuestionArray.push(question);

                //10 in front of
                var question = new Question('Where is the red monster','in front of');
                question.setChoice('A','in front of');
                question.setChoice('B','behind');
                this.mQuiz.mQuestionArray.push(question);

		this.createQuestionShapes();
	},

	createQuestionShapes: function()
	{
		this.destroyShapes();

		this.mShapeArray = new Array();		
	
		//1 beside 
                this.mShapeArray.push(new Shape(50,50,200,250,this,"/images/monster/red_monster.png","",""));
                this.mShapeArray.push(new Shape(50,50,150,250,this,"/images/bus/kid.png","",""));

		//2 above 
                this.mShapeArray.push(new Shape(50,50,150,200,this,"/images/monster/red_monster.png","",""));
                this.mShapeArray.push(new Shape(50,50,150,250,this,"/images/bus/kid.png","",""));
	
		//3 behind 
                this.mShapeArray.push(new Shape(50,50,150,250,this,"/images/monster/red_monster.png","",""));
                this.mShapeArray.push(new Shape(50,50,150,250,this,"/images/bus/kid.png","",""));

		//4 in front of 
                this.mShapeArray.push(new Shape(50,50,150,250,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,150,250,this,"/images/monster/red_monster.png","",""));
               
		//5 below
                this.mShapeArray.push(new Shape(50,50,150,250,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,150,300,this,"/images/monster/red_monster.png","",""));

		//6 next to 
                this.mShapeArray.push(new Shape(50,50,100,250,this,"/images/monster/red_monster.png","",""));
                this.mShapeArray.push(new Shape(50,50,150,250,this,"/images/bus/kid.png","",""));
      
		//7 beside
                this.mShapeArray.push(new Shape(50,50,200,250,this,"/images/monster/red_monster.png","",""));
                this.mShapeArray.push(new Shape(50,50,150,250,this,"/images/bus/kid.png","",""));

                //8 above
                this.mShapeArray.push(new Shape(50,50,150,200,this,"/images/monster/red_monster.png","",""));
                this.mShapeArray.push(new Shape(50,50,150,250,this,"/images/bus/kid.png","",""));

                //9 behind
                this.mShapeArray.push(new Shape(50,50,150,250,this,"/images/monster/red_monster.png","",""));
                this.mShapeArray.push(new Shape(50,50,150,250,this,"/images/bus/kid.png","",""));

                //10 in front of
                this.mShapeArray.push(new Shape(50,50,150,250,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,150,250,this,"/images/monster/red_monster.png","",""));

	
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
                this.mInputPad.showQuestion();
                this.mInputPad.hide();
                this.mInputPad.mNumQuestion.setVisibility('true');

        }


});
