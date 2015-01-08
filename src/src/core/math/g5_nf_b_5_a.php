/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.5.a_7',5.1807,'5.nf.b.5.a','scaling. compare. word');
*/
var i_5_nf_b_5_a__7 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
        	this.parent(sheet,575,50,320,75,720,50,380,150);
                this.mType = '5.nf.b.5.a_7';
        	this.ns = new NameSampler();

                var na = 0;
                var da = 0;
                var nb = 0;
                var db = 0;
                var nc = 0;
                var dc = 0;
                while (nb <= db || nc >= dc)
                {
                        na = Math.floor(Math.random()*18+2);
                        da = Math.floor(Math.random()*18+2);
                        nb = Math.floor(Math.random()*18+2);
                        db = Math.floor(Math.random()*18+2);
                        nc = Math.floor(Math.random()*18+2);
                        dc = Math.floor(Math.random()*18+2);
                }

                this.mFractionA = new Fraction(na,da,false);
                this.mFractionB = new Fraction(nb,db,false);
                this.mFractionC = new Fraction(nc,dc,false);

                this.setQuestion('' + this.ns.mNameOne + ' ran ' + this.mFractionA.getString() + ' ' + this.ns.mDistanceIncrementLarge + '.' + this.ns.mNameTwo + ' ran ' + this.mFractionB.getString() + ' ' + this.ns.mDistanceIncrementLarge + '. ' +  this.ns.mNameThree + ' ran ' + this.mFractionC.getString() + ' ' + this.ns.mDistanceIncrementLarge + '. Who ran the furthest?');
                this.setAnswer('&gt;',0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.5.a_6',5.1806,'5.nf.b.5.a','scaling. compare. fraction by fraction by fraction. <');
*/
var i_5_nf_b_5_a__6 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '5.nf.b.5.a_6';

                //BUTTON A
                this.mButtonA.setPosition(380,100);
                this.mButtonB.setPosition(380,200);
                this.mButtonC.setPosition(380,300);

                var na = 0;
                var da = 0;
                var nb = 0;
                var db = 0;
                var nc = 0;
                var dc = 0;
                while (na >= da)
                {
                        na = Math.floor(Math.random()*18+2);
                        da = Math.floor(Math.random()*18+2);
                        nb = Math.floor(Math.random()*18+2);
                        db = Math.floor(Math.random()*18+2);
                        nc = nb;
                        dc = db;
                }

                this.mFractionA = new Fraction(na,da,false);
                this.mFractionB = new Fraction(nb,db,false);
                this.mFractionC = new Fraction(nc,dc,false);

                this.setQuestion('Compare.');
                this.setAnswer('&lt;',0);

                this.mButtonA.setAnswer('&gt;');
                this.mButtonB.setAnswer('=');
                this.mButtonC.setAnswer('&lt;');
        },

        createQuestionShapes: function()
        {
                var shapeA = new Shape(100,100,240,200,this.mSheet.mGame,"","","");
                var shapeB = new Shape(100,100,530,200,this.mSheet.mGame,"","","");

                shapeA.setText(this.mFractionB.getString() + ' &times ' + this.mFractionA.getString());
                shapeB.setText(this.mFractionC.getString())

                this.addQuestionShape(shapeA);
                this.addQuestionShape(shapeB);
        }
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.5.a_5',5.1805,'5.nf.b.5.a','scaling. compare. fraction by fraction by fraction. >');
*/
var i_5_nf_b_5_a__5 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '5.nf.b.5.a_5';

                //BUTTON A
                this.mButtonA.setPosition(380,100);
                this.mButtonB.setPosition(380,200);
                this.mButtonC.setPosition(380,300);

                var na = Math.floor(Math.random()*18+2);
                var da = na;
                var nb = Math.floor(Math.random()*18+2);
                var db = Math.floor(Math.random()*18+2);
                var nc = nb;
                var dc = db;

                this.mFractionA = new Fraction(na,da,false);
                this.mFractionB = new Fraction(nb,db,false);
                this.mFractionC = new Fraction(nc,dc,false);

                this.setQuestion('Compare.');
                this.setAnswer('=',0);

                this.mButtonA.setAnswer('&gt;');
                this.mButtonB.setAnswer('=');
                this.mButtonC.setAnswer('&lt;');
        },

        createQuestionShapes: function()
        {
                var shapeA = new Shape(100,100,240,200,this.mSheet.mGame,"","","");
                var shapeB = new Shape(100,100,530,200,this.mSheet.mGame,"","","");

                shapeA.setText(this.mFractionB.getString() + ' &times ' + this.mFractionA.getString());
                shapeB.setText(this.mFractionC.getString())

                this.addQuestionShape(shapeA);
                this.addQuestionShape(shapeB);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.5.a_4',5.1804,'5.nf.b.5.a','scaling. compare. fraction by fraction by fraction. >');
*/
var i_5_nf_b_5_a__4 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '5.nf.b.5.a_4';

                //BUTTON A
                this.mButtonA.setPosition(380,100);
                this.mButtonB.setPosition(380,200);
                this.mButtonC.setPosition(380,300);

                var na = 0;
                var da = 0;
                var nb = 0;
                var db = 0;
                var nc = 0;
                var dc = 0;
                while (na <= da)
                {
                        na = Math.floor(Math.random()*18+2);
                        da = Math.floor(Math.random()*18+2);
                        nb = Math.floor(Math.random()*18+2);
                        db = Math.floor(Math.random()*18+2);
               		nc = nb; 
               		dc = db; 
		}

                this.mFractionA = new Fraction(na,da,false);
                this.mFractionB = new Fraction(nb,db,false);
                this.mFractionC = new Fraction(nc,dc,false);

                this.setQuestion('Compare.');
                this.setAnswer('&gt;',0);

                this.mButtonA.setAnswer('&gt;');
                this.mButtonB.setAnswer('=');
                this.mButtonC.setAnswer('&lt;');
        },

        createQuestionShapes: function()
        {
                var shapeA = new Shape(100,100,240,200,this.mSheet.mGame,"","","");
                var shapeB = new Shape(100,100,530,200,this.mSheet.mGame,"","","");

                shapeA.setText(this.mFractionB.getString() + ' &times ' + this.mFractionA.getString());
                shapeB.setText(this.mFractionC.getString())

                this.addQuestionShape(shapeA);
                this.addQuestionShape(shapeB);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.5.a_3',5.1803,'5.nf.b.5.a','scaling. compare. whole number by fraction by fraction. <');
*/
var i_5_nf_b_5_a__3 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '5.nf.b.5.a_3';

                //BUTTON A
                this.mButtonA.setPosition(380,100);
                this.mButtonB.setPosition(380,200);
                this.mButtonC.setPosition(380,300);

                var na = 0;
                var da = 0;
                this.b = 0;
                this.c = 0;

                while (na >= da)
                {
                        na = Math.floor(Math.random()*18+2);
                        da = Math.floor(Math.random()*18+2);
                        this.b = Math.floor(Math.random()*18+2);
                        this.c = this.b;
                }

                this.mFractionA = new Fraction(na,da,false);

                this.setQuestion('Compare.');
                this.setAnswer('&lt;',0);

                this.mButtonA.setAnswer('&gt;');
                this.mButtonB.setAnswer('=');
                this.mButtonC.setAnswer('&lt;');
        },

        createQuestionShapes: function()
        {
                var shapeA = new Shape(100,100,240,200,this.mSheet.mGame,"","","");
                var shapeB = new Shape(100,100,530,200,this.mSheet.mGame,"","","");

                shapeA.setText(this.b + ' &times ' + this.mFractionA.getString());
                shapeB.setText(this.c);

                this.addQuestionShape(shapeA);
                this.addQuestionShape(shapeB);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.5.a_2',5.1802,'5.nf.b.5.a','scaling. compare. whole number by fraction by fraction. =');
*/
var i_5_nf_b_5_a__2 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '5.nf.b.5.a_2';

                //BUTTON A
                this.mButtonA.setPosition(380,100);
                this.mButtonB.setPosition(380,200);
                this.mButtonC.setPosition(380,300);

                var na = 0;
                var da = 0;
                this.b = 0;
                this.c = 0;

                na = Math.floor(Math.random()*18+2);
                da = na;
                this.b = Math.floor(Math.random()*18+2);
                this.c = this.b;

                this.mFractionA = new Fraction(na,da,false);

                this.setQuestion('Compare.');
                this.setAnswer('=',0);

                this.mButtonA.setAnswer('&gt;');
                this.mButtonB.setAnswer('=');
                this.mButtonC.setAnswer('$lt;');
        },

        createQuestionShapes: function()
        {
                var shapeA = new Shape(100,100,240,200,this.mSheet.mGame,"","","");
                var shapeB = new Shape(100,100,530,200,this.mSheet.mGame,"","","");

                shapeA.setText(this.b + ' &times ' + this.mFractionA.getString());
                shapeB.setText(this.c);

                this.addQuestionShape(shapeA);
                this.addQuestionShape(shapeB);
        }
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.5.a_1',5.1801,'5.nf.b.5.a','scaling. compare. whole number by fraction by fraction. >');
*/
var i_5_nf_b_5_a__1 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '5.nf.b.5.a_1';

                //BUTTON A
                this.mButtonA.setPosition(380,100);
                this.mButtonB.setPosition(380,200);
                this.mButtonC.setPosition(380,300);
	
		var na = 0;	
		var da = 0;	
		this.b = 0;
		this.c = 0;

                while (na <= da)
                {
                        na = Math.floor(Math.random()*18+2);
                        da = Math.floor(Math.random()*18+2);
                        this.b = Math.floor(Math.random()*18+2);
                        this.c = this.b;
                }
                
		this.mFractionA = new Fraction(na,da,false);

                this.setQuestion('Compare.');
                this.setAnswer('&gt;',0);

                this.mButtonA.setAnswer('&gt;');
                this.mButtonB.setAnswer('=');
                this.mButtonC.setAnswer('$lt;');
        },

        createQuestionShapes: function()
        {
                var shapeA = new Shape(100,100,240,200,this.mSheet.mGame,"","","");
                var shapeB = new Shape(100,100,530,200,this.mSheet.mGame,"","","");

                shapeA.setText(this.b + ' &times ' + this.mFractionA.getString());
                shapeB.setText(this.c);

                this.addQuestionShape(shapeA);
                this.addQuestionShape(shapeB);
        }
});

