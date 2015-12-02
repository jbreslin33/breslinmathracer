/*
insert into item_types(id,progression,core_standards_id,description) values ('3.g.a.1_1',3.3701,'3.g.a.1,'Terra Nova 16');
*/
var i_3_g_a_1__1 = new Class(
{
Extends: FourButtonItem, 
initialize: function(sheet)
{
        this.parent(sheet);
        this.mRaphael = Raphael(10,50,650,150);
        this.ns = new NameSampler();
        this.mChopWhiteSpace = false;
        this.mType = '3.g.a.1_1';

	this.r = Math.floor(Math.random()*2);
	this.r = 0

	this.labelArray = new Array();


        this.setQuestion('' + 'Which 2 shapes are congruent?');

        //move buttons
        //this.mContinueIncorrectButton.setPosition(690,400);
        //this.mContinueCorrectButton.setPosition(690,400);
},

createQuestionShapes: function()
{
	//labelA
	var x = 100;	
	for (var i = 0; i < 6; i++)
	{
        	this.labelArray.push(new Shape(100,50,x,180,this.mSheet.mGame,"","",""));
		x = x + 100;
	}
	for (var j = 0; j < 6; j++)
	{
        	this.addQuestionShape(this.labelArray[j]);
	}
	
        this.labelArray[0].setText('' + 'A');
        this.labelArray[1].setText('' + 'B');
        this.labelArray[2].setText('' + 'C');
        this.labelArray[3].setText('' + 'D');
        this.labelArray[4].setText('' + 'E');
        this.labelArray[5].setText('' + 'F');

	if (this.r == 0)
	{
		var a = 'B and F';	
		this.setAnswer('' + a,0);
		this.mButtonA.setAnswer('' + a);
		this.mButtonB.setAnswer('' + 'A and C')
		this.mButtonC.setAnswer('' + 'D and F');
		this.mButtonD.setAnswer('' + 'D and E');
        	this.shuffle(10);

        	//rectangles
		this.a = new Triangle(10,100,50,50,90,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.5,false);
        	this.addQuestionShape(this.a);

        	this.b = new Rectangle(25,75,135,45,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        	this.addQuestionShape(this.b);
		
		this.c = new Triangle(210,100,250,75,290,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.5,false);
        	this.addQuestionShape(this.c);
        	
		this.d = new Rectangle(50,50,320,55,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        	this.addQuestionShape(this.d);
		
		this.e = new Rectangle(25,25,435,65,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        	this.addQuestionShape(this.e);
		
		this.f = new Rectangle(75,25,510,65,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        	this.addQuestionShape(this.f);
	}
}
});
