var Ruler = new Class(
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

			this.textAcm = new Shape(55,5,350,200,this,"","","");
                        this.mGame.mShapeArray.push(this.textAcm);
                        this.textAcm.setMountable(true);
                        this.textAcm.setText('0 cm');

                        this.unitAcm = new Rectangle(50,20,475,300,this,this.mRaphael,.3,1,1,"none",.5,true);
                        this.mGame.mShapeArray.push(this.unitAcm);
                        this.unitAcm.setMountable(true);

                        this.textBcm = new Shape(55,5,245,200,this,"","","");
                        this.mGame.mShapeArray.push(this.textBcm);
                        this.textBcm.setMountable(true);
                        this.textBcm.setText('1 cm');

                        this.unitBcm = new Rectangle(50,20,525,300,this,this.mRaphael,.4,1,1,"none",.5,true);
                        this.mGame.mShapeArray.push(this.unitBcm);
                        this.unitBcm.setMountable(true);

                        this.textCcm = new Shape(55,5,245,200,this,"","","");
                        this.mGame.mShapeArray.push(this.textCcm);
                       	this.textCcm.setMountable(true);
                        this.textCcm.setText('2 cm');

                        this.unitCcm = new Rectangle(50,20,575,300,this,this.mRaphael,.5,1,1,"none",.5,true);
                        this.mGame.mShapeArray.push(this.unitCcm);
                        this.unitCcm.setMountable(true);

                        this.textDcm = new Shape(55,5,245,200,this,"","","");
                        this.mGame.mShapeArray.push(this.textDcm);
                        this.textDcm.setMountable(true);
                        this.textDcm.setText('3 cm');

                        this.unitDcm = new Rectangle(50,20,475,200,this,this.mRaphael,.7,1,1,"none",.5,true);
                        this.mGame.mShapeArray.push(this.unitDcm);
                        this.unitDcm.setMountable(true);

                        this.textEcm = new Shape(55,5,245,200,this,"","","");
                        this.mGame.mShapeArray.push(this.textEcm);
                        this.textEcm.setMountable(true);
                        this.textEcm.setText('4 cm');

                        this.unitEcm = new Rectangle(50,20,200,100,this,this.mRaphael,.8,1,1,"none",.5,true);
                        this.mGame.mShapeArray.push(this.unitEcm);
                        this.unitEcm.setMountable(true);

                        this.textFcm = new Shape(55,5,245,200,this,"","","");
                        this.mGame.mShapeArray.push(this.textFcm);
                        this.textFcm.setMountable(true);
                        this.textFcm.setText('5 cm');

                        this.unitFcm = new Rectangle(50,20,200,100,this,this.mRaphael,.9,1,1,"none",.5,true);
                        this.mGame.mShapeArray.push(this.unitFcm);
                        this.unitFcm.setMountable(true);

                        this.textGcm = new Shape(55,5,245,200,this,"","","");
                        this.mGame.mShapeArray.push(this.textGcm);
                        this.textGcm.setMountable(true);
                        this.textGcm.setText('6 cm');
      
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

                        this.mount(this.textAcm,0);
                        this.mount(this.unitAcm,1);
                        this.mount(this.textBcm,2);
                        this.mount(this.unitBcm,3);
                        this.mount(this.textCcm,4);
                        this.mount(this.unitCcm,5);
                        this.mount(this.textDcm,6);
                        this.mount(this.unitDcm,7);
                        this.mount(this.textEcm,8);
                        this.mount(this.unitEcm,9);
                        this.mount(this.textFcm,10);
                        this.mount(this.unitFcm,11);
                        this.mount(this.textGcm,12);
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
 		question.mShapeArray.push(this.textAcm);			
 		question.mShapeArray.push(this.unitAcm);			
 		question.mShapeArray.push(this.textBcm);			
 		question.mShapeArray.push(this.unitBcm);			
 		question.mShapeArray.push(this.textCcm);			
 		question.mShapeArray.push(this.unitCcm);			
 		question.mShapeArray.push(this.textDcm);			
 		question.mShapeArray.push(this.unitDcm);			
 		question.mShapeArray.push(this.textEcm);			
 		question.mShapeArray.push(this.unitEcm);			
 		question.mShapeArray.push(this.textFcm);			
 		question.mShapeArray.push(this.unitFcm);			
 		question.mShapeArray.push(this.textGcm);			
	}
});
