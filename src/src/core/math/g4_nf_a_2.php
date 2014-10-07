
/*
insert into iddddtem_types(id,progression,core_standards_id,description) values ('4.nf.a.2_1',4.1301,'4.nf.a.2','Compare two fractions with different numerators and denominators');
*/

var i_4_nf_a_2__1 = new Class(
{
Extends: ThreeButtonItem,
   initialize: function(sheet)
   {
      this.parent(sheet);
      this.mType = '4.nf.a.2_1';
       	
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
		var diff = 0;
		
	  if(rand == 0)
		{

			// pick random number (1 - 9)
			varA = 1 + Math.floor((Math.random()*9));

			// pick random number from 2-12 (greater than varA)
			varB = varA + (1 + Math.floor((Math.random()*(12-varA))));

			varC = 1 + Math.floor((Math.random()*9));
			varD = varC + (1 + Math.floor((Math.random()*(12-varA))));

			if(varA == varC && varB == varD)
			   varA = varA + 1;

		 }
		 else
		 {

			// pick random number (1 - 5)
			varA = 1 + Math.floor((Math.random()*5));

			// pick random number from 2-10 (greater than varA)
			varB = varA + (1 + Math.floor((Math.random()*(10-varA))));

			// pick random number (2 - 4) as a multiplier
			varN = 2 + Math.floor((Math.random()*3));

			varC = varA * varN;
			varD = varB * varN;

		 }

			diff = varA/varB - varC/varD;

			if(diff > 0)
			   answer = 'greater than';
			else if(diff < 0)
			   answer = 'less than';
			else
			   answer = 'equal to';
			
			question = '' + varA + ' / ' +  varB + ' is ? ' + '' + varC + ' / ' +  varD;

			this.setQuestion(question);
      this.setAnswer('' + answer,0);

      this.mButtonA.setAnswer('greater than');
      this.mButtonB.setAnswer('less than');
      this.mButtonC.setAnswer('equal to');
      //this.shuffle(1);

      //this.mQuestionLabel.setSize(200,50);
      //this.mQuestionLabel.setPosition(275,95);
   }
});



//add
