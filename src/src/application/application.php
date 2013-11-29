<?php
session_start();
?>

var Application = new Class(
{
	initialize: function()
        {
		/************ questions array from server db  later this need come in ajax*****/
		this.mEnteredDoor = false;
		this.mUsername = username;

		/*********** LEVEL *******************
		this.mLevelCompleted = false;
		this.mLevelID = 0;
		this.mNextLevelID = 0;
		this.mNextLevelGameID = 0;
		this.mWaitingOnLevelData = false;
		this.mAdvanceToNextLevelConfirmation = false;
		
		/********* HUD *******************/ 
        	this.mHud = new Hud(this);

		/********* GAME *******************/ 
		this.mGame = 0;
		this.mGameName = "";

		//KEYS
		if (this.mGame)
		{
        		this.mGame.mKeysOn = true;
		}
        	document.addEvent("keydown", this.keyDown);
        	document.addEvent("keyup", this.keyUp);

        	//MOUSE
        	this.mMouseOn     = true;
        	this.mMouseMoveOn = true;
        	this.mMouseDownOn = true;

		/********** OLD APPLICATION STUFF ***********/
                //window size
                this.mWindow = window.getSize();

                //key pressed
                this.mKeyLeft = false;
                this.mKeyRight = false;
                this.mKeyUp = false;
                this.mKeyDown = false;
                this.mKeyStop = false;

                //mouse clicked or moved
                this.mMouseOn = false;
                this.mLeftMouseDown = false;
                this.mRightMouseDown = false;

                this.mMousePosition = new Point2D(0,0);
                this.mMouseMoveEvent = 0;

                document.addEvent("mousemove", this.mouseMove);
                document.body.style.cursor = 'crosshair';

		//states
		this.mStateMachine = new StateMachine(this);

                this.mGLOBAL_APPLICATION                = new GLOBAL_APPLICATION       (this);
                this.mINIT_APPLICATION                  = new INIT_APPLICATION         (this);
                this.mNORMAL_APPLICATION                = new NORMAL_APPLICATION       (this);
                this.mGET_LEVEL_DATA_APPLICATION        = new GET_LEVEL_DATA_APPLICATION(this);
                this.mADVANCE_TO_NEXT_LEVEL_APPLICATION = new ADVANCE_TO_NEXT_LEVEL_APPLICATION(this);

                this.mStateMachine.setGlobalState(this.mGLOBAL_APPLICATION);
                this.mStateMachine.changeState(this.mINIT_APPLICATION);

        	//START UPDATING
        	var t=setInterval("APPLICATION.update()",32)
        },
 	
	log: function(msg)
        {
                setTimeout(function()
                {
                        throw new Error(msg);
                }, 0);
        },
				
        update: function()
        {
		this.mStateMachine.update();
        },

	newGame: function()
	{
		this.mGame = 0;	
	},
 
	getLevelData: function()
        {
                var xmlhttp;

                if (window.XMLHttpRequest)
                {// code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {// code for IE6, IE5
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        var response = xmlhttp.responseText; 
			var responseArray = response.split(","); 
			var code = responseArray[0];

			if (code == "100")
			{
				APPLICATION.mLevelID     = responseArray[2];
				APPLICATION.mNextLevelID = responseArray[3];
				APPLICATION.mNextLevelGameID = responseArray[4];
				APPLICATION.mWaitingOnLevelData = false;
                	}
		}
                xmlhttp.open("GET","../../web/application/level_query.php",true);
                xmlhttp.send();
        },

	// are we running the right game??
	gameDecider: function()
	{
		if (this.mNextLevelID == 0 || this.mNextLevelID == null)
		{
			//this.log('no level yet');
		}
		this.log('gaID:' + this.mNextLevelGameID);
		if (this.mNextLevelGameID == 1)
		{ 
             		if (this.mGameName != "Dungeon")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "Dungeon";
                               	this.mGame = new Dungeon(APPLICATION);
			}
                }
		if (this.mNextLevelGameID == 2)
		{ 
             		if (this.mGameName != "Pad")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "Pad";
                               	this.mGame = new Pad(APPLICATION);
			}
                }
	},
	
	isOdd: function(num)
 	{
 		return num % 2;
	},

	advanceToNextLevel: function()
        {
                var xmlhttp;

                if (window.XMLHttpRequest)
                {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        // code for IE6, IE5
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        var response = xmlhttp.responseText; 
			var responseArray = response.split(","); 
			var code = responseArray[0];

			if (code == "101")
			{
				APPLICATION.mLevelID     = responseArray[2];
				APPLICATION.mNextLevelID = responseArray[3];
				APPLICATION.mNextLevelGameID = responseArray[4];
				APPLICATION.mAdvanceToNextLevelConfirmation = true;
			}
                }
                xmlhttp.open("GET","../../src/database/goto_next_level_ajax.php",true);
                xmlhttp.send();
        },
 	
	sendGameTimeEnd: function()
        {
                var xmlhttp;

                if (window.XMLHttpRequest)
                {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        // code for IE6, IE5
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                }
                xmlhttp.open("GET","../../src/database/set_game_end_time.php",true);
                xmlhttp.send();
        },

	/******************************* CONTROLS  *************/
        keyDown: function(event)
        {
                if (event.key == 'left')
                {
                        APPLICATION.mKeyLeft = true;
                }
                if (event.key == 'right')
                {
                        APPLICATION.mKeyRight = true;
                }
                if (event.key == 'up')
                {
                        APPLICATION.mKeyUp = true;
                }
                if (event.key == 'down')
                {
                        APPLICATION.mKeyDown = true;
                }
        },
    	
	keyUp: function(event)
        {
                if (event.key == 'left')
                {
                        APPLICATION.mKeyLeft = false;
                }
                if (event.key == 'right')
                {
                        APPLICATION.mKeyRight = false;
                }
                if (event.key == 'up')
                {
                        APPLICATION.mKeyUp = false;
                }
                if (event.key == 'down')
                {
                        APPLICATION.mKeyDown = false;
                }
                if (event.key == 'space')
                {
                        APPLICATION.mKeySpace = false;
                }
        },
        click: function(event)
        {
        },

        mousedown: function(event)
        {
                APPLICATION.mLeftMouseDown = true;
        },

        mouseup: function(event)
        {
                APPLICATION.mLeftMouseDown = false;
        },

        mouseMove: function(event)
        {
/*
                if (APPLICATION.mMouseMoveOn)
                {
                        if (APPLICATION.mGame)
			{
                        	if (APPLICATION.mGame.mControlObject);
				{
                        		APPLICATION.mGame.mControlObject.mPosition.mX = event.page.x;
                        		APPLICATION.mGame.mControlObject.mPosition.mY = event.page.y;
				}
			}
                }
*/
        },

        mouseDown: function(event)
        {
/*
                if (APPLICATION.mMouseDownOn)
                {      
                        if (APPLICATION.mGame)
			{
                        	if (APPLICATION.mGame.mControlObject);
				{
                        		APPLICATION.mControlObject.mPosition.mX = event.page.x;
                        		APPLICATION.mControlObject.mPosition.mY = event.page.y;
				}
			}
                }
*/
        }
});
