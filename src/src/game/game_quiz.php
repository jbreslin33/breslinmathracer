var GameQuiz = new Class(
{

Extends: Game,

	initialize: function(application)
	{

                /************** QUIZ **********/
		this.parent(application);

		this.mGotQuestions = false;
		this.mGettingQuestions = false;

		this.mQuiz = new Quiz(this);
	},

        resetGame: function()
        {
		this.parent();

                if (this.mQuiz)
                {
                        this.mQuiz.reset();
                }
        },

        update: function()
        {
		this.parent();

		if (this.mGotQuestions && this.mGettingQuestions == false)
		{
                	if (this.mOn)
                	{
                        	//check for quiz complete
                        	if (this.mQuiz)
                        	{
                                	if (this.mQuiz.isQuizComplete())
                                	{
                                        	// update score one last time
                                        	this.updateScore();
                                        	// set game end time
                                        	this.quizComplete();
                                        	// putting this in for now we may not need it
                                        	this.gameOver = true;
                                	}
                        	}
                	}
		}
		else
		{
			this.getQuestions();
			this.mGotQuestions = true;
			this.mGettingQuestions = false;
		}
        },

	getQuestions: function()
        {
                var xmlhttp;

                if (window.XMLHttpRequest)
                {// code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {// code for IE6, IE5
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        var questionString = xmlhttp.responseText;
			if (questionString.length > 0)
			{
				console.log('string:' + questionString);
				var questionStringArray = questionString.split(","); 
				for (i = 0; i < questionStringArray.length; i++)
				{
					console.log('lenght questionStringArray:' + questionStringArray.length);
					var g = i + 1;
					var h = parseInt(g);
					question = new Question('' + questionStringArray[i],'' + questionStringArray[h]);
					//question = new Question('1','1');
					APPLICATION.mGame.mQuiz.mQuestionArray.push(question);
					console.log('gq:' + question.getQuestion());
					console.log('ga:' + question.getQuestion());
					i++;
				}
				APPLICATION.mGame.createQuestionStuff();
			}		
                }
                xmlhttp.open("GET","../../web/game/standard_get_questions_query.php",true);
                xmlhttp.send();
                this.timeWarning = true;
        },

        quizComplete: function()
        {
                if(this.gameOver == false)
                {
                        var xmlhttp;

                        if (window.XMLHttpRequest)
                        {
                                // code for IE7+, Firefox, Chrome, Opera, Safari
                                xmlhttp=new XMLHttpRequest();
                        }
                        else
                        {
                                // code for IE6, IE5
                                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                        }
                        xmlhttp.onreadystatechange=function()
                        {

                        }
                        xmlhttp.open("GET","../../src/database/set_game_end_time.php",true);
                        xmlhttp.send();
                }
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
        }

});
