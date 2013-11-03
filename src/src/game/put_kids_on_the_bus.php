var PutKidsOnTheBus = new Class(
{

Extends: Game,
        initialize: function(skill,kidsToPutOnBus)
        {
                this.parent(skill)
		this.mKidsOnBus = 0;
		this.mKidsToPutOnBus = kidsToPutOnBus;
        },
	
        update: function(delta)
        {
//		mApplication.log('b:' + this.mKidsToPutOnBus + 'b:' + this.mKidsOnBus);
		this.parent(delta);
       		if (this.mOn)
		{
			//do someting
			var kidsOnBus = 0;
			for (i = 0; i < this.mShapeArray.length; i++)
			{
				if (this.mShapeArray[i].mMessage == 'bus_seat')
				{
					if (this.mShapeArray[i].mMounteeArray[0])
					{ 	
						if (this.mShapeArray[i].mMounteeArray[0].mMessage == 'kid')
						{
							kidsOnBus++;	
						}	
					}
				}				
			}
			this.mKidsOnBus = kidsOnBus;
		}
	}

});


