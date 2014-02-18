var g1_oa_a_2 = new Class(
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

		//a
		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,19,2,20,2,20,'Graham had','toy cars. He bought', 'more at the toy store. How many toy cars does Graham have now?',0));	
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'had + got = has';
		
		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,19,2,20,2,20,'Aubrey had some seashells in a box. She found','more seashells in her closet and put them in the box. Now there are', 'seashells in the box. How many seashells were in the box to begin with?',0));	
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'had + got = has';

		//b
       		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,19,2,20,2,20,'Anna had','dog treats. She gave', 'to here puppy. How many dog treats does Anna have now?',0));
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'had + got = has';
       		
		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,19,2,20,2,20,'Isaac had','quarters in his pocket. Some of them slipped out through a hole in his pocket. When he got to the store he only had', 'quarters left in his pocket. How many fell out?',0));
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'had + got = has';
	
		//c	
       		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,19,2,20,2,20,'Molly had some ladybug stickers. She gave','of the stickers to her sister and kept', 'for herself. How many stickers did Molly have to begin with?',1));
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'had on bed - put on chair = on bed';
       		
		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,19,2,20,2,20,'Kaleb and Ethan were planting flowers in pots for a school project. Kaleb brought','pots and Ethan brought', 'pots. They had just enough pots to put one flower in each pot. How many flowers did they have?',1));
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'had - ate = left for Santa Claus';

		//d
       		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,9,2,9,2,9,'Macon and Parker picked up the crayons that spilled onto the floor. When they put all the crayons back in the box, there were','crayons. Macon counted as she put the crayons in the box. He knows that he put', 'crayons in. How many crayons did Parker put in the box?',1));
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'had - gave = has';

       		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,9,2,9,2,9,'Cole and Maggie worked together to make a train that had','cubes. They broke it into two pieces. One had', 'cubes. How many cubes were in the other piece?',1));
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'had - gave = has';

		var totalA = 0;
		var totalB = 0;
		var totalC = 0;
		var totalD = 0;

		while (totalA < this.mScoreNeeded * .2 || totalB < this.mScoreNeeded * .2 || totalC < this.mScoreNeeded * .2 || totalD < this.mScoreNeeded * .2)
		{	
			this.mQuiz.resetQuestionArray();

			//ADD questions
			for (s = 0; s < this.mScoreNeeded; s++)
			{	
				//50% chance of asking newest question
				var randomChance = Math.floor((Math.random()*8));		
				if (randomChance < 2)
				{
       					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomChance]);
					totalA++;
				}	

				else if (randomChance > 1 && randomChance < 4 )
				{
       					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomChance]);
					totalB++;
				}
				else if (randomChance > 3 && randomChance < 6 )
				{
       					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomChance]);
					totalC++;
				}
				else if (randomChance > 5 && randomChance < 8 )
				{
       					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomChance]);
					totalD++;
				}
			}
		}
	},
    
});
