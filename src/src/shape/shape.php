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

                else if (this.mSrc == "DIV")
                {
                        //button to attach to our div "vessel"
                        this.mMesh  = document.createElement("DIV");
                        this.mMesh.style.width = this.mWidth+'px';
                        this.mMesh.style.height = this.mHeight+'px';
                }


                else if (this.mSrc == "SELECT")
                {
                        //button to attach to our div "vessel"
                        this.mMesh  = document.createElement("SELECT");
                        this.mMesh.style.width = this.mWidth+'px'; 
                        this.mMesh.style.height = this.mHeight+'px'; 
                }
                else if (this.mSrc == "TABLE")
                {
                        //table to attach to our div "vessel"
                        this.mMesh  = document.createElement("TABLE");
                        this.mMesh.style.width = this.mWidth+'px'; 
                        this.mMesh.style.height = this.mHeight+'px'; 
/*
			this.mTR = document.createElement("TR");
			this.mMesh.appendChild(this.mTR);
			
			this.mTD = document.createElement("TD");
			this.mTextNode = document.createTextNode("Hello");
			this.mTD.appendChild(this.mTextNode);

			this.mTR.appendChild(this.mTD);
*/
                }

		else if (this.mSrc == "AUDIO")
                {
                        //audio object to attach to our div "vessel"
                        this.mMesh  = document.createElement("AUDIO");
                        this.mMesh.style.width = this.mWidth+'px';
                        this.mMesh.style.height = this.mHeight+'px';
              		if (navigator.appName == "Microsoft Internet Explorer")  
			{
                        	this.mMesh  = document.createElement("a");
				//this.mMesh.setAttribute('href', 'http://juixe.com');
				//this.mMesh.innerHTML = "Hello, Juixe!";
				//this.mMesh.setAttribute('href', 'http://juixe.com');
				//this.mMesh.innerHTML = "Hello, Juixe!";
			}
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
		if (this.mDiv)
		{
			if (this.mDiv.mDiv)
			{
 				this.mDiv.mDiv.removeChild(this.mMesh);
			}
		}
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

      	/********* SIZE ******************/
	setSize: function(w,h)
        {
                //size
                this.mWidth = w;
                this.mHeight = h;
                this.mMesh.style.width = this.mWidth+'px';
                this.mMesh.style.height = this.mHeight+'px';
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
 
	getText: function()
        {
                return this.mMesh.innerHTML;
        },

	setFontSize: function(s)
	{
		this.mMesh.style.fontSize=s;	
	},

	/********* COLOR ******************/
	setBackGroundColor: function(c)
	{
		this.mBackgroundColor = c;
		this.mMesh.style.backgroundColor = c;
	},

	/*********** RENDER *************/
	render: function()
	{
        	//center image relative to position set it to mPositionRender
               	this.mPositionRender.mX = this.mPosition.mX - (this.mWidth / 2);
               	this.mPositionRender.mY = this.mPosition.mY - (this.mHeight / 2);

		//check for new values if so change render of div	
		modx = this.mPositionRender.mX+'px';	
		this.mDiv.mDiv.style.left = modx;
			
		mody = this.mPositionRender.mY+'px';	
		this.mDiv.mDiv.style.top = mody;
	}
 }); 
