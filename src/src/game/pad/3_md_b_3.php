var g3_md_b_3 = new Class(
{

Extends: RulerPad,

	initialize: function(application)
	{
       		this.parent(application);

		var r = Raphael(250, 100, 520, 480);
		r.barchart     (100,   0, 420, 270, [76, 70, 67, 71, 69], {})
   		txtattr = { font: "12px sans-serif" };
                r.text(30, 90, "Number").attr(txtattr);
                r.text(30, 110, "of").attr(txtattr);
                r.text(30, 130, "Animal").attr(txtattr);
                r.text(30, 150, "In").attr(txtattr);
                r.text(30, 170, "Zoo").attr(txtattr);
              
		//animals 
		r.text(145, 265, "Lions").attr(txtattr);
		r.text(230, 265, "Tigers").attr(txtattr);
		r.text(310, 265, "Bears").attr(txtattr);
		r.text(390, 265, "Apes").attr(txtattr);
		r.text(470, 265, "Birds").attr(txtattr);

		//var line = paper.path( "M100,0 L30,100" );
		r.path( "M100,225 L504,225" );
                r.text(90, 225, "5").attr(txtattr);
		
		r.path( "M100,200 L504,200" );
                r.text(90, 200, "10").attr(txtattr);
	},

	createQuestions: function()
        {
 		this.parent();

                this.mQuiz.resetQuestionArray();

                //add 1
                this.mQuiz.mQuestionArray.push(new Question('10 + 3 =','13'));

                //buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));

                //random
                this.mQuiz.randomize(10);
	}
});
