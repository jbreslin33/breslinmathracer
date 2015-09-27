
var AnalogClock = new Class(
{
Extends: RaphaelPolygon,
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

	this.hour_hand = new LineOne(100,100,100,50,APPLICATION.mGame,this.mRaphael,"#444444",.5,false);
       	this.hour_hand.mPolygon.attr({stroke: "#444444", "stroke-width": 6});
 	this.mItem.addQuestionShape(this.hour_hand);
	
	this.minute_hand = new LineOne(100,100,100,40,APPLICATION.mGame,this.mRaphael,"#444444",.5,false);
       	this.minute_hand.mPolygon.attr({stroke: "#444444", "stroke-width": 4});
 	this.mItem.addQuestionShape(this.minute_hand);
 
	var pin = new Circle (5,100,100,this.mItem.mSheet.mGame,this.mItem.mRaphael,0,1,1,"none",.5,false);
        pin.mPolygon.attr("fill", "#000000");
        this.mItem.addQuestionShape(pin);

	//reset transforms
        this.hour_hand.mPolygon.transform("");
        this.minute_hand.mPolygon.transform("");
},

set: function(hours,minutes)
{
	//reset transforms
        this.hour_hand.mPolygon.transform("");
        this.minute_hand.mPolygon.transform("");

        //rotate to spot
        if (hours == 12)
        {
                this.mPolygon.hour_hand.transform("r" + parseInt(minutes/2) + ",100,100");
                this.mPolygon.minute_hand.transform("r" + parseInt(6*minutes) + ",100,100");
        }
        else
        {
                this.hour_hand.mPolygon.transform("r" + parseInt(30*hours + (minutes/2)) + ",100,100");
                this.minute_hand.mPolygon.transform("r" + parseInt(6*minutes) + ",100,100");
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

        this.mPathString = "M" + this.x1 + "," + this.y1 + " L" + this.x2 + "," + this.y2;
        this.mPolygon.attr({path:"" + this.mPathString});

        this.mLastX = dx;
        this.mLastY = dy;
}
});
