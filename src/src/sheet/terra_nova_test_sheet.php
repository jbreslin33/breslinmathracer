var TerraNovaTestSheet = new Class(
{
Extends: Sheet,

initialize: function(game)
{
	this.parent(game);

        this.mIDArray.push('' + '2.oa.a.1_21'); //1
        this.mIDArray.push('' + '3.oa.a.3_6'); //2
        this.mIDArray.push('' + '5.nbt.b.7_20'); //3
        this.mIDArray.push('' + '1.oa.a.1_11'); //4
        this.mIDArray.push('' + '4.oa.a.3_13'); //5
        this.mIDArray.push('' + '5.oa.a.1_23'); //6
        this.mIDArray.push('' + '4.oa.a.3_14'); //7
        this.mIDArray.push('' + '5.nbt.b.7_21'); //8
        this.mIDArray.push('' + '2.oa.a.1_22'); //9
        this.mIDArray.push('' + '4.oa.a.2_26'); //10
        this.mIDArray.push('' + '2.oa.a.1_23'); //11
        this.mIDArray.push('' + '5.oa.a.1_24'); //12
 	this.mIDArray.push('' + '3.md.b.4_1'); //13
        this.mIDArray.push('' + '4.g.a.2_29'); //14
 	this.mIDArray.push('' + '3.md.b.3_1'); //15
 	this.mIDArray.push('' + '3.g.a.1_1'); //16
	this.mIDArray.push('' + '5.oa.b.3_8'); //17
        this.mIDArray.push('' + '4.nf.a.1_12'); //18
        this.mIDArray.push('' + '2.oa.a.1_24'); //19
        this.mIDArray.push('' + '2.oa.a.1_25'); //20
        this.mIDArray.push('' + '5.oa.a.1_25'); //21
        this.mIDArray.push('' + '2.oa.a.1_26'); //22
 	
	//skip pyramid 23 for now
        this.mIDArray.push('' + '3.oa.a.3_7'); //24
        this.mIDArray.push('' + '3.oa.a.3_8'); //25
        this.mIDArray.push('' + '4.md.a.2_26'); //26
        //skip 27 for now
        this.mIDArray.push('' + '4.oa.c.5_16'); //28
        this.mIDArray.push('' + '4.oa.b.4_23'); //29
        this.mIDArray.push('' + '4.md.a.2_27'); //30
        this.mIDArray.push('' + '4.oa.b.4_24'); //31
        this.mIDArray.push('' + '5.oa.b.3_9'); //33
        this.mIDArray.push('' + '5.nbt.b.6_9'); //34
        this.mIDArray.push('' + '5.md.c.5.a_4'); //35
 	this.mIDArray.push('' + '5.g.a.1_6'); //36
        this.mIDArray.push('' + '5.nbt.b.7_22'); //37 part a
        this.mIDArray.push('' + '5.md.a.1_16'); //38 part b
        this.mIDArray.push('' + '5.nf.a.2_9'); //39 part c

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
