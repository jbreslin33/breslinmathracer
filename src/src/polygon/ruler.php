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
	
 		//this.mRectangleA = new Rectangle(50,50,75,200,this,this.mRaphael,.6,1,1,"none",.1,true);
		//this.mGame.mShapeArray.push(this.mRectangleA);
 		//this.createMountPoint(0,0,0);
		///this.mount(this.mRectangleA,0);
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

       	/********* VELOCITY ******************/
        updateVelocity: function(delta)
        {
                //update Velocity
/*
                this.mVelocity.mX = this.mKey.mX * delta * this.mSpeed;
                this.mVelocity.mY = this.mKey.mY * delta * this.mSpeed;
*/
        },

        /********* POSITION ******************/
        updatePosition: function()
        {
/*
                //update position
                this.mPosition.mX += this.mVelocity.mX;
                this.mPosition.mY += this.mVelocity.mY;

                //if you have a mounter then move with the mounter with offset
                if (this.mMounter)
                {
                        //set this shape to position of it's mounter
                        this.mPosition.mX = this.mMounter.mPosition.mX;
                        this.mPosition.mY = this.mMounter.mPosition.mY;

                        //offset
                        this.mPosition.mX += this.mMounter.mMountPointArray[this.mMountPoint].mX;
                        this.mPosition.mY += this.mMounter.mMountPointArray[this.mMountPoint].mY;
                }
*/
        },
 
	/*********** RENDER *************/
        render: function()
        {
                this.log('x:' + this.mPosition.mX);
                this.log('y:' + this.mPosition.mY);
                //this.mPolygon.attr({x: this.mPosition.mX, y: this.mPosition.mY});
        }

});
