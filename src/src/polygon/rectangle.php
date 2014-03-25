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
		this.log('x:' + this.mPosition.mX);
		this.mPolygon.attr({x: this.mPosition.mX, y: this.mPosition.mY});
		/*
		//center image relative to position set it to mPositionRender
                this.mPositionRender.mX = this.mPosition.mX - (this.mWidth / 2);
                this.mPositionRender.mY = this.mPosition.mY - (this.mHeight / 2);

                //check for new values if so change render of div
                modx = this.mPositionRender.mX+'px';    
                this.mDiv.mDiv.style.left = modx; 
                        
                mody = this.mPositionRender.mY+'px';
                this.mDiv.mDiv.style.top = mody; 
		*/
        }


});
