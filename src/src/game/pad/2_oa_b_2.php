var g2_oa_b_2 = new Class(
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

		//subtraction

		//0
		this.mQuiz.mQuestionPoolArray.push(new Question('20 - 20 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('19 - 19 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('18 - 18 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('17 - 17 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('16 - 16 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('15 - 15 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('14 - 14 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('13 - 13 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 - 12 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 - 11 =','0'));
		//149

		//1
		this.mQuiz.mQuestionPoolArray.push(new Question('20 - 19 =','1'));
		this.mQuiz.mQuestionPoolArray.push(new Question('19 - 18 =','1'));
		this.mQuiz.mQuestionPoolArray.push(new Question('18 - 17 =','1'));
		this.mQuiz.mQuestionPoolArray.push(new Question('17 - 16 =','1'));
		this.mQuiz.mQuestionPoolArray.push(new Question('16 - 15 =','1'));
		this.mQuiz.mQuestionPoolArray.push(new Question('15 - 14 =','1'));
		this.mQuiz.mQuestionPoolArray.push(new Question('14 - 13 =','1'));
		this.mQuiz.mQuestionPoolArray.push(new Question('13 - 12 =','1'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 - 11 =','1'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 - 10 =','1'));
		//159
	
		//2	
		this.mQuiz.mQuestionPoolArray.push(new Question('20 - 18 =','2'));
		this.mQuiz.mQuestionPoolArray.push(new Question('19 - 17 =','2'));
		this.mQuiz.mQuestionPoolArray.push(new Question('18 - 16 =','2'));
		this.mQuiz.mQuestionPoolArray.push(new Question('17 - 15 =','2'));
		this.mQuiz.mQuestionPoolArray.push(new Question('16 - 14 =','2'));
		this.mQuiz.mQuestionPoolArray.push(new Question('15 - 13 =','2'));
		this.mQuiz.mQuestionPoolArray.push(new Question('14 - 12 =','2'));
		this.mQuiz.mQuestionPoolArray.push(new Question('13 - 11 =','2'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 - 10 =','2'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 - 9 =','2'));
		//169

		//3
		this.mQuiz.mQuestionPoolArray.push(new Question('20 - 17 =','3'));
		this.mQuiz.mQuestionPoolArray.push(new Question('19 - 16 =','3'));
		this.mQuiz.mQuestionPoolArray.push(new Question('18 - 15 =','3'));
		this.mQuiz.mQuestionPoolArray.push(new Question('17 - 14 =','3'));
		this.mQuiz.mQuestionPoolArray.push(new Question('16 - 13 =','3'));
		this.mQuiz.mQuestionPoolArray.push(new Question('15 - 12 =','3'));
		this.mQuiz.mQuestionPoolArray.push(new Question('14 - 11 =','3'));
		this.mQuiz.mQuestionPoolArray.push(new Question('13 - 10 =','3'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 - 9 =','3'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 - 8 =','3'));
		//179
		
		//4	
		this.mQuiz.mQuestionPoolArray.push(new Question('20 - 16 =','4'));
		this.mQuiz.mQuestionPoolArray.push(new Question('19 - 15 =','4'));
		this.mQuiz.mQuestionPoolArray.push(new Question('18 - 14 =','4'));
		this.mQuiz.mQuestionPoolArray.push(new Question('17 - 13 =','4'));
		this.mQuiz.mQuestionPoolArray.push(new Question('16 - 12 =','4'));
		this.mQuiz.mQuestionPoolArray.push(new Question('15 - 11 =','4'));
		this.mQuiz.mQuestionPoolArray.push(new Question('14 - 10 =','4'));
		this.mQuiz.mQuestionPoolArray.push(new Question('13 - 9 =','4'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 - 8 =','4'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 - 7 =','4'));
		//189
	
		//5	
		this.mQuiz.mQuestionPoolArray.push(new Question('20 - 15 =','5'));
		this.mQuiz.mQuestionPoolArray.push(new Question('19 - 14 =','5'));
		this.mQuiz.mQuestionPoolArray.push(new Question('18 - 13 =','5'));
		this.mQuiz.mQuestionPoolArray.push(new Question('17 - 12 =','5'));
		this.mQuiz.mQuestionPoolArray.push(new Question('16 - 11 =','5'));
		this.mQuiz.mQuestionPoolArray.push(new Question('15 - 10 =','5'));
		this.mQuiz.mQuestionPoolArray.push(new Question('14 - 9 =','5'));
		this.mQuiz.mQuestionPoolArray.push(new Question('13 - 8 =','5'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 - 7 =','5'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 - 6 =','5'));
		//199

		//6	
		this.mQuiz.mQuestionPoolArray.push(new Question('20 - 14 =','6'));
		this.mQuiz.mQuestionPoolArray.push(new Question('19 - 13 =','6'));
		this.mQuiz.mQuestionPoolArray.push(new Question('18 - 12 =','6'));
		this.mQuiz.mQuestionPoolArray.push(new Question('17 - 11 =','6'));
		this.mQuiz.mQuestionPoolArray.push(new Question('16 - 10 =','6'));
		this.mQuiz.mQuestionPoolArray.push(new Question('15 - 9 =','6'));
		this.mQuiz.mQuestionPoolArray.push(new Question('14 - 8 =','6'));
		this.mQuiz.mQuestionPoolArray.push(new Question('13 - 7 =','6'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 - 6 =','6'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 - 5 =','6'));
		//209

		//7	
		this.mQuiz.mQuestionPoolArray.push(new Question('20 - 13 =','7'));
		this.mQuiz.mQuestionPoolArray.push(new Question('19 - 12 =','7'));
		this.mQuiz.mQuestionPoolArray.push(new Question('18 - 11 =','7'));
		this.mQuiz.mQuestionPoolArray.push(new Question('17 - 10 =','7'));
		this.mQuiz.mQuestionPoolArray.push(new Question('16 - 9 =','7'));
		this.mQuiz.mQuestionPoolArray.push(new Question('15 - 8 =','7'));
		this.mQuiz.mQuestionPoolArray.push(new Question('14 - 7 =','7'));
		this.mQuiz.mQuestionPoolArray.push(new Question('13 - 6 =','7'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 - 5 =','7'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 - 4 =','7'));
		//219

		//8	
		this.mQuiz.mQuestionPoolArray.push(new Question('20 - 12 =','8'));
		this.mQuiz.mQuestionPoolArray.push(new Question('19 - 11 =','8'));
		this.mQuiz.mQuestionPoolArray.push(new Question('18 - 10 =','8'));
		this.mQuiz.mQuestionPoolArray.push(new Question('17 - 9 =','8'));
		this.mQuiz.mQuestionPoolArray.push(new Question('16 - 8 =','8'));
		this.mQuiz.mQuestionPoolArray.push(new Question('15 - 7 =','8'));
		this.mQuiz.mQuestionPoolArray.push(new Question('14 - 6 =','8'));
		this.mQuiz.mQuestionPoolArray.push(new Question('13 - 5 =','8'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 - 4 =','8'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 - 3 =','8'));
		//229

		//9	
		this.mQuiz.mQuestionPoolArray.push(new Question('20 - 11 =','9'));
		this.mQuiz.mQuestionPoolArray.push(new Question('19 - 10 =','9'));
		this.mQuiz.mQuestionPoolArray.push(new Question('18 - 9 =','9'));
		this.mQuiz.mQuestionPoolArray.push(new Question('17 - 8 =','9'));
		this.mQuiz.mQuestionPoolArray.push(new Question('16 - 7 =','9'));
		this.mQuiz.mQuestionPoolArray.push(new Question('15 - 6 =','9'));
		this.mQuiz.mQuestionPoolArray.push(new Question('14 - 5 =','9'));
		this.mQuiz.mQuestionPoolArray.push(new Question('13 - 4 =','9'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 - 3 =','9'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 - 2 =','9'));
		//239

		//10	
		this.mQuiz.mQuestionPoolArray.push(new Question('20 - 10 =','10'));
		this.mQuiz.mQuestionPoolArray.push(new Question('19 - 9 =','10'));
		this.mQuiz.mQuestionPoolArray.push(new Question('18 - 8 =','10'));
		this.mQuiz.mQuestionPoolArray.push(new Question('17 - 7 =','10'));
		this.mQuiz.mQuestionPoolArray.push(new Question('16 - 6 =','10'));
		this.mQuiz.mQuestionPoolArray.push(new Question('15 - 5 =','10'));
		this.mQuiz.mQuestionPoolArray.push(new Question('14 - 4 =','10'));
		this.mQuiz.mQuestionPoolArray.push(new Question('13 - 3 =','10'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 - 2 =','10'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 - 1 =','10'));
		//249
	
		//11
		this.mQuiz.mQuestionPoolArray.push(new Question('20 - 9 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('19 - 8 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('18 - 8 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('19 - 8 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('19 - 8 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('19 - 8 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('19 - 8 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('19 - 8 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('19 - 8 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('19 - 8 =','11'));
		//259

		//12
		this.mQuiz.mQuestionPoolArray.push(new Question('20 - 8 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('19 - 7 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('18 - 6 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('17 - 5 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('16 - 4 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('15 - 3 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('14 - 2 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('13 - 1 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 - 0 =','12'));
		//268

		//13
		this.mQuiz.mQuestionPoolArray.push(new Question('20 - 7 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('19 - 6 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('18 - 5 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('17 - 4 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('16 - 3 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('15 - 2 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('14 - 1 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('13 - 0 =','13'));
		//276

		//14
		this.mQuiz.mQuestionPoolArray.push(new Question('20 - 6 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('19 - 5 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('18 - 4 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('17 - 3 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('16 - 2 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('15 - 1 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('14 - 0 =','14'));
		//283

		//15
		this.mQuiz.mQuestionPoolArray.push(new Question('20 - 5 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('19 - 4 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('18 - 3 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('17 - 2 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('16 - 1 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('15 - 0 =','15'));
		//289

		//16
		this.mQuiz.mQuestionPoolArray.push(new Question('20 - 4 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('19 - 3 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('18 - 2 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('17 - 1 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('16 - 0 =','16'));
		//294

		//17
		this.mQuiz.mQuestionPoolArray.push(new Question('20 - 3 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('19 - 2 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('18 - 1 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('17 - 0 =','17'));
		//298

		//18
		this.mQuiz.mQuestionPoolArray.push(new Question('20 - 2 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('19 - 1 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('18 - 0 =','18'));
		//301

		//19
		this.mQuiz.mQuestionPoolArray.push(new Question('20 - 1 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('19 - 0 =','19'));
		//303

		//20
		this.mQuiz.mQuestionPoolArray.push(new Question('20 - 0 =','20'));
		//304


		var totalNewGoal       = parseInt(this.mScoreNeeded / 2);
		var totalNew           = 0;
		var newQuestionElement = 0;
		var elementCounter     = 0;	
		
		for (i = 0; i <= 303; i++)
		{
			if (this.mApplication.mLevel == i)
			{
				newQuestionElement = elementCounter;	
			}			
			elementCounter++;
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
