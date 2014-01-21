var k_g_a_1 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);

		//answers 
                this.mThresholdTime = 60000;

		//input pad
                this.mInputPad = new ButtonChoicePad(application);
                
		this.mLastCorrectButtonNumber = 0;

		this.mCorrectAnswerArray = new Array();
		this.mCorrectAnswerArray.push('beside');
		this.mCorrectAnswerArray.push('above');
		this.mCorrectAnswerArray.push('behind');
		this.mCorrectAnswerArray.push('in front of');
		this.mCorrectAnswerArray.push('below');
		this.mCorrectAnswerArray.push('next to');
	},

	showQuestion: function()
	{
		this.mInputPad.showQuestion();	
		
		for (i = 0; i < this.mShapeArray.length; i++)
		{
			this.mShapeArray[i].setVisibility(false);
               		this.mShapeArray[i].mCollidable = false;
               		this.mShapeArray[i].mCollisionOn = false;
		}
	
		//show question shapes	
		if (this.mQuiz.getQuestion().getAnswer() == 'beside')
		{
			this.mShapeArray[0].setVisibility(true);
			this.mShapeArray[1].setVisibility(true);
               	} 
		if (this.mQuiz.getQuestion().getAnswer() == 'above')
                {
			this.mShapeArray[2].setVisibility(true);
			this.mShapeArray[3].setVisibility(true);
		}       

		if (this.mQuiz.getQuestion().getAnswer() == 'behind')
                {
			this.mShapeArray[4].setVisibility(true);
			this.mShapeArray[5].setVisibility(true);
                }       
		
		if (this.mQuiz.getQuestion().getAnswer() == 'in front of')
                {
			this.mShapeArray[6].setVisibility(true);
			this.mShapeArray[7].setVisibility(true);
                }       
		
		if (this.mQuiz.getQuestion().getAnswer() == 'below')
                {
			this.mShapeArray[8].setVisibility(true);
			this.mShapeArray[9].setVisibility(true);
                }       
		
		if (this.mQuiz.getQuestion().getAnswer() == 'next to')
                {
			this.mShapeArray[10].setVisibility(true);
			this.mShapeArray[11].setVisibility(true);
                }       

		this.log('setButtons');
		this.setButtons();
	},

	setButtons: function()
        {
                this.mCorrectButtonNumber = 0;

		var goOnce = true;

                while (goOnce == true ||this.mLastCorrectButtonNumber == this.mCorrectButtonNumber || this.mInputPad.mButtonA.mMesh.innerHTML == this.mInputPad.mButtonB.mMesh.innerHTML || this.mInputPad.mButtonA.mMesh.innerHTML == this.mInputPad.mButtonC.mMesh.innerHTML || this.mInputPad.mButtonB.mMesh.innerHTML == this.mInputPad.mButtonC.mMesh.innerHTML)
                {
                        this.mCorrectButtonNumber = Math.floor(Math.random()*3);
			this.log('c:' +  this.mCorrectButtonNumber);

                        if (this.mCorrectButtonNumber == 0)
                        {
                		this.mInputPad.mButtonA.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getAnswer();
                		this.mInputPad.mButtonB.mMesh.innerHTML = '' + this.mCorrectAnswerArray[parseInt(Math.floor(Math.random()*5))];
                		this.mInputPad.mButtonC.mMesh.innerHTML = '' + this.mCorrectAnswerArray[parseInt(Math.floor(Math.random()*5))];
                        }
                        if (this.mCorrectButtonNumber == 1)
                        {
                		this.mInputPad.mButtonA.mMesh.innerHTML = '' + this.mCorrectAnswerArray[parseInt(Math.floor(Math.random()*5))];
                		this.mInputPad.mButtonB.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getAnswer();
                		this.mInputPad.mButtonC.mMesh.innerHTML = '' + this.mCorrectAnswerArray[parseInt(Math.floor(Math.random()*5))];
                        }
                        if (this.mCorrectButtonNumber == 2)
                        {
                		this.mInputPad.mButtonA.mMesh.innerHTML = '' + this.mCorrectAnswerArray[parseInt(Math.floor(Math.random()*5))];
                		this.mInputPad.mButtonB.mMesh.innerHTML = '' + this.mCorrectAnswerArray[parseInt(Math.floor(Math.random()*5))];
                		this.mInputPad.mButtonC.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getAnswer();
                        }
			goOnce = false;
                }
		this.mLastCorrectButtonNumber = this.mCorrectButtonNumber;
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
 		this.mQuiz.mQuestionPoolArray.push(question);

             	//2 above
                var question = new Question('Where is the red monster?','above');
                this.mQuiz.mQuestionPoolArray.push(question);

                //3 behind
                var question = new Question('Where is the red monster','behind');
                this.mQuiz.mQuestionPoolArray.push(question);

                //4 in front of
                var question = new Question('Where is the red monster','in front of');
                this.mQuiz.mQuestionPoolArray.push(question);

                //5 below
                var question = new Question('Where is the red monster','below');
                this.mQuiz.mQuestionPoolArray.push(question);

                //6 next to
                var question = new Question('Where is the red monster','next to');
                this.mQuiz.mQuestionPoolArray.push(question);

                var totalNew           = 0;

                while (totalNew < this.mScoreNeeded * .4 || totalNew > this.mScoreNeeded * .6)
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

		for (i = 0; i < this.mShapeArray.length; i++)
		{
			this.mShapeArray[i].setVisibility(false);
               		this.mShapeArray[i].mCollidable = false;
               		this.mShapeArray[i].mCollisionOn = false;
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
