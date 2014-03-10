var g3_oa_a_1 = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);
		this.setScoreNeeded(2);
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

		//ADD questions
		var a = Math.floor((Math.random()*9)+1);		
		var b = Math.floor((Math.random()*9)+1);		
		var question = new Question('There are ' + a + ' players to a team and ' + b + ' teams in the league. Write an expression to represent this. Do not use spaces. Use Lowercase x for times symbol.','' + a + 'x' + b);	
		question.mTipArray[0] = '' + a + 'x' + b + ' or ' + b + 'x' + a;
		question.mAnswerArray.push('' + b + 'x' + a);
       		this.mQuiz.mQuestionArray.push(question);
		
		var a = Math.floor((Math.random()*9)+1);		
		var b = Math.floor((Math.random()*9)+1);		
		var question = new Question('There are ' + a + ' players to a team and ' + b + ' teams in the league. Write an expression to represent this. Do not use spaces. Use Lowercase x for times symbol.','' + a + 'x' + b);	
		question.mTipArray[0] = '' + a + 'x' + b + ' or ' + b + 'x' + a;
		question.mAnswerArray.push('' + b + 'x' + a);
       		this.mQuiz.mQuestionArray.push(question);
	}
});
