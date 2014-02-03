var Dungeon = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);

		//cursor
		document.body.style.cursor = 'crosshair';

		this.mDoor = 0;
	},

	createWorld: function()
	{
		this.log('createWorld in dungeon');
		this.parent();

		this.createQuestionShapes();
		
		this.createControlObject();

		//chasers
		this.createChasers();
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
                        this.addToShapeArray(shape = new QuestionShape(50,50,openPoint.mX,openPoint.mY,this,this.mQuiz.getSpecificQuestion(count),"/images/planets/planet.png","","question"));
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

	//STATES
  
	normalGameExecute: function()
	{
		this.parent();

   		if (this.mQuiz.isQuizComplete())
        	{
                	this.mStateMachine.changeState(this.mLEVEL_PASSED);
        	}

        	if (this.mKilled == true)
        	{
                	this.mStateMachine.changeState(this.mRESET_GAME);
        	}
	},

	levelPassedEnter: function()
        {
		this.log('levelPassedEnter');
	 	this.mApplication.mLevelCompleted = true;
        },

        levelPassedExecute: function()
        {
		this.log('levelPassedExecute');
 		//just wait here until what???
        	if (this.mApplication.mAdvanceToNextLevelConfirmation)
        	{
                	this.mStateMachine.changeState(this.mSHOW_LEVEL_PASSED);
        	}
        },

        showLevelPassedExecute: function()
        {
		this.log('showLevelPassedExecute');
    		if (this.mTimeSinceEpoch > this.mShowLevelPassedStartTime + this.mShowLevelPassedThresholdTime)
        	{
                	this.mStateMachine.changeState(this.mINIT_GAME);
        	}
        }
});
