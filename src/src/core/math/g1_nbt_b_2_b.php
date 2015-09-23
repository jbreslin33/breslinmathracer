
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.nbt.b.2.b_2',1.1202,'1.nbt.b.2.b','' );
*/
var i_1_nbt_b_2_b__2 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mType = '1.nbt.b.2.b_2';

        this.tens = 1;
        this.ones = Math.floor(Math.random()*9)+1;
        this.a = parseInt(10 + this.ones);

        this.setQuestion('' + 'How many tens are in the tens place in ' + this.a + '?');
        this.setAnswer('' + '1',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.nbt.b.2.b_1',1.1201,'1.nbt.b.2.b','' );
*/
var i_1_nbt_b_2_b__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mType = '1.nbt.b.2.b_1';

        this.tens = 1;
        this.ones = Math.floor(Math.random()*9)+1;
        this.a = parseInt(10 + this.ones);

        this.setQuestion('' + 'How many ones are in the ones place in ' + this.a + '?');
        this.setAnswer('' + this.ones,0);
}
});
