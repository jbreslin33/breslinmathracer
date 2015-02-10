
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.3_2',4.0302,'4.oa.a.3','subtract then divide evenly');
*/
var i_4_oa_a_3__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,450,200,255,145,100,50,580,100);

       	this.mType = '4.oa.a.3_2';
        this.ns = new NameSampler();

	var a = 0;
	var b = 3;
	var c = 0;
	var d = 13;
	var e = 13;

	while(d % c != 0)
	{		
                a = Math.floor(Math.random()*20+60);
                b = Math.floor(Math.random()*10+15);
                c = Math.floor(Math.random()*8+2);
		d = parseInt(a - b);
		e = parseInt(d / c);
	}
        this.setQuestion('' + this.ns.mNameOne + ' had ' + a + ' video games for ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' fun times game console. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' does not play ' + b + ' of the games anymore so ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' gave them to ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' friends. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,1) + ' has boxes to keep the games in. Each box can hold ' + c + ' games. How many boxes will ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' need to store ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' remaining games?'   );
        this.setAnswer('' + e,0);
}
});

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

