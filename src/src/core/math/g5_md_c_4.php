/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.c.4_2',5.2702,'5.md.c.4','');
*/
var i_5_md_c_4__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '5.md.c.4_2';
        this.ns = new NameSampler();

this.setQuestion('Each cube in the figure below measures 1 cubic meter. What is the total volume of the figure in cubic meters?');

       
this.mUserAnswerLabel.setPosition(625,150);
this.mCorrectAnswerLabel.setPosition(625,250);

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
var w2 = Math.floor(Math.random()*2)+3;
var h2 = Math.floor(Math.random()*2)+3;
var d2 = Math.floor(Math.random()*2)+3;

var answer = w2*h2*d2;

for(i=0;i<w2;i++) {

  answer = answer - (i*d2);
}

 this.setAnswer('' + answer,0);


var rCube = new RubixCubeStairs(this,this.mSheet.mGame,this.mRaphael,rx,ry,x,y,w1,h1,d1,w2,h2,d2,.5,.5,.5,"#000",1,false);


}

             
});








/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.c.4_1',5.2701,'5.md.c.4','');
*/
var i_5_md_c_4__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '5.md.c.4_1';
        this.ns = new NameSampler();

var a = (Math.floor(Math.random()*2+2))*2;
var b = Math.floor(Math.random()*4+4);
var c = a*b;
var answer = b-1;

this.setQuestion('' + this.ns.mNameOne + ' is making a model using centimeter cubes. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' uses ' + a + ' cubes to build the first layer as shown below. How many more layers of ' + a + ' cubes must ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' build so the model will have a volume of ' + c + ' cubic centimeters?');

        this.setAnswer('' + answer,0);

this.mUserAnswerLabel.setPosition(625,150);
this.mCorrectAnswerLabel.setPosition(625,250);

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
var w2 = a/2;
var h2 = 1;
var d2 = 2;

var rCube = new RubixCube(this,this.mSheet.mGame,this.mRaphael,rx,ry,x,y,w1,h1,d1,w2,h2,d2,.5,.5,.5,"#000",1,false);


}

             
});
