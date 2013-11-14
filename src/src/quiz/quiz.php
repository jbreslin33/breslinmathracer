var Quiz = new Class(
{
        initialize: function(game)
        {
		//GAME
		this.mGame = game;

		//Question and Answer Array
		this.mQuestionArray = new Array();
			
		//question
		this.mMarker = 0;

		//from game
		this.mGotQuestions = false;
                this.mGotIt        = false;
        },
 	
	update: function()
        {
                if (!this.mGotQuestions)
                {
                	this.mGotIt        = false;
                        this.mGotQuestions = true;
                        this.getQuestions();
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
                        if (questionString.length > 0 && APPLICATION.mGame.mQuiz.mGotIt == false)
                        {
                                APPLICATION.mGame.mQuiz.mGotIt = true;
                                APPLICATION.mGame.mQuiz.mQuestionArray = 0;
                                APPLICATION.mGame.mQuiz.mQuestionArray = new Array();
				APPLICATION.mGame.mQuiz.mMarker = 0;
                                var questionStringArray = questionString.split(",");
                                for (i = 0; i < questionStringArray.length; i++)
                                {
                                        var g = i + 1;
                                        var h = parseInt(g);
                                        question = new Question('' + questionStringArray[i],'' + questionStringArray[h]);
                                        APPLICATION.mGame.mQuiz.mQuestionArray.push(question);
                                        i++;
                                }
                                APPLICATION.mGame.createWorld();
                        }
                }
                xmlhttp.open("GET","../../web/game/standard_get_questions_query.php",true);
                xmlhttp.send();
                this.timeWarning = true;
        },

	//returns question object	
	getQuestion: function()
	{
		return this.mQuestionArray[this.mMarker];
	},

	//returns question object	
	getSpecificQuestion: function(i)
	{
		return this.mQuestionArray[i];
	},
	
	correctAnswer: function()
	{
        	this.mGame.incrementScore();
		this.mMarker++;
	
		//this.mGame.mHud.mQuestion.setText('<font size="2"> Question: ' + this.mQuestionArray[this.mMarker].getQuestion() + '</font>');
	},
	
	isQuizComplete: function()
	{
		if (this.mGame.getScore() >= this.mGame.mScoreNeeded)
		{
			return true;
		}
		else
		{
			return false;
		}
	},

	reset: function()
	{
		//reset marker
		this.mMarker = 0;
                
		//update question 
		this.mGame.mApplication.mHud.mQuestion.setText('<font size="2"> Question: ' + this.mQuestionArray[this.mMarker].getQuestion() + '</font>');

		for (i = 0; i < this.mQuestionArray.length; i++)
		{
			this.mQuestionArray[i].setSolved(false);	
		}
	}

});


