/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.4.a_2',5.1602,'5.nf.b.4.a','1-10. whole number answer');
*/
var i_5_nf_b_4_a__2 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nf.b.4.a_2';
        this.ns = new NameSampler();

        var a = 0;
        var nb = 0;
        var db = 0;
        var n = 0;

        while (n % db != 0 || n == 0 || nb >= db || a == db || a == nb)
        {
                a = Math.floor((Math.random()*18)+2);
                nb = Math.floor((Math.random()*18)+2);
                db = Math.floor((Math.random()*18)+2);
                n = parseInt(a * nb);
        }

        var fractionb = new Fraction(nb,db);
        var answer = new Fraction(parseInt(a*nb),db,true);

        this.setAnswer(answer.getString(),0);
        this.setQuestion('' + this.ns.mNameOne + ' bought ' + a + ' ' + this.ns.mVegetableOne + '. ' +  this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' ' + this.ns.mFamilyOne +  ' ate ' +  fractionb.getString() + ' of them. How many ' + this.ns.mVegetableOne + ' did ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' ' + this.ns.mFamilyOne + ' eat?');
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.4.a_1',5.1601,'5.nf.b.4.a','1-10. whole number answer');
*/
var i_5_nf_b_4_a__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
	this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nf.b.4.a_1';
 	this.ns = new NameSampler();

	var a = 0;
	var nb = 0;
	var db = 0;
	var n = 0;

	while (n % db != 0 || n == 0 || nb >= db || a == db || a == nb)
	{
        	a = Math.floor((Math.random()*8)+2);
        	nb = Math.floor((Math.random()*8)+2);
        	db = Math.floor((Math.random()*8)+2);
		n = parseInt(a * nb);
	}

       	var fractionb = new Fraction(nb,db);
       	var answer = new Fraction(parseInt(a*nb),db,true);

        this.setAnswer(answer.getString(),0);
        this.setQuestion('' + this.ns.mNameOne + ' has ' + a + ' ' + this.ns.mThingOne + '. ' + fractionb.getString() + ' of them are ' + this.ns.mColorOne + '. How many ' + this.ns.mThingOne + ' are ' + this.ns.mColorOne);
}
});


