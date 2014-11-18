//2x1,2x2,3x1,3x2,3x3,

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.5_3',5.0903,'5.nbt.b.5','2 by 3');
*/
var i_5_nbt_b_5__3 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.5_3';

        this.ns = new NameSampler();

        this.x = Math.floor((Math.random()*900)+100);
        this.y = Math.floor((Math.random()*90)+10);

        this.setQuestion('Find the Product: ' + this.y + ' &times ' + this.x + '');
        this.answer = parseInt(this.x * this.y);

        this.setAnswer('' + this.answer,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.5_2',5.0902,'5.nbt.b.5','3 by 2');
*/
var i_5_nbt_b_5__2 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.5_2';

        this.ns = new NameSampler();

        this.x = Math.floor((Math.random()*900)+100);
        this.y = Math.floor((Math.random()*90)+10);

        this.setQuestion('Find the Product: ' + this.x + ' &times ' + this.y + '');
        this.answer = parseInt(this.x * this.y);

        this.setAnswer('' + this.answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.5_1',5.0901,'5.nbt.b.5','2 by 2');
*/
var i_5_nbt_b_5__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.5_1';

        this.ns = new NameSampler();

        this.x        = Math.floor((Math.random()*90)+10);
        this.y        = Math.floor((Math.random()*90)+10);

        this.setQuestion('Find the Product: ' + this.x + ' &times ' + this.y + '');
        this.answer = parseInt(this.x * this.y);

        this.setAnswer('' + this.answer,0);
}
});


