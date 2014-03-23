var Circle = new Class(
{

Extends: RaphaelPolygon,
	
        initialize: function (width,height,spawnX,spawnY,game,raphael,x,y,radius,r,g,b,s,op,d)
        {
                this.parent(width,height,spawnX,spawnY,game,raphael,r,g,b,s,op,d);
		this.x = x;
		this.y = y;
		this.mRadius = radius;
		
 		this.mPolygon = this.mRaphael.circle(this.x, this.y, this.mRadius).attr({fill: "hsb(" + this.mRed + "," + this.mGreen + "," + this.mBlue + ")", stroke: this.mStroke, opacity: this.mOpacity});

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

                this.x += deltaX;
                this.y += deltaY;
 		
		this.mPolygon.attr({cx: this.x, cy: this.y});

                this.mLastX = dx;
                this.mLastY = dy;
	}
});
