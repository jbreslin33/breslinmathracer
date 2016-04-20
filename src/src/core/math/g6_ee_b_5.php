/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.b.5_1',6.3001,'6.ee.b.5','');
*/
var i_6_ee_b_5__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.b.5_1';

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
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.b.5_2',6.3002,'6.ee.b.5','');
*/
var i_6_ee_b_5__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.b.5_2';

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
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.b.5_3',6.3003,'6.ee.b.5','');
*/
var i_6_ee_b_5__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.b.5_3';

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
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.b.5_4',6.3004,'6.ee.b.5','');
*/
var i_6_ee_b_5__4 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.b.5_4';

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




/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.b.5_5',6.3005,'6.ee.b.5','');
*/
var i_6_ee_b_5__5 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.b.5_5';

        var a = Math.floor(Math.random()*11+2);
        var b = Math.floor(Math.random()*9+2);
        var c = Math.floor(Math.random()*9+11);

        c = a * b;

        this.setQuestion('Using n as a variable, write an equation that matches this description:</br></br> A number subtracted from 18 equals 4');
    
        this.setAnswer('18-n=4',0);
        this.setAnswer('4=18-n',1);       

this.mCorrectAnswerLabel.setPosition(530,300);
this.mUserAnswerLabel.setPosition(230,300);

}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.b.5_6',6.3006,'6.ee.b.5','');
*/
var i_6_ee_b_5__6 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.b.5_6';

        var a = Math.floor(Math.random()*11+2);
        var b = Math.floor(Math.random()*9+2);
        var c = Math.floor(Math.random()*9+11);

        c = a * b;

        this.setQuestion('Using n as a variable, write an equation that matches this description:</br></br> The product of 7 and a number equals 21');
    
        this.setAnswer('7xn=21',0);
        this.setAnswer('nx7=21',1);
        this.setAnswer('7n=21',2);

        this.setAnswer('21=7xn',3);
        this.setAnswer('21=nx7',4);
        this.setAnswer('21=7n',5);            

this.mCorrectAnswerLabel.setPosition(530,300);
this.mUserAnswerLabel.setPosition(230,300);

}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.b.5_7',6.3007,'6.ee.b.5','');
*/
var i_6_ee_b_5__7 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.b.5_7';

        var a = Math.floor(Math.random()*11+2);
        var b = Math.floor(Math.random()*9+2);
        var c = Math.floor(Math.random()*9+11);

        c = a * b;

        this.setQuestion('Using n as a variable, write an equation that matches this description:</br></br> 16 divided by a number equals 4');
    
        this.setAnswer('16/n=4',0);
        this.setAnswer('4=16/n',1);
       
this.mCorrectAnswerLabel.setPosition(530,300);
this.mUserAnswerLabel.setPosition(230,300);

}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.b.5_8',6.3008,'6.ee.b.5','');
*/
var i_6_ee_b_5__8 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.b.5_8';

        var a = Math.floor(Math.random()*11+2);
        var b = Math.floor(Math.random()*9+2);
        var c = Math.floor(Math.random()*9+11);

        c = a * b;

        this.setQuestion('Using n as a variable, write an equation that matches this description:</br></br> The sum of 6 and a number equals 22');
              
        this.setAnswer('n+6=22',0);
        this.setAnswer('22=n+6',1);
        this.setAnswer('6+n=22',2);
        this.setAnswer('22=6+n',3);

this.mCorrectAnswerLabel.setPosition(530,300);
this.mUserAnswerLabel.setPosition(230,300);

}
});
