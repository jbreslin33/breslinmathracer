
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.b.3_36',1.0336,'1.oa.b.3','communative' );
*/
var i_1_oa_b_3__36 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.b.3_36';
        this.mThresholdTime = 5000;

        this.mQuestionLabel.setPosition(150,75);
        this.mQuestionLabel.setSize(250,50);
        
        this.mUserAnswerLabel.setPosition(150,100);
	this.mUserAnswerLabel.setSize(250,50);

	this.a = Math.floor(Math.random()*9)+1;
	this.b = Math.floor(Math.random()*9)+1;
        this.c = parseInt(this.a + this.b);

        this.setQuestion('' + this.a +  ' + ' + this.b + ' = ' + this.c + ' AND ' + this.b + ' + ' + this.a + ' = _' );
        this.setAnswer('' + this.c,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.b.3_35',1.0335,'1.oa.b.3','associative' );
*/
var i_1_oa_b_3__35 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.b.3_35';
        this.mThresholdTime = 5000;
 
	this.mQuestionLabel.setPosition(220,75);
	this.mQuestionLabel.setSize(100,50);

	this.a = 0;
	this.b = 0;
	while (this.a == 0 || this.a == 1 || this.a == 9) 
	{
		this.a = Math.floor(Math.random()*9)+1;
	}
	this.b = parseInt(10 + this.a);

        this.setQuestion('' + this.a + ' + 4 + 6 =');
        this.setAnswer('' + this.b,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.b.3_34',1.0334,'1.oa.b.3','associative' );
*/
var i_1_oa_b_3__34 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.b.3_34';
        this.mThresholdTime = 5000;

        this.mQuestionLabel.setPosition(220,75);
        this.mQuestionLabel.setSize(100,50);

        this.a = 0;
        this.b = 0;
        while (this.a == 0 || this.a == 1 || this.a == 9)
        {
                this.a = Math.floor(Math.random()*9)+1;
        }
        this.b = parseInt(10 + this.a);

        this.setQuestion('' + '4 + ' + this.a + ' + 6 =');
        this.setAnswer('' + this.b,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.b.3_33',1.0333,'1.oa.b.3','associative' );
*/
var i_1_oa_b_3__33 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.b.3_33';
        this.mThresholdTime = 5000;

        this.mQuestionLabel.setPosition(220,75);
        this.mQuestionLabel.setSize(100,50);

        this.a = 0;
        this.b = 0;
        while (this.a == 0 || this.a == 1 || this.a == 9)
        {
                this.a = Math.floor(Math.random()*9)+1;
        }
        this.b = parseInt(10 + this.a);

        this.setQuestion('' + '4 + 6 + ' + this.a + ' =');
        this.setAnswer('' + this.b,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.b.3_32',1.0332,'1.oa.b.3','communative' );
*/
var i_1_oa_b_3__32 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.b.3_32';
        this.mThresholdTime = 5000;

        this.mQuestionLabel.setPosition(150,75);
        this.mQuestionLabel.setSize(250,50);
        
        this.mUserAnswerLabel.setPosition(150,100);
	this.mUserAnswerLabel.setSize(250,50);

	this.a = Math.floor(Math.random()*9)+1;
	this.b = Math.floor(Math.random()*9)+1;
        this.c = parseInt(this.a + this.b);

        this.setQuestion('' + this.a +  ' + ' + this.b + ' = ' + this.c + ' AND ' + this.b + ' + ' + this.a + ' = _' );
        this.setAnswer('' + this.c,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.b.3_31',1.0331,'1.oa.b.3','associative' );
*/
var i_1_oa_b_3__31 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.b.3_31';
        this.mThresholdTime = 5000;
 
	this.mQuestionLabel.setPosition(220,75);
	this.mQuestionLabel.setSize(100,50);

	this.a = 0;
	this.b = 0;
	while (this.a == 0 || this.a == 1 || this.a == 9) 
	{
		this.a = Math.floor(Math.random()*9)+1;
	}
	this.b = parseInt(10 + this.a);

        this.setQuestion('' + this.a + ' + 3 + 7 =');
        this.setAnswer('' + this.b,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.b.3_30',1.0330,'1.oa.b.3','associative' );
*/
var i_1_oa_b_3__30 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.b.3_30';
        this.mThresholdTime = 5000;

        this.mQuestionLabel.setPosition(220,75);
        this.mQuestionLabel.setSize(100,50);

        this.a = 0;
        this.b = 0;
        while (this.a == 0 || this.a == 1 || this.a == 9)
        {
                this.a = Math.floor(Math.random()*9)+1;
        }
        this.b = parseInt(10 + this.a);

        this.setQuestion('' + '3 + ' + this.a + ' + 7 =');
        this.setAnswer('' + this.b,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.b.3_29',1.0329,'1.oa.b.3','associative' );
*/
var i_1_oa_b_3__29 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.b.3_29';
        this.mThresholdTime = 5000;

        this.mQuestionLabel.setPosition(220,75);
        this.mQuestionLabel.setSize(100,50);

        this.a = 0;
        this.b = 0;
        while (this.a == 0 || this.a == 1 || this.a == 9)
        {
                this.a = Math.floor(Math.random()*9)+1;
        }
        this.b = parseInt(10 + this.a);

        this.setQuestion('' + '3 + 7 + ' + this.a + ' =');
        this.setAnswer('' + this.b,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.b.3_28',1.0328,'1.oa.b.3','communative' );
*/
var i_1_oa_b_3__28 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.b.3_28';
        this.mThresholdTime = 5000;

        this.mQuestionLabel.setPosition(150,75);
        this.mQuestionLabel.setSize(250,50);
        
        this.mUserAnswerLabel.setPosition(150,100);
	this.mUserAnswerLabel.setSize(250,50);

	this.a = Math.floor(Math.random()*9)+1;
	this.b = Math.floor(Math.random()*9)+1;
        this.c = parseInt(this.a + this.b);

        this.setQuestion('' + this.a +  ' + ' + this.b + ' = ' + this.c + ' AND ' + this.b + ' + ' + this.a + ' = _' );
        this.setAnswer('' + this.c,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.b.3_27',1.0327,'1.oa.b.3','associative' );
*/
var i_1_oa_b_3__27 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.b.3_27';
        this.mThresholdTime = 5000;
 
	this.mQuestionLabel.setPosition(220,75);
	this.mQuestionLabel.setSize(100,50);

	this.a = 0;
	this.b = 0;
	while (this.a == 0 || this.a == 1 || this.a == 9) 
	{
		this.a = Math.floor(Math.random()*9)+1;
	}
	this.b = parseInt(10 + this.a);

        this.setQuestion('' + this.a + ' + 2 + 8 =');
        this.setAnswer('' + this.b,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.b.3_26',1.0326,'1.oa.b.3','associative' );
*/
var i_1_oa_b_3__26 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.b.3_26';
        this.mThresholdTime = 5000;

        this.mQuestionLabel.setPosition(220,75);
        this.mQuestionLabel.setSize(100,50);

        this.a = 0;
        this.b = 0;
        while (this.a == 0 || this.a == 1 || this.a == 9)
        {
                this.a = Math.floor(Math.random()*9)+1;
        }
        this.b = parseInt(10 + this.a);

        this.setQuestion('' + '2 + ' + this.a + ' + 8 =');
        this.setAnswer('' + this.b,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.b.3_25',1.0325,'1.oa.b.3','associative' );
*/
var i_1_oa_b_3__25 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.b.3_25';
        this.mThresholdTime = 5000;

        this.mQuestionLabel.setPosition(220,75);
        this.mQuestionLabel.setSize(100,50);

        this.a = 0;
        this.b = 0;
        while (this.a == 0 || this.a == 1 || this.a == 9)
        {
                this.a = Math.floor(Math.random()*9)+1;
        }
        this.b = parseInt(10 + this.a);

        this.setQuestion('' + '2 + 8 + ' + this.a + ' =');
        this.setAnswer('' + this.b,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.b.3_24',1.0324,'1.oa.b.3','communative' );
*/
var i_1_oa_b_3__24 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.b.3_24';
        this.mThresholdTime = 5000;

        this.mQuestionLabel.setPosition(150,75);
        this.mQuestionLabel.setSize(250,50);
        
        this.mUserAnswerLabel.setPosition(150,100);
	this.mUserAnswerLabel.setSize(250,50);

	this.a = Math.floor(Math.random()*9)+1;
	this.b = Math.floor(Math.random()*9)+1;
        this.c = parseInt(this.a + this.b);

        this.setQuestion('' + this.a +  ' + ' + this.b + ' = ' + this.c + ' AND ' + this.b + ' + ' + this.a + ' = _' );
        this.setAnswer('' + this.c,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.b.3_23',1.0323,'1.oa.b.3','associative' );
*/
var i_1_oa_b_3__23 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.b.3_23';
        this.mThresholdTime = 5000;
 
	this.mQuestionLabel.setPosition(220,75);
	this.mQuestionLabel.setSize(100,50);

	this.a = 0;
	this.b = 0;
	while (this.a == 0 || this.a == 1 || this.a == 9) 
	{
		this.a = Math.floor(Math.random()*9)+1;
	}
	this.b = parseInt(10 + this.a);

        this.setQuestion('' + this.a + ' + 1 + 9 =');
        this.setAnswer('' + this.b,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.b.3_22',1.0322,'1.oa.b.3','associative' );
*/
var i_1_oa_b_3__22 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.b.3_22';
        this.mThresholdTime = 5000;

        this.mQuestionLabel.setPosition(220,75);
        this.mQuestionLabel.setSize(100,50);

        this.a = 0;
        this.b = 0;
        while (this.a == 0 || this.a == 1 || this.a == 9)
        {
                this.a = Math.floor(Math.random()*9)+1;
        }
        this.b = parseInt(10 + this.a);

        this.setQuestion('' + '1 + ' + this.a + ' + 9 =');
        this.setAnswer('' + this.b,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.b.3_21',1.0321,'1.oa.b.3','associative' );
*/
var i_1_oa_b_3__21 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.b.3_21';
        this.mThresholdTime = 5000;

        this.mQuestionLabel.setPosition(220,75);
        this.mQuestionLabel.setSize(100,50);

        this.a = 0;
        this.b = 0;
        while (this.a == 0 || this.a == 1 || this.a == 9)
        {
                this.a = Math.floor(Math.random()*9)+1;
        }
        this.b = parseInt(10 + this.a);

        this.setQuestion('' + '1 + 9 + ' + this.a + ' =');
        this.setAnswer('' + this.b,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.b.3_20',1.0320,'1.oa.b.3','communative' );
*/
var i_1_oa_b_3__20 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.b.3_20';
        this.mThresholdTime = 5000;

        this.mQuestionLabel.setPosition(150,75);
        this.mQuestionLabel.setSize(250,50);
        
        this.mUserAnswerLabel.setPosition(150,100);
	this.mUserAnswerLabel.setSize(250,50);

	this.a = Math.floor(Math.random()*9)+1;
	this.b = Math.floor(Math.random()*9)+1;
        this.c = parseInt(this.a + this.b);

        this.setQuestion('' + this.a +  ' + ' + this.b + ' = ' + this.c + ' AND ' + this.b + ' + ' + this.a + ' = _' );
        this.setAnswer('' + this.c,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.b.3_19',1.0319,'1.oa.b.3','associative' );
*/
var i_1_oa_b_3__19 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.b.3_19';
        this.mThresholdTime = 5000;
 
	this.mQuestionLabel.setPosition(220,75);
	this.mQuestionLabel.setSize(100,50);

	this.a = 0;
	this.b = 0;
	while (this.a == 0 || this.a == 1 || this.a == 9) 
	{
		this.a = Math.floor(Math.random()*9)+1;
	}
	this.b = parseInt(10 + this.a);

        this.setQuestion('' + this.a + ' + 5 + 5 =');
        this.setAnswer('' + this.b,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.b.3_18',1.0318,'1.oa.b.3','associative' );
*/
var i_1_oa_b_3__18 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.b.3_18';
        this.mThresholdTime = 5000;

        this.mQuestionLabel.setPosition(220,75);
        this.mQuestionLabel.setSize(100,50);

        this.a = 0;
        this.b = 0;
        while (this.a == 0 || this.a == 1 || this.a == 9)
        {
                this.a = Math.floor(Math.random()*9)+1;
        }
        this.b = parseInt(10 + this.a);

        this.setQuestion('' + '5 + ' + this.a + ' + 5 =');
        this.setAnswer('' + this.b,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.b.3_17',1.0317,'1.oa.b.3','associative' );
*/
var i_1_oa_b_3__17 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.b.3_17';
        this.mThresholdTime = 5000;

        this.mQuestionLabel.setPosition(220,75);
        this.mQuestionLabel.setSize(100,50);

        this.a = 0;
        this.b = 0;
        while (this.a == 0 || this.a == 1 || this.a == 9)
        {
                this.a = Math.floor(Math.random()*9)+1;
        }
        this.b = parseInt(10 + this.a);

        this.setQuestion('' + '5 + 5 + ' + this.a + ' =');
        this.setAnswer('' + this.b,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.b.3_16',1.0316,'1.oa.b.3','communative' );
*/
var i_1_oa_b_3__16 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.b.3_16';
        this.mThresholdTime = 5000;

        this.mQuestionLabel.setPosition(150,75);
        this.mQuestionLabel.setSize(250,50);
        
        this.mUserAnswerLabel.setPosition(150,100);
	this.mUserAnswerLabel.setSize(250,50);

	this.a = Math.floor(Math.random()*9)+1;
	this.b = Math.floor(Math.random()*9)+1;
        this.c = parseInt(this.a + this.b);

        this.setQuestion('' + this.a +  ' + ' + this.b + ' = ' + this.c + ' AND ' + this.b + ' + ' + this.a + ' = _' );
        this.setAnswer('' + this.c,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.b.3_15',1.0315,'1.oa.b.3','associative' );
*/
var i_1_oa_b_3__15 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.b.3_15';
        this.mThresholdTime = 5000;
 
	this.mQuestionLabel.setPosition(220,75);
	this.mQuestionLabel.setSize(100,50);

	this.a = 0;
	this.b = 0;
	while (this.a == 0 || this.a == 1 || this.a == 9) 
	{
		this.a = Math.floor(Math.random()*9)+1;
	}
	this.b = parseInt(10 + this.a);

        this.setQuestion('' + this.a + ' + 6 + 4 =');
        this.setAnswer('' + this.b,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.b.3_14',1.0314,'1.oa.b.3','associative' );
*/
var i_1_oa_b_3__14 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.b.3_14';
        this.mThresholdTime = 5000;

        this.mQuestionLabel.setPosition(220,75);
        this.mQuestionLabel.setSize(100,50);

        this.a = 0;
        this.b = 0;
        while (this.a == 0 || this.a == 1 || this.a == 9)
        {
                this.a = Math.floor(Math.random()*9)+1;
        }
        this.b = parseInt(10 + this.a);

        this.setQuestion('' + '6 + ' + this.a + ' + 4 =');
        this.setAnswer('' + this.b,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.b.3_13',1.0313,'1.oa.b.3','associative' );
*/
var i_1_oa_b_3__13 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.b.3_13';
        this.mThresholdTime = 5000;

        this.mQuestionLabel.setPosition(220,75);
        this.mQuestionLabel.setSize(100,50);

        this.a = 0;
        this.b = 0;
        while (this.a == 0 || this.a == 1 || this.a == 9)
        {
                this.a = Math.floor(Math.random()*9)+1;
        }
        this.b = parseInt(10 + this.a);

        this.setQuestion('' + '6 + 4 + ' + this.a + ' =');
        this.setAnswer('' + this.b,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.b.3_12',1.0312,'1.oa.b.3','communative' );
*/
var i_1_oa_b_3__12 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.b.3_12';
        this.mThresholdTime = 5000;

        this.mQuestionLabel.setPosition(150,75);
        this.mQuestionLabel.setSize(250,50);
        
        this.mUserAnswerLabel.setPosition(150,100);
	this.mUserAnswerLabel.setSize(250,50);

	this.a = Math.floor(Math.random()*9)+1;
	this.b = Math.floor(Math.random()*9)+1;
        this.c = parseInt(this.a + this.b);

        this.setQuestion('' + this.a +  ' + ' + this.b + ' = ' + this.c + ' AND ' + this.b + ' + ' + this.a + ' = _' );
        this.setAnswer('' + this.c,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.b.3_11',1.0311,'1.oa.b.3','associative' );
*/
var i_1_oa_b_3__11 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.b.3_11';
        this.mThresholdTime = 5000;
 
	this.mQuestionLabel.setPosition(220,75);
	this.mQuestionLabel.setSize(100,50);

	this.a = 0;
	this.b = 0;
	while (this.a == 0 || this.a == 1 || this.a == 9) 
	{
		this.a = Math.floor(Math.random()*9)+1;
	}
	this.b = parseInt(10 + this.a);

        this.setQuestion('' + this.a + ' + 7 + 3 =');
        this.setAnswer('' + this.b,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.b.3_10',1.0310,'1.oa.b.3','associative' );
*/
var i_1_oa_b_3__10 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.b.3_10';
        this.mThresholdTime = 5000;

        this.mQuestionLabel.setPosition(220,75);
        this.mQuestionLabel.setSize(100,50);

        this.a = 0;
        this.b = 0;
        while (this.a == 0 || this.a == 1 || this.a == 9)
        {
                this.a = Math.floor(Math.random()*9)+1;
        }
        this.b = parseInt(10 + this.a);

        this.setQuestion('' + '7 + ' + this.a + ' + 3 =');
        this.setAnswer('' + this.b,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.b.3_9',1.0309,'1.oa.b.3','associative' );
*/
var i_1_oa_b_3__9 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.b.3_9';
        this.mThresholdTime = 5000;

        this.mQuestionLabel.setPosition(220,75);
        this.mQuestionLabel.setSize(100,50);

        this.a = 0;
        this.b = 0;
        while (this.a == 0 || this.a == 1 || this.a == 9)
        {
                this.a = Math.floor(Math.random()*9)+1;
        }
        this.b = parseInt(10 + this.a);

        this.setQuestion('' + '7 + 3 + ' + this.a + ' =');
        this.setAnswer('' + this.b,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.b.3_8',1.0308,'1.oa.b.3','communative' );
*/
var i_1_oa_b_3__8 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.b.3_8';
        this.mThresholdTime = 5000;

        this.mQuestionLabel.setPosition(150,75);
        this.mQuestionLabel.setSize(250,50);
        
        this.mUserAnswerLabel.setPosition(150,100);
	this.mUserAnswerLabel.setSize(250,50);

	this.a = Math.floor(Math.random()*9)+1;
	this.b = Math.floor(Math.random()*9)+1;
        this.c = parseInt(this.a + this.b);

        this.setQuestion('' + this.a +  ' + ' + this.b + ' = ' + this.c + ' AND ' + this.b + ' + ' + this.a + ' = _' );
        this.setAnswer('' + this.c,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.b.3_7',1.0307,'1.oa.b.3','associative' );
*/
var i_1_oa_b_3__7 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.b.3_7';
        this.mThresholdTime = 5000;
 
	this.mQuestionLabel.setPosition(220,75);
	this.mQuestionLabel.setSize(100,50);

	this.a = 0;
	this.b = 0;
	while (this.a == 0 || this.a == 1 || this.a == 9) 
	{
		this.a = Math.floor(Math.random()*9)+1;
	}
	this.b = parseInt(10 + this.a);

        this.setQuestion('' + this.a + ' + 8 + 2 =');
        this.setAnswer('' + this.b,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.b.3_6',1.0306,'1.oa.b.3','associative' );
*/
var i_1_oa_b_3__6 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.b.3_6';
        this.mThresholdTime = 5000;

        this.mQuestionLabel.setPosition(220,75);
        this.mQuestionLabel.setSize(100,50);

        this.a = 0;
        this.b = 0;
        while (this.a == 0 || this.a == 1 || this.a == 9)
        {
                this.a = Math.floor(Math.random()*9)+1;
        }
        this.b = parseInt(10 + this.a);

        this.setQuestion('' + '8 + ' + this.a + ' + 2 =');
        this.setAnswer('' + this.b,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.b.3_5',1.0305,'1.oa.b.3','associative' );
*/
var i_1_oa_b_3__5 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.b.3_5';
        this.mThresholdTime = 5000;

        this.mQuestionLabel.setPosition(220,75);
        this.mQuestionLabel.setSize(100,50);

        this.a = 0;
        this.b = 0;
        while (this.a == 0 || this.a == 1 || this.a == 9)
        {
                this.a = Math.floor(Math.random()*9)+1;
        }
        this.b = parseInt(10 + this.a);

        this.setQuestion('' + '8 + 2 + ' + this.a + ' =');
        this.setAnswer('' + this.b,0);
}
});

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
        this.mThresholdTime = 5000;

        this.mQuestionLabel.setPosition(150,75);
        this.mQuestionLabel.setSize(250,50);
        
        this.mUserAnswerLabel.setPosition(150,100);
	this.mUserAnswerLabel.setSize(250,50);

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
        this.mType = '1.oa.b.3_3';
        this.mThresholdTime = 5000;
 
	this.mQuestionLabel.setPosition(220,75);
	this.mQuestionLabel.setSize(100,50);

	this.a = 0;
	this.b = 0;
	while (this.a == 0 || this.a == 1 || this.a == 9) 
	{
		this.a = Math.floor(Math.random()*9)+1;
	}
	this.b = parseInt(10 + this.a);
        this.setQuestion('' + this.a + ' + 9 + 1 =');
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
        this.mThresholdTime = 5000;

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
        this.mThresholdTime = 5000;

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





