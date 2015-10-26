var Table2 = new Class(
{
Extends: RaphaelPolygon,
        initialize: function (game,item,raphael,x1,y1,x2,y2,table,rX1,rY1,tableData,s,d)
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

var cols = table[0].length;
var rows = table.length;


// table coords
/*
var tableWidth = 150;
var tableHeight = 200;
var tableX = 330;
var tableY = 125;
var cols = 3;
var rows = 5;
var colWidth = tableWidth/cols;
var rowHeight = tableHeight/(rows+4); 
*/

var tableWidth = x2-x1;
var tableHeight = y2-y1;
var tableX = x1;
var tableY = y1;
var colWidth = tableWidth/cols;
var rowHeight = tableHeight/(rows+1); 

// table perimeter

var box = new Rectangle(tableWidth,tableHeight,tableX,tableY,this.mGame,raphael,.5,.5,.5,"#000",.3,false);

/*
var box = new Rectangle(x2,y2,x1,y1,this.mGame,raphael,.5,.5,.5,"#000",.3,false);
*/

this.mPolygon = box;

box.mPolygon.attr({fill: "#000", "fill-opacity": 0, stroke: "#000", "stroke-width": 2});

item.addQuestionShape(box);

// Draw horizontal table lines
for (var i = 0; i < rows; i++) {

    if (i == 0)
       y = tableY + (i+1)*rowHeight*2; // headings are bigger
    else
       y = tableY + (i+2)*rowHeight;
       
    var line = new LineOne (tableX,y,tableX+tableWidth,y,this.mGame,this.mRaphael,"#000000",.5,false);

    item.addQuestionShape(line);
}


// Draw vertical table lines
for (var i = 0; i < cols; i++) {

    var x = tableX + (i+1)*tableWidth/cols;

    var line = new LineOne (x,tableY,x,tableY+tableHeight,this.mGame,this.mRaphael,"#000000",.5,false);

    item.addQuestionShape(line);
}

// Fill in table
var startX = tableX + colWidth/2;
var startY = tableY + rowHeight/2;
var tweakX = 4;
var tweakY = -10;
var sizeX = 50;
var sizeY = 25;
var posX = 50;
var posY = 25;
var data = 0;

var y = tableY+rY1+(rowHeight/2)+tweakY;
var x = tableX+rX1+(colWidth/2)+tweakX;

for (var i = 0; i < rows; i++) {

  for (var j = 0; j < cols; j++) {

     if (i == 0 && j == 0)
     { 
        posX = x+(j*colWidth);
        posY = y+((i+1)*rowHeight)-20;
     }
     else
     { 
        posX = x+(j*colWidth);
        posY = y+((i+1)*rowHeight);
     }

     if (i == 0 && j != 0)
     { 
        //sizeX = parseInt(colWidth);
       // sizeY = parseInt(rowHeight*2);
        //sizeY = parseInt(rowHeight);

        sizeX = 130;
        sizeY = 30;

        posX = x+(j*colWidth);
        posY = y+((i+1)*rowHeight) - 20;
        
     }
     else
     { 
        sizeX = 130;
        sizeY = 30;
     }

     data = new Shape(sizeX,sizeY,posX,posY,this.mGame,"","","");
     data.setText(table[i][j]);

     item.addQuestionShape(data);
  }
}


},


setVisibility: function(b)
	{
             
                       // this.mPolygon.show();                        

                     
                       // this.mPolygon.hide();                 
                     
	},


destructor: function()
{
		//this.mPolygon.remove();
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









var Table = new Class(
{
Extends: RaphaelPolygon,
        initialize: function (game,item,raphael,x1,y1,x2,y2,table,rX1,rY1,tableData,s,d)
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

var cols = table[0].length;
var rows = table.length;


// table coords
/*
var tableWidth = 150;
var tableHeight = 200;
var tableX = 330;
var tableY = 125;
var cols = 3;
var rows = 5;
var colWidth = tableWidth/cols;
var rowHeight = tableHeight/(rows+4); 
*/

var tableWidth = x2;
var tableHeight = y2;
var tableX = x1;
var tableY = y1;
var colWidth = tableWidth/cols;
var rowHeight = tableHeight/(rows+1); 

// table perimeter

var box = new Rectangle(tableWidth,tableHeight,tableX,tableY,this.mGame,raphael,.5,.5,.5,"#000",.3,false);

/*
var box = new Rectangle(x2,y2,x1,y1,this.mGame,raphael,.5,.5,.5,"#000",.3,false);
*/

this.mPolygon = box;

box.mPolygon.attr({fill: "#000", "fill-opacity": 0, stroke: "#000", "stroke-width": 2});

item.addQuestionShape(box);

// Draw horizontal table lines
for (var i = 0; i < rows; i++) {

    if (i == 0)
       y = tableY + (i+1)*rowHeight*2; // headings are bigger
    else
       y = tableY + (i+2)*rowHeight;
       
    var line = new LineOne (tableX,y,tableX+tableWidth,y,this.mGame,this.mRaphael,"#000000",.5,false);

    item.addQuestionShape(line);
}


// Draw vertical table lines
for (var i = 0; i < cols; i++) {

    var x = tableX + (i+1)*tableWidth/cols;

    var line = new LineOne (x,tableY,x,tableY+tableHeight,this.mGame,this.mRaphael,"#000000",.5,false);

    item.addQuestionShape(line);
}

// Fill in table
var startX = tableX + colWidth/2;
var startY = tableY + rowHeight/2;
var tweakX = 4;
var tweakY = -10;
var sizeX = 50;
var sizeY = 25;
var posX = 50;
var posY = 25;
var data = 0;

var y = tableY+rY1+(rowHeight/2)+tweakY;
var x = tableX+rX1+(colWidth/2)+tweakX;

for (var i = 0; i < rows; i++) {

  for (var j = 0; j < cols; j++) {

     if (i == 0 && j == 0)
     { 
        posX = x+(j*colWidth);
        posY = y+((i+1)*rowHeight)-20;
     }
     else
     { 
        posX = x+(j*colWidth);
        posY = y+((i+1)*rowHeight);
     }

     if (i == 0 && j != 0)
     { 
        //sizeX = parseInt(colWidth);
       // sizeY = parseInt(rowHeight*2);
        //sizeY = parseInt(rowHeight);

        sizeX = 50;
        sizeY = 25;

        posX = x+(j*colWidth);
        posY = y+((i+1)*rowHeight) - 20;
        
     }
     else
     { 
        sizeX = 50;
        sizeY = 25;
     }

     data = new Shape(sizeX,sizeY,posX,posY,this.mGame,"","","");
     data.setText(table[i][j]);

     item.addQuestionShape(data);
  }
}


},


setVisibility: function(b)
	{
             
                       // this.mPolygon.show();                        

                     
                       // this.mPolygon.hide();                 
                     
	},


destructor: function()
{
		//this.mPolygon.remove();
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
