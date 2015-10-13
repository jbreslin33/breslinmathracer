
/*
insert into item_types(id,progression,core_standards_id,description) values ('2.oa.c.4_2',2.0402,'2.oa.c.4','');
*/
var i_2_oa_c_4__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mRaphael = Raphael(10,150,550,350);
        //this.mChopWhiteSpace = false;
        this.mType = '2.oa.c.4_2';

        this.x = Math.floor(Math.random()*4)+2;
        this.y = Math.floor(Math.random()*4)+2;

        this.setQuestion('' + 'Write an equation to express the total amount of little squares as a sum of equal addends?');
	var answerOneA = '';
	var answerOneB = '';
	var answerTwoA = '';
	var answerTwoB = '';
        for (i = 0; i < this.y; i++)
	{
		if (i == 0)
		{
			answerOneA = answerOneA + '' + this.x;	
		}
		else
		{
			answerOneA = answerOneA + ' + ' + this.x;	
		}
	}
	answerOneA = answerOneA + ' = ' + parseInt(this.x * this.y);

        this.setAnswer('' + answerOneA,0);

        //move buttons
        this.mContinueIncorrectButton.setPosition(690,400);
        this.mContinueCorrectButton.setPosition(690,400);
},

createQuestionShapes: function()
{
        var x = 50;
        var y = 50;
        for (i = 0; i < this.y; i++)
        {
                x = 50;
                for (j = 0; j < this.x; j++)
                {
                        x = x + 25;
                        var r = new Rectangle(25,25,x,y,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true);
                        this.addQuestionShape(r);
                }
                y = y + 25;
        }
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.oa.c.4_1',2.0401,'2.oa.c.4','');
*/
var i_2_oa_c_4__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mRaphael = Raphael(10,150,550,350);
        this.mType = '2.oa.c.4_1';

        this.x = Math.floor(Math.random()*4)+2;
        this.y = Math.floor(Math.random()*4)+2;

        this.setQuestion('' + 'How many little squares are there?');
        this.setAnswer('' + parseInt(this.x * this.y),0);

        //move buttons
        this.mContinueIncorrectButton.setPosition(690,400);
        this.mContinueCorrectButton.setPosition(690,400);
},

createQuestionShapes: function()
{
	var x = 50;
	var y = 50;
	for (i = 0; i < this.y; i++)
	{ 
		x = 50;
		for (j = 0; j < this.x; j++)
		{
			x = x + 25;
        		var r = new Rectangle(25,25,x,y,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true);
        		this.addQuestionShape(r);
		}
		y = y + 25;
	}
}
});


