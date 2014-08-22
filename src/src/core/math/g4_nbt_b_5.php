/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.b.5_1',4.1001,'4.nbt.b.5','Multiply numbers 1 digit by 2 digits.');
*/

var i_4_nbt_b_5__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
       	this.parent(sheet);
        this.mType = '4.nbt.b.5_1';          	

        //move gui
        this.mUserAnswerLabel.setPosition(125,200);

	this.a = Math.floor(Math.random()*8)+2;
	this.b = Math.floor(Math.random()*90)+10;
	this.c = parseInt(this.a * this.b);

	this.setQuestion('' + this.a + '*' +  this.b + '=');
        this.setAnswer(this.c,0);             
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.b.5_2',4.1002,'4.nbt.b.5','Multiply numbers 1 digit by 3 digits.');
*/

var i_4_nbt_b_5__2 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '4.nbt.b.5_2';

        //move gui
        this.mUserAnswerLabel.setPosition(125,200);

        this.a = Math.floor(Math.random()*8)+2;
        this.b = Math.floor(Math.random()*900)+100;
	this.c = parseInt(this.a * this.b);

        this.setQuestion('' + this.a + '*' +  this.b + '=');
        this.setAnswer(this.c,0);
}
});

