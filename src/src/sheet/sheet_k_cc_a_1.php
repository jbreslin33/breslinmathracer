/*
 A Sheet should contain items(questions) it should facilitate randomizing, ordering items. it should deal with advancing levels....and other application related things.   
*/
var Sheet_k_cc_a_1 = new Class(
{
Extends: Sheet,
        initialize: function(game)
        {
		this.parent(game);

		APPLICATION.mHud.setScoreNeeded(5);

		this.createItems(); 
		this.createShapes();
        },
	
	createItems: function()
	{
		this.parent();

		this.addItem(new k_cc_a_1_type_1(this));     
		this.addItem(new k_cc_a_1_type_1(this));     
		this.addItem(new k_cc_a_1_type_1(this));     
		this.addItem(new k_cc_a_1_type_1(this));     
		this.addItem(new k_cc_a_1_type_1(this));     
		this.addItem(new k_cc_a_1_type_1(this));     
	}
});
