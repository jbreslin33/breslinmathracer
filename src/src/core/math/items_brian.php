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

