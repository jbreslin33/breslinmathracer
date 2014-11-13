
/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.4_8',5.0808,'5.nbt.a.4','no nines round to tenths ');
*/
var i_5_nbt_a_4__8 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.4_8';

        this.ns = new NameSampler();

        this.tens        = Math.floor((Math.random()*9)+1);
        this.ones        = Math.floor((Math.random()*8)+1);
        this.tenths      = Math.floor((Math.random()*9)+1);
        this.hundreths   = Math.floor((Math.random()*9)+1);
        this.thousandths = Math.floor((Math.random()*5)+5);
        this.tenths_hundreths_thousandths = parseInt(this.tenths * 100 + this.hundreths * 10 + this.thousandths);

	this.setQuestion('Round to the nearest tenth: ' + this.tens + this.ones + '.' + this.tenths_hundreths_thousandths);                     
	this.tenths = parseInt(this.tenths);

	var answer = 0;
	if (this.hundreths > 4)
	{
		this.tenths = parseInt(this.tenths);
		this.tenths++;
	}
		
	answer = parseInt(this.tens * 10 + this.ones);		
	answer = '' + answer + '.' + this.tenths; 
        	
	this.setAnswer('' + answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.4_7',5.0807,'5.nbt.a.4','estimate then find perimeter');
*/
var i_5_nbt_a_4__7 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.4_7';

        this.ns = new NameSampler();

        this.ones_a        = Math.floor((Math.random()*7)+2);
        this.tenths_a      = Math.floor((Math.random()*9)+1);
        this.hundreths_a   = Math.floor((Math.random()*9)+1);
        this.tenths_hundreths_a = parseInt(this.tenths_a * 10 + this.hundreths_a);
        
        this.ones_b        = Math.floor((Math.random()*7)+2);
        this.tenths_b      = Math.floor((Math.random()*9)+1);
        this.hundreths_b   = Math.floor((Math.random()*9)+1);
        this.tenths_hundreths_b = parseInt(this.tenths_b * 10 + this.hundreths_b);

	this.setQuestion('The length of a rectangular field is ' + this.ones_a + '.' + this.tenths_hundreths_a + ' yards and the width is ' + this.ones_b + '.' + this.tenths_hundreths_b + ' yards. Round both amounts to the nearest whole number then calculate the perimeter of the field.');                     
	
	this.tenths_a = parseInt(this.tenths_a);
	if (this.tenths_a > 4)
	{
		this.ones_a = parseInt(this.ones_a);
		this.ones_a++;
	}
	this.tenths_b = parseInt(this.tenths_b);
	if (this.tenths_b > 4)
	{
		this.ones_b = parseInt(this.ones_b);
		this.ones_b++;
	}
		
	var answer_a = parseInt(this.ones_a);		
	var answer_b = parseInt(this.ones_b);		
	var answer = parseInt(answer_a * 2 + answer_b * 2);
        	
	this.setAnswer('' + answer,0);
	this.setAnswer('' + answer + ' yards',1);
	this.setAnswer('' + answer + ' yds',2);
	this.setAnswer('' + answer + ' yards.',3);
	this.setAnswer('' + answer + ' yds.',4);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.4_6',5.0806,'5.nbt.a.4','estimate then find area');
*/
var i_5_nbt_a_4__6 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.4_6';

        this.ns = new NameSampler();

        this.ones_a        = Math.floor((Math.random()*7)+2);
        this.tenths_a      = Math.floor((Math.random()*9)+1);
        this.hundreths_a   = Math.floor((Math.random()*9)+1);
        this.tenths_hundreths_a = parseInt(this.tenths_a * 10 + this.hundreths_a);
        
        this.ones_b        = Math.floor((Math.random()*7)+2);
        this.tenths_b      = Math.floor((Math.random()*9)+1);
        this.hundreths_b   = Math.floor((Math.random()*9)+1);
        this.tenths_hundreths_b = parseInt(this.tenths_b * 10 + this.hundreths_b);

	this.setQuestion('The length of a rectangular field is ' + this.ones_a + '.' + this.tenths_hundreths_a + ' yards and the width is ' + this.ones_b + '.' + this.tenths_hundreths_b + ' yards. Round both amounts to the nearest whole number then calculate the area of the field.');                     
	
	this.tenths_a = parseInt(this.tenths_a);
	if (this.tenths_a > 4)
	{
		this.ones_a = parseInt(this.ones_a);
		this.ones_a++;
	}
	this.tenths_b = parseInt(this.tenths_b);
	if (this.tenths_b > 4)
	{
		this.ones_b = parseInt(this.ones_b);
		this.ones_b++;
	}
		
	var answer_a = parseInt(this.ones_a);		
	var answer_b = parseInt(this.ones_b);		
	var answer = parseInt(answer_a * answer_b);
        	
	this.setAnswer('' + answer,0);
	this.setAnswer('' + answer + ' square yards',1);
	this.setAnswer('' + answer + ' sq yds',2);
	this.setAnswer('' + answer + ' sq yd',3);
	this.setAnswer('' + answer + ' square yards.',4);
	this.setAnswer('' + answer + ' sq yds.',5);
	this.setAnswer('' + answer + ' sq yd.',6);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.4_5',5.0805,'5.nbt.a.4','round then add');
*/
var i_5_nbt_a_4__5 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.4_5';

        this.ns = new NameSampler();

        this.tens_a        = Math.floor((Math.random()*9)+1);
        this.ones_a        = Math.floor((Math.random()*8)+1);
        this.tenths_a      = Math.floor((Math.random()*9)+1);
        this.hundreths_a   = Math.floor((Math.random()*9)+1);
        this.tenths_hundreths_a = parseInt(this.tenths_a * 10 + this.hundreths_a);
        
	this.tens_b        = Math.floor((Math.random()*9)+1);
        this.ones_b        = Math.floor((Math.random()*8)+1);
        this.tenths_b      = Math.floor((Math.random()*9)+1);
        this.hundreths_b   = Math.floor((Math.random()*9)+1);
        this.tenths_hundreths_b = parseInt(this.tenths_b * 10 + this.hundreths_b);

	this.setQuestion('' + this.ns.mNameOne + ' bought ' + this.ns.mFruitOne + ' for $' + this.tens_a + this.ones_a + '.' + this.tenths_hundreths_a + ' and ' + this.ns.mFruitTwo + ' for $' + this.tens_b + this.ones_b + '.' + this.tenths_hundreths_b + '. Round both amounts to the nearest dollar then add them to find the estimated total.');                     
	
	this.tenths_a = parseInt(this.tenths_a);
	if (this.tenths_a > 4)
	{
		this.ones_a = parseInt(this.ones_a);
		this.ones_a++;
	}
	this.tenths_b = parseInt(this.tenths_b);
	if (this.tenths_b > 4)
	{
		this.ones_b = parseInt(this.ones_b);
		this.ones_b++;
	}
		
	var answer_a = parseInt(this.tens_a * 10 + this.ones_a);		
	var answer_b = parseInt(this.tens_b * 10 + this.ones_b);		
	var answer = parseInt(answer_a + answer_b);
        	
	this.setAnswer('$' + answer,0);
	this.setAnswer('' + answer,1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.4_4',5.0804,'5.nbt.a.4','nines round to tenths ');
*/
var i_5_nbt_a_4__4 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.4_4';

        this.ns = new NameSampler();

        this.tens        = Math.floor((Math.random()*9)+1);
        this.ones        = Math.floor((Math.random()*8)+1);
        this.tenths      = Math.floor((Math.random()*9)+1);
        this.hundreths   = Math.floor((Math.random()*9)+1);
        this.thousandths = Math.floor((Math.random()*5)+5);
        this.tenths_hundreths_thousandths = parseInt(this.tenths * 100 + this.hundreths * 10 + this.thousandths);

	this.setQuestion('' + this.ns.mNameOne + ' shot a toy rocket ' + this.tens + this.ones + '.' + this.tenths_hundreths_thousandths + ' feet into the air. Round the distance to the nearest tenth of a foot.');                     
	
	this.tenths = parseInt(this.tenths);

	var answer = 0;
	if (this.hundreths > 4)
	{
		this.tenths = parseInt(this.tenths);
		this.tenths++;
	}
		
	answer = parseInt(this.tens * 10 + this.ones);		
	answer = '' + answer + '.' + this.tenths; 
        	
	this.setAnswer('' + answer,0);
	this.setAnswer('' + answer + ' feet',1);
	this.setAnswer('' + answer + ' feet.',2);
	this.setAnswer('' + answer + ' ft',3);
	this.setAnswer('' + answer + ' ft.',4);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.4_3',5.0803,'5.nbt.a.4','no nines round to tenths ');
*/
var i_5_nbt_a_4__3 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.4_3';

        this.ns = new NameSampler();

        this.tens        = Math.floor((Math.random()*9)+1);
        this.ones        = Math.floor((Math.random()*8)+1);
        this.tenths      = Math.floor((Math.random()*9)+1);
        this.hundreths   = Math.floor((Math.random()*9)+1);
        this.thousandths = Math.floor((Math.random()*5)+5);
        this.tenths_hundreths_thousandths = parseInt(this.tenths * 100 + this.hundreths * 10 + this.thousandths);

	this.setQuestion('' + this.ns.mNameOne + ' ran a 100 yard dash race. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,1) + ' time was ' + this.tens + this.ones + '.' + this.tenths_hundreths_thousandths + ' seconds. Round ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' time to the nearest tenth of a second.');                     
	

	this.tenths = parseInt(this.tenths);

	var answer = 0;
	if (this.hundreths > 4)
	{
		this.tenths = parseInt(this.tenths);
		this.tenths++;
	}
		
	answer = parseInt(this.tens * 10 + this.ones);		
	answer = '' + answer + '.' + this.tenths; 
        	
	this.setAnswer('' + answer,0);
	this.setAnswer('' + answer + ' seconds',1);
	this.setAnswer('' + answer + ' seconds.',2);
	this.setAnswer('' + answer + ' s',3);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.4_2',5.0802,'5.nbt.a.4','with nines. round to ones');
*/
var i_5_nbt_a_4__2 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.4_2';

        this.ns = new NameSampler();

        this.tens        = Math.floor((Math.random()*9)+1);
        this.ones        = 9;
        this.tenths      = Math.floor((Math.random()*5)+5);
        this.hundreths   = Math.floor((Math.random()*9)+1);
        this.thousandths = Math.floor((Math.random()*5)+5);
        this.tenths_hundreths_thousandths = parseInt(this.tenths * 100 + this.hundreths * 10 + this.thousandths);

        this.setQuestion('' + this.ns.mNameOne + ' measured some ' + this.ns.mThingOne  + '. The length was ' + this.tens + this.ones + '.' + this.tenths_hundreths_thousandths + ' inches. Round the total to the nearest inch.',0);

        this.ones = 0;
	this.tens = parseInt(this.tens);
	this.tens++;

        answer = parseInt(this.tens * 10 + this.ones);

        this.setAnswer('' + answer,0);
        this.setAnswer('' + answer + ' inches',1);
        this.setAnswer('' + answer + ' inches.',2);
        this.setAnswer('' + answer + ' in',3);
        this.setAnswer('' + answer + ' in.',4);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.4_1',5.0801,'5.nbt.a.4','no nines, round to ones');
*/
var i_5_nbt_a_4__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.4_1';

        this.ns = new NameSampler();

        this.tens        = Math.floor((Math.random()*9)+1);
        this.ones        = Math.floor((Math.random()*8)+1);
        this.tenths      = Math.floor((Math.random()*9)+1);
        this.hundreths   = Math.floor((Math.random()*9)+1);
        this.thousandths = Math.floor((Math.random()*5)+5);
        this.tenths_hundreths_thousandths = parseInt(this.tenths * 100 + this.hundreths * 10 + this.thousandths);

        this.setQuestion('' + this.ns.mNameOne + ' weighed some ' + this.ns.mThingOne  + '. The scale read ' + this.tens + this.ones + '.' + this.tenths_hundreths_thousandths + ' grams. Round the total to the nearest gram.',0);

	this.tenths = parseInt(this.tenths);

	var answer = 0;
	if (this.tenths > 4)
	{
		this.ones = parseInt(this.ones);
		this.ones++;
	}
		
	answer = parseInt(this.tens * 10 + this.ones);		
        	
	this.setAnswer('' + answer,0);
	this.setAnswer('' + answer + ' grams',1);
	this.setAnswer('' + answer + ' grams.',2);
	this.setAnswer('' + answer + ' g',3);
}
});


