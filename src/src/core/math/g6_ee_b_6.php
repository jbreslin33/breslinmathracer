/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.b.6_1',6.3201,'6.ee.b.6','');
*/
var i_6_ee_b_6__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.b.6_1';

        var a = Math.floor(Math.random()*6+3);
        var b = Math.floor(Math.random()*6+3);

        var c = a + b;

        this.setQuestion('Write an equation that represents the following situation (Use n as variable):</br></br>Joey ate ' + a + ' red grapes. After that he ate some green grapes. In all he ate ' + c + ' grapes. How many green grapes did he eat?');
              
        this.setAnswer('' + a + '+n=' + c,0);
        this.setAnswer('' + c + '=' + a + '+n',1);
        this.setAnswer('' + c + '= n+' + a,2);
        this.setAnswer('' + 'n+' + a + '=' + c,3);

this.mCorrectAnswerLabel.setPosition(530,300);
this.mUserAnswerLabel.setPosition(230,300);

}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.b.6_2',6.3202,'6.ee.b.6','');
*/
var i_6_ee_b_6__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.b.6_2';

        var a = Math.floor(Math.random()*4+3);
        var b = Math.floor(Math.random()*4+3);

        var c = a * b;

        this.setQuestion('Write an equation that represents the following situation (Use n as variable):</br></br>Mary earned $' + a + ' for each box of cookies she sold. She sold several boxes. In all Mary earned $' + c + '. How many boxes did Mary sell?');
              
        this.setAnswer('' + a + 'n=' + c,0);
        this.setAnswer('' + c + '=' + a + 'n',1);
       
this.mCorrectAnswerLabel.setPosition(530,300);
this.mUserAnswerLabel.setPosition(230,300);

}
});
