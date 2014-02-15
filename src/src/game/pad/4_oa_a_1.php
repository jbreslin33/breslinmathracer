var g4_oa_a_1 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);
	       	
		//input pad
                this.mInputPad = new BigQuestionNumberPad(application);

		this.mThresholdTime = 120000;

		this.setScoreNeeded(20);
	},

     	//showCorrectAnswer
        showCorrectAnswerEnter: function()
        {
                this.parent();

                this.mShapeArray[1].setSize(700,100);
                this.mShapeArray[1].setPosition(380,80);

		this.mShapeArray[1].mMesh.innerHTML = '' + this.mQuiz.getQuestion().getShowAnswer();
        },

        //outOfTime
        outOfTimeEnter: function()
        {
                this.parent();

                this.mShapeArray[0].setPosition(650,170);

                this.mShapeArray[1].setSize(700,100);
                this.mShapeArray[1].setPosition(380,80);

                //move frantic clock
                this.mShapeArray[8].setPosition(650,300);
		
		this.mShapeArray[1].mMesh.innerHTML = '' + this.mQuiz.getQuestion().getShowAnswer();
        },

	createQuestions: function()
        {
 		this.parent();
                
		this.mQuiz.resetQuestionArray();

		for (s = 0; s < this.mScoreNeeded; s++)
		{	
			var a = Math.floor((Math.random()*8)+3);		
			var b = Math.floor((Math.random()*8)+3);		
			var x = a * b;

			var randomChance = Math.floor((Math.random()*2));		
	
			if (s == 0)
			{
               			this.mQuiz.mQuestionArray.push(new Question('The equation ' + x + ' = ' + a + ' x ' + b + ' also means that ? is ' + a + ' times as many as ' + b + ' and ' + b + ' times as many as ' + a + '.','' + x,'The equation ' + x + ' = ' + a + ' x ' + b + ' also means that ' + x + ' is ' + a + ' times as many as ' + b + ' and ' + b + ' times as many as ' + a + '.'));
			}
			else if (s == 1)
			{
               			this.mQuiz.mQuestionArray.push(new Question('The equation ' + x + ' = ' + a + ' x ' + b + ' also means that ' + x + ' is ? times as many as ' + b + ' and ' + b + ' times as many as ' + a + '.','' + a,'The equation ' + x + ' = ' + a + ' x ' + b + ' also means that ' + x + ' is ' + a + ' times as many as ' + b + ' and ' + b + ' times as many as ' + a + '.'));
			}
			else if (s > 1)
			{
               			this.mQuiz.mQuestionArray.push(new Question('The equation ' + x + ' = ' + a + ' x ' + b + ' also means that ' + x + ' is ' + a + ' times as many as ? and ' + b + ' times as many as ' + a + '.','' + b,'The equation ' + x + ' = ' + a + ' x ' + b + ' alson means that ' + x + ' is ' + a + ' times as many as ' + b + ' and ' + b + ' times as many as ' + a + '.'));

			}
		}
	}
});
