
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.3_14',4.0314,'4.oa.a.3','Terra Nova 7');
*/

var i_4_oa_a_3__14 = new Class(
{
Extends: FourButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '4.oa.a.3_14';
                this.mChopWhiteSpace = false;
                this.mNameMachine = new NameMachine();
                this.ns = new NameSampler();

                this.x = 4;
                this.y = 2;
                this.z = 2;
		this.r = 0;
                this.a = 0;
                this.b = 0;
                this.c = 0;
		this.m = 0;
		while (this.m == 0 || this.a == this.b || this.a == this.c || this.a == this.m || this.b == this.c || this.b == this.m || this.c == this.m)
		{
                	this.x = Math.floor(Math.random()*8)+2;
                	this.y = Math.floor(Math.random()*5)+5;
                	this.r = Math.floor(Math.random()*this.x)+1;
			this.z = parseInt(this.x * this.y) + this.r ;

                	this.a = Math.floor(Math.random()*9)+1;
                	this.b = Math.floor(Math.random()*9)+1;
                	this.c = Math.floor(Math.random()*9)+1;
			this.m = this.z % this.x;
		}

                this.setQuestion('' + this.ns.mNameOne + ' had ' + this.z + ' ' + this.ns.mThingOne + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' divided them equally among ' + this.x + ' friends. How many ' + this.ns.mThingOne + ' did ' + this.ns.mNameOne + ' have left?');

                this.answer = '' + this.m;
		this.setAnswer('' + this.answer,0);
                this.mButtonA.setAnswer('' + this.answer);
                this.mButtonB.setAnswer('' + this.a);
                this.mButtonC.setAnswer('' + this.b);
                this.mButtonD.setAnswer('' + this.c);
                this.shuffle(10);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.3_13',4.0313,'4.oa.a.3','Terra Nova 5');
*/

var i_4_oa_a_3__13 = new Class(
{
Extends: FourButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '4.oa.a.3_13';
                this.mChopWhiteSpace = false;
                this.mNameMachine = new NameMachine();
                this.ns = new NameSampler();

                this.a = Math.floor(Math.random()*9)+31;
                this.b = Math.floor(Math.random()*9)+21;
                this.c = parseInt(this.a + this.b);

                this.setQuestion('' + this.ns.mSchoolOne + ' auditorium has ' + this.a + ' rows of seats. There are ' +  this.b + ' seats in each row. How many seats are in the auditorium?');

                this.r = Math.floor(Math.random()*4);

                this.answer = '';
                if (this.r == 0)
                {
                        this.answer = '' + 'None of these';
                }
                else
                {
                        this.answer = parseInt(this.a * this.b);
                }
                this.setAnswer('' + this.answer,0);

                this.mButtonA.setAnswer('' + this.answer);
                if (this.r == 0)
                {
                        this.mButtonB.setAnswer('' + parseInt(this.a + this.b));
                }
                else
                {
                        this.mButtonB.setAnswer('' + 'None of these');
                }
                this.mButtonC.setAnswer('' + parseInt(this.c / this.b) );
                this.mButtonD.setAnswer('' + parseInt( (this.a - 1)  * this.b) );
                this.shuffle(10);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.3_12',4.0312,'4.oa.a.3','');
*/
var i_4_oa_a_3__12 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '4.oa.a.3_12';
        this.ns = new NameSampler();

	var a = 0;
	var b = 0;
	var c = 0;
	var d = 0;
	var e = 0;
	var f = 0;
	var g = 0;
	var h = 1;

	while (h != 0)
	{
        	a = Math.floor(Math.random()*20+10);
        	b = Math.floor(Math.random()*20+10);
        	c = Math.floor(Math.random()*20+10);
        	d = Math.floor(Math.random()*20+10);

        	e = Math.floor(Math.random()*8+2);
        	f = parseInt(a + b + c + d);
        	g = parseInt(f / e);
		h = parseInt(f % e);
	}

        this.setQuestion('' + 'There are ' + a + ' girls and ' + b + ' boys from ' + this.ns.mSchoolOne + '. There are ' + c + ' girls and ' + d + ' boys from ' + this.ns.mSchoolTwo + '. ' + this.ns.mNameOne + ' has the job of making ' + e + ' ' + this.ns.mPlayedActivityOne + ' teams of equal size out of all the students. How many students will be on each team?');

        this.setAnswer('' + g,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.3_11',4.0311,'4.oa.a.3','');
*/
var i_4_oa_a_3__11 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '4.oa.a.3_11';
        this.ns = new NameSampler();

        var a = Math.floor(Math.random()*10+10);
        var b = parseInt(a * 2);
        var c = Math.floor(Math.random()*8+2);
        var d = parseInt(a - c);

        this.setQuestion('' + this.ns.mNameOne + ' plays ' + b + ' games of ' + this.ns.mPlayedActivityOne + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' wins half of them and loses the other half. ' + c + ' of the games ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' wins are against ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' ' + this.ns.mFamilyOne + '. How many games did ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' win that were not against ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' ' + this.ns.mFamilyOne + '?');

        this.setAnswer('' + d,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.3_10',4.0310,'4.oa.a.3','');
*/
var i_4_oa_a_3__10 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '4.oa.a.3_10';
        this.ns = new NameSampler();

        var a = Math.floor(Math.random()*20+10);
	var b = parseInt(a * 2);
	
        var d = parseInt(a + b);

        this.setQuestion('' + this.ns.mNameOne + ' and ' + this.ns.mNameTwo + ' play ' + this.ns.mVideoGameOne + '. They score a combined total of ' + d + ' points. If ' + this.ns.mNameOne + ' scores twice as much as ' + this.ns.mNameTwo + ' then how many points did ' + this.ns.mNameOne + ' score?');

        this.setAnswer('' + b,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.3_9',4.0309,'4.oa.a.3','');
*/
var i_4_oa_a_3__9 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '4.oa.a.3_9';
        this.ns = new NameSampler();

	var a = 0;
	var b = 0;
	var c = 13;
	var d = 12;
	var e = 0;
	while (c % d !=0 || a == d)
	{
        	a = Math.floor(Math.random()*12+8);
        	b = Math.floor(Math.random()*8+2);
        	c = parseInt(a * b);
        	d = Math.floor(Math.random()*8+2);
		e = parseInt(c / d);
	}

        this.setQuestion('' + this.ns.mNameOne + ' is getting ready for a party so ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' makes ' + a + ' plates with ' + b + ' pieces of candy on each plate. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' then finds out that there will only be ' + d + ' people at the party so ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' now only needs ' + d + ' plates. If ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' divides up the candy evenly to the new amount of plates then how many pieces of candy will be on each plate?'    );

        this.setAnswer('' + e,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.3_8',4.0308,'4.oa.a.3','');
*/
var i_4_oa_a_3__8 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '4.oa.a.3_8';
        this.ns = new NameSampler();

        var a = Math.floor(Math.random()*8+20);
        var b = Math.floor(Math.random()*2+3);
        var c = Math.floor(Math.random()*8+2);
        var d = parseInt(a * b);
        var e = parseInt(d + c);

        this.setQuestion('' + this.ns.mNameOne + ' plays ' + this.ns.mPlayedActivityOne + ' for ' + a + ' minutes ' + b + ' nights a week. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' also plays ' + this.ns.mPlayedActivityOne + ' for ' + c + ' minutes on Sunday morning. How many minutes does ' + this.ns.mNameOne + ' play ' + this.ns.mPlayedActivityOne + ' a week?');

        this.setAnswer('' + e,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.3_7',4.0307,'4.oa.a.3','');
*/
var i_4_oa_a_3__7 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '4.oa.a.3_7';
        this.ns = new NameSampler();

	var a = 0;
	var b = 0;
	var c = 0;
	var d = 0;
	var e = 0;
	var f = 1;

	while(f != 0)
	{
        	a = Math.floor(Math.random()*8+2);
        	b = Math.floor(Math.random()*8+2);
        	c = Math.floor(Math.random()*8+2);
        	d = parseInt(a * b);
        	e = parseInt(d / c);
        	f = parseInt(d % c);
	}

        this.setQuestion('' + this.ns.mNameOne + ' bought ' + a + ' packs of doggie treats. Each pack comes with ' + b + ' treats. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' wants to give an equal amount of treats to ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' ' + c + ' dogs. How many treats should ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' give to each of ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' dogs?');
        this.setAnswer('' + e,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.3_6',4.0306,'4.oa.a.3','');
*/
var i_4_oa_a_3__6 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,450,200,255,145,100,50,580,100);

       	this.mType = '4.oa.a.3_6';
        this.ns = new NameSampler();

        a = Math.floor(Math.random()*10+20);
        b = Math.floor(Math.random()*8+2);
        c = Math.floor(Math.random()*8+2);

	e = parseInt(b * c);	
	f = parseInt(a + e);	

        this.setQuestion('' + this.ns.mNameOne + ' has completed ' + a + ' levels in ' + this.ns.mVideoGameOne + ' so far. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' plans to conquer ' + b + ' levels a day over the next ' + c + ' days. If ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' does this how many levels will ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' have completed?');
        this.setAnswer('' + f,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.3_5',4.0305,'4.oa.a.3','');
*/
var i_4_oa_a_3__5 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,450,200,255,145,100,50,580,100);

       	this.mType = '4.oa.a.3_5';
        this.ns = new NameSampler();

	var a = 0;
	var b = 0;
	var c = 0;
	var d = 0;
	var e = 0;
	var f = 0;
	var g = 0;
	var h = 1;

	while (h != 0 || g > 10)
	{
        	a = Math.floor(Math.random()*10+20);
        	b = Math.floor(Math.random()*10+20);
        	c = Math.floor(Math.random()*10+20);

        	d = Math.floor(Math.random()*8+2);
		e = parseInt(d + 1);	

		f = parseInt(a + b + c);
		g = parseInt(f / e); 
		h = parseInt(f % e);
	}

        this.setQuestion('' + this.ns.mNameOne + ' has some colored pencils that ' +  this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' wants to share equally with ' +  this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,2) + ' and ' + d + ' friends. ' +  this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' has ' + a + ' ' + this.ns.mColorOne + ' pencils, ' + b + ' ' + this.ns.mColorTwo + ' pencils and ' + c + ' ' + this.ns.mColorThree + ' pencils. How many pencils will each person get?');
        this.setAnswer('' + g,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.3_4',4.0304,'4.oa.a.3','ms');
*/
var i_4_oa_a_3__4 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,450,200,255,145,100,50,580,100);

       	this.mType = '4.oa.a.3_4';
        this.ns = new NameSampler();

	var a = 0;
	var b = 0;
	var c = 0;
	var d = 0;
	var e = 0;

	while (e < 1 || e >= c)
	{
        	a = Math.floor(Math.random()*60+20);
        	b = Math.floor(Math.random()*8+2);
        	c = Math.floor(Math.random()*8+2);
		d = parseInt(b * c);
		e = parseInt(a - d); 
	}

        this.setQuestion('At ' + this.ns.mSchoolOne + ' there are ' + a + ' students in the ' + this.ns.mPlayedActivityOne + ' club. The club president makes ' + b + ' teams of ' + c + ' students. The left over students will act as referees. How many students will be referees?');
        this.setAnswer('' + e,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.3_3',4.0303,'4.oa.a.3','');
*/
var i_4_oa_a_3__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,450,200,255,145,100,50,580,100);

       	this.mType = '4.oa.a.3_3';
        this.ns = new NameSampler();

        var a = Math.floor(Math.random()*50+350);
        var b = Math.floor(Math.random()*10+15);
        var c = parseInt(a - b);
	var d = parseInt(a + c);

        this.setQuestion('' + this.ns.mSchoolOne + ' had a talent show on Friday and Saturday night. On Friday they sold ' + a + ' tickets. On Saturday they sold ' + b + ' fewer tickets than on Friday. How many tickets did they sell ' + ' ' + this.ns.mSum + '?');
        this.setAnswer('' + d,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.3_2',4.0302,'4.oa.a.3','subtract then divide evenly');
*/
var i_4_oa_a_3__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,450,200,255,145,100,50,580,100);

       	this.mType = '4.oa.a.3_2';
        this.ns = new NameSampler();

	var a = 0;
	var b = 3;
	var c = 0;
	var d = 13;
	var e = 13;

	while(d % c != 0)
	{		
                a = Math.floor(Math.random()*20+60);
                b = Math.floor(Math.random()*10+15);
                c = Math.floor(Math.random()*8+2);
		d = parseInt(a - b);
		e = parseInt(d / c);
	}
        this.setQuestion('' + this.ns.mNameOne + ' had ' + a + ' video games for ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' fun times game console. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' does not play ' + b + ' of the games anymore so ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' gave them to ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' friends. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' has boxes to keep the games in. Each box can hold ' + c + ' games. How many boxes will ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' need to store ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' remaining games?'   );
        this.setAnswer('' + e,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.3_1',4.0301,'4.oa.a.3','');
*/
var i_4_oa_a_3__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,450,200,255,145,100,50,580,100);

       	this.mType = '4.oa.a.3_1';
        this.ns = new NameSampler();

	var a = 0;
	var b = 0;
	var c = 0;
	var d = 0;
	var e = 13;
	var f = 13;

	while(e % 8 != 0)
	{		
                a = Math.floor(Math.random()*10+20);
                b = Math.floor(Math.random()*10+20);
                c = Math.floor(Math.random()*2+2);
                d = Math.floor(Math.random()*2+2);
		e = parseInt(a + b + c + d);
		f = parseInt(e / 8);
	}
	this.setQuestion('The class that ' + this.ns.mNameOne + ' is in is having a pizza party. The are ' + a + ' girls and ' + b + ' boys in the class. There will also be ' + c + ' parents and ' + d + ' teachers at the party. Each pizza has 8 slices. How many pizzas should they order so that everyone will have 1 slice.');
        this.setAnswer('' + f,0);
}
});

