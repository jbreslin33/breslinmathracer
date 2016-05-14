var AddSubtractWithinTwentySheet = new Class(
{
Extends: Sheet,

initialize: function(game)
{
	this.parent(game);

        //fluent fast add within 10 but answers greater than 5
        this.mIDArray.push('1.oa.c.6_12'); 3+3
        this.mIDArray.push('1.oa.c.6_13'); 4+4
        this.mIDArray.push('1.oa.c.6_14'); 5+5
        this.mIDArray.push('1.oa.c.6_33'); 5+1
        this.mIDArray.push('1.oa.c.6_34'); 6+1
        this.mIDArray.push('1.oa.c.6_35'); 7+1
        this.mIDArray.push('1.oa.c.6_36'); 8+1
        this.mIDArray.push('1.oa.c.6_33'); 9+1
        this.mIDArray.push('1.oa.c.6_38'); 4+2
        this.mIDArray.push('1.oa.c.6_39'); 5+2
        this.mIDArray.push('1.oa.c.6_40'); 6+2
        this.mIDArray.push('1.oa.c.6_41'); 7+2
        this.mIDArray.push('1.oa.c.6_42'); 8+2
        this.mIDArray.push('1.oa.c.6_45'); 4+3
        this.mIDArray.push('1.oa.c.6_46'); 5+3
        this.mIDArray.push('1.oa.c.6_47'); 6+3
        this.mIDArray.push('1.oa.c.6_48'); 7+3
        this.mIDArray.push('1.oa.c.6_49'); 2+4
        this.mIDArray.push('1.oa.c.6_50'); 3+4
        this.mIDArray.push('1.oa.c.6_52'); 5+4
        this.mIDArray.push('1.oa.c.6_53'); 6+4
        this.mIDArray.push('1.oa.c.6_54'); 1+5
        this.mIDArray.push('1.oa.c.6_55'); 2+5
        this.mIDArray.push('1.oa.c.6_56'); 3+5
        this.mIDArray.push('1.oa.c.6_57'); 4+5
        this.mIDArray.push('1.oa.c.6_60'); 1+6
        this.mIDArray.push('1.oa.c.6_61'); 2+6
        this.mIDArray.push('1.oa.c.6_62'); 3+6
        this.mIDArray.push('1.oa.c.6_63'); 4+6
        this.mIDArray.push('1.oa.c.6_65'); 1+7
        this.mIDArray.push('1.oa.c.6_66'); 2+7
        this.mIDArray.push('1.oa.c.6_67'); 3+7
        this.mIDArray.push('1.oa.c.6_69'); 1+8
        this.mIDArray.push('1.oa.c.6_70'); 2+8
        this.mIDArray.push('1.oa.c.6_72'); 1+9

        //fluent fast add within 10 but both numbers greater than than 5
        this.mIDArray.push('1.oa.c.6_79'); 6-1
        this.mIDArray.push('1.oa.c.6_80'); 7-1
        this.mIDArray.push('1.oa.c.6_81'); 8-1
        this.mIDArray.push('1.oa.c.6_82'); 9-1
        this.mIDArray.push('1.oa.c.6_83'); 10-1
        this.mIDArray.push('1.oa.c.6_84'); 6-2
        this.mIDArray.push('1.oa.c.6_85'); 7-2
        this.mIDArray.push('1.oa.c.6_86'); 8-2
        this.mIDArray.push('1.oa.c.6_87'); 9-2
        this.mIDArray.push('1.oa.c.6_88'); 10-2
        this.mIDArray.push('1.oa.c.6_89'); 6-3
        this.mIDArray.push('1.oa.c.6_90'); 7-3
        this.mIDArray.push('1.oa.c.6_91'); 8-3
        this.mIDArray.push('1.oa.c.6_92'); 9-3
        this.mIDArray.push('1.oa.c.6_93'); 10-3
        this.mIDArray.push('1.oa.c.6_94'); 6-4
        this.mIDArray.push('1.oa.c.6_95'); 7-4
        this.mIDArray.push('1.oa.c.6_96'); 8-4
        this.mIDArray.push('1.oa.c.6_97'); 9-4
        this.mIDArray.push('1.oa.c.6_98'); 10-4
        this.mIDArray.push('1.oa.c.6_101'); 6-5
        this.mIDArray.push('1.oa.c.6_102'); 7-5
        this.mIDArray.push('1.oa.c.6_103'); 8-5
        this.mIDArray.push('1.oa.c.6_104'); 9-5
        this.mIDArray.push('1.oa.c.6_105'); 10-5
        this.mIDArray.push('1.oa.c.6_107'); 7-6
        this.mIDArray.push('1.oa.c.6_108'); 8-6
        this.mIDArray.push('1.oa.c.6_109'); 9-6
        this.mIDArray.push('1.oa.c.6_110'); 10-6
        this.mIDArray.push('1.oa.c.6_112'); 8-7
        this.mIDArray.push('1.oa.c.6_113'); 9-7
        this.mIDArray.push('1.oa.c.6_114'); 10-7
        this.mIDArray.push('1.oa.c.6_116'); 9-8
        this.mIDArray.push('1.oa.c.6_117'); 10-8
        this.mIDArray.push('1.oa.c.6_119'); 10-9
	
	
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
                itemAttempt.setEvaluationsID(28);
        }
        else
        {
                APPLICATION.log('no item picked by pickers!');
        }

        //set this as last for next run
        APPLICATION.mQuestionTypeLast = APPLICATION.mQuestionTypeCurrent;
}

});
