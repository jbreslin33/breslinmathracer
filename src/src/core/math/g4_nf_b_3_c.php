
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.3.c_2',4.1602,'4.nf.b.3.c','');
*/

var i_4_nf_b_3_c__2 = new Class(
{
Extends: TextItemMixedNumber,

initialize: function(sheet)
{
        this.parent(sheet, 320,100,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);

        this.mType = '4.nf.b.3_c_2';

        var a = 0;
        var b = 0;
        var d = 1;

        while (b < d || a % d == 0 || b % d == 0)
        {
                a = Math.floor(Math.random()*10)+10;
                b = Math.floor(Math.random()*10)+10;
                d = Math.floor(Math.random()*3)+2;
        }

        var fractionA = new Fraction(a,d,false);
        var fractionB = new Fraction(b,d,false);
        var fractionC = fractionA.add(fractionB);

        this.setQuestion('' + fractionA.getMixedNumber() + ' + ' + fractionB.getMixedNumber() + ' = ');
        this.setAnswer('' + fractionC.getString(),0);
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.3.c_1',4.1601,'4.nf.b.3.c','');
*/

var i_4_nf_b_3_c__1 = new Class(
{
Extends: TextItemMixedNumber,

initialize: function(sheet)
{
  	this.parent(sheet, 320,100,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);

        this.mType = '4.nf.b.3_c_1';

        var a = 0;
        var b = 0;
        var d = 1;

	while (b < d || a % d != 0 || b % d == 0) 
	{
        	a = Math.floor(Math.random()*10)+10;
        	b = Math.floor(Math.random()*10)+10;
        	d = Math.floor(Math.random()*3)+2;
	}

        var fractionA = new Fraction(a,d,true);
        var fractionB = new Fraction(b,d,false);
        var fractionC = fractionA.add(fractionB);

        this.setQuestion('' + fractionA.getMixedNumber() + ' + ' + fractionB.getMixedNumber() + ' = ');
        this.setAnswer('' + fractionC.getString(),0);
}
});

