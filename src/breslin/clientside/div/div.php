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
        
                //move it to initial spawn spot
                this.mDiv.style.left = this.mShape.mSpawnPosition.x+'px';
                this.mDiv.style.top  = this.mShape.mSpawnPosition.z+'px';
       
		document.body.appendChild(this.mDiv);
        }
});

