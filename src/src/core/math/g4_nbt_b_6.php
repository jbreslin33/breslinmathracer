/* TYPE_DESCRIPTION: i_4_nbt_b_6_t_1: divide number up to 4 digit by one digit number  */

var i_4_nbt_b_6__1 = new Class(
{
Extends: TextItem,
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
					
			//question = new Question('' + varA + ' / ' +  varB + ' = ', '' + varC);
      //this.mQuiz.mQuestionArray.push(question);
			//question.mAnswerArray.push(varD);
			//question.mHeadingArray.push('Quotient');
			//question.mHeadingArray.push('Remainder');
								                       
				this.setQuestion('' + varA + ' / ' +  varB + ' = ');
        this.setAnswer(varC,0);             
   }
});


//add
