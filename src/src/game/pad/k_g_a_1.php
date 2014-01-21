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
	
		this.hideAllShapeArrays();
	},
	
	destroyShapes: function()
	{
		this.parent();
	
		if (this.BesideShapeArray)
		{
			//shapes and array
                	for (i = 0; i < this.mBesideShapeArray.length; i++)
                	{
                        	this.mBesideShapeArray[i].mDiv.mDiv.removeChild(this.mBesideShapeArray[i].mMesh);
                        	document.body.removeChild(this.mBesideShapeArray[i].mDiv.mDiv);
                       		this.mBesideShapeArray[i] = 0;
                        
				this.mAboveShapeArray[i].mDiv.mDiv.removeChild(this.mAboveShapeArray[i].mMesh);
                        	document.body.removeChild(this.mAboveShapeArray[i].mDiv.mDiv);
                        	this.mAboveShapeArray[i] = 0;
			
				this.mBehindShapeArray[i].mDiv.mDiv.removeChild(this.mBehindShapeArray[i].mMesh);
                        	document.body.removeChild(this.mBehindShapeArray[i].mDiv.mDiv);
                        	this.mBehindShapeArray[i] = 0;
			
				this.mInFrontOfShapeArray[i].mDiv.mDiv.removeChild(this.mInFrontOfShapeArray[i].mMesh);
                        	document.body.removeChild(this.mInFrontOfShapeArray[i].mDiv.mDiv);
                        	this.mInFrontOfShapeArray[i] = 0;
			
				this.mBelowShapeArray[i].mDiv.mDiv.removeChild(this.mBelowShapeArray[i].mMesh);
                        	document.body.removeChild(this.mBelowShapeArray[i].mDiv.mDiv);
                        	this.mBelowShapeArray[i] = 0;
			
				this.mNextToShapeArray[i].mDiv.mDiv.removeChild(this.mNextToShapeArray[i].mMesh);
                        	document.body.removeChild(this.mNextToShapeArray[i].mDiv.mDiv);
                        	this.mNextToShapeArray[i] = 0;
			}
                	this.mBesideShapeArray = 0;
                	this.mAboveShapeArray = 0;
                	this.mBehindShapeArray = 0;
                	this.mInFrontOfShapeArray = 0;
                	this.mBelowShapeArray = 0;
                	this.mNextToShapeArray = 0;
                }
	},

	showQuestion: function()
	{
		this.hideAllShapeArrays();

		this.mInputPad.showQuestion();	
	
		//show question shapes	
		if (this.mQuiz.getQuestion().getAnswer() == 'beside')
		{
                	for (i = 0; i < this.mBesideShapeArray.length; i++)
			{
				this.mBesideShapeArray[i].setVisibility(true);
			}
		}
                
		if (this.mQuiz.getQuestion().getAnswer() == 'above')
                {
                        for (i = 0; i < this.mAboveShapeArray.length; i++)
                        {
                                this.mAboveShapeArray[i].setVisibility(true);
                        }
                }       

		if (this.mQuiz.getQuestion().getAnswer() == 'behind')
                {
                        for (i = 0; i < this.mBehindShapeArray.length; i++)
                        {
                                this.mBehindShapeArray[i].setVisibility(true);
                        }
                }       
		
		if (this.mQuiz.getQuestion().getAnswer() == 'in front of')
                {
                        for (i = 0; i < this.mInFrontOfShapeArray.length; i++)
                        {
                                this.mInFrontOfShapeArray[i].setVisibility(true);
                        }
                }       
		
		if (this.mQuiz.getQuestion().getAnswer() == 'below')
                {
                        for (i = 0; i < this.mBelowShapeArray.length; i++)
                        {
                                this.mBelowShapeArray[i].setVisibility(true);
                        }
                }       
		
		if (this.mQuiz.getQuestion().getAnswer() == 'next to')
                {
                        for (i = 0; i < this.mNextToShapeArray.length; i++)
                        {
                                this.mNextToShapeArray[i].setVisibility(true);
                        }
                }       
	
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

		//1 beside
                var question = new Question('Where is the red monster?','beside');
                question.setChoice('A','beside');
                question.setChoice('B','above');
 		this.mQuiz.mQuestionPoolArray.push(question);

             	//2 above
                var question = new Question('Where is the red monster?','above');
                question.setChoice('A','below');
                question.setChoice('B','above');
                this.mQuiz.mQuestionPoolArray.push(question);

                //3 behind
                var question = new Question('Where is the red monster','behind');
                question.setChoice('A','in front of');
                question.setChoice('B','behind');
                this.mQuiz.mQuestionPoolArray.push(question);

                //4 in front of
                var question = new Question('Where is the red monster','in front of');
                question.setChoice('A','in front of');
                question.setChoice('B','behind');
                this.mQuiz.mQuestionPoolArray.push(question);

                //5 below
                var question = new Question('Where is the red monster','below');
                question.setChoice('A','above');
                question.setChoice('B','below');
                this.mQuiz.mQuestionPoolArray.push(question);

                //6 next to
                var question = new Question('Where is the red monster','next to');
                question.setChoice('A','above');
                question.setChoice('B','next to');
                this.mQuiz.mQuestionPoolArray.push(question);

  		var totalNewGoal       = parseInt(this.mScoreNeeded / 2);
                var totalNew           = 0;

                while (totalNew < totalNewGoal)
                {
                        //reset vars and arrays
                        totalNew = 0;

                        for (d = 0; d < this.mQuiz.mQuestionArray.length; d++)
                        {
                                this.mQuiz.mQuestionArray[d] = 0;
                        }
                        this.mQuiz.mQuestionArray = 0;
                        this.mQuiz.mQuestionArray = new Array();

                        for (s = 0; s < this.mScoreNeeded; s++)
                        {
                                //50% chance of asking newest question
                                var randomChance = Math.floor((Math.random()*2));
                                if (randomChance == 0)
                                {
                                        this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[parseInt(this.mApplication.mLevel-1)]);
                                        totalNew++;
                                }
                                if (randomChance == 1)
                                {
                                        var randomElement = Math.floor((Math.random()*parseInt(this.mApplication.mLevel-1)));
                                        this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomElement]);
                                }
                        }
                }

		this.createQuestionShapes();
	},

	createQuestionShapes: function()
	{
		this.destroyShapes();

		this.mShapeArray = new Array();		
            
	    	//shape arrays
                this.mBesideShapeArray = new Array();
                this.mAboveShapeArray = new Array();
                this.mBehindShapeArray = new Array();
                this.mInFrontOfShapeArray = new Array();
                this.mBelowShapeArray = new Array();
                this.mNextToShapeArray = new Array();
	
		//1 beside 
                this.mBesideShapeArray.push(new Shape(50,50,200,250,this,"/images/monster/red_monster.png","",""));
                this.mBesideShapeArray.push(new Shape(50,50,150,250,this,"/images/bus/kid.png","",""));

		//2 above 
                this.mAboveShapeArray.push(new Shape(50,50,150,200,this,"/images/monster/red_monster.png","",""));
                this.mAboveShapeArray.push(new Shape(50,50,150,250,this,"/images/bus/kid.png","",""));
	
		//3 behind 
                this.mBehindShapeArray.push(new Shape(50,50,150,250,this,"/images/monster/red_monster.png","",""));
                this.mBehindShapeArray.push(new Shape(50,50,150,250,this,"/images/bus/kid.png","",""));

		//4 in front of 
                this.mInFrontOfShapeArray.push(new Shape(50,50,150,250,this,"/images/bus/kid.png","",""));
                this.mInFrontOfShapeArray.push(new Shape(50,50,150,250,this,"/images/monster/red_monster.png","",""));
               
		//5 below
                this.mBelowShapeArray.push(new Shape(50,50,150,250,this,"/images/bus/kid.png","",""));
                this.mBelowShapeArray.push(new Shape(50,50,150,300,this,"/images/monster/red_monster.png","",""));

		//6 next to 
                this.mNextToShapeArray.push(new Shape(50,50,100,250,this,"/images/monster/red_monster.png","",""));
                this.mNextToShapeArray.push(new Shape(50,50,150,250,this,"/images/bus/kid.png","",""));

		this.hideAllShapeArrays(); 
	},


	hideAllShapeArrays: function()
	{
		for (i = 0; i < this.mBesideShapeArray.length; i++)
		{
			this.mBesideShapeArray[i].setVisibility(false);
               		this.mBesideShapeArray[i].mCollidable = false;
               		this.mBesideShapeArray[i].mCollisionOn = false;
			
			this.mAboveShapeArray[i].setVisibility(false);
               		this.mAboveShapeArray[i].mCollidable = false;
               		this.mAboveShapeArray[i].mCollisionOn = false;
			
			this.mBehindShapeArray[i].setVisibility(false);
               		this.mBehindShapeArray[i].mCollidable = false;
               		this.mBehindShapeArray[i].mCollisionOn = false;
			
			this.mInFrontOfShapeArray[i].setVisibility(false);
               		this.mInFrontOfShapeArray[i].mCollidable = false;
               		this.mInFrontOfShapeArray[i].mCollisionOn = false;
			
			this.mBelowShapeArray[i].setVisibility(false);
               		this.mBelowShapeArray[i].mCollidable = false;
               		this.mBelowShapeArray[i].mCollisionOn = false;
			
			this.mNextToShapeArray[i].setVisibility(false);
               		this.mNextToShapeArray[i].mCollidable = false;
               		this.mNextToShapeArray[i].mCollisionOn = false;
		}	

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
