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
        
	this.mWhite = new Shape(90, ySize,  0,   yCoord,"","","#F8CDF8","boundary");

        this.mHome = new Shape(90, ySize,  0,  yCoord,"","SELECT","#F8CDF8","boundary");
	this.mHome.mMesh.onchange = this.homeSelected;

        //this.mOrange    = new Shape (75, ySize,90,  yCoord,"","","orange","boundary");
        this.mOrange    = new Shape (75, ySize,90,  yCoord,"","","red","boundary");
       
	//this.mPink = new Shape (75, ySize,165,  yCoord,"","","pink","boundary");
	this.mPink = new Shape (75, ySize,165,  yCoord,"","","green","boundary");
	
	//this.mYellow = new Shape(75, ySize,240,  yCoord,"","","yellow","boundary");
	this.mYellow = new Shape(75, ySize,240,  yCoord,"","","red","boundary");

        //this.mGreen = new Shape    (75, ySize,315,  yCoord,"","","LawnGreen","boundary");
        this.mGreen = new Shape    (75, ySize,315,  yCoord,"","","green","boundary");

        //this.mCyan = new Shape    (75, ySize, 390,  yCoord,"","","cyan","boundary");
        this.mCyan = new Shape    (75, ySize, 390,  yCoord,"","","red","boundary");
        
	//this.mViolet = new Shape    (75, ySize, 465,  yCoord,"","","violet","boundary");
	this.mViolet = new Shape    (75, ySize, 465,  yCoord,"","","green","boundary");
        
	this.mTan = new Shape(75, ySize,  540,  yCoord,"","SELECT","tan","boundary");
	this.mTan.mMesh.onchange = this.tanSelected;

	//this.mUsername = new Shape     (155, ySize,615,  yCoord,"","","#F8CDF8","boundary");
	this.mUsername = new Shape     (155, ySize,615,  yCoord,"","","green","boundary");

//TABLE BEGIN
	this.mTable = new Shape(200,50,770,100,this,"TABLE","","");

	//rows 
        this.r0 = this.mTable.mMesh.insertRow(0);
        this.r1 = this.mTable.mMesh.insertRow(1);
        this.r2 = this.mTable.mMesh.insertRow(2);
        this.r3 = this.mTable.mMesh.insertRow(3);
        this.r4 = this.mTable.mMesh.insertRow(4);
        this.r5 = this.mTable.mMesh.insertRow(5);
        this.r6 = this.mTable.mMesh.insertRow(6);
        this.r7 = this.mTable.mMesh.insertRow(7);
        this.r8 = this.mTable.mMesh.insertRow(8);
        this.r9 = this.mTable.mMesh.insertRow(9);

	//question, answer
        this.r0c0 = this.r0.insertCell(0); 
        this.r1c0 = this.r1.insertCell(0);
        this.r2c0 = this.r2.insertCell(0);
        this.r3c0 = this.r3.insertCell(0);
        this.r4c0 = this.r4.insertCell(0);
        this.r5c0 = this.r5.insertCell(0);
        this.r6c0 = this.r6.insertCell(0);
        this.r7c0 = this.r7.insertCell(0);
        this.r8c0 = this.r8.insertCell(0);
        this.r9c0 = this.r9.insertCell(0);

        this.r0c1 = this.r0.insertCell(1);
        this.r1c1 = this.r1.insertCell(1);
        this.r2c1 = this.r2.insertCell(1);
        this.r3c1 = this.r3.insertCell(1);
        this.r4c1 = this.r4.insertCell(1);
        this.r5c1 = this.r5.insertCell(1);
        this.r6c1 = this.r6.insertCell(1);
        this.r7c1 = this.r7.insertCell(1);
        this.r8c1 = this.r8.insertCell(1);
        this.r9c1 = this.r9.insertCell(1);
/*
        r0c0.innerHTML = 'r0c0';
        r0c1.innerHTML = 'r0c1';
        //row1
        r1c0.innerHTML = 'r1c0';
        r1c1.innerHTML = 'r1c1';
*/


//TABLE END
/*	
	eastBounds  = new Shape         ( 10, 50,760, 35,"","","#F8CDF8","boundary");
        eastBounds  = new Shape         ( 10, 50,760, 85,"","","#F6C0F6","boundary");
        eastBounds  = new Shape         ( 10, 50,760,135,"","","#F5B4F5","boundary");
        eastBounds  = new Shape         ( 10, 50,760,185,"","","#F6C0F6","boundary");
        eastBounds  = new Shape         ( 10, 50,760,235,"","","#F5B4F5","boundary");
        eastBounds  = new Shape         ( 10, 50,760,285,"","","#F3A8F3","boundary");
        eastBounds  = new Shape         ( 10, 50,760,335,"","","#F19BF1","boundary");
        eastBounds  = new Shape         ( 10, 20,760,385,"","","#F08EF0","boundary");
*/
	eastBounds  = new Shape         ( 10, 50,760, 35,"","","red","boundary");
        eastBounds  = new Shape         ( 10, 50,760, 85,"","","green","boundary");
        eastBounds  = new Shape         ( 10, 50,760,135,"","","red","boundary");
        eastBounds  = new Shape         ( 10, 50,760,185,"","","green","boundary");
        eastBounds  = new Shape         ( 10, 50,760,235,"","","red","boundary");
        eastBounds  = new Shape         ( 10, 50,760,285,"","","green","boundary");
        eastBounds  = new Shape         ( 10, 50,760,335,"","","red","boundary");
        eastBounds  = new Shape         ( 10, 20,760,385,"","","green","boundary");

        //this.mScroll = new Shape (770, ySize,  0,405,"","","violet","boundary");
        this.mScroll = new Shape (770, ySize,  0,405,"","","red","boundary");
/*
        westBounds  = new Shape         ( 10, 50,  0, 35,"","","#F8CDF8","boundary");
        westBounds  = new Shape         ( 10, 50,  0, 85,"","","#F6C0F6","boundary");
        westBounds  = new Shape         ( 10, 50,  0,135,"","","#F5B4F5","boundary");
        westBounds  = new Shape         ( 10, 50,  0,185,"","","#F6C0F6","boundary");
        westBounds  = new Shape         ( 10, 50,  0,235,"","","#F5B4F5","boundary");
        westBounds  = new Shape         ( 10, 50,  0,285,"","","#F3A8F3","boundary");
        westBounds  = new Shape         ( 10, 50,  0,335,"","","#F19BF1","boundary");
        westBounds  = new Shape         ( 10, 20,  0,385,"","","#F08EF0","boundary");
*/

        westBounds  = new Shape         ( 10, 50,  0, 35,"","","red","boundary");
        westBounds  = new Shape         ( 10, 50,  0, 85,"","","green","boundary");
        westBounds  = new Shape         ( 10, 50,  0,135,"","","red","boundary");
        westBounds  = new Shape         ( 10, 50,  0,185,"","","green","boundary");
        westBounds  = new Shape         ( 10, 50,  0,235,"","","red","boundary");
        westBounds  = new Shape         ( 10, 50,  0,285,"","","green","boundary");
        westBounds  = new Shape         ( 10, 50,  0,335,"","","red","boundary");
        westBounds  = new Shape         ( 10, 20,  0,385,"","","green","boundary");


	this.fillHomeSelect();
        

        },

	homeSelected: function()
	{
		if (APPLICATION.mHud.mHome.mMesh.options[APPLICATION.mHud.mHome.mMesh.selectedIndex].text == "Play")
		{
			APPLICATION.mEvaluationsID = 1;
			//APPLICATION.mGame.mSheet.mItem.mStateMachine.changeState(APPLICATION.mGame.mSheet.mItem.mWAITING_ON_ANSWER_ITEM);
		}
		if (APPLICATION.mHud.mHome.mMesh.options[APPLICATION.mHud.mHome.mMesh.selectedIndex].text == "XTables")
		{
                        APPLICATION.mGame.mSheet.getItem().mShowTimesTables = true;
		}
		if (APPLICATION.mHud.mHome.mMesh.options[APPLICATION.mHud.mHome.mMesh.selectedIndex].text == "Practice")
		{
			APPLICATION.mGame.mSheet.getItem().fillPracticeSelect();
                        APPLICATION.mGame.mSheet.getItem().mShowPractice = true;
		}
		if (APPLICATION.mHud.mHome.mMesh.options[APPLICATION.mHud.mHome.mMesh.selectedIndex].text == "Item description")
		{
                        APPLICATION.mGame.mSheet.getItem().mShowItem = true;
		}
		if (APPLICATION.mHud.mHome.mMesh.options[APPLICATION.mHud.mHome.mMesh.selectedIndex].text == "Standard description")
		{
                        APPLICATION.mGame.mSheet.getItem().mShowStandard = true;
		}
		if (APPLICATION.mHud.mHome.mMesh.options[APPLICATION.mHud.mHome.mMesh.selectedIndex].text == "Reports")
		{
			window.open('/web/navigation/student/main_menu.php?type=individual','_blank');
		}
		if (APPLICATION.mHud.mHome.mMesh.options[APPLICATION.mHud.mHome.mMesh.selectedIndex].text == "Sign out")
		{
			window.location.href = "/web/php/logout.php";
		}

		APPLICATION.mHud.mHome.mMesh.value = 'Mathcore';
	},

	tanSelected: function()
	{

	},
 
	fillHomeSelect: function()
        {
                var homeSelectArray = new Array(); 
		homeSelectArray.push('Mathcore');
		homeSelectArray.push('Play');
		homeSelectArray.push('XTables');
		homeSelectArray.push('Practice');
		homeSelectArray.push('Item description');
		homeSelectArray.push('Standard description');
		homeSelectArray.push('Reports');
		homeSelectArray.push('Sign out');

                for (var i = 0; i < homeSelectArray.length; i++)
                {
                	if (navigator.appName == "Microsoft Internet Explorer")
			{
                        	var option = document.createElement("option");
                        	option.value = homeSelectArray[i];
                        	option.text = homeSelectArray[i];
                        	this.mHome.mMesh.add(option);
			}
			else
			{
                        	var option = document.createElement("option");
                        	option.value = homeSelectArray[i];
                        	option.text = homeSelectArray[i];
                        	this.mHome.mMesh.appendChild(option);
			}
                }
        },

emptyTanSelect: function()
{
	var i;
    	for(i=this.mTan.mMesh.options.length-1;i>=0;i--)
    	{
        	this.mTan.mMesh.remove(i);
	}
},

fillTanSelect: function(filler)
{
	if (navigator.appName == "Microsoft Internet Explorer")
        {
        	var option = document.createElement("option");
                option.value = filler;
                option.text = filler;
                this.mTan.mMesh.add(option);
        }
        else
        {
        	var option = document.createElement("option");
                option.value = filler;
                option.text = filler;
                this.mTan.mMesh.appendChild(option);
        }
},
                
	setCyan: function(t)
	{
        	this.mCyan.setText('<font size="1">' + t + '</font>');
	},
	
	setOrange: function(t)
	{
        	this.mOrange.setText('<font size="1"> ' + t +  '</font>');
	},

	setPink: function(t)
	{
        	this.mPink.setText('<font size="1">C: ' + t +  '</font>');
	},

	setYellow: function(t)
	{
        	this.mYellow.setText('<font size="1">H: ' + t + '</font>');
	},

        getYellow: function()
        {
		//return "hell";
        },
	
	setViolet: function(t)
	{
        	this.mViolet.setText('<font size="1">' + t + '</font>');
	},
	
	setUsername: function(firstname,lastname)
	{
  		this.mUsername.setText('<font size="1">User:' + firstname + ' ' + lastname + '</font>');
	},

	setScroll: function(scroll)
	{
        	this.mScroll.setText('<font size="1">'  + scroll + '</font>');
	}
});


