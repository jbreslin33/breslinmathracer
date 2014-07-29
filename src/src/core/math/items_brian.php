/* TYPE_DESCRIPTION: i_4_md_a_3__1: multiply numbers up to 2 digits */

var i_4_md_a_3__1 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
            this.parent(sheet);
				this.mUserAnswerLabel.setVisibility(true);
				
            this.mType = '4.md.a.3_1';          	

				var varA = 0;
				var varB = 0;
				var varC = 0;

			// pick length
			varA = 1 + Math.floor(Math.random()*12);		

			// pick width
			varB = 1 + Math.floor(Math.random()*12);	
				
			varC = parseInt(varA * varB);
								                       
				this.setQuestion('What is the area of a rectangle that has a length of ' + varA + ' and a width of ' + varB + '?');
            this.setAnswer(varC,0);             
        }
});

















/* TYPE_DESCRIPTION: i_4_nbt_b_5_t_1: multiply numbers up to 2 digits */

var i_4_nbt_b_5__1 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
            this.parent(sheet);
            this.mType = '4.nbt.b.5_1';          	

				var varA = 0;
				var varB = 0;
				var varC = 0;

				var start = 0;
				var end = 0;
				var rand = 0;
		
			// get start number based on 2 digits
			start = 10;

			// get end number based on 2 digits
			end = 100;

			// pick 1st number from start to end range
			varA = start + Math.floor(Math.random()*(end-start));		

			// pick 2nd number from start to end range
			varB = start + Math.floor(Math.random()*(end-start));		
				
			varC = parseInt(varA * varB);
								                       
				this.setQuestion('' + varA + ' * ' +  varB + ' = ');
            this.setAnswer(varC,0);             
        }
});

/* TYPE_DESCRIPTION: i_4_nbt_b_5_t_2: divide numbers up to 2 digits */

var i_4_nbt_b_5__2 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
            this.parent(sheet);
            this.mType = '4.nbt.b.5_2';          	

				var varA = 0;
				var varB = 0;
				var varC = 0;

				var start = 0;
				var end = 0;
				var rand = 0;
		
			// pick number of digits (1 - 4)
			rand = 1 + Math.floor((Math.random()*4));

			// get start number based on digits
			start = Math.pow(10, rand-1);

			// get end number based on digits
			end = Math.pow(10, rand);

			// pick number from start to end range
			varA = start + Math.floor(Math.random()*(end-start));	

			// pick one digit number
			varB = Math.floor(Math.random()*10);	
				
			varC = parseInt(varA * varB);
											                       
				this.setQuestion('' + varA + ' * ' +  varB + ' = ');
            this.setAnswer(varC,0);             
        }
});






/* TYPE_DESCRIPTION: i_4_nbt_b_4_t_1: adding numbers up to 6 digits */

var i_4_nbt_b_4__1 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
            this.parent(sheet);
            this.mType = '4.nbt.b.4_1';          	

				var varA = 0;
				var varB = 0;
				var varC = 0;

				var start = 0;
				var end = 0;
				var rand = 0;
	
				// pick number of digits (2 - 6)
				rand = 2 + Math.floor((Math.random()*5));

				// get end number based on digits
				end = Math.pow(10, rand);
				// get start number based on digits
				start = Math.pow(10, rand-1);

				// pick number from start to end range
				varA = start + Math.floor(Math.random()*(end-start));

				rand = 2 + Math.floor((Math.random()*5));

				end = Math.pow(10, rand);
				start = Math.pow(10, rand-1);
		
				varB = start + Math.floor(Math.random()*(end-start));
		
				varC = parseInt(varA + varB);
			                       
				this.setQuestion('' + varA + ' + ' +  varB + ' = ');
            this.setAnswer(varC,0);             
        }
});


/* TYPE_DESCRIPTION: i_4_nbt_b_4_t_2: subtracting numbers up to 6 digits */

var i_4_nbt_b_4__2 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
            this.parent(sheet);
            this.mType = '4.nbt.b.4_2';          	

				var varA = 0;
				var varB = 0;
				var varC = 0;

				var start = 0;
				var end = 0;
				var rand = 0;
	
				
				rand = 2 + Math.floor((Math.random()*5));

				start = Math.pow(10, rand-1);

				end = Math.pow(10, rand);
				
				varA = start + Math.floor(Math.random()*(end-start));	

				rand = 2 + Math.floor((Math.random()*5));

				start = Math.pow(10, rand-1);
				end = Math.pow(10, rand);
	
				varB = start + Math.floor(Math.random()*(end-start));

				varC = parseInt(varA - varB);

			                       
				this.setQuestion('' + varA + ' - ' +  varB + ' = ');
            this.setAnswer(varC,0);             
        }
});







/* TYPE_DESCRIPTION: i_4_nbt_a_1_t_1: This type will ask which digit is in the ones column. */

var i_4_nbt_a_1__1 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '4.nbt.a.1_1';          

		var place = 0;

		var number = '';

		var ones = 0;
		var tens = 0;
		var hundreds = 0;
		var thousands = 0;

		var answer = 0;
		var rand = 0;

		rand = 1 + Math.floor((Math.random()*9));
		ones = rand;
		rand = 1 + Math.floor((Math.random()*9));
		tens = rand;
		rand = 1 + Math.floor((Math.random()*9));
		hundreds = rand;
		rand = 1 + Math.floor((Math.random()*9));
		thousands = rand;

		rand = 1 + Math.floor((Math.random()*4));
				
		place = 'ones';
		answer = ones;

		number = '' + thousands + ',' + hundreds + tens + ones;
                  
		this.setQuestion('In the number ' + number + ' which digit is in the ' + place + ' column?');
                this.setAnswer(answer,0);

                //this.mButtonA.setAnswer(a);
                //this.mButtonB.setAnswer(b);
                //this.mButtonC.setAnswer(c);
                //this.shuffle(10);
        }
});


/* TYPE_DESCRIPTION: i_4_nbt_a_1_t_2: This type will ask which digit is in the tens column. */

var i_4_nbt_a_1__2 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '4.nbt.a.1_2';

		var place = 0;

		var number = '';

		var ones = 0;
		var tens = 0;
		var hundreds = 0;
		var thousands = 0;

		var answer = 0;
		var rand = 0;

		rand = 1 + Math.floor((Math.random()*9));
		ones = rand;
		rand = 1 + Math.floor((Math.random()*9));
		tens = rand;
		rand = 1 + Math.floor((Math.random()*9));
		hundreds = rand;
		rand = 1 + Math.floor((Math.random()*9));
		thousands = rand;

		rand = 1 + Math.floor((Math.random()*4));
				
		place = 'tens';
		answer = tens;

		number = '' + thousands + ',' + hundreds + tens + ones;
                  
		this.setQuestion('In the number ' + number + ' which digit is in the ' + place + ' column?');
                this.setAnswer(answer,0);

        }
});


/* TYPE_DESCRIPTION: i_4_nbt_a_1_t_3: This type will ask which digit is in the hundreds column. */

var i_4_nbt_a_1__3 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '4.nbt.a.1_3';

		var place = 0;

		var number = '';

		var ones = 0;
		var tens = 0;
		var hundreds = 0;
		var thousands = 0;

		var answer = 0;
		var rand = 0;

		rand = 1 + Math.floor((Math.random()*9));
		ones = rand;
		rand = 1 + Math.floor((Math.random()*9));
		tens = rand;
		rand = 1 + Math.floor((Math.random()*9));
		hundreds = rand;
		rand = 1 + Math.floor((Math.random()*9));
		thousands = rand;

		rand = 1 + Math.floor((Math.random()*4));
				
		place = 'hundreds';
		answer = hundreds;

		number = '' + thousands + ',' + hundreds + tens + ones;
                  
		this.setQuestion('In the number ' + number + ' which digit is in the ' + place + ' column?');
                this.setAnswer(answer,0);

        }
});


/* TYPE_DESCRIPTION: i_4_nbt_a_1_t_4: This type will ask which digit is in the thousands column. */

var i_4_nbt_a_1__4 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '4.nbt.a.1_4';

		var place = 0;

		var number = '';

		var ones = 0;
		var tens = 0;
		var hundreds = 0;
		var thousands = 0;

		var answer = 0;
		var rand = 0;

		rand = 1 + Math.floor((Math.random()*9));
		ones = rand;
		rand = 1 + Math.floor((Math.random()*9));
		tens = rand;
		rand = 1 + Math.floor((Math.random()*9));
		hundreds = rand;
		rand = 1 + Math.floor((Math.random()*9));
		thousands = rand;

		rand = 1 + Math.floor((Math.random()*4));
				
		place = 'thousands';
		answer = thousands;

		number = '' + thousands + ',' + hundreds + tens + ones;
                  
		this.setQuestion('In the number ' + number + ' which digit is in the ' + place + ' column?');
                this.setAnswer(answer,0);

        }
});


/* TYPE_DESCRIPTION: i_4_nbt_a_1_t_5: This type will give thousands and ask for hundreds. */

var i_4_nbt_a_1__5 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '4.nbt.a.1_5';

		var varA = 0;
		var varB = 0;
		var varC = 0;

		var answer = 0;

		varA = 1 + Math.floor(Math.random()*9);
		varB = 'thousands';
		varC = 'hundreds';

		answer = varA * 10;
                  
		this.setQuestion('' + varA + ' ' + varB + ' = ? ' + varC);
                this.setAnswer(answer,0);

        }
});


/* TYPE_DESCRIPTION: i_4_nbt_a_1_t_6: This type will give thousands and ask for tens. */

var i_4_nbt_a_1__6 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '4.nbt.a.1_6';

		var varA = 0;
		var varB = 0;
		var varC = 0;

		var answer = 0;

		varA = 1 + Math.floor(Math.random()*9);
		varB = 'thousands';
		varC = 'tens';

		answer = varA * 100;
                  
		this.setQuestion('' + varA + ' ' + varB + ' = ? ' + varC);
                this.setAnswer(answer,0);

        }
});


/* TYPE_DESCRIPTION: i_4_nbt_a_1_t_7: This type will give thousands and ask for ones. */

var i_4_nbt_a_1__7 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '4.nbt.a.1_7';

		var varA = 0;
		var varB = 0;
		var varC = 0;

		var answer = 0;

		varA = 1 + Math.floor(Math.random()*9);
		varB = 'thousands';
		varC = 'ones';

		answer = varA * 1000;
                  
		this.setQuestion('' + varA + ' ' + varB + ' = ? ' + varC);
                this.setAnswer(answer,0);

        }
});

/* TYPE_DESCRIPTION: i_4_nbt_a_1_t_8: This type will give hundreds and ask for tens. */

var i_4_nbt_a_1__8 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '4.nbt.a.1_8';

		var varA = 0;
		var varB = 0;
		var varC = 0;

		var answer = 0;

		varA = 1 + Math.floor(Math.random()*9);
		varB = 'hundreds';
		varC = 'tens';

		answer = varA * 10;
                  
		this.setQuestion('' + varA + ' ' + varB + ' = ? ' + varC);
                this.setAnswer(answer,0);

        }
});

/* TYPE_DESCRIPTION: i_4_nbt_a_1_t_9: This type will give hundreds and ask for ones. */

var i_4_nbt_a_1__9 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '4.nbt.a.1_9';

		var varA = 0;
		var varB = 0;
		var varC = 0;

		var answer = 0;

		varA = 1 + Math.floor(Math.random()*9);
		varB = 'hundreds';
		varC = 'ones';

		answer = varA * 100;
                  
		this.setQuestion('' + varA + ' ' + varB + ' = ? ' + varC);
                this.setAnswer(answer,0);

        }
});

/* TYPE_DESCRIPTION: i_4_nbt_a_1_t_10: This type will give tens and ask for ones. */

var i_4_nbt_a_1__10 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '4.nbt.a.1_10';

		var varA = 0;
		var varB = 0;
		var varC = 0;

		var answer = 0;

		varA = 1 + Math.floor(Math.random()*9);
		varB = 'tens';
		varC = 'ones';

		answer = varA * 10;
                  
		this.setQuestion('' + varA + ' ' + varB + ' = ? ' + varC);
                this.setAnswer(answer,0);

        }
});



















/* TYPE_DESCRIPTION: 

*/

var i_4_nbt_a_2__1 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '4.nbt.a.2_1';

		var thousands;
		var hundreds;
		var tens;
		var ones;
		var digits;
		var digits1;
		var digits2;
		var words;
		var temp;
		var dash1 = '-';
		var dash2 = '-';

		var hund = 'hundred';
		var thous = 'thousand';
		var hundthous = 'hundred';


		var numbers3 = ['','one','two','three','four','five','six','seven','eight','nine', 'ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'];
		var numbers2 = ['', 'one', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy','eighty','ninety'];
		var numbers1 = ['','one','two','three','four','five','six','seven','eight','nine'];


		// create digits
		hundredthousands = 1 + Math.floor((Math.random()*9));
		rand = 1 + Math.floor((Math.random()*3));
		if (rand == 1)
		{
			hundredthousands = 0;
			hundthous = ' ';
		}
		tenthousands = 2 + Math.floor((Math.random()*8));
		rand = 1 + Math.floor((Math.random()*3));
		if (rand == 1)
		{
			tenthousands = 0;
			dash1 = '';
		}
		thousands = 1 + Math.floor((Math.random()*9));
		
		hundreds = 1 + Math.floor((Math.random()*9));
		rand = 1 + Math.floor((Math.random()*3));
		if (rand == 1)
		{
			hundreds = 0;
			hund = ' ';
		}
		tens = 2 + Math.floor((Math.random()*8));
		rand = 1 + Math.floor((Math.random()*3));
		if (rand == 1)
		{
			tens = 0;
			dash2 = '';
		}
		ones = 1 + Math.floor((Math.random()*9));
		rand = 1 + Math.floor((Math.random()*3));
		if (rand == 1)
		{
			ones = 0;
			dash2 = '';
		}

		// create 4-digit number and 2 wrong answers
		digits = '' + thousands + ',' + hundreds + tens + ones;
		digits1 = '' + thousands + '0,' + hundreds + tens + ones;
		digits2 = '' + thousands + '00,' + hundreds + tens + ones;
		// put digits in word form
		words = '' + numbers1[thousands] + ' ' + thous + ' ' + numbers1[hundreds] + ' ' + hund + ' ' +  numbers2[tens] + dash2 + numbers1[ones];

		rand = 1 + Math.floor((Math.random()*3));

		// create 5-digit number and 2 wrong answers
		if(rand == 1)
		{
			digits = '' + tenthousands + thousands + ',' + hundreds + tens + ones;
			digits1 = '' + tenthousands + ',' + hundreds + tens + ones;
			digits2 = '' + tenthousands + thousands + '0,' + hundreds + tens + ones;
			// put digits in word form			
			words = '' + numbers2[tenthousands] + dash1 + words;
		}
		// create 6-digit number and 2 wrong answers
		if(rand == 2)
		{
			digits = '' + hundredthousands + tenthousands + thousands + ',' + hundreds + tens + ones;
			digits1 = '' + hundredthousands + thousands + ',' + hundreds + tens + ones;
			digits2 = '' + hundredthousands + tenthousands + ',' + hundreds + tens + ones;
			// put digits in word form
			words = '' + numbers1[hundredthousands] + ' ' + hundthous + ' ' + numbers2[tenthousands] + dash1 + words;
		}

		
                // How do you write this number using digits?
		// How do you write this number using words?  
		this.setQuestion('What is ' + words + ' in number form?');
                this.setAnswer(digits,0);

                this.mButtonA.setAnswer(digits);
                this.mButtonB.setAnswer(digits1);
                this.mButtonC.setAnswer(digits2);
                this.shuffle(1);
        }
});


/* TYPE_DESCRIPTION: i_4_nbt_a_2_t_2: This type will give the number and ask for name. */

var i_4_nbt_a_2__2 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '4.nbt.a.2_2';

		var thousands;
		var hundreds;
		var hundreds2;
		var tens;
		var ones;
		var digits;
		var digits1;
		var digits2;
		var words;
		var words1 = '';
		var words2 = '';
		var temp;
		var dash1 = '-';
		var dash2 = '-';

		var hund = 'hundred';
		var thous = 'thousand';
		var hundthous = 'hundred';


		var numbers3 = ['','one','two','three','four','five','six','seven','eight','nine', 'ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'];
		var numbers2 = ['', 'one', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy','eighty','ninety'];
		var numbers1 = ['','one','two','three','four','five','six','seven','eight','nine'];


		// create digits
		hundredthousands = 1 + Math.floor((Math.random()*9));
		rand = 1 + Math.floor((Math.random()*3));
		if (rand == 1)
		{
			hundredthousands = 0;
			hundthous = ' ';
		}
		tenthousands = 2 + Math.floor((Math.random()*8));
		rand = 1 + Math.floor((Math.random()*3));
		if (rand == 1)
		{
			tenthousands = 0;
			dash1 = '';
		}
		thousands = 1 + Math.floor((Math.random()*9));
		rand = 1 + Math.floor((Math.random()*3));
		if (rand == 1)
		{
			thousands = 0;
			dash1 = '';
		}
		hundreds = 1 + Math.floor((Math.random()*8));
		rand = 1 + Math.floor((Math.random()*3));
		if (rand == 1)
		{
			hundreds = 0;
			hund = ' ';
		}
		tens = 2 + Math.floor((Math.random()*8));
		rand = 1 + Math.floor((Math.random()*3));
		if (rand == 1)
		{
			tens = 0;
			dash2 = '';
		}
		ones = 1 + Math.floor((Math.random()*8));
		rand = 1 + Math.floor((Math.random()*3));
		if (rand == 1)
		{
			ones = 0;
			dash2 = '';
		}

		// create 4-digit number and 2 wrong answers
		if(thousands == 0)
				thousands = 1 + Math.floor((Math.random()*9));
		digits = '' + thousands + ',' + hundreds + tens + ones;
		digits1 = '' + thousands + '0,' + hundreds + tens + ones;
		digits2 = '' + thousands + '00,' + hundreds + tens + ones;
		// put digits in word form
		words = '' + numbers1[thousands] + ' ' + thous + ' ' + numbers1[hundreds] + ' ' + hund + ' ' +  numbers2[tens] + dash2 + numbers1[ones];

		if (hundreds == 0)
		{
			hundreds2 = 1 + Math.floor((Math.random()*9));
		}
		else
		{
			hundreds2 = 1 + hundreds;
		}

		words1 = '' + numbers1[thousands] + ' ' + thous + ' ' + numbers1[hundreds2] + ' ' + 'hundred' + ' ' +  numbers2[tens] + dash2 + numbers1[ones];

		if (ones == 0)
		{
			ones2 = 1 + Math.floor((Math.random()*9));
			if (tens > 0)
				dash2 = '-';
		}
		else
		{
			ones2 = 1 + ones;
		}

		words2 = '' + numbers1[thousands] + ' ' + thous + ' ' + numbers1[hundreds] + ' ' + hund + ' ' +  numbers2[tens] + dash2 + numbers1[ones2];

		rand = 0 + Math.floor((Math.random()*1));

		// create 5-digit number and 2 wrong answers
		if(rand == 1)
		{
			if(tenthousands == 0)
				tenthousands = 2 + Math.floor((Math.random()*8));
			digits = '' + tenthousands + thousands + ',' + hundreds + tens + ones;
			
			// put digits in word form			
			words = '' + numbers2[tenthousands] + dash1 + words;
			words1 = '' + numbers2[tenthousands] + dash1 + words1;
			words2 = '' + numbers2[tenthousands] + dash1 + words2;
		}
		// create 6-digit number and 2 wrong answers
		if(rand == 2)
		{
			if(hundredthousands == 0)
			{
				hundredthousands = 1 + Math.floor((Math.random()*9));
				hundthous = 'hundred';
			}
			digits = '' + hundredthousands + tenthousands + thousands + ',' + hundreds + tens + ones;
		
			// put digits in word form
			words = '' + numbers1[hundredthousands] + ' ' + hundthous + ' ' + numbers2[tenthousands] + dash1 + words;
			words1 = '' + numbers1[hundredthousands] + ' ' + hundthous + ' ' + numbers2[tenthousands] + dash1 + words1;
			words2 = '' + numbers1[hundredthousands] + ' ' + hundthous + ' ' + numbers2[tenthousands] + dash1 + words2;
		}

		
                // How do you write this number using digits?
		// How do you write this number using words?  
		this.setQuestion('What is ' + digits + ' in word form?');
                this.setAnswer(words,0);

                this.mButtonA.setAnswer(words);
                this.mButtonB.setAnswer(words1);
                this.mButtonC.setAnswer(words2);
                this.shuffle(1);

		this.mButtonA.setSize(165,100);
                this.mButtonB.setSize(165,100);
                this.mButtonC.setSize(165,100);

        }
});


/* TYPE_DESCRIPTION: i_4_nbt_a_2_t_3: This type will give number and ask for expanded form. */

var i_4_nbt_a_2__3 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '4.nbt.a.2_3';

		var number = '';

		var ones = 0;
		var tens = 0;
		var hundreds = 0;
		var thousands = 0;
		var tenthousands = 0;
		var hundredthousands = 0;
		var tenthousands1 = 0;
		var hundredthousands1 = 0;

		var expanded = []; 
		
		var rand = 0;
		var rand2 = 0;

		// pick randon digits
		rand = 1 + Math.floor((Math.random()*9));
		ones = rand;
		rand = 1 + Math.floor((Math.random()*9));
		tens = rand;
		rand = 1 + Math.floor((Math.random()*9));
		hundreds = rand;
		rand = 1 + Math.floor((Math.random()*9));
		thousands = rand;
		rand = 1 + Math.floor((Math.random()*9));
		tenthousands = rand;
		rand = 1 + Math.floor((Math.random()*9));
		hundredthousands = rand;

		// put numbers in expanded form
		ones1 = '' + ones;
		tens1 = '' + tens + '0';
		hundreds1 = '' + hundreds + '00';
		thousands1 = '' + thousands + ',000';
		tenthousands1 = '' + tenthousands + '0,000';
		hundredthousands1 = '' + hundredthousands + '00,000';

	    rand = 1 + Math.floor((Math.random()*2));
	
	    if (rand == 1)
	    {
		number = '' + thousands + ',' + hundreds + tens + ones;	
		
		// answer
		expanded[0] = '' + thousands1 + '+' + hundreds1 + '+' + tens1 + '+' + ones1;

		// create wrong answers to choose at random
		expanded[1] = '' + thousands + '0,000 +' + hundreds1 + '+' + tens1 + '+' + ones1;
		expanded[2] = '' + thousands1 + '+' + hundreds1 + '0 +' + tens1 + '+' + ones1;
		expanded[3] = '' + thousands1 + '+' + hundreds1 + '+' + tens1 + '0 +' + ones1;

		expanded[4] = '' + thousands + ',' + hundreds + '00 +' + tens1 + '+' + ones1;
		expanded[5] = '' + thousands1 + '+' + hundreds + tens + '0 +' + ones1;
		expanded[6] = '' + thousands1 + '+' + hundreds1 + '+' + tens + ones;
            }
	    if (rand == 2)
	    {
		number = '' + tenthousands + thousands + ',' + hundreds + tens + ones;	
		
		// answer
		expanded[0] = '' + tenthousands1 + '+' + thousands1 + '+' + hundreds1 + '+' + tens1 + '+' + ones1;

		// create wrong answers to choose at random
		expanded[1] = '' + tenthousands + '00,000 +' + thousands1 + '+' + hundreds1 + '+' + tens1 + '+' + ones1;
		expanded[2] = '' + tenthousands1 + '+' + thousands1 + '+' + hundreds + ',000 +' + tens1 + '+' + ones1;
		expanded[3] = '' + tenthousands1 + '+' + thousands1 + '+' + hundreds1 + '+' + tens1 + '0 +' + ones1;

		expanded[4] = '' + tenthousands + thousands + ',000 +' + hundreds1 + '+' + tens1 + '+' + ones1;
		expanded[5] = '' + tenthousands1 + '+' + thousands1 + '+' + hundreds + tens + '0 +' + ones1;
		expanded[6] = '' + tenthousands1 + '+' + thousands1 + '+' + hundreds1 + '+' + tens + ones;
            }
	   
		this.setQuestion('What is ' + number + ' in expanded form?');
                this.setAnswer(expanded[0],0);

		this.mButtonA.setAnswer(expanded[0]);
		rand = 1 + Math.floor((Math.random()*6));
                this.mButtonB.setAnswer(expanded[rand]);

		do {
    			rand2 = 1 + Math.floor((Math.random()*6));
		}
		while (rand == rand2);		

                this.mButtonC.setAnswer(expanded[rand2]);

		this.mButtonA.setSize(175,100);
                this.mButtonB.setSize(175,100);
                this.mButtonC.setSize(175,100);

                this.shuffle(1);

        }
});


/* TYPE_DESCRIPTION: i_4_nbt_a_2_t_4: This type will give expanded form and ask for number. */

var i_4_nbt_a_2__4 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '4.nbt.a.2_4';

		var number = [];

		var ones = 0;
		var tens = 0;
		var hundreds = 0;
		var thousands = 0;

		var expanded = 0; 
		
		var rand = 0;
		var rand2 = 0;

		// pick randon digits
		rand = 1 + Math.floor((Math.random()*9));
		ones = rand;
		rand = 1 + Math.floor((Math.random()*9));
		tens = rand;
		rand = 1 + Math.floor((Math.random()*9));
		hundreds = rand;
		rand = 1 + Math.floor((Math.random()*9));
		thousands = rand;

		// answer
		number[0] = '' + thousands + ',' + hundreds + tens + ones;

		// put numbers in expanded form
		ones1 = '' + ones;
		tens1 = '' + tens + '0';
		hundreds1 = '' + hundreds + '00';
		thousands1 = '' + thousands + '000';

		// question
		expanded = '' + thousands1 + '+' + hundreds1 + '+' + tens1 + '+' + ones1;

		// create wrong answers to choose at random
		number[1] = '' + thousands + tens + ones;
		number[2] = '' + thousands + hundreds + ones;
		number[3] = '' + thousands + hundreds + tens;

		number[4] = '' + thousands + '0' + ',' + hundreds + tens + ones;
		number[5] = '' + thousands + '00' + ',' + hundreds + tens + ones;
		//number[6] = '' + thousands + '000' + ',' + hundreds + tens + ones;
                  
		this.setQuestion('What is ' + expanded + ' in number form?');
                this.setAnswer(number[0],0);

		this.mButtonA.setAnswer(number[0]);
		rand = 1 + Math.floor((Math.random()*5));
                this.mButtonB.setAnswer(number[rand]);

		do {
    			rand2 = 1 + Math.floor((Math.random()*5));
		}
		while (rand == rand2);		

                this.mButtonC.setAnswer(number[rand2]);

		this.mButtonA.setSize(165,100);
                this.mButtonB.setSize(165,100);
                this.mButtonC.setSize(165,100);

                this.shuffle(1);

        }
});


/* TYPE_DESCRIPTION: i_4_nbt_a_2_t_5: This type will will ask >, <, =. */

var i_4_nbt_a_2__5 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '4.nbt.a.2_5';

		var number = [];

		var ones = 0;
		var tens = 0;
		var hundreds = 0;
		var thousands = 0;

		var answer = ''; 
		
		var rand = 0;

		// pick randon digits for first number
		rand = 1 + Math.floor((Math.random()*9));
		ones = rand;
		rand = 1 + Math.floor((Math.random()*9));
		tens = rand;
		rand = 1 + Math.floor((Math.random()*9));
		hundreds = rand;
		rand = 1 + Math.floor((Math.random()*9));
		thousands = rand;

		number[0] = '' + thousands + ',' + hundreds + tens + ones;

		number[1] = thousands*1000 + hundreds*100 + tens*10 + ones*1;

		// pick randon digits for first number
		rand = 1 + Math.floor((Math.random()*9));
		ones = rand;
		rand = 1 + Math.floor((Math.random()*9));
		tens = rand;
		rand = 1 + Math.floor((Math.random()*9));
		hundreds = rand;
		//rand = 1 + Math.floor((Math.random()*9));
		//thousands = rand;

		number[2] = '' + thousands + ',' + hundreds + tens + ones;

		number[3] = thousands*1000 + hundreds*100 + tens*10 + ones*1;

		this.setQuestion(number[0] + ' is ? ' + number[2]);

		if (number[1] > number[3])
			answer = 'greater than';
		else if (number[1] < number[3])
			answer = 'less than';	
		else
			answer = 'equal to';

                this.setAnswer(answer,0);

		this.mButtonA.setAnswer('greater than');
                this.mButtonB.setAnswer('less than');
                this.mButtonC.setAnswer('equal to');

		this.mButtonA.setSize(165,100);
                this.mButtonB.setSize(165,100);
                this.mButtonC.setSize(165,100);         

        }
});
