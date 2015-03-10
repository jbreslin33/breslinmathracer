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
        this.mRaphael = Raphael(10,120,600,600);

// position of rubix cube
var x = 35;
var y = 220;

// dimensions of a single cube
var w1 = 40;
var h1 = 40;
var d1 = 40;

// dimensions of rubix cube
var w2 = Math.floor(Math.random()*3+2);;
var h2 = Math.floor(Math.random()*3+2);;
var d2 = Math.floor(Math.random()*3+2);;

var rCube = new RubixCube(this,this.mSheet.mGame,this.mRaphael,x,y,w1,h1,d1,w2,h2,d2,.5,.5,.5,"#000",1,false);

        answer = w2*h2*d2; //Math.floor(Math.random()*3+1);

        this.setQuestion('What is the volume of the right rectangular prism in cubic units?');
        this.setAnswer('' + answer,0);

this.mUserAnswerLabel.setPosition(625,150);
this.mCorrectAnswerLabel.setPosition(625,250);

}

             
});

