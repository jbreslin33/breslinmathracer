var g6_ns_Sheet = new Class(
{
Extends: Sheet,

initialize: function(game)
{
	this.parent(game);

	APPLICATION.log('not getting called right');
	
	var a = Math.floor(Math.random()*6);
        if (a == 0)
                this.mIDArray.push('6.ns.a.1_1');
        if (a == 1)
                this.mIDArray.push('6.ns.a.1_2');
        if (a == 2)
                this.mIDArray.push('6.ns.a.1_3');
        if (a == 3)
                this.mIDArray.push('6.ns.a.1_4');
        if (a == 4)
                this.mIDArray.push('6.ns.a.1_5');
        if (a == 5)
                this.mIDArray.push('6.ns.a.1_6');

	var b = Math.floor(Math.random()*2);
        if (b == 0)
                this.mIDArray.push('6.ns.b.2_1');
        if (b == 1)
                this.mIDArray.push('6.ns.b.2_2');

	var c = Math.floor(Math.random()*9);
        if (c == 0)
                this.mIDArray.push('6.ns.b.3_1');
        if (c == 1)
                this.mIDArray.push('6.ns.b.3_2');
        if (c == 2)
                this.mIDArray.push('6.ns.b.3_3');
        if (c == 3)
                this.mIDArray.push('6.ns.b.3_4');
        if (c == 4)
                this.mIDArray.push('6.ns.b.3_5');
        if (c == 5)
                this.mIDArray.push('6.ns.b.3_6');
        if (c == 6)
                this.mIDArray.push('6.ns.b.3_7');
        if (c == 7)
                this.mIDArray.push('6.ns.b.3_8');
        if (c == 8)
                this.mIDArray.push('6.ns.b.3_9');
	
	var d = Math.floor(Math.random()*5);
        if (d == 0)
                this.mIDArray.push('6.ns.b.4_1');
        if (d == 1)
                this.mIDArray.push('6.ns.b.4_2');
        if (d == 2)
                this.mIDArray.push('6.ns.b.4_3');
        if (d == 3)
                this.mIDArray.push('6.ns.b.4_4');
        if (d == 4)
                this.mIDArray.push('6.ns.b.4_5');
	
        this.mIDArray.push('6.ns.c.5_1');

	var e = Math.floor(Math.random()*4);
        if (e == 0)
                this.mIDArray.push('6.ns.c.6.b_1');
        if (e == 1)
                this.mIDArray.push('6.ns.c.6.b_2');
        if (e == 2)
                this.mIDArray.push('6.ns.c.6.b_3');
        if (e == 3)
                this.mIDArray.push('6.ns.c.6.b_4');


	var f = Math.floor(Math.random()*4);
        if (f == 0)
                this.mIDArray.push('6.ns.c.6.c_1');
        if (f == 1)
                this.mIDArray.push('6.ns.c.6.c_2');
        if (f == 2)
                this.mIDArray.push('6.ns.c.6.c_3');
        if (f == 3)
                this.mIDArray.push('6.ns.c.6.c_4');
	
	var g = Math.floor(Math.random()*3);
        if (g == 0)
                this.mIDArray.push('6.ns.c.7.a_1');
        if (g == 1)
                this.mIDArray.push('6.ns.c.7.a_2');
        if (g == 2)
                this.mIDArray.push('6.ns.c.7.a_4');

        this.mIDArray.push('6.ns.c.7.b_1');

	var h = Math.floor(Math.random()*4);
        if (h == 0)
                this.mIDArray.push('6.ns.c.7.c_1');
        if (h == 1)
                this.mIDArray.push('6.ns.c.7.c_2');
        if (h == 2)
                this.mIDArray.push('6.ns.c.7.c_3');
        if (h == 3)
                this.mIDArray.push('6.ns.c.7.c_4');

	var i = Math.floor(Math.random()*3);
        if (i == 0)
                this.mIDArray.push('6.ns.c.8_1');
        if (i == 1)
                this.mIDArray.push('6.ns.c.8_2');
        if (i == 2)
                this.mIDArray.push('6.ns.c.8_3');



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
		APPLICATION.log('is this getting called to set to 41');
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
                itemAttempt.setEvaluationsID(37);
        }
        else
        {
                APPLICATION.log('no item picked by pickers!');
        }

        //set this as last for next run
        APPLICATION.mQuestionTypeLast = APPLICATION.mQuestionTypeCurrent;
}

});
