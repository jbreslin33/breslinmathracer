var GameQuiz = new Class(
{

Extends: Game,

	initialize: function(application)
	{
                /************** QUIZ **********/
		this.parent(application);

		this.mGotQuestions = false;
		this.mGotIt = false;

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

		if (!this.mGotQuestions)
		{
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
			if (questionString.length > 0 && APPLICATION.mGame.mGotIt == false)
			{
				APPLICATION.mGame.mGotIt = true;
				var questionStringArray = questionString.split(","); 
				for (i = 0; i < questionStringArray.length; i++)
				{
					var g = i + 1;
					var h = parseInt(g);
					question = new Question('' + questionStringArray[i],'' + questionStringArray[h]);
					APPLICATION.mGame.mQuiz.mQuestionArray.push(question);
					i++;
				}
				APPLICATION.mGame.createQuestionStuff();
			}		
                }
                xmlhttp.open("GET","../../web/game/standard_get_questions_query.php",true);
                xmlhttp.send();
                this.timeWarning = true;
        }
});
