var MultipleChoicePadImages = new Class(
{

Extends: MultipleChoicePad,

	initialize: function(application)
	{
       		this.parent(application);

		//answers 
                this.mThresholdTime = 60000;
	},

	createInput: function()
	{
 		this.createNumQuestion();

                //BUTTONS
                this.mButtonA = new Shape(150,50,375,100,this,"/images/symbols/equal.png","","");
                this.mButtonA.mCollidable  = false;
                this.mButtonA.mCollisionOn = false;
                this.mButtonA.mMesh.innerHTML = 'A';
                this.mButtonA.mMesh.addEvent('click',this.numPadHit);
                this.mShapeArray.push(this.mButtonA);
                        
		this.mButtonB = new Shape(150,50,375,150,this,"BUTTON","/images/symbols/greater_than.png","");
                this.mButtonB.mCollidable  = false;
                this.mButtonB.mCollisionOn = false;
                this.mButtonB.mMesh.innerHTML = 'B';
                this.mButtonB.mMesh.addEvent('click',this.numPadHit);
                this.mShapeArray.push(this.mButtonB);
                      
		this.mButtonC = new Shape(150,50,375,200,this,"BUTTON","/images/symbols/less_than.png","");
                this.mButtonC.mCollidable  = false;
                this.mButtonC.mCollisionOn = false;
                this.mButtonC.mMesh.innerHTML = 'C';
                this.mButtonC.mMesh.addEvent('click',this.numPadHit);
                this.mShapeArray.push(this.mButtonC);
               
 		this.mTotalInputBars = this.mShapeArray.length - this.mTotalGuiBars;
	}
});
