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

		this.mShapeArray = new Array();
		this.mVictoryShapeArray = new Array();
		this.mBossShapeArray = new Array();

                /**************** TIME ************/
	 	this.mShowLevelPassedStartTime = 0;
                this.mShowLevelFailedStartTime = 0;

                this.mShowLevelPassedThresholdTime = 1000;
                this.mShowLevelFailedThresholdTime = 1000;

                this.mFailedAttemptsThreshold = 0;

		//question
		this.mMarker = 0;

		//score
		this.mScoreNeeded = 6;

		//states
                this.mStateMachine = new StateMachine(this);

                this.mGLOBAL_SHEET       = new GLOBAL_SHEET      (this);
                this.mINIT_SHEET         = new INIT_SHEET        (this);
                this.mNORMAL_SHEET       = new NORMAL_SHEET      (this);
                this.mLEVEL_PASSED_SHEET = new LEVEL_PASSED_SHEET(this);
                this.mLEVEL_FAILED_SHEET = new LEVEL_FAILED_SHEET(this);
                this.mEVALUATION_FAILED_SHEET = new EVALUATION_FAILED_SHEET(this);
                this.mEND_SHEET          = new END_SHEET(this);

                this.mStateMachine.setGlobalState(this.mGLOBAL_SHEET);
                this.mStateMachine.changeState(this.mINIT_SHEET);

		this.mItem = 0;
		this.mLearningStandard = '';  
       
         	this.createItems();
                this.createShapes();
        },

	/*********** CLASS ADMIN ************/
	update: function()
	{
 		//state machine
		if (this.mGame)
		{
                	this.mStateMachine.update();

			for (i = 0; i < this.mItemArray.length; i++)
			{
				if (this.mItemArray[i])
				{
					this.mItemArray[i].update();
				}
			}
		}
	},

	destructor: function()
	{
		this.destroyItems();
	},	

	reset: function()
	{
		this.destructor();
		
		//reset marker
		this.mMarker = 0;

		this.createItems();
	},

	/************** ITEMS ******************/
	destroyItems: function()
	{
		//destroy items 
		while(this.mItemArray.length > 0)
                {
			item = this.mItemArray[0];
                        item.destructor();
			this.mItemArray.splice(0,1);
                }

                //destroy question array
                this.mItemArray = 0;
                this.mItemArray = new Array();

		this.mItem = 0;
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
	
	addPoolItem: function(item)
	{
		this.mItemPoolArray.push(item);
	}, 

	getPoolItem: function(index)	
	{
		return this.mItemPoolArray[index];
	},

	createItems: function()
	{
        	if (APPLICATION.mLevel > APPLICATION.mLevels)
                {
                        this.setScoreNeeded(APPLICATION.mLevels);
                }
                else
                {
                        this.setScoreNeeded(APPLICATION.mLevel);
                }
	},

	setTypeWrong: function(typeID)
	{
		this.mTypeWrong = typeID;
	},

	randomize: function(degree)
	{
		var size = parseInt(this.mItemArray.length);	
		for (var i = 0; i < degree; i++)
		{
			var swapElementNumberA = Math.floor((Math.random()*size));
			var swapElementNumberB = Math.floor((Math.random()*size));

			var tempItemA = this.mItemArray[swapElementNumberA];	
			var tempItemB = this.mItemArray[swapElementNumberB];	
			
			this.mItemArray[swapElementNumberA] = tempItemB;
			this.mItemArray[swapElementNumberB] = tempItemA;
		}

		// when done swap the mTypeWrong to first spot. 
		if (this.mTypeWrong != '')
		{
			for (i = 0; i < size; i++)
			{
				if (this.mItemArray[i].getType() == this.mTypeWrong)
				{
					wrongItem = this.mItemArray[i]; 
					questionInFirstSlot = this.mItemArray[0]; 
					this.mItemArray[0] = wrongItem;
					this.mItemArray[i] = questionInFirstSlot; 
				}
			}
		}		
		
		//redo setting mItem since you shuffled
 		this.mItem = this.mItemArray[0];
	},

	/********************** SHAPES ******************/
	createShapes: function()
	{
		this.createVictoryShapes();
		this.createBossShapes();
	},
  
	addShape: function(shape)
        {
                this.mShapeArray.push(shape);
                this.mGame.addShape(shape);
        },

        removeShape: function(shape)
        {
                //remove from game array first..
                this.mGame.removeShape(shape);

                //remove from this shape array
                for (r = 0; r < this.mShapeArray.length; r++)
                {
                        if (shape == this.mShapeArray[r])
                        {
                                //first remove it from array...
                                this.mShapeArray.splice(r,1);
                        }
                }
        },
	
	//VICTORY SHAPES --overide this for new victory screens
        createVictoryShapes: function()
        {
                //victory shapes
                this.addVictoryShape(new ShapeVictory(50,50,100,300,this.mGame,"/images/bus/kid.png","",""));
                this.addVictoryShape(new ShapeVictory(50,50,300,300,this.mGame,"/images/bus/kid.png","",""));
                this.addVictoryShape(new ShapeVictory(50,50,500,300,this.mGame,"/images/bus/kid.png","",""));

                this.hideVictoryShapes();
        },
        
	addVictoryShape: function(shape)
        {
                this.mVictoryShapeArray.push(shape);
                this.addShape(shape);
        },

        hideVictoryShapes: function()
        {
                for (var i = 0; i < this.mVictoryShapeArray.length; i++)
                {
                        this.mVictoryShapeArray[i].setVisibility(false);
                }
        },

        showVictoryShapes: function()
        {
                for (var i = 0; i < this.mVictoryShapeArray.length; i++)
                {
                        this.mVictoryShapeArray[i].setVisibility(true);
                }
        },
 
	//BOSS SHAPES --overide this for new boss screens
        createBossShapes: function()
        {
                //boss shapes
                this.addBossShape(new ShapeVictory(50,50,100,300,this.mGame,"/images/monster/red_monster.png","",""));
                var textShape = new ShapeVictory(250,10,400,0,this.mGame,"","","");
		textShape.setText('You beat the BOSS level!');
		this.addBossShape(textShape);
                this.hideBossShapes();
        },
	
	addBossShape: function(shape)
        {
                this.mBossShapeArray.push(shape);
                this.addShape(shape);
        },

        hideBossShapes: function()
        {
                for (var i = 0; i < this.mBossShapeArray.length; i++)
                {
                        this.mBossShapeArray[i].setVisibility(false);
                }
        },

        showBossShapes: function()
        {
                for (var i = 0; i < this.mBossShapeArray.length; i++)
                {
                        this.mBossShapeArray[i].setVisibility(true);
                }
        },


	/******************** ANSWERS ********************/
	
	correctAnswer: function()
	{
		this.mMarker++;

		this.mItem = this.getItem();
	},

	/******************* SHEET *********************/	
	isSheetComplete: function()
	{
		if (this.mGame.getScore() >= this.getScoreNeeded())
		{
			return true;
		}
		else
		{
			return false;
		}
	},

	setScoreNeeded: function(scoreNeeded)
        {
                this.mScoreNeeded = scoreNeeded;
                this.mGame.mApplication.mHud.setScoreNeeded(scoreNeeded);
        },
	
	getScoreNeeded: function()
	{
		return this.mScoreNeeded;
	}
});
