var g3_md_b_3 = new Class(
{

Extends: RulerPad,

	initialize: function(application)
	{
       		this.parent(application);

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
	
	createBarChart: function(lions,tigers,bears,apes,eagles)
	{
		this.r = Raphael(250, 100, 520, 480);

		this.rectangleLions = this.r.rect(115, this.getStart(lions), 50, this.getEnd(lions));  
		this.rectangleLions.attr("fill", "blue");
		
		this.rectangleTigers = this.r.rect(205, this.getStart(tigers), 50, this.getEnd(tigers));  
		this.rectangleTigers.attr("fill", "orange");
		
		this.rectangleBears = this.r.rect(285, this.getStart(bears), 50, this.getEnd(bears));  
		this.rectangleBears.attr("fill", "brown");
		
		this.rectangleApes = this.r.rect(365, this.getStart(apes), 50, this.getEnd(apes));  
		this.rectangleApes.attr("fill", "red");
		
		this.rectangleEagles = this.r.rect(445, this.getStart(eagles), 50, this.getEnd(eagles));  
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

		var lions = Math.floor((Math.random()*5)+1);
		lions = lions * 5;
		
		var tigers = Math.floor((Math.random()*5)+1);
		tigers = tigers * 5;
		
		var bears = Math.floor((Math.random()*5)+1);
		bears = bears * 5;
		
		var apes = Math.floor((Math.random()*5)+1);
		apes = apes * 5;
		
		var eagles = Math.floor((Math.random()*5)+1);
		eagles = eagles * 5;

		this.log('lions:' + lions);
		this.log('tigers:' + tigers);
		this.log('bears:' + bears);
		this.log('apes:' + apes);
		this.log('eagles:' + eagles);

		this.createBarChart(lions,tigers,bears,apes,eagles);
		//this.createBarChart(5,10,15,20,25);

                //add 1
                this.mQuiz.mQuestionArray.push(new Question('10 + 3 =','13'));

                //buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));

                //random
                this.mQuiz.randomize(10);
	}
});
