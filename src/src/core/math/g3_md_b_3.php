
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

	this.rArray = new Array();

 	this.totalR = Math.floor(Math.random()*18)+2;  
 	this.totalS = Math.floor(Math.random()*18)+2;  
 	this.totalC = Math.floor(Math.random()*18)+2;  
 	this.totalT = Math.floor(Math.random()*18)+2;  

	this.box1Total = parseInt(this.totalR + this.totalS);
	this.box2Total = parseInt(this.totalC + this.totalT);

	this.setAnswer('a',0);
	this.setQuestion('There are 2 different boxes for shapes. Box 1 has enough space for ' + this.box1Total + ' shapes. Box 2 has enough space for ' + this.box2Total + ' shapes.'  );
    
	this.mButtonB.setAnswer('a');
	this.mButtonB.setAnswer('b');
        this.mButtonC.setAnswer('c');
        this.mButtonD.setAnswer('d');
        this.shuffle(10);
},

createQuestionShapes: function()
{
	//rectangles
	this.x = 10;
	for (i = 0; i < this.totalR; i++) 
	{
        	this.rArray.push(new Rectangle(40,20,this.x,45,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true));
		this.x = this.x + 50;
	}
	for (i = 0; i < this.totalR; i++) 
	{
        	this.addQuestionShape(this.rArray[i]);
	}
}

});

