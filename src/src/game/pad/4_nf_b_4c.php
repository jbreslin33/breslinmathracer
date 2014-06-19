var g4_nf_b_4c = new Class(
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
		this.mShapeArray[1].mMesh.innerHTML = '' + this.mQuiz.getQuestion().getQuestion() + ' ' + '<br><br> Answer: ' + this.mQuiz.getQuestion().getShowAnswer();

             
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

			//console.log('' + this.mUserAnswer);

			str = '' + this.mUserAnswer;
			res = str.split(" ");

			if (res.length == 1)
			{
				str = res[0].split("/");

				if(str.length == 2)
				   res[0] = 1.0 * (str[0] * 1.0)/(str[1] * 1.0);

				res[1] = '0/1';

				
			}
			whole = res[0] * 1.0;
			frac = res[1];
			res2 = frac.split("/");

			if (res2.length == 1)
			{
				res2[1] = '1';
			}

			decimal = 1.0 * (res2[0] * 1.0)/(res2[1] * 1.0);
			this.mUserAnswer = (whole + decimal) * 1.0;
			//console.log('whole:' + whole);
			//console.log('decimal:' + decimal);
			//console.log(this.mUserAnswer);

			str = this.mQuiz.getQuestion().mAnswerArray[0];
			res = str.split(" ");

			if (res.length == 1)
			{
				str = res[0].split("/");

				if(str.length == 2)
				   res[0] = 1.0 * (str[0] * 1.0)/(str[1] * 1.0);

				res[1] = '0/1';
			}
			whole = res[0] * 1.0;
			frac = res[1];
			res2 = frac.split("/");
			decimal = res2[0]/res2[1];
			this.mDecimalAnswer = (whole + decimal) * 1.0;
			
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
		var showAnswer;
		
		this.mQuiz.resetQuestionArray();
			

		 for (s = 0; s < this.mScoreNeeded; s++)
		 {		

			// get top number
			varA = 1 + Math.floor(Math.random()*7);

			// get bottom number
			varB = varA + 1 + Math.floor(Math.random()*(9 - varA));

			// get whole number
			varC = 3 + Math.floor((Math.random()*7));

			varD = varB;

			answer = varA * varC;
			answer = '' + answer + '/' + varB;

			showAnswer = varA + '/' +  varB + ' * ' + varC + ' = ' + answer;

			rand = Math.floor(Math.random()*9);


			if(rand == 0)
			{			
			question = new Question('Peter owns ' + varC + ' acres of farmland. He grows corn on ' + varA + '/' + varB + ' of the land. On how many acres of land does Peter grow corn?', '' + answer, '' + showAnswer);
			}
			if(rand == 1)
			{			
			question = new Question('Jenny had ' + varC + ' pounds of strawberries. Jenny let her friend Doris eat ' + varA + '/' + varB + ' of the strawberries. How many pounds of strawberries did Doris eat?', '' + answer, '' + showAnswer);
			}
			if(rand == 2)
			{			
			question = new Question('Kwan operates an orange juice stand. On Monday he used ' + varC + ' bags of oranges. On Tuesday he used ' + varA + '/' + varB + ' as many oranges as on Monday. How many bags of oranges did Kwan use on Tuesday?', '' + answer, '' + showAnswer);
			}
			if(rand == 3)
			{			
			question = new Question('Pedro has a lemon cookie recipe that calls for ' + varA + '/' +  varB + ' of a cup of sugar. How much sugar would Pedro use to make ' + varC + ' batches of cookies?', '' + answer, '' + showAnswer);
			}




			if(rand == 4)
			{			
			question = new Question('Tina is making calzones to sell at her restaurant. She starts with ' + varC + ' cans of tomato sauce and then uses ' + varA + '/' + varB + ' of the cans for the first batch of calzones. How many cans of tomato sauce does Tina use for the first batch of calzones?', '' + answer, '' + showAnswer);
			}
			if(rand == 5)
			{			
			question = new Question('A factory makes sheets of metal that are ' + varA + '/' +  varB + ' of an inch thick. If a worker at the factory makes a stack of ' + varC + ' of the sheets, how many inches thick will the stack be?', '' + answer, '' + showAnswer);
			}
			if(rand == 6)
			{			
			question = new Question('Yesterday, a doughnut shop sold ' + varC + ' times as many chocolate doughnuts as cinnamon doughnuts. If they sold ' + varA + '/' + varB + ' of a tray of cinnamon doughnuts, how many trays of chocolate doughnuts did they sell?', '' + answer, '' + showAnswer);
			}
			if(rand == 7)
			{			
			question = new Question('Tracy made strawberry jam and raspberry jam. She made enough strawberry jam to fill ' + varA + '/' +  varB + ' of a jar. If she made ' + varC + ' times as much raspberry jam as strawberry jam, how many jars will the raspberry jam fill?', '' + answer, '' + showAnswer);
			}
			if(rand == 8)
			{			
			question = new Question('Carey uses ' + varA + '/' +  varB + ' of a cup of vinegar in her salad dressing recipe. How many cups of vinegar would Carey use to make ' + varC + ' recipes?', '' + answer, '' + showAnswer);
			}
			
                	this.mQuiz.mQuestionArray.push(question);
                 }

	

		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));

                //random
                //this.mQuiz.randomize(40);
	}
});
