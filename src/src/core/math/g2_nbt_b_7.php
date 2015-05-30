
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

	this.a = 0;
	this.b = 0;
	this.c = 0;
	this.d = 0;
	this.e = 0;
	this.f = 0;
	
	this.x = 0;
	this.y = 0;
	this.z = -1;

	while (this.z < 0)
	{
        	this.a = Math.floor( (Math.random()*3)+1);
		this.b = Math.floor( (Math.random()*4)+1);
		this.c = Math.floor( (Math.random()*5)+1);
        
		this.d = Math.floor( (Math.random()*3)+1);
		this.e = Math.floor( (Math.random()*4)+1);
		this.f = Math.floor( (Math.random()*5)+1);

        	this.x = parseInt(parseInt(this.a * 100) + parseInt(this.b * 10) + this.c);
       	 	this.y = parseInt(parseInt(this.d * 100) + parseInt(this.e * 10) + this.f);
		this.z = parseInt( this.x - this.y);
	}
        this.setQuestion('' + this.ns.mNameOne + ' looked at the blocks and the problem. Solve this problem for ' + this.ns.mNameOne + '. ' + this.x + ' - ' + this.y);
        this.setAnswer('' + this.z,0);
},
createQuestionShapes: function()
{
	this.addQuestionShape(new RaphaelText(50,20,this,0,0,1,"#000000",.5,false,"" + "Hundreds",16));
	this.addQuestionShape(new RaphaelText(150,20,this,0,0,1,"#000000",.5,false,"" + "Tens",16));
	this.addQuestionShape(new RaphaelText(250,20,this,0,0,1,"#000000",.5,false,"" + "Ones",16));
	this.addQuestionShape(new RaphaelText(350,20,this,0,0,1,"#000000",.5,false,"" + "Hundreds",16));
	this.addQuestionShape(new RaphaelText(450,20,this,0,0,1,"#000000",.5,false,"" + "Tens",16));
	this.addQuestionShape(new RaphaelText(550,20,this,0,0,1,"#000000",.5,false,"" + "Ones",16));

	//hundreds x 
	var x = 16;   
	var y = 40;    
	for (var k = 0; k < this.a; k++) 		
	{
		for (var j = 0; j < 10; j++) 		
		{
			for (var i = 0; i < 10; i++) 		
			{
				this.addQuestionShape(new Rectangle(7,7,x,y,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
				x = x + 7;
			}
			x = 16;   
			y = y + 7;				
		}
		x = 16;   
		y = y + 7;				
	}

        //tens x 
        var x = 137;
        var y = 40;
        for (var k = 0; k < this.b; k++)
        {
        	for (var i = 0; i < 10; i++)
                {
               		this.addQuestionShape(new Rectangle(7,7,x,y,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                        y = y + 7;
                }
                x = x + 14;
                y = 40;
        }

        //ones x
        var x = 234;
        var y = 40;
        for (var k = 0; k < this.c; k++)
        {
                this.addQuestionShape(new Rectangle(7,7,x,y,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                x = x + 14;
        }

        //hundreds y 
        var x = 316;
        var y = 40;
        for (var k = 0; k < this.d; k++)
        {
                for (var j = 0; j < 10; j++)
                {
                        for (var i = 0; i < 10; i++)
                        {
                                this.addQuestionShape(new Rectangle(7,7,x,y,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                                x = x + 7;
                        }
                        x = 316;
                        y = y + 7;
                }
                x = 16;
                y = y + 7;
        }

        //tens y 
        var x = 437;
        var y = 40;
        for (var k = 0; k < this.e; k++)
        {
                for (var i = 0; i < 10; i++)
                {
                        this.addQuestionShape(new Rectangle(7,7,x,y,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                        y = y + 7;
                }
                x = x + 14;
                y = 40;
        }

        //onesy 
        var x = 534;
        var y = 40;
        for (var k = 0; k < this.f; k++)
        {
                this.addQuestionShape(new Rectangle(7,7,x,y,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                x = x + 14;
        }

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

