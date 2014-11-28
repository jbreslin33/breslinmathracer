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
        this.mHome = new Shape(90, ySize,  0,  yCoord,"","SELECT","#F8CDF8","boundary");
	this.mHome.mMesh.onchange = this.homeSelected;

        this.mStandard    = new Shape (100, ySize,90,  yCoord,"","","orange","boundary");
	this.setStandard('');
        this.mProgression = new Shape (100, ySize,190,  yCoord,"","","pink","boundary");
	this.setProgression('');
	
	this.mProgressedTypeID = new Shape(100, ySize,290,  yCoord,"","","yellow","boundary");
	this.mProgressedTypeID.setText('<font size="1"> Question: </font>');

        this.mScore = new Shape    (100, ySize,390,  yCoord,"","","LawnGreen","boundary");

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

        this.mScroll = new Shape (770, ySize,  0,405,"","","violet","boundary");
	this.mScroll.setText('<marquee> Texas Radio and the Big Beat</marquee>');

        westBounds  = new Shape         ( 10, 50,  0, 35,"","","#F8CDF8","boundary");
        westBounds  = new Shape         ( 10, 50,  0, 85,"","","#F6C0F6","boundary");
        westBounds  = new Shape         ( 10, 50,  0,135,"","","#F5B4F5","boundary");
        westBounds  = new Shape         ( 10, 50,  0,185,"","","#F6C0F6","boundary");
        westBounds  = new Shape         ( 10, 50,  0,235,"","","#F5B4F5","boundary");
        westBounds  = new Shape         ( 10, 50,  0,285,"","","#F3A8F3","boundary");
        westBounds  = new Shape         ( 10, 50,  0,335,"","","#F19BF1","boundary");
        westBounds  = new Shape         ( 10, 20,  0,385,"","","#F08EF0","boundary");

	this.fillHomeSelect();
        },

	homeSelected: function()
	{
		if (APPLICATION.mHud.mHome.mMesh.options[APPLICATION.mHud.mHome.mMesh.selectedIndex].text == "Play")
		{
			APPLICATION.mGame.mSheet.mItem.mStateMachine.changeState(APPLICATION.mGame.mSheet.mItem.mWAITING_ON_ANSWER_ITEM);
		}
		if (APPLICATION.mHud.mHome.mMesh.options[APPLICATION.mHud.mHome.mMesh.selectedIndex].text == "Core")
		{
                        APPLICATION.mGame.mSheet.getItem().mShowCore = true;
		}
		if (APPLICATION.mHud.mHome.mMesh.options[APPLICATION.mHud.mHome.mMesh.selectedIndex].text == "XTables")
		{
                        APPLICATION.mGame.mSheet.getItem().mShowTimesTables = true;
		}
		if (APPLICATION.mHud.mHome.mMesh.options[APPLICATION.mHud.mHome.mMesh.selectedIndex].text == "Practice")
		{
                        APPLICATION.mGame.mSheet.getItem().mShowPractice = true;
		}
		if (APPLICATION.mHud.mHome.mMesh.options[APPLICATION.mHud.mHome.mMesh.selectedIndex].text == "Item Description")
		{
                        APPLICATION.mGame.mSheet.getItem().mShowItem = true;
		}
		if (APPLICATION.mHud.mHome.mMesh.options[APPLICATION.mHud.mHome.mMesh.selectedIndex].text == "Standard Description")
		{
                        APPLICATION.mGame.mSheet.getItem().mShowStandard = true;
		}
		if (APPLICATION.mHud.mHome.mMesh.options[APPLICATION.mHud.mHome.mMesh.selectedIndex].text == "Reports")
		{
			window.location.href = "/web/home/home.php";
		}
		if (APPLICATION.mHud.mHome.mMesh.options[APPLICATION.mHud.mHome.mMesh.selectedIndex].text == "Logout")
		{
			window.location.href = "/web/php/logout.php";
		}
	},
 
	fillHomeSelect: function()
        {
                var homeSelectArray = new Array(); 
		homeSelectArray.push('Play');
		homeSelectArray.push('Core');
		homeSelectArray.push('XTables');
		homeSelectArray.push('Practice');
		homeSelectArray.push('Item Description');
		homeSelectArray.push('Standard Description');
		homeSelectArray.push('Reports');
		homeSelectArray.push('Logout');

                for (var i = 0; i < homeSelectArray.length; i++)
                {
                        var option = document.createElement("option");
                        option.value = homeSelectArray[i];
                        option.text = homeSelectArray[i];
                        this.mHome.mMesh.appendChild(option);
                }
        },
	
	setItemTypeStats: function(streak)
	{
        	this.mItemTypeStats.setText('<font size="1">' + streak + '</font>');
	},
	
	setStandard: function(s)
	{
        	this.mStandard.setText('<font size="1"> Game:' + s +  '</font>');
	},

	setProgression: function(p)
	{
        	this.mProgression.setText('<font size="1">' + p +  '</font>');
	},

	setProgressedTypeID: function(type_id)
	{
        	this.mProgressedTypeID.setText('<font size="1">' + type_id + '</font>');
	},
	
	setUsername: function(firstname,lastname)
	{
  		this.mUsername.setText('<font size="1">User:' + firstname + ' ' + lastname + '</font>');
	},

	setScroll: function(scroll)
	{
        	this.mScroll.setText('<marquee width="400" height="50">'  + scroll + '</marquee>');
	}
});


