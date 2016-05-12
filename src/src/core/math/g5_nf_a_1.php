

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.a.1_9',4.1209,'5.nf.a.1','');
*/

var i_5_nf_a_1__9 = new Class(
{
Extends: TextItemMixedNumber,

initialize: function(sheet)
{
        this.parent(sheet, 320,100,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);

        this.mType = '5.nf.a.1_9';

        var x = 0;
        var y = 1;
        var a = 0;
        var b = 0;
        var da = 0;
        var db = 0;
        var m = 0;
        var n = 0;

        while (da == db || a > da || b > db || a >= b || x <= y || m%da == 0 || n%db == 0)
        {
                x = Math.floor(Math.random()*9)+1;
                y = Math.floor(Math.random()*9)+1;
                a = Math.floor(Math.random()*9)+1;
                b = Math.floor(Math.random()*9)+1;
                da = Math.floor(Math.random()*8)+2;
                db = Math.floor(Math.random()*8)+2;
                m = parseInt( (da*x) + a);
                n = parseInt( (db*y) + b);
        }

        var fractionA = new Fraction(m,da,false);
        var fractionB = new Fraction(n,db,false);
        var fractionC = fractionA.subtract(fractionB);

        APPLICATION.log('x:' + x);
        APPLICATION.log('y:' + y);

        this.setQuestion('' + fractionA.getMixedNumber() + ' - ' + fractionB.getMixedNumber() + ' = ');
        this.setAnswer('' + fractionC.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.a.1_8',5.1208,'5.nf.a.1','subtract mixed number and mixed number');
*/
var i_5_nf_a_1__8 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
        this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175,true);

        this.mType = '5.nf.a.1_8';

        var an = 1;
        var ad = 1;
        var bn = 1;
        var bd = 1;
        while (an < ad || an % ad == 0 || bn < bd || bn % bd == 0 || parseInt(an / ad) <= parseInt(bn / bd) || ad == bd)
        {
                an = Math.floor((Math.random()*9)+10);
                ad = Math.floor((Math.random()*9)+1);
                bn = Math.floor((Math.random()*9)+10);
                bd = Math.floor((Math.random()*9)+1);
        }

        var fractionA = new Fraction(an,ad,false);
        var fractionB = new Fraction(bn,bd,false);

        var answer = fractionA.subtract(fractionB);
	answer.reduce();

        this.setAnswer('' + answer.getString(),0);
        this.setQuestion('Evaluate: ' + fractionA.getMixedNumber() + ' - ' + fractionB.getMixedNumber());
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.a.1_7',5.1207,'5.nf.a.1','subtract mixed number and fraction');
*/
var i_5_nf_a_1__7 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
        this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175,true);

        this.mType = '5.nf.a.1_7';

        var an = 1;
        var ad = 1;
        var bn = 0;
        var bd = 0;
        while (an < ad || an % ad == 0 || parseInt(an / ad) <= parseInt(bn / bd) || ad == bd)
        {
                an = Math.floor((Math.random()*9)+10);
                ad = Math.floor((Math.random()*9)+1);
                bn = Math.floor((Math.random()*9)+1);
                bd = Math.floor((Math.random()*9)+1);
        }

        var fractionA = new Fraction(an,ad,false);
        var fractionB = new Fraction(bn,bd,false);

        var answer = fractionA.subtract(fractionB);
	answer.reduce();

        this.setAnswer('' + answer.getString(),0);
        this.setQuestion('Evaluate: ' + fractionA.getMixedNumber() + ' - ' + fractionB.getString());
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.a.1_6',5.1206,'5.nf.a.1','');
*/
var i_5_nf_a_1__6 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
        this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175,true);

        this.mType = '5.nf.a.1_6';

        var an = 0;
        var ad = 0;
        var bn = 0;
        var bd = 0;
        while (bn == bd || parseInt(an / ad) <= parseInt(bn / bd) || ad == bd )
        {
                an = Math.floor((Math.random()*9)+1);
                ad = 1;
                bn = Math.floor((Math.random()*9)+1);
                bd = Math.floor((Math.random()*9)+1);
        }

        var fractionA = new Fraction(an,ad);
        var fractionB = new Fraction(bn,bd,false);

        var answer = fractionA.subtract(fractionB);
	answer.reduce();

        this.setAnswer('' + answer.getString(),0);
        this.setQuestion('Evaluate: ' + fractionA.getString() + ' - ' + fractionB.getString());
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.a.1_5',5.1205,'5.nf.a.1','subtract no whole numbers');
*/
var i_5_nf_a_1__5 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
        this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175,true);

        this.mType = '5.nf.a.1_5';

        var an = 0;
        var ad = 0;
        var bn = 0;
        var bd = 0;
        while (an == ad || bn == bd || parseInt(an / ad) <= parseInt(bn / bd) || ad == bd)
        {
                an = Math.floor((Math.random()*9)+1);
                ad = Math.floor((Math.random()*9)+1);
                bn = Math.floor((Math.random()*9)+1);
                bd = Math.floor((Math.random()*9)+1);
        }

        var fractionA = new Fraction(an,ad);
        var fractionB = new Fraction(bn,bd);

        var answer = fractionA.subtract(fractionB);
	answer.reduce();

        this.setAnswer('' + answer.getString(),0);
        this.setQuestion('Evaluate: ' + fractionA.getString() + ' - ' + fractionB.getString());
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.a.1_4',5.1204,'5.nf.a.1','add mixed number and mixed number');
*/
var i_5_nf_a_1__4 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
        this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175,true);

        this.mType = '5.nf.a.1_4';

        var an = 1;
        var ad = 1;
        var bn = 1;
        var bd = 1;
        while (an < ad || an % ad == 0 || bn < bd || bn % bd == 0 || ad == bd)
        {
                an = Math.floor((Math.random()*9)+10);
                ad = Math.floor((Math.random()*9)+1);
                bn = Math.floor((Math.random()*9)+10);
                bd = Math.floor((Math.random()*9)+1);
        }

        var fractionA = new Fraction(an,ad,false);
        var fractionB = new Fraction(bn,bd,false);

        //fraction class will simplyfy
        var answer = fractionA.add(fractionB);
	answer.reduce();

        this.setAnswer('' + answer.getString(),0);
        this.setQuestion('Evaluate: ' + fractionA.getMixedNumber() + ' + ' + fractionB.getMixedNumber());
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.a.1_3',5.1203,'5.nf.a.1','add mixed number and fraction');
*/
var i_5_nf_a_1__3 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
        this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175,true);

        this.mType = '5.nf.a.1_3';

        var an = 1;
        var ad = 1;
        var bn = 0;
        var bd = 0;
        while (an < ad || an % ad == 0 || ad == bd)
        {
                an = Math.floor((Math.random()*9)+10);
                ad = Math.floor((Math.random()*9)+1);
                bn = Math.floor((Math.random()*9)+1);
                bd = Math.floor((Math.random()*9)+1);
        }

        var fractionA = new Fraction(an,ad,false);
        var fractionB = new Fraction(bn,bd,false);

        //fraction class will simplyfy
        var answer = fractionA.add(fractionB);
	answer.reduce();

        this.setAnswer('' + answer.getString(),0);
        this.setQuestion('Evaluate: ' + fractionA.getMixedNumber() + ' + ' + fractionB.getString());
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.a.1_2',5.1202,'5.nf.a.1','');
*/
var i_5_nf_a_1__2 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
        this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175,true);

        this.mType = '5.nf.a.1_2';

	var an = 0;
	var ad = 0;
	var bn = 0;
	var bd = 0;
	while (bn == bd || ad == bd)
	{
        	an = Math.floor((Math.random()*9)+1);
        	ad = 1;
        	bn = Math.floor((Math.random()*9)+1);
        	bd = Math.floor((Math.random()*9)+1);
	}

        var fractionA = new Fraction(an,ad);
        var fractionB = new Fraction(bn,bd,false);

        //fraction class will simplyfy
        var answer = fractionA.add(fractionB);
	answer.reduce();

        this.setAnswer('' + answer.getString(),0);
        this.setQuestion('Evaluate: ' + fractionA.getString() + ' + ' + fractionB.getString());
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.a.1_1',5.1201,'5.nf.a.1','no whole numbers');
*/
var i_5_nf_a_1__1 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
        this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175,true);

        this.mType = '5.nf.a.1_1';

	var an = 0;
	var ad = 0;
	var bn = 0;
	var bd = 0;
	while (an == ad || bn == bd || ad == bd)
	{
        	an = Math.floor((Math.random()*9)+1);
        	ad = Math.floor((Math.random()*9)+1);
        	bn = Math.floor((Math.random()*9)+1);
        	bd = Math.floor((Math.random()*9)+1);
	}

        var fractionA = new Fraction(an,ad);
        var fractionB = new Fraction(bn,bd);

	var answer = fractionA.add(fractionB);
	answer.reduce();

        this.setAnswer('' + answer.getString(),0);
        this.setQuestion('Evaluate: ' + fractionA.getString() + ' + ' + fractionB.getString());
}
});

