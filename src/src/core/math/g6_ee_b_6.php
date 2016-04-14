/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.6_1',6.3201,'6.ee.a.3','');
*/
var i_6_ee_a_6__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.6_1';

        var a = Math.floor(Math.random()*6+3);
        var b = Math.floor(Math.random()*6+3);

        var c = a + b;

        this.setQuestion('Write an equation that represents the following situation:</br></br>Joey ate ' + a + ' red grapes. After that he ate some green grapes. In all he ate ' + c + ' grapes. How many green grapes did he eat? (Use n as variable)');
              
        this.setAnswer('' + a + '+n=' + c,0);
        this.setAnswer('22=n+6',1);
        this.setAnswer('6+n=22',2);
        this.setAnswer('22=6+n',3);

this.mCorrectAnswerLabel.setPosition(530,300);
this.mUserAnswerLabel.setPosition(230,300);

}
});
