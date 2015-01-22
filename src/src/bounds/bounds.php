/***************************************
public methods
----------------

//get methods

//set methods
void set(x,y);

****************************************/

var Bounds = new Class(
{
        initialize: function(north,east,south,west)
        {
		//coordinates
		this.mNorth = north;
		this.mEast  = east;
		this.mSouth = south;
		this.mWest  = west;
        },

	set: function(north,east,south,west)
	{
        	//set coordinates 
                this.mNorth = north;
		this.mEast  = east;	
		this.mSouth = south;	
		this.mWest  = west;	
	}
});


