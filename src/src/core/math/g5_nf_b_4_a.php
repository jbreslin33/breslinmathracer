
/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.4.a_4',5.1604,'5.nf.b.4.a','fraction x fraction word problem');
*/
var i_5_nf_b_4_a__4 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
        this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175,true);

        this.mType = '5.nf.b.4.a_4';
        this.ns = new NameSampler();
        var na = 0;
        var da = 0;
        var nb = 0;
        var db = 0;
	while (na <= nb || nb >= db)
        {
                na = Math.floor((Math.random()*8)+2);
                da = Math.floor((Math.random()*8)+2);
                nb = Math.floor((Math.random()*8)+2);
                db = Math.floor((Math.random()*8)+2);
        }

        var fractiona = new Fraction(na,da);
        var fractionb = new Fraction(nb,db);
        var answer = new Fraction(parseInt(na*nb),parseInt(da*db),true);

        this.setAnswer(answer.getString(),0);
        this.setQuestion('' + this.ns.mNameOne + ' had ' + fractiona.getString() + ' ' + this.ns.mLiquidVolumeOne + ' of ' + this.ns.mDrinkOne + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' ' + this.ns.mFamilyOne + ' drank ' + fractionb.getString() + ' of it. How many ' + this.ns.mLiquidVolumeOne + ' of '  + this.ns.mDrinkOne + ' does ' + this.ns.mNameOne + ' have left?'   );
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.4.a_3',5.1603,'5.nf.b.4.a','fraction x fraction word problem');
*/
var i_5_nf_b_4_a__3 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
        this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175,true);

        this.mType = '5.nf.b.4.a_3';
        this.ns = new NameSampler();
	var na = 0;
	var da = 0;
	var nb = 0;
	var db = 0;
	while (na >= nb || nb >= db)
	{
        	na = Math.floor((Math.random()*8)+2);
        	da = Math.floor((Math.random()*8)+2);
       		nb = Math.floor((Math.random()*8)+2);
        	db = Math.floor((Math.random()*8)+2);
	}

        var fractiona = new Fraction(na,da);
        var fractionb = new Fraction(nb,db);
        var answer = new Fraction(parseInt(na*nb),parseInt(da*db),true);

        this.setAnswer(answer.getString(),0);
        this.setQuestion('' + this.ns.mNameOne + ' had ' + fractiona.getString() + ' ' + this.ns.mLiquidVolumeOne + ' of ' + this.ns.mDrinkOne + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' ' + this.ns.mFamilyOne + ' drank ' + fractionb.getString() + ' of it. How many ' + this.ns.mLiquidVolumeOne + ' of '  + this.ns.mDrinkOne + ' does ' + this.ns.mNameOne + ' have left?'   );
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.4.a_2',5.1602,'5.nf.b.4.a','1-20. whole number answer');
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


