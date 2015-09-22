
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.d.8_13',1.0813,'1.oa.d.8','' );
*/
var i_1_oa_d_8__13 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mType = '1.oa.d.8_13';

        this.a = Math.floor(Math.random()*9)+1;
        this.b = Math.floor(Math.random()*9)+1;
        this.c = parseInt(this.a + this.b);

        this.setQuestion('' + 'Determine the unknown number that makes the equation true: ? = ' + this.b + ' + ' + this.c);
        this.setAnswer('' + this.a,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.d.8_12',1.0812,'1.oa.d.8','' );
*/
var i_1_oa_d_8__12 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
       	this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mType = '1.oa.d.8_12';

	this.c = -1;
	while (this.c < 0)
	{		
		this.a = Math.floor(Math.random()*9)+1;
		this.b = Math.floor(Math.random()*9)+1;
		this.c = parseInt(this.a - this.b);        
	}

        this.setQuestion('' + 'Determine the unknown number that makes the equation true: ' + this.a + ' - ' + this.b + ' = _');
        this.setAnswer('' + this.c,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.d.8_11',1.0811,'1.oa.d.8','' );
*/
var i_1_oa_d_8__11 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
       	this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mType = '1.oa.d.8_11';

	this.c = -1;
	while (this.c < 0)
	{		
		this.a = Math.floor(Math.random()*9)+1;
		this.b = Math.floor(Math.random()*9)+1;
		this.c = parseInt(this.a - this.b);        
	}

        this.setQuestion('' + 'Determine the unknown number that makes the equation true: ' + this.a + ' - _ = ' + this.c);
        this.setAnswer('' + this.b,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.d.8_10',1.0810,'1.oa.d.8','' );
*/
var i_1_oa_d_8__10 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
       	this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mType = '1.oa.d.8_10';

	this.c = -1;
	while (this.c < 0)
	{		
		this.a = Math.floor(Math.random()*9)+1;
		this.b = Math.floor(Math.random()*9)+1;
		this.c = parseInt(this.a - this.b);        
	}

        this.setQuestion('' + 'Determine the unknown number that makes the equation true: _ - ' + this.b + ' = ' + this.c);
        this.setAnswer('' + this.a,0);
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.d.8_9',1.0809,'1.oa.d.8','' );
*/
var i_1_oa_d_8__9 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
       	this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mType = '1.oa.d.8_9';

	this.c = -1;
	while (this.c < 0)
	{		
		this.a = Math.floor(Math.random()*9)+1;
		this.b = Math.floor(Math.random()*9)+1;
		this.c = parseInt(this.a - this.b);        
	}

        this.setQuestion('' + 'Determine the unknown number that makes the equation true: ' + this.a + ' - ' + this.b + ' = ?');
        this.setAnswer('' + this.c,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.d.8_8',1.0808,'1.oa.d.8','' );
*/
var i_1_oa_d_8__8 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
       	this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mType = '1.oa.d.8_8';

	this.c = -1;
	while (this.c < 0)
	{		
		this.a = Math.floor(Math.random()*9)+1;
		this.b = Math.floor(Math.random()*9)+1;
		this.c = parseInt(this.a - this.b);        
	}

        this.setQuestion('' + 'Determine the unknown number that makes the equation true: ' + this.a + ' - ? = ' + this.c);
        this.setAnswer('' + this.b,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.d.8_7',1.0807,'1.oa.d.8','' );
*/
var i_1_oa_d_8__7 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
       	this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mType = '1.oa.d.8_7';

	this.c = -1;
	while (this.c < 0)
	{		
		this.a = Math.floor(Math.random()*9)+1;
		this.b = Math.floor(Math.random()*9)+1;
		this.c = parseInt(this.a - this.b);        
	}

        this.setQuestion('' + 'Determine the unknown number that makes the equation true: ? - ' + this.b + ' = ' + this.c);
        this.setAnswer('' + this.a,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.d.8_6',1.0806,'1.oa.d.8','' );
*/
var i_1_oa_d_8__6 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
       	this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mType = '1.oa.d.8_6';

	this.a = Math.floor(Math.random()*9)+1;
	this.b = Math.floor(Math.random()*9)+1;
	this.c = parseInt(this.a + this.b);        

        this.setQuestion('' + 'Determine the unknown number that makes the equation true: ' + this.a + ' + ' + this.b + ' = _');
        this.setAnswer('' + this.c,0);
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.d.8_5',1.0805,'1.oa.d.8','' );
*/
var i_1_oa_d_8__5 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
       	this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mType = '1.oa.d.8_5';

	this.a = Math.floor(Math.random()*9)+1;
	this.b = Math.floor(Math.random()*9)+1;
	this.c = parseInt(this.a + this.b);        

        this.setQuestion('' + 'Determine the unknown number that makes the equation true: ' + this.a + ' + _ = ' + this.c);
        this.setAnswer('' + this.b,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.d.8_4',1.0804,'1.oa.d.8','' );
*/
var i_1_oa_d_8__4 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
       	this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mType = '1.oa.d.8_4';

	this.a = Math.floor(Math.random()*9)+1;
	this.b = Math.floor(Math.random()*9)+1;
	this.c = parseInt(this.a + this.b);        

        this.setQuestion('' + 'Determine the unknown number that makes the equation true: _ + ' + this.b + ' = ' + this.c);
        this.setAnswer('' + this.a,0);
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.d.8_3',1.0803,'1.oa.d.8','' );
*/
var i_1_oa_d_8__3 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
       	this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mType = '1.oa.d.8_3';

	this.a = Math.floor(Math.random()*9)+1;
	this.b = Math.floor(Math.random()*9)+1;
	this.c = parseInt(this.a + this.b);        

        this.setQuestion('' + 'Determine the unknown number that makes the equation true: ' + this.a + ' + ' + this.b + ' = ?');
        this.setAnswer('' + this.c,0);
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.d.8_2',1.0802,'1.oa.d.8','' );
*/
var i_1_oa_d_8__2 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
       	this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mType = '1.oa.d.8_2';

	this.a = Math.floor(Math.random()*9)+1;
	this.b = Math.floor(Math.random()*9)+1;
	this.c = parseInt(this.a + this.b);        

        this.setQuestion('' + 'Determine the unknown number that makes the equation true: ' + this.a + ' + ? = ' + this.c);
        this.setAnswer('' + this.b,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.d.8_1',1.0801,'1.oa.d.8','' );
*/
var i_1_oa_d_8__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
       	this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mType = '1.oa.d.8_1';

	this.a = Math.floor(Math.random()*9)+1;
	this.b = Math.floor(Math.random()*9)+1;
	this.c = parseInt(this.a + this.b);        

        this.setQuestion('' + 'Determine the unknown number that makes the equation true: ? + ' + this.b + ' = ' + this.c);
        this.setAnswer('' + this.a,0);
}
});
