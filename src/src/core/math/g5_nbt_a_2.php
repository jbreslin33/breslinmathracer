
function toFixed(x) {
  if (Math.abs(x) < 1.0) {
    var e = parseInt(x.toString().split('e-')[1]);
    if (e) {
        x *= Math.pow(10,e-1);
        x = '0.' + (new Array(e)).join('0') + x.toString().substring(2);
    }
  } else {
    var e = parseInt(x.toString().split('+')[1]);
    if (e > 20) {
        e -= 20;
        x /= Math.pow(10,e);
        x += (new Array(e+1)).join('0');
    }
  }
  return x;
}

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_38',5.0538,'5.nbt.a.2','1000-.001');
*/
var i_5_nbt_a_2__38 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,650,50,345,95, 50,50,712,100);

        this.mType = '5.nbt.a.2_38';

        this.number = Math.floor(Math.random()*9)+1;

        this.mBase = 10;
        this.mExponent = 6;

        this.setQuestion('What power of 10 will make this true: ' + '' + this.number + '000 &divide ' + '__' + ' = 0.00' + this.number + ' Sample Answer: 10^2');

        var answer = '' + this.mBase + '^' + this.mExponent;

        this.setAnswer('' + answer,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_37',5.0537,'5.nbt.a.2','1000-.01');
*/
var i_5_nbt_a_2__37 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,650,50,345,95, 50,50,712,100);

        this.mType = '5.nbt.a.2_37';

        this.number = Math.floor(Math.random()*9)+1;

        this.mBase = 10;
        this.mExponent = 5;

        this.setQuestion('What power of 10 will make this true: ' + '' + this.number + '000 &divide ' + '__' + ' = 0.0' + this.number + ' Sample Answer: 10^2');

        var answer = '' + this.mBase + '^' + this.mExponent;

        this.setAnswer('' + answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_36',5.0536,'5.nbt.a.2','1000-.1');
*/
var i_5_nbt_a_2__36 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,650,50,345,95, 50,50,712,100);

        this.mType = '5.nbt.a.2_36';

        this.number = Math.floor(Math.random()*9)+1;

        this.mBase = 10;
        this.mExponent = 4;

        this.setQuestion('What power of 10 will make this true: ' + '' + this.number + '000 &divide ' + '__' + ' = 0.' + this.number + ' Sample Answer: 10^2');

        var answer = '' + this.mBase + '^' + this.mExponent;

        this.setAnswer('' + answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_35',5.0535,'5.nbt.a.2','1000-1');
*/
var i_5_nbt_a_2__35 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,650,50,345,95, 50,50,712,100);

        this.mType = '5.nbt.a.2_35';

        this.number = Math.floor(Math.random()*9)+1;

        this.mBase = 10;
        this.mExponent = 3;

        this.setQuestion('What power of 10 will make this true: ' + '' + this.number + '000 &divide ' + '__' + ' = ' + this.number + ' Sample Answer: 10^4');

        var answer = '' + this.mBase + '^' + this.mExponent;

        this.setAnswer('' + answer,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_34',5.0534,'5.nbt.a.2','1000-10');
*/
var i_5_nbt_a_2__34 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,650,50,345,95, 50,50,712,100);

        this.mType = '5.nbt.a.2_34';

        this.number = Math.floor(Math.random()*9)+1;

        this.mBase = 10;
        this.mExponent = 2;

        this.setQuestion('What power of 10 will make this true: ' + '' + this.number + '000 &divide ' + '__' + ' = ' + this.number + '0 Sample Answer: 10^4');

        var answer = '' + this.mBase + '^' + this.mExponent;

        this.setAnswer('' + answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_33',5.0533,'5.nbt.a.2','1000-100');
*/
var i_5_nbt_a_2__33 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,650,50,345,95, 50,50,712,100);

        this.mType = '5.nbt.a.2_33';

        this.number = Math.floor(Math.random()*9)+1;

        this.mBase = 10;
        this.mExponent = 1;

        this.setQuestion('What power of 10 will make this true: ' + '' + this.number + '000 &divide ' + '__' + ' = ' + this.number + '00 Sample Answer: 10^4');

        var answer = '' + this.mBase + '^' + this.mExponent;

        this.setAnswer('' + answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_32',5.0532,'5.nbt.a.2','100-1000');
*/
var i_5_nbt_a_2__32 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,650,50,345,95, 50,50,712,100);

        this.mType = '5.nbt.a.2_32';

        this.number = Math.floor(Math.random()*9)+1;

        this.mBase = 10;
        this.mExponent = 1;

        this.setQuestion('What power of 10 will make this true: ' + '' + this.number + '00 &times ' + '__' + ' = ' + this.number + '000 Sample Answer: 10^4');

        var answer = '' + this.mBase + '^' + this.mExponent;

        this.setAnswer('' + answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_31',5.0531,'5.nbt.a.2','10-1000');
*/
var i_5_nbt_a_2__31 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,650,50,345,95, 50,50,712,100);

        this.mType = '5.nbt.a.2_31';

        this.number = Math.floor(Math.random()*9)+1;

        this.mBase = 10;
        this.mExponent = 2;

        this.setQuestion('What power of 10 will make this true: ' + '' + this.number + '0 &times ' + '__' + ' = ' + this.number + '000 Sample Answer: 10^4');

        var answer = '' + this.mBase + '^' + this.mExponent;

        this.setAnswer('' + answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_30',5.0530,'5.nbt.a.2','10-100');
*/
var i_5_nbt_a_2__30 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,650,50,345,95, 50,50,712,100);

        this.mType = '5.nbt.a.2_30';

        this.number = Math.floor(Math.random()*9)+1;

        this.mBase = 10;
        this.mExponent = 1;

        this.setQuestion('What power of 10 will make this true: ' + '' + this.number + '0 &times ' + '__' + ' = ' + this.number + '00 Sample Answer: 10^4');

        var answer = '' + this.mBase + '^' + this.mExponent;

        this.setAnswer('' + answer,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_29',5.0529,'5.nbt.a.2','1-1000');
*/
var i_5_nbt_a_2__29 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,320,95, 50,50,712,100);

        this.mType = '5.nbt.a.2_29';

        this.number = Math.floor(Math.random()*9)+1;

        this.mBase = 10;
        this.mExponent = 3;

        this.setQuestion('What power of 10 will make this true: ' + '' + this.number + ' &times ' + '__' + ' = ' + this.number + '000 Sample Answer: 10^4');

        var answer = '' + this.mBase + '^' + this.mExponent;

        this.setAnswer('' + answer,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_28',5.0528,'5.nbt.a.2','1-100');
*/
var i_5_nbt_a_2__28 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,320,95, 50,50,712,100);

        this.mType = '5.nbt.a.2_28';

        this.number = Math.floor(Math.random()*9)+1;

        this.mBase = 10;
        this.mExponent = 2;

        this.setQuestion('What power of 10 will make this true: ' + '' + this.number + ' &times ' + '__' + ' = ' + this.number + '00 Sample Answer: 10^4');

        var answer = '' + this.mBase + '^' + this.mExponent;

        this.setAnswer('' + answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_27',5.0527,'5.nbt.a.2','1-10');
*/
var i_5_nbt_a_2__27 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,320,95, 50,50,712,100);

        this.mType = '5.nbt.a.2_27';

        this.number = Math.floor(Math.random()*9)+1;

        this.mBase = 10;
        this.mExponent = 1;

        this.setQuestion('What power of 10 will make this true: ' + '' + this.number + ' &times ' + '__' + ' = ' + this.number + '0 Sample Answer: 10^2');

        var answer = '' + this.mBase + '^' + this.mExponent;

        this.setAnswer('' + answer,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_26',5.0526,'5.nbt.a.2','.1-1000');
*/
var i_5_nbt_a_2__26 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,320,95, 50,50,712,100);

        this.mType = '5.nbt.a.2_26';

        this.number = Math.floor(Math.random()*9)+1;

        this.mBase = 10;
        this.mExponent = 4;

        this.setQuestion('What power of 10 will make this true: ' + '0.' + this.number + ' &times ' + '__' + ' = ' + this.number + '000 Sample Answer: 10^2');

        var answer = '' + this.mBase + '^' + this.mExponent;

        this.setAnswer('' + answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_25',5.0525,'5.nbt.a.2','.1-100');
*/
var i_5_nbt_a_2__25 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,320,95, 50,50,712,100);

        this.mType = '5.nbt.a.2_25';

        this.number = Math.floor(Math.random()*9)+1;

        this.mBase = 10;
        this.mExponent = 3;

        this.setQuestion('What power of 10 will make this true: ' + '0.' + this.number + ' &times ' + '__' + ' = ' + this.number + '00 Sample Answer: 10^2');

        var answer = '' + this.mBase + '^' + this.mExponent;

        this.setAnswer('' + answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_24',5.0524,'5.nbt.a.2','.1-10');
*/
var i_5_nbt_a_2__24 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,320,95, 50,50,712,100);

        this.mType = '5.nbt.a.2_24';

        this.number = Math.floor(Math.random()*9)+1;

        this.mBase = 10;
        this.mExponent = 2;

        this.setQuestion('What power of 10 will make this true: ' + '0.' + this.number + ' &times ' + '__' + ' = ' + this.number + '0 Sample Answer: 10^2');

        var answer = '' + this.mBase + '^' + this.mExponent;

        this.setAnswer('' + answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_23',5.0523,'5.nbt.a.2','.1-1');
*/
var i_5_nbt_a_2__23 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,320,95, 50,50,712,100);

        this.mType = '5.nbt.a.2_23';

        this.number = Math.floor(Math.random()*9)+1;

        this.mBase = 10;
        this.mExponent = 1;

        this.setQuestion('What power of 10 will make this true: ' + '0.' + this.number + ' &times ' + '__' + ' = ' + this.number + ' Sample Answer: 10^2');

        var answer = '' + this.mBase + '^' + this.mExponent;

        this.setAnswer('' + answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_22',5.0522,'5.nbt.a.2','.01-1000');
*/
var i_5_nbt_a_2__22 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,320,95, 50,50,712,100);

        this.mType = '5.nbt.a.2_22';

        this.number = Math.floor(Math.random()*9)+1;

        this.mBase = 10;
        this.mExponent = 5;

        this.setQuestion('What power of 10 will make this true: ' + '0.0' + this.number + ' &times ' + '__' + ' = ' + this.number + '000 Sample Answer: 10^2');

        var answer = '' + this.mBase + '^' + this.mExponent;

        this.setAnswer('' + answer,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_21',5.0521,'5.nbt.a.2','.01-100');
*/
var i_5_nbt_a_2__21 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,320,95, 50,50,712,100);

        this.mType = '5.nbt.a.2_21';

        this.number = Math.floor(Math.random()*9)+1;

        this.mBase = 10;
        this.mExponent = 4;

        this.setQuestion('What power of 10 will make this true: ' + '0.0' + this.number + ' &times ' + '__' + ' = ' + this.number + '00 Sample Answer: 10^2');

        var answer = '' + this.mBase + '^' + this.mExponent;

        this.setAnswer('' + answer,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_20',5.0520,'5.nbt.a.2','.01-10');
*/
var i_5_nbt_a_2__20 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,320,95, 50,50,712,100);

        this.mType = '5.nbt.a.2_20';

        this.number = Math.floor(Math.random()*9)+1;

        this.mBase = 10;
        this.mExponent = 3;

        this.setQuestion('What power of 10 will make this true: ' + '0.0' + this.number + ' &times ' + '__' + ' = ' + this.number + '0 Sample Answer: 10^4');

        var answer = '' + this.mBase + '^' + this.mExponent;

        this.setAnswer('' + answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_19',5.0519,'5.nbt.a.2','.01-1');
*/
var i_5_nbt_a_2__19 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,320,95, 50,50,712,100);

        this.mType = '5.nbt.a.2_19';

        this.number = Math.floor(Math.random()*9)+1;

        this.mBase = 10;
        this.mExponent = 2;

        this.setQuestion('What power of 10 will make this true: ' + '0.0' + this.number + ' &times ' + '__' + ' = ' + this.number + ' Sample Answer: 10^4');

        var answer = '' + this.mBase + '^' + this.mExponent;

        this.setAnswer('' + answer,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_18',5.0518,'5.nbt.a.2','.01-.1');
*/
var i_5_nbt_a_2__18 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,320,95, 50,50,712,100);

        this.mType = '5.nbt.a.2_18';

        this.number = Math.floor(Math.random()*9)+1;

        this.mBase = 10;
        this.mExponent = 1;

        this.setQuestion('What power of 10 will make this true: ' + '0.0' + this.number + ' &times ' + '__' + ' = 0.' + this.number + ' Sample Answer: 10^4');

        var answer = '' + this.mBase + '^' + this.mExponent;

        this.setAnswer('' + answer,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_17',5.0517,'5.nbt.a.2','.001-1000');
*/
var i_5_nbt_a_2__17 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,320,95, 50,50,712,100);

        this.mType = '5.nbt.a.2_17';

        this.number = Math.floor(Math.random()*9)+1;

        this.mBase = 10;
        this.mExponent = 6;

        this.setQuestion('What power of 10 will make this true: ' + '0.00' + this.number + ' &times ' + '__' + ' = ' + this.number + '000 Sample Answer: 10^2');

        var answer = '' + this.mBase + '^' + this.mExponent;

        this.setAnswer('' + answer,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_16',5.0516,'5.nbt.a.2','.001-100');
*/
var i_5_nbt_a_2__16 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,320,95, 50,50,712,100);

        this.mType = '5.nbt.a.2_16';

        this.number = Math.floor(Math.random()*9)+1;

        this.mBase = 10;
        this.mExponent = 5;

        this.setQuestion('What power of 10 will make this true: ' + '0.00' + this.number + ' &times ' + '__' + ' = ' + this.number + '00 Sample Answer: 10^2');

        var answer = '' + this.mBase + '^' + this.mExponent;

        this.setAnswer('' + answer,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_15',5.0515,'5.nbt.a.2','.001-10');
*/
var i_5_nbt_a_2__15 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,320,95, 50,50,712,100);

        this.mType = '5.nbt.a.2_15';

        this.number = Math.floor(Math.random()*9)+1;

        this.mBase = 10;
        this.mExponent = 4;

        this.setQuestion('What power of 10 will make this true: ' + '0.00' + this.number + ' &times ' + '__' + ' = ' + this.number + '0 Sample Answer: 10^2');

        var answer = '' + this.mBase + '^' + this.mExponent;

        this.setAnswer('' + answer,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_14',5.0514,'5.nbt.a.2','.001-1');
*/
var i_5_nbt_a_2__14 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,320,95, 50,50,712,100);

        this.mType = '5.nbt.a.2_14';

        this.number = Math.floor(Math.random()*9)+1;

        this.mBase = 10;
        this.mExponent = 3;

        this.setQuestion('What power of 10 will make this true: ' + '0.00' + this.number + ' &times ' + '__' + ' = ' + this.number + ' Sample Answer: 10^4');

        var answer = '' + this.mBase + '^' + this.mExponent;

        this.setAnswer('' + answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_13',5.0513,'5.nbt.a.2','.001-.1');
*/
var i_5_nbt_a_2__13 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,320,95, 50,50,712,100);

        this.mType = '5.nbt.a.2_13';

        this.number = Math.floor(Math.random()*9)+1;

        this.mBase = 10;
        this.mExponent = 2;

        this.setQuestion('What power of 10 will make this true: ' + '0.00' + this.number + ' &times ' + '__' + ' = 0.' + this.number + ' Sample Answer: 10^4');

	var answer = '' + this.mBase + '^' + this.mExponent; 

        this.setAnswer('' + answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_12',5.0512,'5.nbt.a.2','.001-.01');
*/
var i_5_nbt_a_2__12 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,320,95, 50,50,712,100);

        this.mType = '5.nbt.a.2_12';

        this.number = Math.floor(Math.random()*9)+1;

        this.mBase = 10;
        this.mExponent = 1;

        this.setQuestion('What power of 10 will make this true: ' + '0.00' + this.number + ' &times ' + '__' + ' = 0.0' + this.number + ' Sample Answer: 10^4');

	var answer = '' + this.mBase + '^' + this.mExponent; 

        this.setAnswer('' + answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_11',5.0511,'5.nbt.a.2','');
*/
var i_5_nbt_a_2__11 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95, 300,50,525,100);

        this.mType = '5.nbt.a.2_11';

        this.ones = Math.floor(Math.random()*9)+1;

        this.mBase = 10;
        this.mExponent = Math.floor(Math.random()*9)+1;

        this.setQuestion('Find the qoutient: ' + this.ones + ' &divide ' + this.mBase + '<sup>' + this.mExponent + '</sup>');

        var multiplier = 1;
        for (i=0; i < parseInt(this.mExponent); i++)
        {
                multiplier = multiplier * 10;
        }

        var number = parseInt(this.ones);
        var answer = number / multiplier;
	answer = parseFloat(answer);
	answer = toFixed(answer);

        this.setAnswer('' + answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_10',5.0510,'5.nbt.a.2','');
*/
var i_5_nbt_a_2__10 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95, 300,50,525,100);

        this.mType = '5.nbt.a.2_10';

        this.ones = Math.floor(Math.random()*9)+1;
        this.tenths = Math.floor(Math.random()*9)+1;

        this.mBase = 10;
        this.mExponent = Math.floor(Math.random()*9)+1;

        this.setQuestion('Find the product: ' + this.ones + ' x ' + this.mBase + '<sup>' + this.mExponent + '</sup>');

	var multiplier = 1; 
        for (i=0; i < parseInt(this.mExponent); i++)
	{
		multiplier = multiplier * 10;	
	}

	var number = parseFloat(this.ones);
	var answer = multiplier * number;	 

        this.setAnswer('' + answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_9',5.0509,'5.nbt.a.2','');
*/
var i_5_nbt_a_2__9 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95, 300,50,525,100);

        this.mType = '5.nbt.a.2_9';

        this.ones = Math.floor(Math.random()*9)+1;
        this.tenths = Math.floor(Math.random()*9)+1;

        this.mBase = 10;
        this.mExponent = Math.floor(Math.random()*9)+1;

        this.setQuestion('Find the qoutient: ' + this.ones + '.' + this.tenths + ' &divide ' + this.mBase + '<sup>' + this.mExponent + '</sup>');

        var multiplier = 1;
        for (i=0; i < parseInt(this.mExponent); i++)
        {
                multiplier = multiplier * 10;
        }

        var number = parseFloat(this.ones + '.' + this.tenths);
        var answer = number / multiplier;
	answer = toFixed(answer);

        this.setAnswer('' + answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_8',5.0508,'5.nbt.a.2','');
*/
var i_5_nbt_a_2__8 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95, 300,50,525,100);

        this.mType = '5.nbt.a.2_8';

        this.ones = Math.floor(Math.random()*9)+1;
        this.tenths = Math.floor(Math.random()*9)+1;

        this.mBase = 10;
        this.mExponent = Math.floor(Math.random()*9)+1;

        this.setQuestion('Find the product: ' + this.ones + '.' + this.tenths + ' x ' + this.mBase + '<sup>' + this.mExponent + '</sup>');

	var multiplier = 1; 
        for (i=0; i < parseInt(this.mExponent); i++)
	{
		multiplier = multiplier * 10;	
	}

	var number = parseFloat(this.ones + '.' + this.tenths);
	var answer = multiplier * number;	 

        this.setAnswer('' + answer,0);
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_7',5.0507,'5.nbt.a.2','');
*/
var i_5_nbt_a_2__7 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95, 300,50,525,100);

        this.mType = '5.nbt.a.2_7';

        this.ones = Math.floor(Math.random()*9)+1;
        this.tenths = Math.floor(Math.random()*9)+1;
        this.hundreths = Math.floor(Math.random()*9)+1;
        this.thousandths = Math.floor(Math.random()*9)+1;

        this.mBase = 10;
        this.mExponent = Math.floor(Math.random()*9)+1;

        this.setQuestion('Find the qoutient: ' + this.ones + '.' + this.tenths + this.hundreths + this.thousandths + ' &divide ' + this.mBase + '<sup>' + this.mExponent + '</sup>');

        var multiplier = 1;
        for (i=0; i < parseInt(this.mExponent); i++)
        {
                multiplier = multiplier * 10;
        }

        var number = parseFloat(this.ones + '.' + this.tenths + this.hundreths + this.thousandths);
        var answer = number / multiplier;
	answer = toFixed(answer);

        this.setAnswer('' + answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_6',5.0506,'5.nbt.a.2','');
*/
var i_5_nbt_a_2__6 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95, 300,50,525,100);

        this.mType = '5.nbt.a.2_6';

        this.ones = Math.floor(Math.random()*9)+1;
        this.tenths = Math.floor(Math.random()*9)+1;
        this.hundreths = Math.floor(Math.random()*9)+1;
        this.thousandths = Math.floor(Math.random()*9)+1;

        this.mBase = 10;
        this.mExponent = Math.floor(Math.random()*9)+1;

        this.setQuestion('Find the product: ' + this.ones + '.' + this.tenths + this.hundreths + this.thousandths + ' x ' + this.mBase + '<sup>' + this.mExponent + '</sup>');

	var multiplier = 1; 
        for (i=0; i < parseInt(this.mExponent); i++)
	{
		multiplier = multiplier * 10;	
	}

	var number = parseFloat(this.ones + '.' + this.tenths + this.hundreths + this.thousandths);
	var answer = multiplier * number;	 

        this.setAnswer('' + answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_5',5.0505,'5.nbt.a.2','');
*/
var i_5_nbt_a_2__5 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95, 300,50,525,100);

        this.mType = '5.nbt.a.2_5';

        this.mBase = 10;
        this.mExponent = Math.floor(Math.random()*9)+1;

        this.setQuestion('Write the following the way you would say it words: ' + this.mBase + '<sup>' + this.mExponent + '</sup>');

	
	var power = '';

	if (this.mExponent == 0)
	{
		power = 'zero';
	}
	if (this.mExponent == 1)
	{
		power = 'first';
	}
	if (this.mExponent == 2)
	{
		power = 'second';
	}
	if (this.mExponent == 3)
	{
		power = 'third';
	}
	if (this.mExponent == 4)
	{
		power = 'fourth';
	}
	if (this.mExponent == 5)
	{
		power = 'fifth';
	}
	if (this.mExponent == 6)
	{
		power = 'sixth';
	}
	if (this.mExponent == 7)
	{
		power = 'seventh';
	}
	if (this.mExponent == 8)
	{
		power = 'eigth';
	}
	if (this.mExponent == 9)
	{
		power = 'ninth';
	}
	if (this.mExponent == 10)
	{
		power = 'tenth';
	}

        answer = 'ten to the ' + power + ' power';

        this.setAnswer('' + answer,0);
        this.setAnswer('' + answer + '.',1);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_4',5.0504,'5.nbt.a.2','');
*/
var i_5_nbt_a_2__4 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95, 300,50,525,100);

        this.mType = '5.nbt.a.2_4';

        this.mBase = 10;
        this.mExponent = Math.floor(Math.random()*9)+1;

        this.setQuestion('Find the product: ' + this.mBase + '<sup>' + this.mExponent + '</sup>');

        var answer = 1;
        for (i=0; i < parseInt(this.mExponent); i++)
        {
                answer = answer * 10;
        }

        this.setAnswer('' + answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_3',5.0503,'5.nbt.a.2','');
*/
var i_5_nbt_a_2__3 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95, 300,50,525,100);

        this.mType = '5.nbt.a.2_3';

        this.ones = Math.floor(Math.random()*9)+1;
        this.tenths = Math.floor(Math.random()*9)+1;
        this.hundreths = Math.floor(Math.random()*9)+1;

        this.mBase = 10;
        this.mExponent = Math.floor(Math.random()*9)+1;

        this.setQuestion('Find the qoutient: ' + this.ones + '.' + this.tenths + this.hundreths + ' &divide ' + this.mBase + '<sup>' + this.mExponent + '</sup>');

        var multiplier = 1;
        for (i=0; i < parseInt(this.mExponent); i++)
        {
                multiplier = multiplier * 10;
        }

        var number = parseFloat(this.ones + '.' + this.tenths + this.hundreths);
        var answer = number / multiplier;
	answer = toFixed(answer);

        this.setAnswer('' + answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_2',5.0502,'5.nbt.a.2','');
*/
var i_5_nbt_a_2__2 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95, 300,50,525,100);

        this.mType = '5.nbt.a.2_2';

        this.ones = Math.floor(Math.random()*9)+1;
        this.tenths = Math.floor(Math.random()*9)+1;
        this.hundreths = Math.floor(Math.random()*9)+1;

        this.mBase = 10;
        this.mExponent = Math.floor(Math.random()*9)+1;

        this.setQuestion('Find the product: ' + this.ones + '.' + this.tenths + this.hundreths + ' x ' + this.mBase + '<sup>' + this.mExponent + '</sup>');

	var multiplier = 1; 
        for (i=0; i < parseInt(this.mExponent); i++)
	{
		multiplier = multiplier * 10;	
	}

	var number = parseFloat(this.ones + '.' + this.tenths + this.hundreths);
	var answer = multiplier * number;	 

        this.setAnswer('' + answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_1',5.0501,'5.nbt.a.2','');
*/
var i_5_nbt_a_2__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
  	this.parent(sheet,300,50,175,95, 300,50,525,100);

        this.mType = '5.nbt.a.2_1';

	this.mBase = 10;
	this.mExponent = Math.floor(Math.random()*9)+1;

	this.setQuestion(this.mBase + '<sup>' + this.mExponent + '</sup>' + ' is a power of 10. Write an equivalent mulitiplication expression using only tens.');

	var answerOne = '10';	
	for (i=1; i < parseInt(this.mExponent); i++)
	{
		var str = 'x10'; 
		answerOne = answerOne.concat(str);
	}
        
	var answerTwo = '10';	
	for (i=1; i < parseInt(this.mExponent); i++)
	{
		var str = '*10'; 
		answerTwo = answerTwo.concat(str);
	}
        
	this.setAnswer('' + answerOne,0);
	this.setAnswer('' + answerTwo,1);
}
});
