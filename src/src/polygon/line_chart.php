var LineChart = new Class(
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

var width = x2 - x1;
var height = y2 - y1;

// draw letters at points
for( var i = 0; i < pointsX.length; i++ ) {
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
for (var i = 0; i < this.mPolygon.axis[1].text.items.length; i++) {
    this.hLines[i] = this.mRaphael.path(['M', x1, this.mPolygon.axis[1].text.items[i].attrs.y, 'H', x2]).attr({
        stroke : '#995555'
    }).toBack();
}


// Draw vertical gridlines
for (var i = 0; i < this.mPolygon.axis[0].text.items.length; i++) {
    this.vLines[i] = this.mRaphael.path(['M', this.mPolygon.axis[0].text.items[i].attrs.x, y2, 'V', y1]).attr({
        stroke : '#995555'
    }).toBack();
}

this.mPolygon.mPolygon = this;

if (this.mDrag)
{
 		this.mPolygon.drag(this.move, this.start, this.up);
}

// table coords
var tableWidth = 150;
var tableHeight = 200;
var tableX = 330;
var tableY = 50;
var cols = 3;
var rows = 5;
var colWidth = tableWidth/cols;
var rowHeight = tableHeight/rows; 

// table perimeter
var box = new Rectangle(tableWidth,tableHeight,tableX,tableY,this.mGame,raphael,.5,.5,.5,"#000",.3,false);

box.mPolygon.attr({fill: "#000", "fill-opacity": 0, stroke: "#000", "stroke-width": 2});

item.addQuestionShape(box);

// Draw horizontal table lines
for (var i = 0; i < rows; i++) {

    var y = tableY + (i+1)*tableHeight/rows;
    var line = new LineOne (tableX,y,tableX+tableWidth,y,this.mGame,this.mRaphael,"#000000",.5,false);

    item.addQuestionShape(line);
}


// Draw vertical table lines
for (var i = 0; i < 3; i++) {

    var x = tableX + (i+1)*tableWidth/cols;

    var line = new LineOne (x,tableY,x,tableY+tableHeight,this.mGame,this.mRaphael,"#000000",.5,false);

    item.addQuestionShape(line);
}

// Fill in table
var startX = tableX + colWidth/2;
var startY = tableY + rowHeight/2;
var tweakX = 4;
var tweakY = -10;

var table = [["Point","X","Y"],["A", ''+pointsX[0], ''+pointsY[0]],["B",pointsX[1], pointsY[1]],["C",pointsX[2], pointsY[2]],["D","",""]];

var y = tableY+rY1+(rowHeight/2)+tweakY;
var x = tableX+rX1+(colWidth/2)+tweakX;

for (var i = 0; i < 5; i++) {

  for (var j = 0; j < 3; j++) {

     colHead1 = new Shape(50,25,x+(j*50),y+(i*40),this.mGame,"","","");
     colHead1.setText(table[i][j]);

     item.addQuestionShape(colHead1);
  }
}


},


setVisibility: function(b)
	{
             	if (b)
                {
                        this.mPolygon.show();                        

                        for( var i = 0; i < this.axisItems1.length; i++ ) {
                           this.axisItems1[i].attr("text", i); 
                        } 

                       for( var i = 0; i < this.axisItems2.length; i++ ) {                         
                           this.axisItems2[i].attr("text", i); 
                        } 

                        for( var i = 0; i < this.axisItems1.length; i++ ) {
                           this.vLines[i].show();                          
                        } 

                        for( var i = 0; i < this.axisItems2.length; i++ ) {                         
                           this.hLines[i].show(); 
                        } 
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

                       for( var i = 0; i < this.axisItems1.length; i++ ) {
                           this.vLines[i].hide();                          
                        } 

                        for( var i = 0; i < this.axisItems2.length; i++ ) {                         
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





// used for 2-line chart
var LineChartTwo = new Class(
{
Extends: RaphaelPolygon,
        initialize: function (game,item,raphael,x1,y1,x2,y2,pointsX,pointsY,pointsX2,pointsY2,range,rX1,rY1,s,d)
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
       pointsX2,
      range    // blue line x-values - invisible, used to create x-range of graph
    ],
    [
      pointsY, // red line y-values
       pointsY2,
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
          "#FF0000",        
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

var width = x2 - x1;
var height = y2 - y1;

// draw letters at points for line 1
for( var i = 0; i < pointsX.length; i++ ) {
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


// draw letters at points for line 2
for( var i = 0; i < pointsX2.length; i++ ) {
       var posX = x1+rX1 + (pointsX2[i])*(width/range[1]);
       var posY = y2+rY1 - (pointsY2[i])*(height/range[1]);  

       var letter = new Shape(10,10,posX,posY,this.mGame,"","","");
        
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
for (var i = 0; i < this.mPolygon.axis[1].text.items.length; i++) {
    this.hLines[i] = this.mRaphael.path(['M', x1, this.mPolygon.axis[1].text.items[i].attrs.y, 'H', x2]).attr({
        stroke : '#995555'
    }).toBack();
}


// Draw vertical gridlines
for (var i = 0; i < this.mPolygon.axis[0].text.items.length; i++) {
    this.vLines[i] = this.mRaphael.path(['M', this.mPolygon.axis[0].text.items[i].attrs.x, y2, 'V', y1]).attr({
        stroke : '#995555'
    }).toBack();
}


this.mPolygon.mPolygon = this;

if (this.mDrag)
{
 		this.mPolygon.drag(this.move, this.start, this.up);
}
	



/*
// table coords
var tableWidth = 150;
var tableHeight = 200;
var tableX = 330;
var tableY = 125;
var cols = 3;
var rows = 5;
var colWidth = tableWidth/cols;
var rowHeight = tableHeight/rows; 

// table perimeter
var box = new Rectangle(tableWidth,tableHeight,tableX,tableY,this.mGame,raphael,.5,.5,.5,"#000",.3,false);

box.mPolygon.attr({fill: "#000", "fill-opacity": 0, stroke: "#000", "stroke-width": 2});

item.addQuestionShape(box);

// Draw horizontal table lines
for (var i = 0; i < rows; i++) {

    var y = tableY + (i+1)*tableHeight/rows;
    var line = new LineOne (tableX,y,tableX+tableWidth,y,this.mGame,this.mRaphael,"#000000",.5,false);

    item.addQuestionShape(line);
}


// Draw vertical table lines
for (var i = 0; i < 3; i++) {

    var x = tableX + (i+1)*tableWidth/cols;

    var line = new LineOne (x,tableY,x,tableY+tableHeight,this.mGame,this.mRaphael,"#000000",.5,false);

    item.addQuestionShape(line);
}

// Fill in table
var startX = tableX + colWidth/2;
var startY = tableY + rowHeight/2;
var tweakX = 4;
var tweakY = -10;

var table = [["Point","X","Y"],["A", ''+pointsX[0], ''+pointsY[0]],["B",pointsX[1], pointsY[1]],["C",pointsX[2], pointsY[2]],["D","",""]];

var y = tableY+rY1+(rowHeight/2)+tweakY;
var x = tableX+rX1+(colWidth/2)+tweakX;

for (var i = 0; i < 5; i++) {

  for (var j = 0; j < 3; j++) {

     colHead1 = new Shape(50,25,x+(j*50),y+(i*40),this.mGame,"","","");
     colHead1.setText(table[i][j]);

     item.addQuestionShape(colHead1);
  }
}

*/

},


setVisibility: function(b)
	{
             	if (b)
                {
                        this.mPolygon.show();                        

                        for( var i = 0; i < this.axisItems1.length; i++ ) {
                           this.axisItems1[i].attr("text", i); 
                        } 

                       for( var i = 0; i < this.axisItems2.length; i++ ) {                         
                           this.axisItems2[i].attr("text", i); 
                        } 

                        for( var i = 0; i < this.axisItems1.length; i++ ) {
                           this.vLines[i].show();                          
                        } 

                        for( var i = 0; i < this.axisItems2.length; i++ ) {                         
                           this.hLines[i].show(); 
                        } 
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

                       for( var i = 0; i < this.axisItems1.length; i++ ) {
                           this.vLines[i].hide();                          
                        } 

                        for( var i = 0; i < this.axisItems2.length; i++ ) {                         
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





// used for line plot
var LineChartThree = new Class(
{
Extends: RaphaelPolygon,
        initialize: function (game,item,raphael,x1,y1,x2,y2,pointsX,pointsY,range,rX1,rY1,s,d)
        {

    //find center for mPosition...
		sX = x1 + x2 / 3;
		sY = y1 + y2 / 3;	

		this.parent(0,0,sX,sY,game,raphael,0,0,0,s,0,d);
		
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
       axis: "0 0 1 0",   // draw axes on the left and bottom
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

	var fractionA = new Fraction(1,8,false);	

     	var f = ['0','1/8', '1/4', '3/8', '1/2', '5/8', '3/4', '7/8', '1', '9/8', '10/8'];

     	for( var i = 0; i < this.axisItems1.length; i++ )
	{
        	this.axisItems1[i].attr("text", f[i]); 
        } 
}

});





// no lines, no tables
var LineChartFour = new Class(
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


     for( var i = 0; i < this.axisItems1.length; i++ ) {
                           this.axisItems1[i].attr("text", i); 
                        } 

     this.axisItems2 = this.mPolygon.axis[1].text.items;

     for( var i = 0; i < this.axisItems2.length; i++ ) {                         
                           this.axisItems2[i].attr("text", i); 
                        } 

var width = x2 - x1;
var height = y2 - y1;

// draw letters at points
for( var i = 0; i < pointsX.length; i++ ) {
       var posX = x1+rX1 + (pointsX[i])*(width/range[1]);
       var posY = y2+rY1 - (pointsY[i])*(height/range[1]);  

       letter = new Shape(10,10,posX,posY,this.mGame,"","","");
        
       if(i == 0)
          letter.setText('A');
       if(i == 1)
          letter.setText('B');
       if(i == 2)
          letter.setText('C');
       if(i == 3)
          letter.setText('D');
       if(i == 4)
          letter.setText('E');


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
for (var i = 0; i < this.mPolygon.axis[1].text.items.length; i++) {
    this.hLines[i] = this.mRaphael.path(['M', x1, this.mPolygon.axis[1].text.items[i].attrs.y, 'H', x2]).attr({
        stroke : '#995555'
    }).toBack();
}


// Draw vertical gridlines
for (var i = 0; i < this.mPolygon.axis[0].text.items.length; i++) {
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

                        for( var i = 0; i < this.axisItems1.length; i++ ) {
                           this.axisItems1[i].attr("text", i); 
                        } 

                       for( var i = 0; i < this.axisItems2.length; i++ ) {                         
                           this.axisItems2[i].attr("text", i); 
                        } 

                        for( var i = 0; i < this.axisItems1.length; i++ ) {
                           this.vLines[i].show();                          
                        } 

                        for( var i = 0; i < this.axisItems2.length; i++ ) {                         
                           this.hLines[i].show(); 
                        } 
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

                       for( var i = 0; i < this.axisItems1.length; i++ ) {
                           this.vLines[i].hide();                          
                        } 

                        for( var i = 0; i < this.axisItems2.length; i++ ) {                         
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




// no lines, no tables, must pass in labels
var LineChartFive = new Class(
{
Extends: RaphaelPolygon,
        initialize: function (game,item,raphael,x1,y1,x2,y2,pointsX,pointsY,labels,range,rX1,rY1,s,d)
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


     for( var i = 0; i < this.axisItems1.length; i++ ) {
                           this.axisItems1[i].attr("text", i); 
                        } 

     this.axisItems2 = this.mPolygon.axis[1].text.items;

     for( var i = 0; i < this.axisItems2.length; i++ ) {                         
                           this.axisItems2[i].attr("text", i); 
                        } 

var width = x2 - x1;
var height = y2 - y1;

// draw letters at points
for( var i = 0; i < pointsX.length; i++ ) {
       var posX = x1+rX1 + (pointsX[i])*(width/range[1]);
       var posY = y2+rY1 - (pointsY[i])*(height/range[1]);  

       letter = new Shape(10,10,posX,posY,this.mGame,"","","");
        
       letter.setText(labels[i]);

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
for (var i = 0; i < this.mPolygon.axis[1].text.items.length; i++) {
    this.hLines[i] = this.mRaphael.path(['M', x1, this.mPolygon.axis[1].text.items[i].attrs.y, 'H', x2]).attr({
        stroke : '#995555'
    }).toBack();
}


// Draw vertical gridlines
for (var i = 0; i < this.mPolygon.axis[0].text.items.length; i++) {
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

                        for( var i = 0; i < this.axisItems1.length; i++ ) {
                           this.axisItems1[i].attr("text", i); 
                        } 

                       for( var i = 0; i < this.axisItems2.length; i++ ) {                         
                           this.axisItems2[i].attr("text", i); 
                        } 

                        for( var i = 0; i < this.axisItems1.length; i++ ) {
                           this.vLines[i].show();                          
                        } 

                        for( var i = 0; i < this.axisItems2.length; i++ ) {                         
                           this.hLines[i].show(); 
                        } 
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

                       for( var i = 0; i < this.axisItems1.length; i++ ) {
                           this.vLines[i].hide();                          
                        } 

                        for( var i = 0; i < this.axisItems2.length; i++ ) {                         
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






// make a rect, no tables
var LineChartSix = new Class(
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
       nostroke: false,   // lines between points are drawn
       axis: "0 0 1 1",   // draw axes on the left and bottom
       axisxstep: 10,
       axisystep: 10,
       symbol: 'circle',    // use a filled circle as the point symbol
       smooth: false,      // curve the lines to smooth turns on the chart
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

var width = x2 - x1;
var height = y2 - y1;

// draw letters at points
for( var i = 0; i < pointsX.length; i++ ) {
       var posX = x1+rX1 + (pointsX[i])*(width/range[1]);
       var posY = y2+rY1 - (pointsY[i])*(height/range[1]);  

       letter = new Shape(10,10,posX,posY,this.mGame,"","","");
        
       if(i == 0)
          letter.setText('A');
       if(i == 1)
          letter.setText('B');
       if(i == 2)
          letter.setText('C');
       if(i == 3)
          letter.setText('D');
       if(i == 4)
          letter.setText(' ');


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
for (var i = 0; i < this.mPolygon.axis[1].text.items.length; i++) {
    this.hLines[i] = this.mRaphael.path(['M', x1, this.mPolygon.axis[1].text.items[i].attrs.y, 'H', x2]).attr({
        stroke : '#995555'
    }).toBack();
}


// Draw vertical gridlines
for (var i = 0; i < this.mPolygon.axis[0].text.items.length; i++) {
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

                        for( var i = 0; i < this.axisItems1.length; i++ ) {
                           this.axisItems1[i].attr("text", i); 
                        } 

                       for( var i = 0; i < this.axisItems2.length; i++ ) {                         
                           this.axisItems2[i].attr("text", i); 
                        } 

                        for( var i = 0; i < this.axisItems1.length; i++ ) {
                           this.vLines[i].show();                          
                        } 

                        for( var i = 0; i < this.axisItems2.length; i++ ) {                         
                           this.hLines[i].show(); 
                        } 
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

                       for( var i = 0; i < this.axisItems1.length; i++ ) {
                           this.vLines[i].hide();                          
                        } 

                        for( var i = 0; i < this.axisItems2.length; i++ ) {                         
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

