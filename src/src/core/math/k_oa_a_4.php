
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

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.4_9',0.1409,'k.oa.a.4','');
*/
var i_k_oa_a_4__9 = new Class(
{
Extends: NumberPadItem,
initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.4_9';

	this.mQuestionLabel.setPosition(220,75);
	this.mQuestionLabel.setSize(200,25);

        this.setQuestion('Make ten. 1 + _ = 10');
        this.setAnswer('' + '9',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.4_8',0.1408,'k.oa.a.4','');
*/
var i_k_oa_a_4__8 = new Class(
{
Extends: NumberPadItem,
initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.4_8';
        this.mThresholdTime = 5000;

	this.mQuestionLabel.setPosition(220,75);
	this.mQuestionLabel.setSize(200,25);

        this.setQuestion('Make ten. 2 + _ = 10');
        this.setAnswer('' + '8',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.4_7',0.1407,'k.oa.a.4','');
*/
var i_k_oa_a_4__7 = new Class(
{
Extends: NumberPadItem,
initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.4_7';
        this.mThresholdTime = 5000;

	this.mQuestionLabel.setPosition(220,75);
	this.mQuestionLabel.setSize(200,25);

        this.setQuestion('Make ten. 3 + _ = 10');
        this.setAnswer('' + '7',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.4_6',0.1406,'k.oa.a.4','');
*/
var i_k_oa_a_4__6 = new Class(
{
Extends: NumberPadItem,
initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.4_6';
        this.mThresholdTime = 5000;

	this.mQuestionLabel.setPosition(220,75);
	this.mQuestionLabel.setSize(200,25);

        this.setQuestion('Make ten. 4 + _ = 10');
        this.setAnswer('' + '6',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.4_5',0.1405,'k.oa.a.4','');
*/
var i_k_oa_a_4__5 = new Class(
{
Extends: NumberPadItem,
initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.4_5';
        this.mThresholdTime = 5000;

	this.mQuestionLabel.setPosition(220,75);
	this.mQuestionLabel.setSize(200,25);

        this.setQuestion('Make ten. 5 + _ = 10');
        this.setAnswer('' + '5',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.4_4',0.1404,'k.oa.a.4','');
*/
var i_k_oa_a_4__4 = new Class(
{
Extends: NumberPadItem,
initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.4_4';
        this.mThresholdTime = 5000;

	this.mQuestionLabel.setPosition(220,75);
	this.mQuestionLabel.setSize(200,25);

        this.setQuestion('Make ten. 6 + _ = 10');
        this.setAnswer('' + '4',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.4_3',0.1403,'k.oa.a.4','');
*/
var i_k_oa_a_4__3 = new Class(
{
Extends: NumberPadItem,
initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.4_3';
        this.mThresholdTime = 5000;

	this.mQuestionLabel.setPosition(220,75);
	this.mQuestionLabel.setSize(200,25);

        this.setQuestion('Make ten. 7 + _ = 10');
        this.setAnswer('' + '3',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.4_2',0.1402,'k.oa.a.4','');
*/
var i_k_oa_a_4__2 = new Class(
{
Extends: NumberPadItem,
initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.4_2';
        this.mThresholdTime = 5000;

	this.mQuestionLabel.setPosition(220,75);
	this.mQuestionLabel.setSize(200,25);

        this.setQuestion('Make ten. 8 + _ = 10');
        this.setAnswer('' + '2',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.4_1',0.1401,'k.oa.a.4','');
*/
var i_k_oa_a_4__1 = new Class(
{
Extends: NumberPadItem,
initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.4_1';
        this.mThresholdTime = 5000;
    
	this.mQuestionLabel.setPosition(220,75);
	this.mQuestionLabel.setSize(200,25);

        this.setQuestion('Make ten. 9 + _ = 10');
        this.setAnswer('' + '1',0);
}
});

