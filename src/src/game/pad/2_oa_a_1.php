var g2_oa_a_1 = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);
		
		this.setScoreNeeded(20);

		this.mThresholdTime = 240000;
             	this.mCorrectAnswerThresholdTime = 40000;
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
                                this.mShapeArray[6].setPosition(380,190);
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

		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,99,2,100,2,100,0,0,'Graham had','baseball cards in his collection. He bought', 'more at a yard sale. How many baseball cards does Graham have now?','',0));	
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'Baseball cards Graham had + Baseball cards Graham bought = Baseball cards Graham has now';

		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,99,2,100,2,100,0,0,'Aubrey had a box of crayons. She found','more crayons when she cleaned out her desk and put them in the box. Now there are', 'crayons in the box. How many were in the box to begin with?','',2));	
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'Crayons in the box now - Crayons Aubrey found = Crayons in the box to begin with';

		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,99,2,100,2,100,2,100,'Anna had','tickets for the carnival rides. She used', 'tickets for the roller coaster ride and','tickets for the rocket ride. How many tickets does Anna have now?',6));	
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'Tickets Anna had to begin with - Tickets Anna use for roller coaster - Tickets Anna used for rocket ride = Tickets Anna has left';

		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,99,2,100,2,100,0,0,'Issac had','toy cars in a box. Some of them fell out of the box on the way to the playground. When he opened the box, there were only', 'cars left inside. How many fell out?','',1));	
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'Toy cars to begin with - Toys cars left = Toy cars that fell out';

		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,99,2,100,2,100,0,0,'Molly baked some cupcakes for a bake sale. She sold','and had','left over. How many cupcakes did Molly bake?','',0));	
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'Cupcakes Molly sold + Cupcakes Molly had left = Cupcakes Molly baked';
		
		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,99,2,100,2,100,0,0,'Kaleb and Ethan are building towers with blocks. The tower Kaleb builds has','blocks. The tower Ethan builds has','blocks. How many blocks will there be if they put both towers together to make one big tower?','',0));	
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'Blocks in tower Kaleb builds + Blocks in tower Ethan builds = Total blocks if towers are put together';

		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,99,2,100,2,100,2,100,'Macon, Parker, and Carson made sandwiches for a Picnic. When they put all of the sandwiches in the cooler, there were','sandwiches. Macon knows that he made','and Parker made','. How many sandwiches did Carson make?',6));	
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'Total Sandwiches made - Sandwiches Macon Made - Sandwiches Parker made = Sandwiches Carson made';

		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,99,2,100,2,100,0,0,'Cole and Maggie worked together to make a paper chain with','links. At the end of the day, they each wanted to take home part of the chain. The part Maggie took had','links. How many links were in the part Cole took?','',1));	
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'Total links in paper chain - Links Maggie took = Links Cole took';
		
		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,99,2,100,2,100,0,0,'Sally and Amy put together a puzzle. When it was time to clean up, Sally took apart','pieces and Amy took apart','pieces. How many pieces were in the puzzle?','',0));	
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'Pieces Sally took apart - Pieces Amy took apart = Total Pieces in the puzzle';

		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,99,2,100,2,100,0,0,'Jacob and Skip took a model airplane apart to put it away. The airplane had','pieces. Skip counted','pieces that he put away. How many pieces did Jacob put away?','',1));	
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'Total Pieces airplane has - Pieces Skip put away = Pieces Jacob put away';

		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,99,2,100,2,100,0,0,'Alexa is practicing for a race. She ran for','minutes on Friday and','minutes on Saturday. How much longer did Alexa run on Saturday?','',2));	
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'Minutes on Saturday - Minutes on Friday = How much longer Alexa ran on Saturday';

		var totalA = 2;
		var totalB = 2;
		var totalC = 2;
		var totalD = 2;
		var totalE = 2;
		var totalF = 2;
		var totalG = 2;
		var totalH = 2;
		var totalI = 2;
		var totalJ = 2;
		var totalK = 0;
		var totalL = 2;

		while (totalA < this.mScoreNeeded * .01 || totalB < this.mScoreNeeded * .01 || totalC < this.mScoreNeeded * .01 || totalD < this.mScoreNeeded * .01 || totalE < this.mScoreNeeded * .01 || totalF < this.mScoreNeeded * .01 || totalG < this.mScoreNeeded * .01 || totalH < this.mScoreNeeded * .01 || totalI < this.mScoreNeeded * .01 || totalJ < this.mScoreNeeded * .01 || totalK < this.mScoreNeeded * .01 || totalL < this.mScoreNeeded * .01)
		{	
			this.mQuiz.resetQuestionArray();

			//ADD questions
			for (s = 0; s < this.mScoreNeeded; s++)
			{	
				//50% chance of asking newest question
				var randomChance = Math.floor((Math.random()*12));		
				randomChance = 10;		
				if (randomChance == 0)
				{
       					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomChance]);
					totalA++;
				}	

				else if (randomChance == 1)
				{
       					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomChance]);
					totalB++;
				}
				else if (randomChance == 2)
				{
       					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomChance]);
					totalC++;
				}
				else if (randomChance == 3)
				{
       					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomChance]);
					totalD++;
				}
				else if (randomChance == 4)
				{
       					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomChance]);
					totalE++;
				}
				else if (randomChance == 5)
				{
       					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomChance]);
					totalF++;
				}
				else if (randomChance == 6)
				{
       					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomChance]);
					totalG++;
				}
				else if (randomChance == 7)
				{
       					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomChance]);
					totalH++;
				}
				else if (randomChance == 8)
				{
       					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomChance]);
					totalI++;
				}
				else if (randomChance == 9)
				{
       					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomChance]);
					totalJ++;
				}
				else if (randomChance == 10)
				{
       					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomChance]);
					totalK++;
				}
				else if (randomChance == 11)
				{
       					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomChance]);
					totalL++;
				}
			}
		}
	}
});
