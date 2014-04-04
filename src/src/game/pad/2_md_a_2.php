var g2_md_a_2 = new Class(
{

Extends: RulerPad,

	initialize: function(application)
	{
       		this.parent(application);
    		this.mRaphael = Raphael(10, 35, 760, 405);
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
		var s = 15;  
 
		for (i = 0; i < this.mScoreNeeded; i++)
		{
			//get random heights.
			var redHeightCode = Math.floor((Math.random()*6)+1);
			var redHeight = parseInt(redHeightCode * 50);  
					
			var question = new Question('What is the length of the red shape in inches?', redHeightCode);
			this.mQuiz.mQuestionArray.push(question);
			
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 0 + this.mTotalGuiBars + this.mTotalInputBars)]);
			
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 1 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 2 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 3 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 4 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 5 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 6 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 7 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 8 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 9 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 10 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 11 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 12 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 13 + this.mTotalGuiBars + this.mTotalInputBars)]);
			this.mShapeArray[parseInt(i * s + 13 + this.mTotalGuiBars + this.mTotalInputBars)].setSize(50,redHeight);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 14 + this.mTotalGuiBars + this.mTotalInputBars)]);


                        question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 15 + this.mTotalGuiBars + this.mTotalInputBars)]);

                        question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 16 + this.mTotalGuiBars + this.mTotalInputBars)]);
                        question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 17 + this.mTotalGuiBars + this.mTotalInputBars)]);
                        question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 18 + this.mTotalGuiBars + this.mTotalInputBars)]);
                        question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 19 + this.mTotalGuiBars + this.mTotalInputBars)]);
                        question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 20 + this.mTotalGuiBars + this.mTotalInputBars)]);
                        question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 21 + this.mTotalGuiBars + this.mTotalInputBars)]);
                        question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 22 + this.mTotalGuiBars + this.mTotalInputBars)]);
                        question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 23 + this.mTotalGuiBars + this.mTotalInputBars)]);
                        question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 24 + this.mTotalGuiBars + this.mTotalInputBars)]);
                        question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 25 + this.mTotalGuiBars + this.mTotalInputBars)]);
                        question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 26 + this.mTotalGuiBars + this.mTotalInputBars)]);
                        question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 27 + this.mTotalGuiBars + this.mTotalInputBars)]);
                        question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 28 + this.mTotalGuiBars + this.mTotalInputBars)]);
                        this.mShapeArray[parseInt(i * s + 28 + this.mTotalGuiBars + this.mTotalInputBars)].setSize(50,redHeight);
                        question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 29 + this.mTotalGuiBars + this.mTotalInputBars)]);
		
		}
               	
		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
	},

	createWorld: function()
	{
		this.parent();
		
		for (i = 0; i < this.mScoreNeeded; i++)
		{
			//make each cm 20 long
                     	//greens to make a cm ruler with
                        var textAcm = new Shape(55,5,350,200,this,"","","");
                        this.mShapeArray.push(textAcm);
                        textAcm.setMountable(true);
                        textAcm.setText('0 cm');

                        var unitAcm = new Rectangle(50,20,475,300,this,this.mRaphael,.3,1,1,"none",.5,true);
                        this.mShapeArray.push(unitAcm);
                        unitAcm.setMountable(true);

                        var textBcm = new Shape(55,5,245,200,this,"","","");
                        this.mShapeArray.push(textBcm);
                        textBcm.setMountable(true);
                        textBcm.setText('1 cm');

                        var unitBcm = new Rectangle(50,20,525,300,this,this.mRaphael,.4,1,1,"none",.5,true);
                        this.mShapeArray.push(unitBcm);
                        unitBcm.setMountable(true);

                        var textCcm = new Shape(55,5,245,200,this,"","","");
                        this.mShapeArray.push(textCcm);
                        textCcm.setMountable(true);
                        textCcm.setText('2 cm');

                        var unitCcm = new Rectangle(50,20,575,300,this,this.mRaphael,.5,1,1,"none",.5,true);
                        this.mShapeArray.push(unitCcm);
                        unitCcm.setMountable(true);

                        var textDcm = new Shape(55,5,245,200,this,"","","");
                        this.mShapeArray.push(textDcm);
                        textDcm.setMountable(true);
                        textDcm.setText('3 cm');

                        var unitDcm = new Rectangle(50,20,475,200,this,this.mRaphael,.7,1,1,"none",.5,true);
                        this.mShapeArray.push(unitDcm);
                        unitDcm.setMountable(true);

                        var textEcm = new Shape(55,5,245,200,this,"","","");
                        this.mShapeArray.push(textEcm);
                        textEcm.setMountable(true);
                        textEcm.setText('4 cm');

                        var unitEcm = new Rectangle(50,20,200,100,this,this.mRaphael,.8,1,1,"none",.5,true);
                        this.mShapeArray.push(unitEcm);
                        unitEcm.setMountable(true);

                        var textFcm = new Shape(55,5,245,200,this,"","","");
                        this.mShapeArray.push(textFcm);
                        textFcm.setMountable(true);
                        textFcm.setText('5 cm');

                        var unitFcm = new Rectangle(50,20,200,100,this,this.mRaphael,.9,1,1,"none",.5,true);
                        this.mShapeArray.push(unitFcm);
                        unitFcm.setMountable(true);

                        var textGcm = new Shape(55,5,245,200,this,"","","");
                        this.mShapeArray.push(textGcm);
                        textGcm.setMountable(true);
                        textGcm.setText('6 cm');

                        //red shape to measure
                        var redRectanglecm = new Rectangle(50,50,600,100,this,this.mRaphael,0,1,1,"none",.5,true);
                        this.mShapeArray.push(redRectanglecm);

                        //the ruler
                        var rulercm = new Ruler(50,300,500,50,this,this.mRaphael,.6,1,1,"none",.5,true);

                        rulercm.createMountPoint(0,30,30);
                        rulercm.createMountPoint(1,0,17);
                        rulercm.createMountPoint(2,30,50);
                        rulercm.createMountPoint(3,0,37);
                        rulercm.createMountPoint(4,30,70);
                        rulercm.createMountPoint(5,0,57);
                        rulercm.createMountPoint(6,30,90);
                        rulercm.createMountPoint(7,0,77);
                        rulercm.createMountPoint(8,30,110);
                        rulercm.createMountPoint(9,0,97);
                        rulercm.createMountPoint(10,30,130);
                        rulercm.createMountPoint(11,0,107);
                        rulercm.createMountPoint(12,30,150);

                        this.mShapeArray.push(rulercm);

                        rulercm.mount(textAcm,0);
                        rulercm.mount(unitAcm,1);
                        rulercm.mount(textBcm,2);
                        rulercm.mount(unitBcm,3);
                        rulercm.mount(textCcm,4);
                        rulercm.mount(unitCcm,5);
                        rulercm.mount(textDcm,6);
                        rulercm.mount(unitDcm,7);
                        rulercm.mount(textEcm,8);
                        rulercm.mount(unitEcm,9);
                        rulercm.mount(textFcm,10);
                        rulercm.mount(unitFcm,11);
                        rulercm.mount(textGcm,12);

			//greens to make a in ruler with
			var textA = new Shape(55,5,350,200,this,"","","");
			this.mShapeArray.push(textA);
			textA.setMountable(true);
			textA.setText('0 inch');

                	var unitA = new Rectangle(50,50,475,300,this,this.mRaphael,.3,1,1,"none",.5,true);
			this.mShapeArray.push(unitA);
			unitA.setMountable(true);
	
			var textB = new Shape(55,5,245,200,this,"","","");
			this.mShapeArray.push(textB);
			textB.setMountable(true);
			textB.setText('1 inch');

                	var unitB = new Rectangle(50,50,525,300,this,this.mRaphael,.4,1,1,"none",.5,true);
			this.mShapeArray.push(unitB);
			unitB.setMountable(true);

			var textC = new Shape(55,5,245,200,this,"","","");
			this.mShapeArray.push(textC);
			textC.setMountable(true);
			textC.setText('2 inch');

                	var unitC = new Rectangle(50,50,575,300,this,this.mRaphael,.5,1,1,"none",.5,true);
			this.mShapeArray.push(unitC);
			unitC.setMountable(true);

			var textD = new Shape(55,5,245,200,this,"","","");
			this.mShapeArray.push(textD);
			textD.setMountable(true);
			textD.setText('3 inch');

                	var unitD = new Rectangle(50,50,475,200,this,this.mRaphael,.7,1,1,"none",.5,true);
			this.mShapeArray.push(unitD);
			unitD.setMountable(true);

			var textE = new Shape(55,5,245,200,this,"","","");
			this.mShapeArray.push(textE);
			textE.setMountable(true);
			textE.setText('4 inch');

                	var unitE = new Rectangle(50,50,200,100,this,this.mRaphael,.8,1,1,"none",.5,true);
			this.mShapeArray.push(unitE);
			unitE.setMountable(true);
			
			var textF = new Shape(55,5,245,200,this,"","","");
			this.mShapeArray.push(textF);
			textF.setMountable(true);
			textF.setText('5 inch');

                	var unitF = new Rectangle(50,50,200,100,this,this.mRaphael,.9,1,1,"none",.5,true);
			this.mShapeArray.push(unitF);
			unitF.setMountable(true);
			
			var textG = new Shape(55,5,245,200,this,"","","");
			this.mShapeArray.push(textG);
			textG.setMountable(true);
			textG.setText('6 inch');
                
			//red shape to measure	
			var redRectangle = new Rectangle(50,50,600,100,this,this.mRaphael,0,1,1,"none",.5,true);
			this.mShapeArray.push(redRectangle);

			//the ruler
			var ruler = new Ruler(50,300,500,50,this,this.mRaphael,.6,1,1,"none",.5,true);

			ruler.createMountPoint(0,30,30);
			ruler.createMountPoint(1,0,17);
			ruler.createMountPoint(2,30,80);
			ruler.createMountPoint(3,0,67);
			ruler.createMountPoint(4,30,130);
			ruler.createMountPoint(5,0,117);
			ruler.createMountPoint(6,30,180);
			ruler.createMountPoint(7,0,167);
			ruler.createMountPoint(8,30,230);
			ruler.createMountPoint(9,0,217);
			ruler.createMountPoint(10,30,280);
			ruler.createMountPoint(11,0,267);
			ruler.createMountPoint(12,30,330);

			this.mShapeArray.push(ruler);

			ruler.mount(textA,0);
			ruler.mount(unitA,1);
			ruler.mount(textB,2);
			ruler.mount(unitB,3);
			ruler.mount(textC,4);
			ruler.mount(unitC,5);
			ruler.mount(textD,6);
			ruler.mount(unitD,7);
			ruler.mount(textE,8);
			ruler.mount(unitE,9);
			ruler.mount(textF,10);
			ruler.mount(unitF,11);
			ruler.mount(textG,12);
		}
	}
});
