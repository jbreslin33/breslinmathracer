var ButtonChoicePad  = new Class(
{

Extends: InputPad,

	initialize: function(application)
	{
		this.parent(application);
	},

	createInputPad: function()
	{
		//BUTTONS	
		if (!this.mButtonA)
                {
                        this.mButtonA = new Shape(150,50,300,100,this.mGame,"BUTTON","","");
                        this.mButtonA.mMesh.innerHTML = 'is equal to';
                        this.mButtonA.mMesh.addEvent('click',this.numPadHit);
                        this.mInputPadArray.push(this.mButtonA);
                }
                if (!this.mButtonB)
                {
                        this.mButtonB = new Shape(150,50,300,200,this.mGame,"BUTTON","","");
                        this.mButtonB.mMesh.innerHTML = 'is greater than';
                        this.mButtonB.mMesh.addEvent('click',this.numPadHit);
                        this.mInputPadArray.push(this.mButtonB);
                }
                if (!this.mButtonC)
                {
                        this.mButtonC = new Shape(150,50,300,300,this.mGame,"BUTTON","","");
                        this.mButtonC.mMesh.innerHTML = 'is less than';
                        this.mButtonC.mMesh.addEvent('click',this.numPadHit);
                        this.mInputPadArray.push(this.mButtonC);
                }
	},

	show: function()
	{
 		//shapes and array
                for (i = 0; i < this.mInputPadArray.length; i++)
                {
                        this.mInputPadArray[i].setVisibility(true);
                }
	},

        numPadHit: function()
        {
                APPLICATION.mGame.mUserAnswer = this.innerHTML;
        }
});
