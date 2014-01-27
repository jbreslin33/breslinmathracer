var k_g_a_1 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);

		//answers 
                this.mThresholdTime = 60000;

		//scoreNeeded
		this.setScoreNeeded(20);

		//input pad
                this.mInputPad = new ButtonMultipleChoicePad(application);
	},
	
	//state overides
        showCorrectAnswerOutOfTime: function()
        {
                this.mCorrectAnswerStartTime = this.mTimeSinceEpoch;
                this.mInputPad.hide();
                this.mCorrectAnswerBar.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getAnswer();
                this.showCorrectAnswerBar();
                this.showClockShape();
                this.mInputPad.showQuestion();
                this.mInputPad.hide();
                this.mInputPad.mNumQuestion.setVisibility('true');

        },

	showCorrectAnswer: function()
        {
                this.parent();
                this.mCorrectAnswerBar.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getAnswer();
                this.mInputPad.showQuestion();
                this.mInputPad.hide();
                this.mInputPad.mNumQuestion.setVisibility('true');
        },
 
	createQuestions: function()
        {
		this.parent();
 
		this.mQuiz.mAnswerPool.push('beside');
		this.mQuiz.mAnswerPool.push('above');
		this.mQuiz.mAnswerPool.push('behind');
		this.mQuiz.mAnswerPool.push('in front of');
		this.mQuiz.mAnswerPool.push('below');
		this.mQuiz.mAnswerPool.push('next to');

		//1 beside
                var question = new Question('Red Monster is','beside');
		question.mAnswerPool.push(this.mQuiz.mAnswerPool[0]);
		question.mAnswerPool.push(this.mQuiz.mAnswerPool[1]);
		question.mAnswerPool.push(this.mQuiz.mAnswerPool[2]);
		question.mAnswerPool.push(this.mQuiz.mAnswerPool[3]);
		question.mAnswerPool.push(this.mQuiz.mAnswerPool[4]);
		question.mShapeArray.push(this.mShapeArray[2]);
		question.mShapeArray.push(this.mShapeArray[3]);
 		this.mQuiz.mQuestionPoolArray.push(question);

             	//2 above
                var question = new Question('Red Monster is','above');
		question.mAnswerPool.push(this.mQuiz.mAnswerPool[0]);
		question.mAnswerPool.push(this.mQuiz.mAnswerPool[1]);
		question.mAnswerPool.push(this.mQuiz.mAnswerPool[2]);
		question.mAnswerPool.push(this.mQuiz.mAnswerPool[3]);
		question.mAnswerPool.push(this.mQuiz.mAnswerPool[4]);
		question.mShapeArray.push(this.mShapeArray[4]);
		question.mShapeArray.push(this.mShapeArray[5]);
 		this.mQuiz.mQuestionPoolArray.push(question);

                //3 behind
                var question = new Question('Red Monster is','behind');
		question.mAnswerPool.push(this.mQuiz.mAnswerPool[0]);
		question.mAnswerPool.push(this.mQuiz.mAnswerPool[1]);
		question.mAnswerPool.push(this.mQuiz.mAnswerPool[2]);
		question.mAnswerPool.push(this.mQuiz.mAnswerPool[3]);
		question.mAnswerPool.push(this.mQuiz.mAnswerPool[4]);
		question.mShapeArray.push(this.mShapeArray[6]);
		question.mShapeArray.push(this.mShapeArray[7]);
 		this.mQuiz.mQuestionPoolArray.push(question);

                //4 in front of
                var question = new Question('Red Monster is','in front of');
		question.mAnswerPool.push(this.mQuiz.mAnswerPool[0]);
		question.mAnswerPool.push(this.mQuiz.mAnswerPool[1]);
		question.mAnswerPool.push(this.mQuiz.mAnswerPool[2]);
		question.mAnswerPool.push(this.mQuiz.mAnswerPool[3]);
		question.mAnswerPool.push(this.mQuiz.mAnswerPool[4]);
		question.mShapeArray.push(this.mShapeArray[8]);
		question.mShapeArray.push(this.mShapeArray[9]);
 		this.mQuiz.mQuestionPoolArray.push(question);

                //5 below
                var question = new Question('Red Monster is','below');
		question.mAnswerPool.push(this.mQuiz.mAnswerPool[0]);
		question.mAnswerPool.push(this.mQuiz.mAnswerPool[1]);
		question.mAnswerPool.push(this.mQuiz.mAnswerPool[2]);
		question.mAnswerPool.push(this.mQuiz.mAnswerPool[3]);
		question.mAnswerPool.push(this.mQuiz.mAnswerPool[4]);
		question.mShapeArray.push(this.mShapeArray[10]);
		question.mShapeArray.push(this.mShapeArray[11]);
 		this.mQuiz.mQuestionPoolArray.push(question);

                //6 next to
                var question = new Question('Red Monster is','next to');
		question.mAnswerPool.push(this.mQuiz.mAnswerPool[5]);
		question.mAnswerPool.push(this.mQuiz.mAnswerPool[1]);
		question.mAnswerPool.push(this.mQuiz.mAnswerPool[2]);
		question.mAnswerPool.push(this.mQuiz.mAnswerPool[3]);
		question.mAnswerPool.push(this.mQuiz.mAnswerPool[4]);
		question.mShapeArray.push(this.mShapeArray[12]);
		question.mShapeArray.push(this.mShapeArray[13]);
 		this.mQuiz.mQuestionPoolArray.push(question);

                var totalNew           = 0;

                while (totalNew < this.mScoreNeeded * .4 || totalNew > this.mScoreNeeded * .6)
                {
                        //reset vars and arrays
                        totalNew = 0;
	
			this.mQuiz.resetQuestionArray();

                        for (s = 0; s < this.mScoreNeeded; s++)
                        {
                                //50% chance of asking newest question
                                var randomChance = Math.floor((Math.random()*2));
                                if (randomChance == 0)
                                {
                                        this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[parseInt(this.mApplication.mLevel-1)]);
                                        totalNew++;
                                }
                                if (randomChance == 1)
                                {
                                        var randomElement = Math.floor((Math.random()*parseInt(this.mApplication.mLevel-1)));
                                        this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomElement]);
                                }
                        }
                }
	},

	createWorld: function()
	{
		this.parent();

		//1 beside 
                this.mShapeArray.push(new Shape(50,50,200,250,this,"/images/monster/red_monster.png","",""));
                this.mShapeArray.push(new Shape(50,50,150,250,this,"/images/bus/kid.png","",""));

		//2 above 
                this.mShapeArray.push(new Shape(50,50,150,200,this,"/images/monster/red_monster.png","",""));
                this.mShapeArray.push(new Shape(50,50,150,250,this,"/images/bus/kid.png","",""));
	
		//3 behind 
                this.mShapeArray.push(new Shape(50,50,150,250,this,"/images/monster/red_monster.png","",""));
                this.mShapeArray.push(new Shape(50,50,150,250,this,"/images/bus/kid.png","",""));

		//4 in front of 
                this.mShapeArray.push(new Shape(50,50,150,250,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,150,250,this,"/images/monster/red_monster.png","",""));
               
		//5 below
                this.mShapeArray.push(new Shape(50,50,150,250,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,150,300,this,"/images/monster/red_monster.png","",""));

		//6 next to 
                this.mShapeArray.push(new Shape(50,50,100,250,this,"/images/monster/red_monster.png","",""));
                this.mShapeArray.push(new Shape(50,50,150,250,this,"/images/bus/kid.png","",""));
	}
});
