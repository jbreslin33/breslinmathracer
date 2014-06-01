var g3_md_c_7b = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);
		
		this.setScoreNeeded(4);
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

		if (this.mApplication.mLevel < 11)
		{
			var question = new QuestionWord('','',2,9,2,9,2,9,0,0,'Chris had a rectangular backyard with a length of','square feet and a width of', 'square feet. What is the area of his yard? Example Answer 3 sq ft','',3);	
			question.mTipArray[0] = 'Length x Width = Area';
			var tempAnswer = question.getAnswer();
			question.setAnswer(tempAnswer + ' sq ft',0);
                        this.mQuiz.mQuestionArray.push(question);
			
			var question = new QuestionWord('','',2,9,2,9,2,9,0,0,'Dave had a rectangular piece of paper with a length of','square inches and a width of', 'square inches. What is the area of his paper? Example answer: 10 sq in','',3);	
			question.mTipArray[0] = 'Length x Width = Area';
			var tempAnswer = question.getAnswer();
			question.setAnswer(tempAnswer + ' sq in',0);
                        this.mQuiz.mQuestionArray.push(question);
			
			var question = new QuestionWord('','',2,9,2,9,2,9,0,0,'Kate plays soccer on a rectangular soccer field with a length of','square yards and a width of', 'square yards. What is the area of her field? Example answer: 10 sq yds','',3);	
			question.mTipArray[0] = 'Length x Width = Area';
			var tempAnswer = question.getAnswer();
			question.setAnswer(tempAnswer + ' sq yds',0);
                        this.mQuiz.mQuestionArray.push(question);
			
			var question = new QuestionWord('','',2,9,2,9,2,9,0,0,'Steve built a rectangular garden in a video game with a length of','square yards and a width of', 'square yards. What is the area of his garden? Example answer: 10 sq yds','',3);	
			question.mTipArray[0] = 'Length x Width = Area';
			var tempAnswer = question.getAnswer();
			question.setAnswer(tempAnswer + ' sq yds',0);
                        this.mQuiz.mQuestionArray.push(question);
		
			this.mQuiz.randomize(10);
		}

		//buffer
 		this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
	}
});
