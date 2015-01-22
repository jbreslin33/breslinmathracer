var Rectangle = new Class(
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
        }



});
