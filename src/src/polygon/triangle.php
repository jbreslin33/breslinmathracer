var Triangle = new Class(
{
Extends: RaphaelPolygon,
        initialize: function (x1,y1,x2,y2,x3,y3,game,raphael,r,g,b,s,op,d)
        {
		//find center for mPosition...
		sX = x1 + x2 + x3 / 3;
		sY = y1 + y2 + y3 / 3;

		this.parent(0,0,sX,sY,game,raphael,r,g,b,s,op,d);

		this.x1 = x1;
		this.y1 = y1;
		this.x2 = x2;
		this.y2 = y2;
		this.x3 = x3;
		this.y3 = y3;

		
		this.mPathString = "M" + this.x1 + "," + this.y1 + " L" + this.x2 + "," + this.y2 + " L" + this.x3 + "," + this.y3 + " z";
		
		this.mPolygon = this.mRaphael.path("" + this.mPathString).attr({fill: "hsb(" + this.mRed + "," + this.mGreen + "," + this.mBlue + ")", stroke: this.mStroke, opacity: this.mOpacity});

		this.mPolygon.mPolygon = this;
	
		//right angle	
		if (this.x1 == this.x2)
		{
			var d = parseInt(this.y1 - this.y2);
			d = Math.abs(d);
			d = parseFloat(d * .25);
			if (x1 < x3)
			{ 
				this.mSquare = new Rectangle(d,d,this.x1,parseFloat(this.y2 - d),game,raphael,.5,.5,.5,"#000",.3,true)
			}
			else
			{
				this.mSquare = new Rectangle(d,d,parseInt(this.x1 - d),parseFloat(this.y2 - d),game,raphael,.5,.5,.5,"#000",.3,true)
			}
  			game.mSheet.mItem.addQuestionShape(this.mSquare);
		}

		if (this.x1 == this.x3)
		{
			APPLICATION.log('x1 e x3');
      			var d = parseInt(this.y1 - this.y3);
                        d = Math.abs(d);
                        d = parseFloat(d * .25);
                        if (this.x1 < this.x2)
                        {
				if (this.y1 == this.y2) 
				{
					APPLICATION.log('y1 e y2');
                                	this.mSquare = new Rectangle(d,d,this.x1,parseFloat(this.y1),game,raphael,.5,.5,.5,"#000",.3,true)
				}
				else
				{
					APPLICATION.log('y1 e y3');
                                	this.mSquare = new Rectangle(d,d,this.x1,parseFloat(this.y3 - d),game,raphael,.5,.5,.5,"#000",.3,true)
				}

                        }
                        if (this.x1 < this.x3)
                        {
                                if (this.y1 == this.y2)
                                {
                                        APPLICATION.log('y1 e y2');
                                        this.mSquare = new Rectangle(d,d,this.x1,parseFloat(this.y1),game,raphael,.5,.5,.5,"#000",.3,true)
                                }
                                else
                                {
                                        APPLICATION.log('y1 e y3');
                                        this.mSquare = new Rectangle(d,d,this.x1,parseFloat(this.y3 - d),game,raphael,.5,.5,.5,"#000",.3,true)
                                }
 
			}
                        game.mSheet.mItem.addQuestionShape(this.mSquare);
		}
		if (this.x2 == this.x3)
		{
		}


		if (this.mDrag)
		{
 			this.mPolygon.drag(this.move, this.start, this.up);
		}
		
	},

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

                this.mPathString = "M" + this.x1 + "," + this.y1 + " L" + this.x2 + "," + this.y2 + " L" + this.x3 + "," + this.y3 + " z";
                this.mPolygon.attr({path:"" + this.mPathString});

                this.mLastX = dx;
                this.mLastY = dy;
	}
});
