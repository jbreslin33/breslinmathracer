/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2.c_1',6.2701,'6.ee.a.2.c','');
*/
var i_6_ee_a_2_c__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2.c_1';
        this.ns = new NameSampler();

        var n = this.ns.mLowerLetterOne;
        var m = this.ns.mLowerLetterTwo;

        this.setQuestion('' + 'Write an expression that represents ' + n + ' decreased by ' + m + '.');

        this.setAnswer('' + n + '-' + m ,0);
}
});

