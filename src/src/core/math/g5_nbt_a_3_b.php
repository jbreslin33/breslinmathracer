/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.b_12',5.0712,'5.nbt.a.3.b','');
*/
var i_5_nbt_a_3_b__12 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3.b_12';

        this.ns = new NameSampler();

        this.tenths      = Math.floor((Math.random()*3)+1);
        this.hundreths   = Math.floor((Math.random()*9)+1);
        this.thousandths_a = Math.floor((Math.random()*5)+5);
        this.thousandths_b = Math.floor((Math.random()*4)+1);
        this.tenths_hundreths_thousandths_a = parseInt(this.tenths * 100 + this.hundreths * 10 + this.thousandths_a);
        this.tenths_hundreths_thousandths_b = parseInt(this.tenths * 100 + this.hundreths * 10 + this.thousandths_b);

        this.setQuestion('' + this.ns.mNameOne  + ' makes a basketball hoop that can fit a ball in it that is 0.' + this.tenths_hundreths_thousandths_b + ' feet in diameter. ' + this.ns.mNameTwo + ' has a ball that is 0.' + this.tenths_hundreths_thousandths_a + ' inches thick in diameter. Will the ball ' + this.ns.mNameTwo + ' has fit in the hoop? Answer yes or no.',0);

        this.setAnswer('no',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.b_11',5.0711,'5.nbt.a.3.b','');
*/
var i_5_nbt_a_3_b__11 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3.b_11';

        this.ns = new NameSampler();

        this.tenths      = Math.floor((Math.random()*3)+1);
        this.hundreths   = Math.floor((Math.random()*9)+1);
        this.thousandths_a = Math.floor((Math.random()*5)+5);
        this.thousandths_b = Math.floor((Math.random()*4)+1);
        this.tenths_hundreths_thousandths_a = parseInt(this.tenths * 100 + this.hundreths * 10 + this.thousandths_a);
        this.tenths_hundreths_thousandths_b = parseInt(this.tenths * 100 + this.hundreths * 10 + this.thousandths_b);

        this.setQuestion('' + this.ns.mNameOne  + ' makes a basketball hoop that can fit a ball in it that is 0.' + this.tenths_hundreths_thousandths_a + ' feet in diameter. ' + this.ns.mNameTwo + ' has a ball that is 0.' + this.tenths_hundreths_thousandths_b + ' inches thick in diameter. Will the ball ' + this.ns.mNameTwo + ' has fit in the hoop? Answer yes or no.',0);

        this.setAnswer('yes',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.b_10',5.0710,'5.nbt.a.3.b','');
*/
var i_5_nbt_a_3_b__10 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3.b_10';

        this.ns = new NameSampler();

        this.tenths      = Math.floor((Math.random()*3)+1);
        this.hundreths   = Math.floor((Math.random()*9)+1);
        this.thousandths_a = Math.floor((Math.random()*5)+5);
        this.thousandths_b = Math.floor((Math.random()*4)+1);
        this.tenths_hundreths_thousandths_a = parseInt(this.tenths * 100 + this.hundreths * 10 + this.thousandths_a);
        this.tenths_hundreths_thousandths_b = parseInt(this.tenths * 100 + this.hundreths * 10 + this.thousandths_b);

        this.setQuestion('' + this.ns.mNameOne  + ' has a phone that is ' + '0.' + this.tenths_hundreths_thousandths_a + ' inches thick and ' + this.ns.mNameTwo + ' has a phone that is 0.' + this.tenths_hundreths_thousandths_b + ' inches thick. Who has the thinner phone?',0);

        this.setAnswer('' + this.ns.mNameOne,0);
        this.setAnswer('0.' + this.tenths_hundreths_thousandths_b,1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.b_9',5.0709,'5.nbt.a.3.b','');
*/
var i_5_nbt_a_3_b__9 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3.b_9';

        this.ns = new NameSampler();

        this.tenths      = Math.floor((Math.random()*3)+1);
        this.hundreths   = Math.floor((Math.random()*9)+1);
        this.thousandths_a = Math.floor((Math.random()*5)+5);
        this.thousandths_b = Math.floor((Math.random()*4)+1);
        this.tenths_hundreths_thousandths_a = parseInt(this.tenths * 100 + this.hundreths * 10 + this.thousandths_a);
        this.tenths_hundreths_thousandths_b = parseInt(this.tenths * 100 + this.hundreths * 10 + this.thousandths_b);

        this.setQuestion('' + this.ns.mNameOne  + ' has a phone that is ' + '0.' + this.tenths_hundreths_thousandths_b + ' inches thick and ' + this.ns.mNameTwo + ' has a phone that is 0.' + this.tenths_hundreths_thousandths_a + ' inches thick. Who has the thinner phone?',0);

        this.setAnswer('' + this.ns.mNameOne,0);
        this.setAnswer('0.' + this.tenths_hundreths_thousandths_b,1);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.b_8',5.0708,'5.nbt.a.3.b','');
*/
var i_5_nbt_a_3_b__8 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3.b_8';

        this.ns = new NameSampler();

        this.tenths      = Math.floor((Math.random()*9)+1);
        this.hundreths   = Math.floor((Math.random()*9)+1);
        this.thousandths_a = Math.floor((Math.random()*5)+5);
        this.thousandths_b = Math.floor((Math.random()*4)+1);
        this.tenths_hundreths_thousandths_a = parseInt(this.tenths * 100 + this.hundreths * 10 + this.thousandths_a);
        this.tenths_hundreths_thousandths_b = parseInt(this.tenths * 100 + this.hundreths * 10 + this.thousandths_b);

        this.setQuestion('Would the number 0.' + this.tenths_hundreths_thousandths_b + ' go to the right or left of 0.' + this.tenths_hundreths_thousandths_a + ' on a number line?',0);

        this.setAnswer('left',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.b_7',5.0707,'5.nbt.a.3.b','');
*/
var i_5_nbt_a_3_b__7 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3.b_7';

        this.ns = new NameSampler();

        this.tenths      = Math.floor((Math.random()*9)+1);
        this.hundreths   = Math.floor((Math.random()*9)+1);
        this.thousandths_a = Math.floor((Math.random()*5)+5);
        this.thousandths_b = Math.floor((Math.random()*4)+1);
        this.tenths_hundreths_thousandths_a = parseInt(this.tenths * 100 + this.hundreths * 10 + this.thousandths_a);
        this.tenths_hundreths_thousandths_b = parseInt(this.tenths * 100 + this.hundreths * 10 + this.thousandths_b);

        this.setQuestion('Would the number 0.' + this.tenths_hundreths_thousandths_a + ' go to the right or left of 0.' + this.tenths_hundreths_thousandths_b + ' on a number line?',0);

        this.setAnswer('right',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.b_6',5.0706,'5.nbt.a.3.b','');
*/
var i_5_nbt_a_3_b__6 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3.b_6';

        this.ns = new NameSampler();

        this.tenths      = Math.floor((Math.random()*9)+1);
        this.hundreths   = Math.floor((Math.random()*9)+1);
        this.thousandths_a = Math.floor((Math.random()*5)+5);
        this.thousandths_b = Math.floor((Math.random()*4)+1);
        this.tenths_hundreths_thousandths_a = parseInt(this.tenths * 100 + this.hundreths * 10 + this.thousandths_a);
        this.tenths_hundreths_thousandths_b = parseInt(this.tenths * 100 + this.hundreths * 10 + this.thousandths_b);

        this.setQuestion('What is the shorter distance 0.' + this.tenths_hundreths_thousandths_a + ' ' + this.ns.mDistanceIncrementLarge + ' or 0.' + this.tenths_hundreths_thousandths_b + ' ' + this.ns.mDistanceIncrementLarge + '.',0);

        this.setAnswer('0.' + this.tenths_hundreths_thousandths_b,0);
        this.setAnswer('0.' + this.tenths_hundreths_thousandths_b + ' ' + this.ns.mDistanceIncrementLarge,1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.b_5',5.0705,'5.nbt.a.3.b','');
*/
var i_5_nbt_a_3_b__5 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3.b_5';

        this.ns = new NameSampler();

        this.tenths      = Math.floor((Math.random()*9)+1);
        this.hundreths   = Math.floor((Math.random()*9)+1);
        this.thousandths_a = Math.floor((Math.random()*5)+5);
        this.thousandths_b = Math.floor((Math.random()*4)+1);
        this.tenths_hundreths_thousandths_a = parseInt(this.tenths * 100 + this.hundreths * 10 + this.thousandths_a);
        this.tenths_hundreths_thousandths_b = parseInt(this.tenths * 100 + this.hundreths * 10 + this.thousandths_b);

        this.setQuestion('What is the smaller distance 0.' + this.tenths_hundreths_thousandths_a + ' ' + this.ns.mDistanceIncrementMedium + ' or 0.' + this.tenths_hundreths_thousandths_b + ' ' + this.ns.mDistanceIncrementMedium + '.',0);

        this.setAnswer('0.' + this.tenths_hundreths_thousandths_b,0);
        this.setAnswer('0.' + this.tenths_hundreths_thousandths_b + ' ' + this.ns.mDistanceIncrementMedium,1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.b_4',5.0704,'5.nbt.a.3.b','');
*/
var i_5_nbt_a_3_b__4 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3.b_4';

        this.ns = new NameSampler();

        this.tenths      = Math.floor((Math.random()*9)+1);
        this.hundreths   = Math.floor((Math.random()*9)+1);
        this.thousandths_a = Math.floor((Math.random()*5)+5);
        this.thousandths_b = Math.floor((Math.random()*4)+1);
        this.tenths_hundreths_thousandths_a = parseInt(this.tenths * 100 + this.hundreths * 10 + this.thousandths_a);
        this.tenths_hundreths_thousandths_b = parseInt(this.tenths * 100 + this.hundreths * 10 + this.thousandths_b);

        this.setQuestion('What is the further distance 0.' + this.tenths_hundreths_thousandths_b + ' ' + this.ns.mDistanceIncrementSmall + ' or 0.' + this.tenths_hundreths_thousandths_a + ' ' + this.ns.mDistanceIncrementSmall + '.',0);

        this.setAnswer('0.' + this.tenths_hundreths_thousandths_a,0);
        this.setAnswer('0.' + this.tenths_hundreths_thousandths_a + ' ' + this.ns.mDistanceIncrementSmall,1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.b_3',5.0703,'5.nbt.a.3.b','');
*/
var i_5_nbt_a_3_b__3 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3.b_3';

        this.ns = new NameSampler();

        this.tenths      = Math.floor((Math.random()*9)+1);
        this.hundreths   = Math.floor((Math.random()*9)+1);
        this.thousandths_a = Math.floor((Math.random()*5)+5);
        this.thousandths_b = Math.floor((Math.random()*4)+1);
        this.tenths_hundreths_thousandths_a = parseInt(this.tenths * 100 + this.hundreths * 10 + this.thousandths_a);
        this.tenths_hundreths_thousandths_b = parseInt(this.tenths * 100 + this.hundreths * 10 + this.thousandths_b);

        this.setQuestion('What is the further distance 0.' + this.tenths_hundreths_thousandths_a + ' ' + this.ns.mDistanceIncrementMedium + ' or 0.' + this.tenths_hundreths_thousandths_b + ' ' + this.ns.mDistanceIncrementMedium + '.',0);

        this.setAnswer('0.' + this.tenths_hundreths_thousandths_a,0);
        this.setAnswer('0.' + this.tenths_hundreths_thousandths_a + ' miles',1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.b_2',5.0702,'5.nbt.a.3.b','');
*/
var i_5_nbt_a_3_b__2 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3.b_2';

        this.ns = new NameSampler();

        this.tenths      = Math.floor((Math.random()*9)+1);
        this.hundreths   = Math.floor((Math.random()*9)+1);
        this.thousandths_a = Math.floor((Math.random()*5)+5);
        this.thousandths_b = Math.floor((Math.random()*4)+1);
        this.tenths_hundreths_thousandths_a = parseInt(this.tenths * 100 + this.hundreths * 10 + this.thousandths_a);
        this.tenths_hundreths_thousandths_b = parseInt(this.tenths * 100 + this.hundreths * 10 + this.thousandths_b);

        this.setQuestion('' + this.ns.mNameOne + ' has a batting average of 0.' + this.tenths_hundreths_thousandths_b + ' and ' + this.ns.mNameTwo + ' has a batting average of 0.' + this.tenths_hundreths_thousandths_a + '. Write the higher batting average.',0);

        this.setAnswer('0.' + this.tenths_hundreths_thousandths_a,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.b_1',5.0701,'5.nbt.a.3.b','');
*/
var i_5_nbt_a_3_b__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3.b_1';

        this.ns = new NameSampler();

        this.tenths      = Math.floor((Math.random()*9)+1);
        this.hundreths   = Math.floor((Math.random()*9)+1);
        this.thousandths_a = Math.floor((Math.random()*5)+5);
        this.thousandths_b = Math.floor((Math.random()*4)+1);
        this.tenths_hundreths_thousandths_a = parseInt(this.tenths * 100 + this.hundreths * 10 + this.thousandths_a);
        this.tenths_hundreths_thousandths_b = parseInt(this.tenths * 100 + this.hundreths * 10 + this.thousandths_b);
        
        this.setQuestion('' + this.ns.mNameOne + ' has a batting average of 0.' + this.tenths_hundreths_thousandths_a + ' and ' + this.ns.mNameTwo + ' has a batting average of 0.' + this.tenths_hundreths_thousandths_b + '. Write the higher batting average.',0);

        this.setAnswer('0.' + this.tenths_hundreths_thousandths_a,0);
}
});

