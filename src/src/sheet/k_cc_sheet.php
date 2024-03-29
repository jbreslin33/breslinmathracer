var k_cc_Sheet = new Class(
{
Extends: Sheet,

initialize: function(game)
{
	this.parent(game);
	
	this.mIDArray.push('k.cc.a.1_1');
	this.mIDArray.push('k.cc.a.1_2');
	
	this.mIDArray.push('k.cc.a.2_1');
	this.mIDArray.push('k.cc.a.2_2');
	this.mIDArray.push('k.cc.a.2_3');
	this.mIDArray.push('k.cc.a.2_4');
	this.mIDArray.push('k.cc.a.2_5');
	this.mIDArray.push('k.cc.a.2_6');
	this.mIDArray.push('k.cc.a.2_7');
	this.mIDArray.push('k.cc.a.2_8');
	this.mIDArray.push('k.cc.a.2_9');
	this.mIDArray.push('k.cc.a.2_10');
	this.mIDArray.push('k.cc.a.2_11');

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
        else //its over....check here????
        {
                APPLICATION.mEvaluationsID = 41;
        }
},

createItem: function()
{
        this.pickItem();

        if (APPLICATION.mEvaluationsID == 41)
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
                itemAttempt.setEvaluationsID(25);
        }
        else
        {
                APPLICATION.log('no item picked by pickers!');
        }

        //set this as last for next run
        APPLICATION.mQuestionTypeLast = APPLICATION.mQuestionTypeCurrent;
}

});
