var g3_g_a_2 = new Class(
{

Extends: MultipleChoicePad,

	initialize: function(application)
	{
       		this.parent(application);
		this.setScoreNeeded(4);

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
  
              	var question = new Question('Describe each part as a fraction of the whole shape?','1/2');
                question.mAnswerPool[0] = '1/2';
                question.mAnswerPool[1] = '1/4';
                question.mAnswerPool[2] = '2/2';
                this.mQuiz.mQuestionArray.push(question);
                question.mShapeArray.push(this.mShapeArray[parseInt(0 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(1 + this.mTotalGuiBars + this.mTotalInputBars)]);
 
              	var question = new Question('Describe each part as a fraction of the whole shape?','1/4');
                question.mAnswerPool[0] = '1/4';
                question.mAnswerPool[1] = '2/4';
                question.mAnswerPool[2] = '0/4';
		this.mQuiz.mQuestionArray.push(question);
		question.mShapeArray.push(this.mShapeArray[parseInt(6 + this.mTotalGuiBars + this.mTotalInputBars)]);
		question.mShapeArray.push(this.mShapeArray[parseInt(7 + this.mTotalGuiBars + this.mTotalInputBars)]);
		question.mShapeArray.push(this.mShapeArray[parseInt(8 + this.mTotalGuiBars + this.mTotalInputBars)]);
		question.mShapeArray.push(this.mShapeArray[parseInt(9 + this.mTotalGuiBars + this.mTotalInputBars)]);
           
		//arcs
              	var question = new Question('Describe each part as a fraction of the whole shape?','1/2');
                question.mAnswerPool[0] = '1/2';
                question.mAnswerPool[1] = '2/2';
                question.mAnswerPool[2] = '0/2';
                this.mQuiz.mQuestionArray.push(question);
                question.mShapeArray.push(this.mShapeArray[parseInt(26 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(27 + this.mTotalGuiBars + this.mTotalInputBars)]);

              	var question = new Question('Describe each part as a fraction of the whole shape?','1/4');
                question.mAnswerPool[0] = '1/4';
                question.mAnswerPool[1] = '2/4';
                question.mAnswerPool[2] = '0/4';
                this.mQuiz.mQuestionArray.push(question);
                question.mShapeArray.push(this.mShapeArray[parseInt(32 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(33 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(34 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(35 + this.mTotalGuiBars + this.mTotalInputBars)]);

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
		
		this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,0,Math.PI,0,0,.5,"#19070B",1,false));
		this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,Math.PI,Math.PI*2,0,0,.5,"#19070B",1,false));
		
		this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,0,Math.PI,0,0,.5,"#19070B",1,false));
		this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,Math.PI,Math.PI*2,0.8,1,1,"#19070B",1,false));
		
		this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,0,Math.PI,0.8,1,1,"#19070B",1,false));
		this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,Math.PI,Math.PI*2,0.8,1,1,"#19070B",1,false));
		
		this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,0,Math.PI/2,0,0,.5,"#19070B",1,false));
		this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,Math.PI/2,Math.PI,0,0,.5,"#19070B",1,false));
		this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,Math.PI,Math.PI + Math.PI/2,0,0,.5,"#19070B",1,false));
		this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,Math.PI + Math.PI/2,Math.PI*2,0,0,.5,"#19070B",1,false));
		
		this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,0,Math.PI/2,.75,.75,.75,"#19070B",1,false));
		this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,Math.PI/2,Math.PI,0,0,.5,"#19070B",1,false));
		this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,Math.PI,Math.PI + Math.PI/2,0,0,.5,"#19070B",1,false));
		this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,Math.PI + Math.PI/2,Math.PI*2,0,0,.5,"#19070B",1,false));
		
		this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,0,Math.PI/2,.75,.75,.75,"#19070B",1,false));
		this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,Math.PI/2,Math.PI,.75,.75,.75,"#19070B",1,false));
		this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,Math.PI,Math.PI + Math.PI/2,0,0,.5,"#19070B",1,false));
		this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,Math.PI + Math.PI/2,Math.PI*2,0,0,.5,"#19070B",1,false));
		
		this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,0,Math.PI/2,.75,.75,.75,"#19070B",1,false));
		this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,Math.PI/2,Math.PI,.75,.75,.75,"#19070B",1,false));
		this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,Math.PI,Math.PI + Math.PI/2,.75,.75,.75,"#19070B",1,false));
		this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,Math.PI + Math.PI/2,Math.PI*2,0,0,.5,"#19070B",1,false));
		
		this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,0,Math.PI/2,.75,.75,.75,"#19070B",1,false));
		this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,Math.PI/2,Math.PI,.75,.75,.75,"#19070B",1,false));
		this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,Math.PI,Math.PI + Math.PI/2,.75,.75,.75,"#19070B",1,false));
		this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,Math.PI + Math.PI/2,Math.PI*2,.75,.75,.75,"#19070B",1,false));
		
		this.mShapeArray.push(new Rectangle(50,50,50,200,this,this.mRaphael,0,0,.5,"#19070B",1,false));
		this.mShapeArray.push(new Rectangle(50,50,100,200,this,this.mRaphael,.75,.75,.75,"#19070B",1,false));
		
		this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,0,Math.PI,0,0,.5,"#19070B",1,false));
		this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,Math.PI,Math.PI*2,0.8,1,1,"#19070B",1,false));
		
		this.mShapeArray.push(new Rectangle(50,50,50,200,this,this.mRaphael,.75,.75,.75,"#19070B",1,false));
		this.mShapeArray.push(new Rectangle(50,50,100,200,this,this.mRaphael,0,0,.5,"#19070B",1,false));
		this.mShapeArray.push(new Rectangle(50,50,150,200,this,this.mRaphael,0,0,.5,"#19070B",1,false));
		this.mShapeArray.push(new Rectangle(50,50,200,200,this,this.mRaphael,0,0,.5,"#19070B",1,false));
		
		this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,0,Math.PI/2,.75,.75,.75,"#19070B",1,false));
		this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,Math.PI/2,Math.PI,0,0,.5,"#19070B",1,false));
		this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,Math.PI,Math.PI + Math.PI/2,0,0,.5,"#19070B",1,false));
		this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,Math.PI + Math.PI/2,Math.PI*2,0,0,.5,"#19070B",1,false));

	        this.mShapeArray.push(new Rectangle(50,50,50,200,this,this.mRaphael,.75,.75,.75,"#19070B",1,false));
                this.mShapeArray.push(new Rectangle(50,50,100,200,this,this.mRaphael,.75,.75,.75,"#19070B",1,false));
                this.mShapeArray.push(new Rectangle(50,50,150,200,this,this.mRaphael,0,0,.5,"#19070B",1,false));
                this.mShapeArray.push(new Rectangle(50,50,200,200,this,this.mRaphael,0,0,.5,"#19070B",1,false));

		this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,0,Math.PI/2,.75,.75,.75,"#19070B",1,false));
		this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,Math.PI/2,Math.PI,.75,.75,.75,"#19070B",1,false));
		this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,Math.PI,Math.PI + Math.PI/2,0,0,.5,"#19070B",1,false));
		this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,Math.PI + Math.PI/2,Math.PI*2,0,0,.5,"#19070B",1,false));

	        this.mShapeArray.push(new Rectangle(50,50,50,200,this,this.mRaphael,.75,.75,.75,"#19070B",1,false));
                this.mShapeArray.push(new Rectangle(50,50,100,200,this,this.mRaphael,.75,.75,.75,"#19070B",1,false));
                this.mShapeArray.push(new Rectangle(50,50,150,200,this,this.mRaphael,.75,.75,.75,"#19070B",1,false));
                this.mShapeArray.push(new Rectangle(50,50,200,200,this,this.mRaphael,0,0,.5,"#19070B",1,false));

 		this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,0,Math.PI/2,.75,.75,.75,"#19070B",1,false));
                this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,Math.PI/2,Math.PI,.75,.75,.75,"#19070B",1,false));
                this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,Math.PI,Math.PI + Math.PI/2,.75,.75,.75,"#19070B",1,false));
                this.mShapeArray.push(new Arc(this,this.mRaphael,200,200,50,Math.PI + Math.PI/2,Math.PI*2,0,0,.5,"#19070B",1,false));
	
	}
});
