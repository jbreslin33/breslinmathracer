
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.c.5_2',4.0502,'4.oa.c.5','');
*/
var i_4_oa_c_5__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '4.oa.c.5_2';
        this.ns = new NameSampler();
        this.mRaphael = Raphael(10,150,450,350);

        var a = Math.floor(Math.random()*8+3);

        this.setQuestion('' + this.ns.mNameOne + ' makes. ');
        this.setAnswer('' + 'g',0);
},

createQuestionShapes: function()
{
	//1
	var boxOne = new Rectangle(50,50,10,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);

	//2
	var boxTwo = new Rectangle(50,50,110,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);

	var boxThree = new Rectangle(50,50,160,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);

	//3	
	var boxFour = new Rectangle(50,50,260,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
	var boxFive = new Rectangle(50,50,310,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
	var boxSix = new Rectangle(50,50,360,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);

        //box.mPolygon.attr({fill: "#000", "fill-opacity": 0, stroke: "#444444", "stroke-width": 2});

       	this.addQuestionShape(boxOne);

       	this.addQuestionShape(boxTwo);
       	this.addQuestionShape(boxThree);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.c.5_1',4.0501,'4.oa.c.5','');
*/
var i_4_oa_c_5__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '4.oa.c.5_1';
 	this.ns = new NameSampler();

        var a = Math.floor(Math.random()*8+3);
        var b = Math.floor(Math.random()*8+3);
        var answer  = '';
        var total = a;

        for (var i = 1; i < 7; i++)
        {
                if (answer.length == 0)  //first one no comma
                {
			total = parseInt(b + total);
			answer = '' + total; 
                }
                else
                {
			total = parseInt(total + b);
			answer = '' + answer + ',' + total;
                }
        }

        this.setQuestion('' + this.ns.mNameOne + ' wants to save money for ' + this.ns.mPurchaseOne + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' already has $' + a + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' plans to add $' + b + ' per week to that total. Write ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' weekly totals for the first 6 weeks seperated by commas. For example: 2,4,6,8,10,12');
        this.setAnswer('' + answer,0);
}
});


