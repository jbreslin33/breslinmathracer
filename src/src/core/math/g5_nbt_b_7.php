/* ok we are going with...

0.xx
0.x

xx.x 
x.x

x.x
0.xx

x.xx 
x.x

xx.xx
x.xx

*/ 

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

        this.a = Math.floor(Math.random()*10);
        this.b = Math.floor(Math.random()*10);
        this.c = Math.floor(Math.random()*10);
        this.d = Math.floor(Math.random()*10);
        this.e = Math.floor(Math.random()*10);
        this.f = Math.floor(Math.random()*10);
        this.g = Math.floor(Math.random()*10);
        
	this.decimalPart = parseInt(this.c * 10 + this.d + this.e * 10);
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

        this.setQuestion('Find the sum: ' + this.a + this.b + '.' + this.c + this.d + ' + ' + this.e + '.' + this.f + this.g);

        this.setAnswer('' + this.answer,0);
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

