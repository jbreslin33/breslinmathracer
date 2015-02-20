var Decimal = new Class(
{
        initialize: function(c,m,stripZeroes)
        {
		this.mCharacteristic = parseInt(c);
		this.mMantissa = parseInt(m);
        },

	getString: function()
	{
		var t = '' + this.mCharacteristic + '.' + this.mMantissa;
		var f = parseFloat(t);
		return f;	
	},

	add: function(decimal)
	{
	
	},

	subtract: function(decimal)
	{
	
	},
	
	multiply: function(decimal)
	{
	
	},

	divide: function(decimal)
	{
	
	}

});
