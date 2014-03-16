var g1_oa_a_2 = new Class(
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

                this.mQuiz.resetQuestionArray();

                if (this.mApplication.mLevel == 1)
                {
			var question = new QuestionWord('','',2,19,2,20,2,20,2,20,'Erin put','marbles into a jar. Sarah and Tracey put more marbles into the jar. Sarah put in', 'and Tracey put in','. How many marbles in the jar now?',5);	
			question.mTipArry[0] = 'Marbles Erin put in jar + Marbles Sarah put in Jar + Marbles Tracey put in jar = Total marbles in jar';
                        this.mQuiz.mQuestionArray.push(question);
		}
                
		if (this.mApplication.mLevel == 2)
		{
			var question = new QuestionWord('','',2,19,2,20,2,20,2,20,'Erin put','marbles into a jar. Sarah and Tracey put more marbles into the jar. Sarah put in', 'and Tracey put in','. How many marbles in the jar now?',5));	
			question.mTipArray[0] = 'Marbles Erin put in jar + Marbles Sarah put in Jar + Marbles Tracey put in jar = Total marbles in jar';
                        this.mQuiz.mQuestionArray.push(question);
		}
		
		if (this.mApplication.mLevel == 3)
		{
			var question = new QuestionWord('','',2,19,2,20,2,20,2,20,'Erin put','marbles into a jar. Sarah and Tracey put more marbles into the jar. Sarah put in', 'and Tracey put in','. How many marbles in the jar now?',5));	
			question.mTipArray[0] = 'Marbles Erin put in jar + Marbles Sarah put in Jar + Marbles Tracey put in jar = Total marbles in jar';
                        this.mQuiz.mQuestionArray.push(question);
		}
		
		if (this.mApplication.mLevel == 4)
		{
			var question = new QuestionWord('','',2,19,2,20,2,20,2,20,'Erin put','marbles into a jar. Sarah and Tracey put more marbles into the jar. Sarah put in', 'and Tracey put in','. How many marbles in the jar now?',5));	
			question.mTipArray[0] = 'Marbles Erin put in jar + Marbles Sarah put in Jar + Marbles Tracey put in jar = Total marbles in jar';
                        this.mQuiz.mQuestionArray.push(question);
		}
		
		if (this.mApplication.mLevel == 5)
		{
			var question = new QuestionWord('','',2,19,2,20,2,20,2,20,'Erin put','marbles into a jar. Sarah and Tracey put more marbles into the jar. Sarah put in', 'and Tracey put in','. How many marbles in the jar now?',5));	
			question.mTipArray[0] = 'Marbles Erin put in jar + Marbles Sarah put in Jar + Marbles Tracey put in jar = Total marbles in jar';
                        this.mQuiz.mQuestionArray.push(question);
		}
		
		if (this.mApplication.mLevel == 5)
		{
			var question = new QuestionWord('','',2,19,2,20,2,20,2,20,'Erin put','marbles into a jar. Sarah and Tracey put more marbles into the jar. Sarah put in', 'and Tracey put in','. How many marbles in the jar now?',5));	
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'Marbles Erin put in jar + Marbles Sarah put in Jar + Marbles Tracey put in jar = Total marbles in jar';

		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,19,2,20,2,20,2,20,'Erin put','marbles into a jar. Sarah and Tracey put more marbles into the jar. Sarah put in', 'and Tracey put in','. How many marbles in the jar now?',5));	
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'Marbles Erin put in jar + Marbles Sarah put in Jar + Marbles Tracey put in jar = Total marbles in jar';
		
		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,19,2,20,2,20,2,20,'There are','flowers planted beside the sidewalk. Jon planted', 'of them. Bailey planted','of them. Montez planted the rest of them. How many flowers did Montez plant?',6));	
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'Total flowers planted - Flowers Jon planted - Flowers Baily planted = Flowers Montez planted';

		
		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,19,2,20,2,20,2,20,'There are','flowers planted beside the sidewalk. Jon planted', 'of them. Bailey planted','of them. Montez planted the rest of them. How many flowers did Montez plant?',6));	
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'Total flowers planted - Flowers Jon planted - Flowers Baily planted = Flowers Montez planted';

		
		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,19,2,20,2,20,2,20,'There are','flowers planted beside the sidewalk. Jon planted', 'of them. Bailey planted','of them. Montez planted the rest of them. How many flowers did Montez plant?',6));	
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'Total flowers planted - Flowers Jon planted - Flowers Baily planted = Flowers Montez planted';

		
		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,19,2,20,2,20,2,20,'There are','flowers planted beside the sidewalk. Jon planted', 'of them. Bailey planted','of them. Montez planted the rest of them. How many flowers did Montez plant?',6));	
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'Total flowers planted - Flowers Jon planted - Flowers Baily planted = Flowers Montez planted';

		
		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,19,2,20,2,20,2,20,'There are','flowers planted beside the sidewalk. Jon planted', 'of them. Bailey planted','of them. Montez planted the rest of them. How many flowers did Montez plant?',6));	
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'Total flowers planted - Flowers Jon planted - Flowers Baily planted = Flowers Montez planted';

		
		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,19,2,20,2,20,2,20,'There are','flowers planted beside the sidewalk. Jon planted', 'of them. Bailey planted','of them. Montez planted the rest of them. How many flowers did Montez plant?',6));	
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'Total flowers planted - Flowers Jon planted - Flowers Baily planted = Flowers Montez planted';

	}
    
});
