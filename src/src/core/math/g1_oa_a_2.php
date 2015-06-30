
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.a.2_2',1.0202,'1.oa.a.2','How many more.' );
*/

var i_1_oa_a_2__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,600,50,330,75,100,50,685,80);
        this.mType = '1.oa.a.2_2';

        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

        //variables
        this.a = 0;
        this.b = 0;
        this.c = 0;
	this.d = 99; 
	while(this.d > 20)
	{
        	this.a = Math.floor(Math.random()*8)+2;
        	this.b = Math.floor(Math.random()*8)+2;
        	this.c = Math.floor(Math.random()*8)+2;
        	this.d = parseInt(this.a + this.b + this.c);
	}

        this.setQuestion(this.ns.mNameOne + ' has ' + this.a + ' ' + this.ns.mColorOne + ' crayons, ' + this.ns.mNameTwo + ' has ' + this.b + ' ' + this.ns.mColorTwo + ' crayons and ' + this.ns.mNameThree + ' has ' + this.c + ' ' + this.ns.mColorThree + ' crayons. How many crayons do they have ' + this.ns.mSum + '?');
        this.setAnswer('' + this.d,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.a.2_1',1.0201,'1.oa.a.2','How many more.' );
*/

var i_1_oa_a_2__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,600,50,330,75,100,50,685,80);
        this.mType = '1.oa.a.2_1';

        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

        //variables
        this.a = 0;
        this.b = 0;
        this.c = 0;
	this.d = 99; 
	while(this.d > 20)
	{
        	this.a = Math.floor(Math.random()*8)+2;
        	this.b = Math.floor(Math.random()*8)+2;
        	this.c = Math.floor(Math.random()*8)+2;
        	this.d = parseInt(this.a + this.b + this.c);
	}

        this.setQuestion(this.ns.mNameOne + ' has ' + this.a + ' ' + this.ns.mThingOne + ', ' + this.ns.mNameTwo + ' has ' + this.b + ' ' + this.ns.mThingOne + ' and ' + this.ns.mNameThree + ' has ' + this.c + ' ' + this.ns.mThingOne + '. How many ' + this.ns.mThingOne + ' do they have ' + this.ns.mSum + '?');
        this.setAnswer('' + this.d,0);
}
});

