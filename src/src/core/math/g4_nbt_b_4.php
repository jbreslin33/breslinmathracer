
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.b.4_7',4.0907,'4.nbt.b.4','100000+100000');
*/

var i_4_nbt_b_4__7 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.b.4_7';

        this.mStripCommas = true;

        var a = Math.floor(Math.random()*899999)+100000;
        var b = Math.floor(Math.random()*899999)+100000;

        var answer = parseInt(a + b);

        this.setQuestion('' + a + ' + ' + b + ' = ',0);
        this.setAnswer('' + answer,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.b.4_6',4.0906,'4.nbt.b.4','100000+10000');
*/

var i_4_nbt_b_4__6 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.b.4_6';

        this.mStripCommas = true;

        var a = Math.floor(Math.random()*899999)+100000;
        var b = Math.floor(Math.random()*89999)+10000;

        var answer = parseInt(a + b);

        this.setQuestion('' + a + ' + ' + b + ' = ',0);
        this.setAnswer('' + answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.b.4_5',4.0905,'4.nbt.b.4','100000+1000');
*/

var i_4_nbt_b_4__5 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.b.4_5';

        this.mStripCommas = true;

        var a = Math.floor(Math.random()*899999)+100000;
        var b = Math.floor(Math.random()*8999)+1000;

        var answer = parseInt(a + b);

        this.setQuestion('' + a + ' + ' + b + ' = ',0);
        this.setAnswer('' + answer,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.b.4_4',4.0904,'4.nbt.b.4','10000+10000');
*/

var i_4_nbt_b_4__4 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.b.4_4';

        this.mStripCommas = true;

        var a = Math.floor(Math.random()*89999)+10000;
        var b = Math.floor(Math.random()*89999)+10000;

        var answer = parseInt(a + b);

        this.setQuestion('' + a + ' + ' + b + ' = ',0);
        this.setAnswer('' + answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.b.4_3',4.0903,'4.nbt.b.4','10000+1000');
*/

var i_4_nbt_b_4__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.b.4_3';

        this.mStripCommas = true;

        var a = Math.floor(Math.random()*89999)+10000;
        var b = Math.floor(Math.random()*8999)+1000;

        var answer = parseInt(a + b);

        this.setQuestion('' + a + ' + ' + b + ' = ',0);
        this.setAnswer('' + answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.b.4_2',4.0902,'4.nbt.b.4','1000+1000');
*/

var i_4_nbt_b_4__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.b.4_2';

        this.mStripCommas = true;

        var a = Math.floor(Math.random()*8999)+1000;
        var b = Math.floor(Math.random()*8999)+1000;

        var answer = parseInt(a + b);

        this.setQuestion('' + a + ' + ' + b + ' = ',0);
        this.setAnswer('' + answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.b.4_1',4.0901,'4.nbt.b.4','1000+100');
*/

var i_4_nbt_b_4__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.b.4_1';          	

	this.mStripCommas = true;

	var a = Math.floor(Math.random()*8999)+1000;
	var b = Math.floor(Math.random()*899)+100;
	
	var answer = parseInt(a + b);

	this.setQuestion('' + a + ' + ' + b + ' = ',0);
	this.setAnswer('' + answer,0);  
}
});
