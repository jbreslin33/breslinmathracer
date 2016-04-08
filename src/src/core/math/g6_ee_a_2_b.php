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
       
        var term = ['6r','-8m','xyz', fractionA.getString() + 't'];
        var coef = ['6', '-8', '1', '5/8'];

        var i = Math.floor(Math.random()*4);

        this.setQuestion('' + 'Identify the coefficient in this term:</br></br> ' + '' + term[i]);
        this.setAnswer('' + coef[i],0);

this.mCorrectAnswerLabel.setPosition(530,300);
this.mUserAnswerLabel.setPosition(230,300);

}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2_b_7',6.2507,'6.ee.a.2.b','');
*/
var i_6_ee_a_2_b__7 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2_b_7';

        var bn = 2;
        var bd = 5;

        var fractionA = new Fraction(bn,bd,false);
       
        var term = ['-4n','-9n','n', fractionA.getString() + 'n'];
        var coef = ['-4', '-9', '1', '2/5'];

        var i = Math.floor(Math.random()*4);

        var term2 = ['8r','6m','3b', '7t'];
       
        this.setQuestion('' + 'Identify the coefficient of n in this expression:</br></br> ' + '' + term[i] + ' + ' + term2[i]);
        this.setAnswer('' + coef[i],0);

this.mCorrectAnswerLabel.setPosition(530,300);
this.mUserAnswerLabel.setPosition(230,300);

}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2_b_8',6.2508,'6.ee.a.2.b','');
*/
var i_6_ee_a_2_b__8 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2_b_8';

        var bn = 2;
        var bd = 5;

        var fractionA = new Fraction(bn,bd,false);
       
        var term = ['7r', '-4n + 6t', '9n +8f + 5d', fractionA.getString() + 'n + 2 + 7v + 5y', '(4n - 2)(6 - 2b)(7m + 3r)', '6(d + 3) + (7v - 9)', '(6 + 8f) + 8(3c + 4) + 2(9 - 7a)'];
        var answer = ['1', '2', '3', '4', '1', '2', '3'];

        var i = Math.floor(Math.random()*7);

        //var term2 = ['8r','6m','3b', '7t'];
       
        this.setQuestion('' + 'This expression has how many terms?</br></br> ' + '' + term[i]);
        this.setAnswer('' + answer[i],0);

this.mCorrectAnswerLabel.setPosition(530,300);
this.mUserAnswerLabel.setPosition(230,300);

}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2_b_9',6.2509,'6.ee.a.2.b','');
*/
var i_6_ee_a_2_b__9 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2_b_9';

        var a = Math.floor(Math.random()*11+2);
        var b = Math.floor(Math.random()*11+2);
        var c = Math.floor(Math.random()*11+2);

        this.setQuestion('' + a + '(' + b + ' + ' + c + ') = ' + a*b + ' + ___');
        this.setAnswer('' + a*c,0);

this.mCorrectAnswerLabel.setPosition(530,300);
this.mUserAnswerLabel.setPosition(230,300);

}
});



/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2_b_10',6.2510,'6.ee.a.2.b','');
*/
var i_6_ee_a_2_b__10 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '6.ee.a.2_b_10';

                this.mStripCommas = false;
                this.mChopWhiteSpace = false;        

                this.mButtonA.setPosition(330,200);
                this.mButtonB.setPosition(330,260);
                this.mButtonC.setPosition(330,320);

                this.mButtonA.setSize(200,50);
                this.mButtonB.setSize(200,50);
                this.mButtonC.setSize(200,50);

        var r = Math.floor(Math.random()*3);

        if (r == 0)
        {
                this.setQuestion('A rectangle has width = a and length = b. Click the expression that gives the perimeter of the rectangle using 1 term.');

                this.setAnswer('2(a + b)',0);

                this.mButtonA.setAnswer('a + b + a + b');
                this.mButtonB.setAnswer('2(a + b)');
                this.mButtonC.setAnswer('2a + 2b');
        }
        if (r == 1)
        {
                this.setQuestion('A rectangle has width = a and length = b. Click the expression that gives the perimeter of the rectangle using 2 terms.');

                this.setAnswer('2a + 2b',0);

                this.mButtonA.setAnswer('a + b + a + b');
                this.mButtonB.setAnswer('2(a + b)');
                this.mButtonC.setAnswer('2a + 2b');
        }
        if (r == 2)
        {
                this.setQuestion('A rectangle has width = a and length = b. Click the expression that gives the perimeter of the rectangle using 4 terms.');

                this.setAnswer('a + b + a + b',0);

                this.mButtonA.setAnswer('a + b + a + b');
                this.mButtonB.setAnswer('2(a + b)');
                this.mButtonC.setAnswer('2a + 2b');
        }
}
});
