var Decimal = new Class(
{

initialize: function(decimal)
{

	//actual number
	this.mDecimal = parseFloat(decimal);
	this.mNumber  = parseFloat(decimal);
	this.mDecimal = this.mDecimal.toString();
	this.mNumber  = this.mNumber.toString();

	//decimal places
	this.mDecimalPlaces = 0;
	this.mDecimalPlace = 0;

	//whole and fractional parts
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
	var a = parseFloat(this.mDecimal);
	var b = parseFloat(decimal.mDecimal);
	var sum = parseFloat(a + b);	
	
	//lets get places for tofixed
	var a_fix = parseFloat(this.mDecimalPlaces); 
	var b_fix = parseFloat(decimal.mDecimalPlaces); 
	var fix = 0;
	if (a_fix > b_fix && a_fix != 0)
	{
		fix = parseInt(a_fix);
	}
	if (a_fix < b_fix && b_fix != 0)
	{
		fix = parseInt(b_fix);
	}
	if (a_fix == b_fix && a_fix != 0 && b_fix != 0)
	{
		fix = parseInt(a_fix);
	}

	var  fixedNumber = sum.toFixed(fix);	

	var d = new Decimal(fixedNumber);
	return d;
},

subtract: function(decimal)
{
	var a = parseFloat(this.mDecimal);
	var b = parseFloat(decimal.mDecimal);
	var sum = parseFloat(a - b);	
	var d = new Decimal(sum);
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
