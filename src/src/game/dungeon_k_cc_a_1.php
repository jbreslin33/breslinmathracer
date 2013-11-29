var Dungeon_k_cc_a_1 = new Class(
{

Extends: Dungeon,

	initialize: function(application)
	{
       		this.parent(application);
	},

	createQuestions: function()
	{
		this.parent();
		
		if (this.mApplication.mNextLevelID == 1)
		{
			this.mQuiz.mQuestionArray.push(new Question('0','1'));
		}
		
		if (this.mApplication.mNextLevelID == 1.01)
		{
			this.mQuiz.mQuestionArray.push(new Question('0','1'));
			this.mQuiz.mQuestionArray.push(new Question('1','2'));
		}
		
		if (this.mApplication.mNextLevelID == 1.02)
		{
			this.mQuiz.mQuestionArray.push(new Question('0','1'));
			this.mQuiz.mQuestionArray.push(new Question('1','2'));
			this.mQuiz.mQuestionArray.push(new Question('2','3'));
		}
		if (this.mApplication.mNextLevelID == 1.03)
		{
			this.mQuiz.mQuestionArray.push(new Question('0','1'));
			this.mQuiz.mQuestionArray.push(new Question('1','2'));
			this.mQuiz.mQuestionArray.push(new Question('2','3'));
			this.mQuiz.mQuestionArray.push(new Question('3','4'));
		}
		if (this.mApplication.mNextLevelID == 1.04)
		{
			this.mQuiz.mQuestionArray.push(new Question('0','1'));
			this.mQuiz.mQuestionArray.push(new Question('1','2'));
			this.mQuiz.mQuestionArray.push(new Question('2','3'));
			this.mQuiz.mQuestionArray.push(new Question('3','4'));
			this.mQuiz.mQuestionArray.push(new Question('4','5'));
		}
		if (this.mApplication.mNextLevelID == 1.05) 
		{
			this.mQuiz.mQuestionArray.push(new Question('0','1'));
			this.mQuiz.mQuestionArray.push(new Question('1','2'));
			this.mQuiz.mQuestionArray.push(new Question('2','3'));
			this.mQuiz.mQuestionArray.push(new Question('3','4'));
			this.mQuiz.mQuestionArray.push(new Question('4','5'));
			this.mQuiz.mQuestionArray.push(new Question('5','6'));
		}
		if (this.mApplication.mNextLevelID == 1.06)
		{
			this.mQuiz.mQuestionArray.push(new Question('0','1'));
			this.mQuiz.mQuestionArray.push(new Question('1','2'));
			this.mQuiz.mQuestionArray.push(new Question('2','3'));
			this.mQuiz.mQuestionArray.push(new Question('3','4'));
			this.mQuiz.mQuestionArray.push(new Question('4','5'));
			this.mQuiz.mQuestionArray.push(new Question('5','6'));
			this.mQuiz.mQuestionArray.push(new Question('6','7'));
		}
		if (this.mApplication.mNextLevelID == 1.07)
		{
			this.mQuiz.mQuestionArray.push(new Question('0','1'));
			this.mQuiz.mQuestionArray.push(new Question('1','2'));
			this.mQuiz.mQuestionArray.push(new Question('2','3'));
			this.mQuiz.mQuestionArray.push(new Question('3','4'));
			this.mQuiz.mQuestionArray.push(new Question('4','5'));
			this.mQuiz.mQuestionArray.push(new Question('5','6'));
			this.mQuiz.mQuestionArray.push(new Question('6','7'));
			this.mQuiz.mQuestionArray.push(new Question('7','8'));
		}
		if (this.mApplication.mNextLevelID == 1.08)
		{
			this.mQuiz.mQuestionArray.push(new Question('0','1'));
			this.mQuiz.mQuestionArray.push(new Question('1','2'));
			this.mQuiz.mQuestionArray.push(new Question('2','3'));
			this.mQuiz.mQuestionArray.push(new Question('3','4'));
			this.mQuiz.mQuestionArray.push(new Question('4','5'));
			this.mQuiz.mQuestionArray.push(new Question('5','6'));
			this.mQuiz.mQuestionArray.push(new Question('6','7'));
			this.mQuiz.mQuestionArray.push(new Question('7','8'));
			this.mQuiz.mQuestionArray.push(new Question('8','9'));
		}
		if (this.mApplication.mNextLevelID == 1.09)
		{
			this.mQuiz.mQuestionArray.push(new Question('0','1'));
			this.mQuiz.mQuestionArray.push(new Question('1','2'));
			this.mQuiz.mQuestionArray.push(new Question('2','3'));
			this.mQuiz.mQuestionArray.push(new Question('3','4'));
			this.mQuiz.mQuestionArray.push(new Question('4','5'));
			this.mQuiz.mQuestionArray.push(new Question('5','6'));
			this.mQuiz.mQuestionArray.push(new Question('6','7'));
			this.mQuiz.mQuestionArray.push(new Question('7','8'));
			this.mQuiz.mQuestionArray.push(new Question('8','9'));
			this.mQuiz.mQuestionArray.push(new Question('9','10'));
		}
		if (this.mApplication.mNextLevelID == 1.10) 
		{
			this.mQuiz.mQuestionArray.push(new Question('1','2'));
			this.mQuiz.mQuestionArray.push(new Question('2','3'));
			this.mQuiz.mQuestionArray.push(new Question('3','4'));
			this.mQuiz.mQuestionArray.push(new Question('4','5'));
			this.mQuiz.mQuestionArray.push(new Question('5','6'));
			this.mQuiz.mQuestionArray.push(new Question('6','7'));
			this.mQuiz.mQuestionArray.push(new Question('7','8'));
			this.mQuiz.mQuestionArray.push(new Question('8','9'));
			this.mQuiz.mQuestionArray.push(new Question('9','10'));
			this.mQuiz.mQuestionArray.push(new Question('10','11'));
		}
		if (this.mApplication.mNextLevelID == 1.11)
		{
			this.mQuiz.mQuestionArray.push(new Question('2','3'));
			this.mQuiz.mQuestionArray.push(new Question('3','4'));
			this.mQuiz.mQuestionArray.push(new Question('4','5'));
			this.mQuiz.mQuestionArray.push(new Question('5','6'));
			this.mQuiz.mQuestionArray.push(new Question('6','7'));
			this.mQuiz.mQuestionArray.push(new Question('7','8'));
			this.mQuiz.mQuestionArray.push(new Question('8','9'));
			this.mQuiz.mQuestionArray.push(new Question('9','10'));
			this.mQuiz.mQuestionArray.push(new Question('10','11'));
			this.mQuiz.mQuestionArray.push(new Question('11','12'));
		}
		if (this.mApplication.mNextLevelID == 1.12)
		{
			this.mQuiz.mQuestionArray.push(new Question('3','4'));
			this.mQuiz.mQuestionArray.push(new Question('4','5'));
			this.mQuiz.mQuestionArray.push(new Question('5','6'));
			this.mQuiz.mQuestionArray.push(new Question('6','7'));
			this.mQuiz.mQuestionArray.push(new Question('7','8'));
			this.mQuiz.mQuestionArray.push(new Question('8','9'));
			this.mQuiz.mQuestionArray.push(new Question('9','10'));
			this.mQuiz.mQuestionArray.push(new Question('10','11'));
			this.mQuiz.mQuestionArray.push(new Question('11','12'));
			this.mQuiz.mQuestionArray.push(new Question('12','13'));
		}
		if (this.mApplication.mNextLevelID == 1.13)
		{
			this.mQuiz.mQuestionArray.push(new Question('4','5'));
			this.mQuiz.mQuestionArray.push(new Question('5','6'));
			this.mQuiz.mQuestionArray.push(new Question('6','7'));
			this.mQuiz.mQuestionArray.push(new Question('7','8'));
			this.mQuiz.mQuestionArray.push(new Question('8','9'));
			this.mQuiz.mQuestionArray.push(new Question('9','10'));
			this.mQuiz.mQuestionArray.push(new Question('10','11'));
			this.mQuiz.mQuestionArray.push(new Question('11','12'));
			this.mQuiz.mQuestionArray.push(new Question('12','13'));
			this.mQuiz.mQuestionArray.push(new Question('13','14'));
		}
		if (this.mApplication.mNextLevelID == 1.14)
		{
			this.mQuiz.mQuestionArray.push(new Question('5','6'));
			this.mQuiz.mQuestionArray.push(new Question('6','7'));
			this.mQuiz.mQuestionArray.push(new Question('7','8'));
			this.mQuiz.mQuestionArray.push(new Question('8','9'));
			this.mQuiz.mQuestionArray.push(new Question('9','10'));
			this.mQuiz.mQuestionArray.push(new Question('10','11'));
			this.mQuiz.mQuestionArray.push(new Question('11','12'));
			this.mQuiz.mQuestionArray.push(new Question('12','13'));
			this.mQuiz.mQuestionArray.push(new Question('13','14'));
			this.mQuiz.mQuestionArray.push(new Question('14','15'));
		}
		if (this.mApplication.mNextLevelID == 1.15)
		{
			this.mQuiz.mQuestionArray.push(new Question('6','7'));
			this.mQuiz.mQuestionArray.push(new Question('7','8'));
			this.mQuiz.mQuestionArray.push(new Question('8','9'));
			this.mQuiz.mQuestionArray.push(new Question('9','10'));
			this.mQuiz.mQuestionArray.push(new Question('10','11'));
			this.mQuiz.mQuestionArray.push(new Question('11','12'));
			this.mQuiz.mQuestionArray.push(new Question('12','13'));
			this.mQuiz.mQuestionArray.push(new Question('13','14'));
			this.mQuiz.mQuestionArray.push(new Question('14','15'));
			this.mQuiz.mQuestionArray.push(new Question('15','16'));
		}
		if (this.mApplication.mNextLevelID == 1.16)
		{
			this.mQuiz.mQuestionArray.push(new Question('7','8'));
			this.mQuiz.mQuestionArray.push(new Question('8','9'));
			this.mQuiz.mQuestionArray.push(new Question('9','10'));
			this.mQuiz.mQuestionArray.push(new Question('10','11'));
			this.mQuiz.mQuestionArray.push(new Question('11','12'));
			this.mQuiz.mQuestionArray.push(new Question('12','13'));
			this.mQuiz.mQuestionArray.push(new Question('13','14'));
			this.mQuiz.mQuestionArray.push(new Question('14','15'));
			this.mQuiz.mQuestionArray.push(new Question('15','16'));
			this.mQuiz.mQuestionArray.push(new Question('16','17'));
		}
		if (this.mApplication.mNextLevelID == 1.17)
		{
			this.mQuiz.mQuestionArray.push(new Question('8','9'));
			this.mQuiz.mQuestionArray.push(new Question('9','10'));
			this.mQuiz.mQuestionArray.push(new Question('10','11'));
			this.mQuiz.mQuestionArray.push(new Question('11','12'));
			this.mQuiz.mQuestionArray.push(new Question('12','13'));
			this.mQuiz.mQuestionArray.push(new Question('13','14'));
			this.mQuiz.mQuestionArray.push(new Question('14','15'));
			this.mQuiz.mQuestionArray.push(new Question('15','16'));
			this.mQuiz.mQuestionArray.push(new Question('16','17'));
			this.mQuiz.mQuestionArray.push(new Question('17','18'));
		}
		if (this.mApplication.mNextLevelID == 1.18)
		{
			this.mQuiz.mQuestionArray.push(new Question('9','10'));
			this.mQuiz.mQuestionArray.push(new Question('10','11'));
			this.mQuiz.mQuestionArray.push(new Question('11','12'));
			this.mQuiz.mQuestionArray.push(new Question('12','13'));
			this.mQuiz.mQuestionArray.push(new Question('13','14'));
			this.mQuiz.mQuestionArray.push(new Question('14','15'));
			this.mQuiz.mQuestionArray.push(new Question('15','16'));
			this.mQuiz.mQuestionArray.push(new Question('16','17'));
			this.mQuiz.mQuestionArray.push(new Question('17','18'));
			this.mQuiz.mQuestionArray.push(new Question('18','19'));
		}
		if (this.mApplication.mNextLevelID == 1.19)
		{
			this.mQuiz.mQuestionArray.push(new Question('10','11'));
			this.mQuiz.mQuestionArray.push(new Question('11','12'));
			this.mQuiz.mQuestionArray.push(new Question('12','13'));
			this.mQuiz.mQuestionArray.push(new Question('13','14'));
			this.mQuiz.mQuestionArray.push(new Question('14','15'));
			this.mQuiz.mQuestionArray.push(new Question('15','16'));
			this.mQuiz.mQuestionArray.push(new Question('16','17'));
			this.mQuiz.mQuestionArray.push(new Question('17','18'));
			this.mQuiz.mQuestionArray.push(new Question('18','19'));
			this.mQuiz.mQuestionArray.push(new Question('19','20'));
		}
	}
});
