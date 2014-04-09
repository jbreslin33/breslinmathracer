var g2_md_a_4 = new Class(
{

Extends: RulerPad,

	initialize: function(application)
	{
       		this.parent(application);
    		this.mRaphael = Raphael(10, 35, 760, 405);

		this.mRedRectangleArray    = new Array();	
		this.mGreenRectangleArray  = new Array();	
		this.mRulerCentimeterArray = new Array();	
		this.mRulerInchArray       = new Array();	
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
			if (randomNumber == 0)
			{
				//get random heights.
				redHeightCode = Math.floor((Math.random()*2)+2);
				redHeight     = parseInt(redHeightCode * 100);  
				greenHeight   = 0;
		
				answer = '';	
				if (redHeight == 200)
				{
					answer = '5 cm';	
					greenHeight = 100;
				}		
				if (redHeight == 300)
				{
					var randomDif = Math.floor((Math.random()*2));	
					if (randomDif == 0)
					{
						greenHeight = 200;
						answer = '5 cm';	
					}
					else
					{
						greenHeight = 100;
						answer = '10 cm';	
					}
				}		
					
				question = new Question('How much longer in centimeters is the red shape than the green shape? Write answer like this: 10 cm', '' + answer);
				this.mQuiz.mQuestionArray.push(question);
			
				question.mShapeArray.push(this.mRedRectangleArray[i]);
				this.mRedRectangleArray[i].setSize(50,redHeight);
				
				question.mShapeArray.push(this.mGreenRectangleArray[i]);
				this.mGreenRectangleArray[i].setSize(50,greenHeight);

				this.mRulerCentimeterArray[i].addToQuestion(question);
				question.mShapeArray.push(this.mRulerCentimeterArray[i]);
			
				this.mRulerInchArray[i].addToQuestion(question);
				question.mShapeArray.push(this.mRulerInchArray[i]);
			}
			else
			{
				//get random heights.
				redHeightCode = Math.floor((Math.random()*5)+2);
				redHeight     = parseInt(redHeightCode * 50);  
				greenHeight   = 0;

                        	answer = '';
                                if (redHeight == 100)
                                {
                                        answer = '1 in';
                                        greenHeight = 50;
                                }
                                if (redHeight == 150)
                                {
                                        var randomDif = Math.floor((Math.random()*2));
                                        if (randomDif == 0)
                                        {
                                        	answer = '1 in';
                                                greenHeight = 50;
                                        }
                                        else
                                        {
                                        	answer = '2 in';
                                                greenHeight = 100;
                                        }
                                }
 				if (redHeight == 200)
                                {
                                        var randomDif = Math.floor((Math.random()*3));
                                        if (randomDif == 0)
                                        {
                                                answer = '3 in';
                                                greenHeight = 50;
                                        }
                                        if (randomDif == 1)
                                        {
                                                answer = '2 in';
                                                greenHeight = 100;
                                        }
                                        if (randomDif == 2)
					{
                                                answer = '1 in';
                                                greenHeight = 150;
					}
                                }
                               	if (redHeight == 250)
                                {
                                        var randomDif = Math.floor((Math.random()*4));
                                        if (randomDif == 0)
                                        {
                                                answer = '4 in';
                                                greenHeight = 50;
                                        }
                                        if (randomDif == 1)
                                        {
                                                answer = '3 in';
                                                greenHeight = 100;
                                        }
                                        if (randomDif == 2)
                                        {
                                                answer = '2 in';
                                                greenHeight = 150;
                                        }
                                        if (randomDif == 3)
                                        {
                                                answer = '1 in';
                                                greenHeight = 200;
                                        }
                                }
   				if (redHeight == 300)
                                {
                                        var randomDif = Math.floor((Math.random()*5));
                                        if (randomDif == 0)
                                        {
                                                answer = '5 in';
                                                greenHeight = 50;
                                        }
                                        if (randomDif == 1)
                                        {
                                                answer = '4 in';
                                                greenHeight = 100;
                                        }
                                        if (randomDif == 2)
                                        {
                                                answer = '3 in';
                                                greenHeight = 150;
                                        }
                                        if (randomDif == 3)
                                        {
                                                answer = '2 in';
                                                greenHeight = 200;
                                        }
                                        if (randomDif == 4)
                                        {
                                                answer = '1 in';
                                                greenHeight = 250;
                                        }
                                }

				question = new Question('How much longer in inches is the red shape than the green shape? Write answer like this: 10 in', '' + answer);
                        	this.mQuiz.mQuestionArray.push(question);

                        	question.mShapeArray.push(this.mRedRectangleArray[i]);
                        	this.mRedRectangleArray[i].setSize(50,redHeight);
				
				question.mShapeArray.push(this.mGreenRectangleArray[i]);
				this.mGreenRectangleArray[i].setSize(50,greenHeight);

                        	this.mRulerCentimeterArray[i].addToQuestion(question);
                        	question.mShapeArray.push(this.mRulerCentimeterArray[i]);

                        	this.mRulerInchArray[i].addToQuestion(question);
                        	question.mShapeArray.push(this.mRulerInchArray[i]);
			}
		}
               	
		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
	},

	createWorld: function()
	{
		this.parent();

                this.mRedRectangleArray.length    = 0;
                this.mGreenRectangleArray.length  = 0;
                this.mRulerCentimeterArray.length = 0;
                this.mRulerInchArray.length       = 0; 
		
		for (i = 0; i < this.mScoreNeeded; i++)
		{

                        //the cm ruler
                        var rulerCentimeter = new RulerCentimeter(50,300,300,50,this,this.mRaphael,.6,1,1,"none",.5,true);
                        this.mShapeArray.push(rulerCentimeter);
			this.mRulerCentimeterArray.push(rulerCentimeter);
                        
			//the inch ruler
                        var rulerInch = new RulerInch(50,300,400,50,this,this.mRaphael,.6,1,1,"none",.5,true);
                        this.mShapeArray.push(rulerInch);
			this.mRulerInchArray.push(rulerInch);
                        
			//red shape to measure
                        var redRectangle = new Rectangle(50,50,600,100,this,this.mRaphael,0,1,1,"none",.5,true);
                        this.mShapeArray.push(redRectangle);
			this.mRedRectangleArray.push(redRectangle);
			
			//green shape to measure
                        var greenRectangle = new Rectangle(50,50,700,100,this,this.mRaphael,.3,1,1,"none",.5,true);
                        this.mShapeArray.push(greenRectangle);
			this.mGreenRectangleArray.push(greenRectangle);
		}
	}
});
