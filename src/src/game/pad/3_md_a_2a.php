var g3_md_a_2a = new Class(
{

Extends: RulerPad,

	initialize: function(application)
	{
       		this.parent(application);
    		this.mRaphael = Raphael(10, 35, 760, 405);

		this.mRectangleArray = new Array();	
		this.mRulerInchArray     = new Array();	
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
			//get random heights.
                        var redHeightCode = Math.floor((Math.random()*3)+1);
                        var redHeight = parseInt(redHeightCode * 50);

                        answer = '' + redHeightCode + ' l';

                        question = new Question('What is the estimated volume of liquid to the nearest liter? Write answer like this: 3 l', '' + answer);
                        this.mQuiz.mQuestionArray.push(question);

                        question.mShapeArray.push(this.mRectangleArray[i]);
			var randomEstimate = Math.floor((Math.random()*2));	
			if (randomEstimate == 0)
			{
                        	this.mRectangleArray[i].setSize(50,parseInt(redHeight + 12));
			}
			else
			{
                        	this.mRectangleArray[i].setSize(50,parseInt(redHeight - 12));
			}

                       	this.mRulerInchArray[i].addToQuestion(question);
                       	question.mShapeArray.push(this.mRulerInchArray[i]);
		}
               	
		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
	},

	createWorld: function()
	{
		this.parent();
       
         	this.mRectangleArray.length = 0;
                this.mRulerInchArray.length = 0;
		
		for (i = 0; i < this.mScoreNeeded; i++)
		{
			//the inch ruler
                        var volumeLiter = new VolumeLiter(50,300,400,50,this,this.mRaphael,.6,1,1,"none",.5,true);
                        this.mShapeArray.push(volumeLiter);
			this.mRulerInchArray.push(volumeLiter);
                        
			//red shape to measure
                        var redRectangle = new Rectangle(50,50,600,100,this,this.mRaphael,0,1,1,"none",.5,true);
                        this.mShapeArray.push(redRectangle);
			this.mRectangleArray.push(redRectangle);
		}
	}
});
