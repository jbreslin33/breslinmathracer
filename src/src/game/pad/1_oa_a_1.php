var g1_oa_a_1 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);

		this.mThresholdTime = 120000;
	},

        resetNumberPad: function()
        {
                //number pad
                this.mNumAnswer.mMesh.value = '';
                this.mNumAnswer.mMesh.innerHTML = '';

                this.mNumQuestion.mMesh.value = '';
                this.mNumQuestion.mMesh.innerHTML = '';
               
                this.mNumQuestionBig.mMesh.value = '';
                this.mNumQuestionBig.mMesh.innerHTML = '';
                this.mNumQuestionBig.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getQuestion();
        },
   
	createNumberPad: function()
        {
		this.parent();

                //question bar
                if (!this.mNumQuestionBig)
                {
                        this.mNumQuestionBig = new Shape(200,200,50,100,this,"","","");
                        if (this.mQuiz)
                        {
                                if (this.mQuiz.getQuestion())
                                {
                                        this.mNumQuestionBig.mMesh.innerHTML = this.mQuiz.getQuestion().getQuestion();
                                }
                        }
                        this.mNumQuestionBig.mMesh.mGame = this;
                        this.mNumberPadArray.push(this.mNumQuestionBig);
                }
	},


	getAdditionQuestion: function(maxsum)
	{

		var nameArray   = new Array();
		var objectArray = new Array();
		
		var addendA = 0;			
		var addendB = 0;			
		var sum = 100;
		var questionText = '';

		while (sum > maxsum || addendA == 0 || addendA == 1 || addendB == 0 || addendB == 1)
		{
			addendA = Math.floor((Math.random()*20));		
			addendB = Math.floor((Math.random()*20));		
			sum = addendA + addendB;		
		}
		//okay we have a valid sum and plural addends
		questionText = 'Jose had '; 	
		questionText = questionText + '' + addendA; 	
		questionText = questionText + ' toy cars. He found ';
		questionText = questionText + '' + addendB; 	
		questionText = questionText + ' more toy cars. How many toy cars does Jose have now?';

		var question = new Question('' + questionText,'' + sum);
		return question;
	},

	createQuestions: function()
        {
 		this.parent();
		
		//this.mNumberPadArray[0].setPosition(100,100);

		//add
		this.mQuiz.mQuestionPoolArray.push(this.getAdditionQuestion(20));
		this.mQuiz.mQuestionPoolArray.push(this.getAdditionQuestion(20));
		this.mQuiz.mQuestionPoolArray.push(this.getAdditionQuestion(20));
		this.mQuiz.mQuestionPoolArray.push(this.getAdditionQuestion(20));
		this.mQuiz.mQuestionPoolArray.push(this.getAdditionQuestion(20));
		this.mQuiz.mQuestionPoolArray.push(this.getAdditionQuestion(20));
		this.mQuiz.mQuestionPoolArray.push(this.getAdditionQuestion(20));
		this.mQuiz.mQuestionPoolArray.push(this.getAdditionQuestion(20));
		this.mQuiz.mQuestionPoolArray.push(this.getAdditionQuestion(20));
		this.mQuiz.mQuestionPoolArray.push(this.getAdditionQuestion(20));
		this.mQuiz.mQuestionPoolArray.push(this.getAdditionQuestion(20));
		this.mQuiz.mQuestionPoolArray.push(this.getAdditionQuestion(20));
		this.mQuiz.mQuestionPoolArray.push(this.getAdditionQuestion(20));
		this.mQuiz.mQuestionPoolArray.push(this.getAdditionQuestion(20));

		//3


		var totalNewGoal       = parseInt(this.mScoreNeeded / 2);
		var totalNew           = 0;
		var newQuestionElement = 0;
   		var elementCounter     = 0;
                
                for (i = 0; i <= 10; i++)
                {
                        if (this.mApplication.mLevel == i)
                        {
                                newQuestionElement = elementCounter;
                        }
                        elementCounter++;
                }

		while (totalNew < totalNewGoal)
		{	
			//reset vars and arrays
			totalNew = 0;
			for (d = 0; d < this.mQuiz.mQuestionArray.length; d++)
			{
				this.mQuiz.mQuestionArray[d] = 0;
			} 
			this.mQuiz.mQuestionArray = 0;
			this.mQuiz.mQuestionArray = new Array();

			for (s = 0; s < this.mScoreNeeded; s++)
			{	
				//50% chance of asking newest question
				var randomChance = Math.floor((Math.random()*2));		
				if (randomChance == 0)
				{
					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[newQuestionElement]);
					totalNew++;
				}	
				if (randomChance == 1)
				{
					var randomElement = Math.floor((Math.random()*newQuestionElement));		
					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomElement]);
				}
			}
		}
	}
});
