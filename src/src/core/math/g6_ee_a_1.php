
/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.1_10',6.2309,'6.ee.a.1','');
*/
var i_6_ee_a_1__10 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.1_10';
	this.nm = new NameMachine();

        var x = Math.floor(Math.random()*8)+2;

        this.setQuestion('' + 'Write an expression using an exponent that can be used to solve the area of a square with side lenghts of ' + x + '. Use ^ before exponent. Example c squared is written: c^2'  );

        this.setAnswer('' + x + '^2',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.1_9',6.2309,'6.ee.a.1','');
*/
var i_6_ee_a_1__9 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.1_9';
	this.nm = new NameMachine();

        var x = Math.floor(Math.random()*8)+2;
	var a = '' + this.nm.mLowerLetterArray[x] + '^2';

        this.setQuestion('' + 'Write ' + this.nm.mLowerLetterArray[x] + ' squared. Use ^ before exponent. Example c squared is written: c^2'  );

        this.setAnswer('' + a,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.1_8',6.2308,'6.ee.a.1','');
*/
var i_6_ee_a_1__8 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.1_8';
	this.nm = new NameMachine();

        var x = Math.floor(Math.random()*8)+2;
        var y = 2;
	var a = Math.pow(x,y);

        this.setQuestion('' + 'What is the value of ' + x + ' squared?');

        this.setAnswer('' + a,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.1_7',6.2307,'6.ee.a.1','');
*/
var i_6_ee_a_1__7 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.1_7';
	this.nm = new NameMachine();

        var x = Math.floor(Math.random()*8)+2;
	var a = '' + x + '^2';

        this.setQuestion('' + 'Write ' + x + ' squared. Use ^ before exponent. Example 3 squared is written: 3^2'  );

        this.setAnswer('' + a,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.1_6',6.2306,'6.ee.a.1','');
*/
var i_6_ee_a_1__6 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.1_6';
	this.nm = new NameMachine();

        var x = Math.floor(Math.random()*8)+2;
        var y = Math.floor(Math.random()*8)+2;
	var a = Math.pow(x,y);

        this.setQuestion('' + 'What is the value of ' + x + '<sup>' + y + '</sup>' + '?' );

        this.setAnswer('' + a,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.1_5',6.2305,'6.ee.a.1','');
*/
var i_6_ee_a_1__5 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.1_5';
	this.nm = new NameMachine();

        var x = Math.floor(Math.random()*8)+2;
        var y = Math.floor(Math.random()*8)+2;

        this.setQuestion('' + 'What is a multiplication expression equivalent to ' + x + '<sup>' + y + '</sup>' + '?' );

	var a = '' + x;	
	var b = '' + x;	
	var c = '' + x;	

	for (i = 1; i < y; i++)
	{
		a = a + '*' + x;   	
	}
	for (i = 1; i < y; i++)
	{
		b = b + 'x' + x;   	
	}	

        this.setAnswer('' + a,0);
        this.setAnswer('' + b,1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.1_4',6.2304,'6.ee.a.1','');
*/
var i_6_ee_a_1__4 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.1_4';
	this.nm = new NameMachine();

        var x = 0;
        var y = 0;
	while (x == y)
	{
        	var x = Math.floor(Math.random()*26);
        	var y = Math.floor(Math.random()*26);
	}

        this.setQuestion('' + 'In the expression ' + this.nm.mLowerLetterArray[x] + '<sup>' + this.nm.mLowerLetterArray[y] + '</sup>' + ' what is the base?');
        this.setAnswer('' + this.nm.mLowerLetterArray[x],0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.1_3',6.2303,'6.ee.a.1','');
*/
var i_6_ee_a_1__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.1_3';
	this.nm = new NameMachine();

        var x = 0;
        var y = 0;
	while (x == y)
	{
        	var x = Math.floor(Math.random()*26);
        	var y = Math.floor(Math.random()*26);
	}

        this.setQuestion('' + 'In the expression ' + this.nm.mLowerLetterArray[x] + '<sup>' + this.nm.mLowerLetterArray[y] + '</sup>' + ' what is the exponent?');
        this.setAnswer('' + this.nm.mLowerLetterArray[y],0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.1_2',6.2302,'6.ee.a.1','');
*/
var i_6_ee_a_1__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.1_2';

        var x = Math.floor(Math.random()*9)+1;
        var y = Math.floor(Math.random()*8)+2;

        this.setQuestion('' + 'In the expression ' + x + '<sup>' + y + '</sup>' + ' what is the exponent?');
        this.setAnswer('' + y,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.1_1',6.2301,'6.ee.a.1','');
*/
var i_6_ee_a_1__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.1_1';

        var x = Math.floor(Math.random()*9)+1;
        var y = Math.floor(Math.random()*8)+2;

        this.setQuestion('' + 'In the expression ' + x + '<sup>' + y + '</sup>' + ' what is the base?');
        this.setAnswer('' + x,0);
}
});

