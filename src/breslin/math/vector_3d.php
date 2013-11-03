var Vector3D = new Class(
{
	
initialize: function()
{
	this.x = 0;
	this.y = 0;
	this.z = 0;
},

log: function(msg)
{
        setTimeout(function()
        {
                throw new Error(msg);
        }, 0);
},

printValues: function()
{
	this.log('xx: ' + this.x + 'yy: ' + this.y + 'zz: ' + this.z); 	
},

returnValues: function()
{
	return 'xx: ' + this.x + 'yy: ' + this.y + 'zz: ' + this.z; 	
},

length: function()
{
        return Math.sqrt(this.x*this.x + this.z*this.z);
},

isZero: function()
{
        if (this.x == 0.0 && this.y == 0.0 && this.z == 0.0)
        {
                return true;
        }
        else
        {
                return false;
        }
	
},

zero: function()
{
	this.x = 0
	this.y = 0
	this.z = 0
},

normalise: function()
{
	len = this.length();
	if (len == 0)
	{
		return;
	}
	this.x /= len;
	this.y = 0;
	this.z /= len;
},

parseFloat: function()
{
	this.x = parseFloat(this.x);
	this.y = parseFloat(this.y);
	this.z = parseFloat(this.z);
},

//multiply this vector by a scalar
multiply: function(num)
{
	this.x = parseFloat(this.x) * num;
	this.y = parseFloat(this.y) * num;
	this.z = parseFloat(this.z) * num;
},

add: function(v)
{
	x = parseFloat(this.x) + parseFloat(v.x);
	y = 0;
	z = parseFloat(this.z) + parseFloat(v.z);


	this.x = parseFloat(x);
	this.z = parseFloat(z);
},

subtract: function(vectorToSubtract)
{
        this.x = this.x - vectorToSubtract.x;
        this.y = this.y - vectorToSubtract.y;
        this.z = this.z - vectorToSubtract.z;
},

copyValuesFrom: function(copyFrom)
{
	this.x = copyFrom.x;
	this.y = copyFrom.y;
	this.z = copyFrom.z;
},

dot: function(v2)
{
	d = this.x * v2.x + this.y * v2.y + this.z * v2.z;
}

});
