/*
insert into item_types(id,progression,core_standards_id,description) values ('1.nbt.b.2_2',1.1002,'1.nbt.b.2','' );
*/
var i_1_nbt_b_2__2 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mType = '1.nbt.b.2_2';

        this.tens = Math.floor(Math.random()*8)+2;
        this.ones = Math.floor(Math.random()*9)+1;
        this.a = parseInt(this.tens * 10 + this.ones);

        this.setQuestion('' + 'How many tens are in ' + this.a + '?');
        this.setAnswer('' + this.tens,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.nbt.b.2_1',1.1001,'1.nbt.b.2','' );
*/
var i_1_nbt_b_2__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mType = '1.nbt.b.2_1';

        this.tens = Math.floor(Math.random()*8)+2;
        this.ones = Math.floor(Math.random()*9)+1;
        this.a = parseInt(this.tens * 10 + this.ones);        

        this.setQuestion('' + 'How many ones are in ' + this.a + '?');
        this.setAnswer('' + this.ones,0);
}
});
