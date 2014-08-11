var Fraction = new Class(
{
        initialize: function(n,d)
        {
		this.mNumerator   = parseInt(n);
		this.mDenominator = parseInt(d);

		this.mGCD = 0;
        },

	reduce: function()
	{
  		this.mGCD = this.gcd(this.mNumerator,this.mDenominator);
  
		this.mNumerator   = this.mNumerator   / this.mGCD; 
	 	this.mDenominator = this.mDenominator / this.mGCD;
	},

	gcd: function(numerator,denominator)
	{
		return denominator ? this.gcd(denominator,numerator%denominator) : numerator; 
	}

});


