var NumberPad = new Class(
{

Extends: GameSimple,

	initialize: function()
	{
       		this.parent();
		//this.createChasers();

		this.mAnswer = '';

		//create number pad
		//1
		this.mNumOne = new Shape(50,50,300,100,this,"BUTTON","","");
		this.mNumOne.mMesh.innerHTML = '1';
		this.mNumOne.mMesh.mGame = this;
		this.mNumOne.mMesh.addEvent('click',this.numPadHit);
	
		//2	
		this.mNumTwo = new Shape(50,50,350,100,this,"BUTTON","","");
		this.mNumTwo.mMesh.innerHTML = '2';
		this.mNumTwo.mMesh.mGame = this;
		this.mNumTwo.mMesh.addEvent('click',this.numPadHit);
		
		//3	
		this.mNumThree = new Shape(50,50,400,100,this,"BUTTON","","");
		this.mNumThree.mMesh.innerHTML = '3';
		this.mNumThree.mMesh.mGame = this;
		this.mNumThree.mMesh.addEvent('click',this.numPadHit);
		
		//4	
		this.mNumFour= new Shape(50,50,300,150,this,"BUTTON","","");
		this.mNumFour.mMesh.innerHTML = '4';
		this.mNumFour.mMesh.mGame = this;
		this.mNumFour.mMesh.addEvent('click',this.numPadHit);
			
		//5	
		this.mNumFive= new Shape(50,50,350,150,this,"BUTTON","","");
		this.mNumFive.mMesh.innerHTML = '5';
		this.mNumFive.mMesh.mGame = this;
		this.mNumFive.mMesh.addEvent('click',this.numPadHit);
		
		//6	
		this.mNumSix= new Shape(50,50,400,150,this,"BUTTON","","");
		this.mNumSix.mMesh.innerHTML = '6';
		this.mNumSix.mMesh.mGame = this;
		this.mNumSix.mMesh.addEvent('click',this.numPadHit);
		
		//7	
		this.mNumSeven= new Shape(50,50,300,200,this,"BUTTON","","");
		this.mNumSeven.mMesh.innerHTML = '7';
		this.mNumSeven.mMesh.mGame = this;
		this.mNumSeven.mMesh.addEvent('click',this.numPadHit);
			
		//8	
		this.mNumEight= new Shape(50,50,350,200,this,"BUTTON","","");
		this.mNumEight.mMesh.innerHTML = '8';
		this.mNumEight.mMesh.mGame = this;
		this.mNumEight.mMesh.addEvent('click',this.numPadHit);
		
		//9	
		this.mNumNine= new Shape(50,50,400,200,this,"BUTTON","","");
		this.mNumNine.mMesh.innerHTML = '9';
		this.mNumNine.mMesh.mGame = this;
		this.mNumNine.mMesh.addEvent('click',this.numPadHit);
		
		//0	
		this.mNumZero= new Shape(100,50,300,250,this,"BUTTON","","");
		this.mNumZero.mMesh.innerHTML = '0';
		this.mNumZero.mMesh.mGame = this;
		this.mNumZero.mMesh.addEvent('click',this.numPadHit);
		
		//.	
		this.mNumDecimal= new Shape(50,50,400,250,this,"BUTTON","","");
		this.mNumDecimal.mMesh.innerHTML = '.';
		this.mNumDecimal.mMesh.mGame = this;
		this.mNumDecimal.mMesh.addEvent('click',this.numPadHit);
		
		//enter	
		this.mNumEnter= new Shape(50,100,450,200,this,"BUTTON","","");
		this.mNumEnter.mMesh.innerHTML = 'ENTER';
		this.mNumEnter.mMesh.mGame = this;
		this.mNumEnter.mMesh.addEvent('click',this.numPadHit);


	},
	
	numPadHit: function()
	{
		this.mGame.mAnswer = this.mGame.mAnswer + this.innerHTML; 	
		alert('mAnswer:' + this.mGame.mAnswer);
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

	doNothing: function()
	{
		//this.log('doing nothing');
		alert('11');
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

