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

        this.x1 = Math.floor(Math.random()*200)+100;
        this.x2 = Math.floor(Math.random()*200)+100;
        this.x3 = Math.floor(Math.random()*200)+100;
	this.mXArray = new Array();
	this.mXArray.push(50);
	this.mXArray.push(100);
	this.mXArray.push(150);
	this.mXArray.push(200);
	this.mXArray.push(250);
	this.mXArray.push(300);
	this.mXArray.push(350);

        this.setQuestion('' + this.ns.mNameOne + ' wants to find the distance from the first circle on from the left to the second circle from the left? The rectangle is movable and can be used to measure. The length of the rectangle represents 1 inch and the scale of the map is 1/4 inch = 1 mile. Help ' + this.ns.mNameOne + ' measure the distance.');

        //move buttons
        this.mContinueIncorrectButton.setPosition(690,400);
        this.mContinueCorrectButton.setPosition(690,400);
},

createQuestionShapes: function()
{
        //rectangles
        this.r1 = new Rectangle(150,25,this.x1,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true);
        this.addQuestionShape(this.r1);

	this.circleA = new Circle(6,50,187,this.mSheet.mGame,this.mRaphael,0,1,1,"none",.5,false);
        this.addQuestionShape(this.circleA);
	this.textA = new Shape(25,25,187,400,this.mSheet.mGame,"","","");
	this.textA.setText('A');
        this.addQuestionShape(this.textA);
	
	this.circleB = new Circle(6,100,187,this.mSheet.mGame,this.mRaphael,0,1,1,"none",.5,false);
        this.addQuestionShape(this.circleB);
	
	this.circleC = new Circle(6,150,187,this.mSheet.mGame,this.mRaphael,0,1,1,"none",.5,false);
        this.addQuestionShape(this.circleC);
	
	this.circleD = new Circle(6,200,187,this.mSheet.mGame,this.mRaphael,0,1,1,"none",.5,false);
        this.addQuestionShape(this.circleD);
	
}
});
