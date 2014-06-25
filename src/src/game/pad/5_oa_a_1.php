var g5_oa_a_1 = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);
	
		this.mSheet = new Sheet(this);	
		
		this.mItem1 = new Item('What is the answer of life, the universe and everything?','42');	
	},

	update: function()
	{
		this.parent();
		this.mSheet.update();
	},
        
	createWorld: function()
	{
		this.parent();
		this.mControlObject = new Shape(50,50,150,375,this,"/images/bus/kid.png","","");
		this.mShapeArray.push(this.mControlObject);
	}
});
