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
},

getString: function()
{
	return this.mDecimal;
},

getMoney: function()
{
	var d = parseFloat(this.mDecimal); 
	var fix = d.toFixed(2);
	return fix;
},

add: function(decimal)
{
	APPLICATION.log('a:' + this.mDecimal);
	APPLICATION.log('b:' + decimal.mDecimal);
	var a = parseFloat(this.mDecimal);
	var b = parseFloat(decimal.mDecimal);
	var sum = parseFloat(a + b);	
	APPLICATION.log('sum:' + sum);
	var d = new Decimal(sum);
	return d;
},

subtract: function(decimal)
{
	var difference = parseFloat(this.mDecimal - decimal.mDecimal);	
	var d = new Decimal(difference);
	return d;
},
	
multiply: function(decimal)
{
	var rawProduct = parseInt(this.mNumber * decimal.mNumber);
	
	//now use powers of 10 to move decimal place
	var decimalPlaces = parseInt(this.mDecimalPlaces + decimal.mDecimalPlaces);
	
	if (decimalPlaces > 0)
	{
		var power = Math.pow(10,decimalPlaces);
		var decimalProduct = parseFloat(rawProduct / power);
		var decimalAnswerProduct = new Decimal(decimalProduct);	
		return decimalAnswerProduct;
	}
	else
	{
		return rawProduct;
	}
},

divide: function(decimal)
{

}


});
