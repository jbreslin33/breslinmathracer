var LineChart = new Class(
{
Extends: RaphaelPolygon,
        initialize: function (game,raphael,x1,y1,x2,y2,pointsX,pointsY,range,s,d)
        {
		//find center for mPosition...
		sX = x1 + x2 / 3;
		sY = y1 + y2 / 3;

		this.parent(0,0,sX,sY,game,raphael,0,0,0,s,0,d);

		this.x1 = x1;
		this.y1 = y1;
		this.x2 = x2;
		this.y2 = y2;
		
		this.mPathString = "M" + this.x1 + "," + this.y1 + " L" + this.x2 + "," + this.y2;
		
		this.mPolygon = this.mRaphael.linechart(
    x1, y1,      // top left anchor
    x2, y2,    // bottom right anchor
    [
      pointsX,        // red line x-values
      range    // blue line x-values - invisible, used to create x-range of graph
    ],
    [
      pointsY, // red line y-values
      range      // blue line y-values - invisible, used to create y-range of graph
    ],
    {
       nostroke: false,   // lines between points are drawn
       axis: "0 0 1 1",   // draw axes on the left and bottom
       axisxstep: 10,
       axisystep: 10,
       symbol: 'circle',    // use a filled circle as the point symbol
       smooth: true,      // curve the lines to smooth turns on the chart
       dash: "-",          //draw the lines dashed
       colors: [
         "#555599",       // the first line is red
         "#FFFFFFFF"        // the second line is blue
       ]
     });

     this.axisItems1 = this.mPolygon.axis[0].text.items;


     for( var i = 0; i < this.axisItems1.length; i++ ) {
                           this.axisItems1[i].attr("text", i); 
                        } 

     this.axisItems2 = this.mPolygon.axis[1].text.items;

     for( var i = 0; i < this.axisItems2.length; i++ ) {                         
                           this.axisItems2[i].attr("text", i); 
                        } 


		//this.mPolygon.attr ("stroke", this.mStroke);

		this.mPolygon.mPolygon = this;

		if (this.mDrag)
		{
 			this.mPolygon.drag(this.move, this.start, this.up);
		}
	},









setVisibility: function(b)
	{
             	if (b)
                {
                        this.mPolygon.show();
                }
                else
                {
                        this.mPolygon.hide();

                       for( var i = 0; i < this.axisItems1.length; i++ ) {
                           this.axisItems1[i].attr("text", ""); 
                        } 

                       for( var i = 0; i < this.axisItems2.length; i++ ) {                         
                           this.axisItems2[i].attr("text", ""); 
                        } 
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

                this.mPathString = "M" + this.x1 + "," + this.y1 + " L" + this.x2 + "," + this.y2;
                this.mPolygon.attr({path:"" + this.mPathString});

                this.mLastX = dx;
                this.mLastY = dy;
	}
});
