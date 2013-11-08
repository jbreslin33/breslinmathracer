<?php
session_start();
?>

var Application = new Class(
{
	initialize: function()
        {
		/********* HUD *******************/ 
        	this.mHud = new Hud();
        	this.mHud.mScoreNeeded.setText('<font size="2"> Needed : 1</font>');
        	this.mHud.mGameName.setText('<font size="2">DUNGEON</font>');
		
		/************** On_Off **********/
                this.mOn = true;

		this.mGame = new Chooser("Chooser");

		//KEYS
        	this.mGame.mKeysOn = true;
        	document.addEvent("keydown", this.mGame.keyDown);
        	document.addEvent("keyup", this.mGame.keyUp);

        	//MOUSE
        	this.mGame.mMouseOn     = true;
        	this.mGame.mMouseMoveOn = true;
        	this.mGame.mMouseDownOn = true;

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
                if (this.mOn)
                {
			this.mGame.update();
		}
        }
});


