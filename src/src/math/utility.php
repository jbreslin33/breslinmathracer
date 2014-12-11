var Utility = new Class(
{

initialize: function()
{
      
},

stripTrailingZeroes: function(s)
{
        s = '' + s;
        var i = 0;
        var originalLength = s.length;
        var encounteredNonZero = false;
        var strippedPart = '';
        while (encounteredNonZero == false || i < originalLength )
        {
                if ( s[parseInt(s.length - i)] == 0 || s[parseInt(s.length - i)] == '.' )     //delete
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
