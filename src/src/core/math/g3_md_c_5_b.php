
/*
insert into item_types(id,progression,core_standards_id,description) values ('3.md.c.5.b_1',4.0165,'3.md.c.5.b','' );
*/
var i_3_md_c_5_b__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,500,25,275,50,50,50,625,100);
	this.ns = new NameSampler();
        this.mRaphael = Raphael(10,150,500,350);
        this.mChopWhiteSpace = false;
        this.mType = '3.md.c.5.b_1';
   
	this.r = Math.floor( (Math.random()*4)+1);
        this.setQuestion('' + 'How many same-sized small squares are in the rectangle?');
},

createQuestionShapes: function()
{
	this.r = 1;
	if (this.r > 0)
	{
		//middle 9
        	this.addQuestionShape(new Rectangle(25,25,200,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,225,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,250,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,200,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,225,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,250,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,200,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,225,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,250,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        
		//east	
		this.addQuestionShape(new Rectangle(25,25,275,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,300,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,325,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
		
		this.addQuestionShape(new Rectangle(25,25,275,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,300,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,325,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
		
		this.addQuestionShape(new Rectangle(25,25,275,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,300,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,325,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        
		//north	
		this.addQuestionShape(new Rectangle(25,25,200,50,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,225,50,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,250,50,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
		
		this.addQuestionShape(new Rectangle(25,25,200,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,225,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,250,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
		
		this.addQuestionShape(new Rectangle(25,25,200,0,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,225,0,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,250,0,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

		this.setAnswer('18',0);
	}
}
});

