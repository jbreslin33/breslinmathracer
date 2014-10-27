
/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_7',5.0507,'5.nbt.a.2','');
*/
var i_5_nbt_a_2__7 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95, 300,50,525,100);

        this.mType = '5.nbt.a.2_7';

        this.ones = Math.floor(Math.random()*9)+1;
        this.tenths = Math.floor(Math.random()*9)+1;
        this.hundreths = Math.floor(Math.random()*9)+1;
        this.thousandths = Math.floor(Math.random()*9)+1;

        this.mBase = 10;
        this.mExponent = Math.floor(Math.random()*9)+1;

        this.setQuestion('Find the qoutient: ' + this.ones + '.' + this.tenths + this.hundreths + this.thousandths + ' &divide ' + this.mBase + '<sup>' + this.mExponent + '</sup>');

        var multiplier = 1;
        for (i=0; i < parseInt(this.mExponent); i++)
        {
                multiplier = multiplier * 10;
        }

        var number = parseFloat(this.ones + '.' + this.tenths + this.hundreths + this.thousandths);
        var answer = number / multiplier;

        this.setAnswer('' + answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_6',5.0506,'5.nbt.a.2','');
*/
var i_5_nbt_a_2__6 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95, 300,50,525,100);

        this.mType = '5.nbt.a.2_6';

        this.ones = Math.floor(Math.random()*9)+1;
        this.tenths = Math.floor(Math.random()*9)+1;
        this.hundreths = Math.floor(Math.random()*9)+1;
        this.thousandths = Math.floor(Math.random()*9)+1;

        this.mBase = 10;
        this.mExponent = Math.floor(Math.random()*9)+1;

        this.setQuestion('Find the product: ' + this.ones + '.' + this.tenths + this.hundreths + this.thousandths + ' x ' + this.mBase + '<sup>' + this.mExponent + '</sup>');

	var multiplier = 1; 
        for (i=0; i < parseInt(this.mExponent); i++)
	{
		multiplier = multiplier * 10;	
	}

	var number = parseFloat(this.ones + '.' + this.tenths + this.hundreths + this.thousandths);
	var answer = multiplier * number;	 

        this.setAnswer('' + answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_5',5.0505,'5.nbt.a.2','');
*/
var i_5_nbt_a_2__5 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95, 300,50,525,100);

        this.mType = '5.nbt.a.2_5';

        this.mBase = 10;
        this.mExponent = Math.floor(Math.random()*9)+1;

        this.setQuestion('Write the following the way you would say it words: ' + this.mBase + '<sup>' + this.mExponent + '</sup>');

	
	var power = '';

	if (this.mExponent == 0)
	{
		power = 'zero';
	}
	if (this.mExponent == 1)
	{
		power = 'first';
	}
	if (this.mExponent == 2)
	{
		power = 'second';
	}
	if (this.mExponent == 3)
	{
		power = 'third';
	}
	if (this.mExponent == 4)
	{
		power = 'fourth';
	}
	if (this.mExponent == 5)
	{
		power = 'fifth';
	}
	if (this.mExponent == 6)
	{
		power = 'sixth';
	}
	if (this.mExponent == 7)
	{
		power = 'seventh';
	}
	if (this.mExponent == 8)
	{
		power = 'eigth';
	}
	if (this.mExponent == 9)
	{
		power = 'ninth';
	}
	if (this.mExponent == 10)
	{
		power = 'tenth';
	}

        answer = 'ten to the ' + power + ' power';

        this.setAnswer('' + answer,0);
        this.setAnswer('' + answer + '.',1);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_4',5.0504,'5.nbt.a.2','');
*/
var i_5_nbt_a_2__4 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95, 300,50,525,100);

        this.mType = '5.nbt.a.2_4';

        this.mBase = 10;
        this.mExponent = Math.floor(Math.random()*9)+1;

        this.setQuestion('Find the product: ' + this.mBase + '<sup>' + this.mExponent + '</sup>');

        var answer = 1;
        for (i=0; i < parseInt(this.mExponent); i++)
        {
                answer = answer * 10;
        }

        this.setAnswer('' + answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_3',5.0503,'5.nbt.a.2','');
*/
var i_5_nbt_a_2__3 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95, 300,50,525,100);

        this.mType = '5.nbt.a.2_3';

        this.ones = Math.floor(Math.random()*9)+1;
        this.tenths = Math.floor(Math.random()*9)+1;
        this.hundreths = Math.floor(Math.random()*9)+1;

        this.mBase = 10;
        this.mExponent = Math.floor(Math.random()*9)+1;

        this.setQuestion('Find the qoutient: ' + this.ones + '.' + this.tenths + this.hundreths + ' &divide ' + this.mBase + '<sup>' + this.mExponent + '</sup>');

        var multiplier = 1;
        for (i=0; i < parseInt(this.mExponent); i++)
        {
                multiplier = multiplier * 10;
        }

        var number = parseFloat(this.ones + '.' + this.tenths + this.hundreths);
        var answer = number / multiplier;

        this.setAnswer('' + answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_2',5.0502,'5.nbt.a.2','');
*/
var i_5_nbt_a_2__2 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95, 300,50,525,100);

        this.mType = '5.nbt.a.2_2';

        this.ones = Math.floor(Math.random()*9)+1;
        this.tenths = Math.floor(Math.random()*9)+1;
        this.hundreths = Math.floor(Math.random()*9)+1;

        this.mBase = 10;
        this.mExponent = Math.floor(Math.random()*9)+1;

        this.setQuestion('Find the product: ' + this.ones + '.' + this.tenths + this.hundreths + ' x ' + this.mBase + '<sup>' + this.mExponent + '</sup>');

	var multiplier = 1; 
        for (i=0; i < parseInt(this.mExponent); i++)
	{
		multiplier = multiplier * 10;	
	}

	var number = parseFloat(this.ones + '.' + this.tenths + this.hundreths);
	var answer = multiplier * number;	 

        this.setAnswer('' + answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_1',5.0501,'5.nbt.a.2','');
*/
var i_5_nbt_a_2__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
  	this.parent(sheet,300,50,175,95, 300,50,525,100);

        this.mType = '5.nbt.a.2_1';

	this.mBase = 10;
	this.mExponent = Math.floor(Math.random()*9)+1;

	this.setQuestion(this.mBase + '<sup>' + this.mExponent + '</sup>' + ' is a power of 10. Write an equivalent mulitiplication expression using only tens.');

	var answerOne = '10';	
	for (i=1; i < parseInt(this.mExponent); i++)
	{
		var str = 'x10'; 
		answerOne = answerOne.concat(str);
	}
        
	var answerTwo = '10';	
	for (i=1; i < parseInt(this.mExponent); i++)
	{
		var str = '*10'; 
		answerTwo = answerTwo.concat(str);
	}
        
	this.setAnswer('' + answerOne,0);
	this.setAnswer('' + answerTwo,1);
}
});
