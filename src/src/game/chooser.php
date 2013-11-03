var Chooser = new Class(
{

Extends: GameQuiz,

	initialize: function()
	{
       		this.parent();

		this.mPortal = 0;
	},

	createQuestionShapes: function()
	{
	},

	createChasers: function()
	{
                for (i = 0; i < 0; i++)
                {
                        var openPoint = this.getOpenPoint2D(40,735,75,375,50,7);
                        var shape = new ShapeChaser(50,50,openPoint.mX,openPoint.mY,this,"","/images/monsters/red_monster.png","","chaser");
                        this.addToShapeArray(shape);
                }

	},
	
	createPortals: function()
	{
		for (i = 0; i < numberOfRows; i++)
		{
        		var portalQuestion = new Question(game_name[i],game_name[i]);
        		this.mQuiz.mQuestionArray.push(portalQuestion);
		
			x = i * 100 + 400;

        		portal = new ShapePortal(50,50,x,350,this,portalQuestion,picture_closed[i],"","door",picture_open[i]);
			portal.mUrl = url[i];
			portal.setOpenPortal(true);
        		this.addToShapeArray(portal);

                     	portal.createMountPoint(0,-35,-41);
                        portal.showQuestion(false);

                        //numberMount to go on top let's make it small and draw it on top
                        var questionMountee = new QuestionShape(1,1,100,100,this,portalQuestion,"","orange","questionMountee");
                        questionMountee.setMountable(true);
                        this.addToShapeArray(questionMountee);
                        portal.setStartingMountee(questionMountee);
                        questionMountee.showQuestion(false);

                        //do the mount
                        portal.mount(questionMountee,0);

                        questionMountee.setBackgroundColor("transparent");

                        //evaluate questions
                        questionMountee.setEvaluateQuestions(false);

		}
	},

        createHud: function()
        {
        	mHud = new Hud();
        	mHud.mScoreNeeded.setText('<font size="2"> Needed : 1 </font>');
        	mHud.mGameName.setText('<font size="2">GAME CHOOSER</font>');
        },

	createQuestions: function()
	{
	
	}


});
