var Decimal = new Class(
{

initialize: function(decimal)
{
	this.mDecimal = '' + decimal;
	this.mNumber  = '' + decimal; 
	this.mDecimalPlaces = 0;
	this.mDecimalPlace = 0;
	this.mWithDecimalPoint = 0;
	this.mCharacteristic = 0;
	this.mMantissa = 0;

	this.mDecimalPlace       = this.mDecimal.indexOf("."); //-1 means no decimalplace

	//make the number without decimal place
	if (this.mDecimalPlace != -1)
	{
		var numberArray = this.mNumber.split("."); 
		this.mDecimalPlaces = numberArray[1].length;	
		this.mNumber = '' + numberArray[0] + '' + numberArray[1];
	}
	else
	{
	///	this.mNumber = this.Decimal;
	}
	
	APPLICATION.log('mDecimalPlace:' + this.mDecimalPlace);
	APPLICATION.log('mDecimalPlaces:' + this.mDecimalPlaces);
	APPLICATION.log('mDecimal:' + this.mDecimal);
	APPLICATION.log('mNumber:' + this.mNumber);
},

getString: function()
{
	return this.mDecimal;
/*

	var t = '';
	if (this.mMantissa == 0)
	{
		var t = '' + this.mCharacteristic;
	}		
	else
	{
		var t = '' + this.mCharacteristic + '.' + this.mMantissa;
		t = parseFloat(t);
		t = this.stripTrailingZeroes(t);
	}
	
	return t;	
*/
},

getMoney: function()
{
	return this.mDecimal;
/*
	var t = '';
	if (this.mMantissa == 0)
	{
		var t = '' + this.mCharacteristic;
	}		
	else
	{
		if (this.mantissa % 10 == 0)
		{
			var t = '' + this.mCharacteristic + '.' + this.mMantissa;
			t = parseFloat(t);
			t = this.stripTrailingZeroes(t);
			t = t + '0'; //add back trailing zero tens
		}
		else
		{ 
			var t = '' + this.mCharacteristic + '.' + this.mMantissa;
			t = parseFloat(t);
			t = this.stripTrailingZeroes(t);
		}
	}
	
	return t;	
*/
},

add: function(decimal)
{
	
},

subtract: function(decimal)
{

},
	
multiply: function(decimal)
{
	var rawProduct = parseInt(this.mNumber * decimal.mNumber);
	APPLICATION.log('rawProduct:' + rawProduct);	
	
	//now use powers of 10 to move decimal place
	var decimalPlaces = parseInt(this.mDecimalPlaces + decimal.mDecimalPlaces);
	APPLICATION.log('decimalPlaces sum:' + decimalPlaces);	
	
	if (decimalPlaces > 0)
	{
		var power = Math.pow(10,decimalPlaces);
		var decimalProduct = parseFloat(rawProduct / power);
		APPLICATION.log('decimalProduct:' + decimalProduct);	
		var decimalAnswerProduct = new Decimal(decimalProduct);	
		return decimalAnswerProduct;
	}
	else
	{
		return rawProduct;
	}
/*
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
			answer.mCharacteristic = wholePart;
			answer.mMantissa = decimalPart;
                }
        }
	return answer
*/
},

divide: function(decimal)
{

},

stripTrailingZeroes: function(n)
{
	var noZeroes = n.toString() 
	return noZeroes;
/*
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
                if ( s[parseInt(s.length - i)] == '0')     //delete
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
*/
}


});
