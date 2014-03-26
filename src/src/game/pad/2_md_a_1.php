var g2_md_a_1 = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);
    		this.mRaphael = Raphael(10, 35, 760, 405);
	},
       
	createNumQuestion: function()
        {
                this.parent();

                //question
                this.mNumQuestion.setPosition(170,30);
        },	

        showCorrectAnswerEnter: function()
        {
                this.parent();

                this.mShapeArray[1].setPosition(100,80);
        },

	createQuestions: function()
        {
		this.parent();
		
		//just the question array reset
		this.mQuiz.resetQuestionArray();

		//number of shapes
		var s = 9;  
 
		for (i = 0; i < this.mScoreNeeded; i++)
		{
			//get random heights.
			var redHeightCode = Math.floor((Math.random()*6)+1);
			var redHeight = parseInt(redHeightCode * 50);  
					
			var question = new Question('What is the length of the red shape?', redHeightCode);
			this.mQuiz.mQuestionArray.push(question);
			
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 0 + this.mTotalGuiBars + this.mTotalInputBars)]);
		//	this.mShapeArray[parseInt(i * s + 0 + this.mTotalGuiBars + this.mTotalInputBars)].setSize(50,redHeight);
			
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 1 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 2 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 3 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 4 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 5 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 6 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 7 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 8 + this.mTotalGuiBars + this.mTotalInputBars)]);
		}
               	
		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
	},

	createWorld: function()
	{
		this.parent();
		
		for (i = 0; i < this.mScoreNeeded; i++)
		{
			//greens to make a ruler with

			var textA = new Shape(5,5,245,200,this,"","","");
			this.mShapeArray.push(textA);
			textA.setMountable(true);
			textA.setText('13');

                	var unitA = new Rectangle(50,50,475,300,this,this.mRaphael,.3,1,1,"none",.5,true);
			this.mShapeArray.push(unitA);
			unitA.setMountable(true);
	
			var textB = new Shape(5,5,245,200,this,"","","");
			this.mShapeArray.push(textB);
			textB.setMountable(true);
			textB.setText('23');

                	var unitB = new Rectangle(50,50,525,300,this,this.mRaphael,.4,1,1,"none",.5,true);
			this.mShapeArray.push(unitB);
			unitB.setMountable(true);

                	var unitC = new Rectangle(50,50,575,300,this,this.mRaphael,.5,1,1,"none",.5,true);
			this.mShapeArray.push(unitC);
			unitC.setMountable(true);

                	var unitD = new Rectangle(50,50,475,200,this,this.mRaphael,.7,1,1,"none",.5,true);
			this.mShapeArray.push(unitD);
			unitD.setMountable(true);

                	var unitE = new Rectangle(50,50,200,100,this,this.mRaphael,.8,1,1,"none",.5,true);
			this.mShapeArray.push(unitE);
			unitE.setMountable(true);

                	var unitF = new Rectangle(50,50,200,100,this,this.mRaphael,.9,1,1,"none",.5,true);
			this.mShapeArray.push(unitF);
			unitF.setMountable(true);

			//the ruler
			var ruler = new Ruler(50,300,200,100,this,this.mRaphael,.6,1,1,"none",.5,true);
			ruler.createMountPoint(0,30,30);
			ruler.createMountPoint(1,0,17);
			ruler.createMountPoint(2,30,80);
			ruler.createMountPoint(3,0,67);
			ruler.createMountPoint(4,0,117);
			ruler.createMountPoint(5,0,167);
			ruler.createMountPoint(6,0,217);
			ruler.createMountPoint(7,0,267);
			this.mShapeArray.push(ruler);
			ruler.mount(textA,0);
			ruler.mount(unitA,1);
			ruler.mount(textB,2);
			ruler.mount(unitB,3);
			ruler.mount(unitC,4);
			ruler.mount(unitD,5);
			ruler.mount(unitE,6);
			ruler.mount(unitF,7);
		}
	}
});
