/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.c.5.b_7',5.2907,'5.md.c.5','');
*/
var i_5_md_c_5_b__7 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);
        this.mType = '5.md.c.5.b_7';
     
        this.ns = new NameSampler();

// dimensions of a single cube
var w1 = Math.floor(Math.random()*2)+6;
var h1 = Math.floor(Math.random()*2)+10;
var l1 = Math.floor(Math.random()*2)+4;

var vol = w1*h1*l1;

        this.setQuestion('A juice box is  ' + h1 + ' cm tall, ' + w1 + ' cm wide, and ' + l1 + ' cm deep. What is the liquid volume of the juice box in milliliters?');
        this.setAnswer('' + vol,0);

this.mUserAnswerLabel.setPosition(625,150);
this.mCorrectAnswerLabel.setPosition(625,250);

}

             
});







/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.c.5.b_6',5.2906,'5.md.c.5','');
*/
var i_5_md_c_5_b__6 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);
        this.mType = '5.md.c.5.b_6';
     
        this.ns = new NameSampler();

// dimensions of a single cube
var w1 = Math.floor(Math.random()*2)+4;
var h1 = Math.floor(Math.random()*2)+2;
var l1 = Math.floor(Math.random()*2)+4;

var vol = w1*h1*l1;

        this.setQuestion('A house has a patio that is  ' + l1 + ' yards long by ' + w1 + ' yards wide. There is also a shed with a volume of  ' + vol +  ' cubic feet and with the entire patio as its base. What is the height of the shed in yards?');
        this.setAnswer('' + h1,0);

this.mUserAnswerLabel.setPosition(625,150);
this.mCorrectAnswerLabel.setPosition(625,250);

}

             
});









/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.c.5.b_5',5.2905,'5.md.c.5','');
*/
var i_5_md_c_5_b__5 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);
        this.mType = '5.md.c.5.b_5';
     
        this.ns = new NameSampler();

// dimensions of a single cube
var a = Math.floor(Math.random()*3)+2;
var b = Math.floor(Math.random()*3)+2;
var c = Math.floor(Math.random()*3)+2;

var answer = a*2*b*2*c*2;

        this.setQuestion('' + this.ns.mNameOne + ' is packing boxes that are cubes with 6-inch sides into a crate. The crate is ' + a + ' feet wide by ' + b + ' feet long by ' + c +  ' feet tall. How many cubes can ' + this.ns.mNameOne + ' pack into the crate?');
        this.setAnswer('' + answer,0);

this.mUserAnswerLabel.setPosition(625,150);
this.mCorrectAnswerLabel.setPosition(625,250);

}

             
});









/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.c.5.b_4',5.2904,'5.md.c.5','');
*/
var i_5_md_c_5_b__4 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '5.md.c.5.b_4';
     
        this.mNameMachine = new NameMachine();
        this.mDist1     = this.mNameMachine.getDistanceIncrement();
        this.mDist2     = this.mNameMachine.getDistanceAbbreviation(this.mDist1);

// dimensions of a single cube
var w1 = Math.floor(Math.random()*6)+1;
var h1 = Math.floor(Math.random()*6)+1;
var l1 = Math.floor(Math.random()*6)+1;

var vol = w1*h1*l1;
var a = w1*l1;

        this.setQuestion('The area of the base of a right rectangular prism is ' + a + ' square ' + this.mDist2 + '. If the volume is ' + vol +  ' cubic ' + this.mDist2 + ', what is the height of the prism in ' + this.mDist2 + '?');
        this.setAnswer('' + h1,0);

this.mUserAnswerLabel.setPosition(625,150);
this.mCorrectAnswerLabel.setPosition(625,250);

}

             
});







/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.c.5.b_3',5.2903,'5.md.c.5','');
*/
var i_5_md_c_5_b__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '5.md.c.5.b_3';
     
        this.mNameMachine = new NameMachine();
        this.mDist1     = this.mNameMachine.getDistanceIncrement();
        this.mDist2     = this.mNameMachine.getDistanceAbbreviation(this.mDist1);

// dimensions of a single cube
var w1 = Math.floor(Math.random()*6)+1;
var h1 = Math.floor(Math.random()*6)+1;
var l1 = Math.floor(Math.random()*6)+1;

var vol = w1*h1*l1;

        this.setQuestion('The width of a right rectangular prism is ' + w1 + ' ' + this.mDist2 + ' and the height is ' + h1 + ' ' + this.mDist2 + '. If the volume is ' + vol +  ' cubic ' + this.mDist2 + ', what is the length of the prism in ' + this.mDist2 + '?');
        this.setAnswer('' + l1,0);

this.mUserAnswerLabel.setPosition(625,150);
this.mCorrectAnswerLabel.setPosition(625,250);

}

             
});






/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.c.5.b_2',5.2902,'5.md.c.5','');
*/
var i_5_md_c_5_b__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '5.md.c.5.b_2';
     
        this.mNameMachine = new NameMachine();
        this.mDist1     = this.mNameMachine.getDistanceIncrement();
        this.mDist2     = this.mNameMachine.getDistanceAbbreviation(this.mDist1);

// dimensions of a single cube
var w1 = Math.floor(Math.random()*6)+1;
var h1 = Math.floor(Math.random()*6)+1;
var l1 = Math.floor(Math.random()*6)+1;

var vol = w1*h1*l1;

        this.setQuestion('The length of a right rectangular prism is ' + l1 + ' ' + this.mDist2 + ' and the height is ' + h1 + ' ' + this.mDist2 + '. If the volume is ' + vol +  ' cubic ' + this.mDist2 + ', what is the width of the prism in ' + this.mDist2 + '?');
        this.setAnswer('' + w1,0);

this.mUserAnswerLabel.setPosition(625,150);
this.mCorrectAnswerLabel.setPosition(625,250);

}

             
});





/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.c.5.b_1',5.2901,'5.md.c.5','');
*/
var i_5_md_c_5_b__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '5.md.c.5.b_1';
     
        this.mNameMachine = new NameMachine();
        this.mDist1     = this.mNameMachine.getDistanceIncrement();
        this.mDist2     = this.mNameMachine.getDistanceAbbreviation(this.mDist1);

// dimensions of a single cube
var w1 = Math.floor(Math.random()*6)+1;
var h1 = Math.floor(Math.random()*6)+1;
var l1 = Math.floor(Math.random()*6)+1;

var vol = w1*h1*l1;

        this.setQuestion('The length of a right rectangular prism is ' + l1 + ' ' + this.mDist2 + ' and the width is ' + w1 + ' ' + this.mDist2 + '. If the volume is ' + vol +  ' cubic ' + this.mDist2 + ', what is the height of the prism in ' + this.mDist2 + '?');
        this.setAnswer('' + h1,0);

this.mUserAnswerLabel.setPosition(625,150);
this.mCorrectAnswerLabel.setPosition(625,250);

}

             
});
