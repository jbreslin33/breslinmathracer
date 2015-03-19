var AngleArc = new Class(
{
Extends: RaphaelPolygon,
initialize: function (item,x,y,radius,start,end,r,g,b,s,op,d)
{
	this.parent(0,0,x,y,item.mSheet.mGame,item.mRaphael,r,g,b,s,op,d);

	var originalStart = start; 
	var originalEnd = end; 

	start = parseFloat(360 - start);	
	end   = parseFloat(360 - end);	

       	var rad = Math.PI / 180;
       	var x1 = x + radius * Math.cos(-start * rad),
       	x2 = x + radius * Math.cos(-end * rad),
       	y1 = y + radius * Math.sin(-start * rad),
       	y2 = y + radius * Math.sin(-end * rad);
        
	this.mPolygon = this.mRaphael.path(["M", x, y, "L", x1, y1, "A", radius, radius, 0, +(end - start > 180), 0, x2, y2, "z"]).attr({fill: "hsb(" + this.mRed + "," + this.mGreen + "," + this.mBlue + ")", stroke: this.mStroke, opacity: this.mOpacity});


                //triangle at end of ray
                //this.mTriangle = new Triangle (this.mItem.mSheet.mGame,this.mItem.mRaphael,parseInt(x2),y2, parseInt(x2-20),parseInt(y2+10), parseInt(x2-20),parseInt(y2-10)   ,0,1,1,"none",.5,false)
                //this.mItem.addQuestionShape(this.mTriangle);

                //lets rotate according to passed in value
               // var rotateAmount = '' + 'r' + r + ',' + x1 + ',' + y1;
                //this.mPolygon.transform(rotateAmount);

                //rotate triangle
                //this.mTriangle.mPolygon.transform(rotateAmount);

        var degrees =  parseInt(end - start); 
        this.mText = this.mRaphael.text(x, y,'' + degrees).attr({fill: '#ff0000'});
               
	var rotateAmount = '' + 'r' + degrees + ',' + x1 + ',' + y1;
        this.mText.transform(rotateAmount);

	

	this.mPolygon.mPolygon = this;
}
});
