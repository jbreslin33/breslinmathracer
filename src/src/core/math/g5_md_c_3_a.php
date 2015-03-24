/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.c.3.a_11',5.26011,'5.md.c.3.a','');
*/
var i_5_md_c_3_a__11 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '5.md.c.3.a_11';
        this.ns = new NameSampler();
        var rx = 10;
        var ry = 120;
        this.mRaphael = Raphael(rx,ry,400,600);

// position of rubix cube
var x = 35;
var y = 220;

// dimensions of a single cube
var w1 = 40;
var h1 = 40;
var d1 = 40;

// dimensions of rubix cube
var w2 = Math.floor(Math.random()*3+2);
var h2 = Math.floor(Math.random()*3+2);
var d2 = Math.floor(Math.random()*3+2);

var rCube = new RubixCube(this,this.mSheet.mGame,this.mRaphael,rx,ry,x,y,w1,h1,d1,w2,h2,d2,.5,.5,.5,"#000",1,false);

        answer = w2*h2*d2;

        this.setQuestion('The right rectangular prism is made of centimeter cubes. What is the volume of the prism in cubic centimeters?');
        this.setAnswer('' + answer,0);

this.mUserAnswerLabel.setPosition(625,150);
this.mCorrectAnswerLabel.setPosition(625,250);

}

             
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.c.3.a_10',5.26010,'5.md.c.3.a','');
*/
var i_5_md_c_3_a__10 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '5.md.c.3.a_10';
        this.ns = new NameSampler();
        var rx = 10;
        var ry = 120;
        this.mRaphael = Raphael(rx,ry,400,600);

// position of rubix cube
var x = 35;
var y = 220;

// dimensions of a single cube
var w1 = 40;
var h1 = 40;
var d1 = 40;

// dimensions of rubix cube
var w2 = Math.floor(Math.random()*3+2);
var h2 = Math.floor(Math.random()*3+2);
var d2 = Math.floor(Math.random()*3+2);

var rCube = new RubixCube(this,this.mSheet.mGame,this.mRaphael,rx,ry,x,y,w1,h1,d1,w2,h2,d2,.5,.5,.5,"#000",1,false);

        answer = w2*h2*d2;

        this.setQuestion('The right rectangular prism is made of inch cubes. What is the volume of the prism in cubic inches?');
        this.setAnswer('' + answer,0);

this.mUserAnswerLabel.setPosition(625,150);
this.mCorrectAnswerLabel.setPosition(625,250);

}
           
});



/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.c.3.a_9',5.2609,'5.md.c.3.a','');
*/
var i_5_md_c_3_a__9 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '5.md.c.3.a_9';
        this.ns = new NameSampler();
        var rx = 10;
        var ry = 120;
        this.mRaphael = Raphael(rx,ry,400,600);

// position of rubix cube
var x = 35;
var y = 220;

// dimensions of a single cube
var w1 = 40;
var h1 = 40;
var d1 = 40;

// dimensions of rubix cube
var w2 = Math.floor(Math.random()*3+2);
var h2 = Math.floor(Math.random()*3+2);
var d2 = Math.floor(Math.random()*3+2);

var rCube = new RubixCube(this,this.mSheet.mGame,this.mRaphael,rx,ry,x,y,w1,h1,d1,w2,h2,d2,.5,.5,.5,"#000",1,false);

        answer = w2*h2*d2;

        this.setQuestion('The right rectangular prism is made of inch cubes. What is the volume of the prism in cubic inches?');
        this.setAnswer('' + answer,0);

this.mUserAnswerLabel.setPosition(625,150);
this.mCorrectAnswerLabel.setPosition(625,250);

}
        
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.c.3.a_8',5.2608,'5.md.c.3.a','');
*/
var i_5_md_c_3_a__8 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '5.md.c.3.a_8';
        this.ns = new NameSampler();

var a = Math.floor(Math.random()*200+200);
var b = Math.floor(Math.random()*200+200);
var answer = a+b;

this.setQuestion('' + this.ns.mNameOne + ' has 2 jars. One jar has a volume of ' + a + ' cubic centimeters. The other bucket has a volume of ' + b + ' cubic milliliters. What is the total volume of both jars in cubic centimeters?');

        this.setAnswer('' + answer,0);



this.mUserAnswerLabel.setPosition(625,150);
this.mCorrectAnswerLabel.setPosition(625,250);

}
           
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.c.3.a_7',5.2607,'5.md.c.3.a','');
*/
var i_5_md_c_3_a__7 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '5.md.c.3.a_7';
        this.ns = new NameSampler();
    
var a = Math.floor(Math.random()*4+4);
var b = Math.floor(Math.random()*4+4);

var c = (Math.floor(Math.random()*3+1))*1000;
var d = (Math.floor(Math.random()*3+1))*1000;
var answer = (b*c + d)*a;

this.setQuestion('A building has ' + a + ' floors. Each floor has ' + b + ' offices. The volume of 1 office is ' + c + ' cubic meters. Hallways and other areas besides offices take up ' + d + ' cubic meters of space on each floor. What is the total volume of the building in cubic meters?');
        this.setAnswer('' + answer,0);


this.mUserAnswerLabel.setPosition(625,150);
this.mCorrectAnswerLabel.setPosition(625,250);

}

             
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.c.3.a_6',5.2606,'5.md.c.3.a','');
*/
var i_5_md_c_3_a__6 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '5.md.c.3.a_6';
        this.ns = new NameSampler();
    
var answer = Math.floor(Math.random()*21+40);
var b = Math.floor(Math.random()*4+2);
var a = answer*b;
var fractionb = new Fraction(1,b);  

     

this.setQuestion('A dresser has a volume of ' + a + ' cubic feet. ' +  ' A nightstand takes up exactly ' + fractionb.getString() + ' the amount of space. What is the volume of the nightstand in cubic feet?');
        this.setAnswer('' + answer,0);


this.mUserAnswerLabel.setPosition(625,150);
this.mCorrectAnswerLabel.setPosition(625,250);

}

             
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.c.3.a_5',5.2605,'5.md.c.3.a','');
*/
var i_5_md_c_3_a__5 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '5.md.c.3.a_5';
        this.ns = new NameSampler();
      
var a = Math.floor(Math.random()*11+120);
var b = Math.floor(Math.random()*5+8);

        answer = a*b;

this.setQuestion('' + this.ns.mNameOne + ' is packing books into a box. Eack book has a volume of ' + a + ' cubic inches. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' can fit ' + b + ' books into the box without leaving any space in between or above them. What is the volume of the box in cubic inches?');
        this.setAnswer('' + answer,0);


this.mUserAnswerLabel.setPosition(625,150);
this.mCorrectAnswerLabel.setPosition(625,250);

}

             
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.c.3.a_4',5.2604,'5.md.c.3.a','');
*/
var i_5_md_c_3_a__4 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '5.md.c.3.a_4';
        this.ns = new NameSampler();
        var rx = 10;
        var ry = 120;
        this.mRaphael = Raphael(rx,ry,400,600);

// position of rubix cube
var x = 35;
var y = 220;

// dimensions of a single cube
var w1 = 40;
var h1 = 40;
var d1 = 40;

// dimensions of rubix cube
var w2 = Math.floor(Math.random()*3+2);
var h2 = Math.floor(Math.random()*3+2);
var d2 = Math.floor(Math.random()*3+2);

        answer = w2*h2*d2; //Math.floor(Math.random()*3+1);

        this.setQuestion('A solid figure is packed with ' + answer + ' cubes. If the edge lengths of the cubes are 1 meter, what is the volume of the solid in cubic meters?');
        this.setAnswer('' + answer,0);

this.mUserAnswerLabel.setPosition(625,150);
this.mCorrectAnswerLabel.setPosition(625,250);

}

             
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.c.3.a_3',5.2603,'5.md.c.3.a','');
*/
var i_5_md_c_3_a__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '5.md.c.3.a_3';
        this.ns = new NameSampler();
        var rx = 10;
        var ry = 120;
        this.mRaphael = Raphael(rx,ry,400,600);

// position of rubix cube
var x = 35;
var y = 220;

// dimensions of a single cube
var w1 = 40;
var h1 = 40;
var d1 = 40;

// dimensions of rubix cube
var w2 = Math.floor(Math.random()*3+2);
var h2 = Math.floor(Math.random()*3+2);
var d2 = Math.floor(Math.random()*3+2);

var rCube = new RubixCube(this,this.mSheet.mGame,this.mRaphael,rx,ry,x,y,w1,h1,d1,w2,h2,d2,.5,.5,.5,"#000",1,false);

        answer = w2*h2*d2; //Math.floor(Math.random()*3+1);

        this.setQuestion('A crate can be filled with ' + h2 + ' layers of unit cubes. Each layer contains ' + w2*d2 + ' unit cubes. What is the total number of unit cubes that can fill the crate?');
        this.setAnswer('' + answer,0);

this.mUserAnswerLabel.setPosition(625,150);
this.mCorrectAnswerLabel.setPosition(625,250);

}

             
});






/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.c.3.a_2',5.2602,'5.md.c.3.a','');
*/
var i_5_md_c_3_a__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '5.md.c.3.a_2';
        this.ns = new NameSampler();
        var rx = 10;
        var ry = 120;
        this.mRaphael = Raphael(rx,ry,400,600);

// position of rubix cube
var x = 35;
var y = 220;

// dimensions of a single cube
var w1 = 40;
var h1 = 40;
var d1 = 40;

// dimensions of rubix cube
var w2 = Math.floor(Math.random()*3+2);
var h2 = Math.floor(Math.random()*3+2);
var d2 = Math.floor(Math.random()*3+2);

var rCube = new RubixCube(this,this.mSheet.mGame,this.mRaphael,rx,ry,x,y,w1,h1,d1,w2,h2,d2,.5,.5,.5,"#000",1,false);

        answer = w2*h2*d2;

        this.setQuestion('The right rectangular prism is made of meter cubes. What is the volume of the prism in cubic meters?');
        this.setAnswer('' + answer,0);

this.mUserAnswerLabel.setPosition(625,150);
this.mCorrectAnswerLabel.setPosition(625,250);

}

             
});





/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.c.3.a_1',5.2601,'5.md.c.3.a','');
*/
var i_5_md_c_3_a__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '5.md.c.3.a_1';
        this.ns = new NameSampler();
        var rx = 10;
        var ry = 120;
        this.mRaphael = Raphael(rx,ry,400,600);

// position of rubix cube
var x = 35;
var y = 220;

// dimensions of a single cube
var w1 = 40;
var h1 = 40;
var d1 = 40;

// dimensions of rubix cube
var w2 = Math.floor(Math.random()*3+2);
var h2 = Math.floor(Math.random()*3+2);
var d2 = Math.floor(Math.random()*3+2);

var rCube = new RubixCube(this,this.mSheet.mGame,this.mRaphael,rx,ry,x,y,w1,h1,d1,w2,h2,d2,.5,.5,.5,"#000",1,false);

        answer = w2*h2*d2;

        this.setQuestion('The right rectangular prism is made of unit cubes. What is the volume of the prism in cubic units?');
        this.setAnswer('' + answer,0);

this.mUserAnswerLabel.setPosition(625,150);
this.mCorrectAnswerLabel.setPosition(625,250);

}

             
});

