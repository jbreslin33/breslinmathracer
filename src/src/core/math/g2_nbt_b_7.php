
/*
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.7_14',4.0181,'2.nbt.b.7','' );
*/
var i_2_nbt_b_7__14 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,500,25,275,50,50,50,625,100);
        this.ns = new NameSampler();
        this.mRaphael = Raphael(10,100,600,350);
        this.mChopWhiteSpace = false;
        this.mType = '2.nbt.b.7_14';

	var a = 0;
	var b = 0;
	var c = 0;
	var d = 0;
	var e = 0;
	var f = 0;
	
	var x = 0;
	var y = 0;
	var z = -1;

	while (z < 0)
	{
        	a = Math.floor( (Math.random()*3)+1);
		b = Math.floor( (Math.random()*4)+1);
		c = Math.floor( (Math.random()*5)+1);
        
		d = Math.floor( (Math.random()*3)+1);
		e = Math.floor( (Math.random()*4)+1);
		f = Math.floor( (Math.random()*5)+1);

        	x = parseInt(parseInt(a * 100) + parseInt(b* 10) + c);
       	 	y = parseInt(parseInt(d * 100) + parseInt(e* 10) + f);
		z = parseInt( x - y);
	}
        this.setQuestion('' + this.ns.mNameOne + ' looked at the blocks and the problem. Solve this problem for ' + this.ns.mNameOne + '. ' + x + ' - ' + y);
        this.setAnswer('' + z,0);
},
createQuestionShapes: function()
{
	new RaphaelText(50,20,this,0,0,1,"#000000",.5,false,"" + "Hundreds",16);
	new RaphaelText(150,20,this,0,0,1,"#000000",.5,false,"" + "Tens",16);
	new RaphaelText(250,20,this,0,0,1,"#000000",.5,false,"" + "Ones",16);
	new RaphaelText(350,20,this,0,0,1,"#000000",.5,false,"" + "Hundreds",16);
	new RaphaelText(450,20,this,0,0,1,"#000000",.5,false,"" + "Tens",16);
	new RaphaelText(550,20,this,0,0,1,"#000000",.5,false,"" + "Ones",16);
	
	this.addQuestionShape(new LineOne (100,150, 475,150,this.mGame,this.mRaphael,"#000",.5,false));
        this.addQuestionShape(new Triangle(75,150,100,125,100,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.5,false));
        this.addQuestionShape(new Triangle(500,150,475,125,475,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.5,false));

}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.7_13',4.0180,'2.nbt.b.7','' );
*/
var i_2_nbt_b_7__13 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,500,25,275,50,50,50,625,100);
        this.ns = new NameSampler();
        this.mType = '2.nbt.b.7_13';

        var a = Math.floor( (Math.random()*9)+1);
        var b = Math.floor( (Math.random()*9)+1);
        var c = Math.floor( (Math.random()*9)+1);

        var d = Math.floor( (Math.random()*9)+1);
        var e = Math.floor( (Math.random()*9)+1);
        var f = Math.floor( (Math.random()*9)+1);

        var ah = parseInt(a * 100);
        var bt = parseInt(b * 10);

        var dh = parseInt(d * 100);
        var et = parseInt(d * 10);

        var atotal = parseInt(ah + bt + c);
        var btotal = parseInt(dh + et + f);
        var t = parseInt(atotal + btotal);

        tens_onesA = parseInt(bt + c);
        tens_onesB = parseInt(et + f);

        this.setQuestion('' + this.ns.mNameOne + ' is adding ' + this.ns.mNameMachine.getNumberName(a) + ' hundred ' + this.ns.mNameMachine.getNumberName(tens_onesA) + ' and ' + this.ns.mNameMachine.getNumberName(d) + ' hundred ' + this.ns.mNameMachine.getNumberName(tens_onesB)  + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' adds them by doing this. ' + ah + ' + ' + dh + ' + ' + bt + ' + ' + et + ' + ' + c + ' +  __. Help ' + this.ns.mNameOne + ' by filling in the missing number.');
        this.setAnswer('' + f, 0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.7_12',4.0179,'2.nbt.b.7','' );
*/
var i_2_nbt_b_7__12 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,500,25,275,50,50,50,625,100);
        this.ns = new NameSampler();
        this.mType = '2.nbt.b.7_12';

        var a = Math.floor( (Math.random()*9)+1);
        var b = Math.floor( (Math.random()*9)+1);
        var c = Math.floor( (Math.random()*9)+1);

        var d = Math.floor( (Math.random()*9)+1);
        var e = Math.floor( (Math.random()*9)+1);
        var f = Math.floor( (Math.random()*9)+1);

        var ah = parseInt(a * 100);
        var bt = parseInt(b * 10);

        var dh = parseInt(d * 100);
        var et = parseInt(d * 10);

        var atotal = parseInt(ah + bt + c);
        var btotal = parseInt(dh + et + f);
        var t = parseInt(atotal + btotal);

        tens_onesA = parseInt(bt + c);
        tens_onesB = parseInt(et + f);

        this.setQuestion('' + this.ns.mNameOne + ' is adding ' + this.ns.mNameMachine.getNumberName(a) + ' hundred ' + this.ns.mNameMachine.getNumberName(tens_onesA) + ' and ' + this.ns.mNameMachine.getNumberName(d) + ' hundred ' + this.ns.mNameMachine.getNumberName(tens_onesB)  + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' adds them by doing this. ' + ah + ' + ' + dh + ' + ' + bt + ' + ' + et + ' __ + ' + f + '. Help ' + this.ns.mNameOne + ' by filling in the missing number.');
        this.setAnswer('' + c, 0);
}
});



/*
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.7_11',4.0178,'2.nbt.b.7','' );
*/
var i_2_nbt_b_7__11 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,500,25,275,50,50,50,625,100);
        this.ns = new NameSampler();
        this.mType = '2.nbt.b.7_11';

        var a = Math.floor( (Math.random()*9)+1);
        var b = Math.floor( (Math.random()*9)+1);
        var c = Math.floor( (Math.random()*9)+1);

        var d = Math.floor( (Math.random()*9)+1);
        var e = Math.floor( (Math.random()*9)+1);
        var f = Math.floor( (Math.random()*9)+1);

        var ah = parseInt(a * 100);
        var bt = parseInt(b * 10);

        var dh = parseInt(d * 100);
        var et = parseInt(d * 10);

        var atotal = parseInt(ah + bt + c);
        var btotal = parseInt(dh + et + f);
        var t = parseInt(atotal + btotal);

        tens_onesA = parseInt(bt + c);
        tens_onesB = parseInt(et + f);

        this.setQuestion('' + this.ns.mNameOne + ' is adding ' + this.ns.mNameMachine.getNumberName(a) + ' hundred ' + this.ns.mNameMachine.getNumberName(tens_onesA) + ' and ' + this.ns.mNameMachine.getNumberName(d) + ' hundred ' + this.ns.mNameMachine.getNumberName(tens_onesB)  + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' adds them by doing this. ' + ah + ' + ' + dh + ' + ' + bt + ' __ + ' + c + ' + ' + f + '. Help ' + this.ns.mNameOne + ' by filling in the missing number.');
        this.setAnswer('' + et, 0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.7_10',4.0177,'2.nbt.b.7','' );
*/
var i_2_nbt_b_7__10 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,500,25,275,50,50,50,625,100);
        this.ns = new NameSampler();
        this.mType = '2.nbt.b.7_10';

        var a = Math.floor( (Math.random()*9)+1);
        var b = Math.floor( (Math.random()*9)+1);
        var c = Math.floor( (Math.random()*9)+1);

        var d = Math.floor( (Math.random()*9)+1);
        var e = Math.floor( (Math.random()*9)+1);
        var f = Math.floor( (Math.random()*9)+1);

        var ah = parseInt(a * 100);
        var bt = parseInt(b * 10);

        var dh = parseInt(d * 100);
        var et = parseInt(d * 10);

        var atotal = parseInt(ah + bt + c);
        var btotal = parseInt(dh + et + f);
        var t = parseInt(atotal + btotal);

        tens_onesA = parseInt(bt + c);
        tens_onesB = parseInt(et + f);

        this.setQuestion('' + this.ns.mNameOne + ' is adding ' + this.ns.mNameMachine.getNumberName(a) + ' hundred ' + this.ns.mNameMachine.getNumberName(tens_onesA) + ' and ' + this.ns.mNameMachine.getNumberName(d) + ' hundred ' + this.ns.mNameMachine.getNumberName(tens_onesB)  + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' adds them by doing this. ' + ah + ' + ' + dh + ' + __ + ' + et + ' + ' + c + ' + ' + f + '. Help ' + this.ns.mNameOne + ' by filling in the missing number.');
        this.setAnswer('' + bt, 0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.7_9',4.0176,'2.nbt.b.7','' );
*/
var i_2_nbt_b_7__9 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,500,25,275,50,50,50,625,100);
        this.ns = new NameSampler();
        this.mType = '2.nbt.b.7_9';

        var a = Math.floor( (Math.random()*9)+1);
        var b = Math.floor( (Math.random()*9)+1);
        var c = Math.floor( (Math.random()*9)+1);

        var d = Math.floor( (Math.random()*9)+1);
        var e = Math.floor( (Math.random()*9)+1);
        var f = Math.floor( (Math.random()*9)+1);

        var ah = parseInt(a * 100);
        var bt = parseInt(b * 10);

        var dh = parseInt(d * 100);
        var et = parseInt(d * 10);

        var atotal = parseInt(ah + bt + c);
        var btotal = parseInt(dh + et + f);
        var t = parseInt(atotal + btotal);

        tens_onesA = parseInt(bt + c);
        tens_onesB = parseInt(et + f);

        this.setQuestion('' + this.ns.mNameOne + ' is adding ' + this.ns.mNameMachine.getNumberName(a) + ' hundred ' + this.ns.mNameMachine.getNumberName(tens_onesA) + ' and ' + this.ns.mNameMachine.getNumberName(d) + ' hundred ' + this.ns.mNameMachine.getNumberName(tens_onesB)  + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' adds them by doing this. ' + ah + ' + __ ' + ' + ' + bt + ' + ' + et + ' + ' + c + ' + ' + f + '. Help ' + this.ns.mNameOne + ' by filling in the missing number.');
        this.setAnswer('' + dh, 0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.7_8',4.0175,'2.nbt.b.7','' );
*/
var i_2_nbt_b_7__8 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,500,25,275,50,50,50,625,100);
        this.ns = new NameSampler();
        this.mType = '2.nbt.b.7_8';

        var a = Math.floor( (Math.random()*9)+1);
        var b = Math.floor( (Math.random()*9)+1);
        var c = Math.floor( (Math.random()*9)+1);

        var d = Math.floor( (Math.random()*9)+1);
        var e = Math.floor( (Math.random()*9)+1);
        var f = Math.floor( (Math.random()*9)+1);

        var ah = parseInt(a * 100);
        var bt = parseInt(b * 10);

        var dh = parseInt(d * 100);
        var et = parseInt(d * 10);

        var atotal = parseInt(ah + bt + c);
        var btotal = parseInt(dh + et + f);
        var t = parseInt(atotal + btotal);

       	tens_onesA = parseInt(bt + c);
       	tens_onesB = parseInt(et + f);

        this.setQuestion('' + this.ns.mNameOne + ' is adding ' + this.ns.mNameMachine.getNumberName(a) + ' hundred ' + this.ns.mNameMachine.getNumberName(tens_onesA) + ' and ' + this.ns.mNameMachine.getNumberName(d) + ' hundred ' + this.ns.mNameMachine.getNumberName(tens_onesB)  + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' adds them by doing this. __' + ' + ' + dh + ' + ' + bt + ' + ' + et + ' + ' + c + ' + ' + f + '. Help ' + this.ns.mNameOne + ' by filling in the missing number.');
        this.setAnswer('' + ah, 0);
}
});
 


/*
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.7_7',4.0174,'2.nbt.b.7','' );
*/
var i_2_nbt_b_7__7 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,500,25,275,50,50,50,625,100);
        this.ns = new NameSampler();
        this.mType = '2.nbt.b.7_7';

        var a = Math.floor( (Math.random()*9)+1);
        var b = Math.floor( (Math.random()*9)+1);
        var c = Math.floor( (Math.random()*9)+1);

        var d = Math.floor( (Math.random()*9)+1);
        var e = Math.floor( (Math.random()*9)+1);
        var f = Math.floor( (Math.random()*9)+1);

        var ah = parseInt(a * 100);
        var bt = parseInt(b * 10);

        var dh = parseInt(d * 100);
        var et = parseInt(d * 10);

        var atotal = parseInt(ah + bt + c);
        var btotal = parseInt(dh + et + f);
        var t = parseInt(atotal + btotal);
	this.setQuestion('' + this.ns.mNameOne + ' is adding ' + atotal + ' + ' + btotal + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' adds them by doing this. ' + ah + ' + ' + dh + ' + ' + bt + ' + ' + et + ' + ' + c + ' + __' + '. Help ' + this.ns.mNameOne + ' by filling in the missing number.' );
        this.setAnswer('' + f, 0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.7_6',4.0173,'2.nbt.b.7','' );
*/
var i_2_nbt_b_7__6 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,500,25,275,50,50,50,625,100);
        this.ns = new NameSampler();
        this.mType = '2.nbt.b.7_6';

        var a = Math.floor( (Math.random()*9)+1);
        var b = Math.floor( (Math.random()*9)+1);
        var c = Math.floor( (Math.random()*9)+1);

        var d = Math.floor( (Math.random()*9)+1);
        var e = Math.floor( (Math.random()*9)+1);
        var f = Math.floor( (Math.random()*9)+1);

        var ah = parseInt(a * 100);
        var bt = parseInt(b * 10);

        var dh = parseInt(d * 100);
        var et = parseInt(d * 10);

        var atotal = parseInt(ah + bt + c);
        var btotal = parseInt(dh + et + f);
        var t = parseInt(atotal + btotal);
	this.setQuestion('' + this.ns.mNameOne + ' is adding ' + atotal + ' + ' + btotal + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' adds them by doing this. ' + ah + ' + ' + dh + ' + ' + bt + ' + ' + et + ' + __' + ' + ' + f + '. Help ' + this.ns.mNameOne + ' by filling in the missing number.');
        this.setAnswer('' + c, 0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.7_5',4.0172,'2.nbt.b.7','' );
*/
var i_2_nbt_b_7__5 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,500,25,275,50,50,50,625,100);
        this.ns = new NameSampler();
        this.mType = '2.nbt.b.7_5';

        var a = Math.floor( (Math.random()*9)+1);
        var b = Math.floor( (Math.random()*9)+1);
        var c = Math.floor( (Math.random()*9)+1);

        var d = Math.floor( (Math.random()*9)+1);
        var e = Math.floor( (Math.random()*9)+1);
        var f = Math.floor( (Math.random()*9)+1);

        var ah = parseInt(a * 100);
        var bt = parseInt(b * 10);

        var dh = parseInt(d * 100);
        var et = parseInt(d * 10);

        var atotal = parseInt(ah + bt + c);
        var btotal = parseInt(dh + et + f);
        var t = parseInt(atotal + btotal);
	this.setQuestion('' + this.ns.mNameOne + ' is adding ' + atotal + ' + ' + btotal + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' adds them by doing this. ' + ah + ' + ' + dh + ' + ' + bt + ' + __' + ' + ' + c + ' + ' + f + '. Help ' + this.ns.mNameOne + ' by filling in the missing number.');
        this.setAnswer('' + et, 0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.7_4',4.0171,'2.nbt.b.7','' );
*/
var i_2_nbt_b_7__4 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,500,25,275,50,50,50,625,100);
        this.ns = new NameSampler();
        this.mType = '2.nbt.b.7_4';

        var a = Math.floor( (Math.random()*9)+1);
        var b = Math.floor( (Math.random()*9)+1);
        var c = Math.floor( (Math.random()*9)+1);

        var d = Math.floor( (Math.random()*9)+1);
        var e = Math.floor( (Math.random()*9)+1);
        var f = Math.floor( (Math.random()*9)+1);

        var ah = parseInt(a * 100);
        var bt = parseInt(b * 10);

        var dh = parseInt(d * 100);
        var et = parseInt(d * 10);

        var atotal = parseInt(ah + bt + c);
        var btotal = parseInt(dh + et + f);
        var t = parseInt(atotal + btotal);
	this.setQuestion('' + this.ns.mNameOne + ' is adding ' + atotal + ' + ' + btotal + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' adds them by doing this. ' + ah + ' + ' + dh + ' + __' + ' + ' + et + ' + ' + c + ' + ' + f + '. Help ' + this.ns.mNameOne + ' by filling in the missing number.');
        this.setAnswer('' + bt, 0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.7_3',4.0170,'2.nbt.b.7','' );
*/
var i_2_nbt_b_7__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,500,25,275,50,50,50,625,100);
        this.ns = new NameSampler();
        this.mType = '2.nbt.b.7_3';

        var a = Math.floor( (Math.random()*9)+1);
        var b = Math.floor( (Math.random()*9)+1);
        var c = Math.floor( (Math.random()*9)+1);

        var d = Math.floor( (Math.random()*9)+1);
        var e = Math.floor( (Math.random()*9)+1);
        var f = Math.floor( (Math.random()*9)+1);

        var ah = parseInt(a * 100);
        var bt = parseInt(b * 10);

        var dh = parseInt(d * 100);
        var et = parseInt(d * 10);

        var atotal = parseInt(ah + bt + c);
        var btotal = parseInt(dh + et + f);
        var t = parseInt(atotal + btotal);
        this.setQuestion('' + this.ns.mNameOne + ' is adding ' + atotal + ' + ' + btotal + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' adds them by doing this. ' + ah + ' + __' + ' + ' + bt + ' + ' + et + ' + ' + c + ' + ' + f + '. Help ' + this.ns.mNameOne + ' by filling in the missing number.');
        this.setAnswer('' + dh, 0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.7_2',4.0169,'2.nbt.b.7','' );
*/
var i_2_nbt_b_7__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,500,25,275,50,50,50,625,100);
        this.ns = new NameSampler();
        this.mType = '2.nbt.b.7_2';

        var a = Math.floor( (Math.random()*9)+1);
        var b = Math.floor( (Math.random()*9)+1);
        var c = Math.floor( (Math.random()*9)+1);
	
        var d = Math.floor( (Math.random()*9)+1);
        var e = Math.floor( (Math.random()*9)+1);
        var f = Math.floor( (Math.random()*9)+1);

	var ah = parseInt(a * 100);	
	var bt = parseInt(b * 10);	
	
	var dh = parseInt(d * 100);	
	var et = parseInt(d * 10);	

	var atotal = parseInt(ah + bt + c);
	var btotal = parseInt(dh + et + f);
        var t = parseInt(atotal + btotal);
        this.setQuestion('' + this.ns.mNameOne + ' is adding ' + atotal + ' + ' + btotal + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' adds them by doing this. __' + ' + ' + dh + ' + ' + bt + ' + ' + et + ' + ' + c + ' + ' + f + '. Help ' + this.ns.mNameOne + ' by filling in the missing number.');
        this.setAnswer('' + ah, 0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.7_1',4.0168,'2.nbt.b.7','' );
*/
var i_2_nbt_b_7__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,500,25,275,50,50,50,625,100);
        this.ns = new NameSampler();
        this.mRaphael = Raphael(10,150,500,350);
        this.mChopWhiteSpace = false;
        this.mType = '2.nbt.b.7_1';

        var a = Math.floor( (Math.random()*29)+30);
        var b = Math.floor( (Math.random()*39)+60);
	
	var c = parseInt(a + b);
	this.setQuestion('' + this.ns.mNameOne + ' is adding ' + a + ' + ' + b + '. Use the empty number line below to find the sum by adding on from the larger number.'); 
	this.setAnswer('' + c,0);  
},
createQuestionShapes: function()
{
	this.addQuestionShape(new LineOne (100,150, 475,150,this.mGame,this.mRaphael,"#000",.5,false));
	this.addQuestionShape(new Triangle(75,150,100,125,100,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.5,false));
	this.addQuestionShape(new Triangle(500,150,475,125,475,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.5,false));

}	
});

