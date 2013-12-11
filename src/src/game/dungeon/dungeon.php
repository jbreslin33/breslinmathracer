var Dungeon = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);

		//cursor
		document.body.style.cursor = 'crosshair';

		this.mDoor = 0;
		this.mQuiz = new Quiz(this);
        	this.mApplication.mHud.mGameName.setText('<font size="2">DUNGEON</font>');
		this.createQuestions(); //do this once
		this.createWorld(); //do this once
 
		//state machine
                this.mDungeonStateMachine = new StateMachine(this);

                this.mGLOBAL_DUNGEON_GAME  = new GLOBAL_DUNGEON_GAME(this);
                this.mINIT_DUNGEON_GAME    = new INIT_DUNGEON_GAME(this);
                this.mRESET_DUNGEON_GAME   = new RESET_DUNGEON_GAME(this);
                this.mNORMAL_DUNGEON_GAME   = new NORMAL_DUNGEON_GAME(this);

                this.mDungeonStateMachine.setGlobalState(this.mGLOBAL_DUNGEON_GAME);
                this.mDungeonStateMachine.changeState(this.mINIT_DUNGEON_GAME);
	},

	destructor: function()
	{
		this.parent();
		this.mQuiz.destructor();
	},

	reset: function()
	{
		this.parent();
		this.createQuestions(); //do this once
		this.createWorld(); //do this once
	},

	update: function()
	{
		this.parent()
		this.mDungeonStateMachine.update();
	},

	createQuestions: function()
	{
		this.mQuiz.reset();
	},

	createWorld: function()
	{
		this.destroyShapesAndArray();
		this.mShapeArray = new Array();

		this.parent();
		
		this.mScoreNeeded = this.mQuiz.mQuestionArray.length;

		this.createQuestionShapes();
		
		this.createControlObject();

		scoreText = '<font size="2"> Needed :' +  this.mScoreNeeded + '</font>';
        	this.mApplication.mHud.mLevel.setText('<font size="2"> Level : ' + APPLICATION.mNextLevelID + '</font>');

		this.mApplication.mHud.mScoreNeeded.setText(scoreText);

		//chasers
		this.createChasers();
 	
		//key	
        	this.createKey("/images/key/key_dungeon.gif");

        	//create door
        	this.createDoor("/images/doors/door_closed.png","/images/doors/door_open.png");
	},

	createControlObject: function()
	{
		//*******************CONTROL OBJECT
                this.mControlObject = new Player(50,50,400,300,this,this.mQuiz.getSpecificQuestion(0),"/images/characters/wizard.png","","controlObject");

                //set animation instance
                this.mControlObject.mAnimation = new AnimationAdvanced(this.mControlObject);
                this.mControlObject.mAnimation.addAnimations('/images/characters/wizard_','.png');
                this.addToShapeArray(this.mControlObject);

        	this.mControlObject.mHideOnQuestionSolved = false;
        	this.mControlObject.createMountPoint(0,-5,-41);

        	this.mControlObject.showQuestionObject(false);
        	
		//text question mountee
        	var questionMountee = new QuestionShape(100,50,300,300,this,this.mQuiz.getSpecificQuestion(0),"","orange","questionMountee");
        	questionMountee.setMountable(true);
        	questionMountee.setHideOnDrop(true);
        	this.addToShapeArray(questionMountee);
        	this.mControlObject.setStartingMountee(questionMountee);

        	//do the mount
        	this.mControlObject.mount(questionMountee,0);

        	questionMountee.setBackgroundColor("transparent");
        	questionMountee.showQuestion(true);

		//sync with mounter
		questionMountee.setCopyQuestionFromMounter(true);
	},

	createQuestionShapes: function()
	{
 		count = 0;
                for (i = 0; i < this.mQuiz.mQuestionArray.length; i++)
                {
                        var openPoint = this.getOpenPoint2D(40,735,75,375,50,7);
                        var shape;
                        this.addToShapeArray(shape = new QuestionShape(50,50,openPoint.mX,openPoint.mY,this,this.mQuiz.getSpecificQuestion(count),"/images/treasure/gold_coin_head.png","","question"));
                        shape.createMountPoint(0,-5,-41);
                        shape.showQuestion(false);

                        //numberMount to go on top let's make it small and draw it on top
                        var questionMountee = new QuestionShape(1,1,100,100,this,this.mQuiz.getSpecificQuestion(count),"","orange","questionMountee");
                        questionMountee.setMountable(true);
                        this.addToShapeArray(questionMountee);
                        shape.setStartingMountee(questionMountee);
                        questionMountee.showQuestion(false);

                        //do the mount
                        shape.mount(questionMountee,0);

                        questionMountee.setBackgroundColor("transparent");

                        //evaluate questions
                        questionMountee.setEvaluateQuestions(false);

                        count++;
                }
	},

	createChasers: function()
	{
                for (i = 0; i < 1; i++)
                {
                        var openPoint = this.getOpenPoint2D(40,735,75,375,50,7);
                        var shape = new ShapeChaser(50,50,openPoint.mX,openPoint.mY,this,"/images/monster/red_monster.png","","chaser");
                        this.addToShapeArray(shape);
                }
	},

	createKey: function(image_source)
	{
        	var keyQuestion = new Question('Pick up key.',"key");
        	this.mQuiz.mQuestionArray.push(keyQuestion);

        	openPoint = this.getOpenPoint2D(40,735,75,375,50,7);
        	var key = new QuestionShape(50,50,openPoint.mX,openPoint.mY,this,keyQuestion,"/images/key/key_dungeon.gif","","key");
        	key.setVisibility(false);
        	key.mShowOnlyOnQuizComplete = true;
       	 	key.mMountable = true;
        	key.setHideOnQuestionSolved(false);
        	this.addToShapeArray(key);
	},

	createDoor: function(image_source_closed,image_source_open)
	{
        	var doorQuestion = new Question('Open door with key.',"door");
        	this.mQuiz.mQuestionArray.push(doorQuestion);

        	var openPoint = this.getOpenPoint2D(40,735,75,375,50,7);
        	this.mDoor = new ShapeDoor(50,50,openPoint.mX,openPoint.mY,this,doorQuestion,image_source_closed,"","door",image_source_open);
        	this.mDoor.mUrl = '/src/database/goto_next_level.php';
        	this.mDoor.mOpenOnQuestionSolved = true;
        	this.addToShapeArray(this.mDoor);
	},
  
	levelPassedEnter: function()
        {
	 	mApplication.mLevelCompleted = true;
        },

        levelPassedExecute: function()
        {
 		//just wait here until what???
        	if (mApplication.mAdvanceToNextLevelConfirmation)
        	{
                	mDungeonStateMachine.changeState(mSHOW_LEVEL_PASSED_DUNGEON);
        	}
        },

        levelPassedExit: function()
        {

        },

        showLevelPassedEnter: function()
        {
        	mShowLevelPassedStartTime = mTimeSinceEpoch;

        	//correctAnswer
        	mCorrectAnswerBarHeader.mMesh.value = '';
        	mCorrectAnswerBarHeader.mMesh.innerHTML = 'LEVEL PASSED!!!!!!';
        	mCorrectAnswerBar.mMesh.value = '';
        	mCorrectAnswerBar.mMesh.innerHTML = 'HOORAY!';
        	showCorrectAnswerBar();

        	mVictoryShape_0.setVisibility(true);
        	mVictoryShape_0.setPosition(50,300);
        	mVictoryShape_1.setVisibility(true);
        	mVictoryShape_1.setPosition(100,300);
        	mVictoryShape_2.setVisibility(true);
        	mVictoryShape_2.setPosition(150,300);
        	mVictoryShape_3.setVisibility(true);
        	mVictoryShape_3.setPosition(200,300);
        	mVictoryShape_4.setVisibility(true);
        	mVictoryShape_4.setPosition(250,300);
        	mVictoryShape_5.setVisibility(true);
        	mVictoryShape_5.setPosition(300,300);
        	mVictoryShape_6.setVisibility(true);
       	 	mVictoryShape_6.setPosition(350,300);
        	mVictoryShape_7.setVisibility(true);
        	mVictoryShape_7.setPosition(400,300);
        	mVictoryShape_8.setVisibility(true);
        	mVictoryShape_8.setPosition(450,300);
        	mVictoryShape_9.setVisibility(true);
        	mVictoryShape_9.setPosition(500,300);
       		mVictoryShape_10.setVisibility(true);
        	mVictoryShape_10.setPosition(550,300);
        	mVictoryShape_11.setVisibility(true);
        	mVictoryShape_11.setPosition(600,300);
        	mVictoryShape_12.setVisibility(true);
        	mVictoryShape_12.setPosition(650,300);
        	mVictoryShape_13.setVisibility(true);
        	mVictoryShape_13.setPosition(700,300);
        },
        showLevelPassedExecute: function()
        {
    		if (mTimeSinceEpoch > mShowLevelPassedStartTime + mShowLevelPassedThresholdTime)
        	{
                	mDungeonStateMachine.changeState(mINIT_DUNGEON_GAME);
        	}
        },
        showLevelPassedExit: function()
        {
        	hideCorrectAnswerBar();
        	mCorrectAnswerBarHeader.mMesh.value = '';
        	mCorrectAnswerBarHeader.mMesh.innerHTML = '';
        	mCorrectAnswerBar.mMesh.value = '';
        	mCorrectAnswerBar.mMesh.innerHTML = '';
        	mVictoryShape_0.setVisibility(false);
        	mVictoryShape_0.setPosition(50,300);
        	mVictoryShape_1.setVisibility(false);
        	mVictoryShape_1.setPosition(100,300);
        	mVictoryShape_2.setVisibility(false);
        	mVictoryShape_2.setPosition(150,300);
        	mVictoryShape_3.setVisibility(false);
        	mVictoryShape_3.setPosition(200,300);
        	mVictoryShape_4.setVisibility(false);
        	mVictoryShape_4.setPosition(250,300);
        	mVictoryShape_5.setVisibility(false);
        	mVictoryShape_5.setPosition(300,300);
        	mVictoryShape_6.setVisibility(false);
        	mVictoryShape_6.setPosition(350,300);
        	mVictoryShape_7.setVisibility(false);
        	mVictoryShape_7.setPosition(400,300);
        	mVictoryShape_8.setVisibility(false);
        	mVictoryShape_8.setPosition(450,300);
        	mVictoryShape_9.setVisibility(false);
        	mVictoryShape_9.setPosition(500,300);
        	mVictoryShape_10.setVisibility(false);
        	mVictoryShape_10.setPosition(550,300);
        	mVictoryShape_11.setVisibility(false);
        	mVictoryShape_11.setPosition(600,300);
        	mVictoryShape_12.setVisibility(false);
        	mVictoryShape_12.setPosition(650,300);
        	mVictoryShape_13.setVisibility(false);
        	mVictoryShape_13.setPosition(700,300);
        }
});
