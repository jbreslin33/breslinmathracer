/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.3_1',6.2801,'6.ee.a.3','');
*/
var i_6_ee_a_3__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.3_1';

        var a = Math.floor(Math.random()*11+2);
        var b = Math.floor(Math.random()*11+2);
        var c = Math.floor(Math.random()*11+2);

        this.setQuestion('' + a + '(b' + ' + ' + c + ') written without parentheses is equal to ');

        var answer =  '' + a + 'b' + '+' + a*c;
        this.setAnswer(answer,0);

this.mCorrectAnswerLabel.setPosition(530,300);
this.mUserAnswerLabel.setPosition(230,300);

}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.3_2',6.2802,'6.ee.a.3','');
*/
var i_6_ee_a_3__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.3_2';

        var a = 1;
        var b = 2; //Math.floor(Math.random()*3+2);
        var c = Math.floor(Math.random()*4+1)*2;
       
        var fractionA = new Fraction(a,b,false);             

        this.setQuestion('' + fractionA.getString() + '(b' + ' - ' + c + ') written without parentheses is equal to ');

        var answer =  '' + '1/2' + 'b' + '-' + c/2;
        this.setAnswer(answer,0);

this.mCorrectAnswerLabel.setPosition(530,300);
this.mUserAnswerLabel.setPosition(230,300);

}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.3_3',6.2803,'6.ee.a.3','');
*/
var i_6_ee_a_3__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.3_3';

        var a = 1;
        var b = 2; //Math.floor(Math.random()*3+2);
        var c = Math.floor(Math.random()*4+1)*2;
      
        var fractionA = new Fraction(a,b,false);   
          
        this.setQuestion('' + '1/2' + 'b' + ' - ' + c/2 + ' written with parentheses is equal to ');

        var answer =  '' + '1/2' + '(b' + '-' + c + ')';

        this.setAnswer(answer,0);

this.mCorrectAnswerLabel.setPosition(530,300);
this.mUserAnswerLabel.setPosition(230,300);

}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.3_4',6.2804,'6.ee.a.3','');
*/
var i_6_ee_a_3__4 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.3_4';

        var a = Math.floor(Math.random()*11+2);
        var b = Math.floor(Math.random()*11+2);
        var c = Math.floor(Math.random()*11+2);

        this.setQuestion('' + a + 'b' + ' + ' + a*c + ' written with parentheses is equal to ');

        var answer =  '' + a + '(b' + '+' + c + ')';
        this.setAnswer(answer,0);

this.mCorrectAnswerLabel.setPosition(530,300);
this.mUserAnswerLabel.setPosition(230,300);

}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.3_5',6.2805,'6.ee.a.3','');
*/
var i_6_ee_a_3__5 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.3_5';

        var a = Math.floor(Math.random()*11+2);
        var b = Math.floor(Math.random()*11+2);
        var c = Math.floor(Math.random()*11+2);

        this.setQuestion('Combine the terms: ' + a + 'y' + ' + ' + b + 'y');

        var d = a + b;

        var answer =  '' + d + 'y';
        this.setAnswer(answer,0);

this.mCorrectAnswerLabel.setPosition(530,300);
this.mUserAnswerLabel.setPosition(230,300);

}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.3_6',6.2806,'6.ee.a.3','');
*/
var i_6_ee_a_3__6 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.3_6';

        var a = Math.floor(Math.random()*2+1);
        var b = Math.floor(Math.random()*3+3);
        var c = 8;
      
        var fractionA = new Fraction(a,c,false); 
        var fractionB = new Fraction(b,c,false); 

        this.setQuestion('Combine the terms: ' + fractionA.getString() + 'y' + ' + ' + fractionB.getString() + 'y');

        var d = a + b;

        var answer =  '' + d + '/8y';
        this.setAnswer(answer,0);

this.mCorrectAnswerLabel.setPosition(530,300);
this.mUserAnswerLabel.setPosition(230,300);

}
});
