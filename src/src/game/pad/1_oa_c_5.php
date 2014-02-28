var g1_oa_c_5 = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);

		this.mThresholdTime = 6000;
	},

        createNumQuestion: function()
        {
                this.parent();

                //question
                this.mNumQuestion.setPosition(140,140);
                this.mNumQuestion.setSize(200,200);
        },

	//showCorrectAnswer
        showCorrectAnswerEnter: function()
        {
                this.parent();

                this.mShapeArray[1].setSize(200,200);
                this.mShapeArray[1].setPosition(200,200);
        },

        //outOfTime
        outOfTimeEnter: function()
        {
                this.parent();

                this.mShapeArray[0].setPosition(400,50);

                this.mShapeArray[1].setSize(200,200);
                this.mShapeArray[1].setPosition(200,200);
        },

	createQuestions: function()
        {
 		this.parent();

		if (this.mApplication.mLevel <= 10)
		{
                	this.mQuiz.resetQuestionArray();

			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 0 ?','2'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 0 2 ?','4'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 0 2 4 ?','6'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 0 2 4 6 ?','8'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 0 2 4 6 8 ?','10'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 0 2 4 6 8 10 ?','12'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 0 2 4 6 8 10 12 ?','14'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 0 2 4 6 8 10 12 14 ?','16'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 0 2 4 6 8 10 12 14 16 ?','18'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 0 2 4 6 8 10 12 14 16 18 ?','20'));
		}
		else if (this.mApplication.mLevel <= 20)
		{
                	this.mQuiz.resetQuestionArray();

			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 1 ?','3'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 1 3 ?','5'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 1 3 5 ?','7'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 1 3 5 7 ?','9'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 1 3 5 7 9 ?','11'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 1 3 5 7 9 11 ?','13'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 1 3 5 7 9 11 13 ?','15'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 1 3 5 7 9 11 13 15 ?','17'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 1 3 5 7 9 11 13 15 17 ?','19'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 1 3 5 7 9 11 13 15 17 19 ?','21'));
		}
		else if (this.mApplication.mLevel <= 30)
		{
			this.setScoreNeeded(20);
			this.mInputPad = new NumberPad(this.mApplication);

			this.mQuiz.resetQuestionPoolArray();

			//add
			this.mQuiz.mQuestionPoolArray.push(new Question('0 + 2 =','2'));
			this.mQuiz.mQuestionPoolArray.push(new Question('1 + 2 =','3'));
			this.mQuiz.mQuestionPoolArray.push(new Question('2 + 2 =','4'));
			this.mQuiz.mQuestionPoolArray.push(new Question('3 + 2 =','5'));
			this.mQuiz.mQuestionPoolArray.push(new Question('4 + 2 =','6'));
			this.mQuiz.mQuestionPoolArray.push(new Question('5 + 2 =','7'));
			this.mQuiz.mQuestionPoolArray.push(new Question('6 + 2 =','8'));
			this.mQuiz.mQuestionPoolArray.push(new Question('7 + 2 =','9'));
			this.mQuiz.mQuestionPoolArray.push(new Question('8 + 2 =','10'));
			this.mQuiz.mQuestionPoolArray.push(new Question('9 + 2 =','11'));
			this.mQuiz.mQuestionPoolArray.push(new Question('10 + 2 =','12'));
			this.mQuiz.mQuestionPoolArray.push(new Question('11 + 2 =','13'));
			this.mQuiz.mQuestionPoolArray.push(new Question('12 + 2 =','14'));
			this.mQuiz.mQuestionPoolArray.push(new Question('13 + 2 =','15'));
			this.mQuiz.mQuestionPoolArray.push(new Question('14 + 2 =','16'));
			this.mQuiz.mQuestionPoolArray.push(new Question('15 + 2 =','17'));
			this.mQuiz.mQuestionPoolArray.push(new Question('16 + 2 =','18'));
			this.mQuiz.mQuestionPoolArray.push(new Question('17 + 2 =','19'));
			this.mQuiz.mQuestionPoolArray.push(new Question('18 + 2 =','20'));
		
			//subtract	
			this.mQuiz.mQuestionPoolArray.push(new Question('2 - 2 =','0'));
			this.mQuiz.mQuestionPoolArray.push(new Question('3 - 2 =','1'));
			this.mQuiz.mQuestionPoolArray.push(new Question('4 - 2 =','2'));
			this.mQuiz.mQuestionPoolArray.push(new Question('5 - 2 =','3'));
			this.mQuiz.mQuestionPoolArray.push(new Question('6 - 2 =','4'));
			this.mQuiz.mQuestionPoolArray.push(new Question('7 - 2 =','5'));
			this.mQuiz.mQuestionPoolArray.push(new Question('8 - 2 =','6'));
			this.mQuiz.mQuestionPoolArray.push(new Question('9 - 2 =','7'));
			this.mQuiz.mQuestionPoolArray.push(new Question('10 - 2 =','8'));
			this.mQuiz.mQuestionPoolArray.push(new Question('11 - 2 =','9'));
			this.mQuiz.mQuestionPoolArray.push(new Question('12 - 2 =','10'));
			this.mQuiz.mQuestionPoolArray.push(new Question('13 - 2 =','11'));
			this.mQuiz.mQuestionPoolArray.push(new Question('14 - 2 =','12'));
			this.mQuiz.mQuestionPoolArray.push(new Question('15 - 2 =','13'));
			this.mQuiz.mQuestionPoolArray.push(new Question('16 - 2 =','14'));
			this.mQuiz.mQuestionPoolArray.push(new Question('17 - 2 =','15'));
			this.mQuiz.mQuestionPoolArray.push(new Question('18 - 2 =','16'));
			this.mQuiz.mQuestionPoolArray.push(new Question('19 - 2 =','17'));
			this.mQuiz.mQuestionPoolArray.push(new Question('20 - 2 =','18'));

			var totalAddition    = 0;
			var totalSubtraction = 0;

			while (totalAddition < this.mScoreNeeded * .4 || totalSubtraction < this.mScoreNeeded * .4)
			{
    				//just the question array reset
                		this.mQuiz.resetQuestionArray();

				totalAddition = 0;
				totalSubtraction = 0;

                		for (i = 0; i < this.mScoreNeeded; i++)
                		{
                        		var element = Math.floor((Math.random()*this.mQuiz.mQuestionPoolArray.length));
					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[element]);
					if (element < 20)
					{
						totalAddition++;
					}
					else if (element >= 20)
					{
						totalSubtraction++;
					}
                		}
			}
		}
	}
});
