var Circle = new Class(
{
        initialize: function (raphael,x,y,radius,r,g,b,s,op)
        {
		this.mRaphael = raphael;
		this.x = x;
		this.y = y;
		this.mRadius = radius;
		
		this.mRed = r;
		this.mGreen = g;
		this.mBlue = b;
		this.mStroke = s;
		this.mOpacity = op;

 		this.mCircle = this.mRaphael.circle(this.x, this.y, this.mRadius).attr({fill: "hsb(" + this.mRed + "," + this.mGreen + "," + this.mBlue + ")", stroke: this.mStroke, opacity: this.mOpacity});

		this.mCircle.mCircle = this;
	
		this.mLastX = 0;
		this.mLastY = 0;
	},

	updateMove: function(dx,dy)
	{
   		var deltaX = dx - this.mLastX;
                var deltaY = dy - this.mLastY;

                this.x += deltaX;
                this.y += deltaY;
 		
		this.mCircle.attr({cx: this.x, cy: this.y});
		//this.attr({cx: this.ox + dx, cy: this.oy + dy});

                //this.mPathString = "M" + this.x1 + "," + this.y1 + " L" + this.x2 + "," + this.y2 + " L" + this.x3 + "," + this.y3 + " z";
                //this.mPath.attr({path:"" + this.mPathString});

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
                //APPLICATION.mGame.mTriangle.resetLast();
		this.mCircle.resetLast();
 		//this.ox = this.attr("cx");
                //this.oy = this.attr("cy");
                this.animate({r: 70, opacity: .25}, 500, ">");
        },
        
	move: function(dx,dy)
        {
		//APPLICATION.mGame.mTriangle.updateMove(dx,dy);
		this.mCircle.updateMove(dx,dy);
 		//this.attr({cx: this.ox + dx, cy: this.oy + dy});
        },

        up: function()
        {
 		this.animate({r: 50, opacity: .5}, 500, ">");
        }
});

