var LineOne = new Class(
{
Extends: RaphaelPolygon,
       	initialize: function (x1,y1,x2,y2,game,raphael,r,g,b,s,op,d)
        {
                this.parent(0,0,x1,y1,game,raphael,r,g,b,s,op,d);

		this.x1 = x1;
		this.y1 = y1;
		this.x2 = x2;
		this.y2 = y2;

		this.mPathString = "M" + this.x1 + "," + this.y1 + " L" + this.x2 + "," + this.y2;
		this.mPolygon = this.mRaphael.path("" + this.mPathString);
		this.mPolygon.attr ("stroke", this.mStroke);

                this.mPolygon.mPolygon = this;

                if (this.mDrag)
                {
                        this.mPolygon.drag(this.move, this.start, this.up);
                }
        },
/*
        initialize: function (game,raphael,x1,y1,x2,y2,s,d)
        {
		//find center for mPosition...
		sX = x1 + x2 / 3;
		sY = y1 + y2 / 3;

		this.parent(0,0,sX,sY,game,raphael,0,0,0,s,0,d);

		this.x1 = x1;
		this.y1 = y1;
		this.x2 = x2;
		this.y2 = y2;
		
		this.mPathString = "M" + this.x1 + "," + this.y1 + " L" + this.x2 + "," + this.y2;
		
		this.mPolygon = this.mRaphael.path("" + this.mPathString);
		this.mPolygon.attr ("stroke", this.mStroke);

		this.mPolygon.mPolygon = this;

		if (this.mDrag)
		{
 			this.mPolygon.drag(this.move, this.start, this.up);
		}
	},
*/

	dragMove: function(dx,dy)
	{
   		var deltaX = dx - this.mLastX;
                var deltaY = dy - this.mLastY;

		//update mPosition
		this.mPosition.mX += deltaX; 
		this.mPosition.mY += deltaY; 

                this.x1 += deltaX;
                this.y1 += deltaY;
                this.x2 += deltaX;
                this.y2 += deltaY;
                this.x3 += deltaX;
                this.y3 += deltaY;

                this.mPathString = "M" + this.x1 + "," + this.y1 + " L" + this.x2 + "," + this.y2;
                this.mPolygon.attr({path:"" + this.mPathString});

                this.mLastX = dx;
                this.mLastY = dy;
	}
});
