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
