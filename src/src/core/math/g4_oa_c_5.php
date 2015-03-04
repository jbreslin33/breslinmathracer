
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

        this.a = Math.floor(Math.random()*3+1);
	this.a = 1;

        this.setQuestion('' + this.ns.mNameOne + ' makes sets 3 sets of squares. According to to pattern if ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' makes a 4th set how many squares will ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' make?');
        this.setAnswer('' + this.a,0);
},

createQuestionShapes: function()
{
	if (this.a == 1)
	{
		//1
		var boxOneA      = new Rectangle(50,50,10,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);

 		boxOneLabel = new Shape(100,50,80,340,this.mSheet.mGame,"","","");
		boxOneLabel.setText('1st');

		//2
		var boxTwoA = new Rectangle(50,50,110,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
		var boxTwoB = new Rectangle(50,50,160,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
 		
		boxTwoLabel = new Shape(100,50,200,340,this.mSheet.mGame,"","","");
		boxTwoLabel.setText('2nd');

		//3	
		var boxThreeA = new Rectangle(50,50,260,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
		var boxThreeB = new Rectangle(50,50,310,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
		var boxThreeC = new Rectangle(50,50,360,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
		
		boxThreeLabel = new Shape(100,50,380,340,this.mSheet.mGame,"","","");
		boxThreeLabel.setText('3rd');

       		this.addQuestionShape(boxOneA);
		this.addQuestionShape(boxOneLabel);

       		this.addQuestionShape(boxTwoA);
       		this.addQuestionShape(boxTwoB);
		this.addQuestionShape(boxTwoLabel);
       	
		this.addQuestionShape(boxThreeA);
		this.addQuestionShape(boxThreeB);
		this.addQuestionShape(boxThreeC);
		this.addQuestionShape(boxThreeLabel);
	}
	if (this.a == 2)
	{

	}
	if (this.a == 3)
	{

	}
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


