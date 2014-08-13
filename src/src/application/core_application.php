<?php
session_start();
?>

var CoreApplication = new Class(
{
Extends: Application,
	initialize: function()
        {
		this.parent();

		//logging
		this.mStateLogs = false; 

		//parse codes
		this.FULL = 101;
		this.NOT_LOGGED_IN    = 102;
		this.GAME = 103;
		this.EVALUATION = 104;
		this.REMEDIATE = 105;
		this.STANDARD_DESCRIPTION = 106;
		this.ITEM_DESCRIPTION = 107;
		this.PRACTICE_DESCRIPTION = 108;
		this.STUDENT_ITEM_STATS = 109;

		//personal info
		this.mUsername = '';
		this.mFirstName = '';
		this.mLastName = '';

		/*********** LOGIN *******************
		this.mLoggedIn = false;

		/*********** LEVEL *******************
		this.mRef_id = 'login';
		this.mLevel = 0;
		this.mLevels = 0;
		this.mProgression = 0;
		this.mStandard = '';
		this.mRawData = 0;

		this.mLevelCompleted = false;
		this.mLevelFailed = false;
		this.mEvaluationFailed = false;
		this.mGotoPractice = false;
		this.mLeavePractice = false;
		this.mWaitForReturn = false;

		this.mWaitingOnLevelData = false;

		/********* HUD *******************/ 
        	this.mHud = new Hud(this);

		//states
		this.mCoreStateMachine = new StateMachine(this);

                this.mGLOBAL_CORE_APPLICATION                = new GLOBAL_CORE_APPLICATION       (this);
                this.mINIT_CORE_APPLICATION                  = new INIT_CORE_APPLICATION         (this);
                this.mLOGIN_APPLICATION                  = new LOGIN_APPLICATION         (this);
                this.mSIGNUP_APPLICATION                  = new SIGNUP_APPLICATION         (this);
                this.mNORMAL_CORE_APPLICATION                = new NORMAL_CORE_APPLICATION       (this);
                this.mADVANCE_TO_NEXT_LEVEL_APPLICATION = new ADVANCE_TO_NEXT_LEVEL_APPLICATION(this);
                this.mREWIND_TO_PREVIOUS_LEVEL_APPLICATION = new REWIND_TO_PREVIOUS_LEVEL_APPLICATION(this);
                this.mREMEDIATE_APPLICATION                 = new REMEDIATE_APPLICATION(this);
                this.mPRACTICE_APPLICATION                 = new PRACTICE_APPLICATION(this);
                this.mLEAVE_PRACTICE_APPLICATION                 = new LEAVE_PRACTICE_APPLICATION(this);

                this.mCoreStateMachine.setGlobalState(this.mGLOBAL_CORE_APPLICATION);
                this.mCoreStateMachine.changeState(this.mINIT_CORE_APPLICATION);
        },
 	
        update: function()
        {
		this.mCoreStateMachine.update();
        },
	
	parseResponse: function(response)
	{
                var responseArray = response.split(",");
                var code = responseArray[0];
                var codeNumber = parseInt(code);
		if (codeNumber > 100 && codeNumber < 200)
		{
        		if (codeNumber == APPLICATION.FULL)
                	{
                		APPLICATION.mRef_id = responseArray[1];
				APPLICATION.mHud.setStandard(APPLICATION.mRef_id);
                        	APPLICATION.mLevel = responseArray[2];
                        	APPLICATION.mLevels = responseArray[3];
                        	APPLICATION.mLoggedIn = responseArray[4];
                       		APPLICATION.mUsername = responseArray[5];
                        	APPLICATION.mFirstName = responseArray[6];
                        	APPLICATION.mLastName = responseArray[7];
                        	APPLICATION.mRawData = responseArray[8];

                        	APPLICATION.mHud.setLevel(APPLICATION.mLevel, APPLICATION.mLevels);
                        	APPLICATION.mHud.setUsername(APPLICATION.mFirstName,APPLICATION.mLastName);

				APPLICATION.mWaitForReturn = false; 

               		}
			if (codeNumber == APPLICATION.STANDARD_DESCRIPTION)
                        {
                                APPLICATION.mGame.mSheet.mItem.mStandardDescription = responseArray[1];
                                APPLICATION.mGame.mSheet.mItem.mStandardInfo.setText(responseArray[1]);
                        }
			if (codeNumber == APPLICATION.ITEM_DESCRIPTION)
                        {
                                APPLICATION.mGame.mSheet.mItem.mItemDescription = responseArray[1];
                                APPLICATION.mGame.mSheet.mItem.mItemInfo.setText(responseArray[1]);
                        }
			if (codeNumber == APPLICATION.PRACTICE_DESCRIPTION)
                        {
                                APPLICATION.mGame.mSheet.mItem.mPracticeDescription = responseArray[1];
                                APPLICATION.mGame.mSheet.mItem.fillPracticeSelect();
                        }
			if (codeNumber == APPLICATION.STUDENT_ITEM_STATS)
                        {
				APPLICATION.log('student_item_stats:' + responseArray[i]);
                                //APPLICATION.mGame.mSheet.mItem.mPracticeDescription = responseArray[1];
                                //APPLICATION.mGame.mSheet.mItem.fillPracticeSelect();
                        }
		}
	},

        signup: function(username,password,first_name,last_name,core_grades_id)
        {
        	var xmlhttp;
                if (window.XMLHttpRequest)
                {
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                                if (xmlhttp.responseText)
                                {
                                        if (typeof(xmlhttp.responseText)=="unknown")
                                        {
                                                return("");
                                        }
                                        else
                                        {
                                                APPLICATION.parseResponse(xmlhttp.responseText);
                                        }
                                }
                        }
                }
                xmlhttp.open("POST","../../web/php/signup.php?username=" + username + "&password=" + password + "&first_name=" + first_name + "&last_name=" + last_name + "&core_grades_id=" + core_grades_id,true);
                xmlhttp.send();
	},

	checkLogin: function()
	{
               	var xmlhttp;
                if (window.XMLHttpRequest)
                {
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                                if (xmlhttp.responseText)
                                {
                                        if (typeof(xmlhttp.responseText)=="unknown")
                                        {
                                                return("");
                                        }
                                        else
                                        {
                                                APPLICATION.parseResponse(xmlhttp.responseText);
                                        }
                                }
                        }
		}
                xmlhttp.open("POST","../../web/php/check_login.php",true);
                xmlhttp.send();
	},

        login: function(username,password)
        {
        	var xmlhttp;
                if (window.XMLHttpRequest)
                {
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                                if (xmlhttp.responseText)
                                {
                                        if (typeof(xmlhttp.responseText)=="unknown")
                                        {
                                                return("");
                                        }
                                        else
                                        {
                                                APPLICATION.parseResponse(xmlhttp.responseText);
                                        }
                                }
                        }
                }
                xmlhttp.open("POST","../../web/php/login.php?username=" + username + "&password=" + password,true);
                xmlhttp.send();
        },

	sendLevelAttempt: function(itemtypesid,transactioncode)
        {
                var xmlhttp;
                if (window.XMLHttpRequest)
                {
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.open("POST","../../web/php/send_level_attempt.php?itemtypesid=" + itemtypesid + "&transactioncode=" + transactioncode,true);
                xmlhttp.send();
        },
	
	sendItemAttempt: function(itemtypesid,transactioncode)
        {
                var xmlhttp;
                if (window.XMLHttpRequest)
                {
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.open("POST","../../web/php/send_item_attempt.php?itemtypesid=" + itemtypesid + "&transactioncode=" + transactioncode,true);
                xmlhttp.send();
        },

	remediate: function(typeid)
        {
                var xmlhttp;
                if (window.XMLHttpRequest)
                {
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                                if (xmlhttp.responseText)
                                {
                                        if (typeof(xmlhttp.responseText)=="unknown")
                                        {
                                                return("");
                                        }
                                        else
                                        {
                                                APPLICATION.parseResponse(xmlhttp.responseText);
                                        }
                                }
                        }
		}
                xmlhttp.open("POST","../../web/php/remediate.php?typeid=" + typeid,true);
                xmlhttp.send();
        },

	practice: function(typeid)
        {
                var xmlhttp;
                if (window.XMLHttpRequest)
                {
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                                if (xmlhttp.responseText)
                                {
                                        if (typeof(xmlhttp.responseText)=="unknown")
                                        {
                                                return("");
                                        }
                                        else
                                        {
                                                APPLICATION.parseResponse(xmlhttp.responseText);
                                        }
                                }
                        }
		}
                xmlhttp.open("POST","../../web/php/practice.php?typeid=" + typeid,true);
                xmlhttp.send();
        },

        leavePractice: function(typeid)
        {
                var xmlhttp;
                if (window.XMLHttpRequest)
                {
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                                if (xmlhttp.responseText)
                                {
                                        if (typeof(xmlhttp.responseText)=="unknown")
                                        {
                                                return("");
                                        }
                                        else
                                        {
                                                APPLICATION.parseResponse(xmlhttp.responseText);
                                        }
                                }
                        }
                }
                xmlhttp.open("POST","../../web/php/leave_practice.php",true);
                xmlhttp.send();
        },

       	getStandardDescription: function(typeid)
        {
                var xmlhttp;
                if (window.XMLHttpRequest)
                {
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                                if (xmlhttp.responseText)
                                {
                                        if (typeof(xmlhttp.responseText)=="unknown")
                                        {
                                                return("");
                                        }
                                        else
                                        {
                                                APPLICATION.parseResponse(xmlhttp.responseText);
                                        }
                                }
                        }
                }
                xmlhttp.open("POST","../../web/php/get_standard_description.php?typeid=" + typeid,true);
                xmlhttp.send();
        },
	
	getItemDescription: function(typeid)
        {
                var xmlhttp;
                if (window.XMLHttpRequest)
                {
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                                if (xmlhttp.responseText)
                                {
                                        if (typeof(xmlhttp.responseText)=="unknown")
                                        {
                                                return("");
                                        }
                                        else
                                        {
                                                APPLICATION.parseResponse(xmlhttp.responseText);
                                        }
                                }
                        }
                }
                xmlhttp.open("POST","../../web/php/get_item_description.php?typeid=" + typeid,true);
                xmlhttp.send();
        },

	getPracticeDescription: function(typeid)
        {
                var xmlhttp;
                if (window.XMLHttpRequest)
                {
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                                if (xmlhttp.responseText)
                                {
                                        if (typeof(xmlhttp.responseText)=="unknown")
                                        {
                                                return("");
                                        }
                                        else
                                        {
                                                APPLICATION.parseResponse(xmlhttp.responseText);
                                        }
                                }
                        }
                }
                xmlhttp.open("POST","../../web/php/get_practice_description.php",true);
                xmlhttp.send();
        },
	
	getStudentItemStats: function(typeid)
        {
                var xmlhttp;
                if (window.XMLHttpRequest)
                {
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                                if (xmlhttp.responseText)
                                {
                                        if (typeof(xmlhttp.responseText)=="unknown")
                                        {
                                                return("");
                                        }
                                        else
                                        {
                                                APPLICATION.parseResponse(xmlhttp.responseText);
                                        }
                                }
                        }
                }
                xmlhttp.open("POST","../../web/php/get_student_item_stats.php",true);
                xmlhttp.send();
        },

	advanceToNextLevel: function()
        {
                var xmlhttp;
                if (window.XMLHttpRequest)
                {
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
      			{
        			if (xmlhttp.responseText)
         			{
            				if (typeof(xmlhttp.responseText)=="unknown")
                        		{
                                		return("");
                        		}
                        		else
                        		{
						APPLICATION.parseResponse(xmlhttp.responseText);
					}
				}
			}
                }
                xmlhttp.open("POST","../../web/php/advance.php",true);
                xmlhttp.send();
        },

       	advanceToLastLevel: function()
        {
                var xmlhttp;

                if (window.XMLHttpRequest)
                {
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                                if (xmlhttp.responseText)
                                {
                                        if (typeof(xmlhttp.responseText)=="unknown")
                                        {
                                                return("");
                                        }
                                        else
                                        {
                                                APPLICATION.parseResponse(xmlhttp.responseText);
                                        }
                                }
                        }
		}
                xmlhttp.open("POST","../../web/php/rewind.php",true);
                xmlhttp.send();
        },
 	
	/**************** GAME DECIDER *******/
	// are we running the right game??
	gameDecider: function()
	{
		if (this.mRef_id == 'normal')
		{ 
             		if (this.mGameName != "normal")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "normal";
                               	this.mGame = new Normal(APPLICATION);
			}
                }
		if (this.mRef_id == 'evaluation')
		{ 
             		if (this.mGameName != "evaluation")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "evaluation";
                               	this.mGame = new Evaluation(APPLICATION);
			}
                }
		if (this.mRef_id == 'remediate')
		{ 
             		if (this.mGameName != "remediate")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "remediate";
                               	this.mGame = new Remediate(APPLICATION);
			}
                }
		if (this.mRef_id == 'practice')
		{ 
		//this is why practice wizzes by the wrong answer. you need to fix this tommorow...
             		if (this.mGameName != "practice")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "practice";
                               	this.mGame = new Practice(APPLICATION);
			}
                }
	}
});
