var Shape = new Class(
{

Extends: Polygon,	

        initialize: function(width,height,spawnX,spawnY,game,src,backgroundColor,message)
        {
		this.parent(width,height,spawnX,spawnY,game,message);
               
		//animation 
		this.mAnimation;

		//src 
		this.mSrc = src;
               
		//background
		this.mBackgroundColor = backgroundColor;
                
                //create the movable div that will be used to move image around.        
		this.mDiv = new Div(this);

                this.mMesh;
        
                if (this.mSrc == "INPUT")
                {
                        //textbox to attach to our div "vessel"
                        this.mMesh  = document.createElement("INPUT");
                        this.mMesh.style.width = this.mWidth+'px'; 
                        this.mMesh.style.height = this.mHeight+'px'; 
                }
                else if (this.mSrc == "BUTTON")
                {
                        //button to attach to our div "vessel"
                        this.mMesh  = document.createElement("BUTTON");
                        this.mMesh.style.width = this.mWidth+'px'; 
                        this.mMesh.style.height = this.mHeight+'px'; 
                }

                else if (this.mSrc)
                {
                        //image to attach to our div "vessel"
                        this.mMesh  = document.createElement("IMG");
                        this.mMesh.src  = this.mSrc;
                        this.mMesh.style.width = this.mWidth+'px'; 
                        this.mMesh.style.height = this.mHeight+'px'; 
                }
                
		if (this.mSrc == "")//create paragraph
                {
                	this.mMesh = document.createElement("p");
                }
		
                //back to div   
                this.mDiv.mDiv.appendChild(this.mMesh);
        },

       	/****** DESTRUCTOR ******************/
        destructor: function()
        {
 		this.mDiv.mDiv.removeChild(this.mMesh);
                document.body.removeChild(this.mDiv.mDiv);
        },

	/********* ANIMATION ******************/
	updateAnimation: function()
	{
		if (this.mAnimation)
		{	
			this.mAnimation.update();        	
		}
	},

	/********* IMAGES ******************/
	setSrc: function(src)
	{
                //create clientImage
                if (this.mSrc)
                {
                        //image to attach to our div "vessel"
			this.mSrc = src;
                        this.mMesh.src  = src;
                        this.mMesh.style.width = this.mWidth+'px'; 
                        this.mMesh.style.height = this.mHeight+'px'; 
                }
		else
		{
                        //image to attach to our div "vessel"
			this.mSrc = src;
                        this.mMesh  = document.createElement("IMG");
                        this.mMesh.src  = src;
                        this.mMesh.style.width = this.mWidth+'px'; 
                        this.mMesh.style.height = this.mHeight+'px'; 

		}
	},

      	/********* VISIBILITY ******************/
        setVisibility: function(b)
        {
                if (b)
                {
                        if (this.mDiv.mDiv.style.visibility != 'visible')
                        {
                                this.mDiv.mDiv.style.visibility = 'visible';
                        }
                }
                else
                {
                        if (this.mDiv.mDiv.style.visibility != 'hidden')
                        {
                                this.mDiv.mDiv.style.visibility = 'hidden';
                        }
                }

                //how about your mounted shapes
                if (this.mMounteeArray[0])
                {
                        this.mMounteeArray[0].setVisibility(b);
                }
        },

        getVisibility: function()
        {
                if (this.mDiv.mDiv.style.visibility == 'visible')
                {
                        return true;
                }
                else
                {
                        return false;
                }
        },

	/********* TEXT ******************/
	setText: function(t)
	{
		if (this.mMesh.innerHTML != t)
		{
			if (this.mSrc == "")
			{
				this.mMesh.innerHTML = t;
			}
		}
	},

	/********* COLOR ******************/
	setBackgroundColor: function(c)
	{
		this.mBackgroundColor = c;
		this.mDiv.mDiv.style.backgroundColor = c;
	},

	/*********** RENDER *************/
	render: function()
	{
        	//center image relative to position set it to mPositionRender
               	this.mPositionRender.mX = this.mPosition.mX - (this.mWidth / 2);
               	this.mPositionRender.mY = this.mPosition.mY - (this.mHeight / 2);

		//check for new values if so change render of div	
		if (this.mPositionRenderOld.mX != this.mPositionRender.mX)
		{
			modx = this.mPositionRender.mX+'px';	
			this.mDiv.mDiv.style.left = modx;
		}	
		if (this.mPositionRenderOld.mY != this.mPositionRender.mY)
		{
			mody = this.mPositionRender.mY+'px';	
			this.mDiv.mDiv.style.top = mody;
		}
	}
 }); 
