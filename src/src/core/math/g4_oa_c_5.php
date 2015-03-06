
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.c.5_5',4.0505,'4.oa.c.5','subtract x rule and what multiple');
*/
var i_4_oa_c_5__5 = new Class(
{
Extends: TextItem4,
initialize: function(sheet)
{
	this.parent(sheet,250,200,200,155,100, 50,425,100);
        this.mType = '4.oa.c.5_5';
        
	this.ns = new NameSampler();

        var a = Math.floor(Math.random()*10+1);
        var b = Math.floor(Math.random()*8+3);

	//even odd answer
	if (a == 1)
	{
		if (b % 2 != 0)
		{
			this.setAnswer('' + 'mixed',3);
		}
		else
		{
			this.setAnswer('' + 'odd',3);
		} 
	}
	else if (a % 2 != 0)
	{
		if (b % 2 != 0)
		{
			this.setAnswer('' + 'mixed',3);
		}
		else
		{
			this.setAnswer('' + 'odd',3);
		} 
	}
	else 
	{
		if (b % 2 != 0)
		{
			this.setAnswer('' + 'mixed',3);
		}
		else
		{
			this.setAnswer('' + 'even',3);
		} 
	}

        var patternArray = new Array();
	for (i=0; i < 7; i++)
	{
		if (i == 0)
		{
			patternArray.push(a);
		}
		else
		{
			var x = parseInt(patternArray[parseInt(i-1)] + b)
			patternArray.push(x);
		}
	}
	
	//heading
	this.mHeadingAnswerLabel.setPosition(420,100);
	this.mHeadingAnswerLabel2.setPosition(520,100);
	this.mHeadingAnswerLabel3.setPosition(610,100);
	this.mHeadingAnswerLabel4.setPosition(700,100);

	this.mHeadingAnswerLabel.setSize(25,25);
	this.mHeadingAnswerLabel2.setSize(25,25);
	this.mHeadingAnswerLabel3.setSize(25,25);
	this.mHeadingAnswerLabel4.setSize(25,25);
	
	this.mHeadingAnswerLabel.setText('' + patternArray[0] + ',');
	this.mHeadingAnswerLabel2.setText(',' + patternArray[2] + ',');
	this.mHeadingAnswerLabel3.setText(',' + patternArray[4] + ',');
	this.mHeadingAnswerLabel4.setText(',' + patternArray[6]);
	
	//text box
	this.mAnswerTextBox.setPosition(475,110);
	this.mAnswerTextBox2.setPosition(568,110);
	this.mAnswerTextBox3.setPosition(660,110);
	this.mAnswerTextBox4.setPosition(122,210);

	this.mAnswerTextBox.setSize(50,50);
	this.mAnswerTextBox2.setSize(50,50);
	this.mAnswerTextBox3.setSize(50,50);
	this.mAnswerTextBox4.setSize(100,50);

        this.setQuestion('' + 'Use the rule add ' + b + ' to fill in the missing parts of the number pattern. Then write below whether pattern contains odd, even or mixed.');
        this.setAnswer('' + patternArray[1],0);
        this.setAnswer('' + patternArray[3],1);
        this.setAnswer('' + patternArray[5],2);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.c.5_4',4.0504,'4.oa.c.5','add x rule and odd,even or mixed');
*/
var i_4_oa_c_5__4 = new Class(
{
Extends: TextItem4,
initialize: function(sheet)
{
	this.parent(sheet,250,200,150,145,100, 50,425,100);
        this.mType = '4.oa.c.5_4';
        
	this.ns = new NameSampler();

        var a = Math.floor(Math.random()*10+1);
        var b = Math.floor(Math.random()*8+3);

	//even odd answer
	if (a == 1)
	{
		if (b % 2 != 0)
		{
			this.setAnswer('' + 'alternate',3);
		}
		else
		{
			this.setAnswer('' + 'odd',3);
		} 
	}
	else if (a % 2 != 0)
	{
		if (b % 2 != 0)
		{
			this.setAnswer('' + 'alternate',3);
		}
		else
		{
			this.setAnswer('' + 'odd',3);
		} 
	}
	else 
	{
		if (b % 2 != 0)
		{
			this.setAnswer('' + 'alternate',3);
		}
		else
		{
			this.setAnswer('' + 'even',3);
		} 
	}

        var patternArray = new Array();
	for (i=0; i < 7; i++)
	{
		if (i == 0)
		{
			patternArray.push(a);
		}
		else
		{
			var x = parseInt(patternArray[parseInt(i-1)] + b)
			patternArray.push(x);
		}
	}
	
	//heading
	this.mHeadingAnswerLabel.setPosition(420,100);
	this.mHeadingAnswerLabel2.setPosition(520,100);
	this.mHeadingAnswerLabel3.setPosition(610,100);
	this.mHeadingAnswerLabel4.setPosition(700,100);

	this.mHeadingAnswerLabel.setSize(25,25);
	this.mHeadingAnswerLabel2.setSize(25,25);
	this.mHeadingAnswerLabel3.setSize(25,25);
	this.mHeadingAnswerLabel4.setSize(25,25);
	
	this.mHeadingAnswerLabel.setText('' + patternArray[0] + ',');
	this.mHeadingAnswerLabel2.setText(',' + patternArray[2] + ',');
	this.mHeadingAnswerLabel3.setText(',' + patternArray[4] + ',');
	this.mHeadingAnswerLabel4.setText(',' + patternArray[6]);
	
	//text box
	this.mAnswerTextBox.setPosition(475,110);
	this.mAnswerTextBox2.setPosition(568,110);
	this.mAnswerTextBox3.setPosition(660,110);
	this.mAnswerTextBox4.setPosition(122,310);

	this.mAnswerTextBox.setSize(50,50);
	this.mAnswerTextBox2.setSize(50,50);
	this.mAnswerTextBox3.setSize(50,50);
	this.mAnswerTextBox4.setSize(100,50);

        this.setQuestion('' + 'Use the rule add ' + b + ' to fill in the missing parts of the number pattern. Then write below either: ' + '<span style="color: #f00;">' + 'odd' + '</span>' + ',' + '<span style="color: #f00;">' + ' even ' + '</span>' + ' or ' + '<span style="color: #f00;">' + 'alternate' + '</span>' + '. With odd meaning they are all odd. Even meaning they are all even and alternate meaning they alternate between odd and even.');

        this.setAnswer('' + patternArray[1],0);
        this.setAnswer('' + patternArray[3],1);
        this.setAnswer('' + patternArray[5],2);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.c.5_3',4.0503,'4.oa.c.5','');
*/
var i_4_oa_c_5__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '4.oa.c.5_3';
        this.ns = new NameSampler();

        var a = Math.floor(Math.random()*2+2);
        var b = Math.floor(Math.random()*2+2);
        
	var answer  = '';
	var last = a;

        for (var i = 1; i < 5; i++)
        {
                if (answer.length == 0)  //first one no comma
                {
                        answer = '' + a;
                }
                else
                {
                        var next = parseInt(last * b);
			answer = answer + ',' + next;   
			last = next;
                }
        }

        this.setQuestion('' + this.ns.mNameOne + ' makes a pattern with numbers. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' begins at the number ' + a + '. The rule ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' uses is multiply by ' + b + '. Write the first 4 terms of the pattern seperated by commas.');
        this.setAnswer('' + answer,0);
}

});

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

        this.setQuestion('' + this.ns.mNameOne + ' makes 3 sets of squares. According to to pattern if ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' makes a 4th set how many squares will ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' make?');
        this.setAnswer('' + this.a,0);
},

createQuestionShapes: function()
{
	if (this.a == 1) // start 1 add 1 answer 4 
	{
		this.setAnswer('' + '4',0);  
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
	if (this.a == 2) //start 1 add 2 answer 7 
	{
		this.setAnswer('' + '7',0);  
               //1
                var boxOneA      = new Rectangle(25,25,10,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);

                boxOneLabel = new Shape(100,50,80,340,this.mSheet.mGame,"","","");
                boxOneLabel.setText('1st');

                //2
                var boxTwoA = new Rectangle(25,25,110,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxTwoB = new Rectangle(25,25,135,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxTwoC = new Rectangle(25,25,160,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);

                boxTwoLabel = new Shape(100,50,200,340,this.mSheet.mGame,"","","");
                boxTwoLabel.setText('2nd');

                //3
                var boxThreeA = new Rectangle(25,25,260,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxThreeB = new Rectangle(25,25,285,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxThreeC = new Rectangle(25,25,310,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxThreeD = new Rectangle(25,25,335,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxThreeE = new Rectangle(25,25,360,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);

                boxThreeLabel = new Shape(100,50,380,340,this.mSheet.mGame,"","","");
                boxThreeLabel.setText('3rd');

                this.addQuestionShape(boxOneA);
                this.addQuestionShape(boxOneLabel);

                this.addQuestionShape(boxTwoA);
                this.addQuestionShape(boxTwoB);
                this.addQuestionShape(boxTwoC);
                this.addQuestionShape(boxTwoLabel);

                this.addQuestionShape(boxThreeA);
                this.addQuestionShape(boxThreeB);
                this.addQuestionShape(boxThreeC);
                this.addQuestionShape(boxThreeD);
                this.addQuestionShape(boxThreeE);
                this.addQuestionShape(boxThreeLabel);
	}
	if (this.a == 3) //start 1 add 3 answer 10
	{
		this.setAnswer('' + '10',0);  
               	//1
                var boxOneA      = new Rectangle(25,25,10,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);

                boxOneLabel = new Shape(100,50,80,340,this.mSheet.mGame,"","","");
                boxOneLabel.setText('1st');

                //2
                var boxTwoA = new Rectangle(25,25,110,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxTwoB = new Rectangle(25,25,135,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxTwoC = new Rectangle(25,25,160,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxTwoD = new Rectangle(25,25,185,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);

                boxTwoLabel = new Shape(100,50,200,340,this.mSheet.mGame,"","","");
                boxTwoLabel.setText('2nd');

                //3
                var boxThreeA = new Rectangle(25,25,260,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxThreeB = new Rectangle(25,25,285,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxThreeC = new Rectangle(25,25,310,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxThreeD = new Rectangle(25,25,335,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxThreeE = new Rectangle(25,25,360,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxThreeF = new Rectangle(25,25,385,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxThreeG = new Rectangle(25,25,410,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);

                boxThreeLabel = new Shape(100,50,380,340,this.mSheet.mGame,"","","");
                boxThreeLabel.setText('3rd');

                this.addQuestionShape(boxOneA);
                this.addQuestionShape(boxOneLabel);

                this.addQuestionShape(boxTwoA);
                this.addQuestionShape(boxTwoB);
                this.addQuestionShape(boxTwoC);
                this.addQuestionShape(boxTwoD);
                this.addQuestionShape(boxTwoLabel);

                this.addQuestionShape(boxThreeA);
                this.addQuestionShape(boxThreeB);
                this.addQuestionShape(boxThreeC);
                this.addQuestionShape(boxThreeD);
                this.addQuestionShape(boxThreeE);
                this.addQuestionShape(boxThreeF);
                this.addQuestionShape(boxThreeG);
                this.addQuestionShape(boxThreeLabel);
	}
       
	if (this.a == 4) //start 1 add 4 answer 13 
        {
		this.setAnswer('' + '13',0);  
                //1
                var boxOneA      = new Rectangle(25,25,10,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);

                boxOneLabel = new Shape(100,50,80,340,this.mSheet.mGame,"","","");
                boxOneLabel.setText('1st');

                //2
                var boxTwoA = new Rectangle(25,25,110,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxTwoB = new Rectangle(25,25,135,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxTwoC = new Rectangle(25,25,160,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxTwoD = new Rectangle(25,25,110,155,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxTwoE = new Rectangle(25,25,135,155,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);

                boxTwoLabel = new Shape(100,50,200,340,this.mSheet.mGame,"","","");
                boxTwoLabel.setText('2nd');

                //3
                var boxThreeA = new Rectangle(25,25,260,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxThreeB = new Rectangle(25,25,285,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxThreeC = new Rectangle(25,25,310,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxThreeD = new Rectangle(25,25,335,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxThreeE = new Rectangle(25,25,360,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxThreeF = new Rectangle(25,25,260,155,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxThreeG = new Rectangle(25,25,285,155,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxThreeH = new Rectangle(25,25,310,155,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxThreeI = new Rectangle(25,25,335,155,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);

                boxThreeLabel = new Shape(100,50,380,340,this.mSheet.mGame,"","","");
                boxThreeLabel.setText('3rd');

                this.addQuestionShape(boxOneA);
                this.addQuestionShape(boxOneLabel);

                this.addQuestionShape(boxTwoA);
                this.addQuestionShape(boxTwoB);
                this.addQuestionShape(boxTwoC);
                this.addQuestionShape(boxTwoD);
                this.addQuestionShape(boxTwoE);
                this.addQuestionShape(boxTwoLabel);

                this.addQuestionShape(boxThreeA);
                this.addQuestionShape(boxThreeB);
                this.addQuestionShape(boxThreeC);
                this.addQuestionShape(boxThreeD);
                this.addQuestionShape(boxThreeE);
                this.addQuestionShape(boxThreeF);
                this.addQuestionShape(boxThreeG);
                this.addQuestionShape(boxThreeH);
                this.addQuestionShape(boxThreeI);
                this.addQuestionShape(boxThreeLabel);
        }
        if (this.a == 5) //start 1 add 5 answer 16
        {
		this.setAnswer('' + '16',0);  
                //1
                var boxOneA      = new Rectangle(25,25,10,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);

                boxOneLabel = new Shape(100,50,80,340,this.mSheet.mGame,"","","");
                boxOneLabel.setText('1st');

                //2
                var boxTwoA = new Rectangle(25,25,110,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxTwoB = new Rectangle(25,25,135,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxTwoC = new Rectangle(25,25,160,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxTwoD = new Rectangle(25,25,110,155,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxTwoE = new Rectangle(25,25,135,155,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxTwoF = new Rectangle(25,25,160,155,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);

                boxTwoLabel = new Shape(100,50,200,340,this.mSheet.mGame,"","","");
                boxTwoLabel.setText('2nd');

                //3
                var boxThreeA = new Rectangle(25,25,260,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxThreeB = new Rectangle(25,25,285,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxThreeC = new Rectangle(25,25,310,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxThreeD = new Rectangle(25,25,335,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxThreeE = new Rectangle(25,25,360,130,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxThreeF = new Rectangle(25,25,260,155,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxThreeG = new Rectangle(25,25,285,155,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxThreeH = new Rectangle(25,25,310,155,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxThreeI = new Rectangle(25,25,335,155,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxThreeJ = new Rectangle(25,25,360,155,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
                var boxThreeK = new Rectangle(25,25,385,155,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);

                boxThreeLabel = new Shape(100,50,380,340,this.mSheet.mGame,"","","");
                boxThreeLabel.setText('3rd');

                this.addQuestionShape(boxOneA);
                this.addQuestionShape(boxOneLabel);

                this.addQuestionShape(boxTwoA);
                this.addQuestionShape(boxTwoB);
                this.addQuestionShape(boxTwoC);
                this.addQuestionShape(boxTwoD);
                this.addQuestionShape(boxTwoE);
                this.addQuestionShape(boxTwoF);
                this.addQuestionShape(boxTwoLabel);

                this.addQuestionShape(boxThreeA);
                this.addQuestionShape(boxThreeB);
                this.addQuestionShape(boxThreeC);
                this.addQuestionShape(boxThreeD);
                this.addQuestionShape(boxThreeE);
                this.addQuestionShape(boxThreeF);
                this.addQuestionShape(boxThreeG);
                this.addQuestionShape(boxThreeH);
                this.addQuestionShape(boxThreeI);
                this.addQuestionShape(boxThreeJ);
                this.addQuestionShape(boxThreeK);
                this.addQuestionShape(boxThreeLabel);
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


