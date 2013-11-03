var Count = new Class(
{

Extends: Dungeon,

	initialize: function()
	{
       		this.parent();

		//create monsters to count
		this.createTreasure();
	},

	createTreasure: function()
	{
 		//TREASURE CHESTS TO COUNT
        	for (i = 0; i < scoreNeeded; i++)
        	{
                	var openPoint = this.getOpenPoint2D(40,735,75,375,50,7);
                	var shape = new ShapeDropBoxCount(50,50,openPoint.mX,openPoint.mY,this,mQuiz.getSpecificQuestion(0),"/images/treasure/chest.png","","dropbox_question");
                	shape.createMountPoint(0,-5,-41);
                	shape.setHideOnQuestionSolved(false);
                	this.addToShapeArray(shape);
        	}
	},

        createControlObject: function()
        {
                //*******************CONTROL OBJECT
                this.mControlObject = new Player(50,50,400,300,this,mQuiz.getSpecificQuestion(0),"/images/characters/wizard.png","","controlObject");
                this.mControlObject.mHideOnQuestionSolved = false;
                this.mControlObject.createMountPoint(0,-5,-41);

                //set animation instance
                this.mControlObject.mAnimation = new AnimationAdvanced(this.mControlObject);

                this.mControlObject.mAnimation.addAnimations('/images/characters/wizard_','.png');

                this.addToShapeArray(this.mControlObject);
                this.mControlObject.showQuestionObject(false);
        },

        createQuestionShapes: function()
        {
                count = 0;
                for (i = 0; i < numberOfRows; i++)
                {
                        var openPoint = this.getOpenPoint2D(40,735,75,375,50,7);
                        var shape;
                        this.addToShapeArray(shape = new Shape(50,50,openPoint.mX,openPoint.mY,this,mQuiz.getSpecificQuestion(count),"/images/treasure/gold_coin_head.png","","question"));
                        shape.createMountPoint(0,-5,-41);
                        shape.showQuestion(false);

			shape.mMountable = true;
			shape.setHideOnQuestionSolved(false);

                        //numberMount to go on top let's make it small and draw it on top
                        var questionMountee = new Shape(1,1,100,100,this,mQuiz.getSpecificQuestion(count),"","orange","questionMountee");
                        questionMountee.setMountable(true);
                        this.addToShapeArray(questionMountee);
                        questionMountee.showQuestion(false);

                        //do the mount
                        shape.mount(questionMountee,0);

                        questionMountee.setBackgroundColor("transparent");

			//make it so they are never evaluated on collision but can still be picked up
			shape.setEvaluateQuestions(false);

                        count++;
                }
        }
});

