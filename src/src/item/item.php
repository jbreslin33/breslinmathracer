/*
barebones item class. Should this even have a gui????? I think it should be an abstract class with just an question and answer. let those that implent/extend it provide the gui.
*/

var Item = new Class(
{
        initialize: function(sheet)
        {
		this.mStateLogs = false;		

		this.mSheet = sheet;

		this.mUpdate = 1;
    		this.raphael = 0;
		
		this.mClock = 0;

		//answer control vars
		this.mChopWhiteSpace = true;
		this.mIgnoreCase = true;
		this.mStripCommas = true;
	
		//question
		this.mQuestion = '';

		//answer
		this.mAnswerArray = new Array();
		
		//tip
		this.mTipArray = new Array();

		//status	
		this.mTransactionCode = 0; //notAttempted=0,correct=1,incorrect=2
		
		//stats
		this.mStreak = 0;
		
		//stats
		this.mProgressedTypeID = '';

		//userAnswer
		this.mUserAnswer = '';

		this.mShapeArray   = new Array();
		this.mQuestionShapeArray   = new Array();
       
		//type 
		this.mStandardDescription = '';
		this.mItemDescription = '';
		this.mPracticeDescription = '';
		this.mCoreDescription = '';
		this.mTimesTablesDescription = '';
		this.mType = 0; //uncategorized

		//times 
		this.mThresholdTime = 0;
                this.mAnswerTime = 0;
                this.mQuestionStartTime = 0;
                this.mOutOfTime = false;

                //times for show correct
                this.mCorrectAnswerStartTime = 0;
                this.mCorrectAnswerThresholdTime = 2000;

		//times for showContinueCorrect
                this.mShowContinueCorrectStartTime = 0;
                this.mShowContinueCorrectThresholdTime = 250;

		//times for resend
		this.mResendStartTime = 0; 
		this.mResendThresholdTime = 100; 

		//continue button vars
		this.mContinueCorrect = false;
		this.mContinueIncorrect = false;
		this.mContinueSpeed = false;
		this.mContinueCorrectButton = 0; 
		this.mContinueIncorrectButton = 0; 
		this.mContinueSpeedButton = 0; 

		//show standards 
		this.mStandardInfo = 0;
		this.mShowStandard = false;
			
		//show types
		this.mItemInfo = 0;
		this.mShowItem = false;

		//show practice
		this.mPracticeInfo = 0;
		this.mPracticeInfoButton = 0;
		this.mLeavePracticeButton = 0;
		this.mShowPractice = false;

		//show coreStandard
		this.mCoreInfo = 0;
		this.mCoreInfoButton = 0;

		//show times tables
		this.mTimesTablesInfo = 0;
		this.mTimesTablesInfoButton = 0;
		this.mShowTimesTables = 0;
		
		//show Main Menu
		this.mMainMenuInfo = 0;
		this.mMainMenuInfoButton = 0;
		this.mShowMainMenu = 0;

		//states
                this.mStateMachine = new StateMachine(this);

                this.mGLOBAL_ITEM   = new GLOBAL_ITEM  (this);
                this.mINIT_ITEM     = new INIT_ITEM    (this);

                //wait state
                this.mWAITING_ON_ANSWER_ITEM   = new WAITING_ON_ANSWER_ITEM(this);
		this.mWAITING_ON_SPEED_ITEM   = new WAITING_ON_SPEED_ITEM(this);

		//correct states
                this.mCORRECT_ITEM = new CORRECT_ITEM(this);
                this.mCONTINUE_CORRECT = new CONTINUE_CORRECT(this);
               
		//incorrect states 
		this.mSHOW_CORRECT_ANSWER_ITEM = new SHOW_CORRECT_ANSWER_ITEM(this);
                this.mCONTINUE_INCORRECT = new CONTINUE_INCORRECT(this);
                this.mINCORRECT_ITEM = new INCORRECT_ITEM(this);

		//report states
                this.mSHOW_STANDARD = new SHOW_STANDARD(this);
                this.mSHOW_ITEM = new SHOW_ITEM(this);
                this.mSHOW_PRACTICE = new SHOW_PRACTICE(this);
                this.mSHOW_CORE = new SHOW_CORE(this);
                this.mSHOW_TIMES_TABLES = new SHOW_TIMES_TABLES(this);
                this.mSHOW_MAIN_MENU = new SHOW_MAIN_MENU(this);

		//out of time
                this.mOUT_OF_TIME_ITEM = new OUT_OF_TIME_ITEM(this);

                this.mStateMachine.setGlobalState(this.mGLOBAL_ITEM);
                this.mStateMachine.changeState(this.mINIT_ITEM);

		this.mItemAttempt = 0;
	},

	setTheFocus: function()
	{

	},

	setItemAttempt: function(itemAttempt)
	{
		this.mItemAttempt = itemAttempt;	
	},

	setTransactionCode: function(code)
	{
		this.mTransactionCode = code;
		this.mItemAttempt.setTransactionCode(code);
	},
	
	addShape: function(shape)
	{
		this.mShapeArray.push(shape);
		this.mSheet.mGame.addShape(shape);	
	},
	
	addQuestionShape: function(shape)
	{
		this.mQuestionShapeArray.push(shape);
		this.addShape(shape);
	},

	removeShape: function(shape)
        {
		//remove from game array first..
		this.mSheet.mGame.removeShape(shape);	

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

	createShapes: function()
        {
		//youtube
                this.mYoutubeShape = new Shape(700,350,400,225,this.mSheet.mGame,"","","");
                this.addShape(this.mYoutubeShape);
		//this.mYoutubeShape.setText('<iframe width="560" height="315" src="https://www.youtube.com/embed/9mjZ4qU57Go" frameborder="0" allowfullscreen></iframe>'); 	
	
                //mContinueCorrectButton
                this.mContinueCorrectButton = new ContinueCorrectButton(150,50,650,400,this.mSheet.mGame,"BUTTON","","");
		this.mContinueCorrectButton.mMesh.innerHTML = 'CONTINUE';
                this.addShape(this.mContinueCorrectButton);
                
		//mContinueIncorrectButton
                this.mContinueIncorrectButton = new ContinueIncorrectButton(150,50,650,400,this.mSheet.mGame,"BUTTON","","");
		this.mContinueIncorrectButton.mMesh.innerHTML = 'CONTINUE';
                this.addShape(this.mContinueIncorrectButton);
		
                //mContinueSpeedButton
                this.mContinueSpeedButton = new ContinueSpeedButton(150,50,650,400,this.mSheet.mGame,"BUTTON","","");
                this.mContinueSpeedButton.mMesh.innerHTML = 'CONTINUE';
                this.addShape(this.mContinueSpeedButton);
		
		//mSpeedInfo
                this.mSpeedInfo = new Shape(200,20,200,30,this.mSheet.mGame,"","","");
		this.mSpeedInfo.setText("Speed question ahead!");
                this.addShape(this.mSpeedInfo);

		//mStandardInfo
                this.mStandardInfo = new Shape(700,350,400,225,this.mSheet.mGame,"","","");
                this.addShape(this.mStandardInfo);
		
		//mItemInfo
                this.mItemInfo = new Shape(700,350,400,225,this.mSheet.mGame,"","","");
                this.addShape(this.mItemInfo);

                //mPracticeInfo
                this.mPracticeInfo = new Shape(200,50,125,225,this.mSheet.mGame,"SELECT","","");
                this.addShape(this.mPracticeInfo);
                
		this.mPracticeInfoButton = new SubmitPracticeItemButton(200,50,350,225,this.mSheet.mGame,"BUTTON","","");
                this.mPracticeInfoButton.mMesh.innerHTML = 'PRACTICE ITEM';
                this.addShape(this.mPracticeInfoButton);
		
		this.mLeavePracticeButton = new LeavePracticeButton(200,50,575,225,this.mSheet.mGame,"BUTTON","","");
                this.mLeavePracticeButton.mMesh.innerHTML = 'LEAVE PRACTICE';
                this.addShape(this.mLeavePracticeButton);

		//CORE
                //mCoreInfo
                this.mCoreInfo = new Shape(200,50,125,225,this.mSheet.mGame,"SELECT","","");
                this.addShape(this.mCoreInfo);

                this.mCoreInfoButton = new SubmitCoreItemButton(200,50,350,225,this.mSheet.mGame,"BUTTON","","");
                this.mCoreInfoButton.mMesh.innerHTML = 'CORE ITEM';
                this.addShape(this.mCoreInfoButton);
                
		//TIMES TABLES
		//mTimesInfo
                this.mTimesTablesInfo = new Shape(200,50,125,100,this.mSheet.mGame,"SELECT","","");
                this.addShape(this.mTimesTablesInfo);

                //MAIN MENU
                //mMainMenuInfo
                this.mMainMenuInfo = new Shape(200,50,125,100,this.mSheet.mGame,"SELECT","","");
                this.addShape(this.mMainMenuInfo);

		//K

		
		var optionO = document.createElement("option");
                optionO.value = 25;
                optionO.text = 'k.cc';
         	if (navigator.appName == "Microsoft Internet Explorer")
		{
       	        	this.mTimesTablesInfo.mMesh.add(optionO);
		}
		else
		{
       	        	this.mTimesTablesInfo.mMesh.appendChild(optionO);
		}
		
		var optionP = document.createElement("option");
                optionP.value = 26;
                optionP.text = 'k.oa.a.4';
         	if (navigator.appName == "Microsoft Internet Explorer")
		{
       	        	this.mTimesTablesInfo.mMesh.add(optionP);
		}
		else
		{
       	        	this.mTimesTablesInfo.mMesh.appendChild(optionP);
		}
		
		//1s
                var optionT1 = document.createElement("option");
                optionT1.value = 1111;
                optionT1.text = 'tiny1s';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mTimesTablesInfo.mMesh.add(optionT1);
                }
                else
                {
                        this.mTimesTablesInfo.mMesh.appendChild(optionT1);
                }
		
		//2s
                var optionT2 = document.createElement("option");
                optionT2.value = 1112;
                optionT2.text = 'tiny2s';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mTimesTablesInfo.mMesh.add(optionT2);
                }
                else
                {
                        this.mTimesTablesInfo.mMesh.appendChild(optionT2);
                }
		
		//3s
                var optionT3 = document.createElement("option");
                optionT3.value = 1113;
                optionT3.text = 'tiny3s';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mTimesTablesInfo.mMesh.add(optionT3);
                }
                else
                {
                        this.mTimesTablesInfo.mMesh.appendChild(optionT3);
                }
		
		
		
		var optionC = document.createElement("option");
                optionC.value = 13;
                optionC.text = 'k.oa.a.5';
         	if (navigator.appName == "Microsoft Internet Explorer")
		{
                	this.mTimesTablesInfo.mMesh.add(optionC);
		}
		else
		{
                	this.mTimesTablesInfo.mMesh.appendChild(optionC);
		}

		//1
		
		var optionS = document.createElement("option");
                optionS.value = 29;
                optionS.text = '1.oa.b.3';
         	if (navigator.appName == "Microsoft Internet Explorer")
		{
       	        	this.mTimesTablesInfo.mMesh.add(optionS);
		}
		else
		{
       	        	this.mTimesTablesInfo.mMesh.appendChild(optionS);
		}
		
		var optionQ = document.createElement("option");
                optionQ.value = 27;
                optionQ.text = '1.oa.c.6';
         	if (navigator.appName == "Microsoft Internet Explorer")
		{
       	        	this.mTimesTablesInfo.mMesh.add(optionQ);
		}
		else
		{
       	        	this.mTimesTablesInfo.mMesh.appendChild(optionQ);
		}
		
		var optionN = document.createElement("option");
                optionN.value = 24;
                optionN.text = '1.nbt';
         	if (navigator.appName == "Microsoft Internet Explorer")
		{
       	        	this.mTimesTablesInfo.mMesh.add(optionN);
		}
		else
		{
       	        	this.mTimesTablesInfo.mMesh.appendChild(optionN);
		}
		

		//9s
                var optionBABYNINE = document.createElement("option");
                optionBABYNINE.value = 1109;
                optionBABYNINE.text = 'baby9s';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mTimesTablesInfo.mMesh.add(optionBABYNINE);
                }
                else
                {
                        this.mTimesTablesInfo.mMesh.appendChild(optionBABYNINE);
                }
		
		//8s
                var optionBABYEIGHT = document.createElement("option");
                optionBABYEIGHT.value = 1108;
                optionBABYEIGHT.text = 'baby8s';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mTimesTablesInfo.mMesh.add(optionBABYEIGHT);
                }
                else
                {
                        this.mTimesTablesInfo.mMesh.appendChild(optionBABYEIGHT);
                }

		//7s
                var optionBABYSEVEN = document.createElement("option");
                optionBABYSEVEN.value = 1107;
                optionBABYSEVEN.text = 'baby7s';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mTimesTablesInfo.mMesh.add(optionBABYSEVEN);
                }
                else
                {
                        this.mTimesTablesInfo.mMesh.appendChild(optionBABYSEVEN);
                }

		//6s
                var optionBABYSIX = document.createElement("option");
                optionBABYSIX.value = 1106;
                optionBABYSIX.text = 'baby6s';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mTimesTablesInfo.mMesh.add(optionBABYSIX);
                }
                else
                {
                        this.mTimesTablesInfo.mMesh.appendChild(optionBABYSIX);
                }

		var optionR = document.createElement("option");
                optionR.value = 28;
                optionR.text = '2.oa.b.2';
         	if (navigator.appName == "Microsoft Internet Explorer")
		{
       	        	this.mTimesTablesInfo.mMesh.add(optionR);
		}
		else
		{
       	        	this.mTimesTablesInfo.mMesh.appendChild(optionR);
		}
		
		var optionM = document.createElement("option");
                optionM.value = 23;
                optionM.text = '2.nbt';
         	if (navigator.appName == "Microsoft Internet Explorer")
		{
       	        	this.mTimesTablesInfo.mMesh.add(optionM);
		}
		else
		{
       	        	this.mTimesTablesInfo.mMesh.appendChild(optionM);
		}


		//3

               	var optionB5 = document.createElement("option");
                optionB5.value = 6;
                optionB5.text = 'OLD SCHOOL 5';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mTimesTablesInfo.mMesh.add(optionB5);
                }
                else
                {
                        this.mTimesTablesInfo.mMesh.appendChild(optionB5);
                }

                var optionB2 = document.createElement("option");
                optionB2.value = 3;
                optionB2.text = 'OLD SCHOOL 2';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mTimesTablesInfo.mMesh.add(optionB2);
                }
                else
                {
                        this.mTimesTablesInfo.mMesh.appendChild(optionB2);
                }

                var optionB4 = document.createElement("option");
                optionB4.value = 5;
                optionB4.text = 'OLD SCHOOL 4';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mTimesTablesInfo.mMesh.add(optionB4);
                }
                else
                {
                        this.mTimesTablesInfo.mMesh.appendChild(optionB4);
                }


                var optionB8 = document.createElement("option");
                optionB8.value = 9;
                optionB8.text = 'OLD SCHOOL 8';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mTimesTablesInfo.mMesh.add(optionB8);
                }
                else
                {
                        this.mTimesTablesInfo.mMesh.appendChild(optionB8);
                }

                var optionB3 = document.createElement("option");
                optionB3.value = 4;
                optionB3.text = 'OLD SCHOOL 3';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mTimesTablesInfo.mMesh.add(optionB3);
                }
                else
                {
                        this.mTimesTablesInfo.mMesh.appendChild(optionB3);
                }

                var optionB6 = document.createElement("option");
                optionB6.value = 7;
                optionB6.text = 'OLD SCHOOL 6';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mTimesTablesInfo.mMesh.add(optionB6);
                }
                else
                {
                        this.mTimesTablesInfo.mMesh.appendChild(optionB6);
                }

                var optionB9 = document.createElement("option");
                optionB9.value = 10;
                optionB9.text = 'OLD SCHOOL 9';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mTimesTablesInfo.mMesh.add(optionB9);
                }
                else
                {
                        this.mTimesTablesInfo.mMesh.appendChild(optionB9);
                }

                var optionB7 = document.createElement("option");
                optionB7.value = 8;
                optionB7.text = 'OLD SCHOOL 7';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mTimesTablesInfo.mMesh.add(optionB7);
                }
                else
                {
                        this.mTimesTablesInfo.mMesh.appendChild(optionB7);
                }


		var optionB = document.createElement("option");
                optionB.value = 12;
                optionB.text = 'The Izzy 3.oa.c.7';
         	if (navigator.appName == "Microsoft Internet Explorer")
		{
       	        	this.mTimesTablesInfo.mMesh.add(optionB);
		}
		else
		{
       	        	this.mTimesTablesInfo.mMesh.appendChild(optionB);
		}
	/*	
		var optionI = document.createElement("option");
                optionI.value = 19;
                optionI.text = 'The Super Izzy';
         	if (navigator.appName == "Microsoft Internet Explorer")
		{
       	        	this.mTimesTablesInfo.mMesh.add(optionI);
		}
		else
		{
       	        	this.mTimesTablesInfo.mMesh.appendChild(optionI);
		}
	*/	
		var optionL = document.createElement("option");
                optionL.value = 22;
                optionL.text = '3.nbt';
         	if (navigator.appName == "Microsoft Internet Explorer")
		{
       	        	this.mTimesTablesInfo.mMesh.add(optionL);
		}
		else
		{
       	        	this.mTimesTablesInfo.mMesh.appendChild(optionL);
		}



		//4

		var optionJA = document.createElement("option");
                optionJA.value = 11;
                optionJA.text = '4.oa.b.4';
         	if (navigator.appName == "Microsoft Internet Explorer")
		{
       	        	this.mTimesTablesInfo.mMesh.add(optionJA);
		}
		else
		{
       	        	this.mTimesTablesInfo.mMesh.appendChild(optionJA);
		}

                var optionJB = document.createElement("option");
                optionJB.value = 14;
                optionJB.text = '4.nbt.b.4';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mTimesTablesInfo.mMesh.add(optionJB);
                }
                else
                {
                        this.mTimesTablesInfo.mMesh.appendChild(optionJB);
                }
               
              	var optionJC = document.createElement("option");
                optionJC.value = 20;
                optionJC.text = '4.nbt.b.5';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mTimesTablesInfo.mMesh.add(optionJC);
                }
                else
                {
                        this.mTimesTablesInfo.mMesh.appendChild(optionJC);
                }
                
		var option1140 = document.createElement("option");
                option1140.value = 1140;
                option1140.text = 'NO 0 Division';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mTimesTablesInfo.mMesh.add(option1140);
                }
                else
                {
                        this.mTimesTablesInfo.mMesh.appendChild(option1140);
                }

                var optionJD = document.createElement("option");
                optionJD.value = 21;
                optionJD.text = '4.nbt.b.6';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mTimesTablesInfo.mMesh.add(optionJD);
                }
                else
                {
                        this.mTimesTablesInfo.mMesh.appendChild(optionJD);
                }

                var optionJE = document.createElement("option");
                optionJE.value = 30;
                optionJE.text = '4.nf.b.3.c';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mTimesTablesInfo.mMesh.add(optionJE);
                }
                else
                {
                        this.mTimesTablesInfo.mMesh.appendChild(optionJE);
                }
 

		//5
/*
                var optionUA = document.createElement("option");
                optionUA.value = 31;
                optionUA.text = '5.oa.a.1';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mTimesTablesInfo.mMesh.add(optionUA);
                }
                else
                {
                        this.mTimesTablesInfo.mMesh.appendChild(optionUA);
                }
*/
                var optionUB = document.createElement("option");
                optionUB.value = 32;
                optionUB.text = '5.nbt.b.5';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mTimesTablesInfo.mMesh.add(optionUB);
                }
                else
                {
                        this.mTimesTablesInfo.mMesh.appendChild(optionUB);
                }
		

               	var optionUD = document.createElement("option");
                optionUD.value = 33;
                optionUD.text = '5.nbt.b.6';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mTimesTablesInfo.mMesh.add(optionUD);
                }
                else
                {
                        this.mTimesTablesInfo.mMesh.appendChild(optionUD);
                }

                var optionUE = document.createElement("option");
                optionUE.value = 34;
                optionUE.text = '5.nbt.b.7';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mTimesTablesInfo.mMesh.add(optionUE);
                }
                else
                {
                        this.mTimesTablesInfo.mMesh.appendChild(optionUE);
                }

                var optionUDD = document.createElement("option");
                optionUDD.value = 999;
                optionUDD.text = 'DD';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mTimesTablesInfo.mMesh.add(optionUDD);
                }
                else
                {
                        this.mTimesTablesInfo.mMesh.appendChild(optionUDD);
                }

                var optionUF = document.createElement("option");
                optionUF.value = 35;
                optionUF.text = '5.nf.a.1';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mTimesTablesInfo.mMesh.add(optionUF);
                }
                else
                {
                        this.mTimesTablesInfo.mMesh.appendChild(optionUF);
                }
                
		var optionPlay = document.createElement("option");
                optionPlay.value = 1;
                optionPlay.text = 'Play';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mTimesTablesInfo.mMesh.add(optionPlay);
                }
                else
                {
                        this.mTimesTablesInfo.mMesh.appendChild(optionPlay);
                }


                var optionVA = document.createElement("option");
                optionVA.value = 1051;
                optionVA.text = '5.oa';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mTimesTablesInfo.mMesh.add(optionVA);
                }
                else
                {
                        this.mTimesTablesInfo.mMesh.appendChild(optionVA);
                }

                var optionVB = document.createElement("option");
                optionVB.value = 1052;
                optionVB.text = '5.nbt';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mTimesTablesInfo.mMesh.add(optionVB);
                }
                else
                {
                        this.mTimesTablesInfo.mMesh.appendChild(optionVB);
                }

                var optionVC = document.createElement("option");
                optionVC.value = 1053;
                optionVC.text = '5.nf';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mTimesTablesInfo.mMesh.add(optionVC);
                }
                else
                {
                        this.mTimesTablesInfo.mMesh.appendChild(optionVC);
                }

                var optionVD = document.createElement("option");
                optionVD.value = 1054;
                optionVD.text = '5.md';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mTimesTablesInfo.mMesh.add(optionVD);
                }
                else
                {
                        this.mTimesTablesInfo.mMesh.appendChild(optionVD);
                }

                var optionVE = document.createElement("option");
                optionVE.value = 1055;
                optionVE.text = '5.g';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mTimesTablesInfo.mMesh.add(optionVE);
                }
                else
                {
                        this.mTimesTablesInfo.mMesh.appendChild(optionVE);
                }


                var optionUG = document.createElement("option");
                optionUG.value = 36;
                optionUG.text = '6.rp';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mTimesTablesInfo.mMesh.add(optionUG);
                }
                else
                {
                        this.mTimesTablesInfo.mMesh.appendChild(optionUG);
                }

                var optionUH = document.createElement("option");
                optionUH.value = 37;
                optionUH.text = '6.ns';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mTimesTablesInfo.mMesh.add(optionUH);
                }
                else
                {
                        this.mTimesTablesInfo.mMesh.appendChild(optionUH);
                }

                var optionUI = document.createElement("option");
                optionUI.value = 38;
                optionUI.text = '6.ee';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mTimesTablesInfo.mMesh.add(optionUI);
                }
                else
                {
                        this.mTimesTablesInfo.mMesh.appendChild(optionUI);
                }

                var optionUJ = document.createElement("option");
                optionUJ.value = 39;
                optionUJ.text = '6.g';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mTimesTablesInfo.mMesh.add(optionUJ);
                }
                else
                {
                        this.mTimesTablesInfo.mMesh.appendChild(optionUJ);
                }

                var optionUK = document.createElement("option");
                optionUK.value = 40;
                optionUK.text = '6.sp';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mTimesTablesInfo.mMesh.add(optionUK);
                }
                else
                {
                        this.mTimesTablesInfo.mMesh.appendChild(optionUK);
                }

               	var optionE = document.createElement("option");
                optionE.value = 15;
                optionE.text = 'Test';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mTimesTablesInfo.mMesh.add(optionE);
                }
                else
                {
                        this.mTimesTablesInfo.mMesh.appendChild(optionE);
                }
		
		var optionF = document.createElement("option");
                optionF.value = 16;
                optionF.text = 'Terra Nova';
         	if (navigator.appName == "Microsoft Internet Explorer")
		{
                	this.mTimesTablesInfo.mMesh.add(optionF);
		}
		else
		{
                	this.mTimesTablesInfo.mMesh.appendChild(optionF);
		}
		
		var optionTNTWO = document.createElement("option");
                optionTNTWO.value = 1002;
                optionTNTWO.text = 'Terra Nova 2';
         	if (navigator.appName == "Microsoft Internet Explorer")
		{
                	this.mTimesTablesInfo.mMesh.add(optionTNTWO);
		}
		else
		{
                	this.mTimesTablesInfo.mMesh.appendChild(optionTNTWO);
		}
		
		var optionTNTHREE = document.createElement("option");
                optionTNTHREE.value = 1003;
                optionTNTHREE.text = 'Terra Nova 3';
         	if (navigator.appName == "Microsoft Internet Explorer")
		{
                	this.mTimesTablesInfo.mMesh.add(optionTNTHREE);
		}
		else
		{
                	this.mTimesTablesInfo.mMesh.appendChild(optionTNTHREE);
		}
		
		var optionTNFOUR = document.createElement("option");
                optionTNFOUR.value = 1004;
                optionTNFOUR.text = 'Terra Nova 4';
         	if (navigator.appName == "Microsoft Internet Explorer")
		{
                	this.mTimesTablesInfo.mMesh.add(optionTNFOUR);
		}
		else
		{
                	this.mTimesTablesInfo.mMesh.appendChild(optionTNFOUR);
		}
		
		var optionTNFIVE = document.createElement("option");
                optionTNFIVE.value = 1005;
                optionTNFIVE.text = 'Terra Nova 5';
         	if (navigator.appName == "Microsoft Internet Explorer")
		{
                	this.mTimesTablesInfo.mMesh.add(optionTNFIVE);
		}
		else
		{
                	this.mTimesTablesInfo.mMesh.appendChild(optionTNFIVE);
		}
		
		var optionG = document.createElement("option");
                optionG.value = 17;
                optionG.text = 'Homework';
         	if (navigator.appName == "Microsoft Internet Explorer")
		{
                	this.mTimesTablesInfo.mMesh.add(optionG);
		}
		else
		{
                	this.mTimesTablesInfo.mMesh.appendChild(optionG);
		}
		
		var optionUM = document.createElement("option");
                optionUM.value = 18;
                optionUM.text = 'Test Prep';
         	if (navigator.appName == "Microsoft Internet Explorer")
		{
                	this.mTimesTablesInfo.mMesh.add(optionUM);
		}
		else
		{
                	this.mTimesTablesInfo.mMesh.appendChild(optionUM);
		}

		//add_game_J	

		//TIMES TABLES

		this.mTimesTablesInfoButton = new SubmitTimesTablesInfoButton(200,50,350,100,this.mSheet.mGame,"BUTTON","","");
                this.mTimesTablesInfoButton.mMesh.innerHTML = 'TIMES TABLES';
                this.addShape(this.mTimesTablesInfoButton);

		//MAIN MENU
                this.mMainMenuInfoButton = new SubmitMainMenuInfoButton(200,50,350,100,this.mSheet.mGame,"BUTTON","","");
                this.mMainMenuInfoButton.mMesh.innerHTML = 'MAIN MENU';
                this.addShape(this.mMainMenuInfoButton);

	},

       	//this will clean up all shapes in this item and it will take this items shapes out of game array
	destroyShapes: function()
        {
		this.mSheet.mGame.destroyShapes();

                //shapes and array
                while (this.mShapeArray.length > 0)
                {
			shape = this.mShapeArray[0];	

			//remove from item shape array
			this.removeShape(shape);
                }
                this.mShapeArray = 0;
                this.mShapeArray = new Array();
			
		if (this.mClock)
		{
			this.mClock.destroy();
		}
        },

	destructor: function()
	{
		this.destroyShapes();
	},

	update: function()
        {
		if (this.mSheet)
		{
                	//state machine
                	this.mStateMachine.update();

			if (this.mClock)
			{
				this.mClock.update();
			}
		}

		//lets make screen red if they are over a certain U score
		var str = APPLICATION.mHud.mCyan.getText();	
		if (str)
		{
			var strArray = str.split("U="); 
			if (strArray.length > 1)
			{
				var s = strArray[1];
				var u = 0;
				if (s.length == 8) //single digits
				{
					u = parseInt(s[0]); 			
				}
				if (s.length == 9) //double digits
				{
					u = parseInt(s[0] + s[1]); 			
				}
				if (s.length == 10) //trip digits
				{
					u = parseInt(s[0] + s[1] + s[2]); 			
				}
	
				if (u > 4) //5+
				{		
					document.body.style.backgroundColor="orange";
				}
				else if (u < 5 && u > 1)//2,3,4
				{		
					document.body.style.backgroundColor="00FFFF";
				}
				if (u < 2) 
				{
					document.body.style.backgroundColor="#66FF33";
				}
			}
		}
        },

	setUserAnswer: function(userAnswer)
	{
		//strip all whitespace
		var answer = userAnswer;	

		if (this.mChopWhiteSpace == true)
		{
			answer = answer.replace(/ /g,'');	
		}

		//to lowercase	
		if (this.mIgnoreCase == true)
		{
			answer = answer.toLowerCase();	
		}

		//strip commas
		if (this.mStripCommas == true)
		{
			answer = answer.replace(/,/g,'');	
		}
		
		this.mUserAnswer = answer;
		this.mItemAttempt.mUserAnswer = this.mUserAnswer;
	},
	
	checkUserAnswer: function()
	{
		correctAnswerFound = false;
		for (i = 0; i <  this.mAnswerArray.length; i++)
		{
			//ignorecase
			if (this.mIgnoreCase == true)
			{
				if (this.mUserAnswer == this.mAnswerArray[i].toLowerCase())
				{
					correctAnswerFound = true;	
				}	 
			}
			else
			{
				if (this.mUserAnswer == this.mAnswerArray[i])
				{
					correctAnswerFound = true;	
				}	 
			}
		}
		if (correctAnswerFound == false)
		{
			this.mSheet.setTypeWrong(this.mType);
		}
		return correctAnswerFound;
	},

	getType: function()
	{
		return this.mType;
	},

	set: function(question,answer)
	{
		this.mQuestion = question;
		this.mAnswer = answer;
		this.mSolved = false;
	},
	
	setQuestion: function(question)
	{
		this.mQuestion = question;
	},

	setAnswer: function(answer,slot)
	{
		this.mAnswerArray[slot] = answer;
	},	
	
	setShowAnswer: function(showAnswer)
	{
		this.mShowAnswer = showAnswer;
	},

	setSolved: function(b)
	{
		this.mSolved = b;
	},
	
	getSolved: function()
	{
		return this.mSolved;
	},
	
	getQuestion: function()
	{
		return this.mQuestion;
	},

	getAnswer: function(index)
	{
		if (index == null)
		{
			return this.mAnswerArray[0];	
		}
		return this.mAnswerArray[index];
	},

	getAnswerTwo: function()
	{
		return this.mAnswerArray[1];
	},
	getAnswerThree: function()
	{
		return this.mAnswerArray[2];
	},
	getAnswerFour: function()
	{
		return this.mAnswerArray[3];
	},
	
	getShowAnswer: function()
	{
		return this.mShowAnswer;
	},

	hideShapes: function()
	{
   		for (i = 0; i < this.mShapeArray.length; i++)
                {
                        this.mShapeArray[i].setVisibility(false);
                }
	},
	
	showShapes: function()
	{
   		for (i = 0; i < this.mShapeArray.length; i++)
                {
                        this.mShapeArray[i].setVisibility(true);
                }
	},
	
	//ajax here??
	showStandard: function()
	{	
		if (this.mStandardDescription == '')
		{
			APPLICATION.getStandardDescription(this.mType);
		}
		
		this.mStandardInfo.setVisibility(true);
	},
	
	hideStandard: function()
	{	
		this.mStandardInfo.setVisibility(false);
	},

	//speed
        showSpeed: function()
        {
                this.mSpeedInfo.setVisibility(true);
        },

        hideSpeed: function()
        {
                this.mSpeedInfo.setVisibility(false);
        },
	
	showItem: function()
	{	
		if (this.mItemDescription == '')
		{
			APPLICATION.getItemDescription(this.mType);
		}
		
		this.mItemInfo.setVisibility(true);
	},

	hideItem: function()
	{	
		this.mItemInfo.setVisibility(false);
	},
	
       	showPractice: function()
        {      
                //APPLICATION.getPracticeDescription(this.mType);

		if (APPLICATION.mRef_id == 'practice')
		{
                	this.mLeavePracticeButton.setVisibility(true);
		}
		else
		{
               		this.mPracticeInfo.setVisibility(true);
               		this.mPracticeInfoButton.setVisibility(true);
		}
        },

	showTimesTables: function()
        {
                this.mTimesTablesInfo.setVisibility(true);
                this.mTimesTablesInfoButton.setVisibility(true);
        },

        showMainMenu: function()
        {
                this.mMainMenuInfo.setVisibility(true);
                this.mMainMenuInfoButton.setVisibility(true);
        },

        hidePractice: function()
        {      
                this.mPracticeInfo.setVisibility(false);
                this.mPracticeInfoButton.setVisibility(false);
                this.mLeavePracticeButton.setVisibility(false);
        },

        hideTimesTables: function()
        {
                this.mTimesTablesInfo.setVisibility(false);
                this.mTimesTablesInfoButton.setVisibility(false);
        },

        hideMainMenu: function()
        {
                this.mMainMenuInfo.setVisibility(false);
                this.mMainMenuInfoButton.setVisibility(false);
        },

	showAnswerInputs: function()
	{

	},
	
	hideUserAnswer: function()
	{

	},

	showUserAnswer: function()
	{

	},
	
	hideAnswerInputs: function()
	{

	},
	
	showCorrectAnswer: function()
	{
                if (this.mYoutubeShape)
                {
                        this.mYoutubeShape.setVisibility(true);
                }
	},

	hideCorrectAnswer: function()
	{
                if (this.mYoutubeShape)
                {
                        this.mYoutubeShape.setVisibility(false);
                }
	},
	
	showContinueCorrect: function()
	{
	
	},
	
	hideContinueCorrect: function()
	{
	},
	
	showContinueIncorrect: function()
	{
		this.mContinueIncorrectButton.setVisibility(true);
	},
	
	hideContinueIncorrect: function()
	{
		this.mContinueIncorrectButton.setVisibility(false);
	},

        showContinueSpeed: function()
        {
                this.mContinueSpeedButton.setVisibility(true);
        },

        hideContinueSpeed: function()
        {
                this.mContinueSpeedButton.setVisibility(false);
        },

	createQuestionShapes: function()
	{

	},	

	showQuestion: function()
	{

	},
	
	hideQuestion: function()
	{
	},
	
	showQuestionShapes: function()
	{
   		for (i = 0; i < this.mQuestionShapeArray.length; i++)
                {
                        this.mQuestionShapeArray[i].setVisibility(true);
                }
	},

	hideQuestionShapes: function()
	{
   		for (i = 0; i < this.mQuestionShapeArray.length; i++)
                {
                        this.mQuestionShapeArray[i].setVisibility(false);
                }  
	},

	fillPracticeSelect: function()
	{
                for (var i = 0; i < APPLICATION.mItemTypesArray.length; i++)
                {
			var option = document.createElement("option");
    			option.value = APPLICATION.mItemTypesArray[i];
    			option.text = APPLICATION.mItemTypesArray[i];
         		if (navigator.appName == "Microsoft Internet Explorer")
			{
    				this.mPracticeInfo.mMesh.add(option);		
			}
			else
			{
    				this.mPracticeInfo.mMesh.appendChild(option);		
			}
		}
	}
});
