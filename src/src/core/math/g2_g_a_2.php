
/*
insert into item_types(id,progression,core_standards_id,description) values ('2.g.a.2_4',2.2704,'2.g.a.2','' ); update item_types SET progression = 2.2704 where id = '2.g.a.2_4';
*/
var i_2_g_a_2__4 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,500,25,275,50,50,50,625,100);
	this.ns = new NameSampler();
        this.mRaphael = Raphael(10,150,500,350);
        this.mChopWhiteSpace = false;
        this.mType = '2.g.a.2_4';
   
	this.r = Math.floor( (Math.random()*4)+1);
        this.setQuestion('' + 'How many same-sized small squares are in the rectangle?');
},

createQuestionShapes: function()
{
	this.r = 6;
	if (this.r > 0)
	{
        	this.addQuestionShape(new Rectangle(25,25,200,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,225,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
		this.setAnswer('2',0);
	}
	if (this.r > 1)
	{
        	this.addQuestionShape(new Rectangle(25,25,200,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,225,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,200,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,225,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
		this.setAnswer('6',0);
	}
	if (this.r > 2)
	{
        	this.addQuestionShape(new Rectangle(25,25,200,50,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,225,50,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
		this.setAnswer('8',0);
	}
	if (this.r > 3)
	{
        	this.addQuestionShape(new Rectangle(25,25,200,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,225,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
		this.setAnswer('10',0);
	}
	if (this.r > 4)
	{
        	this.addQuestionShape(new Rectangle(25,25,250,50,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,250,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,250,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,250,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,250,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
		this.setAnswer('15',0);
	}
	if (this.r > 5)
	{
        	this.addQuestionShape(new Rectangle(25,25,275,50,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,275,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,275,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,275,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,275,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
		this.setAnswer('20',0);
	}
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('2.g.a.2_3',2.2703,'2.g.a.2','' ); update item_types SET progression = 2.2703 where id = '2.g.a.2_3';
*/
var i_2_g_a_2__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,500,25,275,50,50,50,625,100);
	this.ns = new NameSampler();
        this.mRaphael = Raphael(10,150,500,350);
        this.mChopWhiteSpace = false;
        this.mType = '2.g.a.2_3';
   
	this.r = Math.floor( (Math.random()*4) +1);
        this.setQuestion('' + 'Which rectangle has been divided into 6 same-sized squares?');
},

createQuestionShapes: function()
{
	var a1 = new Rectangle(25,75,300,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(a1);
	var a2 = new Rectangle(25,75,325,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(a2);
	this.mText1 = new RaphaelText(280,30,this,0,0,1,"#000000",.5,false,"" + "B.",16);
        this.addQuestionShape(this.mText1);
	
	var b1 = new Rectangle(50,25,100,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(b1);
	var b2 = new Rectangle(50,25,100,50,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(b2);
	var b3 = new Rectangle(50,25,100,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(b3);
        this.mText2 = new RaphaelText(80,30,this,0,0,1,"#000000",.5,false,"" + "A.",16);
        this.addQuestionShape(this.mText2);
 
   	var c1 = new Rectangle(25,12.5,100,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c1);
   	var c2 = new Rectangle(25,12.5,125,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c2);
   	var c3 = new Rectangle(25,12.5,100,137.5,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c3);
   	var c4 = new Rectangle(25,12.5,125,137.5,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c4);
   	var c5 = new Rectangle(25,12.5,100,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c5);
        var c6 = new Rectangle(25,12.5,125,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c6);
        var c7 = new Rectangle(25,12.5,100,162.5,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c7);
        var c8 = new Rectangle(25,12.5,125,162.5,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c8);
        var c9 = new Rectangle(25,12.5,100,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c9);
        var c10 = new Rectangle(25,12.5,125,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c10);
        var c11 = new Rectangle(25,12.5,100,187.5,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c11);
        var c12 = new Rectangle(25,12.5,125,187.5,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c12);
	this.mText3 = new RaphaelText(80,130,this,0,0,1,"#000000",.5,false,"" + "C.",16);
        this.addQuestionShape(this.mText3);

        var d1 = new Rectangle(25,25,300,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(d1);
        var d2 = new Rectangle(25,25,325,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(d2);
        var d3 = new Rectangle(25,25,300,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(d3);
        var d4 = new Rectangle(25,25,325,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(d4);
        var d5 = new Rectangle(25,25,300,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(d5);
        var d6 = new Rectangle(25,25,325,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(d6);
        this.mText4 = new RaphaelText(280,130,this,0,0,1,"#000000",.5,false,"" + "D.",16);
        this.addQuestionShape(this.mText4);
	
	if (this.r == 1) 
	{
		this.setAnswer('' + 'A',0);
		this.mText4.setText('A.');
		this.mText2.setText('D.');
	}
	if (this.r == 2) 
	{
		this.setAnswer('' + 'B',0);
		this.mText4.setText('B.');
		this.mText1.setText('D.');
	}
	if (this.r == 3) 
	{
		this.setAnswer('' + 'C',0);
		this.mText4.setText('C.');
		this.mText3.setText('D.');
	}
	if (this.r == 4) 
	{
		this.setAnswer('' + 'D',0);
	}
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('2.g.a.2_2',2.2702,'2.g.a.2','' ); update item_types SET progression = 2.2702 where id = '2.g.a.2_2';
*/
var i_2_g_a_2__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,500,25,275,50,50,50,625,100);
	this.ns = new NameSampler();
        this.mRaphael = Raphael(10,150,500,350);
        this.mChopWhiteSpace = false;
        this.mType = '2.g.a.2_2';
   
	this.r = Math.floor( (Math.random()*4) +1);
        this.setQuestion('' + this.ns.mNameOne + ' wants to fold the rectangle into same-size squares. Which rectangle has been divided into same-sized squares?');
},

createQuestionShapes: function()
{
	var rect = new Rectangle(50,75,195,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(rect);

	var a1 = new Rectangle(25,75,300,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(a1);
	var a2 = new Rectangle(25,75,325,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(a2);
	this.mText1 = new RaphaelText(280,30,this,0,0,1,"#000000",.5,false,"" + "B.",16);
        this.addQuestionShape(this.mText1);
	
	var b1 = new Rectangle(50,25,100,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(b1);
	var b2 = new Rectangle(50,25,100,50,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(b2);
	var b3 = new Rectangle(50,25,100,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(b3);
        this.mText2 = new RaphaelText(80,30,this,0,0,1,"#000000",.5,false,"" + "A.",16);
        this.addQuestionShape(this.mText2);
 
   	var c1 = new Rectangle(25,12.5,100,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c1);
   	var c2 = new Rectangle(25,12.5,125,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c2);
   	var c3 = new Rectangle(25,12.5,100,137.5,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c3);
   	var c4 = new Rectangle(25,12.5,125,137.5,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c4);
   	var c5 = new Rectangle(25,12.5,100,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c5);
        var c6 = new Rectangle(25,12.5,125,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c6);
        var c7 = new Rectangle(25,12.5,100,162.5,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c7);
        var c8 = new Rectangle(25,12.5,125,162.5,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c8);
        var c9 = new Rectangle(25,12.5,100,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c9);
        var c10 = new Rectangle(25,12.5,125,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c10);
        var c11 = new Rectangle(25,12.5,100,187.5,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c11);
        var c12 = new Rectangle(25,12.5,125,187.5,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c12);
	this.mText3 = new RaphaelText(80,130,this,0,0,1,"#000000",.5,false,"" + "C.",16);
        this.addQuestionShape(this.mText3);

        var d1 = new Rectangle(25,25,300,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(d1);
        var d2 = new Rectangle(25,25,325,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(d2);
        var d3 = new Rectangle(25,25,300,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(d3);
        var d4 = new Rectangle(25,25,325,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(d4);
        var d5 = new Rectangle(25,25,300,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(d5);
        var d6 = new Rectangle(25,25,325,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(d6);
        this.mText4 = new RaphaelText(280,130,this,0,0,1,"#000000",.5,false,"" + "D.",16);
        this.addQuestionShape(this.mText4);
	
	if (this.r == 1) 
	{
		this.setAnswer('' + 'A',0);
		this.mText4.setText('A.');
		this.mText2.setText('D.');
	}
	if (this.r == 2) 
	{
		this.setAnswer('' + 'B',0);
		this.mText4.setText('B.');
		this.mText1.setText('D.');
	}
	if (this.r == 3) 
	{
		this.setAnswer('' + 'C',0);
		this.mText4.setText('C.');
		this.mText3.setText('D.');
	}
	if (this.r == 4) 
	{
		this.setAnswer('' + 'D',0);
	}
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('2.g.a.2_1',2.2701,'2.g.a.2','' ); update item_types SET progression = 2.2701 where id = '2.g.a.2_1';
*/
var i_2_g_a_2__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100);
        this.mRaphael = Raphael(10,150,500,350);
        this.mChopWhiteSpace = false;
        this.mType = '2.g.a.2_1';
   
	this.r = Math.floor( (Math.random()*4) +1);
        this.setQuestion('What rectangle has been divided into same-sized squares?');
},

createQuestionShapes: function()
{
	var a1 = new Rectangle(25,75,300,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(a1);
	var a2 = new Rectangle(25,75,325,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(a2);
	this.mText1 = new RaphaelText(280,30,this,0,0,1,"#000000",.5,false,"" + "B.",16);
        this.addQuestionShape(this.mText1);

	var b1 = new Rectangle(50,25,100,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(b1);
	var b2 = new Rectangle(50,25,100,50,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(b2);
	var b3 = new Rectangle(50,25,100,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(b3);
        this.mText2 = new RaphaelText(80,30,this,0,0,1,"#000000",.5,false,"" + "A.",16);
        this.addQuestionShape(this.mText2);
 
   	var c1 = new Rectangle(25,12.5,100,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c1);
   	var c2 = new Rectangle(25,12.5,125,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c2);
   	var c3 = new Rectangle(25,12.5,100,137.5,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c3);
   	var c4 = new Rectangle(25,12.5,125,137.5,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c4);
   	var c5 = new Rectangle(25,12.5,100,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c5);
        var c6 = new Rectangle(25,12.5,125,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c6);
        var c7 = new Rectangle(25,12.5,100,162.5,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c7);
        var c8 = new Rectangle(25,12.5,125,162.5,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c8);
        var c9 = new Rectangle(25,12.5,100,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c9);
        var c10 = new Rectangle(25,12.5,125,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c10);
        var c11 = new Rectangle(25,12.5,100,187.5,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c11);
        var c12 = new Rectangle(25,12.5,125,187.5,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c12);
	this.mText3 = new RaphaelText(80,130,this,0,0,1,"#000000",.5,false,"" + "C.",16);
        this.addQuestionShape(this.mText3);

        var d1 = new Rectangle(25,25,300,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(d1);
        var d2 = new Rectangle(25,25,325,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(d2);
        var d3 = new Rectangle(25,25,300,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(d3);
        var d4 = new Rectangle(25,25,325,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(d4);
        var d5 = new Rectangle(25,25,300,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(d5);
        var d6 = new Rectangle(25,25,325,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(d6);
        this.mText4 = new RaphaelText(280,130,this,0,0,1,"#000000",.5,false,"" + "D.",16);
        this.addQuestionShape(this.mText4);
	
	if (this.r == 1) 
	{
		this.setAnswer('' + 'A',0);
		this.mText4.setText('A.');
		this.mText2.setText('D.');
	}
	if (this.r == 2) 
	{
		this.setAnswer('' + 'B',0);
		this.mText4.setText('B.');
		this.mText1.setText('D.');
	}
	if (this.r == 3) 
	{
		this.setAnswer('' + 'C',0);
		this.mText4.setText('C.');
		this.mText3.setText('D.');
	}
	if (this.r == 4) 
	{
		this.setAnswer('' + 'D',0);
	}
}
});

