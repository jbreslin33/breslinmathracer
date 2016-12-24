var g4_nf_b_3_c_Sheet = new Class(
{
Extends: Sheet,

initialize: function(game)
{
	this.parent(game);

        this.mIDArray.push('4.nf.b.3.c_1'); 
        this.mIDArray.push('4.nf.b.3.c_2'); 
        this.mIDArray.push('4.nf.b.3.c_3'); 

        this.mIDArray.push('4.nf.b.3.c_6'); 
        this.mIDArray.push('4.nf.b.3.c_7'); 
        this.mIDArray.push('4.nf.b.3.c_8'); 
        
	this.mIDArray.push('4.nf.b.3.c_11'); 
	this.mIDArray.push('4.nf.b.3.c_12'); 
	this.mIDArray.push('4.nf.b.3.c_13'); 
	
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
                itemAttempt.setEvaluationsID(30);
        }
        else
        {
                APPLICATION.log('no item picked by pickers!');
        }

        //set this as last for next run
        APPLICATION.mQuestionTypeLast = APPLICATION.mQuestionTypeCurrent;
}

});
