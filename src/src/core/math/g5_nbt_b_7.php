
/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_10',5.1110,'5.nbt.b.7','x.xx-x.x');
*/
var i_5_nbt_b_7__10 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_10';

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
                this.a = Math.floor(Math.random()*10);
                this.b = Math.floor(Math.random()*10);
                this.c = Math.floor(Math.random()*10);
                this.d = Math.floor(Math.random()*10);
                this.e = Math.floor(Math.random()*10);
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
			var ones = tensAndOnes / 10;
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

        this.setQuestion('' + this.ns.mNameOne + ' ran a race in ' + this.a + '.' + this.b + this.c + ' seconds on Friday. Then on Saturday ' + this.ns.mNameMachine.getProunoun(this.ns.mNameOne,0,0) + ' ran the same race ' + this.d + '.' + this.e + ' seconds faster. What was ' + this.ns.mNameMachine.getProunoun(this.ns.mNameOne,0,1) + ' time on Saturday?');

        this.setAnswer('' + this.answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_9',5.1109,'5.nbt.b.7','x.x-0.xx');
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
                this.a = Math.floor(Math.random()*10);
                this.b = Math.floor(Math.random()*10);
                this.c = 0;
                this.d = 0;
                this.e = Math.floor(Math.random()*10);
                this.f = Math.floor(Math.random()*10);

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
			var tens = parseInt(tensAndOnes / 10); 
			var ones = tensAndOnes % 10; 
			this.answer = '' + hundreds + '.' + tens + ones;
		}
	}
        else if (this.part <= 99) // we are 3 digits
        {
		if (this.part < 10) //we have a 1 digit number
		{
                        this.answer = '0.0' + this.part;
		}
                else if (this.part % 10 == 0) // we have a multiple of 10
                {
                        var tensAndOnes = parseInt(this.part / 10);
                        var ones = parseInt(tensAndOnes / 10);
                        var tenths = tensAndOnes % 10;
                        this.answer = '' + ones + '.' + tenths;
                }
        }

        this.setQuestion('Find the difference: ' + this.a + '.' + this.b + ' - 0.' + this.e + this.f);

        this.setAnswer('' + this.answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_8',5.1108,'5.nbt.b.7','xx.xx-x.x');
*/
var i_5_nbt_b_7__8 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_8';

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
                this.a = Math.floor(Math.random()*10);
                this.b = Math.floor(Math.random()*10);
                this.c = Math.floor(Math.random()*10);
                this.d = Math.floor(Math.random()*10);

                this.e = 0;
                this.f = Math.floor(Math.random()*10);
                this.g = Math.floor(Math.random()*10);
                this.h = 0;

                this.partA = parseInt(this.a * 1000 + this.b * 100 + this.c * 10 + this.d);
                this.partB = parseInt(this.e * 1000 + this.f * 100 + this.g * 10 + this.h);
                this.part =  parseInt(this.partA - this.partB);
        }
        if (this.part > 999) // we are 3 digits
        {
                if (this.part % 1000 == 0) // we have a whole number
                {
                        this.answer = '' + this.part;
                }
                if (this.part % 100 == 0) // we have a whole number
                {
                        this.answer = '' + this.part;
                }
                else if (this.part % 10 == 0) // we have a multiple of 10
                {
                        var tensAndOnes = parseInt(this.part / 10);
                        var ones = tensAndOnes / 10;
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

	if (this.part > 99) // we are 3 digits 
	{
        	if (this.part % 100 == 0) // we have a whole number
        	{
                	this.answer = '' + this.part;
        	}
        	else if (this.part % 10 == 0) // we have a multiple of 10  
        	{
			var tensAndOnes = parseInt(this.part / 10); 
			var ones = tensAndOnes / 10;
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

        this.setQuestion('Find the difference: ' + this.a + this.b + '.' + this.c + this.d + ' - ' + this.f + '.' + this.g);

        this.setAnswer('' + this.answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_7',5.1107,'5.nbt.b.7','0.xx-0.x');
*/
var i_5_nbt_b_7__7 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_7';

        this.ns = new NameSampler();

        this.a = 0;
        this.b = 0;
        this.c = 0;
        this.d = 0;

        this.decimalPartA = 0;
        this.decimalPartB = 1;
	
	while (this.decimalPartA < this.decimalPartB)
	{
        	this.a = Math.floor(Math.random()*10);
        	this.b = Math.floor(Math.random()*10);
        	this.c = Math.floor(Math.random()*10);
        	this.d = 0;
        
		this.decimalPartA = parseInt(this.a * 10 + this.b);
        	this.decimalPartB = parseInt(this.c * 10);
		this.decimalPart =  parseInt(this.decimalPartA - this.decimalPartB);
	}

        if (this.decimalPart < 10)
        {
                this.answer = '0.0' + this.decimalPart;
        }
        else
        {
              	this.answer = '0.' + this.decimalPart;
        }

        this.setQuestion('Find the difference: 0.' + this.a + this.b + ' - 0.' + this.c + '');

        this.setAnswer('' + this.answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_6',5.1106,'5.nbt.b.7','0.xx+0.x');
*/
var i_5_nbt_b_7__6 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_6';

        this.ns = new NameSampler();

        this.a = Math.floor(Math.random()*10);
        this.b = Math.floor(Math.random()*10);
        this.c = Math.floor(Math.random()*10);

        this.decimalPart = parseInt( (this.a * 10 + this.b + this.c * 10) + (this.a * 10 + this.b + this.c * 10) );

        this.answer = 0;
        if (this.decimalPart > 299)
        {
                this.decimalPart = parseInt(this.decimalPart - 300);
                if (this.decimalPart < 10)
                {
                        this.answer = '3.0' + this.decimalPart;
                }
                else
                {
                        this.answer = '3.' + this.decimalPart;
                }
        }
        else if (this.decimalPart > 199)
        {
                this.decimalPart = parseInt(this.decimalPart - 200);
                if (this.decimalPart < 10)
                {
                        this.answer = '2.0' + this.decimalPart;
                }
                else
                {
                        this.answer = '2.' + this.decimalPart;
                }
        }
       	else if (this.decimalPart > 99)
        {
                this.decimalPart = parseInt(this.decimalPart - 100);
                if (this.decimalPart < 10)
                {
                        this.answer = '1.0' + this.decimalPart;
                }
                else
                {
                        this.answer = '1.' + this.decimalPart;
                }
        }
        else if (this.decimalPart <= 99)
	{
                if (this.decimalPart < 10)
                {
                        this.answer = '0.0' + this.decimalPart;
                }
                else
                {
                        this.answer = '0.' + this.decimalPart;
                }
        }

        this.setQuestion('In a video game ' + this.ns.mNameOne + ' built a fenced in yard for ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' ' + this.ns.mAnimalOne + ' to live in. If the length of the yard is 0.' + this.a + this.b + ' ' + this.ns.mDistanceIncrementMedium + ' and the width is ' + ' 0.' + this.c + ' ' +  this.ns.mDistanceIncrementMedium + ' then what is the perimeter of the yard?');

        this.setAnswer('' + this.answer,0);
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

        this.a = Math.floor(Math.random()*2)+5;
        this.b = Math.floor(Math.random()*10);
        this.c = Math.floor(Math.random()*10);
        this.d = Math.floor(Math.random()*10);
        this.e = Math.floor(Math.random()*10);
        this.f = Math.floor(Math.random()*10);
        this.g = Math.floor(Math.random()*10);
        
	this.decimalPart = parseInt(this.c * 10 + this.d + this.f * 10 + this.g);
	this.wholePart = parseInt(this.a * 10 + this.b + this.e);

	this.answer = 0; 
	if (this.decimalPart > 99)
	{
		this.decimalPart = parseInt(this.decimalPart - 100);
		this.wholePart++; //add one for carry 

		if (this.decimalPart < 10)
		{
			if (parseInt(this.decimalPart) == 0)
			{
				this.answer = '' + this.wholePart; 	 
			}
			else
			{
				this.answer = '' + this.wholePart + '.0' + this.decimalPart; //add a zero in tenths cause its less than 10	 
			}
		}
		else
		{
			if (this.decimalPart % 10 == 0)	
			{
				this.decimalPart = parseInt(this.decimalPart / 10);
			}
			this.answer = '' + this.wholePart + '.' + this.decimalPart; 	 
		}	
	}
	else
	{
                if (this.decimalPart < 10)
                {
                        if (parseInt(this.decimalPart) == 0)
                        {
                                this.answer = '' + this.wholePart;                                              
                        }
                        else
                        {
                                this.answer = '' + this.wholePart + '.0' + this.decimalPart; //add a zero in tenths cause its less than 10
                        }
                }
                else
                {
			if (this.decimalPart % 10 == 0)	
                        {
				this.decimalPart = parseInt(this.decimalPart / 10);
                        }
                        this.answer = '' + this.wholePart + '.' + this.decimalPart;
                }
	}

	this.setQuestion('Last year ' + this.ns.mNameOne + ' was ' + this.a + this.b + '.' + this.c + this.d + ' inches tall. This year ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' grew ' + this.e + '.' + this.f + this.g + ' inches so far. How many inches tall is ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' now?');

        this.setAnswer('' + this.answer,0);
        this.setAnswer('' + this.answer + ' inches',1);
        this.setAnswer('' + this.answer + ' in.',2);
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

        this.a = Math.floor(Math.random()*10);
        this.b = Math.floor(Math.random()*10);
        this.c = Math.floor(Math.random()*10);
        this.d = Math.floor(Math.random()*10);
        this.e = Math.floor(Math.random()*10);
        
	this.decimalPart = parseInt(this.b * 10 + this.c + this.e * 10);
	this.wholePart = parseInt(this.a + this.d);

	this.answer = 0; 
	if (this.decimalPart > 99)
	{
		this.decimalPart = parseInt(this.decimalPart - 100);
		this.wholePart++; //add one for carry 

		if (this.decimalPart < 10)
		{
			if (parseInt(this.decimalPart) == 0)
			{
				this.answer = '' + this.wholePart; 	 
			}
			else
			{
				this.answer = '' + this.wholePart + '.0' + this.decimalPart; //add a zero in tenths cause its less than 10	 
			}
		}
		else
		{
			if (this.decimalPart % 10 == 0)	
			{
				this.decimalPart = parseInt(this.decimalPart / 10);
			}
			this.answer = '' + this.wholePart + '.' + this.decimalPart; 	 
		}	
	}
	else
	{
                if (this.decimalPart < 10)
                {
                        if (parseInt(this.decimalPart) == 0)
                        {
                                this.answer = '' + this.wholePart;                                              
                        }
                        else
                        {
                                this.answer = '' + this.wholePart + '.0' + this.decimalPart; //add a zero in tenths cause its less than 10
                        }
                }
                else
                {
			if (this.decimalPart % 10 == 0)	
                        {
				this.decimalPart = parseInt(this.decimalPart / 10);
                        }
                        this.answer = '' + this.wholePart + '.' + this.decimalPart;
                }
	}

        this.setQuestion('Find the sum: ' + this.a + '.' + this.b + this.c + ' + ' + this.d + '.' + this.e);

        this.setAnswer('' + this.answer,0);
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

        this.ns = new NameSampler();

        this.a = Math.floor(Math.random()*10);
        this.b = Math.floor(Math.random()*10);
        this.c = Math.floor(Math.random()*10);
        this.d = Math.floor(Math.random()*10);
        
	this.decimalPart = parseInt(this.b * 10 + this.c * 10 + this.d);
	this.wholePart = parseInt(this.a);

	this.answer = 0; 
	if (this.decimalPart > 99)
	{
		this.decimalPart = parseInt(this.decimalPart - 100);
		this.wholePart++; //add one for carry 

		if (this.decimalPart < 10)
		{
			if (parseInt(this.decimalPart) == 0)
			{
				this.answer = '' + this.wholePart; 	 
			}
			else
			{
				this.answer = '' + this.wholePart + '.0' + this.decimalPart; //add a zero in tenths cause its less than 10	 
			}
		}
		else
		{
			if (this.decimalPart % 10 == 0)	
			{
				this.decimalPart = parseInt(this.decimalPart / 10);
			}
			this.answer = '' + this.wholePart + '.' + this.decimalPart; 	 
		}	
	}
	else
	{
                if (this.decimalPart < 10)
                {
                        if (parseInt(this.decimalPart) == 0)
                        {
                                this.answer = '' + this.wholePart;                                              
                        }
                        else
                        {
                                this.answer = '' + this.wholePart + '.0' + this.decimalPart; //add a zero in tenths cause its less than 10
                        }
                }
                else
                {
			if (this.decimalPart % 10 == 0)	
                        {
				this.decimalPart = parseInt(this.decimalPart / 10);
                        }
                        this.answer = '' + this.wholePart + '.' + this.decimalPart;
                }
	}

        this.setQuestion('Find the sum: ' + this.a + '.' + this.b + ' + 0.' + this.c + this.d);

        this.setAnswer('' + this.answer,0);
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

        this.ns = new NameSampler();

        this.a = Math.floor(Math.random()*10);
        this.b = Math.floor(Math.random()*10);
        this.c = Math.floor(Math.random()*10);
        this.d = Math.floor(Math.random()*10);
        this.e = Math.floor(Math.random()*10);
        
	this.decimalPart = parseInt(this.b * 10 + this.c + this.e * 10);
	this.wholePart = parseInt(this.a + this.d);

	this.answer = 0; 
	if (this.decimalPart > 99)
	{
		this.decimalPart = parseInt(this.decimalPart - 100);
		this.wholePart++; //add one for carry 

		if (this.decimalPart < 10)
		{
			if (parseInt(this.decimalPart) == 0)
			{
				this.answer = '' + this.wholePart; 	 
			}
			else
			{
				this.answer = '' + this.wholePart + '.0' + this.decimalPart; //add a zero in tenths cause its less than 10	 
			}
		}
		else
		{
			if (this.decimalPart % 10 == 0)	
			{
				this.decimalPart = parseInt(this.decimalPart / 10);
			}
			this.answer = '' + this.wholePart + '.' + this.decimalPart; 	 
		}	
	}
	else
	{
                if (this.decimalPart < 10)
                {
                        if (parseInt(this.decimalPart) == 0)
                        {
                                this.answer = '' + this.wholePart;                                              
                        }
                        else
                        {
                                this.answer = '' + this.wholePart + '.0' + this.decimalPart; //add a zero in tenths cause its less than 10
                        }
                }
                else
                {
			if (this.decimalPart % 10 == 0)	
                        {
				this.decimalPart = parseInt(this.decimalPart / 10);
                        }
                        this.answer = '' + this.wholePart + '.' + this.decimalPart;
                }
	}
	this.setQuestion('Find the sum: ' + this.a + '.' + this.b + this.c + ' + ' + this.d + '.' + this.e);
        this.setAnswer('' + this.answer,0);
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

        this.ns = new NameSampler();

        this.a = Math.floor(Math.random()*10);
        this.b = Math.floor(Math.random()*10);
        this.c = Math.floor(Math.random()*10);

        this.decimalPart = parseInt(this.a * 10 + this.b + this.c * 10);

        this.answer = 0;
        if (this.decimalPart > 99)
        {
                this.decimalPart = parseInt(this.decimalPart - 100);
                if (this.decimalPart < 10)
                {
                        this.answer = '1.0' + this.decimalPart;
                }
                else
                {
                        this.answer = '1.' + this.decimalPart;
                }
        }
        else
        {
                if (this.decimalPart < 10)
                {
                        this.answer = '0.0' + this.decimalPart;
                }
                else
                {
                        this.answer = '0.' + this.decimalPart;
                }
        }

        this.setQuestion('Find the sum: 0.' + this.a + this.b + ' + 0.' + this.c + '');

        this.setAnswer('' + this.answer,0);
}
});

