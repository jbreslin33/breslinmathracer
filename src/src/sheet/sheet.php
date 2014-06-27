/*
 A Sheet should contain items(questions) it should facilitate randomizing, ordering items. it should deal with advancing levels....and other application related things.   
*/
var Sheet = new Class(
{
        initialize: function(game)
        {
		//logs
		this.mStateLogs = true;

		//GAME
		this.mGame = game;

		//Item and Answer Array
		this.mItemArray = new Array();

                /**************** TIME ************/
	 	this.mShowLevelPassedStartTime = 0;
                this.mShowLevelFailedStartTime = 0;

                this.mShowLevelPassedThresholdTime = 10000;
                this.mShowLevelFailedThresholdTime = 10000;

                this.mFailedAttemptsThreshold = 0;

		//question
		this.mMarker = 0;

		this.mScoreNeeded = 2;

		//states
                this.mStateMachine = new StateMachine(this);

                this.mGLOBAL_SHEET       = new GLOBAL_SHEET      (this);
                this.mINIT_SHEET         = new INIT_SHEET        (this);
                this.mRESET_SHEET        = new RESET_SHEET       (this);
                this.mNORMAL_SHEET       = new NORMAL_SHEET      (this);
                this.mLEVEL_PASSED_SHEET = new LEVEL_PASSED_SHEET(this);
                this.mEND_SHEET          = new END_SHEET(this);

                this.mStateMachine.setGlobalState(this.mGLOBAL_SHEET);
                this.mStateMachine.changeState(this.mINIT_SHEET);

		this.mItem = 0;
        },

	createItems: function()
	{

	},
	
	destroyItems: function()
	{
		this.log('Sheet::destroyItems');
		//destroy items 
                for (i = 0; i < this.mItemArray.length; i++)
                {
			item = this.mItemArray[i];
			this.mItemArray.splice(i,1);
                        item.destructor();
			this.log('destroyItem:' + i);
                }

                //destroy question array
                this.mItemArray = 0;
                this.mItemArray = new Array();
	},

	update: function()
	{
 		//state machine
                this.mStateMachine.update();

		for (i = 0; i < this.mItemArray.length; i++)
		{
			if (this.mItemArray[i])
			{
				this.mItemArray[i].update();
			}
		}
	},

        log: function(msg)
        {
                setTimeout(function()
                {
                        throw new Error(msg);
                }, 0);
        },

	destructor: function()
	{
		this.log('Sheet::destructor');
		this.destroyItems();
	},	

	reset: function()
	{
		this.log('Sheet::reset');
		this.destructor();
		
		//reset marker
		this.mMarker = 0;
	},

	addItem: function(item)
	{
		this.log('Sheet::addItem');
		this.mItemArray.push(item);
		if (this.mItemArray.length == 1)
		{
			this.mItem = this.mItemArray[0];
		}		
	}, 
	
	//returns question object	
	getItem: function()
	{
		return this.mItemArray[this.mMarker];
	},

	//returns question object	
	getSpecificItem: function(i)
	{
		return this.mItemArray[i];
	},
	
	correctAnswer: function()
	{

        	this.mGame.incrementScore();
		this.mMarker++;

		//set marker item to THE ITEM	
		this.mItem = this.getItem();

		//this.mGame.mHud.mItem.setText('<font size="2"> Item: ' + this.mItemArray[this.mMarker].getItem() + '</font>');
	},
	
	isSheetComplete: function()
	{
		if (this.mGame.getScore() >= this.mScoreNeeded)
		{
			return true;
		}
		else
		{
			return false;
		}
	},

	randomize: function(degree)
	{
		size = this.mItemArray.length - 1;
	
		for (i=0; i < degree; i++)
		{
			swapElementNumberA = Math.floor((Math.random()*size));
			swapElementNumberB = Math.floor((Math.random()*size));

			tempItemA = this.mItemArray[swapElementNumberA];	
			tempItemB = this.mItemArray[swapElementNumberB];	
			
			this.mItemArray[swapElementNumberA] = tempItemB;
			this.mItemArray[swapElementNumberB] = tempItemA;
		}

		// when done swap the mTypeWrong to first spot. 
		if (this.mGame.mTypeWrong != '')
		{
			for (i = 0; i < size; i++)
			{
				if (this.mItemArray[i].getType() == this.mGame.mTypeWrong)
				{
					wrongItem = this.mItemArray[i]; 
					questionInFirstSlot = this.mItemArray[0]; 
					this.mItemArray[0] = wrongItem;
					this.mItemArray[i] = questionInFirstSlot; 
				}
			}
		}		
	},

	//states
	
	resetSheetEnter: function()
	{

	}
});
