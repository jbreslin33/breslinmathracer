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
