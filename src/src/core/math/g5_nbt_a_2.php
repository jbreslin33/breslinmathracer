
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
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_13',5.0513,'5.nbt.a.2','');
*/
var i_5_nbt_a_2__13 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,320,95, 50,50,712,100);

        this.mType = '5.nbt.a.2_13';
        
	this.mBase = 10;
        this.mExponent = Math.floor(Math.random()*9)+1;

        this.place = parseInt(Math.floor(Math.random()*6));

	this.number = Math.floor(Math.random()*9)+1;
	this.a = 0; 


	if (this.place == 0)
	{
		this.a = parseInt(this.number + '000');
	}
	if (this.place == 1)
	{
		this.a = parseInt(this.number + '00');
	}
	if (this.place == 2)
	{
		this.a = parseInt(this.number + '0');
	}
	if (this.place == 3)
	{
		this.a = parseInt(this.number + '');
	}
	if (this.place == 4)
	{
		this.a = parseFloat('0.' + this.number);
	}
	if (this.place == 5)
	{
		this.a = parseFloat('0.0' + this.number);
	}
	
	this.b = this.a / Math.pow(10,this.mExponent);
	this.b = toFixed(this.b);

        this.setQuestion('What power of 10 will make this true: ' + this.a + ' &divide ' + '__' + ' = ' + this.b + ' Sample Answer: 10^4');

	var answer = '' + this.mBase + '^' + this.mExponent; 

        this.setAnswer('' + answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_12',5.0512,'5.nbt.a.2','10 factor');
*/
var i_5_nbt_a_2__12 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,320,95, 50,50,712,100);

        this.mType = '5.nbt.a.2_12';

        this.place = Math.floor(Math.random()*6);
	this.number = Math.floor(Math.random()*9)+1;
	this.a = ''; 

	if (this.place == 0)
	{
		this.a = parseInt(this.number + '000');
		this.a = parseInt(this.a);
	}
	if (this.place == 1)
	{
		this.a = parseInt(this.number + '00');
		this.a = parseInt(this.a);
	}
	if (this.place == 2)
	{
		this.a = parseInt(this.number + '0');
		this.a = parseInt(this.a);
	}
	if (this.place == 3)
	{
		this.a = parseInt(this.number + '');
		this.a = parseInt(this.a);
	}
	if (this.place == 4)
	{
		this.a = parseInt('0.' + this.number);
		this.a = parseFloat(this.a);
	}
	if (this.place == 5)
	{
		this.a = parseInt('0.0' + this.number);
		this.a = parseFloat(this.a);
	}
        
        this.mBase = 10;
        this.mExponent = Math.floor(Math.random()*9)+1;

	this.b = this.a * Math.pow(10,this.mExponent);

        this.setQuestion('What power of 10 will make this true: ' + this.a + ' &times ' + '__' + ' = ' + this.b + ' Sample Answer: 10^4');

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

        this.mBase = parseInt(10);
        this.mExponent = parseInt(Math.floor(Math.random()*9)+1);

        this.setQuestion('Find the product: ' + this.mBase + '<sup>' + this.mExponent + '</sup>');

	var answer = '';
	if (this.mExponent == 1)
	{
		answer = '10' 	
	}
	if (this.mExponent == 2)
	{
		answer = '100' 	
	}
	if (this.mExponent == 3)
	{
		answer = '1000' 	
	}
	if (this.mExponent == 4)
	{
		answer = '10000' 	
	}
	if (this.mExponent == 5)
	{
		answer = '100000' 	
	}
	if (this.mExponent == 6)
	{
		answer = '1000000' 	
	}
	if (this.mExponent == 7)
	{
		answer = '10000000' 	
	}
	if (this.mExponent == 8)
	{
		answer = '100000000' 	
	}
	if (this.mExponent == 9)
	{
		answer = '1000000000' 	
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

        this.mBase = parseInt(10);
        this.mExponent = parseInt(Math.floor(Math.random()*9)+1);

        this.setQuestion('Find the qoutient: ' + this.ones + '.' + this.tenths + this.hundreths + ' &divide ' + this.mBase + '<sup>' + this.mExponent + '</sup>');

        var number = parseFloat(this.ones + '.' + this.tenths + this.hundreths);

	var answer = '';

	if (this.mExponent == 1)
	{
		answer = '0' + '.' + this.ones + this.tenths + this.hundreths;
	}
	if (this.mExponent == 2)
	{
		answer = '0' + '.' + '0' +  this.ones + this.tenths + this.hundreths;
	}
	if (this.mExponent == 3)
	{
		answer = '0' + '.' + '00' +  this.ones + this.tenths + this.hundreths;
	}
	if (this.mExponent == 4)
	{
		answer = '0' + '.' + '000' +  this.ones + this.tenths + this.hundreths;
	}
	if (this.mExponent == 5)
	{
		answer = '0' + '.' + '0000' +  this.ones + this.tenths + this.hundreths;
	}
	if (this.mExponent == 6)
	{
		answer = '0' + '.' + '00000' +  this.ones + this.tenths + this.hundreths;
	}
	if (this.mExponent == 7)
	{
		answer = '0' + '.' + '000000' +  this.ones + this.tenths + this.hundreths;
	}
	if (this.mExponent == 8)
	{
		answer = '0' + '.' + '0000000' +  this.ones + this.tenths + this.hundreths;
	}
	if (this.mExponent == 9)
	{
		answer = '0' + '.' + '00000000' +  this.ones + this.tenths + this.hundreths;
	}

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

        this.mBase = parseInt(10);
        this.mExponent = parseInt(Math.floor(Math.random()*9)+1);

        this.setQuestion('Find the product: ' + this.ones + '.' + this.tenths + this.hundreths +  '&times' + this.mBase + '<sup>' + this.mExponent + '</sup>');

        var number = parseFloat(this.ones + '.' + this.tenths + this.hundreths);

	var answer = '';

	if (this.mExponent == 1)
	{
		answer = '' + this.ones + this.tenths + '.' + this.hundreths;
	}
	if (this.mExponent == 2)
	{
		answer = '' + this.ones + this.tenths + this.hundreths;
	}
	if (this.mExponent == 3)
	{
		answer = '' + this.ones + this.tenths + this.hundreths + '0';
	}
	if (this.mExponent == 4)
	{
		answer = '' + this.ones + this.tenths + this.hundreths + '00';
	}
	if (this.mExponent == 5)
	{
		answer = '' + this.ones + this.tenths + this.hundreths + '000';
	}
	if (this.mExponent == 6)
	{
		answer = '' + this.ones + this.tenths + this.hundreths + '0000';
	}
	if (this.mExponent == 7)
	{
		answer = '' + this.ones + this.tenths + this.hundreths + '00000';
	}
	if (this.mExponent == 8)
	{
		answer = '' + this.ones + this.tenths + this.hundreths + '000000';
	}
	if (this.mExponent == 9)
	{
		answer = '' + this.ones + this.tenths + this.hundreths + '0000000';
	}

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
