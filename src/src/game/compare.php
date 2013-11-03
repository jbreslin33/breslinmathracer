var Compare = new Class(
{

Extends: Dungeon,

	initialize: function()
	{
       		this.parent();

		//create symbols 
		this.createSymbols();

		//create kids
		this.createKids();
	},

	createMonstersToCount: function()
	{
	
	},
 createControlObject: function(image_source)
        {
                //*******************CONTROL OBJECT
                this.mControlObject = new Player(50,50,400,300,this,mQuiz.getSpecificQuestion(0),image_source,"","controlObject");
                this.mControlObject.mHideOnQuestionSolved = false;
                this.mControlObject.createMountPoint(0,-5,-41);

                //set animation instance
                this.mControlObject.mAnimation = new AnimationAdvanced(this.mControlObject);

                this.mControlObject.mAnimation.addAnimations('/images/characters/wizard_','.png');

                this.addToShapeArray(this.mControlObject);
                this.mControlObject.showQuestionObject(false);

        },

	createQuestions: function()
	{
			mApplication.log('q');
    		//QUESIONS
                //for (i = 0; i < this.mQuiz.getScoreNeeded(); i++)
                for (i = 0; i < 10; i++)
                {
                        var a = 1 + Math.floor(Math.random()*kidsRedShirt);
                        var b = 1 + Math.floor(Math.random()*kidsGreenShirt);

                        if (a > b)
                        {
                                mQuiz.mQuestionArray.push(new QuestionCompare('The red shirt kids are greater, less than or equal to the green shirt kids?', 'greater_than',a,b));
                        }
                        if (a < b)
                        {
                                mQuiz.mQuestionArray.push(new QuestionCompare('The red shirt kids are greater, less than or equal to the green shirt kids?', 'less_than',a,b));
                        }
                        if (a == b)
                        {
                                mQuiz.mQuestionArray.push(new QuestionCompare('The red shirt kids are greater, less than or equal to the green shirt kids?', 'equal_to',a,b));
                        }
                }
	},

        createQuestionShapes: function()
        {
        
	},

        createChasers: function()
        {
        
	},

        createKey: function(image_source)
        {
                var keyQuestion = new Question('Pick up key.',"key");
                mQuiz.mQuestionArray.push(keyQuestion);

                openPoint = this.getOpenPoint2D(40,735,75,375,50,7);
                var key = new Shape(50,50,openPoint.mX,openPoint.mY,this,keyQuestion,"/images/key/key_dungeon.gif","","key");
                key.setVisibility(false);
                key.mShowOnlyOnQuizComplete = true;
                key.mMountable = true;
                key.setHideOnQuestionSolved(false);
                this.addToShapeArray(key);
        },

        createDoor: function(image_source_closed,image_source_open)
        {
                var doorQuestion = new Question('Open door with key.',"door");
                mQuiz.mQuestionArray.push(doorQuestion);

                var openPoint = this.getOpenPoint2D(40,735,75,375,50,7);
                var door = new ShapeDoor(50,50,openPoint.mX,openPoint.mY,this,doorQuestion,image_source_closed,"","door",image_source_open);
                door.mUrl = '/src/database/goto_next_level.php';
                door.mOpenOnQuestionSolved = true;
                this.addToShapeArray(door);

        },

	createSymbols: function()
	{
		//SYMBOLS
        	var greaterThan = new Shape(50,50,300,200,this,new Question('','greater_than'),"/images/symbols/greater_than.png","","greater_than");
        	this.addToShapeArray(greaterThan);
        	greaterThan.setHideOnQuizComplete(true);
        	greaterThan.setHideOnQuestionSolved(false);

        	var lessThan = new Shape(50,50,400,200,this,new Question('','less_than'),"/images/symbols/less_than.png","","less_than");
        	this.addToShapeArray(lessThan);
        	lessThan.setHideOnQuizComplete(true);
        	lessThan.setHideOnQuestionSolved(false);

        	var equalTo = new Shape(50,50,500,200,this,new Question('','equal_to'),"/images/symbols/equal.png","","equal_to");
        	this.addToShapeArray(equalTo);
        	equalTo.setHideOnQuizComplete(true);
        	equalTo.setHideOnQuestionSolved(false);
	},

	createKids: function()
	{
        	//KIDS RED SHIRT
        	for (i = 0; i < kidsRedShirt + 1; i++)
        	{
                	var shape;
                	this.addToShapeArray(shape = new ShapeCompare(50,50,75,50 + (i * 50),this,'',"/images/characters/kid_red_shirt/kid_red_shirt.png","",'a',i));
                	shape.showQuestion(false);
        	}

        	//KIDS GREEN SHIRT
        	for (i = 0; i < kidsGreenShirt + 1; i++)
        	{
                	var shape;
                	this.addToShapeArray(shape = new ShapeCompare(50,50,650,50 + (i * 50),this,'',"/images/characters/kid_green_shirt/kid_green_shirt.png","",'b',i));
                	shape.showQuestion(false);
        	}
	}

});

