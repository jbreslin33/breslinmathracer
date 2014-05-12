var g3_md_b_3 = new Class(
{

Extends: RulerPad,

	initialize: function(application)
	{
       		this.parent(application);

		// Creates canvas 640 × 480 at 10, 50
		var r = Raphael(380, 100, 540, 480);
		r.barchart     (  0,   0, 380, 250, [76, 70, 67, 71, 69], {})
   		txtattr = { font: "12px sans-serif" };
                r.text(160, 10, "Single Series Chart").attr(txtattr);
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
