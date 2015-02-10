
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.3_1',4.0301,'4.oa.a.3','');
*/
var i_4_oa_a_3__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,450,200,255,145,100,50,580,100);

       	this.mType = '4.oa.a.3_1';
        this.ns = new NameSampler();

	var a = 0;
	var b = 0;
	var c = 0;
	var d = 0;
	var e = 13;
	var f = 13;

	while(e % 8 != 0)
	{		
                a = Math.floor(Math.random()*10+20);
                b = Math.floor(Math.random()*10+20);
                c = Math.floor(Math.random()*2+2);
                d = Math.floor(Math.random()*2+2);
		e = parseInt(a + b + c + d);
		f = parseInt(e / 8);
	}
                this.setQuestion('The class that ' + this.ns.mNameOne + ' is in is having a pizza party. The are ' + a + ' girls and ' + b + ' boys in the class. There will also be ' + c + ' parents and ' + d + ' teachers at the party. Each pizza has 8 slices. How many pizzas should they order so that everyone will have 1 slice.');
                this.setAnswer('' + f,0);
        }
});

