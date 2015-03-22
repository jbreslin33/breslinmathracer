
var Ray = new Class(
{
Extends: RaphaelPolygon,
//var line_ab = new LineOne (50,50,100,100,this.mGame,this.mRaphael,"#0000FF",.5,false);
initialize: function (x,y,length,angle,game,raphael,stroke,opacity,drag)
{
        this.parent(0,0,x,y,game,raphael,0,0,0,stroke,opacity,drag);
	this.mLength = length;

	this.x1 = x;
	this.y1 = y;
	this.x2 = parseInt(x + this.mLength);
	this.y2 = y;
	this.mAngle = angle; 
		
	this.mPathString = "M" + this.x1 + "," + this.y1 + " L" + this.x2 + "," + this.y2;
		
	this.mPolygon = this.mRaphael.path("" + this.mPathString);
	this.mPolygon.attr ("stroke", this.mStroke);

	this.mPolygon.mPolygon = this;

	//endpoint
	//this.mEndPoint = new Circle (12.5,x,y,this.mGame,this.mRaphael,0,1,1,"none",.5,false);
	//this.mGame.mSheet.mItem.addQuestionShape(this.mEndPoint);

	//triangle at end of ray
	//this.mTriangle = new Triangle (this.mGame,this.mRaphael,parseInt(this.x1),this.y2, parseInt(this.x2-20),parseInt(this.y2+10), parseInt(this.x2-20),parseInt(this.y2-10)   ,0,1,1,"none",.5,false)
	//this.mGame.mSheet.mItem.addQuestionShape(this.mTriangle);

	//lets rotate according to passed in value
	var rotateAmount = '' + 'r' + this.mAngle + ',' + this.x1 + ',' + this.y1;   
	this.mPolygon.transform(rotateAmount);
	
	//rotate triangle 	
	//this.mTriangle.mPolygon.transform(rotateAmount);
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

        this.mPathString = "M" + this.x1 + "," + this.y1 + " L" + this.x2 + "," + this.y2;
        this.mPolygon.attr({path:"" + this.mPathString});

        this.mLastX = dx;
        this.mLastY = dy;
}
});
