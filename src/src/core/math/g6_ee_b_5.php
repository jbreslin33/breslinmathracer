/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.5_1',6.3001,'6.ee.a.3','');
*/
var i_6_ee_a_5__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.5_1';

        var a = Math.floor(Math.random()*11+2);
        var b = Math.floor(Math.random()*9+2);
        var c = Math.floor(Math.random()*9+11);

        this.setQuestion('What is the solution to this equation?</br></br> ' + 'a' + ' + ' + b + ' = ' + c);

        var answer = c - b;
       
        this.setAnswer('' + answer,0);

this.mCorrectAnswerLabel.setPosition(530,300);
this.mUserAnswerLabel.setPosition(230,300);

}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.5_2',6.3002,'6.ee.a.3','');
*/
var i_6_ee_a_5__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.5_2';

        //var a = Math.floor(Math.random()*11+2);
        var b = Math.floor(Math.random()*9+2);
        var c = Math.floor(Math.random()*9+11);

        var a = c - b;

        this.setQuestion('What is the solution to this equation?</br></br> ' + 'a' + ' - ' + b + ' = ' + a);

        var answer = c;
       
        this.setAnswer('' + answer,0);

this.mCorrectAnswerLabel.setPosition(530,300);
this.mUserAnswerLabel.setPosition(230,300);

}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.5_3',6.3003,'6.ee.a.3','');
*/
var i_6_ee_a_5__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.5_3';

        var a = Math.floor(Math.random()*11+2);
        var b = Math.floor(Math.random()*9+2);
        var c = Math.floor(Math.random()*9+11);

        c = a * b;

        this.setQuestion('What is the solution to this equation?</br></br> ' + a + 'b' + ' = ' + c);

        var answer = b;
       
        this.setAnswer('' + answer,0);

this.mCorrectAnswerLabel.setPosition(530,300);
this.mUserAnswerLabel.setPosition(230,300);

}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.5_4',6.3004,'6.ee.a.3','');
*/
var i_6_ee_a_5__4 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.5_4';

        var a = Math.floor(Math.random()*11+2);
        var b = Math.floor(Math.random()*9+2);
        var c = Math.floor(Math.random()*9+11);

        c = a * b;

        this.setQuestion('What is the solution to this equation?</br></br> ' + 'a/' + b + ' = ' + a);

        var answer = c;
       
        this.setAnswer('' + answer,0);

this.mCorrectAnswerLabel.setPosition(530,300);
this.mUserAnswerLabel.setPosition(230,300);

}
});
