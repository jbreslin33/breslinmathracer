var g4_oa_a_3 = new Class(
{

Extends: MultipleChoicePad,

	initialize: function(application)
	{
       		this.parent(application);

		this.setScoreNeeded(2);
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
		
		//question
                this.mShapeArray[1].setSize(650,200);
                this.mShapeArray[1].setPosition(350,140);
               
		//dont forget 
		this.mShapeArray[9].setSize(50,50);
                this.mShapeArray[9].setPosition(350,170);

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
                	shape.setText('Find number of green fish: 2 x 17 = 34');
			question.mShapeArray.push(shape);
                	shape = new Shape(350,5,15,240,this,"","","");
			shape.setFontSize(fontSize);
                	shape.setText('Find total number of fish: 9 + 17 + 34 = 60');
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
                	shape.setText('Find number of green fish: 2 + 7 = 9');
                	question.mShapeArray.push(shape);
                	shape = new Shape(250,5,525,230,this,"","","");
			shape.setFontSize(fontSize);
                	shape.setText('Find number of red fish: 9 + 8 = 17');
                	question.mShapeArray.push(shape);
                	shape = new Shape(250,5,525,240,this,"","","");
			shape.setFontSize(fontSize);
                	shape.setText('Find total number of fish: 9 + 17 + 9 = 35');
                	question.mShapeArray.push(shape);
		}
		if (randomChoice == 1)
		{
  			question = new Question('There are 9 blue fish in aquarium. There are 8 more red fish than blue fish, and there are twice as many green fish as red fish. How many fish are there total in the aquarium? What steps should be taken to find the correct answer?','b');
                        question.mAnswerPool.push('a');
                        question.mAnswerPool.push('b');
                        question.mAnswerPool.push('c');
                        this.mQuiz.mQuestionArray.push(question);

                        //1
                        shape = new Shape(250,5,15,220,this,"","","");
                        shape.setFontSize(fontSize);
                        shape.setText('Find number of red fish: 9 + 8 = 17');
                        question.mShapeArray.push(shape);
                        shape = new Shape(250,5,15,230,this,"","","");
                        shape.setFontSize(fontSize);
                        shape.setText('Find number of green fish: 2 + 7 = 9');
                        question.mShapeArray.push(shape);
                        shape = new Shape(250,5,15,240,this,"","","");
                        shape.setFontSize(fontSize);
                        shape.setText('Find total number of fish: 9 + 17 + 9 = 35');
                        question.mShapeArray.push(shape);

                        //2
                        shape = new Shape(350,5,275,220,this,"","","");
                        shape.setFontSize(fontSize);
                        shape.setText('Find number of red fish: 9 + 8 = 17');
                        question.mShapeArray.push(shape);
                        shape = new Shape(350,5,275,230,this,"","","");
                        shape.setFontSize(fontSize);
                        shape.setText('Find number of green fish: 2 x 17 = 34');
                        question.mShapeArray.push(shape);
                        shape = new Shape(350,5,275,240,this,"","","");
                        shape.setFontSize(fontSize);
                        shape.setText('Find total number of fish: 9 + 17 + 34 = 60');
                        question.mShapeArray.push(shape);


                        //3
                        shape = new Shape(250,5,525,220,this,"","","");
                        shape.setFontSize(fontSize);
                        shape.setText('Find number of green fish: 2 + 7 = 9');
                        question.mShapeArray.push(shape);
                        shape = new Shape(250,5,525,230,this,"","","");
                        shape.setFontSize(fontSize);
                        shape.setText('Find number of red fish: 9 + 8 = 17');
                        question.mShapeArray.push(shape);
                        shape = new Shape(250,5,525,240,this,"","","");
                        shape.setFontSize(fontSize);
                        shape.setText('Find total number of fish: 9 + 17 + 9 = 35');
                        question.mShapeArray.push(shape);

		}
	},	
	
	makeTypeB: function()
	{
		question = new Question('At a party there were 115 total people. There were 5 times as many people at the party as there were women at the party. There were 2 times as many men at the party as women. The remaining people at the party were all children. How many children were at the party? Which step cannot be used to solve the problem?','115 - 23 = 92 children'); 
		question.mAnswerPool.push('115 - 23 = 92 children');
		question.mAnswerPool.push('115 / 5 = 23 children');
		question.mAnswerPool.push('23 x 2 = 46 men');
		question.randomChoices = true;	
	
                this.mQuiz.mQuestionArray.push(question);
		
	},

	createQuestions: function()
        {
 		this.parent();

                this.mQuiz.resetQuestionArray();

		this.makeTypeB();	
		this.makeTypeA();	

		this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
	},

	createWorld: function()
	{
		this.parent();
	}
});
