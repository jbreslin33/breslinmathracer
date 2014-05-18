var g3_md_b_3 = new Class(
{

Extends: RulerPad,

	initialize: function(application)
	{
       		this.parent(application);

	},
	
	createBarChart: function(lions,tigers,bears,apes,birds)
	{
		this.r = Raphael(250, 100, 520, 480);

		this.rectangleLions = this.r.rect(115, 0, 50, 250);  
		this.rectangleLions.attr("fill", "green");
		
		this.rectangleLions = this.r.rect(205, 50, 50, 200);  
		this.rectangleLions.attr("fill", "orange");
		
		this.rectangleLions = this.r.rect(285, 100, 50, 150);  
		this.rectangleLions.attr("fill", "blue");
		
		this.rectangleLions = this.r.rect(365, 150, 50, 100);  
		this.rectangleLions.attr("fill", "red");
		
		this.rectangleLions = this.r.rect(445, 200, 50, 50);  
		this.rectangleLions.attr("fill", "yellow");


   		txtattr = { font: "12px sans-serif" };
                this.r.text(30, 90, "Number").attr(txtattr);
                this.r.text(30, 110, "of").attr(txtattr);
                this.r.text(30, 130, "Animal").attr(txtattr);
                this.r.text(30, 150, "In").attr(txtattr);
                this.r.text(30, 170, "Zoo").attr(txtattr);
              
		//animals 
		this.r.text(145, 265, "Lions").attr(txtattr);
		this.r.text(230, 265, "Tigers").attr(txtattr);
		this.r.text(310, 265, "Bears").attr(txtattr);
		this.r.text(390, 265, "Apes").attr(txtattr);
		this.r.text(470, 265, "Birds").attr(txtattr);
		
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

		var lions = Math.floor((Math.random()*7)+1);
		lions = lions * 5;
		
		var tigers = Math.floor((Math.random()*7)+1);
		tigers = tigers * 5;
		
		var bears = Math.floor((Math.random()*7)+1);
		bears = bears * 5;
		
		var apes = Math.floor((Math.random()*7)+1);
		apes = apes * 5;
		
		var birds = Math.floor((Math.random()*8)+1);
		birds = birds * 5;

		this.log('lions:' + lions);
		this.log('tigers:' + tigers);
		this.log('bears:' + bears);
		this.log('apes:' + apes);
		this.log('birds:' + birds);

		this.createBarChart(lions,tigers,bears,apes,birds);
		//this.createBarChart(5,10,15,20,25);

                //add 1
                this.mQuiz.mQuestionArray.push(new Question('10 + 3 =','13'));

                //buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));

                //random
                this.mQuiz.randomize(10);
	}
});
