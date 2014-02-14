var g3_oa_c_7 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);

                //input pad
                this.mInputPad = new NumberPad(application);
	},

	createQuestions: function()
        {
 		this.parent();

		//0
		this.mQuiz.mQuestionPoolArray.push(new Question('0 X 0 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 X 0 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 X 0 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 X 0 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 X 0 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 X 0 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 X 0 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 X 0 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 X 0 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 X 0 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 X 0 =','0'));
		//11

		this.mQuiz.mQuestionPoolArray.push(new Question('0 X 1 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('0 X 2 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('0 X 3 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('0 X 4 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('0 X 5 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('0 X 6 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('0 X 7 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('0 X 8 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('0 X 9 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('0 X 10 =','0'));
		//21

		//1
		this.mQuiz.mQuestionPoolArray.push(new Question('1 X 1 =','1'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 X 2 =','2'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 X 3 =','3'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 X 4 =','4'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 X 5 =','5'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 X 6 =','6'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 X 7 =','7'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 X 8 =','8'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 X 9 =','9'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 X 10 =','10'));
		//31
		
		this.mQuiz.mQuestionPoolArray.push(new Question('1 X 1 =','1'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 X 1 =','2'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 X 1 =','3'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 X 1 =','4'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 X 1 =','5'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 X 1 =','6'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 X 1 =','7'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 X 1 =','8'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 X 1 =','9'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 X 1 =','10'));
		//41

		//2
		this.mQuiz.mQuestionPoolArray.push(new Question('2 X 2 =','4'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 X 3 =','6'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 X 4 =','8'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 X 5 =','10'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 X 6 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 X 7 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 X 8 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 X 9 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 X 10 =','20'));
		//50
		

		this.mQuiz.mQuestionPoolArray.push(new Question('2 X 2 =','4'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 X 2 =','6'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 X 2 =','8'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 X 2 =','10'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 X 2 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 X 2 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 X 2 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 X 2 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 X 2 =','20'));
		//59

		//3
		this.mQuiz.mQuestionPoolArray.push(new Question('3 X 3 =','9'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 X 4 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 X 5 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 X 6 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 X 7 =','21'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 X 8 =','24'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 X 9 =','27'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 X 10 =','30'));
		//67

		this.mQuiz.mQuestionPoolArray.push(new Question('4 X 3 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 X 3 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 X 3 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 X 3 =','21'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 X 3 =','24'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 X 3 =','27'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 X 3 =','30'));
		//74

		//4
		this.mQuiz.mQuestionPoolArray.push(new Question('4 X 4 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 X 5 =','20'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 X 6 =','24'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 X 7 =','28'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 X 8 =','32'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 X 9 =','36'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 X 10 =','40'));
		//81

		this.mQuiz.mQuestionPoolArray.push(new Question('5 X 4 =','20'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 X 4 =','24'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 X 4 =','28'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 X 4 =','32'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 X 4 =','36'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 X 4 =','40'));
		//87

		//5
		this.mQuiz.mQuestionPoolArray.push(new Question('5 X 5 =','25'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 X 6 =','30'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 X 7 =','35'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 X 8 =','40'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 X 9 =','45'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 X 10 =','50'));
		//93

		this.mQuiz.mQuestionPoolArray.push(new Question('6 X 5 =','30'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 X 5 =','35'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 X 5 =','40'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 X 5 =','45'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 X 5 =','50'));
		//98

		//6
		this.mQuiz.mQuestionPoolArray.push(new Question('6 X 6 =','36'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 X 7 =','42'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 X 8 =','48'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 X 9 =','54'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 X 10 =','60'));
		//103

		this.mQuiz.mQuestionPoolArray.push(new Question('7 X 6 =','42'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 X 6 =','48'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 X 6 =','54'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 X 6 =','60'));
		//107

		//7
		this.mQuiz.mQuestionPoolArray.push(new Question('7 X 7 =','49'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 X 8 =','56'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 X 9 =','63'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 X 10 =','70'));
		//111

		this.mQuiz.mQuestionPoolArray.push(new Question('8 X 7 =','56'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 X 7 =','63'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 X 7 =','70'));
		//114

		//8
		this.mQuiz.mQuestionPoolArray.push(new Question('8 X 8 =','64'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 X 9 =','72'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 X 10 =','80'));
		//117
		
		this.mQuiz.mQuestionPoolArray.push(new Question('9 X 8 =','72'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 X 8 =','80'));
		//119

		//9
		this.mQuiz.mQuestionPoolArray.push(new Question('9 X 9 =','81'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 X 10 =','90'));
		//121

		this.mQuiz.mQuestionPoolArray.push(new Question('10 X 9 =','90'));
		//122

		//10
		this.mQuiz.mQuestionPoolArray.push(new Question('10 X 10 =','100'));
		//123

		//division
	
		//denominator 1	
		this.mQuiz.mQuestionPoolArray.push(new Question('1 / 1 =','1'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 / 1 =','2'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 / 1 =','3'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 / 1 =','4'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 / 1 =','5'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 / 1 =','6'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 / 1 =','7'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 / 1 =','8'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 / 1 =','9'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 / 1 =','10'));
		//133

		//denominator 2	
		this.mQuiz.mQuestionPoolArray.push(new Question('2 / 2 =','1'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 / 2 =','2'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 / 2 =','3'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 / 2 =','4'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 / 2 =','5'));
		//138

		//denominator 3	
		this.mQuiz.mQuestionPoolArray.push(new Question('3 / 3 =','1'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 / 3 =','2'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 / 3 =','3'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 / 3 =','4'));
		this.mQuiz.mQuestionPoolArray.push(new Question('15 / 3 =','5'));
		this.mQuiz.mQuestionPoolArray.push(new Question('18 / 3 =','6'));
		this.mQuiz.mQuestionPoolArray.push(new Question('21 / 3 =','7'));
		this.mQuiz.mQuestionPoolArray.push(new Question('24 / 3 =','8'));
		this.mQuiz.mQuestionPoolArray.push(new Question('27 / 3 =','9'));
		this.mQuiz.mQuestionPoolArray.push(new Question('30 / 3 =','10'));
		//148

		//denominator 4	
		this.mQuiz.mQuestionPoolArray.push(new Question('4 / 4 =','1'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 / 4 =','2'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 / 4 =','3'));
		this.mQuiz.mQuestionPoolArray.push(new Question('16 / 4 =','4'));
		this.mQuiz.mQuestionPoolArray.push(new Question('20 / 4 =','5'));
		this.mQuiz.mQuestionPoolArray.push(new Question('24 / 4 =','6'));
		this.mQuiz.mQuestionPoolArray.push(new Question('28 / 4 =','7'));
		this.mQuiz.mQuestionPoolArray.push(new Question('32 / 4 =','8'));
		this.mQuiz.mQuestionPoolArray.push(new Question('36 / 4 =','9'));
		this.mQuiz.mQuestionPoolArray.push(new Question('36 / 4 =','9'));
		//158

		//denominator 5	
		this.mQuiz.mQuestionPoolArray.push(new Question('5 / 5 =','1'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 / 5 =','2'));
		this.mQuiz.mQuestionPoolArray.push(new Question('15 / 5 =','3'));
		this.mQuiz.mQuestionPoolArray.push(new Question('20 / 5 =','4'));
		this.mQuiz.mQuestionPoolArray.push(new Question('25 / 5 =','5'));
		this.mQuiz.mQuestionPoolArray.push(new Question('30 / 5 =','6'));
		this.mQuiz.mQuestionPoolArray.push(new Question('35 / 5 =','7'));
		this.mQuiz.mQuestionPoolArray.push(new Question('40 / 5 =','8'));
		this.mQuiz.mQuestionPoolArray.push(new Question('45 / 5 =','9'));
		this.mQuiz.mQuestionPoolArray.push(new Question('50 / 5 =','10'));
		//168

		//denominator 6	
		this.mQuiz.mQuestionPoolArray.push(new Question('6 / 6 =','1'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 / 6 =','2'));
		this.mQuiz.mQuestionPoolArray.push(new Question('18 / 6 =','3'));
		this.mQuiz.mQuestionPoolArray.push(new Question('24 / 6 =','4'));
		this.mQuiz.mQuestionPoolArray.push(new Question('30 / 6 =','5'));
		this.mQuiz.mQuestionPoolArray.push(new Question('36 / 6 =','6'));
		this.mQuiz.mQuestionPoolArray.push(new Question('42 / 6 =','7'));
		this.mQuiz.mQuestionPoolArray.push(new Question('48 / 6 =','8'));
		this.mQuiz.mQuestionPoolArray.push(new Question('54 / 6 =','9'));
		this.mQuiz.mQuestionPoolArray.push(new Question('60 / 6 =','10'));
		//178

		//denominator 7	
		this.mQuiz.mQuestionPoolArray.push(new Question('7 / 7 =','1'));
		this.mQuiz.mQuestionPoolArray.push(new Question('14 / 7 =','2'));
		this.mQuiz.mQuestionPoolArray.push(new Question('21 / 7 =','3'));
		this.mQuiz.mQuestionPoolArray.push(new Question('28 / 7 =','4'));
		this.mQuiz.mQuestionPoolArray.push(new Question('35 / 7 =','5'));
		this.mQuiz.mQuestionPoolArray.push(new Question('42 / 7 =','6'));
		this.mQuiz.mQuestionPoolArray.push(new Question('49 / 7 =','7'));
		this.mQuiz.mQuestionPoolArray.push(new Question('56 / 7 =','8'));
		this.mQuiz.mQuestionPoolArray.push(new Question('63 / 7 =','9'));
		this.mQuiz.mQuestionPoolArray.push(new Question('70 / 7 =','10'));

		//denominator 8	
		this.mQuiz.mQuestionPoolArray.push(new Question('8 / 8 =','1'));
		this.mQuiz.mQuestionPoolArray.push(new Question('16 / 8 =','2'));
		this.mQuiz.mQuestionPoolArray.push(new Question('24 / 8 =','3'));
		this.mQuiz.mQuestionPoolArray.push(new Question('32 / 8 =','4'));
		this.mQuiz.mQuestionPoolArray.push(new Question('40 / 8 =','5'));
		this.mQuiz.mQuestionPoolArray.push(new Question('48 / 8 =','6'));
		this.mQuiz.mQuestionPoolArray.push(new Question('56 / 8 =','7'));
		this.mQuiz.mQuestionPoolArray.push(new Question('64 / 8 =','8'));
		this.mQuiz.mQuestionPoolArray.push(new Question('72 / 8 =','9'));
		this.mQuiz.mQuestionPoolArray.push(new Question('80 / 8 =','10'));

		//denominator 9	
		this.mQuiz.mQuestionPoolArray.push(new Question('9 / 9 =','1'));
		this.mQuiz.mQuestionPoolArray.push(new Question('18 / 9 =','2'));
		this.mQuiz.mQuestionPoolArray.push(new Question('27 / 9 =','3'));
		this.mQuiz.mQuestionPoolArray.push(new Question('36 / 9 =','4'));
		this.mQuiz.mQuestionPoolArray.push(new Question('45 / 9 =','5'));
		this.mQuiz.mQuestionPoolArray.push(new Question('54 / 9 =','6'));
		this.mQuiz.mQuestionPoolArray.push(new Question('63 / 9 =','7'));
		this.mQuiz.mQuestionPoolArray.push(new Question('72 / 9 =','8'));
		this.mQuiz.mQuestionPoolArray.push(new Question('81 / 9 =','9'));
		this.mQuiz.mQuestionPoolArray.push(new Question('90 / 9 =','10'));
		
		//denominator 10	
		this.mQuiz.mQuestionPoolArray.push(new Question('10 / 10 =','1'));
		this.mQuiz.mQuestionPoolArray.push(new Question('20 / 10 =','2'));
		this.mQuiz.mQuestionPoolArray.push(new Question('30 / 10 =','3'));
		this.mQuiz.mQuestionPoolArray.push(new Question('40 / 10 =','4'));
		this.mQuiz.mQuestionPoolArray.push(new Question('50 / 10 =','5'));
		this.mQuiz.mQuestionPoolArray.push(new Question('60 / 10 =','6'));
		this.mQuiz.mQuestionPoolArray.push(new Question('70 / 10 =','7'));
		this.mQuiz.mQuestionPoolArray.push(new Question('80 / 10 =','8'));
		this.mQuiz.mQuestionPoolArray.push(new Question('90 / 10 =','9'));
		this.mQuiz.mQuestionPoolArray.push(new Question('100 / 10 =','10'));

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
