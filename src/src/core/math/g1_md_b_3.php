
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.md.b.3_23',1.2023,'1.md.b.3','' );
*/
var i_1_md_b_3__23 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mNameMachine = new NameMachine();
        this.mRaphael = Raphael(25,200,200, 200);

        this.ns = new NameSampler();
        this.mType = '1.md.b.3_23';

        this.hour = "2";
        this.minute = "00";

        this.setQuestion('' + 'What time is it?');
        this.setAnswer('' + this.hour + ':' + this.minute,0);
},
createQuestionShapes: function()
{
        this.mAnalogClock = new AnalogClock (this,100,20,20,APPLICATION.mGame,this.mRaphael,0,0,0,"#000000",.5,false);
        this.addQuestionShape(this.mAnalogClock);
        this.mAnalogClock.set(this.hour,this.minute);
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.md.b.3_22',1.2022,'1.md.b.3','' );
*/
var i_1_md_b_3__22 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mNameMachine = new NameMachine();
        this.mRaphael = Raphael(25,200,200, 200);

        this.ns = new NameSampler();
        this.mType = '1.md.b.3_22';

        this.hour = "10";
        this.minute = "30";

        this.setQuestion('' + 'What time is it?');
        this.setAnswer('' + this.hour + ':' + this.minute,0);
},
createQuestionShapes: function()
{
        this.mAnalogClock = new AnalogClock (this,100,20,20,APPLICATION.mGame,this.mRaphael,0,0,0,"#000000",.5,false);
        this.addQuestionShape(this.mAnalogClock);
        this.mAnalogClock.set(this.hour,this.minute);
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.md.b.3_21',1.2021,'1.md.b.3','' );
*/
var i_1_md_b_3__21 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mNameMachine = new NameMachine();
        this.mRaphael = Raphael(25,200,200, 200);

        this.ns = new NameSampler();
        this.mType = '1.md.b.3_21';

        this.hour = "3";
        this.minute = "00";

        this.setQuestion('' + 'What time is it?');
        this.setAnswer('' + this.hour + ':' + this.minute,0);
},
createQuestionShapes: function()
{
        this.mAnalogClock = new AnalogClock (this,100,20,20,APPLICATION.mGame,this.mRaphael,0,0,0,"#000000",.5,false);
        this.addQuestionShape(this.mAnalogClock);
        this.mAnalogClock.set(this.hour,this.minute);
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.md.b.3_20',1.2020,'1.md.b.3','' );
*/
var i_1_md_b_3__20 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mNameMachine = new NameMachine();
        this.mRaphael = Raphael(25,200,200, 200);

        this.ns = new NameSampler();
        this.mType = '1.md.b.3_20';

        this.hour = "8";
        this.minute = "30";

        this.setQuestion('' + 'What time is it?');
        this.setAnswer('' + this.hour + ':' + this.minute,0);
},
createQuestionShapes: function()
{
        this.mAnalogClock = new AnalogClock (this,100,20,20,APPLICATION.mGame,this.mRaphael,0,0,0,"#000000",.5,false);
        this.addQuestionShape(this.mAnalogClock);
        this.mAnalogClock.set(this.hour,this.minute);
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.md.b.3_19',1.2019,'1.md.b.3','' );
*/
var i_1_md_b_3__19 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mNameMachine = new NameMachine();
        this.mRaphael = Raphael(25,200,200, 200);

        this.ns = new NameSampler();
        this.mType = '1.md.b.3_19';

        this.hour = "1";
        this.minute = "00";

        this.setQuestion('' + 'What time is it?');
        this.setAnswer('' + this.hour + ':' + this.minute,0);
},
createQuestionShapes: function()
{
        this.mAnalogClock = new AnalogClock (this,100,20,20,APPLICATION.mGame,this.mRaphael,0,0,0,"#000000",.5,false);
        this.addQuestionShape(this.mAnalogClock);
        this.mAnalogClock.set(this.hour,this.minute);
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.md.b.3_18',1.2018,'1.md.b.3','' );
*/
var i_1_md_b_3__18 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mNameMachine = new NameMachine();
        this.mRaphael = Raphael(25,200,200, 200);

        this.ns = new NameSampler();
        this.mType = '1.md.b.3_18';

        this.hour = "11";
        this.minute = "30";

        this.setQuestion('' + 'What time is it?');
        this.setAnswer('' + this.hour + ':' + this.minute,0);
},
createQuestionShapes: function()
{
        this.mAnalogClock = new AnalogClock (this,100,20,20,APPLICATION.mGame,this.mRaphael,0,0,0,"#000000",.5,false);
        this.addQuestionShape(this.mAnalogClock);
        this.mAnalogClock.set(this.hour,this.minute);
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.md.b.3_17',1.2017,'1.md.b.3','' );
*/
var i_1_md_b_3__17 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mNameMachine = new NameMachine();
        this.mRaphael = Raphael(25,200,200, 200);

        this.ns = new NameSampler();
        this.mType = '1.md.b.3_17';

        this.hour = "4";
        this.minute = "00";

        this.setQuestion('' + 'What time is it?');
        this.setAnswer('' + this.hour + ':' + this.minute,0);
},
createQuestionShapes: function()
{
        this.mAnalogClock = new AnalogClock (this,100,20,20,APPLICATION.mGame,this.mRaphael,0,0,0,"#000000",.5,false);
        this.addQuestionShape(this.mAnalogClock);
        this.mAnalogClock.set(this.hour,this.minute);
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.md.b.3_16',1.2016,'1.md.b.3','' );
*/
var i_1_md_b_3__16 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mNameMachine = new NameMachine();
        this.mRaphael = Raphael(25,200,200, 200);

        this.ns = new NameSampler();
        this.mType = '1.md.b.3_16';

        this.hour = "7";
        this.minute = "30";

        this.setQuestion('' + 'What time is it?');
        this.setAnswer('' + this.hour + ':' + this.minute,0);
},
createQuestionShapes: function()
{
        this.mAnalogClock = new AnalogClock (this,100,20,20,APPLICATION.mGame,this.mRaphael,0,0,0,"#000000",.5,false);
        this.addQuestionShape(this.mAnalogClock);
        this.mAnalogClock.set(this.hour,this.minute);
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.md.b.3_15',1.2015,'1.md.b.3','' );
*/
var i_1_md_b_3__15 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mNameMachine = new NameMachine();
        this.mRaphael = Raphael(25,200,200, 200);

        this.ns = new NameSampler();
        this.mType = '1.md.b.3_15';

        this.hour = "12";
        this.minute = "00";

        this.setQuestion('' + 'What time is it?');
        this.setAnswer('' + this.hour + ':' + this.minute,0);
},
createQuestionShapes: function()
{
        this.mAnalogClock = new AnalogClock (this,100,20,20,APPLICATION.mGame,this.mRaphael,0,0,0,"#000000",.5,false);
        this.addQuestionShape(this.mAnalogClock);
        this.mAnalogClock.set(this.hour,this.minute);
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.md.b.3_14',1.2014,'1.md.b.3','' );
*/
var i_1_md_b_3__14 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mNameMachine = new NameMachine();
        this.mRaphael = Raphael(25,200,200, 200);

        this.ns = new NameSampler();
        this.mType = '1.md.b.3_14';

        this.hour = "12";
        this.minute = "30";

        this.setQuestion('' + 'What time is it?');
        this.setAnswer('' + this.hour + ':' + this.minute,0);
},
createQuestionShapes: function()
{
        this.mAnalogClock = new AnalogClock (this,100,20,20,APPLICATION.mGame,this.mRaphael,0,0,0,"#000000",.5,false);
        this.addQuestionShape(this.mAnalogClock);
        this.mAnalogClock.set(this.hour,this.minute);
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.md.b.3_13',1.2013,'1.md.b.3','' );
*/
var i_1_md_b_3__13 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mNameMachine = new NameMachine();
        this.mRaphael = Raphael(25,200,200, 200);

        this.ns = new NameSampler();
        this.mType = '1.md.b.3_13';

        this.hour = "5";
        this.minute = "00";

        this.setQuestion('' + 'What time is it?');
        this.setAnswer('' + this.hour + ':' + this.minute,0);
},
createQuestionShapes: function()
{
        this.mAnalogClock = new AnalogClock (this,100,20,20,APPLICATION.mGame,this.mRaphael,0,0,0,"#000000",.5,false);
        this.addQuestionShape(this.mAnalogClock);
        this.mAnalogClock.set(this.hour,this.minute);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.md.b.3_12',1.2012,'1.md.b.3','' );
*/
var i_1_md_b_3__12 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mNameMachine = new NameMachine();
        this.mRaphael = Raphael(25,200,200, 200);

        this.ns = new NameSampler();
        this.mType = '1.md.b.3_12';

        this.hour = "6";
        this.minute = "30";

        this.setQuestion('' + 'What time is it?');
        this.setAnswer('' + this.hour + ':' + this.minute,0);
},
createQuestionShapes: function()
{
        this.mAnalogClock = new AnalogClock (this,100,20,20,APPLICATION.mGame,this.mRaphael,0,0,0,"#000000",.5,false);
        this.addQuestionShape(this.mAnalogClock);
        this.mAnalogClock.set(this.hour,this.minute);
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.md.b.3_11',1.2011,'1.md.b.3','' );
*/
var i_1_md_b_3__11 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mNameMachine = new NameMachine();
        this.mRaphael = Raphael(25,200,200, 200);

        this.ns = new NameSampler();
        this.mType = '1.md.b.3_11';

        this.hour = "11";
        this.minute = "00";

        this.setQuestion('' + 'What time is it?');
        this.setAnswer('' + this.hour + ':' + this.minute,0);
},
createQuestionShapes: function()
{
        this.mAnalogClock = new AnalogClock (this,100,20,20,APPLICATION.mGame,this.mRaphael,0,0,0,"#000000",.5,false);
        this.addQuestionShape(this.mAnalogClock);
        this.mAnalogClock.set(this.hour,this.minute);
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.md.b.3_10',1.2010,'1.md.b.3','' );
*/
var i_1_md_b_3__10 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mNameMachine = new NameMachine();
        this.mRaphael = Raphael(25,200,200, 200);

        this.ns = new NameSampler();
        this.mType = '1.md.b.3_10';

        this.hour = "1";
        this.minute = "30";

        this.setQuestion('' + 'What time is it?');
        this.setAnswer('' + this.hour + ':' + this.minute,0);
},
createQuestionShapes: function()
{
        this.mAnalogClock = new AnalogClock (this,100,20,20,APPLICATION.mGame,this.mRaphael,0,0,0,"#000000",.5,false);
        this.addQuestionShape(this.mAnalogClock);
        this.mAnalogClock.set(this.hour,this.minute);
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.md.b.3_9',1.2009,'1.md.b.3','' );
*/
var i_1_md_b_3__9 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mNameMachine = new NameMachine();
        this.mRaphael = Raphael(25,200,200, 200);

        this.ns = new NameSampler();
        this.mType = '1.md.b.3_9';

        this.hour = "6";
        this.minute = "00";

        this.setQuestion('' + 'What time is it?');
        this.setAnswer('' + this.hour + ':' + this.minute,0);
},
createQuestionShapes: function()
{
        this.mAnalogClock = new AnalogClock (this,100,20,20,APPLICATION.mGame,this.mRaphael,0,0,0,"#000000",.5,false);
        this.addQuestionShape(this.mAnalogClock);
        this.mAnalogClock.set(this.hour,this.minute);
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.md.b.3_8',1.2008,'1.md.b.3','' );
*/
var i_1_md_b_3__8 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mNameMachine = new NameMachine();
        this.mRaphael = Raphael(25,200,200, 200);

        this.ns = new NameSampler();
        this.mType = '1.md.b.3_8';

        this.hour = "5";
        this.minute = "30";

        this.setQuestion('' + 'What time is it?');
        this.setAnswer('' + this.hour + ':' + this.minute,0);
},
createQuestionShapes: function()
{
        this.mAnalogClock = new AnalogClock (this,100,20,20,APPLICATION.mGame,this.mRaphael,0,0,0,"#000000",.5,false);
        this.addQuestionShape(this.mAnalogClock);
        this.mAnalogClock.set(this.hour,this.minute);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.md.b.3_7',1.2007,'1.md.b.3','' );
*/
var i_1_md_b_3__7 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mNameMachine = new NameMachine();
        this.mRaphael = Raphael(25,200,200, 200);

        this.ns = new NameSampler();
        this.mType = '1.md.b.3_7';

        this.hour = "10";
        this.minute = "00";

        this.setQuestion('' + 'What time is it?');
        this.setAnswer('' + this.hour + ':' + this.minute,0);
},
createQuestionShapes: function()
{
        this.mAnalogClock = new AnalogClock (this,100,20,20,APPLICATION.mGame,this.mRaphael,0,0,0,"#000000",.5,false);
        this.addQuestionShape(this.mAnalogClock);
        this.mAnalogClock.set(this.hour,this.minute);
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.md.b.3_6',1.2006,'1.md.b.3','' );
*/
var i_1_md_b_3__6 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mNameMachine = new NameMachine();
        this.mRaphael = Raphael(25,200,200, 200);

        this.ns = new NameSampler();
        this.mType = '1.md.b.3_6';

        this.hour = "2";
        this.minute = "30";

        this.setQuestion('' + 'What time is it?');
        this.setAnswer('' + this.hour + ':' + this.minute,0);
},
createQuestionShapes: function()
{
        this.mAnalogClock = new AnalogClock (this,100,20,20,APPLICATION.mGame,this.mRaphael,0,0,0,"#000000",.5,false);
        this.addQuestionShape(this.mAnalogClock);
        this.mAnalogClock.set(this.hour,this.minute);
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.md.b.3_5',1.2005,'1.md.b.3','' );
*/
var i_1_md_b_3__5 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mNameMachine = new NameMachine();
        this.mRaphael = Raphael(25,200,200, 200);

        this.ns = new NameSampler();
        this.mType = '1.md.b.3_5';

        this.hour = "7";
        this.minute = "00";

        this.setQuestion('' + 'What time is it?');
        this.setAnswer('' + this.hour + ':' + this.minute,0);
},
createQuestionShapes: function()
{
        this.mAnalogClock = new AnalogClock (this,100,20,20,APPLICATION.mGame,this.mRaphael,0,0,0,"#000000",.5,false);
        this.addQuestionShape(this.mAnalogClock);
        this.mAnalogClock.set(this.hour,this.minute);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.md.b.3_4',1.2004,'1.md.b.3','' );
*/
var i_1_md_b_3__4 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mNameMachine = new NameMachine();
  	this.mRaphael = Raphael(25,200,200, 200);

        this.ns = new NameSampler();
        this.mType = '1.md.b.3_4';
                
	this.hour = "4";
	this.minute = "30";

        this.setQuestion('' + 'What time is it?');
        this.setAnswer('' + this.hour + ':' + this.minute,0);
},
createQuestionShapes: function()
{
	this.mAnalogClock = new AnalogClock (this,100,20,20,APPLICATION.mGame,this.mRaphael,0,0,0,"#000000",.5,false);
        this.addQuestionShape(this.mAnalogClock);
	this.mAnalogClock.set(this.hour,this.minute);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.md.b.3_3',1.2003,'1.md.b.3','' );
*/
var i_1_md_b_3__3 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mNameMachine = new NameMachine();
  	this.mRaphael = Raphael(25,200,200, 200);

        this.ns = new NameSampler();
        this.mType = '1.md.b.3_3';
                
	this.hour = "9";
	this.minute = "00";

        this.setQuestion('' + 'What time is it?');
        this.setAnswer('' + this.hour + ':' + this.minute,0);
},
createQuestionShapes: function()
{
	this.mAnalogClock = new AnalogClock (this,100,20,20,APPLICATION.mGame,this.mRaphael,0,0,0,"#000000",.5,false);
        this.addQuestionShape(this.mAnalogClock);
	this.mAnalogClock.set(this.hour,this.minute);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.md.b.3_2',1.2002,'1.md.b.3','' );
*/
var i_1_md_b_3__2 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mNameMachine = new NameMachine();
  	this.mRaphael = Raphael(25,200,200, 200);

        this.ns = new NameSampler();
        this.mType = '1.md.b.3_2';
                
	this.hour = "3";
	this.minute = "30";

        this.setQuestion('' + 'What time is it?');
        this.setAnswer('' + this.hour + ':' + this.minute,0);
},
createQuestionShapes: function()
{
	this.mAnalogClock = new AnalogClock (this,100,20,20,APPLICATION.mGame,this.mRaphael,0,0,0,"#000000",.5,false);
        this.addQuestionShape(this.mAnalogClock);
	this.mAnalogClock.set(this.hour,this.minute);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.md.b.3_1',1.2001,'1.md.b.3','' );
*/
var i_1_md_b_3__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mNameMachine = new NameMachine();
  	this.mRaphael = Raphael(25,200,200, 200);

        this.ns = new NameSampler();
        this.mType = '1.md.b.3_1';
                
	this.hour = "8";
	this.minute = "00";

        this.setQuestion('' + 'What time is it?');
        this.setAnswer('' + this.hour + ':' + this.minute,0);
},
createQuestionShapes: function()
{
	this.mAnalogClock = new AnalogClock (this,100,20,20,APPLICATION.mGame,this.mRaphael,0,0,0,"#000000",.5,false);
        this.addQuestionShape(this.mAnalogClock);
	this.mAnalogClock.set(this.hour,this.minute);
}
});
