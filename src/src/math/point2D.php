/***************************************
public methods
----------------

//get methods

//set methods
void set(x,y);

****************************************/

var Point2D = new Class(
{
        initialize: function(x,y)
        {
		//coordinates
		this.mX = x;
		this.mY = y;
        },

	set: function(x,y)
	{
        	//set coordinates 
                this.mX = x;
		this.mY = y;	
	}

});


