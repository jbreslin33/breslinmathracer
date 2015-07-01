
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.b.3_4',1.0304,'1.oa.b.3','communative' );
*/
var i_1_oa_b_3__4 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.b.3_4';
        this.mThresholdTime = 10000;

        this.mQuestionLabel.setPosition(150,75);
        this.mQuestionLabel.setSize(200,50);

	this.a = Math.floor(Math.random()*9)+1;
	this.b = Math.floor(Math.random()*9)+1;
        this.c = parseInt(this.a + this.b);

        this.setQuestion('' + this.a +  ' + ' + this.b + ' = ' + this.c + ' AND ' + this.b + ' + ' + this.a + ' = _' );
        this.setAnswer('' + this.c,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.b.3_3',1.0303,'1.oa.b.3','associative' );
*/
var i_1_oa_b_3__3 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.b.3_1';
        this.mThresholdTime = 10000;
 
	this.mQuestionLabel.setPosition(220,75);
	this.mQuestionLabel.setSize(100,50);

	this.a = 0;
	this.b = 0;
	while (this.a == 0 || this.a == 1 || this.a == 9) 
	{
		this.a = Math.floor(Math.random()*9)+1;
	}
	this.b = parseInt(10 + this.a);

	this.r = Math.floor(Math.random()*3);

	if (this.r == 0)
	{
        	this.setQuestion('' + '9 + 1 + ' + this.a + ' =');
	}
        this.setAnswer('' + this.b,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.b.3_2',1.0302,'1.oa.b.3','associative' );
*/
var i_1_oa_b_3__2 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.b.3_2';
        this.mThresholdTime = 10000;

        this.mQuestionLabel.setPosition(220,75);
        this.mQuestionLabel.setSize(100,50);

        this.a = 0;
        this.b = 0;
        while (this.a == 0 || this.a == 1 || this.a == 9)
        {
                this.a = Math.floor(Math.random()*9)+1;
        }
        this.b = parseInt(10 + this.a);

        this.setQuestion('' + '9 + ' + this.a + ' + 1 =');
        this.setAnswer('' + this.b,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.b.3_1',1.0301,'1.oa.b.3','associative' );
*/
var i_1_oa_b_3__1 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.b.3_1';
        this.mThresholdTime = 10000;

        this.mQuestionLabel.setPosition(220,75);
        this.mQuestionLabel.setSize(100,50);

        this.a = 0;
        this.b = 0;
        while (this.a == 0 || this.a == 1 || this.a == 9)
        {
                this.a = Math.floor(Math.random()*9)+1;
        }
        this.b = parseInt(10 + this.a);

        this.setQuestion('' + '9 + 1 + ' + this.a + ' =');
        this.setAnswer('' + this.b,0);
}
});





