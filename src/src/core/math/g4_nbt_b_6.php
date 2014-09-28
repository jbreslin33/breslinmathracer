
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.b.6_1',4.1101,'4.nbt.b.6','divide number up to 4 digit by one digit number');
*/

var i_4_nbt_b_6__1 = new Class(
{
Extends: TextItem2,
   initialize: function(sheet)
   {
      this.parent(sheet);
      this.mType = '4.nbt.b.6_1';
       	
		  var varA = 0;
		  var varB = 0;
		  var varC = 0;
		  var varD = 0;

		  var start = 0;
		  var end = 0;
		  var rand = 0;

		
			// pick number of digits (1 - 4)
			rand = 2 + Math.floor((Math.random()*3));

			// get start number based on digits
			start = Math.pow(10, rand-1);

			// get end number based on digits
			end = Math.pow(10, rand);

			// pick number from start to end range
			varA = start + Math.floor(Math.random()*(end-start));	

			// pick one digit number
			varB = 2 + Math.floor(Math.random()*8);

			//varC = Math.floor(varA / varB);	
				
			varC = parseInt(Math.floor(varA / varB));

			varD =  parseInt(varA % varB);
								                       
				this.setQuestion('' + varA + ' / ' +  varB + ' = ');
        this.setAnswer('' + varC,0);
        this.setAnswer('' + varD,1);   

        this.mHeadingAnswerLabel.setText('Quotient');
        this.mHeadingAnswerLabel2.setText('Remainder');        
   }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.b.6_2',4.1102,'4.nbt.b.6','divide number up to 4 digit by one digit number');
*/

var i_4_nbt_b_6__2 = new Class(
{
Extends: ThreeButtonItem,
   initialize: function(sheet)
   {
      this.parent(sheet);
      this.mType = '4.nbt.b.6_2';
       	
		  var varA = 0;
		  var varB = 0;
		  var varC = 0;
		  var varD = 0;

		  var varE = 0;
		  var varF = 0;
		  var varG = 0;

		
			// pick divisor
			varA = 2 + Math.floor((Math.random()*8));

      do {
            // pick another 1-digit number
			      varB = 2 + Math.floor((Math.random()*8));
      }
      while ((varA * varB) < 10);			

			// get partial dividend
			varC = varA * varB * 10;

      // piece together dividend based on these values
			varD = varA + varC;

      varE = varA * varB;

      varF = (Math.floor(varD/100) * 100) + varA;
								                       
			this.setQuestion('Which of the following can be used to find the quotient ' + varD + ' / ' + varA + '?');

      this.setAnswer('(' + varC + ' / ' + varA + ')' + ' + ' + '(' + varA + ' / ' + varA + ')',0); 

      this.mButtonA.setAnswer('(' + varC + ' / ' + varA + ')' + ' + ' + '(' + varA + ' / ' + varA + ')');
      this.mButtonB.setAnswer('(' + varE + ' / ' + varA + ')' + ' + ' + '(' + varA + ' / ' + varA + ')');
      this.mButtonC.setAnswer('(' + varF + ' / ' + varA + ')' + ' + ' + '(' + varA + ' / ' + varA + ')');
      this.shuffle(1);
   }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.b.6_3',4.1103,'4.nbt.b.6','divide number up to 4 digit by one digit number');
*/

var i_4_nbt_b_6__3 = new Class(
{
Extends: ThreeButtonItem,
   initialize: function(sheet)
   {
      this.parent(sheet);
      this.mType = '4.nbt.b.6_3';
       	
		  var varA = 0;
		  var varB = 0;
		  var varC = 0;
		  var varD = 0;
		  var varE = 0;
      var rand = 0;

      var team = ['track','chess','debate','gymnastics'];
		 
			// pick divisor
			varA = 2 + Math.floor((Math.random()*11));

      do {
            // pick another 1-digit number
			      varB = 2 + Math.floor((Math.random()*11));
      }
      while ((varA * varB) < 10);			

			// get partial dividend
			varC = varA * varB;

      varD = varB + 1;

      // pick random wrong answers
      rand = Math.floor((Math.random()*2));
      if (rand == 0)
		    varE = varB - 1;
      else
        varE = varB + 2;

      // pick random team name
      rand = Math.floor((Math.random()*4));
								                       
			this.setQuestion('The ' + team[rand] + ' team won ' + varC + ' medals. Each member of the team won the same number of medals. There are ' + varA + ' members on the team. How many medals did each member win? Which multiplication fact can help find the answer?');

      this.setAnswer('Each team member won ' + varB + ' medals: ' + varB + ' x ' + varA,0); 

      this.mButtonA.setAnswer('Each team member won ' + varB + ' medals: ' + varB + ' x ' + varA);
      this.mButtonB.setAnswer('Each team member won ' + varD + ' medals: ' + varD + ' x ' + varA);
      this.mButtonC.setAnswer('Each team member won ' + varE + ' medals: ' + varE + ' x ' + varA);
     
      this.mButtonA.setSize(150,80);
      this.mButtonB.setSize(150,80);
      this.mButtonC.setSize(150,80);

       this.shuffle(1);this.shuffle(1);
   }
});
