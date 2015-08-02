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
			if (this.mItem)
			{
				this.mItem.update();
			}
			else
			{
				APPLICATION.log('does not exist:' + i);
			}
		}
	},

	destructor: function()
	{
		this.destroyItem();
	},	

	reset: function()
	{
		this.destructor();
		
		//reset timers
		this.mRefreshStartTime = APPLICATION.mGame.mTimeSinceEpoch;

		this.createItem();
		this.createShapes();
	},

	/************** ITEMS ******************/
	destroyItem: function()
	{
		//destroy items 
		if (this.mItem)
		{
                       	this.mItem.destructor();
		}

		this.mItem = 0;
	},

	setItem: function(item)
	{
		this.mItem = item;
	}, 
	
	//returns question object	
	getItem: function()
	{
		return this.mItem;
	},
	
	createItem: function()
	{
		//APPLICATION.mItemAttemptsIDLast = APPLICATION.mItemAttemptsID;
		
		//would love to loop till we got no dup
		while (APPLICATION.mItemAttemptsIDLast == APPLICATION.mItemAttemptsID)
		{
			var r = Math.floor(Math.random()*3);
			//r = 2;

			if (r == 0)
			{
				APPLICATION.log('getFirst');
				APPLICATION.getFirst();
				APPLICATION.mItemAttemptsID = APPLICATION.mFirst;
			}
			if (r == 1)
			{
				APPLICATION.log('getLeastAsked');
				APPLICATION.getLeastAsked();
				APPLICATION.mItemAttemptsID = APPLICATION.mLeastAsked;
			}
			if (r == 2)
			{
				APPLICATION.log('getLeastCorrect');
				APPLICATION.getLeastCorrect();
				APPLICATION.mItemAttemptsID = APPLICATION.mLeastCorrect;
			}
		}

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
                	this.setItem(pick);
			var itemAttempt = new ItemAttempt();	
			APPLICATION.mItemAttemptsArray.push(itemAttempt);
			pick.setItemAttempt(itemAttempt);
			itemAttempt.mType = pick.mType;
			itemAttempt.setEvaluationsID(1);
		}
		else
		{
			APPLICATION.log('no item picked by pickers!');
		}

		//set this as last for next run 
		APPLICATION.mItemAttemptsIDLast = APPLICATION.mItemAttemptsID;
	},

	setTypeWrong: function(typeID)
	{
		this.mTypeWrong = typeID;
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
        }
});
