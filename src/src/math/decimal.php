var Decimal = new Class(
{

initialize: function(c,m,stripZeroes)
{
	this.mCharacteristic = parseInt(c);
	this.mMantissa = parseInt(m);
},

getString: function()
{
	var t = '';
	if (this.mMantissa == 0)
	{
		var t = '' + this.mCharacteristic;
	}		
	else
	{
		var t = '' + this.mCharacteristic + '.' + this.stripTrailingZeroes(this.mMantissa);
	}
	
	return t;	
},

getMoney: function()
{
        var t = '';
        if (this.mMantissa == 0)  
        {
                var t = '' + this.mCharacteristic;
        }
        else
        {
                var t = '' + this.mCharacteristic + '.' + this.stripTrailingZeroes(this.mMantissa);
        }

        return t;
},


/*
getMoney: function()
{
	var t = '' + this.mCharacteristic + '.' + this.stripTrailingZeroes(this.mMantissa);
	return t;	
var t = '';
	if (this.mMantissa < 10)
	{
		APPLICATION.log('if 1');
		t = '' + this.mCharacteristic + '.0' + this.mMantissa;
	}
	if (this.mMantissa % 10 == 0 && this.mMantiss < 100)
	{
		APPLICATION.log('if 2');
		t = '' + this.mCharacteristic + '.' + this.mMantissa + '0';
	}
	else
	{
		APPLICATION.log('if 3');
		t = '' + this.mCharacteristic + '.' + this.mMantissa;
	}
	return t;	
},
*/

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
},

divide: function(decimal)
{

},

stripTrailingZeroes: function(n)
{
	APPLICATION.log('n:' + n);
	var noZeroes = n.toString() 
	APPLICATION.log('noZeroes:' + noZeroes);
	return noZeroes;
/*
	APPLICATION.log('s1:' + s);
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
		APPLICATION.log('s2:' + s);
		APPLICATION.log( 'le:' + s[ parseInt(s.length - i) ] ) ;
                if ( s[parseInt(s.length - i)] == '0')     //delete
                {
                        s = s.substring(0, s.length - 1);
			APPLICATION.log('s3:' + s);
                }
                else
                {
                        encounteredNonZero = true;
                }
                i++;
        }
	APPLICATION.log('s4:' + s);
        return s;
*/
}


});
