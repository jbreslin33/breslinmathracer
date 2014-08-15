var RulerCentimeter = new Class(
{

Extends: RaphaelPolygon,

        initialize: function (width,height,spawnX,spawnY,game,raphael,r,g,b,s,op,d)
        {
		this.parent(width,height,spawnX,spawnY,game,raphael,r,g,b,s,op,d);
		
		this.mPolygon = this.mRaphael.rect(this.mPosition.mX, this.mPosition.mY, this.mWidth, this.mHeight).attr({fill: "hsb(" + this.mRed + "," + this.mGreen + "," + this.mBlue + ")", stroke: this.mStroke, opacity: this.mOpacity});

		this.mPolygon.mPolygon = this;
                
		if (this.mDrag)
                {
                        this.mPolygon.drag(this.move, this.start, this.up);
                }

		this.textA = new Shape(55,5,350,200,this,"","","");
                this.mGame.mShapeArray.push(this.textA);
                this.textA.setMountable(true);
                this.textA.setText('0 cm');

                this.unitA = new Rectangle(50,20,475,300,this,this.mRaphael,.3,1,1,"none",.5,true);
                this.mGame.mShapeArray.push(this.unitA);
                this.unitA.setMountable(true);

                this.textB = new Shape(55,5,245,200,this,"","","");
                this.mGame.mShapeArray.push(this.textB);
                this.textB.setMountable(true);
                this.textB.setText('1 cm');

                this.unitB = new Rectangle(50,20,525,300,this,this.mRaphael,.8,1,1,"none",.5,true);
                this.mGame.mShapeArray.push(this.unitB);
                this.unitB.setMountable(true);

                this.textC = new Shape(55,5,245,200,this,"","","");
                this.mGame.mShapeArray.push(this.textC);
              	this.textC.setMountable(true);
                this.textC.setText('2 cm');

                this.unitC = new Rectangle(50,20,575,300,this,this.mRaphael,.3,1,1,"none",.5,true);
                this.mGame.mShapeArray.push(this.unitC);
                this.unitC.setMountable(true);

                this.textD = new Shape(55,5,245,200,this,"","","");
                this.mGame.mShapeArray.push(this.textD);
                this.textD.setMountable(true);
                this.textD.setText('3 cm');

                this.unitD = new Rectangle(50,20,475,200,this,this.mRaphael,.8,1,1,"none",.5,true);
                this.mGame.mShapeArray.push(this.unitD);
                this.unitD.setMountable(true);

                this.textE = new Shape(55,5,245,200,this,"","","");
                this.mGame.mShapeArray.push(this.textE);
                this.textE.setMountable(true);
                this.textE.setText('4 cm');

                this.unitE = new Rectangle(50,20,200,100,this,this.mRaphael,.3,1,1,"none",.5,true);
                this.mGame.mShapeArray.push(this.unitE);
                this.unitE.setMountable(true);

                this.textF = new Shape(55,5,245,200,this,"","","");
                this.mGame.mShapeArray.push(this.textF);
                this.textF.setMountable(true);
                this.textF.setText('5 cm');

               	this.unitF = new Rectangle(50,20,200,100,this,this.mRaphael,.8,1,1,"none",.5,true);
                this.mGame.mShapeArray.push(this.unitF);
                this.unitF.setMountable(true);

                this.textG = new Shape(55,5,245,200,this,"","","");
                this.mGame.mShapeArray.push(this.textG);
                this.textG.setMountable(true);
               	this.textG.setText('6 cm');

               	this.unitG = new Rectangle(50,20,200,100,this,this.mRaphael,.3,1,1,"none",.5,true);
                this.mGame.mShapeArray.push(this.unitG);
                this.unitG.setMountable(true);

                this.textH = new Shape(55,5,245,200,this,"","","");
                this.mGame.mShapeArray.push(this.textH);
                this.textH.setMountable(true);
                this.textH.setText('7 cm');
  
		this.unitH = new Rectangle(50,20,200,100,this,this.mRaphael,.8,1,1,"none",.5,true);
                this.mGame.mShapeArray.push(this.unitH);
                this.unitH.setMountable(true);

                this.textI = new Shape(55,5,245,200,this,"","","");
                this.mGame.mShapeArray.push(this.textI);
                this.textI.setMountable(true);
                this.textI.setText('8 cm');
     
		this.unitI = new Rectangle(50,20,200,100,this,this.mRaphael,.3,1,1,"none",.5,true);
                this.mGame.mShapeArray.push(this.unitI);
                this.unitI.setMountable(true);

                this.textJ = new Shape(55,5,245,200,this,"","","");
                this.mGame.mShapeArray.push(this.textJ);
                this.textJ.setMountable(true);
                this.textJ.setText('9 cm');

			this.unitJ = new Rectangle(50,20,200,100,this,this.mRaphael,.8,1,1,"none",.5,true);
                	this.mGame.mShapeArray.push(this.unitJ);
                        this.unitJ.setMountable(true);

                        this.textK = new Shape(55,5,245,200,this,"","","");
                        this.mGame.mShapeArray.push(this.textK);
                        this.textK.setMountable(true);
                        this.textK.setText('10 cm');

                        this.unitK = new Rectangle(50,20,200,100,this,this.mRaphael,.3,1,1,"none",.5,true);
                        this.mGame.mShapeArray.push(this.unitK);
                        this.unitK.setMountable(true);

                        this.textL = new Shape(55,5,245,200,this,"","","");
                        this.mGame.mShapeArray.push(this.textL);
                        this.textL.setMountable(true);
                        this.textL.setText('11 cm');

                        this.unitL = new Rectangle(50,20,200,100,this,this.mRaphael,.8,1,1,"none",.5,true);
                        this.mGame.mShapeArray.push(this.unitL);
                        this.unitL.setMountable(true);

                        this.textM = new Shape(55,5,245,200,this,"","","");
                        this.mGame.mShapeArray.push(this.textM);
                        this.textM.setMountable(true);
                        this.textM.setText('12 cm');

                        this.unitM = new Rectangle(50,20,200,100,this,this.mRaphael,.3,1,1,"none",.5,true);
                        this.mGame.mShapeArray.push(this.unitM);
                        this.unitM.setMountable(true);

                        this.textN = new Shape(55,5,245,200,this,"","","");
                        this.mGame.mShapeArray.push(this.textN);
                        this.textN.setMountable(true);
                        this.textN.setText('13 cm');

                   	this.unitN = new Rectangle(50,20,200,100,this,this.mRaphael,.8,1,1,"none",.5,true);
                        this.mGame.mShapeArray.push(this.unitN);
                        this.unitN.setMountable(true);

                        this.textO = new Shape(55,5,245,200,this,"","","");
                        this.mGame.mShapeArray.push(this.textO);
                        this.textO.setMountable(true);
                        this.textO.setText('14 cm');

                this.unitO = new Rectangle(50,20,200,100,this,this.mRaphael,.3,1,1,"none",.5,true);
                this.mGame.mShapeArray.push(this.unitO);
                this.unitO.setMountable(true);

                this.textP = new Shape(55,5,245,200,this,"","","");
               	this.mGame.mShapeArray.push(this.textP);
                this.textP.setMountable(true);
                this.textP.setText('15 cm');


		this.createMountPoint(0,30,30);
               	this.createMountPoint(1,0,17);
                this.createMountPoint(2,30,50);
                this.createMountPoint(3,0,37);
                this.createMountPoint(4,30,70);
                this.createMountPoint(5,0,57);
                this.createMountPoint(6,30,90);
                this.createMountPoint(7,0,77);
                this.createMountPoint(8,30,110);
                this.createMountPoint(9,0,97);
                this.createMountPoint(10,30,130);
                this.createMountPoint(11,0,117);
                this.createMountPoint(12,30,150);
                this.createMountPoint(13,0,137);
                this.createMountPoint(14,30,170);
                this.createMountPoint(15,0,157);
                this.createMountPoint(16,30,190);
                this.createMountPoint(17,0,177);
                this.createMountPoint(18,30,210);
                this.createMountPoint(19,0,197);
                this.createMountPoint(20,30,230);
                this.createMountPoint(21,0,217);
               	this.createMountPoint(22,30,250);
                this.createMountPoint(23,0,237);
                this.createMountPoint(24,30,270);
                this.createMountPoint(25,0,257);
                this.createMountPoint(26,30,290);
                this.createMountPoint(27,0,277);
               	this.createMountPoint(28,30,310);
               	this.createMountPoint(29,0,297);
                this.createMountPoint(30,30,330);

                this.mount(this.textA,0);
                this.mount(this.unitA,1);
                this.mount(this.textB,2);
                this.mount(this.unitB,3);
                this.mount(this.textC,4);
                this.mount(this.unitC,5);
                this.mount(this.textD,6);
                this.mount(this.unitD,7);
                this.mount(this.textE,8);
                this.mount(this.unitE,9);
                this.mount(this.textF,10);
                this.mount(this.unitF,11);
                this.mount(this.textG,12);
                this.mount(this.unitG,13);
                this.mount(this.textH,14);
                this.mount(this.unitH,15);
                this.mount(this.textI,16);
                this.mount(this.unitI,17);
                this.mount(this.textJ,18);
                this.mount(this.unitJ,19);
                this.mount(this.textK,20);
                this.mount(this.unitK,21);
                this.mount(this.textL,22);
                this.mount(this.unitL,23);
                this.mount(this.textM,24);
                this.mount(this.unitM,25);
                this.mount(this.textN,26);
                this.mount(this.unitN,27);
                this.mount(this.textO,28);
                this.mount(this.unitO,29);
                this.mount(this.textP,30);
 		
	},

	dragMove: function(dx,dy)
	{
   		var deltaX = dx - this.mLastX;
                var deltaY = dy - this.mLastY;

                this.mPosition.mX += deltaX;
                this.mPosition.mY += deltaY;
 		
		this.mPolygon.attr({x: this.mPosition.mX, y: this.mPosition.mY});

                this.mLastX = dx;
                this.mLastY = dy;
	},

	setSize: function(w,h)
	{
		this.mPolygon.attr({width: w, height: h});
	},

	/*********** RENDER *************/
        render: function()
        {
                this.mPolygon.attr({x: this.mPosition.mX, y: this.mPosition.mY});
        },

	addToQuestion: function(question)
	{
 		//question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 0 + this.mTotalGuiBars + this.mTotalInputBars)]);			
 		question.mShapeArray.push(this.textA);			
 		question.mShapeArray.push(this.unitA);			
 		question.mShapeArray.push(this.textB);			
 		question.mShapeArray.push(this.unitB);			
 		question.mShapeArray.push(this.textC);			
 		question.mShapeArray.push(this.unitC);			
 		question.mShapeArray.push(this.textD);			
 		question.mShapeArray.push(this.unitD);			
 		question.mShapeArray.push(this.textE);			
 		question.mShapeArray.push(this.unitE);			
 		question.mShapeArray.push(this.textF);			
 		question.mShapeArray.push(this.unitF);			
 		question.mShapeArray.push(this.textG);			
 		question.mShapeArray.push(this.unitG);			
 		question.mShapeArray.push(this.textH);			
 		question.mShapeArray.push(this.unitH);			
 		question.mShapeArray.push(this.textI);			
 		question.mShapeArray.push(this.unitI);			
 		question.mShapeArray.push(this.textJ);			
 		question.mShapeArray.push(this.unitJ);			
 		question.mShapeArray.push(this.textK);			
 		question.mShapeArray.push(this.unitK);			
 		question.mShapeArray.push(this.textL);			
 		question.mShapeArray.push(this.unitL);			
 		question.mShapeArray.push(this.textM);			
 		question.mShapeArray.push(this.unitM);			
 		question.mShapeArray.push(this.textN);			
 		question.mShapeArray.push(this.unitN);			
 		question.mShapeArray.push(this.textO);			
 		question.mShapeArray.push(this.unitO);			
 		question.mShapeArray.push(this.textP);			
	}
});
