var g3_md_b_4 = new Class(
{

Extends: RulerPad,

	initialize: function(application)
	{
       		this.parent(application);
    		this.mRaphael = Raphael(10, 35, 760, 405);

		this.mRectangleArray       = new Array();	
		this.mRulerQuarterInchArray = new Array();	
	},
   
        showCorrectAnswerEnter: function()
        {
                this.parent();

                this.mShapeArray[1].setPosition(100,80);
             	this.mShapeArray[1].mMesh.innerHTML = '' + this.mQuiz.getQuestion().getQuestion() + ' CORRECT ANSWER:' + this.mQuiz.getQuestion().getAnswer();
        },

	createQuestions: function()
        {
		this.parent();
		
		//just the question array reset
		this.mQuiz.resetQuestionArray();

		for (i = 0; i < this.mScoreNeeded; i++)
		{
			var randomNumber = Math.floor((Math.random()*2));	
			
			//get random heights.
			var redHeightCode = Math.floor((Math.random()*3)+1);
			var redHeight = parseInt(redHeightCode * 100);  
		
			answer = '';	
			if (redHeight == 100)
			{
				answer = '5 cm';	
			}		
			if (redHeight == 200)
			{
				answer = '10 cm';	
			}		
			if (redHeight == 300)
			{
				answer = '15 cm';	
			}		
					
			question = new Question('What is the length of the red shape in centimeters to the nearest 1/4 inch? Write answer like this: 1 3/4 in', '' + answer);
			this.mQuiz.mQuestionArray.push(question);
		
			question.mShapeArray.push(this.mRectangleArray[i]);
			this.mRectangleArray[i].setSize(50,redHeight);

			this.mRulerQuarterInchArray[i].addToQuestion(question);
			question.mShapeArray.push(this.mRulerQuarterInchArray[i]);
		}
               	
		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
	},

	createWorld: function()
	{
		this.parent();
		
		this.mRectangleArray.length = 0;
		this.mRulerQuarterInchArray.length = 0;	
		
		for (i = 0; i < this.mScoreNeeded; i++)
		{
                        //the cm ruler
                        var rulerQuarterInch = new RulerQuarterInch(50,300,300,50,this,this.mRaphael,.6,1,1,"none",.5,true);
                        this.mShapeArray.push(rulerQuarterInch);
			this.mRulerQuarterInchArray.push(rulerQuarterInch);
                        
			//red shape to measure
                        var redRectangle = new Rectangle(50,50,600,100,this,this.mRaphael,0,1,1,"none",.5,true);
                        this.mShapeArray.push(redRectangle);
			this.mRectangleArray.push(redRectangle);
		}
	}
});
