var g3_md_b_3 = new Class(
{

Extends: RulerPad,

	initialize: function(application)
	{
       		this.parent(application);

		this.setScoreNeeded(3);

		this.r = 0;

		this.mLionTotal = 0;
		this.mTigerTotal = 0;
		this.mBearTotal = 0;
		this.mApeTotal = 0;
		this.mEagleTotal = 0;
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
		if (num == 25)
		{
			return 0;
		}  
		if (num == 20)
		{
			return 50;
		}  
		if (num == 15)
		{
			return 100;
		}  
		if (num == 10)
		{
			return 150;
		}  
		if (num == 5)
		{
			return 200;
		}  
	},

	getEnd: function(num)
	{
		if (num == 25)
		{
			return 250;
		}  
		if (num == 20)
		{
			return 200;
		}  
		if (num == 15)
		{
			return 150;
		}  
		if (num == 10)
		{
			return 100;
		}  
		if (num == 5)
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
		
		this.rectangleEagles = this.r.rect(445, this.getStart(this.mEagleTotal), 50, this.getEnd(this.mEagleTotal));  
		this.rectangleEagles.attr("fill", "green");


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
		this.r.text(470, 265, "Eagles").attr(txtattr);
		
		this.r.path( "M100,1 L504,1" );
                this.r.text(90, 4, "25").attr(txtattr);
		
		this.r.path( "M100,50 L504,50" );
                this.r.text(90, 50, "20").attr(txtattr);
		
		this.r.path( "M100,100 L504,100" );
                this.r.text(90, 100, "15").attr(txtattr);
		
		this.r.path( "M100,150 L504,150" );
                this.r.text(90, 150, "10").attr(txtattr);
		
		this.r.path( "M100,200 L504,200" );
                this.r.text(90, 200, "5").attr(txtattr);
	},

	createQuestions: function()
        {
 		this.parent();

                this.mQuiz.resetQuestionArray();
		
		this.mLionTotal = 0;
		this.mTigerTotal = 0;
		this.mBearTotal = 0;
		this.mApeTotal = 0;
		this.mEagleTotal = 0;

		this.mLionTotal = Math.floor((Math.random()*5)+1);
		this.mLionTotal = this.mLionTotal * 5;
		
		this.mTigerTotal = Math.floor((Math.random()*5)+1);
		this.mTigerTotal = this.mTigerTotal * 5;
		
		this.mBearTotal = Math.floor((Math.random()*5)+1);
		this.mBearTotal = this.mBearTotal * 5;
		
		this.mApeTotal = Math.floor((Math.random()*5)+1);
		this.mApeTotal = this.mApeTotal * 5;
		
		this.mEagleTotal = Math.floor((Math.random()*5)+1);
		this.mEagleTotal = this.mEagleTotal * 5;

		this.log('lions:' + this.mLionTotal);
		this.log('tigers:' + this.mTigerTotal);
		this.log('bears:' + this.mBearTotal);
		this.log('apes:' + this.mApeTotal);
		this.log('eagles:' + this.mEagleTotal);

		this.createBarChart();
		
		//3
		if (this.mEagleTotal >= this.mTigerTotal) 
		{
			var answer = parseInt((this.mApeTotal - this.mEagleTotal) - (this.mTigerTotal - this.mBearTotal));
                	this.mQuiz.mQuestionArray.push(new Question('How many more apes and eagles are there than tigers and bears?','' + answer));
		}
		else  
		{
			var answer = parseInt((this.mTigerTotal + this.mBearTotal) - (this.mApeTotal + this.mEagleTotal));
                	this.mQuiz.mQuestionArray.push(new Question('How many more tigers and bears are there than apes and eagles?','' + answer));
		}

		//1
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
		
		//2
		if (this.mEagleTotal >= this.mTigerTotal) 
		{
			var answer = parseInt(this.mEagleTotal - this.mTigerTotal);
                	this.mQuiz.mQuestionArray.push(new Question('How many more eagles than tigers?','' + answer));
		}
		else  
		{
			var answer = parseInt(this.mTigerTotal - this.mEagleTotal);
                	this.mQuiz.mQuestionArray.push(new Question('How many more tigers than eagles?','' + answer));
		}
		

                //buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));

                //random
                //this.mQuiz.randomize(10);
	}
});
