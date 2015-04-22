
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.3.a_7',4.1407,'4.nf.b.3.a','');
*/
var i_4_nf_b_3_a__7 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100,100,50,425,175);
        this.mType = '4.nf.b.3.a_7';
        this.ns = new NameSampler();

        var a = Math.floor((Math.random()*15)+10);
        var b = Math.floor((Math.random()*5)+5);
        var c = Math.floor((Math.random()*10)+20);

        var n = parseInt(a - b);

        var ac = new Fraction(a,c,false);
        var bc = new Fraction(b,c,false);
        var answer = new Fraction(n,c);

        this.setAnswer('' + answer.getString(),0);
        this.setQuestion('' + 'When ' + this.ns.mNameOne + ' arrived at the party there was ' + ac.getString() + ' of the birthday cake ' + this.ns.mLeft + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' then ate ' + bc.getString() + ' of the cake. How much of the cake is ' + this.ns.mLeft + ' now?');
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.3.a_6',4.1406,'4.nf.b.3.a','Add 2 fractions with like denominators. answer is proper fraction.');
*/
var i_4_nf_b_3_a__6 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100,100,50,425,175);
        this.mType = '4.nf.b.3.a_6';
        this.ns = new NameSampler();

        var a = Math.floor((Math.random()*5)+1);
        var b = Math.floor((Math.random()*5)+1);
        var c = Math.floor((Math.random()*10)+10);

        var n = parseInt(a + b);

        var ac = new Fraction(a,c,false);
        var bc = new Fraction(b,c,false);
        var answer = new Fraction(n,c);

        this.setAnswer('' + answer.getString(),0);
        this.setQuestion('' + 'It is the birthday of ' + this.ns.mNameOne + '. ' + this.ns.mNameTwo + ' ate ' +  ac.getString() + ' of the birthday cake and ' + this.ns.mNameThree + ' ate ' + bc.getString() + ' of the cake. How much of the cake did ' + this.ns.mNameTwo + ' and ' + this.ns.mNameThree + ' eat ' + this.ns.mSum + '?');
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.3.a_5',4.1403,'4.nf.b.3.a','Add and subtract 3 fractions with like denominators');
*/

var i_4_nf_b_3_a__5 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
        this.parent(sheet,150,50,125,95,100,50,425,100,100,50,425,175);
        this.mType = '4.nf.b.3.a_5';

        var a = Math.floor((Math.random()*5)+5);
        var b = Math.floor((Math.random()*5)+1);
        var c = Math.floor((Math.random()*5)+1);
        var d = Math.floor((Math.random()*10)+16);

        var n = parseInt(a + b - c);

        var ad = new Fraction(a,d,false);
        var bd = new Fraction(b,d,false);
        var cd = new Fraction(c,d,false);
        var answer = new Fraction(n,d);

        this.setAnswer('' + answer.getString(),0);
        this.setQuestion(ad.getString() + '+' + bd.getString() + '-' + cd.getString() + '=');
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.3.a_4',4.1403,'4.nf.b.3.a','Add and subtract 3 fractions with like denominators');
*/

var i_4_nf_b_3_a__4 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
        this.parent(sheet,150,50,125,95,100,50,425,100,100,50,425,175);
        this.mType = '4.nf.b.3.a_4';

        var a = Math.floor((Math.random()*5)+5);
        var b = Math.floor((Math.random()*5)+1);
        var c = Math.floor((Math.random()*5)+1);
        var d = Math.floor((Math.random()*10)+16);

        var n = parseInt(a - b + c);

        var ad = new Fraction(a,d,false);
        var bd = new Fraction(b,d,false);
        var cd = new Fraction(c,d,false);
        var answer = new Fraction(n,d);

        this.setAnswer('' + answer.getString(),0);
        this.setQuestion(ad.getString() + '-' + bd.getString() + '+' + cd.getString() + '=');
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.3.a_3',4.1403,'4.nf.b.3.a','add 3 fractions with like denominators');
*/

var i_4_nf_b_3_a__3 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
	this.parent(sheet,150,50,125,95,100,50,425,100,100,50,425,175);
	this.mType = '4.nf.b.3.a_3';

	var a = Math.floor((Math.random()*5)+1);
        var b = Math.floor((Math.random()*5)+1);
        var c = Math.floor((Math.random()*5)+1);
        var d = Math.floor((Math.random()*10)+16);

        var n = parseInt(a + b + c);

        var ad = new Fraction(a,d,false);
        var bd = new Fraction(b,d,false);
        var cd = new Fraction(c,d,false);
        var answer = new Fraction(n,d);

        this.setAnswer('' + answer.getString(),0);
        this.setQuestion(ad.getString() + '+' + bd.getString() + '+' + cd.getString() + '=');
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.3.a_2',4.1402,'4.nf.b.3.a','subtract 2 fractions with like denominators');
*/

var i_4_nf_b_3_a__2 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
	this.parent(sheet,150,50,125,95,100,50,425,100,100,50,425,175);
	this.mType = '4.nf.b.3.a_2';

	var a = Math.floor((Math.random()*15)+10);
        var b = Math.floor((Math.random()*5)+5);
        var c = Math.floor((Math.random()*10)+20);

        var n = parseInt(a - b);

        var ac = new Fraction(a,c,false);
        var bc = new Fraction(b,c,false);
        var answer = new Fraction(n,c);

        this.setAnswer('' + answer.getString(),0);
        this.setQuestion(ac.getString() + '-' + bc.getString() + '=');
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.3.a_1',4.1401,'4.nf.b.3.a','Add 2 fractions with like denominators. answer is proper fraction.');
*/
var i_4_nf_b_3_a__1 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
	this.parent(sheet,150,50,125,95,100,50,425,100,100,50,425,175);
	this.mType = '4.nf.b.3.a_1';

	var a = Math.floor((Math.random()*5)+1);
        var b = Math.floor((Math.random()*5)+1);
        var c = Math.floor((Math.random()*10)+10);

        var n = parseInt(a + b);

        var ac = new Fraction(a,c,false);
        var bc = new Fraction(b,c,false);
        var answer = new Fraction(n,c);

        this.setAnswer('' + answer.getString(),0);
        this.setQuestion(ac.getString() + '+' + bc.getString() + '=');
}
});

