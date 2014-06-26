var g5_oa_a_1 = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);
	
		this.mSheet = new Sheet(this);	
		
		this.mItem1 = new TextItem('What is the answer of life, the universe and everything?','42');	
		this.mSheet.mItemArray.push(this.mItem1);
		
		this.mItem2 = new TextItem('What is your favorite color?','green');	
		this.mSheet.mItemArray.push(this.mItem2);
		
		this.mItem3 = new TextItem('What is your best dance move?','backspin');	
		this.mSheet.mItemArray.push(this.mItem3);
		
		this.mItem4 = new TextItem('What is your favorite team?','eagles');	
		this.mSheet.mItemArray.push(this.mItem4);
			
		this.mItem5 = new TextItem('Who sucks?','dallas');	
		this.mSheet.mItemArray.push(this.mItem5);


		this.mItem1.mStatus = 1;
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
