
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.d.7_6',1.0706,'1.oa.d.7','');
*/

var i_1_oa_d_7__6 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mType = '1.oa.d.7_6';
        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

        this.a = 0;
        this.b = 0;
        this.c = 0;
        this.d = 0;

        while (this.a == this.d)
        {
                this.a = Math.floor(Math.random()*9)+1;
                this.b = Math.floor(Math.random()*9)+1;
                this.c = Math.floor(Math.random()*9)+1;
                this.d = parseInt(this.b + this.c);
        }
        this.setQuestion('' + 'Help ' + this.ns.mNameOne + ' answer whether the equation ' + this.b + ' + ' + this.c + ' = ' + this.a + ' is true or false.');
        this.setAnswer('' + 'false',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.d.7_5',1.0705,'1.oa.d.7','');
*/

var i_1_oa_d_7__5 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mType = '1.oa.d.7_5';
        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

        this.a = 0;
        this.b = 0;
        this.c = 0;
        this.d = 99;

        while (this.a != this.d)
        {
                this.a = Math.floor(Math.random()*9)+1;
                this.b = Math.floor(Math.random()*9)+1;
                this.c = Math.floor(Math.random()*9)+1;
		this.d = parseInt(this.b + this.c);
        }
        this.setQuestion('' + 'Help ' + this.ns.mNameOne + ' answer whether the equation ' + this.b + ' + ' + this.c + ' = ' + this.a + ' is true or false.');
        this.setAnswer('' + 'true',0);
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.d.7_4',1.0704,'1.oa.d.7','');
*/

var i_1_oa_d_7__4 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mType = '1.oa.d.7_4';
        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

        this.a = 0;
        this.b = 0;
        this.c = 0;
        this.d = 0;

        while (this.a == this.d)
        {
                this.a = Math.floor(Math.random()*9)+1;
                this.b = Math.floor(Math.random()*9)+1;
                this.c = Math.floor(Math.random()*9)+1;
                this.d = parseInt(this.b + this.c);
        }
        this.setQuestion('' + 'Help ' + this.ns.mNameOne + ' answer whether the equation ' + this.a + ' = ' + this.b + ' + ' + this.c + ' is true or false.');
        this.setAnswer('' + 'false',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.d.7_3',1.0703,'1.oa.d.7','');
*/

var i_1_oa_d_7__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mType = '1.oa.d.7_3';
        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

        this.a = 0;
        this.b = 0;
        this.c = 0;
        this.d = 99;

        while (this.a != this.d)
        {
                this.a = Math.floor(Math.random()*9)+1;
                this.b = Math.floor(Math.random()*9)+1;
                this.c = Math.floor(Math.random()*9)+1;
		this.d = parseInt(this.b + this.c);
        }
        this.setQuestion('' + 'Help ' + this.ns.mNameOne + ' answer whether the equation ' + this.a + ' = ' + this.b + ' + ' + this.c + ' is true or false.');
        this.setAnswer('' + 'true',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.d.7_2',1.0702,'1.oa.d.7','');
*/

var i_1_oa_d_7__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mType = '1.oa.d.7_2';
        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

	this.a = 0;
	this.b = 0;

	while (this.a == this.b)	
	{
        	this.a = Math.floor(Math.random()*9)+1;
        	this.b = Math.floor(Math.random()*9)+1;
	}
        this.setQuestion('' + 'Help ' + this.ns.mNameOne + ' answer whether the equation ' + this.a + ' = ' + this.b + ' is true or false.');
        this.setAnswer('' + 'false',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.d.7_1',1.0701,'1.oa.d.7','');
*/

var i_1_oa_d_7__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mType = '1.oa.d.7_1';
        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();
        
	this.a = Math.floor(Math.random()*9)+1;
        this.b = this.a;

        this.setQuestion('' + 'Help ' + this.ns.mNameOne + ' answer whether the equation ' + this.a + ' = ' + this.b + ' is true or false.');
        this.setAnswer('' + 'true',0);
}
});

