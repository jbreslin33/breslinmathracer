

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.b.4_9',4.2709,'4.md.b.4','');
*/
var i_4_md_b_4__9 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.mRaphael = Raphael(0,0,380,380);
	this.parent(sheet,300,50,575,95,200,50,625,200);
        this.mType = '4.md.b.4_9';
	this.mChopWhiteSpace = false;

        var f = new Fraction(180,360,false);

       	this.setQuestion('An angle that turns through ' + f.getString() + ' of a circle. It measures 180&deg.');
        this.setAnswer('' + 'straight angle',0);
        this.setAnswer('' + 'a straight angle',1);
},

createShapes: function()
{
        this.parent();

        var angleA = 0;
        var angleB = 180;

        this.mRayA = new Ray (this,parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),parseInt(this.mRaphael.width-10),parseInt(this.mRaphael.height/2),"#000000",false,angleA);
        this.addQuestionShape(this.mRayA);

        this.mRayB = new Ray (this,parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),parseInt(this.mRaphael.width-10),parseInt(this.mRaphael.height/2),"#000000",false,angleB);
        this.addQuestionShape(this.mRayB);

        this.mAngleArc = new AngleArc(this,parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),50, parseInt(Math.abs(angleB-360)),parseInt(Math.abs(angleA-360)) ,0,0,1,"none",.5,false);;

        this.addQuestionShape(this.mAngleArc);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.b.4_8',4.2708,'4.md.b.4','');
*/
var i_4_md_b_4__8 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.mRaphael = Raphael(0,0,380,380);
	this.parent(sheet,300,50,575,95,200,50,625,200);
        this.mType = '4.md.b.4_8';
	this.mChopWhiteSpace = false;

        var f = new Fraction(90,360,false);

        this.setQuestion('An angle that turns through ' + f.getString() + ' of a circle.');
        this.setAnswer('' + 'right angle',0);
        this.setAnswer('' + 'a right angle',1);
},

createShapes: function()
{
        this.parent();

        var angleA = 0;
        var angleB = 90;

        this.mRayA = new Ray (this,parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),parseInt(this.mRaphael.width-10),parseInt(this.mRaphael.height/2),"#000000",false,angleA);
        this.addQuestionShape(this.mRayA);

        this.mRayB = new Ray (this,parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),parseInt(this.mRaphael.width-10),parseInt(this.mRaphael.height/2),"#000000",false,angleB);
        this.addQuestionShape(this.mRayB);

        this.mAngleArc = new AngleArc(this,parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),50, parseInt(Math.abs(angleB-360)),parseInt(Math.abs(angleA-360)) ,0,0,1,"none",.5,false);;
        this.addQuestionShape(this.mAngleArc);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.b.4_7',4.2707,'4.md.b.4','');
*/
var i_4_md_b_4__7 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.mRaphael = Raphael(0,0,380,380);
	this.parent(sheet,300,50,575,95,200,50,625,200);
        this.mType = '4.md.b.4_7';
	this.mChopWhiteSpace = false;

	var f = new Fraction(1,360);

        this.setQuestion('An angle that turns through ' + f.getString() + ' of a circle.');
        this.setAnswer('' + 'one degree angle',0);
        this.setAnswer('' + '1 degree angle',1);
},

createShapes: function()
{
        this.parent();

        var angleA = 45;
        var angleB = 46;

        this.mRayA = new Ray (this,parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),parseInt(this.mRaphael.width-10),parseInt(this.mRaphael.height/2),"#000000",false,angleA);
        this.addQuestionShape(this.mRayA);

        this.mRayB = new Ray (this,parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),parseInt(this.mRaphael.width-10),parseInt(this.mRaphael.height/2),"#000000",false,angleB);
        this.addQuestionShape(this.mRayB);

        this.mAngleArc = new AngleArc(this,parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),50, parseInt(Math.abs(angleB-360)),parseInt(Math.abs(angleA-360)) ,0,0,1,"none",.5,false);;
        this.addQuestionShape(this.mAngleArc);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.b.4_6',4.2706,'4.md.b.4','');
*/
var i_4_md_b_4__6 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,300,50,175,95,100,50,425,100);
	this.mChopWhiteSpace = false;

        this.mType = '4.md.b.4_6';

        this.setQuestion('The unit of measure for angles.');
        this.setAnswer('' + 'degree',0);
       	this.setAnswer('' + 'a degree',1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.b.4_5',4.2705,'4.md.b.4','');
*/
var i_4_md_b_4__5 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.mRaphael = Raphael(0,0,380,380);
	this.parent(sheet,300,50,575,95,100,50,625,200);
	this.mChopWhiteSpace = false;

        this.mType = '4.md.b.4_5';

        this.setQuestion('A point where two or more straight lines meet. A corner.');
        this.setAnswer('' + 'vertex',0);
        this.setAnswer('' + 'a vertex',1);
},
createShapes: function()
{
        this.parent();

        var angleA = 0;
        var angleB = 0;
        while ( parseInt(Math.abs(angleA - angleB)) < 45)
        {
                angleA = Math.floor(Math.random()*360);
                angleB = Math.floor(Math.random()*360);
        }

        this.mRayA = new Ray (this,parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),parseInt(this.mRaphael.width-10),parseInt(this.mRaphael.height/2),"#000000",false,angleA);
        this.addQuestionShape(this.mRayA);

        this.mRayB = new Ray (this,parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),parseInt(this.mRaphael.width-10),parseInt(this.mRaphael.height/2),"#000000",false,angleB);
        this.addQuestionShape(this.mRayB);

        this.mAngleArc = new AngleArc(this,parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),50, parseInt(Math.abs(angleB-360)),parseInt(Math.abs(angleA-360)) ,0,0,1,"none",.5,false);;
        this.addQuestionShape(this.mAngleArc);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.b.4_4',4.2704,'4.md.b.4','');
*/
var i_4_md_b_4__4 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.mRaphael = Raphael(0,0,380,380);
	this.parent(sheet,300,50,575,95,100,50,625,200);
	this.mChopWhiteSpace = false;

        this.mType = '4.md.b.4_4';

        this.setQuestion('The amount of turn between two straight lines that have a common end point. Represented by the white arc.');
       	this.setAnswer('' + 'angle',0);
       	this.setAnswer('' + 'an angle',1);
},

createShapes: function()
{
	this.parent();

	var angleA = 0;	
	var angleB = 0;	
	while ( parseInt(Math.abs(angleA - angleB)) < 45)
	{ 
 		angleA = Math.floor(Math.random()*360);
 		angleB = Math.floor(Math.random()*360);
	}

	this.mRayA = new Ray (this,parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),parseInt(this.mRaphael.width-10),parseInt(this.mRaphael.height/2),"#000000",false,angleA);
 	this.addQuestionShape(this.mRayA);

	this.mRayB = new Ray (this,parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),parseInt(this.mRaphael.width-10),parseInt(this.mRaphael.height/2),"#000000",false,angleB);
 	this.addQuestionShape(this.mRayB);

	this.mAngleArc = new AngleArc(this,parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),50, parseInt(Math.abs(angleB-360)),parseInt(Math.abs(angleA-360)) ,0,0,1,"none",.5,false);;
	this.addQuestionShape(this.mAngleArc);
}

});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.b.4_3',4.2703,'4.md.b.4','');
*/
var i_4_md_b_4__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.mRaphael = Raphael(0,0,380,380);
	this.parent(sheet,300,50,575,95,100,50,625,200);
	this.mChopWhiteSpace = false;
        
	this.mType = '4.md.b.4_3';

        this.setQuestion('A point or value that marks the end of a ray or one of the ends of a line segment. The red circle in the picture on left.');
        this.setAnswer('' + 'endpoint',0);
	this.setAnswer('' + 'an endpoint',1);
},

createShapes: function()
{
	this.parent();

	this.mRay = new Ray (this,parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),parseInt(this.mRaphael.width-10),parseInt(this.mRaphael.height/2),"#000000",false,334);
 	this.addQuestionShape(this.mRay);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.b.4_2',4.2702,'4.md.b.4','');
*/
var i_4_md_b_4__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.mRaphael = Raphael(0,0,380,380);
	this.parent(sheet,300,50,575,95,100,50,625,200);
	this.mChopWhiteSpace = false;

        this.mType = '4.md.b.4_2';

        this.setQuestion('A precise location or place on a plane. Usually represented by a dot.');
        this.setAnswer('' + 'point',0);
        this.setAnswer('' + 'a point',1);
},

createShapes: function()
{
	this.parent();
	this.mEndpoint = new Circle(12.5,parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),this.mSheet.mGame,this.mRaphael,0,1,1,"none",.5,false);
 	this.addQuestionShape(this.mEndpoint);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.b.4_1',4.2701,'4.md.b.4','');
*/
var i_4_md_b_4__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
  	this.mRaphael = Raphael(0,0,380,380);
	this.parent(sheet,300,50,575,95,100,50,625,200);
	this.mChopWhiteSpace = false;
	
        this.mType = '4.md.b.4_1';

        this.setQuestion('A line with a start point but no end point. It goes to infinity.');
        this.setAnswer('' + 'ray',0);
        this.setAnswer('' + 'a ray',1);

},

createShapes: function()
{
	this.parent();

	this.mRay = new Ray (this,parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),parseInt(this.mRaphael.width-10),parseInt(this.mRaphael.height/2),"#000000",false,334);
 	this.addQuestionShape(this.mRay);
}
});

