/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.b.7_1',6.3301,'6.ee.b.7','');
*/
var i_6_ee_b_7__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.b.7_1';

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
