var g3_oa_a_1 = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);
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

		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,19,2,20,2,20,0,0,'Graham had','toy cars. He bought', 'more at the toy store. How many toy cars does Graham have now?','',0));	
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'Graham had + Graham bought = Graham has';
		
		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,19,2,20,2,20,0,0,'Aubrey had some seashells in a box. She found','more seashells in her closet and put them in the box. Now there are', 'seashells in the box. How many seashells were in the box to begin with?','',2));	
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'Aubrey has - Aubrey found = Aubrey had';

       		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,19,2,20,2,20,0,0,'Anna had','dog treats. She gave', 'to here puppy. How many dog treats does Anna have now?','',1));
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'Anna had - Annad gave to puppy = Anna has now';
       		
		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,19,2,20,2,20,0,0,'Isaac had','quarters in his pocket. Some of them slipped out through a hole in his pocket. When he got to the store he only had', 'quarters left in his pocket. How many fell out?','',1));
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'Issac had - Issac has left = Issac lost';
	
       		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,19,2,20,2,20,0,0,'Molly had some ladybug stickers. She gave','of the stickers to her sister and kept', 'for herself. How many stickers did Molly have to begin with?','',0));
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'Molly gave to sister + Molly kept for herself = Molly had to begin with';
       		
		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,19,2,20,2,20,0,0,'Kaleb and Ethan were planting flowers in pots for a school project. Kaleb brought','pots and Ethan brought', 'pots. They had just enough pots to put one flower in each pot. How many flowers did they have?','',0));
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'Kaleb pots + Ethan pots = total flowers because there is one in each pot';

       		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,9,2,9,2,9,0,0,'Macon and Parker picked up the crayons that spilled onto the floor. When they put all the crayons back in the box, there were','crayons. Macon counted as he put the crayons in the box. He knows that he put', 'crayons in. How many crayons did Parker put in the box?','',1));
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'total crayons - crayons Macon put away = crayons Parker put away';

       		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,9,2,9,2,9,0,0,'Cole and Maggie worked together to make a train that had','cubes. They broke it into two pieces. One had', 'cubes. How many cubes were in the other piece?','',1));
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'total cubes - cubes on one train = cubes on the other train';
       		
		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,19,2,20,2,20,0,0,'Sally and Amy shared one box of colored pencils. They used all of the pencils to make drawings for art class. Sally chose','pencils to use for her drawing. Amy chose', 'pencils. How many pencils were in the box to begin with?','',0));
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'Sally pencils + Amy pencils = total pencils';
		
		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,19,2,20,2,20,0,0,'Skip and Jacob made','cookies. They ate some as soon as they had cooled off. There were','cookies left. How many cookies did Skip and Jacob eat?','',1));
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'made - left = ate';
		
		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,19,2,20,2,20,0,0,'In the basketball game, Tiffany scored','points and Alexa scored','points. How many more points did Alexa score?','',1));
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'Alexa points - Tiffany points = difference in points';
		
		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,19,2,20,2,20,0,0,'Carson has','plastic bugs in his collection. He has','more bugs than his brother has. How many bugs does his brother have?','',1));
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'Carson bugs - how many more he has than brother = how many his brother has';
		
		var totalA = 0;
		var totalB = 0;
		var totalC = 0;
		var totalD = 0;
		var totalE = 0;
		var totalF = 0;
		var totalG = 0;
		var totalH = 0;
		var totalI = 0;
		var totalJ = 0;
		var totalK = 0;
		var totalL = 0;

		while (totalA < this.mScoreNeeded * .01 || totalB < this.mScoreNeeded * .01 || totalC < this.mScoreNeeded * .01 || totalD < this.mScoreNeeded * .01 || totalE < this.mScoreNeeded * .01 || totalF < this.mScoreNeeded * .01 || totalG < this.mScoreNeeded * .01 || totalH < this.mScoreNeeded * .01 || totalI < this.mScoreNeeded * .01 || totalJ < this.mScoreNeeded * .01 || totalK < this.mScoreNeeded * .01 || totalL < this.mScoreNeeded * .01)
		{	
			this.mQuiz.resetQuestionArray();

			//ADD questions
			for (s = 0; s < this.mScoreNeeded; s++)
			{	
				//50% chance of asking newest question
				var randomChance = Math.floor((Math.random()*12));		
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
	},
    
});
