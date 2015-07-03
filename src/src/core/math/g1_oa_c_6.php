

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
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_73',1.0673,'1.oa.c.6','' );
*/
var i_1_oa_c_6__73 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_73';
        this.setQuestion('' + '0 + 10 =');
        this.setAnswer('' + '10',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_72',1.0672,'1.oa.c.6','' );
*/
var i_1_oa_c_6__72 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_72';
        this.setQuestion('' + '1 + 9 =');
        this.setAnswer('' + '10',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_71',1.0671,'1.oa.c.6','' );
*/
var i_1_oa_c_6__71 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_71';
        this.setQuestion('' + '0 + 9 =');
        this.setAnswer('' + '9',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_70',1.0670,'1.oa.c.6','' );
*/
var i_1_oa_c_6__70 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_70';
        this.setQuestion('' + '2 + 8 =');
        this.setAnswer('' + '10',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_69',1.0669,'1.oa.c.6','' );
*/
var i_1_oa_c_6__69 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_69';
        this.setQuestion('' + '1 + 8 =');
        this.setAnswer('' + '9',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_68',1.0668,'1.oa.c.6','' );
*/
var i_1_oa_c_6__68 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_68';
        this.setQuestion('' + '0 + 8 =');
        this.setAnswer('' + '8',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_67',1.0667,'1.oa.c.6','' );
*/
var i_1_oa_c_6__67 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_67';
        this.setQuestion('' + '3 + 7 =');
        this.setAnswer('' + '10',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_66',1.0666,'1.oa.c.6','' );
*/
var i_1_oa_c_6__66 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_66';
        this.setQuestion('' + '2 + 7 =');
        this.setAnswer('' + '9',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_65',1.0665,'1.oa.c.6','' );
*/
var i_1_oa_c_6__65 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_65';
        this.setQuestion('' + '1 + 7 =');
        this.setAnswer('' + '8',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_64',1.0664,'1.oa.c.6','' );
*/
var i_1_oa_c_6__64 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_64';
        this.setQuestion('' + '0 + 7 =');
        this.setAnswer('' + '7',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_63',1.0663,'1.oa.c.6','' );
*/
var i_1_oa_c_6__63 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_63';
        this.setQuestion('' + '4 + 6 =');
        this.setAnswer('' + '10',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_62',1.0662,'1.oa.c.6','' );
*/
var i_1_oa_c_6__62 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_62';
        this.setQuestion('' + '3 + 6 =');
        this.setAnswer('' + '9',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_61',1.0661,'1.oa.c.6','' );
*/
var i_1_oa_c_6__61 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_61';
        this.setQuestion('' + '2 + 6 =');
        this.setAnswer('' + '8',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_60',1.0660,'1.oa.c.6','' );
*/
var i_1_oa_c_6__60 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_60';
        this.setQuestion('' + '1 + 6 =');
        this.setAnswer('' + '7',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_59',1.0659,'1.oa.c.6','' );
*/
var i_1_oa_c_6__59 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_59';
        this.setQuestion('' + '0 + 6 =');
        this.setAnswer('' + '6',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_58',1.0658,'1.oa.c.6','' );
*/
var i_1_oa_c_6__58 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_58';
        this.setQuestion('' + '5 + 5 =');
        this.setAnswer('' + '10',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_57',1.0657,'1.oa.c.6','' );
*/
var i_1_oa_c_6__57 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_57';
        this.setQuestion('' + '4 + 5 =');
        this.setAnswer('' + '9',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_56',1.0656,'1.oa.c.6','' );
*/
var i_1_oa_c_6__56 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_56';
        this.setQuestion('' + '3 + 5 =');
        this.setAnswer('' + '8',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_55',1.0655,'1.oa.c.6','' );
*/
var i_1_oa_c_6__55 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_55';
        this.setQuestion('' + '2 + 5 =');
        this.setAnswer('' + '7',0);
}
});



/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_54',1.0654,'1.oa.c.6','' );
*/
var i_1_oa_c_6__54 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_54';
        this.setQuestion('' + '1 + 5 =');
        this.setAnswer('' + '6',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_53',1.0653,'1.oa.c.6','' );
*/
var i_1_oa_c_6__53 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_53';
        this.setQuestion('' + '6 + 4 =');
        this.setAnswer('' + '10',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_52',1.0652,'1.oa.c.6','' );
*/
var i_1_oa_c_6__52 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_52';
        this.setQuestion('' + '5 + 4 =');
        this.setAnswer('' + '9',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_51',1.0651,'1.oa.c.6','' );
*/
var i_1_oa_c_6__51 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_51';
        this.setQuestion('' + '4 + 4 =');
        this.setAnswer('' + '8',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_50',1.0650,'1.oa.c.6','' );
*/
var i_1_oa_c_6__50 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_50';
        this.setQuestion('' + '3 + 4 =');
        this.setAnswer('' + '7',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_49',1.0649,'1.oa.c.6','' );
*/
var i_1_oa_c_6__49 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_49';
        this.setQuestion('' + '2 + 4 =');
        this.setAnswer('' + '6',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_48',1.0648,'1.oa.c.6','' );
*/
var i_1_oa_c_6__48 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_48';
        this.setQuestion('' + '7 + 3 =');
        this.setAnswer('' + '10',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_47',1.0647,'1.oa.c.6','' );
*/
var i_1_oa_c_6__47 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_47';
        this.setQuestion('' + '6 + 3 =');
        this.setAnswer('' + '9',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_46',1.0646,'1.oa.c.6','' );
*/
var i_1_oa_c_6__46 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_46';
        this.setQuestion('' + '5 + 3 =');
        this.setAnswer('' + '8',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_45',1.0645,'1.oa.c.6','' );
*/
var i_1_oa_c_6__45 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_45';
        this.setQuestion('' + '4 + 3 =');
        this.setAnswer('' + '7',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_44',1.0644,'1.oa.c.6','' );
*/
var i_1_oa_c_6__44 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_44';
        this.setQuestion('' + '3 + 3 =');
        this.setAnswer('' + '6',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_43',1.0643,'1.oa.c.6','' );
*/
var i_1_oa_c_6__43 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_43';
        this.setQuestion('' + '3 + 3 =');
        this.setAnswer('' + '6',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_42',1.0642,'1.oa.c.6','' );
*/
var i_1_oa_c_6__42 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_42';
        this.setQuestion('' + '8 + 2 =');
        this.setAnswer('' + '10',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_41',1.0641,'1.oa.c.6','' );
*/
var i_1_oa_c_6__41 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_41';
        this.setQuestion('' + '7 + 2 =');
        this.setAnswer('' + '9',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_40',1.0640,'1.oa.c.6','' );
*/
var i_1_oa_c_6__40 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_40';
        this.setQuestion('' + '6 + 2 =');
        this.setAnswer('' + '8',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_39',1.0639,'1.oa.c.6','' );
*/
var i_1_oa_c_6__39 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_39';
        this.setQuestion('' + '5 + 2 =');
        this.setAnswer('' + '7',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_38',1.0638,'1.oa.c.6','' );
*/
var i_1_oa_c_6__38 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_38';
        this.setQuestion('' + '4 + 2 =');
        this.setAnswer('' + '6',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_37',1.0637,'1.oa.c.6','' );
*/
var i_1_oa_c_6__37 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_37';
        this.setQuestion('' + '9 + 1 =');
        this.setAnswer('' + '10',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_36',1.0636,'1.oa.c.6','' );
*/
var i_1_oa_c_6__36 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_36';
        this.setQuestion('' + '8 + 1 =');
        this.setAnswer('' + '9',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_35',1.0635,'1.oa.c.6','' );
*/
var i_1_oa_c_6__35 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_35';
        this.setQuestion('' + '7 + 1 =');
        this.setAnswer('' + '8',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_34',1.0634,'1.oa.c.6','' );
*/
var i_1_oa_c_6__34 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_34';
        this.setQuestion('' + '6 + 1 =');
        this.setAnswer('' + '7',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_33',1.0633,'1.oa.c.6','' );
*/
var i_1_oa_c_6__33 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_33';
        this.setQuestion('' + '5 + 1 =');
        this.setAnswer('' + '6',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_32',1.0632,'1.oa.c.6','' );
*/
var i_1_oa_c_6__32 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_32';
        this.setQuestion('' + '10 + 0 =');
        this.setAnswer('' + '10',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_31',1.0631,'1.oa.c.6','' );
*/
var i_1_oa_c_6__31 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_31';
        this.setQuestion('' + '9 + 0 =');
        this.setAnswer('' + '9',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_30',1.0630,'1.oa.c.6','' );
*/
var i_1_oa_c_6__30 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_30';
        this.setQuestion('' + '8 + 0 =');
        this.setAnswer('' + '8',0);
}
});


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
        this.setQuestion('' + '7 + 0 =');
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
        this.setQuestion('' + '6 + 0 =');
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
