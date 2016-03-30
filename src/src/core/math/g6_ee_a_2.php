

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2_7',6.2507,'6.ee.a.2','');
*/
var i_6_ee_a_2__7 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2_7';
        this.ns = new NameSampler();

        var x = Math.floor(Math.random()*8)+2;
	var n = this.ns.mLowerLetterOne;

        this.setQuestion('' + 'Write an expression that represents ' + n + ' divided by ' + x + '.');

        this.setAnswer('' + n + '/' + x ,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2_6',6.2506,'6.ee.a.2','');
*/
var i_6_ee_a_2__6 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2_6';
        this.ns = new NameSampler();

        var x = Math.floor(Math.random()*8)+2;
	var n = this.ns.mLowerLetterOne;

        this.setQuestion('' + 'Write an expression that represents sum of ' + n + ' and ' + x + '.');

        this.setAnswer('' + n + '+' + x ,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2_5',6.2505,'6.ee.a.2','');
*/
var i_6_ee_a_2__5 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2_5';
        this.ns = new NameSampler();

        var x = Math.floor(Math.random()*8)+2;
	var n = this.ns.mLowerLetterOne;

        this.setQuestion('' + 'Write an expression that represents a number plus ' + x + '. Let ' + n + ' = number.'  );

        this.setAnswer('' + n + '+' + x ,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2_4',6.2504,'6.ee.a.2','');
*/
var i_6_ee_a_2__4 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2_4';
        this.ns = new NameSampler();

        var x = Math.floor(Math.random()*8)+2;
	var n = this.ns.mLowerLetterOne;

        this.setQuestion('' + 'Write an expression that represents a number minus ' + x + '. Let ' + n + ' = number.'  );

        this.setAnswer('' + n + '-' + x ,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2_3',6.2503,'6.ee.a.2','');
*/
var i_6_ee_a_2__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2_3';
        this.ns = new NameSampler();

        var x = Math.floor(Math.random()*8)+2;
	var n = this.ns.mLowerLetterOne;

        this.setQuestion('' + 'Write an expression that represents the sum of a number and ' + x + '. Let ' + n + ' = number.'  );

        this.setAnswer('' + n + '+' + x ,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2_2',6.2502,'6.ee.a.2','');
*/
var i_6_ee_a_2__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2_2';
        this.ns = new NameSampler();

        var x = Math.floor(Math.random()*8)+2;
	var n = this.ns.mLowerLetterOne;

        this.setQuestion('' + 'Write an expression that represents the product of a number and ' + x + '. Let ' + n + ' = number.'  );

        this.setAnswer('' + x + '' + n ,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2_1',6.2501,'6.ee.a.2','');
*/
var i_6_ee_a_2__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2_1';
        this.ns = new NameSampler();

        var x = Math.floor(Math.random()*8)+2;
	var n = this.ns.mLowerLetterOne;

        this.setQuestion('' + 'Write an expression that represents the quotient of a number and ' + x + '. Let ' + n + ' = number.'  );

        this.setAnswer('' + n + '/' + x ,0);
}
});

