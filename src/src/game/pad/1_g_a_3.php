var g1_g_a_3 = new Class(
{

Extends: MultipleChoicePad,

	initialize: function(application)
	{
       		this.parent(application);
		this.setScoreNeeded(10);

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
                question.mAnswerPool[0] = 'ZERO OF FOUR';
                question.mAnswerPool[1] = 'ONE OF FOUR';
                question.mAnswerPool[2] = 'TWO OF FOUR';
                question.mAnswerPool[3] = 'THREE OF FOUR';
                question.mAnswerPool[4] = 'FOUR OF FOUR';
                this.mQuiz.mQuestionArray.push(question);
		question.mShapeArray.push(this.mShapeArray[parseInt(10 + this.mTotalGuiBars + this.mTotalInputBars)]);
		question.mShapeArray.push(this.mShapeArray[parseInt(11 + this.mTotalGuiBars + this.mTotalInputBars)]);
		question.mShapeArray.push(this.mShapeArray[parseInt(12 + this.mTotalGuiBars + this.mTotalInputBars)]);
		question.mShapeArray.push(this.mShapeArray[parseInt(13 + this.mTotalGuiBars + this.mTotalInputBars)]);
	
		var question = new Question('Describe this?','TWO OF FOUR');
                question.mAnswerPool[0] = 'ZERO OF FOUR';
                question.mAnswerPool[1] = 'ONE OF FOUR';
                question.mAnswerPool[2] = 'TWO OF FOUR';
                question.mAnswerPool[3] = 'THREE OF FOUR';
                question.mAnswerPool[4] = 'FOUR OF FOUR';
                this.mQuiz.mQuestionArray.push(question);
                question.mShapeArray.push(this.mShapeArray[parseInt(14 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(15 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(16 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(17 + this.mTotalGuiBars + this.mTotalInputBars)]);

	        var question = new Question('Describe this?','THREE OF FOUR');
                question.mAnswerPool[0] = 'ZERO OF FOUR';
                question.mAnswerPool[1] = 'ONE OF FOUR';
                question.mAnswerPool[2] = 'TWO OF FOUR';
                question.mAnswerPool[3] = 'THREE OF FOUR';
                question.mAnswerPool[4] = 'FOUR OF FOUR';
                this.mQuiz.mQuestionArray.push(question);
                question.mShapeArray.push(this.mShapeArray[parseInt(18 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(19 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(20 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(21 + this.mTotalGuiBars + this.mTotalInputBars)]);

              	var question = new Question('Describe this?','FOUR OF FOUR');
                question.mAnswerPool[0] = 'ZERO OF FOUR';
                question.mAnswerPool[1] = 'ONE OF FOUR';
                question.mAnswerPool[2] = 'TWO OF FOUR';
                question.mAnswerPool[3] = 'THREE OF FOUR';
                question.mAnswerPool[4] = 'FOUR OF FOUR';
                this.mQuiz.mQuestionArray.push(question);
                question.mShapeArray.push(this.mShapeArray[parseInt(22 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(23 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(24 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(25 + this.mTotalGuiBars + this.mTotalInputBars)]);

           	var question = new Question('Describe this?','ZERO OF TWO');
                question.mAnswerPool[0] = 'ZERO OF TWO';
                question.mAnswerPool[1] = 'ONE OF TWO';
                question.mAnswerPool[2] = 'TWO OF TWO';
                this.mQuiz.mQuestionArray.push(question);
                question.mShapeArray.push(this.mShapeArray[parseInt(26 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(27 + this.mTotalGuiBars + this.mTotalInputBars)]);

           	var question = new Question('Describe this?','ONE OF TWO');
                question.mAnswerPool[0] = 'ZERO OF TWO';
                question.mAnswerPool[1] = 'ONE OF TWO';
                question.mAnswerPool[2] = 'TWO OF TWO';
                this.mQuiz.mQuestionArray.push(question);
                question.mShapeArray.push(this.mShapeArray[parseInt(28 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(29 + this.mTotalGuiBars + this.mTotalInputBars)]);

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
		
		this.mShapeArray.push(new Rectangle(50,50,50,200,this,this.mRaphael,.75,.75,.75,"#19070B",1,false));
		this.mShapeArray.push(new Rectangle(50,50,100,200,this,this.mRaphael,.75,.75,.75,"#19070B",1,false));
		this.mShapeArray.push(new Rectangle(50,50,150,200,this,this.mRaphael,.75,.75,.75,"#19070B",1,false));
		this.mShapeArray.push(new Rectangle(50,50,200,200,this,this.mRaphael,0,0,.5,"#19070B",1,false));
		
		this.mShapeArray.push(new Rectangle(50,50,50,200,this,this.mRaphael,.75,.75,.75,"#19070B",1,false));
		this.mShapeArray.push(new Rectangle(50,50,100,200,this,this.mRaphael,.75,.75,.75,"#19070B",1,false));
		this.mShapeArray.push(new Rectangle(50,50,150,200,this,this.mRaphael,.75,.75,.75,"#19070B",1,false));
		this.mShapeArray.push(new Rectangle(50,50,200,200,this,this.mRaphael,.75,.75,.75,"#19070B",1,false));
		
		this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,0,Math.PI,0.3,1,1,"none",.5,false));
		this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,Math.PI,Math.PI*2,0.8,1,1,"none",.5,false));
		
		this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,0,Math.PI,0.3,1,1,"none",.5,false));
		this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,Math.PI,Math.PI*2,0.8,1,1,"none",.5,false));
/*
               	this.arc(200,200,150,2,3) + 
               	this.arc(200,200,150,3,4.5) + 
               	this.arc(200,200,150,4.5,5) + 
               	this.arc(200,200,150,5,Math.PI*2)).attr("stroke", "white");
*/
	}
});
