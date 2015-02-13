
var BreslinTable = new Class(
{
initialize: function(dataArray)
{
	this.mTable = new Shape(100, 300,  20, 50,"","TABLE","#F8CDF8","boundary");

	this.mNumberOfCols = dataArray.length;
	this.mNumberOfRows = dataArray[0].length;
	
	for (r=this.mNumberOfRows -1; r>=0; r--)
	{
		var row = this.mTable.mMesh.insertRow(0);
		for (c=0; c<this.mNumberOfCols; c++)
		{
			var cell = row.insertCell(c);
			cell.innerHTML = dataArray[c][r];
			cell.style.fontSize = "8px";
		}
	}
}
});

var TimesTables = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
	this.parent(sheet,50,50,370,75,50,50,425,75);
        this.mThresholdTime = 5000;
        this.mClock = new ClockTimer(APPLICATION);

	this.mCorrectAnswerLabel.setPosition(600,75);
	this.mUserAnswerLabel.setPosition(120,75);
	this.mContinueCorrectButton.setPosition(678,394);
	this.mContinueIncorrectButton.setPosition(678,394);
	
	this.mQuestionLabel.setPosition(280,75);
	this.mAnswerTextBox.setPosition(325,75);

	//1	
	this.mOneA = new Shape(100, 40,  150, 130,this.mSheet.mGame,"DIV","#EFEFFB","");
	this.mOneA.mMesh.onclick = this.hitOne;
        this.addShape(this.mOneA);
        this.mOneA.mCollidable = false;
        this.mOneA.mCollisionOn = false;
	
	this.mOneB = new Shape(100, 60,  150, 170,this.mSheet.mGame,"DIV","#EFEFFB","");
        this.addShape(this.mOneB);
	this.mOneB.mMesh.innerHTML = '1';
	this.mOneB.mMesh.onclick = this.hitOne;
	this.mOneB.mMesh.style.textAlign="center";	
	
	//2	
	this.mTwoA = new Shape(100, 40,  250, 130,this.mSheet.mGame,"DIV","#E0E0F8","");
        this.addShape(this.mTwoA);
	this.mTwoA.mMesh.onclick = this.hitTwo;

	this.mTwoB = new Shape(100, 60,  250, 170,this.mSheet.mGame,"DIV","#E0E0F8","");
        this.addShape(this.mTwoB);
	this.mTwoB.mMesh.innerHTML = '2';
	this.mTwoB.mMesh.onclick = this.hitTwo;
	this.mTwoB.mMesh.style.textAlign="center";	
	
	//3	
	this.mThreeA = new Shape(100, 40,  350, 130,this.mSheet.mGame,"DIV","#CECEF6","");
        this.addShape(this.mThreeA);
	this.mThreeA.mMesh.onclick = this.hitThree;

	this.mThreeB = new Shape(100, 60,  350, 170,this.mSheet.mGame,"DIV","#CECEF6","");
        this.addShape(this.mThreeB);
	this.mThreeB.mMesh.innerHTML = '3';
	this.mThreeB.mMesh.onclick = this.hitThree;
	this.mThreeB.mMesh.style.textAlign="center";	
	
	//4	
	this.mFourA = new Shape(100, 40,  150, 220,this.mSheet.mGame,"DIV","#A9A9F5","");
        this.addShape(this.mFourA);
	this.mFourA.mMesh.onclick = this.hitFour;

	this.mFourB = new Shape(100, 60,  150, 260,this.mSheet.mGame,"DIV","#A9A9F5","");
        this.addShape(this.mFourB);
	this.mFourB.mMesh.innerHTML = '4';
	this.mFourB.mMesh.onclick = this.hitFour;
	this.mFourB.mMesh.style.textAlign="center";	
	
	//5	
	this.mFiveA = new Shape(100, 40, 250, 220,this.mSheet.mGame,"DIV","#8181F7","");
        this.addShape(this.mFiveA);
	this.mFiveA.mMesh.onclick = this.hitFive;

	this.mFiveB = new Shape(100, 60, 250, 260,this.mSheet.mGame,"DIV","#8181F7","");
        this.addShape(this.mFiveB);
	this.mFiveB.mMesh.innerHTML = '5';
	this.mFiveB.mMesh.onclick = this.hitFive;
	this.mFiveB.mMesh.style.textAlign="center";	
	
	//6	
	this.mSixA = new Shape(100, 40,  350, 220,this.mSheet.mGame,"DIV","#5858FA","");
        this.addShape(this.mSixA);
	this.mSixA.mMesh.onclick = this.hitSix;

	this.mSixB = new Shape(100, 60,  350, 260,this.mSheet.mGame,"DIV","#5858FA","");
        this.addShape(this.mSixB);
	this.mSixB.mMesh.innerHTML = '6';
	this.mSixB.mMesh.onclick = this.hitSix;
	this.mSixB.mMesh.style.textAlign="center";	
	
	//7
	this.mSevenA = new Shape(100, 40,  150, 310,this.mSheet.mGame,"DIV","#2E2EFE","");
        this.addShape(this.mSevenA);
	this.mSevenA.mMesh.onclick = this.hitSeven;

	this.mSevenB = new Shape(100, 60,  150, 350,this.mSheet.mGame,"DIV","#2E2EFE","");
        this.addShape(this.mSevenB);
	this.mSevenB.mMesh.innerHTML = '7';
	this.mSevenB.mMesh.onclick = this.hitSeven;
	this.mSevenB.mMesh.style.textAlign="center";	
	
	//8
	this.mEightA = new Shape(100, 40,  250, 310,this.mSheet.mGame,"DIV","#0000FF","");
        this.addShape(this.mEightA);
	this.mEightA.mMesh.onclick = this.hitEight;

	this.mEightB = new Shape(100, 60,  250, 350,this.mSheet.mGame,"DIV","#0000FF","");
        this.addShape(this.mEightB);
	this.mEightB.mMesh.innerHTML = '8';
	this.mEightB.mMesh.onclick = this.hitEight;
	this.mEightB.mMesh.style.textAlign="center";	
	
	//9
	this.mNineA = new Shape(100, 40,  350, 310,this.mSheet.mGame,"DIV","#0101DF","");
        this.addShape(this.mNineA);
	this.mNineA.mMesh.onclick = this.hitNine;

	this.mNineB = new Shape(100, 60,  350, 350,this.mSheet.mGame,"DIV","#0101DF","");
        this.addShape(this.mNineB);
	this.mNineB.mMesh.innerHTML = '9';
	this.mNineB.mMesh.onclick = this.hitNine;
	this.mNineB.mMesh.style.textAlign="center";	
	
	//0
	this.mZeroA = new Shape(100, 40,  450, 310,this.mSheet.mGame,"DIV","#0404B4","");
        this.addShape(this.mZeroA);
	this.mZeroA.mMesh.onclick = this.hitZero;

	this.mZeroB = new Shape(100, 60,  450, 350,this.mSheet.mGame,"DIV","#0404B4","");
        this.addShape(this.mZeroB);
	this.mZeroB.mMesh.innerHTML = '0';
	this.mZeroB.mMesh.onclick = this.hitZero;
	this.mZeroB.mMesh.style.textAlign="center";	

	this.mKeyPadArray = new Array()
	this.mKeyPadArray.push(this.mOneA);
	this.mKeyPadArray.push(this.mOneB);
	this.mKeyPadArray.push(this.mTwoA);
	this.mKeyPadArray.push(this.mTwoB);
	this.mKeyPadArray.push(this.mThreeA);
	this.mKeyPadArray.push(this.mThreeB);
	this.mKeyPadArray.push(this.mFourA);
	this.mKeyPadArray.push(this.mFourB);
	this.mKeyPadArray.push(this.mFiveA);
	this.mKeyPadArray.push(this.mFiveB);
	this.mKeyPadArray.push(this.mSixA);
	this.mKeyPadArray.push(this.mSixB);
	this.mKeyPadArray.push(this.mSevenA);
	this.mKeyPadArray.push(this.mSevenB);
	this.mKeyPadArray.push(this.mEightA);
	this.mKeyPadArray.push(this.mEightB);
	this.mKeyPadArray.push(this.mNineA);
	this.mKeyPadArray.push(this.mNineB);
	this.mKeyPadArray.push(this.mZeroA);
	this.mKeyPadArray.push(this.mZeroB);

},

//virtual functions that can show and hide buttons??
showAnswerInputs: function()
{
	this.parent();

	if (this.mOneA)
        {
        	this.mOneA.setVisibility(true);
        }
	if (this.mOneB)
        {
        	this.mOneB.setVisibility(true);
        }
        if (this.mTwoA)
        {
                this.mTwoA.setVisibility(true);
        }
        if (this.mTwoB)
        {
                this.mTwoB.setVisibility(true);
        }
        if (this.mThreeA)
        {
                this.mThreeA.setVisibility(true);
        }
        if (this.mThreeB)
        {
                this.mThreeB.setVisibility(true);
        }
        if (this.mFourA)
        {
                this.mFourA.setVisibility(true);
        }
        if (this.mFourB)
        {
                this.mFourB.setVisibility(true);
        }
        if (this.mFiveA)
        {
                this.mFiveA.setVisibility(true);
        }
        if (this.mFiveB)
        {
                this.mFiveB.setVisibility(true);
        }
        if (this.mSixA)
        {
                this.mSixA.setVisibility(true);
        }
        if (this.mSixB)
        {
                this.mSixB.setVisibility(true);
        }
        if (this.mSevenA)
        {
                this.mSevenA.setVisibility(true);
        }
        if (this.mSevenB)
        {
                this.mSevenB.setVisibility(true);
        }
        if (this.mEightA)
        {
                this.mEightA.setVisibility(true);
        }
        if (this.mEightB)
        {
                this.mEightB.setVisibility(true);
        }
        if (this.mNineA)
        {
                this.mNineA.setVisibility(true);
        }
        if (this.mNineB)
        {
                this.mNineB.setVisibility(true);
        }
        if (this.mZeroA)
        {
                this.mZeroA.setVisibility(true);
        }
        if (this.mZeroB)
        {
                this.mZeroB.setVisibility(true);
        }
},

hideAnswerInputs: function()
{
	this.parent();

	if (this.mOneA)
        {
        	this.mOneA.setVisibility(false);
        }
	if (this.mOneB)
        {
        	this.mOneB.setVisibility(false);
        }
        if (this.mTwoA)
        {
                this.mTwoA.setVisibility(false);
        }
        if (this.mTwoB)
        {
                this.mTwoB.setVisibility(false);
        }
        if (this.mThreeA)
        {
                this.mThreeA.setVisibility(false);
        }
        if (this.mThreeB)
        {
                this.mThreeB.setVisibility(false);
        }
        if (this.mFourA)
        {
                this.mFourA.setVisibility(false);
        }
        if (this.mFourB)
        {
                this.mFourB.setVisibility(false);
        }
        if (this.mFiveA)
        {
                this.mFiveA.setVisibility(false);
        }
        if (this.mFiveB)
        {
                this.mFiveB.setVisibility(false);
        }
        if (this.mSixA)
        {
                this.mSixA.setVisibility(false);
        }
        if (this.mSixB)
        {
                this.mSixB.setVisibility(false);
        }
        if (this.mSevenA)
        {
                this.mSevenA.setVisibility(false);
        }
        if (this.mSevenB)
        {
                this.mSevenB.setVisibility(false);
        }
        if (this.mEightA)
        {
                this.mEightA.setVisibility(false);
        }
        if (this.mEightB)
        {
                this.mEightB.setVisibility(false);
        }
        if (this.mNineA)
        {
                this.mNineA.setVisibility(false);
        }
        if (this.mNineB)
        {
                this.mNineB.setVisibility(false);
        }
        if (this.mZeroA)
        {
                this.mZeroA.setVisibility(false);
        }
        if (this.mZeroB)
        {
                this.mZeroB.setVisibility(false);
        }
},

isItRightYet: function()
{
	if (APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value == APPLICATION.mGame.mSheet.getItem().mAnswerArray[0])
	{
		//lets submit	
		APPLICATION.mGame.mSheet.getItem().setUserAnswer(APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value);
	} 
},

hitOne: function()
{
        if (APPLICATION.mGame)
        {
        	if (APPLICATION.mGame.mSheet)
                {
                	if (APPLICATION.mGame.mSheet.getItem())
                        {
				var v = APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value; 
                               	APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value = '' + v + '1';
				APPLICATION.mGame.mSheet.getItem().isItRightYet();	
                        }
                }
	}
},

hitTwo: function()
{
        if (APPLICATION.mGame)
        {
                if (APPLICATION.mGame.mSheet)
                {
                        if (APPLICATION.mGame.mSheet.getItem())
                        {
                                var v = APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value;
                                APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value = '' + v + '2';
                                APPLICATION.mGame.mSheet.getItem().isItRightYet();
                        }
                }
        }
},

hitThree: function()
{
        if (APPLICATION.mGame)
        {
                if (APPLICATION.mGame.mSheet)
                {
                        if (APPLICATION.mGame.mSheet.getItem())
                        {
                                var v = APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value;
                                APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value = '' + v + '3';
                                APPLICATION.mGame.mSheet.getItem().isItRightYet();
                        }
                }
        }
},

hitFour: function()
{
        if (APPLICATION.mGame)
        {
                if (APPLICATION.mGame.mSheet)
                {
                        if (APPLICATION.mGame.mSheet.getItem())
                        {
                                var v = APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value;
                                APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value = '' + v + '4';
                                APPLICATION.mGame.mSheet.getItem().isItRightYet();
                        }
                }
        }
},

hitFive: function()
{
        if (APPLICATION.mGame)
        {
                if (APPLICATION.mGame.mSheet)
                {
                        if (APPLICATION.mGame.mSheet.getItem())
                        {
                                var v = APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value;
                                APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value = '' + v + '5';
                                APPLICATION.mGame.mSheet.getItem().isItRightYet();
                        }
                }
        }
},

hitSix: function()
{
        if (APPLICATION.mGame)
        {
                if (APPLICATION.mGame.mSheet)
                {
                        if (APPLICATION.mGame.mSheet.getItem())
                        {
                                var v = APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value;
                                APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value = '' + v + '6';
                                APPLICATION.mGame.mSheet.getItem().isItRightYet();
                        }
                }
        }
},

hitSeven: function()
{
        if (APPLICATION.mGame)
        {
                if (APPLICATION.mGame.mSheet)
                {
                        if (APPLICATION.mGame.mSheet.getItem())
                        {
                                var v = APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value;
                                APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value = '' + v + '7';
                                APPLICATION.mGame.mSheet.getItem().isItRightYet();
                        }
                }
        }
},

hitEight: function()
{
        if (APPLICATION.mGame)
        {
                if (APPLICATION.mGame.mSheet)
                {
                        if (APPLICATION.mGame.mSheet.getItem())
                        {
                                var v = APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value;
                                APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value = '' + v + '8';
                                APPLICATION.mGame.mSheet.getItem().isItRightYet();
                        }
                }
        }
},

hitNine: function()
{
        if (APPLICATION.mGame)
        {
                if (APPLICATION.mGame.mSheet)
                {
                        if (APPLICATION.mGame.mSheet.getItem())
                        {
                                var v = APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value;
                                APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value = '' + v + '9';
                                APPLICATION.mGame.mSheet.getItem().isItRightYet();
                        }
                }
        }
},

hitZero: function()
{
        if (APPLICATION.mGame)
        {
                if (APPLICATION.mGame.mSheet)
                {
                        if (APPLICATION.mGame.mSheet.getItem())
                        {
                                var v = APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value;
                                APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value = '' + v + '0';
                                APPLICATION.mGame.mSheet.getItem().isItRightYet();
                        }
                }
        }
}


});
/*

	this.mColOneArray = new Array();
	this.mColTwoArray = new Array();

	this.mColOneArray.push('Question'); 		
	this.mColOneArray.push('2x2'); 		
	this.mColOneArray.push('2x3'); 		
	this.mColOneArray.push('3x2'); 		
	this.mColOneArray.push('2x4'); 		
	this.mColOneArray.push('4x2'); 		
	this.mColOneArray.push('2x5'); 		
	this.mColOneArray.push('5x2'); 		
	this.mColOneArray.push('2x6'); 		
	this.mColOneArray.push('6x2'); 		
	this.mColOneArray.push('2x7'); 		
	this.mColOneArray.push('7x2'); 		
	this.mColOneArray.push('2x8'); 		
	this.mColOneArray.push('8x2'); 		
	this.mColOneArray.push('2x9'); 		
	this.mColOneArray.push('9x2'); 		
	this.mColOneArray.push('2x10'); 		
	this.mColOneArray.push('10x2'); 		
	
	this.mColTwoArray.push('Percent'); 		
	this.mColTwoArray.push('90'); 		
	this.mColTwoArray.push('80'); 		
	this.mColTwoArray.push('90'); 		
	this.mColTwoArray.push('70'); 		
	this.mColTwoArray.push('90'); 		
	this.mColTwoArray.push('90'); 		
	this.mColTwoArray.push('90'); 		
	this.mColTwoArray.push('80'); 		
	this.mColTwoArray.push('90'); 		
	this.mColTwoArray.push('90'); 		
	this.mColTwoArray.push('90'); 		
	this.mColTwoArray.push('30'); 		
	this.mColTwoArray.push('10'); 		
	this.mColTwoArray.push('90'); 		
	this.mColTwoArray.push('20'); 		
	this.mColTwoArray.push('90'); 		
	this.mColTwoArray.push('90'); 		
	
	this.mSheet.mGame.mApplication.mData = new Array();
	this.mSheet.mGame.mApplication.mData.push(this.mColOneArray);
	this.mSheet.mGame.mApplication.mData.push(this.mColTwoArray);

	this.mBreslinTable = new BreslinTable(this.mSheet.mGame.mApplication.mData);
*/

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_1',3.0701,'3.oa.c.7','2x2');
*/
var i_3_oa_c_7__1 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_1';
        this.setQuestion('2 x 2');
        this.setAnswer('4',0);

}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_2',3.0702,'3.oa.c.7','2x3');
*/
var i_3_oa_c_7__2 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_2';
        this.setQuestion('2x3');
        this.setAnswer('6',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_3',3.0703,'3.oa.c.7','3x2');
*/
var i_3_oa_c_7__3 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_3';
        this.setQuestion('3x2');
        this.setAnswer('6',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_4',3.0704,'3.oa.c.7','2x4');
*/
var i_3_oa_c_7__4 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_4';
        this.setQuestion('2x4');
        this.setAnswer('8',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_5',3.0705,'3.oa.c.7','4x2');
*/
var i_3_oa_c_7__5 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_5';
        this.setQuestion('4x2');
        this.setAnswer('8',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_6',3.0706,'3.oa.c.7','2x5');
*/
var i_3_oa_c_7__6 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_6';
        this.setQuestion('2x5');
        this.setAnswer('10',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_7',3.0707,'3.oa.c.7','5x2');
*/
var i_3_oa_c_7__7 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_7';
        this.setQuestion('5x2');
        this.setAnswer('10',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_8',3.0708,'3.oa.c.7','2x6');
*/
var i_3_oa_c_7__8 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_8';
        this.setQuestion('2x6');
        this.setAnswer('12',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_9',3.0709,'3.oa.c.7','6x2');
*/
var i_3_oa_c_7__9 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_9';
        this.setQuestion('6x2');
        this.setAnswer('12',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_10',3.0710,'3.oa.c.7','2x7');
*/
var i_3_oa_c_7__10 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_10';
        this.setQuestion('2x7');
        this.setAnswer('14',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_11',3.0711,'3.oa.c.7','7x2');
*/
var i_3_oa_c_7__11 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_11';
        this.setQuestion('7x2');
        this.setAnswer('14',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_12',3.0712,'3.oa.c.7','2x8');
*/
var i_3_oa_c_7__12 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_12';
        this.setQuestion('2x8');
        this.setAnswer('16',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_13',3.0713,'3.oa.c.7','8x2');
*/
var i_3_oa_c_7__13 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_13';
        this.setQuestion('8x2');
        this.setAnswer('16',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_14',3.0714,'3.oa.c.7','2x9');
*/
var i_3_oa_c_7__14 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_14';
        this.setQuestion('2x9');
        this.setAnswer('18',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_15',3.0715,'3.oa.c.7','9x2');
*/
var i_3_oa_c_7__15 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_15';
        this.setQuestion('9x2');
        this.setAnswer('18',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_16',3.0716,'3.oa.c.7','2x10');
*/
var i_3_oa_c_7__16 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_16';
        this.setQuestion('2x10');
        this.setAnswer('20',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_17',3.0717,'3.oa.c.7','10x2');
*/
var i_3_oa_c_7__17 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_17';
        this.setQuestion('10x2');
        this.setAnswer('20',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_18',3.0718,'3.oa.c.7','3x3');
*/
var i_3_oa_c_7__18 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_18';
        this.setQuestion('3x3');
        this.setAnswer('9',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_19',3.0719,'3.oa.c.7','3x4');
*/
var i_3_oa_c_7__19 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_19';
        this.setQuestion('3x4');
        this.setAnswer('12',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_20',3.0720,'3.oa.c.7','4x3');
*/
var i_3_oa_c_7__20 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_20';
        this.setQuestion('4x3');
        this.setAnswer('12',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_21',3.0721,'3.oa.c.7','3x5');
*/
var i_3_oa_c_7__21 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_21';
        this.setQuestion('3x5');
        this.setAnswer('15',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_22',3.0722,'3.oa.c.7','5x3');
*/
var i_3_oa_c_7__22 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_22';
        this.setQuestion('5x3');
        this.setAnswer('15',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_23',3.0723,'3.oa.c.7','3x6');
*/
var i_3_oa_c_7__23 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_23';
        this.setQuestion('3x6');
        this.setAnswer('18',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_24',3.0724,'3.oa.c.7','6x3');
*/
var i_3_oa_c_7__24 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_24';
        this.setQuestion('6x3');
        this.setAnswer('18',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_25',3.0725,'3.oa.c.7','3x7');
*/
var i_3_oa_c_7__25 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_25';
        this.setQuestion('3x7');
        this.setAnswer('21',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_26',3.0726,'3.oa.c.7','7x3');
*/
var i_3_oa_c_7__26 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_26';
        this.setQuestion('7x3');
        this.setAnswer('21',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_27',3.0727,'3.oa.c.7','3x8');
*/
var i_3_oa_c_7__27 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_27';
        this.setQuestion('3x8');
        this.setAnswer('24',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_28',3.0728,'3.oa.c.7','8x3');
*/
var i_3_oa_c_7__28 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_28';
        this.setQuestion('8x3');
        this.setAnswer('24',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_29',3.0729,'3.oa.c.7','3x9');
*/
var i_3_oa_c_7__29 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_29';
        this.setQuestion('3x9');
        this.setAnswer('27',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_30',3.0730,'3.oa.c.7','9x3');
*/
var i_3_oa_c_7__30 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_30';
        this.setQuestion('9x3');
        this.setAnswer('27',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_31',3.0731,'3.oa.c.7','3x10');
*/
var i_3_oa_c_7__31 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_31';
        this.setQuestion('3x10');
        this.setAnswer('30',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_32',3.0732,'3.oa.c.7','10x3');
*/
var i_3_oa_c_7__32 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_32';
        this.setQuestion('10x3');
        this.setAnswer('30',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_33',3.0733,'3.oa.c.7','4x4');
*/
var i_3_oa_c_7__33 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_33';
        this.setQuestion('4x4');
        this.setAnswer('16',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_34',3.0734,'3.oa.c.7','4x5');
*/
var i_3_oa_c_7__34 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_34';
        this.setQuestion('4x5');
        this.setAnswer('20',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_35',3.0735,'3.oa.c.7','5x4');
*/
var i_3_oa_c_7__35 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_35';
        this.setQuestion('5x4');
        this.setAnswer('20',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_36',3.0736,'3.oa.c.7','4x6');
*/
var i_3_oa_c_7__36 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_36';
        this.setQuestion('4x6');
        this.setAnswer('24',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_37',3.0737,'3.oa.c.7','6x4');
*/
var i_3_oa_c_7__37 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_37';
        this.setQuestion('6x4');
        this.setAnswer('24',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_38',3.0738,'3.oa.c.7','4x7');
*/
var i_3_oa_c_7__38 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_38';
        this.setQuestion('4x7');
        this.setAnswer('28',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_39',3.0739,'3.oa.c.7','7x4');
*/
var i_3_oa_c_7__39 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_39';
        this.setQuestion('7x4');
        this.setAnswer('28',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_40',3.0740,'3.oa.c.7','4x8');
*/
var i_3_oa_c_7__40 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_40';
        this.setQuestion('4x8');
        this.setAnswer('32',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_41',3.0741,'3.oa.c.7','8x4');
*/
var i_3_oa_c_7__41 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_41';
        this.setQuestion('8x4');
        this.setAnswer('32',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_42',3.0742,'3.oa.c.7','4x9');
*/
var i_3_oa_c_7__42 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_42';
        this.setQuestion('4x9');
        this.setAnswer('36',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_43',3.0743,'3.oa.c.7','9x4');
*/
var i_3_oa_c_7__43 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_43';
        this.setQuestion('9x4');
        this.setAnswer('36',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_44',3.0744,'3.oa.c.7','4x10');
*/
var i_3_oa_c_7__44 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_44';
        this.setQuestion('4x10');
        this.setAnswer('40',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_45',3.0745,'3.oa.c.7','10x4');
*/
var i_3_oa_c_7__45 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_45';
        this.setQuestion('10x4');
        this.setAnswer('40',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_46',3.0746,'3.oa.c.7','5x5');
*/
var i_3_oa_c_7__46 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_46';
        this.setQuestion('5x5');
        this.setAnswer('25',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_47',3.0747,'3.oa.c.7','5x6');
*/
var i_3_oa_c_7__47 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_47';
        this.setQuestion('5x6');
        this.setAnswer('30',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_48',3.0748,'3.oa.c.7','6x5');
*/
var i_3_oa_c_7__48 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_48';
        this.setQuestion('6x5');
        this.setAnswer('30',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_49',3.0749,'3.oa.c.7','5x7');
*/
var i_3_oa_c_7__49 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_49';
        this.setQuestion('5x7');
        this.setAnswer('35',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_50',3.0750,'3.oa.c.7','7x5');
*/
var i_3_oa_c_7__50 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_50';
        this.setQuestion('7x5');
        this.setAnswer('35',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_51',3.0751,'3.oa.c.7','5x8');
*/
var i_3_oa_c_7__51 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_51';
        this.setQuestion('5x8');
        this.setAnswer('40',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_52',3.0752,'3.oa.c.7','8x5');
*/
var i_3_oa_c_7__52 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_52';
        this.setQuestion('8x5');
        this.setAnswer('40',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_53',3.0753,'3.oa.c.7','5x9');
*/
var i_3_oa_c_7__53 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_53';
        this.setQuestion('5x9');
        this.setAnswer('45',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_54',3.0754,'3.oa.c.7','9x5');
*/
var i_3_oa_c_7__54 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_54';
        this.setQuestion('9x5');
        this.setAnswer('45',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_55',3.0755,'3.oa.c.7','5x10');
*/
var i_3_oa_c_7__55 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_55';
        this.setQuestion('5x10');
        this.setAnswer('50',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_56',3.0756,'3.oa.c.7','10x5');
*/
var i_3_oa_c_7__56 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_56';
        this.setQuestion('10x5');
        this.setAnswer('50',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_57',3.0757,'3.oa.c.7','6x6');
*/
var i_3_oa_c_7__57 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_57';
        this.setQuestion('6x6');
        this.setAnswer('36',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_58',3.0758,'3.oa.c.7','6x7');
*/
var i_3_oa_c_7__58 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_58';
        this.setQuestion('6x7');
        this.setAnswer('42',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_59',3.0759,'3.oa.c.7','7x6');
*/
var i_3_oa_c_7__59 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_59';
        this.setQuestion('7x6');
        this.setAnswer('42',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_60',3.0760,'3.oa.c.7','6x8');
*/
var i_3_oa_c_7__60 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_60';
        this.setQuestion('6x8');
        this.setAnswer('48',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_61',3.0761,'3.oa.c.7','8x6');
*/
var i_3_oa_c_7__61 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_61';
        this.setQuestion('8x6');
        this.setAnswer('48',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_62',3.0762,'3.oa.c.7','6x9');
*/
var i_3_oa_c_7__62 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_62';
        this.setQuestion('6x9');
        this.setAnswer('54',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_63',3.0763,'3.oa.c.7','9x6');
*/
var i_3_oa_c_7__63 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_63';
        this.setQuestion('9x6');
        this.setAnswer('54',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_64',3.0764,'3.oa.c.7','6x10');
*/
var i_3_oa_c_7__64 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_64';
        this.setQuestion('6x10');
        this.setAnswer('60',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_65',3.0765,'3.oa.c.7','10x6');
*/
var i_3_oa_c_7__65 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_65';
        this.setQuestion('10x6');
        this.setAnswer('60',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_66',3.0766,'3.oa.c.7','7x7');
*/
var i_3_oa_c_7__66 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_66';
        this.setQuestion('7x7');
        this.setAnswer('49',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_67',3.0767,'3.oa.c.7','7x8');
*/
var i_3_oa_c_7__67 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_67';
        this.setQuestion('7x8');
        this.setAnswer('56',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_68',3.0768,'3.oa.c.7','8x7');
*/
var i_3_oa_c_7__68 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_68';
        this.setQuestion('8x7');
        this.setAnswer('56',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_69',3.0769,'3.oa.c.7','7x9');
*/
var i_3_oa_c_7__69 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_69';
        this.setQuestion('7x9');
        this.setAnswer('63',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_70',3.0770,'3.oa.c.7','9x7');
*/
var i_3_oa_c_7__70 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_70';
        this.setQuestion('9x7');
        this.setAnswer('63',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_71',3.0771,'3.oa.c.7','7x10');
*/
var i_3_oa_c_7__71 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_71';
        this.setQuestion('7x10');
        this.setAnswer('70',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_72',3.0772,'3.oa.c.7','10x7');
*/
var i_3_oa_c_7__72 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_72';
        this.setQuestion('10x7');
        this.setAnswer('70',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_73',3.0773,'3.oa.c.7','8x8');
*/
var i_3_oa_c_7__73 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_73';
        this.setQuestion('8x8');
        this.setAnswer('64',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_74',3.0774,'3.oa.c.7','8x9');
*/
var i_3_oa_c_7__74 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_74';
        this.setQuestion('8x9');
        this.setAnswer('72',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_75',3.0775,'3.oa.c.7','9x8');
*/
var i_3_oa_c_7__75 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_75';
        this.setQuestion('9x8');
        this.setAnswer('72',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_76',3.0776,'3.oa.c.7','8x10');
*/
var i_3_oa_c_7__76 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_76';
        this.setQuestion('8x10');
        this.setAnswer('80',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_77',3.0777,'3.oa.c.7','10x8');
*/
var i_3_oa_c_7__77 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_77';
        this.setQuestion('10x8');
        this.setAnswer('80',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_78',3.0778,'3.oa.c.7','9x9');
*/
var i_3_oa_c_7__78 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_78';
        this.setQuestion('9x9');
        this.setAnswer('81',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_79',3.0779,'3.oa.c.7','9x10');
*/
var i_3_oa_c_7__79 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_79';
        this.setQuestion('9x10');
        this.setAnswer('90',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_80',3.0780,'3.oa.c.7','10x9');
*/
var i_3_oa_c_7__80 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_80';
        this.setQuestion('10x9');
        this.setAnswer('90',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_81',3.0781,'3.oa.c.7','10x10');
*/
var i_3_oa_c_7__81 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_81';
        this.setQuestion('10x10');
        this.setAnswer('100',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_82',3.0782,'3.oa.c.7','2x1');
*/
var i_3_oa_c_7__82 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_82';
        this.setQuestion('2x1');
        this.setAnswer('2',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_83',3.0783,'3.oa.c.7','3x1');
*/
var i_3_oa_c_7__83 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_83';
        this.setQuestion('3x1');
        this.setAnswer('3',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_84',3.0784,'3.oa.c.7','4x1');
*/
var i_3_oa_c_7__84 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_84';
        this.setQuestion('4x1');
        this.setAnswer('4',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_85',3.0785,'3.oa.c.7','5x1');
*/
var i_3_oa_c_7__85 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_85';
        this.setQuestion('5x1');
        this.setAnswer('5',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_86',3.0786,'3.oa.c.7','6x1');
*/
var i_3_oa_c_7__86 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_86';
        this.setQuestion('6x1');
        this.setAnswer('6',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_87',3.0787,'3.oa.c.7','7x1');
*/
var i_3_oa_c_7__87 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_87';
        this.setQuestion('7x1');
        this.setAnswer('7',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_88',3.0788,'3.oa.c.7','8x1');
*/
var i_3_oa_c_7__88 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_88';
        this.setQuestion('8x1');
        this.setAnswer('8',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_89',3.0789,'3.oa.c.7','9x1');
*/
var i_3_oa_c_7__89 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_89';
        this.setQuestion('9x1');
        this.setAnswer('9',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_90',3.0790,'3.oa.c.7','10x1');
*/
var i_3_oa_c_7__90 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_90';
        this.setQuestion('10x1');
        this.setAnswer('10',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_91',3.0791,'3.oa.c.7','1x1');
*/
var i_3_oa_c_7__91 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_91';
        this.setQuestion('1x1');
        this.setAnswer('1',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_92',3.0792,'3.oa.c.7','1x2');
*/
var i_3_oa_c_7__92 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_92';
        this.setQuestion('1x2');
        this.setAnswer('2',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_93',3.0793,'3.oa.c.7','1x3');
*/
var i_3_oa_c_7__93 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_93';
        this.setQuestion('1x3');
        this.setAnswer('3',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_94',3.0794,'3.oa.c.7','1x4');
*/
var i_3_oa_c_7__94 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_94';
        this.setQuestion('1x4');
        this.setAnswer('4',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_95',3.0795,'3.oa.c.7','1x5');
*/
var i_3_oa_c_7__95 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_95';
        this.setQuestion('1x5');
        this.setAnswer('5',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_96',3.0796,'3.oa.c.7','1x6');
*/
var i_3_oa_c_7__96 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_96';
        this.setQuestion('1x6');
        this.setAnswer('6',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_97',3.0797,'3.oa.c.7','1x7');
*/
var i_3_oa_c_7__97 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_97';
        this.setQuestion('1x7');
        this.setAnswer('7',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_98',3.0798,'3.oa.c.7','1x8');
*/
var i_3_oa_c_7__98 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_98';
        this.setQuestion('1x8');
        this.setAnswer('8',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_99',3.0799,'3.oa.c.7','1x9');
*/
var i_3_oa_c_7__99 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_99';
        this.setQuestion('1x9');
        this.setAnswer('9',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_991',3.07991,'3.oa.c.7','1x10');
*/
var i_3_oa_c_7__991 = new Class(
{
Extends: TimesTables,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '3.oa.c.7_991';
        this.setQuestion('1x10');
        this.setAnswer('10',0);
}
});
