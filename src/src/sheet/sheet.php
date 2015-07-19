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

		this.mShapeArray = new Array();
		this.mVictoryShapeArray = new Array();
		this.mBossShapeArray = new Array();

		/***** PICKERS ****/
                this.mPicker      = new Picker(this);
                this.mPickerBrian = new PickerBrian(this);
                this.mPickerJim   = new PickerJim(this);

                /**************** TIME ************/
	 	this.mStartTime = 0;
                this.mThresholdTime = 2000;
		this.mRefreshStartTime = 0;
		this.mRefreshThresholdTime = 5000;

		//question
		this.mMarker = 0;

		//score
		this.mScoreNeeded = 0;

		//states
                this.mStateMachine = new StateMachine(this);

                this.mGLOBAL_SHEET       = new GLOBAL_SHEET      (this);
                this.mINIT_SHEET         = new INIT_SHEET        (this);
                this.mNORMAL_SHEET       = new NORMAL_SHEET      (this);
                this.mNORMAL_DUP_PREVENTER_SHEET = new NORMAL_DUP_PREVENTER_SHEET      (this);
                this.mFINISHED_SHEET     = new FINISHED_SHEET      (this);
                this.mPRACTICE_SHEET = new PRACTICE_SHEET(this);
                this.mEND_SHEET          = new END_SHEET(this);

                this.mStateMachine.setGlobalState(this.mGLOBAL_SHEET);
                this.mStateMachine.changeState(this.mINIT_SHEET);

		this.mItem = 0;
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
		APPLICATION.log('reset');
		this.destructor();
		
		//reset marker
		this.mMarker = 0;

		//reset timers
		this.mRefreshStartTime = APPLICATION.mGame.mTimeSinceEpoch;

		this.createItems();

		this.createShapes();
	},

	/************** ITEMS ******************/
	destroyItems: function()
	{
		//destroy items 
		while(this.mItemArray.length > 0)
                {
			var item = this.mItemArray[0];
			if (item)
			{
                        	item.destructor();
			}
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
		var item = this.mItemArray[this.mMarker];
		if (item)
		{
			return this.mItemArray[this.mMarker];
		}
		else
		{
			return 0;	
		}
	},
	
	//returns question object	
	getSpecificItem: function(i)
	{
		return this.mItemArray[i];
	},
	
	createItems: function()
	{
		APPLICATION.mItemAttemptsID     = APPLICATION.mItemTypesArray[1];
		APPLICATION.mItemAttemptsIDLast = APPLICATION.mItemTypesArray[0];
		var pick = 0;

                if (pick == 0)
                {
                        pick = this.mPicker.getItem(APPLICATION.mItemAttemptsID);
                }
                if (pick == 0)
                {
                        pick = this.mPickerBrian.getItem(APPLICATION.mItemAttemptsID);
                }
                if (pick == 0)
                {
                        pick = this.mPickerJim.getItem(APPLICATION.mItemAttemptsID);
                }

                //if you got an item then add it to sheet
                if (pick != 0)
                {
                	this.addItem(pick);
		}
		else
		{
			APPLICATION.log('no item picked by pickers!');
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
		//christmas
/*
                this.addVictoryShape(new ShapeVictory(50,50,100,300,this.mGame,"/images/christmas/snowman.png","",""));
                this.addVictoryShape(new ShapeVictory(50,50,200,300,this.mGame,"/images/christmas/christmas-tree.png","",""));
                this.addVictoryShape(new ShapeVictory(50,50,300,300,this.mGame,"/images/christmas/santa1.png","",""));
                
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/christmas/snowball.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/christmas/snowball.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/christmas/snowball.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/christmas/snowball.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/christmas/snowball.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/christmas/snowball.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/christmas/snowball.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/christmas/snowball.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/christmas/snowball.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/christmas/snowball.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/christmas/snowball.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/christmas/snowball.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/christmas/snowball.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/christmas/snowball.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/christmas/snowball.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/christmas/snowball.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/christmas/snowball.png","",""));

		//valentines
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/valentines/balloonheart01.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/valentines/balloonheart02.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/valentines/cupid_boy.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/valentines/cupid_girl.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/valentines/cupid_anim.gif","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/valentines/cupid_anim.gif","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/valentines/cupid_anim.gif","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/valentines/cupid_anim.gif","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/valentines/cupid_anim.gif","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/valentines/cupid_anim.gif","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/valentines/cupid_anim.gif","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/valentines/cupid_anim.gif","",""));

		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/valentines/cupid-arrow-md.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/valentines/cupid-arrow-md.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/valentines/cupid-arrow-md.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/valentines/cupid-arrow-md.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/valentines/cupid-arrow-md.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/valentines/cupid-arrow-md.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/valentines/cupid-arrow-md.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/valentines/cupid-arrow-md.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/valentines/cupid-arrow-md.png","",""));
		
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/valentines/cupid_arrow_west.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/valentines/cupid_arrow_west.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/valentines/cupid_arrow_west.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/valentines/cupid_arrow_west.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/valentines/cupid_arrow_west.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/valentines/cupid_arrow_west.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/valentines/cupid_arrow_west.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/valentines/cupid_arrow_west.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/valentines/cupid_arrow_west.png","",""));
*/
/*
		//patricks
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/stpatricks/3dhat.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/stpatricks/goldgrass.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/stpatricks/hatgold.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/stpatricks/3dhat.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/stpatricks/rainbow.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/stpatricks/goldgrass.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/stpatricks/hatgold.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/stpatricks/3dhat.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/stpatricks/rainbow.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/stpatricks/goldgrass.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/stpatricks/hatgold.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/stpatricks/3dhat.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/stpatricks/rainbow.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/stpatricks/goldgrass.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/stpatricks/hatgold.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/stpatricks/3dhat.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/stpatricks/rainbow.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/stpatricks/goldgrass.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/stpatricks/hatgold.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/stpatricks/3dhat.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/stpatricks/rainbow.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/stpatricks/goldgrass.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/stpatricks/hatgold.png","",""));
*/
		//easter
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/easter/easter_basket.gif","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/easter/easter_bunny.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/easter/easter_egg_green.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/easter/easter_egg_blue.png","",""));
		this.addVictoryShape(new ShapeVictory(150,150,300,100,this.mGame,"/images/easter/happy_easter.gif","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/easter/easter_basket.gif","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/easter/easter_bunny.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/easter/easter_egg_green.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/easter/easter_egg_blue.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/easter/easter_basket.gif","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/easter/easter_bunny.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/easter/easter_egg_green.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/easter/easter_egg_blue.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/easter/easter_basket.gif","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/easter/easter_bunny.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/easter/easter_egg_green.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/easter/easter_egg_blue.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/easter/easter_basket.gif","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/easter/easter_bunny.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/easter/easter_egg_green.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/easter/easter_egg_blue.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/easter/easter_basket.gif","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/easter/easter_bunny.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/easter/easter_egg_green.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/easter/easter_egg_blue.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/easter/easter_basket.gif","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/easter/easter_bunny.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/easter/easter_egg_green.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/easter/easter_egg_blue.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/easter/easter_basket.gif","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/easter/easter_bunny.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/easter/easter_egg_green.png","",""));
		this.addVictoryShape(new ShapeVictory(50,50,300,100,this.mGame,"/images/easter/easter_egg_blue.png","",""));

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
			if (i == 0)
			{
				this.mVictoryShapeArray[i].setPosition(100,500);	
			}
			if (i == 1)
			{
				this.mVictoryShapeArray[i].setPosition(300,500);	
			}
			if (i == 2)
			{
				this.mVictoryShapeArray[i].setPosition(500,500);	
			}
			if (i > 2)
			{
  				var x = Math.floor(Math.random()*600);
  				var y = Math.floor(Math.random()*200);

				this.mVictoryShapeArray[i].setPosition(x,y);	
			}
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
	
	incorrectAnswer: function()
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
        },
	
	getScoreNeeded: function()
	{
		return this.mScoreNeeded;
	}
});
