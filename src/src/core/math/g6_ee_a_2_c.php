
/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2.c_9',6.2709,'6.ee.a.2.c','');
*/
var i_6_ee_a_2_c__9 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2.c_9';

        var a = Math.floor(Math.random()*8)+2;

        var b = Math.floor(Math.random()*8)+2;
        
	var c = Math.floor(Math.random()*8)+2; //answer to division
	var d = Math.floor(Math.random()*8)+2;
	var e = parseInt(c*d);
	
	var f = Math.floor(Math.random()*8)+2;

        this.setQuestion('' + a + '^2' + '*' + b + '+' + e + '/' + d + '-' + f);

	var x = parseInt(Math.pow(a,2) * b + c - f); 

        this.setAnswer('' + x,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2.c_8',6.2708,'6.ee.a.2.c','');
*/
var i_6_ee_a_2_c__8 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2.c_8';

        var a = Math.floor(Math.random()*8)+2;
        var b = Math.floor(Math.random()*8)+2;
        var c = parseInt(a*b);
        
	var d = Math.floor(Math.random()*8)+2;
	
	var e = Math.floor(Math.random()*8)+2;
	var f = Math.floor(Math.random()*8)+2;
	var g = Math.floor(Math.random()*8)+2;

        this.setQuestion('' + c + '/' + a + '*' + d + '+' + e + '^2' + '-' + f + '*' + g);

	var x = parseInt(b * d + Math.pow(e,2) - f * g); 

        this.setAnswer('' + x,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2.c_7',6.2707,'6.ee.a.2.c','');
*/
var i_6_ee_a_2_c__7 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2.c_7';
        this.ns = new NameSampler();

	//fa
        var na = Math.floor(Math.random()*8)+2;
        var da = Math.floor(Math.random()*8)+2;
        var fa = new Fraction(na,da,false);

	//fb
        var x = this.ns.mLowerLetterOne;
        var nb = Math.floor(Math.random()*8)+2;
        var fb = new Fraction(nb,1,false);

	//fc
        var fc = fa.multiply(fb);

        this.setQuestion('' + 'Evaluation the expression <sup>' + fa.mNumerator + x + '</sup>&frasl;<sub>' + fa.mDenominator + '</sub> where ' + x + ' = ' + nb);

        this.setAnswer('' + fc.getOneLineString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2.c_6',6.2706,'6.ee.a.2.c','');
*/
var i_6_ee_a_2_c__6 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2.c_6';
        this.ns = new NameSampler();

        var n = Math.floor(Math.random()*8)+2;

        var x = this.ns.mLowerLetterOne;
        var d = Math.floor(Math.random()*8)+2;

        var f = new Fraction(n,d,false);

        this.setQuestion('' + 'Evaluation the expression <sup>' + n + '</sup>&frasl;<sub>' + x + ' where ' + x + ' = ' + d);

        this.setAnswer('' + f.getOneLineString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2.c_5',6.2705,'6.ee.a.2.c','');
*/
var i_6_ee_a_2_c__5 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2.c_5';
        this.ns = new NameSampler();

        var x = this.ns.mLowerLetterOne;
        var n = Math.floor(Math.random()*8)+2;
        var d = Math.floor(Math.random()*8)+2;

        var f = new Fraction(n,d,false);

        this.setQuestion('' + 'Evaluation the expression <sup>' + x + '</sup>&frasl;<sub>' + d + ' where ' + x + ' = ' + n);

        this.setAnswer('' + f.getOneLineString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2.c_4',6.2704,'6.ee.a.2.c','');
*/
var i_6_ee_a_2_c__4 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2.c_4';
        this.ns = new NameSampler();
   
        var x = this.ns.mLowerLetterOne;
	var y = Math.floor(Math.random()*8)+2; //numerator
	
	var n = Math.floor(Math.random()*8)+2;
	var d = Math.floor(Math.random()*8)+2;

 	var fA = new Fraction(n,d,false);
 	var fB = new Fraction(y,1,false);

	var fC = fB.subtract(fA);

        this.setQuestion('' + 'Evaluation the expression ' + fB.getString() + ' - ' + x + ' where ' + x + ' = ' + fA.getString());

	this.setAnswer('' + fC.getOneLineString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2.c_3',6.2703,'6.ee.a.2.c','');
*/
var i_6_ee_a_2_c__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2.c_3';
        this.ns = new NameSampler();
   
        var x = this.ns.mLowerLetterOne;
	var y = Math.floor(Math.random()*8)+2;
	var z = Math.floor(Math.random()*8)+2;
	
	var n = Math.floor(Math.random()*8)+2;
	var d = Math.floor(Math.random()*8)+2;

 	var fA = new Fraction(n,d,false);
 	var fB = new Fraction(y,1,false);

	var fC = fA.add(fB);

        this.setQuestion('' + 'Evaluation the expression ' + x + ' + ' + fA.getString() + ' where ' + x + ' = ' + y);

	this.setAnswer('' + fC.getOneLineString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2.c_2',6.2702,'6.ee.a.2.c','');
*/
var i_6_ee_a_2_c__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2.c_2';
        this.ns = new NameSampler();
   
        var x = this.ns.mLowerLetterOne;
	var y = Math.floor(Math.random()*8)+2;
	var z = Math.floor(Math.random()*8)+2;

        this.setQuestion('' + 'Evaluation the expression ' + x + ' - ' + z + ' where ' + x + ' = ' + y);

	var a = parseInt(y - z);

	this.setAnswer('' + a,0);
}
});
        
/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2.c_2',6.2702,'6.ee.a.2.c','');
*/
var i_6_ee_a_2_c__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2.c_2';
        this.ns = new NameSampler();
   
        var x = this.ns.mLowerLetterOne;
	var y = Math.floor(Math.random()*8)+2;
	var z = Math.floor(Math.random()*8)+2;

        this.setQuestion('' + 'Evaluation the expression ' + x + ' - ' + z + ' where ' + x + ' = ' + y);

	var a = parseInt(y - z);
        
	this.setAnswer('' + a,0);
}
});
	
/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2.c_1',6.2701,'6.ee.a.2.c','');
*/
var i_6_ee_a_2_c__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2.c_1';
        this.ns = new NameSampler();
   
        var x = this.ns.mLowerLetterOne;
	var y = Math.floor(Math.random()*8)+2;
	var z = Math.floor(Math.random()*8)+2;

        this.setQuestion('' + 'Evaluation the expression ' + x + ' + ' + z + ' where ' + x + ' = ' + y);

	var a = parseInt(y + z);
	

        this.setAnswer('' + a,0);
}
});

