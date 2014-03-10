var g3_oa_a_2 = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);
		this.setScoreNeeded(4);
		this.a = 0;
		this.b = 0;
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

	makeEquation: function()
	{
 		this.a = Math.floor((Math.random()*98)+2);
                this.b = Math.floor((Math.random()*98)+2);
                while(this.a%this.b != 0 || this.a == this.b || this.a < this.b)
                {
                        this.a = Math.floor((Math.random()*98)+2);
                        this.b = Math.floor((Math.random()*98)+2);
                }
	},

	createQuestions: function()
        {
 		this.parent();
		
		this.mQuiz.resetQuestionArray();

		this.makeEquation();
		var question = new Question('There are ' + this.a + ' players in the league. There are ' + this.b + ' teams in the league. There are an equal number of players on each team. Write an expression to represent this. Do not use spaces. Use / for division symbol.','' + this.a + '/' + this.b);	
       		this.mQuiz.mQuestionArray.push(question);
		
		this.makeEquation();
		var question = new Question('There are ' + this.a + ' students in a school. There are ' + this.b + ' classes in the school. There are an equal number of students in each class. Write an expression to represent this. Do not use spaces. Use / for division symbol.','' + this.a + '/' + this.b);	
       		this.mQuiz.mQuestionArray.push(question);
		
		this.makeEquation();
		var question = new Question('There are ' + this.a + ' total cookies. There are ' + this.b + ' baking sheets. There are an equal amount of cookies on each baking sheet. Write an expression to represent this. Do not use spaces. Use / for division symbol.','' + this.a + '/' + this.b);	
       		this.mQuiz.mQuestionArray.push(question);
		
		this.makeEquation();
		var question = new Question('Lucy gave ' + this.a + ' total cupcakes out. She gave them out to ' + this.b + ' kids. She gave an equal amount to each kid. Write an expression to represent this. Do not use spaces. Use / for division symbol.','' + this.a + '/' + this.b);	
       		this.mQuiz.mQuestionArray.push(question);
	}
});
