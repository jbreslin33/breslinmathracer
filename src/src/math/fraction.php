var Fraction = new Class(
{
        initialize: function(n,d,reduce)
        {
		this.mNumerator   = parseInt(n);
		this.mDenominator = parseInt(d);

		this.mGCD = 0;

		if (reduce)
		{
			this.reduce();
		}
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
	},

	getString: function()
	{
		if (this.mDenominator == 1)
		{
			return this.mNumerator; 
			//return '<sup>' + this.mNumerator + '</sup>&frasl;<sub>' + this.mDenominator + '</sub>';
		}
		else
		{
			return '<sup>' + this.mNumerator + '</sup>&frasl;<sub>' + this.mDenominator + '</sub>';
			//return this.mNumerator + '/' + this.mDenominator
		}
	}
});
