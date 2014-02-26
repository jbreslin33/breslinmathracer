var g2_oa_c_3b = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);

		this.setScoreNeeded(20);
	},

	createQuestions: function()
        {
 		this.parent();

		//add
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 1 =','2'));
		//this.mQuiz.mQuestionPoolArray[0].mTipArray[0] = 'Adding 1 to a number is just like counting by 1.';

                this.mQuiz.mQuestionPoolArray.push(new Question('2 + 2 =','4'));
		//this.mQuiz.mQuestionPoolArray[1].mTipArray[0] = 'Adding 2 to a number is just like counting by 2.';

                this.mQuiz.mQuestionPoolArray.push(new Question('2 + 1 =','3'));
		//this.mQuiz.mQuestionPoolArray[2].mTipArray[0] = 'Adding 1 to a number is just like counting by 1.';

                this.mQuiz.mQuestionPoolArray.push(new Question('1 + 2 =','3'));
		//this.mQuiz.mQuestionPoolArray[3].mTipArray[0] = 'Think of this as 1 more than 2. ';

                this.mQuiz.mQuestionPoolArray.push(new Question('3 + 1 =','4'));
		//this.mQuiz.mQuestionPoolArray[4].mTipArray[0] = 'Adding 1 to a number is just like counting by 1.';

                this.mQuiz.mQuestionPoolArray.push(new Question('1 + 3 =','4'));
		//this.mQuiz.mQuestionPoolArray[5].mTipArray[0] = 'Think of this as 1 more than 3.';

                this.mQuiz.mQuestionPoolArray.push(new Question('4 + 1 =','5'));
		//this.mQuiz.mQuestionPoolArray[6].mTipArray[0] = 'Adding 1 to a number is just like counting by 1.';

                this.mQuiz.mQuestionPoolArray.push(new Question('1 + 4 =','5'));
		//this.mQuiz.mQuestionPoolArray[7].mTipArray[0] = 'Think of this as 1 more than 4.';

                this.mQuiz.mQuestionPoolArray.push(new Question('2 + 3 =','5'));
		//this.mQuiz.mQuestionPoolArray[8].mTipArray[0] = 'Think of this as 2 more than 3.';

                this.mQuiz.mQuestionPoolArray.push(new Question('3 + 2 =','5'));
		//this.mQuiz.mQuestionPoolArray[9].mTipArray[0] = 'Adding 2 to a number is just like counting by 2.';

                this.mQuiz.mQuestionPoolArray.push(new Question('0 + 0 =','0')); 
		//this.mQuiz.mQuestionPoolArray[10].mTipArray[0] = 'Adding 0 to a number gives you original number.';

                this.mQuiz.mQuestionPoolArray.push(new Question('1 + 0 =','1'));
		//this.mQuiz.mQuestionPoolArray[11].mTipArray[0] = 'Adding 0 to a number gives you original number.';

                this.mQuiz.mQuestionPoolArray.push(new Question('2 + 0 =','2'));
		//this.mQuiz.mQuestionPoolArray[12].mTipArray[0] = 'Adding 0 to a number gives you original number.';

                this.mQuiz.mQuestionPoolArray.push(new Question('3 + 0 =','3'));
		//this.mQuiz.mQuestionPoolArray[13].mTipArray[0] = 'Adding 0 to a number gives you original number.';

                this.mQuiz.mQuestionPoolArray.push(new Question('4 + 0 =','4'));
		//this.mQuiz.mQuestionPoolArray[14].mTipArray[0] = 'Adding 0 to a number gives you original number.';

                this.mQuiz.mQuestionPoolArray.push(new Question('5 + 0 =','5'));
		//this.mQuiz.mQuestionPoolArray[15].mTipArray[0] = 'Adding 0 to a number gives you original number.';

                this.mQuiz.mQuestionPoolArray.push(new Question('0 + 1 =','1'));
		//this.mQuiz.mQuestionPoolArray[16].mTipArray[0] = 'Adding 0 to a number gives you original number.';
                
		this.mQuiz.mQuestionPoolArray.push(new Question('0 + 2 =','2'));
		//this.mQuiz.mQuestionPoolArray[17].mTipArray[0] = 'Adding 0 to a number gives you original number.';

                this.mQuiz.mQuestionPoolArray.push(new Question('0 + 3 =','3'));
		//this.mQuiz.mQuestionPoolArray[18].mTipArray[0] = 'Adding 0 to a number gives you original number.';
                
		this.mQuiz.mQuestionPoolArray.push(new Question('0 + 4 =','4'));
		//this.mQuiz.mQuestionPoolArray[19].mTipArray[0] = 'Adding 0 to a number gives you original number.';

                this.mQuiz.mQuestionPoolArray.push(new Question('0 + 5 =','5'));
		//this.mQuiz.mQuestionPoolArray[20].mTipArray[0] = 'Adding 0 to a number gives you original number.';

		//21

		//subtract
		//0
                this.mQuiz.mQuestionPoolArray.push(new Question('0 - 0 =','0'));
		//this.mQuiz.mQuestionPoolArray[21].mTipArray[0] = 'Subtracting 0 from itself gives you 0.';

                this.mQuiz.mQuestionPoolArray.push(new Question('1 - 1 =','0'));
		//this.mQuiz.mQuestionPoolArray[22].mTipArray[0] = 'Subtracting a number from itself gives you 0';

                this.mQuiz.mQuestionPoolArray.push(new Question('2 - 2 =','0'));
		//this.mQuiz.mQuestionPoolArray[23].mTipArray[0] = 'Subtracting a number from itself gives you 0';

                this.mQuiz.mQuestionPoolArray.push(new Question('3 - 3 =','0'));
		//this.mQuiz.mQuestionPoolArray[24].mTipArray[0] = 'Subtracting a number from itself gives you 0';

                this.mQuiz.mQuestionPoolArray.push(new Question('4 - 4 =','0'));
		//this.mQuiz.mQuestionPoolArray[25].mTipArray[0] = 'Subtracting a number from itself gives you 0';

                this.mQuiz.mQuestionPoolArray.push(new Question('5 - 5 =','0'));
		//this.mQuiz.mQuestionPoolArray[26].mTipArray[0] = 'Subtracting a number from itself gives you 0';

		//1
                this.mQuiz.mQuestionPoolArray.push(new Question('1 - 0 =','1'));
		//this.mQuiz.mQuestionPoolArray[27].mTipArray[0] = 'Subtracting 0 from a number gives you original number.';

                this.mQuiz.mQuestionPoolArray.push(new Question('2 - 1 =','1'));
		//this.mQuiz.mQuestionPoolArray[28].mTipArray[0] = 'Subtracting 1 less than a number is 1.';

                this.mQuiz.mQuestionPoolArray.push(new Question('3 - 2 =','1'));
		//this.mQuiz.mQuestionPoolArray[29].mTipArray[0] = 'Subtracting 1 less than a number is 1.';

                this.mQuiz.mQuestionPoolArray.push(new Question('4 - 3 =','1'));
		//this.mQuiz.mQuestionPoolArray[30].mTipArray[0] = 'Subtracting 1 less than a number is 1.';

                this.mQuiz.mQuestionPoolArray.push(new Question('5 - 4 =','1'));
		//this.mQuiz.mQuestionPoolArray[31].mTipArray[0] = 'Subtracting 1 less than a number is 1.';

		//2	
                this.mQuiz.mQuestionPoolArray.push(new Question('2 - 0 =','2'));
		//this.mQuiz.mQuestionPoolArray[32].mTipArray[0] = 'Subtracting 0 from a number gives you original number.';

                this.mQuiz.mQuestionPoolArray.push(new Question('3 - 1 =','2'));
		//this.mQuiz.mQuestionPoolArray[33].mTipArray[0] = 'Subtracting 1 from a number is like counting backwards by 1.';

                this.mQuiz.mQuestionPoolArray.push(new Question('4 - 2 =','2'));
		//this.mQuiz.mQuestionPoolArray[34].mTipArray[0] = 'Count backwards by 2 from 4 and you get 2.';

                this.mQuiz.mQuestionPoolArray.push(new Question('5 - 3 =','2'));
		//this.mQuiz.mQuestionPoolArray[35].mTipArray[0] = 'Count backwards by 2 from 5 and you get 3.';

		//3
                this.mQuiz.mQuestionPoolArray.push(new Question('3 - 0 =','3'));
		//this.mQuiz.mQuestionPoolArray[36].mTipArray[0] = 'Subtracting 0 from a number gives you original number.';

                this.mQuiz.mQuestionPoolArray.push(new Question('4 - 1 =','3'));
		//this.mQuiz.mQuestionPoolArray[37].mTipArray[0] = 'Subtracting 1 from a number is like counting backwards by 1.';

                this.mQuiz.mQuestionPoolArray.push(new Question('5 - 2 =','3'));
		//this.mQuiz.mQuestionPoolArray[38].mTipArray[0] = 'Count backwards by 3 from 5 and you get 3.';

		//4
                this.mQuiz.mQuestionPoolArray.push(new Question('4 - 0 =','4'));
		//this.mQuiz.mQuestionPoolArray[39].mTipArray[0] = 'Subtracting 0 from a number gives you original number.';

                this.mQuiz.mQuestionPoolArray.push(new Question('5 - 1 =','4'));
		//this.mQuiz.mQuestionPoolArray[40].mTipArray[0] = 'Subtracting 1 from a number is like counting backwards by 1.';

		//5
                this.mQuiz.mQuestionPoolArray.push(new Question('5 - 0 =','5'));
		//this.mQuiz.mQuestionPoolArray[41].mTipArray[0] = 'Subtracting 0 from a number gives you original number.';
		
		//extra.. 
		this.mQuiz.mQuestionPoolArray.push(new Question('5 - 0 =','5'));
		//this.mQuiz.mQuestionPoolArray[42].mTipArray[0] = 'Subtracting 0 from a number gives you original number.';

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
	}
});
