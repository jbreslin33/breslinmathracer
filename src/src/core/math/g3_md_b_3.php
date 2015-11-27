
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

	this.area1Total = parseInt(this.totalR + this.totalS);
	this.area2Total = parseInt(this.totalC + this.totalT);

	this.setAnswer('a',0);
	this.setQuestion('There are 2 different areas at the zoo for bears. Area 1 has enough space for ' + this.area1Total + ' bears. Area 2 has enough space for ' + this.area2Total + ' bears.'  );
    
	this.mButtonB.setAnswer('a');
	this.mButtonB.setAnswer('b');
        this.mButtonC.setAnswer('c');
        this.mButtonD.setAnswer('d');
        this.shuffle(10);
},

createQuestionShapes: function()
{
	//rectangles

	this.remainder = this.totalR % 2;
	this.half = parseInt(this.totalR / 2);
	
	APPLICATION.log('t:' + this.totalR);
	APPLICATION.log('h:' + this.half);
	APPLICATION.log('r:' + this.remainder);
	
	this.x = 100;
	labelOne = new Shape(100,50,80,105,this.mSheet.mGame,"","","");	
	labelOne.setText('Black');
       	this.addQuestionShape(labelOne);
	
	labelTwo = new Shape(100,50,80,130,this.mSheet.mGame,"","","");	
	labelTwo.setText('Brown');
       	this.addQuestionShape(labelTwo);

	labelThree = new Shape(100,50,80,160,this.mSheet.mGame,"","","");	
	labelThree.setText('Polar');
       	this.addQuestionShape(labelThree);
	
	labelFour = new Shape(100,50,80,190,this.mSheet.mGame,"","","");	
	labelFour.setText('Grizzly');
       	this.addQuestionShape(labelFour);

	for (i = 0; i < this.half; i++) 
	{
        	this.rArray.push(new Rectangle(40,20,this.x,45,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true));
		this.x = this.x + 50;
	}
	var i = 0;
	while (i < this.half)
	{
        	this.addQuestionShape(this.rArray[i]);
		i++;
	}
	if (this.remainder == 1)
	{
        	this.rArray.push(new Rectangle(20,20,this.x,45,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true));
        	this.addQuestionShape(this.rArray[i]);
	}
}

});

