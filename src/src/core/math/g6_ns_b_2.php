
/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.b.2_2',6.0902,'6.ns.b.2','long division');
*/
var i_6_ns_b_2__2 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,100,50,380,80);

	this.mType = '6.ns.b.2_2';

        this.ns = new NameSampler();

	this.x = 0;
	this.y = 0;
	this.z = 1; 
	while(this.z > 19000 || this.z < 1000 )
	{ 
        	this.x        = Math.floor((Math.random()*90)+10);
        	this.y        = Math.floor((Math.random()*500)+100);
        	this.z        = parseInt(this.x * this.y);
	}

        this.setQuestion('Find the Quotient: ' + this.z + ' &divide ' + this.x + '');
        this.answer = parseInt(this.y);

        this.setAnswer('' + this.answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.b.2_1',6.0901,'6.ns.b.2','word problem. long division');
*/
var i_6_ns_b_2__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
         this.parent(sheet,575,50,320,75,100,50,380,180);

                this.mType = '6.ns.b.2_1';

        this.ns = new NameSampler();

	this.x = 0;
	this.y = 0;
	this.z = 1; 
	while(this.z > 19000 || this.z < 1000 )
	{ 
        	this.x        = Math.floor((Math.random()*60)+40);
        	this.y        = Math.floor((Math.random()*500)+100);
        	this.z        = parseInt(this.x * this.y);
	}

    var r = Math.floor(Math.random()*2);

if(r == 0)
{
        this.setQuestion('A soccer stadium has a seating capacity of ' + this.z + '. There are ' + this.x + ' sections with an equal number of seats in each section. How many seats are in each section?');
        this.answer = parseInt(this.y);
}
if(r == 1)
{
 this.setQuestion('A parking lot is ' + this.x + ' yards wide and has an area of ' + this.z + ' square yards. How many yards long is the lot?');
        this.answer = parseInt(this.y);
}
        this.setAnswer('' + this.answer,0);
}
});




