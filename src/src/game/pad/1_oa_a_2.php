var g1_oa_a_2 = new Class(
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

		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,19,2,20,2,20,2,20,'Erin put','marbles into a jar. Sarah and Tracey put more marbles into the jar. Sarah put in', 'and Tracey put in','. How many marbles in the jar now?',5));	
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'Marbles Erin put in jar + Marbles Sarah put in Jar + Marbles Tracey put in jar = Total marbles in jar';

		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,19,2,20,2,20,2,20,'Erin put','marbles into a jar. Sarah and Tracey put more marbles into the jar. Sarah put in', 'and Tracey put in','. How many marbles in the jar now?',5));	
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'Marbles Erin put in jar + Marbles Sarah put in Jar + Marbles Tracey put in jar = Total marbles in jar';

		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,19,2,20,2,20,2,20,'Erin put','marbles into a jar. Sarah and Tracey put more marbles into the jar. Sarah put in', 'and Tracey put in','. How many marbles in the jar now?',5));	
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'Marbles Erin put in jar + Marbles Sarah put in Jar + Marbles Tracey put in jar = Total marbles in jar';

		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,19,2,20,2,20,2,20,'Erin put','marbles into a jar. Sarah and Tracey put more marbles into the jar. Sarah put in', 'and Tracey put in','. How many marbles in the jar now?',5));	
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'Marbles Erin put in jar + Marbles Sarah put in Jar + Marbles Tracey put in jar = Total marbles in jar';

		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,19,2,20,2,20,2,20,'Erin put','marbles into a jar. Sarah and Tracey put more marbles into the jar. Sarah put in', 'and Tracey put in','. How many marbles in the jar now?',5));	
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
