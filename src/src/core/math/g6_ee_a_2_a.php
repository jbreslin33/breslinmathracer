
/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2.a_8',6.2508,'6.ee.a.2.a','');
*/
var i_6_ee_a_2_a__8 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2.a_8';
        this.ns = new NameSampler();

	var n = this.ns.mLowerLetterOne;
	var m = this.ns.mLowerLetterTwo;

        this.setQuestion('' + 'Write an expression that represents ' + n + ' decreased by ' + m + '.');

        this.setAnswer('' + n + '-' + m ,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2.a_7',6.2507,'6.ee.a.2.a','');
*/
var i_6_ee_a_2_a__7 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2.a_7';
        this.ns = new NameSampler();

        var x = Math.floor(Math.random()*8)+2;
	var n = this.ns.mLowerLetterOne;

        this.setQuestion('' + 'Write an expression that represents ' + n + ' divided by ' + x + '.');

        this.setAnswer('' + n + '/' + x ,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2.a_6',6.2506,'6.ee.a.2.a','');
*/
var i_6_ee_a_2_a__6 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2.a_6';
        this.ns = new NameSampler();

        var x = Math.floor(Math.random()*8)+2;
	var n = this.ns.mLowerLetterOne;

        this.setQuestion('' + 'Write an expression that represents sum of ' + n + ' and ' + x + '.');

        this.setAnswer('' + n + '+' + x ,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2.a_5',6.2505,'6.ee.a.2.a','');
*/
var i_6_ee_a_2_a__5 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2.a_5';
        this.ns = new NameSampler();

        var x = Math.floor(Math.random()*8)+2;
	var n = this.ns.mLowerLetterOne;

        this.setQuestion('' + 'Write an expression that represents a number plus ' + x + '. Let ' + n + ' = number.'  );

        this.setAnswer('' + n + '+' + x ,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2.a_4',6.2504,'6.ee.a.2.a','');
*/
var i_6_ee_a_2_a__4 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2.a_4';
        this.ns = new NameSampler();

        var x = Math.floor(Math.random()*8)+2;
	var n = this.ns.mLowerLetterOne;

        this.setQuestion('' + 'Write an expression that represents a number minus ' + x + '. Let ' + n + ' = number.'  );

        this.setAnswer('' + n + '-' + x ,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2.a_3',6.2503,'6.ee.a.2.a','');
*/
var i_6_ee_a_2_a__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2.a_3';
        this.ns = new NameSampler();

        var x = Math.floor(Math.random()*8)+2;
	var n = this.ns.mLowerLetterOne;

        this.setQuestion('' + 'Write an expression that represents the sum of a number and ' + x + '. Let ' + n + ' = number.'  );

        this.setAnswer('' + n + '+' + x ,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2.a_2',6.2502,'6.ee.a.2.a','');
*/
var i_6_ee_a_2_a__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2.a_2';
        this.ns = new NameSampler();

        var x = Math.floor(Math.random()*8)+2;
	var n = this.ns.mLowerLetterOne;

        this.setQuestion('' + 'Write an expression that represents the product of a number and ' + x + '. Let ' + n + ' = number.'  );

        this.setAnswer('' + x + '' + n ,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2.a_1',6.2501,'6.ee.a.2.a','');
*/
var i_6_ee_a_2_a__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2.a_1';
        this.ns = new NameSampler();

        var x = Math.floor(Math.random()*8)+2;
	var n = this.ns.mLowerLetterOne;

        this.setQuestion('' + 'Write an expression that represents the quotient of a number and ' + x + '. Let ' + n + ' = number.'  );

        this.setAnswer('' + n + '/' + x ,0);
}
});

