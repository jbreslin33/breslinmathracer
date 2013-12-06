var Pad_2_oa_b_2 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);
		this.mApplication.mHud.mGameName.setText('<font size="2">ADD</font>');
	},

	createQuestions: function()
        {
 		this.parent();

		//11
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 1 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 2 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 3 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 4 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 5 =','11'));
	
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 10 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 + 9 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 + 8 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 7 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 6 =','11'));
		//10		
	
		//12	
		this.mQuiz.mQuestionPoolArray.push(new Question('11 + 1 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 2 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 3 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 4 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 5 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 6 =','12'));
		//16

		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 11 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 + 10 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 + 9 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 8 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 7 =','12'));
		//21
		

		//13
		this.mQuiz.mQuestionPoolArray.push(new Question('12 + 1 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 + 2 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 3 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 4 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 5 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 6 =','13'));
		//27

		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 12 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 + 11 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 + 10 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 9 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 8 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 7 =','13'));
		//33

		//14
		this.mQuiz.mQuestionPoolArray.push(new Question('13 + 1 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 + 2 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 + 2 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 + 3 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 4 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 5 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 6 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 7 =','14'));
		//41

		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 13 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 + 12 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 + 11 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 10 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 9 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 8 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 7 =','14'));
		//48

		//15
		this.mQuiz.mQuestionPoolArray.push(new Question('14 + 1 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('13 + 2 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 + 3 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 + 4 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 5 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 6 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 7 =','15'));
		//55
		
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 14 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 + 13 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 + 12 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 11 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 10 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 9 =','15'));
		//61

		//16
		this.mQuiz.mQuestionPoolArray.push(new Question('15 + 1 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('14 + 2 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('13 + 3 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 + 4 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 + 5 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 6 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 7 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 8 =','16'));
		//69

		//17
		this.mQuiz.mQuestionPoolArray.push(new Question('16 + 1 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('15 + 2 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('14 + 3 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('13 + 4 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 + 5 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 + 6 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 7 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 8 =','17'));
		//77

		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 16 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 + 15 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 + 14 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 13 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 12 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 11 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 10 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 9 =','17'));
		//85
	
		//18	
		this.mQuiz.mQuestionPoolArray.push(new Question('17 + 1 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('16 + 2 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('15 + 3 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('14 + 4 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('13 + 5 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 + 6 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 + 7 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 8 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 9 =','18'));
		//94

		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 17 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 + 16 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 + 15 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 14 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 13 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 12 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 11 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 10 =','18'));
		//102

		//19
		this.mQuiz.mQuestionPoolArray.push(new Question('18 + 1 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('17 + 2 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('16 + 3 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('15 + 4 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('14 + 5 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('13 + 6 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 + 7 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 + 8 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 9 =','19'));
		//111

		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 18 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 + 17 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 + 16 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 15 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 14 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 13 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 12 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 11=','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 10 =','19'));
		//120

		//20
		this.mQuiz.mQuestionPoolArray.push(new Question('19 + 1 =','20'));
		this.mQuiz.mQuestionPoolArray.push(new Question('18 + 2 =','20'));
		this.mQuiz.mQuestionPoolArray.push(new Question('17 + 3 =','20'));
		this.mQuiz.mQuestionPoolArray.push(new Question('16 + 4 =','20'));
		this.mQuiz.mQuestionPoolArray.push(new Question('15 + 5 =','20'));
		this.mQuiz.mQuestionPoolArray.push(new Question('14 + 6 =','20'));
		this.mQuiz.mQuestionPoolArray.push(new Question('13 + 7 =','20'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 + 8 =','20'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 + 9 =','20'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 10 =','20'));
		//130
		
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 19 =','20'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 + 18 =','20'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 + 17 =','20'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 16 =','20'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 15 =','20'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 14 =','20'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 13 =','20'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 12 =','20'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 11 =','20'));
		//139


		var totalNewGoal       = parseInt(this.mScoreNeeded / 2);
		var totalNew           = 0;
		var newQuestionElement = 0;
if (this.mApplication.mNextLevelID == 48)
		{
			newQuestionElement = 0;	
		}		
		if (this.mApplication.mNextLevelID == 48.001)
		{
			newQuestionElement = 1;	
		}		
		if (this.mApplication.mNextLevelID == 48.002)
		{
			newQuestionElement = 2;	
		}		
		if (this.mApplication.mNextLevelID == 48.003)
		{
			newQuestionElement = 3;	
		}		
		if (this.mApplication.mNextLevelID == 48.004)
		{
			newQuestionElement = 4;	
		}		
		if (this.mApplication.mNextLevelID == 48.005)
		{
			newQuestionElement = 5;	
		}		
		if (this.mApplication.mNextLevelID == 48.006)
		{
			newQuestionElement = 6;	
		}		
		if (this.mApplication.mNextLevelID == 48.007)
		{
			newQuestionElement = 7;	
		}		
		if (this.mApplication.mNextLevelID == 48.008)
		{
			newQuestionElement = 8;	
		}		
		if (this.mApplication.mNextLevelID == 48.009)
		{
			newQuestionElement = 9;	
		}		
		if (this.mApplication.mNextLevelID == 48.010)
		{
			newQuestionElement = 10;	
		}		
		if (this.mApplication.mNextLevelID == 48.011)
		{
			newQuestionElement = 11;	
		}		
		if (this.mApplication.mNextLevelID == 48.012)
		{
			newQuestionElement = 12;	
		}		
		if (this.mApplication.mNextLevelID == 48.013)
		{
			newQuestionElement = 13;	
		}		
		if (this.mApplication.mNextLevelID == 48.014)
		{
			newQuestionElement = 14;	
		}		
		if (this.mApplication.mNextLevelID == 48.015)
		{
			newQuestionElement = 15;	
		}		
		if (this.mApplication.mNextLevelID == 48.016)
		{
			newQuestionElement = 16;	
		}		
		if (this.mApplication.mNextLevelID == 48.017)
		{
			newQuestionElement = 17;	
		}		
		if (this.mApplication.mNextLevelID == 48.018)
		{
			newQuestionElement = 18;	
		}		
		if (this.mApplication.mNextLevelID == 48.019)
		{
			newQuestionElement = 19;	
		}		
		if (this.mApplication.mNextLevelID == 48.020)
		{
			newQuestionElement = 20;	
		}		
		if (this.mApplication.mNextLevelID == 48.021)
		{
			newQuestionElement = 21;	
		}		
		if (this.mApplication.mNextLevelID == 48.022)
		{
			newQuestionElement = 22;	
		}		
		if (this.mApplication.mNextLevelID == 48.023)
		{
			newQuestionElement = 23;	
		}		
		if (this.mApplication.mNextLevelID == 48.024)
		{
			newQuestionElement = 24;	
		}		
		if (this.mApplication.mNextLevelID == 48.025)
		{
			newQuestionElement = 25;	
		}		
		if (this.mApplication.mNextLevelID == 48.026)
		{
			newQuestionElement = 26;	
		}		
		if (this.mApplication.mNextLevelID == 48.027)
		{
			newQuestionElement = 27;	
		}		
		if (this.mApplication.mNextLevelID == 48.028)
		{
			newQuestionElement = 28;	
		}		
		if (this.mApplication.mNextLevelID == 48.029)
		{
			newQuestionElement = 29;	
		}		
		if (this.mApplication.mNextLevelID == 48.030)
		{
			newQuestionElement = 30;	
		}		
		if (this.mApplication.mNextLevelID == 48.031)
		{
			newQuestionElement = 31;	
		}		
		if (this.mApplication.mNextLevelID == 48.032)
		{
			newQuestionElement = 32;	
		}		
		if (this.mApplication.mNextLevelID == 48.033)
		{
			newQuestionElement = 33;	
		}		
		if (this.mApplication.mNextLevelID == 48.034)
		{
			newQuestionElement = 34;	
		}		
		if (this.mApplication.mNextLevelID == 48.035)
		{
			newQuestionElement = 35;	
		}		
		if (this.mApplication.mNextLevelID == 48.036)
		{
			newQuestionElement = 36;	
		}		
		if (this.mApplication.mNextLevelID == 48.037)
		{
			newQuestionElement = 37;	
		}		
		if (this.mApplication.mNextLevelID == 48.038)
		{
			newQuestionElement = 38;	
		}		
		if (this.mApplication.mNextLevelID == 48.039)
		{
			newQuestionElement = 39;	
		}		
		if (this.mApplication.mNextLevelID == 48.040)
		{
			newQuestionElement = 40;	
		}		
		if (this.mApplication.mNextLevelID == 48.041)
		{
			newQuestionElement = 41;	
		}		
		if (this.mApplication.mNextLevelID == 48.042)
		{
			newQuestionElement = 42;	
		}		
		if (this.mApplication.mNextLevelID == 48.043)
		{
			newQuestionElement = 43;	
		}		
		if (this.mApplication.mNextLevelID == 48.044)
		{
			newQuestionElement = 44;	
		}		
		if (this.mApplication.mNextLevelID == 48.045)
		{
			newQuestionElement = 45;	
		}		
		if (this.mApplication.mNextLevelID == 48.046)
		{
			newQuestionElement = 46;	
		}		
		if (this.mApplication.mNextLevelID == 48.047)
		{
			newQuestionElement = 47;	
		}		
		if (this.mApplication.mNextLevelID == 48.048)
		{
			newQuestionElement = 48;	
		}		
		if (this.mApplication.mNextLevelID == 48.049)
		{
			newQuestionElement = 49;	
		}		
		if (this.mApplication.mNextLevelID == 48.050)
		{
			newQuestionElement = 50;	
		}		
		if (this.mApplication.mNextLevelID == 48.051)
		{
			newQuestionElement = 51;	
		}		
		if (this.mApplication.mNextLevelID == 48.052)
		{
			newQuestionElement = 52;	
		}		
		if (this.mApplication.mNextLevelID == 48.053)
		{
			newQuestionElement = 53;	
		}		
		if (this.mApplication.mNextLevelID == 48.054)
		{
			newQuestionElement = 54;	
		}		
		if (this.mApplication.mNextLevelID == 48.055)
		{
			newQuestionElement = 55;	
		}		
		if (this.mApplication.mNextLevelID == 48.056)
		{
			newQuestionElement = 56;	
		}		
		if (this.mApplication.mNextLevelID == 48.057)
		{
			newQuestionElement = 57;	
		}		
		if (this.mApplication.mNextLevelID == 48.058)
		{
			newQuestionElement = 58;	
		}		
		if (this.mApplication.mNextLevelID == 48.059)
		{
			newQuestionElement = 59;	
		}		
		if (this.mApplication.mNextLevelID == 48.060)
		{
			newQuestionElement = 60;	
		}		
		if (this.mApplication.mNextLevelID == 48.061)
		{
			newQuestionElement = 61;	
		}		
		if (this.mApplication.mNextLevelID == 48.062)
		{
			newQuestionElement = 62;	
		}		
		if (this.mApplication.mNextLevelID == 48.063)
		{
			newQuestionElement = 63;	
		}		
		if (this.mApplication.mNextLevelID == 48.064)
		{
			newQuestionElement = 64;	
		}		
		if (this.mApplication.mNextLevelID == 48.065)
		{
			newQuestionElement = 65;	
		}		
		if (this.mApplication.mNextLevelID == 48.066)
		{
			newQuestionElement = 66;	
		}		
		if (this.mApplication.mNextLevelID == 48.067)
		{
			newQuestionElement = 67;	
		}		
		if (this.mApplication.mNextLevelID == 48.068)
		{
			newQuestionElement = 68;	
		}		
		if (this.mApplication.mNextLevelID == 48.069)
		{
			newQuestionElement = 69;	
		}		
		if (this.mApplication.mNextLevelID == 48.070)
		{
			newQuestionElement = 70;	
		}		
		if (this.mApplication.mNextLevelID == 48.071)
		{
			newQuestionElement = 71;	
		}		
		if (this.mApplication.mNextLevelID == 48.072)
		{
			newQuestionElement = 72;	
		}		
		if (this.mApplication.mNextLevelID == 48.073)
		{
			newQuestionElement = 73;	
		}		
		if (this.mApplication.mNextLevelID == 48.074)
		{
			newQuestionElement = 74;	
		}		
		if (this.mApplication.mNextLevelID == 48.075)
		{
			newQuestionElement = 75;	
		}		
		if (this.mApplication.mNextLevelID == 48.076)
		{
			newQuestionElement = 76;	
		}		
		if (this.mApplication.mNextLevelID == 48.077)
		{
			newQuestionElement = 77;	
		}		
		if (this.mApplication.mNextLevelID == 48.078)
		{
			newQuestionElement = 78;	
		}		
		if (this.mApplication.mNextLevelID == 48.079)
		{
			newQuestionElement = 79;	
		}		
		if (this.mApplication.mNextLevelID == 48.080)
		{
			newQuestionElement = 80;	
		}		
		if (this.mApplication.mNextLevelID == 48.081)
		{
			newQuestionElement = 81;	
		}		
		if (this.mApplication.mNextLevelID == 48.082)
		{
			newQuestionElement = 82;	
		}		
		if (this.mApplication.mNextLevelID == 48.083)
		{
			newQuestionElement = 83;	
		}		
		if (this.mApplication.mNextLevelID == 48.084)
		{
			newQuestionElement = 84;	
		}		
		if (this.mApplication.mNextLevelID == 48.085)
		{
			newQuestionElement = 85;	
		}		
		if (this.mApplication.mNextLevelID == 48.086)
		{
			newQuestionElement = 86;	
		}		
		if (this.mApplication.mNextLevelID == 48.087)
		{
			newQuestionElement = 87;	
		}		
		if (this.mApplication.mNextLevelID == 48.088)
		{
			newQuestionElement = 88;	
		}		
		if (this.mApplication.mNextLevelID == 48.089)
		{
			newQuestionElement = 89;	
		}		
		if (this.mApplication.mNextLevelID == 48.090)
		{
			newQuestionElement = 90;	
		}		
		if (this.mApplication.mNextLevelID == 48.091)
		{
			newQuestionElement = 91;	
		}		
		if (this.mApplication.mNextLevelID == 48.092)
		{
			newQuestionElement = 92;	
		}		
		if (this.mApplication.mNextLevelID == 48.093)
		{
			newQuestionElement = 93;	
		}		
		if (this.mApplication.mNextLevelID == 48.094)
		{
			newQuestionElement = 94;	
		}		
		if (this.mApplication.mNextLevelID == 48.095)
		{
			newQuestionElement = 95;	
		}		
		if (this.mApplication.mNextLevelID == 48.096)
		{
			newQuestionElement = 96;	
		}		
		if (this.mApplication.mNextLevelID == 48.097)
		{
			newQuestionElement = 97;	
		}		
		if (this.mApplication.mNextLevelID == 48.098)
		{
			newQuestionElement = 98;	
		}		
		if (this.mApplication.mNextLevelID == 48.099)
		{
			newQuestionElement = 99;	
		}		
		if (this.mApplication.mNextLevelID == 48.100)
		{
			newQuestionElement = 100;	
		}		
		if (this.mApplication.mNextLevelID == 48.101)
		{
			newQuestionElement = 101;	
		}		
		if (this.mApplication.mNextLevelID == 48.102)
		{
			newQuestionElement = 102;	
		}		
		if (this.mApplication.mNextLevelID == 48.103)
		{
			newQuestionElement = 103;	
		}		
		if (this.mApplication.mNextLevelID == 48.104)
		{
			newQuestionElement = 104;	
		}		
		if (this.mApplication.mNextLevelID == 48.105)
		{
			newQuestionElement = 105;	
		}		
		if (this.mApplication.mNextLevelID == 48.106)
		{
			newQuestionElement = 106;	
		}		
		if (this.mApplication.mNextLevelID == 48.107)
		{
			newQuestionElement = 107;	
		}		
		if (this.mApplication.mNextLevelID == 48.108)
		{
			newQuestionElement = 108;	
		}		
		if (this.mApplication.mNextLevelID == 48.109)
		{
			newQuestionElement = 109;	
		}		
		if (this.mApplication.mNextLevelID == 48.110)
		{
			newQuestionElement = 110;	
		}		
		if (this.mApplication.mNextLevelID == 48.111)
		{
			newQuestionElement = 111;	
		}		
		if (this.mApplication.mNextLevelID == 48.112)
		{
			newQuestionElement = 112;	
		}		
		if (this.mApplication.mNextLevelID == 48.113)
		{
			newQuestionElement = 113;	
		}		
		if (this.mApplication.mNextLevelID == 48.114)
		{
			newQuestionElement = 114;	
		}		
		if (this.mApplication.mNextLevelID == 48.115)
		{
			newQuestionElement = 115;	
		}		
		if (this.mApplication.mNextLevelID == 48.116)
		{
			newQuestionElement = 116;	
		}		
		if (this.mApplication.mNextLevelID == 48.117)
		{
			newQuestionElement = 117;	
		}		
		if (this.mApplication.mNextLevelID == 48.118)
		{
			newQuestionElement = 118;	
		}		
		if (this.mApplication.mNextLevelID == 48.119)
		{
			newQuestionElement = 119;	
		}		
		if (this.mApplication.mNextLevelID == 48.120)
		{
			newQuestionElement = 120;	
		}		
		if (this.mApplication.mNextLevelID == 48.121)
		{
			newQuestionElement = 121;	
		}		
		if (this.mApplication.mNextLevelID == 48.121)
		{
			newQuestionElement = 121;	
		}		
		if (this.mApplication.mNextLevelID == 48.122)
		{
			newQuestionElement = 122;	
		}		
		if (this.mApplication.mNextLevelID == 48.123)
		{
			newQuestionElement = 123;	
		}		
		if (this.mApplication.mNextLevelID == 48.124)
		{
			newQuestionElement = 124;	
		}		
		if (this.mApplication.mNextLevelID == 48.125)
		{
			newQuestionElement = 125;	
		}		
		if (this.mApplication.mNextLevelID == 48.126)
		{
			newQuestionElement = 126;	
		}		
		if (this.mApplication.mNextLevelID == 48.127)
		{
			newQuestionElement = 127;	
		}		
		if (this.mApplication.mNextLevelID == 48.128)
		{
			newQuestionElement = 128;	
		}		
		if (this.mApplication.mNextLevelID == 48.129)
		{
			newQuestionElement = 129;	
		}		
		if (this.mApplication.mNextLevelID == 48.130)
		{
			newQuestionElement = 130;	
		}		
		if (this.mApplication.mNextLevelID == 48.131)
		{
			newQuestionElement = 131;	
		}		
		if (this.mApplication.mNextLevelID == 48.132)
		{
			newQuestionElement = 132;	
		}		
		if (this.mApplication.mNextLevelID == 48.133)
		{
			newQuestionElement = 133;	
		}		
		if (this.mApplication.mNextLevelID == 48.134)
		{
			newQuestionElement = 134;	
		}		
		if (this.mApplication.mNextLevelID == 48.135)
		{
			newQuestionElement = 135;	
		}		
		if (this.mApplication.mNextLevelID == 48.136)
		{
			newQuestionElement = 136;	
		}		
		if (this.mApplication.mNextLevelID == 48.137)
		{
			newQuestionElement = 137;	
		}		
		if (this.mApplication.mNextLevelID == 48.138)
		{
			newQuestionElement = 138;	
		}		
		
		
		while (totalNew < totalNewGoal)
		{	
			//reset vars and arrays
			totalNew = 0;
			for (d = 0; d < this.mQuiz.mQuestionArray.length; d++)
			{
				this.mQuiz.mQuestionArray[d] = 0;
			} 
			this.mQuiz.mQuestionArray = 0;
			this.mQuiz.mQuestionArray = new Array();

			for (s = 0; s < this.mScoreNeeded; s++)
			{	
				//50% chance of asking newest question
				var randomChance = Math.floor((Math.random()*2));		
				if (randomChance == 0)
				{
					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[newQuestionElement]);
					totalNew++;
				}	
				if (randomChance == 1)
				{
					var randomElement = Math.floor((Math.random()*newQuestionElement));		
					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomElement]);
				}
			}
		}
	}
});
