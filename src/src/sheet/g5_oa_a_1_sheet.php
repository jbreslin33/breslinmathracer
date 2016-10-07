var g5_oa_a_1_Sheet = new Class(
{
Extends: Sheet,

initialize: function(game)
{
	this.parent(game);
 
	var a = Math.floor(Math.random()*3);
	if (a == 0)
        	this.mIDArray.push('5.oa.a.1_1'); 
	if (a == 1)
        	this.mIDArray.push('5.oa.a.1_2'); 
	if (a == 2)
        	this.mIDArray.push('5.oa.a.1_3'); 
	
	var b = Math.floor(Math.random()*3);
	if (b == 0)
        	this.mIDArray.push('5.oa.a.1_4'); 
	if (b == 1)
        	this.mIDArray.push('5.oa.a.1_5'); 
	if (b == 2)
        	this.mIDArray.push('5.oa.a.1_6'); 
	
	var c = Math.floor(Math.random()*3);
	if (c == 0)
        	this.mIDArray.push('5.oa.a.1_7'); 
	if (c == 1)
        	this.mIDArray.push('5.oa.a.1_8'); 
	if (c == 2)
        	this.mIDArray.push('5.oa.a.1_9'); 

	var d = Math.floor(Math.random()*2);
	if (d == 0)
        	this.mIDArray.push('5.oa.a.1_10'); 
	if (d == 1) 
        	this.mIDArray.push('5.oa.a.1_11'); 

	var e = Math.floor(Math.random()*2);
	if (e == 0) 
        	this.mIDArray.push('5.oa.a.1_12'); 
	if (e == 1) 
        	this.mIDArray.push('5.oa.a.1_13'); 

	var f = Math.floor(Math.random()*2);
	if (f == 0) 
        	this.mIDArray.push('5.oa.a.1_14'); 
	if (f == 1) 
        	this.mIDArray.push('5.oa.a.1_15'); 

	var g = Math.floor(Math.random()*2);
	if (g == 0) 
        	this.mIDArray.push('5.oa.a.1_16'); 
	if (g == 1) 
        	this.mIDArray.push('5.oa.a.1_17'); 

	var h = Math.floor(Math.random()*2);
	if (h == 0) 
        	this.mIDArray.push('5.oa.a.1_18'); 
	if (h == 1) 
        	this.mIDArray.push('5.oa.a.1_19'); 

	var i = Math.floor(Math.random()*2);
	if (i == 0) 
        	this.mIDArray.push('5.oa.a.1_20'); 
	if (i == 1) 
        	this.mIDArray.push('5.oa.a.1_21'); 

        this.mIDArray.push('5.oa.a.1_22'); 
	
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
                itemAttempt.setEvaluationsID(31);
        }
        else
        {
                APPLICATION.log('no item picked by pickers!');
        }

        //set this as last for next run
        APPLICATION.mQuestionTypeLast = APPLICATION.mQuestionTypeCurrent;
}

});
