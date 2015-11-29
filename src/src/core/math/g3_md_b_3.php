
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
    	this.mRaphael = Raphael(10,50,550,200);
 	this.mChopWhiteSpace = false;
        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

	this.mButtonA.setPosition(85,300);	
	this.mButtonB.setPosition(285,300);	
	this.mButtonC.setPosition(485,300);	
	this.mButtonD.setPosition(685,300);	
	
	this.bearArray = new Array();
	this.bearArray.push('Black');
	this.bearArray.push('Brown');
	this.bearArray.push('Polar');
	this.bearArray.push('Grizzly');

	this.rA = 0;
	this.rB = 0;
	this.rC = 0;
	this.rD = 0;

	while (this.rA == this.rB || this.rA == this.rC || this.rA == this.rD || this.rB == this.rC || this.rC == this.rD)
	{ 
 		this.rA = Math.floor(Math.random()*4);  
 		this.rB = Math.floor(Math.random()*4);  
 		this.rC = Math.floor(Math.random()*4);  
 		this.rD = Math.floor(Math.random()*4);  
	}

	this.arrayA = new Array();
	this.arrayB = new Array();
	this.arrayC = new Array();
	this.arrayD = new Array();

	this.totalA = 0;
	this.totalB = 0;
	this.totalC = 0;
	this.totalD = 0;
	
	while (this.totalA == this.totalB || this.totalA == this.totalC || this.totalA == this.totalD || this.totalB == this.totalC || this.totalC == this.totalD)
	{
		this.totalA = Math.floor(Math.random()*18)+2;  
 		this.totalB = Math.floor(Math.random()*18)+2;  
 		this.totalC = Math.floor(Math.random()*18)+2;  
 		this.totalD = Math.floor(Math.random()*18)+2;  
	}

	this.area1Total = parseInt(this.totalA + this.totalB);
	this.area2Total = parseInt(this.totalC + this.totalD);

	var a = this.bearArray[this.rA] + ' and ' + this.bearArray[this.rB] + ' Bears in Area 1 and ' + this.bearArray[this.rC] + ' and ' + this.bearArray[this.rD] + ' Bears in Area 2.';
	
	this.setAnswer('' + a,0);
	this.setQuestion('According to Dwight Schrute there are 2 different areas at the zoo for bears. Area 1 has enough space for ' + this.area1Total + ' bears. Area 2 has enough space for ' + this.area2Total + ' bears. Which of the following show a way the bears can fit in each area?'  );

	this.mButtonA.setAnswer('' + a); 
    
	this.mButtonB.setAnswer('' + this.bearArray[this.rA] + ' and ' + this.bearArray[this.rC] + ' Bears in Area 1 and ' + this.bearArray[this.rB] + ' and ' + this.bearArray[this.rD] + ' Bears in Area 2.');
	
	this.mButtonC.setAnswer('' + '' + this.bearArray[this.rA] + ' and ' + this.bearArray[this.rD] + ' Bears in Area 1 and ' + this.bearArray[this.rB] + ' and ' + this.bearArray[this.rC] + ' Bears in Area 2.');
	
	this.mButtonD.setAnswer('' + '' + this.bearArray[this.rB] + ' and ' + this.bearArray[this.rC] + ' Bears in Area 1 and ' + this.bearArray[this.rA] + ' and ' + this.bearArray[this.rD] + ' Bears in Area 2.');

        this.shuffle(10);
},

createQuestionShapes: function()
{

	//need to randomize y pos of these
	var yPosArray = new Array();
	yPosArray.push(130);
	yPosArray.push(160);
	yPosArray.push(190);
	yPosArray.push(220);

	var yArray = new Array();	
	yArray.push(75);
	yArray.push(105);
	yArray.push(135);
	yArray.push(165);

	var eA = 0;
	var eB = 0;
	var eC = 0;
	var eD = 0;

	while (eA == eB || eA == eC || eA == eD || eB == eC || eB == eD || eC == eD)
	{
		eA = Math.floor(Math.random()*4);  
		eB = Math.floor(Math.random()*4);  
		eC = Math.floor(Math.random()*4);  
		eD = Math.floor(Math.random()*4);  
	}


	labelOne = new Shape(100,50,80,yPosArray[eA],this.mSheet.mGame,"","","");	
	labelOne.setText('' + this.bearArray[this.rA]);
       	this.addQuestionShape(labelOne);
	
	labelTwo = new Shape(100,50,80,yPosArray[eB],this.mSheet.mGame,"","","");	
	labelTwo.setText('' + this.bearArray[this.rB]);
       	this.addQuestionShape(labelTwo);

	labelThree = new Shape(100,50,80,yPosArray[eC],this.mSheet.mGame,"","","");	
	labelThree.setText('' + this.bearArray[this.rC]);
       	this.addQuestionShape(labelThree);
	
	labelFour = new Shape(100,50,80,yPosArray[eD],this.mSheet.mGame,"","","");	
	labelFour.setText('' + this.bearArray[this.rD]);
       	this.addQuestionShape(labelFour);

	//A
	this.remainderA = this.totalA % 2;
	this.halfA = parseInt(this.totalA / 2);

	var i = 0;
	this.x = 100;

	while(i < this.halfA) 
	{
        	this.arrayA.push(new Rectangle(40,20,this.x,yArray[eA],this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true));
        	this.addQuestionShape(this.arrayA[i]);
		this.x = this.x + 50;
		i++;
	}
	if (this.remainderA == 1)
	{
        	this.arrayA.push(new Rectangle(20,20,this.x,yArray[eA],this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true));
        	this.addQuestionShape(this.arrayA[i]);
	}

	//B	
	this.remainderB = this.totalB % 2;
	this.halfB = parseInt(this.totalB / 2);
	this.x = 100;

	i = 0;
	while (i < this.halfB) 
	{
        	this.arrayB.push(new Rectangle(40,20,this.x,yArray[eB],this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true));
        	this.addQuestionShape(this.arrayB[i]);
		this.x = this.x + 50;
		i++;
	}
	if (this.remainderB == 1)
	{
        	this.arrayB.push(new Rectangle(20,20,this.x,yArray[eB],this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true));
        	this.addQuestionShape(this.arrayB[i]);
	}
	
	//C	
	this.remainderC = this.totalC % 2;
	this.halfC = parseInt(this.totalC / 2);
	this.x = 100;

	i = 0;
	while (i < this.halfC) 
	{
        	this.arrayC.push(new Rectangle(40,20,this.x,yArray[eC],this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true));
        	this.addQuestionShape(this.arrayC[i]);
		this.x = this.x + 50;
		i++;
	}
	if (this.remainderC == 1)
	{
        	this.arrayC.push(new Rectangle(20,20,this.x,yArray[eC],this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true));
        	this.addQuestionShape(this.arrayC[i]);
	}

	//D	
	this.remainderD = this.totalD % 2;
	this.halfD = parseInt(this.totalD / 2);
	this.x = 100;

	i = 0;
	while (i < this.halfD) 
	{
        	this.arrayD.push(new Rectangle(40,20,this.x,yArray[eD],this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true));
        	this.addQuestionShape(this.arrayD[i]);
		this.x = this.x + 50;
		i++;
	}
	if (this.remainderD == 1)
	{
        	this.arrayD.push(new Rectangle(20,20,this.x,yArray[eD],this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true));
        	this.addQuestionShape(this.arrayD[i]);
	}
}

});

