
/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_1',0.1501,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__1 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_1';

	this.mThresholdTime = 10000;
	
	this.mQuestionLabel.setPosition(284,75);
	this.mQuestionLabel.setSize(100,50);
	
	var a = 0;
	var b = 0;
	var c = -1;
	var sign = 0;

	while (c < 0 || c > 5)
	{	
   		sign = Math.floor(Math.random()*2);
		if (sign == 0)
		{
   			a = Math.floor(Math.random()*6);
   			b = Math.floor(Math.random()*6);
			c = parseInt(a + b);
        		this.setQuestion('' + a + ' + ' + b + ' = ');
		}
		else
		{
   			a = Math.floor(Math.random()*6);
   			b = Math.floor(Math.random()*6);
			c = parseInt(a - b);
        		this.setQuestion('' + a + ' - ' + b + ' = ');
		}
	}
        this.setAnswer('' + c,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_2',0.1502,'k.oa.a.5','Add Subtract 1 within 5.');
*/
var i_k_oa_a_5__2 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_2';

        this.mThresholdTime = 10000;

        this.mQuestionLabel.setPosition(284,75);
        this.mQuestionLabel.setSize(100,50);

        var a = 0;
        var b = 1;
        var c = -1;
        var sign = 0;

        while (c < 0 || c > 5)
        {
                sign = Math.floor(Math.random()*2);
                if (sign == 0)
                {
                        a = Math.floor(Math.random()*6);
                        //b = Math.floor(Math.random()*6);
                        c = parseInt(a + b);
                        this.setQuestion('' + a + ' + ' + b + ' = ');
                }
                else
                {
                        a = Math.floor(Math.random()*6);
                        //b = Math.floor(Math.random()*6);
                        c = parseInt(a - b);
                        this.setQuestion('' + a + ' - ' + b + ' = ');
                }
        }
        this.setAnswer('' + c,0);
}
});


