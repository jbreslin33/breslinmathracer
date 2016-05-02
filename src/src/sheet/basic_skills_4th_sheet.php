var BasicSkills4thSheet = new Class(
{
Extends: Sheet,

initialize: function(game)
{
	this.parent(game);
	//add 
	this.mIDArray.push('4.nbt.b.4_7');
	//subtract 
	this.mIDArray.push('4.nbt.b.4_14');

	//multiply 4x1 
	this.mIDArray.push('4.nbt.b.5_3');

	//multiply 2x2
	this.mIDArray.push('4.nbt.b.5_5');

	//divide 4x1 with remainder	
	this.mIDArray.push('4.nbt.b.6_7');

	//add mixed numbers	
	this.mIDArray.push('4.nf.b.3.c_3');
	
	//subtract mixed numbers	
	this.mIDArray.push('4.nf.b.3.c_8');
	
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
                itemAttempt.setEvaluationsID(20);
        }
        else
        {
                APPLICATION.log('no item picked by pickers!');
        }

        //set this as last for next run
        APPLICATION.mQuestionTypeLast = APPLICATION.mQuestionTypeCurrent;
}

});
