/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2_b_1',6.2501,'6.ee.a.2.b','');
*/
var i_6_ee_a_2_b__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2_b_1';

        this.setQuestion('' + 'Use the list below to fill in the blank so that the sentence describes 4n + 5</br></br> ' + '4n + 5 is a(an) _______ ' + '</br></br> coefficient</br>constant</br>expression</br>terms</br>variable');
        this.setAnswer('expression',0);

this.mCorrectAnswerLabel.setPosition(530,300);
this.mUserAnswerLabel.setPosition(230,300);

}
});



/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2_b_2',6.2502,'6.ee.a.2.b','');
*/
var i_6_ee_a_2_b__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2_b_2';

        this.setQuestion('' + 'Use the list below to fill in the blank so that the sentence describes 4n + 5</br></br> ' + 'The _______ are 4n and 5' + '</br></br> coefficient</br>constant</br>expression</br>terms</br>variable');
        this.setAnswer('terms',0);

this.mCorrectAnswerLabel.setPosition(530,300);
this.mUserAnswerLabel.setPosition(230,300);

}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2_b_3',6.2503,'6.ee.a.2.b','');
*/
var i_6_ee_a_2_b__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2_b_3';

        this.setQuestion('' + 'Use the list below to fill in the blank so that the sentence describes 4n + 5</br></br> ' + 'The _______ of n is 4' + '</br></br> coefficient</br>constant</br>expression</br>terms</br>variable');
        this.setAnswer('coefficient',0);

this.mCorrectAnswerLabel.setPosition(530,300);
this.mUserAnswerLabel.setPosition(230,300);

}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2_b_4',6.2504,'6.ee.a.2.b','');
*/
var i_6_ee_a_2_b__4 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2_b_4';

        this.setQuestion('' + 'Use the list below to fill in the blank so that the sentence describes 4n + 5</br></br> ' + 'The letter n is a(an) _______ ' + '</br></br> coefficient</br>constant</br>expression</br>terms</br>variable');
        this.setAnswer('variable',0);

this.mCorrectAnswerLabel.setPosition(530,300);
this.mUserAnswerLabel.setPosition(230,300);

}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2_b_5',6.2505,'6.ee.a.2.b','');
*/
var i_6_ee_a_2_b__5 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2_b_5';

        this.setQuestion('' + 'Use the list below to fill in the blank so that the sentence describes 4n + 5</br></br> ' + 'The number 6 is a(an) _______ ' + '</br></br> coefficient</br>constant</br>expression</br>terms</br>variable');
        this.setAnswer('constant',0);

this.mCorrectAnswerLabel.setPosition(530,300);
this.mUserAnswerLabel.setPosition(230,300);

}
});



/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2_b_6',6.2506,'6.ee.a.2.b','');
*/
var i_6_ee_a_2_b__6 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2_b_6';

        var bn = 5;
        var bd = 8;

        var fractionA = new Fraction(bn,bd,false);
        //var fractionB = new Fraction(an,ad,false);

        //var answer = fractionA.divide(fractionB);
	//answer.reduce();

        var term = ['6r','-8m','xyz', fractionA.getString() + 't'];
        var coef = ['6', '-8', '1', '5/8'];

        var i = Math.floor(Math.random()*4);

        this.setQuestion('' + 'Identify the coefficient in this term:</br></br> ' + '' + term[i]);
        this.setAnswer('' + coef[i],0);

this.mCorrectAnswerLabel.setPosition(530,300);
this.mUserAnswerLabel.setPosition(230,300);

}
});
