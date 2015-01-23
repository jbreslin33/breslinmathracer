
/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.a.4_4',3.0404,'3.oa.a.4','');
*/
var i_3_oa_a_4__4 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '3.oa.a.4_4';

        this.ns = new NameSampler();

        var a = Math.floor((Math.random()*2)+3);
        var b = Math.floor((Math.random()*6)+13);
        var c = parseInt(a*b);

        this.setQuestion('Which number makes the equation true? ' + c + ' &divide ? = ' + b);
        this.setAnswer('' + a,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.a.4_3',3.0403,'3.oa.a.4','');
*/
var i_3_oa_a_4__3 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '3.oa.a.4_3';

        this.ns = new NameSampler();

        var a = Math.floor((Math.random()*4)+6);
        var b = Math.floor((Math.random()*4)+6);
        var c = parseInt(a*b);

        this.setQuestion('Which number makes the equation true? ' + a + ' &times ' + b + ' = ?');
        this.setAnswer('' + c,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.a.4_2',3.0402,'3.oa.a.4','');
*/
var i_3_oa_a_4__2 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '3.oa.a.4_2';

        this.ns = new NameSampler();

        var a = Math.floor((Math.random()*4)+6);
        var b = Math.floor((Math.random()*4)+6);
        var c = parseInt(a*b);

        this.setQuestion('Which number makes the equation true? ' + c + ' &divide __ = ' + b);
        this.setAnswer('' + a,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.a.4_1',3.0401,'3.oa.a.4','');
*/
var i_3_oa_a_4__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '3.oa.a.4_1';

        this.ns = new NameSampler();

        var a = Math.floor((Math.random()*4)+6);
        var b = Math.floor((Math.random()*4)+6);
	var c = parseInt(a*b);

        this.setQuestion('Which number makes the equation true? ' + a + ' &times __ = ' + c);
        this.setAnswer('' + b,0);
}
});

