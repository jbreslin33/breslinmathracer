var g4_nf_b_3b = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);
		
	},

	createNumQuestion: function()
        {
                //question
                this.mNumQuestion = new Shape(285,50,280,95,this,"","","");
                this.mShapeArray.push(this.mNumQuestion);
                this.mNumQuestion.mCollidable = false;
                this.mNumQuestion.mCollisionOn = false;
        },

	//showCorrectAnswer
        showCorrectAnswerEnter: function()
        {
                this.parent();

                this.mShapeArray[1].setSize(285,100);
                //this.mShapeArray[1].setPosition(380,80);
		this.mShapeArray[1].mMesh.innerHTML = '' + this.mQuiz.getQuestion().getQuestion() + ' ' + ' ? = ' + this.mQuiz.getQuestion().getAnswer();

             
                //move dont forget
               // this.mShapeArray[8].setVisibility(false);
               // this.mShapeArray[9].setVisibility(false);
        },

  

	createQuestions: function()
        {
 		this.parent();

		//this.mCorrectAnswerThresholdTime = 1000;

		var varA = 0;
		var varB = 0;
		var varC = 0;
		var varD = 0;
		var varE = 0;
		var varN = 0;


		var start = 0;
		var end = 0;
		var rand = 0;

		var question;
		var answer;
		
		this.mQuiz.resetQuestionArray();
			

		 for (s = 0; s < this.mScoreNeeded; s++)
		 {		

			// get bottom number
			varB = 6 + Math.floor(Math.random()*22);

			// get top number
			max = Math.floor(varB/3);
			varA = 1 + Math.floor((Math.random()*max));

			varC = 1 + Math.floor((Math.random()*max));

			varE = 1 + Math.floor((Math.random()*max));

			varD = varB;

			answer = varA + varC + varE;
				
			question = new Question('' + varA + '/' +  varB + ' + ' + '' + varC + '/' +  varD + ' + ' + '' + '?' + '/' +  varD + ' = ' + answer + '/' + varD, '' + varE);
			
                	this.mQuiz.mQuestionArray.push(question);
                 }


		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));

                //random
                this.mQuiz.randomize(40);
	}
});
