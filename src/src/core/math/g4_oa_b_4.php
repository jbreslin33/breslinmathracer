
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.b.4_24',4.0424,'4.oa.b.4','Terra Nova 31');
*/

var i_4_oa_b_4__24 = new Class(
{
Extends: FourButtonItem,
initialize: function(sheet)
{
	this.parent(sheet);
        this.mType = '4.oa.b.4_24';
        this.mChopWhiteSpace = false;
        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();
	this.mUtility = new Utility();
 
	var a = Math.floor(Math.random()*9+2);
        var b = Math.floor(Math.random()*9+2);
        var multiples  = '';

        var c = this.mUtility.lcm(a,b);
        var a1 = parseInt(c / a);
        var a2 = parseInt(c / b);

	var b1 = a1;
	var b2 = a2;
	var c1 = a1;
	var c2 = a2;
	var d1 = a1;
	var d2 = a2;

	while (a1 == b1 && a2 == b2)   
	{
		b1 = Math.floor(Math.random()*9+2);
		b2 = Math.floor(Math.random()*9+2);
	}
	while (a1 == c1 && a2 == c2)   
	{
		c1 = Math.floor(Math.random()*9+2);
		c2 = Math.floor(Math.random()*9+2);
	}
	while (a1 == d1 && a2 == d2)   
	{
		d1 = Math.floor(Math.random()*9+2);
		d2 = Math.floor(Math.random()*9+2);
	}

	this.a = '' + a1 + ' packs of ' + this.ns.mFruitOne + ' and ' + a2 + ' packs of ' + this.ns.mVegetableOne;
	this.b = '' + b1 + ' packs of ' + this.ns.mFruitOne + ' and ' + b2 + ' packs of ' + this.ns.mVegetableOne;
	this.c = '' + c1 + ' packs of ' + this.ns.mFruitOne + ' and ' + c2 + ' packs of ' + this.ns.mVegetableOne;
	this.d = '' + d1 + ' packs of ' + this.ns.mFruitOne + ' and ' + d2 + ' packs of ' + this.ns.mVegetableOne;

        this.setQuestion('' + 'A pack of ' + this.ns.mFruitOne + ' comes with ' + a + ' ' + this.ns.mFruitOne + '. A pack of ' + this.ns.mVegetableOne + ' has ' + b + ' ' + this.ns.mVegetableOne + '. ' + this.ns.mNameOne + ' wants to buy the same number of ' + this.ns.mFruitOne + ' as ' + this.ns.mVegetableOne + '. Which combination should ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' purchase to accomplish that?'    );
        this.setAnswer('' + this.a,0);

        this.mButtonA.setAnswer('' + this.a);
        this.mButtonB.setAnswer('' + this.b);
        this.mButtonC.setAnswer('' + this.c);
        this.mButtonD.setAnswer('' + this.d);
        this.shuffle(10);
        }
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.b.4_23',4.0423,'4.oa.b.4','Terra Nova 29');
*/

var i_4_oa_b_4__23 = new Class(
{
Extends: FourButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '4.oa.b.4_23';
                this.mChopWhiteSpace = false;
                this.mStripCommas = false;
                this.mNameMachine = new NameMachine();
                this.ns = new NameSampler();

                var a = 'a';
                var b = 'b';
                var c = 'c';
                var d = 'd';
		var p = new Array();
		p.push(2);
		p.push(3);
		p.push(5);
		p.push(7);
		p.push(11);
		p.push(13);
		p.push(17);
		p.push(19);
		p.push(23);
		p.push(29);

		var n = new Array();
		n.push(4);
		n.push(6);
		n.push(8);
		n.push(9);
		n.push(10);
		n.push(12);
		n.push(14);
		n.push(15);
		n.push(16);
		n.push(18);
		n.push(20);
		n.push(21);
		n.push(22);
		n.push(24);
		n.push(25);
		n.push(26);
		n.push(27);
		n.push(28);

		//a
		var aa = 0; 	
		var ab = 0; 	
		var ac = 0; 	
		var ad = 0; 	

		while (aa == ab || aa == ac || aa == ad || ab == ac || ac == ad)
		{
			aa = p[Math.floor(Math.random()*10)];
			ab = p[Math.floor(Math.random()*10)];
			ac = p[Math.floor(Math.random()*10)];
			ad = p[Math.floor(Math.random()*10)];
		} 
		a = '' + aa + ',' + ab + ',' + ac + ',' + ad;

		//b
              	var ba = 0;
                var bb = 0;
                var bc = 0;
                var bd = 0;

                while (ba == bb || ba == bc || ba == bd || bb == bc || bc == bd)
                {
                        ba = n[Math.floor(Math.random()*10)];
                        bb = p[Math.floor(Math.random()*10)];
                        bc = p[Math.floor(Math.random()*10)];
                        bd = p[Math.floor(Math.random()*10)];
                }
                b = '' + ba + ',' + bb + ',' + bc + ',' + bd;

                //c
                var ca = 0;
                var cb = 0;
                var cc = 0;
                var cd = 0;

                while (ca == cb || ca == cc || ca == cd || cb == cc || cc == cd)
                {
                        ca = n[Math.floor(Math.random()*10)];
                        cb = n[Math.floor(Math.random()*10)];
                        cc = p[Math.floor(Math.random()*10)];
                        cd = p[Math.floor(Math.random()*10)];
                }
                c = '' + ca + ',' + cb + ',' + cc + ',' + cd;

               	//d
                var da = 0;
                var db = 0;
                var dc = 0;
                var dd = 0;

                while (da == db || da == dc || da == dd || db == dc || dc == dd)
                {
                        da = n[Math.floor(Math.random()*10)];
                        db = n[Math.floor(Math.random()*10)];
                        dc = n[Math.floor(Math.random()*10)];
                        dd = p[Math.floor(Math.random()*10)];
                }
                d = '' + da + ',' + db + ',' + dc + ',' + dd;

                this.setQuestion('' + 'Which only shows prime numbers?');
                this.setAnswer('' + a,0);

                this.mButtonA.setAnswer('' + a);
                this.mButtonB.setAnswer('' + b);
                this.mButtonC.setAnswer('' + c);
                this.mButtonD.setAnswer('' + d);
                this.shuffle(10);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.b.4_22',4.0422,'4.oa.b.4','');
*/
var i_4_oa_b_4__22 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mStripCommas = false;

        this.mType = '4.oa.b.4_22';

        var a = Math.floor(Math.random()*10+91);
        var factors  = '';

        for (var i = 0; i <= a; i++)
        {
                if (parseInt(a % i) == 0)
                {
                        if (factors.length == 0)  //first one no comma
                        {
                                factors = factors + '' + i;
                        }
                        else
                        {
                                factors = factors + ',' + i;
                        }
                }
        }

        this.setQuestion('' + 'Write the factors of ' + a + ' in increasing order seperated by commas.');
        this.setAnswer('' + factors,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.b.4_21',4.0421,'4.oa.b.4','');
*/
var i_4_oa_b_4__21 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mStripCommas = false;

        this.mType = '4.oa.b.4_21';

        var a = Math.floor(Math.random()*10+81);
        var factors  = '';

        for (var i = 0; i <= a; i++)
        {
                if (parseInt(a % i) == 0)
                {
                        if (factors.length == 0)  //first one no comma
                        {
                                factors = factors + '' + i;
                        }
                        else
                        {
                                factors = factors + ',' + i;
                        }
                }
        }

        this.setQuestion('' + 'Write the factors of ' + a + ' in increasing order seperated by commas.');
        this.setAnswer('' + factors,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.b.4_20',4.0420,'4.oa.b.4','');
*/
var i_4_oa_b_4__20 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mStripCommas = false;

        this.mType = '4.oa.b.4_20';

        var a = Math.floor(Math.random()*10+71);
        var factors  = '';

        for (var i = 0; i <= a; i++)
        {
                if (parseInt(a % i) == 0)
                {
                        if (factors.length == 0)  //first one no comma
                        {
                                factors = factors + '' + i;
                        }
                        else
                        {
                                factors = factors + ',' + i;
                        }
                }
        }

        this.setQuestion('' + 'Write the factors of ' + a + ' in increasing order seperated by commas.');
        this.setAnswer('' + factors,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.b.4_19',4.0419,'4.oa.b.4','');
*/
var i_4_oa_b_4__19 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mStripCommas = false;

        this.mType = '4.oa.b.4_19';

        var a = Math.floor(Math.random()*10+61);
        var factors  = '';

        for (var i = 0; i <= a; i++)
        {
                if (parseInt(a % i) == 0)
                {
                        if (factors.length == 0)  //first one no comma
                        {
                                factors = factors + '' + i;
                        }
                        else
                        {
                                factors = factors + ',' + i;
                        }
                }
        }

        this.setQuestion('' + 'Write the factors of ' + a + ' in increasing order seperated by commas.');
        this.setAnswer('' + factors,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.b.4_18',4.0418,'4.oa.b.4','');
*/
var i_4_oa_b_4__18 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mStripCommas = false;

        this.mType = '4.oa.b.4_18';

        var a = Math.floor(Math.random()*10+51);
        var factors  = '';

        for (var i = 0; i <= a; i++)
        {
                if (parseInt(a % i) == 0)
                {
                        if (factors.length == 0)  //first one no comma
                        {
                                factors = factors + '' + i;
                        }
                        else
                        {
                                factors = factors + ',' + i;
                        }
                }
        }

        this.setQuestion('' + 'Write the factors of ' + a + ' in increasing order seperated by commas.');
        this.setAnswer('' + factors,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.b.4_17',4.0417,'4.oa.b.4','');
*/
var i_4_oa_b_4__17 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mStripCommas = false;

        this.mType = '4.oa.b.4_17';

        var a = Math.floor(Math.random()*10+41);
        var factors  = '';

        for (var i = 0; i <= a; i++)
        {
                if (parseInt(a % i) == 0)
                {
                        if (factors.length == 0)  //first one no comma
                        {
                                factors = factors + '' + i;
                        }
                        else
                        {
                                factors = factors + ',' + i;
                        }
                }
        }

        this.setQuestion('' + 'Write the factors of ' + a + ' in increasing order seperated by commas.');
        this.setAnswer('' + factors,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.b.4_16',4.0416,'4.oa.b.4','');
*/
var i_4_oa_b_4__16 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mStripCommas = false;

        this.mType = '4.oa.b.4_16';

        var a = Math.floor(Math.random()*10+31);
        var factors  = '';

        for (var i = 0; i <= a; i++)
        {
                if (parseInt(a % i) == 0)
                {
                        if (factors.length == 0)  //first one no comma
                        {
                                factors = factors + '' + i;
                        }
                        else
                        {
                                factors = factors + ',' + i;
                        }
                }
        }

        this.setQuestion('' + 'Write the factors of ' + a + ' in increasing order seperated by commas.');
        this.setAnswer('' + factors,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.b.4_15',4.0415,'4.oa.b.4','');
*/
var i_4_oa_b_4__15 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mStripCommas = false;

        this.mType = '4.oa.b.4_15';

        var a = Math.floor(Math.random()*10+21);
        var factors  = '';

        for (var i = 0; i <= a; i++)
        {
                if (parseInt(a % i) == 0)
                {
                        if (factors.length == 0)  //first one no comma
                        {
                                factors = factors + '' + i;
                        }
                        else
                        {
                                factors = factors + ',' + i;
                        }
                }
        }

        this.setQuestion('' + 'Write the factors of ' + a + ' in increasing order seperated by commas.');
        this.setAnswer('' + factors,0);
}
});



/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.b.4_14',4.0414,'4.oa.b.4','');
*/
var i_4_oa_b_4__14 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mStripCommas = false;

        this.mType = '4.oa.b.4_14';

        var a = Math.floor(Math.random()*10+11);
        var factors  = '';

        for (var i = 0; i <= a; i++)
        {
                if (parseInt(a % i) == 0)
                {
                        if (factors.length == 0)  //first one no comma
                        {
                                factors = factors + '' + i;
                        }
                        else
                        {
                                factors = factors + ',' + i;
                        }
                }
        }

        this.setQuestion('' + 'Write the factors of ' + a + ' in increasing order seperated by commas.');
        this.setAnswer('' + factors,0);
}
});



/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.b.4_13',4.0413,'4.oa.b.4','');
*/
var i_4_oa_b_4__13 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '4.oa.b.4_13';
      	this.ns = new NameSampler();

        var a = 0;
        var b = 0;
        while(a <= b || a % b != 0)
        {
                a = Math.floor(Math.random()*91+10);
                b = Math.floor(Math.random()*8+3);
        }

        this.setQuestion('' + this.ns.mNameOne + ' uses ' + this.ns.mFruitOne + ' to make ' + a + ' milliliters of smoothies. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' wants to put them in ' + b + ' milliliter cups so ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' friends can sample them. Can ' +  this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' fill each cup to the top without having any smoothie left over? Answer yes or no.'   );

        this.setAnswer('' + 'yes',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.b.4_12',4.0412,'4.oa.b.4','');
*/
var i_4_oa_b_4__12 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '4.oa.b.4_12';
        this.ns = new NameSampler();

        var a = 0;
        var b = 0;
        while(a <= b || a % b == 0)
        {
                a = Math.floor(Math.random()*91+10);
                b = Math.floor(Math.random()*8+3);
        }

        this.setQuestion('' + this.ns.mNameOne + ' uses ' + this.ns.mFruitOne + ' to make ' + a + ' milliliters of smoothies. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' wants to put them in ' + b + ' milliliter cups so ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' friends can sample them. Can ' +  this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' fill each cup to the top without having any smoothie left over? Answer yes or no.'   );

        this.setAnswer('' + 'no',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.b.4_11',4.0411,'4.oa.b.4','');
*/
var i_4_oa_b_4__11 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '4.oa.b.4_11';
        this.ns = new NameSampler();
	this.mUtility = new Utility();

	var a = 0;
	var b = 0;
	while(a == b)
	{
        	a = Math.floor(Math.random()*8+3);
        	b = Math.floor(Math.random()*8+3);
	}
	var c = this.mUtility.lcm(a,b); 

        this.setQuestion('' + this.ns.mNameOne + ' is watching some little kids. To keep their attention he starts a new game of ' + this.ns.mPlayedActivityOne + ' every ' + a + ' minutes and a new game of ' + this.ns.mPlayedActivityTwo + ' every ' + b + ' minutes. At exactly 2 P.M. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' started both games. How many minutes will go by till ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' starts both games at the same time again?');
        this.setAnswer('' + c,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.b.4_10',4.0410,'4.oa.b.4','');
*/
var i_4_oa_b_4__10 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '4.oa.b.4_10';

        var a = Math.floor(Math.random()*8+3);
        var multiples  = '';
        this.mStripCommas = false;


        for (var i = 1; i < 7; i++)
        {
                if (multiples.length == 0)  //first one no comma
                {
                        multiples = multiples + '' + a;
                }
                else
                {
                        var nextMultiple = parseInt(a * i);
                        multiples = multiples + ',' + nextMultiple;
                }
        }

        this.setQuestion('Write the first 6 multiples of ' + a + ' seperated by commas. For example the first 6 multiples of 2 would be written: 2,4,6,8,10,12');
        this.setAnswer('' + multiples,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.b.4_9',4.0409,'4.oa.b.4','');
*/
var i_4_oa_b_4__9 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '4.oa.b.4_9';

        this.setQuestion('' + 'Write true or false. All composite numbers are even.')
        this.setAnswer('' + 'false',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.b.4_8',4.0408,'4.oa.b.4','');
*/
var i_4_oa_b_4__8 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '4.oa.b.4_8';

        this.setQuestion('' + 'Write true or false. All composite numbers are odd.')
        this.setAnswer('' + 'false',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.b.4_7',4.0407,'4.oa.b.4','');
*/
var i_4_oa_b_4__7 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '4.oa.b.4_7';

        this.setQuestion('' + 'Write true or false. All prime numbers are even.')
        this.setAnswer('' + 'false',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.b.4_6',4.0406,'4.oa.b.4','');
*/
var i_4_oa_b_4__6 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '4.oa.b.4_6';

	this.setQuestion('' + 'Write true or false. All prime numbers are odd.')
        this.setAnswer('' + 'false',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.b.4_5',4.0405,'4.oa.b.4','');
*/
var i_4_oa_b_4__5 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '4.oa.b.4_5';
        this.mStripCommas = false;
        this.ns = new NameSampler();
	this.mUtility = new Utility();
	

        var a = Math.floor(Math.random()*9+2);
        var b = Math.floor(Math.random()*9+2);
        var multiples  = '';
	
	var c = this.mUtility.lcm(a,b); 
	var d = parseInt(c / a);
	var e = parseInt(c / b);

        this.setQuestion('' + this.ns.mNameOne + ' is at a vegetable stand. The ' + this.ns.mVegetableOne + ' are sold ' + a + ' to a bag and the ' + this.ns.mVegetableTwo + ' are sold ' + b + ' to a bag. What is the least amount of bags of ' + this.ns.mVegetableOne + ' and ' + this.ns.mVegetableTwo + ' ' +  this.ns.mNameOne + ' can buy so that ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' will end up with the same amount of each vegetable. Put your answer in to form: x,y where x is the bags of ' + this.ns.mVegetableOne + ' and y is the bags of ' + this.ns.mVegetableTwo + '.');
        this.setAnswer('' + d + ',' + e,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.b.4_4',4.0404,'4.oa.b.4','');
*/
var i_4_oa_b_4__4 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '4.oa.b.4_4';
        this.ns = new NameSampler();
        this.mStripCommas = false;

        var a = Math.floor(Math.random()*8+3);
        var multiples  = '';

        for (var i = 1; i < 5; i++)
        {
		if (multiples.length == 0)  //first one no comma
              	{
                        multiples = multiples + '' + a;
                }
                else
                {
			var nextMultiple = parseInt(a * i);
                	multiples = multiples + ',' + nextMultiple;
                }
        }

        this.setQuestion('' + this.ns.mNameOne + ' made up a game. After each round ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' gets ' + a + ' points. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' keeps track of the score by writing the total score after each round seperated by a comma. What would that look like after 4 rounds? For example if each round was worth 2 points it would look like this: 2,4,6,8');
        this.setAnswer('' + multiples,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.b.4_3',4.0403,'4.oa.b.4','');
*/
var i_4_oa_b_4__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '4.oa.b.4_3';
        this.ns = new NameSampler();
    
	var a = Math.floor(Math.random()*100+1);
        var count = 0;
	var answer = '';

        for (var i = 0; i <= a; i++)
        {
                if (parseInt(a % i) == 0)
                {
                        count++;
                }
        }

	if (count < 3)
	{
		answer = 'prime';
	}
	else
	{
		answer = 'composite';
	}

        this.setQuestion('' + 'Is the number ' + a + ' prime or composite?');
        this.setAnswer('' + answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.b.4_2',4.0402,'4.oa.b.4','');
*/
var i_4_oa_b_4__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);
   	
	this.mStripCommas = false;

        this.mType = '4.oa.b.4_2';

        var a = Math.floor(Math.random()*10+1);
        var factors  = '';

        for (var i = 0; i <= a; i++)
        {
                if (parseInt(a % i) == 0)
                {
			if (factors.length == 0)  //first one no comma
			{
				factors = factors + '' + i;
			}
			else
			{
				factors = factors + ',' + i;
			}
		}
        }

        this.setQuestion('' + 'Write the factors of ' + a + ' in increasing order seperated by commas.');
        this.setAnswer('' + factors,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.b.4_1',4.0401,'4.oa.b.4','');
*/
var i_4_oa_b_4__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '4.oa.b.4_1';
        this.ns = new NameSampler();

        var a = Math.floor(Math.random()*10+5);
	var count = 0; 

	for (var i = 0; i <= a; i++)
        {
		if (parseInt(a % i) == 0)
		{
			count++;
		}
        }

        this.setQuestion('' + this.ns.mNameOne + ' has ' + a + ' ' + this.ns.mThingOne + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' wants to put them in rows. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' wants each row to have the same amount of ' + this.ns.mThingOne + '. How many different ways can ' + this.ns.mNameOne + ' arrange ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' ' + this.ns.mThingOne + ' while still making sure that all the rows have an equal amount of ' + this.ns.mThingOne + '?');
        this.setAnswer('' + count,0);
}
});

