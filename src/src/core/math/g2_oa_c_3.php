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
        this.a = Math.floor(Math.random()*8)+13;
        this.b = Math.floor(Math.random()*5)+5;
        this.s = Math.floor(Math.random()*16)+5;
        this.c = parseInt(this.a - this.b);

       	this.setQuestion(this.ns.mNameOne + ' has a fruit stand. At the beginning of the day ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' had ' + this.a + ' ' + this.ns.mFruitOne + '. ' + this.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' then sold ' + this.b + ' ' + this.ns.mFruitOne + '. How many ' + this.ns.mFruitOne + ' does ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' have ' + this.ns.mLeft + '?');
        this.setAnswer('' + this.c,0);
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

