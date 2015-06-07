/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.4_7',0.1407,'k.oa.a.4','');

*/
var i_k_oa_a_4__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,600,50,375,95, 700,50,400,200);

        this.mType = 'k.oa.a.4_1';
        this.mStripCommas = false;

        this.setQuestion('Count to 100 by tens starting at ten and seperating each number by a comma.');
        this.setAnswer('' + '10,20,30,40,50,60,70,80,90,100',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.4_11',0.14011,'k.oa.a.4','');
*/

var i_k_oa_a_4__11 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.oa.a.4_11';

		this.a = 0;
		this.b = 0;
		this.c = 1000;

		this.x = 0;	 
		this.y = 0;	 

		while (this.a == this.b || this.a == this.y || this.b == this.y || this.c != 10 || this.a < 0 || this.b < 0)
		{
			//variables
                	this.x = Math.floor(Math.random()*9)+2;
                	this.y = Math.floor(Math.random()*9)+2;
			this.c = parseInt(this.x + this.y);  
	
			//wrong answers 
                	this.a = Math.floor(Math.random()*11);
                	this.b = Math.floor(Math.random()*11);
                }

                this.setAnswer('' + parseInt(this.y),0);

                this.mButtonA.setAnswer('' + this.a);
                this.mButtonB.setAnswer('' + this.b);
                this.mButtonC.setAnswer('' +this.y);

		this.setQuestion('' + this.x + ' + _ = 10'); 
                this.shuffle(10);
        }
});
