var Utility = new Class(
{

initialize: function()
{
      
},

gcf: function(a, b)
{ 
	return ( b == 0 ) ? (a):( this.gcf(b, a % b) ); 
},

lcm: function(a, b)
{ 
	return ( a / this.gcf(a,b) ) * b; 
},

lcm_nums: function(ar)
{
	if (ar.length > 1)
	{
		ar.push( this.lcm( ar.shift() , ar.shift() ) );
		return this.lcm_nums( ar );
	}
	else
	{
		return ar[0];
	}
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
