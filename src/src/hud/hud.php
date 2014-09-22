/***************************************
public methods
----------------

****************************************/

var Hud = new Class(
{
        initialize: function(application)
        {
	
	this.mApplication = application;	
	/******************* BOUNDARY WALLS AND HUD COMBO ***********/
        var ySize = 35;
        var yCoord = 0;
        this.mHome = new Shape(40, ySize,  0,  yCoord,"","","#F8CDF8","boundary");
        this.mHome.setText('<font size="1"> <a href="<?php getenv("DOCUMENT_ROOT")?>/web/home/home.php"> HOME</a> </font>');

	this.mLogout = new Shape     (50, ySize,40,  yCoord,"","","red","boundary");
        this.mLogout.setText('<font size="1"> <a href="<?php getenv("DOCUMENT_ROOT")?>/web/php/logout.php"> LOGOUT</a> </font>');
	
        this.mStandard    = new Shape (100, ySize,90,  yCoord,"","","orange","boundary");
	this.setStandard('');
        this.mProgression = new Shape (100, ySize,190,  yCoord,"","","pink","boundary");
	this.setProgression('');
	
	this.mQuestionNumber = new Shape(100, ySize,290,  yCoord,"","","yellow","boundary");
	this.mQuestionNumber.setText('<font size="1"> Question: </font>');

        this.mScore = new Shape    (100, ySize,390,  yCoord,"","","LawnGreen","boundary");
        this.mScore.setText('<font size="1"> </font>');

        this.mItemTypeStats = new Shape    (100, ySize, 490,  yCoord,"","","cyan","boundary");

	this.mUsername = new Shape     (180, ySize,590,  yCoord,"","","#F8CDF8","boundary");
        this.mUsername.setText('<font size="1">User:' + this.mApplication.mFirstName + ' ' + this.mApplication.mLastName + '</font>');
        
	eastBounds  = new Shape         ( 10, 50,760, 35,"","","#F8CDF8","boundary");
        eastBounds  = new Shape         ( 10, 50,760, 85,"","","#F6C0F6","boundary");
        eastBounds  = new Shape         ( 10, 50,760,135,"","","#F5B4F5","boundary");
        eastBounds  = new Shape         ( 10, 50,760,185,"","","#F6C0F6","boundary");
        eastBounds  = new Shape         ( 10, 50,760,235,"","","#F5B4F5","boundary");
        eastBounds  = new Shape         ( 10, 50,760,285,"","","#F3A8F3","boundary");
        eastBounds  = new Shape         ( 10, 50,760,335,"","","#F19BF1","boundary");
        eastBounds  = new Shape         ( 10, 20,760,385,"","","#F08EF0","boundary");

        this.mQuestion = new Shape (770, ySize,  0,405,"","","violet","boundary");

        westBounds  = new Shape         ( 10, 50,  0, 35,"","","#F8CDF8","boundary");
        westBounds  = new Shape         ( 10, 50,  0, 85,"","","#F6C0F6","boundary");
        westBounds  = new Shape         ( 10, 50,  0,135,"","","#F5B4F5","boundary");
        westBounds  = new Shape         ( 10, 50,  0,185,"","","#F6C0F6","boundary");
        westBounds  = new Shape         ( 10, 50,  0,235,"","","#F5B4F5","boundary");
        westBounds  = new Shape         ( 10, 50,  0,285,"","","#F3A8F3","boundary");
        westBounds  = new Shape         ( 10, 50,  0,335,"","","#F19BF1","boundary");
        westBounds  = new Shape         ( 10, 20,  0,385,"","","#F08EF0","boundary");

        },
	
	setItemTypeStats: function(streak,total)
	{
        	this.mItemTypeStats.setText('<font size="1"> Streak: ' + streak + '/10' + '</font>');
	},
	
	setStandard: function(s)
	{
        	this.mStandard.setText('<font size="1"> Standard:' + s +  '</font>');
	},

	setProgression: function(p)
	{
        	this.mProgression.setText('<font size="1"> Game:' + p +  '</font>');
	},

	setQuestionNumber: function(number,total)
	{
        	//this.mQuestionNumber.setText('<font size="1"> Question: ' + number + '/' + total + '</font>');
        	this.mQuestionNumber.setText('<font size="1"> </font>');
	},
	
	setUsername: function(firstname,lastname)
	{
  		this.mUsername.setText('<font size="1">User:' + firstname + ' ' + lastname + '</font>');
	},

	setQuestion: function(question)
	{
        	this.mQuestion.setText('<font size="1"> Question: ' + question + '</font>');
	}
});


