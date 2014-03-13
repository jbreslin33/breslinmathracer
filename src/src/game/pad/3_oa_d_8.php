var g3_oa_d_8 = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);
		
		this.setScoreNeeded(1);
	},

     	//showCorrectAnswer
        showCorrectAnswerEnter: function()
        {
		this.parent();
                
                this.mShapeArray[1].setSize(700,100);
                this.mShapeArray[1].setPosition(380,80);
       
		//move dont forget 
	        this.mShapeArray[8].setVisibility(false);
	        this.mShapeArray[9].setVisibility(false);
        },

        //outOfTime
        outOfTimeEnter: function()
        {
		this.parent();

                this.mShapeArray[0].setPosition(650,170);

                this.mShapeArray[1].setSize(700,100);
                this.mShapeArray[1].setPosition(380,80);
	      
		//move frantic clock 
		this.mShapeArray[8].setPosition(650,300);
        },

    	tip: function()
        {
                if (this.mQuiz.getQuestion().mTipArray.length > 0)
                {
                        //tip header
                        this.mShapeArray[2].setPosition(140,100);
                        this.mShapeArray[2].setSize(200,10);
                        this.mShapeArray[2].setVisibility(true);

                        if (this.mQuiz.getQuestion().mTipArray.length == 1)
                        {
                                this.mShapeArray[2].mMesh.innerHTML = 'Tip:';
                        }
                        else
                        {
                                this.mShapeArray[2].mMesh.innerHTML = 'Tips:';
                        }

                        if (this.mQuiz.getQuestion().mTipArray.length > 0)
                        {
                                this.mShapeArray[3].setPosition(380,150);
                                this.mShapeArray[3].setSize(700,10);
                                this.mShapeArray[3].setVisibility(true);
                                this.mShapeArray[3].mMesh.innerHTML = this.mQuiz.getQuestion().mTipArray[0];
                        }
                        if (this.mQuiz.getQuestion().mTipArray.length > 3)
                        {
                                this.mShapeArray[6].setPosition(380,180);
                        	this.mShapeArray[6].setSize(700,10);
                                this.mShapeArray[6].setVisibility(true);
                                this.mShapeArray[6].mMesh.innerHTML = this.mQuiz.getQuestion().mTipArray[3];
			}
                }
        },

        createNumQuestion: function()
        {
                //question
                this.mNumQuestion = new Shape(200,200,140,140,this,"","","");
                this.mShapeArray.push(this.mNumQuestion);
                this.mNumQuestion.mCollidable = false;
                this.mNumQuestion.mCollisionOn = false;
        },

	createQuestions: function()
        {
 		this.parent();
                
		this.mQuiz.resetQuestionArray();

		if (this.mApplication.mLevel == 1)
		{
			var question = new QuestionWord('','',2,100,2,9,2,9,2,9,'There were', 'teams in a league. Each team had', 'players on it. Then one team called the bears adds', 'more players. How many total players are in the league now?',7);	
			question.mTipArray[0] = 'Teams X Players on team  + Players bears added = Total players in the league now.';
                        this.mQuiz.mQuestionArray.push(question);
		}

		if (this.mApplication.mLevel == 2)
		{
			var question = new QuestionWord('','',2,100,2,100,2,9,2,9,'There were', 'total players in a league. There are', 'total teams. Each team had exactly the same amount of players on it. Then one team called the knights adds', 'more players. How many players are on the knights now?',8);	
			question.mTipArray[0] = 'Total players / Total teams  + Players knights added = Total players on knights now.';
                        this.mQuiz.mQuestionArray.push(question);
		}
		
		if (this.mApplication.mLevel == 3)
		{
       			var question = new QuestionWord('','',2,9,2,9,2,9,0,0,'Jaavon had','books about dinosaurs. He got', 'more books about dinosaurs from the library. How many books about dinosaurs does Jaavon have now?','',0);
			question.mTipArray[0] = 'Dinosaur books Jaavon had + Dinosaur books Jaavon got from library = Dinosaur books Jaavon has now';
                        this.mQuiz.mQuestionArray.push(question);
		}
		
		//buffer
 		this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
	}
});
