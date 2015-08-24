var TimesTablesAddSubtractWithinFiveSheet = new Class(
{
Extends: TimesTablesSheet,

initialize: function(game)
{
	this.parent(game);
 	for (i = 1; i < 43; i++)
        {
                var a = 'k.oa.a.5_';
                var b = '' + i;
                var c = '' + a + b;
                this.mIDArray.push('' + c);
        }
},

pickItem: function()
{
	var length = this.mIDArray.length;
        while (APPLICATION.mQuestionTypeLast == APPLICATION.mQuestionTypeCurrent)
        {
                var r = Math.floor(Math.random()*length);
                APPLICATION.mQuestionTypeCurrent = this.mIDArray[r];
        }
}
});
