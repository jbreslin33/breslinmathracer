var Fraction = new Class(
{
        initialize: function(n,d,reduce)
        {
		this.mNumerator   = parseInt(n);
		this.mDenominator = parseInt(d);
		if (this.mNumerator < 0 && this.mDenominator < 0)
		{
			this.mNumerator = this.mNumerator * -1;
			this.mDenominator = this.mDenominator * -1;
		}
		if (this.mNumerator > 0 && this.mDenominator < 0)
		{
			this.mNumerator   = this.mNumerator * -1;
			this.mDenominator = this.mDenominator * -1;
		}

		this.mWholeNumber = 0;
		this.mMixedNumerator = 0;
		this.mGCD = 0;

		if (reduce !== undefined)
		{
			if (reduce == true)
			{
				this.reduce();
			}
			else if (reduce == false)
			{
				//this.reduce();
			} 
		}
		else //just reduce it
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
		}
		else
		{
			return '<sup>' + this.mNumerator + '</sup>&frasl;<sub>' + this.mDenominator + '</sub>';
		}
	},
	
	getOneLineString: function()
	{
		this.reduce();
		if (this.mDenominator == 1)
		{
			return '' + this.mNumerator;	
		}	
		else
		{
			return '' + this.mNumerator + '/' + this.mDenominator;	
		}
	},

        getMixedNumber: function()
        {
                if (this.mDenominator == 1)
                {
                        return this.mNumerator;
                }
                else
                {
			if (this.mDenominator >= this.mNumberator)
			{
                        	return '<sup>' + this.mNumerator + '</sup>&frasl;<sub>' + this.mDenominator + '</sub>';
			}
			else
			{
				this.mWholeNumber = parseInt(this.mNumerator / this.mDenominator); 
				this.mMixedNumerator = parseInt(this.mNumerator % this.mDenominator); 
                        	return '' + this.mWholeNumber + '<sup>' + this.mMixedNumerator + '</sup>&frasl;<sub>' + this.mDenominator + '</sub>';
			}
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
	},

        subtract: function(fraction)
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

                var sn = parseInt(an - bn);

                var fractionSum = new Fraction(sn,cm,true);
                return fractionSum;
        },

        multiply: function(fraction)
        {
                var n = parseInt(this.mNumerator * fraction.mNumerator);
                var d = parseInt(this.mDenominator * fraction.mDenominator);

                var fraction = new Fraction(n,d,true);
                return fraction;
        },
      
	divide: function(fraction)
        {
                var n = parseInt(this.mNumerator * fraction.mDenominator);
                var d = parseInt(this.mDenominator * fraction.mNumerator);

                var fraction = new Fraction(n,d,true);
                return fraction;
        }
});
