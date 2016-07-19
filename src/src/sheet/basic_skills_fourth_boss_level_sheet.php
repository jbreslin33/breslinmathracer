var BasicSkillsFourthBossLevelSheet = new Class(
{
Extends: Sheet,

initialize: function(game)
{
	this.parent(game);

	//ADVANCED

  	//subtract mixed numbers with borrowing
        this.mIDArray.push('4.nf.b.3.c_13');

	
	//divide 4x1 with remainder no zero	 
	this.mIDArray.push('4.nbt.b.6_7');
	
	//divide 4x1 with remainder zero in 1st digit	 
	this.mIDArray.push('4.nbt.b.6_8');

	//divide 4x1 with remainder zero in 2nd digit	 
	this.mIDArray.push('4.nbt.b.6_9');

	//divide 4x1 with remainder zero in third digit	 
	this.mIDArray.push('4.nbt.b.6_10');

	//divide 4x1 with remainder zero in fourth digit	 
	this.mIDArray.push('4.nbt.b.6_11');


	//---------------------1st zero	
	//divide 4x1 with remainder zero in 1st and 3rd	 
	this.mIDArray.push('4.nbt.b.6_12');
	
	//divide 4x1 with remainder zero in 1st and 4th	 
	this.mIDArray.push('4.nbt.b.6_13');
	
	//divide 4x1 with remainder zero in 1st and 3rd and 4th	 
	this.mIDArray.push('4.nbt.b.6_14');


	//--------------------2nd zero 
	//divide 4x1 with remainder zero in 2nd and 3rd	 
	this.mIDArray.push('4.nbt.b.6_15');
	
	//divide 4x1 with remainder zero in 2nd and 4th	 
	this.mIDArray.push('4.nbt.b.6_16');
	
	//divide 4x1 with remainder zero in 2nd and 3rd and 4th	 
	this.mIDArray.push('4.nbt.b.6_17');

	//--------------------3rd zero
	//divide 4x1 with remainder zero in 3rd and 4th 	 
	this.mIDArray.push('4.nbt.b.6_18');

	//4th zero are all dups	

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