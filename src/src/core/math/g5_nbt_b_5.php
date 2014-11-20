//2x1,2x2,3x1,3x2,3x3,


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.5_10',5.0910,'5.nbt.b.5','2 by 3');
*/
var i_5_nbt_b_5__10 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.5_10';

        this.ns = new NameSampler();

        this.x = Math.floor((Math.random()*900)+100);
        this.y = Math.floor((Math.random()*90)+10);

        this.setQuestion('' + this.ns.mNameOne + ' has ' + this.y + ' ' + this.ns.mThingOne + '. ' + this.ns.mNameTwo + ' has ' + this.x + ' times as many ' + this.ns.mThingOne + ' as ' + this.ns.mNameOne + '. How many ' + this.ns.mThingOne + ' does ' + this.ns.mNameOne + ' have?');
        this.answer = parseInt(this.x * this.y);

        this.setAnswer('' + this.answer,0);
        this.setAnswer('' + this.answer + ' ' + this.ns.mThingOne,1);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.5_9',5.0909,'5.nbt.b.5','3 by 2');
*/
var i_5_nbt_b_5__9 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.5_9';

        this.ns = new NameSampler();

        this.x = Math.floor((Math.random()*900)+100);
        this.y = Math.floor((Math.random()*90)+10);

        this.setQuestion('One lap on a track is ' + this.x + ' ' + this.ns.mDistanceIncrementMedium + '. If ' + this.ns.mNameOne + ' runs ' + this.y + ' times around the track how far in meters will ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' have ran?');
        this.answer = parseInt(this.x * this.y);

        this.setAnswer('' + this.answer,0);
        this.setAnswer('' + this.answer + ' m',1);
        this.setAnswer('' + this.answer + ' meter',2);
        this.setAnswer('' + this.answer + ' meters',3);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.5_8',5.0908,'5.nbt.b.5','2 by 2');
*/
var i_5_nbt_b_5__8 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.5_8';

        this.ns = new NameSampler();

        this.x        = Math.floor((Math.random()*90)+10);
        this.y        = Math.floor((Math.random()*90)+10);

        this.setQuestion('' + this.ns.mNameOne + ' sold ' + this.x + ' ' + this.ns.mFruitOne + '. ' + this.ns.mNameTwo + ' sold ' + this.y + ' times more ' + this.ns.mFruitOne + '. How many ' + this.ns.mFruitOne + ' did ' + this.ns.mNameTwo + ' sell?');

        this.answer = parseInt(this.x * this.y);
        this.answer = parseInt(this.x * this.y);

        this.setAnswer('' + this.answer,0);
        this.setAnswer('' + this.answer + ' ' + this.ns.mFruiteOne,1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.5_7',5.0907,'5.nbt.b.5','1 by 3');
*/
var i_5_nbt_b_5__7 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.5_7';

        this.ns = new NameSampler();

        this.x        = Math.floor((Math.random()*900)+100);
        this.y        = Math.floor((Math.random()*8)+2);

        this.setQuestion('' + this.ns.mNameOne + ' scored ' + this.x + ' points playing a video game. ' + this.ns.mNameTwo + ' scored ' + this.y + ' times more points than ' + this.ns.mNameOne + '. How many points did ' + this.ns.mNameTwo + ' score.');
        this.answer = parseInt(this.x * this.y);

        this.setAnswer('' + this.answer,0);
        this.setAnswer('' + this.answer + ' points',1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.5_6',5.0906,'5.nbt.b.5','3 by 1');
*/
var i_5_nbt_b_5__6 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.5_6';

        this.ns = new NameSampler();

        this.x        = Math.floor((Math.random()*900)+100);
        this.y        = Math.floor((Math.random()*8)+2);

        this.setQuestion('' + this.ns.mNameOne + ' rode ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' bike ' + this.x + ' ' + this.ns.mDistanceIncrementMedium + '. ' + this.ns.mNameTwo + ' rode ' + this.ns.mNameMachine.getPronoun(this.ns.mNameTwo,0,1) + ' bike ' + this.y + ' times further than ' + this.ns.mNameOne + '. How many ' + this.ns.mDistanceIncrementMedium + ' did ' + this.ns.mNameTwo + ' ride ' + this.ns.mNameMachine.getPronoun(this.ns.mNameTwo,0,1) + ' bike.');
        this.answer = parseInt(this.x * this.y);

        this.setAnswer('' + this.answer,0);
        this.setAnswer('' + this.answer + ' ' + this.ns.mDistanceIncrementMedium,1);
        this.setAnswer('' + this.answer + ' ' + this.ns.mNameMachine.getDistanceAbbreviation(this.ns.mDistanceIncrementMedium),2);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.5_5',5.0905,'5.nbt.b.5','2 by 3');
*/
var i_5_nbt_b_5__5 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.5_5';

        this.ns = new NameSampler();

        this.x = Math.floor((Math.random()*900)+100);
        this.y = Math.floor((Math.random()*90)+10);

        this.setQuestion('Find the Product: ' + this.y + ' &times ' + this.x + '');
        this.answer = parseInt(this.x * this.y);

        this.setAnswer('' + this.answer,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.5_4',5.0904,'5.nbt.b.5','3 by 2');
*/
var i_5_nbt_b_5__4 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.5_4';

        this.ns = new NameSampler();

        this.x = Math.floor((Math.random()*900)+100);
        this.y = Math.floor((Math.random()*90)+10);

        this.setQuestion('Find the Product: ' + this.x + ' &times ' + this.y + '');
        this.answer = parseInt(this.x * this.y);

        this.setAnswer('' + this.answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.5_3',5.0903,'5.nbt.b.5','2 by 2');
*/
var i_5_nbt_b_5__3 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.5_3';

        this.ns = new NameSampler();

        this.x        = Math.floor((Math.random()*90)+10);
        this.y        = Math.floor((Math.random()*90)+10);

        this.setQuestion('Find the Product: ' + this.x + ' &times ' + this.y + '');
        this.answer = parseInt(this.x * this.y);

        this.setAnswer('' + this.answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.5_2',5.0902,'5.nbt.b.5','1 by 3');
*/
var i_5_nbt_b_5__2 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.5_2';

        this.ns = new NameSampler();

        this.x        = Math.floor((Math.random()*900)+100);
        this.y        = Math.floor((Math.random()*8)+2);

        this.setQuestion('Find the Product: ' + this.y + ' &times ' + this.x + '');
        this.answer = parseInt(this.x * this.y);

        this.setAnswer('' + this.answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.5_1',5.0901,'5.nbt.b.5','3 by 1');
*/
var i_5_nbt_b_5__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.5_1';

        this.ns = new NameSampler();

        this.x        = Math.floor((Math.random()*900)+100);
        this.y        = Math.floor((Math.random()*8)+2);

        this.setQuestion('Find the Product: ' + this.x + ' &times ' + this.y + '');
        this.answer = parseInt(this.x * this.y);

        this.setAnswer('' + this.answer,0);
}
});

