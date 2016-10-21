var g6_rp_Sheet = new Class(
{
Extends: Sheet,

initialize: function(game)
{
	this.parent(game);
       
	var a = Math.floor(Math.random()*3);
        if (a == 0)
                this.mIDArray.push('6.rp.a.1_1');
        if (a == 1)
                this.mIDArray.push('6.rp.a.1_2');
        if (a == 2)
                this.mIDArray.push('6.rp.a.1_3');
        if (a == 3)
                this.mIDArray.push('6.rp.a.1_6');
        if (a == 4)
                this.mIDArray.push('6.rp.a.1_7');
        if (a == 5)
                this.mIDArray.push('6.rp.a.1_8');
        if (a == 6)
                this.mIDArray.push('6.rp.a.1_9');
        if (a == 7)
                this.mIDArray.push('6.rp.a.1_10');
        if (a == 8)
                this.mIDArray.push('6.rp.a.1_11');
        if (a == 9)
                this.mIDArray.push('6.rp.a.1_12');
        if (a == 10)
                this.mIDArray.push('6.rp.a.1_13');
        if (a == 11)
                this.mIDArray.push('6.rp.a.1_14');
        if (a == 12)
                this.mIDArray.push('6.rp.a.1_15');
        if (a == 13)
                this.mIDArray.push('6.rp.a.1_16');
        if (a == 14)
                this.mIDArray.push('6.rp.a.1_17');



        this.mIDArray.push('3.nbt.a.1_1');
        this.mIDArray.push('3.nbt.a.2_1');
        this.mIDArray.push('3.nbt.a.2_2');

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
                itemAttempt.setEvaluationsID(36);
        }
        else
        {
                APPLICATION.log('no item picked by pickers!');
        }

        //set this as last for next run
        APPLICATION.mQuestionTypeLast = APPLICATION.mQuestionTypeCurrent;
}

});
