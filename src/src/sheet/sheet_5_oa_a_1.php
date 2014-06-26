/*
 A Sheet should contain items(questions) it should facilitate randomizing, ordering items. it should deal with advancing levels....and other application related things.   
*/
var Sheet_5_oa_a_1 = new Class(
{
Extends: Sheet,
        initialize: function(game)
        {
		this.parent(game);
 	
		this.mItem1 = 0;		
		this.mItem2 = 0;		
		this.mItem3 = 0;		
		this.mItem4 = 0;		
		this.mItem5 = 0;		
	
		this.createItems(); 
        },
	
	createItems: function()
	{
		this.mItem1 = new TextItem(this,'What is the answer of life, the universe and everything?','42');     
                this.addItem(this.mItem1);

                this.mItem2 = new TextItem(this,'What is your favorite color?','green');
                this.addItem(this.mItem2);

                this.mItem3 = new TextItem(this,'What is your best dance move?','backspin');
                this.addItem(this.mItem3);

                this.mItem4 = new TextItem(this,'What is your favorite team?','eagles');
                this.addItem(this.mItem4);

                this.mItem5 = new TextItem(this,'Who sucks?','dallas');
                this.addItem(this.mItem5);
	},

	createWorld: function()
	{

	},

	destructor: function()
	{
		this.resetItemArray();		
		this.resetItemPoolArray();		
		this.resetAnswerPool();		
		this.destroyWorld();
	},	

	destroyWorld: function()
	{

	},

	resetItemArray: function()
	{
		//destroy questions
		for (i = 0; i < this.mItemArray.length; i++)
		{
			this.mItemArray[i] = 0;
		}

		//destroy question array
		this.mItemArray = 0;
		this.mItemArray = new Array();
	},

	resetItemPoolArray: function()
	{
		//destroy question pool
		for (i = 0; i < this.mItemPoolArray.length; i++)
		{
			this.mItemPoolArray[i] = 0;
		}
		//destroy question pool array
		this.mItemPoolArray = 0;
		this.mItemPoolArray = new Array();
	},
	
	resetAnswerPool: function()
	{
		//destroy answer pool
                for (i = 0; i < this.mAnswerPool.length; i++)
                {
                        this.mAnswerPool[i] = 0;
                }
                //destroy answer pool array
                this.mAnswerPool = 0;
                this.mAnswerPool = new Array();
	},
	
	reset: function()
	{
		this.log('resetting sheet');
		this.destructor();
		
		//reset marker
		this.mMarker = 0;
	
		this.createItems();
	},

	addItem: function(item)
	{
		this.mItemArray.push(item);
		if (this.mItemArray.length == 1)
		{
			this.mItem = this.mItemArray[0];
		}		
	}, 
	
	//returns question object	
	getItem: function()
	{
		return this.mItemArray[this.mMarker];
	},

	//returns question object	
	getSpecificItem: function(i)
	{
		return this.mItemArray[i];
	},
	
	correctAnswer: function()
	{

        	this.mGame.incrementScore();
		this.mMarker++;

		//set marker item to THE ITEM	
		this.mItem = this.getItem();

		//this.mGame.mHud.mItem.setText('<font size="2"> Item: ' + this.mItemArray[this.mMarker].getItem() + '</font>');
	},
	
	isSheetComplete: function()
	{
		if (this.mGame.getScore() >= this.mScoreNeeded)
		{
			return true;
		}
		else
		{
			return false;
		}
	},

	randomize: function(degree)
	{
		size = this.mItemArray.length - 1;
	
		for (i=0; i < degree; i++)
		{
			swapElementNumberA = Math.floor((Math.random()*size));
			swapElementNumberB = Math.floor((Math.random()*size));

			tempItemA = this.mItemArray[swapElementNumberA];	
			tempItemB = this.mItemArray[swapElementNumberB];	
			
			this.mItemArray[swapElementNumberA] = tempItemB;
			this.mItemArray[swapElementNumberB] = tempItemA;
		}

		// when done swap the mTypeWrong to first spot. 
		if (this.mGame.mTypeWrong != '')
		{
			for (i = 0; i < size; i++)
			{
				if (this.mItemArray[i].getType() == this.mGame.mTypeWrong)
				{
					wrongItem = this.mItemArray[i]; 
					questionInFirstSlot = this.mItemArray[0]; 
					this.mItemArray[0] = wrongItem;
					this.mItemArray[i] = questionInFirstSlot; 
				}
			}
		}		
	},

	//states
	
	resetSheetEnter: function()
	{

	}
});
