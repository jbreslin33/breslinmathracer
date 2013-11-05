<?php
session_start();
?>

var GameSimple = new Class(
{
	initialize: function()
        {
	
		//HUD
        	this.mHud = new Hud();
        	this.mHud.mScoreNeeded.setText('<font size="2"> Needed : ' + scoreNeeded + '</font>');
        	this.mHud.mGameName.setText('<font size="2">Math Racer</font>');
		
		this.mScore = 0;		
		this.setScore(0);

        	//QUIZ
        	this.mQuiz = new Quiz(scoreNeeded);
        	this.mQuiz.mGame = this;

        	//create questions
        	this.createQuestions();

     		/************** On_Off **********/
                this.mOn = true;
     		
		/**************** TIME ************/
                this.mTimeSinceEpoch = 0;
                this.mLastTimeSinceEpoch = 0;
                this.mDeltaTime = 0;
                this.mGameTime = 0;

		document.body.style.cursor = 'auto';
        },
 	
	log: function(msg)
        {
                setTimeout(function()
                {
                        throw new Error(msg);
                }, 0);
        },
				
	//brian - update score in games_attempts table		
	updateScore: function()
	{
	},
	
 	resetGame: function()
        {
       		this.setScore(0); 
	},

	createQuestions: function()
        {
                for (i = 0; i < scoreNeeded; i++)
                {
			randomNumber = Math.floor((Math.random()*numberOfRows));			
                        var question = new Question(questions[randomNumber],answers[randomNumber]);
                        this.mQuiz.mQuestionArray.push(question);
                }
        },

        update: function()
        {
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
		}
        },
        
	getScore: function()
        {
                return this.mScore;
        },

        setScore: function(score)
        {
                this.mScore = score;
                this.mHud.mScore.setText('<font size="2">Score: ' + this.mScore + '</font>');
        },

        incrementScore: function()
        {
                this.mScore++;
                this.mHud.mScore.setText('<font size="2"> Score : ' + this.mScore + '</font>');
        },

	setHud: function(hud)
	{
		this.mHud = hud;
	},

	//brians code... 
	checkTime: function()
        {
                if (this.mGameTime > 10000 && this.timeWarning == false)
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

                        }
                        xmlhttp.open("GET","../../src/database/time_warning.php",true);
                        xmlhttp.send();
                        this.timeWarning = true;
                }
        },
});


