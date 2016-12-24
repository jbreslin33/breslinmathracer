var g5_nbt_b_7_Sheet = new Class(
{
Extends: Sheet,

initialize: function(game)
{
	this.parent(game);

	//ADD
	var a = Math.floor(Math.random()*3);
	if (a == 0)
        	this.mIDArray.push('5.nbt.b.7_1'); 
	if (a == 1)
        	this.mIDArray.push('5.nbt.b.7_2'); 
	if (a == 2)
        	this.mIDArray.push('5.nbt.b.7_3'); 
	
	var b = Math.floor(Math.random()*3);
	if (b == 0)
        	this.mIDArray.push('5.nbt.b.7_1'); 
	if (b == 1)
        	this.mIDArray.push('5.nbt.b.7_2'); 
	if (b == 2)
        	this.mIDArray.push('5.nbt.b.7_3'); 

	//SUBTRACT
	var c = Math.floor(Math.random()*3);
	if (c == 0)
        	this.mIDArray.push('5.nbt.b.7_6'); 
	if (c == 1)
       		this.mIDArray.push('5.nbt.b.7_7'); 
	if (c == 2)
        	this.mIDArray.push('5.nbt.b.7_8'); 

	//MULTIPLY
	var d = Math.floor(Math.random()*5);
	if (d == 0)
        	this.mIDArray.push('5.nbt.b.7_10'); 
	if (d == 1)
        	this.mIDArray.push('5.nbt.b.7_11'); 
	if (d == 2)
        	this.mIDArray.push('5.nbt.b.7_12'); 
	if (d == 3)
        	this.mIDArray.push('5.nbt.b.7_13'); 
	if (d == 4)
        	this.mIDArray.push('5.nbt.b.7_14'); 
	
	//DIVIDE
	var e = Math.floor(Math.random()*5);
	if (e == 0)
        	this.mIDArray.push('5.nbt.b.7_15'); 
	if (e == 1)
        	this.mIDArray.push('5.nbt.b.7_16'); 
	if (e == 2)
        	this.mIDArray.push('5.nbt.b.7_17'); 
	if (e == 3)
        	this.mIDArray.push('5.nbt.b.7_18'); 
	if (e == 4)
        	this.mIDArray.push('5.nbt.b.7_19'); 


	var f = Math.floor(Math.random()*6);
	if (f == 0)
        	this.mIDArray.push('5.nbt.b.7_24'); 
	if (f == 1)
        	this.mIDArray.push('5.nbt.b.7_25'); 
	if (f == 2)
        	this.mIDArray.push('5.nbt.b.7_26'); 
	if (f == 3)
        	this.mIDArray.push('5.nbt.b.7_27'); 
	if (f == 4)
        	this.mIDArray.push('5.nbt.b.7_28'); 
	if (f == 5)
        	this.mIDArray.push('5.nbt.b.7_29'); 
       
 
	var g = Math.floor(Math.random()*6);
	if (g == 0)
		this.mIDArray.push('5.nbt.b.7_30'); 
	if (g == 1)
		this.mIDArray.push('5.nbt.b.7_31'); 
	if (g == 2)
		this.mIDArray.push('5.nbt.b.7_32'); 
	if (g == 3)
		this.mIDArray.push('5.nbt.b.7_33'); 
	if (g == 4)
		this.mIDArray.push('5.nbt.b.7_34'); 
	if (g == 5)
		this.mIDArray.push('5.nbt.b.7_35'); 
	
	var h = Math.floor(Math.random()*6);
	if (h == 0)
		this.mIDArray.push('5.nbt.b.7_36'); 
	if (h == 1)
		this.mIDArray.push('5.nbt.b.7_37'); 
	if (h == 2)
		this.mIDArray.push('5.nbt.b.7_38'); 
	if (h == 3)
		this.mIDArray.push('5.nbt.b.7_39'); 
	if (h == 4)
		this.mIDArray.push('5.nbt.b.7_40'); 
	if (h == 5)
		this.mIDArray.push('5.nbt.b.7_41'); 

	var i = Math.floor(Math.random()*6);
	if (i == 0)
		this.mIDArray.push('5.nbt.b.7_42'); 
	if (i == 1)
		this.mIDArray.push('5.nbt.b.7_43'); 
	if (i == 2)
		this.mIDArray.push('5.nbt.b.7_44'); 
	if (i == 3)
		this.mIDArray.push('5.nbt.b.7_45'); 
	if (i == 4)
		this.mIDArray.push('5.nbt.b.7_46'); 
	if (i == 5)
		this.mIDArray.push('5.nbt.b.7_47'); 
	
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
                itemAttempt.setEvaluationsID(34);
        }
        else
        {
                APPLICATION.log('no item picked by pickers!');
        }

        //set this as last for next run
        APPLICATION.mQuestionTypeLast = APPLICATION.mQuestionTypeCurrent;
}

});
