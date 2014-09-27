var Div = new Class(
{
        initialize: function (shape)
        {
                
                //shape
                this.mShape = shape;      
		
                //create the movable div that will be used to move image around.        
                this.mDiv = document.createElement('div');
                this.mDiv.setAttribute("class","vessel");
                this.mDiv.style.position="absolute";
                this.mDiv.style.visibility = 'visible';
        
                this.mDiv.style.width = this.mShape.mWidth;
                this.mDiv.style.height = this.mShape.mHeight;
        
                //move it to initial spawn spot
                this.mDiv.style.left = this.mShape.mPosition.mX+'px';
                this.mDiv.style.top  = this.mShape.mPosition.mY+'px';
                
		document.body.appendChild(this.mDiv);
        
                this.mDiv.style.backgroundColor = this.mShape.mBackgroundColor;
        }
});

