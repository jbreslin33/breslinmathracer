var Triangle = new Class(
{

Extends: Polygon,

        initialize: function (raphael,x1,y1,x2,y2,x3,y3)
        {
		this.mRaphael = raphael;
		this.x1 = x1;
		this.y1 = y1;
		this.x2 = x2;
		this.y2 = y2;
		this.x3 = x3;
		this.y3 = y3;
		this.mPathString = "M" + this.x1 + "," + this.y1 + " L" + this.x2 + "," + this.y2 + " L" + this.x3 + "," + this.y3 + " z";
 		this.mPath = this.mRaphael.path("" + this.mPathString).attr({fill: "hsb(0, 1, 1)", stroke: "none", opacity: .5});        

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
                this.mPath.attr({path:"" + this.mPathString});

                this.mLastX = dx;
                this.mLastY = dy;
	},

        start: function()
        {
                APPLICATION.mGame.mTriangle.mLastX = 0;
                APPLICATION.mGame.mTriangle.mLastY = 0;
        },
        
	move: function(dx,dy)
        {
		APPLICATION.mGame.mTriangle.updateMove(dx,dy);
        },

        up: function()
        {
        }
});

