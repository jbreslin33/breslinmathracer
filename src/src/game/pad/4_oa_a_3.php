var g4_oa_a_3 = new Class(
{

Extends: MultipleChoicePad,

	initialize: function(application)
	{
       		this.parent(application);

		this.setScoreNeeded(1);
	},

        createNumQuestion: function()
        {
                this.parent();
                this.mNumQuestion.setSize(650,200);
                this.mNumQuestion.setPosition(350,140);
        },

        createInput: function()
        {
                this.parent();
                this.mButtonA.setPosition(105,200);
                this.mButtonB.setPosition(385,200);
                this.mButtonC.setPosition(660,200);
        },

        //showCorrectAnswer
        showCorrectAnswerEnter: function()
        {
                this.parent();

                this.mShapeArray[1].setPosition(100,80);
        },

        //outOfTime
        outOfTimeEnter: function()
        {
                this.parent();

		this.setScoreNeeded(1);

                this.mShapeArray[0].setPosition(400,50);

                this.mShapeArray[1].setSize(200,200);
                this.mShapeArray[1].setPosition(200,200);
        },

	makeTypeA: function()
	{
		question = new Question('There are 9 blue pencils in a desk drawer. There are 8 more red pencils than blue pencils, and there are twice as many green pencils as red pencils. How many pencils are there altogether? What steps should be taken to find the correct answer?','a'); 
 		question.mAnswerPool.push('a');
               	question.mAnswerPool.push('b');
                question.mAnswerPool.push('c');


                this.mQuiz.mQuestionArray.push(question);
               	
		//1 :4
                shape = new Shape(30,5,655,275,this,"","","");
                shape.setText('i am a shape');
		question.mShapeArray.push(shape);
	},	

	createQuestions: function()
        {
 		this.parent();

                this.mQuiz.resetQuestionArray();

		this.makeTypeA();	

		this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
	},

	createWorld: function()
	{
		this.parent();
	}
});
