var Circle = new Class(
{

Extends: RaphaelPolygon,
	
        initialize: function (radius,spawnX,spawnY,game,raphael,r,g,b,s,op,d)
        {
                this.parent(0,0,spawnX,spawnY,game,raphael,r,g,b,s,op,d);
		this.mRadius = radius;
		
 		this.mPolygon = this.mRaphael.circle(this.mPosition.mX, this.mPosition.mY, this.mRadius).attr({fill: "hsb(" + this.mRed + "," + this.mGreen + "," + this.mBlue + ")", stroke: this.mStroke, opacity: this.mOpacity});

		this.mPolygon.mPolygon = this;
	
                if (this.mDrag)
                {
                        this.mPolygon.drag(this.move, this.start, this.up);
                }
	},

	dragMove: function(dx,dy)
	{
   		var deltaX = dx - this.mLastX;
                var deltaY = dy - this.mLastY;

                this.mPosition.mX += deltaX;
                this.mPosition.mY += deltaY;
 		
		this.mPolygon.attr({cx: this.mPosition.mX, cy: this.mPosition.mY});

                this.mLastX = dx;
                this.mLastY = dy;
	}
});
