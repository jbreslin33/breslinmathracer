
var AnalogClock = new Class(
{
Extends: RaphaelPolygon,
//initialize: function (x,y,length,angle,item,stroke,opacity,drag)
//{

initialize: function (item,radius,spawnX,spawnY,game,raphael,r,g,b,s,op,d)
{
	this.parent(0,0,spawnX,spawnY,game,raphael,r,g,b,s,op,d);
        this.mRadius = radius;
	this.mItem = item;

        this.mPolygon = this.mRaphael.circle(100,100,95);
        this.mPolygon.attr({"fill":"#f5f5f5","stroke":"#444444","stroke-width":"5"})

  	var hour_sign;
        for(i=0;i<12;i++)
        {
        	var start_x = 100+Math.round(70*Math.cos(30*i*Math.PI/180));
                var start_y = 100+Math.round(70*Math.sin(30*i*Math.PI/180));
                var end_x = 100+Math.round(90*Math.cos(30*i*Math.PI/180));
                var end_y = 100+Math.round(90*Math.sin(30*i*Math.PI/180));
		hour_sign = new LineOne(start_x,start_y,end_x,end_y,APPLICATION.mGame,this.mRaphael,"#444444",.5,false);
 		this.mItem.addQuestionShape(hour_sign);
        }
 
	var minute_sign;
        for(i=0;i<60;i++)
        {
        	var start_x = 100+Math.round(80*Math.cos(6*i*Math.PI/180));
                var start_y = 100+Math.round(80*Math.sin(6*i*Math.PI/180));
                var end_x   = 100+Math.round(90*Math.cos(6*i*Math.PI/180));
                var end_y   = 100+Math.round(90*Math.sin(6*i*Math.PI/180));
		minute_sign = new LineOne(start_x,start_y,end_x,end_y,APPLICATION.mGame,this.mRaphael,"#444444",.5,false);
 		this.mItem.addQuestionShape(minute_sign);
        }

	var hour_hand = new LineOne(100,100,100,50,APPLICATION.mGame,this.mRaphael,"#444444",.5,false);
       	hour_hand.mPolygon.attr({stroke: "#444444", "stroke-width": 6});
 	this.mItem.addQuestionShape(hour_hand);
	
	var minute_hand = new LineOne(100,100,100,40,APPLICATION.mGame,this.mRaphael,"#444444",.5,false);
       	minute_hand.mPolygon.attr({stroke: "#444444", "stroke-width": 4});
 	this.mItem.addQuestionShape(minute_hand);
	
	


        //this.mPolygon = this.mRaphael.circle(this.mPosition.mX, this.mPosition.mY, this.mRadius).attr({fill: "hsb(" + this.mRed + "," + this.mGreen + "," + this.mBlue + ")", stroke: this.mStroke, opacity: this.mOpacity});

/*
	this.x1 = x;
	this.y1 = y;
	this.x2 = parseInt(x + this.mLength);
	this.y2 = y;
	this.mAngle = angle; 
		
	this.mPathString = "M" + this.x1 + "," + this.y1 + " L" + this.x2 + "," + this.y2;
		
	this.mPolygon = this.mRaphael.path("" + this.mPathString);
	this.mPolygon.attr ("stroke", this.mStroke);

	this.mPolygon.mPolygon = this;
*/
	this.mPolygon.mPolygon = this;

	//endpoint
 	//clock = canvas.circle(100,100,95);
        //clock.attr({"fill":"#f5f5f5","stroke":"#444444","stroke-width":"5"})

	//this.mClock = new Circle (100,140,95,this.mItem.mSheet.mGame,this.mItem.mRaphael,0,1,1,"none",.5,false);
        //this.mClock.mPolygon.attr({"fill":"#f5f5f5","stroke":"#444444","stroke-width":"5"})
	//this.mItem.addQuestionShape(this.mClock);

	//triangle at end of ray
/*
	this.mTriangle = new Triangle (parseInt(this.x2),this.y2, parseInt(this.x2-20),parseInt(this.y2+10), parseInt(this.x2-20),parseInt(this.y2-10),this.mItem.mSheet.mGame,this.mItem.mRaphael,0,1,1,"none",.5,false)
	this.mItem.addQuestionShape(this.mTriangle);

	//lets rotate according to passed in value
	var rotateAmount = '' + 'r' + this.mAngle + ',' + this.x1 + ',' + this.y1;   
	this.mPolygon.transform(rotateAmount);
	
	//rotate triangle 	
	this.mTriangle.mPolygon.transform(rotateAmount);
*/
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
