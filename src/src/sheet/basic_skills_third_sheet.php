var BasicSkillsThirdSheet = new Class(
{
Extends: Sheet,

initialize: function(game)
{
	this.parent(game);
	
	//division 2x4
	this.mIDArray.push('5.nbt.b.6_4');

	//multiplication 3x2
	this.mIDArray.push('5.nbt.b.5_4');

	//add decimals 	
	var r = Math.floor(Math.random()*4+1); //1-4
	this.mIDArray.push('5.nbt.b.7_' + r);
	
	//subtract decimals  	
	r = Math.floor(Math.random()*3+6); //6-8
	this.mIDArray.push('5.nbt.b.7_' + r);

	//multiply decimals	
	r = Math.floor(Math.random()*5+10); //10-14
	this.mIDArray.push('5.nbt.b.7_' + r);
	
	//divide decimals	
	r = Math.floor(Math.random()*5+15); //15-19
	this.mIDArray.push('5.nbt.b.7_' + r);

	//addition fraction unlike denominators
	r = Math.floor(Math.random()*4+1); //1-4
	this.mIDArray.push('5.nf.a.1_' + r);
	
	//subtraction fraction unlike denominators
	r = Math.floor(Math.random()*4+5); //5-8
	this.mIDArray.push('5.nf.a.1_' + r);

	//multiply fractions 
	r = Math.floor(Math.random()*2+1); //1-2
	this.mIDArray.push('5.nf.b.4_' + r);

	//divide fraction with unit numerator by whole number
	this.mIDArray.push('5.nf.b.7.a_5');
			  //5.nf.b.7.a_5

	this.mCurrentElement = 0;
	this.shuffle(500);
},

pickItem: function()
{
        if (this.mCurrentElement < this.mIDArray.length)
        {
                APPLICATION.mQuestionTypeCurrent = this.mIDArray[this.mCurrentElement];
                this.mCurrentElement++;
        }
        else
        {
                APPLICATION.mEvaluationsID = 1;
        }
},

createItem: function()
{
        this.pickItem();

        if (APPLICATION.mEvaluationsID == 1)
        {
                return;
        }

        var pick = 0;

        if (pick == 0)
        {
                pick = this.mPicker.getItem(APPLICATION.mQuestionTypeCurrent);
        }
        if (pick == 0)
        {
                pick = this.mPickerBrian.getItem(APPLICATION.mQuestionTypeCurrent);
        }
        if (pick == 0)
        {
                pick = this.mPickerJim.getItem(APPLICATION.mQuestionTypeCurrent);
        }

        //if you got an item then add it to sheet
        if (pick != 0)
        {
                this.setItem(pick);
                var itemAttempt = new ItemAttempt();
                APPLICATION.mItemAttemptsArray.push(itemAttempt);
                pick.setItemAttempt(itemAttempt);
                itemAttempt.mType = pick.mType;
                itemAttempt.setEvaluationsID(22);
        }
        else
        {
                APPLICATION.log('no item picked by pickers!');
        }

        //set this as last for next run
        APPLICATION.mQuestionTypeLast = APPLICATION.mQuestionTypeCurrent;
}

});
