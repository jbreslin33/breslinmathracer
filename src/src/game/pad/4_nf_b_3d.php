var g4_nf_b_3d = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);
		
	},

	createNumQuestion: function()
        {
                //question
                this.mNumQuestion = new Shape(225,50,150,95,this,"","","");
                this.mShapeArray.push(this.mNumQuestion);
                this.mNumQuestion.mCollidable = false;
                this.mNumQuestion.mCollisionOn = false;
        },

	//showCorrectAnswer
        showCorrectAnswerEnter: function()
        {
                this.parent();

                this.mShapeArray[1].setSize(265,100);
                this.mShapeArray[1].setPosition(180,95);
		this.mShapeArray[1].mMesh.innerHTML = '' + this.mQuiz.getQuestion().getQuestion() + ' ' + '<br><br> Answer: ' + this.mQuiz.getQuestion().getAnswer();

             
                //move dont forget
               // this.mShapeArray[8].setVisibility(false);
               // this.mShapeArray[9].setVisibility(false);
        },

	firstTimeExecute: function()
        {
		
             if (this.mUserAnswer != '')
	     {

		var str = '';
		var res = '';
		var whole;
		var frac;
		var res2;
		var decimal;

		frac = '' + this.mUserAnswer;
		res2 = frac.split("/");

		if (res2.length == 1)
		{
			res2[1] = '1';
		}

		decimal = 1.0 * (res2[0] * 1.0)/(res2[1] * 1.0);
		this.mUserAnswer = decimal * 1.0;

		str = this.mQuiz.getQuestion().mAnswerArray[0];
		res2 = str.split("/");

		if (res2.length == 1)
		{
			res2[1] = '1';
		}

		decimal = 1.0 * res2[0]/res2[1];
		this.mDecimalAnswer = decimal * 1.0;
	     }
	     var correct = false;
                //if you have an answer...
                if (this.mUserAnswer != '')
                {
			if (this.mQuiz == 0)
			{
				return;
			}
			for (i=0; i < this.mQuiz.getQuestion().mAnswerArray.length; i++)
			{
				//console.log('user: ' + this.mUserAnswer);
				//console.log('decimal: ' + this.mDecimalAnswer);

                        	if (this.mUserAnswer == this.mDecimalAnswer)
				{
					correct = true;
                               		this.mStateMachine.changeState(this.mCORRECT_ANSWER);
				}
			}

			if (correct == false)
			{
                                this.mStateMachine.changeState(this.mSHOW_CORRECT_ANSWER);
                        }
			
			if (this.mFirstTimeAnswer == false)
			{
				this.mFirstTimeAnswer = true;
				this.mApplication.sendLevelAttempt();
			}
                }
	},


  

	createQuestions: function()
        {
 		this.parent();

		//this.mCorrectAnswerThresholdTime = 1000;

		var varA = 0;
		var varB = 0;
		var varC = 0;
		var varD = 0;
		var varN = 0;


		var start = 0;
		var end = 0;
		var rand = 0;

		var question;
		var answer;
		
		this.mQuiz.resetQuestionArray();
			

		 for (s = 0; s < this.mScoreNeeded/2; s++)
		 {		

			// get bottom number
			varB = 6 + Math.floor(Math.random()*22);

			// get top number
			max = Math.floor(varB/2);
			varA = 1 + Math.floor((Math.random()*(max-1)));

			varC = 1 + Math.floor((Math.random()*max));
			varD = varB;

			answer = varA + varC;
			answer = '' + answer + '/' + varD;

			rand = Math.floor(Math.random()*4);

			if(rand == 0)
			{			
			question = new Question('Tammy filled a bucket with ' + varA + '/' +  varB + ' of a gallon of water. Later, she poured ' + varC + '/' +  varD + ' of a gallon of water into the bucket. How many gallons of water are in the bucket?', '' + answer);
			}
			if(rand == 1)
			{			
			question = new Question('John drove his car ' + varA + '/' +  varB + ' of a mile and stopped at a gas station. Then, he drove ' + varC + '/' +  varD + ' of a mile to his house. How many miles did he drive altogether?', '' + answer);
			}
			if(rand == 2)
			{			
			question = new Question('Katie went to the salon and had ' + varA + '/' +  varB + ' of an inch of hair cut off. The next day she went back and asked for another ' + varC + '/' +  varD + ' of an inch to be cut off. How many inches of hair did she have cut off in all?', '' + answer);
			}
			if(rand == 3)
			{			
			question = new Question('Of the pies that Mom and Pops Pie Shop sold last month, ' + varA + '/' +  varB + ' were blueberry pies and ' + varC + '/' +  varD + ' were blackberry pies. What fraction of the pies sold were either blueberry or blackberry?', '' + answer);
			}
			
                	this.mQuiz.mQuestionArray.push(question);
                 }


		 for (s = 0; s < this.mScoreNeeded/2; s++)
		 {		

			// get bottom number
			varB = 6 + Math.floor(Math.random()*22);

			// get top number
			varA = 2 + Math.floor(Math.random()*(varB-2));
			
			varC = 1 + Math.floor(Math.random()*(varA-1));
			//1 + Math.floor((Math.random()*max));
			varD = varB;

			answer = varA - varC;
			answer = '' + answer + '/' + varD;
				
			rand = Math.floor(Math.random()*4);

			if(rand == 0)
			{			
			question = new Question('Bobby filled a bucket with ' + varA + '/' +  varB + ' of a gallon of water. Later, he poured out ' + varC + '/' +  varD + ' of a gallon of the water. How much water is in the bucket?', '' + answer);

			}
			if(rand == 1)
			{			
			question = new Question('At the market, Vicky bought ' + varA + '/' +  varB + ' of a pound of red apples and ' + varC + '/' +  varD + ' of a pound of green apples. How many more pounds of red apples did Vicky purchase?', '' + answer);
			}
			if(rand == 2)
			{			
			question = new Question('Planet X is ' + varA + '/' +  varB + ' of a light-year away from Earth. Planet Y is ' + varC + '/' +  varD + ' of a light-year away from Earth. How many light years farther away from earth is Planet X than Planet Y?', '' + answer);
			}
			if(rand == 3)
			{			
			question = new Question('Judy bought ' + varA + '/' +  varB + ' pounds of grapes. She gave ' + varC + '/' +  varD + ' of a pound to her sister. How many pounds of grapes did she have left?', '' + answer);
			}

			
                	this.mQuiz.mQuestionArray.push(question);
                 }
			

		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));

                //random
                this.mQuiz.randomize(40);
	}
});
