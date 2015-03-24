/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.c.5.a_1',5.2801,'5.md.c.5','');
*/
var i_5_md_c_5_a__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '5.md.c.5.a_1';
        this.ns = new NameSampler();
        var rx = 10;
        var ry = 120;
        this.mRaphael = Raphael(rx,ry,400,600);

// position of rubix cube
var x = 35;
var y = 90;

// dimensions of a single cube
var w1 = Math.floor(Math.random()*4)+1;
var h1 = Math.floor(Math.random()*4)+1;
var d1 = Math.floor(Math.random()*4)+1;

answer = w1*h1*d1; //Math.floor(Math.random()*3+1);

//var w1 = 6;
//var h1 = 4;
//var d1 = 4;

w1 = w1*40;
h1 = h1*40;
d1 = d1*40;

var cube = new Cube(this,this.mSheet.mGame,this.mRaphael,rx,ry,x,y,w1,h1,d1,.5,.5,.5,"#000",1,false,'inches');

        this.setQuestion('What is the volume of the right rectangular prism in cubic inches?');
        this.setAnswer('' + answer,0);

this.mUserAnswerLabel.setPosition(625,150);
this.mCorrectAnswerLabel.setPosition(625,250);

}

             
});








/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.c.5.a_2',5.2802,'5.md.c.5','');
*/
var i_5_md_c_5_a__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '5.md.c.5.a_2';
        this.ns = new NameSampler();
        var rx = 10;
        var ry = 120;
        this.mRaphael = Raphael(rx,ry,400,600);

// position of rubix cube
var x = 35;
var y = 90;

// dimensions of a single cube
var w1 = Math.floor(Math.random()*4)+1;
var h1 = Math.floor(Math.random()*4)+1;
var d1 = Math.floor(Math.random()*4)+1;

answer = w1*h1*d1; //Math.floor(Math.random()*3+1);

//var w1 = 6;
//var h1 = 4;
//var d1 = 4;

w1 = w1*40;
h1 = h1*40;
d1 = d1*40;

var cube = new Cube(this,this.mSheet.mGame,this.mRaphael,rx,ry,x,y,w1,h1,d1,.5,.5,.5,"#000",1,false,'feet');

        this.setQuestion('What is the volume of the right rectangular prism in cubic feet?');
        this.setAnswer('' + answer,0);

this.mUserAnswerLabel.setPosition(625,150);
this.mCorrectAnswerLabel.setPosition(625,250);

}

             
});






/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.c.5.a_3',5.2803,'5.md.c.5','');
*/
var i_5_md_c_5_a__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '5.md.c.5.a_3';
        this.ns = new NameSampler();
        var rx = 10;
        var ry = 120;
        this.mRaphael = Raphael(rx,ry,400,600);

// position of rubix cube
var x = 35;
var y = 90;

// dimensions of a single cube
var w1 = Math.floor(Math.random()*4)+1;
var h1 = Math.floor(Math.random()*4)+1;
var d1 = Math.floor(Math.random()*4)+1;

answer = w1*h1*d1; //Math.floor(Math.random()*3+1);

//var w1 = 6;
//var h1 = 4;
//var d1 = 4;

w1 = w1*40;
h1 = h1*40;
d1 = d1*40;

var cube = new Cube(this,this.mSheet.mGame,this.mRaphael,rx,ry,x,y,w1,h1,d1,.5,.5,.5,"#000",1,false,'units');

        this.setQuestion('What is the volume of the right rectangular prism in cubic units?');
        this.setAnswer('' + answer,0);

this.mUserAnswerLabel.setPosition(625,150);
this.mCorrectAnswerLabel.setPosition(625,250);

}

             
});


