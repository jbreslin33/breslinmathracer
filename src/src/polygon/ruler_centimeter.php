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

                        this.unitB = new Rectangle(50,20,525,300,this,this.mRaphael,.4,1,1,"none",.5,true);
                        this.mGame.mShapeArray.push(this.unitB);
                        this.unitB.setMountable(true);

                        this.textC = new Shape(55,5,245,200,this,"","","");
                        this.mGame.mShapeArray.push(this.textC);
                       	this.textC.setMountable(true);
                        this.textC.setText('2 cm');

                        this.unitC = new Rectangle(50,20,575,300,this,this.mRaphael,.5,1,1,"none",.5,true);
                        this.mGame.mShapeArray.push(this.unitC);
                        this.unitC.setMountable(true);

                        this.textD = new Shape(55,5,245,200,this,"","","");
                        this.mGame.mShapeArray.push(this.textD);
                        this.textD.setMountable(true);
                        this.textD.setText('3 cm');

                        this.unitD = new Rectangle(50,20,475,200,this,this.mRaphael,.7,1,1,"none",.5,true);
                        this.mGame.mShapeArray.push(this.unitD);
                        this.unitD.setMountable(true);

                        this.textE = new Shape(55,5,245,200,this,"","","");
                        this.mGame.mShapeArray.push(this.textE);
                        this.textE.setMountable(true);
                        this.textE.setText('4 cm');

                        this.unitE = new Rectangle(50,20,200,100,this,this.mRaphael,.8,1,1,"none",.5,true);
                        this.mGame.mShapeArray.push(this.unitE);
                        this.unitE.setMountable(true);

                        this.textF = new Shape(55,5,245,200,this,"","","");
                        this.mGame.mShapeArray.push(this.textF);
                        this.textF.setMountable(true);
                        this.textF.setText('5 cm');

                        this.unitF = new Rectangle(50,20,200,100,this,this.mRaphael,.9,1,1,"none",.5,true);
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
	}
});
