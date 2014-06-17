var g4_oa_a_3 = new Class(
{

Extends: MultipleChoicePad,

	initialize: function(application)
	{
       		this.parent(application);

		this.setScoreNeeded(1);
	},

        createInput: function()
        {
                this.parent();
                this.mButtonA.setPosition(135,290);
                this.mButtonB.setPosition(385,290);
                this.mButtonC.setPosition(635,290);
                
		this.mButtonA.setSize(240,220);
		this.mButtonB.setSize(240,220);
		this.mButtonC.setSize(240,220);
        },

        createNumQuestion: function()
        {
                this.parent();
                this.mNumQuestion.setSize(650,200);
                this.mNumQuestion.setPosition(350,140);
        },

	//showCorrectAnswer
        showCorrectAnswerEnter: function()
        {
                this.parent();

                this.mShapeArray[1].setSize(200,200);
   		this.mShapeArray[1].setPosition(200,200);
        },

	makeTypeA: function()
	{
		randomChoice = Math.floor(Math.random()*2);
		if (randomChoice == 0)
		{	
			question = new Question('There are 9 blue pencils in a desk drawer. There are 8 more red pencils than blue pencils, and there are twice as many green pencils as red pencils. How many pencils are there altogether?','Find the number of red pencils: 9+8=17. Find the number of green pencils: 2x17=34. Find the total number of pencils: 9+17+34=60.'); 
 			question.mAnswerPool.push('Find the number of red pencils: 9+8=17. Find the number of green pencils: 2+7=9. Find the total number of pencils: 9+17+9=35.');
               		question.mAnswerPool.push('Find the number green pencils: 9+8=17. Find the number of red pencils: 2x8=16. Find the total number of pencils: 9+17+16=42.');
                	question.mAnswerPool.push('Find the number of red pencils: 9+8=17. Find the number of green pencils: 2x17=34. Find the total number of pencils: 9+17+34=60.');
                	this.mQuiz.mQuestionArray.push(question);
			question.mRandomChoices = true;
		}
		if (randomChoice == 1)
		{	
			question = new Question('There are 9 blue fish in a tank. There are 8 more red fish than blue fish, and there are twice as many green fish as red fish. How many fish are there altogether?','Find the number of red fish: 9+8=17. Find the number of green fish: 2x17=34. Find the total number of fish: 9+17+34=60.'); 
 			question.mAnswerPool.push('Find the number of red fish: 9+8=17. Find the number of green fish: 2+7=9. Find the total number of fish: 9+17+9=35.');
               		question.mAnswerPool.push('Find the number green fish: 9+8=17. Find the number of red fish: 2x8=16. Find the total number of fish: 9+17+16=42.');
                	question.mAnswerPool.push('Find the number of red fish: 9+8=17. Find the number of green fish: 2x17=34. Find the total number of fish: 9+17+34=60.');
                	this.mQuiz.mQuestionArray.push(question);
			question.mRandomChoices = true;
		}
	},	

	makeTypeB: function()
	{
		randomChoice = Math.floor(Math.random()*2);
		randomChoice = 0;
		if (randomChoice == 0)
		{	
			question = new Question('There were 115 people at a party. There were 5 times as many people as there were men. There were twice as many women as men. The remaining people at the party were children. How many children at the party? What step cannot be used to solve the problem?','115-23=92 children');
			question.mAnswerPool.push('115-23=92 children');
			question.mAnswerPool.push('115/5=23 children');
			question.mAnswerPool.push('23x2=46 children');
                	this.mQuiz.mQuestionArray.push(question);
			question.mRandomChoices = true;
		}
	},

	createQuestions: function()
        {
 		this.parent();

                this.mQuiz.resetQuestionArray();

		this.makeTypeB();	
		this.makeTypeA();	

		this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
	}
});
