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
                this.mShapeArray[1].setSize(650,200);
                this.mShapeArray[1].setPosition(350,140);
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
		fontSize = "10px";
	 	randomChoice = Math.floor(Math.random()*2);

		if (randomChoice == 0)
		{
			question = new Question('There are 9 blue fish in aquarium. There are 8 more red fish than blue fish, and there are twice as many green fish as red fish. How many fish are there total in the aquarium? What steps should be taken to find the correct answer?','a'); 
 			question.mAnswerPool.push('a');
               		question.mAnswerPool.push('b');
                	question.mAnswerPool.push('c');
                	this.mQuiz.mQuestionArray.push(question);
               	
			//1
                	shape = new Shape(350,5,15,220,this,"","","");
			shape.setFontSize(fontSize);
                	shape.setText('Find number of red fish: 9 + 8 = 17');
			question.mShapeArray.push(shape);
                	shape = new Shape(350,5,15,230,this,"","","");
			shape.setFontSize(fontSize);
                	shape.setText('Find number of green fish: 2 + 7 = 9');
			question.mShapeArray.push(shape);
                	shape = new Shape(350,5,15,240,this,"","","");
			shape.setFontSize(fontSize);
                	shape.setText('Find total number of fish: 9 + 17 + 9 = 35');
			question.mShapeArray.push(shape);

			//2
                	shape = new Shape(250,5,275,220,this,"","","");
			shape.setFontSize(fontSize);
                	shape.setText('Find number of red fish: 9 + 8 = 17');
                	question.mShapeArray.push(shape);
                	shape = new Shape(250,5,275,230,this,"","","");
			shape.setFontSize(fontSize);
                	shape.setText('Find number of green fish: 2 + 7 = 9');
                	question.mShapeArray.push(shape);
                	shape = new Shape(250,5,275,240,this,"","","");
			shape.setFontSize(fontSize);
                	shape.setText('Find total number of fish: 9 + 17 + 9 = 35');
                	question.mShapeArray.push(shape);

	        	//3
                	shape = new Shape(250,5,525,220,this,"","","");
			shape.setFontSize(fontSize);
                	shape.setText('Find number of red fish: 9 + 8 = 17');
                	question.mShapeArray.push(shape);
                	shape = new Shape(250,5,525,230,this,"","","");
			shape.setFontSize(fontSize);
                	shape.setText('Find number of green fish: 2 + 7 = 9');
                	question.mShapeArray.push(shape);
                	shape = new Shape(250,5,525,240,this,"","","");
			shape.setFontSize(fontSize);
                	shape.setText('Find total number of fish: 9 + 17 + 9 = 35');
                	question.mShapeArray.push(shape);
		}
		if (randomChoice == 1)
		{
			question = new Question('There are 9 blue pencils in a desk drawer. There are 8 more red pencils than blue pencils, and there are twice as many green pencils as red pencils. How many pencils are there altogether? What steps should be taken to find the correct answer?','a'); 
 			question.mAnswerPool.push('a');
               		question.mAnswerPool.push('b');
                	question.mAnswerPool.push('c');
                	this.mQuiz.mQuestionArray.push(question);
               	
			//1
                	shape = new Shape(350,5,15,220,this,"","","");
			shape.setFontSize(fontSize);
                	shape.setText('Find number of red pencils: 9 + 8 = 17');
			question.mShapeArray.push(shape);

                	shape = new Shape(350,5,15,230,this,"","","");
			shape.setFontSize(fontSize);
                	shape.setText('Find number of green pencils: 2 + 7 = 9');
			question.mShapeArray.push(shape);
                	shape = new Shape(350,5,15,240,this,"","","");
			shape.setFontSize(fontSize);
                	shape.setText('Find total number of pencils: 9 + 17 + 9 = 35');
			question.mShapeArray.push(shape);

			//2
                	shape = new Shape(250,5,275,220,this,"","","");
			shape.setFontSize(fontSize);
                	shape.setText('Find number of red pencils: 9 + 8 = 17');
                	question.mShapeArray.push(shape);
                	shape = new Shape(250,5,275,230,this,"","","");
			shape.setFontSize(fontSize);
                	shape.setText('Find number of green pencils: 2 + 7 = 9');
                	question.mShapeArray.push(shape);
                	shape = new Shape(250,5,275,240,this,"","","");
			shape.setFontSize(fontSize);
                	shape.setText('Find total number of pencils: 9 + 17 + 9 = 35');
                	question.mShapeArray.push(shape);

	        	//3
                	shape = new Shape(250,5,525,220,this,"","","");
			shape.setFontSize(fontSize);
                	shape.setText('Find number of red pencils: 9 + 8 = 17');
                	question.mShapeArray.push(shape);
                	shape = new Shape(250,5,525,230,this,"","","");
			shape.setFontSize(fontSize);
                	shape.setText('Find number of green pencils: 2 + 7 = 9');
                	question.mShapeArray.push(shape);
                	shape = new Shape(250,5,525,240,this,"","","");
			shape.setFontSize(fontSize);
                	shape.setText('Find total number of pencils: 9 + 17 + 9 = 35');
                	question.mShapeArray.push(shape);
		}
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
