
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.b.4_1',4.2701,'4.md.b.4','');
*/

var i_4_md_b_4__1 = new Class(
{
Extends: TextItemMixedNumber,

initialize: function(sheet)
{
	this.parent(sheet,320,100,200,95,100,50,510,137,100,50,625,100, 100,50,625,175,true);
        this.mType = '4.md.b.4_1';
      	this.ns = new NameSampler();

	// graph coords
	var startX = 10;
	var endX = 310;
	var startY = 10;
	var endY = 310;
	var width = endX - startX;
	var height = endY - startY;
	var range = [0,10];

	var rX1 = 10;
	var rY1 = 50;
	var rX2 = 330;
	var rY2 = 350;

	this.raphael = Raphael(rX1, rY1, rX2, rY2);

	this.raphaelSizeX = rX2;
	this.raphaelSizeY = rY2;

	var pointsX = [];
	var pointsY = [];
	var r = 0;
	var sum = 71;
	
	while (sum > 30 || sum == 23 || sum == 15 || sum == 7)
	{
  		//keep track of how many dots at each x
  		var plotX = [0,0,0,0,0,0,0,0,0,0,0];

  		//pick random points to make plot
  		for (var i = 0; i < 7; i++)
 		{
    			r = (Math.floor(Math.random()*7) + 1);
    			pointsX[i] = r;
    			pointsY[i] = plotX[r] + 1;
    			plotX[r] = pointsY[i];
  		}
  
  		sum = 0;

  		for (var j = 0; j < 7; j++)
 		{
    			sum = sum + pointsX[j];
  		}
	}

	var b = 99;
  	for (var p = 0; p < 7; p++)
 	{
		if (pointsX[p] < b)
		{
			b = pointsX[p];
		}
  	}

        var t = 0;
        for (var q = 0; q < 7; q++)
        {
                if (pointsX[q] > t)
                {
                        t = pointsX[q];
                }
        }

	var fractionA = new Fraction(b,8);
	var fractionB = new Fraction(t,8);
	var answer = fractionB.subtract(fractionA);

  	this.setAnswer('' + answer.getString(),0);

 	this.setQuestion('' + this.ns.mNameOne + ' measured the width of each of the books in ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' room to see if they would all fit in ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' new book case. The measurements were recorded below. What is the differenece between the width of the largest book and the width of the smallest book?');

	//create line plot
	var chart = new LineChartThree (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,pointsX,pointsY,range,rX1,rY1,"#000000",false);

	this.addQuestionShape(chart);

	this.mQuestionLabel.setSize(300,100);
	this.mQuestionLabel.setPosition(180,80);
}
});
