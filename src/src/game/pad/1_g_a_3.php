var g1_g_a_3 = new Class(
{

Extends: MultipleChoicePad,

	initialize: function(application)
	{
       		this.parent(application);
		this.setScoreNeeded(6);

    		this.mRaphael = Raphael(10, 35, 760, 405);
	},
	
        //showCorrectAnswer
        showCorrectAnswerEnter: function()
        {
                this.parent();

                this.mShapeArray[1].setPosition(100,80);
        },
//Partition circles and rectangles into two and four equal shares, describe the shares using the words halves, fourths, and quarters, and use the phrases half of, fourth of, and quarter of. Describe the whole as two of, or four of the shares. Understand for these examples that decomposing into more equal shares creates smaller shares.
	createQuestions: function()
        {
		this.parent();
		
		//just the question array reset
		this.mQuiz.resetQuestionArray();
		this.mQuiz.resetQuestionPoolArray();
  
              	var question = new Question('Describe this?','ZERO OF TWO');
                question.mAnswerPool[0] = 'ZERO OF TWO';
                question.mAnswerPool[1] = 'ONE OF TWO';
                question.mAnswerPool[2] = 'TWO OF TWO';
                this.mQuiz.mQuestionArray.push(question);
                question.mShapeArray.push(this.mShapeArray[parseInt(0 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(1 + this.mTotalGuiBars + this.mTotalInputBars)]);
 
		var question = new Question('Describe this?','ONE OF TWO');
                question.mAnswerPool[0] = 'ZERO OF TWO';
                question.mAnswerPool[1] = 'ONE OF TWO';
                question.mAnswerPool[2] = 'TWO OF TWO';
		this.mQuiz.mQuestionArray.push(question);
		question.mShapeArray.push(this.mShapeArray[parseInt(2 + this.mTotalGuiBars + this.mTotalInputBars)]);
		question.mShapeArray.push(this.mShapeArray[parseInt(3 + this.mTotalGuiBars + this.mTotalInputBars)]);
           	
		var question = new Question('Describe this?','TWO OF TWO');
                question.mAnswerPool[0] = 'ZERO OF TWO';
                question.mAnswerPool[1] = 'ONE OF TWO';
                question.mAnswerPool[2] = 'TWO OF TWO';
                this.mQuiz.mQuestionArray.push(question);
                question.mShapeArray.push(this.mShapeArray[parseInt(4 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(5 + this.mTotalGuiBars + this.mTotalInputBars)]);
		
		var question = new Question('Describe this?','ZERO OF FOUR');
                question.mAnswerPool[0] = 'ZERO OF FOUR';
                question.mAnswerPool[1] = 'ONE OF FOUR';
                question.mAnswerPool[2] = 'TWO OF FOUR';
                question.mAnswerPool[3] = 'THREE OF FOUR';
                question.mAnswerPool[4] = 'FOUR OF FOUR';
		this.mQuiz.mQuestionArray.push(question);
		question.mShapeArray.push(this.mShapeArray[parseInt(6 + this.mTotalGuiBars + this.mTotalInputBars)]);
		question.mShapeArray.push(this.mShapeArray[parseInt(7 + this.mTotalGuiBars + this.mTotalInputBars)]);
		question.mShapeArray.push(this.mShapeArray[parseInt(8 + this.mTotalGuiBars + this.mTotalInputBars)]);
		question.mShapeArray.push(this.mShapeArray[parseInt(9 + this.mTotalGuiBars + this.mTotalInputBars)]);
           
		var question = new Question('Describe this?','ONE OF FOUR');
                question.mAnswerPool[0] = '1 HALF';
                question.mAnswerPool[1] = 'FOUR OF FOUR';
                question.mAnswerPool[2] = '3 FOURTHS';
                this.mQuiz.mQuestionArray.push(question);
		question.mShapeArray.push(this.mShapeArray[parseInt(10 + this.mTotalGuiBars + this.mTotalInputBars)]);
		question.mShapeArray.push(this.mShapeArray[parseInt(11 + this.mTotalGuiBars + this.mTotalInputBars)]);
		question.mShapeArray.push(this.mShapeArray[parseInt(12 + this.mTotalGuiBars + this.mTotalInputBars)]);
		question.mShapeArray.push(this.mShapeArray[parseInt(13 + this.mTotalGuiBars + this.mTotalInputBars)]);
	
		var question = new Question('Describe this?','TWO OF FOUR');
                question.mAnswerPool[0] = '1 FOURTH';
                question.mAnswerPool[1] = '2 FOURTHS';
                question.mAnswerPool[2] = '3 FOURTHS';
                this.mQuiz.mQuestionArray.push(question);
                question.mShapeArray.push(this.mShapeArray[parseInt(14 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(15 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(16 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(17 + this.mTotalGuiBars + this.mTotalInputBars)]);

               	//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));

		//this.mQuiz.randomize(10);
	},

	createWorld: function()
	{
		this.parent();
		
		this.mShapeArray.push(new Rectangle(50,50,50,200,this,this.mRaphael,0,0,.5,"#19070B",1,false));
		this.mShapeArray.push(new Rectangle(50,50,100,200,this,this.mRaphael,0,0,.5,"#19070B",1,false));

		this.mShapeArray.push(new Rectangle(50,50,50,200,this,this.mRaphael,0,0,.5,"#19070B",1,false));
		this.mShapeArray.push(new Rectangle(50,50,100,200,this,this.mRaphael,.75,.75,.75,"#19070B",1,false));
		
		this.mShapeArray.push(new Rectangle(50,50,50,200,this,this.mRaphael,.75,.75,.75,"#19070B",1,false));
		this.mShapeArray.push(new Rectangle(50,50,100,200,this,this.mRaphael,.75,.75,.75,"#19070B",1,false));
		
		this.mShapeArray.push(new Rectangle(50,50,50,200,this,this.mRaphael,0,0,.5,"#19070B",1,false));
		this.mShapeArray.push(new Rectangle(50,50,100,200,this,this.mRaphael,0,0,.5,"#19070B",1,false));
		this.mShapeArray.push(new Rectangle(50,50,150,200,this,this.mRaphael,0,0,.5,"#19070B",1,false));
		this.mShapeArray.push(new Rectangle(50,50,200,200,this,this.mRaphael,0,0,.5,"#19070B",1,false));
		
		this.mShapeArray.push(new Rectangle(50,50,50,200,this,this.mRaphael,.75,.75,.75,"#19070B",1,false));
		this.mShapeArray.push(new Rectangle(50,50,100,200,this,this.mRaphael,0,0,.5,"#19070B",1,false));
		this.mShapeArray.push(new Rectangle(50,50,150,200,this,this.mRaphael,0,0,.5,"#19070B",1,false));
		this.mShapeArray.push(new Rectangle(50,50,200,200,this,this.mRaphael,0,0,.5,"#19070B",1,false));
		
		this.mShapeArray.push(new Rectangle(50,50,50,200,this,this.mRaphael,.75,.75,.75,"#19070B",1,false));
		this.mShapeArray.push(new Rectangle(50,50,100,200,this,this.mRaphael,.75,.75,.75,"#19070B",1,false));
		this.mShapeArray.push(new Rectangle(50,50,150,200,this,this.mRaphael,0,0,.5,"#19070B",1,false));
		this.mShapeArray.push(new Rectangle(50,50,200,200,this,this.mRaphael,0,0,.5,"#19070B",1,false));
	}
});
