/*
insert into item_types(id,progression,core_standards_id,description) values ('3.md.b.4_1',3.2501,'3.md.b.4,'');
*/
var i_3_md_b_4__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mRaphael = Raphael(10,150,550,350);
        this.ns = new NameSampler();
        this.mChopWhiteSpace = false;
        this.mType = '3.md.b.4_1';

	this.mXArray = new Array();
	this.mXArray.push(50);
	this.mXArray.push(100);
	this.mXArray.push(150);
	this.mXArray.push(200);
	this.mXArray.push(250);
	this.mXArray.push(300);
	this.mXArray.push(350);

	this.mTextArray = new Array();	
	this.mTextArray.push(' the first circle from the left to the second circle from the left.'); 
	this.mTextArray.push(' the first circle from the left to the third circle from the left.'); 
	this.mTextArray.push(' the first circle from the left to the fourth circle from the left.'); 
	this.mTextArray.push(' the first circle from the left to the fifth circle from the left.'); 
	this.mTextArray.push(' the first circle from the left to the sixth circle from the left.'); 
	this.mTextArray.push(' the first circle from the left to the seventh circle from the left.'); 
	this.mTextArray.push(' the first circle from the left to the eighth circle from the left.'); 
	this.mTextArray.push(' the first circle from the left to the ninth circle from the left.'); 
	this.mTextArray.push(' the first circle from the left to the tenth circle from the left.'); 

	this.r = Math.floor(Math.random()*this.mTextArray.length);

        this.setQuestion('' + this.ns.mNameOne + ' wants to find the distance from ' + this.mTextArray[this.r] + ' The rectangles are movable and can be used to measure. The length of each rectangle represents 1 inch and the scale of the map is 1/4 inch = 1 mile. Help ' + this.ns.mNameOne + ' measure the distance.');

        //move buttons
        this.mContinueIncorrectButton.setPosition(690,400);
        this.mContinueCorrectButton.setPosition(690,400);
},

createQuestionShapes: function()
{
        //rectangles
        this.r1 = new Rectangle(160,25,10,85,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true);
        this.addQuestionShape(this.r1);
        
	this.r2 = new Rectangle(160,25,170,85,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true);
        this.addQuestionShape(this.r1);
	
	this.r3 = new Rectangle(160,25,330,85,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true);
        this.addQuestionShape(this.r1);

	this.circleA = new Circle(6,50,187,this.mSheet.mGame,this.mRaphael,0,1,1,"none",.5,false);
        this.addQuestionShape(this.circleA);
	
	this.circleB = new Circle(6,90,187,this.mSheet.mGame,this.mRaphael,0,1,1,"none",.5,false);
        this.addQuestionShape(this.circleB);
	
	this.circleC = new Circle(6,130,187,this.mSheet.mGame,this.mRaphael,0,1,1,"none",.5,false);
        this.addQuestionShape(this.circleC);
	
	this.circleD = new Circle(6,170,187,this.mSheet.mGame,this.mRaphael,0,1,1,"none",.5,false);
        this.addQuestionShape(this.circleD);
	
	this.circleE = new Circle(6,210,187,this.mSheet.mGame,this.mRaphael,0,1,1,"none",.5,false);
        this.addQuestionShape(this.circleE);
	
	this.circleF = new Circle(6,250,187,this.mSheet.mGame,this.mRaphael,0,1,1,"none",.5,false);
        this.addQuestionShape(this.circleF);
	
	this.circleG = new Circle(6,290,187,this.mSheet.mGame,this.mRaphael,0,1,1,"none",.5,false);
        this.addQuestionShape(this.circleG);
	
	this.circleH = new Circle(6,330,187,this.mSheet.mGame,this.mRaphael,0,1,1,"none",.5,false);
        this.addQuestionShape(this.circleH);
	
	this.circleI = new Circle(6,370,187,this.mSheet.mGame,this.mRaphael,0,1,1,"none",.5,false);
        this.addQuestionShape(this.circleI);
		
	this.circleJ = new Circle(6,410,187,this.mSheet.mGame,this.mRaphael,0,1,1,"none",.5,false);
        this.addQuestionShape(this.circleJ);
	
}
});
