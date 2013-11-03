var QuestionShape = new Class(
{

Extends: Shape,
	initialize: function(width,height,spawnX,spawnY,game,question,src,backgroundColor,message)
        {
		this.parent(width,height,spawnX,spawnY,game,src,backgroundColor,message)

               	//QUESTIONS 
		this.mQuestion = question; // the question object that contains a question and answer.
                this.mShowQuestionObject = true; //even if we have a valid question object we can shut off showing it.
                this.mShowQuestion = true; //toggles between question or answer text from question object

                //hide on question solved
                this.mHideOnQuestionSolved = true;

                //evaluate questions?
                this.mEvaluateQuestions = true;

                //copy question from mounter
                this.mCopyQuestionFromMounter = false;

		//QUIZ
                //hide on quiz complete??
                this.mHideOnQuizComplete = false;

                //show on quiz complete??
                this.mShowOnlyOnQuizComplete = false;
        },

	/****** UPDATE   ****/

   	update: function(delta)
        {
                if (this.mGame.mQuiz)
                {
                        //HIDE ON QUIZ COMPLETE
                        if (this.mHideOnQuizComplete)
                        {
                                if (this.mGame.mQuiz.isQuizComplete())
                                {
                                        if (this.mMounter)
                                        {
                                                this.mMounter.unMount(0);
                                        }
                                        this.mCollisionOn = false;
                                        this.setVisibility(false);
                                }
                                else
                                {
                                        this.mCollisionOn = true;
                                        this.setVisibility(true);
                                }
                        }

                        //SHOW ON QUIZ COMPLETE
                        if (this.mShowOnlyOnQuizComplete)
                        {
                                if (this.mGame.mQuiz.isQuizComplete())
                                {
                                        this.mCollisionOn = true;
                                        this.setVisibility(true);
                                }
                                else
                                {
                                        if (this.mMounter)
                                        {
                                                this.mMounter.unMount(0);
                                        }
                                        this.mCollisionOn = false;
                                        this.setVisibility(false);
                                }
                        }

                        //COPY QUESTION FROM MOUNTER
                        if (this.getCopyQuestionFromMounter())
                        {
                                if (this.mMounter)
                                {
                                        this.setQuestion(this.mMounter.getQuestion());
                                }
                        }
                }
		this.parent(delta);
        },

	/***** COLLISION **********/

       	onCollision: function(col)
        {
		this.parent(col);

                //try to evaluate questions of collided objects
                this.evaluateQuestions(col)
        },

	/****** EVALUATE QUESTIONS *****/

        evaluateQuestions: function(col)
        {
		if (this.getEvaluateQuestions())
                {
                        if (this.mQuestion && col.mQuestion)
                        {
                                answer = this.mQuestion.getAnswer();
                                answerCol = col.mQuestion.getAnswer();

                                //compare answers
                                if (this.mQuestion.getSolved() == false)
                                {
                                        if (answer == answerCol)
                                        {
                                                this.correctAnswer(); //overidden by player to do nothing
                                        }
                                        else
                                        {
                                                this.incorrectAnswer(); //overridden by player to do nothing
                                        }
                                }
                        }
                }
        },

 	setEvaluateQuestions: function(b)
        {
                this.mEvaluateQuestions = b;
        },

        getEvaluateQuestions: function()
        {
                return this.mEvaluateQuestions;
        },

	/***** ANSWER  *****/

        correctAnswer: function()
        {
                if (this.mQuestion)
                {
                        this.mQuestion.setSolved(true);
                        if (this.mHideOnQuestionSolved)
                        {
                                this.mCollisionOn = false;
                                this.setVisibility(false);
                        }
                        this.mGame.mQuiz.correctAnswer();
                }
        },

        incorrectAnswer: function()
        {
                this.mGame.resetGame();
        },


	/******** VISIBILITY *********/

        showQuestionObject: function(toggle)
        {
                this.mShowQuestionObject = toggle;
        },

        showQuestion: function(toggle)
        {
                if (toggle)
                {
                        this.mShowQuestion = true;
                }
                else
                {
                        this.mShowQuestion = false;
                }
        },

	setHideOnQuizComplete: function(b)
        {
                if (b)
                {
                        this.mHideOnQuizComplete = true;
                }
                else
                {
                        this.mHideOnQuizComplete = false;
                }
        },

        getHideOnQuizComplete: function()
        {
                return this.mHideOnQuizComplete;
        },

        setHideOnQuestionSolved: function(b)
        {
                if (b)
                {
                        this.mHideOnQuestionSolved = true;
                }
                else
                {
                        this.mHideOnQuestionSolved = false;
                }
        },

        getHideOnQuestionSolved: function()
        {
                return this.mHideOnQuestionSolved;
        },

	/********* COPY QUESTION FROM MOUNTER ***/

        setCopyQuestionFromMounter: function(b)
        {
                this.mCopyQuestionFromMounter = b;
        },

        getCopyQuestionFromMounter: function()
        {
                return this.mCopyQuestionFromMounter;
        },

	/******* QUESTION *******/

        getQuestion: function()
        {
                return this.mQuestion;
        },

        setQuestion: function(question)
        {
                this.mQuestion = question;
        },
	
	/************ RENDER ********/

        render: function()
        {
		this.parent();

                //do we need to change text this frame?
                if (this.mQuestion)
                {
                        if (this.mShowQuestionObject == true)
                        {
                                if (this.mShowQuestion == true)
                                {
                                        this.setText(this.mQuestion.getQuestion());
                                }
                                else
                                {
                                        this.setText(this.mQuestion.getAnswer());
                                }
                        }
                }
        }
});
