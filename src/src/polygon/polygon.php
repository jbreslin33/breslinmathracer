var Polygon = new Class(
{
        initialize: function()
        {
               
        },

	/****** LOGGING ******************/
        log: function(msg)
        {
                setTimeout(function()
                {
                        throw new Error(msg);
                }, 0);
        },

	/****** DESTRUCTOR ******************/
	destructor: function()
	{
		
	},

	/****** RESETTING ******************/
	reset: function()
	{
	},

	/****** COLLISION ******************/
	onCollision: function(col)
	{
	},

	checkForOutOfBounds: function()
	{
        },

	/****** MOUNTING ******************/
	createMountPoint: function(slot,x,y)
	{
	},	

	mount: function(mountee,slot)
	{
	},

	mountedBy: function(mounter,slot)
	{
	},

	unMount: function(slot)
	{
	},

	setMountable: function(b)
	{
	},

	/************ UPDATE ****************/
	update: function(delta)
	{
	},
 
	/********* VELOCITY ******************/
	updateVelocity: function(delta)
	{
	},
	
	/********* POSITION ******************/
	updatePosition: function()
	{
	},

	setPosition: function(x,y)
	{
	},
	
	setSize: function(w,h)
	{
	},

	/********* ANIMATION ******************/
	updateAnimation: function()
	{
	},

	/********* IMAGES ******************/
	setSrc: function(src)
	{
	},

	/********* TIMEOUT ******************/
	setTimeoutShape: function(shape)
	{
	},

	getTimeoutShape: function()
	{
	},

	/********* VISIBILITY ******************/
	setVisibility: function(b)
	{
	},		

	getVisibility: function()
	{
	},

	/********* TEXT ******************/
	setText: function(t)
	{
	},

	/********* MESSAGE ******************/
	setMessage: function(message)
	{
	},

	/********* COLOR ******************/
	setBackgroundColor: function(c)
	{
	},

	/*********** RENDER *************/
	render: function()
	{
	}
 }); 
