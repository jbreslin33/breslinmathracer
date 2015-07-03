
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
        		this.setQuestion('' + a + '+' + b + ' = ');
		}
		else
		{
   			a = Math.floor(Math.random()*6);
   			b = Math.floor(Math.random()*6);
			c = parseInt(a - b);
        		this.setQuestion('' + a + '-' + b + ' = ');
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
                        this.setQuestion('' + a + '+' + b + ' = ');
                }
                else
                {
                        a = Math.floor(Math.random()*6);
                        //b = Math.floor(Math.random()*6);
                        c = parseInt(a - b);
                        this.setQuestion('' + a + '-' + b + ' = ');
                }
        }
        this.setAnswer('' + c,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_42',0.1542,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__42 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_42';
        this.mThresholdTime = 10000;

        this.setQuestion('5-5=');
        this.setAnswer('' + '0',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_41',0.1541,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__41 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_41';
        this.mThresholdTime = 10000;

        this.setQuestion('5-4=');
        this.setAnswer('' + '1',0);
}
});



/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_40',0.1540,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__40 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_40';
        this.mThresholdTime = 10000;

        this.setQuestion('4-4=');
        this.setAnswer('' + '0',0);
}
});



/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_39',0.1539,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__39 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_39';
        this.mThresholdTime = 10000;

        this.setQuestion('5-3=');
        this.setAnswer('' + '2',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_38',0.1538,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__38 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_38';
        this.mThresholdTime = 10000;

        this.setQuestion('4-3=');
        this.setAnswer('' + '1',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_37',0.1537,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__37 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_37';
        this.mThresholdTime = 10000;

        this.setQuestion('3-3=');
        this.setAnswer('' + '0',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_36',0.1536,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__36 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_36';
        this.mThresholdTime = 10000;

        this.setQuestion('5-2=');
        this.setAnswer('' + '3',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_35',0.1535,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__35 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_35';
        this.mThresholdTime = 10000;

        this.setQuestion('4-2=');
        this.setAnswer('' + '2',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_34',0.1534,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__34 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_34';
        this.mThresholdTime = 10000;

        this.setQuestion('3-2=');
        this.setAnswer('' + '1',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_33',0.1533,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__33 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_33';
        this.mThresholdTime = 10000;

        this.setQuestion('2-2=');
        this.setAnswer('' + '0',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_32',0.1532,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__32 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_32';
        this.mThresholdTime = 10000;

        this.setQuestion('5-1=');
        this.setAnswer('' + '4',0);
}
});



/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_31',0.1531,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__31 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_31';
        this.mThresholdTime = 10000;

        this.setQuestion('4-1=');
        this.setAnswer('' + '3',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_30',0.1530,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__30 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_30';
        this.mThresholdTime = 10000;

        this.setQuestion('3-1=');
        this.setAnswer('' + '2',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_29',0.1529,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__29 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_29';
        this.mThresholdTime = 10000;

        this.setQuestion('2-1=');
        this.setAnswer('' + '1',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_28',0.1528,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__28 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_28';
        this.mThresholdTime = 10000;

        this.setQuestion('1-1=');
        this.setAnswer('' + '0',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_27',0.1527,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__27 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_27';
        this.mThresholdTime = 10000;

        this.setQuestion('5-0=');
        this.setAnswer('' + '5',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_26',0.1526,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__26 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_26';
        this.mThresholdTime = 10000;

        this.setQuestion('4-0=');
        this.setAnswer('' + '4',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_25',0.1525,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__25 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_25';
        this.mThresholdTime = 10000;

        this.setQuestion('3-0=');
        this.setAnswer('' + '3',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_24',0.1524,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__24 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_24';
        this.mThresholdTime = 10000;

        this.setQuestion('2-0=');
        this.setAnswer('' + '2',0);
}
});



/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_23',0.1523,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__23 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_23';
        this.mThresholdTime = 10000;

        this.setQuestion('1-0=');
        this.setAnswer('' + '1',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_22',0.1522,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__22 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_22';
        this.mThresholdTime = 10000;

        this.setQuestion('0-0=');
        this.setAnswer('' + '0',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_21',0.1521,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__21 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_21';
        this.mThresholdTime = 10000;

        this.setQuestion('3+2=');
        this.setAnswer('' + '5',0);
}
});



/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_20',0.1520,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__20 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_20';
        this.mThresholdTime = 10000;

        this.setQuestion('2+3=');
        this.setAnswer('' + '5',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_19',0.1519,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__19 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_19';
        this.mThresholdTime = 10000;

        this.setQuestion('2+2=');
        this.setAnswer('' + '4',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_18',0.1518,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__18 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_18';
        this.mThresholdTime = 10000;

        this.setQuestion('4+1=');
        this.setAnswer('' + '5',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_17',0.1517,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__17 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_17';
        this.mThresholdTime = 10000;

        this.setQuestion('3+1=');
        this.setAnswer('' + '4',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_16',0.1516,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__16 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_16';
        this.mThresholdTime = 10000;

        this.setQuestion('2+1=');
        this.setAnswer('' + '3',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_15',0.1515,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__15 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_15';
        this.mThresholdTime = 10000;

        this.setQuestion('1+4=');
        this.setAnswer('' + '5',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_14',0.1514,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__14 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_14';
        this.mThresholdTime = 10000;

        this.setQuestion('1+3=');
        this.setAnswer('' + '4',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_13',0.1513,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__13 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_13';
        this.mThresholdTime = 10000;

        this.setQuestion('1+2=');
        this.setAnswer('' + '3',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_12',0.1512,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__12 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_12';
        this.mThresholdTime = 10000;

        this.setQuestion('1+1=');
        this.setAnswer('' + '2',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_11',0.1511,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__11 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_11';
        this.mThresholdTime = 10000;

        this.setQuestion('5+0=');
        this.setAnswer('' + '5',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_10',0.1510,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__10 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_10';
        this.mThresholdTime = 10000;

        this.setQuestion('4+0=');
        this.setAnswer('' + '4',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_9',0.1509,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__9 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_9';
        this.mThresholdTime = 10000;

        this.setQuestion('3+0=');
        this.setAnswer('' + '3',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_8',0.1508,'k.oa.a.5','Add Subtract within 5.');
*/
var i_k_oa_a_5__8 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.oa.a.5_8';
        this.mThresholdTime = 10000;

        this.setQuestion('2+0=');
        this.setAnswer('' + '2',0);
}
});

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

        this.setQuestion('1+0=');
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

        this.setQuestion('0+5=');
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

        this.setQuestion('0+4=');
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

        this.setQuestion('0+3=');
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

        this.setQuestion('0+2=');
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

	this.setQuestion('0+1=');
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

        this.setQuestion('0+0=');
        this.setAnswer('' + '0',0);
}
});



