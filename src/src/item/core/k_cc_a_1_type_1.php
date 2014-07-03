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
			this.mButtonA.setAnswer('0');
			this.mButtonB.setAnswer('1');
			this.mButtonC.setAnswer('2');
		}
		if (r == 1)
		{
			this.setQuestion('What comes after 1?');
			this.setAnswer(2,0);
			this.mButtonA.setAnswer('1');
			this.mButtonB.setAnswer('2');
			this.mButtonC.setAnswer('3');
		}
	},

	createShapes: function()
        {
		this.parent();
        }
});
