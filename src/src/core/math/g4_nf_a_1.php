
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.a.1_4',4.1204,'4.nf.a.1','put fraction in lower form by finding missing numerator');
*/

var i_4_nf_a_1__4 = new Class(
{
Extends: TextItem,
   initialize: function(sheet)
   {
      this.parent(sheet);
      this.mType = '4.nf.a.1_4';
       	
		var varA = 0;
		var varB = 0;
		var varC = 0;
		var varD = 0;
		var varN = 0;


		var start = 0;
		var end = 0;
		var rand = 0;

		var question = '';

			// pick random number (1 - 9)
			varA = 1 + Math.floor((Math.random()*9));

			// pick random number from 2-12 (greater than varA)
			varB = varA + (1 + Math.floor((Math.random()*(12-varA))));

			
			// pick random number (1 - 9) as a multiplier
			varN = 2 + Math.floor((Math.random()*9));

			varC = varA * varN;
			varD = varB * varN;
					
		  question = '' + varC + ' / ' +  varD + ' = ' + '' + '?' + ' / ' +  varB;
								                       
			this.setQuestion(question);
      this.setAnswer('' + varA,0);

      this.mQuestionLabel.setSize(200,50);
      this.mQuestionLabel.setPosition(275,95);  
   }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.a.1_3',4.1203,'4.nf.a.1','put fraction in lower form by finding missing denominator');
*/

var i_4_nf_a_1__3 = new Class(
{
Extends: TextItem,
   initialize: function(sheet)
   {
      this.parent(sheet);
      this.mType = '4.nf.a.1_3';
       	
		var varA = 0;
		var varB = 0;
		var varC = 0;
		var varD = 0;
		var varN = 0;


		var start = 0;
		var end = 0;
		var rand = 0;

		var question = '';

			// pick random number (1 - 9)
			varA = 1 + Math.floor((Math.random()*9));

			// pick random number from 2-12 (greater than varA)
			varB = varA + (1 + Math.floor((Math.random()*(12-varA))));

			
			// pick random number (1 - 9) as a multiplier
			varN = 2 + Math.floor((Math.random()*9));

			varC = varA * varN;
			varD = varB * varN;
					
		  question = '' + varC + ' / ' +  varD + ' = ' + '' + varA + ' / ' +  '?';
								                       
			this.setQuestion(question);
      this.setAnswer('' + varB,0);

      this.mQuestionLabel.setSize(200,50);
      this.mQuestionLabel.setPosition(275,95);
   }
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.a.1_2',4.1202,'4.nf.a.1','put fraction in higher form by finding missing numerator');
*/

var i_4_nf_a_1__2 = new Class(
{
Extends: TextItem,
   initialize: function(sheet)
   {
      this.parent(sheet);
      this.mType = '4.nf.a.1_2';
       	
		var varA = 0;
		var varB = 0;
		var varC = 0;
		var varD = 0;
		var varN = 0;


		var start = 0;
		var end = 0;
		var rand = 0;

		var question = '';

			// pick random number (1 - 9)
			varA = 1 + Math.floor((Math.random()*9));

			// pick random number from 2-12 (greater than varA)
			varB = varA + (1 + Math.floor((Math.random()*(12-varA))));

			
			// pick random number (1 - 9) as a multiplier
			varN = 2 + Math.floor((Math.random()*9));

			varC = varA * varN;
			varD = varB * varN;
					
		  question = '' + varA + ' / ' +  varB + ' = ' + '' + '?' + ' / ' +  varD;
								                       
			this.setQuestion(question);
      this.setAnswer('' + varC,0);

      this.mQuestionLabel.setSize(200,50);
      this.mQuestionLabel.setPosition(275,95);  
   }
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.a.1_1',4.1201,'4.nf.a.1','put fraction in higher form by finding missing denominator');
*/

var i_4_nf_a_1__1 = new Class(
{
Extends: TextItem,
   initialize: function(sheet)
   {
      this.parent(sheet);
      this.mType = '4.nf.a.1_1';
       	
		var varA = 0;
		var varB = 0;
		var varC = 0;
		var varD = 0;
		var varN = 0;


		var start = 0;
		var end = 0;
		var rand = 0;

		var question = '';

			// pick random number (1 - 9)
			varA = 1 + Math.floor((Math.random()*9));

			// pick random number from 2-12 (greater than varA)
			varB = varA + (1 + Math.floor((Math.random()*(12-varA))));

			
			// pick random number (1 - 9) as a multiplier
			varN = 2 + Math.floor((Math.random()*9));

			varC = varA * varN;
			varD = varB * varN;

			question = '' + varD + ' / ' +  varB + ' = ' + '' + varC + ' / ' +  '?';

			this.setQuestion(question);
      this.setAnswer('' + varA,0);

      this.mQuestionLabel.setSize(200,50);
      this.mQuestionLabel.setPosition(275,95);
   }
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.a.1_0_10',4.120010,'4.nf.a.1','compare');
*/

var i_4_nf_a_1__0_10 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,600,200,325,145,100,50,580,130);

      	this.mType = '4.nf.a.1_0_10';
	this.mChopWhiteSpace = false;

	var a = Math.floor(Math.random()*9)+1;
	var b = Math.floor(Math.random()*9)+1;

	fractionA = new Fraction(a,b,false);

	var c = parseInt(a * 2);
	var d = parseInt(b * 2);
	
	fractionB = new Fraction(c,d,false);

        this.setQuestion('Compare ' + fractionA.getString() + ' and ' + fractionB.getString() + '. Write equal or not equal.');
        this.setAnswer('equal',0);
}
});
