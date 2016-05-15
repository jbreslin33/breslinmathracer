
/*
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.7_21',2.1321,'2.nbt.b.7','' ); update item_types SET progression = 2.1321 where id = '2.nbt.b.7_21';
*/
//borrow with  answer big 
var i_2_nbt_b_7__21 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);
        this.mType = '2.nbt.b.7_21';

        var a = 0;
        var b = 0;
        var c = 0;

        var d = 0;
        var e = 0;
        var f = 0;

        var g = 0;
        var h = 0;

	var x = -1;

        while (x < 101 || c >= f)
        {
                a = Math.floor((Math.random()*9)+1);
                b = 0;
                c = Math.floor((Math.random()*9)+1);
                
		d = Math.floor((Math.random()*9)+1);
		e = Math.floor((Math.random()*9)+1);
                f = Math.floor((Math.random()*9)+1);

		g = parseInt(a * 100 + b * 10 + c);
		h = parseInt(d * 100 + e * 10 + f);

		x = parseInt(g - h);
        }

        this.setQuestion('' + g + ' - ' + h + ' = ');
        this.setAnswer('' + x,0);
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.7_20',2.1320,'2.nbt.b.7','' ); update item_types SET progression = 2.1320 where id = '2.nbt.b.7_20';
*/
//borrow with  0 in tens 
var i_2_nbt_b_7__20 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);
        this.mType = '2.nbt.b.7_20';

        var a = 0;
        var b = 0;
        var c = 0;

        var d = 0;
        var e = 0;
        var f = 0;

        var g = 0;
        var h = 0;

	var x = -1;

        while (x < 0 || c >= f)
        {
                a = Math.floor((Math.random()*9)+1);
                b = 0;
                c = Math.floor((Math.random()*9)+1);
                
		d = Math.floor((Math.random()*9)+1);
		e = Math.floor((Math.random()*9)+1);
                f = Math.floor((Math.random()*9)+1);

		g = parseInt(a * 100 + b * 10 + c);
		h = parseInt(d * 100 + e * 10 + f);

		x = parseInt(g - h);
        }

        this.setQuestion('' + g + ' - ' + h + ' = ');
        this.setAnswer('' + x,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.7_19',2.1319,'2.nbt.b.7','' ); update item_types SET progression = 2.1319 where id = '2.nbt.b.7_19';
*/
//borrow with  smaller number in tens 
var i_2_nbt_b_7__19 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);
        this.mType = '2.nbt.b.7_19';

        var a = 0;
        var b = 0;
        var c = 0;

        var d = 0;
        var e = 0;
        var f = 0;

        var g = 0;
        var h = 0;

	var x = -1;

        while (x < 0 || c >= f || b >= e)
        {
                a = Math.floor((Math.random()*9)+1);
                b = Math.floor((Math.random()*9)+1);
                c = Math.floor((Math.random()*9)+1);
                
		d = Math.floor((Math.random()*9)+1);
		e = Math.floor((Math.random()*9)+1);
                f = Math.floor((Math.random()*9)+1);

		g = parseInt(a * 100 + b * 10 + c);
		h = parseInt(d * 100 + e * 10 + f);

		x = parseInt(g - h);
        }

        this.setQuestion('' + g + ' - ' + h + ' = ');
        this.setAnswer('' + x,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.7_18',2.1318,'2.nbt.b.7','' ); update item_types SET progression = 2.1318 where id = '2.nbt.b.7_18';
*/
//borrow with  same number in tens 
var i_2_nbt_b_7__18 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);
        this.mType = '2.nbt.b.7_18';

        var a = 0;
        var b = 0;
        var c = 0;

        var d = 0;
        var e = 0;
        var f = 0;

        var g = 0;
        var h = 0;

	var x = -1;

        while (x < 0 || c >= f)
        {
                a = Math.floor((Math.random()*9)+1);
                b = Math.floor((Math.random()*9)+1);
                c = Math.floor((Math.random()*9)+1);
                
		d = Math.floor((Math.random()*9)+1);
                e = b;
                f = Math.floor((Math.random()*9)+1);

		g = parseInt(a * 100 + b * 10 + c);
		h = parseInt(d * 100 + e * 10 + f);

		x = parseInt(g - h);
        }

        this.setQuestion('' + g + ' - ' + h + ' = ');
        this.setAnswer('' + x,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.7_17',2.1317,'2.nbt.b.7','' ); update item_types SET progression = 2.1317 where id = '2.nbt.b.7_17';
*/
var i_2_nbt_b_7__17 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,600,50,330,75,100,50,685,80);
        this.mType = '2.nbt.b.7_17';
        
	var a = 0;
	var b = 0;
	var c = -1;

	while (c < 0)
	{
        	a = Math.floor((Math.random()*899)+100);
        	b = Math.floor((Math.random()*899)+100);
		c = parseInt(a - b);
	}
        
	this.setQuestion('' + a + ' - ' + b + ' = ');
        this.setAnswer('' + c,0);
}	
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.7_16',2.1316,'2.nbt.b.7','' ); update item_types SET progression = 2.1316 where id = '2.nbt.b.7_16';
*/
var i_2_nbt_b_7__16 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,600,50,330,75,100,50,685,80);
        this.mType = '2.nbt.b.7_16';
        
        var a = Math.floor( (Math.random()*899)+100);
        var b = Math.floor( (Math.random()*899)+100);
	var c = parseInt(a + b);
        
	this.setQuestion('' + a + ' + ' + b + ' = ');
        this.setAnswer('' + c,0);
}	
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.7_15',2.1315,'2.nbt.b.7','' ); update item_types SET progression = 2.1315 where id = '2.nbt.b.7_15';
*/
var i_2_nbt_b_7__15 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,700,25,375,50, 50,50,625,200);
        this.ns = new NameSampler();
        this.mRaphael = Raphael(10,100,600,350);
        this.mChopWhiteSpace = false;
        this.mType = '2.nbt.b.7_15';

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

		this.tens_ones_x = parseInt(this.b * 10 + this.c);   
		this.tens_ones_y = parseInt(this.e * 10 + this.f);   
	}
        this.setQuestion('' + this.ns.mNameOne + ' looked at the blocks and the problem. Solve this problem for ' + this.ns.mNameOne + '. ' + this.x + ' - ' + this.y + '.');
        this.setAnswer('' + this.z,0);
},
createQuestionShapes: function()
{
	this.addQuestionShape(new RaphaelText(50,20,this,0,0,1,"#000000",.5,false,"" + "Hundreds",16));
	this.addQuestionShape(new RaphaelText(150,20,this,0,0,1,"#000000",.5,false,"" + "Tens",16));
	this.addQuestionShape(new RaphaelText(250,20,this,0,0,1,"#000000",.5,false,"" + "Ones",16));
	
	this.addQuestionShape(new RaphaelText(250,280,this,0,0,1,"#000000",.5,false,"" + "What is " + this.ns.mNameMachine.getNumberName(this.a) + ' hundred ' + this.ns.mNameMachine.getNumberName(this.tens_ones_x) + ' minus ' + this.ns.mNameMachine.getNumberName(this.d) + ' hundred ' + this.ns.mNameMachine.getNumberName(this.tens_ones_y) + "?" ,16));

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
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.7_14',2.1314,'2.nbt.b.7','' ); update item_types SET progression = 2.1314 where id = '2.nbt.b.7_14';
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
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.7_13',2.1313,'2.nbt.b.7','' ); update item_types SET progression = 2.1313 where id = '2.nbt.b.7_13';
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
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.7_12',2.1312,'2.nbt.b.7','' ); update item_types SET progression = 2.1312 where id = '2.nbt.b.7_12';
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
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.7_11',2.1311,'2.nbt.b.7','' ); update item_types SET progression = 2.1311 where id = '2.nbt.b.7_11';
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
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.7_10',2.1310,'2.nbt.b.7','' ); update item_types SET progression = 2.1310 where id = '2.nbt.b.7_10';
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
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.7_9',4.0176,'2.nbt.b.7','' ); update item_types SET progression = 2.1309 where id = '2.nbt.b.7_9';
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
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.7_8',4.0175,'2.nbt.b.7','' ); update item_types SET progression = 2.1308 where id = '2.nbt.b.7_8';
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
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.7_7',4.0174,'2.nbt.b.7','' ); update item_types SET progression = 2.1307 where id = '2.nbt.b.7_7';
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
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.7_6',4.0173,'2.nbt.b.7','' ); update item_types SET progression = 2.1306 where id = '2.nbt.b.7_6';
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
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.7_5',4.0172,'2.nbt.b.7','' ); update item_types SET progression = 2.1305 where id = '2.nbt.b.7_5';
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
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.7_4',4.0171,'2.nbt.b.7','' ); update item_types SET progression = 2.1304 where id = '2.nbt.b.7_4';
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
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.7_3',4.0170,'2.nbt.b.7','' ); update item_types SET progression = 2.1303 where id = '2.nbt.b.7_3';
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
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.7_2',4.0169,'2.nbt.b.7','' ); update item_types SET progression = 2.1302 where id = '2.nbt.b.7_2';
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
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.7_1',4.0168,'2.nbt.b.7','' ); update item_types SET progression = 2.1301 where id = '2.nbt.b.7_1';
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

