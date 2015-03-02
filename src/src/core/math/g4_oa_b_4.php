
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.b.4_11',4.0411,'4.oa.b.4','');
*/
var i_4_oa_b_4__11 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '4.oa.b.4_11';
        this.ns = new NameSampler();
	this.mUtility = new Utility();

	var a = 0;
	var b = 0;
	while(a == b)
	{
        	a = Math.floor(Math.random()*8+3);
        	b = Math.floor(Math.random()*8+3);
	}
	var c = this.mUtility.lcm(a,b); 

        this.setQuestion('' + this.ns.mNameOne + ' is watching some little kids. To keep their attention he starts a new game of ' + this.ns.mPlayedActivityOne + ' every ' + a + ' minutes and a new game of ' + this.ns.mPlayedActivityTwo + ' every ' + b + ' minutes. At exactly 2 P.M. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' started both games. How many minutes will go by till ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' starts both games at the same time again?');
        this.setAnswer('' + c,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.b.4_10',4.0410,'4.oa.b.4','');
*/
var i_4_oa_b_4__10 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '4.oa.b.4_10';

        var a = Math.floor(Math.random()*8+3);
        var multiples  = '';

        for (var i = 1; i < 7; i++)
        {
                if (multiples.length == 0)  //first one no comma
                {
                        multiples = multiples + '' + a;
                }
                else
                {
                        var nextMultiple = parseInt(a * i);
                        multiples = multiples + ',' + nextMultiple;
                }
        }

        this.setQuestion('Write the first 6 multiples of ' + a + ' seperated by commas. For example the first 6 multiples of 2 would be written: 2,4,6,8,10,12');
        this.setAnswer('' + multiples,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.b.4_9',4.0409,'4.oa.b.4','');
*/
var i_4_oa_b_4__9 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '4.oa.b.4_9';

        this.setQuestion('' + 'Write true or false. All composite numbers are even.')
        this.setAnswer('' + 'false',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.b.4_8',4.0408,'4.oa.b.4','');
*/
var i_4_oa_b_4__8 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '4.oa.b.4_8';

        this.setQuestion('' + 'Write true or false. All composite numbers are odd.')
        this.setAnswer('' + 'false',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.b.4_7',4.0407,'4.oa.b.4','');
*/
var i_4_oa_b_4__7 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '4.oa.b.4_7';

        this.setQuestion('' + 'Write true or false. All prime numbers are even.')
        this.setAnswer('' + 'false',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.b.4_6',4.0406,'4.oa.b.4','');
*/
var i_4_oa_b_4__6 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '4.oa.b.4_6';

	this.setQuestion('' + 'Write true or false. All prime numbers are odd.')
        this.setAnswer('' + 'true',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.b.4_5',4.0405,'4.oa.b.4','');
*/
var i_4_oa_b_4__5 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '4.oa.b.4_5';
        this.ns = new NameSampler();
	this.mUtility = new Utility();
	

        var a = Math.floor(Math.random()*9+2);
        var b = Math.floor(Math.random()*9+2);
        var multiples  = '';
	
	var c = this.mUtility.lcm(a,b); 
	var d = parseInt(c / a);
	var e = parseInt(c / b);

        this.setQuestion('' + this.ns.mNameOne + ' is at a vegetable stand. The ' + this.ns.mVegetableOne + ' are sold ' + a + ' to a bag and the ' + this.ns.mVegetableTwo + ' are sold ' + b + ' to a bag. What is the least amount of bags of ' + this.ns.mVegetableOne + ' and ' + this.ns.mVegetableTwo + ' ' +  this.ns.mNameOne + ' can buy so that ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' will end up with the same amount of each vegetable. Put your answer in to form: x,y where x is the bags of ' + this.ns.mVegetableOne + ' and y is the bags of ' + this.ns.mVegetableTwo + '.');
        this.setAnswer('' + d + ',' + e,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.b.4_4',4.0404,'4.oa.b.4','');
*/
var i_4_oa_b_4__4 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '4.oa.b.4_4';
        this.ns = new NameSampler();

        var a = Math.floor(Math.random()*8+3);
        var multiples  = '';

        for (var i = 1; i < 5; i++)
        {
		if (multiples.length == 0)  //first one no comma
              	{
                        multiples = multiples + '' + a;
                }
                else
                {
			var nextMultiple = parseInt(a * i);
                	multiples = multiples + ',' + nextMultiple;
                }
        }

        this.setQuestion('' + this.ns.mNameOne + ' made up a game. After each round ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' gets ' + a + ' points. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' keeps track of the score by writing the total score after each round seperated by a comma. What would that look like after 4 rounds? For example if each round was worth 2 points it would look like this: 2,4,6,8');
        this.setAnswer('' + multiples,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.b.4_3',4.0403,'4.oa.b.4','');
*/
var i_4_oa_b_4__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '4.oa.b.4_3';
        this.ns = new NameSampler();
    
	var a = Math.floor(Math.random()*100+1);
        var count = 0;
	var answer = '';

        for (var i = 0; i <= a; i++)
        {
                if (parseInt(a % i) == 0)
                {
                        count++;
                }
        }

	if (count < 3)
	{
		answer = 'prime';
	}
	else
	{
		answer = 'composite';
	}

        this.setQuestion('' + 'Is the number ' + a + ' prime or composite?');
        this.setAnswer('' + answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.b.4_2',4.0402,'4.oa.b.4','');
*/
var i_4_oa_b_4__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '4.oa.b.4_2';

        var a = Math.floor(Math.random()*100+1);
        var factors  = '';

        for (var i = 0; i <= a; i++)
        {
                if (parseInt(a % i) == 0)
                {
			if (factors.length == 0)  //first one no comma
			{
				factors = factors + '' + i;
			}
			else
			{
				factors = factors + ',' + i;
			}
		}
        }

        this.setQuestion('' + 'Write the factors of ' + a + ' in increasing order seperated by commas.');
        this.setAnswer('' + factors,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.b.4_1',4.0401,'4.oa.b.4','');
*/
var i_4_oa_b_4__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '4.oa.b.4_1';
        this.ns = new NameSampler();

        var a = Math.floor(Math.random()*10+5);
	var count = 0; 

	for (var i = 0; i <= a; i++)
        {
		if (parseInt(a % i) == 0)
		{
			count++;
		}
        }

        this.setQuestion('' + this.ns.mNameOne + ' has ' + a + ' ' + this.ns.mThingOne + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' wants to put them in rows. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' wants each row to have the same amount of ' + this.ns.mThingOne + '. How many different ways can ' + this.ns.mNameOne + ' arrange ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' ' + this.ns.mThingOne + ' while still making sure that all the rows have an equal amount of ' + this.ns.mThingOne + '?');
        this.setAnswer('' + count,0);
}
});

