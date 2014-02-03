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
		this.mQuiz.mQuestionPoolArray.push(new Question('11 + 3 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 + 3 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('13 + 3 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('14 + 3 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('15 + 3 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('16 + 3 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('17 + 3 =','20'));
		
		this.mQuiz.mQuestionPoolArray.push(new Question('3 + 8 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 + 9 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 + 10 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 + 11 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 + 12 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 + 13 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 + 14 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 + 15 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 + 16 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 + 17 =','20'));


		//add 4
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 4 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 4 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 4 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 4 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 + 4 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 + 4 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('13 + 4 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('14 + 4 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('15 + 4 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('16 + 4 =','20'));

		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 7 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 8 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 9 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 10 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 11 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 12 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 13 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 14 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 15 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 16 =','20'));

		//add 5
		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 5 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 5 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 5 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 5 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 5 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 + 5 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 + 5 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('13 + 5 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('14 + 5 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('15 + 5 =','20'));

		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 6 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 7 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 8 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 9 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 10 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 11 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 12 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 13 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 14 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 15 =','20'));

	
		//add 6
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 6 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 6 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 6 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 6 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 6 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 6 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 + 6 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 + 6 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('13 + 6 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('14 + 6 =','20'));

		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 5 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 6 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 7 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 8 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 9 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 10 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 11 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 12 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 13 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 14 =','20'));

		//add 7
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 7 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 7 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 7 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 7 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 7 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 7 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 7 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 + 7 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 + 7 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('13 + 7 =','20'));
		
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 4 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 5 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 6 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 7 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 8 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 9 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 10 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 11 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 12 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 13 =','20'));

		//add 8
		this.mQuiz.mQuestionPoolArray.push(new Question('3 + 8 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 8 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 8 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 8 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 8 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 8 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 8 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 8 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 + 8 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 + 8 =','20'));
		
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 3 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 4 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 5 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 6 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 7 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 8 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 9 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 10 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 11 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 12 =','20'));

		//add 9
		this.mQuiz.mQuestionPoolArray.push(new Question('2 + 9 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 + 9 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 9 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 9 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 9 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 9 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 9 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 9 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 9 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 + 9 =','20'));
		
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 2 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 3 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 4 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 5 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 6 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 7 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 8 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 9 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 10 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 11 =','20'));

		//add 10
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 10 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 + 10 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 + 10 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 10 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 10 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 10 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 10 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 10 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 10 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 10 =','20'));
		
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 1 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 2 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 3 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 4 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 5 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 6 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 7 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 8 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 9 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 10 =','20'));
		
		//add 11
		this.mQuiz.mQuestionPoolArray.push(new Question('0 + 11 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 11 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 + 11 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 + 11 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 11 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 11 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 11 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 11 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 11 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 11 =','20'));
		
		this.mQuiz.mQuestionPoolArray.push(new Question('11 + 0 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 + 1 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 + 2 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 + 3 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 + 4 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 + 5 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 + 6 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 + 7 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 + 8 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 + 9 =','20'));

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
