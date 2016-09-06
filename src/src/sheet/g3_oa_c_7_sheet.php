var g3_oa_c_7_Sheet = new Class(
{
Extends: Sheet,

initialize: function(game)
{
	this.parent(game);
	this.mIDArray.push('3.oa.c.7_1');
	this.mIDArray.push('3.oa.c.7_2');
	this.mIDArray.push('3.oa.c.7_3');
	this.mIDArray.push('3.oa.c.7_4');
	this.mIDArray.push('3.oa.c.7_5');
	this.mIDArray.push('3.oa.c.7_6');
	this.mIDArray.push('3.oa.c.7_7');
	this.mIDArray.push('3.oa.c.7_8');
	this.mIDArray.push('3.oa.c.7_9');
	this.mIDArray.push('3.oa.c.7_10');
	this.mIDArray.push('3.oa.c.7_11');
	this.mIDArray.push('3.oa.c.7_12');
	this.mIDArray.push('3.oa.c.7_13');
	this.mIDArray.push('3.oa.c.7_14');
	this.mIDArray.push('3.oa.c.7_15');
	//18 30
	this.mIDArray.push('3.oa.c.7_18');
	this.mIDArray.push('3.oa.c.7_19');
	this.mIDArray.push('3.oa.c.7_20');
	this.mIDArray.push('3.oa.c.7_21');
	this.mIDArray.push('3.oa.c.7_22');
	this.mIDArray.push('3.oa.c.7_23');
	this.mIDArray.push('3.oa.c.7_24');
	this.mIDArray.push('3.oa.c.7_25');
	this.mIDArray.push('3.oa.c.7_26');
	this.mIDArray.push('3.oa.c.7_27');
	this.mIDArray.push('3.oa.c.7_28');
	this.mIDArray.push('3.oa.c.7_29');
	this.mIDArray.push('3.oa.c.7_30');
	//33 43
	this.mIDArray.push('3.oa.c.7_33');
	this.mIDArray.push('3.oa.c.7_34');
	this.mIDArray.push('3.oa.c.7_35');
	this.mIDArray.push('3.oa.c.7_36');
	this.mIDArray.push('3.oa.c.7_37');
	this.mIDArray.push('3.oa.c.7_38');
	this.mIDArray.push('3.oa.c.7_39');
	this.mIDArray.push('3.oa.c.7_40');
	this.mIDArray.push('3.oa.c.7_41');
	this.mIDArray.push('3.oa.c.7_42');
	this.mIDArray.push('3.oa.c.7_43');
	//46 54
	this.mIDArray.push('3.oa.c.7_46');
	this.mIDArray.push('3.oa.c.7_47');
	this.mIDArray.push('3.oa.c.7_48');
	this.mIDArray.push('3.oa.c.7_49');
	this.mIDArray.push('3.oa.c.7_50');
	this.mIDArray.push('3.oa.c.7_51');
	this.mIDArray.push('3.oa.c.7_52');
	this.mIDArray.push('3.oa.c.7_53');
	this.mIDArray.push('3.oa.c.7_54');
	//57 63
	this.mIDArray.push('3.oa.c.7_57');
	this.mIDArray.push('3.oa.c.7_58');
	this.mIDArray.push('3.oa.c.7_59');
	this.mIDArray.push('3.oa.c.7_60');
	this.mIDArray.push('3.oa.c.7_61');
	this.mIDArray.push('3.oa.c.7_62');
	this.mIDArray.push('3.oa.c.7_63');
	//66 70
	this.mIDArray.push('3.oa.c.7_66');
	this.mIDArray.push('3.oa.c.7_67');
	this.mIDArray.push('3.oa.c.7_68');
	this.mIDArray.push('3.oa.c.7_69');
	this.mIDArray.push('3.oa.c.7_70');
	//73 75
	this.mIDArray.push('3.oa.c.7_73');
	this.mIDArray.push('3.oa.c.7_74');
	this.mIDArray.push('3.oa.c.7_75');
	//78
	this.mIDArray.push('3.oa.c.7_78');

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
                itemAttempt.setEvaluationsID(12);
        }
        else
        {
                APPLICATION.log('no item picked by pickers!');
        }

        //set this as last for next run
        APPLICATION.mQuestionTypeLast = APPLICATION.mQuestionTypeCurrent;
}

});
