/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.a.1_1',5.1201,'5.nf.a.1','');
*/
var i_5_nf_a_1__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nf.a.1_1';
	
	this.mUtility = new Utility();

	this.answer = 'setme';

        this.a = 0;
        this.b = 0;
        this.c = 0;
        this.d = 0;
        this.e = 0;
        this.f = 0;

        this.divisor  = 0;
        this.quotient = 0;
        this.dividend = 0;
	this.remainder = 1;

	while (this.divisor == 0 || this.dividend == 0 || this.remainder != 0  )
	{
        	this.a = Math.floor(Math.random()*10);
        	this.b = Math.floor(Math.random()*10);
        	this.c = Math.floor(Math.random()*10);
        	this.d = Math.floor(Math.random()*10);
        	this.e = Math.floor(Math.random()*10);
        	this.f = Math.floor(Math.random()*10);

        	this.dividend  = parseInt(this.a * 100 + this.b * 10 + this.c);
        	this.divisor   = parseInt(this.d * 100 + this.e * 10 + this.f);
		this.quotient  = parseInt(this.dividend / this.divisor);
		this.remainder = this.dividend % this.divisor;
	}
	
	//answer will slide all the way over to right of dividend so if its 3 spaces it will be equal to div etc
	var q = '' + this.quotient;

	if (q.length == 0)
	{
		//	
	}	
	if (q.length == 1)
	{
		this.answer = '' + this.quotient;	
	}	
	if (q.length == 2)
	{
		this.answer = '' + this.quotient;	
	}	
	if (q.length == 3)
	{
		this.answer = '' + this.quotient;	
	}	
	
        this.setQuestion('Find the quotient: ' + this.a + '.' + this.b + this.c + ' &divide ' + this.d + '.' + this.e + this.f);
        this.setAnswer('' + this.answer,0);
}
});

