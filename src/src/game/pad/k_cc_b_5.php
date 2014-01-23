var k_cc_b_5 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);

		//answers 
                this.mThresholdTime = 60000;

                //input pad
                this.mInputPad = new NumberPad(application);
	},

	//questions
	createQuestions: function()
        {
		this.parent();
          
		//just the question array reset
                this.mQuiz.resetQuestionArray();

		for (i = 0; i < this.mScoreNeeded; i++)
		{
			var numberToCount = Math.floor((Math.random()*10)+1);	
			var question = new Question('How Many?', '' + numberToCount);
                        question.mAnswerPool = this.mQuiz.mAnswerPool;
                        
			for (s = 0; s < parseInt(numberToCount); s++)
                        {
                                question.mShapeArray.push(this.mShapeArray[s]);
			}

			this.mQuiz.mQuestionArray.push(question);
		}
	},
	
	createQuestionShapes: function()
        {
		//scattered
		if (this.mApplication.mLevel < 5)
		{
			this.mShapeArray.push(new Shape(50,50,25,50,this,"/images/bus/kid.png","",""));
                	this.mShapeArray.push(new Shape(50,50,25,100,this,"/images/bus/kid.png","",""));
                	this.mShapeArray.push(new Shape(50,50,25,150,this,"/images/bus/kid.png","",""));
                	this.mShapeArray.push(new Shape(50,50,25,200,this,"/images/bus/kid.png","",""));
                	this.mShapeArray.push(new Shape(50,50,25,250,this,"/images/bus/kid.png","",""));

                	this.mShapeArray.push(new Shape(50,50,75,50,this,"/images/bus/kid.png","",""));
                	this.mShapeArray.push(new Shape(50,50,75,100,this,"/images/bus/kid.png","",""));
                	this.mShapeArray.push(new Shape(50,50,75,150,this,"/images/bus/kid.png","",""));
                	this.mShapeArray.push(new Shape(50,50,75,200,this,"/images/bus/kid.png","",""));
                	this.mShapeArray.push(new Shape(50,50,75,250,this,"/images/bus/kid.png","",""));

                	this.mShapeArray.push(new Shape(50,50,125,50,this,"/images/bus/kid.png","",""));
                	this.mShapeArray.push(new Shape(50,50,125,100,this,"/images/bus/kid.png","",""));
                	this.mShapeArray.push(new Shape(50,50,125,150,this,"/images/bus/kid.png","",""));
                	this.mShapeArray.push(new Shape(50,50,125,200,this,"/images/bus/kid.png","",""));
                	this.mShapeArray.push(new Shape(50,50,125,250,this,"/images/bus/kid.png","",""));

                	this.mShapeArray.push(new Shape(50,50,175,50,this,"/images/bus/kid.png","",""));
                	this.mShapeArray.push(new Shape(50,50,175,100,this,"/images/bus/kid.png","",""));
                	this.mShapeArray.push(new Shape(50,50,175,150,this,"/images/bus/kid.png","",""));
                	this.mShapeArray.push(new Shape(50,50,175,200,this,"/images/bus/kid.png","",""));
                	this.mShapeArray.push(new Shape(50,50,175,250,this,"/images/bus/kid.png","",""));
		
			//make them rectangular			
			for (i = 0; i < this.mShapeArray.length; i++)
                        {
                                if (i < 5)
                                {
                                        //collision on or off
                                        this.mShapeArray[i].mCollidable = false;
                                        this.mShapeArray[i].mCollisionOn = false;
                                        this.mShapeArray[i].setPosition(parseInt(i * 50 + 50), 50)
                                }
                                if (i >= 5 && i < 11)
                                {
                                        //collision on or off
                                        this.mShapeArray[i].mCollidable = false;
                                        this.mShapeArray[i].mCollisionOn = false;
                                        this.mShapeArray[i].setPosition(50,parseInt(i * 50 - 135))
                                }
                                if (i >= 11 && i < 15)
                                {
                                        //collision on or off
                                        this.mShapeArray[i].mCollidable = false;
                                        this.mShapeArray[i].mCollisionOn = false;
                                        this.mShapeArray[i].setPosition(parseInt(i * 50 - 450 ), 365)
                                }
                                if (i >= 15 && i < 20)
                                {
                                        //collision on or off
                                        this.mShapeArray[i].mCollidable = false;
                                        this.mShapeArray[i].mCollisionOn = false;
                                        this.mShapeArray[i].setPosition(250,parseInt(i * 50 - 635))
                                }
                        }

		}
		
		else
		{
               		//scattered	
			this.mShapeArray.push(new Shape(50,50,25,50,this,"/images/bus/kid.png","",""));
                	this.mShapeArray.push(new Shape(50,50,25,100,this,"/images/bus/kid.png","",""));
                	this.mShapeArray.push(new Shape(50,50,25,150,this,"/images/bus/kid.png","",""));
                	this.mShapeArray.push(new Shape(50,50,25,200,this,"/images/bus/kid.png","",""));
                	this.mShapeArray.push(new Shape(50,50,25,250,this,"/images/bus/kid.png","",""));

                	this.mShapeArray.push(new Shape(50,50,75,50,this,"/images/bus/kid.png","",""));
                	this.mShapeArray.push(new Shape(50,50,75,100,this,"/images/bus/kid.png","",""));
                	this.mShapeArray.push(new Shape(50,50,75,150,this,"/images/bus/kid.png","",""));
                	this.mShapeArray.push(new Shape(50,50,75,200,this,"/images/bus/kid.png","",""));
                	this.mShapeArray.push(new Shape(50,50,75,250,this,"/images/bus/kid.png","",""));

                	this.mShapeArray.push(new Shape(50,50,125,50,this,"/images/bus/kid.png","",""));
                	this.mShapeArray.push(new Shape(50,50,125,100,this,"/images/bus/kid.png","",""));
                	this.mShapeArray.push(new Shape(50,50,125,150,this,"/images/bus/kid.png","",""));
                	this.mShapeArray.push(new Shape(50,50,125,200,this,"/images/bus/kid.png","",""));
                	this.mShapeArray.push(new Shape(50,50,125,250,this,"/images/bus/kid.png","",""));

                	this.mShapeArray.push(new Shape(50,50,175,50,this,"/images/bus/kid.png","",""));
                	this.mShapeArray.push(new Shape(50,50,175,100,this,"/images/bus/kid.png","",""));
                	this.mShapeArray.push(new Shape(50,50,175,150,this,"/images/bus/kid.png","",""));
                	this.mShapeArray.push(new Shape(50,50,175,200,this,"/images/bus/kid.png","",""));
                	this.mShapeArray.push(new Shape(50,50,175,250,this,"/images/bus/kid.png","",""));
  
			this.mShapeArray[0].setPosition (150,350);
                        this.mShapeArray[1].setPosition (250,400);
                        this.mShapeArray[2].setPosition (200,250);
                        this.mShapeArray[3].setPosition (150,150);
                        this.mShapeArray[4].setPosition (050,050);
                        this.mShapeArray[5].setPosition (150,050);
                        this.mShapeArray[6].setPosition (250,150);
                        this.mShapeArray[7].setPosition (200,400);
                        this.mShapeArray[8].setPosition (100,350);
                        this.mShapeArray[9].setPosition (100,100);
                        this.mShapeArray[10].setPosition(050,100);
                        this.mShapeArray[11].setPosition(050,150);
                        this.mShapeArray[12].setPosition(100,300);
                        this.mShapeArray[13].setPosition(050,300);
                        this.mShapeArray[14].setPosition(200,200);
                        this.mShapeArray[15].setPosition(100,050);
                        this.mShapeArray[16].setPosition(150,250);
                        this.mShapeArray[17].setPosition(200,100);
                        this.mShapeArray[18].setPosition(050,250);
                        this.mShapeArray[19].setPosition(250,100);

		} 
	}
	
});
