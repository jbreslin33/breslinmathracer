
/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_7',0.1507,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__7 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_7';
        this.mThresholdTime = 10000;

        this.setQuestion('1 + 0 = ');
        this.setAnswer('' + '1',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_6',0.1506,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__6 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_6';
        this.mThresholdTime = 10000;

        this.setQuestion('0 + 5 = ');
        this.setAnswer('' + '5',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_5',0.1505,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__5 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_5';
        this.mThresholdTime = 10000;

        this.setQuestion('0 + 4 = ');
        this.setAnswer('' + '4',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_4',0.1504,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__4 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_4';
        this.mThresholdTime = 10000;

        this.setQuestion('0 + 3 = ');
        this.setAnswer('' + '3',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_3',0.1503,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__3 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_3';
        this.mThresholdTime = 10000;

        this.setQuestion('0 + 2 = ');
        this.setAnswer('' + '2',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_2',0.1502,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__2 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_2';
        this.mThresholdTime = 10000;

	this.setQuestion('0 + 1 = ');
        this.setAnswer('' + '1',0);
}
});

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

        this.setQuestion('0 + 0 = ');
        this.setAnswer('' + '0',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_51',0.1551,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__51 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_51';

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
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_52',0.1552,'k.oa.a.5','Add Subtract 1 within 5.');
*/
var i_k_oa_a_5__52 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_52';

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


