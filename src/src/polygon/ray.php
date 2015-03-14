
var Ray = new Class(
{
Extends: RaphaelPolygon,
//x1=endpointx y2=endpointy x2=arrowx y2=arrowy r=rotation in degrees around x1,y1 							
        initialize: function (item,x1,y1,x2,y2,s,d,r)
        {
		this.mItem = item;
		//find center for mPosition...
		sX = x1 + x2 / 3;
		sY = y1 + y2 / 3;

		this.parent(0,0,sX,sY,this.mItem.mSheet.mGame,this.mItem.mRaphael,0,0,0,s,0,d);

		this.x1 = x1;
		this.y1 = y1;
		this.x2 = x2;
		this.y2 = y2;
		this.r  = r;
		
		this.mPathString = "M" + this.x1 + "," + this.y1 + " L" + this.x2 + "," + this.y2;
		
		this.mPolygon = this.mItem.mRaphael.path("" + this.mPathString);
		this.mPolygon.attr ("stroke", this.mStroke);

		this.mPolygon.mPolygon = this;

		//endpoint
		this.mEndPoint = new Circle (12.5,x1,y1,this.mItem.mSheet.mGame,this.mItem.mRaphael,0,1,1,"none",.5,false)
		this.mItem.addQuestionShape(this.mEndPoint);

		//triangle at end of ray
						//game,raphael,x1,y1,x2,y2,x3,y3,r,g,b,s,op,d)
		this.mTriangle = new Triangle (this.mItem.mSheet.mGame,this.mItem.mRaphael,parseInt(x2-10),y2, parseInt(x2-20),parseInt(y2+20), parseInt(x2-20),parseInt(y2-20)   ,0,1,1,"none",.5,false)
		this.mItem.addQuestionShape(this.mTriangle);


		//lets rotate according to passed in value
		var rotateAmount = '' + 'r' + r + ',' + x1 + ',' + y1;   
		this.mPolygon.transform(rotateAmount);
	}
});
