
var MultiplyDecimals = new Class(
{
initialize: function(factorA,factorB,decimalPlaces)
{
	this.mUtility = new Utility();

	this.mFactorA = factorA;
	this.mFactorB = factorB;

	this.mDecimalPlaces = decimalPlaces;	
	
	this.mAnswer = 0;
	this.mWholeNumberAnswer =  parseInt(this.mFactorA * this.mFactorB);

	this.process();
},

process:  function()
{
	var s = '' + this.mWholeNumberAnswer;	
	if (s.length <= this.mDecimalPlaces) // we have just a decimal  
	{
		//lets add buffer zeros depending on size compared to decimal places needed
		var numberOfBufferZeroes = parseInt(this.mDecimalPlaces - s.length);	
		var bufferZeroes = '';
		for (i = 0; i < numberOfBufferZeroes; i++)
		{	
			bufferZeroes = '' + bufferZeroes + '0';
		}
		var decimalPart = '' + bufferZeroes + this.mWholeNumberAnswer; 	
		decimalPart = this.mUtility.stripTrailingZeroes(decimalPart);
		this.mAnswer = '0.' + decimalPart;
	}
	else //lets split it
	{
		var wholePart   = s.substring(0,parseInt(s.length - this.mDecimalPlaces));	
		var decimalPart = s.substring(parseInt(wholePart.length),parseInt(s.length));	

		var decimalPartInt = parseInt(decimalPart);
		if (decimalPartInt == 0)
		{
			this.mAnswer = wholePart;
		}
		else
		{
			decimalPart = this.mUtility.stripTrailingZeroes(decimalPart);
			this.mAnswer = wholePart + '.' + decimalPart;
		}
	}
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_18',5.1118,'5.nbt.b.7','5.55/5.55');
*/
var i_5_nbt_b_7__18 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_18';
	
	this.mUtility = new Utility();

	this.answer = 'setme';

        this.a = 0;
        this.b = 0;
        this.c = 0;
        this.d = 0;
        this.e = 0;
        this.f = 0;

        this.divisor  = 0;
        this.quotient = 0;
        this.dividend = 0;
	this.remainder = 1;

	while (this.divisor == 0 || this.dividend == 0 || this.remainder != 0  )
	{
        	this.a = Math.floor(Math.random()*9+1);
        	this.b = Math.floor(Math.random()*9+1);
        	this.c = Math.floor(Math.random()*9+1);
        	this.d = Math.floor(Math.random()*9+1);
        	this.e = Math.floor(Math.random()*9+1);
        	this.f = Math.floor(Math.random()*9+1);

        	this.dividend  = parseInt(this.a * 100 + this.b * 10 + this.c);
        	this.divisor   = parseInt(this.d * 100 + this.e * 10 + this.f);
		this.quotient  = parseInt(this.dividend / this.divisor);
		this.remainder = this.dividend % this.divisor;
	}
	
	//answer will slide all the way over to right of dividend so if its 3 spaces it will be equal to div etc
	var q = '' + this.quotient;

	if (q.length == 0)
	{
		//	
	}	
	if (q.length == 1)
	{
		this.answer = '' + this.quotient;	
	}	
	if (q.length == 2)
	{
		this.answer = '' + this.quotient;	
	}	
	if (q.length == 3)
	{
		this.answer = '' + this.quotient;	
	}	
	
        this.setQuestion('Find the quotient: ' + this.a + '.' + this.b + this.c + ' &divide ' + this.d + '.' + this.e + this.f);
        this.setAnswer('' + this.answer,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_17',5.1117,'5.nbt.b.7','5.5/0.55');
*/
var i_5_nbt_b_7__17 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_17';
	
	this.mUtility = new Utility();

	this.answer = 'setme';

        this.a = 0;
        this.b = 0;
        this.c = 0;
        this.d = 0;
        this.e = 0;

        this.divisor  = 0;
        this.quotient = 0;
        this.dividend = 0;
	this.remainder = 1;

	while (this.divisor == 0 || this.dividend == 0 || this.remainder != 0  )
	{
        	this.a = Math.floor(Math.random()*9+1);
        	this.b = Math.floor(Math.random()*9+1);

        	this.c = 0;
        	this.d = Math.floor(Math.random()*9+1);
        	this.e = Math.floor(Math.random()*9+1);

        	this.dividend  = parseInt(this.a * 100 + this.b * 10         );
        	this.divisor   = parseInt(               this.d * 10 + this.e);
		this.quotient  = parseInt(this.dividend / this.divisor);
		this.remainder = this.dividend % this.divisor;
	}
	
	//answer will slide all the way over to right of dividend so if its 3 spaces it will be equal to div etc
	var q = '' + this.quotient;
	//q = q * 10  

	if (q.length == 0)
	{
		//	
	}	
	if (q.length == 1)
	{
		this.answer = '' + this.quotient;	
	}	
	if (q.length == 2)
	{
		this.answer = '' + this.quotient;	
	}	
	if (q.length == 3)
	{
		this.answer = '' + this.quotient;	
	}	
	
        this.setQuestion('Find the quotient: ' + this.a + '.' + this.b + ' &divide ' + this.c + '.' + this.d + this.e);
        this.setAnswer('' + this.answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_16',5.1116,'5.nbt.b.7','5.55/5.5');
*/
var i_5_nbt_b_7__16 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_16';
	
	this.mUtility = new Utility();

	this.answer = 'setme';

        this.a = 0;
        this.b = 0;
        this.c = 0;
        this.d = 0;
        this.e = 0;

        this.divisor  = 0;
        this.quotient = 0;
        this.dividend = 0;
	this.remainder = 1;

	while (this.divisor == 0 || this.dividend == 0 || this.remainder != 0  )
	{
        	this.a = Math.floor(Math.random()*9+1);
        	this.b = Math.floor(Math.random()*9+1);
        	this.c = Math.floor(Math.random()*9+1);
        	this.d = Math.floor(Math.random()*9+1);
        	this.e = Math.floor(Math.random()*9+1);

        	this.dividend  = parseInt(this.a * 100 + this.b * 10 + this.c);
        	this.divisor   = parseInt(               this.d * 10 + this.e);
		this.quotient  = parseInt(this.dividend / this.divisor);
		this.remainder = this.dividend % this.divisor;
	}
	
	//answer will slide all the way over to right of dividend so if its 3 spaces it will be equal to div etc
	var q = '' + this.quotient;

	if (q.length == 0)
	{
		//	
	}	
	if (q.length == 1)
	{
		this.answer = '0.' + this.quotient;	
	}	
	if (q.length == 2)
	{
		if (q[1] == 0)
		{
			this.answer = '' + q[0];	
		}
		else
		{
			this.answer = '' + q[0] + '.' + q[1];	
		}
	}	
	if (q.length == 3)
	{
		if (q[2] == 0)
		{
			this.answer = '' + q[0] + q[1];	
		}
		else
		{
			this.answer = '' + q[0] + q[1] + '.' + q[2];	
		}
	}	
	
        this.setQuestion('Find the quotient: ' + this.a + '.' + this.b + this.c + ' &divide ' + this.d + '.' + this.e);
        this.setAnswer('' + this.answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_15',5.1115,'5.nbt.b.7','0.55/0.5');
*/
var i_5_nbt_b_7__15 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_15';
	
	this.mUtility = new Utility();

	this.answer = 'setme';

        this.a = 0;
        this.b = 0;
        this.c = 0;
        this.d = 0;
        this.e = 0;

        this.divisor  = 0;
        this.quotient = 0;
        this.dividend = 0;
	this.remainder = 1;

	while (this.divisor == 0 || this.dividend == 0 || this.remainder != 0  )
	{
        	this.a = 0;
        	this.b = Math.floor(Math.random()*9+1);
        	this.c = Math.floor(Math.random()*9+1);
        	this.d = 0;
        	this.e = Math.floor(Math.random()*9+1);

        	this.dividend  = parseInt(this.a * 100 + this.b * 10 + this.c);
        	this.divisor   = parseInt(               this.d * 10 + this.e);
		this.quotient  = parseInt(this.dividend / this.divisor);
		this.remainder = this.dividend % this.divisor;
	}
	
	//answer will slide all the way over to right of dividend so if its 3 spaces it will be equal to div etc
	var q = '' + this.quotient;

	if (q.length == 0)
	{
		//	
	}	
	if (q.length == 1)
	{
		this.answer = '0.' + this.quotient;	
	}	
	if (q.length == 2)
	{
		if (q[1] == 0)
		{
			this.answer = '' + q[0];	
		}
		else
		{
			this.answer = '' + q[0] + '.' + q[1];	
		}
	}	
	if (q.length == 3)
	{
		if (q[2] == 0)
		{
			this.answer = '' + q[0] + q[1];	
		}
		else
		{
			this.answer = '' + q[0] + q[1] + '.' + q[2];	
		}
	}	
	
        this.setQuestion('Find the quotient: ' + this.a + '.' + this.b + this.c + ' &divide ' + this.d + '.' + this.e);
        this.setAnswer('' + this.answer,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_14',5.1114,'5.nbt.b.7','5.55x5.55');
*/
var i_5_nbt_b_7__14 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_14';
        this.ns = new NameSampler();

        this.a = Math.floor(Math.random()*9+1);
        this.b = Math.floor(Math.random()*9+1);
        this.c = Math.floor(Math.random()*9+1);

        this.d = Math.floor(Math.random()*9+1);
        this.e = Math.floor(Math.random()*9+1);
        this.f = Math.floor(Math.random()*9+1);

        this.partA = parseInt(this.a * 100 + this.b * 10 + this.c);
        this.partB = parseInt(this.d * 100 + this.e * 10 + this.f);
        this.part =  parseInt(this.partA * this.partB);

	while (this.part == 0 || this.part > 99999 )
	{
        	this.a = Math.floor(Math.random()*9+1);
        	this.b = Math.floor(Math.random()*9+1);
        	this.c = Math.floor(Math.random()*9+1);

        	this.d = Math.floor(Math.random()*9+1);
        	this.e = Math.floor(Math.random()*9+1);
        
		this.partA = parseInt(this.a * 100 + this.b * 10 + this.c);
        	this.partB = parseInt(this.d * 100 + this.e * 10 + this.f);
        	this.part =  parseInt(this.partA * this.partB);
	}

	this.mMultiplyDecimals = new MultiplyDecimals(this.partA,this.partB,4);

        this.setQuestion('Find the product: ' + this.a + '.' + this.b + this.c + ' &times ' + this.d + '.' + this.e + this.f);
        this.setAnswer('' + this.mMultiplyDecimals.mAnswer,0);
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_13',5.1113,'5.nbt.b.7','5.55x5.5');
*/
var i_5_nbt_b_7__13 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_13';
        this.ns = new NameSampler();

        this.a = Math.floor(Math.random()*9+1);
        this.b = Math.floor(Math.random()*9+1);
        this.c = Math.floor(Math.random()*9+1);

        this.d = Math.floor(Math.random()*9+1);
        this.e = Math.floor(Math.random()*9+1);

        this.partA = parseInt(this.a * 100 + this.b * 10 + this.c);
        this.partB = parseInt(               this.d * 10 + this.e);
        this.part =  parseInt(this.partA * this.partB);

	while (this.part == 0)
	{
        	this.a = Math.floor(Math.random()*9+1);
        	this.b = Math.floor(Math.random()*9+1);
        	this.c = Math.floor(Math.random()*9+1);

        	this.d = Math.floor(Math.random()*9+1);
        	this.e = Math.floor(Math.random()*9+1);
        
		this.partA = parseInt(this.a * 100 + this.b * 10 + this.c);
        	this.partB = parseInt(               this.d * 10 + this.e);
        	this.part =  parseInt(this.partA * this.partB);
	}
		
	this.mMultiplyDecimals = new MultiplyDecimals(this.partA,this.partB,3);

        this.setQuestion('Find the product: ' + this.a + '.' + this.b + this.c + ' &times ' + this.d + '.' + this.e + '');
        this.setAnswer('' + this.mMultiplyDecimals.mAnswer,0);
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_12',5.1112,'5.nbt.b.7','5.5x0.55');
*/
var i_5_nbt_b_7__12 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_12';

        this.a = Math.floor(Math.random()*9+1);
        this.b = Math.floor(Math.random()*9+1);

        this.c = Math.floor(Math.random()*9+1);
        this.d = Math.floor(Math.random()*9+1);

        this.partA = parseInt(this.a * 10 + this.b);
        this.partB = parseInt(this.c * 10 + this.d);
        this.part =  parseInt(this.partA * this.partB);

	while (this.part == 0)
	{
        	this.a = Math.floor(Math.random()*9+1);
        	this.b = Math.floor(Math.random()*9+1);

        	this.c = Math.floor(Math.random()*9+1);
        	this.d = Math.floor(Math.random()*9+1);
        
        	this.partA = parseInt(this.a * 10 + this.b);
        	this.partB = parseInt(this.c * 10 + this.d);
        	this.part =  parseInt(this.partA * this.partB);
	}
		
	this.mMultiplyDecimals = new MultiplyDecimals(this.partA,this.partB,3);

        this.setQuestion('Find the product: ' + this.a + '.' + this.b + ' &times ' + '0.' + this.c + this.d);
        this.setAnswer('' + this.mMultiplyDecimals.mAnswer,0);
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_11',5.1111,'5.nbt.b.7','5.55x5.5');
*/
var i_5_nbt_b_7__11 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_11';

        this.a = Math.floor(Math.random()*9+1);
        this.b = Math.floor(Math.random()*9+1);
        this.c = Math.floor(Math.random()*9+1);

        this.d = Math.floor(Math.random()*9+1);
        this.e = Math.floor(Math.random()*9+1);

        this.partA = parseInt(this.a * 100 + this.b * 10 + this.c);
        this.partB = parseInt(               this.d * 10 + this.e);
        this.part =  parseInt(this.partA * this.partB);

	while (this.part == 0)
	{
        	this.a = Math.floor(Math.random()*9+1);
        	this.b = Math.floor(Math.random()*9+1);
        	this.c = Math.floor(Math.random()*9+1);

        	this.d = Math.floor(Math.random()*9+1);
        	this.e = Math.floor(Math.random()*9+1);

        	this.partA = parseInt(this.a * 100 + this.b * 10 + this.c);
        	this.partB = parseInt(               this.d * 10 + this.e);
        	this.part =  parseInt(this.partA * this.partB);
	}

	this.mMultiplyDecimals = new MultiplyDecimals(this.partA,this.partB,3);

        this.setQuestion('Find the product: ' + this.a + '.' + this.b + this.c + ' &times ' + this.d + '.' + this.e + '');
        this.setAnswer('' + this.mMultiplyDecimals.mAnswer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_10',5.1110,'5.nbt.b.7','0.55x0.5');
*/
var i_5_nbt_b_7__10 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_10';

        this.a = 0;
        this.b = Math.floor(Math.random()*9+1);
        this.c = Math.floor(Math.random()*9+1);
        this.d = 0;
        this.e = Math.floor(Math.random()*9+1);

        this.partA = parseInt(this.b * 10 + this.c);
        this.partB = parseInt(              this.e);
        this.part =  parseInt(this.partA * this.partB);

	var floatAnswer = 0; 
	while (this.part == 0 || floatAnswer < 0.0001)
	{
        	this.a = 0;
        	this.b = Math.floor(Math.random()*9+1);
        	this.c = Math.floor(Math.random()*9+1);
        	this.d = 0;
        	this.e = Math.floor(Math.random()*9+1);

        	this.partA = parseInt(this.b * 10 + this.c);
        	this.partB = parseInt(              this.e);
        	this.part =  parseInt(this.partA * this.partB);

		this.mMultiplyDecimals = new MultiplyDecimals(this.partA,this.partB,3);

        	this.setQuestion('Find the product: ' + this.a + '.' + this.b + this.c + ' &times ' + this.d + '.' + this.e + '');
        	this.setAnswer('' + this.mMultiplyDecimals.mAnswer,0);
		
		floatAnswer = parseFloat(this.mMultiplyDecimals.mAnswer);
	}
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_9',5.1109,'5.nbt.b.7','x.xx-x.x');
*/
var i_5_nbt_b_7__9 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_9';

        this.ns = new NameSampler();

        this.a = 0;
        this.b = 0;
        this.c = 0;
        this.d = 0;
        this.e = 0;
        this.f = 0;

        this.partA = 0;
        this.partB = 1;
        this.part = 0;

        while (this.partA < this.partB)
        {
                this.a = Math.floor(Math.random()*9+1);
                this.b = Math.floor(Math.random()*9+1);
                this.c = Math.floor(Math.random()*9+1);
                this.d = Math.floor(Math.random()*9+1);
                this.e = Math.floor(Math.random()*9+1);
                this.f = 0;

                this.partA = parseInt(this.a * 100 + this.b * 10 + this.c);
                this.partB = parseInt(this.d * 100 + this.e * 10 + this.f);
                this.part =  parseInt(this.partA - this.partB);
        }

	if (this.part > 99) // we are 3 digits 
	{
        	if (this.part % 100 == 0) // we have a whole number
        	{
                	this.answer = '' + this.part;
        	}
        	else if (this.part % 10 == 0) // we have a multiple of 10  
        	{
			var tensAndOnes = parseInt(this.part / 10); 
			var ones = parseInt(tensAndOnes / 10);
			var tenths = tensAndOnes % 10;
		
                	this.answer = '' + ones + '.' + tenths;
        	}
        	else // we have pure 3 digit number  
		{
			var hundreds = parseInt(this.part / 100); 
			var tensAndOnes = this.part % 100; 
			this.answer = '' + hundreds + '.' + tensAndOnes;
		}
	}
        else if (this.part <= 99) // we are 3 digits
        {
                if (this.part % 10 == 0) // we have a multiple of 10
                {
                        var tensAndOnes = parseInt(this.part / 10);
                        var ones = parseInt(tensAndOnes / 10);
                        var tenths = tensAndOnes % 10;
                        this.answer = '' + ones + '.' + tenths;
                }
        	else // we have pure 3 digit number  
		{
			var hundreds = parseInt(this.part / 100); 
			var tensAndOnes = this.part % 100; 
			this.answer = '' + hundreds + '.' + tensAndOnes;
		}
        }

        this.setQuestion('' + this.ns.mNameOne + ' ran a race in ' + this.a + '.' + this.b + this.c + ' seconds on Friday. Then on Saturday ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' ran the same race ' + this.d + '.' + this.e + ' seconds faster. What was ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' time on Saturday?');

        this.setAnswer('' + this.answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_8',5.1108,'5.nbt.b.7','x.x-0.xx');
*/
var i_5_nbt_b_7__8 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_8';

        var decimalA = new Decimal(1);
        var decimalB = new Decimal(2);
        while (parseFloat(decimalA.mDecimal) <= parseFloat(decimalB.mDecimal))
        {
                var a = Math.floor(Math.random()*89+10);
                a = parseFloat(a / 10);
                decimalA = new Decimal(a);

                var b = Math.floor(Math.random()*89+10);
                b = parseFloat(b / 100);
                decimalB = new Decimal(b);
        }

        var answer = decimalA.subtract(decimalB);

        this.setQuestion('Find the difference: ' + decimalA.getString() + ' - ' + decimalB.getString() + '');
        this.setAnswer('' + answer.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_7',5.1107,'5.nbt.b.7','xx.xx-x.x');
*/
var i_5_nbt_b_7__7 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_7';

        var decimalA = new Decimal(1);
        var decimalB = new Decimal(2);
        while (parseFloat(decimalA.mDecimal) <= parseFloat(decimalB.mDecimal))
        {
                var a = Math.floor(Math.random()*8999+1000);
                a = parseFloat(a / 100);
                decimalA = new Decimal(a);

                var b = Math.floor(Math.random()*89+10);
                b = parseFloat(b / 10);
                decimalB = new Decimal(b);
        }

        var answer = decimalA.subtract(decimalB);

        this.setQuestion('Find the difference: ' + decimalA.getString() + ' - ' + decimalB.getString() + '');
        this.setAnswer('' + answer.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_6',5.1106,'5.nbt.b.7','0.xx-0.x');
*/
var i_5_nbt_b_7__6 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_6';

	var decimalA = new Decimal(1);
	var decimalB = new Decimal(2);
	while (parseFloat(decimalA.mDecimal) <= parseFloat(decimalB.mDecimal))
	{
        	var a = Math.floor(Math.random()*89+10);
        	a = parseFloat(a / 100);
        	decimalA = new Decimal(a);

        	var b = Math.floor(Math.random()*9+1);
        	b = parseFloat(b / 10);
        	decimalB = new Decimal(b);
	}

        var answer = decimalA.subtract(decimalB);

        this.setQuestion('Find the difference: ' + decimalA.getString() + ' - ' + decimalB.getString() + '');
        this.setAnswer('' + answer.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_5',5.1105,'5.nbt.b.7','xx.xx+x.xx');
*/
var i_5_nbt_b_7__5 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_5';

        this.ns = new NameSampler();

	var a = Math.floor(Math.random()*899+100);
        a = parseFloat(a / 100);
        var decimalA = new Decimal(a);

        var b = Math.floor(Math.random()*89+10);
        b = parseFloat(b / 10);
        var decimalB = new Decimal(b);

        var answer = decimalA.add(decimalB);

	this.setQuestion('Last year ' + this.ns.mNameOne + ' was ' + decimalA.getString() + ' inches tall. This year ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' grew ' + decimalB.getString() + ' inches so far. How many inches tall is ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' now?');

        this.setAnswer('' + answer.getString(),0);
        this.setAnswer('' + answer.getString() + ' inches',1);
        this.setAnswer('' + answer.getString() + ' in.',2);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_4',5.1104,'5.nbt.b.7','x.xx+x.x');
*/
var i_5_nbt_b_7__4 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_4';
	this.ns = new NameSampler();

        var a = Math.floor(Math.random()*899+100);
        a = parseFloat(a / 100);
        var decimalA = new Decimal(a);

        var b = Math.floor(Math.random()*89+10);
        b = parseFloat(b / 10);
        var decimalB = new Decimal(b);

        var twosides = decimalA.add(decimalB);
	
	var answer = twosides.add(twosides);
        
	this.setQuestion('In a video game called minetest ' + this.ns.mNameOne + ' builds a rectangular fenced in yard for ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' ' + this.ns.mAnimalOne + '. If the length of the yard is ' + decimalA.getString() + ' ' + this.ns.mDistanceIncrementMedium + ' and the width of the yard is ' + decimalB.getString() + ' ' + this.ns.mDistanceIncrementMedium + ' then what is the perimeter of the yard?');

        this.setAnswer('' + answer.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_3',5.1103,'5.nbt.b.7','x.x+0.xx');
*/
var i_5_nbt_b_7__3 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_3';

        var a = Math.floor(Math.random()*89+10);
        a = parseFloat(a / 10);
        var decimalA = new Decimal(a);

        var b = Math.floor(Math.random()*89+10);
        b = parseFloat(b / 100);
        var decimalB = new Decimal(b);

        var answer = decimalA.add(decimalB);

        this.setQuestion('Find the sum: ' + decimalA.getString() + ' + ' + decimalB.getString());

        this.setAnswer('' + answer.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_2',5.1102,'5.nbt.b.7','x.xx+x.x');
*/
var i_5_nbt_b_7__2 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_2';

        var a = Math.floor(Math.random()*899+100);
        a = parseFloat(a / 100);
        var decimalA = new Decimal(a);

        var b = Math.floor(Math.random()*89+10);
        b = parseFloat(b / 10);
        var decimalB = new Decimal(b);

        var answer = decimalA.add(decimalB);

        this.setQuestion('Find the sum: ' + decimalA.getString() + ' + ' + decimalB.getString());

        this.setAnswer('' + answer.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_1',5.1101,'5.nbt.b.7','0.xx+0.x');
*/
var i_5_nbt_b_7__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_1';

        var a = Math.floor(Math.random()*99+1);
	a = parseFloat(a / 100);
	var decimalA = new Decimal(a);	

        var b = Math.floor(Math.random()*9+1);
	b = parseFloat(b / 10);
	var decimalB = new Decimal(b);	

	var answer = decimalA.add(decimalB);  

        this.setQuestion('Find the sum: ' + decimalA.getString() + ' + ' + decimalB.getString());

        this.setAnswer('' + answer.getString(),0);
}
});

