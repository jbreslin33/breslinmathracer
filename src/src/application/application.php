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
		
		/********* HUD *******************/ 
        	this.mHud = new Hud(this);

		/********* GAME *******************/ 
		this.mGame = 0;
		this.mGameID = 0;
		this.mLastGameID = 0;
		this.mLevelID = 0;
		this.mNextLevelID = 0;
		this.mInstantiatedGame = false;

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
		if (this.mGame == 0)
		{
			this.getGameIDFromServer();	
		}
		if (this.mGame)
		{
			this.mGame.update();
		}
        },

	newGame: function()
	{
		this.mInstantiatedGame = false;
		this.mGame = 0;	
	},
 
	getGameIDFromServer: function()
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
				APPLICATION.mLastGameID  = APPLICATION.mGameID;
				APPLICATION.mGameID      = responseArray[1];
				APPLICATION.mLevelID     = responseArray[2];
				APPLICATION.mNextLevelID = responseArray[3];

                        	if (APPLICATION.mGameID == "1") 
				{
					if (APPLICATION.mLastGameID != "1") 
					{
						APPLICATION.mGame = new Dungeon(APPLICATION);
					}
				}
                        	if (APPLICATION.mGameID == "6") 
				{
					if (APPLICATION.mLastGameID != "6")
					{
						APPLICATION.mGame = new Pad(APPLICATION);
					}
				}
                	}
		}
                xmlhttp.open("GET","../../web/game/standard_games_query.php",true);
                xmlhttp.send();
                this.timeWarning = true;
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
