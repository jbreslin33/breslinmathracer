var g3_md_a_2b = new Class(
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
			var question = new QuestionWord('','',2,19,2,20,2,20,0,0,'Graham had','liters of orange juice. He bought', 'more liiters at the store. How many liters of orange juice does Graham have now?','',0);	
			question.mTipArray[0] = 'Graham had + Graham bought = Graham has';
                        this.mQuiz.mQuestionArray.push(question);
                }

                if (this.mApplication.mLevel == 2)
		{	
			var question = new QuestionWord('','',2,19,2,20,2,20,0,0,'Aubrey had some seashells in a box. She found','more grams of seashells on the beach and put them in the box. Now there are', 'grams of seashells in the box. How many grams of seashells were in the box to begin with?','',2);	
			question.mTipArray[0] = 'Aubrey has - Aubrey found = Aubrey had';
                        this.mQuiz.mQuestionArray.push(question);
		}

                if (this.mApplication.mLevel == 3)
		{
       			var question = new QuestionWord('','',2,19,2,20,2,20,0,0,'Anna had','kilograms of dog treats. She gave', 'kilograms to here puppy. How many kilograms of dog treats does Anna have now?','',1);
			question.mTipArray[0] = 'Anna had - Anna gave to puppy = Anna has now';
                        this.mQuiz.mQuestionArray.push(question);
		}
       		
                if (this.mApplication.mLevel == 4)
		{
			var question = new QuestionWord('','',2,19,2,20,2,20,0,0,'Isaac had','grams of candy in his pocket. Some of the candy slipped out through a hole in his pocket. When he got to the store he only had', 'grams of candy left in his pocket. How many grams fell out?','',1);
			question.mTipArray[0] = 'Issac had - Issac has left = Issac lost';
                        this.mQuiz.mQuestionArray.push(question);
		}
                
		if (this.mApplication.mLevel == 5)
		{
       			var question = new QuestionWord('','',2,19,2,20,2,20,0,0,'Molly had some ladybug stickers. She gave','grams of the stickers to her sister and kept', 'grams for herself. How many grams of stickers did Molly have to begin with?','',0);
			question.mTipArray[0] = 'Molly gave to sister + Molly kept for herself = Molly had to begin with';
                        this.mQuiz.mQuestionArray.push(question);
		}
		
		if (this.mApplication.mLevel == 6)
		{
			var question = new QuestionWord('','',2,19,2,20,2,20,0,0,'Kaleb and Ethan were planting flowers in pots for a school project. Kaleb put','kilograms of dirt in the pots and Ethan put', 'kilograms of dirt in the pots. How many kilograms of dirt did the boys put in the pots?','',0);
			question.mTipArray[0] = 'Kaleb dirt + Ethan dirt = total dirt';
                        this.mQuiz.mQuestionArray.push(question);
		}

		if (this.mApplication.mLevel == 7)
		{
       			var question = new QuestionWord('','',2,9,2,9,2,9,0,0,'Macon and Parker picked up the crayons that spilled onto the floor. When they put all the crayons back in the box, there were','kilograms of crayons. Macon weighed each crayon as he put the crayons in the box. He knows that he put', 'kilograms of crayons in. How many kilograms of crayons did Parker put in the box?','',1);
			question.mTipArray[0] = 'total kilograms of crayons - kilograms of crayons Macon put away = kilograms of crayons Parker put away';
                        this.mQuiz.mQuestionArray.push(question);
		}

		if (this.mApplication.mLevel == 8)
		{
       			var question = new QuestionWord('','',2,9,2,9,2,9,0,0,'Cole and Maggie worked together to make a train that weighed','kilograms. They broke it into two pieces. One piece weighed', 'kilograms. How much did the other piece weigh in kilograms?','',1);
			question.mTipArray[0] = 'total cubes - cubes on one train = cubes on the other train';
                        this.mQuiz.mQuestionArray.push(question);
		}
		
		if (this.mApplication.mLevel == 9)
		{
			var question = new QuestionWord('','',2,19,2,20,2,20,0,0,'Sally and Amy shared some clay for an art class. They used all of the clay to make sculptures for art class. Sally used','kilograms of clay her sculpture. Amy used', 'kilograms of clay for her sculpture. How much clay in kilograms was there to begin with?','',0);
			question.mTipArray[0] = 'Sally clay + Amy clay = total clay';
                        this.mQuiz.mQuestionArray.push(question);
		}
		
		if (this.mApplication.mLevel == 10)
		{
			var question = new QuestionWord('','',2,19,2,20,2,20,0,0,'Skip and Jacob made cookies that weighed','grams each. They made','of them. How many total grams of cookie did they make?','',3);
			question.mTipArray[0] = 'made - left = ate';
                        this.mQuiz.mQuestionArray.push(question);
		}
		
		if (this.mApplication.mLevel == 11)
		{
			var question = new QuestionWord('','',2,19,2,20,2,20,0,0,'Tiffany had','balls. Each ball weighed','kilograms. How much did all the balls weigh in kilograms total?','',3);
			question.mTipArray[0] = 'total balls * weight of each ball = total weight of all balls';
                        this.mQuiz.mQuestionArray.push(question);
		}
		
		if (this.mApplication.mLevel == 12)
		{
			var question = new QuestionWord('','',2,19,2,20,2,20,0,0,'Carson has','plastic bugs in his collection. They each weigh the same amount. They weigh a total of','grams.  How much does each bug weigh?','',4);
			question.mTipArray[0] = 'Carson bugs total weight / amount of bugs = amount each bug weighs';
                        this.mQuiz.mQuestionArray.push(question);
		}
   		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
	}
});
