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
         
	//var t = APPLICATION.mItemTypesArray.length; 
	//var potentialPoints = 0;
	this.mCurrentElement = 0;
/*
	var score = 0;
        for (var i = 0; i < APPLICATION.mItemTypesArray.length; i++)
        {
        	var foundOne = false;
                var j = 0;
                while (j < APPLICATION.mItemAttemptsTypeArrayOne.length && foundOne == false)
                {
                	if (APPLICATION.mItemTypesArray[i] == APPLICATION.mItemAttemptsTypeArrayOne[j])
                        {
                        	score++;
                                foundOne = true;
                        }
                   	j++;
                }
	}
	var needed = parseInt(score * 10);	
	
	while (potentialPoints < needed)
	{
		var type = '';
        	var p = Math.floor(Math.random()*t);
		var i = 0;
		while (i < APPLICATION.mItemAttemptsTypeArrayOne.length && type == '') //this should break out
		{
			if (APPLICATION.mItemAttemptsTypeArrayOne[i] == APPLICATION.mItemTypesArray[p])
			{
				type = APPLICATION.mItemTypesArray[p]; 
				this.mIDArray.push('' + type);
				potentialPoints = parseInt(p + potentialPoints);	
			} 		
			i++;
		} 
	}
*/
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
