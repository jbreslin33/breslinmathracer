
/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2.c_20',6.2720,'6.ee.a.2.c','');
*/
var i_6_ee_a_2_c__20 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2.c_20';
	this.ns = new NameSampler();

	var a = Math.floor(Math.random()*8)+2;
	var x = this.ns.mLowerLetterOne;
	var b = Math.floor(Math.random()*8)+2;
	var c = parseInt(a*b);
	var d = Math.floor(Math.random()*8)+2;
	var t1 = parseInt(a * d);

	var y = this.ns.mLowerLetterTwo;
	var e = Math.floor(Math.random()*8)+2;
	var t2 = parseInt(e);
	
        this.setQuestion('' + c + '/' + x + '*' + d + '-' + y + ' For ' + x + ' = ' + b + ' and ' + y + ' = ' + e);
	var x = parseInt(t1 - t2); 
        this.setAnswer('' + x,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2.c_19',6.2719,'6.ee.a.2.c','');
*/
var i_6_ee_a_2_c__19 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2.c_19';
        
	this.ns = new NameSampler();
        
	var x = this.ns.mLowerLetterOne;
	var a = Math.floor(Math.random()*8)+2;
	var b = Math.floor(Math.random()*8)+2;
	var t1 = parseInt(a*b);
	
	var y = this.ns.mLowerLetterTwo;
	var c = Math.floor(Math.random()*8)+2;
	var d = parseInt(Math.pow(c,2));
	var t2 = parseInt(d);
	
        this.setQuestion('' + b + '' + x + '-' + y + '^2 Let ' + x + ' = ' + a + ' and ' + y + ' = ' + c);
	var x = parseInt(t1 - t2); 
        this.setAnswer('' + x,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2.c_18',6.2718,'6.ee.a.2.c','');
*/
var i_6_ee_a_2_c__18 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2.c_18';
	
	var a = Math.floor(Math.random()*8)+2;
	var b = parseInt(Math.pow(a,2));
	var t1 = parseInt(b);

	var c = 0;
	var d = 3;
	var e = 2;
	var t2 = 1;
	while (d%e != 0)
	{	
		c = Math.floor(Math.random()*8)+2;
		d = parseInt(Math.pow(c,2));
		e = Math.floor(Math.random()*8)+2;
		t2 = parseInt(d/e);
	}

	var f = 0;
	var g = 0;
	var h = 0;
	var i = 3;
	var j = 2;
	var t3 = 0;
	while (i%j != 0)
	{
		f = Math.floor(Math.random()*8)+2;
		g = Math.floor(Math.random()*8)+2;
		h = parseInt(Math.pow(g,2)); //h exponents
		i = parseInt(f*h); //mult
		j = Math.floor(Math.random()*8)+2;
		t3 = parseInt(i/j);
	}

        this.setQuestion('' + a + '^2-' + c + '^2/' + e + '+' + f + '*' + g + '^2/' + j);
	var x = parseInt(t1 - t2 + t3); 
        this.setAnswer('' + x,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2.c_17',6.2717,'6.ee.a.2.c','');
*/
var i_6_ee_a_2_c__17 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2.c_17';

	var a = Math.floor(Math.random()*8)+2;
	var b = Math.floor(Math.random()*8)+2;
	var t1 = parseInt(a*b);
		
	var c = Math.floor(Math.random()*8)+2;
	var d = parseInt(Math.pow(c,2));
	var t2 = parseInt(d);
		
	var f = Math.floor(Math.random()*8)+2;
	var g = Math.floor(Math.random()*8)+2;
	var h = parseInt(f*g);
	var i = Math.floor(Math.random()*8)+2;
	var t3 = parseInt(f*i); 
	
        this.setQuestion('' + t1 + '-' + c + '^2-' + h + '/' + g + '*' + i);
	var x = parseInt(t1 - t2 - t3); 
        this.setAnswer('' + x,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2.c_16',6.2716,'6.ee.a.2.c','');
*/
var i_6_ee_a_2_c__16 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2.c_16';

	var a = Math.floor(Math.random()*8)+2;
	var b = Math.floor(Math.random()*8)+2;
	var t1 = parseInt(a*b);
	
	var c = Math.floor(Math.random()*8)+2;
	var d = parseInt(Math.pow(c,2));
	var e = Math.floor(Math.random()*8)+2;
	var t2 = parseInt(d*e);
		

	var f = Math.floor(Math.random()*8)+2;
	var g = Math.floor(Math.random()*8)+2;
	var h = parseInt(f*g);
	var t3 = parseInt(f); 

	var i = Math.floor(Math.random()*8)+2;
	var t4 = parseInt(i);

       	this.setQuestion('' + t1 + '-' + c + '^2*' + e + '+' + h + '/' + g + '-' + i);
	var x = parseInt(t1 - t2 + t3 - t4); 
        this.setAnswer('' + x,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2.c_15',6.2715,'6.ee.a.2.c','');
*/
var i_6_ee_a_2_c__15 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2.c_15';

	var a = Math.floor(Math.random()*8)+2;
	var b = Math.floor(Math.random()*8)+2;
	var t1 = parseInt(a*b);

	var c = Math.floor(Math.random()*8)+2;
	var d = Math.floor(Math.random()*8)+2;
	var e = parseInt(c*d);
	var f = Math.floor(Math.random()*8)+2;
	var t2 = parseInt(c * f); 
	
	var g = Math.floor(Math.random()*8)+2;
	var t3 = parseInt(Math.pow(g,2));
        this.setQuestion('' + a + '*' + b + '-' + e + '/' + d + '*' + f + '+' + g + '^2');
	var x = parseInt(t1 - t2 + t3); 
        this.setAnswer('' + x,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2.c_14',6.2714,'6.ee.a.2.c','');
*/
var i_6_ee_a_2_c__14 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2.c_14';
 
	var a = Math.floor(Math.random()*8)+2;
	var b = Math.floor(Math.random()*8)+2;
	var c = parseInt(a*b);
	var d = Math.floor(Math.random()*8)+2;
	var e = Math.floor(Math.random()*8)+2;
	var f = parseInt(d*e);

        this.setQuestion('' + f + '-' + c + '/' + b);

	var x = parseInt(f - a); 

        this.setAnswer('' + x,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2.c_13',6.2713,'6.ee.a.2.c','');
*/
var i_6_ee_a_2_c__13 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2.c_13';
 
	var a = 0;
	var b = 3;
        var c = 0;
        
	var f = 2;
	
        while (b%2 != 0)
        {
		a = Math.floor(Math.random()*8)+2;
		b = Math.floor(Math.random()*8)+2;
                c = parseInt(a*b);
        }


        this.setQuestion('' + c + '/' + a + '/' + f);

	var x = parseInt(b / f); 

        this.setAnswer('' + x,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2.c_12',6.2712,'6.ee.a.2.c','');
*/
var i_6_ee_a_2_c__12 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2.c_12';

        var a = Math.floor(Math.random()*8)+2;
        var b = Math.floor(Math.random()*8)+2;
        var c = parseInt(a * b);
        
	var d = Math.floor(Math.random()*8)+2;
      
        this.setQuestion('' + c + '/' + b + '*' + d);

	var x = parseInt(a * d); 

        this.setAnswer('' + x,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2.c_11',6.2711,'6.ee.a.2.c','');
*/
var i_6_ee_a_2_c__11 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2.c_11';

        var a = Math.floor(Math.random()*8)+2;
        var b = Math.floor(Math.random()*8)+2;
      
	var c = 5; 
	var d = 4; 
	var e = 1; 

	while (e%4 != 0) 
	{
        	c = Math.floor(Math.random()*8)+2;
        	d = Math.floor(Math.random()*8)+2;
		e = parseInt(c*d);
	}
	

        this.setQuestion('' + a + '^2-' + b + '+' + c + '*' + d + '/2^2');

	var x = parseInt(Math.pow(a,2) - b + e / 4 ); 

        this.setAnswer('' + x,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2.c_10',6.2710,'6.ee.a.2.c','');
*/
var i_6_ee_a_2_c__10 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2.c_10';

        var a = Math.floor(Math.random()*8)+2;

        var b = Math.floor(Math.random()*8)+2;
        
	var c = Math.floor(Math.random()*8)+2; 

	var d = Math.floor(Math.random()*8)+2;

	var e = Math.floor(Math.random()*8)+2;

        this.setQuestion('' + a + '-' + b + '+' + c + '^2-' + d + '*' + e);

	var x = parseInt(Math.pow(c,2) - d * e + a - b); 

        this.setAnswer('' + x,0);
}
});

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

