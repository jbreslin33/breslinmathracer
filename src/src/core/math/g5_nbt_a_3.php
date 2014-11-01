
/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3_1',5.0601,'5.nbt.a.3','');
*/
var i_5_nbt_a_3__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.nbt.a.3_1';

	var n =  Math.floor((Math.random()*99)+1);
	var d = 100;
	
 	var fraction = new Fraction(n,d);

        this.setQuestion('Write in decimal form: ' + fraction.getString());
        this.setAnswer('0.' + n,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3_2',5.0602,'5.nbt.a.3','add zero for tenths');
*/
var i_5_nbt_a_3__2 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.nbt.a.3_2';

        var n =  Math.floor((Math.random()*9)+1);
        var d = 100;

        var fraction = new Fraction(n,d);

        this.setQuestion('Write in decimal form: ' + fraction.getString());
        this.setAnswer('0.0' + n,0);
}
});

