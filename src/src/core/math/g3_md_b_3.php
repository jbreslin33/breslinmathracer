
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

	this.arrayA = new Array();
	this.arrayB = new Array();
	this.arrayC = new Array();
	this.arrayD = new Array();

 	this.totalA = Math.floor(Math.random()*18)+2;  
 	this.totalB = Math.floor(Math.random()*18)+2;  
 	this.totalC = Math.floor(Math.random()*18)+2;  
 	this.totalD = Math.floor(Math.random()*18)+2;  

	this.area1Total = parseInt(this.totalA + this.totalB);
	this.area2Total = parseInt(this.totalC + this.totalD);

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

	//A
	this.remainderA = this.totalA % 2;
	this.halfA = parseInt(this.totalA / 2);

	var i = 0;
	this.x = 100;

	while(i < this.halfA) 
	{
        	this.arrayA.push(new Rectangle(40,20,this.x,45,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true));
        	this.addQuestionShape(this.arrayA[i]);
		this.x = this.x + 50;
		i++;
	}
	if (this.remainderA == 1)
	{
        	this.arrayA.push(new Rectangle(20,20,this.x,45,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true));
        	this.addQuestionShape(this.arrayA[i]);
	}

	//B	
	this.remainderB = this.totalB % 2;
	this.halfB = parseInt(this.totalB / 2);
	this.x = 100;

	i = 0;
	while (i < this.halfB) 
	{
        	this.arrayB.push(new Rectangle(40,20,this.x,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true));
        	this.addQuestionShape(this.arrayB[i]);
		this.x = this.x + 50;
		i++;
	}
	if (this.remainderB == 1)
	{
        	this.arrayB.push(new Rectangle(20,20,this.x,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true));
        	this.addQuestionShape(this.arrayB[i]);
	}
}

});

