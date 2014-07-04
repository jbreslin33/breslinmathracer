var k_cc_a_1_type_1 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
		this.parent(sheet);
		this.mStandard = 'k.cc.a.1';
		this.mType = 1;

		//possible answers
		a = APPLICATION.mLevel;	
		b = 0;
		c = 0;
		
		this.setQuestion('What comes after ' + parseInt(a-1) + '?');
		this.setAnswer(a,0);
	
		//make sure they are not same or negative	
		while (a < 0 || b < 0 || c < 0 || a == b || a == c || b == c)
		{
			b = Math.floor((Math.random()*7)-3);
			c = Math.floor((Math.random()*7)-3);
		}
		
		this.mButtonA.setAnswer(a);
		this.mButtonB.setAnswer(b);
		this.mButtonC.setAnswer(c);
		this.shuffle(10);
	}
});
