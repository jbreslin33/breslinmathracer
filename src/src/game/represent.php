var Represent = new Class(
{

Extends: Dungeon,

	initialize: function()
	{
       		this.parent();

		//create monsters to count
		this.createMonstersToCount();
	},

	createMonstersToCount: function()
	{
        	//RED MONSTERS TO COUNT
        	monsters = 20;
        	tempArray = new Array();
        	for (i = 0; i < monsters; i++)
        	{
                	var openPoint = this.getOpenPoint2D(40,735,75,375,50,7);
                	var shape = new ShapeCountee(50,50,openPoint.mX,openPoint.mY,this,"/images/monster/red_monster.png","","countee",i + 1);
                	this.addToShapeArray(shape);
                	tempArray.push(shape);
        	}

        	//now that you have done getOpenPoint2D which uses mCollidable set these countees to not collidable
        	for (i = 0; i < monsters; i++)
        	{
                	tempArray[i].mCollidable = false;
                	tempArray[i].mCollisionOn = false;
        	}
	},

	createChasers: function()
	{

	}
});

