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

	getLeastCommonMultiple: function(o)
	{
    		for(var i, j, n, d, r = 1; (n = o.pop()) != undefined;)
		{
        		while(n > 1)
			{
            			if(n % 2)
				{
                			for (i = 3, j = Math.floor(Math.sqrt(n)); i <= j && n % i; i += 2);
					{
                				d = i <= j ? i : n;
            				}
				}
            			else
				{
                			d = 2;
            				for(n /= d, r *= d, i = o.length; i; !(o[--i] % d) && (o[i] /= d) == 1 && o.splice(i, 1));
				}
			}
		}
    		return r;
        },

	add: function(fraction)
	{
		denominatorArray = new Array();
		denominatorArray.push(2);				
		denominatorArray.push(4);				
	
		var lcm = this.getLeastCommonMultiple(denominatorArray);	
		APPLICATION.log('lcm:' + lcm);
	}
});
