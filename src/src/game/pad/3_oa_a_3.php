var g3_oa_a_3 = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);
		this.setScoreNeeded(4);
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

       		this.mQuiz.mQuestionArray.push(new QuestionWord('','',2,99,2,10,2,10,0,0,'Monte arranged his toy soldiers in straight rows. He made','rows with', 'soldiers in each row. How many toy soldiers did Monte have?','',3));
		this.mQuiz.mQuestionArray[this.mQuiz.mQuestionArray.length -1].mTipArray[0] = 'Total rows - Soldiers in each row = Total Soldiers';

		this.mQuiz.mQuestionArray.push(new QuestionWord('','',2,99,2,10,2,10,0,0,'Ted is selling popcorn to raise money for his baseball team. There are','packages of popcorn in each box. Ted has sold', 'boxes. How many packages of popcorn has Ted sold?','',3));	
		this.mQuiz.mQuestionArray[this.mQuiz.mQuestionArray.length -1].mTipArray[0] = 'Packages in each Box x Boxes sold = Packages Sold';
		
		this.mQuiz.mQuestionArray.push(new QuestionWord('','',2,10,2,99,2,10,0,0,'Rachel used','beads to make', 'bracelets. Each bracelet had the same number of beads. How many beads did she use for each bracelet?','',4));	
		this.mQuiz.mQuestionArray[this.mQuiz.mQuestionArray.length -1].mTipArray[0] = 'Total Beads used / Bracelets made = Beads for each bracelet';
       		
		this.mQuiz.mQuestionArray.push(new QuestionWord('','',2,10,2,99,2,10,0,0,'Raul has','stamps to add to his collection. He keeps his stamps in a special book that has pockets to hold each stamp. He has just enough stamps to fill all of the pockets on one page. There are', 'pockets in each row. How many rows are on the page?','',4));
		this.mQuiz.mQuestionArray[this.mQuiz.mQuestionArray.length -1].mTipArray[0] = 'Stamps to add / Pockets in each row = Rows on the page';

              	//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));

                //random
                this.mQuiz.randomize(10);
	}
});
