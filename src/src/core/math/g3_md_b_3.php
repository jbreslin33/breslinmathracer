
/*
insert into item_types(id,progression,core_standards_id,description) values ('3.md.b.3_1',3.2201,'3.md.b.3','');
*/
var i_3_md_b_3__1 = new Class(
{
Extends: FourButtonItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.md.b.3_1';
    	this.mRaphael = Raphael(10,50,550,150);
 	this.mChopWhiteSpace = false;
        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();
  
	this.setAnswer('a',0);
	this.setQuestion('What?');
    
	this.mButtonB.setAnswer('a');
	this.mButtonB.setAnswer('b');
        this.mButtonC.setAnswer('c');
        this.mButtonD.setAnswer('d');
        this.shuffle(10);
},

createQuestionShapes: function()
{
	//rectangles
        this.r1 = new Rectangle(160,25,10,85,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true);
        this.addQuestionShape(this.r1);
}

});

