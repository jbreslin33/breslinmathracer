var g1_md_b_3 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);

		//answers 
                this.mThresholdTime = 10000;

		//input pad
		this.mInputPad = new ButtonMultipleChoicePad(application);

	},
	
	update: function()
	{
		this.parent();
		this.updateClock();
	},

	reset: function()
	{
		this.parent();
		
		for (i = 0; i < this.mShapeArray.length; i++)
		{
			this.mShapeArray[i].setVisibility(false);
		} 
	},
	
	destroyShapes: function()
	{
		this.parent();

		//shapes and array
                for (i = 0; i < this.mShapeArray.length; i++)
                {
                        //back to div
                        this.mShapeArray[i].mDiv.mDiv.removeChild(this.mShapeArray[i].mMesh);
                        document.body.removeChild(this.mShapeArray[i].mDiv.mDiv);
                        this.mShapeArray[i] = 0;
			this.log('destroyShape:' + i);
                }
                this.mShapeArray = 0;
	},

	showQuestion: function()
	{
		for (i = 0; i < this.mShapeArray.length; i++)
                {
                        this.mShapeArray[i].setVisibility(false);
                }
                this.mShapeArray[this.mScore].setVisibility(false);

		this.mInputPad.showQuestion();	
		
		//show shape	
		this.mShapeArray[this.mScore].setVisibility(true);
	},
 
	showCorrectAnswer: function()
	{
		this.parent();
        	this.mCorrectAnswerBar.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getAnswer();
	},
   
	createQuestions: function()
        {
		this.parent();

              	for (d = 0; d < this.mQuiz.mQuestionArray.length; d++)
               	{
                        this.mQuiz.mQuestionArray[d] = 0;
                }
                this.mQuiz.mQuestionArray = 0;
                this.mQuiz.mQuestionArray = new Array();

		//1 circle
		var question = new Question('What is this?','circle');
		question.setChoice('A','dddddcircle');
		question.setChoice('B','cone');
		this.mQuiz.mQuestionArray.push(question);
	
		//2 cone	
		var question = new Question('What is this?','cone');
		question.setChoice('A','circle');
		question.setChoice('B','cone');
		this.mQuiz.mQuestionArray.push(question);

		//3 cube
		var question = new Question('What is this?','cube');
		question.setChoice('A','cube');
		question.setChoice('B','cylinder');
		this.mQuiz.mQuestionArray.push(question);
		
		//4 cylinder
		var question = new Question('What is this?','cylinder');
		question.setChoice('A','hexagon');
		question.setChoice('B','cylinder');
		this.mQuiz.mQuestionArray.push(question);
		
		//5 hexagon	
		var question = new Question('What is this?','hexagon');
		question.setChoice('A','hexagon');
		question.setChoice('B','rectangle');
		this.mQuiz.mQuestionArray.push(question);
		
		//6 rectangle 
		var question = new Question('What is this?','rectangle');
		question.setChoice('A','sphere');
		question.setChoice('B','rectangle');
		this.mQuiz.mQuestionArray.push(question);

		//7 sphere
		var question = new Question('What is this?','sphere');
		question.setChoice('A','sphere');
		question.setChoice('B','square');
		this.mQuiz.mQuestionArray.push(question);
		
		//8 square	
		var question = new Question('What is this?','square');
		question.setChoice('A','triangle');
		question.setChoice('B','square');
		this.mQuiz.mQuestionArray.push(question);
		
		//9 triangle
		var question = new Question('What is this?','triangle');
		question.setChoice('A','triangle');
		question.setChoice('B','circle');
		this.mQuiz.mQuestionArray.push(question);
		
		//10 circle
		var question = new Question('What is this?','circle');
		question.setChoice('A','cone');
		question.setChoice('B','circle');
		this.mQuiz.mQuestionArray.push(question);

		this.createQuestionShapes();
	},

	createQuestionShapes: function()
	{
		this.destroyShapes();

		this.mShapeArray = new Array();		
		
		this.drawClock();	

                this.mShapeArray.push(new Shape(200,200,450,275,this,"/images/shapes/circle.png","",""));
                this.mShapeArray.push(new Shape(200,200,450,275,this,"/images/shapes/cone.png","",""));
                this.mShapeArray.push(new Shape(200,200,450,275,this,"/images/shapes/cube.jpg","",""));
                this.mShapeArray.push(new Shape(200,200,450,275,this,"/images/shapes/cylinder.png","",""));
                this.mShapeArray.push(new Shape(200,200,450,275,this,"/images/shapes/hexagon.png","",""));
                this.mShapeArray.push(new Shape(200,200,450,275,this,"/images/shapes/rectangle.png","",""));
                this.mShapeArray.push(new Shape(200,200,450,275,this,"/images/shapes/sphere.png","",""));
                this.mShapeArray.push(new Shape(200,200,450,275,this,"/images/shapes/square.png","",""));
                this.mShapeArray.push(new Shape(200,200,450,275,this,"/images/shapes/triangle.png","",""));
                this.mShapeArray.push(new Shape(200,200,450,275,this,"/images/shapes/circle.png","",""));
               	
		for (i = 0; i < this.mShapeArray.length; i++)
		{
			this.mShapeArray[i].setVisibility(false);
               		this.mShapeArray[i].mCollidable = false;
               		this.mShapeArray[i].mCollisionOn = false;
		}	
		
		this.setScoreNeeded(this.mShapeArray.length);

	},

	//state overides
	showCorrectAnswerOutOfTime: function()
        {
                this.mCorrectAnswerStartTime = this.mTimeSinceEpoch;
                this.mInputPad.hide();
                this.mCorrectAnswerBar.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getAnswer();
                this.showCorrectAnswerBar();
                this.showClockShape();
        },

	drawClock: function ()
	{
		canvas = Raphael("clock_id",200, 200);
                var clock = canvas.circle(100,100,95);
                clock.attr({"fill":"#f5f5f5","stroke":"#444444","stroke-width":"5"})  
                var hour_sign;
                for(i=0;i<12;i++)
		{
                	var start_x = 100+Math.round(80*Math.cos(30*i*Math.PI/180));
                   	var start_y = 100+Math.round(80*Math.sin(30*i*Math.PI/180));
                    	var end_x = 100+Math.round(90*Math.cos(30*i*Math.PI/180));
                    	var end_y = 100+Math.round(90*Math.sin(30*i*Math.PI/180));    
                    	hour_sign = canvas.path("M"+start_x+" "+start_y+"L"+end_x+" "+end_y);
                }    
                hour_hand = canvas.path("M100 100L100 50");
                hour_hand.attr({stroke: "#444444", "stroke-width": 6});
                minute_hand = canvas.path("M100 100L100 40");
                minute_hand.attr({stroke: "#444444", "stroke-width": 4});
                second_hand = canvas.path("M100 110L100 25");
                second_hand.attr({stroke: "#444444", "stroke-width": 2});
                var pin = canvas.circle(100, 100, 5);
                pin.attr("fill", "#000000");    
                this.updateClock()
	},
 	
	function: updateClock()
	{
                var now = new Date();
                var hours = now.getHours();
                var minutes = now.getMinutes();
                var seconds = now.getSeconds();
                hour_hand.rotate(30*hours+(minutes/2.5), 100, 100);
                minute_hand.rotate(6*minutes, 100, 100);
                second_hand.rotate(6*seconds, 100, 100);
       }
	

});
