
/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2_1',6.2501,'6.ee.a.2','');
*/
var i_6_ee_a_2__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2_1';
        this.nm = new NameMachine();

        var x = Math.floor(Math.random()*8)+2;

        this.setQuestion('' + 'Write an expression using an exponent that can be used to solve the area of a square with side lengths of ' + x + '. Use ^ before exponent. Example c squared is written: c^2'  );

        this.setAnswer('' + x + '^2',0);
}
});

