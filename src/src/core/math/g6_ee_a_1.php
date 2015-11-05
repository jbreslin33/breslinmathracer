/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.1_1',6.2301,'6.ee.a.1','');
*/
var i_6_ee_a_1__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.1_1';

        var x = Math.floor(Math.random()*9)+1;
        var y = Math.floor(Math.random()*8)+2;

        this.setQuestion('' + 'In the expression ' + x + '<sup>' + y + '</sup>' + ' what is the base?');
        this.setAnswer('' + x,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.1_2',6.2302,'6.ee.a.1','');
*/
var i_6_ee_a_1__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.1_2';

        var x = Math.floor(Math.random()*9)+1;
        var y = Math.floor(Math.random()*8)+2;

        this.setQuestion('' + 'In the expression ' + x + '<sup>' + y + '</sup>' + ' what is the exponent?');
        this.setAnswer('' + y,0);
}
});
