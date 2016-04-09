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

        this.setQuestion('' + a + '(' + b + ' + ' + c + ') = ' + a*b + ' + ___');
        this.setAnswer('' + a*c,0);

this.mCorrectAnswerLabel.setPosition(530,300);
this.mUserAnswerLabel.setPosition(230,300);

}
});
