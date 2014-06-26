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
		this.mItemPoolArray = new Array();
                this.mAnswerPool = new Array();

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

	update: function()
	{
 		//state machine
                this.mStateMachine.update();

		for (i = 0; i < this.mItemArray.length; i++)
		{
			this.mItemArray[i].update();
		}
	},

        log: function(msg)
        {
                setTimeout(function()
                {
                        throw new Error(msg);
                }, 0);
        },

	createWorld: function()
	{

	},

	destructor: function()
	{
		this.resetItemArray();		
		this.resetItemPoolArray();		
		this.resetAnswerPool();		
		this.destroyWorld();
	},	

	destroyWorld: function()
	{

	},

	resetItemArray: function()
	{
		//destroy questions
		for (i = 0; i < this.mItemArray.length; i++)
		{
			this.mItemArray[i] = 0;
		}

		//destroy question array
		this.mItemArray = 0;
		this.mItemArray = new Array();
	},

	resetItemPoolArray: function()
	{
		//destroy question pool
		for (i = 0; i < this.mItemPoolArray.length; i++)
		{
			this.mItemPoolArray[i] = 0;
		}
		//destroy question pool array
		this.mItemPoolArray = 0;
		this.mItemPoolArray = new Array();
	},
	
	resetAnswerPool: function()
	{
		//destroy answer pool
                for (i = 0; i < this.mAnswerPool.length; i++)
                {
                        this.mAnswerPool[i] = 0;
                }
                //destroy answer pool array
                this.mAnswerPool = 0;
                this.mAnswerPool = new Array();
	},
	
	reset: function()
	{
		this.log('resetting sheet');
		this.destructor();
		
		//reset marker
		this.mMarker = 0;
	},

	addItem: function(item)
	{
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
