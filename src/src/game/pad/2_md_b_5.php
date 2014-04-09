var g2_md_b_5 = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);
		this.setScoreNeeded(1);
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

                if (this.mApplication.mLevel == 1)
                {
			var question = new QuestionWord('','',2,99,2,99,2,99,0,0,'Graham had','feet of string. He bought', 'more feet of string at the toy store. How much string does Graham have now?','',0);	
			question.mTipArray[0] = 'Graham had + Graham bought = Graham has';
                        this.mQuiz.mQuestionArray.push(question);
                }

                if (this.mApplication.mLevel == 2)
		{	
			var question = new QuestionWord('','',2,19,2,20,2,20,0,0,'Aubrey had some seashells in a box. She found','more seashells in her closet and put them in the box. Now there are', 'seashells in the box. How many seashells were in the box to begin with?','',2);	
			question.mTipArray[0] = 'Aubrey has - Aubrey found = Aubrey had';
                        this.mQuiz.mQuestionArray.push(question);
		}

                if (this.mApplication.mLevel == 3)
		{
       			var question = new QuestionWord('','',2,19,2,20,2,20,0,0,'Anna had','dog treats. She gave', 'to here puppy. How many dog treats does Anna have now?','',1);
			question.mTipArray[0] = 'Anna had - Anna gave to puppy = Anna has now';
                        this.mQuiz.mQuestionArray.push(question);
		}
       		
                if (this.mApplication.mLevel == 4)
		{
			var question = new QuestionWord('','',2,19,2,20,2,20,0,0,'Isaac had','quarters in his pocket. Some of them slipped out through a hole in his pocket. When he got to the store he only had', 'quarters left in his pocket. How many fell out?','',1);
			question.mTipArray[0] = 'Issac had - Issac has left = Issac lost';
                        this.mQuiz.mQuestionArray.push(question);
		}
                
		if (this.mApplication.mLevel == 5)
		{
       			var question = new QuestionWord('','',2,19,2,20,2,20,0,0,'Molly had some ladybug stickers. She gave','of the stickers to her sister and kept', 'for herself. How many stickers did Molly have to begin with?','',0);
			question.mTipArray[0] = 'Molly gave to sister + Molly kept for herself = Molly had to begin with';
                        this.mQuiz.mQuestionArray.push(question);
		}
		
		if (this.mApplication.mLevel == 6)
		{
			var question = new QuestionWord('','',2,19,2,20,2,20,0,0,'Kaleb and Ethan were planting flowers in pots for a school project. Kaleb brought','pots and Ethan brought', 'pots. They had just enough pots to put one flower in each pot. How many flowers did they have?','',0);
			question.mTipArray[0] = 'Kaleb pots + Ethan pots = total flowers because there is one in each pot';
                        this.mQuiz.mQuestionArray.push(question);
		}

		if (this.mApplication.mLevel == 7)
		{
       			var question = new QuestionWord('','',2,9,2,9,2,9,0,0,'Macon and Parker picked up the crayons that spilled onto the floor. When they put all the crayons back in the box, there were','crayons. Macon counted as he put the crayons in the box. He knows that he put', 'crayons in. How many crayons did Parker put in the box?','',1);
			question.mTipArray[0] = 'total crayons - crayons Macon put away = crayons Parker put away';
                        this.mQuiz.mQuestionArray.push(question);
		}

		if (this.mApplication.mLevel == 8)
		{
       			var question = new QuestionWord('','',2,9,2,9,2,9,0,0,'Cole and Maggie worked together to make a train that had','cubes. They broke it into two pieces. One had', 'cubes. How many cubes were in the other piece?','',1);
			question.mTipArray[0] = 'total cubes - cubes on one train = cubes on the other train';
                        this.mQuiz.mQuestionArray.push(question);
		}
		
		if (this.mApplication.mLevel == 9)
		{
			var question = new QuestionWord('','',2,19,2,20,2,20,0,0,'Sally and Amy shared one box of colored pencils. They used all of the pencils to make drawings for art class. Sally chose','pencils to use for her drawing. Amy chose', 'pencils. How many pencils were in the box to begin with?','',0);
			question.mTipArray[0] = 'Sally pencils + Amy pencils = total pencils';
                        this.mQuiz.mQuestionArray.push(question);
		}
		
		if (this.mApplication.mLevel == 10)
		{
			var question = new QuestionWord('','',2,19,2,20,2,20,0,0,'Skip and Jacob made','cookies. They ate some as soon as they had cooled off. There were','cookies left. How many cookies did Skip and Jacob eat?','',1);
			question.mTipArray[0] = 'made - left = ate';
                        this.mQuiz.mQuestionArray.push(question);
		}
		
		if (this.mApplication.mLevel == 11)
		{
			var question = new QuestionWord('','',2,19,2,20,2,20,0,0,'In the basketball game, Tiffany scored','points and Alexa scored','points. How many more points did Alexa score?','',1);
			question.mTipArray[0] = 'Alexa points - Tiffany points = difference in points';
                        this.mQuiz.mQuestionArray.push(question);
		}
		
		if (this.mApplication.mLevel == 12)
		{
			var question = new QuestionWord('','',2,19,2,20,2,20,0,0,'Carson has','plastic bugs in his collection. He has','more bugs than his brother has. How many bugs does his brother have?','',1);
			question.mTipArray[0] = 'Carson bugs - how many more he has than brother = how many his brother has';
                        this.mQuiz.mQuestionArray.push(question);
		}
   		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
	}
});
