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
	},

	getCommonMultiple: function(array)
	{
		if (array.length == 2)
		{
			var cm = parseInt(array[0] * array[1]);	 	
			return cm;
		}
	},

	add: function(fraction)
	{
		denominatorArray = new Array();
		denominatorArray.push(parseInt(this.mDenominator));				
		denominatorArray.push(parseInt(fraction.mDenominator));				

		var cm = this.getCommonMultiple(denominatorArray);	

		var am = parseInt(cm / this.mDenominator); 	
		var bm = parseInt(cm / fraction.mDenominator); 	
		
		var an = parseInt(am * this.mNumerator);
		var bn = parseInt(bm * fraction.mNumerator);
	
		var ad = cm; 	
		var bd = cm; 	

		var sn = parseInt(an + bn);

		var fractionSum = new Fraction(sn,cm,true);  	
		return fractionSum;
	}
});
