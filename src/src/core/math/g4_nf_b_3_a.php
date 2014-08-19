
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.3.a_1',4.1401,'4.nf.b.3.a','add 2 fractions with like denominators');
*/

var i_4_nf_b_3_a__1 = new Class(
{
Extends: TextItem,
   initialize: function(sheet)
   {
      this.parent(sheet);
      this.mType = '4.nf.b.3.a_1';
       	
		var varA = 0;
		var varB = 0;
		var varC = 0;
		var varD = 0;
		var varN = 0;


		var start = 0;
		var end = 0;
		var rand = 0;

		var question;
		var answer;


			// get bottom number
			varB = 6 + Math.floor(Math.random()*22);

			// get top number
			max = Math.floor(varB/2);
			varA = 1 + Math.floor((Math.random()*(max-1)));

			varC = 1 + Math.floor((Math.random()*max));
			varD = varB;

			answer = varA + varC;
			
			question = '' + varA + ' / ' +  varB + ' + ' + '' + varC + ' / ' +  varD + '=' + ' ?/ ' + varD;

			this.setQuestion(question);
      this.setAnswer('' + answer,0);

      this.mQuestionLabel.setSize(200,50);
      this.mQuestionLabel.setPosition(275,125);
   }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.3.a_2',4.1402,'4.nf.b.3.a','subtract 2 fractions with like denominators');
*/

var i_4_nf_b_3_a__2 = new Class(
{
Extends: TextItem,
   initialize: function(sheet)
   {
      this.parent(sheet);
      this.mType = '4.nf.b.3.a_2';
       	
		var varA = 0;
		var varB = 0;
		var varC = 0;
		var varD = 0;
		var varN = 0;


		var start = 0;
		var end = 0;
		var rand = 0;

		var question;
		var answer;


			// get bottom number
			varB = 6 + Math.floor(Math.random()*22);

			// get top number
			varA = 2 + Math.floor(Math.random()*(varB-2));
			
			varC = 1 + Math.floor(Math.random()*(varA-1));
			//1 + Math.floor((Math.random()*max));
			varD = varB;

			answer = varA - varC;
			
			question = '' + varA + ' / ' +  varB + ' - ' + '' + varC + ' / ' +  varD + '=' + ' ?/ ' + varD;

			this.setQuestion(question);
      this.setAnswer('' + answer,0);

      this.mQuestionLabel.setSize(200,50);
      this.mQuestionLabel.setPosition(275,125);
   }
});



/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.3.a_3',4.1403,'4.nf.b.3.a','add 3 fractions with like denominators');
*/

var i_4_nf_b_3_a__3 = new Class(
{
Extends: TextItem,
   initialize: function(sheet)
   {
      this.parent(sheet);
      this.mType = '4.nf.b.3.a_3';
       	
		var varA = 0;
		var varB = 0;
		var varC = 0;
		var varD = 0;
    var varE = 0;
		var varN = 0;


		var start = 0;
		var end = 0;
		var rand = 0;

		var question;
		var answer;


			// get bottom number
			varB = 9 + Math.floor(Math.random()*20);

			// get top number
			max = Math.floor(varB/3);
			varA = 1 + Math.floor((Math.random()*(max-1)));

			varC = 1 + Math.floor((Math.random()*max));

      varE = 1 + Math.floor((Math.random()*max));

			varD = varB;

			answer = varA + varC + varE;
			
			question = '' + varA + '/' +  varB + ' + ' + varC + '/' +  varD + ' + ' + varE + '/' +  varD + ' =' + ' ?/' + varD;

			this.setQuestion(question);
      this.setAnswer('' + answer,0);

      this.mQuestionLabel.setSize(220,50);
      this.mQuestionLabel.setPosition(255,145);
   }
});
