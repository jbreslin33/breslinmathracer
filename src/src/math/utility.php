var Utility = new Class(
{

initialize: function()
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
	APPLICATION.log('s:' + s);
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
