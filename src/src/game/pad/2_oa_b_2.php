var g2_oa_b_2 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);

		this.setScoreNeeded(20);

                //input pad
                this.mInputPad = new NumberPad(application);
	},

	createQuestions: function()
        {
 		this.parent();

		//add 1
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 1 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 + 1 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 + 1 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('13 + 1 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('14 + 1 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('15 + 1 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('16 + 1 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('17 + 1 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('18 + 1 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('19 + 1 =','20'));

		//add 1  
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 10 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 11 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 12 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 13 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 14 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 16 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 17 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 18 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 19 =','20'));

		//add 2
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
		
		this.mQuiz.mQuestionPoolArray.push(new Question('2 + 9 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 + 10 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 + 11 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 + 12 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 + 13 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 + 14 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 + 15 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 + 16 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 + 17 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 + 18 =','20'));
	

		//add 3	
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 3 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 3 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 3 =','13'));


		//add 4
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 4 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 4 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 4 =','13'));

		//add 5
		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 5 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 5 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 5 =','13'));
	
		this.mQuiz.mQuestionPoolArray.push(new Question('3 + 8 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 7 =','11'));

		//add 6
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 6 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 6 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 6 =','12'));

		//add 7
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 7 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 7 =','13'));

		//add 8
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 8 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 8 =','13'));

		//add 9
		this.mQuiz.mQuestionPoolArray.push(new Question('3 + 9 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 9 =','13'));

		//add 10
		this.mQuiz.mQuestionPoolArray.push(new Question('2 + 10 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 + 10 =','13'));
		
		//add 11
		this.mQuiz.mQuestionPoolArray.push(new Question('2 + 11 =','13'));

		//add 12

		//add 13

		//add 14

		//add 15

		//add 16

		//add 17

		//add 18

		//add 19
	
		//add 20
			



		var totalNew           = 0;
		
		while (totalNew < this.mScoreNeeded * .4)
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
	}
});
