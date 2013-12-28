var k_cc_b_4a = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);
		this.mApplication.mMouseMoveOn = false;	

		this.createWorld();
	},

	createWorld: function()
	{
		var dropZone5 = new Shape(200,200,25,50,this,"/images/dropzone/dropzone5.jpg","","");
		this.mShapeArray.push(dropZone5);
	},

	createQuestions: function()
	{
		this.parent();

		if (this.mApplication.mLevel == 1)   
                {
			for (i = 0; i < 10; i++)
			{
				var question = i;
				var answer = parseInt(i + 1); 
                        	this.mQuiz.mQuestionArray.push(new Question('' + question, '' + answer));
			}
                }
	},

	normalGameExecute: function()
	{
		this.parent();
		/*
        	if (game.mDoor.mEnteredDoor == true)
        	{
                	game.mDungeonStateMachine.changeState(game.mLEVEL_PASSED);
        	}

        	if (game.mKilled == true)
        	{
                	game.mDungeonStateMachine.changeState(game.mRESET_DUNGEON_GAME);
        	}
		*/
	}
});
