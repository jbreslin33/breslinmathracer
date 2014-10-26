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
