/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.3.b_1',4.1501,'4.nf.b.3.b','find missing numerator');
*/

var i_4_nf_b_3_b__1 = new Class(
{
Extends: TextItem,
   initialize: function(sheet)
   {
      this.parent(sheet);
      this.mType = '4.nf.b.3_b_1';
       	
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
			varB = 6 + Math.floor(Math.random()*22);

			// get top number
			max = Math.floor(varB/3);
			varA = 1 + Math.floor((Math.random()*max));

			varC = 1 + Math.floor((Math.random()*max));

			varE = 1 + Math.floor((Math.random()*max));

			varD = varB;

			answer = varA + varC + varE;
				
			question = '' + varA + '/' +  varB + ' + ' + '' + varC + '/' +  varD + ' + ' + '' + '?' + '/' +  varD + ' = ' + answer + '/' + varD;
			

			this.setQuestion(question);
      this.setAnswer('' + varE,0);

      this.mQuestionLabel.setSize(220,50);
      this.mQuestionLabel.setPosition(255,145);
   }
});
