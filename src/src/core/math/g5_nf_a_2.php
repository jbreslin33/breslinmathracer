/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.a.2_8',5.1308,'5.nf.a.2','subtract mixed number and mixed number');
*/
var i_5_nf_a_2__8 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
        this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175,true);

        this.mType = '5.nf.a.2_8';

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

        this.setAnswer(answer.getString(),0);
        this.setQuestion('Evaluate: ' + fractionA.getMixedNumber() + ' - ' + fractionB.getMixedNumber());
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.a.2_7',5.1307,'5.nf.a.2','subtract mixed number and fraction');
*/
var i_5_nf_a_2__7 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
        this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175,true);

        this.mType = '5.nf.a.2_7';

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

        this.setAnswer(answer.getString(),0);
        this.setQuestion('Evaluate: ' + fractionA.getMixedNumber() + ' - ' + fractionB.getString());
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.a.2_6',5.1306,'5.nf.a.2','');
*/
var i_5_nf_a_2__6 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
        this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175,true);

        this.mType = '5.nf.a.2_6';

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

        this.setAnswer(answer.getString(),0);
        this.setQuestion('Evaluate: ' + fractionA.getString() + ' - ' + fractionB.getString());
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.a.2_5',5.1305,'5.nf.a.2','subtract no whole numbers');
*/
var i_5_nf_a_2__5 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
        this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175,true);

        this.mType = '5.nf.a.2_5';

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

        this.setAnswer(answer.getString(),0);
        this.setQuestion('Evaluate: ' + fractionA.getString() + ' - ' + fractionB.getString());
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.a.2_4',5.1304,'5.nf.a.2','add mixed number and mixed number');
*/
var i_5_nf_a_2__4 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
        this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175,true);

        this.mType = '5.nf.a.2_4';

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

        this.setAnswer(answer.getString(),0);
        this.setQuestion('Evaluate: ' + fractionA.getMixedNumber() + ' + ' + fractionB.getMixedNumber());
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.a.2_3',5.1303,'5.nf.a.2','add mixed number and fraction');
*/
var i_5_nf_a_2__3 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
        this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175,true);

        this.mType = '5.nf.a.2_3';

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

        this.setAnswer(answer.getString(),0);
        this.setQuestion('Evaluate: ' + fractionA.getMixedNumber() + ' + ' + fractionB.getString());
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.a.2_2',5.1302,'5.nf.a.2','');
*/
var i_5_nf_a_2__2 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
        this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175,true);

        this.mType = '5.nf.a.2_2';

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

        this.setAnswer(answer.getString(),0);
        this.setQuestion('Evaluate: ' + fractionA.getString() + ' + ' + fractionB.getString());
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.a.2_1',5.1301,'5.nf.a.2','no whole numbers');
*/
var i_5_nf_a_2__1 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
        this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175,true);

        this.mType = '5.nf.a.2_1';

	this.ns = new NameSampler();

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

        this.setAnswer(answer.getString(),0);
        this.setQuestion('' + this.ns.mNameOne + ' had ' + fractionA.getString() + ' ' + this.ns.mThingOne + '. ' + this.ns.mNameTwo + ' had ' + fractionB.getString() + ' ' + this.ns.mThingOne + '. How many ' + this.ns.mThingOne + ' did they have altogether?');
}
});

