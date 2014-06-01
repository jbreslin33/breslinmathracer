var g2_md_d_10 = new Class(
{

Extends: RulerPad,

	initialize: function(application)
	{
       		this.parent(application);

		this.setScoreNeeded(7);

		this.r = 0;

		this.mLionTotal = 0;
		this.mTigerTotal = 0;
		this.mBearTotal = 0;
		this.mApeTotal = 0;
	},

	showCorrectAnswerEnter: function()
	{
		this.parent();
		this.mShapeArray[1].setPosition(100,75);
	},
   
        createForget: function()
        {
		this.parent();
		this.mShapeArray[9].setPosition(150,225);
		this.mShapeArray[9].setSize(75,75);
        },

	getStart: function(num)
	{
		if (num == 5)
		{
			return 0;
		}  
		if (num == 4)
		{
			return 50;
		}  
		if (num == 3)
		{
			return 100;
		}  
		if (num == 2)
		{
			return 150;
		}  
		if (num == 1)
		{
			return 200;
		}  
	},

	getEnd: function(num)
	{
		if (num == 5)
		{
			return 250;
		}  
		if (num == 4)
		{
			return 200;
		}  
		if (num == 3)
		{
			return 150;
		}  
		if (num == 2)
		{
			return 100;
		}  
		if (num == 1)
		{
			return 50;
		}  

	},
	
	createBarChart: function()
	{
		if (this.r)
		{
			this.r.remove();
		}	
		
		this.r = Raphael(250, 100, 520, 480);

		this.rectangleLions = this.r.rect(115, this.getStart(this.mLionTotal), 50, this.getEnd(this.mLionTotal));  
		this.rectangleLions.attr("fill", "blue");
		
		this.rectangleTigers = this.r.rect(205, this.getStart(this.mTigerTotal), 50, this.getEnd(this.mTigerTotal));  
		this.rectangleTigers.attr("fill", "orange");
		
		this.rectangleBears = this.r.rect(285, this.getStart(this.mBearTotal), 50, this.getEnd(this.mBearTotal));  
		this.rectangleBears.attr("fill", "brown");
		
		this.rectangleApes = this.r.rect(365, this.getStart(this.mApeTotal), 50, this.getEnd(this.mApeTotal));  
		this.rectangleApes.attr("fill", "red");
		
   		txtattr = { font: "12px sans-serif" };
                this.r.text(30, 90, "Number").attr(txtattr);
                this.r.text(30, 110, "of").attr(txtattr);
                this.r.text(30, 130, "Animal").attr(txtattr);
                this.r.text(30, 150, "In").attr(txtattr);
                this.r.text(30, 170, "Zoo").attr(txtattr);
              
		//animals 
		this.r.text(141, 265, "Lions").attr(txtattr);
		this.r.text(230, 265, "Tigers").attr(txtattr);
		this.r.text(310, 265, "Bears").attr(txtattr);
		this.r.text(390, 265, "Apes").attr(txtattr);
		
		this.r.path( "M100,1 L430,1" );
                this.r.text(90, 4, "5").attr(txtattr);
		
		this.r.path( "M100,50 L430,50" );
                this.r.text(90, 50, "4").attr(txtattr);
		
		this.r.path( "M100,100 L430,100" );
                this.r.text(90, 100, "3").attr(txtattr);
		
		this.r.path( "M100,150 L430,150" );
                this.r.text(90, 150, "2").attr(txtattr);
		
		this.r.path( "M100,200 L430,200" );
                this.r.text(90, 200, "1").attr(txtattr);
	},

	createQuestions: function()
        {
 		this.parent();

                this.mQuiz.resetQuestionArray();
		
		this.mLionTotal = 0;
		this.mTigerTotal = 0;
		this.mBearTotal = 0;
		this.mApeTotal = 0;

		this.mLionTotal = Math.floor((Math.random()*5)+1);
		this.mLionTotal = this.mLionTotal;
		
		this.mTigerTotal = Math.floor((Math.random()*5)+1);
		this.mTigerTotal = this.mTigerTotal;
		
		this.mBearTotal = Math.floor((Math.random()*5)+1);
		this.mBearTotal = this.mBearTotal;
		
		this.mApeTotal = Math.floor((Math.random()*5)+1);
		this.mApeTotal = this.mApeTotal;
		
		this.createBarChart();
		
		//7	
		if (this.mBearTotal >= this.mApeTotal) 
		{
			var answer = parseInt(this.mBearTotal - this.mApeTotal);
                	this.mQuiz.mQuestionArray.push(new Question('How many more bears than apes?','' + answer));
		}
		else  
		{
			var answer = parseInt(this.mApeTotal - this.mBearTotal);
                	this.mQuiz.mQuestionArray.push(new Question('How many more apes than bears?','' + answer));
		}
	
		//6	
		if (this.mBearTotal >= this.mLionTotal) 
		{
			var answer = parseInt(this.mBearTotal - this.mLionTotal);
                	this.mQuiz.mQuestionArray.push(new Question('How many more bears than lions?','' + answer));
		}
		else  
		{
			var answer = parseInt(this.mLionTotal - this.mBearTotal);
                	this.mQuiz.mQuestionArray.push(new Question('How many more lions than bears?','' + answer));
		}
		
		//5
		if (this.mApeTotal >= this.mTigerTotal) 
		{
			var answer = parseInt(this.mApeTotal - this.mTigerTotal);
                	this.mQuiz.mQuestionArray.push(new Question('How many more apes than tigers?','' + answer));
		}
		else  
		{
			var answer = parseInt(this.mTigerTotal - this.mApeTotal);
                	this.mQuiz.mQuestionArray.push(new Question('How many more tigers than apes?','' + answer));
		}
		
		//4
		if ( (parseInt(this.mLionTotal + this.mApeTotal)) >= (parseInt(this.mTigerTotal + this.mBearTotal)) ) 
		{
			var answer = parseInt((this.mLionTotal + this.mApeTotal) - (this.mTigerTotal + this.mBearTotal));
                	this.mQuiz.mQuestionArray.push(new Question('How many more lions and apes are there than tigers and bears?','' + answer));
		}
		else  
		{
			var answer = parseInt((this.mTigerTotal + this.mBearTotal) - (this.mLionTotal + this.mApeTotal));
                	this.mQuiz.mQuestionArray.push(new Question('How many more tigers and bears are there than lions and apes?','' + answer));
		}

		//3
		if ( (parseInt(this.mApeTotal + this.mLionTotal)) >= (parseInt(this.mTigerTotal + this.mBearTotal)) ) 
		{
			var answer = parseInt((this.mApeTotal + this.mLionTotal) - (this.mTigerTotal + this.mBearTotal));
                	this.mQuiz.mQuestionArray.push(new Question('How many more apes and lions are there than tigers and bears?','' + answer));
		}
		else  
		{
			var answer = parseInt((this.mTigerTotal + this.mBearTotal) - (this.mApeTotal + this.mLionTotal));
                	this.mQuiz.mQuestionArray.push(new Question('How many more tigers and bears are there than apes and lions?','' + answer));
		}

		//2
		if (this.mBearTotal >= this.mLionTotal) 
		{
			var answer = parseInt(this.mBearTotal - this.mLionTotal);
                	this.mQuiz.mQuestionArray.push(new Question('How many more bears than lions?','' + answer));
		}
		else  
		{
			var answer = parseInt(this.mLionTotal - this.mBearTotal);
                	this.mQuiz.mQuestionArray.push(new Question('How many more lions than bears?','' + answer));
		}
		
		//1
		if (this.mApeTotal >= this.mTigerTotal) 
		{
			var answer = parseInt(this.mApeTotal - this.mTigerTotal);
                	this.mQuiz.mQuestionArray.push(new Question('How many more apes than tigers?','' + answer));
		}
		else  
		{
			var answer = parseInt(this.mTigerTotal - this.mApeTotal);
                	this.mQuiz.mQuestionArray.push(new Question('How many more tigers than apes?','' + answer));
		}

                //buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));

                //random
                //this.mQuiz.randomize(10);
	}
});
