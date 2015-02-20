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

getMoney: function()
{
	var f = '';
	if (this.mMantissa < 10)
	{
		var t = '' + this.mCharacteristic + '.0' + this.mMantissa;
		f = parseFloat(t);
	}
	else
	{
		var t = '' + this.mCharacteristic + '.' + this.mMantissa;
		f = parseFloat(t);
	}
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
        this.mUtility = new Utility();

	var a = '' + this.mCharacteristic + '' + this.mMantissa; 
	var b = '' + decimal.mCharacteristic + '' + decimal.mMantissa; 

        factorA = parseInt(a);
        factorB = parseInt(b);

	var da = '' + this.mMantissa;
	var db = '' + decimal.mMantissa;

	var daLength = da.length;
	var dbLength = db.length;

	var decimalPlaces = parseInt(daLength + dbLength);
		
        var answer = new Decimal(1,1,1);
        var wholeNumberAnswer =  parseInt(factorA * factorB);
       
	//process 
	var s = '' + wholeNumberAnswer;
        if (s.length <= decimalPlaces) // we have just a decimal
        {
                //lets add buffer zeros depending on size compared to decimal places needed
                var numberOfBufferZeroes = parseInt(decimalPlaces - s.length);
                var bufferZeroes = '';
                for (i = 0; i < numberOfBufferZeroes; i++)
                {
                        bufferZeroes = '' + bufferZeroes + '0';
                }
                var decimalPart = '' + bufferZeroes + wholeNumberAnswer;
                decimalPart = this.mUtility.stripTrailingZeroes(decimalPart);

		answer.mCharacteristic = '0';
		answer.mMantissa = decimalPart;
        }
        else //lets split it
        {
                var wholePart   = s.substring(0,parseInt(s.length - decimalPlaces));
                var decimalPart = s.substring(parseInt(wholePart.length),parseInt(s.length));

                var decimalPartInt = parseInt(decimalPart);
                if (decimalPartInt == 0)
                {
			answer.mCharacteristic = wholePart;
			answer.mMantissa = 0;
                }
                else
                {
                        decimalPart = this.mUtility.stripTrailingZeroes(decimalPart);
			answer.mCharacteristic = wholePart;
			answer.mMantissa = decimalPart;
                }
        }
	return answer
},

divide: function(decimal)
{

},

stripTrailingZeroes: function(s)
{
       	if (parseInt(s) == 0)
       	{
               	return s;
	}

        s = '' + s;
        var i = 0;
        var originalLength = s.length;
        var encounteredNonZero = false;
        var strippedPart = '';
        while (encounteredNonZero == false)
        {
                if ( s[parseInt(s.length - i)] == 0)     //delete
                {
                        s = s.substring(0, s.length - 1);
                }
                else
                {
                        encounteredNonZero = true;
                }
                i++;
        }
        return s;
}


});
