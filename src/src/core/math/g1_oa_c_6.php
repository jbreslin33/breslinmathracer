

var NumberPadItemBigger = new Class(
{
Extends: NumberPadItem,
initialize: function(sheet)
{
	this.parent(sheet);
        this.mThresholdTime = 5000;
        this.mQuestionLabel.setPosition(320,75);
        this.mQuestionLabel.setSize(300,50);
        this.mUserAnswerLabel.setPosition(220,150);
        this.mAnswerTextBox.setPosition(370,75);
        this.mAnswerTextBox.setSize(100,50);
}
});

//fluently add and subtract within 10

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_29',1.0629,'1.oa.c.6','' );
*/
var i_1_oa_c_6__29 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_29';
        this.setQuestion('' + '0 + 7 =');
        this.setAnswer('' + '7',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_28',1.0628,'1.oa.c.6','' );
*/
var i_1_oa_c_6__28 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_28';
        this.setQuestion('' + '0 + 6 =');
        this.setAnswer('' + '6',0);
}
});


//doubles + 1

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_27',1.0627,'1.oa.c.6','' );
*/
var i_1_oa_c_6__27 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_27';
        this.setQuestion('' + '9 + 9 + 1 =');
        this.setAnswer('' + '19',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_26',1.0626,'1.oa.c.6','' );
*/
var i_1_oa_c_6__26 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_26';
        this.setQuestion('' + '8 + 8 + 1 =');
        this.setAnswer('' + '17',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_25',1.0625,'1.oa.c.6','' );
*/
var i_1_oa_c_6__25 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_25';
        this.setQuestion('' + '7 + 7 + 1 =');
        this.setAnswer('' + '15',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_24',1.0624,'1.oa.c.6','' );
*/
var i_1_oa_c_6__24 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_24';
        this.setQuestion('' + '6 + 6 + 1 =');
        this.setAnswer('' + '13',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_23',1.0623,'1.oa.c.6','' );
*/
var i_1_oa_c_6__23 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_23';
        this.setQuestion('' + '4 + 4 + 1 =');
        this.setAnswer('' + '8',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_22',1.0622,'1.oa.c.6','' );
*/
var i_1_oa_c_6__22 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_22';
        this.setQuestion('' + '3 + 3 + 1 =');
        this.setAnswer('' + '7',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_21',1.0621,'1.oa.c.6','' );
*/
var i_1_oa_c_6__21 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_21';

        this.setQuestion('' + '2 + 2 + 1 =');
        this.setAnswer('' + '5',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_20',1.0620,'1.oa.c.6','' );
*/
var i_1_oa_c_6__20 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_20';
        this.setQuestion('' + '2 + 2 + 1 =');
        this.setAnswer('' + '5',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_19',1.0619,'1.oa.c.6','' );
*/
var i_1_oa_c_6__19 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_19';
        this.setQuestion('' + '10 + 10 =');
        this.setAnswer('' + '20',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_18',1.0618,'1.oa.c.6','' );
*/
var i_1_oa_c_6__18 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_18';
        this.setQuestion('' + '9 + 9 =');
        this.setAnswer('' + '18',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_17',1.0617,'1.oa.c.6','' );
*/
var i_1_oa_c_6__17 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_17';
        this.setQuestion('' + '8 + 8 =');
        this.setAnswer('' + '16',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_16',1.0616,'1.oa.c.6','' );
*/
var i_1_oa_c_6__16 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_16';
        this.setQuestion('' + '7 + 7 =');
        this.setAnswer('' + '14',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_15',1.0615,'1.oa.c.6','' );
*/
var i_1_oa_c_6__15 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_15';
        this.setQuestion('' + '6 + 6 =');
        this.setAnswer('' + '12',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_14',1.0614,'1.oa.c.6','' );
*/
var i_1_oa_c_6__14 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_14';
        this.setQuestion('' + '5 + 5 =');
        this.setAnswer('' + '6',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_13',1.0613,'1.oa.c.6','' );
*/
var i_1_oa_c_6__13 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_13';
        this.setQuestion('' + '4 + 4 =');
        this.setAnswer('' + '8',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_12',1.0612,'1.oa.c.6','' );
*/
var i_1_oa_c_6__12 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_12';
        this.setQuestion('' + '3 + 3 =');
        this.setAnswer('' + '6',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_11',1.0611,'1.oa.c.6','' );
*/
var i_1_oa_c_6__11 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_11';
        this.setQuestion('' + '2 + 2 =');
        this.setAnswer('' + '4',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_10',1.0610,'1.oa.c.6','' );
*/
var i_1_oa_c_6__10 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_10';
        this.setQuestion('' + '1 + 1 =');
        this.setAnswer('' + '2',0);
}
});

//make ten
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_9',1.0609,'1.oa.c.6','' );
*/
var i_1_oa_c_6__9 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_9';
        this.setQuestion('' + '9 + _ = 10');
        this.setAnswer('' + '1',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_8',1.0608,'1.oa.c.6','' );
*/
var i_1_oa_c_6__8 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_8';
        this.setQuestion('' + '8 + _ = 10');
        this.setAnswer('' + '2',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_7',1.0607,'1.oa.c.6','' );
*/
var i_1_oa_c_6__7 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_7';
        this.setQuestion('' + '7 + _ = 10');
        this.setAnswer('' + '3',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_6',1.0606,'1.oa.c.6','' );
*/
var i_1_oa_c_6__6 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_6';
        this.setQuestion('' + '6 + _ = 10');
        this.setAnswer('' + '4',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_5',1.0605,'1.oa.c.6','' );
*/
var i_1_oa_c_6__5 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_5';
        this.setQuestion('' + '5 + _ = 10');
        this.setAnswer('' + '5',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_4',1.0604,'1.oa.c.6','' );
*/
var i_1_oa_c_6__4 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_4';
        this.setQuestion('' + '4 + _ = 10');
        this.setAnswer('' + '6',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_3',1.0603,'1.oa.c.6','' );
*/
var i_1_oa_c_6__3 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_3';
        this.setQuestion('' + '3 + _ = 10');
        this.setAnswer('' + '7',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_2',1.0602,'1.oa.c.6','' );
*/
var i_1_oa_c_6__2 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_2';
        this.setQuestion('' + '2 + _ = 10');
        this.setAnswer('' + '8',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_1',1.0601,'1.oa.c.6','' );
*/
var i_1_oa_c_6__1 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_1';
        this.setQuestion('' + '1 + _ = 10');
        this.setAnswer('' + '9',0);
}
});
