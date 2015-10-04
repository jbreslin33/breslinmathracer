/*
insert into item_types(id,progression,core_standards_id,description) values ('2.oa.c.3_1',2.0301,'2.oa.c.3','' );
*/

var i_2_oa_c_3__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,600,50,330,75,100,50,685,80);
 	this.mRaphael = Raphael(10,150,600,350);
        this.mType = '2.oa.c.3_1';

        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

        //variables
        this.s = Math.floor(Math.random()*16)+5;
       	this.mod = this.s % 2; 
	this.answer = '';
	if (this.mod == 0)
	{
		this.answer = 'even';
	}
	else
	{
		this.answer = 'odd';
	}

       	this.setQuestion(this.ns.mNameOne + ' wants to know if there is an odd or even amount of squares?');
        this.setAnswer('' + this.answer,0);
},

createQuestionShapes: function()
{
        //squares
        this.mSquareArray = new Array();
        var x = 230;
        var y = 10;
        for (var i = 0; i < this.s; i++)
        {
                if (i == 8)
                {
                        x = x + 30;
                        y = 10;
                }
                if (i == 16)
                {
                        x = x + 30;
                        y = 10;
                }
                this.mSquareArray.push(new Rectangle(25,25,x,y,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true));
                y = y + 30;
        }
        for (var i = 0; i < this.mSquareArray.length; i++)
        {
                this.addQuestionShape(this.mSquareArray[i]);
        }
}


});

