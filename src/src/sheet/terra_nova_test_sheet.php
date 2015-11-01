var TerraNovaTestSheet = new Class(
{
Extends: Sheet,

initialize: function(game)
{
	this.parent(game);

	this.mIDArray.push('' + '1.oa.a.1_11');
        this.mIDArray.push('' + '2.oa.a.1_21');
        this.mIDArray.push('' + '3.oa.a.3_6');
        this.mIDArray.push('' + '4.oa.a.3_13');
        this.mIDArray.push('' + '5.nbt.b.7_20');
        this.mIDArray.push('' + '5.oa.a.1_23');
 	this.mIDArray.push('' + '4.oa.a.3_14');
 	this.mIDArray.push('' + '5.nbt.b.7_21');
   	this.mIDArray.push('' + '2.oa.a.1_22');
        this.mIDArray.push('' + '4.oa.a.2_26');
         
	this.mCurrentElement = 0;
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
               	itemAttempt.setEvaluationsID(16);
        }
        else
        {
                APPLICATION.log('no item picked by pickers!');
        }

        //set this as last for next run
 	APPLICATION.mQuestionTypeLast = APPLICATION.mQuestionTypeCurrent;
}
});
