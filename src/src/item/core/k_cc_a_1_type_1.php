var k_cc_a_1_type_1 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
		this.parent(sheet);
		this.mStandard = 'k.cc.a.1';
		this.mType = 1;

		r = Math.floor((Math.random()*2));
		if (r == 0)
		{
			this.setQuestion('What comes after 0?');
			this.setAnswer(1,0);
		}
		if (r == 1)
		{
			this.setQuestion('What comes after 1?');
			this.setAnswer(2,0);
		}
	},

	createShapes: function()
        {
		this.parent();
        }
});
