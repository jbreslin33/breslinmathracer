
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.3.c_9',4.1609,'4.nf.b.3.c','');
*/

var i_4_nf_b_3_c__9 = new Class(
{
Extends: TextItemMixedNumber,

initialize: function(sheet)
{
        this.parent(sheet, 320,100,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);

        this.mType = '4.nf.b.3.c_9';
        this.ns = new NameSampler();

        var a = 0;
        var b = 0;
        var d = 1;

        while (b < d || a % d != 0 || b % d == 0 || a <= b)
        {
                a = Math.floor(Math.random()*10)+10;
                b = Math.floor(Math.random()*10)+10;
                d = Math.floor(Math.random()*3)+2;
        }

        var fractionA = new Fraction(a,d,true);
        var fractionB = new Fraction(b,d,false);
        var fractionC = fractionA.subtract(fractionB);

        this.setQuestion('' + this.ns.mNameOne + ' ran ' + fractionA.getMixedNumber() + ' ' + this.ns.mDistanceIncrementLarge + ' and ' + this.ns.mNameTwo + ' ran ' + fractionB.getMixedNumber() + ' ' + this.ns.mDistanceIncrementLarge + '. How many more ' + this.ns.mDistanceIncrementLarge + ' did ' + this.ns.mNameOne + ' run then ' + this.ns.mNameTwo + '?');
        this.setAnswer('' + fractionC.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.3.c_8',4.1608,'4.nf.b.3.c','');
*/

var i_4_nf_b_3_c__8 = new Class(
{
Extends: TextItemMixedNumber,

initialize: function(sheet)
{
        this.parent(sheet, 320,100,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);

        this.mType = '4.nf.b.3.c_8';

        var a = 0;
        var b = 0;
        var d = 1;

        while (b < d || a % d == 0 || b % d == 0 || a <= b)
        {
                a = Math.floor(Math.random()*10)+10;
                b = Math.floor(Math.random()*10)+10;
                d = Math.floor(Math.random()*3)+2;
        }

        var fractionA = new Fraction(a,d,false);
        var fractionB = new Fraction(b,d,false);
        var fractionC = fractionA.subtract(fractionB);

        this.setQuestion('' + fractionA.getMixedNumber() + ' - ' + fractionB.getMixedNumber() + ' = ');
        this.setAnswer('' + fractionC.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.3.c_7',4.1607,'4.nf.b.3.c','');
*/

var i_4_nf_b_3_c__7 = new Class(
{
Extends: TextItemMixedNumber,

initialize: function(sheet)
{
        this.parent(sheet, 320,100,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);

        this.mType = '4.nf.b.3.c_7';

        var a = 0;
        var b = 0;
        var d = 1;

        while (b < d || a % d != 0 || b % d == 0 || a <= b)
        {
                a = Math.floor(Math.random()*10)+10;
                b = Math.floor(Math.random()*10)+10;
                d = Math.floor(Math.random()*3)+2;
        }

        var fractionA = new Fraction(a,d,true);
        var fractionB = new Fraction(b,d,false);
        var fractionC = fractionA.subtract(fractionB);

        this.setQuestion('' + fractionB.getMixedNumber() + ' - ' + fractionA.getMixedNumber() + ' = ');
        this.setAnswer('' + fractionC.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.3.c_6',4.1606,'4.nf.b.3.c','');
*/

var i_4_nf_b_3_c__6 = new Class(
{
Extends: TextItemMixedNumber,

initialize: function(sheet)
{
        this.parent(sheet, 320,100,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);

        this.mType = '4.nf.b.3.c_6';

        var a = 0;
        var b = 0;
        var d = 1;

        while (b < d || a % d != 0 || b % d == 0 || a <= b)
        {
                a = Math.floor(Math.random()*10)+10;
                b = Math.floor(Math.random()*10)+10;
                d = Math.floor(Math.random()*3)+2;
        }

        var fractionA = new Fraction(a,d,true);
        var fractionB = new Fraction(b,d,false);
        var fractionC = fractionA.subtract(fractionB);

        this.setQuestion('' + fractionA.getMixedNumber() + ' - ' + fractionB.getMixedNumber() + ' = ');
        this.setAnswer('' + fractionC.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.3.c_5',4.1605,'4.nf.b.3.c','');
*/

var i_4_nf_b_3_c__5 = new Class(
{
Extends: TextItemMixedNumber,

initialize: function(sheet)
{
        this.parent(sheet, 320,100,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);

        this.mType = '4.nf.b.3.c_5';
      	this.ns = new NameSampler();

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

        this.setQuestion('' + this.ns.mNameOne + ' has ' + fractionA.getMixedNumber() + ' ' + this.ns.mLiquidVolumeOne + ' of ' + this.ns.mDrinkOne + ' and ' + this.ns.mNameTwo + ' has ' + fractionB.getMixedNumber() + ' ' + this.ns.mLiquidVolumeOne + ' of ' + this.ns.mDrinkTwo + '. How many ' + this.ns.mLiquidVolumeOne + ' of liquid do they have ' + this.ns.mSum + '?');
        this.setAnswer('' + fractionC.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.3.c_4',4.1604,'4.nf.b.3.c','');
*/

var i_4_nf_b_3_c__4 = new Class(
{
Extends: TextItemMixedNumber,

initialize: function(sheet)
{
        this.parent(sheet, 320,100,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);

        this.mType = '4.nf.b.3.c_4';
        this.ns = new NameSampler();

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

        this.setQuestion('' + this.ns.mNameOne + ' ran ' + fractionA.getMixedNumber() + ' ' + this.ns.mDistanceIncrementLarge + ' and ' + this.ns.mNameTwo + ' ran ' + fractionB.getMixedNumber() + ' ' + this.ns.mDistanceIncrementLarge + '. How many ' + this.ns.mDistanceIncrementLarge + ' did they run ' + this.ns.mSum + '?');
        this.setAnswer('' + fractionC.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.3.c_3',4.1603,'4.nf.b.3.c','');
*/

var i_4_nf_b_3_c__3 = new Class(
{
Extends: TextItemMixedNumber,

initialize: function(sheet)
{
        this.parent(sheet, 320,100,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);

        this.mType = '4.nf.b.3.c_3';

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
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.3.c_2',4.1602,'4.nf.b.3.c','');
*/

var i_4_nf_b_3_c__2 = new Class(
{
Extends: TextItemMixedNumber,

initialize: function(sheet)
{
        this.parent(sheet, 320,100,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);

        this.mType = '4.nf.b.3.c_2';

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

        this.setQuestion('' + fractionB.getMixedNumber() + ' + ' + fractionA.getMixedNumber() + ' = ');
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

        this.mType = '4.nf.b.3.c_1';

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

