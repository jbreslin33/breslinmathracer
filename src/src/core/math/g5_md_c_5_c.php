/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.c.5.c_1',5.3001,'5.md.c.5','');
*/
var i_5_md_c_5_c__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '5.md.c.5.c_1';
        this.ns = new NameSampler();
        var rx = 10;
        var ry = 120;
        this.mRaphael = Raphael(rx,ry,400,600);

// position of rubix cube
var x = 35;
var y = 220;

// dimensions of a single cube
var w1 = 20;
var h1 = 20;
var d1 = 20;

// dimensions of rubix cube
var w2 = Math.floor(Math.random()*3+2);
var h2 = Math.floor(Math.random()*3+2);
var d2 = Math.floor(Math.random()*3+2);

var rCube = new RubixCube(this,this.mSheet.mGame,this.mRaphael,rx,ry,x,y,w1,h1,d1,w2,h2,d2,.5,.5,.5,"#000",1,false);

var answer1 = w2*h2*d2;



// position of rubix cube
var x = 55;
var y = 220 - h1*h2;




// dimensions of a single cube
var w1 = 20;
var h1 = 20;
var d1 = 20;

// dimensions of rubix cube
var w2 = Math.floor(Math.random()*3+2);
var h2 = Math.floor(Math.random()*3+2);
var d2 = Math.floor(Math.random()*3+2);

console.log(w2);
console.log(d2);
console.log(h2);

var rCube = new RubixCube(this,this.mSheet.mGame,this.mRaphael,rx,ry,x,y,w1,h1,d1,w2,h2,d2,.5,.5,.5,"#000",1,false);

var answer2 = w2*h2*d2;


var answer = answer1 + answer2;



        this.setQuestion('The right rectangular prism is made of centimeter cubes. What is the volume of the prism in cubic centimeters?');
        this.setAnswer('' + answer,0);

this.mUserAnswerLabel.setPosition(625,150);
this.mCorrectAnswerLabel.setPosition(625,250);

}

             
});
