var Triangle = new Class(
{
Extends: Polygon,
        initialize: function (raphael,x1,y1,x2,y2,x3,y3,r,g,b,s,op)
        {
		this.parent();
		this.mRaphael = raphael;
		this.x1 = x1;
		this.y1 = y1;
		this.x2 = x2;
		this.y2 = y2;
		this.x3 = x3;
		this.y3 = y3;

		this.mRed = r;
		this.mGreen = g;
		this.mBlue = b;
		this.mStroke = s;
		this.mOpacity = op;

		this.mPathString = "M" + this.x1 + "," + this.y1 + " L" + this.x2 + "," + this.y2 + " L" + this.x3 + "," + this.y3 + " z";
		
		this.mPolygon = this.mRaphael.path("" + this.mPathString).attr({fill: "hsb(" + this.mRed + "," + this.mGreen + "," + this.mBlue + ")", stroke: this.mStroke, opacity: this.mOpacity});

		this.mPolygon.mPolygon = this;
		
		this.mLastX = 0;
		this.mLastY = 0;
	},

	updateMove: function(dx,dy)
	{
   		var deltaX = dx - this.mLastX;
                var deltaY = dy - this.mLastY;

                this.x1 += deltaX;
                this.y1 += deltaY;
                this.x2 += deltaX;
                this.y2 += deltaY;
                this.x3 += deltaX;
                this.y3 += deltaY;

                this.mPathString = "M" + this.x1 + "," + this.y1 + " L" + this.x2 + "," + this.y2 + " L" + this.x3 + "," + this.y3 + " z";
                this.mPolygon.attr({path:"" + this.mPathString});

                this.mLastX = dx;
                this.mLastY = dy;
	},
	
	resetLast: function()
	{
                this.mLastX = 0;
                this.mLastY = 0;
	},

        start: function()
        {
		this.mPolygon.resetLast();
        },
        
	move: function(dx,dy)
        {
		this.mPolygon.updateMove(dx,dy);
        },

        up: function()
        {
        }
});
