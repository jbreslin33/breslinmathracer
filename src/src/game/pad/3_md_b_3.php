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
		this.r.barchart     (100,   0, 420, 270, [lions, tigers, bears, apes, birds], {})
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

		this.r.path( "M100,205 L504,205" );
                this.r.text(90, 205, "5").attr(txtattr);
		
		this.r.path( "M100,158 L504,158" );
                this.r.text(90, 158, "10").attr(txtattr);
		
		this.r.path( "M100,111 L504,111" );
                this.r.text(90, 111, "15").attr(txtattr);
		
		this.r.path( "M100,65 L504,65" );
                this.r.text(90, 65, "20").attr(txtattr);
		
		this.r.path( "M100,19 L504,19" );
                this.r.text(90, 19, "25").attr(txtattr);
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

		//this.createBarChart(lions,tigers,bears,apes,birds);
		this.createBarChart(5,10,15,20,25);

                //add 1
                this.mQuiz.mQuestionArray.push(new Question('10 + 3 =','13'));

                //buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));

                //random
                this.mQuiz.randomize(10);
	}
});
