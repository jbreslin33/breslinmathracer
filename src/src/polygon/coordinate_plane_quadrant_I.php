
var CoordinatePlaneQuadrantI = new Class(
{
Extends: RaphaelPolygon,
initialize: function (game,item,raphael,x1,y1,x2,y2,pointsX,pointsY,range,rX1,rY1,s,d)
{
	//find center for mPosition...
	sX = x1 + x2 / 3;
	sY = y1 + y2 / 3;

	this.parent(0,0,sX,sY,game,raphael,0,0,0,s,0,d);

	this.x1 = x1;
	this.y1 = y1;
	this.x2 = x2;
	this.y2 = y2;

    	this.vLines = new Array()
    	this.hLines = new Array()
		
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
       		nostroke: true,   // lines between points are drawn
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

     	for( var i = 0; i < this.axisItems1.length; i++ )
	{
        	this.axisItems1[i].attr("text", i); 
        } 

     	this.axisItems2 = this.mPolygon.axis[1].text.items;

     	for( var i = 0; i < this.axisItems2.length; i++ )
	{                         
        	this.axisItems2[i].attr("text", i); 
        } 

	var width = x2 - x1;
	var height = y2 - y1;

	// draw letters at points
	for( var i = 0; i < pointsX.length; i++ )
	{
       		var posX = x1+rX1 + (pointsX[i])*(width/range[1]);
       		var posY = y2+rY1 - (pointsY[i])*(height/range[1]);  
       		letter = new Shape(10,10,posX,posY,this.mGame,"","","");
        
       		if(i == 0)
          		letter.setText('A');
       		if(i == 1)
          		letter.setText('B');
       		if(i == 2)
          		letter.setText('C');

       		item.addQuestionShape(letter);
   	} 

	// draw x label
	var Xaxis = new Shape(5,5,x2+20,y2+25,this.mGame,"","","");
	Xaxis.setText('x');
	item.addQuestionShape(Xaxis);
	Xaxis.setOutOfBoundsCheck(false);
	Xaxis.mMesh.style.fontSize = 14;
	Xaxis.mMesh.style.color = "yellow";

	// draw y label
	var Yaxis = new Shape(1,1,x1+15,y1+20,this.mGame,"","#555599","");
	Yaxis.setText('y');
	item.addQuestionShape(Yaxis);
	Yaxis.setOutOfBoundsCheck(false);
	Yaxis.mMesh.style.fontSize = 14;
	Yaxis.mMesh.style.color = "yellow";

    	// Draw horizontal gridlines
	for (var i = 0; i < this.mPolygon.axis[1].text.items.length; i++)
	{
    		this.hLines[i] = this.mRaphael.path(['M', x1, this.mPolygon.axis[1].text.items[i].attrs.y, 'H', x2]).attr({
        	stroke : '#995555'
    		}).toBack();
	}

	// Draw vertical gridlines
	for (var i = 0; i < this.mPolygon.axis[0].text.items.length; i++) 
	{
    		this.vLines[i] = this.mRaphael.path(['M', this.mPolygon.axis[0].text.items[i].attrs.x, y2, 'V', y1]).attr({
        	stroke : '#995555'
    		}).toBack();
	}

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

                for( var i = 0; i < this.axisItems1.length; i++ ) 
		{
                	this.axisItems1[i].attr("text", i); 
                } 

                for( var i = 0; i < this.axisItems2.length; i++ ) 
		{                         
                	this.axisItems2[i].attr("text", i); 
                } 

                for( var i = 0; i < this.axisItems1.length; i++ ) 
		{
                        this.vLines[i].show();                          
                } 

                for( var i = 0; i < this.axisItems2.length; i++ ) 
		{                         
                	this.hLines[i].show(); 
                } 
      	} 
        else
        {
        	this.mPolygon.hide();                  

                for( var i = 0; i < this.axisItems1.length; i++ ) 
		{
                        this.axisItems1[i].attr("text", ""); 
                } 

                for( var i = 0; i < this.axisItems2.length; i++ ) 
		{                         
                	this.axisItems2[i].attr("text", ""); 
                } 

                for( var i = 0; i < this.axisItems1.length; i++ ) 
		{
                        this.vLines[i].hide();                          
                } 

                for( var i = 0; i < this.axisItems2.length; i++ ) 
		{                         
                        this.hLines[i].hide(); 
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

