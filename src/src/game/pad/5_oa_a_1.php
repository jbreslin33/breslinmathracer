var g5_oa_a_1 = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);
	
		this.mSheet = new Sheet(this);	
		
		this.mItem1 = new TextItem(this.mSheet,'What is the answer of life, the universe and everything?','42');	
		this.mSheet.addItem(this.mItem1);
		
		this.mItem2 = new TextItem(this.mSheet,'What is your favorite color?','green');	
		this.mSheet.addItem(this.mItem2);
		
		this.mItem3 = new TextItem(this.mSheet,'What is your best dance move?','backspin');	
		this.mSheet.addItem(this.mItem3);
		
		this.mItem4 = new TextItem(this.mSheet,'What is your favorite team?','eagles');	
		this.mSheet.addItem(this.mItem4);
			
		this.mItem5 = new TextItem(this.mSheet,'Who sucks?','dallas');	
		this.mSheet.addItem(this.mItem5);
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
