var NumberPad = new Class(
{

Extends: GameSimple,

	initialize: function()
	{
       		this.parent();
		//this.createChasers();
	},

	update: function()
	{
		this.parent();
		//this.mLevel = 1;	
	},

/*
if (this.mOn)
                {
                        //get time since epoch and set lasttime
                        e = new Date();
                        this.mLastTimeSinceEpoch = this.mTimeSinceEpoch;
                        this.mTimeSinceEpoch = e.getTime();

                        //set deltatime as function of timeSinceEpoch and LastTimeSinceEpoch diff
                        this.mDeltaTime = this.mTimeSinceEpoch - this.mLastTimeSinceEpoch;

                        if(this.mDeltaTime < 50000)
                        {
                                this.mGameTime = this.mGameTime + this.mDeltaTime;
                        }

                        //check Keys from application
                        if (this.mKeysOn)
                        {
                                this.checkKeys();
                        }

                        if (this.mMouseOn)
                        {
                                this.checkMouse();
                        }

                        //move shapes
                        for (i = 0; i < this.mShapeArray.length; i++)
                        {
                                this.mShapeArray[i].update(this.mDeltaTime);
                        }

                        //collision Detection
                        this.checkForCollisions();

                        for (i = 0; i < this.mShapeArray.length; i++)
                        {
                                this.mShapeArray[i].render();
                        }

                        //save old positions
                        this.saveOldPositions();
                }

*/
	createControlObject: function()
	{
		//this.parent();
	},

	createQuestionShapes: function()
	{
		//this.parent();
	},

	createChasers: function()
	{
/*
                for (i = 0; i < 1; i++)
                {
                        var openPoint = this.getOpenPoint2D(40,735,75,375,50,7);
                        var shape = new ShapeChaser(50,50,openPoint.mX,openPoint.mY,this,"/images/monster/red_monster.png","","chaser");
                        this.addToShapeArray(shape);
                }
*/
	},

	createKey: function(image_source)
	{
/*
        	var keyQuestion = new Question('Pick up key.',"key");
        	this.mQuiz.mQuestionArray.push(keyQuestion);

        	openPoint = this.getOpenPoint2D(40,735,75,375,50,7);
        	var key = new QuestionShape(50,50,openPoint.mX,openPoint.mY,this,keyQuestion,"/images/key/key_dungeon.gif","","key");
        	key.setVisibility(false);
        	key.mShowOnlyOnQuizComplete = true;
       	 	key.mMountable = true;
        	key.setHideOnQuestionSolved(false);
        	this.addToShapeArray(key);
*/
	},

	createDoor: function(image_source_closed,image_source_open)
	{
/*
        	var doorQuestion = new Question('Open door with key.',"door");
        	this.mQuiz.mQuestionArray.push(doorQuestion);

        	var openPoint = this.getOpenPoint2D(40,735,75,375,50,7);
        	var door = new ShapeDoor(50,50,openPoint.mX,openPoint.mY,this,doorQuestion,image_source_closed,"","door",image_source_open);
        	door.mUrl = '/src/database/goto_next_level.php';
        	door.mOpenOnQuestionSolved = true;
        	this.addToShapeArray(door);
*/
	},
 	
	checkKeys: (function()
        {
/*
		this.parent();
		/*
                //idle
                if (GAME.mKeyLeft == false && GAME.mKeyRight == false && GAME.mKeyUp == false && GAME.mKeyDown == false)
                {
                        if (this.mControlObject)
                        {
                                this.mControlObject.mKey.mX = 0;
                                this.mControlObject.mKey.mY = 0;
                        }
                }
                //north
                if (GAME.mKeyLeft == false && GAME.mKeyRight == false && GAME.mKeyUp == true && GAME.mKeyDown == false)
                {
                        if (this.mControlObject)
                        {
                                this.mControlObject.mKey.mX = 0;
                                this.mControlObject.mKey.mY = -1;
                        }
                }
		*/
 	}).protect(),
		
});

